<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetUserContactDetailsRequestType
 *
 * This call is used to retrieve contact information for a specified eBay user, given that a bidding relationship (as either a buyer or seller) exists between the caller and the user.
 * XSD Type: GetUserContactDetailsRequestType
 */
class GetUserContactDetailsRequestType extends AbstractRequestType
{

    /**
     * A unique identifier for the eBay listing that the caller and order partner have in common.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * An eBay user ID that uniquely identifies a given user for whom the caller is seeking information. Either a seller's or bidder's/buyer's user ID can be specified here, as long as an bidding/order relationship exists between the requester and the user specified by this field. That is, a bidder must be bidding on the seller's active auction item, or a prospective buyer has proposed a Best Offer on a listing.
     *
     * @var string $contactID
     */
    private $contactID = null;

    /**
     * An eBay user ID that uniquely identifies the person who is making the call. Either a seller's or bidder's/buyer's user ID can be specified here, as long as a bidding/order relationship exists between the requester and the user for whom information is being requested.
     *
     * @var string $requesterID
     */
    private $requesterID = null;

    /**
     * Gets as itemID
     *
     * A unique identifier for the eBay listing that the caller and order partner have in common.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * A unique identifier for the eBay listing that the caller and order partner have in common.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as contactID
     *
     * An eBay user ID that uniquely identifies a given user for whom the caller is seeking information. Either a seller's or bidder's/buyer's user ID can be specified here, as long as an bidding/order relationship exists between the requester and the user specified by this field. That is, a bidder must be bidding on the seller's active auction item, or a prospective buyer has proposed a Best Offer on a listing.
     *
     * @return string
     */
    public function getContactID()
    {
        return $this->contactID;
    }

    /**
     * Sets a new contactID
     *
     * An eBay user ID that uniquely identifies a given user for whom the caller is seeking information. Either a seller's or bidder's/buyer's user ID can be specified here, as long as an bidding/order relationship exists between the requester and the user specified by this field. That is, a bidder must be bidding on the seller's active auction item, or a prospective buyer has proposed a Best Offer on a listing.
     *
     * @param string $contactID
     * @return self
     */
    public function setContactID($contactID)
    {
        $this->contactID = $contactID;
        return $this;
    }

    /**
     * Gets as requesterID
     *
     * An eBay user ID that uniquely identifies the person who is making the call. Either a seller's or bidder's/buyer's user ID can be specified here, as long as a bidding/order relationship exists between the requester and the user for whom information is being requested.
     *
     * @return string
     */
    public function getRequesterID()
    {
        return $this->requesterID;
    }

    /**
     * Sets a new requesterID
     *
     * An eBay user ID that uniquely identifies the person who is making the call. Either a seller's or bidder's/buyer's user ID can be specified here, as long as a bidding/order relationship exists between the requester and the user for whom information is being requested.
     *
     * @param string $requesterID
     * @return self
     */
    public function setRequesterID($requesterID)
    {
        $this->requesterID = $requesterID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getContactID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ContactID", $value);
        }
        $value = $this->getRequesterID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RequesterID", $value);
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ContactID');
        if (null !== $value) {
            $this->setContactID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RequesterID');
        if (null !== $value) {
            $this->setRequesterID($value);
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
