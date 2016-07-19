<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir
    )
)->register();

// TODO namespace そのうち
//$loader->registerNamespaces(
//    array(
//        "Store\\Admin\\Controllers" => "../bundles/admin/controllers/",
//        "Store\\Admin\\Models"      => "../bundles/admin/models/"
//    )
//);
