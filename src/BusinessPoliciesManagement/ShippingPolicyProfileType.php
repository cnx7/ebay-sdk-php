<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingPolicyProfileType
 *
 * Type defining the <b>shippingPolicyProfile</b> container, which is the container used to define one shipping policy for a seller.
 * XSD Type: ShippingPolicyProfile
 */
class ShippingPolicyProfileType extends SellerProfileType
{
    /**
     * This container consists of detailed shipping information for a seller's shipping policy. This container is conditionally required if the caller is creating a new shipping policy or modifying an existing shipping policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more shipping policies match the input criteria in the call request.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType $shippingPolicyInfo
     */
    private $shippingPolicyInfo = null;

    /**
     * Gets as shippingPolicyInfo
     *
     * This container consists of detailed shipping information for a seller's shipping policy. This container is conditionally required if the caller is creating a new shipping policy or modifying an existing shipping policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more shipping policies match the input criteria in the call request.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType
     */
    public function getShippingPolicyInfo()
    {
        return $this->shippingPolicyInfo;
    }

    /**
     * Sets a new shippingPolicyInfo
     *
     * This container consists of detailed shipping information for a seller's shipping policy. This container is conditionally required if the caller is creating a new shipping policy or modifying an existing shipping policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more shipping policies match the input criteria in the call request.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType $shippingPolicyInfo
     * @return self
     */
    public function setShippingPolicyInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType $shippingPolicyInfo)
    {
        $this->shippingPolicyInfo = $shippingPolicyInfo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getShippingPolicyInfo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyInfo", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyInfo');
        if (null !== $value) {
            $this->setShippingPolicyInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType::fromKeyValue($value));
        }
    }
}
