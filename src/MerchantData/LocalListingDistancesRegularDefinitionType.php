<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing LocalListingDistancesRegularDefinitionType
 *
 * Defines the LocalListingDistancesRegular feature. This feature displays all the supported local listing
 *  distances for items listed by sellers subscribed to Local Market for Vehicles.
 * XSD Type: LocalListingDistancesRegularDefinitionType
 */
class LocalListingDistancesRegularDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
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
    }
}
