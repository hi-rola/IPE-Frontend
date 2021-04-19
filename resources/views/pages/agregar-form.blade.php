<link rel="icon" href="media/logos/logo-ipe.jpg" />
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
                                        <h3 class="card-title font-weight-bolder text-dark">Ejemplo formulario</h3>
                                    </div>
                                    <!--begin::Body-->
                                    <form class="form">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label text-right">Nombre completo</label>
                                                <div class="col-lg-4">
                                                    <input type="email" class="form-control"/>
                                                </div>
                                            </div>
                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label text-right">Contacto</label>
                                                    <div data-repeater-list="" class="col-lg-10">
                                                        <div data-repeater-item="" class="form-group row d-flex align-items-center">
                                                            <div class="col-md-3">
                                                                <label>Numero de teléfono:</label>
                                                                <input type="email" class="form-control"
                                                                    placeholder="2282690460" />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <a href="javascript:;" data-repeater-delete=""
                                                                    class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                    <i class="la la-trash-o"></i>Eliminar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label text-right"></label>
                                                    <div class="col-lg-4">
                                                        <a href="javascript:;" data-repeater-create=""
                                                            class="btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>Añadir</a>
                                                    </div>
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
    <script src="../js/pages/crud/forms/widgets/form-repeater.js"></script>
</div>
<!--end::Main-->