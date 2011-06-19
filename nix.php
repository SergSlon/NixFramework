<?php
/**
 * Nix Framework bootstrap file.
 *
 * @author Lauris Bukšis-Haberkorns <lauris@nix.lv>
 * @link http://framework.nix.lv/
 * @copyright Copyright &copy; 2011 Nix Software
 * @license http://framework.nix.lv/license/
 */
require_once 'Framework/compatibility/SplClassLoader.php';

// Autoloader for Nix Framework classes
$nixClassLoader =  new SplClassLoader('Nix', dirname(__DIR__));
$nixClassLoader->register();
