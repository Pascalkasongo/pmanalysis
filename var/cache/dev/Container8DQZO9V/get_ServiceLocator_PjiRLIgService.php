<?php

namespace Container8DQZO9V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PjiRLIgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pjiRLIg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pjiRLIg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'competanceRepository' => ['privates', 'App\\Repository\\CompetanceRepository', 'getCompetanceRepositoryService', true],
        ], [
            'competanceRepository' => 'App\\Repository\\CompetanceRepository',
        ]);
    }
}
