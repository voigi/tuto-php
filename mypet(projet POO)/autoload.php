<?php

	function autoload($class_name)
	{
		$class_name = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);
		//$class_name vaudra Desca\Julien\Cat
		require $class_name . '.php';
	}
	spl_autoload_register('autoload');