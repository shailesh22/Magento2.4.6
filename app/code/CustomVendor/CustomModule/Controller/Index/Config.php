<?php

namespace CustomVendor\CustomModule\Controller\Index;

use CustomVendor\CustomModule\Helper\Data;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultInterface;

class Config implements HttpGetActionInterface
{
    protected $helperData;

    public function __construct(
        Context $context,
        Data $helperData
    ) {
        $this->helperData = $helperData;
    }

    public function execute(): ResultInterface
    {
        // Output the configuration values
        echo $this->helperData->getGeneralConfig('enable');
        echo $this->helperData->getGeneralConfig('display_text');
        exit();
    }
}