<?php

namespace Wbcom\AjaxSearch\Model\ResourceModel;

class Query extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected $_idFieldName = 'id';
    /**
     * Initialize construct
     */
    public function _construct()
    {
        $this->_init("wbajax_search", "id");
    }
}
