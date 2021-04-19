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
                                        <h3 class="card-title font-weight-bolder text-dark">Ejemplo subir imagen</h3>
                                    </div>
                                    <!--begin::Body-->
                                    <form>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label text-right"></label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="image-input image-input-empty image-input-outline"
                                                        id="kt_image_5"
                                                        style="background-image: url(../media/users/blank.png)">
                                                        <div class="image-input-wrapper"></div>
                                                        <label
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="change" data-toggle="tooltip" title=""
                                                            data-original-title="Cambiar avatar">
                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                            <input type="file" name="profile_avatar"
                                                                accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="profile_avatar_remove" />
                                                        </label>
                                                        <span
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="cancel" data-toggle="tooltip"
                                                            title="Quitar avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
                                                        <span
                                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                            data-action="remove" data-toggle="tooltip"
                                                            title="Quitar avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
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
</div>
<script src="../js/pages/crud/file-upload/drop-image.js"></script>
<!--end::Main-->