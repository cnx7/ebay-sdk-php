<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellingManagerEmailSentStatusCodeType
 *
 * Specifies the Selling Manager email status.
 * XSD Type: SellingManagerEmailSentStatusCodeType
 */
class SellingManagerEmailSentStatusCodeType
{
    /**
     * Constant for 'Successful' value.
     *
     * Email sent successfully.
     */
    public const VAL_SUCCESSFUL = 'Successful';

    /**
     * Constant for 'Failed' value.
     *
     * Sending of email failed.
     */
    public const VAL_FAILED = 'Failed';

    /**
     * Constant for 'Pending' value.
     *
     * Email is not yet sent and is in Queue.
     */
    public const VAL_PENDING = 'Pending';

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
