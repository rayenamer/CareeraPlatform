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
        '/admin/blocked-users' => [[['_route' => 'admin_blocked_users', '_controller' => 'App\\Controller\\BlockedUsersController::blockedUsers'], null, null, null, false, false, null]],
        '/showcandidature' => [[['_route' => 'app_showcandidature', '_controller' => 'App\\Controller\\CandidatureController::showcandidature'], null, null, null, false, false, null]],
        '/acceptes' => [[['_route' => 'app_acceptees', '_controller' => 'App\\Controller\\CandidatureController::Acceptees'], null, null, null, false, false, null]],
        '/rejetes' => [[['_route' => 'app_rejetees', '_controller' => 'App\\Controller\\CandidatureController::Rejetees'], null, null, null, false, false, null]],
        '/candidature' => [[['_route' => 'app_candidature', '_controller' => 'App\\Controller\\CandidaturemissionController::index'], null, null, null, false, false, null]],
        '/candidatures' => [[['_route' => 'app_lister_toutes_candidatures', '_controller' => 'App\\Controller\\CandidaturemissionController::listerToutesCandidatures'], null, null, null, false, false, null]],
        '/recherche-offre-mission' => [[['_route' => 'app_recherche_offre_mission', '_controller' => 'App\\Controller\\CherchermissionController::recherche'], null, null, null, false, false, null]],
        '/profilechercheur' => [[['_route' => 'app_chercheurprofile', '_controller' => 'App\\Controller\\ChercheurController::profile'], null, null, null, false, false, null]],
        '/chercheur' => [[['_route' => 'app_chercheur', '_controller' => 'App\\Controller\\ChercheurController::index'], null, null, null, false, false, null]],
        '/community' => [[['_route' => 'app_community', '_controller' => 'App\\Controller\\CommunityController::index'], null, null, null, false, false, null]],
        '/demande/mission' => [[['_route' => 'app_demande_mission_index', '_controller' => 'App\\Controller\\DemandeMissionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/demande/mission/new' => [[['_route' => 'app_demande_mission_new', '_controller' => 'App\\Controller\\DemandeMissionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forum' => [[['_route' => 'app_forum', '_controller' => 'App\\Controller\\ForumController::index'], null, null, null, false, false, null]],
        '/addDiscussion' => [[['_route' => 'app_addDiscussion', '_controller' => 'App\\Controller\\ForumController::addDiscussion'], null, null, null, false, false, null]],
        '/discussion/stats' => [[['_route' => 'discussion_stats', '_controller' => 'App\\Controller\\ForumController::discussionStats'], null, ['GET' => 0], null, false, false, null]],
        '/profilefreelancer' => [[['_route' => 'app_profilefreelancer', '_controller' => 'App\\Controller\\FreelancerController::profile'], null, null, null, false, false, null]],
        '/freelancer' => [[['_route' => 'app_freelancer', '_controller' => 'App\\Controller\\FreelancerController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/indexhome' => [[['_route' => 'app_indexhome', '_controller' => 'App\\Controller\\IndexController::indexhome'], null, null, null, false, false, null]],
        '/offrefrelencer' => [[['_route' => 'app_offrefrelencer_index', '_controller' => 'App\\Controller\\MissionfreelencerController::index'], null, ['GET' => 0], null, false, false, null]],
        '/offrefrelencer/new' => [[['_route' => 'app_offrefrelencer_new', '_controller' => 'App\\Controller\\MissionfreelencerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profilemoderateur' => [[['_route' => 'app_profilemoderateur', '_controller' => 'App\\Controller\\ModerateurController::profile'], null, null, null, false, false, null]],
        '/moderateur' => [[['_route' => 'app_moderateur', '_controller' => 'App\\Controller\\ModerateurController::index'], null, null, null, false, false, null]],
        '/notificationfreelencer' => [[['_route' => 'app_notificationfreelencer', '_controller' => 'App\\Controller\\NotificationfreelencerController::index'], null, null, null, false, false, null]],
        '/recherche' => [[['_route' => 'app_recherche', '_controller' => 'App\\Controller\\OffreController::recherche'], null, null, null, false, false, null]],
        '/offremod' => [[['_route' => 'app_offremod', '_controller' => 'App\\Controller\\OffremodController::index'], null, null, null, false, false, null]],
        '/ajoutoffre' => [[['_route' => 'app_ajoutoffre', '_controller' => 'App\\Controller\\OffremodController::ajoutoffre'], null, null, null, false, false, null]],
        '/statistiques' => [[['_route' => 'app_statistiques', '_controller' => 'App\\Controller\\OffremodController::statistiques'], null, null, null, false, false, null]],
        '/export/pdf2' => [[['_route' => 'app_export_pdf2', '_controller' => 'App\\Controller\\OffremodController::exportToPdf2'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/typecontrat' => [[['_route' => 'app_typecontrat', '_controller' => 'App\\Controller\\TypecontratController::index'], null, null, null, false, false, null]],
        '/showtypecontrat' => [[['_route' => 'app_showtypecontrat', '_controller' => 'App\\Controller\\TypecontratController::showtypecontrat'], null, null, null, false, false, null]],
        '/addtypecontrat' => [[['_route' => 'app_addtypecontrat', '_controller' => 'App\\Controller\\TypecontratController::addtypecontrat'], null, null, null, false, false, null]],
        '/typeoffre' => [[['_route' => 'app_typeoffre', '_controller' => 'App\\Controller\\TypeoffreController::index'], null, null, null, false, false, null]],
        '/showtypeoffre' => [[['_route' => 'app_showtypeoffre', '_controller' => 'App\\Controller\\TypeoffreController::showtypeoffre'], null, null, null, false, false, null]],
        '/addtypeoffre' => [[['_route' => 'app_addtypeoffre', '_controller' => 'App\\Controller\\TypeoffreController::addtypeoffre'], null, null, null, false, false, null]],
        '/user/data' => [[['_route' => 'user_data', '_controller' => 'App\\Controller\\UserDataController::getUserData'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/a(?'
                    .'|dd(?'
                        .'|candidature/([^/]++)(*:232)'
                        .'|Reply/([^/]++)(*:254)'
                    .')'
                    .'|ccept/([^/]++)(*:277)'
                .')'
                .'|/update(?'
                    .'|c(?'
                        .'|andidature/([^/]++)(*:319)'
                        .'|hercheur/([^/]++)(*:344)'
                    .')'
                    .'|freelancer/([^/]++)(*:372)'
                    .'|moderateur/([^/]++)(*:399)'
                .')'
                .'|/de(?'
                    .'|lete(?'
                        .'|c(?'
                            .'|andidature/([^/]++)(*:444)'
                            .'|hercheur/([^/]++)(*:469)'
                        .')'
                        .'|freelancer/([^/]++)(*:497)'
                        .'|moderateur/([^/]++)(*:524)'
                    .')'
                    .'|mande/mission/(?'
                        .'|(\\d+)(*:555)'
                        .'|demande/([^/]++)(*:579)'
                        .'|([^/]++)(?'
                            .'|/edit(*:603)'
                            .'|(*:611)'
                        .')'
                        .'|mes\\-candidatures(*:637)'
                    .')'
                .')'
                .'|/reject/([^/]++)(*:663)'
                .'|/export/pdf/([^/]++)(*:691)'
                .'|/postuler/([^/]++)/([^/]++)(*:726)'
                .'|/candidature/([^/]++)/(?'
                    .'|evaluer(*:766)'
                    .'|([^/]++)(*:782)'
                .')'
                .'|/Delete(?'
                    .'|Discussion/([^/]++)(*:820)'
                    .'|Reply/([^/]++)/([^/]++)(*:851)'
                .')'
                .'|/U(?'
                    .'|pdate(?'
                        .'|Discussion/([^/]++)(*:892)'
                        .'|Reply/([^/]++)/([^/]++)(*:923)'
                    .')'
                    .'|nAdd(?'
                        .'|Like/([^/]++)(*:952)'
                        .'|DisLike(?'
                            .'|/([^/]++)(*:979)'
                            .'|ToReply/([^/]++)(*:1003)'
                        .')'
                    .')'
                .')'
                .'|/Add(?'
                    .'|Like(?'
                        .'|/([^/]++)(*:1038)'
                        .'|ToReply/([^/]++)(*:1063)'
                    .')'
                    .'|DisLike(?'
                        .'|/([^/]++)(*:1092)'
                        .'|ToReply/([^/]++)(*:1117)'
                    .')'
                .')'
                .'|/forum/details/([^/]++)(*:1151)'
                .'|/messages/([^/]++)(*:1178)'
                .'|/se(?'
                    .'|nd/([^/]++)(*:1204)'
                    .'|tNotificationTrue/([^/]++)(*:1239)'
                .')'
                .'|/offrefrelencer/(?'
                    .'|([^/]++)(?'
                        .'|(*:1279)'
                        .'|/edit(*:1293)'
                        .'|(*:1302)'
                    .')'
                    .'|offre/(?'
                        .'|([^/]++)(*:1329)'
                        .'|publier/([^/]++)(*:1354)'
                    .')'
                    .'|candidature/([^/]++)(*:1384)'
                .')'
                .'|/notification/([^/]++)(*:1416)'
                .'|/(en|fr)/offre(*:1439)'
                .'|/postuler/([^/]++)(*:1466)'
                .'|/modifoffre/([^/]++)(*:1495)'
                .'|/supprimeroffre/([^/]++)(*:1528)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1573)'
                .'|/updatetype(?'
                    .'|contrat/([^/]++)(*:1612)'
                    .'|offre/([^/]++)(*:1635)'
                .')'
                .'|/deletetype(?'
                    .'|contrat/([^/]++)(*:1675)'
                    .'|offre/([^/]++)(*:1698)'
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
        232 => [[['_route' => 'app_addcandidature', '_controller' => 'App\\Controller\\CandidatureController::addcandidature'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'app_addReply', '_controller' => 'App\\Controller\\ForumDetailsController::AddReply'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'app_accept', '_controller' => 'App\\Controller\\CandidatureController::accept'], ['id'], null, null, false, true, null]],
        319 => [[['_route' => 'app_updatecandidature', '_controller' => 'App\\Controller\\CandidatureController::updatecandidature'], ['id'], null, null, false, true, null]],
        344 => [[['_route' => 'app_updatechercheur', '_controller' => 'App\\Controller\\ChercheurController::updatechercheur'], ['id'], null, null, false, true, null]],
        372 => [[['_route' => 'app_updatefreelancer', '_controller' => 'App\\Controller\\FreelancerController::updatefreelancer'], ['id'], null, null, false, true, null]],
        399 => [[['_route' => 'app_updatemoderateur', '_controller' => 'App\\Controller\\ModerateurController::updatemoderateur'], ['id'], null, null, false, true, null]],
        444 => [[['_route' => 'app_deletecandidature', '_controller' => 'App\\Controller\\CandidatureController::deletecandidature'], ['id'], null, null, false, true, null]],
        469 => [[['_route' => 'app_deletechercheur', '_controller' => 'App\\Controller\\ChercheurController::deletechercheur'], ['id'], null, null, false, true, null]],
        497 => [[['_route' => 'app_deletefreelancer', '_controller' => 'App\\Controller\\FreelancerController::deletefreelancer'], ['id'], null, null, false, true, null]],
        524 => [[['_route' => 'app_deletemoderateur', '_controller' => 'App\\Controller\\ModerateurController::deletemoderateur'], ['id'], null, null, false, true, null]],
        555 => [[['_route' => 'voir_demande_details', '_controller' => 'App\\Controller\\CandidaturemissionController::voirDemandeDetails'], ['id'], null, null, false, true, null]],
        579 => [[['_route' => 'app_demande_mission_show', '_controller' => 'App\\Controller\\DemandeMissionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        603 => [[['_route' => 'app_demande_mission_edit', '_controller' => 'App\\Controller\\DemandeMissionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        611 => [[['_route' => 'app_demande_mission_delete', '_controller' => 'App\\Controller\\DemandeMissionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        637 => [[['_route' => 'app_mes_candidatures', '_controller' => 'App\\Controller\\DemandeMissionController::consulterCandidatures'], [], ['GET' => 0], null, false, false, null]],
        663 => [[['_route' => 'app_reject', '_controller' => 'App\\Controller\\CandidatureController::rejectCandidature'], ['id'], null, null, false, true, null]],
        691 => [[['_route' => 'app_export_pdf', '_controller' => 'App\\Controller\\CandidatureController::exportToPdf'], ['id'], null, null, false, true, null]],
        726 => [[['_route' => 'app_postuler_a_offre', '_controller' => 'App\\Controller\\CandidaturemissionController::postulerAOffre'], ['offreId', 'utilisateurId'], null, null, false, true, null]],
        766 => [[['_route' => 'evaluer_candidature', '_controller' => 'App\\Controller\\CandidaturemissionController::evaluerCandidature'], ['id'], ['POST' => 0], null, false, false, null]],
        782 => [[['_route' => 'accepter_refuser_candidature', '_controller' => 'App\\Controller\\CandidaturemissionController::accepterOuRefuserCandidature'], ['id', 'action'], ['POST' => 0], null, false, true, null]],
        820 => [[['_route' => 'app_deleteDiscussion', '_controller' => 'App\\Controller\\ForumController::deleteDiscussion'], ['id'], null, null, false, true, null]],
        851 => [[['_route' => 'app_deleteReply', '_controller' => 'App\\Controller\\ForumDetailsController::deleteReply'], ['discussionId', 'replyId'], null, null, false, true, null]],
        892 => [[['_route' => 'app_updateDiscussion', '_controller' => 'App\\Controller\\ForumController::updateDiscussion'], ['id'], null, null, false, true, null]],
        923 => [[['_route' => 'app_UpdateReply', '_controller' => 'App\\Controller\\ForumDetailsController::UpdateReply'], ['discussionId', 'replyId'], null, null, false, true, null]],
        952 => [[['_route' => 'app_UnAddLike', '_controller' => 'App\\Controller\\ForumController::UnAddLike'], ['id'], null, null, false, true, null]],
        979 => [[['_route' => 'app_UnAddDisLike', '_controller' => 'App\\Controller\\ForumController::UnAddDisLike'], ['id'], null, null, false, true, null]],
        1003 => [[['_route' => 'app_UnAddDisLikeToReply', '_controller' => 'App\\Controller\\ForumDetailsController::UnAddDisLike'], ['id'], null, null, false, true, null]],
        1038 => [[['_route' => 'app_AddLike', '_controller' => 'App\\Controller\\ForumController::AddLike'], ['id'], null, null, false, true, null]],
        1063 => [[['_route' => 'app_AddLikeToReply', '_controller' => 'App\\Controller\\ForumDetailsController::AddLike'], ['id'], null, null, false, true, null]],
        1092 => [[['_route' => 'app_AddDisLike', '_controller' => 'App\\Controller\\ForumController::AddDisLike'], ['id'], null, null, false, true, null]],
        1117 => [[['_route' => 'app_AdddisLikeToReply', '_controller' => 'App\\Controller\\ForumDetailsController::AddDisLike'], ['id'], null, null, false, true, null]],
        1151 => [[['_route' => 'app_forum_details', '_controller' => 'App\\Controller\\ForumDetailsController::index'], ['id'], null, null, false, true, null]],
        1178 => [[['_route' => 'get_conversation', '_controller' => 'App\\Controller\\MessageController::getConversation'], ['messager2Id'], ['GET' => 0], null, false, true, null]],
        1204 => [[['_route' => 'send_message', '_controller' => 'App\\Controller\\MessageController::sendMessage'], ['messager2Id'], ['POST' => 0], null, false, true, null]],
        1239 => [[['_route' => 'app_setNotificationTrue', '_controller' => 'App\\Controller\\NotificationController::markAsRead'], ['id'], null, null, false, true, null]],
        1279 => [[['_route' => 'app_offrefrelencer_show', '_controller' => 'App\\Controller\\MissionfreelencerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1293 => [[['_route' => 'app_offrefrelencer_edit', '_controller' => 'App\\Controller\\MissionfreelencerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1302 => [[['_route' => 'app_offrefrelencer_delete', '_controller' => 'App\\Controller\\MissionfreelencerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1329 => [[['_route' => 'app_offre_details', '_controller' => 'App\\Controller\\MissionfreelencerController::showOfferDetails'], ['id'], null, null, false, true, null]],
        1354 => [[['_route' => 'app_offre_publier', '_controller' => 'App\\Controller\\MissionfreelencerController::publierOffre'], ['id'], null, null, false, true, null]],
        1384 => [[['_route' => 'app_consulter_candidature', '_controller' => 'App\\Controller\\MissionfreelencerController::consulterCandidature'], ['id'], ['GET' => 0], null, false, true, null]],
        1416 => [[['_route' => 'app_notification', '_controller' => 'App\\Controller\\NotificationController::index'], ['userId'], null, null, false, true, null]],
        1439 => [[['_route' => 'app_offre', '_controller' => 'App\\Controller\\OffreController::index'], ['_locale'], null, null, false, false, null]],
        1466 => [[['_route' => 'app_postuler', '_controller' => 'App\\Controller\\OffreController::postuler'], ['id'], null, null, false, true, null]],
        1495 => [[['_route' => 'app_modifoffre', '_controller' => 'App\\Controller\\OffremodController::modifoffre'], ['id'], null, null, false, true, null]],
        1528 => [[['_route' => 'app_supprimeroffre', '_controller' => 'App\\Controller\\OffremodController::supprimeroffre'], ['id'], null, null, false, true, null]],
        1573 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1612 => [[['_route' => 'app_updatetypecontrat', '_controller' => 'App\\Controller\\TypecontratController::updatetypecontrat'], ['id'], null, null, false, true, null]],
        1635 => [[['_route' => 'app_updatetypeoffre', '_controller' => 'App\\Controller\\TypeoffreController::updatetypeoffre'], ['id'], null, null, false, true, null]],
        1675 => [[['_route' => 'app_deletetypecontrat', '_controller' => 'App\\Controller\\TypecontratController::deletetypecontrat'], ['id'], null, null, false, true, null]],
        1698 => [
            [['_route' => 'app_deletetypeoffre', '_controller' => 'App\\Controller\\TypeoffreController::deletetypeoffre'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
