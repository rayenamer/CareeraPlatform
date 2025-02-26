<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
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
    'app_candidature' => [[], ['_controller' => 'App\\Controller\\CandidatureController::index'], [], [['text', '/candidature']], [], [], []],
    'app_showcandidature' => [[], ['_controller' => 'App\\Controller\\CandidatureController::showcandidature'], [], [['text', '/showcandidature']], [], [], []],
    'app_addcandidature' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::addcandidature'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/addcandidature']], [], [], []],
    'app_updatecandidature' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::updatecandidature'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatecandidature']], [], [], []],
    'app_deletecandidature' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::deletecandidature'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletecandidature']], [], [], []],
    'app_accept' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::accept'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/accept']], [], [], []],
    'app_reject' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::rejectCandidature'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reject']], [], [], []],
    'app_acceptees' => [[], ['_controller' => 'App\\Controller\\CandidatureController::Acceptees'], [], [['text', '/acceptes']], [], [], []],
    'app_rejetees' => [[], ['_controller' => 'App\\Controller\\CandidatureController::Rejetees'], [], [['text', '/rejetes']], [], [], []],
    'app_export_pdf' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::exportToPdf'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/export/pdf']], [], [], []],
    'app_chercheurprofile' => [[], ['_controller' => 'App\\Controller\\ChercheurController::profile'], [], [['text', '/profilechercheur']], [], [], []],
    'app_chercheur' => [[], ['_controller' => 'App\\Controller\\ChercheurController::index'], [], [['text', '/chercheur']], [], [], []],
    'app_updatechercheur' => [['id'], ['_controller' => 'App\\Controller\\ChercheurController::updatechercheur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatechercheur']], [], [], []],
    'app_deletechercheur' => [['id'], ['_controller' => 'App\\Controller\\ChercheurController::deletechercheur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletechercheur']], [], [], []],
    'app_profilefreelancer' => [[], ['_controller' => 'App\\Controller\\FreelancerController::profile'], [], [['text', '/profilefreelancer']], [], [], []],
    'app_freelancer' => [[], ['_controller' => 'App\\Controller\\FreelancerController::index'], [], [['text', '/freelancer']], [], [], []],
    'app_updatefreelancer' => [['id'], ['_controller' => 'App\\Controller\\FreelancerController::updatefreelancer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatefreelancer']], [], [], []],
    'app_deletefreelancer' => [['id'], ['_controller' => 'App\\Controller\\FreelancerController::deletefreelancer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletefreelancer']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'app_index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/index']], [], [], []],
    'app_indexhome' => [[], ['_controller' => 'App\\Controller\\IndexController::indexhome'], [], [['text', '/indexhome']], [], [], []],
    'app_profilemoderateur' => [[], ['_controller' => 'App\\Controller\\ModerateurController::profile'], [], [['text', '/profilemoderateur']], [], [], []],
    'app_moderateur' => [[], ['_controller' => 'App\\Controller\\ModerateurController::index'], [], [['text', '/moderateur']], [], [], []],
    'app_updatemoderateur' => [['id'], ['_controller' => 'App\\Controller\\ModerateurController::updatemoderateur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatemoderateur']], [], [], []],
    'app_deletemoderateur' => [['id'], ['_controller' => 'App\\Controller\\ModerateurController::deletemoderateur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletemoderateur']], [], [], []],
    'app_offre' => [['_locale'], ['_controller' => 'App\\Controller\\OffreController::index'], ['_locale' => 'en|fr'], [['text', '/offre'], ['variable', '/', 'en|fr', '_locale', true]], [], [], []],
    'app_postuler' => [['id'], ['_controller' => 'App\\Controller\\OffreController::postuler'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/postuler']], [], [], []],
    'app_recherche' => [[], ['_controller' => 'App\\Controller\\OffreController::recherche'], [], [['text', '/recherche']], [], [], []],
    'app_offremod' => [[], ['_controller' => 'App\\Controller\\OffremodController::index'], [], [['text', '/offremod']], [], [], []],
    'app_ajoutoffre' => [[], ['_controller' => 'App\\Controller\\OffremodController::ajoutoffre'], [], [['text', '/ajoutoffre']], [], [], []],
    'app_modifoffre' => [['id'], ['_controller' => 'App\\Controller\\OffremodController::modifoffre'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modifoffre']], [], [], []],
    'app_supprimeroffre' => [['id'], ['_controller' => 'App\\Controller\\OffremodController::supprimeroffre'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/supprimeroffre']], [], [], []],
    'app_statistiques' => [[], ['_controller' => 'App\\Controller\\OffremodController::statistiques'], [], [['text', '/statistiques']], [], [], []],
    'app_export_pdf2' => [[], ['_controller' => 'App\\Controller\\OffremodController::exportToPdf2'], [], [['text', '/export/pdf2']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_typecontrat' => [[], ['_controller' => 'App\\Controller\\TypecontratController::index'], [], [['text', '/typecontrat']], [], [], []],
    'app_showtypecontrat' => [[], ['_controller' => 'App\\Controller\\TypecontratController::showtypecontrat'], [], [['text', '/showtypecontrat']], [], [], []],
    'app_addtypecontrat' => [[], ['_controller' => 'App\\Controller\\TypecontratController::addtypecontrat'], [], [['text', '/addtypecontrat']], [], [], []],
    'app_updatetypecontrat' => [['id'], ['_controller' => 'App\\Controller\\TypecontratController::updatetypecontrat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatetypecontrat']], [], [], []],
    'app_deletetypecontrat' => [['id'], ['_controller' => 'App\\Controller\\TypecontratController::deletetypecontrat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletetypecontrat']], [], [], []],
    'app_typeoffre' => [[], ['_controller' => 'App\\Controller\\TypeoffreController::index'], [], [['text', '/typeoffre']], [], [], []],
    'app_showtypeoffre' => [[], ['_controller' => 'App\\Controller\\TypeoffreController::showtypeoffre'], [], [['text', '/showtypeoffre']], [], [], []],
    'app_addtypeoffre' => [[], ['_controller' => 'App\\Controller\\TypeoffreController::addtypeoffre'], [], [['text', '/addtypeoffre']], [], [], []],
    'app_updatetypeoffre' => [['id'], ['_controller' => 'App\\Controller\\TypeoffreController::updatetypeoffre'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatetypeoffre']], [], [], []],
    'app_deletetypeoffre' => [['id'], ['_controller' => 'App\\Controller\\TypeoffreController::deletetypeoffre'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletetypeoffre']], [], [], []],
    'user_data' => [[], ['_controller' => 'App\\Controller\\UserDataController::getUserData'], [], [['text', '/user/data']], [], [], []],
    'App\Controller\CandidatureController::index' => [[], ['_controller' => 'App\\Controller\\CandidatureController::index'], [], [['text', '/candidature']], [], [], []],
    'App\Controller\CandidatureController::showcandidature' => [[], ['_controller' => 'App\\Controller\\CandidatureController::showcandidature'], [], [['text', '/showcandidature']], [], [], []],
    'App\Controller\CandidatureController::addcandidature' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::addcandidature'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/addcandidature']], [], [], []],
    'App\Controller\CandidatureController::updatecandidature' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::updatecandidature'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatecandidature']], [], [], []],
    'App\Controller\CandidatureController::deletecandidature' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::deletecandidature'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletecandidature']], [], [], []],
    'App\Controller\CandidatureController::accept' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::accept'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/accept']], [], [], []],
    'App\Controller\CandidatureController::rejectCandidature' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::rejectCandidature'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reject']], [], [], []],
    'App\Controller\CandidatureController::Acceptees' => [[], ['_controller' => 'App\\Controller\\CandidatureController::Acceptees'], [], [['text', '/acceptes']], [], [], []],
    'App\Controller\CandidatureController::Rejetees' => [[], ['_controller' => 'App\\Controller\\CandidatureController::Rejetees'], [], [['text', '/rejetes']], [], [], []],
    'App\Controller\CandidatureController::exportToPdf' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::exportToPdf'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/export/pdf']], [], [], []],
    'App\Controller\ChercheurController::profile' => [[], ['_controller' => 'App\\Controller\\ChercheurController::profile'], [], [['text', '/profilechercheur']], [], [], []],
    'App\Controller\ChercheurController::index' => [[], ['_controller' => 'App\\Controller\\ChercheurController::index'], [], [['text', '/chercheur']], [], [], []],
    'App\Controller\ChercheurController::updatechercheur' => [['id'], ['_controller' => 'App\\Controller\\ChercheurController::updatechercheur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatechercheur']], [], [], []],
    'App\Controller\ChercheurController::deletechercheur' => [['id'], ['_controller' => 'App\\Controller\\ChercheurController::deletechercheur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletechercheur']], [], [], []],
    'App\Controller\FreelancerController::profile' => [[], ['_controller' => 'App\\Controller\\FreelancerController::profile'], [], [['text', '/profilefreelancer']], [], [], []],
    'App\Controller\FreelancerController::index' => [[], ['_controller' => 'App\\Controller\\FreelancerController::index'], [], [['text', '/freelancer']], [], [], []],
    'App\Controller\FreelancerController::updatefreelancer' => [['id'], ['_controller' => 'App\\Controller\\FreelancerController::updatefreelancer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatefreelancer']], [], [], []],
    'App\Controller\FreelancerController::deletefreelancer' => [['id'], ['_controller' => 'App\\Controller\\FreelancerController::deletefreelancer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletefreelancer']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'App\Controller\IndexController::index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/index']], [], [], []],
    'App\Controller\IndexController::indexhome' => [[], ['_controller' => 'App\\Controller\\IndexController::indexhome'], [], [['text', '/indexhome']], [], [], []],
    'App\Controller\ModerateurController::profile' => [[], ['_controller' => 'App\\Controller\\ModerateurController::profile'], [], [['text', '/profilemoderateur']], [], [], []],
    'App\Controller\ModerateurController::index' => [[], ['_controller' => 'App\\Controller\\ModerateurController::index'], [], [['text', '/moderateur']], [], [], []],
    'App\Controller\ModerateurController::updatemoderateur' => [['id'], ['_controller' => 'App\\Controller\\ModerateurController::updatemoderateur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatemoderateur']], [], [], []],
    'App\Controller\ModerateurController::deletemoderateur' => [['id'], ['_controller' => 'App\\Controller\\ModerateurController::deletemoderateur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletemoderateur']], [], [], []],
    'App\Controller\OffreController::index' => [['_locale'], ['_controller' => 'App\\Controller\\OffreController::index'], ['_locale' => 'en|fr'], [['text', '/offre'], ['variable', '/', 'en|fr', '_locale', true]], [], [], []],
    'App\Controller\OffreController::postuler' => [['id'], ['_controller' => 'App\\Controller\\OffreController::postuler'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/postuler']], [], [], []],
    'App\Controller\OffreController::recherche' => [[], ['_controller' => 'App\\Controller\\OffreController::recherche'], [], [['text', '/recherche']], [], [], []],
    'App\Controller\OffremodController::index' => [[], ['_controller' => 'App\\Controller\\OffremodController::index'], [], [['text', '/offremod']], [], [], []],
    'App\Controller\OffremodController::ajoutoffre' => [[], ['_controller' => 'App\\Controller\\OffremodController::ajoutoffre'], [], [['text', '/ajoutoffre']], [], [], []],
    'App\Controller\OffremodController::modifoffre' => [['id'], ['_controller' => 'App\\Controller\\OffremodController::modifoffre'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modifoffre']], [], [], []],
    'App\Controller\OffremodController::supprimeroffre' => [['id'], ['_controller' => 'App\\Controller\\OffremodController::supprimeroffre'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/supprimeroffre']], [], [], []],
    'App\Controller\OffremodController::statistiques' => [[], ['_controller' => 'App\\Controller\\OffremodController::statistiques'], [], [['text', '/statistiques']], [], [], []],
    'App\Controller\OffremodController::exportToPdf2' => [[], ['_controller' => 'App\\Controller\\OffremodController::exportToPdf2'], [], [['text', '/export/pdf2']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\ResetPasswordController::request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'App\Controller\ResetPasswordController::checkEmail' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'App\Controller\ResetPasswordController::reset' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\TypecontratController::index' => [[], ['_controller' => 'App\\Controller\\TypecontratController::index'], [], [['text', '/typecontrat']], [], [], []],
    'App\Controller\TypecontratController::showtypecontrat' => [[], ['_controller' => 'App\\Controller\\TypecontratController::showtypecontrat'], [], [['text', '/showtypecontrat']], [], [], []],
    'App\Controller\TypecontratController::addtypecontrat' => [[], ['_controller' => 'App\\Controller\\TypecontratController::addtypecontrat'], [], [['text', '/addtypecontrat']], [], [], []],
    'App\Controller\TypecontratController::updatetypecontrat' => [['id'], ['_controller' => 'App\\Controller\\TypecontratController::updatetypecontrat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatetypecontrat']], [], [], []],
    'App\Controller\TypecontratController::deletetypecontrat' => [['id'], ['_controller' => 'App\\Controller\\TypecontratController::deletetypecontrat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletetypecontrat']], [], [], []],
    'App\Controller\TypeoffreController::index' => [[], ['_controller' => 'App\\Controller\\TypeoffreController::index'], [], [['text', '/typeoffre']], [], [], []],
    'App\Controller\TypeoffreController::showtypeoffre' => [[], ['_controller' => 'App\\Controller\\TypeoffreController::showtypeoffre'], [], [['text', '/showtypeoffre']], [], [], []],
    'App\Controller\TypeoffreController::addtypeoffre' => [[], ['_controller' => 'App\\Controller\\TypeoffreController::addtypeoffre'], [], [['text', '/addtypeoffre']], [], [], []],
    'App\Controller\TypeoffreController::updatetypeoffre' => [['id'], ['_controller' => 'App\\Controller\\TypeoffreController::updatetypeoffre'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatetypeoffre']], [], [], []],
    'App\Controller\TypeoffreController::deletetypeoffre' => [['id'], ['_controller' => 'App\\Controller\\TypeoffreController::deletetypeoffre'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletetypeoffre']], [], [], []],
    'App\Controller\UserDataController::getUserData' => [[], ['_controller' => 'App\\Controller\\UserDataController::getUserData'], [], [['text', '/user/data']], [], [], []],
];
