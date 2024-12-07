<?php

namespace CrocoIt\Popup\Model;

use CrocoIt\Popup\Api\Data\PopupInterface;
use Magento\Framework\Model\AbstractModel;
use CrocoIt\Popup\Model\ResourceModel\Popup as PopupResource;
class Popup extends AbstractModel implements PopupInterface
{
    const POPUP_ID      = 'popup_id';
    const NAME         = 'name';
    const CONTENT       = 'content';
    const CREATED_AT = 'created_at';
    const UPDATED_AT   = 'updated_at';
    const IS_ACTIVE     = 'is_active';
    const TIMEOUT     = 'timeout';

    protected function _construct(){
        $this->_eventPrefix = 'crocoit_popup';
        $this->_eventObject = 'popup';
        $this->_idFieldName = self::POPUP_ID;

        $this->_init(
            PopupResource::class
        );
    }

    public function getPopupId(): int
    {
        return (int) $this->getData(self::POPUP_ID);
    }
    public function setPopupId(int $popupId){
         $this->setData(
             self::POPUP_ID,
             $popupId
         );
    }
    public function getName():string
    {
        return (string) $this->setData(self::NAME);
    }
    public function setName(string $name){
       $this->setData(self::NAME, $name);
    }
    public function getContent():string
    {
        return (string) $this->setData(self::CONTENT);
    }
    public function setContent(string $content){
       $this->setData(self::CONTENT, $content);
    }
    public function getCreatedAt():string
    {
        return (string) $this->setData(self::CREATED_AT);
    }
    public function setCreatedAt(string $createdAt)
    {
        $this->setData(self::CREATED_AT, $createdAt);
    }
    public function getUpdatedAt():string
    {
        return (string) $this->setData(self::UPDATED_AT);
    }
    public function setUpdatedAt(string $updatedAt)
    {
       $this->setData(self::UPDATED_AT, $updatedAt);
    }
    public function getIsActive():bool
    {
        return (bool) $this->setData(self::IS_ACTIVE);
    }
    public function setIsActive(bool $isActive)
    {
        $this->setData(self::IS_ACTIVE, $isActive);
    }
    public function getTimeout():int
    {
        return (int) $this->setData(self::TIMEOUT);
    }
    public function setTimeout(int $timeout)
    {
        $this->setData(self::TIMEOUT, $timeout);
    }
}
