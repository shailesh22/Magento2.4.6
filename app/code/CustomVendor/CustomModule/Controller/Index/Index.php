<?php

declare(strict_types=1);

namespace CustomVendor\CustomModule\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    private PageFactory $pageFactory;
    private ManagerInterface $eventManager;

    public function __construct(
        PageFactory $pageFactory,
        ManagerInterface $eventManager
    ) {
        $this->pageFactory = $pageFactory;
        $this->eventManager = $eventManager;
    }

    public function execute(): Page
    {
        // Create a new DataObject instance with an initial value for 'text'
        $textDisplay = new \Magento\Framework\DataObject(['text' => 'CustomText']);

        // Dispatch the custom event, passing the DataObject instance
        $this->eventManager->dispatch('customvendor_custommodule_customevent', ['mp_text' => $textDisplay]);

        // Output the modified text after the event is dispatched
        echo $textDisplay->getText();

        // Return the generated page
        return $this->pageFactory->create();
    }
}
