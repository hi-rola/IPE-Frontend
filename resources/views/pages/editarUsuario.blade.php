<!--begin::Main-->
<!--[html-partial:include:{"file":"partials/_header-mobile.html"}]/-->
@extends('layout.def-v2')

@include('layout.partials._header2-mobile', ['class' => 'card-stretch gutter-b'])
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            @include('layout.partials._header2', ['class' => 'card-stretch gutter-b'])
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-lg-12 col-xxl-12">
                                <div class="card card-custom card-stretch gutter-b">
                                    <div class="card-header border-0">
                                        <h3 class="card-title font-weight-bolder text-dark">Actualizar información usuario</h3>
                                    </div>
                                    <!--begin::Body-->
                                    <form class="form">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label>Nombre completo</label>
                                                <input type="email" class="form-control" value="{{$datosUser['nombre']}}"/>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>Usuario</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="{{$datosUser['user']}}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6 mt-5">
                                                    <label>Contraseña</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="{{$datosUser['contrasena']}}"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mt-5">
                                                    <label>Rol</label>
                                                    <div class="input-group">
                                                        <select class="form-control form-control">
                                                            @foreach ($datos as $lista)
                                                                <option>{{$lista['nombre']}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-6 d-flex justify-content-center py-2">
                                                    <button type="reset" class="btn btn-primary col-sm-12 col-lg-4">Guardar</button>
                                                </div>
                                                <div class="col-sm-12 col-lg-6 d-flex justify-content-center py-2">
                                                    <button type="reset" class="btn btn-dark col-sm-12 col-lg-4">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Body-->
                                </div>
                            </div>
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                </div>
            </div>
            <!--end::Content-->
            <!--[html-partial:include:{"file":"partials/_footer.html"}]/-->
            @include('layout.partials._footer2', ['class' => 'card-stretch gutter-b'])
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->