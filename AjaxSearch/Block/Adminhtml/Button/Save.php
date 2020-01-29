<?php

namespace Wbcom\AjaxSearch\Block\Adminhtml\Button;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class Save
 * @package Wbcom\AjaxSearch\Block\Adminhtml\Button
 */
class Save extends Generic implements ButtonProviderInterface
{

    public function getButtonData()
    {
        return [
            'label' => __('Save'),
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'class' => 'primary save-button',
            'sort_order' => 45,
        ];
    }
}
