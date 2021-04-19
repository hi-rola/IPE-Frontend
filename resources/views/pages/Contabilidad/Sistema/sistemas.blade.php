{{-- Extends layout --}}
@extends('layout.base._layout-contenido-contabilidad')
{{-- Content --}}
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--Inicio: Container-->
        <div class="container">
            <!--Inicio: Row-->
            <div class="row">
                <div class="col-lg-12 col-xxl-12">
                    <!--Inicio Card-->
                    <div class="card card-custom">
                        <div class="mt-4" style="padding-left: 30px">
                            <a href="{{ route('homeContabilidad') }}">
                                <i class="far fa-arrow-alt-circle-left icon-lg" data-toggle="tooltip"
                                    data-placement="bottom" title="Atrás"></i>
                            </a>
                        </div>
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">Sistemas</h3>
                            </div>
                            <div class="card-toolbar">
                                <button class="btn btn-primary font-weight-bolder" onclick="mostrarModalRegistrarSistema()">
                                    <span class="navi-icon">
                                        <i class="fas fa-plus-circle icon-lg"></i>
                                    </span>Nuevo
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin: Search Form-->
                            <!--begin::Search Form-->
                            <div class="mb-7">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="row align-items-center">
                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="Buscar ..."
                                                        id="kt_datatable_search_query" />
                                                    <span>
                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--begin: Datatable-->
                            <!--begin: Selected Rows Group Action Form-->
                            <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                            <!--end: Datatable-->
                        </div>
                    </div>
                    <!--Fin Card-->
                </div>
            </div>
            <!--Fin Row-->
            <!--  Modal registrar -->
            <div class="modal fade" id="modalRegistrar" tabindex="-1" role="dialog" aria-labelledby="modalRegistrar"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h5 class="modal-title" id="exampleModalLabel">Registrar nuevo sistema
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="mt-5" role="alert">
                            <p id="mensaje" class="text-center text-danger"></p>
                        </div>
                        <div class="modal-body">
                            <form id="formRegistrar">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Nombre</label>
                                            <input type="text" class="form-control" id="nombre">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Elaboró</label>
                                            <input type="text" class="form-control" id="elaboro">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Revisó</label>
                                            <input type="text" class="form-control" id="reviso">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Autorizó</label>
                                            <input type="text" class="form-control" id="autorizo">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Fecha</label>
                                                <div class="input-group date">
                                                    <input type="text" class="form-control fecha" id="datepicker"
                                                        readonly="readonly" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="la la-calendar-check-o"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Vobo</label>
                                            <input type="text" class="form-control" id="vobo">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <div class="row col-12 d-flex justify-content-center">
                                <div class="col-3">
                                    <button type="button" class="btn btn-secondary col-12"
                                        data-dismiss="modal">Cancelar</button>
                                </div>
                                <div class="col-3">
                                    <button type="button" class="btn btn-primary col-12" onclick="registrarSistema()"
                                        id="botonRegistrar">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin modal registrar-->
            <!--  Modal editar -->
            <div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aria-labelledby="modalActualizar"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h5 class="modal-title" id="exampleModalLabel">Actualizar información
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="mt-5" role="alert">
                            <p id="mensaje" class="text-center text-danger"></p>
                        </div>
                        <div class="modal-body">
                            <form id="formActualizar">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Sistema</label>
                                            <input type="text" class="form-control" id="sistemaActualizar" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Nombre</label>
                                            <input type="text" class="form-control" id="nombreActualizar">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Elaboró</label>
                                            <input type="text" class="form-control" id="elaboroActualizar">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Autorizó</label>
                                            <input type="text" class="form-control" id="autorizoActualizar">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Fecha</label>
                                                <div class="input-group date">
                                                    <input type="text" class="form-control fechaActualizar" id="datepickerActualizar"
                                                        readonly="readonly" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="la la-calendar-check-o"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Vobo</label>
                                            <input type="text" class="form-control" id="voboActualizar">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Revisó</label>
                                            <input type="text" class="form-control" id="revisoActualizar">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <div class="row col-12 d-flex justify-content-center">
                                <div class="col-3">
                                    <button type="button" class="btn btn-secondary col-12"
                                        data-dismiss="modal">Cancelar</button>
                                </div>
                                <div class="col-3">
                                    <button type="button" class="btn btn-primary col-12" onclick="actualizarInformacion()"
                                        id="botonRegistrar">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin modal editar-->
        </div>
        <!--Fin Container-->
    </div>
@endsection
{{-- Fin Content --}}

{{-- Scripts --}}
@push('scripts')
    <script>
        var HOST_URL = "http://omnius.com.mx/ipe/ws/Sistemas.php";
    </script>

    <!-- Librería para datepicker-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js" async> </script>
    
    <!-- Archivo js sistemas-->
    <script src="../js/Contabilidad/Sistema/Sistemas.js"></script>
    <script src="../js/Contabilidad/Sistema/datepicker.js"></script>
@endpush