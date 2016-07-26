<?php

    // Dashboard
    Breadcrumbs::register('dashboard', function($breadcrumbs) {
        $breadcrumbs->push('Inicio');
    });

    // Users
    Breadcrumbs::register('users', function($breadcrumbs) {
        $breadcrumbs->push('Usuarios', URL::to('user'));
    });
    // Crear User
    Breadcrumbs::register('create_user', function($breadcrumbs) {
        $breadcrumbs->parent('users');
        $breadcrumbs->push('Nuevo');
    });
    // Edit User
    Breadcrumbs::register('edit_user', function($breadcrumbs) {
        $breadcrumbs->parent('users');
        $breadcrumbs->push('Editar');
    });

    // Contribution Rate
    Breadcrumbs::register('contribution_rates', function($breadcrumbs) {
        $breadcrumbs->push('Tasas de Aporte', URL::to('contribution_rate'));
    });

    // IPC Rate
    Breadcrumbs::register('ipc_rates', function($breadcrumbs) {
        $breadcrumbs->push('Tasas de Índice de Precio al Consumidor', URL::to('ipc_rate'));
    });

    // Base Wage
    Breadcrumbs::register('base_wages', function($breadcrumbs) {
        $breadcrumbs->push('Sueldos de Personal de la Policía Nacional', URL::to('base_wage'));
    });

    // Monthly Report
    Breadcrumbs::register('monthly_reports', function($breadcrumbs) {
        $breadcrumbs->push('Reporte Mensual de Totales', URL::to('monthly_report'));
    });

    // Affiliates
    Breadcrumbs::register('affiliates', function($breadcrumbs) {
        $breadcrumbs->push('Afiliados', URL::to('affiliate'));
    });

    // Show Affiliate
    Breadcrumbs::register('show_affiliate', function($breadcrumbs, $affiliate) {
        $breadcrumbs->parent('affiliates');
        $breadcrumbs->push($affiliate->getTittleName(), URL::to('affiliate/'.$affiliate->id));
    });

    // Show Contribution
    Breadcrumbs::register('show_contribution', function($breadcrumbs, $affiliate) {
        $breadcrumbs->parent('show_affiliate', $affiliate);
        $breadcrumbs->push('Aportes');
    });

    // Show Register Contribution
    Breadcrumbs::register('register_contribution', function($breadcrumbs, $affiliate) {
        $breadcrumbs->parent('show_affiliate', $affiliate);
        $breadcrumbs->push('Registro de Aporte');
    });

    //Show Direct Contributions
    Breadcrumbs::register('show_direct_contributions', function($breadcrumbs) {
        $breadcrumbs->push('Aportes Directos', URL::to('aportepago'));
    });

    //Show Contribution
    Breadcrumbs::register('show_direct_contribution', function($breadcrumbs) {
        $breadcrumbs->push('Aporte Directo', URL::to('aportepago'));
    });





// Fondo de Retiro
Breadcrumbs::register('fondo_tramite', function($breadcrumbs, $afiliado) {
    $breadcrumbs->parent('show_afiliado', $afiliado);
    $breadcrumbs->push('Trámite de Fondo de Retiro');
});
