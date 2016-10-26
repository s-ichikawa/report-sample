<?php
namespace ReportSample;


class App
{
    use Logging;

    /**
     * App constructor.
     * @param Queue $queue
     * @param array $config
     */
    public function __construct(Queue $queue, array $config)
    {
        $this->queue = $queue;
        $this->config = $config;
        $this->log_init($config);
    }

    public function execute()
    {
        $this->log_app_start();

        $this->log_app_end();
    }
}