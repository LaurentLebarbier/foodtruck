<?php

namespace ContainerC6Pv4xx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditProfileTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\EditProfileType' shared autowired service.
     *
     * @return \App\Form\EditProfileType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\EditProfileType'] = new \App\Form\EditProfileType();
    }
}
