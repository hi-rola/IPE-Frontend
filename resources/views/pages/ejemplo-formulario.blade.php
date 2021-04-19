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
                    <div class="card card-custom card-stretch gutter-b">
                        <div class="card-header border-0 bg-gray-600 justify-content-center">
                            <h3 class="card-title font-weight-bolder text-white">Ejemplo formulario</h3>
                        </div>
                        <!--begin::Body-->
                        {{-- <form class="form" action="{{ route('registrar-usuario') }}"
                            method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Nombre complero</label>
                                        <input type="text" class="form-control" placeholder="José Rolando García Alba"
                                            name="nombre" value="{{ old('nombre') }}" />
                                        @error('nombre')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Correo</label>
                                        <input type="text" class="form-control" placeholder="rolandog@gmail.com"
                                            name="correo" value="{{ old('correo') }}" />
                                        @error('correo')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Usuario</label>
                                        <input type="text" class="form-control" name="usuario"
                                            value="{{ old('usuario') }}" />
                                        @error('usuario')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Número de celular</label>
                                        <input type="number" class="form-control" name="numeroCelular"
                                            value="{{ old('numeroCelular') }}" />
                                        @error('numeroCelular')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Calle</label>
                                        <input type="text" class="form-control" placeholder="Oriente #18" name="direccion"
                                            value="{{ old('direccion') }}" />
                                        @error('direccion')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Colonia</label>
                                        <input type="text" class="form-control" placeholder="San bruno" name="colonia"
                                            placeholder="San bruno" value="{{ old('colonia') }}" />
                                        @error('colonia')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-6 d-flex justify-content-center py-2">
                                        <button type="submit" class="btn btn-primary col-sm-12 col-lg-5">Registrar</button>
                                    </div>
                                    <div class="col-sm-12 col-lg-6 d-flex justify-content-center py-2">
                                        <button type="reset" class="btn btn-secondary col-sm-12 col-lg-5">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </form> --}}


                        <table id="tabla">
                            <thead>
                                <tr>
                                    <th>Lenguaje</th>
                                    <th>Sitio web</th>
                                    <th>Algunos usos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PHP</td>
                                    <td>php.net</td>
                                    <td>Aplicaciones web</td>
                                </tr>
                                <tr>
                                    <td>Python</td>
                                    <td>python.org</td>
                                    <td>Aplicaciones web y de escritorio. Machine learning</td>
                                </tr>
                                <tr>
                                    <td>Go</td>
                                    <td>golang.org</td>
                                    <td>Aplicaciones web y de escritorio</td>
                                </tr>
                            </tbody>
                        </table>
                        <button id="btnExportar">Export</button>


                        <!--end::Body-->
                    </div>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
@endsection
{{-- End Content --}}

@push('scripts')

<script src="./xlsx.full.min.js"></script>
<script src="./FileSaver.min.js"></script>
<script src="tableexport.min.js"></script>
<script src="https://unpkg.com/tableexport@5.2.0/dist/js/tableexport.js"></script>
<script>
    const $btnExportar = document.querySelector("#btnExportar"),
        $tabla = document.querySelector("#tabla");

    $btnExportar.addEventListener("click", function() {
        // Aquí exportar la tabla
        let tableExport = new TableExport($tabla, {
            exportButtons: false, // No queremos botones
            filename: "Mi tabla de Excel", //Nombre del archivo de Excel
            sheetname: "Mi tabla de Excel", //Título de la hoja
        });
        let datos = tableExport.getExportData();
        let preferenciasDocumento = datos.tabla.xlsx;
        tableExport.export2file(preferenciasDocumento.data,
            preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento
            .fileExtension,
            preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
    });
</script>
@endpush

