<?php

namespace home;
class CustomAutoLoader
{
	private static $BaseDirectory;

	private static $PathSpec = array(
			'api/%s.api.php',
			'classes/%s.class.php',
			'objects/%s.object.php',
            'classes/%s.interface.php'
		);

	public static function AutoLoad($class)
	{
		trigger_error("IN services Autoload File");
		if (!isset(self::$BaseDirectory))
			self::$BaseDirectory = dirname(__FILE__) . '/../';
trigger_error(self::$BaseDirectory);
		foreach (self::$PathSpec as $pathSpec)
		{
			
			$includeFile = self::$BaseDirectory . '/' . sprintf($pathSpec, $class);
			if (file_exists($includeFile))
			{
				require_once ($includeFile);
				return;
			}
		}
	}
}
trigger_error("File included");
// register the autoloader
spl_autoload_register('\home\CustomAutoLoader::AutoLoad');

?>
