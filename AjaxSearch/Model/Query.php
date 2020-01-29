<?php

namespace Wbcom\AjaxSearch\Model;


class Query extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize construct
     */
    public function _construct()
    {
        $this->_init("Wbcom\AjaxSearch\Model\ResourceModel\Query");
    }
}
