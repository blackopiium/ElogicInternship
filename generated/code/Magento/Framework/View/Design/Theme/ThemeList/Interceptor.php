<?php
namespace Magento\Framework\View\Design\Theme\ThemeList;

/**
 * Interceptor class for @see \Magento\Framework\View\Design\Theme\ThemeList
 */
class Interceptor extends \Magento\Framework\View\Design\Theme\ThemeList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\Framework\Config\ThemeFactory $themeConfigFactory, \Magento\Framework\View\Design\Theme\ThemePackageList $themePackageList, \Magento\Framework\Filesystem\Directory\ReadFactory $dirReadFactory)
    {
        $this->___init();
        parent::__construct($entityFactory, $themeConfigFactory, $themePackageList, $dirReadFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
