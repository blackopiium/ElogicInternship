<?php
namespace Mirasvit\Giftr\Controller\Item\Add;

/**
 * Interceptor class for @see \Mirasvit\Giftr\Controller\Item\Add
 */
class Interceptor extends \Mirasvit\Giftr\Controller\Item\Add implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mirasvit\Giftr\Api\Service\RegistryProviderInterface $registryProvider, \Mirasvit\Giftr\Model\RegistryFactory $registryFactory, \Magento\Catalog\Model\ProductFactory $productFactory, \Mirasvit\Giftr\Model\ItemFactory $itemFactory, \Magento\Framework\Registry $registry, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($registryProvider, $registryFactory, $productFactory, $itemFactory, $registry, $customerSession, $context);
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
