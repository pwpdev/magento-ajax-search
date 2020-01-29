<?php

namespace Wbcom\AjaxSearch\Block\Adminhtml\Button;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class Reset
 * @package Wbcom\AjaxSearch\Block\Adminhtml\Button
 */
class Reset implements ButtonProviderInterface {

    public function getButtonData()
    {
        return [
            'label' => __('Reset'),
            'on_click' => 'location.reload();',
            'class' => 'reset-form',
            'sort_order' => 35
        ];
    }
}
