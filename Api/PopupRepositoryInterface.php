<?php
declare(strict_types=1);
namespace CrocoIt\Popup\Api;

use CrocoIt\Popup\Api\Data\PopupInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\TestFramework\Exception\NoSuchActionException;

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
     * @throws NoSuchEntityException
     */
    public function getById(int $popupId): PopupInterface;

    /**
     * @param PopupInterface $popup
     * @return void
     */
    public function delete(PopupInterface $popup): void;
}
