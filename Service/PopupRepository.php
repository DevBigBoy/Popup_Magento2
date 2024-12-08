<?php

namespace CrocoIt\Popup\Service;

use CrocoIt\Popup\Api\Data\PopupInterface;
use CrocoIt\Popup\Api\PopupRepositoryInterface;
use CrocoIt\Popup\Model\PopupFactory;
use CrocoIt\Popup\Model\ResourceModel\Popup as PopupResource;
use Magento\Framework\Exception\AlreadyExistsException;
use Magento\TestFramework\Exception\NoSuchActionException;

class PopupRepository implements PopupRepositoryInterface
{
    /**
     * @param PopupResource $popupResource
     * @param PopupFactory $factory
     */
    public function __construct(
        private readonly PopupResource $popupResource,
        private readonly PopupFactory $factory,
    ){}

    /**
     * @param int $popupId
     * @return PopupInterface
     * @throws NoSuchActionException
     */
    public function getById(int $popupId): PopupInterface
    {
        $popup = $this->factory->create();
       $this->popupResource->load($popup, $popupId);
       if (!$popup->getId()) {
           throw new NoSuchActionException(__('Popup with id "%1" does not exist.', $popupId));
       }
       return $popup;
    }

    /**
     * @param PopupInterface $popup
     * @return void
     * @throws AlreadyExistsException
     */
    public function save(PopupInterface $popup): void
    {
        $this->popupResource->save($popup);
    }
}
