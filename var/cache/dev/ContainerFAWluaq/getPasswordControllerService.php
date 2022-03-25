<?php

namespace ContainerFAWluaq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPasswordControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PasswordController' shared autowired service.
     *
     * @return \App\Controller\PasswordController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PasswordController.php';

        $container->services['App\\Controller\\PasswordController'] = $instance = new \App\Controller\PasswordController(($container->services['doctrine'] ?? $container->getDoctrineService()));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\PasswordController', $container));

        return $instance;
    }
}
