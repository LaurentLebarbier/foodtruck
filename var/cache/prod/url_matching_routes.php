<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|utilisateurs/modifier/([^/]++)(*:47)'
                    .'|option/([^/]++)/(?'
                        .'|edit(*:77)'
                        .'|delete(*:90)'
                    .')'
                    .'|produits/(?'
                        .'|([^/]++)(*:118)'
                        .'|remove/([^/]++)(*:141)'
                    .')'
                .')'
                .'|/produits/([a-z0-9\\-]*)\\-([^/]++)(*:184)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        47 => [[['_route' => 'admin_modifier_utilisateurs', '_controller' => 'App\\Controller\\Admin\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        77 => [[['_route' => 'admin_option_edit', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        90 => [[['_route' => 'admin_option_delete', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::delete'], ['id'], null, null, false, false, null]],
        118 => [[['_route' => 'admin_produits_edit', '_controller' => 'App\\Controller\\Admin\\AdminProduitsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        141 => [[['_route' => 'admin_produits_delete', '_controller' => 'App\\Controller\\Admin\\AdminProduitsController::delete'], ['id'], null, null, false, true, null]],
        184 => [
            [['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['slug', 'id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
