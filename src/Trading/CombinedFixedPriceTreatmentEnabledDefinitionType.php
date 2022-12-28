<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing CombinedFixedPriceTreatmentEnabledDefinitionType
 *
 * Defines the Combined Fixed Price Treatment feature. If the field is present, the corresponding feature applies to the category.
 *  The field is returned as an empty element (i.e., a boolean value is not returned).
 * XSD Type: CombinedFixedPriceTreatmentEnabledDefinitionType
 */
class CombinedFixedPriceTreatmentEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
