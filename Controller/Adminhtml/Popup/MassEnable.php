<?php
declare(strict_types=1);
namespace CrocoIt\Popup\Controller\Adminhtml\Popup;

use CrocoIt\Popup\Api\Data\PopupInterface;
use CrocoIt\Popup\Api\PopupRepositoryInterface;
use CrocoIt\Popup\Model\ResourceModel\Popup\CollectionFactory;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Ui\Component\MassAction\Filter;

class MassEnable extends Action
{

    /**
     * @param Context $context
     * @param Filter $filter
     * @param CollectionFactory $collectionFactory
     * @param PopupRepositoryInterface $popupRepository
     */
    public function __construct(
        Context $context,
        private readonly Filter $filter,
        private readonly CollectionFactory $collectionFactory,
        private readonly PopupRepositoryInterface $popupRepository,
    )
    {
        parent::__construct($context);
    }

    /**
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        try {
            $collection = $this->filter->getCollection($this->collectionFactory->create());
            $collectionSize  = $collection->getSize();

            /**
             * @var PopupInterface $popup
             */
            foreach ($collection as $popup) {
                $popup->setIsActive(PopupInterface::STATUS_ENABLED);
                $this->popupRepository->save($popup);
            }

            $this->messageManager->addSuccessMessage(__('A total of %1 record(s) have been enabled.', $collectionSize));
        } catch (\Throwable $exception) {
            $this->messageManager->addErrorMessage(
                __('Something went wrong while trying to enable the popup.')
            );
        }

        $result = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $result->setPath('crocoit_popup/popup/index');
    }

}
