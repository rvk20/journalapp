<?php

namespace ContainerTsjxzMO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApp_Listener_Redirect404ToHomepageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'app.listener.redirect_404_to_homepage' shared autowired service.
     *
     * @return \AppBundle\EventListener\Redirect404ToHomepageListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventListener/Redirect404ToHomepageListener.php';

        return $container->privates['app.listener.redirect_404_to_homepage'] = new \AppBundle\EventListener\Redirect404ToHomepageListener(($container->services['router'] ?? $container->getRouterService()));
    }
}
