<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProStoresCheckoutPreferenceType
 *
 * This type is deprecated.
 * XSD Type: ProStoresCheckoutPreferenceType
 */
class ProStoresCheckoutPreferenceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var bool $checkoutRedirectProStores
     */
    private $checkoutRedirectProStores = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ProStoresDetailsType $proStoresDetails
     */
    private $proStoresDetails = null;

    /**
     * Gets as checkoutRedirectProStores
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getCheckoutRedirectProStores()
    {
        return $this->checkoutRedirectProStores;
    }

    /**
     * Sets a new checkoutRedirectProStores
     *
     * This field is deprecated.
     *
     * @param bool $checkoutRedirectProStores
     * @return self
     */
    public function setCheckoutRedirectProStores($checkoutRedirectProStores)
    {
        $this->checkoutRedirectProStores = $checkoutRedirectProStores;
        return $this;
    }

    /**
     * Gets as proStoresDetails
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ProStoresDetailsType
     */
    public function getProStoresDetails()
    {
        return $this->proStoresDetails;
    }

    /**
     * Sets a new proStoresDetails
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ProStoresDetailsType $proStoresDetails
     * @return self
     */
    public function setProStoresDetails(\Nogrod\eBaySDK\MerchantData\ProStoresDetailsType $proStoresDetails)
    {
        $this->proStoresDetails = $proStoresDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCheckoutRedirectProStores();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CheckoutRedirectProStores", $value);
        }
        $value = $this->getProStoresDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProStoresDetails", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutRedirectProStores');
        if (null !== $value) {
            $this->setCheckoutRedirectProStores($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProStoresDetails');
        if (null !== $value) {
            $this->setProStoresDetails(\Nogrod\eBaySDK\MerchantData\ProStoresDetailsType::fromKeyValue($value));
        }
    }
}
