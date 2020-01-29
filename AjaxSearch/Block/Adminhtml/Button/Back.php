<?php

namespace Wbcom\AjaxSearch\Block\Adminhtml\Button;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class Back
 * @package Wbcom\AjaxSearch\Block\Adminhtml\Button
 */
class Back extends Generic implements ButtonProviderInterface
{
    /**
     * @return array
     * @return Back Button
     */
    public function getButtonData() {
        return [
            'label' => __('Back'),
            'on_click' => sprintf("location.href = '%s';", $this->getBackGridUrl()),
            'sort_order' => 10,
            'class' => 'back-button'
        ];
    }

    public function getBackGridUrl() {
        return $this->getUrl('wbsearch/*/index');
    }
}
