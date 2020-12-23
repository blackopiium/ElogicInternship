<?php
namespace Mirasvit\Giftr\Controller\Share\Share;

/**
 * Interceptor class for @see \Mirasvit\Giftr\Controller\Share\Share
 */
class Interceptor extends \Mirasvit\Giftr\Controller\Share\Share implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Mirasvit\Giftr\Model\RegistryFactory $registryFactory, \Mirasvit\Giftr\Helper\Mail $giftrMail, \Magento\Customer\Model\Url $customerUrl, \Magento\Framework\Registry $registry, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($formKeyValidator, $registryFactory, $giftrMail, $customerUrl, $registry, $customerSession, $context);
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
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
