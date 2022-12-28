<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CheckoutOrderDetailType
 *
 * This type is deprecated.
 * XSD Type: CheckoutOrderDetailType
 */
class CheckoutOrderDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalCartMerchandiseCost
     */
    private $totalCartMerchandiseCost = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalCartShippingCost
     */
    private $totalCartShippingCost = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalAmount
     */
    private $totalAmount = null;

    /**
     * Gets as totalCartMerchandiseCost
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalCartMerchandiseCost()
    {
        return $this->totalCartMerchandiseCost;
    }

    /**
     * Sets a new totalCartMerchandiseCost
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalCartMerchandiseCost
     * @return self
     */
    public function setTotalCartMerchandiseCost(\Nogrod\eBaySDK\MerchantData\AmountType $totalCartMerchandiseCost)
    {
        $this->totalCartMerchandiseCost = $totalCartMerchandiseCost;
        return $this;
    }

    /**
     * Gets as totalCartShippingCost
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalCartShippingCost()
    {
        return $this->totalCartShippingCost;
    }

    /**
     * Sets a new totalCartShippingCost
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalCartShippingCost
     * @return self
     */
    public function setTotalCartShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType $totalCartShippingCost)
    {
        $this->totalCartShippingCost = $totalCartShippingCost;
        return $this;
    }

    /**
     * Gets as totalTaxAmount
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * Sets a new totalTaxAmount
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount(\Nogrod\eBaySDK\MerchantData\AmountType $totalTaxAmount)
    {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Gets as totalAmount
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalAmount
     * @return self
     */
    public function setTotalAmount(\Nogrod\eBaySDK\MerchantData\AmountType $totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTotalCartMerchandiseCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalCartMerchandiseCost", $value);
        }
        $value = $this->getTotalCartShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalCartShippingCost", $value);
        }
        $value = $this->getTotalTaxAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalTaxAmount", $value);
        }
        $value = $this->getTotalAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalAmount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalCartMerchandiseCost');
        if (null !== $value) {
            $this->setTotalCartMerchandiseCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalCartShippingCost');
        if (null !== $value) {
            $this->setTotalCartShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalTaxAmount');
        if (null !== $value) {
            $this->setTotalTaxAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalAmount');
        if (null !== $value) {
            $this->setTotalAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
    }
}
