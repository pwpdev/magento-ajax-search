<?php

namespace Wbcom\AjaxSearch\Model\Config\Source;

class SearchInfo implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'name', 'label' => __('Name')],
            ['value' => 'sku', 'label' => __('SKU')],
            ['value' => 'price', 'label' => __('Price')],
            ['value' => 'image', 'label' => __('Image')]
        ];
    }
}
?>