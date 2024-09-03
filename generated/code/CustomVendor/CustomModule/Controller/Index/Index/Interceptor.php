<?php
namespace CustomVendor\CustomModule\Controller\Index\Index;

/**
 * Interceptor class for @see \CustomVendor\CustomModule\Controller\Index\Index
 */
class Interceptor extends \CustomVendor\CustomModule\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Framework\Event\ManagerInterface $eventManager)
    {
        $this->___init();
        parent::__construct($pageFactory, $eventManager);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\View\Result\Page
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
