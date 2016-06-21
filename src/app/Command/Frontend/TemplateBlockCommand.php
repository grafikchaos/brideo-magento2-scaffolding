<?php

namespace Brideo\Magento2Scaffolding\Command\Frontend;


use Brideo\Magento2Scaffolding\Command\Base\Block;
use Brideo\Magento2Scaffolding\Service\Frontend\TemplateBlock;
use Brideo\Magento2Scaffolding\Service\ServiceInterface;

class TemplateBlockCommand extends Block
{

    const NAME = 'module:frontend:block:template';
    const DESCRIPTION = 'Generate a template block.';

    /**
     * @return string
     */
    protected function getCommandName() : string
    {
        return static::NAME;
    }

    /**
     * @return string
     */
    protected function getCommandDescription() : string
    {
        return static::DESCRIPTION;
    }

    /**
     * Return the service to generate.
     *
     * @param string $namespace
     * @param string $module
     * @param string $blockName
     * @param string $version
     * @param string $directory
     *
     * @return ServiceInterface
     */
    protected function getService(
        string $namespace,
        string $module,
        string $blockName,
        string $version,
        string $directory
    ) : ServiceInterface
    {
        return new TemplateBlock($namespace, $module, $version, $directory, $blockName);
    }
}
