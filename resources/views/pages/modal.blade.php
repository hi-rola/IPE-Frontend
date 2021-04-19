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
                                        <h3 class="card-title font-weight-bolder text-dark">Ejemplo modal</h3>
                                    </div>
                                    <!--begin::Body-->
                                    <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-3 col-sm-12"></label>
                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                            <a href="" class="btn btn-light-primary font-weight-bold"
                                                data-toggle="modal" data-target="#kt_maxlength_modal">
                                                Mostrar modal
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Inicio modal -->
                                    <div class="modal fade" id="kt_maxlength_modal" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ejemplo</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                    </button>
                                                </div>
                                                <form class="form form--fit">
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-form-label text-right col-lg-3 col-sm-12">Nombre</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <input class="form-control" placeholder="" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-form-label text-right col-lg-3 col-sm-12">Experiencia
                                                                </label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <textarea class="form-control" id="kt_maxlength_5_modal"
                                                                    maxlength="200" placeholder="" rows="6"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary mr-2"
                                                            data-dismiss="modal">Guardar</button>
                                                        <button type="button" class="btn btn-secondary">Cancelar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin modal -->
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
	<script src="../js/pages/crud/forms/widgets/bootstrap-maxlength.js"></script>
</div>
<!--end::Main-->