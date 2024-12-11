<?php

declare(strict_types=1);

namespace CrocoIt\Popup\Api\Data;

interface PopupInterface
{
    // Status Constants
    public const STATUS_DISABLED = 0;
    public const STATUS_ENABLED = 1;

    // Table Name Constant
    public const TABLE_NAME = 'crocoit_popup';

    // Column Constants
    public const POPUP_ID   = 'popup_id';
    public const NAME       = 'name';
    public const CONTENT    = 'content';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';
    public const IS_ACTIVE  = 'is_active';
    public const TIMEOUT    = 'timeout';

    /**
     * Get Popup ID.
     *
     * @return int
     */
    public function getPopupId(): int;

    /**
     * Set Popup ID.
     *
     * @param int $popupId
     * @return self
     */
    public function setPopupId(int $popupId): self;

    /**
     * Get Popup Name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Set Popup Name.
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * Get Popup Content.
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * Set Popup Content.
     *
     * @param string $content
     * @return self
     */
    public function setContent(string $content): self;

    /**
     * Get Creation Time.
     *
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * Set Creation Time.
     *
     * @param string $createdAt
     * @return self
     */
    public function setCreatedAt(string $createdAt): self;

    /**
     * Get Update Time.
     *
     * @return string
     */
    public function getUpdatedAt(): string;

    /**
     * Set Update Time.
     *
     * @param string $updatedAt
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self;

    /**
     * Get Active Status.
     *
     * @return bool
     */
    public function getIsActive(): bool;

    /**
     * Set Active Status.
     *
     * @param bool $status
     * @return self
     */
    public function setIsActive(bool $status): self;

    /**
     * Get Popup Timeout.
     *
     * @return int
     */
    public function getTimeout(): int;

    /**
     * Set Popup Timeout.
     *
     * @param int $timeout
     * @return self
     */
    public function setTimeout(int $timeout): self;
}
