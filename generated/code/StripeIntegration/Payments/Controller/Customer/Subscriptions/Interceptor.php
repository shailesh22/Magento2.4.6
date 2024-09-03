<?php
namespace StripeIntegration\Payments\Controller\Customer\Subscriptions;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Controller\Customer\Subscriptions
 */
class Interceptor extends \StripeIntegration\Payments\Controller\Customer\Subscriptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Customer\Model\Session $session, \StripeIntegration\Payments\Helper\Generic $helper, \StripeIntegration\Payments\Helper\Quote $quoteHelper, \StripeIntegration\Payments\Helper\Order $orderHelper, \StripeIntegration\Payments\Helper\Subscriptions $subscriptionsHelper, \StripeIntegration\Payments\Helper\Data $dataHelper, \StripeIntegration\Payments\Model\SubscriptionFactory $subscriptionFactory, \StripeIntegration\Payments\Model\SubscriptionProductFactory $subscriptionProductFactory, \StripeIntegration\Payments\Model\Config $config, \StripeIntegration\Payments\Model\Stripe\SubscriptionScheduleFactory $stripeSubscriptionScheduleFactory, \StripeIntegration\Payments\Model\Stripe\SubscriptionFactory $stripeSubscriptionFactory, \Magento\Sales\Model\Order $order, \Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Framework\App\RequestInterface $request)
    {
        $this->___init();
        parent::__construct($resultPageFactory, $session, $helper, $quoteHelper, $orderHelper, $subscriptionsHelper, $dataHelper, $subscriptionFactory, $subscriptionProductFactory, $config, $stripeSubscriptionScheduleFactory, $stripeSubscriptionFactory, $order, $resultFactory, $request);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
