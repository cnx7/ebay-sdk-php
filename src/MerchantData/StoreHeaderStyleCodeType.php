<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing StoreHeaderStyleCodeType
 *
 *
 * XSD Type: StoreHeaderStyleCodeType
 */
class StoreHeaderStyleCodeType
{
    /**
     * Constant for 'Full' value.
     *
     * The full Store header is used.
     */
    public const VAL_FULL = 'Full';

    /**
     * Constant for 'Minimized' value.
     *
     * A minimized Store header is used.
     */
    public const VAL_MINIMIZED = 'Minimized';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
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
