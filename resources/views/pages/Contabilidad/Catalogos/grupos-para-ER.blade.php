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
                                <i class="far fa-arrow-alt-circle-left icon-lg"  data-toggle="tooltip" data-placement="bottom" title="Atrás"></i>
                            </a>
                        </div>
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">Grupos para E.R.</h3>
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
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 my-2 my-md-0">
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
            <!--  Modal egistrar nuevo grupo -->
            <div class="modal fade" id="modalRegistrar" tabindex="-1" role="dialog" aria-labelledby="modalRegistrar"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
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
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Grupo</label>
                                    <input type="text" class="form-control" id="grupo" required>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Concepto</label>
                                    <input class="form-control" id="concepto" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" onclick="registrarGrupo()" class="btn btn-primary"
                                id="botonRegistrar">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin modal registrar-->
            <!--  Modal editar información-->
            <div class="modal fade" tabindex="-1" role="dialog" id="actualizarModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h5 class="modal-title" id="exampleModalLabel">Actualizar información
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="mt-5" role="alert">
                            <p id="mensaje-actualizar" class="text-center text-danger"></p>
                        </div>
                        <div class="modal-body">
                            <form id="formActualizar">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Grupo</label>
                                    <input type="text" class="form-control" id="grupoActualizar" disabled="disabled">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Concepto</label>
                                    <input type="text" class="form-control" id="conceptoActualizar">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" onclick="actualizarInformacion()" class="btn btn-primary"
                                id="botonRegistrar">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin modal información-->
        </div>
        <!--Fin Container-->
    </div>
@endsection
{{-- Fin Content --}}

{{-- Scripts --}}
@push('scripts')
    <script>
        var HOST_URL = "http://omnius.com.mx/ipe/ws/GruContabER.php";
    </script>

    <!-- Archivo js principal: grupos para ER-->
    <script src="../js/Contabilidad/Catalogos/grupos-para-ER.js"></script>
@endpush
