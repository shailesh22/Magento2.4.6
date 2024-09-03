<?php

declare(strict_types=1);

namespace CustomVendor\CustomModule\Model;

use CustomVendor\CustomModule\Api\CategoryInterface;

class Category implements CategoryInterface
{
    public function getName(): string
    {
        return "Category Name";
    }
}
