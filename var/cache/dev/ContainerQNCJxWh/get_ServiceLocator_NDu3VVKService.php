<?php

namespace ContainerQNCJxWh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NDu3VVKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NDu3VVK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NDu3VVK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'projetRepository' => ['privates', 'App\\Repository\\ProjetRepository', 'getProjetRepositoryService', true],
        ], [
            'projetRepository' => 'App\\Repository\\ProjetRepository',
        ]);
    }
}
