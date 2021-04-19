{{-- Extends layout --}}
<link rel="icon" href="../logos/logo-ipe.jpg" />
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
                            <span class="menu-text">Archivo</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/modificar-presupuestos') }}" class="menu-link">
                                        <span class="menu-text">Modificar Presupuestos</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Movimientos</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/movimientos-pagados') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Pagados</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/movimientos-ejercidos') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Ejercidos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/movimientos-devengados') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Devengados</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/movimientos-compromisos') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Compromisos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/movimientos-transferencias') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Transferencias</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/movimientos-transferencias-automaticas') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Transferencias Automáticas</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/movimientos-distribuciones') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Distribuciones</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/movimientos-nomina-IPE') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Nómina IPE</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/movimientos-nomina-IPE-disco') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Nómina IPE (Disco)</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Cancelaciones</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/cancelaciones-pagados') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Pagados</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/cancelaciones-ejercidos') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Ejercidos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/cancelaciones-compromisos') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Compromisos</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/afectaciones-liquidas') }}" class="menu-link">
                                        <span class="menu-text">Afectaciones Líquidas</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/reducciones-colectivas') }}" class="menu-link">
                                        <span class="menu-text">Reducciones Colectivas</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/reducciones-capituo-1000') }}" class="menu-link">
                                        <span class="menu-text">Reducciones Capítuo 1000</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Catálogos</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Centros de Trabajo</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/centros-de-trabajo-solicitado') }}" class="menu-link">
                                        <span class="menu-text">Solicitado</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/centros-de-trabajo-ejercidos') }}" class="menu-link">
                                        <span class="menu-text">Ejercidos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/centros-de-trabajo-compromisos') }}" class="menu-link">
                                        <span class="menu-text">Compromisos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/centros-de-trabajo-transferencias') }}" class="menu-link">
                                        <span class="menu-text">Transferencias</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/centros-de-trabajo-solvencia') }}" class="menu-link">
                                        <span class="menu-text">Solvencia</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/centros-de-trabajo-presupuesto-modificado') }}" class="menu-link">
                                        <span class="menu-text">Presupuesto Modificado</span>
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
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/consultas-validacion-tipos-movimiento') }}" class="menu-link">
                                        <span class="menu-text">Validación por Tipos de Movimiento</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/consultas-conciliacion-con-contabilidad') }}" class="menu-link">
                                        <span class="menu-text">Conciliación con Contabilidad</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/consultas-tipos-de-presupuestos') }}" class="menu-link">
                                        <span class="menu-text">Tipos de Presupuestos</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/consultas-comparativo') }}" class="menu-link">
                                        <span class="menu-text">Comparativo</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Solvencia</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/consultas-solvencia-neta') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Neta</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/consultas-solvencia-por-grupos') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Por Grupos</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/consultas-solvencia-acumulada') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Acumulada</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/consultas-solvencia-cifras-de-control') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Cifras de Control</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/consultas-sbc') }}" class="menu-link">
                                        <span class="menu-text">SBC</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Estado del Ejercicio del Presupuesto</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/consultas-estado-ejercicio-presupuesto-parte-1') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Parte 1</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="{{ route('control-presupuestal/consultas-estado-ejercicio-presupuesto-parte-2') }}" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Parte 1</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/consultas-formato-REPTRIM') }}" class="menu-link menu-toggle">
                                        <span class="menu-text">Formato REPTRIM</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/consultas-reportes-armonizacion-contable') }}" class="menu-link menu-toggle">
                                        <span class="menu-text">Reportes de Armonización Contable</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/consultas-reporte-cancelaciones') }}" class="menu-link menu-toggle">
                                        <span class="menu-text">Reporte de Cancelaciones</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/consultas-proyecciones') }}" class="menu-link menu-toggle">
                                        <span class="menu-text">Proyecciones</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Movimientos por Folio de Egresos</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                        <ul class="menu-subnav">
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Presupuesto Aprobado</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Folio de Referencia de Compromiso</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Histórico de Pólizas</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Póliza Resumen</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Movimientos Comprometidos del Mes</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Movimientos Devengados del Mes</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Movimientos Ejercidos del Mes</span>
                                                </a>
                                            </li>
                                            <li class="menu-item" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link">
                                                    <i class="menu-bullet menu-bullet-line">
                                                        <span></span>
                                                    </i>
                                                    <span class="menu-text">Movimientos Pagados del Mes</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Mantenimiento</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/matenimiento-cambiar-anio-presupuestal') }}" class="menu-link">
                                        <span class="menu-text">Cambiar Año Presupuestal</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/matenimiento-folios') }}" class="menu-link">
                                        <span class="menu-text">Folios</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/matenimiento-crear-presupuestos') }}" class="menu-link">
                                        <span class="menu-text">Crear Presupuestos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/matenimiento-borrar-presupuestos') }}" class="menu-link">
                                        <span class="menu-text">Borrar Presupuestos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('control-presupuestal/matenimiento-inicial-a-autorizado') }}" class="menu-link">
                                        <span class="menu-text">Inicial a Autorizado</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Reportes</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link">
                                        <span class="menu-text">Imprimir</span>
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
