{{-- Content --}}
@if (config('layout.content.extended'))
    @yield('content-login')
@else
    <div class="d-flex flex-column-fluid">
        <div class="{{ Metronic::printClasses('content-container', false) }}">
            @yield('content-login')
        </div>
    </div>
@endif