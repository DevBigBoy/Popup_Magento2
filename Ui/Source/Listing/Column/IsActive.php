<?php

namespace CrocoIt\Popup\Ui\Source\Listing\Column;


use Magento\Framework\Data\OptionSourceInterface;

class IsActive implements OptionSourceInterface
{

    public const ENABLED  = 1;
    public const DISABLED = 0;
    public function toOptionArray() :array
    {
        return [
            ['value' => self::ENABLED, 'label' => __('Enabled')],
            ['value' => self::DISABLED, 'label' => __('Disabled')]
        ];

    }

}
