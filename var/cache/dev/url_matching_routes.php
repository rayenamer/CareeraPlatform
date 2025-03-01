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
        '/candidature' => [[['_route' => 'app_candidature', '_controller' => 'App\\Controller\\CandidaturemissionController::index'], null, null, null, false, false, null]],
        '/candidatures' => [[['_route' => 'app_lister_toutes_candidatures', '_controller' => 'App\\Controller\\CandidaturemissionController::listerToutesCandidatures'], null, null, null, false, false, null]],
        '/recherche-offre-mission' => [[['_route' => 'app_recherche_offre_mission', '_controller' => 'App\\Controller\\CherchermissionController::recherche'], null, null, null, false, false, null]],
        '/demande/mission' => [[['_route' => 'app_demande_mission_index', '_controller' => 'App\\Controller\\DemandeMissionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/demande/mission/new' => [[['_route' => 'app_demande_mission_new', '_controller' => 'App\\Controller\\DemandeMissionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/offrefrelencer' => [[['_route' => 'app_offrefrelencer_index', '_controller' => 'App\\Controller\\MissionfreelencerController::index'], null, ['GET' => 0], null, false, false, null]],
        '/offrefrelencer/new' => [[['_route' => 'app_offrefrelencer_new', '_controller' => 'App\\Controller\\MissionfreelencerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/notificationfreelencer' => [[['_route' => 'app_notificationfreelencer', '_controller' => 'App\\Controller\\NotificationfreelencerController::index'], null, null, null, false, false, null]],
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
                .'|/postuler/([^/]++)/([^/]++)(*:229)'
                .'|/candidature/([^/]++)/(?'
                    .'|evaluer(*:269)'
                    .'|([^/]++)(*:285)'
                .')'
                .'|/demande/mission/(?'
                    .'|(\\d+)(*:319)'
                    .'|([^/]++)(?'
                        .'|/edit(*:343)'
                        .'|(*:351)'
                    .')'
                    .'|mes\\-candidatures(*:377)'
                .')'
                .'|/offrefrelencer/(?'
                    .'|([^/]++)(?'
                        .'|(*:416)'
                        .'|/edit(*:429)'
                        .'|(*:437)'
                    .')'
                    .'|recherche_offre(*:461)'
                    .'|offre/(?'
                        .'|([^/]++)(*:486)'
                        .'|publier/([^/]++)(*:510)'
                    .')'
                    .'|candidature/([^/]++)(*:539)'
                .')'
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
        229 => [[['_route' => 'app_postuler_a_offre', '_controller' => 'App\\Controller\\CandidaturemissionController::postulerAOffre'], ['offreId', 'utilisateurId'], null, null, false, true, null]],
        269 => [[['_route' => 'evaluer_candidature', '_controller' => 'App\\Controller\\CandidaturemissionController::evaluerCandidature'], ['id'], ['POST' => 0], null, false, false, null]],
        285 => [[['_route' => 'accepter_refuser_candidature', '_controller' => 'App\\Controller\\CandidaturemissionController::accepterOuRefuserCandidature'], ['id', 'action'], ['POST' => 0], null, false, true, null]],
        319 => [[['_route' => 'voir_demande_details', '_controller' => 'App\\Controller\\CandidaturemissionController::voirDemandeDetails'], ['id'], null, null, false, true, null]],
        343 => [[['_route' => 'app_demande_mission_edit', '_controller' => 'App\\Controller\\DemandeMissionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        351 => [[['_route' => 'app_demande_mission_delete', '_controller' => 'App\\Controller\\DemandeMissionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        377 => [[['_route' => 'app_mes_candidatures', '_controller' => 'App\\Controller\\DemandeMissionController::consulterCandidatures'], [], null, null, false, false, null]],
        416 => [[['_route' => 'app_offrefrelencer_show', '_controller' => 'App\\Controller\\MissionfreelencerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        429 => [[['_route' => 'app_offrefrelencer_edit', '_controller' => 'App\\Controller\\MissionfreelencerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        437 => [[['_route' => 'app_offrefrelencer_delete', '_controller' => 'App\\Controller\\MissionfreelencerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        461 => [[['_route' => 'app_recherche_offre', '_controller' => 'App\\Controller\\MissionfreelencerController::recherche'], [], null, null, false, false, null]],
        486 => [[['_route' => 'app_offre_details', '_controller' => 'App\\Controller\\MissionfreelencerController::showOfferDetails'], ['id'], null, null, false, true, null]],
        510 => [[['_route' => 'app_offre_publier', '_controller' => 'App\\Controller\\MissionfreelencerController::publierOffre'], ['id'], null, null, false, true, null]],
        539 => [
            [['_route' => 'app_consulter_candidature', '_controller' => 'App\\Controller\\MissionfreelencerController::consulterCandidature'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
