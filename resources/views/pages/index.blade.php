{{-- Extends layout --}}
@extends('layout.base._layout-v2')
{{-- Content --}}
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-12 col-xxl-12">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">Usuarios</h3>
                            </div>
                            <div class="card-toolbar">
                                <!--begin::Dropdown-->
                                {{-- <div class="dropdown dropdown-inline mr-2">
                                    <button onclick="exportarExcel()" type="button"
                                        class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                        aria-expanded="false">
                                        <span class="navi-icon">
                                            <i class="la la-file-excel-o"></i>
                                        </span>
                                        Exportar Excel</button>
                                </div> --}}
                                <!--end::Dropdown-->
                                <!--begin::Button-->
                                {{-- onclick="imprimirVariasFilas2()" abajo --}}
                                <button  onclick="llenarTabla()" class="btn btn-primary font-weight-bolder">
                                    <span class="navi-icon">
                                        <i class="la la-file-pdf-o"></i>
                                </span>Exportar PDF</button>
                                <!--end::Button-->
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin: Search Form-->
                            <!--begin::Search Form-->
                            <div class="mb-7">
                                <div class="row align-items-center">
                                    <div class="col-lg-9 col-xl-8">
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
                                                    <label class="w-100 mb-0 d-none d-md-block">Rol
                                                        usuario:</label>
                                                    <select class="form-control" id="kt_datatable_search_rol">
                                                        <option value="">Todos</option>
                                                        <option value="Dirección">Dirección</option>
                                                        <option value="Facturación">Facturación</option>
                                                        <option value="Tesorería">Tesorería</option>
                                                        <option value="Superadmin">Superadmin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 mb-5 collapse" id="kt_datatable_group_action_form">
                                <div class="d-flex align-items-center">
                                    <div class="font-weight-bold text-danger mr-3">Filas selecciondas :
                                    <span id="kt_datatable_selected_records">0</span></div>
                                    <button class="btn btn-sm btn-danger mr-2" type="button" id="kt_datatable_delete_all" onclick="items()">Eliminar filas seleccionadas</button>
                                    <button class="btn btn-sm btn-info mr-2" type="button" id="kt_datatable_delete_all" onclick="exportarPDFFilasSeleccionadas()">Expotar pdf filas seleccionadas</button>
                                    <button class="btn btn-warning font-weight-bold" type="button" id="kt_datatable_uncheck_all">Limppiar filas celdas</button>
                                </div>
                            </div>
                            <!--begin: Datatable-->
                            <!--begin: Selected Rows Group Action Form-->
                            <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                            <!--end: Datatable-->
                            <!-- Tabla mostrar todos usuario en PDF -->
                            <div style="display: none">
                                <table id="tableUsuario">
                                    <thead>
                                        <tr>
                                            <th class="thh" data-f-bold="true">ID</th>
                                            <th class="thh" data-f-bold="true">NOMBRE</th>
                                            <th class="thh" data-f-bold="false">USER</th>
                                            <th class="thh" data-f-bold="true">ROL</th>
                                        </tr>
                                    </thead>
                                    <tbody id="datos-usuario"></tbody>
                                </table>
                            </div>
                            <template id="template-datos">
                                <tr>
                                    <th scope="row" class="thh" id="id-user"></th>
                                    <td class="tdd"></td>
                                    <td class="tdd"></td>
                                    <td class="tdd"></td>
                                </tr>
                            </template>
                            <!-- End tabla -->
                            <!-- Tabla imprimir fila usuario en PDF -->
                            <div style="display: none">
                                <table id="tableUsuarioPorFila">
                                    <thead>
                                        <tr>
                                            <th class="thh" data-f-bold="true">ID</th>
                                            <th class="thh" data-f-bold="true">NOMBRE</th>
                                            <th class="thh" data-f-bold="false">USER</th>
                                            <th class="thh" data-f-bold="true">ROL</th>
                                        </tr>
                                    </thead>
                                    <tbody id="datos-usuario-fila"></tbody>
                                </table>
                            </div>
                            <template id="template-datos-fila">
                                <tr>
                                    <th scope="row" class="thh" id="id-user"></th>
                                    <td class="tdd"></td>
                                    <td class="tdd"></td>
                                    <td class="tdd"></td>
                                </tr>
                            </template>
                            <!-- End tabla -->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->
            <!-- Begin Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h5 class="modal-title" id="exampleModalLabel">Actualizar información usuario
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" clas="kjhkjsad">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Usuario:</label>
                                    <input class="form-control" id="usuario">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Contraseña:</label>
                                    <input class="form-control" id="contrasena">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Rol:</label>
                                    <input class="form-control" id="rol">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Actualizar información</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
        </div>
        <!--end::Container-->
    </div>
@endsection
{{-- End Content --}}

{{-- Scripts --}}
@push('scripts')
    <script>
        var HOST_URL = "https://mastercapital.app/ws/call.php?service=getAllUsuario&idContexto=1901";
    </script>
    <script src="../plugins/global/plugins.bundle.js"></script>
    <script src="../plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="../js/scripts.bundle.js"></script>
    <script src="../js/pages/crud/ktdatatable/base/data-json.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.8/xlsx.core.min.js"></script>
    <script src="../js/tableexport.js"></script>
    <script src="../js/tableToExcel.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.0/jQuery.print.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.js"></script>
@endpush