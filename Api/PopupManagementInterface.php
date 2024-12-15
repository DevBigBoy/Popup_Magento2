<?php
declare(strict_types=1);
namespace CrocoIt\Popup\Api;
use CrocoIt\Popup\Api\Data\PopupInterface;
interface PopupManagementInterface
{
    /**
     * @return PopupInterface
     */
    public function getApplicablePopup(): PopupInterface;
}
