<?php
namespace StripeIntegration\Payments\Controller\Payment\Index;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Controller\Payment\Index
 */
class Interceptor extends \StripeIntegration\Payments\Controller\Payment\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Checkout\Model\Session $checkoutSession, \Magento\Sales\Model\OrderFactory $orderFactory, \StripeIntegration\Payments\Helper\Generic $helper, \StripeIntegration\Payments\Helper\Quote $quoteHelper, \StripeIntegration\Payments\Helper\Order $orderHelper, \StripeIntegration\Payments\Helper\PaymentIntent $paymentIntentHelper, \StripeIntegration\Payments\Helper\Multishipping $multishippingHelper, \StripeIntegration\Payments\Model\CheckoutSessionFactory $checkoutSessionFactory, \StripeIntegration\Payments\Model\Config $config, \StripeIntegration\Payments\Model\PaymentElement $paymentElement, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Framework\Message\ManagerInterface $messageManager)
    {
        $this->___init();
        parent::__construct($checkoutSession, $orderFactory, $helper, $quoteHelper, $orderHelper, $paymentIntentHelper, $multishippingHelper, $checkoutSessionFactory, $config, $paymentElement, $request, $resultFactory, $messageManager);
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
