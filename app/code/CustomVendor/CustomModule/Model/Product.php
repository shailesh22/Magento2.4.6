<?php

declare(strict_types=1);

namespace CustomVendor\CustomModule\Model;

use CustomVendor\CustomModule\Api\CategoryInterface;

class Product
{
    function __construct(
        private CategoryInterface $category,
    ) {
        $this->category = $category;
    }

    function getCategoryName(): string
    {
        return $this->category->getName();
    }
}
