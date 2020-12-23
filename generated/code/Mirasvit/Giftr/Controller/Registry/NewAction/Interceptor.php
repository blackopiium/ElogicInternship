<?php
namespace Mirasvit\Giftr\Controller\Registry\NewAction;

/**
 * Interceptor class for @see \Mirasvit\Giftr\Controller\Registry\NewAction
 */
class Interceptor extends \Mirasvit\Giftr\Controller\Registry\NewAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mirasvit\Giftr\Model\Config $config, \Mirasvit\Giftr\Api\Service\RegistryProviderInterface $registryProvider, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Mirasvit\Giftr\Model\TypeFactory $typeFactory, \Mirasvit\Giftr\Model\RegistryFactory $registryFactory, \Magento\Customer\Model\AddressFactory $addressFactory, \Magento\Customer\Model\FormFactory $formFactory, \Magento\Framework\Registry $registry, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($config, $registryProvider, $formKeyValidator, $typeFactory, $registryFactory, $addressFactory, $formFactory, $registry, $customerSession, $context);
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
