<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PaginatedOrderTransactionArrayType
 *
 * Contains a paginated list of orders.
 * XSD Type: PaginatedOrderTransactionArrayType
 */
class PaginatedOrderTransactionArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Contains the list of orders.
     *
     * @var \Nogrod\eBaySDK\MerchantData\OrderTransactionType[] $orderTransactionArray
     */
    private $orderTransactionArray = null;

    /**
     * Specifies information about the list, including number of pages and
     *  number of entries.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * Adds as orderTransaction
     *
     * Contains the list of orders.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\OrderTransactionType $orderTransaction
     */
    public function addToOrderTransactionArray(\Nogrod\eBaySDK\MerchantData\OrderTransactionType $orderTransaction)
    {
        $this->orderTransactionArray[] = $orderTransaction;
        return $this;
    }

    /**
     * isset orderTransactionArray
     *
     * Contains the list of orders.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderTransactionArray($index)
    {
        return isset($this->orderTransactionArray[$index]);
    }

    /**
     * unset orderTransactionArray
     *
     * Contains the list of orders.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderTransactionArray($index)
    {
        unset($this->orderTransactionArray[$index]);
    }

    /**
     * Gets as orderTransactionArray
     *
     * Contains the list of orders.
     *
     * @return \Nogrod\eBaySDK\MerchantData\OrderTransactionType[]
     */
    public function getOrderTransactionArray()
    {
        return $this->orderTransactionArray;
    }

    /**
     * Sets a new orderTransactionArray
     *
     * Contains the list of orders.
     *
     * @param \Nogrod\eBaySDK\MerchantData\OrderTransactionType[] $orderTransactionArray
     * @return self
     */
    public function setOrderTransactionArray(array $orderTransactionArray)
    {
        $this->orderTransactionArray = $orderTransactionArray;
        return $this;
    }

    /**
     * Gets as paginationResult
     *
     * Specifies information about the list, including number of pages and
     *  number of entries.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PaginationResultType
     */
    public function getPaginationResult()
    {
        return $this->paginationResult;
    }

    /**
     * Sets a new paginationResult
     *
     * Specifies information about the list, including number of pages and
     *  number of entries.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PaginationResultType $paginationResult
     * @return self
     */
    public function setPaginationResult(\Nogrod\eBaySDK\MerchantData\PaginationResultType $paginationResult)
    {
        $this->paginationResult = $paginationResult;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrderTransactionArray();
        if (null !== $value && !empty($this->getOrderTransactionArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderTransactionArray", array_map(function ($v) {
                return ["OrderTransaction" => $v];
            }, $value));
        }
        $value = $this->getPaginationResult();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaginationResult", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderTransactionArray', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderTransactionArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\OrderTransactionType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\MerchantData\PaginationResultType::fromKeyValue($value));
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
