<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing LocalMarketCompanyNameEnabledDefinitionType
 *
 * Indicates whether the category supports the use of the company name to contact
 *  the seller for Classified Ad format listings. Added for Local Market users.
 * XSD Type: LocalMarketCompanyNameEnabledDefinitionType
 */
class LocalMarketCompanyNameEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
