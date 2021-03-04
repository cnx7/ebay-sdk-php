<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CharityType
 *
 * This type is used to provide details about a nonprofit organization that will benefit from each sale generated from an eBay listing.
 * XSD Type: CharityType
 */
class CharityType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The full name of the nonprofit organization.
     *  <br>
     *  <br>
     *
     * @var string $charityName
     */
    private $charityName = null;

    /**
     * This numeric value is the unique identifier assigned to a nonprofit
     *  charity organization by the PayPal Giving Fund.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In an Add/Revise/Relist call, use <b>CharityID</b> instead, which is the unique identifier that eBay creates and assigns to the same nonprofit organization. The <b>CharityNumber</b> field will eventually be deprecated.
     *  </span>
     *  If both the <b>CharityNumber</b> and <b>CharityID</b> fields are used, the <b>CharityID</b> takes precedence.
     *
     * @var int $charityNumber
     */
    private $charityNumber = null;

    /**
     * The percentage of the purchase price that the
     *  seller chooses to donate to the selected nonprofit
     *  organization. This percentage is displayed in the eBay for Charity listing.
     *  <b>Possible values</b>: 10.0 to 100.0.
     *  <b></b>
     *  <ul>
     *  <li>Percentages must increment by 5.0. </li>
     *  <li>Minimum donation
     *  percentages may be required for eBay for Charity listings, see
     *  <a href="http://pages.ebay.com/help/sell/selling-nonprofit.html">
     *  Selling to benefit nonprofit organizations</a> for
     *  details. </li>
     *  </ul>
     *  The <b>DonationPercent</b> field is required in an Add/Revise/Relist call if the seller will be donating a percentage of the sale proceeds for each sale generated by the listing.
     *
     * @var float $donationPercent
     */
    private $donationPercent = null;

    /**
     * The unique identifier that eBay creates and assigns to each nonprofit organization.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In an Add/Revise/Relist call, this <b>CharityID</b> should be used instead of the <b>CharityNumber</b> field, which is the PayPal Giving Fund's unique identifier for the nonprofit organization. The <b>CharityNumber</b> field will eventually be deprecated.
     *  </span>
     *  The field is required in an Add/Revise/Relist call if the seller will be donating a percentage of the sale proceeds to this organization for each sale generated by the listing. If both the <b>CharityNumber</b> and <b>CharityID</b> fields are used, the <b>CharityID</b> takes precedence.
     *
     * @var string $charityID
     */
    private $charityID = null;

    /**
     * The stated mission of the nonprofit charity organization. This mission statement is displayed in the eBay for Charity section of the View Item page.
     *  <br>
     *  <br>
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
     * This enumeration value indicates whether or not the nonprofit organization is a valid eBay for Charity organization, and is able to receive proceeds from eBay sales.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * If this field is returned as <code>true</code>, a percentage of order line item's purchase price will be donated to a nonprofit organization.
     *
     * @var bool $charityListing
     */
    private $charityListing = null;

    /**
     * Gets as charityName
     *
     * The full name of the nonprofit organization.
     *  <br>
     *  <br>
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
     * The full name of the nonprofit organization.
     *  <br>
     *  <br>
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
     * This numeric value is the unique identifier assigned to a nonprofit
     *  charity organization by the PayPal Giving Fund.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In an Add/Revise/Relist call, use <b>CharityID</b> instead, which is the unique identifier that eBay creates and assigns to the same nonprofit organization. The <b>CharityNumber</b> field will eventually be deprecated.
     *  </span>
     *  If both the <b>CharityNumber</b> and <b>CharityID</b> fields are used, the <b>CharityID</b> takes precedence.
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
     * This numeric value is the unique identifier assigned to a nonprofit
     *  charity organization by the PayPal Giving Fund.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In an Add/Revise/Relist call, use <b>CharityID</b> instead, which is the unique identifier that eBay creates and assigns to the same nonprofit organization. The <b>CharityNumber</b> field will eventually be deprecated.
     *  </span>
     *  If both the <b>CharityNumber</b> and <b>CharityID</b> fields are used, the <b>CharityID</b> takes precedence.
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
     * The percentage of the purchase price that the
     *  seller chooses to donate to the selected nonprofit
     *  organization. This percentage is displayed in the eBay for Charity listing.
     *  <b>Possible values</b>: 10.0 to 100.0.
     *  <b></b>
     *  <ul>
     *  <li>Percentages must increment by 5.0. </li>
     *  <li>Minimum donation
     *  percentages may be required for eBay for Charity listings, see
     *  <a href="http://pages.ebay.com/help/sell/selling-nonprofit.html">
     *  Selling to benefit nonprofit organizations</a> for
     *  details. </li>
     *  </ul>
     *  The <b>DonationPercent</b> field is required in an Add/Revise/Relist call if the seller will be donating a percentage of the sale proceeds for each sale generated by the listing.
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
     * The percentage of the purchase price that the
     *  seller chooses to donate to the selected nonprofit
     *  organization. This percentage is displayed in the eBay for Charity listing.
     *  <b>Possible values</b>: 10.0 to 100.0.
     *  <b></b>
     *  <ul>
     *  <li>Percentages must increment by 5.0. </li>
     *  <li>Minimum donation
     *  percentages may be required for eBay for Charity listings, see
     *  <a href="http://pages.ebay.com/help/sell/selling-nonprofit.html">
     *  Selling to benefit nonprofit organizations</a> for
     *  details. </li>
     *  </ul>
     *  The <b>DonationPercent</b> field is required in an Add/Revise/Relist call if the seller will be donating a percentage of the sale proceeds for each sale generated by the listing.
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
     * Gets as charityID
     *
     * The unique identifier that eBay creates and assigns to each nonprofit organization.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In an Add/Revise/Relist call, this <b>CharityID</b> should be used instead of the <b>CharityNumber</b> field, which is the PayPal Giving Fund's unique identifier for the nonprofit organization. The <b>CharityNumber</b> field will eventually be deprecated.
     *  </span>
     *  The field is required in an Add/Revise/Relist call if the seller will be donating a percentage of the sale proceeds to this organization for each sale generated by the listing. If both the <b>CharityNumber</b> and <b>CharityID</b> fields are used, the <b>CharityID</b> takes precedence.
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
     * The unique identifier that eBay creates and assigns to each nonprofit organization.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In an Add/Revise/Relist call, this <b>CharityID</b> should be used instead of the <b>CharityNumber</b> field, which is the PayPal Giving Fund's unique identifier for the nonprofit organization. The <b>CharityNumber</b> field will eventually be deprecated.
     *  </span>
     *  The field is required in an Add/Revise/Relist call if the seller will be donating a percentage of the sale proceeds to this organization for each sale generated by the listing. If both the <b>CharityNumber</b> and <b>CharityID</b> fields are used, the <b>CharityID</b> takes precedence.
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
     * Gets as mission
     *
     * The stated mission of the nonprofit charity organization. This mission statement is displayed in the eBay for Charity section of the View Item page.
     *  <br>
     *  <br>
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
     * The stated mission of the nonprofit charity organization. This mission statement is displayed in the eBay for Charity section of the View Item page.
     *  <br>
     *  <br>
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
     * Gets as status
     *
     * This enumeration value indicates whether or not the nonprofit organization is a valid eBay for Charity organization, and is able to receive proceeds from eBay sales.
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
     * This enumeration value indicates whether or not the nonprofit organization is a valid eBay for Charity organization, and is able to receive proceeds from eBay sales.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as charityListing
     *
     * If this field is returned as <code>true</code>, a percentage of order line item's purchase price will be donated to a nonprofit organization.
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
     * If this field is returned as <code>true</code>, a percentage of order line item's purchase price will be donated to a nonprofit organization.
     *
     * @param bool $charityListing
     * @return self
     */
    public function setCharityListing($charityListing)
    {
        $this->charityListing = $charityListing;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
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
        $value = $this->getCharityID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityID", $value);
        }
        $value = $this->getMission();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Mission", $value);
        }
        $value = $this->getLogoURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogoURL", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getCharityListing();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityListing", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityID');
        if (null !== $value) {
            $this->setCharityID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Mission');
        if (null !== $value) {
            $this->setMission($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogoURL');
        if (null !== $value) {
            $this->setLogoURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityListing');
        if (null !== $value) {
            $this->setCharityListing($value);
        }
    }
}
