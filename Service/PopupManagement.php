<?php

namespace CrocoIt\Popup\Service;

use CrocoIt\Popup\Api\Data\PopupInterface;
use CrocoIt\Popup\Api\PopupManagementInterface;
use CrocoIt\Popup\Model\ResourceModel\Popup\Collection;
use CrocoIt\Popup\Model\ResourceModel\Popup\CollectionFactory;

class PopupManagement implements PopupManagementInterface
{
    public function __construct(
        private readonly CollectionFactory $collectionFactory
    )
    {}

    /**
     * @return PopupInterface
     */
    public function getApplicablePopup(): PopupInterface
    {
        /** @var PopupInterface $popup */
       $popup =  $this->getCollection()
           ->addFieldToFilter(PopupInterface::IS_ACTIVE, PopupInterface::STATUS_ENABLED)
           ->addOrder(PopupInterface::POPUP_ID)
           ->getFirstItem();
       return $popup;
    }

    /**
     * @return Collection
     */
    public function getCollection(): Collection
    {
         return $this->collectionFactory->create();
    }
}
