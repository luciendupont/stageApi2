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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/adresse' => [[['_route' => 'app_adresse_index', '_controller' => 'App\\Controller\\AdresseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/adresse/new' => [[['_route' => 'app_adresse_new', '_controller' => 'App\\Controller\\AdresseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/adresse/new/fact' => [[['_route' => 'app_adresse_new_fact', '_controller' => 'App\\Controller\\AdresseController::fact'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/aeroboxe' => [[['_route' => 'app_aeroboxe', '_controller' => 'App\\Controller\\AeroboxeController::index'], null, null, null, false, false, null]],
        '/ba' => [[['_route' => 'app_ba', '_controller' => 'App\\Controller\\BaController::index'], null, null, null, false, false, null]],
        '/bea' => [[['_route' => 'app_bea', '_controller' => 'App\\Controller\\BeaController::index'], null, null, null, false, false, null]],
        '/bp' => [[['_route' => 'app_bp', '_controller' => 'App\\Controller\\BpController::index'], null, null, null, false, false, null]],
        '/mon-panier' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/mon-panier/removeAll' => [[['_route' => 'cart_removeAll', '_controller' => 'App\\Controller\\CartController::removeAll'], null, null, null, false, false, null]],
        '/club' => [[['_route' => 'app_club', '_controller' => 'App\\Controller\\ClubController::index'], null, null, null, false, false, null]],
        '/order/create' => [[['_route' => 'order_create', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/order/verify' => [[['_route' => 'order_prepare', '_controller' => 'App\\Controller\\CommandeController::prepareOrder'], null, ['POST' => 0], null, false, false, null]],
        '/formedeboxe' => [[['_route' => 'app_formedeboxe', '_controller' => 'App\\Controller\\FormedeboxeController::index'], null, null, null, false, false, null]],
        '/horaire' => [[['_route' => 'app_horaire', '_controller' => 'App\\Controller\\HoraireController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_inscription', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_connexion', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:81)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:111)'
                            .'|co(?'
                                .'|ntexts/([^.]+)(?:\\.(jsonld))?(*:153)'
                                .'|mmandes(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:197)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:223)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:261)'
                                    .')'
                                .')'
                            .')'
                            .'|errors/([^/]++)(?'
                                .'|(*:290)'
                            .')'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:328)'
                            .')'
                        .')'
                    .')'
                    .'|dresse/([^/]++)(?'
                        .'|(*:357)'
                        .'|/edit(*:370)'
                        .'|(*:378)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:419)'
                    .'|wdt/([^/]++)(*:439)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:481)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:518)'
                                .'|router(*:532)'
                                .'|exception(?'
                                    .'|(*:552)'
                                    .'|\\.css(*:565)'
                                .')'
                            .')'
                            .'|(*:575)'
                        .')'
                    .')'
                .')'
                .'|/mon\\-panier/(?'
                    .'|add/(\\d+)(*:611)'
                    .'|remove/([^/]++)(*:634)'
                .')'
                .'|/order/(?'
                    .'|create\\-session\\-stripe/([^/]++)(*:685)'
                    .'|success/([^/]++)(*:709)'
                    .'|error/([^/]++)(*:731)'
                .')'
                .'|/stripe/(?'
                    .'|create\\-charge/([^/]++)(*:774)'
                    .'|([^/]++)(*:790)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        111 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        153 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        197 => [[['_route' => '_api_/commandes/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        223 => [
            [['_route' => '_api_/commandes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/commandes{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        261 => [
            [['_route' => '_api_/commandes/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/commandes/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/commandes/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        290 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], ['status'], ['GET' => 0], null, false, true, null],
        ],
        328 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        357 => [[['_route' => 'app_adresse_show', '_controller' => 'App\\Controller\\AdresseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        370 => [[['_route' => 'app_adresse_edit', '_controller' => 'App\\Controller\\AdresseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        378 => [[['_route' => 'app_adresse_delete', '_controller' => 'App\\Controller\\AdresseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        419 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        439 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        481 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        518 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        532 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        552 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        565 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        575 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        611 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::addToCart'], ['id'], null, null, false, true, null]],
        634 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::removeToCart'], ['id'], null, null, false, true, null]],
        685 => [[['_route' => 'payment_stripe', '_controller' => 'App\\Controller\\PaymentController::stripeCheckout'], ['reference'], null, null, false, true, null]],
        709 => [[['_route' => 'payment_success', '_controller' => 'App\\Controller\\PaymentController::stripeSuccess'], ['reference'], null, null, false, true, null]],
        731 => [[['_route' => 'payment_error', '_controller' => 'App\\Controller\\PaymentController::stripeError'], ['reference'], null, null, false, true, null]],
        774 => [[['_route' => 'app_stripe_charge', '_controller' => 'App\\Controller\\StripeController::createCharge'], ['reference'], ['POST' => 0], null, false, true, null]],
        790 => [
            [['_route' => 'app_stripe', '_controller' => 'App\\Controller\\StripeController::index'], ['reference'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
