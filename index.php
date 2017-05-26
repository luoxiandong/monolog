<?php

	require "vendor/autoload.php";


	$log = new Monolog\Logger('name');
	$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

	$log->error('Bar');
	$log->addWarning('Foo');

	echo '>>>>>';

