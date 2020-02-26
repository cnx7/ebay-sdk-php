<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing BuyerPackageEnclosuresType
 *
 * Type defining the <b>BuyerPackageEnclosures</b> container, which is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s). A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
 * XSD Type: BuyerPackageEnclosuresType
 */
class BuyerPackageEnclosuresType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BuyerPackageEnclosureType[] $buyerPackageEnclosure
     */
    private $buyerPackageEnclosure = [
        
    ];

    /**
     * Adds as buyerPackageEnclosure
     *
     * A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\BuyerPackageEnclosureType $buyerPackageEnclosure
     */
    public function addToBuyerPackageEnclosure(\Nogrod\eBaySDK\MerchantData\BuyerPackageEnclosureType $buyerPackageEnclosure)
    {
        $this->buyerPackageEnclosure[] = $buyerPackageEnclosure;
        return $this;
    }

    /**
     * isset buyerPackageEnclosure
     *
     * A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBuyerPackageEnclosure($index)
    {
        return isset($this->buyerPackageEnclosure[$index]);
    }

    /**
     * unset buyerPackageEnclosure
     *
     * A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBuyerPackageEnclosure($index)
    {
        unset($this->buyerPackageEnclosure[$index]);
    }

    /**
     * Gets as buyerPackageEnclosure
     *
     * A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BuyerPackageEnclosureType[]
     */
    public function getBuyerPackageEnclosure()
    {
        return $this->buyerPackageEnclosure;
    }

    /**
     * Sets a new buyerPackageEnclosure
     *
     * A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BuyerPackageEnclosureType[] $buyerPackageEnclosure
     * @return self
     */
    public function setBuyerPackageEnclosure(array $buyerPackageEnclosure)
    {
        $this->buyerPackageEnclosure = $buyerPackageEnclosure;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBuyerPackageEnclosure();
        if (null !== $value && !empty($this->getBuyerPackageEnclosure())) {
            $writer->write(array_map(function ($v) {
                return ["BuyerPackageEnclosure" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerPackageEnclosure', true);
        if (null !== $value && !empty($value)) {
            $this->setBuyerPackageEnclosure(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\BuyerPackageEnclosureType::fromKeyValue($v);
            }, $value));
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
