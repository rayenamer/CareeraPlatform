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
        '/event' => [[['_route' => 'app_event', '_controller' => 'App\\Controller\\EvenementsController::index'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'evenement_index', '_controller' => 'App\\Controller\\EventModController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'evenement_new', '_controller' => 'App\\Controller\\EventModController::new'], null, null, null, false, false, null]],
        '/api/evenements/recherche' => [[['_route' => 'api_evenements_recherche', '_controller' => 'App\\Controller\\EventModController::recherche'], null, ['GET' => 0], null, false, false, null]],
        '/type' => [[['_route' => 'type_index', '_controller' => 'App\\Controller\\EventTypeController::index'], null, null, null, false, false, null]],
        '/addtypeEvent' => [[['_route' => 'type_new', '_controller' => 'App\\Controller\\EventTypeController::new'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/e(?'
                    .'|vent/([^/]++)(*:220)'
                    .'|dit(?'
                        .'|/([^/]++)(*:243)'
                        .'|Type/([^/]++)(*:264)'
                    .')'
                .')'
                .'|/del(?'
                    .'|Event/([^/]++)(*:295)'
                    .'|typeEvent/([^/]++)(*:321)'
                .')'
                .'|/participer/([^/]++)(*:350)'
                .'|/annuler/([^/]++)(*:375)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        220 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EvenementsController::show'], ['id'], null, null, false, true, null]],
        243 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EventModController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        264 => [[['_route' => 'type_edit', '_controller' => 'App\\Controller\\EventTypeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        295 => [[['_route' => 'event_del', '_controller' => 'App\\Controller\\EventModController::supprimeroffre'], ['id'], null, null, false, true, null]],
        321 => [[['_route' => 'typeEvent_delete', '_controller' => 'App\\Controller\\EventTypeController::supprimeroffre'], ['id'], null, null, false, true, null]],
        350 => [[['_route' => 'evenement_participer', '_controller' => 'App\\Controller\\EventModController::participer'], ['id'], ['POST' => 0], null, false, true, null]],
        375 => [
            [['_route' => 'evenement_annuler', '_controller' => 'App\\Controller\\EventModController::annuler'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
