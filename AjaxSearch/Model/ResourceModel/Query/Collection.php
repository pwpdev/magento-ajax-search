<?php

namespace Wbcom\AjaxSearch\Model\ResourceModel\Query;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    /**
     * Initialize construct
     */
    public function _construct()
    {
        $this->_init(
            'Wbcom\AjaxSearch\Model\Query',
            'Wbcom\AjaxSearch\Model\ResourceModel\Query'
        );
    }
}
