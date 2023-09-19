<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'admin_utilisateurs', '_controller' => 'App\\Controller\\Admin\\AdminController::usersList'], null, null, null, false, false, null]],
        '/admin/option' => [[['_route' => 'admin_option_index', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/option/new' => [[['_route' => 'admin_option_new', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/produits/index' => [[['_route' => 'admin_produits_index', '_controller' => 'App\\Controller\\Admin\\AdminProduitsController::index'], null, null, null, false, false, null]],
        '/admin/produits/create' => [[['_route' => 'admin_produits_new', '_controller' => 'App\\Controller\\Admin\\AdminProduitsController::new'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'order_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, true, false, null]],
        '/order/paiement' => [[['_route' => 'order_paiement', '_controller' => 'App\\Controller\\CartController::ajaxRequest'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'indexpage', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/carte' => [[['_route' => 'produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, true, false, null]],
        '/profil/modifier' => [[['_route' => 'profil_modifier', '_controller' => 'App\\Controller\\ProfilController::editProfile'], null, null, null, false, false, null]],
        '/profil/pass/modifier' => [[['_route' => 'profil_pass', '_controller' => 'App\\Controller\\ProfilController::editPass'], null, null, null, false, false, null]],
        '/profil/history' => [[['_route' => 'profil_history', '_controller' => 'App\\Controller\\ProfilController::history'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_inscription', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, true, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/admin/(?'
                    .'|utilisateurs/modifier/([^/]++)(*:208)'
                    .'|option/([^/]++)/(?'
                        .'|edit(*:239)'
                        .'|delete(*:253)'
                    .')'
                    .'|produits/(?'
                        .'|([^/]++)(*:282)'
                        .'|remove/([^/]++)(*:305)'
                    .')'
                .')'
                .'|/produits/([a-z0-9\\-]*)\\-([^/]++)(*:348)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:392)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        208 => [[['_route' => 'admin_modifier_utilisateurs', '_controller' => 'App\\Controller\\Admin\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'admin_option_edit', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        253 => [[['_route' => 'admin_option_delete', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::delete'], ['id'], null, null, false, false, null]],
        282 => [[['_route' => 'admin_produits_edit', '_controller' => 'App\\Controller\\Admin\\AdminProduitsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        305 => [[['_route' => 'admin_produits_delete', '_controller' => 'App\\Controller\\Admin\\AdminProduitsController::delete'], ['id'], null, null, false, true, null]],
        348 => [[['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['slug', 'id'], null, null, false, true, null]],
        392 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
