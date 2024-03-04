<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_api_errors_problem' => [['status'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], [], [['variable', '/', '[^/]++', 'status', true], ['text', '/api/errors']], [], [], []],
    '_api_errors_hydra' => [['status'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], [], [['variable', '/', '[^/]++', 'status', true], ['text', '/api/errors']], [], [], []],
    '_api_errors_jsonapi' => [['status'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], [], [['variable', '/', '[^/]++', 'status', true], ['text', '/api/errors']], [], [], []],
    '_api_validation_errors_problem' => [['id'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_hydra' => [['id'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_jsonapi' => [['id'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_/commandes/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/commandes']], [], [], []],
    '_api_/commandes{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/commandes']], [], [], []],
    '_api_/commandes{._format}_post' => [['_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/commandes']], [], [], []],
    '_api_/commandes/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/commandes']], [], [], []],
    '_api_/commandes/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/commandes']], [], [], []],
    '_api_/commandes/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commande', '_api_operation_name' => '_api_/commandes/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/commandes']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'app_adresse_index' => [[], ['_controller' => 'App\\Controller\\AdresseController::index'], [], [['text', '/adresse/']], [], [], []],
    'app_adresse_new' => [[], ['_controller' => 'App\\Controller\\AdresseController::new'], [], [['text', '/adresse/new']], [], [], []],
    'app_adresse_new_fact' => [[], ['_controller' => 'App\\Controller\\AdresseController::fact'], [], [['text', '/adresse/new/fact']], [], [], []],
    'app_adresse_show' => [['id'], ['_controller' => 'App\\Controller\\AdresseController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adresse']], [], [], []],
    'app_adresse_edit' => [['id'], ['_controller' => 'App\\Controller\\AdresseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/adresse']], [], [], []],
    'app_adresse_delete' => [['id'], ['_controller' => 'App\\Controller\\AdresseController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adresse']], [], [], []],
    'app_aeroboxe' => [[], ['_controller' => 'App\\Controller\\AeroboxeController::index'], [], [['text', '/aeroboxe']], [], [], []],
    'app_ba' => [[], ['_controller' => 'App\\Controller\\BaController::index'], [], [['text', '/ba']], [], [], []],
    'app_bea' => [[], ['_controller' => 'App\\Controller\\BeaController::index'], [], [['text', '/bea']], [], [], []],
    'app_bp' => [[], ['_controller' => 'App\\Controller\\BpController::index'], [], [['text', '/bp']], [], [], []],
    'app_cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/mon-panier']], [], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::addToCart'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/mon-panier/add']], [], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::removeToCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/mon-panier/remove']], [], [], []],
    'cart_removeAll' => [[], ['_controller' => 'App\\Controller\\CartController::removeAll'], [], [['text', '/mon-panier/removeAll']], [], [], []],
    'app_club' => [[], ['_controller' => 'App\\Controller\\ClubController::index'], [], [['text', '/club']], [], [], []],
    'order_create' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/order/create']], [], [], []],
    'order_prepare' => [[], ['_controller' => 'App\\Controller\\CommandeController::prepareOrder'], [], [['text', '/order/verify']], [], [], []],
    'app_formedeboxe' => [[], ['_controller' => 'App\\Controller\\FormedeboxeController::index'], [], [['text', '/formedeboxe']], [], [], []],
    'app_horaire' => [[], ['_controller' => 'App\\Controller\\HoraireController::index'], [], [['text', '/horaire']], [], [], []],
    'payment_stripe' => [['reference'], ['_controller' => 'App\\Controller\\PaymentController::stripeCheckout'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/order/create-session-stripe']], [], [], []],
    'payment_success' => [['reference'], ['_controller' => 'App\\Controller\\PaymentController::stripeSuccess'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/order/success']], [], [], []],
    'payment_error' => [['reference'], ['_controller' => 'App\\Controller\\PaymentController::stripeError'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/order/error']], [], [], []],
    'app_inscription' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], [], []],
    'app_connexion' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_stripe_charge' => [['reference'], ['_controller' => 'App\\Controller\\StripeController::createCharge'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/stripe/create-charge']], [], [], []],
    'app_stripe' => [['reference'], ['_controller' => 'App\\Controller\\StripeController::index'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/stripe']], [], [], []],
    'App\Controller\AccueilController::index' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\AdresseController::index' => [[], ['_controller' => 'App\\Controller\\AdresseController::index'], [], [['text', '/adresse/']], [], [], []],
    'App\Controller\AdresseController::new' => [[], ['_controller' => 'App\\Controller\\AdresseController::new'], [], [['text', '/adresse/new']], [], [], []],
    'App\Controller\AdresseController::fact' => [[], ['_controller' => 'App\\Controller\\AdresseController::fact'], [], [['text', '/adresse/new/fact']], [], [], []],
    'App\Controller\AdresseController::show' => [['id'], ['_controller' => 'App\\Controller\\AdresseController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adresse']], [], [], []],
    'App\Controller\AdresseController::edit' => [['id'], ['_controller' => 'App\\Controller\\AdresseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/adresse']], [], [], []],
    'App\Controller\AdresseController::delete' => [['id'], ['_controller' => 'App\\Controller\\AdresseController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adresse']], [], [], []],
    'App\Controller\AeroboxeController::index' => [[], ['_controller' => 'App\\Controller\\AeroboxeController::index'], [], [['text', '/aeroboxe']], [], [], []],
    'App\Controller\BaController::index' => [[], ['_controller' => 'App\\Controller\\BaController::index'], [], [['text', '/ba']], [], [], []],
    'App\Controller\BeaController::index' => [[], ['_controller' => 'App\\Controller\\BeaController::index'], [], [['text', '/bea']], [], [], []],
    'App\Controller\BpController::index' => [[], ['_controller' => 'App\\Controller\\BpController::index'], [], [['text', '/bp']], [], [], []],
    'App\Controller\CartController::index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/mon-panier']], [], [], []],
    'App\Controller\CartController::addToCart' => [['id'], ['_controller' => 'App\\Controller\\CartController::addToCart'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/mon-panier/add']], [], [], []],
    'App\Controller\CartController::removeToCart' => [['id'], ['_controller' => 'App\\Controller\\CartController::removeToCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/mon-panier/remove']], [], [], []],
    'App\Controller\CartController::removeAll' => [[], ['_controller' => 'App\\Controller\\CartController::removeAll'], [], [['text', '/mon-panier/removeAll']], [], [], []],
    'App\Controller\ClubController::index' => [[], ['_controller' => 'App\\Controller\\ClubController::index'], [], [['text', '/club']], [], [], []],
    'App\Controller\CommandeController::index' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/order/create']], [], [], []],
    'App\Controller\CommandeController::prepareOrder' => [[], ['_controller' => 'App\\Controller\\CommandeController::prepareOrder'], [], [['text', '/order/verify']], [], [], []],
    'App\Controller\FormedeboxeController::index' => [[], ['_controller' => 'App\\Controller\\FormedeboxeController::index'], [], [['text', '/formedeboxe']], [], [], []],
    'App\Controller\HoraireController::index' => [[], ['_controller' => 'App\\Controller\\HoraireController::index'], [], [['text', '/horaire']], [], [], []],
    'App\Controller\PaymentController::stripeCheckout' => [['reference'], ['_controller' => 'App\\Controller\\PaymentController::stripeCheckout'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/order/create-session-stripe']], [], [], []],
    'App\Controller\PaymentController::stripeSuccess' => [['reference'], ['_controller' => 'App\\Controller\\PaymentController::stripeSuccess'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/order/success']], [], [], []],
    'App\Controller\PaymentController::stripeError' => [['reference'], ['_controller' => 'App\\Controller\\PaymentController::stripeError'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/order/error']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\StripeController::createCharge' => [['reference'], ['_controller' => 'App\\Controller\\StripeController::createCharge'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/stripe/create-charge']], [], [], []],
    'App\Controller\StripeController::index' => [['reference'], ['_controller' => 'App\\Controller\\StripeController::index'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/stripe']], [], [], []],
];
