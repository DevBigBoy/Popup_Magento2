<?php
declare(strict_types=1);

namespace CrocoIt\Popup\Model\ResourceModel;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use CrocoIt\Popup\Api\Data\PopupInterface;

class Popup extends AbstractDb
{
    protected function _construct()
    {
        $this->_init(
            PopupInterface::TABLE_NAME,  // Use the table name constant from the interface
            PopupInterface::POPUP_ID     // Use the primary key constant from the interface
        );
    }

    protected function _beforeSave(AbstractModel $object)
    {
        $currentTimestamp = date('Y-m-d H:i:s');

        // Set the updated_at field to the current timestamp
        $object->setData(PopupInterface::UPDATED_AT, $currentTimestamp);

        // If the object is new, set created_at field
        if ($object->isObjectNew()) {
            $object->setData(PopupInterface::CREATED_AT, $currentTimestamp);
        }

        return parent::_beforeSave($object);
    }
}
