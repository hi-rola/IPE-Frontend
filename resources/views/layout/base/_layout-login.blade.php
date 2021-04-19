@if (config('layout.self.layout') == 'blank')
    <div class="d-flex flex-column flex-root">
        @yield('content')
    </div>
@else

    <div style="height: 100vh;  display: flex; align-items: center; justify-content: center;">
        <div class="d-flex flex-row flex-column-fluid page">
            @include('layout.base._content-login')
        </div>
    </div>

@endif
