<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OrderReportResponseType
 *
 * <b>OrderReport</b> shows detailed information on all unacknowledged orders, and all unacknowledged line items in each order from the past 30 days. The unique identifier of each order is shown in the <b>Order.OrderID</b> response field, and unique identifier of each order line item is shown in a separate <b>Transaction.OrderLineItemID</b> response field. Only unfulfilled orders will appear in the response, and orders that have already shipped will not. Sellers use the information in <b>OrderReport</b> to make inventory updates and start order fulfillment.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note: </b> Once orders and order line items have been acknowledged with the <b>OrderAck</b> call, those orders and order line items will no longer appear in the <b>OrderReport</b> response. See
 *  <a href="http://developer.ebay.com/DevZone/large-merchant-services/Concepts/LMS_APIGuide.html#soldrpt"
 *  target="_blank">Acknowledging Sales</a> for more information.
 *  </span>
 * XSD Type: OrderReportResponseType
 */
class OrderReportResponseType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Contains information about Expiration date of the user's authentication token. Only returned within the 7-day period prior to a token's expiration
     *
     * @var \DateTime $hardExpirationWarning
     */
    private $hardExpirationWarning = null;

    /**
     * An enumeration value that indicates the status of the current job. Values may include 'Success', 'Warning', 'Failure', or 'Partial Failure'. If any value other that 'Success' is displayed, the error(s)/issue(s) should be displayed under an <b>Errors</b> container.
     *
     * @var string $ack
     */
    private $ack = null;

    /**
     * This value indicates the version of the Merchant Data WSDL that eBay used to process the request.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * An <b>Errors</b> container is returned for each warning or error that occurs when the call is processed. Each <b>Errors</b> container consists of detailed information on the warning or error, including the actual error message and information on any input parameters that actually triggered the warning or error.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ErrorType[] $errors
     */
    private $errors = [
        
    ];

    /**
     * This container is an array of unacknowledged orders for the seller that occurred within the last 30 days (or less based on the Bulk Data Exchange job).
     *
     * @var \Nogrod\eBaySDK\MerchantData\OrderType[] $orderArray
     */
    private $orderArray = null;

    /**
     * Gets as hardExpirationWarning
     *
     * Contains information about Expiration date of the user's authentication token. Only returned within the 7-day period prior to a token's expiration
     *
     * @return \DateTime
     */
    public function getHardExpirationWarning()
    {
        return $this->hardExpirationWarning;
    }

    /**
     * Sets a new hardExpirationWarning
     *
     * Contains information about Expiration date of the user's authentication token. Only returned within the 7-day period prior to a token's expiration
     *
     * @param \DateTime $hardExpirationWarning
     * @return self
     */
    public function setHardExpirationWarning(\DateTime $hardExpirationWarning)
    {
        $this->hardExpirationWarning = $hardExpirationWarning;
        return $this;
    }

    /**
     * Gets as ack
     *
     * An enumeration value that indicates the status of the current job. Values may include 'Success', 'Warning', 'Failure', or 'Partial Failure'. If any value other that 'Success' is displayed, the error(s)/issue(s) should be displayed under an <b>Errors</b> container.
     *
     * @return string
     */
    public function getAck()
    {
        return $this->ack;
    }

    /**
     * Sets a new ack
     *
     * An enumeration value that indicates the status of the current job. Values may include 'Success', 'Warning', 'Failure', or 'Partial Failure'. If any value other that 'Success' is displayed, the error(s)/issue(s) should be displayed under an <b>Errors</b> container.
     *
     * @param string $ack
     * @return self
     */
    public function setAck($ack)
    {
        $this->ack = $ack;
        return $this;
    }

    /**
     * Gets as version
     *
     * This value indicates the version of the Merchant Data WSDL that eBay used to process the request.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * This value indicates the version of the Merchant Data WSDL that eBay used to process the request.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as errors
     *
     * An <b>Errors</b> container is returned for each warning or error that occurs when the call is processed. Each <b>Errors</b> container consists of detailed information on the warning or error, including the actual error message and information on any input parameters that actually triggered the warning or error.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ErrorType $errors
     */
    public function addToErrors(\Nogrod\eBaySDK\MerchantData\ErrorType $errors)
    {
        $this->errors[] = $errors;
        return $this;
    }

    /**
     * isset errors
     *
     * An <b>Errors</b> container is returned for each warning or error that occurs when the call is processed. Each <b>Errors</b> container consists of detailed information on the warning or error, including the actual error message and information on any input parameters that actually triggered the warning or error.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * An <b>Errors</b> container is returned for each warning or error that occurs when the call is processed. Each <b>Errors</b> container consists of detailed information on the warning or error, including the actual error message and information on any input parameters that actually triggered the warning or error.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * An <b>Errors</b> container is returned for each warning or error that occurs when the call is processed. Each <b>Errors</b> container consists of detailed information on the warning or error, including the actual error message and information on any input parameters that actually triggered the warning or error.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * An <b>Errors</b> container is returned for each warning or error that occurs when the call is processed. Each <b>Errors</b> container consists of detailed information on the warning or error, including the actual error message and information on any input parameters that actually triggered the warning or error.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Adds as order
     *
     * This container is an array of unacknowledged orders for the seller that occurred within the last 30 days (or less based on the Bulk Data Exchange job).
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\OrderType $order
     */
    public function addToOrderArray(\Nogrod\eBaySDK\MerchantData\OrderType $order)
    {
        $this->orderArray[] = $order;
        return $this;
    }

    /**
     * isset orderArray
     *
     * This container is an array of unacknowledged orders for the seller that occurred within the last 30 days (or less based on the Bulk Data Exchange job).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderArray($index)
    {
        return isset($this->orderArray[$index]);
    }

    /**
     * unset orderArray
     *
     * This container is an array of unacknowledged orders for the seller that occurred within the last 30 days (or less based on the Bulk Data Exchange job).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderArray($index)
    {
        unset($this->orderArray[$index]);
    }

    /**
     * Gets as orderArray
     *
     * This container is an array of unacknowledged orders for the seller that occurred within the last 30 days (or less based on the Bulk Data Exchange job).
     *
     * @return \Nogrod\eBaySDK\MerchantData\OrderType[]
     */
    public function getOrderArray()
    {
        return $this->orderArray;
    }

    /**
     * Sets a new orderArray
     *
     * This container is an array of unacknowledged orders for the seller that occurred within the last 30 days (or less based on the Bulk Data Exchange job).
     *
     * @param \Nogrod\eBaySDK\MerchantData\OrderType[] $orderArray
     * @return self
     */
    public function setOrderArray(array $orderArray)
    {
        $this->orderArray = $orderArray;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getHardExpirationWarning();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HardExpirationWarning", $value);
        }
        $value = $this->getAck();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Ack", $value);
        }
        $value = $this->getVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Version", $value);
        }
        $value = $this->getErrors();
        if (null !== $value && !empty($this->getErrors())) {
            $writer->write(array_map(function ($v) {
                return ["Errors" => $v];
            }, $value));
        }
        $value = $this->getOrderArray();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderArray", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HardExpirationWarning');
        if (null !== $value) {
            $this->setHardExpirationWarning(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Ack');
        if (null !== $value) {
            $this->setAck($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Version');
        if (null !== $value) {
            $this->setVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Errors', true);
        if (null !== $value && !empty($value)) {
            $this->setErrors(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ErrorType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderArray', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\OrderType::fromKeyValue($v);
            }, $value));
        }
    }
}
