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
                                        <h3 class="card-title font-weight-bolder text-dark">Ejemplo menús</h3>
                                    </div>
                                    <!--begin::Body-->
                                    <div class="dropdown mb-5 mx-5">
                                        <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                            data-toggle="dropdown">Menú estilo 1</a>
                                        <div class="dropdown-menu dropdown-menu-md py-5">
                                            <ul class="navi navi-hover navi-active navi-accent">
                                                <li class="navi-item">
                                                    <a class="navi-link active" href="#">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-analytics"></i>
                                                        </span>
                                                        <span class="navi-text">Mensaje</span>
                                                        <span
                                                            class="label label-light-danger font-weight-bold label-inline">new</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a class="navi-link" href="#">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-pie-chart-2"></i>
                                                        </span>
                                                        <span class="navi-text">Ajustes</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a class="navi-link" href="#">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-file"></i>
                                                        </span>
                                                        <span class="navi-text">Archivos</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed mt-2 mb-3"></div>
                                    <div class="dropdown mb-5 mx-5">
                                        <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                            data-toggle="dropdown">Menú estilo 2</a>
                                        <div class="dropdown-menu dropdown-menu-md py-5">
                                            <ul class="navi">
                                                <li class="navi-item">
                                                    <a class="navi-link" href="#">
                                                        <span class="symbol symbol-50 symbol-circle mr-3">
                                                            <span class="symbol-label">
                                                                <i class="flaticon2-analytics text-danger"></i>
                                                            </span>
                                                        </span>
                                                        <span class="navi-text">Mensajes</span>
                                                        <span
                                                            class="label label-light-danger font-weight-bold label-inline">new</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a class="navi-link" href="#">
                                                        <span class="symbol symbol-50 symbol-circle mr-3">
                                                            <span class="symbol-label">
                                                                <i class="flaticon2-pie-chart-2 text-warning"></i>
                                                            </span>
                                                        </span>
                                                        <span class="navi-text">Ajustes</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a class="navi-link" href="#">
                                                        <span class="symbol symbol-50 symbol-circle mr-3">
                                                            <span class="symbol-label">
                                                                <i class="flaticon2-file text-primary"></i>
                                                            </span>
                                                        </span>
                                                        <span class="navi-text">Archivos</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed mt-2 mb-3"></div>
                                    <div class="dropdown mb-5 mx-5">
                                        <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                            data-toggle="dropdown">Menú estilo 3</a>
                                        <div class="dropdown-menu dropdown-menu-lg py-5">
                                            <ul class="navi">
                                                <li class="navi-item">
                                                    <a class="navi-link" href="#">
                                                        <span class="symbol symbol-50 mr-3">
                                                            <span class="symbol-label">
                                                                <i class="flaticon2-analytics text-danger"></i>
                                                            </span>
                                                        </span>
                                                        <div class="navi-text">
                                                            <span class="d-block font-weight-bold">Mensajes</span>
                                                            <span class="text-muted">Notificaciones</span>
                                                        </div>
                                                        <span
                                                            class="label label-light-danger font-weight-bold label-inline">new</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a class="navi-link" href="#">
                                                        <span class="symbol symbol-50 mr-3">
                                                            <span class="symbol-label">
                                                                <i class="flaticon2-pie-chart-2 text-warning"></i>
                                                            </span>
                                                        </span>
                                                        <div class="navi-text">
                                                            <span class="d-block font-weight-bold">Ajustes</span>
                                                            <span class="text-muted">Perfil</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a class="navi-link" href="#">
                                                        <span class="symbol symbol-50 mr-3">
                                                            <span class="symbol-label">
                                                                <i class="flaticon2-file text-primary"></i>
                                                            </span>
                                                        </span>
                                                        <div class="navi-text">
                                                            <span class="d-block font-weight-bold">Archivos</span>
                                                            <span class="text-muted">SEP</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed mt-2 mb-3"></div>
                                    <div class="dropdown mb-5 mx-5">
                                        <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                            data-toggle="dropdown">Menú estilo 4</a>
                                        <div class="dropdown-menu dropdown-menu-md py-5">
                                            <ul class="navi">
                                                <li class="navi-item">
                                                    <a class="navi-link" href="#">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-analytics"></i>
                                                        </span>
                                                        <span class="navi-text">Mensajes</span>
                                                        <span class="navi-label">
                                                            <span class="label label-success label-rounded">2</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a class="navi-link" href="#">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-pie-chart-2"></i>
                                                        </span>
                                                        <span class="navi-text">Ajustes</span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator my-4"></li>
                                                <li class="navi-item">
                                                    <a class="navi-link" href="#">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-box-1"></i>
                                                        </span>
                                                        <span class="navi-text">Archivos</span>
                                                        <span class="navi-label">
                                                            <span class="label label-info label-rounded">5</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a class="navi-link" href="#">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-sms"></i>
                                                        </span>
                                                        <span class="navi-text">Reportes</span>
                                                    </a>
                                                </li>
                                            </ul>
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
<script src="../js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script>
<script src="../js/pages/crud/forms/widgets/datepicker-es.js"></script>
</div>
<!--end::Main-->
