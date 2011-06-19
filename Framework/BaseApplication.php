<?php
/**
 * BaseApplication class file.
 *
 * @author Lauris Bukšis-Haberkorns <lauris@nix.lv>
 * @link http://framework.nix.lv/
 * @copyright Copyright &copy; 2011 Nix Software
 * @license http://framework.nix.lv/license/
 */
namespace Nix\Framework;

/**
 * BaseApplication is base class for all application classes.
 *
 * @author Lauris Bukšis-Haberkorns <lauris@nix.lv>
 * @version $Id$
 * @since 1.0
 */
abstract class BaseApplication extends Object
{
	public abstract function Run();
}
