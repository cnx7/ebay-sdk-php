<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentsInformationCodeType
 *
 * This type is deprecated.
 * XSD Type: PaymentsInformationCodeType
 */
class PaymentsInformationCodeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\PaymentTransactionCodeType[] $payments
     */
    private $payments = null;

    /**
     * Adds as payment
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PaymentTransactionCodeType $payment
     */
    public function addToPayments(\Nogrod\eBaySDK\Trading\PaymentTransactionCodeType $payment)
    {
        $this->payments[] = $payment;
        return $this;
    }

    /**
     * isset payments
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPayments($index)
    {
        return isset($this->payments[$index]);
    }

    /**
     * unset payments
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPayments($index)
    {
        unset($this->payments[$index]);
    }

    /**
     * Gets as payments
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\PaymentTransactionCodeType[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Sets a new payments
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\PaymentTransactionCodeType[] $payments
     * @return self
     */
    public function setPayments(array $payments)
    {
        $this->payments = $payments;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPayments();
        if (null !== $value && !empty($this->getPayments())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Payments", array_map(function ($v) {
                return ["Payment" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Payments', true);
        if (null !== $value && !empty($value)) {
            $this->setPayments(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PaymentTransactionCodeType::fromKeyValue($v);
            }, $value));
        }
    }
}
