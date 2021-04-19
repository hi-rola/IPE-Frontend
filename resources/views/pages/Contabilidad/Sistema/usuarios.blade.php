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
                                <h3 class="card-label">Usuarios</h3>
                            </div>
                            <div class="card-toolbar">
                                <button class="btn btn-primary font-weight-bolder" onclick="mostrarModalRegistrarUsuario()">
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
                                            <div class="col-md-5 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">Sistema:</label>
                                                    <select class="form-control" id="kt_datatable_search_sistema">
                                                        <option value="">Todos</option>
                                                        @foreach ($listaSistema as $sistema)
                                                            <option value="{{ $sistema['valor'] }}">
                                                                {{ $sistema['valor'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center mt-5">
                                    <div class="col-lg-12">
                                        <div class="row align-items-center">
                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">Tipo contratación:</label>
                                                    <select class="form-control" id="kt_datatable_search_tipo_Contratacion">
                                                        <option value="">Todos</option>
                                                        @foreach ($listaTipoContratacion as $tipoContratacion)
                                                            <option value="{{ $tipoContratacion['idCatalogo'] }}">
                                                                {{ $tipoContratacion['nombre'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-5 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">Grupo:</label>
                                                    <select class="form-control" id="kt_datatable_search_grupo">
                                                        <option value="">Todos</option>
                                                        @foreach ($listaGrupo as $grupo)
                                                            <option value="{{ $grupo['valor'] }}">
                                                                {{ $grupo['valor'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--begin: Datatable-->
                            <hr>
                            <!--begin: Selected Rows Group Action Form-->
                            <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                            <!--end: Datatable-->
                        </div>
                    </div>
                    <!--Fin Card-->
                </div>
            </div>
            <!--Fin Row-->
            <!--  Modal egistrar -->
            <div class="modal fade" id="modalRegistrar" tabindex="-1" role="dialog" aria-labelledby="modalRegistrar"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h5 class="modal-title" id="exampleModalLabel">Registrar nuevo usuario
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
                                    {{-- <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label font-weight-bold">ID
                                                usuario</label>
                                            <input type="text" class="form-control" id="idUsuario">
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Nombre</label>
                                            <input type="text" class="form-control" id="nombre">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label font-weight-bold">Login
                                                Name</label>
                                            <input type="text" class="form-control" id="loginName">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label font-weight-bold">Número
                                                personal</label>
                                            <input type="text" class="form-control" id="numeroPersonal">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Nivel</label>
                                            <input type="text" class="form-control" id="nivel">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label font-weight-bold">Tipo
                                                contratación</label>
                                            <select class="form-control" id="tipoContratacion">
                                                @foreach ($listaTipoContratacion as $tipoContratacion)
                                                    <option value="{{ $tipoContratacion['idCatalogo'] }}">
                                                        {{ $tipoContratacion['nombre'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Grupo</label>
                                            <select class="form-control" id="tipoGrupo">
                                                @foreach ($listaGrupo as $grupo)
                                                    <option value="{{ $grupo['id'] }}">
                                                        {{ $grupo['valor'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Sistema</label>
                                            <select class="form-control" id="tipoSistema">
                                                @foreach ($listaSistema as $sistema)
                                                    <option value="{{ $sistema['id'] }}">
                                                        {{ $sistema['valor'] }}</option>
                                                @endforeach
                                            </select>
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
                                    <button type="button" class="btn btn-primary col-12" onclick="registrarUsuario()"
                                        id="botonRegistrar">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin modal registrar-->
            <!--  Modal editar información-->
            <div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aria-labelledby="modalActualizar"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header  d-flex justify-content-center">
                            <h5 class="modal-title" id="exampleModalLabel">Actualizar información usuario
                            </h5>
                        </div>
                        <div class="mt-5" role="alert">
                            <p id="mensaje-actualizar" class="text-center text-danger"></p>
                        </div>
                        <div class="modal-body">
                            <form id="formActualizar">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label font-weight-bold">ID
                                                usuario</label>
                                            <input type="text" class="form-control" id="idUsuarioActualizar" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Nombre</label>
                                            <input type="text" class="form-control" id="nombreActualizar">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label font-weight-bold">Login
                                                Name</label>
                                            <input type="text" class="form-control" id="loginNameActualizar">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label font-weight-bold">Número
                                                personal</label>
                                            <input type="text" class="form-control" id="numeroPersonalActualizar">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Nivel</label>
                                            <input type="text" class="form-control" id="nivelActualizar">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label font-weight-bold">Tipo
                                                contratación</label>
                                            <select class="form-control" id="tipoContratacionActualizar">
                                                @foreach ($listaTipoContratacion as $tipoContratacion)
                                                    <option value="{{ $tipoContratacion['idCatalogo'] }}">
                                                        {{ $tipoContratacion['nombre'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Grupo</label>
                                            <select class="form-control" id="tipoGrupoActualizar">
                                                @foreach ($listaGrupo as $grupo)
                                                    <option value="{{ $grupo['id'] }}">
                                                        {{ $grupo['valor'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label font-weight-bold">Sistema</label>
                                            <select class="form-control" id="tipoSistemaActualizar">
                                                @foreach ($listaSistema as $sistema)
                                                    <option value="{{ $sistema['id'] }}">
                                                        {{ $sistema['valor'] }}</option>
                                                @endforeach
                                            </select>
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
                                    <button type="button" class="btn btn-primary col-12"
                                        onclick="actualizarInformacion()">Actualizar</button>
                                </div>
                            </div>
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
        var HOST_URL = "http://omnius.com.mx/ipe/ws/Usuarios.php";
    </script>

    <!-- Archivo js usuarios-->
    <script src="../js/Contabilidad/Sistema/usuarios.js"></script>
@endpush