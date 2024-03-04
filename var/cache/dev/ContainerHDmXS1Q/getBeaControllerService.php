<?php

namespace ContainerHDmXS1Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBeaControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BeaController' shared autowired service.
     *
     * @return \App\Controller\BeaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BeaController.php';

        $container->services['App\\Controller\\BeaController'] = $instance = new \App\Controller\BeaController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\BeaController', $container));

        return $instance;
    }
}
