<div class="card card-custom mb-15 {{ @$class }}">
    {{-- Header --}}
    <div class="card-header border-0 justify-content-center" style="background: #750f0f">
        <h3 class="card-title font-weight-bolder text-white">Inicio de sesión</h3>
    </div>
    {{-- Body --}}
    <div class="card-body p-0 position-relative overflow-hidden">
        <form action="{{ route('validarLogin') }}" method="POST">
            @csrf
            <div class="justify-content-center mt-4">
                <p class="text-center font-weight-bolder">
                    @if (Session::has('mensaje_sesion'))
                    {{ Session::get('mensaje_sesion') }}
                @endif</p>
            </div>
            <div class="form-group">
                <label class="col-sm-12 col-form-label">Usuario</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="usuario" value="{{ old('usuario') }}">
                    @error('usuario')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12 col-form-label">Contraseña</label>
                <div class="col-sm-12">
                    <input type="password" class="form-control" name="contrasena" value="{{ old('contrasena') }}">
                    @error('contrasena')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-outline-secondary btn-lg btn-block">Iniciar sesión</button>
            </div>
        </form>
    </div>
</div>