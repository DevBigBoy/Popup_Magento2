<?php

declare(strict_types=1);

namespace CrocoIt\Popup\Model;

use CrocoIt\Popup\Api\Data\PopupInterface;
use Magento\Framework\Model\AbstractModel;
use CrocoIt\Popup\Model\ResourceModel\Popup as PopupResource;

class Popup extends AbstractModel implements PopupInterface
{
    protected function _construct()
    {
        $this->_eventPrefix = 'crocoit_popup';
        $this->_eventObject = 'popup';
        $this->_idFieldName = PopupInterface::POPUP_ID;

        $this->_init(PopupResource::class);
    }

    public function getPopupId(): int
    {
        return (int) $this->getData(PopupInterface::POPUP_ID);
    }

    public function setPopupId(int $popupId): self
    {
        return $this->setData(PopupInterface::POPUP_ID, $popupId);
    }

    public function getName(): string
    {
        return (string) $this->getData(PopupInterface::NAME);
    }

    public function setName(string $name): self
    {
        return $this->setData(PopupInterface::NAME, $name);
    }

    public function getContent(): string
    {
        return (string) $this->getData(PopupInterface::CONTENT);
    }

    public function setContent(string $content): self
    {
        return $this->setData(PopupInterface::CONTENT, $content);
    }

    public function getCreatedAt(): string
    {
        return (string) $this->getData(PopupInterface::CREATED_AT);
    }

    public function setCreatedAt(string $createdAt): self
    {
        return $this->setData(PopupInterface::CREATED_AT, $createdAt);
    }

    public function getUpdatedAt(): string
    {
        return (string) $this->getData(PopupInterface::UPDATED_AT);
    }

    public function setUpdatedAt(string $updatedAt): self
    {
        return $this->setData(PopupInterface::UPDATED_AT, $updatedAt);
    }

    public function getIsActive(): bool
    {
        return (bool) $this->getData(PopupInterface::IS_ACTIVE);
    }

    public function setIsActive(bool $status): self
    {
        return $this->setData(PopupInterface::IS_ACTIVE, $status);
    }

    public function getTimeout(): int
    {
        return (int) $this->getData(PopupInterface::TIMEOUT);
    }

    public function setTimeout(int $timeout): self
    {
        return $this->setData(PopupInterface::TIMEOUT, $timeout);
    }
}
