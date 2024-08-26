<?php

namespace Container8DQZO9V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WFmNc4MService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WFmNc4M' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WFmNc4M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fonctionRepository' => ['privates', 'App\\Repository\\FonctionRepository', 'getFonctionRepositoryService', true],
        ], [
            'fonctionRepository' => 'App\\Repository\\FonctionRepository',
        ]);
    }
}
