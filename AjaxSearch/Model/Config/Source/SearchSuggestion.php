<?php

namespace Wbcom\AjaxSearch\Model\Config\Source;

class SearchSuggestion implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'best-selling', 'label' => __('Best Selling Product')],
            ['value' => 'most-viewed', 'label' => __('Most Viewed Product')]
        ];
    }
}
?>