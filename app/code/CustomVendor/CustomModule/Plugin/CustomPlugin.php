<?php

namespace CustomVendor\CustomModule\Plugin;

use CustomVendor\CustomModule\Controller\Index\PluginExample;

class CustomPlugin
{
    public function beforeSetTitle(PluginExample $subject, $title)
    {
        $title = $title . " to ";
        echo __METHOD__ . "</br>";

        return [$title];
    }

    public function afterGetTitle(PluginExample $subject, $result)
    {
        echo __METHOD__ . "</br>";

        return '<h1>' . $result . 'ranosys.com' . '</h1>';
    }

    public function aroundGetTitle(PluginExample $subject, callable $proceed)
    {
        echo __METHOD__ . " - Before proceed() </br>";
        $result = $proceed();
        echo __METHOD__ . " - After proceed() </br>";

        return $result;
    }
}