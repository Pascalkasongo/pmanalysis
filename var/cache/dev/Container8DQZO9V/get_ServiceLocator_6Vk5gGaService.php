<?php

namespace Container8DQZO9V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6Vk5gGaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6Vk5gGa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6Vk5gGa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'role' => ['privates', '.errored..service_locator.6Vk5gGa.App\\Entity\\Role', NULL, 'Cannot autowire service ".service_locator.6Vk5gGa": it references class "App\\Entity\\Role" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'role' => 'App\\Entity\\Role',
        ]);
    }
}
