<?php

namespace CustomVendor\CustomModule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CusotmObserverfile implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $displayText = $observer->getData('mp_text');
        echo $displayText->getText() . " - Event </br>";
        $displayText->setText('Execute event successfully.');

        return $this;
    }
}