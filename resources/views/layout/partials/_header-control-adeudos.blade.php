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
                <a href="{{ route('login') }}">
                    <img style="height: 43px" alt="Logo" src="../media/logos/logo-ipe.jpg" />
                </a>
            </div>
            <!--end::Header Logo-->
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Préstamos</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-de-adeudos/prestamos-archivo-de-rangos') }}" class="menu-link">
                                        <span class="menu-text">Archivo de Rangos</span>
                                    </a>
                                </li>
                            </ul>
                            <p class="dropdown-divider"></p>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-de-adeudos/prestamos-actualizacion-de-claves') }}" class="menu-link">
                                        <span class="menu-text">Actualización de Claves</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-de-adeudos/prestamos-movimiento-de-adeudos') }}" class="menu-link">
                                        <span class="menu-text">Movimiento de Adeudos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-de-adeudos/prestamos-bonificaciones') }}" class="menu-link">
                                        <span class="menu-text">Bonificaciones</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-de-adeudos/prestamos-tabulado') }}" class="menu-link">
                                        <span class="menu-text">Tabulado</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-de-adeudos/prestamos-relacion-incobrables') }}" class="menu-link">
                                        <span class="menu-text">Relación Incobrables</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-de-adeudos/prestamos-conciliacion-incobrables-vs-plazas-activas') }}" class="menu-link">
                                        <span class="menu-text">Conciliación Incobrables vs Plazas Activas</span>
                                    </a>
                                </li>
                            </ul>
                            <p class="dropdown-divider"></p>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Corrida de Abonos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Elegir Fecha</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-de-adeudos/prestamos-elegir-fecha-de-corte') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Elegir Fecha de Corte</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-de-adeudos/prestamos-fecha-de-corte-emergentes') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Elegir Fecha de Corte Emergentes</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-de-adeudos/prestamos-elegir-fecha-de-corte-mediano') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Elegir Fecha de Corte Mediano</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-de-adeudos/prestamos-elegir-fecha-corte-PCP-domiciliado') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Elegir Fecha de Corte PCP Domiciliado</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-de-adeudos/prestamos-elegir-de-fecha-corte-mediano-domiciliado') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Elegir Fecha de Corte Mediano
                                                        Domiciliado</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Corte</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Comprobantes</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Descuentos Medio Magnético</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="javascript:;" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Instituto de Pensiones</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="javascript:;" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Sefiplan y Organismos
                                                                    Desconcentrados</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="javascript:;" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Universidad Veracruzana</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Póliza y Relación de Envíos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Resumen Préstamos</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Emergentes</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Corrida de Abonos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Tabulado Corrida de Abonos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Comprobantes Emergentes</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Descuentos Medio Magnético</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="javascript:;" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Instituto de Pensiones</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="javascript:;" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Sefiplan y Organismos
                                                                    Desconcentrados</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="javascript:;" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Universidad Veracruzana</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Póliza y Relación de Envíos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Tablas de Amortización</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Movimientos Mantenimiento</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Actualización de Claves</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Relación de Incobrables</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Estados de Cuenta</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Validación</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Actualización en Financieros</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Reporte Global</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Auxiliar</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Actualiza Tabla de Amortización</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Póliza Contable</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">A Mediano Plazo</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Corrida de Abonos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Tabulado Corrida de Abonos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Comprobantes a Mediano Plazo</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Descuentos Medio Magnético</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="javascript:;" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Instituto de Pensiones</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="javascript:;" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Sefiplan y Organismos
                                                                    Desconcentrados</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="javascript:;" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Universidad Veracruzana</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Póliza y Relación de Envíos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Tablas de Amortización</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Movimientos Mantenimiento</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Actualización de Claves</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Relación de Incobrables</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Estados de Cuenta</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Validación</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Actualización en Financieros</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Reporte Global</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Auxiliar</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Actualiza Tabla de Amortización</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Póliza Contable</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Saldo Pendiente PCP</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Saldo Pendiente por Aplicar</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Resumen Préstamos</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">A Corto Plazo Domiciliado</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Claves 6 y 7 Domiciliado</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Corrida de Abonos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Comprobantes Corto</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Tabulado</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Actualización en Financieros</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Descuentos por Nómina</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="javascript:;" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Universidad Veracruzana</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Descuentos Medio Magnético</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Póliza Contable</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Mantenimiento Movimientos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Validación</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Reporte Global</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Auxiliar</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Moratorio Global Auxiliares
                                                        Domiciliado</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Adeudo Auxiliar Acumulado</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Tablas de Amortización</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Estados de Cuenta</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Reporte de Cuentas Bancarias</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Actualiza Tabla de Amortización</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Relación de Incobrables</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Saldo Pendiente PCP</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Recuperación Domiciliado</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">A Mediano Plazo Domiciliado</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Corrida de Abonos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Tabulado</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Comprobantes Mediano</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Actualización en Financieros</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Descuentos por Nómina</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="javascript:;" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Universidad Veracruzana</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Descuentos Medio Magnético</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Póliza Contable</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Mantenimiento Movimientos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Validación</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Reporte Global</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Auxiliar</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Moratorio Global Auxiliares
                                                        Domiciliado</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Adeudo Auxiliar Acumulado</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Tablas de Amortización</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Estados de Cuenta</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Reporte de Cuentas Bancarias</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Actualiza Tabla de Amortización</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Relación de Incobrables</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Saldo Pendiente PMP</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Recuperación Domiciliado</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Auxiliar</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Estados de Cuenta</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Reporte Tabla de Armonización PCP</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Reporte Tabla de Armonización PCP Anterior</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Póliza PCP Esquema 2008</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Actualiza Tabla de Amortización</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Estadístico de Préstamos</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Corto Plazo</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Mediano Plazo</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Emergentes</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Corto Plazo Domiciliado</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Mediano Plazo Domiciliado</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Resumen PCP</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Talón de Pago a Pensionados</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Recibo Adeudo Descuentos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Captura Mesa</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Organismos</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Catalogos</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-de-adeudos/organismos-catalogos-organismos') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Organismos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-de-adeudos/organismos-catalogos-conceptos') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Conceptos</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="{{ route('control-de-adeudos/prestamos-elegir-fecha-de-corte-mediano') }}" class="menu-link menu-toggle">
                                        <span class="menu-text">Estimaciones</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-de-adeudos/organismos-estimaciones-inicializacion') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Inicialización</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-de-adeudos/organismos-estimaciones-mantenimiento') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Mantenimiento</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-de-adeudos/organismos-estimaciones-modificacion') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Modificación</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a  class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Reportes</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="{{ route('control-de-adeudos/organismos-estimaciones-descuentos') }}" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Descuentos</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                            aria-haspopup="true">
                                                            <a  class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Recibos</span>
                                                                <i class="menu-arrow"></i>
                                                            </a>
                                                            <div
                                                                class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                <ul class="menu-subnav">

                                                                    <li class="menu-item menu-item-submenu"
                                                                        data-menu-toggle="hover" aria-haspopup="true">
                                                                        <a  href="{{ route('control-de-adeudos/organismos-estimaciones-listado') }}" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Listado</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu-item" aria-haspopup="true">
                                                                        <a  href="{{ route('control-de-adeudos/organismos-estimaciones-emision') }}" class="menu-link">
                                                                            <i class="menu-bullet menu-bullet-line">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Emisión</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="menu-item" aria-haspopup="true">
                                                            <a href="{{ route('control-de-adeudos/organismos-estimaciones-poliza') }}" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Póliza</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="{{ route('control-de-adeudos/organismos-respaldar') }}" class="menu-link menu-toggle">
                                        <span class="menu-text">Respaldar</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="{{ route('control-de-adeudos/organismos-restaurar') }}" class="menu-link menu-toggle">
                                        <span class="menu-text">Restaurar</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="{{ route('control-de-adeudos/organismos-respaldar-quincenas-adelantadas') }}" class="menu-link menu-toggle">
                                        <span class="menu-text">Respaldar Quincenas Adelantadas</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Ajustes</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Mantenimiento</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Actualización</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Ajustes Múltiples</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Actualización Ajustes Múltiples</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Movimientos Mensuales</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Auxiliar</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Emisión</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Cobranza</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Consultas</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Alfabética de Derechohabientes</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Banco de Datos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Financieros</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Consulta Múltiple</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Listado de Activos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Beneficios</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Solicitudes</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Líquido</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Líquido Domiciliado</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Consulta Integral 2</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Solicitud de Alta</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Simular Tabla Restructurada</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Estado de Cuenta Casas</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Cuentas Bancarias Domiciliado</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Adeudos Vencidos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Cartera de Domiciliados</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Liquidaciones Domiciliado</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Estadísticas de Adeudos por Sexo</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Fondo de Garantía</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Altas</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Movimientos</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Consultas</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Movimientos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Actualización</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Consulta Individual Activos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Consulta Individual Pensionados</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Cambio de Pensión o Afiliación</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Relación de Saldos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Eliminación de Registros Saldados</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Liquidaciones</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Captura Adeudos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Listado</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Adeudos IPE</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Histórico de Pagos e Incrementos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Histórico de Pago Neto</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Utilerías</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Referencias</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Desbloquear Aux91's</span>
                                    </a>
                                </li>
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
                <div class="btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                    id="kt_quick_user_toggle">
                    <span class="text-dark-80 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                        @php
                            $nombreUsuario = session()->get('Ipekey');
                        @endphp
                        {{ $nombreUsuario }}
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
