<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddDisputeRequestType
 *
 * Enables a seller to create an Unpaid Item case against a buyer, or to cancel a
 *  single line item order.
 *  <br>
 *  <br>
 *  Although the seller is eligible to open up an Unpaid Item case two days after the buyer purchases the item or wins the item through an auction, it is recommended that the seller contact the buyer first to try and make it right before opening a case. The <a href="http://pages.ebay.com/help/sell/unpaid-items.html" target="_blank">Unpaid Items</a> help page talks more about how a seller should handle an unpaid item.
 *  <br>
 *  <br>
 *  To cancel a multiple line item order programmatically, the seller would have to use the <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation__post.html" target="_blank">POST /post-order/v2/cancellation</a> call of the <b>Post-Order API</b>.
 * XSD Type: AddDisputeRequestType
 */
class AddDisputeRequestType extends AbstractRequestType
{

    /**
     * This enumerated value gives the explanation of why the seller opened a case (or why seller canceled a single line item order). Not all values contained in <b>DisputeExplanationCodeType</b> are allowed in the <b>AddDispute</b> call, and the values that are allowed must match the <b>DisputeReason</b> value.
     *
     * @var string $disputeExplanation
     */
    private $disputeExplanation = null;

    /**
     * The enumeration value passed into this required field will depend on the action being taken. The seller will pass in <code>BuyerHasNotPaid</code> if the seller is creating an Unpaid Item case against the buyer, or
     *  <code>TransactionMutuallyCanceled</code> if the seller is cancelling a single line item order at the request of the buyer, or if the seller has ran out of stock on the item or otherwise cannot fulfill the order.
     *
     * @var string $disputeReason
     */
    private $disputeReason = null;

    /**
     * Unique identifier of an eBay listing. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required.
     *  <br>
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The unique identifier of a buyer's purchase. A <b>TransactionID</b> is created by eBay once a buyer purchases the item through a fixed-priced listing or by using the Buy It Now feature in an auction listing, or when an auction listing ends with a winning bidder. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required.
     *  <br>
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * <b>OrderLineItemID</b> is a unique identifier of an order line item. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>ItemID</b>/<b>TransactionID</b> pair is used, this field is required.
     *  <br>
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as disputeExplanation
     *
     * This enumerated value gives the explanation of why the seller opened a case (or why seller canceled a single line item order). Not all values contained in <b>DisputeExplanationCodeType</b> are allowed in the <b>AddDispute</b> call, and the values that are allowed must match the <b>DisputeReason</b> value.
     *
     * @return string
     */
    public function getDisputeExplanation()
    {
        return $this->disputeExplanation;
    }

    /**
     * Sets a new disputeExplanation
     *
     * This enumerated value gives the explanation of why the seller opened a case (or why seller canceled a single line item order). Not all values contained in <b>DisputeExplanationCodeType</b> are allowed in the <b>AddDispute</b> call, and the values that are allowed must match the <b>DisputeReason</b> value.
     *
     * @param string $disputeExplanation
     * @return self
     */
    public function setDisputeExplanation($disputeExplanation)
    {
        $this->disputeExplanation = $disputeExplanation;
        return $this;
    }

    /**
     * Gets as disputeReason
     *
     * The enumeration value passed into this required field will depend on the action being taken. The seller will pass in <code>BuyerHasNotPaid</code> if the seller is creating an Unpaid Item case against the buyer, or
     *  <code>TransactionMutuallyCanceled</code> if the seller is cancelling a single line item order at the request of the buyer, or if the seller has ran out of stock on the item or otherwise cannot fulfill the order.
     *
     * @return string
     */
    public function getDisputeReason()
    {
        return $this->disputeReason;
    }

    /**
     * Sets a new disputeReason
     *
     * The enumeration value passed into this required field will depend on the action being taken. The seller will pass in <code>BuyerHasNotPaid</code> if the seller is creating an Unpaid Item case against the buyer, or
     *  <code>TransactionMutuallyCanceled</code> if the seller is cancelling a single line item order at the request of the buyer, or if the seller has ran out of stock on the item or otherwise cannot fulfill the order.
     *
     * @param string $disputeReason
     * @return self
     */
    public function setDisputeReason($disputeReason)
    {
        $this->disputeReason = $disputeReason;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * Unique identifier of an eBay listing. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required.
     *  <br>
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
     * Unique identifier of an eBay listing. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required.
     *  <br>
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
     * Gets as transactionID
     *
     * The unique identifier of a buyer's purchase. A <b>TransactionID</b> is created by eBay once a buyer purchases the item through a fixed-priced listing or by using the Buy It Now feature in an auction listing, or when an auction listing ends with a winning bidder. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required.
     *  <br>
     *
     * @return string
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Sets a new transactionID
     *
     * The unique identifier of a buyer's purchase. A <b>TransactionID</b> is created by eBay once a buyer purchases the item through a fixed-priced listing or by using the Buy It Now feature in an auction listing, or when an auction listing ends with a winning bidder. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required.
     *  <br>
     *
     * @param string $transactionID
     * @return self
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier of an order line item. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>ItemID</b>/<b>TransactionID</b> pair is used, this field is required.
     *  <br>
     *
     * @return string
     */
    public function getOrderLineItemID()
    {
        return $this->orderLineItemID;
    }

    /**
     * Sets a new orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier of an order line item. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>ItemID</b>/<b>TransactionID</b> pair is used, this field is required.
     *  <br>
     *
     * @param string $orderLineItemID
     * @return self
     */
    public function setOrderLineItemID($orderLineItemID)
    {
        $this->orderLineItemID = $orderLineItemID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getDisputeExplanation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeExplanation", $value);
        }
        $value = $this->getDisputeReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeReason", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeExplanation');
        if (null !== $value) {
            $this->setDisputeExplanation($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeReason');
        if (null !== $value) {
            $this->setDisputeReason($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
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
