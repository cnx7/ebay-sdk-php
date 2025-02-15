<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing CommentTypeCodeType
 *
 * This enumerated type list the Feedback ratings that can be left by one eBay user for
 *  another user regarding that user's experience with the another user during the
 *  purchase/checkout flow of an order line item.
 * XSD Type: CommentTypeCodeType
 */
class CommentTypeCodeType
{
    /**
     * Constant for 'Positive' value.
     *
     * This value indicates that the submitting user's experience with the other user
     *  (receiving feedback) was rated as a "Positive" experience. If an eBay user
     * receives
     *  a Positive rating for an order line item from a Verified User, their overall
     *  Feedback score increases by a value of 1.
     */
    public const VAL_POSITIVE = 'Positive';

    /**
     * Constant for 'Neutral' value.
     *
     * This value indicates that the submitting user's experience with the other user
     *  (receiving feedback) was rated as a "Neutral" experience. If an eBay user
     * receives
     *  a Neutral rating for an order line item from a Verified User, their overall
     *  Feedback score remains the same.
     */
    public const VAL_NEUTRAL = 'Neutral';

    /**
     * Constant for 'Negative' value.
     *
     * This value indicates that the submitting user's experience with the other user
     *  (receiving feedback) was rated as a "Negative" experience. If an eBay user
     * receives
     *  a Negative rating for an order line item from a Verified User, their overall
     *  Feedback score decreases by a value of 1.
     */
    public const VAL_NEGATIVE = 'Negative';

    /**
     * Constant for 'Withdrawn' value.
     *
     * This value indicates that a submitted Feedback entry was withdrawn. If a
     * Feedback
     *  entry is withdrawn, the effect of that entry on the overall Feedback score is
     *  nullified. However, Feedback comments from the withdrawn entry are still
     * visible.
     */
    public const VAL_WITHDRAWN = 'Withdrawn';

    /**
     * Constant for 'IndependentlyWithdrawn' value.
     *
     * This value indicates that a submitted Feedback entry was withdrawn based on the
     *  decision of a third-party (such as eBay). If a Feedback
     *  entry is withdrawn, the effect of that entry on the overall Feedback score is
     *  nullified.
     *  <br><br>
     *  This value is only applicable to the eBay Motors site only.
     */
    public const VAL_INDEPENDENTLY_WITHDRAWN = 'IndependentlyWithdrawn';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for internal or future use.
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
