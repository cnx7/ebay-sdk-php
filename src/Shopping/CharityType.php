<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CharityType
 *
 * This type is used to provide details about a nonprofit organization registered with the PayPal Giving Fund. This type is used by the <b>Charity</b> container that is returned in <b>GetSingleItem</b> and <b>GetMultipleItems</b> if the proceeds of an eBay listing go towards benefiting a nonprofit organization.
 * XSD Type: CharityType
 */
class CharityType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This identifier is assigned to the nonprofit organization when the organization registers with the PayPal Giving Fund. This identifier should not be confused with the <b>CharityNumber</b> value, which is the nonprofit organization's globally unique identifier.
     *
     * @var string $charityID
     */
    private $charityID = null;

    /**
     * The name of the benefiting nonprofit organization selected by the
     *  charity seller.
     *
     * @var string $charityName
     */
    private $charityName = null;

    /**
     * This value is the globally unique identifier for the nonprofit organization. This identifier should not be confused with the <b>CharityID</b> value, which is the unique identifier that the PayPal Giving Fund assigns to the nonprofit organization.
     *
     * @var int $charityNumber
     */
    private $charityNumber = null;

    /**
     * The percentage of the purchase price that the seller chooses to donate to the selected nonprofit organization. This percentage is also displayed in the eBay View Item page for the listing. Possible values range from 10.0 to 100.0 (percent), in 5 percent increments. A seller is required to set a donation percentage at listing time, so this field should always be returned for charity listings.
     *
     * @var float $donationPercent
     */
    private $donationPercent = null;

    /**
     * The stated mission of the nonprofit organization. The length of the mission statement can vary by organization. This field is returned as long as it is defined for the nonprofit organization.
     *
     * @var string $mission
     */
    private $mission = null;

    /**
     * The full URL to the nonprofit organization's logo image file. This logo image file is the image that is displayed in all eBay listings that benefit that charity. This field is returned as long as it is defined for the nonprofit organization.
     *
     * @var string $logoURL
     */
    private $logoURL = null;

    /**
     * This field is deprecated.
     *
     * @var bool $charityListing
     */
    private $charityListing = null;

    /**
     * The enumeration value in this field indicates the current status of the nonprofit organization in accordance with the PayPal Giving Fund requirements.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Gets as charityID
     *
     * This identifier is assigned to the nonprofit organization when the organization registers with the PayPal Giving Fund. This identifier should not be confused with the <b>CharityNumber</b> value, which is the nonprofit organization's globally unique identifier.
     *
     * @return string
     */
    public function getCharityID()
    {
        return $this->charityID;
    }

    /**
     * Sets a new charityID
     *
     * This identifier is assigned to the nonprofit organization when the organization registers with the PayPal Giving Fund. This identifier should not be confused with the <b>CharityNumber</b> value, which is the nonprofit organization's globally unique identifier.
     *
     * @param string $charityID
     * @return self
     */
    public function setCharityID($charityID)
    {
        $this->charityID = $charityID;
        return $this;
    }

    /**
     * Gets as charityName
     *
     * The name of the benefiting nonprofit organization selected by the
     *  charity seller.
     *
     * @return string
     */
    public function getCharityName()
    {
        return $this->charityName;
    }

    /**
     * Sets a new charityName
     *
     * The name of the benefiting nonprofit organization selected by the
     *  charity seller.
     *
     * @param string $charityName
     * @return self
     */
    public function setCharityName($charityName)
    {
        $this->charityName = $charityName;
        return $this;
    }

    /**
     * Gets as charityNumber
     *
     * This value is the globally unique identifier for the nonprofit organization. This identifier should not be confused with the <b>CharityID</b> value, which is the unique identifier that the PayPal Giving Fund assigns to the nonprofit organization.
     *
     * @return int
     */
    public function getCharityNumber()
    {
        return $this->charityNumber;
    }

    /**
     * Sets a new charityNumber
     *
     * This value is the globally unique identifier for the nonprofit organization. This identifier should not be confused with the <b>CharityID</b> value, which is the unique identifier that the PayPal Giving Fund assigns to the nonprofit organization.
     *
     * @param int $charityNumber
     * @return self
     */
    public function setCharityNumber($charityNumber)
    {
        $this->charityNumber = $charityNumber;
        return $this;
    }

    /**
     * Gets as donationPercent
     *
     * The percentage of the purchase price that the seller chooses to donate to the selected nonprofit organization. This percentage is also displayed in the eBay View Item page for the listing. Possible values range from 10.0 to 100.0 (percent), in 5 percent increments. A seller is required to set a donation percentage at listing time, so this field should always be returned for charity listings.
     *
     * @return float
     */
    public function getDonationPercent()
    {
        return $this->donationPercent;
    }

    /**
     * Sets a new donationPercent
     *
     * The percentage of the purchase price that the seller chooses to donate to the selected nonprofit organization. This percentage is also displayed in the eBay View Item page for the listing. Possible values range from 10.0 to 100.0 (percent), in 5 percent increments. A seller is required to set a donation percentage at listing time, so this field should always be returned for charity listings.
     *
     * @param float $donationPercent
     * @return self
     */
    public function setDonationPercent($donationPercent)
    {
        $this->donationPercent = $donationPercent;
        return $this;
    }

    /**
     * Gets as mission
     *
     * The stated mission of the nonprofit organization. The length of the mission statement can vary by organization. This field is returned as long as it is defined for the nonprofit organization.
     *
     * @return string
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * Sets a new mission
     *
     * The stated mission of the nonprofit organization. The length of the mission statement can vary by organization. This field is returned as long as it is defined for the nonprofit organization.
     *
     * @param string $mission
     * @return self
     */
    public function setMission($mission)
    {
        $this->mission = $mission;
        return $this;
    }

    /**
     * Gets as logoURL
     *
     * The full URL to the nonprofit organization's logo image file. This logo image file is the image that is displayed in all eBay listings that benefit that charity. This field is returned as long as it is defined for the nonprofit organization.
     *
     * @return string
     */
    public function getLogoURL()
    {
        return $this->logoURL;
    }

    /**
     * Sets a new logoURL
     *
     * The full URL to the nonprofit organization's logo image file. This logo image file is the image that is displayed in all eBay listings that benefit that charity. This field is returned as long as it is defined for the nonprofit organization.
     *
     * @param string $logoURL
     * @return self
     */
    public function setLogoURL($logoURL)
    {
        $this->logoURL = $logoURL;
        return $this;
    }

    /**
     * Gets as charityListing
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getCharityListing()
    {
        return $this->charityListing;
    }

    /**
     * Sets a new charityListing
     *
     * This field is deprecated.
     *
     * @param bool $charityListing
     * @return self
     */
    public function setCharityListing($charityListing)
    {
        $this->charityListing = $charityListing;
        return $this;
    }

    /**
     * Gets as status
     *
     * The enumeration value in this field indicates the current status of the nonprofit organization in accordance with the PayPal Giving Fund requirements.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The enumeration value in this field indicates the current status of the nonprofit organization in accordance with the PayPal Giving Fund requirements.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCharityID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityID", $value);
        }
        $value = $this->getCharityName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityName", $value);
        }
        $value = $this->getCharityNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityNumber", $value);
        }
        $value = $this->getDonationPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DonationPercent", $value);
        }
        $value = $this->getMission();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Mission", $value);
        }
        $value = $this->getLogoURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogoURL", $value);
        }
        $value = $this->getCharityListing();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityListing", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityID');
        if (null !== $value) {
            $this->setCharityID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityName');
        if (null !== $value) {
            $this->setCharityName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityNumber');
        if (null !== $value) {
            $this->setCharityNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DonationPercent');
        if (null !== $value) {
            $this->setDonationPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Mission');
        if (null !== $value) {
            $this->setMission($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogoURL');
        if (null !== $value) {
            $this->setLogoURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityListing');
        if (null !== $value) {
            $this->setCharityListing($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
    }
}
