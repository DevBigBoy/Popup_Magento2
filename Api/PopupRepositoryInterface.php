<?php
declare(strict_types=1);
namespace CrocoIt\Popup\Api;

use CrocoIt\Popup\Api\Data\PopupInterface;

interface PopupRepositoryInterface
{
    /**
     * @param PopupInterface $popup
     * @return void
     */
    public function save(PopupInterface $popup): void;

    /**
     * @param int $popupId
     * @return PopupInterface
     */
    public function getById(int $popupId): PopupInterface;

}
