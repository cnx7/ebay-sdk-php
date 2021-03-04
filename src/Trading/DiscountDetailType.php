<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DiscountDetailType
 *
 * This type is used by the <b>DiscountDetail</b> container, which is returned if a discount is applicable to an account entry.
 * XSD Type: DiscountDetailType
 */
class DiscountDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container indicates the discount type and amount applied to an account entry.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount type will be shown for any account entry where a discount applies, but the discount amount will only be shown if the corresponding fee was deducted from a seller payout for a managed payments seller.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\DiscountType[] $discount
     */
    private $discount = [
        
    ];

    /**
     * Adds as discount
     *
     * This container indicates the discount type and amount applied to an account entry.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount type will be shown for any account entry where a discount applies, but the discount amount will only be shown if the corresponding fee was deducted from a seller payout for a managed payments seller.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DiscountType $discount
     */
    public function addToDiscount(\Nogrod\eBaySDK\Trading\DiscountType $discount)
    {
        $this->discount[] = $discount;
        return $this;
    }

    /**
     * isset discount
     *
     * This container indicates the discount type and amount applied to an account entry.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount type will be shown for any account entry where a discount applies, but the discount amount will only be shown if the corresponding fee was deducted from a seller payout for a managed payments seller.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscount($index)
    {
        return isset($this->discount[$index]);
    }

    /**
     * unset discount
     *
     * This container indicates the discount type and amount applied to an account entry.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount type will be shown for any account entry where a discount applies, but the discount amount will only be shown if the corresponding fee was deducted from a seller payout for a managed payments seller.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscount($index)
    {
        unset($this->discount[$index]);
    }

    /**
     * Gets as discount
     *
     * This container indicates the discount type and amount applied to an account entry.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount type will be shown for any account entry where a discount applies, but the discount amount will only be shown if the corresponding fee was deducted from a seller payout for a managed payments seller.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\DiscountType[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * This container indicates the discount type and amount applied to an account entry.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The discount type will be shown for any account entry where a discount applies, but the discount amount will only be shown if the corresponding fee was deducted from a seller payout for a managed payments seller.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\DiscountType[] $discount
     * @return self
     */
    public function setDiscount(array $discount)
    {
        $this->discount = $discount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDiscount();
        if (null !== $value && !empty($this->getDiscount())) {
            $writer->write(array_map(function ($v) {
                return ["Discount" => $v];
            }, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Discount', true);
        if (null !== $value && !empty($value)) {
            $this->setDiscount(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\DiscountType::fromKeyValue($v);
            }, $value));
        }
    }
}
