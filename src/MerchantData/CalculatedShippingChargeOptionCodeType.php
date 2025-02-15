<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing CalculatedShippingChargeOptionCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: CalculatedShippingChargeOptionCodeType
 */
class CalculatedShippingChargeOptionCodeType
{
    /**
     * Constant for 'ChargeEachItem' value.
     *
     * This value is not used.
     */
    public const VAL_CHARGE_EACH_ITEM = 'ChargeEachItem';

    /**
     * Constant for 'ChargeEntireOrder' value.
     *
     * This value is not used.
     */
    public const VAL_CHARGE_ENTIRE_ORDER = 'ChargeEntireOrder';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is not used.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}
