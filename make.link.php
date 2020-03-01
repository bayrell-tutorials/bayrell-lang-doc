<?php

$dir = __DIR__;


function mklink($target, $link)
{
	if (file_exists($link))
	{
		unlink($link);
	}
	$dir = dirname($link);
	if (!file_exists($dir)) mkdir($dir, 0777, true);
	symlink($target, $link);
	
	echo "$link\n";
}




mklink(__DIR__ . "/app/App/es6", __DIR__ . "/web/assets/App/es6");
mklink(__DIR__ . "/app/App/resources", __DIR__ . "/web/assets/App/resources");
mklink(__DIR__ . "/lib/Runtime/es6", __DIR__ . "/web/assets/Runtime/es6");
mklink(__DIR__ . "/lib/Runtime.Web/es6", __DIR__ . "/web/assets/Runtime.Web/es6");

