{{-- Content --}}
@if (config('layout.content.extended'))
    @yield('content-version2')
@else
    <div class="d-flex flex-column-fluid">
        <div class="{{ Metronic::printClasses('content-container', false) }}">
            @yield('content-version2')
        </div>
    </div>
@endif