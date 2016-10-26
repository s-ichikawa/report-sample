<?php
namespace ReportSample;


use Monolog\Handler\StreamHandler;
use Monolog\Logger;

trait Logging
{
    /**
     * @var Logger
     */
    private $log;

    public function log_init($config)
    {
        $this->log = new Logger($config['app_name']);
        $this->log->pushHandler(new StreamHandler($config['log']['path'], $config['log']['level']));
    }

    public function log_app_start()
    {
        $this->log->addInfo('start!');
    }

    public function log_app_end()
    {
        $this->log->addInfo('end!');
    }


}