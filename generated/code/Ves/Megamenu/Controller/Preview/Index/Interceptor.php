<?php
namespace Ves\Megamenu\Controller\Preview\Index;

/**
 * Interceptor class for @see \Ves\Megamenu\Controller\Preview\Index
 */
class Interceptor extends \Ves\Megamenu\Controller\Preview\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\ResourceConnection $resource, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Ves\Megamenu\Helper\Editor $editor, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $resource, $storeManager, $resultPageFactory, $editor, $registry);
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
