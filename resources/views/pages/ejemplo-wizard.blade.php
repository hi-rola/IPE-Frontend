{{-- Extends layout --}}
@extends('layout.base._layout-v2')

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
                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                            <span>1.</span>Información personal
                                        </h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                            <span>2.</span>Información escolar
                                        </h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                                <!--begin::Wizard Step 4 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                            <span>3.</span>Dirección
                                        </h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 4 Nav-->
                            </div>
                        </div>
                        <!--end: Wizard Nav-->
                        <!--begin: Wizard Body-->
                        <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                            <div class="col-xl-12 col-xxl-7">
                                <!--begin: Wizard Form-->
                                <form class="form" id="kt_form">
                                    <!--begin: Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Nombre completo</label>
                                            <input type="text" class="form-control" name="nombre"
                                                placeholder="Nombre completo" />
                                        </div>
                                        <!--end::Input-->
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Edad</label>
                                                    <input type="number" class="form-control" name="edad"
                                                        placeholder="25" />
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Estatura (cm)</label>
                                                    <input type="number" class="form-control" name="estatura"
                                                        placeholder="165" />
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Peso (kg)</label>
                                                    <input type="number" class="form-control" name="peso"
                                                        placeholder="63" />
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Select-->
                                        <div class="form-group">
                                            <label>Nivel escolar</label>
                                            <select name="nivelEscolar" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="overnight">Preescolar</option>
                                                <option value="express">Primaria</option>
                                                <option value="basic">Secundaria</option>
                                                <option value="basic">Preparaoria</option>
                                                <option value="basic">Licenciatura</option>
                                                <option value="basic">Maestría</option>
                                                <option value="basic">Doctorado</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Select-->
                                    </div>
                                    <!--end: Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <div class="my-5">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Calle</label>
                                                        <input type="text" class="form-control" name="calle" />
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Colonia</label>
                                                        <input type="text" class="form-control" name="colonia" />
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 4-->
                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                        <div class="mr-2">
                                            <button type="button"
                                                class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4"
                                                data-wizard-type="action-prev">Anterior</button>
                                        </div>
                                        <div>
                                            <button type="button"
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
    <link href="../css/pages/wizard/wizard-3.css" rel="stylesheet" type="text/css" />
    <script src="../js/pages/custom/wizard/wizard-3.js"></script>
@endpush