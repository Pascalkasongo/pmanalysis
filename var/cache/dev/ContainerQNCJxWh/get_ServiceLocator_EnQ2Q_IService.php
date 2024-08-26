<?php

namespace ContainerQNCJxWh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EnQ2Q_IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EnQ2Q.i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EnQ2Q.i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'priorite' => ['privates', '.errored..service_locator.EnQ2Q.i.App\\Entity\\Priorite', NULL, 'Cannot autowire service ".service_locator.EnQ2Q.i": it references class "App\\Entity\\Priorite" but no such service exists.'],
        ], [
            'priorite' => 'App\\Entity\\Priorite',
        ]);
    }
}
