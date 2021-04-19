{{-- Extends layout --}}
@extends('layout.base._layout-contenido-contabilidad')
<link href="../css/pages/wizard/wizard-3.css" rel="stylesheet" type="text/css" />
{{-- Content --}}
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom">
                <div class="card-body p-0">
                    <!--begin: Wizard-->
                    <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="step-first"
                        data-wizard-clickable="true">
                        <!--begin: Wizard Nav-->
                        <div class="wizard-nav">
                            <div class="wizard-steps px-8 py-8 px-lg-15 py-lg-3">
                                <!--begin::Wizard Step 1 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                            <span>1.</span>Localidad
                                        </h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 1 Nav-->
                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                            <span>2.</span>Detalles
                                        </h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                            <span>3.</span>Servicios
                                        </h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                                <!--begin::Wizard Step 4 Nav-->
                                {{-- <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                            <span>4.</span>Delivery Address
                                        </h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div> --}}
                                <!--end::Wizard Step 4 Nav-->
                            </div>
                        </div>
                        <!--end: Wizard Nav-->
                        <!--begin: Wizard Body-->
                        <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                            <div class="col-lg-11">
                                <!--begin: Wizard Form-->
                                <form class="form" id="kt_form">
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                        <h4 class="mb-10 font-weight-bold text-dark">Setup Your Current Location</h4>
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Address Line 1</label>
                                            <input type="text" class="form-control" name="address1"
                                                placeholder="Address Line 1" value="Address Line 1" />
                                            <span class="form-text text-muted">Please enter your Address.</span>
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Address Line 2</label>
                                            <input type="text" class="form-control" name="address2"
                                                placeholder="Address Line 2" value="Address Line 2" />
                                            <span class="form-text text-muted">Please enter your Address.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">Enter the Details of your Delivery</h4>
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Package Details</label>
                                            <input type="text" class="form-control" name="package"
                                                placeholder="Package Details"
                                                value="Complete Workstation (Monitor, Computer, Keyboard &amp; Mouse)" />
                                            <span class="form-text text-muted">Please enter your Pakcage Details.</span>
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Package Weight in KG</label>
                                            <input type="text" class="form-control" name="weight"
                                                placeholder="Package Weight" value="25" />
                                            <span class="form-text text-muted">Please enter your Package Weight in
                                                KG.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">Select your Services</h4>
                                        <!--begin::Select-->
                                        <div class="form-group">
                                            <label>Delivery Type</label>
                                            <select name="delivery" class="form-control">
                                                <option value="">Select a Service Type Option</option>
                                                <option value="overnight" selected="selected">Overnight Delivery (within 48
                                                    hours)</option>
                                                <option value="express">Express Delivery (within 5 working days)</option>
                                                <option value="basic">Basic Delivery (within 5 - 10 working days)</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                    </div>
                                    <!--end: Wizard Step 3-->
                                    <!--begin: Wizard Step 4-->
                                   {{--  <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">Setup Your Delivery Location</h4>
                                        <div class="my-5">
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Address Line 1</label>
                                                <input type="text" class="form-control" name="locaddress1"
                                                    placeholder="Address Line 1" value="Address Line 1" />
                                                <span class="form-text text-muted">Please enter your Address.</span>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Address Line 2</label>
                                                <input type="text" class="form-control" name="locaddress2"
                                                    placeholder="Address Line 2" value="Address Line 2" />
                                                <span class="form-text text-muted">Please enter your Address.</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!--end: Wizard Step 4-->
                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                        <div class="mr-2">
                                            <button type="button"
                                                class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4"
                                                data-wizard-type="action-prev">Anterior</button>
                                        </div>
                                        <div>
                                            <button type="button" onclick="hola()"
                                                class="btn btn-success font-weight-bolder text-uppercase px-9 py-4"
                                                data-wizard-type="action-submit">Guardar</button>
                                            <button type="button"
                                                class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4"
                                                data-wizard-type="action-next">Siguiente</button>
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </form>
                                <!--end: Wizard Form-->
                            </div>
                        </div>
                        <!--end: Wizard Body-->
                    </div>
                    <!--end: Wizard-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
{{-- End Content --}}

{{-- Scripts --}}
@push('scripts')
    <script src="../js/pages/custom/wizard/wizard-3.js"></script>
@endpush
