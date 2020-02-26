<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellingSummaryType
 *
 * Contains summary information about the items the seller is selling.
 * XSD Type: SellingSummaryType
 */
class SellingSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The number of currently active auctions that will sell. That
     *  is, there is at least one bidder, and any reserve price has
     *  been met. Equivalent to the "Will Sell" value in My eBay.
     *
     * @var int $activeAuctionCount
     */
    private $activeAuctionCount = null;

    /**
     * The total number of currently active auctions for a given
     *  seller. Equivalent to the
     *  "Auction Quantity" value in My eBay.
     *
     * @var int $auctionSellingCount
     */
    private $auctionSellingCount = null;

    /**
     * The total number of bids made on the seller's active auction listings.
     *
     * @var int $auctionBidCount
     */
    private $auctionBidCount = null;

    /**
     * The total value of all items the seller has for sale in all listings.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalAuctionSellingValue
     */
    private $totalAuctionSellingValue = null;

    /**
     * The total number of items the seller has sold.
     *
     * @var int $totalSoldCount
     */
    private $totalSoldCount = null;

    /**
     * The total monetary value of the items the seller has sold.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalSoldValue
     */
    private $totalSoldValue = null;

    /**
     * The average duration, in days, of all items sold.
     *
     * @var int $soldDurationInDays
     */
    private $soldDurationInDays = null;

    /**
     * Gets as activeAuctionCount
     *
     * The number of currently active auctions that will sell. That
     *  is, there is at least one bidder, and any reserve price has
     *  been met. Equivalent to the "Will Sell" value in My eBay.
     *
     * @return int
     */
    public function getActiveAuctionCount()
    {
        return $this->activeAuctionCount;
    }

    /**
     * Sets a new activeAuctionCount
     *
     * The number of currently active auctions that will sell. That
     *  is, there is at least one bidder, and any reserve price has
     *  been met. Equivalent to the "Will Sell" value in My eBay.
     *
     * @param int $activeAuctionCount
     * @return self
     */
    public function setActiveAuctionCount($activeAuctionCount)
    {
        $this->activeAuctionCount = $activeAuctionCount;
        return $this;
    }

    /**
     * Gets as auctionSellingCount
     *
     * The total number of currently active auctions for a given
     *  seller. Equivalent to the
     *  "Auction Quantity" value in My eBay.
     *
     * @return int
     */
    public function getAuctionSellingCount()
    {
        return $this->auctionSellingCount;
    }

    /**
     * Sets a new auctionSellingCount
     *
     * The total number of currently active auctions for a given
     *  seller. Equivalent to the
     *  "Auction Quantity" value in My eBay.
     *
     * @param int $auctionSellingCount
     * @return self
     */
    public function setAuctionSellingCount($auctionSellingCount)
    {
        $this->auctionSellingCount = $auctionSellingCount;
        return $this;
    }

    /**
     * Gets as auctionBidCount
     *
     * The total number of bids made on the seller's active auction listings.
     *
     * @return int
     */
    public function getAuctionBidCount()
    {
        return $this->auctionBidCount;
    }

    /**
     * Sets a new auctionBidCount
     *
     * The total number of bids made on the seller's active auction listings.
     *
     * @param int $auctionBidCount
     * @return self
     */
    public function setAuctionBidCount($auctionBidCount)
    {
        $this->auctionBidCount = $auctionBidCount;
        return $this;
    }

    /**
     * Gets as totalAuctionSellingValue
     *
     * The total value of all items the seller has for sale in all listings.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalAuctionSellingValue()
    {
        return $this->totalAuctionSellingValue;
    }

    /**
     * Sets a new totalAuctionSellingValue
     *
     * The total value of all items the seller has for sale in all listings.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalAuctionSellingValue
     * @return self
     */
    public function setTotalAuctionSellingValue(\Nogrod\eBaySDK\MerchantData\AmountType $totalAuctionSellingValue)
    {
        $this->totalAuctionSellingValue = $totalAuctionSellingValue;
        return $this;
    }

    /**
     * Gets as totalSoldCount
     *
     * The total number of items the seller has sold.
     *
     * @return int
     */
    public function getTotalSoldCount()
    {
        return $this->totalSoldCount;
    }

    /**
     * Sets a new totalSoldCount
     *
     * The total number of items the seller has sold.
     *
     * @param int $totalSoldCount
     * @return self
     */
    public function setTotalSoldCount($totalSoldCount)
    {
        $this->totalSoldCount = $totalSoldCount;
        return $this;
    }

    /**
     * Gets as totalSoldValue
     *
     * The total monetary value of the items the seller has sold.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalSoldValue()
    {
        return $this->totalSoldValue;
    }

    /**
     * Sets a new totalSoldValue
     *
     * The total monetary value of the items the seller has sold.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalSoldValue
     * @return self
     */
    public function setTotalSoldValue(\Nogrod\eBaySDK\MerchantData\AmountType $totalSoldValue)
    {
        $this->totalSoldValue = $totalSoldValue;
        return $this;
    }

    /**
     * Gets as soldDurationInDays
     *
     * The average duration, in days, of all items sold.
     *
     * @return int
     */
    public function getSoldDurationInDays()
    {
        return $this->soldDurationInDays;
    }

    /**
     * Sets a new soldDurationInDays
     *
     * The average duration, in days, of all items sold.
     *
     * @param int $soldDurationInDays
     * @return self
     */
    public function setSoldDurationInDays($soldDurationInDays)
    {
        $this->soldDurationInDays = $soldDurationInDays;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getActiveAuctionCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ActiveAuctionCount", $value);
        }
        $value = $this->getAuctionSellingCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AuctionSellingCount", $value);
        }
        $value = $this->getAuctionBidCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AuctionBidCount", $value);
        }
        $value = $this->getTotalAuctionSellingValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalAuctionSellingValue", $value);
        }
        $value = $this->getTotalSoldCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalSoldCount", $value);
        }
        $value = $this->getTotalSoldValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalSoldValue", $value);
        }
        $value = $this->getSoldDurationInDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SoldDurationInDays", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ActiveAuctionCount');
        if (null !== $value) {
            $this->setActiveAuctionCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AuctionSellingCount');
        if (null !== $value) {
            $this->setAuctionSellingCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AuctionBidCount');
        if (null !== $value) {
            $this->setAuctionBidCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalAuctionSellingValue');
        if (null !== $value) {
            $this->setTotalAuctionSellingValue(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalSoldCount');
        if (null !== $value) {
            $this->setTotalSoldCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalSoldValue');
        if (null !== $value) {
            $this->setTotalSoldValue(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SoldDurationInDays');
        if (null !== $value) {
            $this->setSoldDurationInDays($value);
        }
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
