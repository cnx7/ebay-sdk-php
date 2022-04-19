<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NettedTransactionSummaryType
 *
 * This type is used by the <b>NettedTransactionSummary</b> container, which shows the total amount of fees (and credits if applicable) that have already been paid through seller payout deductions.
 * XSD Type: NettedTransactionSummaryType
 */
class NettedTransactionSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The amount in this field is the total amount of all charges/fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' fees in the <b>AccountEntries</b> array. The corresponding <b>Netted</b> boolean field for each fee in <b>AccountEntries</b> array will show as <code>true</code> if the fee has already been deducted from a seller payout.
     *  <br>
     *  <br>
     *  This field is returned even if <code>0.0</code>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalNettedChargeAmount
     */
    private $totalNettedChargeAmount = null;

    /**
     * The amount in this field is the total amount of all credits for fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' credit in the <b>AccountEntries</b> array. The corresponding <b>Netted</b> boolean field for each credit in <b>AccountEntries</b> array will show as <code>true</code> if the credit is for a fee that has already been deducted from a seller payout.
     *  <br>
     *  <br>
     *  This field is returned even if <code>0.0</code>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalNettedCreditAmount
     */
    private $totalNettedCreditAmount = null;

    /**
     * Gets as totalNettedChargeAmount
     *
     * The amount in this field is the total amount of all charges/fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' fees in the <b>AccountEntries</b> array. The corresponding <b>Netted</b> boolean field for each fee in <b>AccountEntries</b> array will show as <code>true</code> if the fee has already been deducted from a seller payout.
     *  <br>
     *  <br>
     *  This field is returned even if <code>0.0</code>.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalNettedChargeAmount()
    {
        return $this->totalNettedChargeAmount;
    }

    /**
     * Sets a new totalNettedChargeAmount
     *
     * The amount in this field is the total amount of all charges/fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' fees in the <b>AccountEntries</b> array. The corresponding <b>Netted</b> boolean field for each fee in <b>AccountEntries</b> array will show as <code>true</code> if the fee has already been deducted from a seller payout.
     *  <br>
     *  <br>
     *  This field is returned even if <code>0.0</code>.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalNettedChargeAmount
     * @return self
     */
    public function setTotalNettedChargeAmount(\Nogrod\eBaySDK\MerchantData\AmountType $totalNettedChargeAmount)
    {
        $this->totalNettedChargeAmount = $totalNettedChargeAmount;
        return $this;
    }

    /**
     * Gets as totalNettedCreditAmount
     *
     * The amount in this field is the total amount of all credits for fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' credit in the <b>AccountEntries</b> array. The corresponding <b>Netted</b> boolean field for each credit in <b>AccountEntries</b> array will show as <code>true</code> if the credit is for a fee that has already been deducted from a seller payout.
     *  <br>
     *  <br>
     *  This field is returned even if <code>0.0</code>.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalNettedCreditAmount()
    {
        return $this->totalNettedCreditAmount;
    }

    /**
     * Sets a new totalNettedCreditAmount
     *
     * The amount in this field is the total amount of all credits for fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' credit in the <b>AccountEntries</b> array. The corresponding <b>Netted</b> boolean field for each credit in <b>AccountEntries</b> array will show as <code>true</code> if the credit is for a fee that has already been deducted from a seller payout.
     *  <br>
     *  <br>
     *  This field is returned even if <code>0.0</code>.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalNettedCreditAmount
     * @return self
     */
    public function setTotalNettedCreditAmount(\Nogrod\eBaySDK\MerchantData\AmountType $totalNettedCreditAmount)
    {
        $this->totalNettedCreditAmount = $totalNettedCreditAmount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTotalNettedChargeAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalNettedChargeAmount", $value);
        }
        $value = $this->getTotalNettedCreditAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalNettedCreditAmount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalNettedChargeAmount');
        if (null !== $value) {
            $this->setTotalNettedChargeAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalNettedCreditAmount');
        if (null !== $value) {
            $this->setTotalNettedCreditAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
    }
}
