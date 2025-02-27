<?php

namespace ContainerTVcDgs5;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IzD6WLrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.izD6WLr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.izD6WLr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\BlockedUsersController::blockedUsers' => ['privates', '.service_locator.3CdAD2B', 'get_ServiceLocator_3CdAD2BService', true],
            'App\\Controller\\ForumController::AddDisLike' => ['privates', '.service_locator.xW26Ner', 'get_ServiceLocator_XW26NerService', true],
            'App\\Controller\\ForumController::AddLike' => ['privates', '.service_locator.xW26Ner', 'get_ServiceLocator_XW26NerService', true],
            'App\\Controller\\ForumController::UnAddDisLike' => ['privates', '.service_locator.xW26Ner', 'get_ServiceLocator_XW26NerService', true],
            'App\\Controller\\ForumController::UnAddLike' => ['privates', '.service_locator.xW26Ner', 'get_ServiceLocator_XW26NerService', true],
            'App\\Controller\\ForumController::addDiscussion' => ['privates', '.service_locator.bpcW4EG', 'get_ServiceLocator_BpcW4EGService', true],
            'App\\Controller\\ForumController::deleteDiscussion' => ['privates', '.service_locator.Bsv6qX0', 'get_ServiceLocator_Bsv6qX0Service', true],
            'App\\Controller\\ForumController::discussionStats' => ['privates', '.service_locator.xW26Ner', 'get_ServiceLocator_XW26NerService', true],
            'App\\Controller\\ForumController::index' => ['privates', '.service_locator.aPy9iWU', 'get_ServiceLocator_APy9iWUService', true],
            'App\\Controller\\ForumController::updateDiscussion' => ['privates', '.service_locator.dnSIpkt', 'get_ServiceLocator_DnSIpktService', true],
            'App\\Controller\\ForumDetailsController::AddDisLike' => ['privates', '.service_locator.4s_SyY0', 'get_ServiceLocator_4sSyY0Service', true],
            'App\\Controller\\ForumDetailsController::AddLike' => ['privates', '.service_locator.4s_SyY0', 'get_ServiceLocator_4sSyY0Service', true],
            'App\\Controller\\ForumDetailsController::AddReply' => ['privates', '.service_locator.ybRzs13', 'get_ServiceLocator_YbRzs13Service', true],
            'App\\Controller\\ForumDetailsController::UnAddDisLike' => ['privates', '.service_locator.4s_SyY0', 'get_ServiceLocator_4sSyY0Service', true],
            'App\\Controller\\ForumDetailsController::UpdateReply' => ['privates', '.service_locator.ybRzs13', 'get_ServiceLocator_YbRzs13Service', true],
            'App\\Controller\\ForumDetailsController::deleteReply' => ['privates', '.service_locator.ybRzs13', 'get_ServiceLocator_YbRzs13Service', true],
            'App\\Controller\\ForumDetailsController::index' => ['privates', '.service_locator.SIstSqo', 'get_ServiceLocator_SIstSqoService', true],
            'App\\Controller\\MessageController::getConversation' => ['privates', '.service_locator.sLkGFte', 'get_ServiceLocator_SLkGFteService', true],
            'App\\Controller\\MessageController::sendMessage' => ['privates', '.service_locator.C5aMZSX', 'get_ServiceLocator_C5aMZSXService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\BlockedUsersController:blockedUsers' => ['privates', '.service_locator.3CdAD2B', 'get_ServiceLocator_3CdAD2BService', true],
            'App\\Controller\\ForumController:AddDisLike' => ['privates', '.service_locator.xW26Ner', 'get_ServiceLocator_XW26NerService', true],
            'App\\Controller\\ForumController:AddLike' => ['privates', '.service_locator.xW26Ner', 'get_ServiceLocator_XW26NerService', true],
            'App\\Controller\\ForumController:UnAddDisLike' => ['privates', '.service_locator.xW26Ner', 'get_ServiceLocator_XW26NerService', true],
            'App\\Controller\\ForumController:UnAddLike' => ['privates', '.service_locator.xW26Ner', 'get_ServiceLocator_XW26NerService', true],
            'App\\Controller\\ForumController:addDiscussion' => ['privates', '.service_locator.bpcW4EG', 'get_ServiceLocator_BpcW4EGService', true],
            'App\\Controller\\ForumController:deleteDiscussion' => ['privates', '.service_locator.Bsv6qX0', 'get_ServiceLocator_Bsv6qX0Service', true],
            'App\\Controller\\ForumController:discussionStats' => ['privates', '.service_locator.xW26Ner', 'get_ServiceLocator_XW26NerService', true],
            'App\\Controller\\ForumController:index' => ['privates', '.service_locator.aPy9iWU', 'get_ServiceLocator_APy9iWUService', true],
            'App\\Controller\\ForumController:updateDiscussion' => ['privates', '.service_locator.dnSIpkt', 'get_ServiceLocator_DnSIpktService', true],
            'App\\Controller\\ForumDetailsController:AddDisLike' => ['privates', '.service_locator.4s_SyY0', 'get_ServiceLocator_4sSyY0Service', true],
            'App\\Controller\\ForumDetailsController:AddLike' => ['privates', '.service_locator.4s_SyY0', 'get_ServiceLocator_4sSyY0Service', true],
            'App\\Controller\\ForumDetailsController:AddReply' => ['privates', '.service_locator.ybRzs13', 'get_ServiceLocator_YbRzs13Service', true],
            'App\\Controller\\ForumDetailsController:UnAddDisLike' => ['privates', '.service_locator.4s_SyY0', 'get_ServiceLocator_4sSyY0Service', true],
            'App\\Controller\\ForumDetailsController:UpdateReply' => ['privates', '.service_locator.ybRzs13', 'get_ServiceLocator_YbRzs13Service', true],
            'App\\Controller\\ForumDetailsController:deleteReply' => ['privates', '.service_locator.ybRzs13', 'get_ServiceLocator_YbRzs13Service', true],
            'App\\Controller\\ForumDetailsController:index' => ['privates', '.service_locator.SIstSqo', 'get_ServiceLocator_SIstSqoService', true],
            'App\\Controller\\MessageController:getConversation' => ['privates', '.service_locator.sLkGFte', 'get_ServiceLocator_SLkGFteService', true],
            'App\\Controller\\MessageController:sendMessage' => ['privates', '.service_locator.C5aMZSX', 'get_ServiceLocator_C5aMZSXService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\BlockedUsersController::blockedUsers' => '?',
            'App\\Controller\\ForumController::AddDisLike' => '?',
            'App\\Controller\\ForumController::AddLike' => '?',
            'App\\Controller\\ForumController::UnAddDisLike' => '?',
            'App\\Controller\\ForumController::UnAddLike' => '?',
            'App\\Controller\\ForumController::addDiscussion' => '?',
            'App\\Controller\\ForumController::deleteDiscussion' => '?',
            'App\\Controller\\ForumController::discussionStats' => '?',
            'App\\Controller\\ForumController::index' => '?',
            'App\\Controller\\ForumController::updateDiscussion' => '?',
            'App\\Controller\\ForumDetailsController::AddDisLike' => '?',
            'App\\Controller\\ForumDetailsController::AddLike' => '?',
            'App\\Controller\\ForumDetailsController::AddReply' => '?',
            'App\\Controller\\ForumDetailsController::UnAddDisLike' => '?',
            'App\\Controller\\ForumDetailsController::UpdateReply' => '?',
            'App\\Controller\\ForumDetailsController::deleteReply' => '?',
            'App\\Controller\\ForumDetailsController::index' => '?',
            'App\\Controller\\MessageController::getConversation' => '?',
            'App\\Controller\\MessageController::sendMessage' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\BlockedUsersController:blockedUsers' => '?',
            'App\\Controller\\ForumController:AddDisLike' => '?',
            'App\\Controller\\ForumController:AddLike' => '?',
            'App\\Controller\\ForumController:UnAddDisLike' => '?',
            'App\\Controller\\ForumController:UnAddLike' => '?',
            'App\\Controller\\ForumController:addDiscussion' => '?',
            'App\\Controller\\ForumController:deleteDiscussion' => '?',
            'App\\Controller\\ForumController:discussionStats' => '?',
            'App\\Controller\\ForumController:index' => '?',
            'App\\Controller\\ForumController:updateDiscussion' => '?',
            'App\\Controller\\ForumDetailsController:AddDisLike' => '?',
            'App\\Controller\\ForumDetailsController:AddLike' => '?',
            'App\\Controller\\ForumDetailsController:AddReply' => '?',
            'App\\Controller\\ForumDetailsController:UnAddDisLike' => '?',
            'App\\Controller\\ForumDetailsController:UpdateReply' => '?',
            'App\\Controller\\ForumDetailsController:deleteReply' => '?',
            'App\\Controller\\ForumDetailsController:index' => '?',
            'App\\Controller\\MessageController:getConversation' => '?',
            'App\\Controller\\MessageController:sendMessage' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
