<?php
namespace StripeIntegration\Payments\Commands\Webhooks\CleanupCommand;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Commands\Webhooks\CleanupCommand
 */
class Interceptor extends \StripeIntegration\Payments\Commands\Webhooks\CleanupCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\StripeIntegration\Payments\Helper\AreaCodeFactory $areaCodeFactory, \StripeIntegration\Payments\Helper\WebhooksSetupFactory $webhooksSetupFactory, \StripeIntegration\Payments\Model\ConfigFactory $configFactory)
    {
        $this->___init();
        parent::__construct($areaCodeFactory, $webhooksSetupFactory, $configFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
