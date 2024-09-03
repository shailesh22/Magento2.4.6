<?php
namespace CustomVendor\CustomModule\Controller\Index\PluginExample;

/**
 * Interceptor class for @see \CustomVendor\CustomModule\Controller\Index\PluginExample
 */
class Interceptor extends \CustomVendor\CustomModule\Controller\Index\PluginExample implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\Result\RawFactory $rawResultFactory)
    {
        $this->___init();
        parent::__construct($rawResultFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTitle');
        return $pluginInfo ? $this->___callPlugins('setTitle', func_get_args(), $pluginInfo) : parent::setTitle($title);
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTitle');
        return $pluginInfo ? $this->___callPlugins('getTitle', func_get_args(), $pluginInfo) : parent::getTitle();
    }
}
