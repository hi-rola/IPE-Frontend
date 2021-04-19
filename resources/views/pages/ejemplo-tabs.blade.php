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
                        <div class="card card-custom">{{-- 
                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">Ejemplo tabs</h3>
                            </div> --}}
                            <div class="card-toolbar">
                                <ul class="nav nav-tabs nav-tabs-line justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_3">Tema 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_3">Tema 2</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_tab_pane_1_3" role="tabpanel"
                                        aria-labelledby="kt_tab_pane_1_3">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum passages, and more recently with
                                        desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages,
                                        and more recently with desktop publishing software like Aldus PageMaker
                                        including versions of Lorem Ipsum.<br>
                                        Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum passages, and more recently with
                                        desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages,
                                        and more recently with desktop publishing software like Aldus PageMaker
                                        including versions of Lorem Ipsum.
                                    </div>
                                    <div class="tab-pane fade" id="kt_tab_pane_2_3" role="tabpanel"
                                        aria-labelledby="kt_tab_pane_2_3">Lorem Ipsum passages, and more recently with
                                        desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages,
                                        and more recently with desktop publishing software like Aldus PageMaker
                                        including versions of Lorem Ipsum.
                                         <br>
                                        Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum passages, and more recently with
                                        desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum. Lorem Ipsum passages, and more recently with desktop publishing software
                                        like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum passages,
                                        and more recently with desktop publishing software like Aldus PageMaker
                                        including versions of Lorem Ipsum.
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
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
    <script src="../js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script>
    <script src="../js/pages/crud/forms/widgets/datepicker-es.js"></script>
</div>
<!--end::Main-->
