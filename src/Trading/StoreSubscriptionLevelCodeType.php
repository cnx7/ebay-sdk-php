<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing StoreSubscriptionLevelCodeType
 *
 * This enumerated type contains the different subscription levels that a seller may subscribe to for their eBay Store.
 * XSD Type: StoreSubscriptionLevelCodeType
 */
class StoreSubscriptionLevelCodeType
{
    /**
     * Constant for 'Close' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_CLOSE = 'Close';

    /**
     * Constant for 'Basic' value.
     *
     * This enumeration value indicates that the eBay user has a Basic eBay Store
     * subscription.
     */
    public const VAL_BASIC = 'Basic';

    /**
     * Constant for 'Featured' value.
     *
     * This enumeration value indicates that the eBay user has a Premium eBay Store
     * subscription.
     */
    public const VAL_FEATURED = 'Featured';

    /**
     * Constant for 'Anchor' value.
     *
     * This enumeration value indicates that the eBay user has an Anchor eBay Store
     * subscription.
     */
    public const VAL_ANCHOR = 'Anchor';

    /**
     * Constant for 'Starter' value.
     *
     * This enumeration value indicates that the eBay user has a Starter eBay Store
     * subscription.
     */
    public const VAL_STARTER = 'Starter';

    /**
     * Constant for 'Enterprise' value.
     *
     * This enumeration value indicates that the eBay user has an Enterprise eBay Store
     * subscription.
     */
    public const VAL_ENTERPRISE = 'Enterprise';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
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
