{{-- Extends layout --}}
@extends('layout.base._layout-contenido-contabilidad')
{{-- Content --}}
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-12 col-xxl-12">
                    <!--Inicio Card-->
                    <div class="card card-custom">
                        <div class="mt-4" style="padding-left: 30px">
                            <a href="{{ route('homeContabilidad') }}">
                                <i class="far fa-arrow-alt-circle-left icon-lg" data-toggle="tooltip"
                                    data-placement="bottom" title="Atrás"></i>
                            </a>
                        </div>
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">Cátalogo de estado de variaciones</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Search Form-->
                            <!--begin: Datatable-->
                            <!--begin: Selected Rows Group Action Form-->
                            <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                            <!--end: Datatable-->
                        </div>
                    </div>
                    <!--Fin Card-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
@endsection
{{-- End Content --}}

{{-- Scripts --}}
@push('scripts')
@endpush