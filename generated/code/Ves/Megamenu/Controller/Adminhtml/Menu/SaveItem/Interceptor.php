<?php
namespace Ves\Megamenu\Controller\Adminhtml\Menu\SaveItem;

/**
 * Interceptor class for @see \Ves\Megamenu\Controller\Adminhtml\Menu\SaveItem
 */
class Interceptor extends \Ves\Megamenu\Controller\Adminhtml\Menu\SaveItem implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\ResourceConnection $resource, \Magento\Store\Model\StoreManagerInterface $storeManager, \Ves\Megamenu\Helper\Editor $editor, \Ves\Megamenu\Helper\Data $heleprData, \Ves\Megamenu\Model\Item $menuItem)
    {
        $this->___init();
        parent::__construct($context, $resource, $storeManager, $editor, $heleprData, $menuItem);
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
