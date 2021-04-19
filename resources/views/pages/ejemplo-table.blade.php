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
                                        <h3 class="card-title font-weight-bolder text-dark">Ejemplo table</h3>
                                    </div>
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin: Search Form-->
                                        <!--begin::Search Form-->
                                        <div class="mb-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-9 col-xl-8">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4 my-2 my-md-0">
                                                            <div class="input-icon">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Search..."
                                                                    id="kt_datatable_search_query" />
                                                                <span>
                                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 my-2 my-md-0">
                                                            <div class="d-flex align-items-center">
                                                                <label
                                                                    class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                                                <select class="form-control"
                                                                    id="kt_datatable_search_status">
                                                                    <option value="">All</option>
                                                                    <option value="1">Pending</option>
                                                                    <option value="2">Delivered</option>
                                                                    <option value="3">Canceled</option>
                                                                    <option value="4">Success</option>
                                                                    <option value="5">Info</option>
                                                                    <option value="6">Danger</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 my-2 my-md-0">
                                                            <div class="d-flex align-items-center">
                                                                <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                                                <select class="form-control"
                                                                    id="kt_datatable_search_type">
                                                                    <option value="">All</option>
                                                                    <option value="1">Online</option>
                                                                    <option value="2">Retail</option>
                                                                    <option value="3">Direct</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                                    <a href="#"
                                                        class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Search Form-->
                                        <!--end: Search Form-->
                                        <!--begin: Datatable-->
                                        <div class="datatable datatable-bordered datatable-head-custom"
                                            id="kt_datatable"></div>
                                        <!--end: Datatable-->
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
    <script src="../js/pages/crud/forms/widgets/form-repeater.js"></script>
    <script src="../js/pages/crud/ktdatatable/base/data-local.js"></script>
</div>
<!--end::Main-->
