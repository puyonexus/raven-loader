<?php
require __DIR__ . '/vendor/autoload.php';

function setup_raven_logging($sentry_dsn) {
	$client = new Raven_Client($sentry_dsn);
	$error_handler = new Raven_ErrorHandler($client);
	$error_handler->registerExceptionHandler();
	$error_handler->registerErrorHandler();
	$error_handler->registerShutdownFunction();
}

