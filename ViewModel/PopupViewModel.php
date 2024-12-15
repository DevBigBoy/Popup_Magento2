<?php
declare(strict_types=1);
namespace CrocoIt\Popup\ViewModel;

use CrocoIt\Popup\Api\Data\PopupInterface;
use CrocoIt\Popup\Api\PopupManagementInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class PopupViewModel implements ArgumentInterface
{

    /**
     * @param PopupManagementInterface $popupManagement
     */
    public function __construct(
      private readonly PopupManagementInterface $popupManagement,
    )
    {}

    public function getPopup(): PopupInterface
    {
        return $this->popupManagement->getApplicablePopup();
    }
}
