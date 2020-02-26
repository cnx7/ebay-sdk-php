<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MaxFlatShippingCostCBTExemptDefinitionType
 *
 * Type used by the <b>MaxFlatShippingCostCBTExempt</b> field that is returned under the <b>FeatureDefinitions</b> container. The <b>MaxFlatShippingCostCBTExempt</b> field is returned as empty and indicates that a maximum flat-rate shipping cost is not imposed by the corresponding eBay site if the item is being shipped internationally. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <b>MaxFlatShippingCostCBTExempt</b> is not one of the values passed into those <b>FeatureID</b> fields.
 * XSD Type: MaxFlatShippingCostCBTExemptDefinitionType
 */
class MaxFlatShippingCostCBTExemptDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
