<?php

require_once 'compatibility/SplClassLoader.php';

$nixClassLoader =  new SplClassLoader('Nix', __DIR__);
$nixClassLoader->register();
