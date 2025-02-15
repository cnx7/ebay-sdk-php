<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CancelOfferArrayType
 *
 * This type is deprecated.
 * XSD Type: CancelOfferArrayType
 */
class CancelOfferArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\CancelOfferType[] $cancelOffer
     */
    private $cancelOffer = [

    ];

    /**
     * Adds as cancelOffer
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CancelOfferType $cancelOffer
     */
    public function addToCancelOffer(\Nogrod\eBaySDK\Trading\CancelOfferType $cancelOffer)
    {
        $this->cancelOffer[] = $cancelOffer;
        return $this;
    }

    /**
     * isset cancelOffer
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancelOffer($index)
    {
        return isset($this->cancelOffer[$index]);
    }

    /**
     * unset cancelOffer
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancelOffer($index)
    {
        unset($this->cancelOffer[$index]);
    }

    /**
     * Gets as cancelOffer
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\CancelOfferType[]
     */
    public function getCancelOffer()
    {
        return $this->cancelOffer;
    }

    /**
     * Sets a new cancelOffer
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\CancelOfferType[] $cancelOffer
     * @return self
     */
    public function setCancelOffer(array $cancelOffer)
    {
        $this->cancelOffer = $cancelOffer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCancelOffer();
        if (null !== $value && !empty($this->getCancelOffer())) {
            $writer->write(array_map(function ($v) {
                return ["CancelOffer" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CancelOffer', true);
        if (null !== $value && !empty($value)) {
            $this->setCancelOffer(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\CancelOfferType::fromKeyValue($v);
            }, $value));
        }
    }
}
