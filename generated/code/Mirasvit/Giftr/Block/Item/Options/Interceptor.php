<?php
namespace Mirasvit\Giftr\Block\Item\Options;

/**
 * Interceptor class for @see \Mirasvit\Giftr\Block\Item\Options
 */
class Interceptor extends \Mirasvit\Giftr\Block\Item\Options implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Catalog\Helper\Product\ConfigurationPool $helperPool, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helperPool, $data);
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
