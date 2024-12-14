<?php

namespace CrocoIt\Popup\Controller\Adminhtml\Popup;
use CrocoIt\Popup\Api\Data\PopupInterface;
use CrocoIt\Popup\Api\Data\PopupInterfaceFactory;
use CrocoIt\Popup\Service\PopupRepository;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Result\Page;


class Edit extends Action
{

    public function __construct(
        Context $context,
        private readonly PopupRepository $popupRepository,
        private readonly DataPersistorInterface $dataPersistor,
        private readonly PopupInterfaceFactory $popupFactory,
    )
    {
        parent::__construct($context);
    }

    public function execute(): ResultInterface
    {
       /** @var Page page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $popupId = (int) $this->getRequest()->getParam('popup_id');

        if ($popupId) {
            try {
                $popup = $this->popupRepository->getById($popupId);
                $this->dataPersistor->set('crocoit_popup_popup', $popup->getData());
            } catch (NoSuchEntityException $exception) {
                $this->messageManager->addErrorMessage(__('This popup no longer exists.'));
            }
        } else{
            $popup = $this->popupFactory->create();
        }
        $page->setActiveMenu('CrocoIt_Popup::popup');
        $page->addBreadcrumb(__('Popup'), __('Popup'));
        $page->addBreadcrumb(
           $popup->getPopupId() ? $popup->getName() : __('New Popups'),
            $popup->getPopupId() ? $popup->getName() : __('New Popups')
        );
        $page->getConfig()->getTitle()->prepend(
            $popup->getPopupId() ? $popup->getName() : __('New Popups')
        );
        return $page;
    }
}
