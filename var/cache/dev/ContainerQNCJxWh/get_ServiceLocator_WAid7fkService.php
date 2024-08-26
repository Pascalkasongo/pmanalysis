<?php

namespace ContainerQNCJxWh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WAid7fkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WAid7fk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WAid7fk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'fonction' => ['privates', '.errored..service_locator.WAid7fk.App\\Entity\\Fonction', NULL, 'Cannot autowire service ".service_locator.WAid7fk": it references class "App\\Entity\\Fonction" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'fonction' => 'App\\Entity\\Fonction',
        ]);
    }
}
