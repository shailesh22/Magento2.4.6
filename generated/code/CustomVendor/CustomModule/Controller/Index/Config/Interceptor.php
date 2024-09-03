<?php
namespace CustomVendor\CustomModule\Controller\Index\Config;

/**
 * Interceptor class for @see \CustomVendor\CustomModule\Controller\Index\Config
 */
class Interceptor extends \CustomVendor\CustomModule\Controller\Index\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \CustomVendor\CustomModule\Helper\Data $helperData)
    {
        $this->___init();
        parent::__construct($context, $helperData);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
