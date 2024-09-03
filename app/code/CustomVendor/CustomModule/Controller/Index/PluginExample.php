<?php

namespace CustomVendor\CustomModule\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\RawFactory;

class PluginExample implements HttpGetActionInterface
{

	protected $title;
    protected $rawResultFactory;

    public function __construct(
        RawFactory $rawResultFactory
    ) {
        $this->rawResultFactory = $rawResultFactory;
    }

    public function execute()
    {
        $this->setTitle('Welcome');

        // Create a Raw result object
        $result = $this->rawResultFactory->create();
        $result->setContents($this->getTitle());

        return $result;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
