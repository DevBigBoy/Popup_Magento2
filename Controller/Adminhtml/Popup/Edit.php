<?php

namespace CrocoIt\Popup\Controller\Adminhtml\Popup;
use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;


class Edit extends Action
{
    public function execute(): ResultInterface
    {
       /** @var Page page */
       $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $page->setActiveMenu('CrocoIt_Popup::popup');
        $page->addBreadcrumb(__('Popup'), __('Popup'));
        $page->addBreadcrumb(__('New Popups'), __('New Popups'));
        $page->getConfig()->getTitle()->prepend(__('New Popup'));
        return $page;
    }
}
