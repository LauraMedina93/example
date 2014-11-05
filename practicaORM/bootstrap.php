<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

//early code here
// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

//early code here..

// database configuration parameters
$conn = array(
    'dbname' => 'pruebaorm',
    'user' => 'admin',
    'password' => 'admin',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);
//Early code here ...

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
?>
