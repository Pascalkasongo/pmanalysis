<?php

namespace Container8DQZO9V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BPe7bSNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bPe7bSN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bPe7bSN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'equipe' => ['privates', '.errored..service_locator.bPe7bSN.App\\Entity\\Equipe', NULL, 'Cannot autowire service ".service_locator.bPe7bSN": it references class "App\\Entity\\Equipe" but no such service exists.'],
        ], [
            'equipe' => 'App\\Entity\\Equipe',
        ]);
    }
}
