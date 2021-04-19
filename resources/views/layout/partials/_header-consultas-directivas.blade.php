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
                            <span class="menu-text">Consultas</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Trámite de Beneficios</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Población Derechohabiente</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Pensiones por Tipo de Pensión</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Préstamos</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Préstamos a Corto Plazo Domiciliado</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Préstamos a Mediano Plazo Domiciliado</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Nómina de Personal</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Notificación de Depósito</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Consulta de Activos</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Consulta de Pensionados</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Histórico de Pagos Netos</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Histórico de Pago e Incremento</span>
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
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Reporte de Cotización</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Presupuestos</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span>   </span>
                                                    </i>
                                                    <span class="menu-text">Estado de Analítico del Ejercicio del presupuesto de Egresos (REPTRIM)</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Reportes de Armonización Contable</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Presupuesto de Prestaciones Institucionales</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Control Financiero</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Estado de Situación Financiera</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Estado de Resultados</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
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
