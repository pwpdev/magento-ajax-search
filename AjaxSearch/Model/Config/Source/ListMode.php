<?php

namespace Wbcom\AjaxSearch\Model\Config\Source;

class ListMode implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'name', 'label' => __('Name')],
            ['value' => 'sku', 'label' => __('SKU')],
            ['value' => 'description', 'label' => __('Description')],
            ['value' => 'short_description', 'label' => __('Short Description')]
        ];
    }
}
?>