<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CharityAffiliationDetailsType
 *
 * This type is used to hold an array of one or more eBay for Charity organizations that are affiliated with the seller's account.
 * XSD Type: CharityAffiliationDetailsType
 */
class CharityAffiliationDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CharityAffiliationDetailType[] $charityAffiliationDetail
     */
    private $charityAffiliationDetail = [
        
    ];

    /**
     * Adds as charityAffiliationDetail
     *
     * A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\CharityAffiliationDetailType $charityAffiliationDetail
     */
    public function addToCharityAffiliationDetail(\Nogrod\eBaySDK\MerchantData\CharityAffiliationDetailType $charityAffiliationDetail)
    {
        $this->charityAffiliationDetail[] = $charityAffiliationDetail;
        return $this;
    }

    /**
     * isset charityAffiliationDetail
     *
     * A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharityAffiliationDetail($index)
    {
        return isset($this->charityAffiliationDetail[$index]);
    }

    /**
     * unset charityAffiliationDetail
     *
     * A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharityAffiliationDetail($index)
    {
        unset($this->charityAffiliationDetail[$index]);
    }

    /**
     * Gets as charityAffiliationDetail
     *
     * A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CharityAffiliationDetailType[]
     */
    public function getCharityAffiliationDetail()
    {
        return $this->charityAffiliationDetail;
    }

    /**
     * Sets a new charityAffiliationDetail
     *
     * A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CharityAffiliationDetailType[] $charityAffiliationDetail
     * @return self
     */
    public function setCharityAffiliationDetail(array $charityAffiliationDetail)
    {
        $this->charityAffiliationDetail = $charityAffiliationDetail;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCharityAffiliationDetail();
        if (null !== $value && !empty($this->getCharityAffiliationDetail())) {
            $writer->write(array_map(function ($v) {
                return ["CharityAffiliationDetail" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityAffiliationDetail', true);
        if (null !== $value && !empty($value)) {
            $this->setCharityAffiliationDetail(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\CharityAffiliationDetailType::fromKeyValue($v);
            }, $value));
        }
    }
}
