<?php

declare(strict_types=1);

namespace CrocoIt\Popup\Model\Resolver;

use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use CrocoIt\Popup\Model\ResourceModel\Popup\CollectionFactory;
use CrocoIt\Popup\Api\Data\PopupInterface;

class GetPopups implements ResolverInterface
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * Constructor
     *
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * Resolver for fetching popups with optional filters
     *
     * @param Field $field
     * @param mixed $context
     * @param ResolveInfo $info
     * @param array|null $value
     * @param array|null $args
     * @return array
     */
    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null): array
    {
        $collection = $this->collectionFactory->create();

        // Apply filters if provided
        if (isset($args['filter'])) {
            $filters = $args['filter'];

            if (!empty($filters['name'])) {
                $collection->addFieldToFilter(PopupInterface::NAME, ['like' => '%' . $filters['name'] . '%']);
            }

            if (isset($filters['is_active'])) {
                $collection->addFieldToFilter(PopupInterface::IS_ACTIVE, (int) $filters['is_active']);
            }

            if (isset($filters['timeout'])) {
                $collection->addFieldToFilter(PopupInterface::TIMEOUT, (int) $filters['timeout']);
            }
        }

        // Load the collection
        $popups = $collection->getItems();

        // Transform the data into the format expected by the GraphQL schema
        $result = [];
        foreach ($popups as $popup) {
            $result[] = [
                'popup_id'   => (int) $popup->getPopupId(),
                'name'       => $popup->getName(),
                'content'    => $popup->getContent(),
                'created_at' => $popup->getCreatedAt(),
                'updated_at' => $popup->getUpdatedAt(),
                'is_active'  => (bool) $popup->getIsActive(),
                'timeout'    => (int) $popup->getTimeout(),
            ];
        }

        return $result;
    }
}
