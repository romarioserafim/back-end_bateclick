<?php

namespace App\Service;

abstract class ServiceBase
{

	public static function make()
	{
		$class = get_called_class();
		return new $class();
	}
}
