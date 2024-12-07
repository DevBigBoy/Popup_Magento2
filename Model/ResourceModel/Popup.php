<?php
declare(strict_types=1);

namespace CrocoIt\Popup\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Popup extends AbstractDb
{
    protected function _construct(){
        $this->_init(
            'crocoit_popup',
            'popup_id'
        );
    }
}
