<?php
require_once 'vendor/autoload.php';

use ReportSample\{
    App, Queue
};

$config = require 'config.php';

date_default_timezone_set($config['timezone']);

$queue = new Queue($config);
if (!$queue->isValid()) {
    exit();
}

$app = new App($queue, $config);
$app->execute();