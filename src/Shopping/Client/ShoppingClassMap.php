<?php

namespace Nogrod\eBaySDK\Shopping\Client;

use Sabre\Xml\Writer;

class ShoppingClassMap
{
    public static function Get()
    {
        return ['Time' => function (Writer $writer, $elem) {
            $value = $elem->format('H:i:s');
            if ($elem->getTimezone()->getOffset($elem) !== (new \DateTimeZone('UTC'))->getOffset($elem)) {
                $value .= $elem->format('P');
            }
            $writer->write($value);
        },
        'DateTime' => function (Writer $writer, $elem) {
            $writer->write($elem->format('Y-m-d\TH:i:s.v\Z'));
        },
        'Date' => function (Writer $writer, $elem) {
            $writer->write($elem->format('Y-m-d'));
        },];
    }

    public static function GetElements()
    {
        return ['{urn:ebay:apis:eBLBaseComponents}GeteBayTimeResponse' => 'Nogrod\eBaySDK\Shopping\GeteBayTimeResponse',
        '{urn:ebay:apis:eBLBaseComponents}GetMultipleItemsResponse' => 'Nogrod\eBaySDK\Shopping\GetMultipleItemsResponse',
        '{urn:ebay:apis:eBLBaseComponents}FindProductsResponse' => 'Nogrod\eBaySDK\Shopping\FindProductsResponse',
        '{urn:ebay:apis:eBLBaseComponents}GetCategoryInfoRequest' => 'Nogrod\eBaySDK\Shopping\GetCategoryInfoRequest',
        '{urn:ebay:apis:eBLBaseComponents}GetCategoryInfoResponse' => 'Nogrod\eBaySDK\Shopping\GetCategoryInfoResponse',
        '{urn:ebay:apis:eBLBaseComponents}GetItemStatusRequest' => 'Nogrod\eBaySDK\Shopping\GetItemStatusRequest',
        '{urn:ebay:apis:eBLBaseComponents}GetItemStatusResponse' => 'Nogrod\eBaySDK\Shopping\GetItemStatusResponse',
        '{urn:ebay:apis:eBLBaseComponents}GetMultipleItemsRequest' => 'Nogrod\eBaySDK\Shopping\GetMultipleItemsRequest',
        '{urn:ebay:apis:eBLBaseComponents}FindProductsRequest' => 'Nogrod\eBaySDK\Shopping\FindProductsRequest',
        '{urn:ebay:apis:eBLBaseComponents}GetShippingCostsRequest' => 'Nogrod\eBaySDK\Shopping\GetShippingCostsRequest',
        '{urn:ebay:apis:eBLBaseComponents}GetSingleItemRequest' => 'Nogrod\eBaySDK\Shopping\GetSingleItemRequest',
        '{urn:ebay:apis:eBLBaseComponents}GetSingleItemResponse' => 'Nogrod\eBaySDK\Shopping\GetSingleItemResponse',
        '{urn:ebay:apis:eBLBaseComponents}GetUserProfileRequest' => 'Nogrod\eBaySDK\Shopping\GetUserProfileRequest',
        '{urn:ebay:apis:eBLBaseComponents}GetUserProfileResponse' => 'Nogrod\eBaySDK\Shopping\GetUserProfileResponse',
        '{urn:ebay:apis:eBLBaseComponents}GeteBayTimeRequest' => 'Nogrod\eBaySDK\Shopping\GeteBayTimeRequest',
        '{urn:ebay:apis:eBLBaseComponents}GetShippingCostsResponse' => 'Nogrod\eBaySDK\Shopping\GetShippingCostsResponse',];
    }

    public static function GetNamespaces()
    {
        return ['urn:ebay:apis:eBLBaseComponents' => '',];
    }
}
