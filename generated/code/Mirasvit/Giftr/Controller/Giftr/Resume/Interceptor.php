<?php
namespace Mirasvit\Giftr\Controller\Giftr\Resume;

/**
 * Interceptor class for @see \Mirasvit\Giftr\Controller\Giftr\Resume
 */
class Interceptor extends \Mirasvit\Giftr\Controller\Giftr\Resume implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mirasvit\Giftr\Model\RegistryFactory $registryFactory, \Mirasvit\Giftr\Helper\Data $giftrData, \Magento\Framework\Registry $registry, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Json\Helper\Data $jsonEncoder, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($registryFactory, $giftrData, $registry, $customerSession, $jsonEncoder, $context);
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
