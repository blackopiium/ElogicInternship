<?php
namespace Mirasvit\Giftr\Block\Item\Manage;

/**
 * Interceptor class for @see \Mirasvit\Giftr\Block\Item\Manage
 */
class Interceptor extends \Mirasvit\Giftr\Block\Item\Manage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mirasvit\Giftr\Model\ItemFactory $itemFactory, \Mirasvit\Giftr\Model\ResourceModel\Item\CollectionFactory $itemCollectionFactory, \Magento\Framework\Data\Form\FormKey $formKey, \Magento\Framework\Pricing\Helper\Data $pricingHelper, \Magento\ConfigurableProduct\Model\Product\Type\Configurable $configurableProduct, \Magento\Catalog\Block\Product\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($itemFactory, $itemCollectionFactory, $formKey, $pricingHelper, $configurableProduct, $context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }
}
