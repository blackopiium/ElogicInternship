<?php
namespace Ves\Megamenu\Controller\Adminhtml\Menu\EnableCache;

/**
 * Interceptor class for @see \Ves\Megamenu\Controller\Adminhtml\Menu\EnableCache
 */
class Interceptor extends \Ves\Megamenu\Controller\Adminhtml\Menu\EnableCache implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\ResourceConnection $resource, \Magento\Config\Model\ResourceModel\Config $resourceConfig)
    {
        $this->___init();
        parent::__construct($context, $resource, $resourceConfig);
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