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
                                <h3 class="card-label">Grupos</h3>
                            </div>
                            <div class="card-toolbar">
                                <button class="btn btn-primary font-weight-bolder" onclick="mostrarModalRegistrarGrupo()">
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
                            <h5 class="modal-title" id="exampleModalLabel">Registrar nuevo grupo
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
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Nombre</label>
                                            <input type="text" class="form-control" id="nombre">
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
                                    <button type="button" class="btn btn-primary col-12" onclick="registrarGrupo()"
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
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label font-weight-bold">Id grupo</label>
                                            <input type="text" class="form-control" id="idGrupoActualizar" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Nombre</label>
                                            <input type="text" class="form-control" id="nombreActualizar">
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
    <script> var HOST_URL = "http://omnius.com.mx/ipe/ws/Grupos.php"; </script>

    <!-- Archivo js principal: grupos para ER-->
    <script src="../js/Contabilidad/Sistema/grupos.js"></script>
@endpush