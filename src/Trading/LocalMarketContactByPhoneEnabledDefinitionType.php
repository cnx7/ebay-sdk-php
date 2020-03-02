<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LocalMarketContactByPhoneEnabledDefinitionType
 *
 * Indicates whether the category supports using the telephone
 *  as a contact method.
 *  Added for Local Market users.
 * XSD Type: LocalMarketContactByPhoneEnabledDefinitionType
 */
class LocalMarketContactByPhoneEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
}
