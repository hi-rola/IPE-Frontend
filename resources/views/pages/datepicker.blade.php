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
                                        <h3 class="card-title font-weight-bolder text-dark">Ejemplo datepicker</h3>
                                    </div>
                                    <!--begin::Body-->

                                    <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-3 col-sm-12">Selecciona una
                                            fecha</label>
                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                            <div class="input-group date">
                                                <input type="text" class="form-control" id="datepicker"
                                                    readonly="readonly" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar-check-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <button onclick="fecha()" class="btn btn-primary">fecha</button>
                                    </div>
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
    {{-- <script src="../js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script>
    <script src="../js/pages/crud/forms/widgets/datepicker-es.js"></script> --}}

    {{-- Librerias para calendario en español --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js"> </script>
    <script>
        var arrows;
        if (KTUtil.isRTL()) {
            arrows = {
                leftArrow: '<i class="la la-angle-right"></i>',
                rightArrow: '<i class="la la-angle-left"></i>'
            }
        } else {
            arrows = {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }

        $('#datepicker').datepicker({
            rtl: KTUtil.isRTL(),
            'language': 'es',
            todayHighlight: true,
            orientation: "bottom left",
            templates: arrows
        });

        // ver como formatear la fecha dateformat 


    </script>
</div>
<!--end::Main-->
