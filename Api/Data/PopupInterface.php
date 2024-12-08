<?php

declare(strict_types=1);
namespace CrocoIt\Popup\Api\Data;

interface PopupInterface
{
    public const STATUS_DISABLED = 0;
    public const STATUS_ENABLED = 1;

    public function getPopupId(): int;
    public function setPopupId(int $popupId);
    public function getName():string;
    public function setName(string $name);
    public function getContent():string;
    public function setContent(string $content);
    public function getCreatedAt():string;
    public function setCreatedAt(string $createdAt);
    public function getUpdatedAt():string;
    public function setUpdatedAt(string $updatedAt);
    public function getIsActive():bool;
    public function setIsActive(int $status);
    public function getTimeout():int;
    public function setTimeout(int $timeout);

}
