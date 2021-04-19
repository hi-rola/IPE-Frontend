{{-- Extends layout --}}
@extends('layout.default-contenido')
<!--begin::Header-->
<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Logo-->
            <div class="header-logo">
                <a href="index.html">
                    <img style="height: 43px" alt="Logo" src="../media/logos/logo-ipe.jpg" />
                </a>
            </div>
            <!--end::Header Logo-->
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                    <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active"
                        data-menu-toggle="click" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Menú</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('home2') }}" class="menu-link">
                                        <span class="menu-text">Inicio</span>
                                    </a>
                                </li>
                                {{-- <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('usuarios-ipe') }}" class="menu-link">
                                        <span class="menu-text">Usuarios IPE</span>
                                    </a>
                                </li> --}}
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('registrarUsuario') }}" class="menu-link">
                                        <span class="menu-text">Registrar usuario</span>
                                    </a>
                                </li>
                                {{-- <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-table') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo table</span>
                                    </a>
                                </li> --}}
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-formulario') }}" class="menu-link">
                                        <span class="menu-text">Validación</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-wizard') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo wizard</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-datepicker') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo datepicker</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-modal') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo modal</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-agregar-form') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo agregar form</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-accordion') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo accordion</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-subir-imagen') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo subir imagen</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="menu-nav">
                    <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active"
                        data-menu-toggle="click" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Pruebas 2</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-tab') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo Tabs</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-menu') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo menús</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-cards-con-efecto') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo cards con efecto</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-card-overlay') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo cards con overlay</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-card-ribbon') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo cards con ribbons</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('ejemplo-card-scroll') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo card con scroll</span>
                                    </a>
                                </li>
                                {{-- <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('table-json') }}" class="menu-link">
                                        <span class="menu-text">Ejemplo table</span>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </li>
                </ul>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::User-->
            <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                    id="kt_quick_user_toggle">
                    <span class="text-dark-80 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                        {{-- @php
                        $nombreUsuario = session()->get('Laravelkey')['nombre'];
                        @endphpf
                        {{ $nombreUsuario }} --}}
                    </span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
