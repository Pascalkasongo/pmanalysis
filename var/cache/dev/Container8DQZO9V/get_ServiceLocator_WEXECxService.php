<?php

namespace Container8DQZO9V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WEXECxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wEXE_cx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wEXE_cx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'domaine' => ['privates', '.errored..service_locator.wEXE_cx.App\\Entity\\Domaine', NULL, 'Cannot autowire service ".service_locator.wEXE_cx": it references class "App\\Entity\\Domaine" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'domaine' => 'App\\Entity\\Domaine',
            'entityManager' => '?',
        ]);
    }
}
