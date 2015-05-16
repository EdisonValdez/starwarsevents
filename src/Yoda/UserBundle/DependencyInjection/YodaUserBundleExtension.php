<?php
/**
 * Created by PhpStorm.
 * User: Yerno
 * Date: 5/7/15
 * Time: 11:05 AM
 */

namespace Yoda\UserBundle\DependencyInjection;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\Config\FileLocator;

class YodaUserBundleExtension extends Extension{
    public function load(array $configs, ContainerBuilder $container) {
        // ...
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('admin.yml');
    }
}