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
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-label">Ejemplo accordion</h3>
                                        </div>
                                    </div>
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <div class="accordion accordion-solid accordion-toggle-plus"
                                            id="accordionExample6">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <div class="card-title" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true">Tema 1</div>
                                                </div>
                                                <div id="collapseOne" class="collapse show"
                                                    data-parent="#accordionExample6">
                                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                                        moon officia aute, non cupidatat skateboard dolor brunch. Food
                                                        truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                        tempor, sunt aliqua put a bird on it squid single-origin coffee
                                                        nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                                        craft beer labore wes anderson cred nesciunt sapiente ea
                                                        proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth
                                                        nesciunt you probably haven't heard of them accusamus labore
                                                        sustainable VHS.</div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwo6">
                                                    <div class="card-title collapsed" data-toggle="collapse"
                                                        data-target="#collapseTwo6">Tema 2</div>
                                                </div>
                                                <div id="collapseTwo6" class="collapse"
                                                    data-parent="#accordionExample6">
                                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                                        moon officia aute, non cupidatat skateboard dolor brunch. Food
                                                        truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                        tempor, sunt aliqua put a bird on it squid single-origin coffee
                                                        nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                                        craft beer labore wes anderson cred nesciunt sapiente ea
                                                        proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth
                                                        nesciunt you probably haven't heard of them accusamus labore
                                                        sustainable VHS.</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree6">
                                                    <div class="card-title collapsed" data-toggle="collapse"
                                                        data-target="#collapseThree6">Tema 3</div>
                                                </div>
                                                <div id="collapseThree6" class="collapse"
                                                    data-parent="#accordionExample6">
                                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                                        moon officia aute, non cupidatat skateboard dolor brunch. Food
                                                        truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                        tempor, sunt aliqua put a bird on it squid single-origin coffee
                                                        nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                                        craft beer labore wes anderson cred nesciunt sapiente ea
                                                        proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth
                                                        nesciunt you probably haven't heard of them accusamus labore
                                                        sustainable VHS.</div>
                                                </div>
                                            </div>
                                        </div>
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
    <script src="../plugins/global/plugins.bundle.js"></script>
    <script src="../plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="../js/scripts.bundle.js"></script>
</div>
<!--end::Main-->
