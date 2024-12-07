<?php

namespace CrocoIt\Popup\Model\ResourceModel\Popup;

use CrocoIt\Popup\Model\Popup as PopupModel;
use CrocoIt\Popup\Model\ResourceModel\Popup as PopupResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct(){
        $this->_init(
            PopupModel::class,
            PopupResourceModel::class
        );
    }
}
