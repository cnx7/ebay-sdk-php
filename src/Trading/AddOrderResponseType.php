<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddOrderResponseType
 *
 * This type defines the response of an <b>AddOrder</b> call. If the multiple line items are successfully combined into a single order, this response includes the unique identifier of this 'Combined Invoice' order (automatically generated by eBay), and a timestamp indicating when the new order was created.
 * XSD Type: AddOrderResponseType
 */
class AddOrderResponseType extends AbstractResponseType
{
    /**
     * The unique identifier of the successfully-created 'Combined Invoice' order. This value is only created and returned if the <b>AddOrder</b> call is successful in creating the new order.
     *  <br/><br/>
     *  This value can be used as an input filter in <b>GetOrders</b> and <b>GetOrderTransactions</b> calls to retrieve the 'Combined Invoice' order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all order retrieval calls that accept Order ID values as filters in the request payload, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * Timestamp that indicates the date and time that the 'Combined Invoice' order was created.
     *
     * @var \DateTime $createdTime
     */
    private $createdTime = null;

    /**
     * Gets as orderID
     *
     * The unique identifier of the successfully-created 'Combined Invoice' order. This value is only created and returned if the <b>AddOrder</b> call is successful in creating the new order.
     *  <br/><br/>
     *  This value can be used as an input filter in <b>GetOrders</b> and <b>GetOrderTransactions</b> calls to retrieve the 'Combined Invoice' order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all order retrieval calls that accept Order ID values as filters in the request payload, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * The unique identifier of the successfully-created 'Combined Invoice' order. This value is only created and returned if the <b>AddOrder</b> call is successful in creating the new order.
     *  <br/><br/>
     *  This value can be used as an input filter in <b>GetOrders</b> and <b>GetOrderTransactions</b> calls to retrieve the 'Combined Invoice' order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all order retrieval calls that accept Order ID values as filters in the request payload, including the <b>GetOrders</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @param string $orderID
     * @return self
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * Gets as createdTime
     *
     * Timestamp that indicates the date and time that the 'Combined Invoice' order was created.
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * Sets a new createdTime
     *
     * Timestamp that indicates the date and time that the 'Combined Invoice' order was created.
     *
     * @param \DateTime $createdTime
     * @return self
     */
    public function setCreatedTime(\DateTime $createdTime)
    {
        $this->createdTime = $createdTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getOrderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderID", $value);
        }
        $value = $this->getCreatedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreatedTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreatedTime');
        if (null !== $value) {
            $this->setCreatedTime(new \DateTime($value));
        }
    }
}
