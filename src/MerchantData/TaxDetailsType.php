<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing TaxDetailsType
 *
 * Type used by the <b>TaxDetails</b> container, which consists of detailed tax information for an order line item, including the tax type and description, tax on the item cost, and tax related to shipping and handling. The information in this container supercedes/overrides the sales tax information in the <b>ShippingDetails.SalesTax</b> container (if returned).
 * XSD Type: TaxDetailsType
 */
class TaxDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field indicates the tax type. A separate <b>TaxDetails</b> container is returned for each unique imposition (tax type).
     *
     * @var string $imposition
     */
    private $imposition = null;

    /**
     * This enumeration indicates the type of tax.
     *
     * @var string $taxDescription
     */
    private $taxDescription = null;

    /**
     * This value is the total amount of sales tax for the order line item for the
     *  corresponding impositiion (tax type).
     *  <br><br>
     *  <b>TaxAmount</b> = <b>TaxOnSubtotalAmount</b> + <b>TaxOnShippingAmount</b> + <b>TaxOnHandlingAmount</b>
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> If the corresponding tax type is <code>GST</code> or <code>SalesTax</code> (if found under both the <b>eBayCollectAndRemitTaxes.TaxDetails</b> and <b>Taxes.TaxDetails</b> containers), the order is subject to 'eBay Collect and Remit' tax, and a change in logic has been rolled out as of early November 2019. For orders that are subject to 'eBay Collect and Remit' tax, which includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers, the tax amount in this field will be included in the <b>Order.Total</b>, <b>Order.AmountPaid</b>, and <b>Transaction.AmountPaid</b> fields.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $taxAmount
     */
    private $taxAmount = null;

    /**
     * This value is the amount of sales tax applied based on the unit cost of the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $taxOnSubtotalAmount
     */
    private $taxOnSubtotalAmount = null;

    /**
     * This value is the amount of sales tax applied based on shipping costs for the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $taxOnShippingAmount
     */
    private $taxOnShippingAmount = null;

    /**
     * This value is the amount of sales tax applied based on handling costs for the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $taxOnHandlingAmount
     */
    private $taxOnHandlingAmount = null;

    /**
     * This value is the actual tax ID for the buyer. This field will generally only be returned if a seller on the Italy or Spain sites required that the buyer supply a tax ID during the checkout process. If the <b>Order.BuyerTaxIdentifier</b> container is returned, the type of tax ID can be found in the <b>BuyerTaxIdentifier.Type</b> field.
     *
     * @var string $taxCode
     */
    private $taxCode = null;

    /**
     * This field indicates the collection method used to collect the 'Collect and Remit' or 'Good and Services' tax for the order. This field is always returned for orders subject to 'Collect and Remit' or 'Good and Services' tax, and its value is always <code>NET</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> Although the <b>CollectionMethod</b> field is returned for all orders subject to 'Collect and Remit' sales tax or 'Good and Services' tax, the <b>CollectionMethod</b> field and <b>CollectionMethodCodeType</b> are not currently of any practical use, although this field may have use in the future. If and when the logic of this field is changed, this note will be updated and a note will also be added to the Release Notes.
     *  </span>
     *
     * @var string $collectionMethod
     */
    private $collectionMethod = null;

    /**
     * Gets as imposition
     *
     * This field indicates the tax type. A separate <b>TaxDetails</b> container is returned for each unique imposition (tax type).
     *
     * @return string
     */
    public function getImposition()
    {
        return $this->imposition;
    }

    /**
     * Sets a new imposition
     *
     * This field indicates the tax type. A separate <b>TaxDetails</b> container is returned for each unique imposition (tax type).
     *
     * @param string $imposition
     * @return self
     */
    public function setImposition($imposition)
    {
        $this->imposition = $imposition;
        return $this;
    }

    /**
     * Gets as taxDescription
     *
     * This enumeration indicates the type of tax.
     *
     * @return string
     */
    public function getTaxDescription()
    {
        return $this->taxDescription;
    }

    /**
     * Sets a new taxDescription
     *
     * This enumeration indicates the type of tax.
     *
     * @param string $taxDescription
     * @return self
     */
    public function setTaxDescription($taxDescription)
    {
        $this->taxDescription = $taxDescription;
        return $this;
    }

    /**
     * Gets as taxAmount
     *
     * This value is the total amount of sales tax for the order line item for the
     *  corresponding impositiion (tax type).
     *  <br><br>
     *  <b>TaxAmount</b> = <b>TaxOnSubtotalAmount</b> + <b>TaxOnShippingAmount</b> + <b>TaxOnHandlingAmount</b>
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> If the corresponding tax type is <code>GST</code> or <code>SalesTax</code> (if found under both the <b>eBayCollectAndRemitTaxes.TaxDetails</b> and <b>Taxes.TaxDetails</b> containers), the order is subject to 'eBay Collect and Remit' tax, and a change in logic has been rolled out as of early November 2019. For orders that are subject to 'eBay Collect and Remit' tax, which includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers, the tax amount in this field will be included in the <b>Order.Total</b>, <b>Order.AmountPaid</b>, and <b>Transaction.AmountPaid</b> fields.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * This value is the total amount of sales tax for the order line item for the
     *  corresponding impositiion (tax type).
     *  <br><br>
     *  <b>TaxAmount</b> = <b>TaxOnSubtotalAmount</b> + <b>TaxOnShippingAmount</b> + <b>TaxOnHandlingAmount</b>
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> If the corresponding tax type is <code>GST</code> or <code>SalesTax</code> (if found under both the <b>eBayCollectAndRemitTaxes.TaxDetails</b> and <b>Taxes.TaxDetails</b> containers), the order is subject to 'eBay Collect and Remit' tax, and a change in logic has been rolled out as of early November 2019. For orders that are subject to 'eBay Collect and Remit' tax, which includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers, the tax amount in this field will be included in the <b>Order.Total</b>, <b>Order.AmountPaid</b>, and <b>Transaction.AmountPaid</b> fields.
     *  <br><br>
     *  Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account.
     *  <br><br>
     *  This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $taxAmount
     * @return self
     */
    public function setTaxAmount(\Nogrod\eBaySDK\MerchantData\AmountType $taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * Gets as taxOnSubtotalAmount
     *
     * This value is the amount of sales tax applied based on the unit cost of the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTaxOnSubtotalAmount()
    {
        return $this->taxOnSubtotalAmount;
    }

    /**
     * Sets a new taxOnSubtotalAmount
     *
     * This value is the amount of sales tax applied based on the unit cost of the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $taxOnSubtotalAmount
     * @return self
     */
    public function setTaxOnSubtotalAmount(\Nogrod\eBaySDK\MerchantData\AmountType $taxOnSubtotalAmount)
    {
        $this->taxOnSubtotalAmount = $taxOnSubtotalAmount;
        return $this;
    }

    /**
     * Gets as taxOnShippingAmount
     *
     * This value is the amount of sales tax applied based on shipping costs for the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTaxOnShippingAmount()
    {
        return $this->taxOnShippingAmount;
    }

    /**
     * Sets a new taxOnShippingAmount
     *
     * This value is the amount of sales tax applied based on shipping costs for the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $taxOnShippingAmount
     * @return self
     */
    public function setTaxOnShippingAmount(\Nogrod\eBaySDK\MerchantData\AmountType $taxOnShippingAmount)
    {
        $this->taxOnShippingAmount = $taxOnShippingAmount;
        return $this;
    }

    /**
     * Gets as taxOnHandlingAmount
     *
     * This value is the amount of sales tax applied based on handling costs for the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTaxOnHandlingAmount()
    {
        return $this->taxOnHandlingAmount;
    }

    /**
     * Sets a new taxOnHandlingAmount
     *
     * This value is the amount of sales tax applied based on handling costs for the
     *  order line item for the corresponding impositiion (tax type).
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $taxOnHandlingAmount
     * @return self
     */
    public function setTaxOnHandlingAmount(\Nogrod\eBaySDK\MerchantData\AmountType $taxOnHandlingAmount)
    {
        $this->taxOnHandlingAmount = $taxOnHandlingAmount;
        return $this;
    }

    /**
     * Gets as taxCode
     *
     * This value is the actual tax ID for the buyer. This field will generally only be returned if a seller on the Italy or Spain sites required that the buyer supply a tax ID during the checkout process. If the <b>Order.BuyerTaxIdentifier</b> container is returned, the type of tax ID can be found in the <b>BuyerTaxIdentifier.Type</b> field.
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->taxCode;
    }

    /**
     * Sets a new taxCode
     *
     * This value is the actual tax ID for the buyer. This field will generally only be returned if a seller on the Italy or Spain sites required that the buyer supply a tax ID during the checkout process. If the <b>Order.BuyerTaxIdentifier</b> container is returned, the type of tax ID can be found in the <b>BuyerTaxIdentifier.Type</b> field.
     *
     * @param string $taxCode
     * @return self
     */
    public function setTaxCode($taxCode)
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * Gets as collectionMethod
     *
     * This field indicates the collection method used to collect the 'Collect and Remit' or 'Good and Services' tax for the order. This field is always returned for orders subject to 'Collect and Remit' or 'Good and Services' tax, and its value is always <code>NET</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> Although the <b>CollectionMethod</b> field is returned for all orders subject to 'Collect and Remit' sales tax or 'Good and Services' tax, the <b>CollectionMethod</b> field and <b>CollectionMethodCodeType</b> are not currently of any practical use, although this field may have use in the future. If and when the logic of this field is changed, this note will be updated and a note will also be added to the Release Notes.
     *  </span>
     *
     * @return string
     */
    public function getCollectionMethod()
    {
        return $this->collectionMethod;
    }

    /**
     * Sets a new collectionMethod
     *
     * This field indicates the collection method used to collect the 'Collect and Remit' or 'Good and Services' tax for the order. This field is always returned for orders subject to 'Collect and Remit' or 'Good and Services' tax, and its value is always <code>NET</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> Although the <b>CollectionMethod</b> field is returned for all orders subject to 'Collect and Remit' sales tax or 'Good and Services' tax, the <b>CollectionMethod</b> field and <b>CollectionMethodCodeType</b> are not currently of any practical use, although this field may have use in the future. If and when the logic of this field is changed, this note will be updated and a note will also be added to the Release Notes.
     *  </span>
     *
     * @param string $collectionMethod
     * @return self
     */
    public function setCollectionMethod($collectionMethod)
    {
        $this->collectionMethod = $collectionMethod;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getImposition();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Imposition", $value);
        }
        $value = $this->getTaxDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxDescription", $value);
        }
        $value = $this->getTaxAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxAmount", $value);
        }
        $value = $this->getTaxOnSubtotalAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxOnSubtotalAmount", $value);
        }
        $value = $this->getTaxOnShippingAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxOnShippingAmount", $value);
        }
        $value = $this->getTaxOnHandlingAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxOnHandlingAmount", $value);
        }
        $value = $this->getTaxCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxCode", $value);
        }
        $value = $this->getCollectionMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CollectionMethod", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Imposition');
        if (null !== $value) {
            $this->setImposition($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxDescription');
        if (null !== $value) {
            $this->setTaxDescription($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxAmount');
        if (null !== $value) {
            $this->setTaxAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxOnSubtotalAmount');
        if (null !== $value) {
            $this->setTaxOnSubtotalAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxOnShippingAmount');
        if (null !== $value) {
            $this->setTaxOnShippingAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxOnHandlingAmount');
        if (null !== $value) {
            $this->setTaxOnHandlingAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxCode');
        if (null !== $value) {
            $this->setTaxCode($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CollectionMethod');
        if (null !== $value) {
            $this->setCollectionMethod($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
