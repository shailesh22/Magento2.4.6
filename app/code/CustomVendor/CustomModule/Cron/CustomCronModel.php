<?php

namespace CustomVendor\CustomModule\Cron;

use Psr\Log\LoggerInterface;

class CustomCronModel
{
    protected $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute()
    {
         //your cron job code
         /*you have to use this command first: crontab -l, and then 
         you have to install the cron in project with this command: bin/magento cron:install, 
         and after upgrading and compiling use this command: bin/magento cron:run --group="default"*/
         $this->logger->info('Cron executed successfully.');
    }
}
