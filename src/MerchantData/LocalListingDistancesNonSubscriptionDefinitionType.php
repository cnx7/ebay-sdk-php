<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing LocalListingDistancesNonSubscriptionDefinitionType
 *
 * Defines the LocalListingDistancesNonSubscription feature. This feature displays all the supported local
 *  listing distances for items listed by sellers who have not subscribed to either Local Market for Vehicles
 *  or Local Market for Specialty Vehicles.
 * XSD Type: LocalListingDistancesNonSubscriptionDefinitionType
 */
class LocalListingDistancesNonSubscriptionDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
