<?php
namespace CustomVendor\CustomModule\Api;
interface ProductRepositoryInterface
{
    /**
     * Return a filtered product.
     *
     * @param int $id
     * @return \CustomVendor\CustomModule\Api\ResponseItemInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getItem(int $id);
    /**
     * Set descriptions for the products.
     *
     * @param \CustomVendor\CustomModule\Api\RequestItemInterface[] $products
     * @return void
     */
    public function setDescription(array $products);
}