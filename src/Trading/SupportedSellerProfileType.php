<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SupportedSellerProfileType
 *
 * Type defining the <b>SupportedSellerProfile</b> container, which contains
 *  summary information related to specific Business Policies payment, return policy, and shipping
 *  profiles. The profile type is found in the <b>ProfileType</b> field.
 * XSD Type: SupportedSellerProfileType
 */
class SupportedSellerProfileType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Unique identifier of a Business Policies profile. This identifier is auto-generated by eBay when the seller creates the profile. This field is always
     *  returned with the <b>SupportedSellerProfile</b> container.
     *
     * @var int $profileID
     */
    private $profileID = null;

    /**
     * Indicates the type of the Business Policies profile. Valid values are PAYMENT,
     *  RETURN_POLICY, and SHIPPING. This field is always returned with the
     *  <b>SupportedSellerProfile</b> container.
     *
     * @var string $profileType
     */
    private $profileType = null;

    /**
     * The seller-defined name for a Business Policies profile. This field is always
     *  returned with the <b>SupportedSellerProfile</b> container.
     *
     * @var string $profileName
     */
    private $profileName = null;

    /**
     * Seller-provided description of a Business Policies profile. This field is only
     *  returned if a seller has provided a description for the profile.
     *
     * @var string $shortSummary
     */
    private $shortSummary = null;

    /**
     * Identifies the the Business Policies category group associated with the Business
     *  Policies profile. Current values are ALL (referring to all non-motor vehicle
     *  categories) and MOTORS_VEHICLE (for motor vehicle listings).
     *
     * @var \Nogrod\eBaySDK\Trading\CategoryGroupType $categoryGroup
     */
    private $categoryGroup = null;

    /**
     * Gets as profileID
     *
     * Unique identifier of a Business Policies profile. This identifier is auto-generated by eBay when the seller creates the profile. This field is always
     *  returned with the <b>SupportedSellerProfile</b> container.
     *
     * @return int
     */
    public function getProfileID()
    {
        return $this->profileID;
    }

    /**
     * Sets a new profileID
     *
     * Unique identifier of a Business Policies profile. This identifier is auto-generated by eBay when the seller creates the profile. This field is always
     *  returned with the <b>SupportedSellerProfile</b> container.
     *
     * @param int $profileID
     * @return self
     */
    public function setProfileID($profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * Gets as profileType
     *
     * Indicates the type of the Business Policies profile. Valid values are PAYMENT,
     *  RETURN_POLICY, and SHIPPING. This field is always returned with the
     *  <b>SupportedSellerProfile</b> container.
     *
     * @return string
     */
    public function getProfileType()
    {
        return $this->profileType;
    }

    /**
     * Sets a new profileType
     *
     * Indicates the type of the Business Policies profile. Valid values are PAYMENT,
     *  RETURN_POLICY, and SHIPPING. This field is always returned with the
     *  <b>SupportedSellerProfile</b> container.
     *
     * @param string $profileType
     * @return self
     */
    public function setProfileType($profileType)
    {
        $this->profileType = $profileType;
        return $this;
    }

    /**
     * Gets as profileName
     *
     * The seller-defined name for a Business Policies profile. This field is always
     *  returned with the <b>SupportedSellerProfile</b> container.
     *
     * @return string
     */
    public function getProfileName()
    {
        return $this->profileName;
    }

    /**
     * Sets a new profileName
     *
     * The seller-defined name for a Business Policies profile. This field is always
     *  returned with the <b>SupportedSellerProfile</b> container.
     *
     * @param string $profileName
     * @return self
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }

    /**
     * Gets as shortSummary
     *
     * Seller-provided description of a Business Policies profile. This field is only
     *  returned if a seller has provided a description for the profile.
     *
     * @return string
     */
    public function getShortSummary()
    {
        return $this->shortSummary;
    }

    /**
     * Sets a new shortSummary
     *
     * Seller-provided description of a Business Policies profile. This field is only
     *  returned if a seller has provided a description for the profile.
     *
     * @param string $shortSummary
     * @return self
     */
    public function setShortSummary($shortSummary)
    {
        $this->shortSummary = $shortSummary;
        return $this;
    }

    /**
     * Gets as categoryGroup
     *
     * Identifies the the Business Policies category group associated with the Business
     *  Policies profile. Current values are ALL (referring to all non-motor vehicle
     *  categories) and MOTORS_VEHICLE (for motor vehicle listings).
     *
     * @return \Nogrod\eBaySDK\Trading\CategoryGroupType
     */
    public function getCategoryGroup()
    {
        return $this->categoryGroup;
    }

    /**
     * Sets a new categoryGroup
     *
     * Identifies the the Business Policies category group associated with the Business
     *  Policies profile. Current values are ALL (referring to all non-motor vehicle
     *  categories) and MOTORS_VEHICLE (for motor vehicle listings).
     *
     * @param \Nogrod\eBaySDK\Trading\CategoryGroupType $categoryGroup
     * @return self
     */
    public function setCategoryGroup(\Nogrod\eBaySDK\Trading\CategoryGroupType $categoryGroup)
    {
        $this->categoryGroup = $categoryGroup;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProfileID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProfileID", $value);
        }
        $value = $this->getProfileType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProfileType", $value);
        }
        $value = $this->getProfileName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProfileName", $value);
        }
        $value = $this->getShortSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShortSummary", $value);
        }
        $value = $this->getCategoryGroup();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryGroup", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProfileID');
        if (null !== $value) {
            $this->setProfileID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProfileType');
        if (null !== $value) {
            $this->setProfileType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProfileName');
        if (null !== $value) {
            $this->setProfileName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShortSummary');
        if (null !== $value) {
            $this->setShortSummary($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryGroup');
        if (null !== $value) {
            $this->setCategoryGroup(\Nogrod\eBaySDK\Trading\CategoryGroupType::fromKeyValue($value));
        }
    }
}
