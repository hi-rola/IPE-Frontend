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
                            <span class="menu-text" id="titulo-menu">Sistema</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('sistema/usuarios') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Usuarios</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('sistema/grupos') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Grupos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('sistema/sistemas') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Sistemas</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="menu-nav">
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text" id="titulo-menu">Archivo</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/numeros-poliza') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Números Póliza</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/control-de-mes') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Control de Mes</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/generar-o-anular-excedente') }}"
                                        class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Generar o Anular el
                                            Excedente</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/ingresos-presupuestados') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Ingresos Presupuestados</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/cambia-periodo') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Cambia Periodo</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/recibo-de-adeudo') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Recibo de Adeudo</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/elimina-cuentas-y-actualiza') }}"
                                        class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Elimina Cuentas y Actualiza</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/incorpora-archvio-de-excel') }}"
                                        class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Incorpora Archivo de Excel</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="menu-nav">
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text" id="titulo-menu">Cátalogos</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/catalogos-cuentas') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Cuentas</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/catalogos-grupos-para-epf') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Grupos para E.P.F.</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/catalogos-cuentas-para-epf') }}"
                                        class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Cuentas para el E.P.F</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/catalogos-grupos-para-er') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Grupos para E.R.</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/catalogos-cuentas-para-er') }}"
                                        class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Cuentas para E.R.</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/catalogos-grupos-de-balanzas') }}"
                                        class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Grupo de Balanzas</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/catalogo-estado-de-variaciones') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Catálogo de Estado de
                                            Variaciones</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="menu-nav">
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text" id="titulo-menu">Pólizas</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/poliza-captura') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Captura</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/poliza-emergente') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Póliza Emergente</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/poliza-mediano-plazo') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Póliza Mediano Plazo</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/poliza-automaticas') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Automáticas</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/poliza-listado-polizas') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Listado de Pólizas</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/poliza-actualizacion') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Actualización</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/poliza-desactualizacion') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Desactualización</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="menu-nav">
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text" id="titulo-menu">Reportes</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-balanza') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Balanza</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-analisis-de-cuentas') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Análisis de Cuentas</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-mayor') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Mayor</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-estado-de-cuenta') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Estado de Cuenta</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-estado-de-posicion-financiera') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Estado de Posición
                                            Financiera</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-cuentas-colectivas') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Cuentas Colectivas</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-notificaciones-de-pago') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Notificaciones de Pago</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-individual-pensionados') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Individual Pensionados</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-individual-activos') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Individual Activos</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-balanza-armonizada') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Balanza Armonizada</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-estado-de-variaciones') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Estado de Variaciones</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-grupos-cuentas-balanzas') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Grupos de Cuentas Balanzas</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-consulta-renovaciones-prestamos') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Consulta Renovaciones
                                            Préstamos</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-cuentas-de-mes') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Cuentas de Mes</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-libro-diario') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Libro Diario</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-estado-analisis-deuda-otros-pasivos') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Estado de Análisis de Deuda y Otros
                                            Pasivos</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-consulta-pension') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Consulta Pensión</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/reportes-reporte-errores-en-el-cierre') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Reporte de Errores en el
                                            Cierre</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="menu-nav">
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text" id="titulo-menu">Armonización Contable</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/armonizacion-contable-estado-posicion-financiera') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Estado de Posición
                                            Financiera</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/armonizacion-contable-estado-de-actividades') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Estado de Actividades</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/armonizacion-contable-estado-de-variacion') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Estado de Variación</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/armonizacion-contable-estado-analisis-deuda-otros-pasivos') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Estado de Análisis de Deuda y Otros
                                            Pasivos</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/armonizacion-contable-balanzas-analiticos-armonizados') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Balanzas y Analíticos
                                            Armonizados</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/armonizacion-contable-notas-estados-financieros') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Notas a los Estados
                                            Financieros</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="menu-nav">
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text" id="titulo-menu">Apertura</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/apertura-individual') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Apertura Inicial</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/apertura-final') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Apertura Final</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="menu-nav">
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text" id="titulo-menu">Presupuesto</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/presupuesto-actualiza-cuentas') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Actualiza Cuentas</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/presupuesto-gestion-presupuestal') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Gestión Presupuestal</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/presupuesto-estado-de-resultados') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Estado de Resultados</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="menu-nav">
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text" id="titulo-menu">Conciliación Bancaria</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/conciliacion-bancaria-IPE') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">IPE</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/conciliacion-bancaria-bancos') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Bancos</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/conciliacion-bancaria-consulta-de-cheques') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Consulta de Cheques</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/conciliacion-bancaria-consulta-de-cheques-historico') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Consulta de Cheques del
                                            Histórico</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/conciliacion-bancaria-conciliacion') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Conciliación</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('contabilidad/conciliacion-bancaria-imprime-reporte') }}" class="menu-link">
                                        <span class="menu-text" id="titulo-sub-menu">Imprime Reporte</span>
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
