<?php 

declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    type:ComponentRegistrar::MODULE,
    componentName: 'CustomVendor_CustomModule',
    path:__DIR__,
);
?>