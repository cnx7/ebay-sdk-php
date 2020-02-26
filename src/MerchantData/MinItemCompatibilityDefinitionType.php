<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing MinItemCompatibilityDefinitionType
 *
 * Defines the minimum requirement for compatible applications as part of the parts
 *  compatibility feature. If the field is present, the corresponding feature applies
 *  to the site. The field is returned as an empty element (e.g., a boolean value is
 *  not returned).
 *  <br><br>
 *  Parts compatibility listings contain information to determine the assemblies with
 *  which a part is compatible. For example, an automotive part or accessory listed
 *  witih parts compatibility can be matched with vehicles (e.g., specific years,
 *  makes, and models) with which the part or accessory can be used.
 *  <br><br>
 *  There are two ways to enter parts compatibility: by application and by
 *  specification.
 *  <ul>
 *  <li> Entering parts compatibility by application specifies the assemblies
 *  (e.g., a specific year, make, and model of car) to which the item applies. This can
 *  be done automatically by listing with a catalog product that supports parts
 *  compatibility, or manually, using <b
 *  class="con">Item.ItemCompatibilityList</b> when listing or revising an
 *  item. </li>
 *  <li>Entering parts compatibility by specification involves specifying the
 *  part's relevant dimensions and characteristics necessary to determine the
 *  assemblies with which the part is compatible (e.g., Section Width, Aspect Ratio,
 *  Rim Diammeter, Load Index, and Speed Rating values for a tire) using
 *  attributes.</li>
 *  </ul>
 * XSD Type: MinItemCompatibilityDefinitionType
 */
class MinItemCompatibilityDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
