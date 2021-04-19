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
                            <div class="col-lg-4">
                                <div class="card card-custom overlay mb-8">
                                    <div class="card-body p-0">
                                        <div class="overlay-wrapper">
                                            <img src="../media/stock-600x400/ejemplo1.png" alt=""
                                                class="w-100 rounded" />
                                        </div>
                                        <div class="overlay-layer">
                                            <a href="#"
                                                class="btn font-weight-bold btn-primary btn-shadow">Actividades</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-custom overlay mb-8">
                                    <div class="card-body p-0">
                                        <div class="overlay-wrapper">
                                            <img src="../media/stock-600x400/contabilidad1.png" alt=""
                                                class="w-100 rounded" />
                                        </div>
                                        <div class="overlay-layer m-5 rounded align-items-end justify-content-start">
                                            <div class="d-flex flex-column align-items-start mb-5 ml-5">
                                                <a href="#"
                                                    class="font-size-h4 font-weight-bolder text-white text-hover-primary">Contabilidad</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <!--begin::Card-->
                                <div class="card card-custom overlay mb-5">
                                    <div class="card-body p-0">
                                        <div class="overlay-wrapper">
                                            <img src="../media/stock-600x400/viaje.png" alt="" class="w-100 rounded" />
                                        </div>
                                        <div class="overlay-layer m-5 rounded flex-center">
                                            <div class="d-flex flex-column flex-center">
                                                <a href="#"
                                                    class="label label-danger label-xl label-inline mb-1 text-hover-dark">Viajes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Card-->
                            </div>
                        </div>
                        <!--end::Row-->
                    </div>
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
