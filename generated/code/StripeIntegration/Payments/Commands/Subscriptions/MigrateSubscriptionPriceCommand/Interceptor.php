<?php
namespace StripeIntegration\Payments\Commands\Subscriptions\MigrateSubscriptionPriceCommand;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Commands\Subscriptions\MigrateSubscriptionPriceCommand
 */
class Interceptor extends \StripeIntegration\Payments\Commands\Subscriptions\MigrateSubscriptionPriceCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory, \StripeIntegration\Payments\Helper\AreaCodeFactory $areaCodeFactory, \StripeIntegration\Payments\Model\ConfigFactory $configFactory, \StripeIntegration\Payments\Helper\GenericFactory $genericFactory, \StripeIntegration\Payments\Helper\SubscriptionsFactory $subscriptionsHelperFactory, \StripeIntegration\Payments\Helper\SubscriptionSwitchFactory $subscriptionSwitchFactory)
    {
        $this->___init();
        parent::__construct($resource, $orderCollectionFactory, $areaCodeFactory, $configFactory, $genericFactory, $subscriptionsHelperFactory, $subscriptionSwitchFactory);
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
