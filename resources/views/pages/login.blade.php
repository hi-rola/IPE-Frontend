{{-- Extends layout --}}
@extends('layout.default-login')

{{-- {{-- Content --}}
@section('content-login')
    {{-- Login --}}
    <div class="row justify-content-center">
        <div class="col-6 col-lg-3 col-xxl-3 d-flex justify-content-center">
            <div class="login-logo">
                <img alt="Logo" src="media/logos/logo-ipe.jpg"/>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8 col-xxl-8">
            @include('pages.widgets._login', ['class' => 'card-stretch gutter-b'])
        </div>
    </div>
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection