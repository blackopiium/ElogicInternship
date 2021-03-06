<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\SuggestAttributeSets;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\SuggestAttributeSets
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\SuggestAttributeSets implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Catalog\Model\Product\AttributeSet\SuggestedSet $suggestedSet)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $suggestedSet);
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
