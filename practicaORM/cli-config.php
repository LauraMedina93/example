<?php

// cli-config.php
require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

//php vendor/doctrine/orm/bin/doctrine orm:schema-tool:create

?>
