<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StorePreferencesType
 *
 * Store Preferences type.
 * XSD Type: StorePreferencesType
 */
class StorePreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Store vacation hold preferences.
     *
     * @var \Nogrod\eBaySDK\MerchantData\StoreVacationPreferencesType $vacationPreferences
     */
    private $vacationPreferences = null;

    /**
     * Gets as vacationPreferences
     *
     * Store vacation hold preferences.
     *
     * @return \Nogrod\eBaySDK\MerchantData\StoreVacationPreferencesType
     */
    public function getVacationPreferences()
    {
        return $this->vacationPreferences;
    }

    /**
     * Sets a new vacationPreferences
     *
     * Store vacation hold preferences.
     *
     * @param \Nogrod\eBaySDK\MerchantData\StoreVacationPreferencesType $vacationPreferences
     * @return self
     */
    public function setVacationPreferences(\Nogrod\eBaySDK\MerchantData\StoreVacationPreferencesType $vacationPreferences)
    {
        $this->vacationPreferences = $vacationPreferences;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVacationPreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VacationPreferences", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VacationPreferences');
        if (null !== $value) {
            $this->setVacationPreferences(\Nogrod\eBaySDK\MerchantData\StoreVacationPreferencesType::fromKeyValue($value));
        }
    }
}
