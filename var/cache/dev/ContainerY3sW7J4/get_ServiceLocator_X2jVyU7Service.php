<?php

namespace ContainerY3sW7J4;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X2jVyU7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.X2jVyU7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.X2jVyU7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\CandidaturemissionController::accepterOuRefuserCandidature' => ['privates', '.service_locator.PSeVlgB', 'get_ServiceLocator_PSeVlgBService', true],
            'App\\Controller\\CandidaturemissionController::consulterCandidatures' => ['privates', '.service_locator.wmXC7oJ', 'get_ServiceLocator_WmXC7oJService', true],
            'App\\Controller\\CandidaturemissionController::evaluerCandidature' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CandidaturemissionController::listerToutesCandidatures' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CandidaturemissionController::postulerAOffre' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CandidaturemissionController::showOfferDetails' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CandidaturemissionController::voirDemandeDetails' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ChercheroffreController::recherche' => ['privates', '.service_locator.aKZl18R', 'get_ServiceLocator_AKZl18RService', true],
            'App\\Controller\\DemandeMissionController::calculerSommeNotes' => ['privates', '.service_locator.9Piphk6', 'get_ServiceLocator_9Piphk6Service', true],
            'App\\Controller\\DemandeMissionController::create' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\DemandeMissionController::delete' => ['privates', '.service_locator.yGmjiG4', 'get_ServiceLocator_YGmjiG4Service', true],
            'App\\Controller\\DemandeMissionController::edit' => ['privates', '.service_locator.yGmjiG4', 'get_ServiceLocator_YGmjiG4Service', true],
            'App\\Controller\\DemandeMissionController::index' => ['privates', '.service_locator.bFxUUhQ', 'get_ServiceLocator_BFxUUhQService', true],
            'App\\Controller\\DemandeMissionController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MissionfreelencerController::consulterCandidature' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MissionfreelencerController::delete' => ['privates', '.service_locator.enkFUQ_', 'get_ServiceLocator_EnkFUQService', true],
            'App\\Controller\\MissionfreelencerController::edit' => ['privates', '.service_locator.enkFUQ_', 'get_ServiceLocator_EnkFUQService', true],
            'App\\Controller\\MissionfreelencerController::index' => ['privates', '.service_locator.GBaGYvS', 'get_ServiceLocator_GBaGYvSService', true],
            'App\\Controller\\MissionfreelencerController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MissionfreelencerController::publierOffre' => ['privates', '.service_locator.enkFUQ_', 'get_ServiceLocator_EnkFUQService', true],
            'App\\Controller\\MissionfreelencerController::searchByCategory' => ['privates', '.service_locator.ASiCa.5', 'get_ServiceLocator_ASiCa_5Service', true],
            'App\\Controller\\MissionfreelencerController::show' => ['privates', '.service_locator.WeuR7V2', 'get_ServiceLocator_WeuR7V2Service', true],
            'App\\Controller\\MissionfreelencerController::showOfferDetails' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\NotificationsController::notifications' => ['privates', '.service_locator.eD04aH.', 'get_ServiceLocator_ED04aH_Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CandidaturemissionController:accepterOuRefuserCandidature' => ['privates', '.service_locator.PSeVlgB', 'get_ServiceLocator_PSeVlgBService', true],
            'App\\Controller\\CandidaturemissionController:consulterCandidatures' => ['privates', '.service_locator.wmXC7oJ', 'get_ServiceLocator_WmXC7oJService', true],
            'App\\Controller\\CandidaturemissionController:evaluerCandidature' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CandidaturemissionController:listerToutesCandidatures' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CandidaturemissionController:postulerAOffre' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CandidaturemissionController:showOfferDetails' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CandidaturemissionController:voirDemandeDetails' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ChercheroffreController:recherche' => ['privates', '.service_locator.aKZl18R', 'get_ServiceLocator_AKZl18RService', true],
            'App\\Controller\\DemandeMissionController:calculerSommeNotes' => ['privates', '.service_locator.9Piphk6', 'get_ServiceLocator_9Piphk6Service', true],
            'App\\Controller\\DemandeMissionController:create' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\DemandeMissionController:delete' => ['privates', '.service_locator.yGmjiG4', 'get_ServiceLocator_YGmjiG4Service', true],
            'App\\Controller\\DemandeMissionController:edit' => ['privates', '.service_locator.yGmjiG4', 'get_ServiceLocator_YGmjiG4Service', true],
            'App\\Controller\\DemandeMissionController:index' => ['privates', '.service_locator.bFxUUhQ', 'get_ServiceLocator_BFxUUhQService', true],
            'App\\Controller\\DemandeMissionController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MissionfreelencerController:consulterCandidature' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MissionfreelencerController:delete' => ['privates', '.service_locator.enkFUQ_', 'get_ServiceLocator_EnkFUQService', true],
            'App\\Controller\\MissionfreelencerController:edit' => ['privates', '.service_locator.enkFUQ_', 'get_ServiceLocator_EnkFUQService', true],
            'App\\Controller\\MissionfreelencerController:index' => ['privates', '.service_locator.GBaGYvS', 'get_ServiceLocator_GBaGYvSService', true],
            'App\\Controller\\MissionfreelencerController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MissionfreelencerController:publierOffre' => ['privates', '.service_locator.enkFUQ_', 'get_ServiceLocator_EnkFUQService', true],
            'App\\Controller\\MissionfreelencerController:searchByCategory' => ['privates', '.service_locator.ASiCa.5', 'get_ServiceLocator_ASiCa_5Service', true],
            'App\\Controller\\MissionfreelencerController:show' => ['privates', '.service_locator.WeuR7V2', 'get_ServiceLocator_WeuR7V2Service', true],
            'App\\Controller\\MissionfreelencerController:showOfferDetails' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\NotificationsController:notifications' => ['privates', '.service_locator.eD04aH.', 'get_ServiceLocator_ED04aH_Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\CandidaturemissionController::accepterOuRefuserCandidature' => '?',
            'App\\Controller\\CandidaturemissionController::consulterCandidatures' => '?',
            'App\\Controller\\CandidaturemissionController::evaluerCandidature' => '?',
            'App\\Controller\\CandidaturemissionController::listerToutesCandidatures' => '?',
            'App\\Controller\\CandidaturemissionController::postulerAOffre' => '?',
            'App\\Controller\\CandidaturemissionController::showOfferDetails' => '?',
            'App\\Controller\\CandidaturemissionController::voirDemandeDetails' => '?',
            'App\\Controller\\ChercheroffreController::recherche' => '?',
            'App\\Controller\\DemandeMissionController::calculerSommeNotes' => '?',
            'App\\Controller\\DemandeMissionController::create' => '?',
            'App\\Controller\\DemandeMissionController::delete' => '?',
            'App\\Controller\\DemandeMissionController::edit' => '?',
            'App\\Controller\\DemandeMissionController::index' => '?',
            'App\\Controller\\DemandeMissionController::new' => '?',
            'App\\Controller\\MissionfreelencerController::consulterCandidature' => '?',
            'App\\Controller\\MissionfreelencerController::delete' => '?',
            'App\\Controller\\MissionfreelencerController::edit' => '?',
            'App\\Controller\\MissionfreelencerController::index' => '?',
            'App\\Controller\\MissionfreelencerController::new' => '?',
            'App\\Controller\\MissionfreelencerController::publierOffre' => '?',
            'App\\Controller\\MissionfreelencerController::searchByCategory' => '?',
            'App\\Controller\\MissionfreelencerController::show' => '?',
            'App\\Controller\\MissionfreelencerController::showOfferDetails' => '?',
            'App\\Controller\\NotificationsController::notifications' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CandidaturemissionController:accepterOuRefuserCandidature' => '?',
            'App\\Controller\\CandidaturemissionController:consulterCandidatures' => '?',
            'App\\Controller\\CandidaturemissionController:evaluerCandidature' => '?',
            'App\\Controller\\CandidaturemissionController:listerToutesCandidatures' => '?',
            'App\\Controller\\CandidaturemissionController:postulerAOffre' => '?',
            'App\\Controller\\CandidaturemissionController:showOfferDetails' => '?',
            'App\\Controller\\CandidaturemissionController:voirDemandeDetails' => '?',
            'App\\Controller\\ChercheroffreController:recherche' => '?',
            'App\\Controller\\DemandeMissionController:calculerSommeNotes' => '?',
            'App\\Controller\\DemandeMissionController:create' => '?',
            'App\\Controller\\DemandeMissionController:delete' => '?',
            'App\\Controller\\DemandeMissionController:edit' => '?',
            'App\\Controller\\DemandeMissionController:index' => '?',
            'App\\Controller\\DemandeMissionController:new' => '?',
            'App\\Controller\\MissionfreelencerController:consulterCandidature' => '?',
            'App\\Controller\\MissionfreelencerController:delete' => '?',
            'App\\Controller\\MissionfreelencerController:edit' => '?',
            'App\\Controller\\MissionfreelencerController:index' => '?',
            'App\\Controller\\MissionfreelencerController:new' => '?',
            'App\\Controller\\MissionfreelencerController:publierOffre' => '?',
            'App\\Controller\\MissionfreelencerController:searchByCategory' => '?',
            'App\\Controller\\MissionfreelencerController:show' => '?',
            'App\\Controller\\MissionfreelencerController:showOfferDetails' => '?',
            'App\\Controller\\NotificationsController:notifications' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
