<?php
namespace Ves\Megamenu\Console\Command\Cleancache;

/**
 * Interceptor class for @see \Ves\Megamenu\Console\Command\Cleancache
 */
class Interceptor extends \Ves\Megamenu\Console\Command\Cleancache implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\Framework\App\CacheInterface $cache)
    {
        $this->___init();
        parent::__construct($resource, $cache);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
