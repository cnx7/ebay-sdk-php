<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetVeROReasonCodeDetailsResponseType
 *
 * Base response of the <strong>GetVeROReasonCodeDetails</strong> call. This response will consists of one or more VeRO Program copyright/intellectual property infringement violation types.
 * XSD Type: GetVeROReasonCodeDetailsResponseType
 */
class GetVeROReasonCodeDetailsResponseType extends AbstractResponseType
{

    /**
     * This container consists of one or more VeRO Program copyright/intellectual property infringement violation types for one or more eBay sites.
     *
     * @var \Nogrod\eBaySDK\Trading\VeROSiteDetailType[] $veROReasonCodeDetails
     */
    private $veROReasonCodeDetails = null;

    /**
     * Adds as veROSiteDetail
     *
     * This container consists of one or more VeRO Program copyright/intellectual property infringement violation types for one or more eBay sites.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VeROSiteDetailType $veROSiteDetail
     */
    public function addToVeROReasonCodeDetails(\Nogrod\eBaySDK\Trading\VeROSiteDetailType $veROSiteDetail)
    {
        $this->veROReasonCodeDetails[] = $veROSiteDetail;
        return $this;
    }

    /**
     * isset veROReasonCodeDetails
     *
     * This container consists of one or more VeRO Program copyright/intellectual property infringement violation types for one or more eBay sites.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVeROReasonCodeDetails($index)
    {
        return isset($this->veROReasonCodeDetails[$index]);
    }

    /**
     * unset veROReasonCodeDetails
     *
     * This container consists of one or more VeRO Program copyright/intellectual property infringement violation types for one or more eBay sites.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVeROReasonCodeDetails($index)
    {
        unset($this->veROReasonCodeDetails[$index]);
    }

    /**
     * Gets as veROReasonCodeDetails
     *
     * This container consists of one or more VeRO Program copyright/intellectual property infringement violation types for one or more eBay sites.
     *
     * @return \Nogrod\eBaySDK\Trading\VeROSiteDetailType[]
     */
    public function getVeROReasonCodeDetails()
    {
        return $this->veROReasonCodeDetails;
    }

    /**
     * Sets a new veROReasonCodeDetails
     *
     * This container consists of one or more VeRO Program copyright/intellectual property infringement violation types for one or more eBay sites.
     *
     * @param \Nogrod\eBaySDK\Trading\VeROSiteDetailType[] $veROReasonCodeDetails
     * @return self
     */
    public function setVeROReasonCodeDetails(array $veROReasonCodeDetails)
    {
        $this->veROReasonCodeDetails = $veROReasonCodeDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getVeROReasonCodeDetails();
        if (null !== $value && !empty($this->getVeROReasonCodeDetails())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VeROReasonCodeDetails", array_map(function ($v) {
                return ["VeROSiteDetail" => $v];
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VeROReasonCodeDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setVeROReasonCodeDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\VeROSiteDetailType::fromKeyValue($v);
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
