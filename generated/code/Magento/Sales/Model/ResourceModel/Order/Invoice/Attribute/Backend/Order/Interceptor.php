<?php
namespace Magento\Sales\Model\ResourceModel\Order\Invoice\Attribute\Backend\Order;

/**
 * Interceptor class for @see \Magento\Sales\Model\ResourceModel\Order\Invoice\Attribute\Backend\Order
 */
class Interceptor extends \Magento\Sales\Model\ResourceModel\Order\Invoice\Attribute\Backend\Order implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($object);
    }
}
