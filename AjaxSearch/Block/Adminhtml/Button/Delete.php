<?php

namespace Wbcom\AjaxSearch\Block\Adminhtml\Button;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class Delete
 * @package Wbcom\AjaxSearch\Block\Adminhtml\Button
 */
class Delete extends Generic implements ButtonProviderInterface
{
    /**
     * @return array
     * @return Delete button
     */
    public function getButtonData() {
        $deleteArray = [];
        if ($this->getId()) {
            $deleteArray = [
                'label' => __('Delete'),
                'on_click' => 'deleteConfirm(\'' . __(
                        'Are you sure want to do this ?'
                    ) . '\', \'' . $this->getDeletePostUrl() . '\')',
                'sort_order' => 5,
                'class' => 'delete',
            ];
        }
        return $deleteArray;
    }

    /**
     * @return string
     * @return Delete AjaxSearch Url
     */
    public function getDeletePostUrl()
    {
        return $this->getUrl('wbsearch/*/delete', ['id' => $this->getId()]);
    }
}
