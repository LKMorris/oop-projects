<?php
namespace Autoload;

class Loader
{
	public const PATH = __DIR__ . '/../';
	public function __invoke($classname)
	{
		include_once Loader::PATH . str_replace("\\", "/", $classname) . '.php';
	}
}
