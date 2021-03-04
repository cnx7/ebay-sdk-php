<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetStoreResponseType
 *
 * The base response of the <b>GetStore</b> call. This response consists of the data describing a seller's eBay store, and includes the eBay Store name, the description of the store, the URL to the eBay Store, the subscription level, store theme information, and eBay Store Category hierarchy.
 * XSD Type: GetStoreResponseType
 */
class GetStoreResponseType extends AbstractResponseType
{
    /**
     * This container consists of detailed information on the seller's eBay Store. The amount of information in this container will partially depend on the settings made in the call request.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreType $store
     */
    private $store = null;

    /**
     * Gets as store
     *
     * This container consists of detailed information on the seller's eBay Store. The amount of information in this container will partially depend on the settings made in the call request.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreType
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Sets a new store
     *
     * This container consists of detailed information on the seller's eBay Store. The amount of information in this container will partially depend on the settings made in the call request.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreType $store
     * @return self
     */
    public function setStore(\Nogrod\eBaySDK\Trading\StoreType $store)
    {
        $this->store = $store;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getStore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Store", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Store');
        if (null !== $value) {
            $this->setStore(\Nogrod\eBaySDK\Trading\StoreType::fromKeyValue($value));
        }
    }
}
