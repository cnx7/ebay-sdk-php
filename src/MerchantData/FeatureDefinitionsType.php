<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeatureDefinitionsType
 *
 * This type is used by the <b>FeatureDefinitions</b> container that is returned in the <b>GetCategoryFeatures</b> response to indicate which eBay features are available on one more eBay marketplaces. If no <b>FeatureID</b> field is included in the call request, all eBay features available for one more eBay marketplaces are returned. If one or more <b>FeatureID</b> fields are included in the call request, only those eBay features specified in each <b>FeatureID</b> field are returned in the response.
 * XSD Type: FeatureDefinitionsType
 */
class FeatureDefinitionsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support multiple listing durations. Listing durations will vary based on the selling format (auction, fixed-price, or classified ad) and the eBay category. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ListingDurations</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ListingDurationDefinitionsType $listingDurations
     */
    private $listingDurations = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces require shipping terms at listing time, which includes at least one domestic shipping service option and its associated costs. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingTermsRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ShippingTermRequiredDefinitionType $shippingTermsRequired
     */
    private $shippingTermsRequired = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer feature. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BestOfferEnabledDefinitionType $bestOfferEnabled
     */
    private $bestOfferEnabled = null;

    /**
     * This field is no longer applicable as Dutch auctions are no longer supported on any eBay marketplace.
     *
     * @var \Nogrod\eBaySDK\MerchantData\DutchBINEnabledDefinitionType $dutchBINEnabled
     */
    private $dutchBINEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\UserConsentRequiredDefinitionType $userConsentRequired
     */
    private $userConsentRequired = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the temporary display of a seller's listing on a section of the eBay Home Page. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HomePageFeaturedEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled
     */
    private $homePageFeaturedEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Pro Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProPackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ProPackEnabledDefinitionType $proPackEnabled
     */
    private $proPackEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled
     */
    private $basicUpgradePackEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Value Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValuePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ValuePackEnabledDefinitionType $valuePackEnabled
     */
    private $valuePackEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Pro Pack Plus listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProPackPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ProPackPlusEnabledDefinitionType $proPackPlusEnabled
     */
    private $proPackPlusEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Classified Ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>AdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AdFormatEnabledDefinitionType $adFormatEnabled
     */
    private $adFormatEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support counter offers to Best Offers. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferCounterEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled
     */
    private $bestOfferCounterEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Decline feature. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled
     */
    private $bestOfferAutoDeclineEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings for dealership subscribers with a specialty subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSpecialitySubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription
     */
    private $localMarketSpecialitySubscription = null;

    /**
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings for dealership subscribers with a regular subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketRegularSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription
     */
    private $localMarketRegularSubscription = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings for dealership subscribers with a premium subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPremiumSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription
     */
    private $localMarketPremiumSubscription = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings for dealerships without a subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription
     */
    private $localMarketNonSubscription = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ExpressEnabledDefinitionType $expressEnabled
     */
    private $expressEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ExpressPicturesRequiredDefinitionType $expressPicturesRequired
     */
    private $expressPicturesRequired = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ExpressConditionRequiredDefinitionType $expressConditionRequired
     */
    private $expressConditionRequired = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces require a minimum reserve price for an auction item. This feature is only applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinimumReservePrice</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MinimumReservePriceDefinitionType $minimumReservePrice
     */
    private $minimumReservePrice = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\TCREnabledDefinitionType $transactionConfirmationRequestEnabled
     */
    private $transactionConfirmationRequestEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the seller to provide contact information at listing time for a classified ad listing. This feature is only applicable to classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled
     */
    private $sellerContactDetailsEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\StoreInventoryEnabledDefinitionType $storeInventoryEnabled
     */
    private $storeInventoryEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled
     */
    private $skypeMeTransactionalEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled
     */
    private $skypeMeNonTransactionalEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support allow dealership subscribers with a regular subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesRegular</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular
     */
    private $localListingDistancesRegular = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow dealership subscribers with a specialty subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesSpecialty</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty
     */
    private $localListingDistancesSpecialty = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow dealership subscribers without a subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription
     */
    private $localListingDistancesNonSubscription = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of acceptable payment methods for classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPaymentMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled
     */
    private $classifiedAdPaymentMethodEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of shipping service options for classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled
     */
    private $classifiedAdShippingMethodEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer feature for classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled
     */
    private $classifiedAdBestOfferEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support counter offers to Best Offers for classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled
     */
    private $classifiedAdCounterOfferEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Decline feature for classified ad listings. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled
     */
    private $classifiedAdAutoDeclineEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a phone number when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled
     */
    private $classifiedAdContactByPhoneEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an email address when contacting the seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled
     */
    private $classifiedAdContactByEmailEnabled = null;

    /**
     * eBay controls all forms of electronic payment methods that are avaialable to buyers, so this field is no longer applicable.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SafePaymentRequiredDefinitionType $safePaymentRequired
     */
    private $safePaymentRequired = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled
     */
    private $classifiedAdPayPerLeadEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of Item Specifics in listings. Item Specifics are typical aspects that items in a specific category tend to have, and they allow sellers to provide descriptive details of an item in a structured manner. For example, in a jewelry category, sellers might describe lockets with Item Specifics name-value pairs like "Chain Length=18 in." and "Main Shape=Heart", or in a Washers & Dryers category, sellers might include "Type=Top-Loading". This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemSpecificsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled
     */
    private $itemSpecificsEnabled = null;

    /**
     * PaisaPay is a deprecated payment method, so this field is no longer applicable.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled
     */
    private $paisaPayFullEscrowEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled
     */
    private $iSBNIdentifierEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled
     */
    private $uPCIdentifierEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled
     */
    private $eANIdentifierEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of Brand and MPN (Manufacturer Part Number) to identify a product. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BrandMPNIdentifierEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled
     */
    private $brandMPNIdentifierEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Accept feature. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled
     */
    private $bestOfferAutoAcceptEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Accept feature for classified ad listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled
     */
    private $classifiedAdAutoAcceptEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support cross-border trading on the US and CA (English) sites. In cross-border trading, also referred to as International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CrossBorderTradeNorthAmericaEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled
     */
    private $crossBorderTradeNorthAmericaEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support cross-border trading on the UK and Ireland sites. In cross-border trading, also referred to as International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CrossBorderTradeGBEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled
     */
    private $crossBorderTradeGBEnabled = null;

    /**
     * This field is for future use, as cross-border trading (aka International site visibility) is not currently supported for Australia.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled
     */
    private $crossBorderTradeAustraliaEnabled = null;

    /**
     * This field is deprecated..
     *
     * @var \Nogrod\eBaySDK\MerchantData\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled
     */
    private $payPalBuyerProtectionEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled
     */
    private $buyerGuaranteeEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled
     */
    private $combinedFixedPriceTreatmentEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations
     */
    private $galleryFeaturedDurations = null;

    /**
     * PaisaPay is a deprecated payment method, so this field is no longer applicable.
     *
     * @var \Nogrod\eBaySDK\MerchantData\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline
     */
    private $iNEscrowWorkflowTimeline = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PayPalRequiredDefinitionType $payPalRequired
     */
    private $payPalRequired = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
     */
    private $eBayMotorsProAdFormatEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a phone number when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
     */
    private $eBayMotorsProContactByPhoneEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of multiple phone numbers for the seller for a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
     */
    private $eBayMotorsProPhoneCount = null;

    /**
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an address when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
     */
    private $eBayMotorsProContactByAddressEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of multiple street address for the seller for a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
     */
    private $eBayMotorsProStreetCount = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a company name when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
     */
    private $eBayMotorsProCompanyNameEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an email address when contacting the seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
     */
    private $eBayMotorsProContactByEmailEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer feature is for motor vehicle classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
     */
    private $eBayMotorsProBestOfferEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Accept feature for motor vehicle classified ad listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
     */
    private $eBayMotorsProAutoAcceptEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Decline feature for motor vehicle classified ad listings. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
     */
    private $eBayMotorsProAutoDeclineEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of acceptable payment methods for motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
     */
    private $eBayMotorsProPaymentMethodCheckOutEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of shipping service options for motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
     */
    private $eBayMotorsProShippingMethodEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support counter offers to Best Offers for motor vehicle classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
     */
    private $eBayMotorsProCounterOfferEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the seller to provide contact information at listing time for a motor vehicle classified ad listing. This feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProSellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
     */
    private $eBayMotorsProSellerContactDetailsEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled
     */
    private $localMarketAdFormatEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the use of a phone number when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled
     */
    private $localMarketContactByPhoneEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the use of multiple phone numbers for the seller for a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount
     */
    private $localMarketPhoneCount = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the use of an address when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled
     */
    private $localMarketContactByAddressEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the use of multiple street address for the seller for a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketStreetCountDefinitionType $localMarketStreetCount
     */
    private $localMarketStreetCount = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a company name when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled
     */
    private $localMarketCompanyNameEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an email address when contacting the seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled
     */
    private $localMarketContactByEmailEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer feature is for Motors Local Market listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled
     */
    private $localMarketBestOfferEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Accept feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled
     */
    private $localMarketAutoAcceptEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Decline feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled
     */
    private $localMarketAutoDeclineEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of acceptable payment methods for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled
     */
    private $localMarketPaymentMethodCheckOutEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of shipping service options for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled
     */
    private $localMarketShippingMethodEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support counter offers to Best Offers for Motors Local Market listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled
     */
    private $localMarketCounterOfferEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the seller to provide contact information at listing time for Motors Local Market listings. This feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled
     */
    private $localMarketSellerContactDetailsEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of multiple phone numbers for the seller for a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount
     */
    private $classifiedAdPhoneCount = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an address when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     *
     * @var \Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled
     */
    private $classifiedAdContactByAddressEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of multiple street addresses for the seller for a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount
     */
    private $classifiedAdStreetCount = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a company name when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled
     */
    private $classifiedAdCompanyNameEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SpecialitySubscriptionDefinitionType $specialitySubscription
     */
    private $specialitySubscription = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\RegularSubscriptionDefinitionType $regularSubscription
     */
    private $regularSubscription = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PremiumSubscriptionDefinitionType $premiumSubscription
     */
    private $premiumSubscription = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\NonSubscriptionDefinitionType $nonSubscription
     */
    private $nonSubscription = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of return policies in listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled
     */
    private $returnPolicyEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a stated handling time in listings. The handling time is the maximum number of business days the seller
     *  commits to for preparing an item to be shipped after receiving a
     *  cleared payment. The seller's handling time does not include the
     *  shipping time (the carrier's transit time). This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HandlingTimeEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\HandlingTimeEnabledDefinitionType $handlingTimeEnabled
     */
    private $handlingTimeEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner
     */
    private $payPalRequiredForStoreOwner = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the quantity of a listing to be revised during the life of the listing. This feature is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReviseQuantityAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed
     */
    private $reviseQuantityAllowed = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the price of a listing to be revised during the life of the listing. This feature is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\RevisePriceAllowedDefinitionType $revisePriceAllowed
     */
    private $revisePriceAllowed = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support extended listing durations for eBay Business Sellers with eBay Stores. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled
     */
    private $storeOwnerExtendedListingDurationsEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations
     */
    private $storeOwnerExtendedListingDurations = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of acceptable payment methods in listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaymentMethod</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  eBay now controls all electronic payment methods available to buyers, but sellers still need to specify offline payment methods for listings that require/support offline payment such as motor vehicle listings.</span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\PaymentMethodDefinitionType $paymentMethod
     */
    private $paymentMethod = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the applicable max cap per shipping cost for shipping service group1. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group1MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost
     */
    private $group1MaxFlatShippingCost = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the applicable max cap per shipping cost for shipping service group2. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group2MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost
     */
    private $group2MaxFlatShippingCost = null;

    /**
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the applicable max cap per shipping cost for shipping service group3. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group3MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost
     */
    private $group3MaxFlatShippingCost = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces do not impose a maximum flat-rate shipping cost if the item is being shipped internationally. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCostCBTExempt</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt
     */
    private $maxFlatShippingCostCBTExempt = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces do not impose a maximum flat-rate shipping cost. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MaxFlatShippingCostDefinitionType $maxFlatShippingCost
     */
    private $maxFlatShippingCost = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support multiple-variation listings for some categories. Multiple-variation listings contain items that are logically the same product, but that vary in color, size, or other aspect. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations. This feature is only applicable to fixed-price listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VariationsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\VariationsEnabledDefinitionType $variationsEnabled
     */
    private $variationsEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled
     */
    private $attributeConversionEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support free, automatic upgrades for Gallery Plus for some categories. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>FreeGalleryPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled
     */
    private $freeGalleryPlusEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support a free Picture Pack upgrade for some categories. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>FreePicturePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\FreePicturePackEnabledDefinitionType $freePicturePackEnabled
     */
    private $freePicturePackEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Parts Compatibility for some Parts & Accessories categories. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemCompatibilityEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled
     */
    private $itemCompatibilityEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces define a maximum limit for the number of compatible applications for items listed with parts compatibilities by application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MaxItemCompatibilityDefinitionType $maxItemCompatibility
     */
    private $maxItemCompatibility = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces define a minimum amount for the number of compatible applications for items listed with parts compatibilities by application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MinItemCompatibilityDefinitionType $minItemCompatibility
     */
    private $minItemCompatibility = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the textual description of an item's condition at listing time. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ConditionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ConditionEnabledDefinitionType $conditionEnabled
     */
    private $conditionEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Condition IDs to specify an item's condition at listing time. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ConditionValues</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ConditionValuesDefinitionType $conditionValues
     */
    private $conditionValues = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support value categories. A Value category will typically have lower listing fees or another eBay promotion. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValueCategory</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ValueCategoryDefinitionType $valueCategory
     */
    private $valueCategory = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the creation of listings through the specification of Global Trade Identification Numbers (GTINs) like UPC, ISBN, EAN, or Brand/MPN combination. If a GTIN is matched to a product in eBay product catalog, a listing will automatically be created using the eBay catalog product's images, product aspects, description, and title. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProductCreationEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ProductCreationEnabledDefinitionType $productCreationEnabled
     */
    private $productCreationEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the EAN product identifying feature. This field will be returned as long as <b>EANEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the EAN product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.EANEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the EAN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>EANEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @var \Nogrod\eBaySDK\MerchantData\EANEnabledDefinitionType $eANEnabled
     */
    private $eANEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the ISBN product identifying feature. This field will be returned as long as <b>ISBNEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the ISBN product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.ISBNEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the ISBN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>ISBNEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @var \Nogrod\eBaySDK\MerchantData\ISBNEnabledDefinitionType $iSBNEnabled
     */
    private $iSBNEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the UPC product identifying feature. This field will be returned as long as <b>UPCEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the UPC product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.UPCEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the UPC product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>UPCEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @var \Nogrod\eBaySDK\MerchantData\UPCEnabledDefinitionType $uPCEnabled
     */
    private $uPCEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Parts Compatibility feature for motor vehicles. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CompatibleVehicleType</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CompatibleVehicleTypeDefinitionType $compatibleVehicleType
     */
    private $compatibleVehicleType = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces define a maximum limit for the number of fine-grained item compatibilities that can be applied to a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxGranularFitmentCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount
     */
    private $maxGranularFitmentCount = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup
     */
    private $paymentOptionsGroup = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of category groups in shipping business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup
     */
    private $shippingProfileCategoryGroup = null;

    /**
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of category groups in payment business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaymentProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup
     */
    private $paymentProfileCategoryGroup = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of category groups in return business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup
     */
    private $returnPolicyProfileCategoryGroup = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of the VIN (Vehicle Identification Number) field to identify a motor vehicle and create a listing is supported. VINs are supported on the US, Canada, Canada-French, and Australia sites. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VINSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\VINSupportedDefinitionType $vINSupported
     */
    private $vINSupported = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of the VRM (Vehicle Registration Mark) field to identify a motor vehicle and create a listing is supported. VRMs are only supported on the UK site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VRMSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\VRMSupportedDefinitionType $vRMSupported
     */
    private $vRMSupported = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support seller-provided titles in motor vehicle listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerProvidedTitleSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported
     */
    private $sellerProvidedTitleSupported = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support deposits for motor vehicle listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>DepositSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\DepositSupportedDefinitionType $depositSupported
     */
    private $depositSupported = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Global Shipping Program (GSP) as the method for shipping orders internationally. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>GlobalShippingEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\GlobalShippingEnabledDefinitionType $globalShippingEnabled
     */
    private $globalShippingEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Boat and Motorcycle Parts Compatibility feature. This field will be returned as long as <b>AdditionalCompatibilityEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports Boat or Motorcycle Parts Compatibility (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.AdditionalCompatibilityEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports Boat and Motorcycle Parts Compatibility, pass in a
     *  <b>CategoryID</b> value in the request, and then look for a
     *  <code>true</code>
     *  <br> value in the <b>AdditionalCompatibilityEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @var \Nogrod\eBaySDK\MerchantData\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled
     */
    private $additionalCompatibilityEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Click and Collect feature. This field will be returned as long as <b>PickupDropOffEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the Click and Collect feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.PickupDropOffEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the Click and Collect feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled
     */
    private $pickupDropOffEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support digital gift card listings. This field will be returned as long as <b>DigitalGoodDeliveryEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports digital gift card listings (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.DigitalGoodDeliveryEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports digital gift card listings, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following:
     *  <ul>
     *  <li>Each seller can only have one gift card listing at any given time </li>
     *  <li>The maximum dollar value of the gift card may not exceed 500.00</li>
     *  <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li>
     *  </ul>
     *  For more information on eBay's Gift Card policy, see the <a href="
     *  https://www.ebay.com/help/policies/prohibited-restricted-items/gift-cards-policy?id=4294" target="_blank">Gift cards policy</a> help page.
     *
     * @var \Nogrod\eBaySDK\MerchantData\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled
     */
    private $digitalGoodDeliveryEnabled = null;

    /**
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites. This field will be returned as long as <b>EpidSupported</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br/><br/>
     *  For more information on using an ePID to identify a compatible motorcycle or scooter through an Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EpidSupportedDefinitionType $epidSupported
     */
    private $epidSupported = null;

    /**
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are compatible with a motor vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site. This field will be returned as long as <b>KTypeSupported</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br/><br/>
     *  For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API call on the Germany site, see the documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *
     * @var \Nogrod\eBaySDK\MerchantData\KTypeSupportedDefinitionType $kTypeSupported
     */
    private $kTypeSupported = null;

    /**
     * This field is deprecated. No eBay categories require listings based on an eBay catalog product.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ProductRequiredEnabledDefinitionType $productRequiredEnabled
     */
    private $productRequiredEnabled = null;

    /**
     * If present, this flag indicates the seller can set how to handle domestic returns.
     *
     * @var \Nogrod\eBaySDK\MerchantData\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues
     */
    private $domesticReturnsAcceptedValues = null;

    /**
     * If present, this flag indicates the seller can set how to handle international returns.
     *
     * @var \Nogrod\eBaySDK\MerchantData\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues
     */
    private $internationalReturnsAcceptedValues = null;

    /**
     * If present, this flag indicates the seller can set the time duration for domestic returns.
     *
     * @var \Nogrod\eBaySDK\MerchantData\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues
     */
    private $domesticReturnsDurationValues = null;

    /**
     * If present, this flag indicates the seller can set the time duration for international returns.
     *
     * @var \Nogrod\eBaySDK\MerchantData\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues
     */
    private $internationalReturnsDurationValues = null;

    /**
     * If present, this flag indicates the seller can set who pays the shipping for domestic returns.
     *
     * @var \Nogrod\eBaySDK\MerchantData\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues
     */
    private $domesticReturnsShipmentPayeeValues = null;

    /**
     * If present, this flag indicates the seller can set who pays the shipping for international returns.
     *
     * @var \Nogrod\eBaySDK\MerchantData\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues
     */
    private $internationalReturnsShipmentPayeeValues = null;

    /**
     * If present, this flag indicates the seller can set the method they use to refund domestic returns.
     *
     * @var string[] $domesticRefundMethodValues
     */
    private $domesticRefundMethodValues = null;

    /**
     * If present, this flag indicates the seller can set the method they use to refund international returns.
     *
     * @var string[] $internationalRefundMethodValues
     */
    private $internationalRefundMethodValues = null;

    /**
     * If present, this flag indicates the seller can choose to describe the return policy they offer (providing return-policy details is required in some EU countries).
     *
     * @var \Nogrod\eBaySDK\MerchantData\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled
     */
    private $returnPolicyDescriptionEnabled = null;

    /**
     * Gets as listingDurations
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support multiple listing durations. Listing durations will vary based on the selling format (auction, fixed-price, or classified ad) and the eBay category. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ListingDurations</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ListingDurationDefinitionsType
     */
    public function getListingDurations()
    {
        return $this->listingDurations;
    }

    /**
     * Sets a new listingDurations
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support multiple listing durations. Listing durations will vary based on the selling format (auction, fixed-price, or classified ad) and the eBay category. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ListingDurations</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ListingDurationDefinitionsType $listingDurations
     * @return self
     */
    public function setListingDurations(\Nogrod\eBaySDK\MerchantData\ListingDurationDefinitionsType $listingDurations)
    {
        $this->listingDurations = $listingDurations;
        return $this;
    }

    /**
     * Gets as shippingTermsRequired
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces require shipping terms at listing time, which includes at least one domestic shipping service option and its associated costs. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingTermsRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ShippingTermRequiredDefinitionType
     */
    public function getShippingTermsRequired()
    {
        return $this->shippingTermsRequired;
    }

    /**
     * Sets a new shippingTermsRequired
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces require shipping terms at listing time, which includes at least one domestic shipping service option and its associated costs. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingTermsRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ShippingTermRequiredDefinitionType $shippingTermsRequired
     * @return self
     */
    public function setShippingTermsRequired(\Nogrod\eBaySDK\MerchantData\ShippingTermRequiredDefinitionType $shippingTermsRequired)
    {
        $this->shippingTermsRequired = $shippingTermsRequired;
        return $this;
    }

    /**
     * Gets as bestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer feature. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BestOfferEnabledDefinitionType
     */
    public function getBestOfferEnabled()
    {
        return $this->bestOfferEnabled;
    }

    /**
     * Sets a new bestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer feature. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BestOfferEnabledDefinitionType $bestOfferEnabled
     * @return self
     */
    public function setBestOfferEnabled(\Nogrod\eBaySDK\MerchantData\BestOfferEnabledDefinitionType $bestOfferEnabled)
    {
        $this->bestOfferEnabled = $bestOfferEnabled;
        return $this;
    }

    /**
     * Gets as dutchBINEnabled
     *
     * This field is no longer applicable as Dutch auctions are no longer supported on any eBay marketplace.
     *
     * @return \Nogrod\eBaySDK\MerchantData\DutchBINEnabledDefinitionType
     */
    public function getDutchBINEnabled()
    {
        return $this->dutchBINEnabled;
    }

    /**
     * Sets a new dutchBINEnabled
     *
     * This field is no longer applicable as Dutch auctions are no longer supported on any eBay marketplace.
     *
     * @param \Nogrod\eBaySDK\MerchantData\DutchBINEnabledDefinitionType $dutchBINEnabled
     * @return self
     */
    public function setDutchBINEnabled(\Nogrod\eBaySDK\MerchantData\DutchBINEnabledDefinitionType $dutchBINEnabled)
    {
        $this->dutchBINEnabled = $dutchBINEnabled;
        return $this;
    }

    /**
     * Gets as userConsentRequired
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\UserConsentRequiredDefinitionType
     */
    public function getUserConsentRequired()
    {
        return $this->userConsentRequired;
    }

    /**
     * Sets a new userConsentRequired
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\UserConsentRequiredDefinitionType $userConsentRequired
     * @return self
     */
    public function setUserConsentRequired(\Nogrod\eBaySDK\MerchantData\UserConsentRequiredDefinitionType $userConsentRequired)
    {
        $this->userConsentRequired = $userConsentRequired;
        return $this;
    }

    /**
     * Gets as homePageFeaturedEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the temporary display of a seller's listing on a section of the eBay Home Page. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HomePageFeaturedEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\HomePageFeaturedEnabledDefinitionType
     */
    public function getHomePageFeaturedEnabled()
    {
        return $this->homePageFeaturedEnabled;
    }

    /**
     * Sets a new homePageFeaturedEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the temporary display of a seller's listing on a section of the eBay Home Page. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HomePageFeaturedEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled
     * @return self
     */
    public function setHomePageFeaturedEnabled(\Nogrod\eBaySDK\MerchantData\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled)
    {
        $this->homePageFeaturedEnabled = $homePageFeaturedEnabled;
        return $this;
    }

    /**
     * Gets as proPackEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Pro Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProPackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ProPackEnabledDefinitionType
     */
    public function getProPackEnabled()
    {
        return $this->proPackEnabled;
    }

    /**
     * Sets a new proPackEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Pro Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProPackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ProPackEnabledDefinitionType $proPackEnabled
     * @return self
     */
    public function setProPackEnabled(\Nogrod\eBaySDK\MerchantData\ProPackEnabledDefinitionType $proPackEnabled)
    {
        $this->proPackEnabled = $proPackEnabled;
        return $this;
    }

    /**
     * Gets as basicUpgradePackEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BasicUpgradePackEnabledDefinitionType
     */
    public function getBasicUpgradePackEnabled()
    {
        return $this->basicUpgradePackEnabled;
    }

    /**
     * Sets a new basicUpgradePackEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled
     * @return self
     */
    public function setBasicUpgradePackEnabled(\Nogrod\eBaySDK\MerchantData\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled)
    {
        $this->basicUpgradePackEnabled = $basicUpgradePackEnabled;
        return $this;
    }

    /**
     * Gets as valuePackEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Value Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValuePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ValuePackEnabledDefinitionType
     */
    public function getValuePackEnabled()
    {
        return $this->valuePackEnabled;
    }

    /**
     * Sets a new valuePackEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Value Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValuePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ValuePackEnabledDefinitionType $valuePackEnabled
     * @return self
     */
    public function setValuePackEnabled(\Nogrod\eBaySDK\MerchantData\ValuePackEnabledDefinitionType $valuePackEnabled)
    {
        $this->valuePackEnabled = $valuePackEnabled;
        return $this;
    }

    /**
     * Gets as proPackPlusEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Pro Pack Plus listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProPackPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ProPackPlusEnabledDefinitionType
     */
    public function getProPackPlusEnabled()
    {
        return $this->proPackPlusEnabled;
    }

    /**
     * Sets a new proPackPlusEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Pro Pack Plus listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProPackPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ProPackPlusEnabledDefinitionType $proPackPlusEnabled
     * @return self
     */
    public function setProPackPlusEnabled(\Nogrod\eBaySDK\MerchantData\ProPackPlusEnabledDefinitionType $proPackPlusEnabled)
    {
        $this->proPackPlusEnabled = $proPackPlusEnabled;
        return $this;
    }

    /**
     * Gets as adFormatEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Classified Ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>AdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AdFormatEnabledDefinitionType
     */
    public function getAdFormatEnabled()
    {
        return $this->adFormatEnabled;
    }

    /**
     * Sets a new adFormatEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Classified Ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>AdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AdFormatEnabledDefinitionType $adFormatEnabled
     * @return self
     */
    public function setAdFormatEnabled(\Nogrod\eBaySDK\MerchantData\AdFormatEnabledDefinitionType $adFormatEnabled)
    {
        $this->adFormatEnabled = $adFormatEnabled;
        return $this;
    }

    /**
     * Gets as bestOfferCounterEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support counter offers to Best Offers. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferCounterEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BestOfferCounterEnabledDefinitionType
     */
    public function getBestOfferCounterEnabled()
    {
        return $this->bestOfferCounterEnabled;
    }

    /**
     * Sets a new bestOfferCounterEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support counter offers to Best Offers. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferCounterEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled
     * @return self
     */
    public function setBestOfferCounterEnabled(\Nogrod\eBaySDK\MerchantData\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled)
    {
        $this->bestOfferCounterEnabled = $bestOfferCounterEnabled;
        return $this;
    }

    /**
     * Gets as bestOfferAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Decline feature. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BestOfferAutoDeclineEnabledDefinitionType
     */
    public function getBestOfferAutoDeclineEnabled()
    {
        return $this->bestOfferAutoDeclineEnabled;
    }

    /**
     * Sets a new bestOfferAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Decline feature. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled
     * @return self
     */
    public function setBestOfferAutoDeclineEnabled(\Nogrod\eBaySDK\MerchantData\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled)
    {
        $this->bestOfferAutoDeclineEnabled = $bestOfferAutoDeclineEnabled;
        return $this;
    }

    /**
     * Gets as localMarketSpecialitySubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings for dealership subscribers with a specialty subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSpecialitySubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketSpecialitySubscriptionDefinitionType
     */
    public function getLocalMarketSpecialitySubscription()
    {
        return $this->localMarketSpecialitySubscription;
    }

    /**
     * Sets a new localMarketSpecialitySubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings for dealership subscribers with a specialty subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSpecialitySubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription
     * @return self
     */
    public function setLocalMarketSpecialitySubscription(\Nogrod\eBaySDK\MerchantData\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription)
    {
        $this->localMarketSpecialitySubscription = $localMarketSpecialitySubscription;
        return $this;
    }

    /**
     * Gets as localMarketRegularSubscription
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings for dealership subscribers with a regular subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketRegularSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketRegularSubscriptionDefinitionType
     */
    public function getLocalMarketRegularSubscription()
    {
        return $this->localMarketRegularSubscription;
    }

    /**
     * Sets a new localMarketRegularSubscription
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings for dealership subscribers with a regular subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketRegularSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription
     * @return self
     */
    public function setLocalMarketRegularSubscription(\Nogrod\eBaySDK\MerchantData\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription)
    {
        $this->localMarketRegularSubscription = $localMarketRegularSubscription;
        return $this;
    }

    /**
     * Gets as localMarketPremiumSubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings for dealership subscribers with a premium subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPremiumSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketPremiumSubscriptionDefinitionType
     */
    public function getLocalMarketPremiumSubscription()
    {
        return $this->localMarketPremiumSubscription;
    }

    /**
     * Sets a new localMarketPremiumSubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings for dealership subscribers with a premium subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPremiumSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription
     * @return self
     */
    public function setLocalMarketPremiumSubscription(\Nogrod\eBaySDK\MerchantData\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription)
    {
        $this->localMarketPremiumSubscription = $localMarketPremiumSubscription;
        return $this;
    }

    /**
     * Gets as localMarketNonSubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings for dealerships without a subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketNonSubscriptionDefinitionType
     */
    public function getLocalMarketNonSubscription()
    {
        return $this->localMarketNonSubscription;
    }

    /**
     * Sets a new localMarketNonSubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings for dealerships without a subscription. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription
     * @return self
     */
    public function setLocalMarketNonSubscription(\Nogrod\eBaySDK\MerchantData\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription)
    {
        $this->localMarketNonSubscription = $localMarketNonSubscription;
        return $this;
    }

    /**
     * Gets as expressEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ExpressEnabledDefinitionType
     */
    public function getExpressEnabled()
    {
        return $this->expressEnabled;
    }

    /**
     * Sets a new expressEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ExpressEnabledDefinitionType $expressEnabled
     * @return self
     */
    public function setExpressEnabled(\Nogrod\eBaySDK\MerchantData\ExpressEnabledDefinitionType $expressEnabled)
    {
        $this->expressEnabled = $expressEnabled;
        return $this;
    }

    /**
     * Gets as expressPicturesRequired
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ExpressPicturesRequiredDefinitionType
     */
    public function getExpressPicturesRequired()
    {
        return $this->expressPicturesRequired;
    }

    /**
     * Sets a new expressPicturesRequired
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ExpressPicturesRequiredDefinitionType $expressPicturesRequired
     * @return self
     */
    public function setExpressPicturesRequired(\Nogrod\eBaySDK\MerchantData\ExpressPicturesRequiredDefinitionType $expressPicturesRequired)
    {
        $this->expressPicturesRequired = $expressPicturesRequired;
        return $this;
    }

    /**
     * Gets as expressConditionRequired
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ExpressConditionRequiredDefinitionType
     */
    public function getExpressConditionRequired()
    {
        return $this->expressConditionRequired;
    }

    /**
     * Sets a new expressConditionRequired
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ExpressConditionRequiredDefinitionType $expressConditionRequired
     * @return self
     */
    public function setExpressConditionRequired(\Nogrod\eBaySDK\MerchantData\ExpressConditionRequiredDefinitionType $expressConditionRequired)
    {
        $this->expressConditionRequired = $expressConditionRequired;
        return $this;
    }

    /**
     * Gets as minimumReservePrice
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces require a minimum reserve price for an auction item. This feature is only applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinimumReservePrice</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MinimumReservePriceDefinitionType
     */
    public function getMinimumReservePrice()
    {
        return $this->minimumReservePrice;
    }

    /**
     * Sets a new minimumReservePrice
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces require a minimum reserve price for an auction item. This feature is only applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinimumReservePrice</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MinimumReservePriceDefinitionType $minimumReservePrice
     * @return self
     */
    public function setMinimumReservePrice(\Nogrod\eBaySDK\MerchantData\MinimumReservePriceDefinitionType $minimumReservePrice)
    {
        $this->minimumReservePrice = $minimumReservePrice;
        return $this;
    }

    /**
     * Gets as transactionConfirmationRequestEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\TCREnabledDefinitionType
     */
    public function getTransactionConfirmationRequestEnabled()
    {
        return $this->transactionConfirmationRequestEnabled;
    }

    /**
     * Sets a new transactionConfirmationRequestEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\TCREnabledDefinitionType $transactionConfirmationRequestEnabled
     * @return self
     */
    public function setTransactionConfirmationRequestEnabled(\Nogrod\eBaySDK\MerchantData\TCREnabledDefinitionType $transactionConfirmationRequestEnabled)
    {
        $this->transactionConfirmationRequestEnabled = $transactionConfirmationRequestEnabled;
        return $this;
    }

    /**
     * Gets as sellerContactDetailsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the seller to provide contact information at listing time for a classified ad listing. This feature is only applicable to classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellerContactDetailsEnabledDefinitionType
     */
    public function getSellerContactDetailsEnabled()
    {
        return $this->sellerContactDetailsEnabled;
    }

    /**
     * Sets a new sellerContactDetailsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the seller to provide contact information at listing time for a classified ad listing. This feature is only applicable to classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled
     * @return self
     */
    public function setSellerContactDetailsEnabled(\Nogrod\eBaySDK\MerchantData\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled)
    {
        $this->sellerContactDetailsEnabled = $sellerContactDetailsEnabled;
        return $this;
    }

    /**
     * Gets as storeInventoryEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\StoreInventoryEnabledDefinitionType
     */
    public function getStoreInventoryEnabled()
    {
        return $this->storeInventoryEnabled;
    }

    /**
     * Sets a new storeInventoryEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\StoreInventoryEnabledDefinitionType $storeInventoryEnabled
     * @return self
     */
    public function setStoreInventoryEnabled(\Nogrod\eBaySDK\MerchantData\StoreInventoryEnabledDefinitionType $storeInventoryEnabled)
    {
        $this->storeInventoryEnabled = $storeInventoryEnabled;
        return $this;
    }

    /**
     * Gets as skypeMeTransactionalEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SkypeMeTransactionalEnabledDefinitionType
     */
    public function getSkypeMeTransactionalEnabled()
    {
        return $this->skypeMeTransactionalEnabled;
    }

    /**
     * Sets a new skypeMeTransactionalEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled
     * @return self
     */
    public function setSkypeMeTransactionalEnabled(\Nogrod\eBaySDK\MerchantData\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled)
    {
        $this->skypeMeTransactionalEnabled = $skypeMeTransactionalEnabled;
        return $this;
    }

    /**
     * Gets as skypeMeNonTransactionalEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SkypeMeNonTransactionalEnabledDefinitionType
     */
    public function getSkypeMeNonTransactionalEnabled()
    {
        return $this->skypeMeNonTransactionalEnabled;
    }

    /**
     * Sets a new skypeMeNonTransactionalEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled
     * @return self
     */
    public function setSkypeMeNonTransactionalEnabled(\Nogrod\eBaySDK\MerchantData\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled)
    {
        $this->skypeMeNonTransactionalEnabled = $skypeMeNonTransactionalEnabled;
        return $this;
    }

    /**
     * Gets as localListingDistancesRegular
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support allow dealership subscribers with a regular subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesRegular</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalListingDistancesRegularDefinitionType
     */
    public function getLocalListingDistancesRegular()
    {
        return $this->localListingDistancesRegular;
    }

    /**
     * Sets a new localListingDistancesRegular
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support allow dealership subscribers with a regular subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesRegular</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular
     * @return self
     */
    public function setLocalListingDistancesRegular(\Nogrod\eBaySDK\MerchantData\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular)
    {
        $this->localListingDistancesRegular = $localListingDistancesRegular;
        return $this;
    }

    /**
     * Gets as localListingDistancesSpecialty
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow dealership subscribers with a specialty subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesSpecialty</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalListingDistancesSpecialtyDefinitionType
     */
    public function getLocalListingDistancesSpecialty()
    {
        return $this->localListingDistancesSpecialty;
    }

    /**
     * Sets a new localListingDistancesSpecialty
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow dealership subscribers with a specialty subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesSpecialty</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty
     * @return self
     */
    public function setLocalListingDistancesSpecialty(\Nogrod\eBaySDK\MerchantData\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty)
    {
        $this->localListingDistancesSpecialty = $localListingDistancesSpecialty;
        return $this;
    }

    /**
     * Gets as localListingDistancesNonSubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow dealership subscribers without a subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalListingDistancesNonSubscriptionDefinitionType
     */
    public function getLocalListingDistancesNonSubscription()
    {
        return $this->localListingDistancesNonSubscription;
    }

    /**
     * Sets a new localListingDistancesNonSubscription
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow dealership subscribers without a subscription to specify local market radius for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription
     * @return self
     */
    public function setLocalListingDistancesNonSubscription(\Nogrod\eBaySDK\MerchantData\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription)
    {
        $this->localListingDistancesNonSubscription = $localListingDistancesNonSubscription;
        return $this;
    }

    /**
     * Gets as classifiedAdPaymentMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of acceptable payment methods for classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPaymentMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ClassifiedAdPaymentMethodEnabledDefinitionType
     */
    public function getClassifiedAdPaymentMethodEnabled()
    {
        return $this->classifiedAdPaymentMethodEnabled;
    }

    /**
     * Sets a new classifiedAdPaymentMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of acceptable payment methods for classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPaymentMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled
     * @return self
     */
    public function setClassifiedAdPaymentMethodEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled)
    {
        $this->classifiedAdPaymentMethodEnabled = $classifiedAdPaymentMethodEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdShippingMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of shipping service options for classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ClassifiedAdShippingMethodEnabledDefinitionType
     */
    public function getClassifiedAdShippingMethodEnabled()
    {
        return $this->classifiedAdShippingMethodEnabled;
    }

    /**
     * Sets a new classifiedAdShippingMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of shipping service options for classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled
     * @return self
     */
    public function setClassifiedAdShippingMethodEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled)
    {
        $this->classifiedAdShippingMethodEnabled = $classifiedAdShippingMethodEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdBestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer feature for classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ClassifiedAdBestOfferEnabledDefinitionType
     */
    public function getClassifiedAdBestOfferEnabled()
    {
        return $this->classifiedAdBestOfferEnabled;
    }

    /**
     * Sets a new classifiedAdBestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer feature for classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled
     * @return self
     */
    public function setClassifiedAdBestOfferEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled)
    {
        $this->classifiedAdBestOfferEnabled = $classifiedAdBestOfferEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdCounterOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support counter offers to Best Offers for classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ClassifiedAdCounterOfferEnabledDefinitionType
     */
    public function getClassifiedAdCounterOfferEnabled()
    {
        return $this->classifiedAdCounterOfferEnabled;
    }

    /**
     * Sets a new classifiedAdCounterOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support counter offers to Best Offers for classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled
     * @return self
     */
    public function setClassifiedAdCounterOfferEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled)
    {
        $this->classifiedAdCounterOfferEnabled = $classifiedAdCounterOfferEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Decline feature for classified ad listings. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ClassifiedAdAutoDeclineEnabledDefinitionType
     */
    public function getClassifiedAdAutoDeclineEnabled()
    {
        return $this->classifiedAdAutoDeclineEnabled;
    }

    /**
     * Sets a new classifiedAdAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Decline feature for classified ad listings. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled
     * @return self
     */
    public function setClassifiedAdAutoDeclineEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled)
    {
        $this->classifiedAdAutoDeclineEnabled = $classifiedAdAutoDeclineEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdContactByPhoneEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a phone number when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByPhoneEnabledDefinitionType
     */
    public function getClassifiedAdContactByPhoneEnabled()
    {
        return $this->classifiedAdContactByPhoneEnabled;
    }

    /**
     * Sets a new classifiedAdContactByPhoneEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a phone number when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled
     * @return self
     */
    public function setClassifiedAdContactByPhoneEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled)
    {
        $this->classifiedAdContactByPhoneEnabled = $classifiedAdContactByPhoneEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdContactByEmailEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an email address when contacting the seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByEmailEnabledDefintionType
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
        return $this->classifiedAdContactByEmailEnabled;
    }

    /**
     * Sets a new classifiedAdContactByEmailEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an email address when contacting the seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled
     * @return self
     */
    public function setClassifiedAdContactByEmailEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled)
    {
        $this->classifiedAdContactByEmailEnabled = $classifiedAdContactByEmailEnabled;
        return $this;
    }

    /**
     * Gets as safePaymentRequired
     *
     * eBay controls all forms of electronic payment methods that are avaialable to buyers, so this field is no longer applicable.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SafePaymentRequiredDefinitionType
     */
    public function getSafePaymentRequired()
    {
        return $this->safePaymentRequired;
    }

    /**
     * Sets a new safePaymentRequired
     *
     * eBay controls all forms of electronic payment methods that are avaialable to buyers, so this field is no longer applicable.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SafePaymentRequiredDefinitionType $safePaymentRequired
     * @return self
     */
    public function setSafePaymentRequired(\Nogrod\eBaySDK\MerchantData\SafePaymentRequiredDefinitionType $safePaymentRequired)
    {
        $this->safePaymentRequired = $safePaymentRequired;
        return $this;
    }

    /**
     * Gets as classifiedAdPayPerLeadEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ClassifiedAdPayPerLeadEnabledDefinitionType
     */
    public function getClassifiedAdPayPerLeadEnabled()
    {
        return $this->classifiedAdPayPerLeadEnabled;
    }

    /**
     * Sets a new classifiedAdPayPerLeadEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled
     * @return self
     */
    public function setClassifiedAdPayPerLeadEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled)
    {
        $this->classifiedAdPayPerLeadEnabled = $classifiedAdPayPerLeadEnabled;
        return $this;
    }

    /**
     * Gets as itemSpecificsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of Item Specifics in listings. Item Specifics are typical aspects that items in a specific category tend to have, and they allow sellers to provide descriptive details of an item in a structured manner. For example, in a jewelry category, sellers might describe lockets with Item Specifics name-value pairs like "Chain Length=18 in." and "Main Shape=Heart", or in a Washers & Dryers category, sellers might include "Type=Top-Loading". This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemSpecificsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ItemSpecificsEnabledDefinitionType
     */
    public function getItemSpecificsEnabled()
    {
        return $this->itemSpecificsEnabled;
    }

    /**
     * Sets a new itemSpecificsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of Item Specifics in listings. Item Specifics are typical aspects that items in a specific category tend to have, and they allow sellers to provide descriptive details of an item in a structured manner. For example, in a jewelry category, sellers might describe lockets with Item Specifics name-value pairs like "Chain Length=18 in." and "Main Shape=Heart", or in a Washers & Dryers category, sellers might include "Type=Top-Loading". This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemSpecificsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled
     * @return self
     */
    public function setItemSpecificsEnabled(\Nogrod\eBaySDK\MerchantData\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled)
    {
        $this->itemSpecificsEnabled = $itemSpecificsEnabled;
        return $this;
    }

    /**
     * Gets as paisaPayFullEscrowEnabled
     *
     * PaisaPay is a deprecated payment method, so this field is no longer applicable.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PaisaPayFullEscrowEnabledDefinitionType
     */
    public function getPaisaPayFullEscrowEnabled()
    {
        return $this->paisaPayFullEscrowEnabled;
    }

    /**
     * Sets a new paisaPayFullEscrowEnabled
     *
     * PaisaPay is a deprecated payment method, so this field is no longer applicable.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled
     * @return self
     */
    public function setPaisaPayFullEscrowEnabled(\Nogrod\eBaySDK\MerchantData\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled)
    {
        $this->paisaPayFullEscrowEnabled = $paisaPayFullEscrowEnabled;
        return $this;
    }

    /**
     * Gets as iSBNIdentifierEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ISBNIdentifierEnabledDefinitionType
     */
    public function getISBNIdentifierEnabled()
    {
        return $this->iSBNIdentifierEnabled;
    }

    /**
     * Sets a new iSBNIdentifierEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled
     * @return self
     */
    public function setISBNIdentifierEnabled(\Nogrod\eBaySDK\MerchantData\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled)
    {
        $this->iSBNIdentifierEnabled = $iSBNIdentifierEnabled;
        return $this;
    }

    /**
     * Gets as uPCIdentifierEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\UPCIdentifierEnabledDefinitionType
     */
    public function getUPCIdentifierEnabled()
    {
        return $this->uPCIdentifierEnabled;
    }

    /**
     * Sets a new uPCIdentifierEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled
     * @return self
     */
    public function setUPCIdentifierEnabled(\Nogrod\eBaySDK\MerchantData\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled)
    {
        $this->uPCIdentifierEnabled = $uPCIdentifierEnabled;
        return $this;
    }

    /**
     * Gets as eANIdentifierEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EANIdentifierEnabledDefinitionType
     */
    public function getEANIdentifierEnabled()
    {
        return $this->eANIdentifierEnabled;
    }

    /**
     * Sets a new eANIdentifierEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled
     * @return self
     */
    public function setEANIdentifierEnabled(\Nogrod\eBaySDK\MerchantData\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled)
    {
        $this->eANIdentifierEnabled = $eANIdentifierEnabled;
        return $this;
    }

    /**
     * Gets as brandMPNIdentifierEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of Brand and MPN (Manufacturer Part Number) to identify a product. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BrandMPNIdentifierEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BrandMPNIdentifierEnabledDefinitionType
     */
    public function getBrandMPNIdentifierEnabled()
    {
        return $this->brandMPNIdentifierEnabled;
    }

    /**
     * Sets a new brandMPNIdentifierEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of Brand and MPN (Manufacturer Part Number) to identify a product. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BrandMPNIdentifierEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled
     * @return self
     */
    public function setBrandMPNIdentifierEnabled(\Nogrod\eBaySDK\MerchantData\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled)
    {
        $this->brandMPNIdentifierEnabled = $brandMPNIdentifierEnabled;
        return $this;
    }

    /**
     * Gets as bestOfferAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Accept feature. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BestOfferAutoAcceptEnabledDefinitionType
     */
    public function getBestOfferAutoAcceptEnabled()
    {
        return $this->bestOfferAutoAcceptEnabled;
    }

    /**
     * Sets a new bestOfferAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Accept feature. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled
     * @return self
     */
    public function setBestOfferAutoAcceptEnabled(\Nogrod\eBaySDK\MerchantData\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled)
    {
        $this->bestOfferAutoAcceptEnabled = $bestOfferAutoAcceptEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Accept feature for classified ad listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ClassifiedAdAutoAcceptEnabledDefinitionType
     */
    public function getClassifiedAdAutoAcceptEnabled()
    {
        return $this->classifiedAdAutoAcceptEnabled;
    }

    /**
     * Sets a new classifiedAdAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Accept feature for classified ad listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled
     * @return self
     */
    public function setClassifiedAdAutoAcceptEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled)
    {
        $this->classifiedAdAutoAcceptEnabled = $classifiedAdAutoAcceptEnabled;
        return $this;
    }

    /**
     * Gets as crossBorderTradeNorthAmericaEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support cross-border trading on the US and CA (English) sites. In cross-border trading, also referred to as International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CrossBorderTradeNorthAmericaEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CrossBorderTradeNorthAmericaEnabledDefinitionType
     */
    public function getCrossBorderTradeNorthAmericaEnabled()
    {
        return $this->crossBorderTradeNorthAmericaEnabled;
    }

    /**
     * Sets a new crossBorderTradeNorthAmericaEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support cross-border trading on the US and CA (English) sites. In cross-border trading, also referred to as International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CrossBorderTradeNorthAmericaEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled
     * @return self
     */
    public function setCrossBorderTradeNorthAmericaEnabled(\Nogrod\eBaySDK\MerchantData\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled)
    {
        $this->crossBorderTradeNorthAmericaEnabled = $crossBorderTradeNorthAmericaEnabled;
        return $this;
    }

    /**
     * Gets as crossBorderTradeGBEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support cross-border trading on the UK and Ireland sites. In cross-border trading, also referred to as International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CrossBorderTradeGBEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CrossBorderTradeGBEnabledDefinitionType
     */
    public function getCrossBorderTradeGBEnabled()
    {
        return $this->crossBorderTradeGBEnabled;
    }

    /**
     * Sets a new crossBorderTradeGBEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support cross-border trading on the UK and Ireland sites. In cross-border trading, also referred to as International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CrossBorderTradeGBEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled
     * @return self
     */
    public function setCrossBorderTradeGBEnabled(\Nogrod\eBaySDK\MerchantData\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled)
    {
        $this->crossBorderTradeGBEnabled = $crossBorderTradeGBEnabled;
        return $this;
    }

    /**
     * Gets as crossBorderTradeAustraliaEnabled
     *
     * This field is for future use, as cross-border trading (aka International site visibility) is not currently supported for Australia.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CrossBorderTradeAustraliaEnabledDefinitionType
     */
    public function getCrossBorderTradeAustraliaEnabled()
    {
        return $this->crossBorderTradeAustraliaEnabled;
    }

    /**
     * Sets a new crossBorderTradeAustraliaEnabled
     *
     * This field is for future use, as cross-border trading (aka International site visibility) is not currently supported for Australia.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled
     * @return self
     */
    public function setCrossBorderTradeAustraliaEnabled(\Nogrod\eBaySDK\MerchantData\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled)
    {
        $this->crossBorderTradeAustraliaEnabled = $crossBorderTradeAustraliaEnabled;
        return $this;
    }

    /**
     * Gets as payPalBuyerProtectionEnabled
     *
     * This field is deprecated..
     *
     * @return \Nogrod\eBaySDK\MerchantData\PayPalBuyerProtectionEnabledDefinitionType
     */
    public function getPayPalBuyerProtectionEnabled()
    {
        return $this->payPalBuyerProtectionEnabled;
    }

    /**
     * Sets a new payPalBuyerProtectionEnabled
     *
     * This field is deprecated..
     *
     * @param \Nogrod\eBaySDK\MerchantData\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled
     * @return self
     */
    public function setPayPalBuyerProtectionEnabled(\Nogrod\eBaySDK\MerchantData\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled)
    {
        $this->payPalBuyerProtectionEnabled = $payPalBuyerProtectionEnabled;
        return $this;
    }

    /**
     * Gets as buyerGuaranteeEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BuyerGuaranteeEnabledDefinitionType
     */
    public function getBuyerGuaranteeEnabled()
    {
        return $this->buyerGuaranteeEnabled;
    }

    /**
     * Sets a new buyerGuaranteeEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled
     * @return self
     */
    public function setBuyerGuaranteeEnabled(\Nogrod\eBaySDK\MerchantData\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled)
    {
        $this->buyerGuaranteeEnabled = $buyerGuaranteeEnabled;
        return $this;
    }

    /**
     * Gets as combinedFixedPriceTreatmentEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CombinedFixedPriceTreatmentEnabledDefinitionType
     */
    public function getCombinedFixedPriceTreatmentEnabled()
    {
        return $this->combinedFixedPriceTreatmentEnabled;
    }

    /**
     * Sets a new combinedFixedPriceTreatmentEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled
     * @return self
     */
    public function setCombinedFixedPriceTreatmentEnabled(\Nogrod\eBaySDK\MerchantData\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled)
    {
        $this->combinedFixedPriceTreatmentEnabled = $combinedFixedPriceTreatmentEnabled;
        return $this;
    }

    /**
     * Gets as galleryFeaturedDurations
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ListingEnhancementDurationDefinitionType
     */
    public function getGalleryFeaturedDurations()
    {
        return $this->galleryFeaturedDurations;
    }

    /**
     * Sets a new galleryFeaturedDurations
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations
     * @return self
     */
    public function setGalleryFeaturedDurations(\Nogrod\eBaySDK\MerchantData\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations)
    {
        $this->galleryFeaturedDurations = $galleryFeaturedDurations;
        return $this;
    }

    /**
     * Gets as iNEscrowWorkflowTimeline
     *
     * PaisaPay is a deprecated payment method, so this field is no longer applicable.
     *
     * @return \Nogrod\eBaySDK\MerchantData\INEscrowWorkflowTimelineDefinitionType
     */
    public function getINEscrowWorkflowTimeline()
    {
        return $this->iNEscrowWorkflowTimeline;
    }

    /**
     * Sets a new iNEscrowWorkflowTimeline
     *
     * PaisaPay is a deprecated payment method, so this field is no longer applicable.
     *
     * @param \Nogrod\eBaySDK\MerchantData\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline
     * @return self
     */
    public function setINEscrowWorkflowTimeline(\Nogrod\eBaySDK\MerchantData\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline)
    {
        $this->iNEscrowWorkflowTimeline = $iNEscrowWorkflowTimeline;
        return $this;
    }

    /**
     * Gets as payPalRequired
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PayPalRequiredDefinitionType
     */
    public function getPayPalRequired()
    {
        return $this->payPalRequired;
    }

    /**
     * Sets a new payPalRequired
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PayPalRequiredDefinitionType $payPalRequired
     * @return self
     */
    public function setPayPalRequired(\Nogrod\eBaySDK\MerchantData\PayPalRequiredDefinitionType $payPalRequired)
    {
        $this->payPalRequired = $payPalRequired;
        return $this;
    }

    /**
     * Gets as eBayMotorsProAdFormatEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProAdFormatEnabledDefinitionType
     */
    public function getEBayMotorsProAdFormatEnabled()
    {
        return $this->eBayMotorsProAdFormatEnabled;
    }

    /**
     * Sets a new eBayMotorsProAdFormatEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
     * @return self
     */
    public function setEBayMotorsProAdFormatEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled)
    {
        $this->eBayMotorsProAdFormatEnabled = $eBayMotorsProAdFormatEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProContactByPhoneEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a phone number when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByPhoneEnabledDefinitionType
     */
    public function getEBayMotorsProContactByPhoneEnabled()
    {
        return $this->eBayMotorsProContactByPhoneEnabled;
    }

    /**
     * Sets a new eBayMotorsProContactByPhoneEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a phone number when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
     * @return self
     */
    public function setEBayMotorsProContactByPhoneEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled)
    {
        $this->eBayMotorsProContactByPhoneEnabled = $eBayMotorsProContactByPhoneEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProPhoneCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of multiple phone numbers for the seller for a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProPhoneCountDefinitionType
     */
    public function getEBayMotorsProPhoneCount()
    {
        return $this->eBayMotorsProPhoneCount;
    }

    /**
     * Sets a new eBayMotorsProPhoneCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of multiple phone numbers for the seller for a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
     * @return self
     */
    public function setEBayMotorsProPhoneCount(\Nogrod\eBaySDK\MerchantData\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount)
    {
        $this->eBayMotorsProPhoneCount = $eBayMotorsProPhoneCount;
        return $this;
    }

    /**
     * Gets as eBayMotorsProContactByAddressEnabled
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an address when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByAddressEnabledDefinitionType
     */
    public function getEBayMotorsProContactByAddressEnabled()
    {
        return $this->eBayMotorsProContactByAddressEnabled;
    }

    /**
     * Sets a new eBayMotorsProContactByAddressEnabled
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an address when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
     * @return self
     */
    public function setEBayMotorsProContactByAddressEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled)
    {
        $this->eBayMotorsProContactByAddressEnabled = $eBayMotorsProContactByAddressEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProStreetCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of multiple street address for the seller for a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProStreetCountDefinitionType
     */
    public function getEBayMotorsProStreetCount()
    {
        return $this->eBayMotorsProStreetCount;
    }

    /**
     * Sets a new eBayMotorsProStreetCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of multiple street address for the seller for a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
     * @return self
     */
    public function setEBayMotorsProStreetCount(\Nogrod\eBaySDK\MerchantData\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount)
    {
        $this->eBayMotorsProStreetCount = $eBayMotorsProStreetCount;
        return $this;
    }

    /**
     * Gets as eBayMotorsProCompanyNameEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a company name when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProCompanyNameEnabledDefinitionType
     */
    public function getEBayMotorsProCompanyNameEnabled()
    {
        return $this->eBayMotorsProCompanyNameEnabled;
    }

    /**
     * Sets a new eBayMotorsProCompanyNameEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a company name when contacting the
     *  seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
     * @return self
     */
    public function setEBayMotorsProCompanyNameEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled)
    {
        $this->eBayMotorsProCompanyNameEnabled = $eBayMotorsProCompanyNameEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProContactByEmailEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an email address when contacting the seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByEmailEnabledDefinitionType
     */
    public function getEBayMotorsProContactByEmailEnabled()
    {
        return $this->eBayMotorsProContactByEmailEnabled;
    }

    /**
     * Sets a new eBayMotorsProContactByEmailEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an email address when contacting the seller about a motor vehicle classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
     * @return self
     */
    public function setEBayMotorsProContactByEmailEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled)
    {
        $this->eBayMotorsProContactByEmailEnabled = $eBayMotorsProContactByEmailEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProBestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer feature is for motor vehicle classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProBestOfferEnabledDefinitionType
     */
    public function getEBayMotorsProBestOfferEnabled()
    {
        return $this->eBayMotorsProBestOfferEnabled;
    }

    /**
     * Sets a new eBayMotorsProBestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer feature is for motor vehicle classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
     * @return self
     */
    public function setEBayMotorsProBestOfferEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled)
    {
        $this->eBayMotorsProBestOfferEnabled = $eBayMotorsProBestOfferEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Accept feature for motor vehicle classified ad listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProAutoAcceptEnabledDefinitionType
     */
    public function getEBayMotorsProAutoAcceptEnabled()
    {
        return $this->eBayMotorsProAutoAcceptEnabled;
    }

    /**
     * Sets a new eBayMotorsProAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Accept feature for motor vehicle classified ad listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
     * @return self
     */
    public function setEBayMotorsProAutoAcceptEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled)
    {
        $this->eBayMotorsProAutoAcceptEnabled = $eBayMotorsProAutoAcceptEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Decline feature for motor vehicle classified ad listings. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProAutoDeclineEnabledDefinitionType
     */
    public function getEBayMotorsProAutoDeclineEnabled()
    {
        return $this->eBayMotorsProAutoDeclineEnabled;
    }

    /**
     * Sets a new eBayMotorsProAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Decline feature for motor vehicle classified ad listings. The Best Offer Auto-Decline feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
     * @return self
     */
    public function setEBayMotorsProAutoDeclineEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled)
    {
        $this->eBayMotorsProAutoDeclineEnabled = $eBayMotorsProAutoDeclineEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProPaymentMethodCheckOutEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of acceptable payment methods for motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType
     */
    public function getEBayMotorsProPaymentMethodCheckOutEnabled()
    {
        return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
    }

    /**
     * Sets a new eBayMotorsProPaymentMethodCheckOutEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of acceptable payment methods for motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
     * @return self
     */
    public function setEBayMotorsProPaymentMethodCheckOutEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled)
    {
        $this->eBayMotorsProPaymentMethodCheckOutEnabled = $eBayMotorsProPaymentMethodCheckOutEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProShippingMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of shipping service options for motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProShippingMethodEnabledDefinitionType
     */
    public function getEBayMotorsProShippingMethodEnabled()
    {
        return $this->eBayMotorsProShippingMethodEnabled;
    }

    /**
     * Sets a new eBayMotorsProShippingMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of shipping service options for motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
     * @return self
     */
    public function setEBayMotorsProShippingMethodEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled)
    {
        $this->eBayMotorsProShippingMethodEnabled = $eBayMotorsProShippingMethodEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProCounterOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support counter offers to Best Offers for motor vehicle classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProCounterOfferEnabledDefinitionType
     */
    public function getEBayMotorsProCounterOfferEnabled()
    {
        return $this->eBayMotorsProCounterOfferEnabled;
    }

    /**
     * Sets a new eBayMotorsProCounterOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support counter offers to Best Offers for motor vehicle classified ad listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
     * @return self
     */
    public function setEBayMotorsProCounterOfferEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled)
    {
        $this->eBayMotorsProCounterOfferEnabled = $eBayMotorsProCounterOfferEnabled;
        return $this;
    }

    /**
     * Gets as eBayMotorsProSellerContactDetailsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the seller to provide contact information at listing time for a motor vehicle classified ad listing. This feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProSellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayMotorsProSellerContactDetailsEnabledDefinitionType
     */
    public function getEBayMotorsProSellerContactDetailsEnabled()
    {
        return $this->eBayMotorsProSellerContactDetailsEnabled;
    }

    /**
     * Sets a new eBayMotorsProSellerContactDetailsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the seller to provide contact information at listing time for a motor vehicle classified ad listing. This feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProSellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
     * @return self
     */
    public function setEBayMotorsProSellerContactDetailsEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled)
    {
        $this->eBayMotorsProSellerContactDetailsEnabled = $eBayMotorsProSellerContactDetailsEnabled;
        return $this;
    }

    /**
     * Gets as localMarketAdFormatEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketAdFormatEnabledDefinitionType
     */
    public function getLocalMarketAdFormatEnabled()
    {
        return $this->localMarketAdFormatEnabled;
    }

    /**
     * Sets a new localMarketAdFormatEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled
     * @return self
     */
    public function setLocalMarketAdFormatEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled)
    {
        $this->localMarketAdFormatEnabled = $localMarketAdFormatEnabled;
        return $this;
    }

    /**
     * Gets as localMarketContactByPhoneEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the use of a phone number when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketContactByPhoneEnabledDefinitionType
     */
    public function getLocalMarketContactByPhoneEnabled()
    {
        return $this->localMarketContactByPhoneEnabled;
    }

    /**
     * Sets a new localMarketContactByPhoneEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the use of a phone number when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled
     * @return self
     */
    public function setLocalMarketContactByPhoneEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled)
    {
        $this->localMarketContactByPhoneEnabled = $localMarketContactByPhoneEnabled;
        return $this;
    }

    /**
     * Gets as localMarketPhoneCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the use of multiple phone numbers for the seller for a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketPhoneCountDefinitionType
     */
    public function getLocalMarketPhoneCount()
    {
        return $this->localMarketPhoneCount;
    }

    /**
     * Sets a new localMarketPhoneCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the use of multiple phone numbers for the seller for a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount
     * @return self
     */
    public function setLocalMarketPhoneCount(\Nogrod\eBaySDK\MerchantData\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount)
    {
        $this->localMarketPhoneCount = $localMarketPhoneCount;
        return $this;
    }

    /**
     * Gets as localMarketContactByAddressEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the use of an address when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketContactByAddressEnabledDefinitionType
     */
    public function getLocalMarketContactByAddressEnabled()
    {
        return $this->localMarketContactByAddressEnabled;
    }

    /**
     * Sets a new localMarketContactByAddressEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the use of an address when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled
     * @return self
     */
    public function setLocalMarketContactByAddressEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled)
    {
        $this->localMarketContactByAddressEnabled = $localMarketContactByAddressEnabled;
        return $this;
    }

    /**
     * Gets as localMarketStreetCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the use of multiple street address for the seller for a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketStreetCountDefinitionType
     */
    public function getLocalMarketStreetCount()
    {
        return $this->localMarketStreetCount;
    }

    /**
     * Sets a new localMarketStreetCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the use of multiple street address for the seller for a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketStreetCountDefinitionType $localMarketStreetCount
     * @return self
     */
    public function setLocalMarketStreetCount(\Nogrod\eBaySDK\MerchantData\LocalMarketStreetCountDefinitionType $localMarketStreetCount)
    {
        $this->localMarketStreetCount = $localMarketStreetCount;
        return $this;
    }

    /**
     * Gets as localMarketCompanyNameEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a company name when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketCompanyNameEnabledDefinitionType
     */
    public function getLocalMarketCompanyNameEnabled()
    {
        return $this->localMarketCompanyNameEnabled;
    }

    /**
     * Sets a new localMarketCompanyNameEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a company name when contacting the
     *  seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled
     * @return self
     */
    public function setLocalMarketCompanyNameEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled)
    {
        $this->localMarketCompanyNameEnabled = $localMarketCompanyNameEnabled;
        return $this;
    }

    /**
     * Gets as localMarketContactByEmailEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an email address when contacting the seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketContactByEmailEnabledDefinitionType
     */
    public function getLocalMarketContactByEmailEnabled()
    {
        return $this->localMarketContactByEmailEnabled;
    }

    /**
     * Sets a new localMarketContactByEmailEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an email address when contacting the seller about a Motors Local Market listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled
     * @return self
     */
    public function setLocalMarketContactByEmailEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled)
    {
        $this->localMarketContactByEmailEnabled = $localMarketContactByEmailEnabled;
        return $this;
    }

    /**
     * Gets as localMarketBestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer feature is for Motors Local Market listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketBestOfferEnabledDefinitionType
     */
    public function getLocalMarketBestOfferEnabled()
    {
        return $this->localMarketBestOfferEnabled;
    }

    /**
     * Sets a new localMarketBestOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer feature is for Motors Local Market listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketBestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled
     * @return self
     */
    public function setLocalMarketBestOfferEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled)
    {
        $this->localMarketBestOfferEnabled = $localMarketBestOfferEnabled;
        return $this;
    }

    /**
     * Gets as localMarketAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Accept feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketAutoAcceptEnabledDefinitionType
     */
    public function getLocalMarketAutoAcceptEnabled()
    {
        return $this->localMarketAutoAcceptEnabled;
    }

    /**
     * Sets a new localMarketAutoAcceptEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Accept feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled
     * @return self
     */
    public function setLocalMarketAutoAcceptEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled)
    {
        $this->localMarketAutoAcceptEnabled = $localMarketAutoAcceptEnabled;
        return $this;
    }

    /**
     * Gets as localMarketAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Decline feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketAutoDeclineEnabledDefinitionType
     */
    public function getLocalMarketAutoDeclineEnabled()
    {
        return $this->localMarketAutoDeclineEnabled;
    }

    /**
     * Sets a new localMarketAutoDeclineEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Best Offer Auto-Decline feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled
     * @return self
     */
    public function setLocalMarketAutoDeclineEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled)
    {
        $this->localMarketAutoDeclineEnabled = $localMarketAutoDeclineEnabled;
        return $this;
    }

    /**
     * Gets as localMarketPaymentMethodCheckOutEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of acceptable payment methods for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketPaymentMethodCheckOutEnabledDefinitionType
     */
    public function getLocalMarketPaymentMethodCheckOutEnabled()
    {
        return $this->localMarketPaymentMethodCheckOutEnabled;
    }

    /**
     * Sets a new localMarketPaymentMethodCheckOutEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of acceptable payment methods for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled
     * @return self
     */
    public function setLocalMarketPaymentMethodCheckOutEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled)
    {
        $this->localMarketPaymentMethodCheckOutEnabled = $localMarketPaymentMethodCheckOutEnabled;
        return $this;
    }

    /**
     * Gets as localMarketShippingMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of shipping service options for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketShippingMethodEnabledDefinitionType
     */
    public function getLocalMarketShippingMethodEnabled()
    {
        return $this->localMarketShippingMethodEnabled;
    }

    /**
     * Sets a new localMarketShippingMethodEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of shipping service options for Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled
     * @return self
     */
    public function setLocalMarketShippingMethodEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled)
    {
        $this->localMarketShippingMethodEnabled = $localMarketShippingMethodEnabled;
        return $this;
    }

    /**
     * Gets as localMarketCounterOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support counter offers to Best Offers for Motors Local Market listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketCounterOfferEnabledDefinitionType
     */
    public function getLocalMarketCounterOfferEnabled()
    {
        return $this->localMarketCounterOfferEnabled;
    }

    /**
     * Sets a new localMarketCounterOfferEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support counter offers to Best Offers for Motors Local Market listings. The Best Offer feature allows buyers and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled
     * @return self
     */
    public function setLocalMarketCounterOfferEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled)
    {
        $this->localMarketCounterOfferEnabled = $localMarketCounterOfferEnabled;
        return $this;
    }

    /**
     * Gets as localMarketSellerContactDetailsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the seller to provide contact information at listing time for Motors Local Market listings. This feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LocalMarketSellerContactDetailsEnabledDefinitionType
     */
    public function getLocalMarketSellerContactDetailsEnabled()
    {
        return $this->localMarketSellerContactDetailsEnabled;
    }

    /**
     * Sets a new localMarketSellerContactDetailsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the seller to provide contact information at listing time for Motors Local Market listings. This feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSellerContactDetailsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled
     * @return self
     */
    public function setLocalMarketSellerContactDetailsEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled)
    {
        $this->localMarketSellerContactDetailsEnabled = $localMarketSellerContactDetailsEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdPhoneCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of multiple phone numbers for the seller for a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ClassifiedAdPhoneCountDefinitionType
     */
    public function getClassifiedAdPhoneCount()
    {
        return $this->classifiedAdPhoneCount;
    }

    /**
     * Sets a new classifiedAdPhoneCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of multiple phone numbers for the seller for a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount
     * @return self
     */
    public function setClassifiedAdPhoneCount(\Nogrod\eBaySDK\MerchantData\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount)
    {
        $this->classifiedAdPhoneCount = $classifiedAdPhoneCount;
        return $this;
    }

    /**
     * Gets as classifiedAdContactByAddressEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an address when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     *
     * @return \Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByAddressEnabledDefinitionType
     */
    public function getClassifiedAdContactByAddressEnabled()
    {
        return $this->classifiedAdContactByAddressEnabled;
    }

    /**
     * Sets a new classifiedAdContactByAddressEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an address when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     *
     * @param \Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled
     * @return self
     */
    public function setClassifiedAdContactByAddressEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled)
    {
        $this->classifiedAdContactByAddressEnabled = $classifiedAdContactByAddressEnabled;
        return $this;
    }

    /**
     * Gets as classifiedAdStreetCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of multiple street addresses for the seller for a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ClassifiedAdStreetCountDefinitionType
     */
    public function getClassifiedAdStreetCount()
    {
        return $this->classifiedAdStreetCount;
    }

    /**
     * Sets a new classifiedAdStreetCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of multiple street addresses for the seller for a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount
     * @return self
     */
    public function setClassifiedAdStreetCount(\Nogrod\eBaySDK\MerchantData\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount)
    {
        $this->classifiedAdStreetCount = $classifiedAdStreetCount;
        return $this;
    }

    /**
     * Gets as classifiedAdCompanyNameEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a company name when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ClassifiedAdCompanyNameEnabledDefinitionType
     */
    public function getClassifiedAdCompanyNameEnabled()
    {
        return $this->classifiedAdCompanyNameEnabled;
    }

    /**
     * Sets a new classifiedAdCompanyNameEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a company name when contacting the
     *  seller about a classified ad listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled
     * @return self
     */
    public function setClassifiedAdCompanyNameEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled)
    {
        $this->classifiedAdCompanyNameEnabled = $classifiedAdCompanyNameEnabled;
        return $this;
    }

    /**
     * Gets as specialitySubscription
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SpecialitySubscriptionDefinitionType
     */
    public function getSpecialitySubscription()
    {
        return $this->specialitySubscription;
    }

    /**
     * Sets a new specialitySubscription
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SpecialitySubscriptionDefinitionType $specialitySubscription
     * @return self
     */
    public function setSpecialitySubscription(\Nogrod\eBaySDK\MerchantData\SpecialitySubscriptionDefinitionType $specialitySubscription)
    {
        $this->specialitySubscription = $specialitySubscription;
        return $this;
    }

    /**
     * Gets as regularSubscription
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\RegularSubscriptionDefinitionType
     */
    public function getRegularSubscription()
    {
        return $this->regularSubscription;
    }

    /**
     * Sets a new regularSubscription
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\RegularSubscriptionDefinitionType $regularSubscription
     * @return self
     */
    public function setRegularSubscription(\Nogrod\eBaySDK\MerchantData\RegularSubscriptionDefinitionType $regularSubscription)
    {
        $this->regularSubscription = $regularSubscription;
        return $this;
    }

    /**
     * Gets as premiumSubscription
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PremiumSubscriptionDefinitionType
     */
    public function getPremiumSubscription()
    {
        return $this->premiumSubscription;
    }

    /**
     * Sets a new premiumSubscription
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PremiumSubscriptionDefinitionType $premiumSubscription
     * @return self
     */
    public function setPremiumSubscription(\Nogrod\eBaySDK\MerchantData\PremiumSubscriptionDefinitionType $premiumSubscription)
    {
        $this->premiumSubscription = $premiumSubscription;
        return $this;
    }

    /**
     * Gets as nonSubscription
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\NonSubscriptionDefinitionType
     */
    public function getNonSubscription()
    {
        return $this->nonSubscription;
    }

    /**
     * Sets a new nonSubscription
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\NonSubscriptionDefinitionType $nonSubscription
     * @return self
     */
    public function setNonSubscription(\Nogrod\eBaySDK\MerchantData\NonSubscriptionDefinitionType $nonSubscription)
    {
        $this->nonSubscription = $nonSubscription;
        return $this;
    }

    /**
     * Gets as returnPolicyEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of return policies in listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ReturnPolicyEnabledDefinitionType
     */
    public function getReturnPolicyEnabled()
    {
        return $this->returnPolicyEnabled;
    }

    /**
     * Sets a new returnPolicyEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of return policies in listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled
     * @return self
     */
    public function setReturnPolicyEnabled(\Nogrod\eBaySDK\MerchantData\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled)
    {
        $this->returnPolicyEnabled = $returnPolicyEnabled;
        return $this;
    }

    /**
     * Gets as handlingTimeEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a stated handling time in listings. The handling time is the maximum number of business days the seller
     *  commits to for preparing an item to be shipped after receiving a
     *  cleared payment. The seller's handling time does not include the
     *  shipping time (the carrier's transit time). This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HandlingTimeEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\HandlingTimeEnabledDefinitionType
     */
    public function getHandlingTimeEnabled()
    {
        return $this->handlingTimeEnabled;
    }

    /**
     * Sets a new handlingTimeEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a stated handling time in listings. The handling time is the maximum number of business days the seller
     *  commits to for preparing an item to be shipped after receiving a
     *  cleared payment. The seller's handling time does not include the
     *  shipping time (the carrier's transit time). This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HandlingTimeEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\HandlingTimeEnabledDefinitionType $handlingTimeEnabled
     * @return self
     */
    public function setHandlingTimeEnabled(\Nogrod\eBaySDK\MerchantData\HandlingTimeEnabledDefinitionType $handlingTimeEnabled)
    {
        $this->handlingTimeEnabled = $handlingTimeEnabled;
        return $this;
    }

    /**
     * Gets as payPalRequiredForStoreOwner
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PayPalRequiredForStoreOwnerDefinitionType
     */
    public function getPayPalRequiredForStoreOwner()
    {
        return $this->payPalRequiredForStoreOwner;
    }

    /**
     * Sets a new payPalRequiredForStoreOwner
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner
     * @return self
     */
    public function setPayPalRequiredForStoreOwner(\Nogrod\eBaySDK\MerchantData\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner)
    {
        $this->payPalRequiredForStoreOwner = $payPalRequiredForStoreOwner;
        return $this;
    }

    /**
     * Gets as reviseQuantityAllowed
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the quantity of a listing to be revised during the life of the listing. This feature is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReviseQuantityAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ReviseQuantityAllowedDefinitionType
     */
    public function getReviseQuantityAllowed()
    {
        return $this->reviseQuantityAllowed;
    }

    /**
     * Sets a new reviseQuantityAllowed
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the quantity of a listing to be revised during the life of the listing. This feature is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReviseQuantityAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed
     * @return self
     */
    public function setReviseQuantityAllowed(\Nogrod\eBaySDK\MerchantData\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed)
    {
        $this->reviseQuantityAllowed = $reviseQuantityAllowed;
        return $this;
    }

    /**
     * Gets as revisePriceAllowed
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the price of a listing to be revised during the life of the listing. This feature is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\RevisePriceAllowedDefinitionType
     */
    public function getRevisePriceAllowed()
    {
        return $this->revisePriceAllowed;
    }

    /**
     * Sets a new revisePriceAllowed
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow the price of a listing to be revised during the life of the listing. This feature is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\RevisePriceAllowedDefinitionType $revisePriceAllowed
     * @return self
     */
    public function setRevisePriceAllowed(\Nogrod\eBaySDK\MerchantData\RevisePriceAllowedDefinitionType $revisePriceAllowed)
    {
        $this->revisePriceAllowed = $revisePriceAllowed;
        return $this;
    }

    /**
     * Gets as storeOwnerExtendedListingDurationsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support extended listing durations for eBay Business Sellers with eBay Stores. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\StoreOwnerExtendedListingDurationsEnabledDefinitionType
     */
    public function getStoreOwnerExtendedListingDurationsEnabled()
    {
        return $this->storeOwnerExtendedListingDurationsEnabled;
    }

    /**
     * Sets a new storeOwnerExtendedListingDurationsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support extended listing durations for eBay Business Sellers with eBay Stores. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled
     * @return self
     */
    public function setStoreOwnerExtendedListingDurationsEnabled(\Nogrod\eBaySDK\MerchantData\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled)
    {
        $this->storeOwnerExtendedListingDurationsEnabled = $storeOwnerExtendedListingDurationsEnabled;
        return $this;
    }

    /**
     * Gets as storeOwnerExtendedListingDurations
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\StoreOwnerExtendedListingDurationsDefinitionType
     */
    public function getStoreOwnerExtendedListingDurations()
    {
        return $this->storeOwnerExtendedListingDurations;
    }

    /**
     * Sets a new storeOwnerExtendedListingDurations
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations
     * @return self
     */
    public function setStoreOwnerExtendedListingDurations(\Nogrod\eBaySDK\MerchantData\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations)
    {
        $this->storeOwnerExtendedListingDurations = $storeOwnerExtendedListingDurations;
        return $this;
    }

    /**
     * Gets as paymentMethod
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of acceptable payment methods in listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaymentMethod</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  eBay now controls all electronic payment methods available to buyers, but sellers still need to specify offline payment methods for listings that require/support offline payment such as motor vehicle listings.</span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\PaymentMethodDefinitionType
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the display of acceptable payment methods in listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaymentMethod</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  eBay now controls all electronic payment methods available to buyers, but sellers still need to specify offline payment methods for listings that require/support offline payment such as motor vehicle listings.</span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\PaymentMethodDefinitionType $paymentMethod
     * @return self
     */
    public function setPaymentMethod(\Nogrod\eBaySDK\MerchantData\PaymentMethodDefinitionType $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Gets as group1MaxFlatShippingCost
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the applicable max cap per shipping cost for shipping service group1. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group1MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\Group1MaxFlatShippingCostDefinitionType
     */
    public function getGroup1MaxFlatShippingCost()
    {
        return $this->group1MaxFlatShippingCost;
    }

    /**
     * Sets a new group1MaxFlatShippingCost
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the applicable max cap per shipping cost for shipping service group1. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group1MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost
     * @return self
     */
    public function setGroup1MaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost)
    {
        $this->group1MaxFlatShippingCost = $group1MaxFlatShippingCost;
        return $this;
    }

    /**
     * Gets as group2MaxFlatShippingCost
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the applicable max cap per shipping cost for shipping service group2. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group2MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\Group2MaxFlatShippingCostDefinitionType
     */
    public function getGroup2MaxFlatShippingCost()
    {
        return $this->group2MaxFlatShippingCost;
    }

    /**
     * Sets a new group2MaxFlatShippingCost
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the applicable max cap per shipping cost for shipping service group2. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group2MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost
     * @return self
     */
    public function setGroup2MaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost)
    {
        $this->group2MaxFlatShippingCost = $group2MaxFlatShippingCost;
        return $this;
    }

    /**
     * Gets as group3MaxFlatShippingCost
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the applicable max cap per shipping cost for shipping service group3. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group3MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\Group3MaxFlatShippingCostDefinitionType
     */
    public function getGroup3MaxFlatShippingCost()
    {
        return $this->group3MaxFlatShippingCost;
    }

    /**
     * Sets a new group3MaxFlatShippingCost
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces allow for the applicable max cap per shipping cost for shipping service group3. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>Group3MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost
     * @return self
     */
    public function setGroup3MaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost)
    {
        $this->group3MaxFlatShippingCost = $group3MaxFlatShippingCost;
        return $this;
    }

    /**
     * Gets as maxFlatShippingCostCBTExempt
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces do not impose a maximum flat-rate shipping cost if the item is being shipped internationally. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCostCBTExempt</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MaxFlatShippingCostCBTExemptDefinitionType
     */
    public function getMaxFlatShippingCostCBTExempt()
    {
        return $this->maxFlatShippingCostCBTExempt;
    }

    /**
     * Sets a new maxFlatShippingCostCBTExempt
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces do not impose a maximum flat-rate shipping cost if the item is being shipped internationally. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCostCBTExempt</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt
     * @return self
     */
    public function setMaxFlatShippingCostCBTExempt(\Nogrod\eBaySDK\MerchantData\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt)
    {
        $this->maxFlatShippingCostCBTExempt = $maxFlatShippingCostCBTExempt;
        return $this;
    }

    /**
     * Gets as maxFlatShippingCost
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces do not impose a maximum flat-rate shipping cost. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MaxFlatShippingCostDefinitionType
     */
    public function getMaxFlatShippingCost()
    {
        return $this->maxFlatShippingCost;
    }

    /**
     * Sets a new maxFlatShippingCost
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces do not impose a maximum flat-rate shipping cost. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MaxFlatShippingCostDefinitionType $maxFlatShippingCost
     * @return self
     */
    public function setMaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\MaxFlatShippingCostDefinitionType $maxFlatShippingCost)
    {
        $this->maxFlatShippingCost = $maxFlatShippingCost;
        return $this;
    }

    /**
     * Gets as variationsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support multiple-variation listings for some categories. Multiple-variation listings contain items that are logically the same product, but that vary in color, size, or other aspect. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations. This feature is only applicable to fixed-price listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VariationsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\VariationsEnabledDefinitionType
     */
    public function getVariationsEnabled()
    {
        return $this->variationsEnabled;
    }

    /**
     * Sets a new variationsEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support multiple-variation listings for some categories. Multiple-variation listings contain items that are logically the same product, but that vary in color, size, or other aspect. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations. This feature is only applicable to fixed-price listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VariationsEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\VariationsEnabledDefinitionType $variationsEnabled
     * @return self
     */
    public function setVariationsEnabled(\Nogrod\eBaySDK\MerchantData\VariationsEnabledDefinitionType $variationsEnabled)
    {
        $this->variationsEnabled = $variationsEnabled;
        return $this;
    }

    /**
     * Gets as attributeConversionEnabled
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AttributeConversionEnabledFeatureDefinitionType
     */
    public function getAttributeConversionEnabled()
    {
        return $this->attributeConversionEnabled;
    }

    /**
     * Sets a new attributeConversionEnabled
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled
     * @return self
     */
    public function setAttributeConversionEnabled(\Nogrod\eBaySDK\MerchantData\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled)
    {
        $this->attributeConversionEnabled = $attributeConversionEnabled;
        return $this;
    }

    /**
     * Gets as freeGalleryPlusEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support free, automatic upgrades for Gallery Plus for some categories. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>FreeGalleryPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\FreeGalleryPlusEnabledDefinitionType
     */
    public function getFreeGalleryPlusEnabled()
    {
        return $this->freeGalleryPlusEnabled;
    }

    /**
     * Sets a new freeGalleryPlusEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support free, automatic upgrades for Gallery Plus for some categories. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>FreeGalleryPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled
     * @return self
     */
    public function setFreeGalleryPlusEnabled(\Nogrod\eBaySDK\MerchantData\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled)
    {
        $this->freeGalleryPlusEnabled = $freeGalleryPlusEnabled;
        return $this;
    }

    /**
     * Gets as freePicturePackEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support a free Picture Pack upgrade for some categories. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>FreePicturePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\FreePicturePackEnabledDefinitionType
     */
    public function getFreePicturePackEnabled()
    {
        return $this->freePicturePackEnabled;
    }

    /**
     * Sets a new freePicturePackEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support a free Picture Pack upgrade for some categories. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>FreePicturePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\FreePicturePackEnabledDefinitionType $freePicturePackEnabled
     * @return self
     */
    public function setFreePicturePackEnabled(\Nogrod\eBaySDK\MerchantData\FreePicturePackEnabledDefinitionType $freePicturePackEnabled)
    {
        $this->freePicturePackEnabled = $freePicturePackEnabled;
        return $this;
    }

    /**
     * Gets as itemCompatibilityEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Parts Compatibility for some Parts & Accessories categories. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemCompatibilityEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ItemCompatibilityEnabledDefinitionType
     */
    public function getItemCompatibilityEnabled()
    {
        return $this->itemCompatibilityEnabled;
    }

    /**
     * Sets a new itemCompatibilityEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Parts Compatibility for some Parts & Accessories categories. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemCompatibilityEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled
     * @return self
     */
    public function setItemCompatibilityEnabled(\Nogrod\eBaySDK\MerchantData\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled)
    {
        $this->itemCompatibilityEnabled = $itemCompatibilityEnabled;
        return $this;
    }

    /**
     * Gets as maxItemCompatibility
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces define a maximum limit for the number of compatible applications for items listed with parts compatibilities by application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MaxItemCompatibilityDefinitionType
     */
    public function getMaxItemCompatibility()
    {
        return $this->maxItemCompatibility;
    }

    /**
     * Sets a new maxItemCompatibility
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces define a maximum limit for the number of compatible applications for items listed with parts compatibilities by application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MaxItemCompatibilityDefinitionType $maxItemCompatibility
     * @return self
     */
    public function setMaxItemCompatibility(\Nogrod\eBaySDK\MerchantData\MaxItemCompatibilityDefinitionType $maxItemCompatibility)
    {
        $this->maxItemCompatibility = $maxItemCompatibility;
        return $this;
    }

    /**
     * Gets as minItemCompatibility
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces define a minimum amount for the number of compatible applications for items listed with parts compatibilities by application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MinItemCompatibilityDefinitionType
     */
    public function getMinItemCompatibility()
    {
        return $this->minItemCompatibility;
    }

    /**
     * Sets a new minItemCompatibility
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces define a minimum amount for the number of compatible applications for items listed with parts compatibilities by application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MinItemCompatibilityDefinitionType $minItemCompatibility
     * @return self
     */
    public function setMinItemCompatibility(\Nogrod\eBaySDK\MerchantData\MinItemCompatibilityDefinitionType $minItemCompatibility)
    {
        $this->minItemCompatibility = $minItemCompatibility;
        return $this;
    }

    /**
     * Gets as conditionEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the textual description of an item's condition at listing time. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ConditionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ConditionEnabledDefinitionType
     */
    public function getConditionEnabled()
    {
        return $this->conditionEnabled;
    }

    /**
     * Sets a new conditionEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the textual description of an item's condition at listing time. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ConditionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ConditionEnabledDefinitionType $conditionEnabled
     * @return self
     */
    public function setConditionEnabled(\Nogrod\eBaySDK\MerchantData\ConditionEnabledDefinitionType $conditionEnabled)
    {
        $this->conditionEnabled = $conditionEnabled;
        return $this;
    }

    /**
     * Gets as conditionValues
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Condition IDs to specify an item's condition at listing time. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ConditionValues</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ConditionValuesDefinitionType
     */
    public function getConditionValues()
    {
        return $this->conditionValues;
    }

    /**
     * Sets a new conditionValues
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support Condition IDs to specify an item's condition at listing time. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ConditionValues</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ConditionValuesDefinitionType $conditionValues
     * @return self
     */
    public function setConditionValues(\Nogrod\eBaySDK\MerchantData\ConditionValuesDefinitionType $conditionValues)
    {
        $this->conditionValues = $conditionValues;
        return $this;
    }

    /**
     * Gets as valueCategory
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support value categories. A Value category will typically have lower listing fees or another eBay promotion. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValueCategory</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ValueCategoryDefinitionType
     */
    public function getValueCategory()
    {
        return $this->valueCategory;
    }

    /**
     * Sets a new valueCategory
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support value categories. A Value category will typically have lower listing fees or another eBay promotion. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValueCategory</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ValueCategoryDefinitionType $valueCategory
     * @return self
     */
    public function setValueCategory(\Nogrod\eBaySDK\MerchantData\ValueCategoryDefinitionType $valueCategory)
    {
        $this->valueCategory = $valueCategory;
        return $this;
    }

    /**
     * Gets as productCreationEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the creation of listings through the specification of Global Trade Identification Numbers (GTINs) like UPC, ISBN, EAN, or Brand/MPN combination. If a GTIN is matched to a product in eBay product catalog, a listing will automatically be created using the eBay catalog product's images, product aspects, description, and title. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProductCreationEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ProductCreationEnabledDefinitionType
     */
    public function getProductCreationEnabled()
    {
        return $this->productCreationEnabled;
    }

    /**
     * Sets a new productCreationEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the creation of listings through the specification of Global Trade Identification Numbers (GTINs) like UPC, ISBN, EAN, or Brand/MPN combination. If a GTIN is matched to a product in eBay product catalog, a listing will automatically be created using the eBay catalog product's images, product aspects, description, and title. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ProductCreationEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ProductCreationEnabledDefinitionType $productCreationEnabled
     * @return self
     */
    public function setProductCreationEnabled(\Nogrod\eBaySDK\MerchantData\ProductCreationEnabledDefinitionType $productCreationEnabled)
    {
        $this->productCreationEnabled = $productCreationEnabled;
        return $this;
    }

    /**
     * Gets as eANEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the EAN product identifying feature. This field will be returned as long as <b>EANEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the EAN product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.EANEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the EAN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>EANEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @return \Nogrod\eBaySDK\MerchantData\EANEnabledDefinitionType
     */
    public function getEANEnabled()
    {
        return $this->eANEnabled;
    }

    /**
     * Sets a new eANEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the EAN product identifying feature. This field will be returned as long as <b>EANEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the EAN product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.EANEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the EAN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>EANEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @param \Nogrod\eBaySDK\MerchantData\EANEnabledDefinitionType $eANEnabled
     * @return self
     */
    public function setEANEnabled(\Nogrod\eBaySDK\MerchantData\EANEnabledDefinitionType $eANEnabled)
    {
        $this->eANEnabled = $eANEnabled;
        return $this;
    }

    /**
     * Gets as iSBNEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the ISBN product identifying feature. This field will be returned as long as <b>ISBNEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the ISBN product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.ISBNEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the ISBN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>ISBNEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @return \Nogrod\eBaySDK\MerchantData\ISBNEnabledDefinitionType
     */
    public function getISBNEnabled()
    {
        return $this->iSBNEnabled;
    }

    /**
     * Sets a new iSBNEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the ISBN product identifying feature. This field will be returned as long as <b>ISBNEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the ISBN product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.ISBNEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the ISBN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>ISBNEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @param \Nogrod\eBaySDK\MerchantData\ISBNEnabledDefinitionType $iSBNEnabled
     * @return self
     */
    public function setISBNEnabled(\Nogrod\eBaySDK\MerchantData\ISBNEnabledDefinitionType $iSBNEnabled)
    {
        $this->iSBNEnabled = $iSBNEnabled;
        return $this;
    }

    /**
     * Gets as uPCEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the UPC product identifying feature. This field will be returned as long as <b>UPCEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the UPC product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.UPCEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the UPC product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>UPCEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @return \Nogrod\eBaySDK\MerchantData\UPCEnabledDefinitionType
     */
    public function getUPCEnabled()
    {
        return $this->uPCEnabled;
    }

    /**
     * Sets a new uPCEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the UPC product identifying feature. This field will be returned as long as <b>UPCEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the UPC product identifying feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.UPCEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the UPC product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>UPCEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @param \Nogrod\eBaySDK\MerchantData\UPCEnabledDefinitionType $uPCEnabled
     * @return self
     */
    public function setUPCEnabled(\Nogrod\eBaySDK\MerchantData\UPCEnabledDefinitionType $uPCEnabled)
    {
        $this->uPCEnabled = $uPCEnabled;
        return $this;
    }

    /**
     * Gets as compatibleVehicleType
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Parts Compatibility feature for motor vehicles. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CompatibleVehicleType</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CompatibleVehicleTypeDefinitionType
     */
    public function getCompatibleVehicleType()
    {
        return $this->compatibleVehicleType;
    }

    /**
     * Sets a new compatibleVehicleType
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Parts Compatibility feature for motor vehicles. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>CompatibleVehicleType</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CompatibleVehicleTypeDefinitionType $compatibleVehicleType
     * @return self
     */
    public function setCompatibleVehicleType(\Nogrod\eBaySDK\MerchantData\CompatibleVehicleTypeDefinitionType $compatibleVehicleType)
    {
        $this->compatibleVehicleType = $compatibleVehicleType;
        return $this;
    }

    /**
     * Gets as maxGranularFitmentCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces define a maximum limit for the number of fine-grained item compatibilities that can be applied to a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxGranularFitmentCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MaxGranularFitmentCountDefinitionType
     */
    public function getMaxGranularFitmentCount()
    {
        return $this->maxGranularFitmentCount;
    }

    /**
     * Sets a new maxGranularFitmentCount
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces define a maximum limit for the number of fine-grained item compatibilities that can be applied to a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxGranularFitmentCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount
     * @return self
     */
    public function setMaxGranularFitmentCount(\Nogrod\eBaySDK\MerchantData\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount)
    {
        $this->maxGranularFitmentCount = $maxGranularFitmentCount;
        return $this;
    }

    /**
     * Gets as paymentOptionsGroup
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PaymentOptionsGroupEnabledDefinitionType
     */
    public function getPaymentOptionsGroup()
    {
        return $this->paymentOptionsGroup;
    }

    /**
     * Sets a new paymentOptionsGroup
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup
     * @return self
     */
    public function setPaymentOptionsGroup(\Nogrod\eBaySDK\MerchantData\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup)
    {
        $this->paymentOptionsGroup = $paymentOptionsGroup;
        return $this;
    }

    /**
     * Gets as shippingProfileCategoryGroup
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of category groups in shipping business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType
     */
    public function getShippingProfileCategoryGroup()
    {
        return $this->shippingProfileCategoryGroup;
    }

    /**
     * Sets a new shippingProfileCategoryGroup
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of category groups in shipping business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup
     * @return self
     */
    public function setShippingProfileCategoryGroup(\Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup)
    {
        $this->shippingProfileCategoryGroup = $shippingProfileCategoryGroup;
        return $this;
    }

    /**
     * Gets as paymentProfileCategoryGroup
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of category groups in payment business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaymentProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType
     */
    public function getPaymentProfileCategoryGroup()
    {
        return $this->paymentProfileCategoryGroup;
    }

    /**
     * Sets a new paymentProfileCategoryGroup
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of category groups in payment business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PaymentProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup
     * @return self
     */
    public function setPaymentProfileCategoryGroup(\Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup)
    {
        $this->paymentProfileCategoryGroup = $paymentProfileCategoryGroup;
        return $this;
    }

    /**
     * Gets as returnPolicyProfileCategoryGroup
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of category groups in return business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType
     */
    public function getReturnPolicyProfileCategoryGroup()
    {
        return $this->returnPolicyProfileCategoryGroup;
    }

    /**
     * Sets a new returnPolicyProfileCategoryGroup
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of category groups in return business policies. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup
     * @return self
     */
    public function setReturnPolicyProfileCategoryGroup(\Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup)
    {
        $this->returnPolicyProfileCategoryGroup = $returnPolicyProfileCategoryGroup;
        return $this;
    }

    /**
     * Gets as vINSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of the VIN (Vehicle Identification Number) field to identify a motor vehicle and create a listing is supported. VINs are supported on the US, Canada, Canada-French, and Australia sites. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VINSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\VINSupportedDefinitionType
     */
    public function getVINSupported()
    {
        return $this->vINSupported;
    }

    /**
     * Sets a new vINSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of the VIN (Vehicle Identification Number) field to identify a motor vehicle and create a listing is supported. VINs are supported on the US, Canada, Canada-French, and Australia sites. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VINSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\VINSupportedDefinitionType $vINSupported
     * @return self
     */
    public function setVINSupported(\Nogrod\eBaySDK\MerchantData\VINSupportedDefinitionType $vINSupported)
    {
        $this->vINSupported = $vINSupported;
        return $this;
    }

    /**
     * Gets as vRMSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of the VRM (Vehicle Registration Mark) field to identify a motor vehicle and create a listing is supported. VRMs are only supported on the UK site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VRMSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\VRMSupportedDefinitionType
     */
    public function getVRMSupported()
    {
        return $this->vRMSupported;
    }

    /**
     * Sets a new vRMSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of the VRM (Vehicle Registration Mark) field to identify a motor vehicle and create a listing is supported. VRMs are only supported on the UK site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VRMSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\VRMSupportedDefinitionType $vRMSupported
     * @return self
     */
    public function setVRMSupported(\Nogrod\eBaySDK\MerchantData\VRMSupportedDefinitionType $vRMSupported)
    {
        $this->vRMSupported = $vRMSupported;
        return $this;
    }

    /**
     * Gets as sellerProvidedTitleSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support seller-provided titles in motor vehicle listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerProvidedTitleSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellerProvidedTitleSupportedDefinitionType
     */
    public function getSellerProvidedTitleSupported()
    {
        return $this->sellerProvidedTitleSupported;
    }

    /**
     * Sets a new sellerProvidedTitleSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support seller-provided titles in motor vehicle listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerProvidedTitleSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported
     * @return self
     */
    public function setSellerProvidedTitleSupported(\Nogrod\eBaySDK\MerchantData\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported)
    {
        $this->sellerProvidedTitleSupported = $sellerProvidedTitleSupported;
        return $this;
    }

    /**
     * Gets as depositSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support deposits for motor vehicle listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>DepositSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\DepositSupportedDefinitionType
     */
    public function getDepositSupported()
    {
        return $this->depositSupported;
    }

    /**
     * Sets a new depositSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support deposits for motor vehicle listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>DepositSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\DepositSupportedDefinitionType $depositSupported
     * @return self
     */
    public function setDepositSupported(\Nogrod\eBaySDK\MerchantData\DepositSupportedDefinitionType $depositSupported)
    {
        $this->depositSupported = $depositSupported;
        return $this;
    }

    /**
     * Gets as globalShippingEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Global Shipping Program (GSP) as the method for shipping orders internationally. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>GlobalShippingEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\GlobalShippingEnabledDefinitionType
     */
    public function getGlobalShippingEnabled()
    {
        return $this->globalShippingEnabled;
    }

    /**
     * Sets a new globalShippingEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Global Shipping Program (GSP) as the method for shipping orders internationally. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>GlobalShippingEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\GlobalShippingEnabledDefinitionType $globalShippingEnabled
     * @return self
     */
    public function setGlobalShippingEnabled(\Nogrod\eBaySDK\MerchantData\GlobalShippingEnabledDefinitionType $globalShippingEnabled)
    {
        $this->globalShippingEnabled = $globalShippingEnabled;
        return $this;
    }

    /**
     * Gets as additionalCompatibilityEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Boat and Motorcycle Parts Compatibility feature. This field will be returned as long as <b>AdditionalCompatibilityEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports Boat or Motorcycle Parts Compatibility (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.AdditionalCompatibilityEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports Boat and Motorcycle Parts Compatibility, pass in a
     *  <b>CategoryID</b> value in the request, and then look for a
     *  <code>true</code>
     *  <br> value in the <b>AdditionalCompatibilityEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @return \Nogrod\eBaySDK\MerchantData\AdditionalCompatibilityEnabledDefinitionType
     */
    public function getAdditionalCompatibilityEnabled()
    {
        return $this->additionalCompatibilityEnabled;
    }

    /**
     * Sets a new additionalCompatibilityEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Boat and Motorcycle Parts Compatibility feature. This field will be returned as long as <b>AdditionalCompatibilityEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports Boat or Motorcycle Parts Compatibility (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.AdditionalCompatibilityEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports Boat and Motorcycle Parts Compatibility, pass in a
     *  <b>CategoryID</b> value in the request, and then look for a
     *  <code>true</code>
     *  <br> value in the <b>AdditionalCompatibilityEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @param \Nogrod\eBaySDK\MerchantData\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled
     * @return self
     */
    public function setAdditionalCompatibilityEnabled(\Nogrod\eBaySDK\MerchantData\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled)
    {
        $this->additionalCompatibilityEnabled = $additionalCompatibilityEnabled;
        return $this;
    }

    /**
     * Gets as pickupDropOffEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Click and Collect feature. This field will be returned as long as <b>PickupDropOffEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the Click and Collect feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.PickupDropOffEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the Click and Collect feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\PickupDropOffEnabledDefinitionType
     */
    public function getPickupDropOffEnabled()
    {
        return $this->pickupDropOffEnabled;
    }

    /**
     * Sets a new pickupDropOffEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the Click and Collect feature. This field will be returned as long as <b>PickupDropOffEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports the Click and Collect feature (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.PickupDropOffEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports the Click and Collect feature, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled
     * @return self
     */
    public function setPickupDropOffEnabled(\Nogrod\eBaySDK\MerchantData\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled)
    {
        $this->pickupDropOffEnabled = $pickupDropOffEnabled;
        return $this;
    }

    /**
     * Gets as digitalGoodDeliveryEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support digital gift card listings. This field will be returned as long as <b>DigitalGoodDeliveryEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports digital gift card listings (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.DigitalGoodDeliveryEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports digital gift card listings, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following:
     *  <ul>
     *  <li>Each seller can only have one gift card listing at any given time </li>
     *  <li>The maximum dollar value of the gift card may not exceed 500.00</li>
     *  <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li>
     *  </ul>
     *  For more information on eBay's Gift Card policy, see the <a href="
     *  https://www.ebay.com/help/policies/prohibited-restricted-items/gift-cards-policy?id=4294" target="_blank">Gift cards policy</a> help page.
     *
     * @return \Nogrod\eBaySDK\MerchantData\DigitalGoodDeliveryEnabledDefinitionType
     */
    public function getDigitalGoodDeliveryEnabled()
    {
        return $this->digitalGoodDeliveryEnabled;
    }

    /**
     * Sets a new digitalGoodDeliveryEnabled
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support digital gift card listings. This field will be returned as long as <b>DigitalGoodDeliveryEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br>
     *  <br>
     *  To verify if a specific eBay site supports digital gift card listings (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.DigitalGoodDeliveryEnabled</b> field.
     *  <br>
     *  <br>
     *  To verify if a specific category on a specific eBay site supports digital gift card listings, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following:
     *  <ul>
     *  <li>Each seller can only have one gift card listing at any given time </li>
     *  <li>The maximum dollar value of the gift card may not exceed 500.00</li>
     *  <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li>
     *  </ul>
     *  For more information on eBay's Gift Card policy, see the <a href="
     *  https://www.ebay.com/help/policies/prohibited-restricted-items/gift-cards-policy?id=4294" target="_blank">Gift cards policy</a> help page.
     *
     * @param \Nogrod\eBaySDK\MerchantData\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled
     * @return self
     */
    public function setDigitalGoodDeliveryEnabled(\Nogrod\eBaySDK\MerchantData\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled)
    {
        $this->digitalGoodDeliveryEnabled = $digitalGoodDeliveryEnabled;
        return $this;
    }

    /**
     * Gets as epidSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites. This field will be returned as long as <b>EpidSupported</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br/><br/>
     *  For more information on using an ePID to identify a compatible motorcycle or scooter through an Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EpidSupportedDefinitionType
     */
    public function getEpidSupported()
    {
        return $this->epidSupported;
    }

    /**
     * Sets a new epidSupported
     *
     * This field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites. This field will be returned as long as <b>EpidSupported</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br/><br/>
     *  For more information on using an ePID to identify a compatible motorcycle or scooter through an Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EpidSupportedDefinitionType $epidSupported
     * @return self
     */
    public function setEpidSupported(\Nogrod\eBaySDK\MerchantData\EpidSupportedDefinitionType $epidSupported)
    {
        $this->epidSupported = $epidSupported;
        return $this;
    }

    /**
     * Gets as kTypeSupported
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are compatible with a motor vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site. This field will be returned as long as <b>KTypeSupported</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br/><br/>
     *  For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API call on the Germany site, see the documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *
     * @return \Nogrod\eBaySDK\MerchantData\KTypeSupportedDefinitionType
     */
    public function getKTypeSupported()
    {
        return $this->kTypeSupported;
    }

    /**
     * Sets a new kTypeSupported
     *
     * TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay marketplaces support the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are compatible with a motor vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site. This field will be returned as long as <b>KTypeSupported</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request.
     *  <br/><br/>
     *  For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API call on the Germany site, see the documentation for the <a href="
     *  https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     *
     * @param \Nogrod\eBaySDK\MerchantData\KTypeSupportedDefinitionType $kTypeSupported
     * @return self
     */
    public function setKTypeSupported(\Nogrod\eBaySDK\MerchantData\KTypeSupportedDefinitionType $kTypeSupported)
    {
        $this->kTypeSupported = $kTypeSupported;
        return $this;
    }

    /**
     * Gets as productRequiredEnabled
     *
     * This field is deprecated. No eBay categories require listings based on an eBay catalog product.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ProductRequiredEnabledDefinitionType
     */
    public function getProductRequiredEnabled()
    {
        return $this->productRequiredEnabled;
    }

    /**
     * Sets a new productRequiredEnabled
     *
     * This field is deprecated. No eBay categories require listings based on an eBay catalog product.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ProductRequiredEnabledDefinitionType $productRequiredEnabled
     * @return self
     */
    public function setProductRequiredEnabled(\Nogrod\eBaySDK\MerchantData\ProductRequiredEnabledDefinitionType $productRequiredEnabled)
    {
        $this->productRequiredEnabled = $productRequiredEnabled;
        return $this;
    }

    /**
     * Gets as domesticReturnsAcceptedValues
     *
     * If present, this flag indicates the seller can set how to handle domestic returns.
     *
     * @return \Nogrod\eBaySDK\MerchantData\DomesticReturnsAcceptedDefinitionType
     */
    public function getDomesticReturnsAcceptedValues()
    {
        return $this->domesticReturnsAcceptedValues;
    }

    /**
     * Sets a new domesticReturnsAcceptedValues
     *
     * If present, this flag indicates the seller can set how to handle domestic returns.
     *
     * @param \Nogrod\eBaySDK\MerchantData\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues
     * @return self
     */
    public function setDomesticReturnsAcceptedValues(\Nogrod\eBaySDK\MerchantData\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues)
    {
        $this->domesticReturnsAcceptedValues = $domesticReturnsAcceptedValues;
        return $this;
    }

    /**
     * Gets as internationalReturnsAcceptedValues
     *
     * If present, this flag indicates the seller can set how to handle international returns.
     *
     * @return \Nogrod\eBaySDK\MerchantData\InternationalReturnsAcceptedDefinitionType
     */
    public function getInternationalReturnsAcceptedValues()
    {
        return $this->internationalReturnsAcceptedValues;
    }

    /**
     * Sets a new internationalReturnsAcceptedValues
     *
     * If present, this flag indicates the seller can set how to handle international returns.
     *
     * @param \Nogrod\eBaySDK\MerchantData\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues
     * @return self
     */
    public function setInternationalReturnsAcceptedValues(\Nogrod\eBaySDK\MerchantData\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues)
    {
        $this->internationalReturnsAcceptedValues = $internationalReturnsAcceptedValues;
        return $this;
    }

    /**
     * Gets as domesticReturnsDurationValues
     *
     * If present, this flag indicates the seller can set the time duration for domestic returns.
     *
     * @return \Nogrod\eBaySDK\MerchantData\DomesticReturnsDurationDefinitionType
     */
    public function getDomesticReturnsDurationValues()
    {
        return $this->domesticReturnsDurationValues;
    }

    /**
     * Sets a new domesticReturnsDurationValues
     *
     * If present, this flag indicates the seller can set the time duration for domestic returns.
     *
     * @param \Nogrod\eBaySDK\MerchantData\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues
     * @return self
     */
    public function setDomesticReturnsDurationValues(\Nogrod\eBaySDK\MerchantData\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues)
    {
        $this->domesticReturnsDurationValues = $domesticReturnsDurationValues;
        return $this;
    }

    /**
     * Gets as internationalReturnsDurationValues
     *
     * If present, this flag indicates the seller can set the time duration for international returns.
     *
     * @return \Nogrod\eBaySDK\MerchantData\InternationalReturnsDurationDefinitionType
     */
    public function getInternationalReturnsDurationValues()
    {
        return $this->internationalReturnsDurationValues;
    }

    /**
     * Sets a new internationalReturnsDurationValues
     *
     * If present, this flag indicates the seller can set the time duration for international returns.
     *
     * @param \Nogrod\eBaySDK\MerchantData\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues
     * @return self
     */
    public function setInternationalReturnsDurationValues(\Nogrod\eBaySDK\MerchantData\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues)
    {
        $this->internationalReturnsDurationValues = $internationalReturnsDurationValues;
        return $this;
    }

    /**
     * Gets as domesticReturnsShipmentPayeeValues
     *
     * If present, this flag indicates the seller can set who pays the shipping for domestic returns.
     *
     * @return \Nogrod\eBaySDK\MerchantData\DomesticReturnsShipmentPayeeDefinitionType
     */
    public function getDomesticReturnsShipmentPayeeValues()
    {
        return $this->domesticReturnsShipmentPayeeValues;
    }

    /**
     * Sets a new domesticReturnsShipmentPayeeValues
     *
     * If present, this flag indicates the seller can set who pays the shipping for domestic returns.
     *
     * @param \Nogrod\eBaySDK\MerchantData\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues
     * @return self
     */
    public function setDomesticReturnsShipmentPayeeValues(\Nogrod\eBaySDK\MerchantData\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues)
    {
        $this->domesticReturnsShipmentPayeeValues = $domesticReturnsShipmentPayeeValues;
        return $this;
    }

    /**
     * Gets as internationalReturnsShipmentPayeeValues
     *
     * If present, this flag indicates the seller can set who pays the shipping for international returns.
     *
     * @return \Nogrod\eBaySDK\MerchantData\InternationalReturnsShipmentPayeeDefinitionType
     */
    public function getInternationalReturnsShipmentPayeeValues()
    {
        return $this->internationalReturnsShipmentPayeeValues;
    }

    /**
     * Sets a new internationalReturnsShipmentPayeeValues
     *
     * If present, this flag indicates the seller can set who pays the shipping for international returns.
     *
     * @param \Nogrod\eBaySDK\MerchantData\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues
     * @return self
     */
    public function setInternationalReturnsShipmentPayeeValues(\Nogrod\eBaySDK\MerchantData\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues)
    {
        $this->internationalReturnsShipmentPayeeValues = $internationalReturnsShipmentPayeeValues;
        return $this;
    }

    /**
     * Adds as domesticRefundMethod
     *
     * If present, this flag indicates the seller can set the method they use to refund domestic returns.
     *
     * @return self
     * @param string $domesticRefundMethod
     */
    public function addToDomesticRefundMethodValues($domesticRefundMethod)
    {
        $this->domesticRefundMethodValues[] = $domesticRefundMethod;
        return $this;
    }

    /**
     * isset domesticRefundMethodValues
     *
     * If present, this flag indicates the seller can set the method they use to refund domestic returns.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomesticRefundMethodValues($index)
    {
        return isset($this->domesticRefundMethodValues[$index]);
    }

    /**
     * unset domesticRefundMethodValues
     *
     * If present, this flag indicates the seller can set the method they use to refund domestic returns.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomesticRefundMethodValues($index)
    {
        unset($this->domesticRefundMethodValues[$index]);
    }

    /**
     * Gets as domesticRefundMethodValues
     *
     * If present, this flag indicates the seller can set the method they use to refund domestic returns.
     *
     * @return string[]
     */
    public function getDomesticRefundMethodValues()
    {
        return $this->domesticRefundMethodValues;
    }

    /**
     * Sets a new domesticRefundMethodValues
     *
     * If present, this flag indicates the seller can set the method they use to refund domestic returns.
     *
     * @param string $domesticRefundMethodValues
     * @return self
     */
    public function setDomesticRefundMethodValues(array $domesticRefundMethodValues)
    {
        $this->domesticRefundMethodValues = $domesticRefundMethodValues;
        return $this;
    }

    /**
     * Adds as internationalRefundMethod
     *
     * If present, this flag indicates the seller can set the method they use to refund international returns.
     *
     * @return self
     * @param string $internationalRefundMethod
     */
    public function addToInternationalRefundMethodValues($internationalRefundMethod)
    {
        $this->internationalRefundMethodValues[] = $internationalRefundMethod;
        return $this;
    }

    /**
     * isset internationalRefundMethodValues
     *
     * If present, this flag indicates the seller can set the method they use to refund international returns.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInternationalRefundMethodValues($index)
    {
        return isset($this->internationalRefundMethodValues[$index]);
    }

    /**
     * unset internationalRefundMethodValues
     *
     * If present, this flag indicates the seller can set the method they use to refund international returns.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInternationalRefundMethodValues($index)
    {
        unset($this->internationalRefundMethodValues[$index]);
    }

    /**
     * Gets as internationalRefundMethodValues
     *
     * If present, this flag indicates the seller can set the method they use to refund international returns.
     *
     * @return string[]
     */
    public function getInternationalRefundMethodValues()
    {
        return $this->internationalRefundMethodValues;
    }

    /**
     * Sets a new internationalRefundMethodValues
     *
     * If present, this flag indicates the seller can set the method they use to refund international returns.
     *
     * @param string $internationalRefundMethodValues
     * @return self
     */
    public function setInternationalRefundMethodValues(array $internationalRefundMethodValues)
    {
        $this->internationalRefundMethodValues = $internationalRefundMethodValues;
        return $this;
    }

    /**
     * Gets as returnPolicyDescriptionEnabled
     *
     * If present, this flag indicates the seller can choose to describe the return policy they offer (providing return-policy details is required in some EU countries).
     *
     * @return \Nogrod\eBaySDK\MerchantData\ReturnPolicyDescriptionEnabledDefinitionType
     */
    public function getReturnPolicyDescriptionEnabled()
    {
        return $this->returnPolicyDescriptionEnabled;
    }

    /**
     * Sets a new returnPolicyDescriptionEnabled
     *
     * If present, this flag indicates the seller can choose to describe the return policy they offer (providing return-policy details is required in some EU countries).
     *
     * @param \Nogrod\eBaySDK\MerchantData\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled
     * @return self
     */
    public function setReturnPolicyDescriptionEnabled(\Nogrod\eBaySDK\MerchantData\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled)
    {
        $this->returnPolicyDescriptionEnabled = $returnPolicyDescriptionEnabled;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getListingDurations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingDurations", $value);
        }
        $value = $this->getShippingTermsRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingTermsRequired", $value);
        }
        $value = $this->getBestOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled", $value);
        }
        $value = $this->getDutchBINEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DutchBINEnabled", $value);
        }
        $value = $this->getUserConsentRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserConsentRequired", $value);
        }
        $value = $this->getHomePageFeaturedEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HomePageFeaturedEnabled", $value);
        }
        $value = $this->getProPackEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProPackEnabled", $value);
        }
        $value = $this->getBasicUpgradePackEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BasicUpgradePackEnabled", $value);
        }
        $value = $this->getValuePackEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValuePackEnabled", $value);
        }
        $value = $this->getProPackPlusEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProPackPlusEnabled", $value);
        }
        $value = $this->getAdFormatEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdFormatEnabled", $value);
        }
        $value = $this->getBestOfferCounterEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferCounterEnabled", $value);
        }
        $value = $this->getBestOfferAutoDeclineEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferAutoDeclineEnabled", $value);
        }
        $value = $this->getLocalMarketSpecialitySubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketSpecialitySubscription", $value);
        }
        $value = $this->getLocalMarketRegularSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketRegularSubscription", $value);
        }
        $value = $this->getLocalMarketPremiumSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketPremiumSubscription", $value);
        }
        $value = $this->getLocalMarketNonSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketNonSubscription", $value);
        }
        $value = $this->getExpressEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressEnabled", $value);
        }
        $value = $this->getExpressPicturesRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressPicturesRequired", $value);
        }
        $value = $this->getExpressConditionRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressConditionRequired", $value);
        }
        $value = $this->getMinimumReservePrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumReservePrice", $value);
        }
        $value = $this->getTransactionConfirmationRequestEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionConfirmationRequestEnabled", $value);
        }
        $value = $this->getSellerContactDetailsEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerContactDetailsEnabled", $value);
        }
        $value = $this->getStoreInventoryEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreInventoryEnabled", $value);
        }
        $value = $this->getSkypeMeTransactionalEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SkypeMeTransactionalEnabled", $value);
        }
        $value = $this->getSkypeMeNonTransactionalEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SkypeMeNonTransactionalEnabled", $value);
        }
        $value = $this->getLocalListingDistancesRegular();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesRegular", $value);
        }
        $value = $this->getLocalListingDistancesSpecialty();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesSpecialty", $value);
        }
        $value = $this->getLocalListingDistancesNonSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesNonSubscription", $value);
        }
        $value = $this->getClassifiedAdPaymentMethodEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPaymentMethodEnabled", $value);
        }
        $value = $this->getClassifiedAdShippingMethodEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdShippingMethodEnabled", $value);
        }
        $value = $this->getClassifiedAdBestOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdBestOfferEnabled", $value);
        }
        $value = $this->getClassifiedAdCounterOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdCounterOfferEnabled", $value);
        }
        $value = $this->getClassifiedAdAutoDeclineEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdAutoDeclineEnabled", $value);
        }
        $value = $this->getClassifiedAdContactByPhoneEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByPhoneEnabled", $value);
        }
        $value = $this->getClassifiedAdContactByEmailEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByEmailEnabled", $value);
        }
        $value = $this->getSafePaymentRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SafePaymentRequired", $value);
        }
        $value = $this->getClassifiedAdPayPerLeadEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPayPerLeadEnabled", $value);
        }
        $value = $this->getItemSpecificsEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemSpecificsEnabled", $value);
        }
        $value = $this->getPaisaPayFullEscrowEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaisaPayFullEscrowEnabled", $value);
        }
        $value = $this->getISBNIdentifierEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ISBNIdentifierEnabled", $value);
        }
        $value = $this->getUPCIdentifierEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UPCIdentifierEnabled", $value);
        }
        $value = $this->getEANIdentifierEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EANIdentifierEnabled", $value);
        }
        $value = $this->getBrandMPNIdentifierEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BrandMPNIdentifierEnabled", $value);
        }
        $value = $this->getBestOfferAutoAcceptEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferAutoAcceptEnabled", $value);
        }
        $value = $this->getClassifiedAdAutoAcceptEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdAutoAcceptEnabled", $value);
        }
        $value = $this->getCrossBorderTradeNorthAmericaEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeNorthAmericaEnabled", $value);
        }
        $value = $this->getCrossBorderTradeGBEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeGBEnabled", $value);
        }
        $value = $this->getCrossBorderTradeAustraliaEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeAustraliaEnabled", $value);
        }
        $value = $this->getPayPalBuyerProtectionEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalBuyerProtectionEnabled", $value);
        }
        $value = $this->getBuyerGuaranteeEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerGuaranteeEnabled", $value);
        }
        $value = $this->getCombinedFixedPriceTreatmentEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CombinedFixedPriceTreatmentEnabled", $value);
        }
        $value = $this->getGalleryFeaturedDurations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GalleryFeaturedDurations", $value);
        }
        $value = $this->getINEscrowWorkflowTimeline();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}INEscrowWorkflowTimeline", $value);
        }
        $value = $this->getPayPalRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalRequired", $value);
        }
        $value = $this->getEBayMotorsProAdFormatEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAdFormatEnabled", $value);
        }
        $value = $this->getEBayMotorsProContactByPhoneEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByPhoneEnabled", $value);
        }
        $value = $this->getEBayMotorsProPhoneCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProPhoneCount", $value);
        }
        $value = $this->getEBayMotorsProContactByAddressEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByAddressEnabled", $value);
        }
        $value = $this->getEBayMotorsProStreetCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProStreetCount", $value);
        }
        $value = $this->getEBayMotorsProCompanyNameEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProCompanyNameEnabled", $value);
        }
        $value = $this->getEBayMotorsProContactByEmailEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByEmailEnabled", $value);
        }
        $value = $this->getEBayMotorsProBestOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProBestOfferEnabled", $value);
        }
        $value = $this->getEBayMotorsProAutoAcceptEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAutoAcceptEnabled", $value);
        }
        $value = $this->getEBayMotorsProAutoDeclineEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAutoDeclineEnabled", $value);
        }
        $value = $this->getEBayMotorsProPaymentMethodCheckOutEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProPaymentMethodCheckOutEnabled", $value);
        }
        $value = $this->getEBayMotorsProShippingMethodEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProShippingMethodEnabled", $value);
        }
        $value = $this->getEBayMotorsProCounterOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProCounterOfferEnabled", $value);
        }
        $value = $this->getEBayMotorsProSellerContactDetailsEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayMotorsProSellerContactDetailsEnabled", $value);
        }
        $value = $this->getLocalMarketAdFormatEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketAdFormatEnabled", $value);
        }
        $value = $this->getLocalMarketContactByPhoneEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByPhoneEnabled", $value);
        }
        $value = $this->getLocalMarketPhoneCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketPhoneCount", $value);
        }
        $value = $this->getLocalMarketContactByAddressEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByAddressEnabled", $value);
        }
        $value = $this->getLocalMarketStreetCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketStreetCount", $value);
        }
        $value = $this->getLocalMarketCompanyNameEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketCompanyNameEnabled", $value);
        }
        $value = $this->getLocalMarketContactByEmailEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByEmailEnabled", $value);
        }
        $value = $this->getLocalMarketBestOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketBestOfferEnabled", $value);
        }
        $value = $this->getLocalMarketAutoAcceptEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketAutoAcceptEnabled", $value);
        }
        $value = $this->getLocalMarketAutoDeclineEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketAutoDeclineEnabled", $value);
        }
        $value = $this->getLocalMarketPaymentMethodCheckOutEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketPaymentMethodCheckOutEnabled", $value);
        }
        $value = $this->getLocalMarketShippingMethodEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketShippingMethodEnabled", $value);
        }
        $value = $this->getLocalMarketCounterOfferEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketCounterOfferEnabled", $value);
        }
        $value = $this->getLocalMarketSellerContactDetailsEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalMarketSellerContactDetailsEnabled", $value);
        }
        $value = $this->getClassifiedAdPhoneCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPhoneCount", $value);
        }
        $value = $this->getClassifiedAdContactByAddressEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByAddressEnabled", $value);
        }
        $value = $this->getClassifiedAdStreetCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdStreetCount", $value);
        }
        $value = $this->getClassifiedAdCompanyNameEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdCompanyNameEnabled", $value);
        }
        $value = $this->getSpecialitySubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SpecialitySubscription", $value);
        }
        $value = $this->getRegularSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RegularSubscription", $value);
        }
        $value = $this->getPremiumSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PremiumSubscription", $value);
        }
        $value = $this->getNonSubscription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NonSubscription", $value);
        }
        $value = $this->getReturnPolicyEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnPolicyEnabled", $value);
        }
        $value = $this->getHandlingTimeEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HandlingTimeEnabled", $value);
        }
        $value = $this->getPayPalRequiredForStoreOwner();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalRequiredForStoreOwner", $value);
        }
        $value = $this->getReviseQuantityAllowed();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviseQuantityAllowed", $value);
        }
        $value = $this->getRevisePriceAllowed();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RevisePriceAllowed", $value);
        }
        $value = $this->getStoreOwnerExtendedListingDurationsEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreOwnerExtendedListingDurationsEnabled", $value);
        }
        $value = $this->getStoreOwnerExtendedListingDurations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreOwnerExtendedListingDurations", $value);
        }
        $value = $this->getPaymentMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentMethod", $value);
        }
        $value = $this->getGroup1MaxFlatShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Group1MaxFlatShippingCost", $value);
        }
        $value = $this->getGroup2MaxFlatShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Group2MaxFlatShippingCost", $value);
        }
        $value = $this->getGroup3MaxFlatShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Group3MaxFlatShippingCost", $value);
        }
        $value = $this->getMaxFlatShippingCostCBTExempt();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxFlatShippingCostCBTExempt", $value);
        }
        $value = $this->getMaxFlatShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxFlatShippingCost", $value);
        }
        $value = $this->getVariationsEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationsEnabled", $value);
        }
        $value = $this->getAttributeConversionEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AttributeConversionEnabled", $value);
        }
        $value = $this->getFreeGalleryPlusEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FreeGalleryPlusEnabled", $value);
        }
        $value = $this->getFreePicturePackEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FreePicturePackEnabled", $value);
        }
        $value = $this->getItemCompatibilityEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityEnabled", $value);
        }
        $value = $this->getMaxItemCompatibility();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxItemCompatibility", $value);
        }
        $value = $this->getMinItemCompatibility();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinItemCompatibility", $value);
        }
        $value = $this->getConditionEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionEnabled", $value);
        }
        $value = $this->getConditionValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionValues", $value);
        }
        $value = $this->getValueCategory();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValueCategory", $value);
        }
        $value = $this->getProductCreationEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductCreationEnabled", $value);
        }
        $value = $this->getEANEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EANEnabled", $value);
        }
        $value = $this->getISBNEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ISBNEnabled", $value);
        }
        $value = $this->getUPCEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UPCEnabled", $value);
        }
        $value = $this->getCompatibleVehicleType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CompatibleVehicleType", $value);
        }
        $value = $this->getMaxGranularFitmentCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxGranularFitmentCount", $value);
        }
        $value = $this->getPaymentOptionsGroup();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentOptionsGroup", $value);
        }
        $value = $this->getShippingProfileCategoryGroup();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingProfileCategoryGroup", $value);
        }
        $value = $this->getPaymentProfileCategoryGroup();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentProfileCategoryGroup", $value);
        }
        $value = $this->getReturnPolicyProfileCategoryGroup();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnPolicyProfileCategoryGroup", $value);
        }
        $value = $this->getVINSupported();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VINSupported", $value);
        }
        $value = $this->getVRMSupported();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VRMSupported", $value);
        }
        $value = $this->getSellerProvidedTitleSupported();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerProvidedTitleSupported", $value);
        }
        $value = $this->getDepositSupported();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DepositSupported", $value);
        }
        $value = $this->getGlobalShippingEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GlobalShippingEnabled", $value);
        }
        $value = $this->getAdditionalCompatibilityEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdditionalCompatibilityEnabled", $value);
        }
        $value = $this->getPickupDropOffEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupDropOffEnabled", $value);
        }
        $value = $this->getDigitalGoodDeliveryEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DigitalGoodDeliveryEnabled", $value);
        }
        $value = $this->getEpidSupported();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EpidSupported", $value);
        }
        $value = $this->getKTypeSupported();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}KTypeSupported", $value);
        }
        $value = $this->getProductRequiredEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductRequiredEnabled", $value);
        }
        $value = $this->getDomesticReturnsAcceptedValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticReturnsAcceptedValues", $value);
        }
        $value = $this->getInternationalReturnsAcceptedValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsAcceptedValues", $value);
        }
        $value = $this->getDomesticReturnsDurationValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticReturnsDurationValues", $value);
        }
        $value = $this->getInternationalReturnsDurationValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsDurationValues", $value);
        }
        $value = $this->getDomesticReturnsShipmentPayeeValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticReturnsShipmentPayeeValues", $value);
        }
        $value = $this->getInternationalReturnsShipmentPayeeValues();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsShipmentPayeeValues", $value);
        }
        $value = $this->getDomesticRefundMethodValues();
        if (null !== $value && !empty($this->getDomesticRefundMethodValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticRefundMethodValues", array_map(function ($v) {
                return ["DomesticRefundMethod" => $v];
            }, $value));
        }
        $value = $this->getInternationalRefundMethodValues();
        if (null !== $value && !empty($this->getInternationalRefundMethodValues())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalRefundMethodValues", array_map(function ($v) {
                return ["InternationalRefundMethod" => $v];
            }, $value));
        }
        $value = $this->getReturnPolicyDescriptionEnabled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnPolicyDescriptionEnabled", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingDurations');
        if (null !== $value) {
            $this->setListingDurations(\Nogrod\eBaySDK\MerchantData\ListingDurationDefinitionsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingTermsRequired');
        if (null !== $value) {
            $this->setShippingTermsRequired(\Nogrod\eBaySDK\MerchantData\ShippingTermRequiredDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled');
        if (null !== $value) {
            $this->setBestOfferEnabled(\Nogrod\eBaySDK\MerchantData\BestOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DutchBINEnabled');
        if (null !== $value) {
            $this->setDutchBINEnabled(\Nogrod\eBaySDK\MerchantData\DutchBINEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserConsentRequired');
        if (null !== $value) {
            $this->setUserConsentRequired(\Nogrod\eBaySDK\MerchantData\UserConsentRequiredDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HomePageFeaturedEnabled');
        if (null !== $value) {
            $this->setHomePageFeaturedEnabled(\Nogrod\eBaySDK\MerchantData\HomePageFeaturedEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProPackEnabled');
        if (null !== $value) {
            $this->setProPackEnabled(\Nogrod\eBaySDK\MerchantData\ProPackEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BasicUpgradePackEnabled');
        if (null !== $value) {
            $this->setBasicUpgradePackEnabled(\Nogrod\eBaySDK\MerchantData\BasicUpgradePackEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValuePackEnabled');
        if (null !== $value) {
            $this->setValuePackEnabled(\Nogrod\eBaySDK\MerchantData\ValuePackEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProPackPlusEnabled');
        if (null !== $value) {
            $this->setProPackPlusEnabled(\Nogrod\eBaySDK\MerchantData\ProPackPlusEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdFormatEnabled');
        if (null !== $value) {
            $this->setAdFormatEnabled(\Nogrod\eBaySDK\MerchantData\AdFormatEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferCounterEnabled');
        if (null !== $value) {
            $this->setBestOfferCounterEnabled(\Nogrod\eBaySDK\MerchantData\BestOfferCounterEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferAutoDeclineEnabled');
        if (null !== $value) {
            $this->setBestOfferAutoDeclineEnabled(\Nogrod\eBaySDK\MerchantData\BestOfferAutoDeclineEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketSpecialitySubscription');
        if (null !== $value) {
            $this->setLocalMarketSpecialitySubscription(\Nogrod\eBaySDK\MerchantData\LocalMarketSpecialitySubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketRegularSubscription');
        if (null !== $value) {
            $this->setLocalMarketRegularSubscription(\Nogrod\eBaySDK\MerchantData\LocalMarketRegularSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketPremiumSubscription');
        if (null !== $value) {
            $this->setLocalMarketPremiumSubscription(\Nogrod\eBaySDK\MerchantData\LocalMarketPremiumSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketNonSubscription');
        if (null !== $value) {
            $this->setLocalMarketNonSubscription(\Nogrod\eBaySDK\MerchantData\LocalMarketNonSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressEnabled');
        if (null !== $value) {
            $this->setExpressEnabled(\Nogrod\eBaySDK\MerchantData\ExpressEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressPicturesRequired');
        if (null !== $value) {
            $this->setExpressPicturesRequired(\Nogrod\eBaySDK\MerchantData\ExpressPicturesRequiredDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressConditionRequired');
        if (null !== $value) {
            $this->setExpressConditionRequired(\Nogrod\eBaySDK\MerchantData\ExpressConditionRequiredDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumReservePrice');
        if (null !== $value) {
            $this->setMinimumReservePrice(\Nogrod\eBaySDK\MerchantData\MinimumReservePriceDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionConfirmationRequestEnabled');
        if (null !== $value) {
            $this->setTransactionConfirmationRequestEnabled(\Nogrod\eBaySDK\MerchantData\TCREnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerContactDetailsEnabled');
        if (null !== $value) {
            $this->setSellerContactDetailsEnabled(\Nogrod\eBaySDK\MerchantData\SellerContactDetailsEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreInventoryEnabled');
        if (null !== $value) {
            $this->setStoreInventoryEnabled(\Nogrod\eBaySDK\MerchantData\StoreInventoryEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SkypeMeTransactionalEnabled');
        if (null !== $value) {
            $this->setSkypeMeTransactionalEnabled(\Nogrod\eBaySDK\MerchantData\SkypeMeTransactionalEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SkypeMeNonTransactionalEnabled');
        if (null !== $value) {
            $this->setSkypeMeNonTransactionalEnabled(\Nogrod\eBaySDK\MerchantData\SkypeMeNonTransactionalEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesRegular');
        if (null !== $value) {
            $this->setLocalListingDistancesRegular(\Nogrod\eBaySDK\MerchantData\LocalListingDistancesRegularDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesSpecialty');
        if (null !== $value) {
            $this->setLocalListingDistancesSpecialty(\Nogrod\eBaySDK\MerchantData\LocalListingDistancesSpecialtyDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalListingDistancesNonSubscription');
        if (null !== $value) {
            $this->setLocalListingDistancesNonSubscription(\Nogrod\eBaySDK\MerchantData\LocalListingDistancesNonSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPaymentMethodEnabled');
        if (null !== $value) {
            $this->setClassifiedAdPaymentMethodEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdPaymentMethodEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdShippingMethodEnabled');
        if (null !== $value) {
            $this->setClassifiedAdShippingMethodEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdShippingMethodEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdBestOfferEnabled');
        if (null !== $value) {
            $this->setClassifiedAdBestOfferEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdBestOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdCounterOfferEnabled');
        if (null !== $value) {
            $this->setClassifiedAdCounterOfferEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdCounterOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdAutoDeclineEnabled');
        if (null !== $value) {
            $this->setClassifiedAdAutoDeclineEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdAutoDeclineEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByPhoneEnabled');
        if (null !== $value) {
            $this->setClassifiedAdContactByPhoneEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByPhoneEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByEmailEnabled');
        if (null !== $value) {
            $this->setClassifiedAdContactByEmailEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByEmailEnabledDefintionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SafePaymentRequired');
        if (null !== $value) {
            $this->setSafePaymentRequired(\Nogrod\eBaySDK\MerchantData\SafePaymentRequiredDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPayPerLeadEnabled');
        if (null !== $value) {
            $this->setClassifiedAdPayPerLeadEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdPayPerLeadEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemSpecificsEnabled');
        if (null !== $value) {
            $this->setItemSpecificsEnabled(\Nogrod\eBaySDK\MerchantData\ItemSpecificsEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaisaPayFullEscrowEnabled');
        if (null !== $value) {
            $this->setPaisaPayFullEscrowEnabled(\Nogrod\eBaySDK\MerchantData\PaisaPayFullEscrowEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ISBNIdentifierEnabled');
        if (null !== $value) {
            $this->setISBNIdentifierEnabled(\Nogrod\eBaySDK\MerchantData\ISBNIdentifierEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UPCIdentifierEnabled');
        if (null !== $value) {
            $this->setUPCIdentifierEnabled(\Nogrod\eBaySDK\MerchantData\UPCIdentifierEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EANIdentifierEnabled');
        if (null !== $value) {
            $this->setEANIdentifierEnabled(\Nogrod\eBaySDK\MerchantData\EANIdentifierEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BrandMPNIdentifierEnabled');
        if (null !== $value) {
            $this->setBrandMPNIdentifierEnabled(\Nogrod\eBaySDK\MerchantData\BrandMPNIdentifierEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferAutoAcceptEnabled');
        if (null !== $value) {
            $this->setBestOfferAutoAcceptEnabled(\Nogrod\eBaySDK\MerchantData\BestOfferAutoAcceptEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdAutoAcceptEnabled');
        if (null !== $value) {
            $this->setClassifiedAdAutoAcceptEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdAutoAcceptEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeNorthAmericaEnabled');
        if (null !== $value) {
            $this->setCrossBorderTradeNorthAmericaEnabled(\Nogrod\eBaySDK\MerchantData\CrossBorderTradeNorthAmericaEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeGBEnabled');
        if (null !== $value) {
            $this->setCrossBorderTradeGBEnabled(\Nogrod\eBaySDK\MerchantData\CrossBorderTradeGBEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossBorderTradeAustraliaEnabled');
        if (null !== $value) {
            $this->setCrossBorderTradeAustraliaEnabled(\Nogrod\eBaySDK\MerchantData\CrossBorderTradeAustraliaEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalBuyerProtectionEnabled');
        if (null !== $value) {
            $this->setPayPalBuyerProtectionEnabled(\Nogrod\eBaySDK\MerchantData\PayPalBuyerProtectionEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerGuaranteeEnabled');
        if (null !== $value) {
            $this->setBuyerGuaranteeEnabled(\Nogrod\eBaySDK\MerchantData\BuyerGuaranteeEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CombinedFixedPriceTreatmentEnabled');
        if (null !== $value) {
            $this->setCombinedFixedPriceTreatmentEnabled(\Nogrod\eBaySDK\MerchantData\CombinedFixedPriceTreatmentEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GalleryFeaturedDurations');
        if (null !== $value) {
            $this->setGalleryFeaturedDurations(\Nogrod\eBaySDK\MerchantData\ListingEnhancementDurationDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}INEscrowWorkflowTimeline');
        if (null !== $value) {
            $this->setINEscrowWorkflowTimeline(\Nogrod\eBaySDK\MerchantData\INEscrowWorkflowTimelineDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalRequired');
        if (null !== $value) {
            $this->setPayPalRequired(\Nogrod\eBaySDK\MerchantData\PayPalRequiredDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAdFormatEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProAdFormatEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProAdFormatEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByPhoneEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProContactByPhoneEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByPhoneEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProPhoneCount');
        if (null !== $value) {
            $this->setEBayMotorsProPhoneCount(\Nogrod\eBaySDK\MerchantData\EBayMotorsProPhoneCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByAddressEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProContactByAddressEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByAddressEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProStreetCount');
        if (null !== $value) {
            $this->setEBayMotorsProStreetCount(\Nogrod\eBaySDK\MerchantData\EBayMotorsProStreetCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProCompanyNameEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProCompanyNameEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProCompanyNameEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProContactByEmailEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProContactByEmailEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProContactByEmailEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProBestOfferEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProBestOfferEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProBestOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAutoAcceptEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProAutoAcceptEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProAutoAcceptEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProAutoDeclineEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProAutoDeclineEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProAutoDeclineEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProPaymentMethodCheckOutEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProPaymentMethodCheckOutEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProShippingMethodEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProShippingMethodEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProShippingMethodEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProCounterOfferEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProCounterOfferEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProCounterOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayMotorsProSellerContactDetailsEnabled');
        if (null !== $value) {
            $this->setEBayMotorsProSellerContactDetailsEnabled(\Nogrod\eBaySDK\MerchantData\EBayMotorsProSellerContactDetailsEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketAdFormatEnabled');
        if (null !== $value) {
            $this->setLocalMarketAdFormatEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketAdFormatEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByPhoneEnabled');
        if (null !== $value) {
            $this->setLocalMarketContactByPhoneEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketContactByPhoneEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketPhoneCount');
        if (null !== $value) {
            $this->setLocalMarketPhoneCount(\Nogrod\eBaySDK\MerchantData\LocalMarketPhoneCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByAddressEnabled');
        if (null !== $value) {
            $this->setLocalMarketContactByAddressEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketContactByAddressEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketStreetCount');
        if (null !== $value) {
            $this->setLocalMarketStreetCount(\Nogrod\eBaySDK\MerchantData\LocalMarketStreetCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketCompanyNameEnabled');
        if (null !== $value) {
            $this->setLocalMarketCompanyNameEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketCompanyNameEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketContactByEmailEnabled');
        if (null !== $value) {
            $this->setLocalMarketContactByEmailEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketContactByEmailEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketBestOfferEnabled');
        if (null !== $value) {
            $this->setLocalMarketBestOfferEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketBestOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketAutoAcceptEnabled');
        if (null !== $value) {
            $this->setLocalMarketAutoAcceptEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketAutoAcceptEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketAutoDeclineEnabled');
        if (null !== $value) {
            $this->setLocalMarketAutoDeclineEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketAutoDeclineEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketPaymentMethodCheckOutEnabled');
        if (null !== $value) {
            $this->setLocalMarketPaymentMethodCheckOutEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketPaymentMethodCheckOutEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketShippingMethodEnabled');
        if (null !== $value) {
            $this->setLocalMarketShippingMethodEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketShippingMethodEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketCounterOfferEnabled');
        if (null !== $value) {
            $this->setLocalMarketCounterOfferEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketCounterOfferEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalMarketSellerContactDetailsEnabled');
        if (null !== $value) {
            $this->setLocalMarketSellerContactDetailsEnabled(\Nogrod\eBaySDK\MerchantData\LocalMarketSellerContactDetailsEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPhoneCount');
        if (null !== $value) {
            $this->setClassifiedAdPhoneCount(\Nogrod\eBaySDK\MerchantData\ClassifiedAdPhoneCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByAddressEnabled');
        if (null !== $value) {
            $this->setClassifiedAdContactByAddressEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdContactByAddressEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdStreetCount');
        if (null !== $value) {
            $this->setClassifiedAdStreetCount(\Nogrod\eBaySDK\MerchantData\ClassifiedAdStreetCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdCompanyNameEnabled');
        if (null !== $value) {
            $this->setClassifiedAdCompanyNameEnabled(\Nogrod\eBaySDK\MerchantData\ClassifiedAdCompanyNameEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SpecialitySubscription');
        if (null !== $value) {
            $this->setSpecialitySubscription(\Nogrod\eBaySDK\MerchantData\SpecialitySubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegularSubscription');
        if (null !== $value) {
            $this->setRegularSubscription(\Nogrod\eBaySDK\MerchantData\RegularSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PremiumSubscription');
        if (null !== $value) {
            $this->setPremiumSubscription(\Nogrod\eBaySDK\MerchantData\PremiumSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NonSubscription');
        if (null !== $value) {
            $this->setNonSubscription(\Nogrod\eBaySDK\MerchantData\NonSubscriptionDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnPolicyEnabled');
        if (null !== $value) {
            $this->setReturnPolicyEnabled(\Nogrod\eBaySDK\MerchantData\ReturnPolicyEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HandlingTimeEnabled');
        if (null !== $value) {
            $this->setHandlingTimeEnabled(\Nogrod\eBaySDK\MerchantData\HandlingTimeEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalRequiredForStoreOwner');
        if (null !== $value) {
            $this->setPayPalRequiredForStoreOwner(\Nogrod\eBaySDK\MerchantData\PayPalRequiredForStoreOwnerDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseQuantityAllowed');
        if (null !== $value) {
            $this->setReviseQuantityAllowed(\Nogrod\eBaySDK\MerchantData\ReviseQuantityAllowedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RevisePriceAllowed');
        if (null !== $value) {
            $this->setRevisePriceAllowed(\Nogrod\eBaySDK\MerchantData\RevisePriceAllowedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreOwnerExtendedListingDurationsEnabled');
        if (null !== $value) {
            $this->setStoreOwnerExtendedListingDurationsEnabled(\Nogrod\eBaySDK\MerchantData\StoreOwnerExtendedListingDurationsEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreOwnerExtendedListingDurations');
        if (null !== $value) {
            $this->setStoreOwnerExtendedListingDurations(\Nogrod\eBaySDK\MerchantData\StoreOwnerExtendedListingDurationsDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethod');
        if (null !== $value) {
            $this->setPaymentMethod(\Nogrod\eBaySDK\MerchantData\PaymentMethodDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Group1MaxFlatShippingCost');
        if (null !== $value) {
            $this->setGroup1MaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\Group1MaxFlatShippingCostDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Group2MaxFlatShippingCost');
        if (null !== $value) {
            $this->setGroup2MaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\Group2MaxFlatShippingCostDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Group3MaxFlatShippingCost');
        if (null !== $value) {
            $this->setGroup3MaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\Group3MaxFlatShippingCostDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxFlatShippingCostCBTExempt');
        if (null !== $value) {
            $this->setMaxFlatShippingCostCBTExempt(\Nogrod\eBaySDK\MerchantData\MaxFlatShippingCostCBTExemptDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxFlatShippingCost');
        if (null !== $value) {
            $this->setMaxFlatShippingCost(\Nogrod\eBaySDK\MerchantData\MaxFlatShippingCostDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationsEnabled');
        if (null !== $value) {
            $this->setVariationsEnabled(\Nogrod\eBaySDK\MerchantData\VariationsEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeConversionEnabled');
        if (null !== $value) {
            $this->setAttributeConversionEnabled(\Nogrod\eBaySDK\MerchantData\AttributeConversionEnabledFeatureDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FreeGalleryPlusEnabled');
        if (null !== $value) {
            $this->setFreeGalleryPlusEnabled(\Nogrod\eBaySDK\MerchantData\FreeGalleryPlusEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FreePicturePackEnabled');
        if (null !== $value) {
            $this->setFreePicturePackEnabled(\Nogrod\eBaySDK\MerchantData\FreePicturePackEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityEnabled');
        if (null !== $value) {
            $this->setItemCompatibilityEnabled(\Nogrod\eBaySDK\MerchantData\ItemCompatibilityEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxItemCompatibility');
        if (null !== $value) {
            $this->setMaxItemCompatibility(\Nogrod\eBaySDK\MerchantData\MaxItemCompatibilityDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinItemCompatibility');
        if (null !== $value) {
            $this->setMinItemCompatibility(\Nogrod\eBaySDK\MerchantData\MinItemCompatibilityDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionEnabled');
        if (null !== $value) {
            $this->setConditionEnabled(\Nogrod\eBaySDK\MerchantData\ConditionEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionValues');
        if (null !== $value) {
            $this->setConditionValues(\Nogrod\eBaySDK\MerchantData\ConditionValuesDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValueCategory');
        if (null !== $value) {
            $this->setValueCategory(\Nogrod\eBaySDK\MerchantData\ValueCategoryDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductCreationEnabled');
        if (null !== $value) {
            $this->setProductCreationEnabled(\Nogrod\eBaySDK\MerchantData\ProductCreationEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EANEnabled');
        if (null !== $value) {
            $this->setEANEnabled(\Nogrod\eBaySDK\MerchantData\EANEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ISBNEnabled');
        if (null !== $value) {
            $this->setISBNEnabled(\Nogrod\eBaySDK\MerchantData\ISBNEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UPCEnabled');
        if (null !== $value) {
            $this->setUPCEnabled(\Nogrod\eBaySDK\MerchantData\UPCEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CompatibleVehicleType');
        if (null !== $value) {
            $this->setCompatibleVehicleType(\Nogrod\eBaySDK\MerchantData\CompatibleVehicleTypeDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxGranularFitmentCount');
        if (null !== $value) {
            $this->setMaxGranularFitmentCount(\Nogrod\eBaySDK\MerchantData\MaxGranularFitmentCountDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentOptionsGroup');
        if (null !== $value) {
            $this->setPaymentOptionsGroup(\Nogrod\eBaySDK\MerchantData\PaymentOptionsGroupEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingProfileCategoryGroup');
        if (null !== $value) {
            $this->setShippingProfileCategoryGroup(\Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentProfileCategoryGroup');
        if (null !== $value) {
            $this->setPaymentProfileCategoryGroup(\Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnPolicyProfileCategoryGroup');
        if (null !== $value) {
            $this->setReturnPolicyProfileCategoryGroup(\Nogrod\eBaySDK\MerchantData\ProfileCategoryGroupDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VINSupported');
        if (null !== $value) {
            $this->setVINSupported(\Nogrod\eBaySDK\MerchantData\VINSupportedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VRMSupported');
        if (null !== $value) {
            $this->setVRMSupported(\Nogrod\eBaySDK\MerchantData\VRMSupportedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerProvidedTitleSupported');
        if (null !== $value) {
            $this->setSellerProvidedTitleSupported(\Nogrod\eBaySDK\MerchantData\SellerProvidedTitleSupportedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DepositSupported');
        if (null !== $value) {
            $this->setDepositSupported(\Nogrod\eBaySDK\MerchantData\DepositSupportedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GlobalShippingEnabled');
        if (null !== $value) {
            $this->setGlobalShippingEnabled(\Nogrod\eBaySDK\MerchantData\GlobalShippingEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdditionalCompatibilityEnabled');
        if (null !== $value) {
            $this->setAdditionalCompatibilityEnabled(\Nogrod\eBaySDK\MerchantData\AdditionalCompatibilityEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupDropOffEnabled');
        if (null !== $value) {
            $this->setPickupDropOffEnabled(\Nogrod\eBaySDK\MerchantData\PickupDropOffEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DigitalGoodDeliveryEnabled');
        if (null !== $value) {
            $this->setDigitalGoodDeliveryEnabled(\Nogrod\eBaySDK\MerchantData\DigitalGoodDeliveryEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EpidSupported');
        if (null !== $value) {
            $this->setEpidSupported(\Nogrod\eBaySDK\MerchantData\EpidSupportedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}KTypeSupported');
        if (null !== $value) {
            $this->setKTypeSupported(\Nogrod\eBaySDK\MerchantData\KTypeSupportedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductRequiredEnabled');
        if (null !== $value) {
            $this->setProductRequiredEnabled(\Nogrod\eBaySDK\MerchantData\ProductRequiredEnabledDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticReturnsAcceptedValues');
        if (null !== $value) {
            $this->setDomesticReturnsAcceptedValues(\Nogrod\eBaySDK\MerchantData\DomesticReturnsAcceptedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsAcceptedValues');
        if (null !== $value) {
            $this->setInternationalReturnsAcceptedValues(\Nogrod\eBaySDK\MerchantData\InternationalReturnsAcceptedDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticReturnsDurationValues');
        if (null !== $value) {
            $this->setDomesticReturnsDurationValues(\Nogrod\eBaySDK\MerchantData\DomesticReturnsDurationDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsDurationValues');
        if (null !== $value) {
            $this->setInternationalReturnsDurationValues(\Nogrod\eBaySDK\MerchantData\InternationalReturnsDurationDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticReturnsShipmentPayeeValues');
        if (null !== $value) {
            $this->setDomesticReturnsShipmentPayeeValues(\Nogrod\eBaySDK\MerchantData\DomesticReturnsShipmentPayeeDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsShipmentPayeeValues');
        if (null !== $value) {
            $this->setInternationalReturnsShipmentPayeeValues(\Nogrod\eBaySDK\MerchantData\InternationalReturnsShipmentPayeeDefinitionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticRefundMethodValues', true);
        if (null !== $value && !empty($value)) {
            $this->setDomesticRefundMethodValues($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalRefundMethodValues', true);
        if (null !== $value && !empty($value)) {
            $this->setInternationalRefundMethodValues($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnPolicyDescriptionEnabled');
        if (null !== $value) {
            $this->setReturnPolicyDescriptionEnabled(\Nogrod\eBaySDK\MerchantData\ReturnPolicyDescriptionEnabledDefinitionType::fromKeyValue($value));
        }
    }
}
