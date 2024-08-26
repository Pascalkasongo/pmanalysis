<?php

namespace ContainerQNCJxWh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JVUHItZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JVUHItZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JVUHItZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'facture' => ['privates', '.errored..service_locator.JVUHItZ.App\\Entity\\Facture', NULL, 'Cannot autowire service ".service_locator.JVUHItZ": it references class "App\\Entity\\Facture" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'facture' => 'App\\Entity\\Facture',
        ]);
    }
}
