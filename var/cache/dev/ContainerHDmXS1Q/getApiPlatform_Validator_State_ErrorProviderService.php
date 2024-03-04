<?php

namespace ContainerHDmXS1Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Validator_State_ErrorProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.validator.state.error_provider' shared service.
     *
     * @return \ApiPlatform\Symfony\Validator\State\ErrorProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Validator/State/ErrorProvider.php';

        return $container->privates['api_platform.validator.state.error_provider'] = new \ApiPlatform\Symfony\Validator\State\ErrorProvider();
    }
}
