<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing VRMSupportedDefinitionType
 *
 * If present, the site defines category settings for whether the seller
 *  can provide a Vehicle Registration Mark (VRM) for a
 *  UK eBay Motors vehicle listing.
 * XSD Type: VRMSupportedDefinitionType
 */
class VRMSupportedDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
