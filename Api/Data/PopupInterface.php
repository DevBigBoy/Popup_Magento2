<?php

declare(strict_types=1);
namespace CrocoIt\Popup\Api\Data;

interface PopupInterface
{
    const POPUP_ID      = 'popup_id';
    const NAME         = 'name';
    const CONTENT       = 'content';
    const CREATED_AT = 'created_at';
    const UPDATED_AT   = 'updated_at';
    const IS_ACTIVE     = 'is_active';
    const TIMEOUT     = 'timeout';

    public function getPopupId(): int;
    public function setPopupId(int$popupId);
    public function getName():string;
    public function setName(string $name);
    public function getContent():string;
    public function setContent(string $content);
    public function getCreatedAt():string;
    public function setCreatedAt(string $createdAt);
    public function getUpdatedAt():string;
    public function setUpdatedAt(string $updatedAt);
    public function getIsActive():bool;
    public function setIsActive(bool $isActive);
    public function getTimeout():int;
    public function setTimeout(int $timeout);

}
