<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ItemType
 *
 * Contains the data defining one item. A seller populates an object of this type at listing time with the definition of a new item. A seller also uses an object of this type to relist or revise an item. Calls that retrieve item data (such as the <b>GetSellerList</b> call) return an object of this type, filled with the item's data.
 * XSD Type: ItemType
 */
class ItemType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Return custom, application-specific data associated with the item.
     *  The data you specify is stored by eBay with the item for your own
     *  reference, but it is not used by eBay in any way. Use
     *  <b>ApplicationData</b> to store special information for yourself, such as
     *  a part number. For a SKU in an eBay.com listing, use the <b>SKU</b>
     *  element instead. To remove this value when revising or relisting an
     *  item, use <b>DeletedField</b>.
     *
     * @var string $applicationData
     */
    private $applicationData = null;

    /**
     * This field has been deprecated, and should no longer be used.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AttributeSetType[] $attributeSetArray
     */
    private $attributeSetArray = null;

    /**
     * This field has been deprecated, and should no longer be used.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AttributeType[] $attributeArray
     */
    private $attributeArray = null;

    /**
     * This field is deprecated, and should no longer be used.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LookupAttributeType[] $lookupAttributeArray
     */
    private $lookupAttributeArray = null;

    /**
     * If <code>true</code>, the seller requests immediate payment for the item.
     *  If <code>false</code> or not specified, immediate payment is not requested.
     *  (In responses, does not indicate whether the item is actually still a
     *  candidate for purchase via immediate payment.)<br>
     *  <br>
     *  Only applicable to items listed on PayPal-enabled sites
     *  in categories that support immediate payment (see <b>AutoPayEnabled</b> in
     *  <b>GetCategories</b>), or if the seller is opted into the new eBay Managed Payments program.
     *  <br>
     *  <br>
     *  To create an Immediate Payment listing, <b>AutoPay</b> must be <code>true</code>,
     *  <b>PayPalEmailAddress</b> must be a valid PayPal email address for the seller, and the only included
     *  <b>PaymentMethods</b> value must be <code>PayPal</code>.
     *  <br/><br/>
     *  For a non-Immediate Payment listing,
     *  the <b>AutoPay</b> flag is not required since it defaults to <code>false</code>.
     *
     * @var bool $autoPay
     */
    private $autoPay = null;

    /**
     * Detailed information about a bid. For <b>GetMyeBayBuying</b>, returned as a self-closed element if no bids meet the request criteria.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BiddingDetailsType $biddingDetails
     */
    private $biddingDetails = null;

    /**
     * Flag to indicate an item's eligibility for the PayPal Buyer Protection
     *  program. This field is only returned if <code>true</code>. If this field is not returned, the item is not eligible for PayPal Buyer Protection. For more information on
     *  items that are eligible for PayPal Buyer Protection, see the
     *  <a href="https://pages.ebay.com/help/buy/paypal-buyer-protection.html#paypal">PayPal Buyer Protection</a> help page.
     *
     * @var string $buyerProtection
     */
    private $buyerProtection = null;

    /**
     * This field is only applicable for auction listings. By specifying a 'Buy It Now' price, a seller is allowing prospective buyers the opportunity to purchase the item in the auction listing at this price immediately. When a buyer uses the 'Buy It Now' option to purchase the item, the auction listing will end immediately.
     *  <br/><br/>
     *  By including this field and specifying a 'Buy It Now' price, the seller is enabling the 'Buy It Now' feature on the auction listing. If the seller includes this field for any other listing type other than an auction, this field and its price will just be ignored.
     *  <br/><br/>
     *  The price in this field must be at least 30 percent higher than the starting bid price (which is specified in an Add call through the <b>Item.StartPrice</b> field). Once a bid is made on an auction listing, and the bid meets or exceeds the <b>Item.ReservePrice</b> value (if set), the 'Buy It Now' option becomes unavailable, and this field will no longer be applicable. If there is no Reserve Price, the first bid will nullify the 'Buy It Now' option.
     *  <br><br>
     *  Keep in mind that <b>GetItem</b> (and other 'Get' calls that retrieve the Item details) may still return the <b>BuyItNowPrice</b> field for an auction item even if the 'Buy It Now' option is no longer available. Instead, a user should look for the <b>ListingDetails.BuyItNowAvailable</b> boolean field in the <b>GetItem</b> response to determine if the 'Buy It Now' option is still available for the auction item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For the US site, new eBay sellers are subject to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-Policies.html#SellerLimits">Seller Limits</a>, which limit the quantity of items that may be listed and/or the total cumulative value of these listings. While subject to these selling limits, an eBay seller can use the <b>GetMyeBaySelling</b> call to retrieve both the remaining number of listings they can create and the remaining cumulative value of these listings. These values are shown in the <b>Summary.QuantityLimitRemaining</b> and <b>Summary.AmountLimitRemaining</b> fields in the <b>GetMyeBaySelling</b> response. If a call to add an item or revise an item would result in the exceeding of these limits, the add item or revise item call will fail. These fields will only be returned if the seller is subject to seller limits.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $buyItNowPrice
     */
    private $buyItNowPrice = null;

    /**
     * <span class="tablenote"><b>Note: </b> This field's value now defaults to <code>true</code> if this field is omitted. Previously, the default value was <code>false</code>, so a user had to include this field and set it to <code>true</code> in order for eBay to map an outdated Primary or Secondary Category ID to the updated Category ID.
     *  </span>
     *  This boolean field controls whether or not eBay automatically maps outdated Category ID(s) specified in a
     *  <b>PrimaryCategory</b> and/or <b>SecondaryCategory</b> container(s) to the updatd Category ID(s) no longer exists in the
     *  current category structure: If you pass a value of <code>true</code> in
     *  <b>CategoryMappingAllowed</b> or just omit the field, eBay will look up the current Category ID(s) that have replaced the specified Category ID(s). If you pass a value of <code>false</code>, eBay will not do any mapping, and the call may fail if specified Category ID(s) are no longer valid IDs for a eBay leaf category. The new Category ID(s) will be returned in the <b>CategoryID</b> and <b>Category2ID</b> fields (if secondary category is used) of the Add/Revise/Relist call response.
     *  <br/><br/>
     *
     * @var bool $categoryMappingAllowed
     */
    private $categoryMappingAllowed = null;

    /**
     * This container identifies the nonprofit organization that will benefit with a percentage of the proceeds from the sale of an item through an auction or fixed-price listing. Charity names and IDs can be found by going to <a href="https://charity.ebay.com/charity-auctions/my-causes" target="_blank">eBay for Charity</a> page and doing a search for a charity registered with the PayPal Giving Fund. The donation percentage can be set in 5 percent increments from 10 percent to 100 percent. If a benefitting charity is specified, the seller must also accept PayPal as a payment method for the item (see <b>Item.PaymentMethods</b>).
     *  <br><br>
     *  When it comes to revising an auction or fixed-price listing, you can add a benefitting charity (as long as there is at least 12 hours left before end of listing/close of auction), but you cannot remove or change a nonprofit company once one is already established in the original listing.
     *  <br><br>
     *  <b>For Revise calls</b>: The non-profit organization and donation percentage can now be modified in a Revise call as long as there are no active bids on an auction listing, or no pending Best Offers/Counter Offers on a listing.
     *  <br><br>
     *  This container will only be returned in Get calls for listings that will benefit a nonprofit organization if the item sells.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CharityType $charity
     */
    private $charity = null;

    /**
     * This two-digit enumeration value indicates the country of the seller's registration address. <b>CountryCodeType</b> defines the supported values. The <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GeteBayDetails.html">GeteBayDetails</a> call can also be used (include the <b>DetailName</b> field and set its value to <b>CountryDetails</b>) to see the full list of supported country codes.
     *  <br><br>
     *  In an Add/Revise/Relist/Verify call, this field is required.
     *
     * @var string $country
     */
    private $country = null;

    /**
     * This field is deprecated, and should not longer be used.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CrossPromotionsType $crossPromotion
     */
    private $crossPromotion = null;

    /**
     * In an Add/Revise/Relist/Verify call, this required three-digit enumeration value defines the currency associated with the listing site. The item price and all costs passed in the call request will be using this currency. Similarly, the listing fees and other cost-related data will be using this currency. Since the Trading API can only be used for a select number of eBay sites, only a subset of values are supporting when adding/revising/relisting an item. These supported values are discussed in the top section of <b>CurrencyCodeType</b>.
     *  <br><br>
     *  In 'Get' calls, it is possible that any of the values in <b>CurrencyCodeType</b> may appear, as some cost-related fields will show the buyer's currency type.
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * The seller's description of the item.
     *  In listing requests, you can submit your description
     *  using CDATA if you want to use HTML or XML-reserved characters in the
     *  description. However, a seller can not use any active content in their listing description. Active content includes animation or video via JavaScript, Flash, plug-ins, or form actions. All active content will be blocked/removed from a listing. Removing/blocking active content will lead to faster load times of listings, make listings more mobile-friendly, improve SEO performance, and lead to a more secure eBay Marketplace.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> To ensure that their listing description is optimized when viewed on mobile devices, sellers should strongly consider using eBay's <a href="https://pages.ebay.com/sell/itemdescription/customizeyoursummary.html" target="_blank">View Item description summary feature</a> when listing their item. Using HTML div and span tag attributes, this feature allows sellers to customize and fully control the listing description that is displayed for prospective buyers when viewing the item on a mobile device. The listing description on mobile devices is limited to 800 characters, and whenever the listing description exceeds this limit, eBay uses a special algorithm to derive the best possible description within the 800-character limit. However, due to some description content being removed, it is definitely not ideal for the seller, and could possibly lead to a bad buyer experience and a Significantly not as described (SNAD) case, since the buyer may not get complete details on the item. See the eBay help page for more details on using the HTML div and span tags, and for more tips on creating listings that are mobile-friendly, see this <a href="https://pages.ebay.com/sell/itemdescription/mobilefriendlyguidelines.html" target="_blank">Best practices</a> document.
     *  </span>
     *  <br>
     *  In the listing description, sellers are only allowed to provide links to product videos, freight shipping services, or other legally required information, and when providing these links in the listing description, the secure 'https' protocol must be used instead of 'http'. In addition, any valid links to sites outside of eBay should use the <em>target="_blank"</em> attribute in the <b>a href</b> tag so a new browser window will be loaded when the link is clicked instead of buyers being redirected off of eBay. For more information on using links in the listing description, see eBay's <a href="http://pages.ebay.com/help/policies/listing-links.html" target="_blank">Links policy</a>. For more information about the stronger security standards that eBay is using, see the <a href="https://pages.ebay.com/seller-center/seller-updates/2018-fall/marketplace-update.html#use-secure-https" target="_blank">Use secure HTTPS for enhanced browser security</a> topic in the 2018 Fall Seller Update. The <a href="https://developer.ebay.com/api-docs/sell/compliance/resources/listing_violation/methods/getListingViolations" target="_blank">getListingViolations</a> method of the Compliance API can be used to see if any of the seller's active listings are not 'HTTPS' compliant.
     *  <br><br>
     *  If you embed pictures in the description (by using IMG tags) instead of using
     *  <b>PictureURL</b>, but you want a camera icon to appear in search and listing pages,
     *  specify the following null-image URL in the <b>PictureURL</b> field:
     *  https://pics.ebay.com/aw/pics/dot_clear.gif. See <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Pictures-InListing.html">Working with Pictures in an Item Listing</a> in the eBay Features Guide.
     *  <br><br>
     *  This field is conditionally required for all listings. The exception is when the seller specifies a product identifier, such as a GTIN or ePID, through the <b>ProductListingDetails</b> container and a product match is found in the eBay product catalog. If a matching product is found in the eBay product catalog, the item description will be created automatically (as long as the <b>ProductListingDetails.IncludeeBayProductDetails</b> value is <code>true</code>).
     *  <br>
     *
     * @var string $description
     */
    private $description = null;

    /**
     * This field is conditionally required if the listing is being revised through a Revise call, and the <b>Item.Description</b> field is one of the fields being changed. The enumeration value passed in this field specifies whether the text provided in the <b>Item.Description</b> field will prepend, append, or replace the existing text in the current <b>Item.Description</b> field.
     *
     * @var string $descriptionReviseMode
     */
    private $descriptionReviseMode = null;

    /**
     * This field is deprecated, and should no longer be used.
     *
     * @var \Nogrod\eBaySDK\MerchantData\DistanceType $distance
     */
    private $distance = null;

    /**
     * Indicates whether an optional hit counter is displayed on the item's listing
     *  page and, if so, what type. See <b>HitCounterCodeType</b> for specific values.
     *  <br/> Restriction: <HitCounter>HiddenStyle</HitCounter> is not enabled on the Germany, Austria, Switzerland, or Poland sites.
     *
     * @var string $hitCounter
     */
    private $hitCounter = null;

    /**
     * The unique identifier of the eBay listing. This identifier is generated
     *  by eBay and returned in the response of an Add call if an item is successfully listed. Once an item is successfully created, the <b>ItemID</b> cannot be modified. <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Although we represent
     *  item IDs as strings in the schema, we recommend you store them as 64-bit
     *  signed integers. If you choose to store item IDs as strings, allocate at
     *  least 19 characters (assuming decimal digits are used) to hold them. Your code should be prepared to
     *  handle IDs of up to 19 digits. </span>
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Various details about a listing, some of which are calculated or
     *  derived after the item is listed. These include the start and end
     *  time, converted (localized) prices, and certain flags that indicate
     *  whether the seller specified fields whose values are not visible to
     *  the requesting user. For <b>GetMyeBayBuying</b>, returned as a self-closed element if no listings meet the request criteria.
     *  <br/><br/>
     *  In an Add/Revise/Relist call, this container is used to set the Best Offer Auto-Accept and Best Offer Auto-Decline threshold values.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ListingDetailsType $listingDetails
     */
    private $listingDetails = null;

    /**
     * Contains the detail data for the Listing Designer theme and template (if either are used), which can optionally be used to enhance the appearance of the description area of an item's description.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ListingDesignerType $listingDesigner
     */
    private $listingDesigner = null;

    /**
     * Describes the number of days the seller wants the listing to be active (available for bidding/buying). The duration specifies the seller's initial intent at listing time.
     *  <br/><br/>
     *  The end time for a listing is calculated by adding the duration to the item's start time. If the listing ends early, the value of the listing duration does not change. When a listing's duration is changed, any related fees (e.g., 10-day fee) may be debited or credited (as applicable).
     *  <br><br>
     *  The valid choice of values depends on the listing format (see <b>Item.ListingType</b>). For
     *  a list of valid values, call <b>GetCategoryFeatures</b> with <b>DetailLevel</b> set to <b>ReturnAll</b>
     *  and look for <b>ListingDurations</b> information.
     *  <br><br>
     *  When you revise a listing, the duration cannot be reduced if it will result in ending the listing within 24 hours of the current date-time. You are only allowed to increase the duration of the listing if fewer than 2 hours have passed since you initially listed the item and the listing has no bids. You can decrease the value of this field only if the listing has no bids (or no items have sold) and the listing does not end within 12 hours.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2019, 'GTC' is the only supported listing duration for all eBay marketplaces with the following exceptions:
     *  <ul>
     *  <li>The following eBay Motors US categories are exempt from this change: <em>Cars & Trucks</em> (6001), <em>Motorcycles</em> (6024), <em>Other Vehicles & Trailers</em> (6038), <em>Boats</em> (26429), <em>Powersports</em> (66466).</li>
     *  <li>All child categories under <em>Cars, Motorcycles & Vehicles</em> (9800) categories on the eBay UK and eBay Italy sites are also exempt from this change. </li>
     *  </ul>
     *  If any other listing duration value besides <code>GTC</code> is specified in this field, it will be ignored, and <code>GTC</code> will be used instead.
     *  </span>
     *
     * @var string $listingDuration
     */
    private $listingDuration = null;

    /**
     * Describes listing upgrades that sellers can select for a fee, such as the
     *  <b>BoldTitle</b> upgrade. Also includes feature packs for saving on listing upgrades.
     *  See <a href="https://pages.ebay.com/help/sell/ia/promoting_your_item.html">Listing Upgrades</a>
     *  in the eBay site help.
     *  <br><br>
     *  You cannot remove listing upgrades when you revise a listing. When you
     *  relist an item, use <b>DeletedField</b> to remove a listing upgrades.
     *
     * @var string[] $listingEnhancement
     */
    private $listingEnhancement = [
        
    ];

    /**
     * The selling format of the eBay listing, such as auction (indicated with <code>Chinese</code> value), fixed-price (indicated with <code>FixedPriceItem</code> value), or classified ad (indicated with <code>AdType</code> value).
     *  <br><br>
     *  If this field is not included in an <b>AddItem</b>, <b>AddItems</b>, <b>AddSellingManagerTemplate</b>, or <b>VerifyAddItem</b> call, the listing type defaults to auction
     *  <br><br>
     *  For <b>AddFixedPriceItem</b>, <b>RelistFixedPriceItem</b>, or <b>VerifyAddFixedPriceItem</b> call, this field must be included and set to <code>FixedPriceItem</code>, since these calls only work with fixed-price listings.
     *  <br><br>
     *  This field is not applicable to Revise calls because the selling format of active listings cannot be changed.
     *
     * @var string $listingType
     */
    private $listingType = null;

    /**
     * Indicates the geographical location of the item (along with the value in the <b>Country</b> field).
     *  When you revise a listing, you can add or change this value only if the
     *  listing has no bids (or no items have sold) and it does not end within
     *  12 hours.
     *  <br><br>
     *  If you do not specify <b>Location</b>, you must specify <b>Item.PostalCode</b>. If you
     *  specify a postal code, but do not specify a location, then the location is
     *  given a default value derived from the postal code.
     *  <br><br>
     *  For the Classified Ad format for motors vehicle listings, the value
     *  provided in the <b>Location</b> field is used as item location only if the
     *  <b>SellerContactDetails.Street</b> and the <b>SellerContactDetails.Street2</b> are empty.
     *  Else, the <b>SellerContactDetails.Street</b> and the <b>SellerContactDetails.Street2</b>
     *  will be used for item location.
     *  <br>
     *
     * @var string $location
     */
    private $location = null;

    /**
     * A lot is a set of two or more similar items included in a single listing that must be purchased together in a single order line item. The <b>Item.LotSize</b> value is the number of items in the lot. This field is required if two or more items are including in one listing.
     *  <br><br>
     *  Lots can be used for auction and fixed-price listings. Lot items can be listed only in lot-enabled categories. Call <b>GetCategories</b> to determine if a category supports lots. If the returned <b>CategoryArray.Category.LSD</b> (<b>LotSize</b> Disabled) value is <code>true</code>, the category does not support lots.
     *  <br>
     *
     * @var int $lotSize
     */
    private $lotSize = null;

    /**
     * This field is deprecated.
     *
     * @var string $partnerCode
     */
    private $partnerCode = null;

    /**
     * This field is deprecated.
     *
     * @var string $partnerName
     */
    private $partnerName = null;

    /**
     * This container is used in an <b>Add/Revise/Relist/Verify</b> call if the seller is selling a motor vehicle, and is requiring an initial deposit on that vehicle. This container is only applicable for motor vehicle listings.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a payment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/payment_policy/methods/createPaymentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate the fields in this <b>PaymentDetails</b> container. Instead, indicate your payment policy using the <b>SellerProfiles.SellerPaymentProfile</b> container.
     *  </span>
     *  <br>
     *  This container will only be returned in 'Get' calls for motor vehicle listings where an initial deposit is required for that vehicle.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PaymentDetailsType $paymentDetails
     */
    private $paymentDetails = null;

    /**
     * Identifies the payment method (such as PayPal) that the seller will accept
     *  when the buyer pays for the item. For Add/Revise/Relist calls, at least
     *  one payment method must be specified unless the seller is opted in to the new eBay Managed Payments program.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a payment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/payment_policy/methods/createPaymentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate this field. Instead, indicate your payment policy using the <b>SellerProfiles.SellerPaymentProfile</b> container.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The new eBay Managed Payments program is currently only available to a limited number of sellers on the US site. For sellers in the eBay Managed Payments program, a payment method does not need to be specified at listing time. Any payment method that is specified at listing time (or defined in a payment business policy) will be ignored and dropped from the listing, and the seller will get a warning message in the response. Immediate payment is supported for sellers in the eBay Managed Payments program, so they can include the <b>AutoPay</b> field in the request and set its value to <code>true</code>.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> As of May 1, 2019, eBay no longer supports electronic payments through a seller's Integrated Merchant Credit Card account. To accept online credit card payments from buyers, a seller must either specify <code>PayPal</code> as an accepted payment method, or opt in to the eBay Managed Payments program. If <code>IMCC</code> is passed in as a value, this value will be ignored and dropped (and listing will possibly get blocked if <code>IMCC</code> is the only specified payment method).
     *  </span><br>
     *  Use <b>GetCategoryFeatures</b> to determine the payment methods that are allowed for a category on a site. For example, the response data of <b>GetCategoryFeatures</b> will show that on the US site, most categories only allow electronic payments. Also use <b>GetCategoryFeatures</b> to determine the default payment methods for a site.
     *  <br><br>
     *  Do not use <b>GeteBayDetails</b> to determine the payment methods for a site.
     *  <br><br>
     *  If you specify multiple <b>PaymentMethods</b> fields, the repeating fields must be contiguous. For example, you can specify <b>PayPalEmailAddress</b> after a list of
     *  repeating <b>PaymentMethods</b> fields, but not between them:<br>
     *  <br>
     *  <code>
     *  &lt;PaymentMethods&gt;VisaMC&lt;/PaymentMethods&gt;<br>
     *  &lt;PaymentMethods&gt;PayPal&lt;/PaymentMethods&gt;<br>
     *  &lt;PayPalEmailAddress&gt;mypaypalemail@ebay.com&lt;/PayPalEmailAddress&gt;
     *  </code>
     *  <br><br>
     *  In general, if you separate repeating instances of a field, the results will
     *  be unpredictable. This rule applies to all repeating fields
     *  (<code>maxOccurs="unbounded"</code> or greater than 1) in the schema. See <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/Call-APISchema.html#OverviewoftheAPISchema">Overview of the API Schema</a> in the eBay Features Guide.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Required or allowed payment methods vary by site and category. Refer to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-PaymentMethod.html">
     *  Determining the Payment Methods Allowed for a Category</a> in the eBay Features Guide
     *  to help you determine which payment methods you
     *  are required or allowed to specify.
     *  </span><br>
     *  Payment methods are not applicable to any classified ad listings, as any agreement and payment is handled off of the eBay platform.
     *  <br>
     *  <br>
     *  <b>For <b>ReviseItem</b> and <b>RelistItem</b> only:</b>
     *  A listing must have at least one valid payment method.
     *  When you revise or relist an item and you specify a payment method
     *  that is invalid for the target site, eBay ignores the
     *  invalid payment method, applies the other valid
     *  changes, and returns a warning to indicate that the
     *  invalid payment method was ignored.
     *  <br/><br/>
     *  If multiple payment methods were
     *  invalid, the warning indicates that they were all ignored.
     *  If you modify the listing so that it includes no valid
     *  payment methods, an error is returned. This situation could occur when
     *  the seller removes all valid payment methods or when all
     *  the payment methods specified for the item are no longer valid
     *  on the target site.
     *
     * @var string[] $paymentMethods
     */
    private $paymentMethods = [
        
    ];

    /**
     * Valid PayPal email address for the PayPal account that the seller will use
     *  if they offer PayPal as a payment method for the listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a payment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/payment_policy/methods/createPaymentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate this field. Instead, indicate your payment policy using the <b>SellerProfiles.SellerPaymentProfile</b> container.
     *  </span>
     *  <br>
     *  eBay uses this to identify the correct PayPal account when the buyer pays via PayPal during
     *  the checkout process. (As a seller can have more than one PayPal account,
     *  you cannot necessarily rely on PayPal account data returned from <b>GetUser</b> for
     *  details about the account associated with the PayPal email address that the
     *  seller specifies.)<br>
     *  <br>
     *  Required if seller has chosen PayPal as a payment method (<b>PaymentMethods</b>)
     *  for the listing.<br>
     *  <br>
     *  For digital listings, the seller needs to use an email address that is
     *  associated with a PayPal Premier or PayPal business account. <br>
     *  <br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove this value
     *  when you revise or relist an item, use <b>DeletedField</b>. When you revise a
     *  listing, if the listing has bids (or items have been sold) or it ends within
     *  12 hours, you can add <b>PayPalEmailAddress</b>, but you cannot remove
     *  it.
     *
     * @var string $payPalEmailAddress
     */
    private $payPalEmailAddress = null;

    /**
     * This container is used in an Add/Revise/Relist call to set the primary listing category. This field is conditionally required in an Add call unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, Item Specifics, listing category, and stock photo defined in the catalog product is used to create the listing.<br>
     *  <br>
     *  If you do not know the appropriate eBay category for your product, you can use the <b>GetSuggestedCategories</b> call. Once you know your category, and want to know which listing features it supports, you can use the
     *  <b>GetCategoryFeatures</b> call. To discover if the category requires or recommends GTIN types and other Item Specifics, you can use the <b>GetCategorySpecifics</b> call.
     *  <br>
     *  <br>
     *  If you do use an eBay catalog product, it is advised that you do not include this field, as any primary category ID you specify in this field may get dropped if this category is different than the primary category defined in the eBay catalog product.
     *  <br>
     *  <br>
     *  <b>For ReviseItem only:</b> When revising a listing,
     *  you can change the primary category only if an auction listing
     *  has no bids or a multiple-quantity, fixed-price listing has no sales, and the listing does not end
     *  within 12 hours. If you change the listing category, any Item Specifics that
     *  were previously specified may be dropped from the listing if they aren't
     *  valid for the new category. <br>
     *  <br>
     *  When you list an event ticket on the US site, you must specify one of the leaf categories under the Tickets & Experiences meta category.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CategoryType $primaryCategory
     */
    private $primaryCategory = null;

    /**
     * A <code>true</code> value in this field indicates that the listing is private. In a private listing, a bidder or buyer's user ID will not be exposed to any other eBay user besides the seller of the listing. Sellers may want to use this option when they believe that a listing's potential bidders/buyers would not want their user IDs exposed to other users.
     *  <br>
     *
     * @var bool $privateListing
     */
    private $privateListing = null;

    /**
     * This container is used to provide one or more product identifiers for a product, and if desired by the seller, or required by eBay, the product can be matched to an eBay Catalog product. If a seller's product is matched to an eBay Catalog product, the product details associated with that catalog product will be prefilled for the listing. Product details defined for a catalog product include the product title, product description, product aspects, and stock image(s) of the product.
     *  <br>
     *  <br>
     *  In some eBay categories, one or more product identifier types (e.g. UPC or ISBN) may be required, but the category may not have any eBay Catalog products defined, or the category does not allow listings to be created using a catalog product. Note that the <b>GetCategorySpecifics</b> call or the <b>GetCategoryFeatures</b> call can be used to retrieve supported/required product identifier types.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  If a product identifier type is required, the corresponding field must be used, even if the seller is not interested in finding an eBay catalog product match. A large percentage of eBay US categories require one or more product identifier types when listing an item. See the <a href="http://pages.ebay.com/sell/item_specifics/product_identifiers.html" target="_blank">Structured Data - Product Identifiers</a> help page for more information on which eBay US categories require which product identifier types. If known, an ePID (specified through the <b>ProductReferenceID</b> field) is always the best bet to find an eBay catalog product match, although an <b>EAN</b>, <b>ISBN</b>, <b>UPC</b>, or Brand/MPN pair can also be used in an attempt to find a catalog product match. If a Brand/MPN pair is required for the product, these values must be input through the <b>BrandMPN</b> container.
     *  </span>
     *  <br>
     *  When you use <b>ProductListingDetails</b>, in an Add/Revise/Relist call, you must specify at least one GTIN, a <b>ProductReferenceID</b> (also known as an ePID), a Brand/MPN pair, or <b>TicketListingDetails</b>. If you specify more than one GTIN value, eBay uses the first one that matches a product in eBay's catalog.
     *  <br>
     *  <br>
     *  <b>For ReviseItem and RelistItem only:</b> When you revise a
     *  listing, if it has bids or it ends within 12 hours, you cannot change the
     *  product identifier and you cannot remove existing product listing details data. However, you can
     *  change or add preferences such as <b>IncludeStockPhotoURL</b>,
     *  <b>UseStockPhotoURLAsGallery</b>, and <b>IncludePrefilledItemInformation</b>. To delete all
     *  catalog data when you revise or relist an item, specify
     *  Item.ProductListingDetails in <b>DeletedField</b> and don't pass
     *  <b>ProductListingDetails</b> in the request.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ProductListingDetailsType $productListingDetails
     */
    private $productListingDetails = null;

    /**
     * <b>For <b>AddItem</b> family of calls:</b> The <b>Quantity</b> value for auction listings must always be <code>1</code>. For a fixed-price listing, the <b>Quantity</b> value indicates the number of identical items the seller has available for sale in the listing. If variations are specified in <b>AddFixedPriceItem</b> or <b> VerifyAddFixedPriceItem</b>, the <b>Item.Quantity</b> is not required since the quantity of variations is specified in <b>Variation.Quantity</b> instead. See the <a href="https://pages.ebay.com/help/sell/listing-variations.html">Creating a listing with variations</a> eBay Help page for more information on variations.
     *  <br><br>
     *  <b>For ReviseItem and ReviseFixedPriceItem:</b>
     *  This value can only be changed for a fixed-price listing with no variations. The
     *  quantity of variations is controlled in the <b>Variation.Quantity</b> field and the <b>Item.Quantity</b>
     *  value for an auction listing should always be <code>1</code>.
     *  <br><br>
     *  <b>For RelistItem and RelistFixedPriceItem:</b>
     *  Like most fields, when you use <b>RelistItem</b> or <b>RelistFixedPriceItem</b>,
     *  <b>Quantity</b> retains its original value unless you specifically change
     *  it. This means that the item is relisted with the value that was
     *  already in <b>Quantity</b>, not with the remaining quantity available.
     *  For example, if the original <b>Quantity</b> value was <code>10</code>, and three items have been sold,
     *  eBay sets the relisted item's <b>Quantity</b> to <code>10</code> by default, and not <code>7</code>.
     *  So, we strongly recommend that you always
     *  set <b>Quantity</b> to the correct value (your actual quantity available)
     *  in your relist requests.<br>
     *  <br>
     *  When eBay auto-renews a GTC listing (<b>ListingDuration</b> = <b>GTC</b>)
     *  on your behalf, eBay relists with correct quantity available.
     *  <br>
     *  <br>
     *  <b>For GetSellerEvents:</b> <b>Quantity</b> is only returned
     *  for listings where item quantity is greater than 1.
     *  <br><br>
     *  <b>For GetItem and related calls:</b>
     *  This is the total of the number of items available for sale plus the quantity
     *  already sold. To determine the number of items available, subtract
     *  <b>SellingStatus.QuantitySold</b> from this value.
     *  <br><br>
     *  <b>For order line item calls with variations:</b>
     *  In <b>GetItemTransactions</b>, <b>Item.Quantity</b> is the same as <b>GetItem</b> (the
     *  total quantity across all variations). In <b>GetSellerTransactions</b>,
     *  <b>Transaction.Item.Quantity</b> is the total quantity of the applicable
     *  variation (quantity available plus quantity sold).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For the US site, new eBay sellers are subject to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-Policies.html#SellerLimits">Seller Limits</a>, which limit the quantity of items that may be listed and/or the total cumulative value of these listings. While subject to these selling limits, an eBay seller can use the <b>GetMyeBaySelling</b> call to retrieve both the remaining number of listings they can create and the remaining cumulative value of these listings. These values are shown in the <b>Summary.QuantityLimitRemaining</b> and <b>Summary.AmountLimitRemaining</b> fields in the <b>GetMyeBaySelling</b> response. If a call to add an item or revise an item would result in the exceeding of these limits, the add item or revise item call will fail. These fields will only be returned if the seller is subject to seller limits.
     *  </span>
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * A note that a user makes on an item from their My eBay account. <b>GetMyeBayBuying</b> and <b>GetMyeBaySelling</b> return this field, and only if you pass in the <b>IncludeNotes</b> field in the request, and set its value to <b>true</b>. This field will only be returned if set for an item, and only returned to the user who created the note.
     *  <br><br>
     *  Not supported as input in <b>ReviseItem</b>. Use <b>SetUserNotes</b> instead.
     *  <br><br>
     *  <b>For GetMyeBayBuying</b> In <b>WatchList</b>, notes for variations are only
     *  returned at the Item level, not the variation level. They are only set if you
     *  specified <b>ItemID</b> (if no purchases) or <b>ItemID</b> and <b>VariationSpecifics</b> (if there are
     *  purchases) in <b>SetUserNotes</b> (or selected the equivalent in the My eBay UI on the
     *  site).
     *  <br><br>
     *  In <b>WonList</b>, notes for variations are only returned at the Item level, not the
     *  variation level. They are only set if you specified <b>ItemID</b> and <b>TransactionID</b> in
     *  <b>SetUserNotes</b> (or selected the equivalent in the My eBay UI on the site).
     *
     * @var string $privateNotes
     */
    private $privateNotes = null;

    /**
     * This field is deprecated.
     *
     * @var string $regionID
     */
    private $regionID = null;

    /**
     * Applicable only to relisting an item. If true, creates a link in the item's
     *  old listing for the item that points to the new relist page, which
     *  accommodates users who might still look for the item under its old item ID.
     *
     * @var bool $relistLink
     */
    private $relistLink = null;

    /**
     * The lowest price at which the seller is willing to sell an auction item. (<b>StartPrice</b>
     *  must be lower than <b>ReservePrice</b> .) Not all categories support a Reserve Price.
     *  Use <b>GetCategories</b> to see if a category supports a Reserve Price.
     *  In calls that retrieve item data, the <b>ReservePrice</b> field will only be returned to the auction item's seller, and only if a Reserve Price has been set up. A Reserve Price is not applicable to fixed-price or classified ad listings.<br>
     *  <br>
     *  You can remove the Reserve price of a US eBay Motors listing if the category allows it, the current Reserve Price has not been met, and the Reserve Price is at least $2.00 more than the current high bid. In this case, if the item has bids, the Reserve Price is set to $1.00 over the current high bid. The next bid meets the Reserve Price and wins. See <i>Fees Overview</i> below for information about fee credits that may be available when the Reserve Price is removed for a Motors listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $reservePrice
     */
    private $reservePrice = null;

    /**
     * This container is returned if a listing has been revised in any way since it first became active. One or more boolean fields will be returned under this container based on the type of revision(s) that occured, including a general revision, a price change, or a feature added or removed.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ReviseStatusType $reviseStatus
     */
    private $reviseStatus = null;

    /**
     * Allows the user to specify a time in the future that the listing becomes active on eBay.
     *  To schedule the listing start time, specify a time in the future in GMT
     *  format. In <b>GetItem</b> and related calls, the scheduled time is returned in
     *  <b>StartTime</b>. For <b>ReviseItem</b>, you can modify this value if the currently
     *  scheduled start time is in the future (listing has yet to go live).
     *  <br><br>
     *  When you schedule a start time, the start time is randomized within 15-minute
     *  intervals. Randomized start times applies to the following sites:
     *  <br>
     *  <code>AT, BEFR, BENL, CH, DE, ES, FR, IE, IT, NL, PL, UK</code>
     *  <br><br>
     *  Also see the following article in the Knowledge Base: <a href=
     *  "https://ebaydts.com/eBayKBDetails?KBid=1473"
     *  >Why scheduled time is sometimes getting reset</a>.
     *
     * @var \DateTime $scheduleTime
     */
    private $scheduleTime = null;

    /**
     * The unique identifer for a secondary category. This field is only applicable if the seller decides to list the item under two categories.
     *  <br>
     *  <br>
     *  You cannot list US eBay Motors vehicles in two categories. However, you can
     *  list Parts & Accessories in two categories. The Final Value Fee is based
     *  on the primary category in which the item is listed. Furthermore, you can
     *  list the same item in an eBay Motors Parts & Accessories category and in
     *  an eligible eBay category, as long as the primary category is associated
     *  with the site on which you are listing. That is, the two categories can be a
     *  mix of Motors Parts & Accessories and eBay site categories. (Real
     *  Estate, Mature Audience (adult), and Business & Industrial categories
     *  are not eligible for listing in two categories in this manner.) For example,
     *  if you list on Motors, the primary category could be 6750 (eBay Motors >
     *  Parts & Accessories > Apparel & Merchandise > Motorcycle >
     *  Jackets & Leathers), and the secondary category could be 57988 (eBay
     *  > Clothing, Shoes > Accessories > Men's Clothing > Outerwear).
     *  If you list on the main eBay site, the primary category could be 57988 and
     *  the secondary category could be 6750. <br>
     *  <br>
     *  If eBay has designated a category as a value category
     *  (see ValueCategory in <b>GetCategoryFeatures</b>), items in that category
     *  cannot be listed in two categories.
     *  For example, if your <b>AddItem</b> request
     *  includes a primary or secondary category that is a value category, then eBay drops <b>SecondaryCategory</b> and lists
     *  the item with only the <b>PrimaryCategory</b> you selected.
     *  Also, if the listing request includes Item Specifics
     *  (in <b>ItemSpecifics</b>) that are associated with <b>SecondaryCategory</b>, eBay drops those values when we drop <b>SecondaryCategory</b>. (The same logic is used if you revise an existing
     *  listing to add a secondary category or to change one of the categories: If either the primary or secondary category is a value category, eBay drops the secondary category from your request.)<br>
     *  <br>
     *  To remove this value when relisting an item, use <b>DeletedField</b>.
     *  <br><br>
     *  <b>For ReviseItem only:</b> When revising a listing within 12 hours of the listing's scheduled end time, you can only add or change the secondary category when an auction listing has no active bids or a multiple-quantity, fixed-price listing has no items sold. If you change the secondary category, any corresponding Item Specifics that were previously specified may be dropped from the listing if they aren't valid for the category.
     *  <br>
     *  <br>
     *  <b>For ReviseItem only:</b> Previously, removing the listing from a secondary category was only possible within 12 hours of the listing's scheduled end time when an auction listing had no active bids or a multiple-quantity, fixed-price listing had no items sold, but this restriction no longer exists. Now, the secondary category can be dropped for any active listing at any time, regardless of whether an auction listing has bids or a fixed-price listing has sales. To drop a secondary category, the seller passes in a value of <code>0</code> in the <b>SecondaryCategory.CategoryID</b> field.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CategoryType $secondaryCategory
     */
    private $secondaryCategory = null;

    /**
     * The unique identifier for a secondary category that eBay has added as a free promotion. You cannot add
     *  this yourself. This container is only returned if the item was listed in a single category and
     *  eBay added a free secondary category.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CategoryType $freeAddedCategory
     */
    private $freeAddedCategory = null;

    /**
     * Container for information about this listing's seller.
     *  <br><br>
     *  Returned by <b>GetItemsAwaitingFeedback</b> if Buyer is making the request.
     *
     * @var \Nogrod\eBaySDK\MerchantData\UserType $seller
     */
    private $seller = null;

    /**
     * Various details about the current status of the listing, such as the current
     *  number of bids, the current high bidder, quantity sold, current price, and listing status.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellingStatusType $sellingStatus
     */
    private $sellingStatus = null;

    /**
     * The shipping-related details for an order, including flat and calculated shipping costs.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers who are using a shipping (aka Fulfillment) business policy to create/revise/relist an item, none of the fields under the <b>ShippingDetails</b> container are necessary. A fulfillment business policy can be set up and/or modified in My eBay, or via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/fulfillment_policy/methods/createFulfillmentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>. A fulfillment business policy is associated to a listing through the <b>Item.SellerProfiles.SellerShippingProfile</b> container.
     *  <br>
     *  <br>
     *  If you <i>do not</i> use a fulfillment business policy, many of the fields under this <b>ShippingDetails</b> container become required in your request.
     *  </span>
     *  <br>
     *  New users who list their first items in selected categories on the US site
     *  must specify at least one domestic shipping service. This applies to a
     *  category if <b>GetCategoryFeatures</b> returns <code>true</code> for
     *  <b>Category.ShippingTermsRequired</b>.
     *  <br>
     *  <br>
     *  For multi-quantity, fixed-price listings, a seller can revise all shipping details of the
     *  listing (except for sales tax and for shipping type of Freight) for all
     *  unsold items. This applies to both domestic and international shipping.
     *  Checkout is not affected for those who bought items prior to the seller's
     *  shipping changes&#8212;the shipping details that were in effect at the time of
     *  purchase are used for that buyer at the time of checkout.
     *  <br>
     *  <br>
     *  Shipping details are not applicable to any classified ad listings, as shipping/delivery/pickup is handled by the buyer and seller off of the eBay platform.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> To create a listing that is 'Local Pickup only' (buyer picks up, with no shipping/delivery available), the user does the following two things:
     *  <ul>
     *  <li>Either omit the entire <strong>ShippingDetails</strong> container, or pass in an empty <strong>ShippingDetails</strong> container - &lt;ShippingDetails/&gt; </li>
     *  <li>Pass in one <strong>ShipToLocations</strong> field, with its value set to <code>None</code> - &lt;ShipToLocations&gt;None&lt;/ShipToLocations&gt;</li>
     *  </ul>
     *  </span>
     *  <br>
     *  For <b>GetMyeBayBuying, GetMyeBaySelling</b>: <b>ShippingDetails</b> is not returned.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ShippingDetailsType $shippingDetails
     */
    private $shippingDetails = null;

    /**
     * An international location or region to which the seller is willing to ship,
     *  regardless of shipping service. The country of the listing site is added by eBay.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a fulfillment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/fulfillment_policy/methods/createFulfillmentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate the <b>ShipToLocations</b> field. Instead, indicate your fulfillment policy using the <b>SellerProfiles.SellerShippingProfile</b> container.
     *  </span>
     *  <br>
     *  Use <b>GeteBayDetails</b> with a <b>DetailName</b> of <b>ShippingLocationDetails</b> to
     *  determine which international locations are valid for the site. Omit
     *  <b>ShipToLocations</b> if you want to ship only within the country of the listing site.
     *  To state that you do not wish to ship at all, set <b>ShipToLocations</b> to <code>None</code>.
     *  <b>ReviseItem</b> can add a <b>ShipToLocations</b>. On output, <b>ShipToLocations</b> is the
     *  collection of all input item-level <b>ShipToLocations</b> plus international shipping
     *  service-level ShipToLocation values.
     *  <br><br>
     *  If you have specified a region to which you will ship (such as Asia), you can
     *  use <b>ExcludeShipToLocation</b> to exclude certain countries within that region to
     *  where you will not ship (such as Afghanistan).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> To create a listing that is 'Local Pickup only' (buyer picks up, with no shipping/delivery available), the user does the following two things:
     *  <ul>
     *  <li>Either omit the entire <strong>ShippingDetails</strong> container, or pass in an empty <strong>ShippingDetails</strong> container - &lt;ShippingDetails/&gt; </li>
     *  <li>Pass in one <strong>ShipToLocations</strong> field, with its value set to <code>None</code> - &lt;ShipToLocations&gt;None&lt;/ShipToLocations&gt;</li>
     *  </ul>
     *  </span>
     *
     * @var string[] $shipToLocations
     */
    private $shipToLocations = [
        
    ];

    /**
     * The name of the site on which the item is listed. The listing site affects
     *  the business logic and validation rules that are applied to the request,
     *  which in turn affect the values that are returned in the response, as well
     *  as values that appear on the eBay site. For example, the listing site
     *  can affect the validation of <b>Category</b> in listing requests, international
     *  business seller requirements, the values of converted (localized) prices in
     *  responses, the item-related time stamps that are displayed on the eBay site, the visibility of the item in some types of searches (e.g.,
     *  <b>GetCategoryListings</b>), and other information. In some cases, the rules are
     *  determined by a combination of the site, the user's registration address,
     *  and other information. You cannot change the site when you revise a
     *  listing.<br>
     *  <br>
     *  When you specify <b>Item.Site</b> in <b>AddItem</b> or <b>AddFixedPriceItem</b>, it must be consistent with the
     *  numeric site ID that you specify in the request URL (for the SOAP API) or
     *  the <b>X-EBAY- API-SITEID</b> header (for the XML API).
     *
     * @var string $site
     */
    private $site = null;

    /**
     * The original price of the item at listing or re-listing time. If this
     *  value changes when the item is revised, the new value becomes the original
     *  price.
     *  <br><br>
     *  <b>For auction listings:</b> Competitive bidding starts at this
     *  value. Once at least one bid has been placed, <b>StartPrice</b> remains the same but
     *  <b>CurrentPrice</b> is incremented to the amount of each succeeding bid. If <b>ReservePrice</b> is
     *  also specified, the value of <b>StartPrice</b> must be lower than the value of
     *  <b>ReservePrice</b>.
     *  <br><br>
     *  <b>For input on fixed-price listings (<b>FixedPriceItem</b>): </b>
     *  This is the constant price at which a buyer may purchase the item.
     *  <br><br>
     *  <b>GetMyeBaySelling</b> does not return <b>Item.StartPrice</b>
     *  for fixed price items&#8212;it returns <b>Item.SellingStatus.CurrentPrice</b>.
     *  <br><br>
     *  <b>For AddFixedPriceItem and VerifyAddFixedPriceItem:</b>
     *  Required when no variations are specified. If variations are specified,
     *  use <b>Variation.StartPrice</b> for each variation instead.
     *  <br><br>
     *  <b>For Revise calls:</b>
     *  If the <b>StartPrice</b> value for a fixed-price item is changed with a Revise call, the <b>MinimumBestOfferPrice</b> and <b>BestOfferAutoAcceptPrice</b> fields in the <b>ListingDetails</b> container will be dropped (if set), basically turning off the Best Offer Auto Accept and/or Auto Decline features. If the seller wanted to reintroduce either of these Best Offer threshold values in the listing again, an additional Revise call would have to be made, passing in the desired threshold values.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> For the US site, new eBay sellers are subject to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-Policies.html#SellerLimits">Seller Limits</a>, which limit the quantity of items that may be listed and/or the total cumulative value of these listings. While subject to these selling limits, an eBay seller can use the <b>GetMyeBaySelling</b> call to retrieve both the remaining number of listings they can create and the remaining cumulative value of these listings. These values are shown in the <b>Summary.QuantityLimitRemaining</b> and <b>Summary.AmountLimitRemaining</b> fields in the <b>GetMyeBaySelling</b> response. If a call to add an item or revise an item would result in the exceeding of these limits, the add item or revise item call will fail. These fields will only be returned if the seller is subject to seller limits.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $startPrice
     */
    private $startPrice = null;

    /**
     * This container provides details about the seller's eBay store.
     *  <br><br>
     *  In an Add/Revise/Relist call, the seller can include this container to set/change which customized eBay store category that the item will be placed in.
     *  <br><br>
     *  For 'Get' calls, this container is returned if the seller of the item has an eBay store.
     *
     * @var \Nogrod\eBaySDK\MerchantData\StorefrontType $storefront
     */
    private $storefront = null;

    /**
     * Subtitle to use in addition to the title. Provides more keywords when buyers
     *  search in titles and descriptions. You cannot use HTML in the Subtitle. (HTML
     *  characters will be interpreted literally as plain text.) If you pass any
     *  value, this feature is applied (with applicable fees).<br>
     *  <br>
     *  When you revise a item, you can add, change, or remove the
     *  subtitle.
     *  <br>
     *
     * @var string $subTitle
     */
    private $subTitle = null;

    /**
     * Time left before the listing ends.
     *  The duration is represented in the ISO 8601 duration format (PnYnMnDTnHnMnS).
     *  See Data Types in the Trading API Guide for information about this format.
     *  For ended listings, the time left is PT0S (zero seconds).
     *
     * @var \DateInterval $timeLeft
     */
    private $timeLeft = null;

    /**
     * This field is used to specify the title of the listing. This field is conditionally required in an Add call unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, Item Specifics, and stock photo defined in the catalog product are used to create the listing. <br>
     *  <br>
     *  You cannot use HTML or JavaScript in the Title. (HTML characters will be
     *  interpreted literally as plain text.)<br>
     *  <br>
     *  The listing title can only be changed if the active listing has yet to have any bids or sales, and the listing does not end within 12 hours.
     *  <br>
     *
     * @var string $title
     */
    private $title = null;

    /**
     * Use an <b>UUID</b> value to ensure that you only list (or relist) a particular item once. This field can be particularly useful if you are listing many items on a daily basis and/or many items at once with an <b>AddItems</b> call. If your call request does not generate a response, or if you get one or more (blocking) errors, be sure to use the same <b>UUID</b> value when you attempt to list or relist the same item with another call request.
     *  <br><br>
     *  If you pass in a <b>UUID</b> value that has already been used to successfully create or relist an item, you will receive an error message that includes the Item ID for that listing and a boolean value indicating whether the duplicate <b>UUID</b> was sent by the same application.
     *  <br><br>
     *  We recommend that you use the <b>Item.UUID</b> field for add and relist calls (for example, <b>AddItem</b> and <b>RelistItem</b>), but use the <b>Item.InvocationID</b> field instead when using a revise call.
     *  <br><br>
     *  The <b>UUID</b> can only contain digits from 0-9 and letters from A-F and must be 32 characters long. The <b>UUID</b> value must be unique across all of the seller's eBay across all eBay marketplaces.
     *  <br>
     *
     * @var string $uUID
     */
    private $uUID = null;

    /**
     * This container is used in an Add/Revise/Relist call to set the VAT (Value-added Tax) percentage rate that will be charged to buyers when an item is purchased from the listing, and to enable Business Seller-related features.
     *  <br><br>
     *  This container is returned in 'Get' calls only if VAT is applicable to the listing, and unless the person making the 'Get' call owns the listing, only the <b>VATPercent</b> field is returned (if applicable). However, Business Seller-related information will be returned to all users in 'Get' calls under the <b>SellerInfo</b> and <b>BusinessSellerDetails</b> containers.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  VAT is not applicable to all countries, including the US. Allowed VAT percentage rates can vary by region/country, so sellers should be aware of the rates they are legally required/allowed to charge. Sellers must be registered as Business Sellers on the site they are selling on in order to use the Business Seller-related fields.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\VATDetailsType $vATDetails
     */
    private $vATDetails = null;

    /**
     * This field is returned if the seller of the item is currently on vacation and that seller has turned on the Store vacation setting, and has included a message to display to shoppers who visit the eBay store. If the seller turns on the Store vacation setting, the listing will be hidden from search result pages.
     *  <br/><br/>
     *  Store vacation settings, including this note, are set through the <b>Messages</b> tab in My eBay, or this message can also be set through the <b>SetStorePreferences</b> call.
     *  <br/><br/>
     *  The Store vacation setting is only applicable for sellers with eBay stores.
     *
     * @var string $sellerVacationNote
     */
    private $sellerVacationNote = null;

    /**
     * The number of watches placed on this item from buyers' My eBay accounts.
     *  Specify <b>IncludeWatchCount</b> as <code>true</code> in the request.
     *  Returned by <b>GetMyeBaySelling</b> only if greater than 0.
     *
     * @var int $watchCount
     */
    private $watchCount = null;

    /**
     * This value indicates the number of page views for the listing. This number is calculated by eBay and is returned in 'Get' calls if the <b>HitCounter</b> value is set to <code>BasicStyle</code>,
     *  <code>RetroStyle</code>, or <code>HiddenStyle</code>.
     *
     * @var int $hitCount
     */
    private $hitCount = null;

    /**
     * If <code>true</code>, all buyer requirements (from <b>Item.BuyerRequirementDetails</b>
     *  or Buyer requirements preferences in My eBay) are ignored.
     *  <br>
     *  <br>
     *  If <code>false</code> (or omitted): <b>Item.BuyerRequirementDetails</b> or Buyer
     *  requirements preferences are used, with <b>Item.BuyerRequirementDetails</b>
     *  having the higher precedence.
     *  <br>
     *
     * @var bool $disableBuyerRequirements
     */
    private $disableBuyerRequirements = null;

    /**
     * <b>For Add/Revise/Relist/Verify calls</b>: This container is used to enable the Best Offer feature on a listing. Note that the Best Offer feature can be set for auction listings on the US, Canada, UK, Germany, Australia, France, Italy, and Spain marketplaces, but a seller can only use Best Offer or Buy It Now, but not both. Once an auction listing receives a qualifying bid, the Best Offer feature will be turned off and any pending Best Offers or Counteroffers will no longer be valid.
     *  <br><br>
     *  For <b>GetItem</b> and other calls that retrieve item data, this container will include the status (<b>GetMyeBayBuying</b> only) and dollar amount of the latest Best Offer on a fixed-price listing, and the number of Best Offers received for the fixed-price listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BestOfferDetailsType $bestOfferDetails
     */
    private $bestOfferDetails = null;

    /**
     * If <code>true</code>, eBay provided a central location as a result of the user
     *  not specifying a location. This typically occurs when the seller
     *  specifies <b>PostalCode</b> without Location.
     *
     * @var bool $locationDefaulted
     */
    private $locationDefaulted = null;

    /**
     * Indicates whether the seller's tax table is to be used when applying and
     *  calculating sales tax for an order line item. A sales tax table can be
     *  created programmatically using the <b>SetTaxTable</b> call, or it can be created
     *  manually in My eBay's Payment Preferences. If <b>UseTaxTable</b> is set to <code>true</code>,
     *  the values contained in the seller's sales tax table will supersede the values contained in the <b>Item.ShippingDetails.SalesTax</b> container (if included in the request).
     *
     * @var bool $useTaxTable
     */
    private $useTaxTable = null;

    /**
     * This field is deprecated.
     *
     * @var bool $getItFast
     */
    private $getItFast = null;

    /**
     * Applicable for listings in vehicle categories on the US eBay Motors site and
     *  eBay Canada site. (No business effect if specified for other categories or
     *  sites, as the Web site will not display the information to buyers.)
     *  <b></b>
     *  <ul>
     *  <li>If <code>true</code>,
     *  the buyer is responsible for vehicle pickup or shipping. </li>
     *  <li>If <code>false</code>, specify
     *  vehicle shipping arrangements in the item description. (The
     *  description can also include vehicle shipping arrangements when this value is
     *  <code>true</code>.) </li>
     *  </ul>
     *  <b></b>
     *  If the item has bids or ends within 12 hours, you cannot modify this
     *  flag. Do not specify <b>ShippingDetails.ShippingServiceOptions</b>
     *  for vehicle listings.
     *  <br><br>
     *  If <code>true</code> and the listing is on the US eBay Motors site, and you want the
     *  listing to be visible on the eBay Canada site, set <b>Item.ShipToLocations</b> to CA.
     *  <br><br>
     *  If <code>true</code> and the listing is on the eBay Canada site, and you want your listing
     *  to be visible on the US eBay Motors site, set <b>Item.ShipToLocations</b> to US.
     *  <br>
     *
     * @var bool $buyerResponsibleForShipping
     */
    private $buyerResponsibleForShipping = null;

    /**
     * This field is deprecated.
     *
     * @var bool $limitedWarrantyEligible
     */
    private $limitedWarrantyEligible = null;

    /**
     * Returns a note from eBay displayed below items in the user's My
     *  eBay account.
     *
     * @var string $eBayNotes
     */
    private $eBayNotes = null;

    /**
     * Specifies the number of questions buyers have posted about the
     *  item. Returned only if greater than 0.
     *
     * @var int $questionCount
     */
    private $questionCount = null;

    /**
     * This boolean field is returned as <code>true</code> if the item in this listing was relisted. When an item is relisted, a brand new Item ID value is automatically created by eBay. This field is only returned for an original listing whose item has been relisted, so a <code>false</code> value should never get returned.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  A new listing will not return this field.
     *  </span>
     *
     * @var bool $relisted
     */
    private $relisted = null;

    /**
     * This integer value indicates the quantity of an item that is still available for purchase in a multiple-quantity, fixed-price listing. This field is not applicable to auction listings.
     *
     * @var int $quantityAvailable
     */
    private $quantityAvailable = null;

    /**
     * A SKU (Stock Keeping Unit) value is a seller-defined identifier for a product. Each product within a seller's inventory should be unique. Most large-volume sellers use SKUs, but eBay only requires a SKU value if the <b>InventoryTrackingMethod</b> field is included in an <b>AddFixedPriceItem</b> call and its value is set to <code>SKU</code>. Setting the <b>InventoryTrackingMethod</b> field to <code>SKU</code> allows the seller to use a SKU value instead of an <b>ItemID</b> value as a unique identifier
     *  in calls such as <b>GetItem</b> and <b>ReviseInventoryStatus</b>
     *  <br><br>
     *  A seller can specify a SKU when listing an item with <b>AddItem</b>
     *  and related calls. eBay preserves the SKU on the item, enabling you
     *  to obtain it before and after an order line item is created.
     *  (<b>SKU</b> is recommended as an alternative to <b>ApplicationData</b>.)
     *  <br>
     *  <br>
     *  If both <b>ItemID</b> and <b>SKU</b> are specified in calls that support the use of
     *  SKU as a unique identifier, the <b>ItemID</b> value takes precedence.<br>
     *  <br>
     *  If a seller wants to use SKUs for multiple-variation listings, the SKU value for each product variation is actually specified at the variation level (Item.Variations.Variation.<b>SKU</b>) field, and the Item.<b>SKU</b>) field should not be included in the call request.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  The eBay site cannot identify listings by SKU. For example,
     *  My eBay pages and Search pages all identify listings by item ID.
     *  When a buyer contacts you via eBay's messaging functionality, eBay
     *  uses the item ID as the identifier. Buyer-focused APIs (like the
     *  Shopping API) also do not support SKU as an identifier.
     *  </span>
     *  <b>For revising and relisting only:</b>
     *  To remove a SKU when you revise or relist an item, use <b>DeletedField</b>.
     *  (You cannot remove a SKU when <b>Item.InventoryTrackingMethod</b> is set
     *  to SKU.)<br>
     *  <br>
     *  For <b>GetItem</b>, <b>GetMyeBaySelling</b>, and other 'Get' call, the <b>SKU</b> value will only be returned if defined for the listing.
     *  <br>
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SearchDetailsType $searchDetails
     */
    private $searchDetails = null;

    /**
     * Postal code of the place where the item is located. This value is used for
     *  proximity searches. To remove this value when revising or relisting an item,
     *  use <b>DeletedField</b>. If you do not specify <b>PostalCode</b>, you must specify
     *  <b>Item.Location</b>. If you specify <b>PostalCode</b>, but do not specify <b>Item.Location</b>,
     *  then <b>Item.Location</b> is given a default value derived from the postal code.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Beginning in late January 2020, the displayed postal code returned in <b>GetItem</b> will be masked to all users except for the seller of the item. Different countries will mask postal/zip codes in slightly different ways, but an example would be <code>951**</code>.
     *  </span>
     *
     * @var string $postalCode
     */
    private $postalCode = null;

    /**
     * This container consists of the data associated with photos within the listing. With most eBay sites and categories, a seller can add up to 12 photos to their listings free of charge. These photos can be hosted by eBay Picture Services (EPS), or the seller can host pictures on a non-eBay server. If pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol.
     *  <br/><br/>
     *  It is required that all listings have at least one picture. eBay Motors listings can have up to 24 pictures.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PictureDetailsType $pictureDetails
     */
    private $pictureDetails = null;

    /**
     * Specifies the maximum number of business days the seller
     *  commits to for preparing an item to be shipped after receiving a
     *  cleared payment. This time does not include the shipping time (the carrier's transit time).
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller opts into the eBay Guaranteed Delivery feature and wants to make a listing eligible for eBay Guaranteed Delivery, the <b>DispatchTimeMax</b> value must be set to <code>0</code> or <code>1</code> (days) and the cumulative value of <b>DispatchTimeMax</b> plus the transit time of the shipping service (returned in <b>ShippingServiceDetails.ShippingTimeMax</b> field of <b>GeteBayDetails</b>) must be 4 business days or less to be eligible for this feature. See the <a href="https://pages.ebay.com/seller-center/shipping/ebay-guaranteed-delivery.html" target="_blank">eBay Guaranteed Delivery</a> page in Seller Center for more information on this program.
     *  </span>
     *  <br>
     *  <b>For Add/Revise/Relist calls:</b> Required for
     *  listings in certain categories when certain shipping services
     *  (with delivery) are offered. See <b>HandlingTimeEnabled</b> in
     *  <b>GetCategoryFeatures</b>.<br>
     *  <br>
     *  The seller sets this to a positive integer value corresponding to the number of days. For a list of allowed values
     *  on each eBay site, use <b>DispatchTimeMaxDetails</b> in <b>GeteBayDetails</b>.
     *  (Typical values are <code>1</code>, <code>2</code>, <code>3</code>, <code>4</code>, <code>5</code>, <code>10</code>, <code>15</code>, or <code>20</code>, but this can vary
     *  by site and these may change over time.)<br>
     *  <br>
     *  Valid for flat and calculated shipping. Does not apply when
     *  there is no shipping, when it is local pickup only or it is freight shipping. For example, when <b>ShippingService</b> = <code>Pickup</code> or
     *  <b>ShipToLocations</b> = <code>None</code>, then <b>DispatchTimeMax</b> is not required (or it can be <code>0</code>).<br>
     *  <br>
     *  <b>For ReviseItem only:</b>
     *  If the listing has bids or sales and it ends within 12 hours, you can't change this value.
     *  If the listing is a GTC listing that has sales or ends within 12 hours
     *  (one or the other, but not both), you can add or change this value.
     *  If the listing has no bids or sales and more than 12 hours remain before
     *  the listing ends, you can add or change the dispatch (handling) time.<br>
     *  <br>
     *  <b>For GetItem:</b> <b>GetItem</b> returns <b>DispatchTimeMax</b>
     *  only when shipping service options are specified for the item and
     *  the seller specified a dispatch time.
     *
     * @var int $dispatchTimeMax
     */
    private $dispatchTimeMax = null;

    /**
     * This field is deprecated. This information is returned in <b>BestOfferDetails</b>.
     *
     * @var bool $bestOfferEnabled
     */
    private $bestOfferEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var bool $localListing
     */
    private $localListing = null;

    /**
     * This container is used by sellers of Classified Ad listings to provide contact information.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AddressType $sellerContactDetails
     */
    private $sellerContactDetails = null;

    /**
     * The number of questions asked about this item. Applies to eBay Motors Pro
     *  applications only.
     *
     * @var int $totalQuestionCount
     */
    private $totalQuestionCount = null;

    /**
     * Some listings on the eBay platform originate from eBay affiliates.
     *  Depending on the relationship the affiliate has with eBay, there are times
     *  when the affiliate retains ownership of the listing. When this occurs
     *  the representation of the listing on eBay is considered a proxy item. Proxy
     *  items can only be edited using API requests from the applications that
     *  originally listed them.
     *
     * @var bool $proxyItem
     */
    private $proxyItem = null;

    /**
     * Extended contact information for sellers using the Classified Ad format.
     *  Specifies the days and hours when the seller can be contacted.
     *  To remove seller contact information when revising or relisting an item, use
     *  <b>DeletedField</b>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ExtendedContactDetailsType $extendedSellerContactDetails
     */
    private $extendedSellerContactDetails = null;

    /**
     * Specifies the number of leads (emails) buyers have posted about the item.
     *  You must be the seller of the item to retrieve the lead count.
     *
     * @var int $leadCount
     */
    private $leadCount = null;

    /**
     * Specifies the number of new leads (unanswered emails) buyers have posted
     *  about the item.
     *
     * @var int $newLeadCount
     */
    private $newLeadCount = null;

    /**
     * This container is a list of Item Specific <b>Name</b>/<b>Value</b> pairs used by the seller to provide desciptive details of an item in a structured manner.
     *  <br><br>
     *  If creating, revising, or relisting an item with an <b>Add</b>, <b>Revise</b>, or <b>Relist</b> call, it is recommended that you use the <b>GetCategorySpecifics</b> call to retrieve mandatory and recommended Item Specifics for a listing category.
     *  <br><br>
     *  <b>For ReviseItem only:</b> When you revise a listing, if an auction listing has one or more bids and ends within 12 hours, you cannot change or add Item Ppecifics. If the auction listing has bids but ends in more than 12 hours, you cannot change existing Item Specifics, but you can add Item Specifics that were not previously included.
     *  <br><br>
     *  If your listing is in a eBay product catalog-enabled category, certain <b>Name</b>/<b>Value</b> pairs will be accepted as product identifying information. The <b>Name</b> can be <code>Brand</code>, <code>MPN</code>, or a Global Trade Item Number (GTIN). GTINs are a set of globally recognized identifiers, including <code>EAN</code>, <code>ISBN</code>, and <code>UPC</code>. However, the <b>Values</b> provided for these <b>Name</b>s must comply with eBay's constraints or they will not be recognized as product identifiers. The <b>Value</b> for Brand must be an actual brand name (except that if the item is not branded, <b>Value</b> can be <code>Unbranded</code>.) The <b>Value</b> for Brand or MPN cannot contain only special characters (e.g. <code>%$*#@</code>). All GTINs must comply with international formatting standards. For more details, see <a href="https://developer.ebay.com/devzone/guides/features-guide/default.html#development/ItemSpecifics-Listing.html" target="_blank">Listing with Item Specifics</a>.
     *  <br><br>
     *  If the <b>ProductListingDetails</b> container in an Add/Revise/Relist call is successfully used to find and use an eBay catalog product to create/revise listing, the seller should not remove or change the value of any Item Specific name or value that is defined as part of the eBay catalog product definition.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If a listing is associated with an eBay catalog product, the seller does not need to pass in any Item Specifics that are already defined in the eBay catalog product. Sellers can make a <b>GetCategorySpecifics</b> call to see if the listing category supports any 'instance aspects', which can be thought of as Item Specifics that are unique to the specific item that is being listed. Instance aspects are identified in the <b>GetCategorySpecifics</b> response by looking for a value of <code>Instance</code> in one or more <b>NameRecommendation.ValidationRules.aspectUsage</b> fields. Many categories support the following instance aspects: <em>Custom Bundle</em>, <em>Bundle Description</em>, <em>Modified Item</em>, <em>Modification Description</em>, and <em>California Prop 65 Warning</em>. These instance aspects allow the seller to provide more information about product bundles or modified products in a structured way. Depending on the category, there are other instance aspects as well. For more information about creating bundle listings or modified product listings, see the <a href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse-special-listings.html" target="_blank">Associating catalog products to special listings</a> topic.
     *  </span>
     *  <span class="tablenote"><b>Note:</b> To specify an item's condition, use the <b>ConditionID</b> field instead of a condition Item Specific. Use <b>GetCategoryFeatures</b> to see which categories support <b>ConditionID</b> and to get a list of valid condition IDs. (If you specify <b>ConditionID</b> and you also specify <b>Condition</b> as a Item Specific, eBay drops the condition Item Specific.)
     *  </span>
     *  <b>For GetItem</b>: This list is returned only when you specify <b>IncludeItemSpecifics</b> in the request (and the seller included Item Specifics in their listing).
     *  <br><br>
     *  To delete all Item Specifics when you revise or relist, specify <b>Item.ItemSpecifics</b> in <b>DeletedField</b>, and don't pass <b>ItemSpecifics</b> in the request.
     *
     * @var \Nogrod\eBaySDK\MerchantData\NameValueListType[] $itemSpecifics
     */
    private $itemSpecifics = null;

    /**
     * This field is deprecated.
     *
     * @var string $groupCategoryID
     */
    private $groupCategoryID = null;

    /**
     * The email and phone lead fee for a pay-per-lead item.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $classifiedAdPayPerLeadFee
     */
    private $classifiedAdPayPerLeadFee = null;

    /**
     * This field is deprecated.
     *
     * @var bool $bidGroupItem
     */
    private $bidGroupItem = null;

    /**
     * Different Buyer protection schemes and the various status associated with each one of them.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BuyerProtectionDetailsType $applyBuyerProtection
     */
    private $applyBuyerProtection = null;

    /**
     * Indicates a specific type of lead generation format listing, such as
     *  classified ad or local market best offer listing. Only applicable when
     *  <b>ListingType</b> = <b>LeadGeneration</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>ListingSubtype2</b> replaces the deprecated <b>ListingSubtype</b> field.
     *  If both are specified in a request, <b>ListingSubtype2</b> takes precedence.
     *  </span>
     *
     * @var string $listingSubtype2
     */
    private $listingSubtype2 = null;

    /**
     * Indicates whether the seller allows the bidder to request mechanical
     *  inspection services from RAC. For the Car category listings on the UK site.
     *
     * @var bool $mechanicalCheckAccepted
     */
    private $mechanicalCheckAccepted = null;

    /**
     * Specifies whether the following Business Seller fields have been updated for
     *  the item specified in the request: First Name, Last Name, Fax, Email
     *  Address, Additional Contact Information, Trade Registration Number, VAT
     *  Identification Number.
     *
     * @var bool $updateSellerInfo
     */
    private $updateSellerInfo = null;

    /**
     * Specifies whether the Return Policy Details have been updated
     *  for the item specified in the request.
     *
     * @var bool $updateReturnPolicy
     */
    private $updateReturnPolicy = null;

    /**
     * Specifies the details of policy violations if the item was administratively
     *  canceled.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ItemPolicyViolationType $itemPolicyViolation
     */
    private $itemPolicyViolation = null;

    /**
     * This field is used by sellers who want their listing to be returned in the search
     *  results for other eBay sites. This feature is currently only supported by the US, UK,
     *  eBay Canada, and eBay Ireland sites. See <a href="
     *  https://pages.ebay.com/help/sell/globalexposure.html">Getting exposure on
     *  international sites</a> for full requirements on using this feature. There is a
     *  small listing fee for each country specified as a Cross Border Trade country.
     *  <br><br>
     *  US listings that offer shipping to Canada, North America, or worldwide are
     *  automatically returned on eBay.ca at no extra charge, so US listings that offer
     *  shipping to these locations do not need to specify Canada as a Cross Border Trade
     *  country.
     *
     * @var string[] $crossBorderTrade
     */
    private $crossBorderTrade = [
        
    ];

    /**
     * Returns the seller's information (in a business card format)
     *  if the seller's <b>SellerBusinessCodeType</b> is set to <code>Commercial</code>.
     *  This is only applicable for sites where Business Seller options
     *  are supported.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BusinessSellerDetailsType $businessSellerDetails
     */
    private $businessSellerDetails = null;

    /**
     * For the Australia site, <b>BuyerGuaranteePrice</b> is the PayPal Buyer Protection
     *  coverage, offered for the item at the time of purchase. Details of coverage
     *  are in the following sections of the View Item page: the Buy Safely section
     *  and the Payment Details section.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $buyerGuaranteePrice
     */
    private $buyerGuaranteePrice = null;

    /**
     * When this container is present in an <b>AddItem</b> or <b>AddFixedPriceItem</b> call, all
     *  buyer requirements for the resulting listing are set by this container.
     *  Furthermore, individual buyer requirements cannot be modified or added when
     *  including this container in a <b>ReviseItem</b> call.
     *  The <b>ReviseItem</b> call needs to
     *  provide the entire set of buyer requirements to modify or add any of the
     *  requirements.
     *  <br/><br/>
     *  Unless otherwise specified, most buyer requirements are only
     *  returned if the caller is the seller. All global My eBay Buyer Requirements
     *  are overridden by the contents of this container. This means that buyer
     *  requirements set in My eBay cannot be combined with buyer requirements
     *  included in this container.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BuyerRequirementDetailsType $buyerRequirementDetails
     */
    private $buyerRequirementDetails = null;

    /**
     * Describes the seller's return policy. Most categories on most
     *  eBay sites require the seller to clearly specify whether or not
     *  returns are accepted (see <b>ReturnsAcceptedOption</b>). <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a return policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate the fields in this <b>ReturnPolicy</b> container. Instead, indicate your return policy using the <b>SellerProfiles.SellerReturnProfile</b> container.
     *  <br>
     *  <br>
     *  However, if you <i>do not</i> configure a return policy, all the fields in this <b>ReturnPolicy</b> container that are marked <b>conditional</b> must be populated in your request.
     *  </span>
     *  <br>
     *  <b>For the <b>AddItem</b> family of calls:</b> Required for
     *  most categories on most sites. Use <b>ReturnPolicyEnabled</b>
     *  in <b>GetCategoryFeatures</b> to determine which categories require this
     *  field. Also use <b>ReturnPolicyDetails</b> in <b>GeteBayDetails</b> to determine
     *  which <b>ReturnPolicy</b> fields can be used on each site.<br>
     *  <br>
     *  Australia (AU) and US eBay Motors
     *  Parts and Accessories categories typically support but do not
     *  require a return policy. (However, we strongly recommend that
     *  you specify a clear return policy whenever possible.)<br>
     *  <br>
     *  <b>For ReviseItem only:</b> If the listing has bids or
     *  sales and it ends within 12 hours, you can't change the return policy
     *  details. If the listing is a GTC listing that has sales or ends within 12
     *  hours (one or the other, but not both), you can add a return policy to the
     *  GTC listing (but you can't change return policy details if already present).
     *  If the listing has no bids or sales and more than 12 hours remain before the
     *  listing ends, you can add or change the return policy. When you revise your
     *  return policy, you only need to specify the fields you want to add or
     *  change. You don't need to specify all the other <b>ReturnPolicy</b> fields again.
     *  The other fields will retain their existing settings.<br>
     *  <br>
     *  <b>For the GetItem family of calls:</b> Only returned if the
     *  site you sent the request to supports the seller's return policy. Typically,
     *  the return policy details are only returned when the request is sent to the
     *  listing site.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call can be used to retrieve site-wide return policy metadata, but it is recommended that sellers use the <b>GetCategoryFeatures</b> call instead, as this call was recently updated to retrieve category-level metadata for both domestic and international return policies.</span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\ReturnPolicyType $returnPolicy
     */
    private $returnPolicy = null;

    /**
     * Enables you to view the sites on which an item can be purchased,
     *  based on the payment methods offered for the item.
     *
     * @var string[] $paymentAllowedSite
     */
    private $paymentAllowedSite = [
        
    ];

    /**
     * Indicates whether you prefer to track your eBay listings by eBay Item ID or
     *  by your own SKU. <br>
     *  <br>
     *  If a seller will be converting an existing eBay listing into the new Inventory model using the <b>bulkMigrateListings</b> call of the <b>Inventory API</b>, the <b>InventoryTrackingMethod</b> value must be set to <code>ItemID</code> (default value), but the item must also have a SKU value (Item.<b>SKU</b> or Variation.<b>SKU</b>) associated with it.
     *  <b>For GetItem and related calls</b>:
     *  Only returned when the value is <code>SKU</code>; not returned when the value is <code>ItemID</code>.
     *
     * @var string $inventoryTrackingMethod
     */
    private $inventoryTrackingMethod = null;

    /**
     * Indicates whether the item can be paid for through a payment gateway
     *  (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, then
     *  integrated merchant credit card (IMCC) is enabled for credit cards because
     *  the seller has a payment gateway account. Therefore, if
     *  <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, an AmEx, Discover, or VisaMC
     *  is returned for an item, then on checkout, an online credit-card payment is
     *  processed through a payment gateway account. A payment gateway account is
     *  used by sellers to accept online credit cards (Visa, MasterCard, American
     *  Express, and Discover).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer supports electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *
     * @var bool $integratedMerchantCreditCardEnabled
     */
    private $integratedMerchantCreditCardEnabled = null;

    /**
     * Variations are multiple similar (but not identical) items in a
     *  single fixed-price listing. For example, a T-shirt listing
     *  could contain multiple items of the same brand
     *  that vary by color and size (like "Blue, Large" and
     *  "Black, Medium"). Each variation specifies a combination of one of
     *  these colors and sizes. Each variation can have a different
     *  quantity and price. You can buy multiple items from one
     *  variation at the same time. (That is, one order line item can contain
     *  multiple items from a single variation.) <br>
     *  <br>
     *  If you list in two categories, both categories must support
     *  listing with variations. See <b>VariationsEnabled</b> in
     *  <b>GetCategoryFeatures</b> to determine applicable categories.<br>
     *  <br>
     *  <b>For ReviseFixedPriceItem and
     *  RelistFixedPriceItem:</b> Once a listing has been submitted with variations,
     *  you can't delete all the variations when you revise or relist the listing (because
     *  it would be considered a different listing). You also can't add or change variation
     *  specifics (because they are unique identifiers). However, you can delete or replace
     *  individual variations as needed to match your current inventory. If a variation has
     *  no purchases, use the <b>Variation.Delete</b> field to delete the variation. If it has
     *  inventory, set the Quantity to 0.<br>
     *  <br>
     *  As a best practice, if you want to revise multiple variations in
     *  the same listing at the same time (i.e., within a very short period),
     *  use a single <b>ReviseFixedPriceItem</b> request and include all the
     *  variation revisions in the same request. If your application design
     *  requires you to revise each variation individually, then avoid using
     *  multiple parallel threads. Instead, use a serial, synchronous
     *  process. That is, wait until each revision has been
     *  processed by eBay before submitting the next revision request for
     *  another variation in the same listing.<br>
     *  <br>
     *  <b>For GetItem and related calls</b> Only returned
     *  when a listing has variations.
     *  <br><br>
     *  <b>For GetSellerList:</b> Only returned when a listing
     *  has variations, <b>IncludeVariations</b> was set to <code>true</code> in the request,
     *  the <b>DetailLevel</b> was set to <b>ReturnAll</b>, and an applicable pagination
     *  value and time range were specified.<br>
     *  <br>
     *  <b>For GetItemTransactions</b> Only returned in Item
     *  when a listing has variations and <b>IncludeVariations</b> was set to <code>true</code>
     *  in the request. (Also see <b>Variation</b> returned in <b>Transaction</b> for
     *  information about which variation was actually purchased.)
     *  <br>
     *  <br>
     *  <b>For GetSellerEvents, GetMyeBayBuying, and GetMyeBaySelling:</b> Only returned
     *  when a listing has variations and <b>HideVariations</b> was set to <code>false</code>
     *  or not specified in the request.
     *
     * @var \Nogrod\eBaySDK\MerchantData\VariationsType $variations
     */
    private $variations = null;

    /**
     * A list of parts compatibility information specified as name and value pairs.
     *  Describes an assembly with which a part is compatible (i.e., compatibility by
     *  application). For example, to specify a part's compatibility with a vehicle,
     *  the name (search name) would map to standard vehicle characteristics (e.g.,
     *  Year, Make, Model, Trim, and Engine). The values would describe the specific
     *  vehicle, such as a 2006 Honda Accord. Use the <b>Product Metadata API</b> to
     *  retrieve valid search names and corresponding values.
     *  <br><br>
     *  <b>For the <b>AddItem</b> family of calls:</b> Use this for specifying
     *  parts compatibility by application manually. This can only be used in
     *  categories that support parts compatibility by application. Use <b
     *  class="con">GetCategoryFeatures</b> with the <b>CompatibilityEnabled</b>
     *  feature ID to determine which categories support parts compatibility by
     *  application.
     *  <br><br>
     *  <b>For ReviseFixedPriceItem and ReviseItem:</b> When you revise a
     *  listing, if the listing has bids and/or ends within 12 hours, item
     *  compatibilities cannot be deleted. You may add item compatibilities at any
     *  time.
     *  <br><br>
     *  <b>For GetItem:</b> <b
     *  class="con">ItemCompatibilityList</b> is only returned if the
     *  seller included item compatibility in the listing and <b
     *  class="con">IncludeItemCompatibilityList</b> is set to <code>true</code> in the
     *  <b>GetItem</b> request.
     *  <br><br>
     *
     * @var \Nogrod\eBaySDK\MerchantData\ItemCompatibilityListType $itemCompatibilityList
     */
    private $itemCompatibilityList = null;

    /**
     * Indicates the number of compatible applications specified for the given item.
     *  Applies to items listed with fitment by application only (either manually or
     *  with a catalog product that supports compatibility).
     *  <br><br>
     *  Not returned if the item has no specified compatible applications. Not
     *  returned if <b>IncludeItemCompatibilityList</b> is
     *  specified in the request.
     *  <br><br>
     *  To retrieve the list of compatibility information, set <b>
     *  IncludeItemCompatibilityList</b> to <code>true</code> in the request.
     *  <br><br>
     *  Parts Compatibility is supported in limited Parts & Accessories
     *  categories for the eBay Motors (US) site (site ID 100) only.
     *
     * @var int $itemCompatibilityCount
     */
    private $itemCompatibilityCount = null;

    /**
     * This is a numeric identifier for an item's condition. All numeric Condition ID values map to an item condition string value. For example, numeric identifer <code>1000</code> maps to <code>New</code> condition.
     *  <br><br>
     *  Most eBay categories require an item condition, but a few eBay categories do not. To verify if the listing category requires an item condition, and if so, what are the supported item condition and <b>ConditionID</b> values, you can call <b>GetCategoryFeatures</b>. In this <b>GetCategoryFeatures</b> call, you'd pass in the listing <b>CategoryID</b> value and two <b>FeatureID</b> fields - one of these fields set to <code>ConditionEnabled</code>, and the other field set to <code>ConditionValues</code>.
     *  <br><br>
     *  In the <b>GetCategoryFeatures</b> response, look at the Category.<b>ConditionEnabled</b> to see if item condition is required for the category. Then look at the Category.<b>ConditionValues</b> container in the response for the full list of Condition IDs that you can pass in through the <b>ConditionID</b> field of an Add/Revise/Relist/Verify call. Note that the Condition.<b>DisplayName</b> value in the response is the actual condition value that will appear in the actual eBay listing.
     *  <br>
     *  <br>
     *  If you pass in a <b>ConditionID</b> value
     *  that is not valid for the category, or if you don't pass in a <b>ConditionID</b> value at all for a category that requires it, the listing request fails.
     *  <br><br>
     *  If you are listing in two categories (using a secondary category), it is the primary listing category that determines which <b>ConditionID</b> values are supported.
     *  <br><br>
     *  <b>For Revise/Relist calls:</b> In most cases, you can change the <b>ConditionID</b> value (if applicable/warranted), with the exception being an auction listing that has one or more bids, or any listing that is scheduled to end in 12 hours or less. <br>
     *  <br>
     *  <b>For GetItem:</b> The
     *  <b>ConditionID</b> value is always returned if set for the listing. <b>GetItem</b> also returns
     *  the item condition string value in the <b>ConditionDisplayName</b> field.
     *
     * @var int $conditionID
     */
    private $conditionID = null;

    /**
     * This string field is used by the seller to more clearly describe the condition of items that are not brand new.
     *  <br>
     *  <br>
     *  The <b>ConditionDescription</b> field is available for all categories, including categories where the condition type is not applicable (e.g., Antiques). This field is applicable for all item conditions except 'New', 'Brand New', 'New with tags', and 'New in box'. If <b>ConditionDescription</b> is used with these conditions (Condition IDs 1000-1499), eBay will simply ignore this field if included, and eBay will return a warning message to the user.
     *  <br>
     *  <br>
     *  This field should only be used to further clarify the condition of the used item. For example, "The right leg of the chair has a small scratch, and on the seat back there is a light blue stain about the shape and size of a coin." It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition type (<b>Item.ConditionID</b>), condition description, item description (<b>Item.Description</b>), and the listing's pictures do not contradict one another.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>ConditionDescription</b> field is optional For <b>Add</b>/<b>Revise</b>/<b>Relist</b> API calls.
     *  <b>ConditionDescription</b> is currently supported on the eBay US and US eBay Motors (0), UK (3), CA (2), CAFR (210), AU (15), AT (16), BEFR (23), BENL (123), FR (71), DE (77), IT (101), NL (146), ES (186), CH (193), IE (205) and PL (212) sites.
     *  </span>
     *  <br>
     *  The <b>ConditionDescription</b> field is returned by <b>GetItem</b> (and other related calls that return the Item object) if a condition description is specified in the listing.
     *  <br>
     *
     * @var string $conditionDescription
     */
    private $conditionDescription = null;

    /**
     * The human-readable label for the item condition.
     *  Display names are localized for the site on
     *  which they're listed (not necessarily the site on which
     *  they're viewed).<br>
     *  <br>
     *  Most categories use the same display name for the
     *  same condition ID. Some categories may override the display name
     *  based on buyer expectations for items in the category.
     *  For example, condition ID 1000 could be called
     *  "New" in one category and "New with tags" in another.<br>
     *  <br>
     *  Behind the scenes, eBay's search engine uses the ID
     *  (not the display name) to determine whether items are
     *  new, used, or refurbished.<br>
     *  <br>
     *  Only returned when the seller specified <b>ConditionID</b> in their
     *  listing.
     *
     * @var string $conditionDisplayName
     */
    private $conditionDisplayName = null;

    /**
     * Tax exception category code. This is to be used only
     *  by sellers who have opted into sales tax being calculated
     *  by a sales tax calculation vendor. If you are interested
     *  in becoming a tax calculation vendor partner with eBay,
     *  contact developer-relations@ebay.com.
     *
     * @var string $taxCategory
     */
    private $taxCategory = null;

    /**
     * Indicates the type of message that will be returned describing the quantity
     *  available for the item.
     *
     * @var string $quantityAvailableHint
     */
    private $quantityAvailableHint = null;

    /**
     * The quantity threshold above which the seller prefers not to show the actual
     *  quantity available. Returned when the quantity available is greater than the
     *  value of quantity threshold. Currently, 10 is the only available value for
     *  this threshold.
     *
     * @var int $quantityThreshold
     */
    private $quantityThreshold = null;

    /**
     * This container provides information for an item that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites, while MAP is available only on the US site.
     *  <br><br>
     *  Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a 'special account flag' (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation items. STP is intended for eBay partners and their sellers only.
     *  <br><br>
     *  As a seller listing Discount Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing.
     *  <br><br>
     *  <b>For AddFixedPriceItem, RelistFixedPriceItem, ReviseFixedPriceItem, and VerifyAddFixedPriceItem</b>: If you are listing variations (MSKU items), use <b>Variation.DiscountPriceInfo</b> for each variation.
     *
     * @var \Nogrod\eBaySDK\MerchantData\DiscountPriceInfoType $discountPriceInfo
     */
    private $discountPriceInfo = null;

    /**
     * A descriptive free-text title for a US or CA eBay Motors vehicle listing. This title appears below eBay's pre-filled listing title on the View Item page (not at the top of the View Item page). It's also appended to the listing title in search results (like a subtitle) on the US eBay Motors site. Keywords in this title help buyers find or distinguish your listing.
     *  <br><br>
     *  Applicable to listings in US eBay Motors Cars and Trucks, Motorcycle, and some of the Powersport, Boats and RV campers categories; or to Cars and Trucks listings on CA eBay Motors.
     *  <br><br>
     *  This replaces the older US and Canada eBay Motors Subtitle attribute (attribute ID 4148).
     *  <br>
     *
     * @var string $sellerProvidedTitle
     */
    private $sellerProvidedTitle = null;

    /**
     * This field displays the Vehicle Identification Number, which is a unique serial number for a motor vehicle.
     *  <br><br>
     *  This field is applicable to listings in US eBay Motors Cars and Trucks (6001), Motorcycles (6024), Commercial Trucks (63732), RVs and Campers (50054), ATVs (6723), Snowmobiles (42595), and UTVs (173665); and to Cars and Trucks listings in CA, CAFR and AU eBay Motors. For vehicle categories that do not use VIN, call <b>GetCategorySpecifics</b> to determine applicable Item Specifics (such as 'Hull ID Number' for Boats).
     *  <br><br>
     *  For the US, CA, and CAFR eBay Motors sites, required for cars and trucks from model year 1981 and later. (The US developed national standards for VIN values in 1981.)
     *  <br><br>
     *  For the eBay Australia site, required for vehicles from model year 1989 or later. For the eBay Australia site, only appears on the View Item page if you also specify the date of first registration in the listing's Item Specifics.
     *  <br><br>
     *  Appears in the VIN field in the Item Specifics section of eBay's View Item page.
     *  <br>
     *
     * @var string $vIN
     */
    private $vIN = null;

    /**
     * This field is deprecated.
     *
     * @var string $vINLink
     */
    private $vINLink = null;

    /**
     * Vehicle Registration Mark, which is a unique identifier for a motor vehicle in the UK.
     *  <br><br>
     *  Applicable to listings in UK eBay Motors Cars and Trucks, Motorcycle, and some Powersport categories.
     *  <br><br>
     *  Appears as a VRM field in the Item Specifics section of eBay's View Item page. On the View Item page, the VRM value is masked (i.e., only a portion of the value is shown to users). In the <b>GetItem</b> response, the VRM is only returned if the call is made by the seller (i.e., the AuthToken is associated with the vehicle's seller).
     *
     * @var string $vRM
     */
    private $vRM = null;

    /**
     * This field is deprecated.
     *
     * @var string $vRMLink
     */
    private $vRMLink = null;

    /**
     * This container is used to set the minimum number of event tickets that should remain available after a buyer makes a purchase. This functionality allows the seller to avoid the possibility of being left with just one event ticket after a sale.
     *  <br><br>
     *  This container can be used when adding, revising, or relisting event tickets, and it will only be returned in <b>GetItem</b> if set for the listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\QuantityInfoType $quantityInfo
     */
    private $quantityInfo = null;

    /**
     * This container is used if the seller would like to use/reference Business Policies to create, revise, relist, or verify their listing. The seller's account must be opted in to Business Policies to use this container. If this container is used, exactly one Payment Business Policy, one Shipping Business Policy, and one Return Business Policy is applied to the listing. If the seller's account is not opted in to Business Policies, that seller may not use this container. Sellers must opt-in to Business Policies through My eBay or by using the <b>optInToProgram</b> call of the <b>eBay Account API</b>.
     *  <br><br>
     *  If Business Policies are applied to a listing, all payment, shipping, and return policy settings in these policies will override any other payment, shipping, or return policy legacy fields that are included in the call request.
     *  <br><br>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellerProfilesType $sellerProfiles
     */
    private $sellerProfiles = null;

    /**
     * This container is used when the seller wants to override the flat shipping costs for all domestic and/or all international shipping services defined in the Business Policies shipping profile referenced in the <b>SellerProfiles.SellerShippingProfile.ShippingProfileID</b> field. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services.
     *  <br><br>
     *  A <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service that is defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of the Business Policies shipping profile.
     *  <br><br>
     *  Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping services in the Business Policies shipping profile.
     *  <br><br>
     *  <b>For Revise and Relist calls</b>: To delete all shipping service cost overrides when you revise or relist, specify <b>Item.ShippingServiceCostOverrideList</b> in <b>DeletedField</b>, and don't pass <b>ShippingServiceCostOverrideList</b> in the request.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ShippingServiceCostOverrideType[] $shippingServiceCostOverrideList
     */
    private $shippingServiceCostOverrideList = null;

    /**
     * This field is reserved for internal or future use.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ShippingOverrideType $shippingOverride
     */
    private $shippingOverride = null;

    /**
     * Container consisting of dimension and size details related to a shipping package in which an item will be sent. The information in this container is applicable if the seller is using calculated shipping or flat rate shipping using shipping rate tables with weight surcharges. This container is only returned in the <b>Get</b> calls if specified for the item.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ShipPackageDetailsType $shippingPackageDetails
     */
    private $shippingPackageDetails = null;

    /**
     * This boolean field is returned as <code>true</code> if the listing was created by a Top-Rated Seller and the listing has all of the requirements that qualifies it as a Top-Rated Plus listing. The Top-Rated Seller program is only available on the US, UK, and Germany sites. See the
     *  <a href="https://pages.ebay.com/help/sell/top-rated.html#what">Top-Rated Seller requirements</a> help topic for more information on qualifying as a Top-Rated Seller and the <a href="https://pages.ebay.com/help/sell/top-rated.html#plus">Top-Rated Plus listing requirements</a> help topic for more information on what a listing must offer to qualify as a Top-Rated Plus listing and get the Top-Rated Plus badge. Information on the overall program can be found on the <a href="https://pages.ebay.com/sellerinformation/build-your-business-online/status-standards/top-rated-seller.html">Top-Rated Seller home page</a> in the Seller Center.
     *
     * @var bool $topRatedListing
     */
    private $topRatedListing = null;

    /**
     * This container is used by the seller to restrict the quantity of items that may be purchased by one buyer during the duration of a fixed-price listing (single or multi-variation). This is an optional container that can be used with an <b>Add</b>, <b>Revise</b>, or <b>Relist</b> call.
     *  <br><br>
     *  This container is not applicable to auction listings.
     *
     * @var \Nogrod\eBaySDK\MerchantData\QuantityRestrictionPerBuyerInfoType $quantityRestrictionPerBuyer
     */
    private $quantityRestrictionPerBuyer = null;

    /**
     * This value sets the minimum price threshold for a seller's product price in a fixed-price listing. Regardless of the product price on eBay Value Box or Amazon listings, the seller's product price will not be reduced lower than this dollar value.
     *  <br><br>
     *  This value is only applicable to sellers enabled to use the <b>Dynamic Pricing</b> API, and if a dynamic pricing rule is assigned to the listing's product.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $floorPrice
     */
    private $floorPrice = null;

    /**
     * This value sets the maximum price threshold for a seller's product price in a fixed-price listing. Regardless of the product price on Amazon or eBay Value Box, the seller's product price will not be raised higher than this dollar value.
     *  <br><br>
     *  This value is only applicable to sellers enabled to use the <b>Dynamic Pricing</b> API, and if a dynamic pricing rule is assigned to the listing's product. If this field is not specified through the <b>Dynamic Pricing</b> API, an eBay system-level threshold is used to avoid any undesirable results.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $ceilingPrice
     */
    private $ceilingPrice = null;

    /**
     * This boolean field is returned as <code>true</code> if the item is eligible is to be shipped internationally via eBay's Global Shipping Program. With the Global Shipping Program, the buyer pays a single shipping fee for the order, which includes the domestic shipping leg, the international shipping leg, and handling charges, and import charges.
     *  <br/><br/>
     *  eBay uses a shipping partner that allows the seller to ship the package to a domestic location and then the shipping partner takes care of the rest, including the international shipping leg.
     *
     * @var bool $isIntermediatedShippingEligible
     */
    private $isIntermediatedShippingEligible = null;

    /**
     * This container provides information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare prices. eBay uses the <b>UnitType</b> and <b>UnitQuantity</b> values and the item's listed price to calculate and display the per-unit price on eBay EU sites.
     *  <br/><br/>
     *  This container will only be returned if price per unit information exists for the listing, and the <b>IncludeItemSpecifics</b> field was included in the call request and set to <code>true</code>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\UnitInfoType $unitInfo
     */
    private $unitInfo = null;

    /**
     * The identifier of the original listing that contained the item before the item was relisted. This field is only returned for an item that was relisted.
     *
     * @var int $relistParentID
     */
    private $relistParentID = null;

    /**
     * This string value provides more details about the item's condition.
     *
     * @var string $conditionDefinition
     */
    private $conditionDefinition = null;

    /**
     * This boolean field is returned as <code>true</code> if the listing has been hidden from all searches occurring on eBay. If a listing is hidden from eBay searches, the reason can be found in the <b>ReasonHideFromSearch</b> field.
     *
     * @var bool $hideFromSearch
     */
    private $hideFromSearch = null;

    /**
     * This field is returned only when the listing is currently being hidden from any searches occurring on eBay. Listings may be hidden from search if an active listing is currently out of stock or if the listing has been determined by eBay to be a duplicate listing.
     *
     * @var string $reasonHideFromSearch
     */
    private $reasonHideFromSearch = null;

    /**
     * This boolean field should be included and set to <code>true</code> if the seller wishes to see listing recommendations in the call response via the <b>ListingRecommendations</b> container. Listing recommendations provide one or more messages to the seller on recommendations on:
     *  <b></b>
     *  <ul>
     *  <li>improving a listing </li>
     *  <li>bringing a listing up to standard in regards to Top-Rated seller/listing requirements </li>
     *  <li>mandated or recommended Item Specifics </li>
     *  <li>picture quality requirements </li>
     *  <li>pricing and/or listing format recommendations </li>
     *  <li>recommended keywords and/or Item Specifics in a Title </li>
     *  <li>offering fast handling (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge </li>
     *  </ul>
     *
     * @var bool $includeRecommendations
     */
    private $includeRecommendations = null;

    /**
     * This container is used in <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> listing calls by the seller to enable a listing with the 'In-Store Pickup' feature. The 'In-Store Pickup' feature is only available to a limited number of large retail merchants in the US, Canada, UK, Germany, and Australia marketplaces.
     *  <br/><br/>
     *  This container is returned in the 'Get' calls if the listing is enabled with the In-Store Pickup feature.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PickupInStoreDetailsType $pickupInStoreDetails
     */
    private $pickupInStoreDetails = null;

    /**
     * The unique identifier of the eBay site on which the item is listed. If the Site ID is already passed in as an HTTP header, this field is not needed. If Site ID is specified in the HTTP header and through this request field, the value in this field will override the value in the HTTP headerWhen this is given we would ignore the site Id, which is given in header. See <strong>SiteCodeType</strong> for a full list of Site IDs for the eBay sites that are compatible with the Trading API.
     *
     * @var int $siteId
     */
    private $siteId = null;

    /**
     * This boolean field is returned as <code>true</code> if the actual quantity of a multiple-quantity, fixed-price listing (indicated in the <b>Item.Quantity</b> field) can not be accurately determined by eBay.
     *
     * @var bool $ignoreQuantity
     */
    private $ignoreQuantity = null;

    /**
     * This field is only returned if <code>true</code>, and indicates that the 'Click and Collect' feature is available for this item. With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK, Australia, and Germany sites, and then pick up their order from the nearest 'eBay Collection Point'. Note that an item may be eligible for Click and Collect, but this logistics option will only surface if the prospective buyer is within the vicinity of an 'eBay Collection Point'.
     *  <br/><br/>
     *  The Click and Collect feature is only available on the eBay UK, Australia, and Germany sites. For more information about Click and Collect, see the
     *  <a href="https://ebay.co.uk/clickandcollect/">Click and Collect</a> home page on the eBay UK site, the <a href="https://sellercentre.ebay.com.au/click-and-collect">Click and Collect</a> home page on the eBay Australia site, or the <a href="https://pages.ebay.de/einkaufen/click-and-collect.html">Click and Collect</a> home page on the eBay Germany site.
     *  <br>
     *  <br>
     *  Not all categories on the UK, Australia, and Germany sites support Click and Collect listings. To verify if a specific category on these eBay sites support Click and Collect listings, use the <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategoryFeatures.html">GetCategoryFeatures</a> call, passing in one or more <b>CategoryID</b> values and a <b>PickupDropOffEnabled</b> value in the <b>FeatureID</b> field.
     *  <br/><br/>
     *  Look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings will be automatically evaluated for Click and Collect eligibility.
     *  </span>
     *
     * @var bool $availableForPickupDropOff
     */
    private $availableForPickupDropOff = null;

    /**
     * For 'Click and Collect' eligible sellers, this field was once used to set 'Click and Collect' eligibility at the listing level. However, now the seller can only opt in to 'Click and Collect' at the account level, and then each of their listings will be automatically evaluated for 'Click and Collect' eligibility.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Until this field is fully deprecated in the Trading WSDL (and in Add/Revise/Relist/Verify calls), it can still be used, but it will have no functional affect. However, if set in an Add/Revise/Relist/Verify call, it will get returned in <b>GetItem</b>, but it won't be a true indicator if the item is available for the 'Click and Collect' logistics type. Instead, the <b>Item.AvailableForPickupDropOff</b> field should be referenced to see if the item is available for 'Click and Collect'.
     *  </span>
     *
     * @var bool $eligibleForPickupDropOff
     */
    private $eligibleForPickupDropOff = null;

    /**
     * <span class="tablenote"><b>Note:</b> This field is no longer applicable as eBay Live Auctions are no longer being held as of September 1, 2018. If this field is used in an Add/Revise/Relist call, it will be ignored and dropped.
     *  </span>
     *
     * @var bool $liveAuction
     */
    private $liveAuction = null;

    /**
     * This container is used in <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> listing calls to designate the listing as a digital gift card listing. It is also returned in <strong>GetItem</strong> to indicate that the listing contains a digital gift card.
     *
     * @var \Nogrod\eBaySDK\MerchantData\DigitalGoodInfoType $digitalGoodInfo
     */
    private $digitalGoodInfo = null;

    /**
     * If <code>true</code>, this item is being offered under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be able to offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia marketplaces.
     *  </span>
     *
     * @var bool $eBayPlus
     */
    private $eBayPlus = null;

    /**
     * If <code>true</code>, this item is eligible to be listed under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia marketplaces.
     *  </span>
     *
     * @var bool $eBayPlusEligible
     */
    private $eBayPlusEligible = null;

    /**
     * The boolean value that is returned in this field will indicate whether or not a digital gift card can be delivered by email to the buyer or recipient of the gift card. This field is only applicable to digital gift card listings.
     *
     * @var bool $eMailDeliveryAvailable
     */
    private $eMailDeliveryAvailable = null;

    /**
     * This boolean field indicates whether or not the listing description is HTTPS secure/compliant. To be HTTPS secure/compliant, the <b>Item.Description</b> field may not contain any links to site pages that use the HTTP (and not HTTPS) protocol. This field will be returned with each listing that is found unless one or more <b>OutputSelector</b> fields are used and <code>Item.IsSecureDescription</code> is not one of the values passed in to one of these fields.
     *  <br/><br/>
     *  If this field is returned as <code>true</code>, the listing is HTTPs secure/compliant, and the whole listing description will appear on the View Item page for the listing. If this field is returned as <code>false</code>, the listing is not HTTPs secure/compliant, and only a partial/brief listing description will appear on the View Item page for the listing, with a link to the full listing description that will load in another tab.
     *  <br/><br/>
     *  If the listing description is not HTTPS compliant, the fix is to call <b>ReviseItem</b> or <b>ReviseFixedPriceItem</b> and update the <b>Item.Description</b> field, removing all links to HTTP pages.
     *  <br/><br/>
     *  For more information about why eBay made this change, please see the <a href="http://pages.ebay.com/seller-center/seller-updates/2017-fall/policy-updates.html" target="_blank">Policy Updates</a> page of the Fall 2017 Seller Updates page.
     *
     * @var bool $isSecureDescription
     */
    private $isSecureDescription = null;

    /**
     * Gets as applicationData
     *
     * Return custom, application-specific data associated with the item.
     *  The data you specify is stored by eBay with the item for your own
     *  reference, but it is not used by eBay in any way. Use
     *  <b>ApplicationData</b> to store special information for yourself, such as
     *  a part number. For a SKU in an eBay.com listing, use the <b>SKU</b>
     *  element instead. To remove this value when revising or relisting an
     *  item, use <b>DeletedField</b>.
     *
     * @return string
     */
    public function getApplicationData()
    {
        return $this->applicationData;
    }

    /**
     * Sets a new applicationData
     *
     * Return custom, application-specific data associated with the item.
     *  The data you specify is stored by eBay with the item for your own
     *  reference, but it is not used by eBay in any way. Use
     *  <b>ApplicationData</b> to store special information for yourself, such as
     *  a part number. For a SKU in an eBay.com listing, use the <b>SKU</b>
     *  element instead. To remove this value when revising or relisting an
     *  item, use <b>DeletedField</b>.
     *
     * @param string $applicationData
     * @return self
     */
    public function setApplicationData($applicationData)
    {
        $this->applicationData = $applicationData;
        return $this;
    }

    /**
     * Adds as attributeSet
     *
     * This field has been deprecated, and should no longer be used.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\AttributeSetType $attributeSet
     */
    public function addToAttributeSetArray(\Nogrod\eBaySDK\MerchantData\AttributeSetType $attributeSet)
    {
        $this->attributeSetArray[] = $attributeSet;
        return $this;
    }

    /**
     * isset attributeSetArray
     *
     * This field has been deprecated, and should no longer be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributeSetArray($index)
    {
        return isset($this->attributeSetArray[$index]);
    }

    /**
     * unset attributeSetArray
     *
     * This field has been deprecated, and should no longer be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributeSetArray($index)
    {
        unset($this->attributeSetArray[$index]);
    }

    /**
     * Gets as attributeSetArray
     *
     * This field has been deprecated, and should no longer be used.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AttributeSetType[]
     */
    public function getAttributeSetArray()
    {
        return $this->attributeSetArray;
    }

    /**
     * Sets a new attributeSetArray
     *
     * This field has been deprecated, and should no longer be used.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AttributeSetType[] $attributeSetArray
     * @return self
     */
    public function setAttributeSetArray(array $attributeSetArray)
    {
        $this->attributeSetArray = $attributeSetArray;
        return $this;
    }

    /**
     * Adds as attribute
     *
     * This field has been deprecated, and should no longer be used.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\AttributeType $attribute
     */
    public function addToAttributeArray(\Nogrod\eBaySDK\MerchantData\AttributeType $attribute)
    {
        $this->attributeArray[] = $attribute;
        return $this;
    }

    /**
     * isset attributeArray
     *
     * This field has been deprecated, and should no longer be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributeArray($index)
    {
        return isset($this->attributeArray[$index]);
    }

    /**
     * unset attributeArray
     *
     * This field has been deprecated, and should no longer be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributeArray($index)
    {
        unset($this->attributeArray[$index]);
    }

    /**
     * Gets as attributeArray
     *
     * This field has been deprecated, and should no longer be used.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AttributeType[]
     */
    public function getAttributeArray()
    {
        return $this->attributeArray;
    }

    /**
     * Sets a new attributeArray
     *
     * This field has been deprecated, and should no longer be used.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AttributeType[] $attributeArray
     * @return self
     */
    public function setAttributeArray(array $attributeArray)
    {
        $this->attributeArray = $attributeArray;
        return $this;
    }

    /**
     * Adds as lookupAttribute
     *
     * This field is deprecated, and should no longer be used.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\LookupAttributeType $lookupAttribute
     */
    public function addToLookupAttributeArray(\Nogrod\eBaySDK\MerchantData\LookupAttributeType $lookupAttribute)
    {
        $this->lookupAttributeArray[] = $lookupAttribute;
        return $this;
    }

    /**
     * isset lookupAttributeArray
     *
     * This field is deprecated, and should no longer be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLookupAttributeArray($index)
    {
        return isset($this->lookupAttributeArray[$index]);
    }

    /**
     * unset lookupAttributeArray
     *
     * This field is deprecated, and should no longer be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLookupAttributeArray($index)
    {
        unset($this->lookupAttributeArray[$index]);
    }

    /**
     * Gets as lookupAttributeArray
     *
     * This field is deprecated, and should no longer be used.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LookupAttributeType[]
     */
    public function getLookupAttributeArray()
    {
        return $this->lookupAttributeArray;
    }

    /**
     * Sets a new lookupAttributeArray
     *
     * This field is deprecated, and should no longer be used.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LookupAttributeType[] $lookupAttributeArray
     * @return self
     */
    public function setLookupAttributeArray(array $lookupAttributeArray)
    {
        $this->lookupAttributeArray = $lookupAttributeArray;
        return $this;
    }

    /**
     * Gets as autoPay
     *
     * If <code>true</code>, the seller requests immediate payment for the item.
     *  If <code>false</code> or not specified, immediate payment is not requested.
     *  (In responses, does not indicate whether the item is actually still a
     *  candidate for purchase via immediate payment.)<br>
     *  <br>
     *  Only applicable to items listed on PayPal-enabled sites
     *  in categories that support immediate payment (see <b>AutoPayEnabled</b> in
     *  <b>GetCategories</b>), or if the seller is opted into the new eBay Managed Payments program.
     *  <br>
     *  <br>
     *  To create an Immediate Payment listing, <b>AutoPay</b> must be <code>true</code>,
     *  <b>PayPalEmailAddress</b> must be a valid PayPal email address for the seller, and the only included
     *  <b>PaymentMethods</b> value must be <code>PayPal</code>.
     *  <br/><br/>
     *  For a non-Immediate Payment listing,
     *  the <b>AutoPay</b> flag is not required since it defaults to <code>false</code>.
     *
     * @return bool
     */
    public function getAutoPay()
    {
        return $this->autoPay;
    }

    /**
     * Sets a new autoPay
     *
     * If <code>true</code>, the seller requests immediate payment for the item.
     *  If <code>false</code> or not specified, immediate payment is not requested.
     *  (In responses, does not indicate whether the item is actually still a
     *  candidate for purchase via immediate payment.)<br>
     *  <br>
     *  Only applicable to items listed on PayPal-enabled sites
     *  in categories that support immediate payment (see <b>AutoPayEnabled</b> in
     *  <b>GetCategories</b>), or if the seller is opted into the new eBay Managed Payments program.
     *  <br>
     *  <br>
     *  To create an Immediate Payment listing, <b>AutoPay</b> must be <code>true</code>,
     *  <b>PayPalEmailAddress</b> must be a valid PayPal email address for the seller, and the only included
     *  <b>PaymentMethods</b> value must be <code>PayPal</code>.
     *  <br/><br/>
     *  For a non-Immediate Payment listing,
     *  the <b>AutoPay</b> flag is not required since it defaults to <code>false</code>.
     *
     * @param bool $autoPay
     * @return self
     */
    public function setAutoPay($autoPay)
    {
        $this->autoPay = $autoPay;
        return $this;
    }

    /**
     * Gets as biddingDetails
     *
     * Detailed information about a bid. For <b>GetMyeBayBuying</b>, returned as a self-closed element if no bids meet the request criteria.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BiddingDetailsType
     */
    public function getBiddingDetails()
    {
        return $this->biddingDetails;
    }

    /**
     * Sets a new biddingDetails
     *
     * Detailed information about a bid. For <b>GetMyeBayBuying</b>, returned as a self-closed element if no bids meet the request criteria.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BiddingDetailsType $biddingDetails
     * @return self
     */
    public function setBiddingDetails(\Nogrod\eBaySDK\MerchantData\BiddingDetailsType $biddingDetails)
    {
        $this->biddingDetails = $biddingDetails;
        return $this;
    }

    /**
     * Gets as buyerProtection
     *
     * Flag to indicate an item's eligibility for the PayPal Buyer Protection
     *  program. This field is only returned if <code>true</code>. If this field is not returned, the item is not eligible for PayPal Buyer Protection. For more information on
     *  items that are eligible for PayPal Buyer Protection, see the
     *  <a href="https://pages.ebay.com/help/buy/paypal-buyer-protection.html#paypal">PayPal Buyer Protection</a> help page.
     *
     * @return string
     */
    public function getBuyerProtection()
    {
        return $this->buyerProtection;
    }

    /**
     * Sets a new buyerProtection
     *
     * Flag to indicate an item's eligibility for the PayPal Buyer Protection
     *  program. This field is only returned if <code>true</code>. If this field is not returned, the item is not eligible for PayPal Buyer Protection. For more information on
     *  items that are eligible for PayPal Buyer Protection, see the
     *  <a href="https://pages.ebay.com/help/buy/paypal-buyer-protection.html#paypal">PayPal Buyer Protection</a> help page.
     *
     * @param string $buyerProtection
     * @return self
     */
    public function setBuyerProtection($buyerProtection)
    {
        $this->buyerProtection = $buyerProtection;
        return $this;
    }

    /**
     * Gets as buyItNowPrice
     *
     * This field is only applicable for auction listings. By specifying a 'Buy It Now' price, a seller is allowing prospective buyers the opportunity to purchase the item in the auction listing at this price immediately. When a buyer uses the 'Buy It Now' option to purchase the item, the auction listing will end immediately.
     *  <br/><br/>
     *  By including this field and specifying a 'Buy It Now' price, the seller is enabling the 'Buy It Now' feature on the auction listing. If the seller includes this field for any other listing type other than an auction, this field and its price will just be ignored.
     *  <br/><br/>
     *  The price in this field must be at least 30 percent higher than the starting bid price (which is specified in an Add call through the <b>Item.StartPrice</b> field). Once a bid is made on an auction listing, and the bid meets or exceeds the <b>Item.ReservePrice</b> value (if set), the 'Buy It Now' option becomes unavailable, and this field will no longer be applicable. If there is no Reserve Price, the first bid will nullify the 'Buy It Now' option.
     *  <br><br>
     *  Keep in mind that <b>GetItem</b> (and other 'Get' calls that retrieve the Item details) may still return the <b>BuyItNowPrice</b> field for an auction item even if the 'Buy It Now' option is no longer available. Instead, a user should look for the <b>ListingDetails.BuyItNowAvailable</b> boolean field in the <b>GetItem</b> response to determine if the 'Buy It Now' option is still available for the auction item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For the US site, new eBay sellers are subject to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-Policies.html#SellerLimits">Seller Limits</a>, which limit the quantity of items that may be listed and/or the total cumulative value of these listings. While subject to these selling limits, an eBay seller can use the <b>GetMyeBaySelling</b> call to retrieve both the remaining number of listings they can create and the remaining cumulative value of these listings. These values are shown in the <b>Summary.QuantityLimitRemaining</b> and <b>Summary.AmountLimitRemaining</b> fields in the <b>GetMyeBaySelling</b> response. If a call to add an item or revise an item would result in the exceeding of these limits, the add item or revise item call will fail. These fields will only be returned if the seller is subject to seller limits.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getBuyItNowPrice()
    {
        return $this->buyItNowPrice;
    }

    /**
     * Sets a new buyItNowPrice
     *
     * This field is only applicable for auction listings. By specifying a 'Buy It Now' price, a seller is allowing prospective buyers the opportunity to purchase the item in the auction listing at this price immediately. When a buyer uses the 'Buy It Now' option to purchase the item, the auction listing will end immediately.
     *  <br/><br/>
     *  By including this field and specifying a 'Buy It Now' price, the seller is enabling the 'Buy It Now' feature on the auction listing. If the seller includes this field for any other listing type other than an auction, this field and its price will just be ignored.
     *  <br/><br/>
     *  The price in this field must be at least 30 percent higher than the starting bid price (which is specified in an Add call through the <b>Item.StartPrice</b> field). Once a bid is made on an auction listing, and the bid meets or exceeds the <b>Item.ReservePrice</b> value (if set), the 'Buy It Now' option becomes unavailable, and this field will no longer be applicable. If there is no Reserve Price, the first bid will nullify the 'Buy It Now' option.
     *  <br><br>
     *  Keep in mind that <b>GetItem</b> (and other 'Get' calls that retrieve the Item details) may still return the <b>BuyItNowPrice</b> field for an auction item even if the 'Buy It Now' option is no longer available. Instead, a user should look for the <b>ListingDetails.BuyItNowAvailable</b> boolean field in the <b>GetItem</b> response to determine if the 'Buy It Now' option is still available for the auction item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For the US site, new eBay sellers are subject to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-Policies.html#SellerLimits">Seller Limits</a>, which limit the quantity of items that may be listed and/or the total cumulative value of these listings. While subject to these selling limits, an eBay seller can use the <b>GetMyeBaySelling</b> call to retrieve both the remaining number of listings they can create and the remaining cumulative value of these listings. These values are shown in the <b>Summary.QuantityLimitRemaining</b> and <b>Summary.AmountLimitRemaining</b> fields in the <b>GetMyeBaySelling</b> response. If a call to add an item or revise an item would result in the exceeding of these limits, the add item or revise item call will fail. These fields will only be returned if the seller is subject to seller limits.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $buyItNowPrice
     * @return self
     */
    public function setBuyItNowPrice(\Nogrod\eBaySDK\MerchantData\AmountType $buyItNowPrice)
    {
        $this->buyItNowPrice = $buyItNowPrice;
        return $this;
    }

    /**
     * Gets as categoryMappingAllowed
     *
     * <span class="tablenote"><b>Note: </b> This field's value now defaults to <code>true</code> if this field is omitted. Previously, the default value was <code>false</code>, so a user had to include this field and set it to <code>true</code> in order for eBay to map an outdated Primary or Secondary Category ID to the updated Category ID.
     *  </span>
     *  This boolean field controls whether or not eBay automatically maps outdated Category ID(s) specified in a
     *  <b>PrimaryCategory</b> and/or <b>SecondaryCategory</b> container(s) to the updatd Category ID(s) no longer exists in the
     *  current category structure: If you pass a value of <code>true</code> in
     *  <b>CategoryMappingAllowed</b> or just omit the field, eBay will look up the current Category ID(s) that have replaced the specified Category ID(s). If you pass a value of <code>false</code>, eBay will not do any mapping, and the call may fail if specified Category ID(s) are no longer valid IDs for a eBay leaf category. The new Category ID(s) will be returned in the <b>CategoryID</b> and <b>Category2ID</b> fields (if secondary category is used) of the Add/Revise/Relist call response.
     *  <br/><br/>
     *
     * @return bool
     */
    public function getCategoryMappingAllowed()
    {
        return $this->categoryMappingAllowed;
    }

    /**
     * Sets a new categoryMappingAllowed
     *
     * <span class="tablenote"><b>Note: </b> This field's value now defaults to <code>true</code> if this field is omitted. Previously, the default value was <code>false</code>, so a user had to include this field and set it to <code>true</code> in order for eBay to map an outdated Primary or Secondary Category ID to the updated Category ID.
     *  </span>
     *  This boolean field controls whether or not eBay automatically maps outdated Category ID(s) specified in a
     *  <b>PrimaryCategory</b> and/or <b>SecondaryCategory</b> container(s) to the updatd Category ID(s) no longer exists in the
     *  current category structure: If you pass a value of <code>true</code> in
     *  <b>CategoryMappingAllowed</b> or just omit the field, eBay will look up the current Category ID(s) that have replaced the specified Category ID(s). If you pass a value of <code>false</code>, eBay will not do any mapping, and the call may fail if specified Category ID(s) are no longer valid IDs for a eBay leaf category. The new Category ID(s) will be returned in the <b>CategoryID</b> and <b>Category2ID</b> fields (if secondary category is used) of the Add/Revise/Relist call response.
     *  <br/><br/>
     *
     * @param bool $categoryMappingAllowed
     * @return self
     */
    public function setCategoryMappingAllowed($categoryMappingAllowed)
    {
        $this->categoryMappingAllowed = $categoryMappingAllowed;
        return $this;
    }

    /**
     * Gets as charity
     *
     * This container identifies the nonprofit organization that will benefit with a percentage of the proceeds from the sale of an item through an auction or fixed-price listing. Charity names and IDs can be found by going to <a href="https://charity.ebay.com/charity-auctions/my-causes" target="_blank">eBay for Charity</a> page and doing a search for a charity registered with the PayPal Giving Fund. The donation percentage can be set in 5 percent increments from 10 percent to 100 percent. If a benefitting charity is specified, the seller must also accept PayPal as a payment method for the item (see <b>Item.PaymentMethods</b>).
     *  <br><br>
     *  When it comes to revising an auction or fixed-price listing, you can add a benefitting charity (as long as there is at least 12 hours left before end of listing/close of auction), but you cannot remove or change a nonprofit company once one is already established in the original listing.
     *  <br><br>
     *  <b>For Revise calls</b>: The non-profit organization and donation percentage can now be modified in a Revise call as long as there are no active bids on an auction listing, or no pending Best Offers/Counter Offers on a listing.
     *  <br><br>
     *  This container will only be returned in Get calls for listings that will benefit a nonprofit organization if the item sells.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CharityType
     */
    public function getCharity()
    {
        return $this->charity;
    }

    /**
     * Sets a new charity
     *
     * This container identifies the nonprofit organization that will benefit with a percentage of the proceeds from the sale of an item through an auction or fixed-price listing. Charity names and IDs can be found by going to <a href="https://charity.ebay.com/charity-auctions/my-causes" target="_blank">eBay for Charity</a> page and doing a search for a charity registered with the PayPal Giving Fund. The donation percentage can be set in 5 percent increments from 10 percent to 100 percent. If a benefitting charity is specified, the seller must also accept PayPal as a payment method for the item (see <b>Item.PaymentMethods</b>).
     *  <br><br>
     *  When it comes to revising an auction or fixed-price listing, you can add a benefitting charity (as long as there is at least 12 hours left before end of listing/close of auction), but you cannot remove or change a nonprofit company once one is already established in the original listing.
     *  <br><br>
     *  <b>For Revise calls</b>: The non-profit organization and donation percentage can now be modified in a Revise call as long as there are no active bids on an auction listing, or no pending Best Offers/Counter Offers on a listing.
     *  <br><br>
     *  This container will only be returned in Get calls for listings that will benefit a nonprofit organization if the item sells.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CharityType $charity
     * @return self
     */
    public function setCharity(\Nogrod\eBaySDK\MerchantData\CharityType $charity)
    {
        $this->charity = $charity;
        return $this;
    }

    /**
     * Gets as country
     *
     * This two-digit enumeration value indicates the country of the seller's registration address. <b>CountryCodeType</b> defines the supported values. The <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GeteBayDetails.html">GeteBayDetails</a> call can also be used (include the <b>DetailName</b> field and set its value to <b>CountryDetails</b>) to see the full list of supported country codes.
     *  <br><br>
     *  In an Add/Revise/Relist/Verify call, this field is required.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * This two-digit enumeration value indicates the country of the seller's registration address. <b>CountryCodeType</b> defines the supported values. The <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GeteBayDetails.html">GeteBayDetails</a> call can also be used (include the <b>DetailName</b> field and set its value to <b>CountryDetails</b>) to see the full list of supported country codes.
     *  <br><br>
     *  In an Add/Revise/Relist/Verify call, this field is required.
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as crossPromotion
     *
     * This field is deprecated, and should not longer be used.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CrossPromotionsType
     */
    public function getCrossPromotion()
    {
        return $this->crossPromotion;
    }

    /**
     * Sets a new crossPromotion
     *
     * This field is deprecated, and should not longer be used.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CrossPromotionsType $crossPromotion
     * @return self
     */
    public function setCrossPromotion(\Nogrod\eBaySDK\MerchantData\CrossPromotionsType $crossPromotion)
    {
        $this->crossPromotion = $crossPromotion;
        return $this;
    }

    /**
     * Gets as currency
     *
     * In an Add/Revise/Relist/Verify call, this required three-digit enumeration value defines the currency associated with the listing site. The item price and all costs passed in the call request will be using this currency. Similarly, the listing fees and other cost-related data will be using this currency. Since the Trading API can only be used for a select number of eBay sites, only a subset of values are supporting when adding/revising/relisting an item. These supported values are discussed in the top section of <b>CurrencyCodeType</b>.
     *  <br><br>
     *  In 'Get' calls, it is possible that any of the values in <b>CurrencyCodeType</b> may appear, as some cost-related fields will show the buyer's currency type.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * In an Add/Revise/Relist/Verify call, this required three-digit enumeration value defines the currency associated with the listing site. The item price and all costs passed in the call request will be using this currency. Similarly, the listing fees and other cost-related data will be using this currency. Since the Trading API can only be used for a select number of eBay sites, only a subset of values are supporting when adding/revising/relisting an item. These supported values are discussed in the top section of <b>CurrencyCodeType</b>.
     *  <br><br>
     *  In 'Get' calls, it is possible that any of the values in <b>CurrencyCodeType</b> may appear, as some cost-related fields will show the buyer's currency type.
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as description
     *
     * The seller's description of the item.
     *  In listing requests, you can submit your description
     *  using CDATA if you want to use HTML or XML-reserved characters in the
     *  description. However, a seller can not use any active content in their listing description. Active content includes animation or video via JavaScript, Flash, plug-ins, or form actions. All active content will be blocked/removed from a listing. Removing/blocking active content will lead to faster load times of listings, make listings more mobile-friendly, improve SEO performance, and lead to a more secure eBay Marketplace.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> To ensure that their listing description is optimized when viewed on mobile devices, sellers should strongly consider using eBay's <a href="https://pages.ebay.com/sell/itemdescription/customizeyoursummary.html" target="_blank">View Item description summary feature</a> when listing their item. Using HTML div and span tag attributes, this feature allows sellers to customize and fully control the listing description that is displayed for prospective buyers when viewing the item on a mobile device. The listing description on mobile devices is limited to 800 characters, and whenever the listing description exceeds this limit, eBay uses a special algorithm to derive the best possible description within the 800-character limit. However, due to some description content being removed, it is definitely not ideal for the seller, and could possibly lead to a bad buyer experience and a Significantly not as described (SNAD) case, since the buyer may not get complete details on the item. See the eBay help page for more details on using the HTML div and span tags, and for more tips on creating listings that are mobile-friendly, see this <a href="https://pages.ebay.com/sell/itemdescription/mobilefriendlyguidelines.html" target="_blank">Best practices</a> document.
     *  </span>
     *  <br>
     *  In the listing description, sellers are only allowed to provide links to product videos, freight shipping services, or other legally required information, and when providing these links in the listing description, the secure 'https' protocol must be used instead of 'http'. In addition, any valid links to sites outside of eBay should use the <em>target="_blank"</em> attribute in the <b>a href</b> tag so a new browser window will be loaded when the link is clicked instead of buyers being redirected off of eBay. For more information on using links in the listing description, see eBay's <a href="http://pages.ebay.com/help/policies/listing-links.html" target="_blank">Links policy</a>. For more information about the stronger security standards that eBay is using, see the <a href="https://pages.ebay.com/seller-center/seller-updates/2018-fall/marketplace-update.html#use-secure-https" target="_blank">Use secure HTTPS for enhanced browser security</a> topic in the 2018 Fall Seller Update. The <a href="https://developer.ebay.com/api-docs/sell/compliance/resources/listing_violation/methods/getListingViolations" target="_blank">getListingViolations</a> method of the Compliance API can be used to see if any of the seller's active listings are not 'HTTPS' compliant.
     *  <br><br>
     *  If you embed pictures in the description (by using IMG tags) instead of using
     *  <b>PictureURL</b>, but you want a camera icon to appear in search and listing pages,
     *  specify the following null-image URL in the <b>PictureURL</b> field:
     *  https://pics.ebay.com/aw/pics/dot_clear.gif. See <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Pictures-InListing.html">Working with Pictures in an Item Listing</a> in the eBay Features Guide.
     *  <br><br>
     *  This field is conditionally required for all listings. The exception is when the seller specifies a product identifier, such as a GTIN or ePID, through the <b>ProductListingDetails</b> container and a product match is found in the eBay product catalog. If a matching product is found in the eBay product catalog, the item description will be created automatically (as long as the <b>ProductListingDetails.IncludeeBayProductDetails</b> value is <code>true</code>).
     *  <br>
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The seller's description of the item.
     *  In listing requests, you can submit your description
     *  using CDATA if you want to use HTML or XML-reserved characters in the
     *  description. However, a seller can not use any active content in their listing description. Active content includes animation or video via JavaScript, Flash, plug-ins, or form actions. All active content will be blocked/removed from a listing. Removing/blocking active content will lead to faster load times of listings, make listings more mobile-friendly, improve SEO performance, and lead to a more secure eBay Marketplace.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> To ensure that their listing description is optimized when viewed on mobile devices, sellers should strongly consider using eBay's <a href="https://pages.ebay.com/sell/itemdescription/customizeyoursummary.html" target="_blank">View Item description summary feature</a> when listing their item. Using HTML div and span tag attributes, this feature allows sellers to customize and fully control the listing description that is displayed for prospective buyers when viewing the item on a mobile device. The listing description on mobile devices is limited to 800 characters, and whenever the listing description exceeds this limit, eBay uses a special algorithm to derive the best possible description within the 800-character limit. However, due to some description content being removed, it is definitely not ideal for the seller, and could possibly lead to a bad buyer experience and a Significantly not as described (SNAD) case, since the buyer may not get complete details on the item. See the eBay help page for more details on using the HTML div and span tags, and for more tips on creating listings that are mobile-friendly, see this <a href="https://pages.ebay.com/sell/itemdescription/mobilefriendlyguidelines.html" target="_blank">Best practices</a> document.
     *  </span>
     *  <br>
     *  In the listing description, sellers are only allowed to provide links to product videos, freight shipping services, or other legally required information, and when providing these links in the listing description, the secure 'https' protocol must be used instead of 'http'. In addition, any valid links to sites outside of eBay should use the <em>target="_blank"</em> attribute in the <b>a href</b> tag so a new browser window will be loaded when the link is clicked instead of buyers being redirected off of eBay. For more information on using links in the listing description, see eBay's <a href="http://pages.ebay.com/help/policies/listing-links.html" target="_blank">Links policy</a>. For more information about the stronger security standards that eBay is using, see the <a href="https://pages.ebay.com/seller-center/seller-updates/2018-fall/marketplace-update.html#use-secure-https" target="_blank">Use secure HTTPS for enhanced browser security</a> topic in the 2018 Fall Seller Update. The <a href="https://developer.ebay.com/api-docs/sell/compliance/resources/listing_violation/methods/getListingViolations" target="_blank">getListingViolations</a> method of the Compliance API can be used to see if any of the seller's active listings are not 'HTTPS' compliant.
     *  <br><br>
     *  If you embed pictures in the description (by using IMG tags) instead of using
     *  <b>PictureURL</b>, but you want a camera icon to appear in search and listing pages,
     *  specify the following null-image URL in the <b>PictureURL</b> field:
     *  https://pics.ebay.com/aw/pics/dot_clear.gif. See <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Pictures-InListing.html">Working with Pictures in an Item Listing</a> in the eBay Features Guide.
     *  <br><br>
     *  This field is conditionally required for all listings. The exception is when the seller specifies a product identifier, such as a GTIN or ePID, through the <b>ProductListingDetails</b> container and a product match is found in the eBay product catalog. If a matching product is found in the eBay product catalog, the item description will be created automatically (as long as the <b>ProductListingDetails.IncludeeBayProductDetails</b> value is <code>true</code>).
     *  <br>
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as descriptionReviseMode
     *
     * This field is conditionally required if the listing is being revised through a Revise call, and the <b>Item.Description</b> field is one of the fields being changed. The enumeration value passed in this field specifies whether the text provided in the <b>Item.Description</b> field will prepend, append, or replace the existing text in the current <b>Item.Description</b> field.
     *
     * @return string
     */
    public function getDescriptionReviseMode()
    {
        return $this->descriptionReviseMode;
    }

    /**
     * Sets a new descriptionReviseMode
     *
     * This field is conditionally required if the listing is being revised through a Revise call, and the <b>Item.Description</b> field is one of the fields being changed. The enumeration value passed in this field specifies whether the text provided in the <b>Item.Description</b> field will prepend, append, or replace the existing text in the current <b>Item.Description</b> field.
     *
     * @param string $descriptionReviseMode
     * @return self
     */
    public function setDescriptionReviseMode($descriptionReviseMode)
    {
        $this->descriptionReviseMode = $descriptionReviseMode;
        return $this;
    }

    /**
     * Gets as distance
     *
     * This field is deprecated, and should no longer be used.
     *
     * @return \Nogrod\eBaySDK\MerchantData\DistanceType
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Sets a new distance
     *
     * This field is deprecated, and should no longer be used.
     *
     * @param \Nogrod\eBaySDK\MerchantData\DistanceType $distance
     * @return self
     */
    public function setDistance(\Nogrod\eBaySDK\MerchantData\DistanceType $distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * Gets as hitCounter
     *
     * Indicates whether an optional hit counter is displayed on the item's listing
     *  page and, if so, what type. See <b>HitCounterCodeType</b> for specific values.
     *  <br/> Restriction: <HitCounter>HiddenStyle</HitCounter> is not enabled on the Germany, Austria, Switzerland, or Poland sites.
     *
     * @return string
     */
    public function getHitCounter()
    {
        return $this->hitCounter;
    }

    /**
     * Sets a new hitCounter
     *
     * Indicates whether an optional hit counter is displayed on the item's listing
     *  page and, if so, what type. See <b>HitCounterCodeType</b> for specific values.
     *  <br/> Restriction: <HitCounter>HiddenStyle</HitCounter> is not enabled on the Germany, Austria, Switzerland, or Poland sites.
     *
     * @param string $hitCounter
     * @return self
     */
    public function setHitCounter($hitCounter)
    {
        $this->hitCounter = $hitCounter;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * The unique identifier of the eBay listing. This identifier is generated
     *  by eBay and returned in the response of an Add call if an item is successfully listed. Once an item is successfully created, the <b>ItemID</b> cannot be modified. <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Although we represent
     *  item IDs as strings in the schema, we recommend you store them as 64-bit
     *  signed integers. If you choose to store item IDs as strings, allocate at
     *  least 19 characters (assuming decimal digits are used) to hold them. Your code should be prepared to
     *  handle IDs of up to 19 digits. </span>
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
     * The unique identifier of the eBay listing. This identifier is generated
     *  by eBay and returned in the response of an Add call if an item is successfully listed. Once an item is successfully created, the <b>ItemID</b> cannot be modified. <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Although we represent
     *  item IDs as strings in the schema, we recommend you store them as 64-bit
     *  signed integers. If you choose to store item IDs as strings, allocate at
     *  least 19 characters (assuming decimal digits are used) to hold them. Your code should be prepared to
     *  handle IDs of up to 19 digits. </span>
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
     * Gets as listingDetails
     *
     * Various details about a listing, some of which are calculated or
     *  derived after the item is listed. These include the start and end
     *  time, converted (localized) prices, and certain flags that indicate
     *  whether the seller specified fields whose values are not visible to
     *  the requesting user. For <b>GetMyeBayBuying</b>, returned as a self-closed element if no listings meet the request criteria.
     *  <br/><br/>
     *  In an Add/Revise/Relist call, this container is used to set the Best Offer Auto-Accept and Best Offer Auto-Decline threshold values.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ListingDetailsType
     */
    public function getListingDetails()
    {
        return $this->listingDetails;
    }

    /**
     * Sets a new listingDetails
     *
     * Various details about a listing, some of which are calculated or
     *  derived after the item is listed. These include the start and end
     *  time, converted (localized) prices, and certain flags that indicate
     *  whether the seller specified fields whose values are not visible to
     *  the requesting user. For <b>GetMyeBayBuying</b>, returned as a self-closed element if no listings meet the request criteria.
     *  <br/><br/>
     *  In an Add/Revise/Relist call, this container is used to set the Best Offer Auto-Accept and Best Offer Auto-Decline threshold values.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ListingDetailsType $listingDetails
     * @return self
     */
    public function setListingDetails(\Nogrod\eBaySDK\MerchantData\ListingDetailsType $listingDetails)
    {
        $this->listingDetails = $listingDetails;
        return $this;
    }

    /**
     * Gets as listingDesigner
     *
     * Contains the detail data for the Listing Designer theme and template (if either are used), which can optionally be used to enhance the appearance of the description area of an item's description.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ListingDesignerType
     */
    public function getListingDesigner()
    {
        return $this->listingDesigner;
    }

    /**
     * Sets a new listingDesigner
     *
     * Contains the detail data for the Listing Designer theme and template (if either are used), which can optionally be used to enhance the appearance of the description area of an item's description.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ListingDesignerType $listingDesigner
     * @return self
     */
    public function setListingDesigner(\Nogrod\eBaySDK\MerchantData\ListingDesignerType $listingDesigner)
    {
        $this->listingDesigner = $listingDesigner;
        return $this;
    }

    /**
     * Gets as listingDuration
     *
     * Describes the number of days the seller wants the listing to be active (available for bidding/buying). The duration specifies the seller's initial intent at listing time.
     *  <br/><br/>
     *  The end time for a listing is calculated by adding the duration to the item's start time. If the listing ends early, the value of the listing duration does not change. When a listing's duration is changed, any related fees (e.g., 10-day fee) may be debited or credited (as applicable).
     *  <br><br>
     *  The valid choice of values depends on the listing format (see <b>Item.ListingType</b>). For
     *  a list of valid values, call <b>GetCategoryFeatures</b> with <b>DetailLevel</b> set to <b>ReturnAll</b>
     *  and look for <b>ListingDurations</b> information.
     *  <br><br>
     *  When you revise a listing, the duration cannot be reduced if it will result in ending the listing within 24 hours of the current date-time. You are only allowed to increase the duration of the listing if fewer than 2 hours have passed since you initially listed the item and the listing has no bids. You can decrease the value of this field only if the listing has no bids (or no items have sold) and the listing does not end within 12 hours.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2019, 'GTC' is the only supported listing duration for all eBay marketplaces with the following exceptions:
     *  <ul>
     *  <li>The following eBay Motors US categories are exempt from this change: <em>Cars & Trucks</em> (6001), <em>Motorcycles</em> (6024), <em>Other Vehicles & Trailers</em> (6038), <em>Boats</em> (26429), <em>Powersports</em> (66466).</li>
     *  <li>All child categories under <em>Cars, Motorcycles & Vehicles</em> (9800) categories on the eBay UK and eBay Italy sites are also exempt from this change. </li>
     *  </ul>
     *  If any other listing duration value besides <code>GTC</code> is specified in this field, it will be ignored, and <code>GTC</code> will be used instead.
     *  </span>
     *
     * @return string
     */
    public function getListingDuration()
    {
        return $this->listingDuration;
    }

    /**
     * Sets a new listingDuration
     *
     * Describes the number of days the seller wants the listing to be active (available for bidding/buying). The duration specifies the seller's initial intent at listing time.
     *  <br/><br/>
     *  The end time for a listing is calculated by adding the duration to the item's start time. If the listing ends early, the value of the listing duration does not change. When a listing's duration is changed, any related fees (e.g., 10-day fee) may be debited or credited (as applicable).
     *  <br><br>
     *  The valid choice of values depends on the listing format (see <b>Item.ListingType</b>). For
     *  a list of valid values, call <b>GetCategoryFeatures</b> with <b>DetailLevel</b> set to <b>ReturnAll</b>
     *  and look for <b>ListingDurations</b> information.
     *  <br><br>
     *  When you revise a listing, the duration cannot be reduced if it will result in ending the listing within 24 hours of the current date-time. You are only allowed to increase the duration of the listing if fewer than 2 hours have passed since you initially listed the item and the listing has no bids. You can decrease the value of this field only if the listing has no bids (or no items have sold) and the listing does not end within 12 hours.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> As of April 1, 2019, 'GTC' is the only supported listing duration for all eBay marketplaces with the following exceptions:
     *  <ul>
     *  <li>The following eBay Motors US categories are exempt from this change: <em>Cars & Trucks</em> (6001), <em>Motorcycles</em> (6024), <em>Other Vehicles & Trailers</em> (6038), <em>Boats</em> (26429), <em>Powersports</em> (66466).</li>
     *  <li>All child categories under <em>Cars, Motorcycles & Vehicles</em> (9800) categories on the eBay UK and eBay Italy sites are also exempt from this change. </li>
     *  </ul>
     *  If any other listing duration value besides <code>GTC</code> is specified in this field, it will be ignored, and <code>GTC</code> will be used instead.
     *  </span>
     *
     * @param string $listingDuration
     * @return self
     */
    public function setListingDuration($listingDuration)
    {
        $this->listingDuration = $listingDuration;
        return $this;
    }

    /**
     * Adds as listingEnhancement
     *
     * Describes listing upgrades that sellers can select for a fee, such as the
     *  <b>BoldTitle</b> upgrade. Also includes feature packs for saving on listing upgrades.
     *  See <a href="https://pages.ebay.com/help/sell/ia/promoting_your_item.html">Listing Upgrades</a>
     *  in the eBay site help.
     *  <br><br>
     *  You cannot remove listing upgrades when you revise a listing. When you
     *  relist an item, use <b>DeletedField</b> to remove a listing upgrades.
     *
     * @return self
     * @param string $listingEnhancement
     */
    public function addToListingEnhancement($listingEnhancement)
    {
        $this->listingEnhancement[] = $listingEnhancement;
        return $this;
    }

    /**
     * isset listingEnhancement
     *
     * Describes listing upgrades that sellers can select for a fee, such as the
     *  <b>BoldTitle</b> upgrade. Also includes feature packs for saving on listing upgrades.
     *  See <a href="https://pages.ebay.com/help/sell/ia/promoting_your_item.html">Listing Upgrades</a>
     *  in the eBay site help.
     *  <br><br>
     *  You cannot remove listing upgrades when you revise a listing. When you
     *  relist an item, use <b>DeletedField</b> to remove a listing upgrades.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListingEnhancement($index)
    {
        return isset($this->listingEnhancement[$index]);
    }

    /**
     * unset listingEnhancement
     *
     * Describes listing upgrades that sellers can select for a fee, such as the
     *  <b>BoldTitle</b> upgrade. Also includes feature packs for saving on listing upgrades.
     *  See <a href="https://pages.ebay.com/help/sell/ia/promoting_your_item.html">Listing Upgrades</a>
     *  in the eBay site help.
     *  <br><br>
     *  You cannot remove listing upgrades when you revise a listing. When you
     *  relist an item, use <b>DeletedField</b> to remove a listing upgrades.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListingEnhancement($index)
    {
        unset($this->listingEnhancement[$index]);
    }

    /**
     * Gets as listingEnhancement
     *
     * Describes listing upgrades that sellers can select for a fee, such as the
     *  <b>BoldTitle</b> upgrade. Also includes feature packs for saving on listing upgrades.
     *  See <a href="https://pages.ebay.com/help/sell/ia/promoting_your_item.html">Listing Upgrades</a>
     *  in the eBay site help.
     *  <br><br>
     *  You cannot remove listing upgrades when you revise a listing. When you
     *  relist an item, use <b>DeletedField</b> to remove a listing upgrades.
     *
     * @return string[]
     */
    public function getListingEnhancement()
    {
        return $this->listingEnhancement;
    }

    /**
     * Sets a new listingEnhancement
     *
     * Describes listing upgrades that sellers can select for a fee, such as the
     *  <b>BoldTitle</b> upgrade. Also includes feature packs for saving on listing upgrades.
     *  See <a href="https://pages.ebay.com/help/sell/ia/promoting_your_item.html">Listing Upgrades</a>
     *  in the eBay site help.
     *  <br><br>
     *  You cannot remove listing upgrades when you revise a listing. When you
     *  relist an item, use <b>DeletedField</b> to remove a listing upgrades.
     *
     * @param string $listingEnhancement
     * @return self
     */
    public function setListingEnhancement(array $listingEnhancement)
    {
        $this->listingEnhancement = $listingEnhancement;
        return $this;
    }

    /**
     * Gets as listingType
     *
     * The selling format of the eBay listing, such as auction (indicated with <code>Chinese</code> value), fixed-price (indicated with <code>FixedPriceItem</code> value), or classified ad (indicated with <code>AdType</code> value).
     *  <br><br>
     *  If this field is not included in an <b>AddItem</b>, <b>AddItems</b>, <b>AddSellingManagerTemplate</b>, or <b>VerifyAddItem</b> call, the listing type defaults to auction
     *  <br><br>
     *  For <b>AddFixedPriceItem</b>, <b>RelistFixedPriceItem</b>, or <b>VerifyAddFixedPriceItem</b> call, this field must be included and set to <code>FixedPriceItem</code>, since these calls only work with fixed-price listings.
     *  <br><br>
     *  This field is not applicable to Revise calls because the selling format of active listings cannot be changed.
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * Sets a new listingType
     *
     * The selling format of the eBay listing, such as auction (indicated with <code>Chinese</code> value), fixed-price (indicated with <code>FixedPriceItem</code> value), or classified ad (indicated with <code>AdType</code> value).
     *  <br><br>
     *  If this field is not included in an <b>AddItem</b>, <b>AddItems</b>, <b>AddSellingManagerTemplate</b>, or <b>VerifyAddItem</b> call, the listing type defaults to auction
     *  <br><br>
     *  For <b>AddFixedPriceItem</b>, <b>RelistFixedPriceItem</b>, or <b>VerifyAddFixedPriceItem</b> call, this field must be included and set to <code>FixedPriceItem</code>, since these calls only work with fixed-price listings.
     *  <br><br>
     *  This field is not applicable to Revise calls because the selling format of active listings cannot be changed.
     *
     * @param string $listingType
     * @return self
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
        return $this;
    }

    /**
     * Gets as location
     *
     * Indicates the geographical location of the item (along with the value in the <b>Country</b> field).
     *  When you revise a listing, you can add or change this value only if the
     *  listing has no bids (or no items have sold) and it does not end within
     *  12 hours.
     *  <br><br>
     *  If you do not specify <b>Location</b>, you must specify <b>Item.PostalCode</b>. If you
     *  specify a postal code, but do not specify a location, then the location is
     *  given a default value derived from the postal code.
     *  <br><br>
     *  For the Classified Ad format for motors vehicle listings, the value
     *  provided in the <b>Location</b> field is used as item location only if the
     *  <b>SellerContactDetails.Street</b> and the <b>SellerContactDetails.Street2</b> are empty.
     *  Else, the <b>SellerContactDetails.Street</b> and the <b>SellerContactDetails.Street2</b>
     *  will be used for item location.
     *  <br>
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Indicates the geographical location of the item (along with the value in the <b>Country</b> field).
     *  When you revise a listing, you can add or change this value only if the
     *  listing has no bids (or no items have sold) and it does not end within
     *  12 hours.
     *  <br><br>
     *  If you do not specify <b>Location</b>, you must specify <b>Item.PostalCode</b>. If you
     *  specify a postal code, but do not specify a location, then the location is
     *  given a default value derived from the postal code.
     *  <br><br>
     *  For the Classified Ad format for motors vehicle listings, the value
     *  provided in the <b>Location</b> field is used as item location only if the
     *  <b>SellerContactDetails.Street</b> and the <b>SellerContactDetails.Street2</b> are empty.
     *  Else, the <b>SellerContactDetails.Street</b> and the <b>SellerContactDetails.Street2</b>
     *  will be used for item location.
     *  <br>
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as lotSize
     *
     * A lot is a set of two or more similar items included in a single listing that must be purchased together in a single order line item. The <b>Item.LotSize</b> value is the number of items in the lot. This field is required if two or more items are including in one listing.
     *  <br><br>
     *  Lots can be used for auction and fixed-price listings. Lot items can be listed only in lot-enabled categories. Call <b>GetCategories</b> to determine if a category supports lots. If the returned <b>CategoryArray.Category.LSD</b> (<b>LotSize</b> Disabled) value is <code>true</code>, the category does not support lots.
     *  <br>
     *
     * @return int
     */
    public function getLotSize()
    {
        return $this->lotSize;
    }

    /**
     * Sets a new lotSize
     *
     * A lot is a set of two or more similar items included in a single listing that must be purchased together in a single order line item. The <b>Item.LotSize</b> value is the number of items in the lot. This field is required if two or more items are including in one listing.
     *  <br><br>
     *  Lots can be used for auction and fixed-price listings. Lot items can be listed only in lot-enabled categories. Call <b>GetCategories</b> to determine if a category supports lots. If the returned <b>CategoryArray.Category.LSD</b> (<b>LotSize</b> Disabled) value is <code>true</code>, the category does not support lots.
     *  <br>
     *
     * @param int $lotSize
     * @return self
     */
    public function setLotSize($lotSize)
    {
        $this->lotSize = $lotSize;
        return $this;
    }

    /**
     * Gets as partnerCode
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPartnerCode()
    {
        return $this->partnerCode;
    }

    /**
     * Sets a new partnerCode
     *
     * This field is deprecated.
     *
     * @param string $partnerCode
     * @return self
     */
    public function setPartnerCode($partnerCode)
    {
        $this->partnerCode = $partnerCode;
        return $this;
    }

    /**
     * Gets as partnerName
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPartnerName()
    {
        return $this->partnerName;
    }

    /**
     * Sets a new partnerName
     *
     * This field is deprecated.
     *
     * @param string $partnerName
     * @return self
     */
    public function setPartnerName($partnerName)
    {
        $this->partnerName = $partnerName;
        return $this;
    }

    /**
     * Gets as paymentDetails
     *
     * This container is used in an <b>Add/Revise/Relist/Verify</b> call if the seller is selling a motor vehicle, and is requiring an initial deposit on that vehicle. This container is only applicable for motor vehicle listings.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a payment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/payment_policy/methods/createPaymentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate the fields in this <b>PaymentDetails</b> container. Instead, indicate your payment policy using the <b>SellerProfiles.SellerPaymentProfile</b> container.
     *  </span>
     *  <br>
     *  This container will only be returned in 'Get' calls for motor vehicle listings where an initial deposit is required for that vehicle.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PaymentDetailsType
     */
    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }

    /**
     * Sets a new paymentDetails
     *
     * This container is used in an <b>Add/Revise/Relist/Verify</b> call if the seller is selling a motor vehicle, and is requiring an initial deposit on that vehicle. This container is only applicable for motor vehicle listings.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a payment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/payment_policy/methods/createPaymentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate the fields in this <b>PaymentDetails</b> container. Instead, indicate your payment policy using the <b>SellerProfiles.SellerPaymentProfile</b> container.
     *  </span>
     *  <br>
     *  This container will only be returned in 'Get' calls for motor vehicle listings where an initial deposit is required for that vehicle.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PaymentDetailsType $paymentDetails
     * @return self
     */
    public function setPaymentDetails(\Nogrod\eBaySDK\MerchantData\PaymentDetailsType $paymentDetails)
    {
        $this->paymentDetails = $paymentDetails;
        return $this;
    }

    /**
     * Adds as paymentMethods
     *
     * Identifies the payment method (such as PayPal) that the seller will accept
     *  when the buyer pays for the item. For Add/Revise/Relist calls, at least
     *  one payment method must be specified unless the seller is opted in to the new eBay Managed Payments program.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a payment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/payment_policy/methods/createPaymentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate this field. Instead, indicate your payment policy using the <b>SellerProfiles.SellerPaymentProfile</b> container.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The new eBay Managed Payments program is currently only available to a limited number of sellers on the US site. For sellers in the eBay Managed Payments program, a payment method does not need to be specified at listing time. Any payment method that is specified at listing time (or defined in a payment business policy) will be ignored and dropped from the listing, and the seller will get a warning message in the response. Immediate payment is supported for sellers in the eBay Managed Payments program, so they can include the <b>AutoPay</b> field in the request and set its value to <code>true</code>.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> As of May 1, 2019, eBay no longer supports electronic payments through a seller's Integrated Merchant Credit Card account. To accept online credit card payments from buyers, a seller must either specify <code>PayPal</code> as an accepted payment method, or opt in to the eBay Managed Payments program. If <code>IMCC</code> is passed in as a value, this value will be ignored and dropped (and listing will possibly get blocked if <code>IMCC</code> is the only specified payment method).
     *  </span><br>
     *  Use <b>GetCategoryFeatures</b> to determine the payment methods that are allowed for a category on a site. For example, the response data of <b>GetCategoryFeatures</b> will show that on the US site, most categories only allow electronic payments. Also use <b>GetCategoryFeatures</b> to determine the default payment methods for a site.
     *  <br><br>
     *  Do not use <b>GeteBayDetails</b> to determine the payment methods for a site.
     *  <br><br>
     *  If you specify multiple <b>PaymentMethods</b> fields, the repeating fields must be contiguous. For example, you can specify <b>PayPalEmailAddress</b> after a list of
     *  repeating <b>PaymentMethods</b> fields, but not between them:<br>
     *  <br>
     *  <code>
     *  &lt;PaymentMethods&gt;VisaMC&lt;/PaymentMethods&gt;<br>
     *  &lt;PaymentMethods&gt;PayPal&lt;/PaymentMethods&gt;<br>
     *  &lt;PayPalEmailAddress&gt;mypaypalemail@ebay.com&lt;/PayPalEmailAddress&gt;
     *  </code>
     *  <br><br>
     *  In general, if you separate repeating instances of a field, the results will
     *  be unpredictable. This rule applies to all repeating fields
     *  (<code>maxOccurs="unbounded"</code> or greater than 1) in the schema. See <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/Call-APISchema.html#OverviewoftheAPISchema">Overview of the API Schema</a> in the eBay Features Guide.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Required or allowed payment methods vary by site and category. Refer to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-PaymentMethod.html">
     *  Determining the Payment Methods Allowed for a Category</a> in the eBay Features Guide
     *  to help you determine which payment methods you
     *  are required or allowed to specify.
     *  </span><br>
     *  Payment methods are not applicable to any classified ad listings, as any agreement and payment is handled off of the eBay platform.
     *  <br>
     *  <br>
     *  <b>For <b>ReviseItem</b> and <b>RelistItem</b> only:</b>
     *  A listing must have at least one valid payment method.
     *  When you revise or relist an item and you specify a payment method
     *  that is invalid for the target site, eBay ignores the
     *  invalid payment method, applies the other valid
     *  changes, and returns a warning to indicate that the
     *  invalid payment method was ignored.
     *  <br/><br/>
     *  If multiple payment methods were
     *  invalid, the warning indicates that they were all ignored.
     *  If you modify the listing so that it includes no valid
     *  payment methods, an error is returned. This situation could occur when
     *  the seller removes all valid payment methods or when all
     *  the payment methods specified for the item are no longer valid
     *  on the target site.
     *
     * @return self
     * @param string $paymentMethods
     */
    public function addToPaymentMethods($paymentMethods)
    {
        $this->paymentMethods[] = $paymentMethods;
        return $this;
    }

    /**
     * isset paymentMethods
     *
     * Identifies the payment method (such as PayPal) that the seller will accept
     *  when the buyer pays for the item. For Add/Revise/Relist calls, at least
     *  one payment method must be specified unless the seller is opted in to the new eBay Managed Payments program.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a payment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/payment_policy/methods/createPaymentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate this field. Instead, indicate your payment policy using the <b>SellerProfiles.SellerPaymentProfile</b> container.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The new eBay Managed Payments program is currently only available to a limited number of sellers on the US site. For sellers in the eBay Managed Payments program, a payment method does not need to be specified at listing time. Any payment method that is specified at listing time (or defined in a payment business policy) will be ignored and dropped from the listing, and the seller will get a warning message in the response. Immediate payment is supported for sellers in the eBay Managed Payments program, so they can include the <b>AutoPay</b> field in the request and set its value to <code>true</code>.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> As of May 1, 2019, eBay no longer supports electronic payments through a seller's Integrated Merchant Credit Card account. To accept online credit card payments from buyers, a seller must either specify <code>PayPal</code> as an accepted payment method, or opt in to the eBay Managed Payments program. If <code>IMCC</code> is passed in as a value, this value will be ignored and dropped (and listing will possibly get blocked if <code>IMCC</code> is the only specified payment method).
     *  </span><br>
     *  Use <b>GetCategoryFeatures</b> to determine the payment methods that are allowed for a category on a site. For example, the response data of <b>GetCategoryFeatures</b> will show that on the US site, most categories only allow electronic payments. Also use <b>GetCategoryFeatures</b> to determine the default payment methods for a site.
     *  <br><br>
     *  Do not use <b>GeteBayDetails</b> to determine the payment methods for a site.
     *  <br><br>
     *  If you specify multiple <b>PaymentMethods</b> fields, the repeating fields must be contiguous. For example, you can specify <b>PayPalEmailAddress</b> after a list of
     *  repeating <b>PaymentMethods</b> fields, but not between them:<br>
     *  <br>
     *  <code>
     *  &lt;PaymentMethods&gt;VisaMC&lt;/PaymentMethods&gt;<br>
     *  &lt;PaymentMethods&gt;PayPal&lt;/PaymentMethods&gt;<br>
     *  &lt;PayPalEmailAddress&gt;mypaypalemail@ebay.com&lt;/PayPalEmailAddress&gt;
     *  </code>
     *  <br><br>
     *  In general, if you separate repeating instances of a field, the results will
     *  be unpredictable. This rule applies to all repeating fields
     *  (<code>maxOccurs="unbounded"</code> or greater than 1) in the schema. See <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/Call-APISchema.html#OverviewoftheAPISchema">Overview of the API Schema</a> in the eBay Features Guide.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Required or allowed payment methods vary by site and category. Refer to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-PaymentMethod.html">
     *  Determining the Payment Methods Allowed for a Category</a> in the eBay Features Guide
     *  to help you determine which payment methods you
     *  are required or allowed to specify.
     *  </span><br>
     *  Payment methods are not applicable to any classified ad listings, as any agreement and payment is handled off of the eBay platform.
     *  <br>
     *  <br>
     *  <b>For <b>ReviseItem</b> and <b>RelistItem</b> only:</b>
     *  A listing must have at least one valid payment method.
     *  When you revise or relist an item and you specify a payment method
     *  that is invalid for the target site, eBay ignores the
     *  invalid payment method, applies the other valid
     *  changes, and returns a warning to indicate that the
     *  invalid payment method was ignored.
     *  <br/><br/>
     *  If multiple payment methods were
     *  invalid, the warning indicates that they were all ignored.
     *  If you modify the listing so that it includes no valid
     *  payment methods, an error is returned. This situation could occur when
     *  the seller removes all valid payment methods or when all
     *  the payment methods specified for the item are no longer valid
     *  on the target site.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMethods($index)
    {
        return isset($this->paymentMethods[$index]);
    }

    /**
     * unset paymentMethods
     *
     * Identifies the payment method (such as PayPal) that the seller will accept
     *  when the buyer pays for the item. For Add/Revise/Relist calls, at least
     *  one payment method must be specified unless the seller is opted in to the new eBay Managed Payments program.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a payment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/payment_policy/methods/createPaymentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate this field. Instead, indicate your payment policy using the <b>SellerProfiles.SellerPaymentProfile</b> container.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The new eBay Managed Payments program is currently only available to a limited number of sellers on the US site. For sellers in the eBay Managed Payments program, a payment method does not need to be specified at listing time. Any payment method that is specified at listing time (or defined in a payment business policy) will be ignored and dropped from the listing, and the seller will get a warning message in the response. Immediate payment is supported for sellers in the eBay Managed Payments program, so they can include the <b>AutoPay</b> field in the request and set its value to <code>true</code>.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> As of May 1, 2019, eBay no longer supports electronic payments through a seller's Integrated Merchant Credit Card account. To accept online credit card payments from buyers, a seller must either specify <code>PayPal</code> as an accepted payment method, or opt in to the eBay Managed Payments program. If <code>IMCC</code> is passed in as a value, this value will be ignored and dropped (and listing will possibly get blocked if <code>IMCC</code> is the only specified payment method).
     *  </span><br>
     *  Use <b>GetCategoryFeatures</b> to determine the payment methods that are allowed for a category on a site. For example, the response data of <b>GetCategoryFeatures</b> will show that on the US site, most categories only allow electronic payments. Also use <b>GetCategoryFeatures</b> to determine the default payment methods for a site.
     *  <br><br>
     *  Do not use <b>GeteBayDetails</b> to determine the payment methods for a site.
     *  <br><br>
     *  If you specify multiple <b>PaymentMethods</b> fields, the repeating fields must be contiguous. For example, you can specify <b>PayPalEmailAddress</b> after a list of
     *  repeating <b>PaymentMethods</b> fields, but not between them:<br>
     *  <br>
     *  <code>
     *  &lt;PaymentMethods&gt;VisaMC&lt;/PaymentMethods&gt;<br>
     *  &lt;PaymentMethods&gt;PayPal&lt;/PaymentMethods&gt;<br>
     *  &lt;PayPalEmailAddress&gt;mypaypalemail@ebay.com&lt;/PayPalEmailAddress&gt;
     *  </code>
     *  <br><br>
     *  In general, if you separate repeating instances of a field, the results will
     *  be unpredictable. This rule applies to all repeating fields
     *  (<code>maxOccurs="unbounded"</code> or greater than 1) in the schema. See <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/Call-APISchema.html#OverviewoftheAPISchema">Overview of the API Schema</a> in the eBay Features Guide.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Required or allowed payment methods vary by site and category. Refer to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-PaymentMethod.html">
     *  Determining the Payment Methods Allowed for a Category</a> in the eBay Features Guide
     *  to help you determine which payment methods you
     *  are required or allowed to specify.
     *  </span><br>
     *  Payment methods are not applicable to any classified ad listings, as any agreement and payment is handled off of the eBay platform.
     *  <br>
     *  <br>
     *  <b>For <b>ReviseItem</b> and <b>RelistItem</b> only:</b>
     *  A listing must have at least one valid payment method.
     *  When you revise or relist an item and you specify a payment method
     *  that is invalid for the target site, eBay ignores the
     *  invalid payment method, applies the other valid
     *  changes, and returns a warning to indicate that the
     *  invalid payment method was ignored.
     *  <br/><br/>
     *  If multiple payment methods were
     *  invalid, the warning indicates that they were all ignored.
     *  If you modify the listing so that it includes no valid
     *  payment methods, an error is returned. This situation could occur when
     *  the seller removes all valid payment methods or when all
     *  the payment methods specified for the item are no longer valid
     *  on the target site.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMethods($index)
    {
        unset($this->paymentMethods[$index]);
    }

    /**
     * Gets as paymentMethods
     *
     * Identifies the payment method (such as PayPal) that the seller will accept
     *  when the buyer pays for the item. For Add/Revise/Relist calls, at least
     *  one payment method must be specified unless the seller is opted in to the new eBay Managed Payments program.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a payment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/payment_policy/methods/createPaymentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate this field. Instead, indicate your payment policy using the <b>SellerProfiles.SellerPaymentProfile</b> container.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The new eBay Managed Payments program is currently only available to a limited number of sellers on the US site. For sellers in the eBay Managed Payments program, a payment method does not need to be specified at listing time. Any payment method that is specified at listing time (or defined in a payment business policy) will be ignored and dropped from the listing, and the seller will get a warning message in the response. Immediate payment is supported for sellers in the eBay Managed Payments program, so they can include the <b>AutoPay</b> field in the request and set its value to <code>true</code>.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> As of May 1, 2019, eBay no longer supports electronic payments through a seller's Integrated Merchant Credit Card account. To accept online credit card payments from buyers, a seller must either specify <code>PayPal</code> as an accepted payment method, or opt in to the eBay Managed Payments program. If <code>IMCC</code> is passed in as a value, this value will be ignored and dropped (and listing will possibly get blocked if <code>IMCC</code> is the only specified payment method).
     *  </span><br>
     *  Use <b>GetCategoryFeatures</b> to determine the payment methods that are allowed for a category on a site. For example, the response data of <b>GetCategoryFeatures</b> will show that on the US site, most categories only allow electronic payments. Also use <b>GetCategoryFeatures</b> to determine the default payment methods for a site.
     *  <br><br>
     *  Do not use <b>GeteBayDetails</b> to determine the payment methods for a site.
     *  <br><br>
     *  If you specify multiple <b>PaymentMethods</b> fields, the repeating fields must be contiguous. For example, you can specify <b>PayPalEmailAddress</b> after a list of
     *  repeating <b>PaymentMethods</b> fields, but not between them:<br>
     *  <br>
     *  <code>
     *  &lt;PaymentMethods&gt;VisaMC&lt;/PaymentMethods&gt;<br>
     *  &lt;PaymentMethods&gt;PayPal&lt;/PaymentMethods&gt;<br>
     *  &lt;PayPalEmailAddress&gt;mypaypalemail@ebay.com&lt;/PayPalEmailAddress&gt;
     *  </code>
     *  <br><br>
     *  In general, if you separate repeating instances of a field, the results will
     *  be unpredictable. This rule applies to all repeating fields
     *  (<code>maxOccurs="unbounded"</code> or greater than 1) in the schema. See <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/Call-APISchema.html#OverviewoftheAPISchema">Overview of the API Schema</a> in the eBay Features Guide.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Required or allowed payment methods vary by site and category. Refer to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-PaymentMethod.html">
     *  Determining the Payment Methods Allowed for a Category</a> in the eBay Features Guide
     *  to help you determine which payment methods you
     *  are required or allowed to specify.
     *  </span><br>
     *  Payment methods are not applicable to any classified ad listings, as any agreement and payment is handled off of the eBay platform.
     *  <br>
     *  <br>
     *  <b>For <b>ReviseItem</b> and <b>RelistItem</b> only:</b>
     *  A listing must have at least one valid payment method.
     *  When you revise or relist an item and you specify a payment method
     *  that is invalid for the target site, eBay ignores the
     *  invalid payment method, applies the other valid
     *  changes, and returns a warning to indicate that the
     *  invalid payment method was ignored.
     *  <br/><br/>
     *  If multiple payment methods were
     *  invalid, the warning indicates that they were all ignored.
     *  If you modify the listing so that it includes no valid
     *  payment methods, an error is returned. This situation could occur when
     *  the seller removes all valid payment methods or when all
     *  the payment methods specified for the item are no longer valid
     *  on the target site.
     *
     * @return string[]
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * Sets a new paymentMethods
     *
     * Identifies the payment method (such as PayPal) that the seller will accept
     *  when the buyer pays for the item. For Add/Revise/Relist calls, at least
     *  one payment method must be specified unless the seller is opted in to the new eBay Managed Payments program.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a payment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/payment_policy/methods/createPaymentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate this field. Instead, indicate your payment policy using the <b>SellerProfiles.SellerPaymentProfile</b> container.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The new eBay Managed Payments program is currently only available to a limited number of sellers on the US site. For sellers in the eBay Managed Payments program, a payment method does not need to be specified at listing time. Any payment method that is specified at listing time (or defined in a payment business policy) will be ignored and dropped from the listing, and the seller will get a warning message in the response. Immediate payment is supported for sellers in the eBay Managed Payments program, so they can include the <b>AutoPay</b> field in the request and set its value to <code>true</code>.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> As of May 1, 2019, eBay no longer supports electronic payments through a seller's Integrated Merchant Credit Card account. To accept online credit card payments from buyers, a seller must either specify <code>PayPal</code> as an accepted payment method, or opt in to the eBay Managed Payments program. If <code>IMCC</code> is passed in as a value, this value will be ignored and dropped (and listing will possibly get blocked if <code>IMCC</code> is the only specified payment method).
     *  </span><br>
     *  Use <b>GetCategoryFeatures</b> to determine the payment methods that are allowed for a category on a site. For example, the response data of <b>GetCategoryFeatures</b> will show that on the US site, most categories only allow electronic payments. Also use <b>GetCategoryFeatures</b> to determine the default payment methods for a site.
     *  <br><br>
     *  Do not use <b>GeteBayDetails</b> to determine the payment methods for a site.
     *  <br><br>
     *  If you specify multiple <b>PaymentMethods</b> fields, the repeating fields must be contiguous. For example, you can specify <b>PayPalEmailAddress</b> after a list of
     *  repeating <b>PaymentMethods</b> fields, but not between them:<br>
     *  <br>
     *  <code>
     *  &lt;PaymentMethods&gt;VisaMC&lt;/PaymentMethods&gt;<br>
     *  &lt;PaymentMethods&gt;PayPal&lt;/PaymentMethods&gt;<br>
     *  &lt;PayPalEmailAddress&gt;mypaypalemail@ebay.com&lt;/PayPalEmailAddress&gt;
     *  </code>
     *  <br><br>
     *  In general, if you separate repeating instances of a field, the results will
     *  be unpredictable. This rule applies to all repeating fields
     *  (<code>maxOccurs="unbounded"</code> or greater than 1) in the schema. See <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/Call-APISchema.html#OverviewoftheAPISchema">Overview of the API Schema</a> in the eBay Features Guide.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Required or allowed payment methods vary by site and category. Refer to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-PaymentMethod.html">
     *  Determining the Payment Methods Allowed for a Category</a> in the eBay Features Guide
     *  to help you determine which payment methods you
     *  are required or allowed to specify.
     *  </span><br>
     *  Payment methods are not applicable to any classified ad listings, as any agreement and payment is handled off of the eBay platform.
     *  <br>
     *  <br>
     *  <b>For <b>ReviseItem</b> and <b>RelistItem</b> only:</b>
     *  A listing must have at least one valid payment method.
     *  When you revise or relist an item and you specify a payment method
     *  that is invalid for the target site, eBay ignores the
     *  invalid payment method, applies the other valid
     *  changes, and returns a warning to indicate that the
     *  invalid payment method was ignored.
     *  <br/><br/>
     *  If multiple payment methods were
     *  invalid, the warning indicates that they were all ignored.
     *  If you modify the listing so that it includes no valid
     *  payment methods, an error is returned. This situation could occur when
     *  the seller removes all valid payment methods or when all
     *  the payment methods specified for the item are no longer valid
     *  on the target site.
     *
     * @param string $paymentMethods
     * @return self
     */
    public function setPaymentMethods(array $paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }

    /**
     * Gets as payPalEmailAddress
     *
     * Valid PayPal email address for the PayPal account that the seller will use
     *  if they offer PayPal as a payment method for the listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a payment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/payment_policy/methods/createPaymentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate this field. Instead, indicate your payment policy using the <b>SellerProfiles.SellerPaymentProfile</b> container.
     *  </span>
     *  <br>
     *  eBay uses this to identify the correct PayPal account when the buyer pays via PayPal during
     *  the checkout process. (As a seller can have more than one PayPal account,
     *  you cannot necessarily rely on PayPal account data returned from <b>GetUser</b> for
     *  details about the account associated with the PayPal email address that the
     *  seller specifies.)<br>
     *  <br>
     *  Required if seller has chosen PayPal as a payment method (<b>PaymentMethods</b>)
     *  for the listing.<br>
     *  <br>
     *  For digital listings, the seller needs to use an email address that is
     *  associated with a PayPal Premier or PayPal business account. <br>
     *  <br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove this value
     *  when you revise or relist an item, use <b>DeletedField</b>. When you revise a
     *  listing, if the listing has bids (or items have been sold) or it ends within
     *  12 hours, you can add <b>PayPalEmailAddress</b>, but you cannot remove
     *  it.
     *
     * @return string
     */
    public function getPayPalEmailAddress()
    {
        return $this->payPalEmailAddress;
    }

    /**
     * Sets a new payPalEmailAddress
     *
     * Valid PayPal email address for the PayPal account that the seller will use
     *  if they offer PayPal as a payment method for the listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a payment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/payment_policy/methods/createPaymentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate this field. Instead, indicate your payment policy using the <b>SellerProfiles.SellerPaymentProfile</b> container.
     *  </span>
     *  <br>
     *  eBay uses this to identify the correct PayPal account when the buyer pays via PayPal during
     *  the checkout process. (As a seller can have more than one PayPal account,
     *  you cannot necessarily rely on PayPal account data returned from <b>GetUser</b> for
     *  details about the account associated with the PayPal email address that the
     *  seller specifies.)<br>
     *  <br>
     *  Required if seller has chosen PayPal as a payment method (<b>PaymentMethods</b>)
     *  for the listing.<br>
     *  <br>
     *  For digital listings, the seller needs to use an email address that is
     *  associated with a PayPal Premier or PayPal business account. <br>
     *  <br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove this value
     *  when you revise or relist an item, use <b>DeletedField</b>. When you revise a
     *  listing, if the listing has bids (or items have been sold) or it ends within
     *  12 hours, you can add <b>PayPalEmailAddress</b>, but you cannot remove
     *  it.
     *
     * @param string $payPalEmailAddress
     * @return self
     */
    public function setPayPalEmailAddress($payPalEmailAddress)
    {
        $this->payPalEmailAddress = $payPalEmailAddress;
        return $this;
    }

    /**
     * Gets as primaryCategory
     *
     * This container is used in an Add/Revise/Relist call to set the primary listing category. This field is conditionally required in an Add call unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, Item Specifics, listing category, and stock photo defined in the catalog product is used to create the listing.<br>
     *  <br>
     *  If you do not know the appropriate eBay category for your product, you can use the <b>GetSuggestedCategories</b> call. Once you know your category, and want to know which listing features it supports, you can use the
     *  <b>GetCategoryFeatures</b> call. To discover if the category requires or recommends GTIN types and other Item Specifics, you can use the <b>GetCategorySpecifics</b> call.
     *  <br>
     *  <br>
     *  If you do use an eBay catalog product, it is advised that you do not include this field, as any primary category ID you specify in this field may get dropped if this category is different than the primary category defined in the eBay catalog product.
     *  <br>
     *  <br>
     *  <b>For ReviseItem only:</b> When revising a listing,
     *  you can change the primary category only if an auction listing
     *  has no bids or a multiple-quantity, fixed-price listing has no sales, and the listing does not end
     *  within 12 hours. If you change the listing category, any Item Specifics that
     *  were previously specified may be dropped from the listing if they aren't
     *  valid for the new category. <br>
     *  <br>
     *  When you list an event ticket on the US site, you must specify one of the leaf categories under the Tickets & Experiences meta category.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CategoryType
     */
    public function getPrimaryCategory()
    {
        return $this->primaryCategory;
    }

    /**
     * Sets a new primaryCategory
     *
     * This container is used in an Add/Revise/Relist call to set the primary listing category. This field is conditionally required in an Add call unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, Item Specifics, listing category, and stock photo defined in the catalog product is used to create the listing.<br>
     *  <br>
     *  If you do not know the appropriate eBay category for your product, you can use the <b>GetSuggestedCategories</b> call. Once you know your category, and want to know which listing features it supports, you can use the
     *  <b>GetCategoryFeatures</b> call. To discover if the category requires or recommends GTIN types and other Item Specifics, you can use the <b>GetCategorySpecifics</b> call.
     *  <br>
     *  <br>
     *  If you do use an eBay catalog product, it is advised that you do not include this field, as any primary category ID you specify in this field may get dropped if this category is different than the primary category defined in the eBay catalog product.
     *  <br>
     *  <br>
     *  <b>For ReviseItem only:</b> When revising a listing,
     *  you can change the primary category only if an auction listing
     *  has no bids or a multiple-quantity, fixed-price listing has no sales, and the listing does not end
     *  within 12 hours. If you change the listing category, any Item Specifics that
     *  were previously specified may be dropped from the listing if they aren't
     *  valid for the new category. <br>
     *  <br>
     *  When you list an event ticket on the US site, you must specify one of the leaf categories under the Tickets & Experiences meta category.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CategoryType $primaryCategory
     * @return self
     */
    public function setPrimaryCategory(\Nogrod\eBaySDK\MerchantData\CategoryType $primaryCategory)
    {
        $this->primaryCategory = $primaryCategory;
        return $this;
    }

    /**
     * Gets as privateListing
     *
     * A <code>true</code> value in this field indicates that the listing is private. In a private listing, a bidder or buyer's user ID will not be exposed to any other eBay user besides the seller of the listing. Sellers may want to use this option when they believe that a listing's potential bidders/buyers would not want their user IDs exposed to other users.
     *  <br>
     *
     * @return bool
     */
    public function getPrivateListing()
    {
        return $this->privateListing;
    }

    /**
     * Sets a new privateListing
     *
     * A <code>true</code> value in this field indicates that the listing is private. In a private listing, a bidder or buyer's user ID will not be exposed to any other eBay user besides the seller of the listing. Sellers may want to use this option when they believe that a listing's potential bidders/buyers would not want their user IDs exposed to other users.
     *  <br>
     *
     * @param bool $privateListing
     * @return self
     */
    public function setPrivateListing($privateListing)
    {
        $this->privateListing = $privateListing;
        return $this;
    }

    /**
     * Gets as productListingDetails
     *
     * This container is used to provide one or more product identifiers for a product, and if desired by the seller, or required by eBay, the product can be matched to an eBay Catalog product. If a seller's product is matched to an eBay Catalog product, the product details associated with that catalog product will be prefilled for the listing. Product details defined for a catalog product include the product title, product description, product aspects, and stock image(s) of the product.
     *  <br>
     *  <br>
     *  In some eBay categories, one or more product identifier types (e.g. UPC or ISBN) may be required, but the category may not have any eBay Catalog products defined, or the category does not allow listings to be created using a catalog product. Note that the <b>GetCategorySpecifics</b> call or the <b>GetCategoryFeatures</b> call can be used to retrieve supported/required product identifier types.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  If a product identifier type is required, the corresponding field must be used, even if the seller is not interested in finding an eBay catalog product match. A large percentage of eBay US categories require one or more product identifier types when listing an item. See the <a href="http://pages.ebay.com/sell/item_specifics/product_identifiers.html" target="_blank">Structured Data - Product Identifiers</a> help page for more information on which eBay US categories require which product identifier types. If known, an ePID (specified through the <b>ProductReferenceID</b> field) is always the best bet to find an eBay catalog product match, although an <b>EAN</b>, <b>ISBN</b>, <b>UPC</b>, or Brand/MPN pair can also be used in an attempt to find a catalog product match. If a Brand/MPN pair is required for the product, these values must be input through the <b>BrandMPN</b> container.
     *  </span>
     *  <br>
     *  When you use <b>ProductListingDetails</b>, in an Add/Revise/Relist call, you must specify at least one GTIN, a <b>ProductReferenceID</b> (also known as an ePID), a Brand/MPN pair, or <b>TicketListingDetails</b>. If you specify more than one GTIN value, eBay uses the first one that matches a product in eBay's catalog.
     *  <br>
     *  <br>
     *  <b>For ReviseItem and RelistItem only:</b> When you revise a
     *  listing, if it has bids or it ends within 12 hours, you cannot change the
     *  product identifier and you cannot remove existing product listing details data. However, you can
     *  change or add preferences such as <b>IncludeStockPhotoURL</b>,
     *  <b>UseStockPhotoURLAsGallery</b>, and <b>IncludePrefilledItemInformation</b>. To delete all
     *  catalog data when you revise or relist an item, specify
     *  Item.ProductListingDetails in <b>DeletedField</b> and don't pass
     *  <b>ProductListingDetails</b> in the request.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ProductListingDetailsType
     */
    public function getProductListingDetails()
    {
        return $this->productListingDetails;
    }

    /**
     * Sets a new productListingDetails
     *
     * This container is used to provide one or more product identifiers for a product, and if desired by the seller, or required by eBay, the product can be matched to an eBay Catalog product. If a seller's product is matched to an eBay Catalog product, the product details associated with that catalog product will be prefilled for the listing. Product details defined for a catalog product include the product title, product description, product aspects, and stock image(s) of the product.
     *  <br>
     *  <br>
     *  In some eBay categories, one or more product identifier types (e.g. UPC or ISBN) may be required, but the category may not have any eBay Catalog products defined, or the category does not allow listings to be created using a catalog product. Note that the <b>GetCategorySpecifics</b> call or the <b>GetCategoryFeatures</b> call can be used to retrieve supported/required product identifier types.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  If a product identifier type is required, the corresponding field must be used, even if the seller is not interested in finding an eBay catalog product match. A large percentage of eBay US categories require one or more product identifier types when listing an item. See the <a href="http://pages.ebay.com/sell/item_specifics/product_identifiers.html" target="_blank">Structured Data - Product Identifiers</a> help page for more information on which eBay US categories require which product identifier types. If known, an ePID (specified through the <b>ProductReferenceID</b> field) is always the best bet to find an eBay catalog product match, although an <b>EAN</b>, <b>ISBN</b>, <b>UPC</b>, or Brand/MPN pair can also be used in an attempt to find a catalog product match. If a Brand/MPN pair is required for the product, these values must be input through the <b>BrandMPN</b> container.
     *  </span>
     *  <br>
     *  When you use <b>ProductListingDetails</b>, in an Add/Revise/Relist call, you must specify at least one GTIN, a <b>ProductReferenceID</b> (also known as an ePID), a Brand/MPN pair, or <b>TicketListingDetails</b>. If you specify more than one GTIN value, eBay uses the first one that matches a product in eBay's catalog.
     *  <br>
     *  <br>
     *  <b>For ReviseItem and RelistItem only:</b> When you revise a
     *  listing, if it has bids or it ends within 12 hours, you cannot change the
     *  product identifier and you cannot remove existing product listing details data. However, you can
     *  change or add preferences such as <b>IncludeStockPhotoURL</b>,
     *  <b>UseStockPhotoURLAsGallery</b>, and <b>IncludePrefilledItemInformation</b>. To delete all
     *  catalog data when you revise or relist an item, specify
     *  Item.ProductListingDetails in <b>DeletedField</b> and don't pass
     *  <b>ProductListingDetails</b> in the request.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ProductListingDetailsType $productListingDetails
     * @return self
     */
    public function setProductListingDetails(\Nogrod\eBaySDK\MerchantData\ProductListingDetailsType $productListingDetails)
    {
        $this->productListingDetails = $productListingDetails;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * <b>For <b>AddItem</b> family of calls:</b> The <b>Quantity</b> value for auction listings must always be <code>1</code>. For a fixed-price listing, the <b>Quantity</b> value indicates the number of identical items the seller has available for sale in the listing. If variations are specified in <b>AddFixedPriceItem</b> or <b> VerifyAddFixedPriceItem</b>, the <b>Item.Quantity</b> is not required since the quantity of variations is specified in <b>Variation.Quantity</b> instead. See the <a href="https://pages.ebay.com/help/sell/listing-variations.html">Creating a listing with variations</a> eBay Help page for more information on variations.
     *  <br><br>
     *  <b>For ReviseItem and ReviseFixedPriceItem:</b>
     *  This value can only be changed for a fixed-price listing with no variations. The
     *  quantity of variations is controlled in the <b>Variation.Quantity</b> field and the <b>Item.Quantity</b>
     *  value for an auction listing should always be <code>1</code>.
     *  <br><br>
     *  <b>For RelistItem and RelistFixedPriceItem:</b>
     *  Like most fields, when you use <b>RelistItem</b> or <b>RelistFixedPriceItem</b>,
     *  <b>Quantity</b> retains its original value unless you specifically change
     *  it. This means that the item is relisted with the value that was
     *  already in <b>Quantity</b>, not with the remaining quantity available.
     *  For example, if the original <b>Quantity</b> value was <code>10</code>, and three items have been sold,
     *  eBay sets the relisted item's <b>Quantity</b> to <code>10</code> by default, and not <code>7</code>.
     *  So, we strongly recommend that you always
     *  set <b>Quantity</b> to the correct value (your actual quantity available)
     *  in your relist requests.<br>
     *  <br>
     *  When eBay auto-renews a GTC listing (<b>ListingDuration</b> = <b>GTC</b>)
     *  on your behalf, eBay relists with correct quantity available.
     *  <br>
     *  <br>
     *  <b>For GetSellerEvents:</b> <b>Quantity</b> is only returned
     *  for listings where item quantity is greater than 1.
     *  <br><br>
     *  <b>For GetItem and related calls:</b>
     *  This is the total of the number of items available for sale plus the quantity
     *  already sold. To determine the number of items available, subtract
     *  <b>SellingStatus.QuantitySold</b> from this value.
     *  <br><br>
     *  <b>For order line item calls with variations:</b>
     *  In <b>GetItemTransactions</b>, <b>Item.Quantity</b> is the same as <b>GetItem</b> (the
     *  total quantity across all variations). In <b>GetSellerTransactions</b>,
     *  <b>Transaction.Item.Quantity</b> is the total quantity of the applicable
     *  variation (quantity available plus quantity sold).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For the US site, new eBay sellers are subject to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-Policies.html#SellerLimits">Seller Limits</a>, which limit the quantity of items that may be listed and/or the total cumulative value of these listings. While subject to these selling limits, an eBay seller can use the <b>GetMyeBaySelling</b> call to retrieve both the remaining number of listings they can create and the remaining cumulative value of these listings. These values are shown in the <b>Summary.QuantityLimitRemaining</b> and <b>Summary.AmountLimitRemaining</b> fields in the <b>GetMyeBaySelling</b> response. If a call to add an item or revise an item would result in the exceeding of these limits, the add item or revise item call will fail. These fields will only be returned if the seller is subject to seller limits.
     *  </span>
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * <b>For <b>AddItem</b> family of calls:</b> The <b>Quantity</b> value for auction listings must always be <code>1</code>. For a fixed-price listing, the <b>Quantity</b> value indicates the number of identical items the seller has available for sale in the listing. If variations are specified in <b>AddFixedPriceItem</b> or <b> VerifyAddFixedPriceItem</b>, the <b>Item.Quantity</b> is not required since the quantity of variations is specified in <b>Variation.Quantity</b> instead. See the <a href="https://pages.ebay.com/help/sell/listing-variations.html">Creating a listing with variations</a> eBay Help page for more information on variations.
     *  <br><br>
     *  <b>For ReviseItem and ReviseFixedPriceItem:</b>
     *  This value can only be changed for a fixed-price listing with no variations. The
     *  quantity of variations is controlled in the <b>Variation.Quantity</b> field and the <b>Item.Quantity</b>
     *  value for an auction listing should always be <code>1</code>.
     *  <br><br>
     *  <b>For RelistItem and RelistFixedPriceItem:</b>
     *  Like most fields, when you use <b>RelistItem</b> or <b>RelistFixedPriceItem</b>,
     *  <b>Quantity</b> retains its original value unless you specifically change
     *  it. This means that the item is relisted with the value that was
     *  already in <b>Quantity</b>, not with the remaining quantity available.
     *  For example, if the original <b>Quantity</b> value was <code>10</code>, and three items have been sold,
     *  eBay sets the relisted item's <b>Quantity</b> to <code>10</code> by default, and not <code>7</code>.
     *  So, we strongly recommend that you always
     *  set <b>Quantity</b> to the correct value (your actual quantity available)
     *  in your relist requests.<br>
     *  <br>
     *  When eBay auto-renews a GTC listing (<b>ListingDuration</b> = <b>GTC</b>)
     *  on your behalf, eBay relists with correct quantity available.
     *  <br>
     *  <br>
     *  <b>For GetSellerEvents:</b> <b>Quantity</b> is only returned
     *  for listings where item quantity is greater than 1.
     *  <br><br>
     *  <b>For GetItem and related calls:</b>
     *  This is the total of the number of items available for sale plus the quantity
     *  already sold. To determine the number of items available, subtract
     *  <b>SellingStatus.QuantitySold</b> from this value.
     *  <br><br>
     *  <b>For order line item calls with variations:</b>
     *  In <b>GetItemTransactions</b>, <b>Item.Quantity</b> is the same as <b>GetItem</b> (the
     *  total quantity across all variations). In <b>GetSellerTransactions</b>,
     *  <b>Transaction.Item.Quantity</b> is the total quantity of the applicable
     *  variation (quantity available plus quantity sold).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For the US site, new eBay sellers are subject to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-Policies.html#SellerLimits">Seller Limits</a>, which limit the quantity of items that may be listed and/or the total cumulative value of these listings. While subject to these selling limits, an eBay seller can use the <b>GetMyeBaySelling</b> call to retrieve both the remaining number of listings they can create and the remaining cumulative value of these listings. These values are shown in the <b>Summary.QuantityLimitRemaining</b> and <b>Summary.AmountLimitRemaining</b> fields in the <b>GetMyeBaySelling</b> response. If a call to add an item or revise an item would result in the exceeding of these limits, the add item or revise item call will fail. These fields will only be returned if the seller is subject to seller limits.
     *  </span>
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as privateNotes
     *
     * A note that a user makes on an item from their My eBay account. <b>GetMyeBayBuying</b> and <b>GetMyeBaySelling</b> return this field, and only if you pass in the <b>IncludeNotes</b> field in the request, and set its value to <b>true</b>. This field will only be returned if set for an item, and only returned to the user who created the note.
     *  <br><br>
     *  Not supported as input in <b>ReviseItem</b>. Use <b>SetUserNotes</b> instead.
     *  <br><br>
     *  <b>For GetMyeBayBuying</b> In <b>WatchList</b>, notes for variations are only
     *  returned at the Item level, not the variation level. They are only set if you
     *  specified <b>ItemID</b> (if no purchases) or <b>ItemID</b> and <b>VariationSpecifics</b> (if there are
     *  purchases) in <b>SetUserNotes</b> (or selected the equivalent in the My eBay UI on the
     *  site).
     *  <br><br>
     *  In <b>WonList</b>, notes for variations are only returned at the Item level, not the
     *  variation level. They are only set if you specified <b>ItemID</b> and <b>TransactionID</b> in
     *  <b>SetUserNotes</b> (or selected the equivalent in the My eBay UI on the site).
     *
     * @return string
     */
    public function getPrivateNotes()
    {
        return $this->privateNotes;
    }

    /**
     * Sets a new privateNotes
     *
     * A note that a user makes on an item from their My eBay account. <b>GetMyeBayBuying</b> and <b>GetMyeBaySelling</b> return this field, and only if you pass in the <b>IncludeNotes</b> field in the request, and set its value to <b>true</b>. This field will only be returned if set for an item, and only returned to the user who created the note.
     *  <br><br>
     *  Not supported as input in <b>ReviseItem</b>. Use <b>SetUserNotes</b> instead.
     *  <br><br>
     *  <b>For GetMyeBayBuying</b> In <b>WatchList</b>, notes for variations are only
     *  returned at the Item level, not the variation level. They are only set if you
     *  specified <b>ItemID</b> (if no purchases) or <b>ItemID</b> and <b>VariationSpecifics</b> (if there are
     *  purchases) in <b>SetUserNotes</b> (or selected the equivalent in the My eBay UI on the
     *  site).
     *  <br><br>
     *  In <b>WonList</b>, notes for variations are only returned at the Item level, not the
     *  variation level. They are only set if you specified <b>ItemID</b> and <b>TransactionID</b> in
     *  <b>SetUserNotes</b> (or selected the equivalent in the My eBay UI on the site).
     *
     * @param string $privateNotes
     * @return self
     */
    public function setPrivateNotes($privateNotes)
    {
        $this->privateNotes = $privateNotes;
        return $this;
    }

    /**
     * Gets as regionID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getRegionID()
    {
        return $this->regionID;
    }

    /**
     * Sets a new regionID
     *
     * This field is deprecated.
     *
     * @param string $regionID
     * @return self
     */
    public function setRegionID($regionID)
    {
        $this->regionID = $regionID;
        return $this;
    }

    /**
     * Gets as relistLink
     *
     * Applicable only to relisting an item. If true, creates a link in the item's
     *  old listing for the item that points to the new relist page, which
     *  accommodates users who might still look for the item under its old item ID.
     *
     * @return bool
     */
    public function getRelistLink()
    {
        return $this->relistLink;
    }

    /**
     * Sets a new relistLink
     *
     * Applicable only to relisting an item. If true, creates a link in the item's
     *  old listing for the item that points to the new relist page, which
     *  accommodates users who might still look for the item under its old item ID.
     *
     * @param bool $relistLink
     * @return self
     */
    public function setRelistLink($relistLink)
    {
        $this->relistLink = $relistLink;
        return $this;
    }

    /**
     * Gets as reservePrice
     *
     * The lowest price at which the seller is willing to sell an auction item. (<b>StartPrice</b>
     *  must be lower than <b>ReservePrice</b> .) Not all categories support a Reserve Price.
     *  Use <b>GetCategories</b> to see if a category supports a Reserve Price.
     *  In calls that retrieve item data, the <b>ReservePrice</b> field will only be returned to the auction item's seller, and only if a Reserve Price has been set up. A Reserve Price is not applicable to fixed-price or classified ad listings.<br>
     *  <br>
     *  You can remove the Reserve price of a US eBay Motors listing if the category allows it, the current Reserve Price has not been met, and the Reserve Price is at least $2.00 more than the current high bid. In this case, if the item has bids, the Reserve Price is set to $1.00 over the current high bid. The next bid meets the Reserve Price and wins. See <i>Fees Overview</i> below for information about fee credits that may be available when the Reserve Price is removed for a Motors listing.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getReservePrice()
    {
        return $this->reservePrice;
    }

    /**
     * Sets a new reservePrice
     *
     * The lowest price at which the seller is willing to sell an auction item. (<b>StartPrice</b>
     *  must be lower than <b>ReservePrice</b> .) Not all categories support a Reserve Price.
     *  Use <b>GetCategories</b> to see if a category supports a Reserve Price.
     *  In calls that retrieve item data, the <b>ReservePrice</b> field will only be returned to the auction item's seller, and only if a Reserve Price has been set up. A Reserve Price is not applicable to fixed-price or classified ad listings.<br>
     *  <br>
     *  You can remove the Reserve price of a US eBay Motors listing if the category allows it, the current Reserve Price has not been met, and the Reserve Price is at least $2.00 more than the current high bid. In this case, if the item has bids, the Reserve Price is set to $1.00 over the current high bid. The next bid meets the Reserve Price and wins. See <i>Fees Overview</i> below for information about fee credits that may be available when the Reserve Price is removed for a Motors listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $reservePrice
     * @return self
     */
    public function setReservePrice(\Nogrod\eBaySDK\MerchantData\AmountType $reservePrice)
    {
        $this->reservePrice = $reservePrice;
        return $this;
    }

    /**
     * Gets as reviseStatus
     *
     * This container is returned if a listing has been revised in any way since it first became active. One or more boolean fields will be returned under this container based on the type of revision(s) that occured, including a general revision, a price change, or a feature added or removed.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ReviseStatusType
     */
    public function getReviseStatus()
    {
        return $this->reviseStatus;
    }

    /**
     * Sets a new reviseStatus
     *
     * This container is returned if a listing has been revised in any way since it first became active. One or more boolean fields will be returned under this container based on the type of revision(s) that occured, including a general revision, a price change, or a feature added or removed.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ReviseStatusType $reviseStatus
     * @return self
     */
    public function setReviseStatus(\Nogrod\eBaySDK\MerchantData\ReviseStatusType $reviseStatus)
    {
        $this->reviseStatus = $reviseStatus;
        return $this;
    }

    /**
     * Gets as scheduleTime
     *
     * Allows the user to specify a time in the future that the listing becomes active on eBay.
     *  To schedule the listing start time, specify a time in the future in GMT
     *  format. In <b>GetItem</b> and related calls, the scheduled time is returned in
     *  <b>StartTime</b>. For <b>ReviseItem</b>, you can modify this value if the currently
     *  scheduled start time is in the future (listing has yet to go live).
     *  <br><br>
     *  When you schedule a start time, the start time is randomized within 15-minute
     *  intervals. Randomized start times applies to the following sites:
     *  <br>
     *  <code>AT, BEFR, BENL, CH, DE, ES, FR, IE, IT, NL, PL, UK</code>
     *  <br><br>
     *  Also see the following article in the Knowledge Base: <a href=
     *  "https://ebaydts.com/eBayKBDetails?KBid=1473"
     *  >Why scheduled time is sometimes getting reset</a>.
     *
     * @return \DateTime
     */
    public function getScheduleTime()
    {
        return $this->scheduleTime;
    }

    /**
     * Sets a new scheduleTime
     *
     * Allows the user to specify a time in the future that the listing becomes active on eBay.
     *  To schedule the listing start time, specify a time in the future in GMT
     *  format. In <b>GetItem</b> and related calls, the scheduled time is returned in
     *  <b>StartTime</b>. For <b>ReviseItem</b>, you can modify this value if the currently
     *  scheduled start time is in the future (listing has yet to go live).
     *  <br><br>
     *  When you schedule a start time, the start time is randomized within 15-minute
     *  intervals. Randomized start times applies to the following sites:
     *  <br>
     *  <code>AT, BEFR, BENL, CH, DE, ES, FR, IE, IT, NL, PL, UK</code>
     *  <br><br>
     *  Also see the following article in the Knowledge Base: <a href=
     *  "https://ebaydts.com/eBayKBDetails?KBid=1473"
     *  >Why scheduled time is sometimes getting reset</a>.
     *
     * @param \DateTime $scheduleTime
     * @return self
     */
    public function setScheduleTime(\DateTime $scheduleTime)
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    /**
     * Gets as secondaryCategory
     *
     * The unique identifer for a secondary category. This field is only applicable if the seller decides to list the item under two categories.
     *  <br>
     *  <br>
     *  You cannot list US eBay Motors vehicles in two categories. However, you can
     *  list Parts & Accessories in two categories. The Final Value Fee is based
     *  on the primary category in which the item is listed. Furthermore, you can
     *  list the same item in an eBay Motors Parts & Accessories category and in
     *  an eligible eBay category, as long as the primary category is associated
     *  with the site on which you are listing. That is, the two categories can be a
     *  mix of Motors Parts & Accessories and eBay site categories. (Real
     *  Estate, Mature Audience (adult), and Business & Industrial categories
     *  are not eligible for listing in two categories in this manner.) For example,
     *  if you list on Motors, the primary category could be 6750 (eBay Motors >
     *  Parts & Accessories > Apparel & Merchandise > Motorcycle >
     *  Jackets & Leathers), and the secondary category could be 57988 (eBay
     *  > Clothing, Shoes > Accessories > Men's Clothing > Outerwear).
     *  If you list on the main eBay site, the primary category could be 57988 and
     *  the secondary category could be 6750. <br>
     *  <br>
     *  If eBay has designated a category as a value category
     *  (see ValueCategory in <b>GetCategoryFeatures</b>), items in that category
     *  cannot be listed in two categories.
     *  For example, if your <b>AddItem</b> request
     *  includes a primary or secondary category that is a value category, then eBay drops <b>SecondaryCategory</b> and lists
     *  the item with only the <b>PrimaryCategory</b> you selected.
     *  Also, if the listing request includes Item Specifics
     *  (in <b>ItemSpecifics</b>) that are associated with <b>SecondaryCategory</b>, eBay drops those values when we drop <b>SecondaryCategory</b>. (The same logic is used if you revise an existing
     *  listing to add a secondary category or to change one of the categories: If either the primary or secondary category is a value category, eBay drops the secondary category from your request.)<br>
     *  <br>
     *  To remove this value when relisting an item, use <b>DeletedField</b>.
     *  <br><br>
     *  <b>For ReviseItem only:</b> When revising a listing within 12 hours of the listing's scheduled end time, you can only add or change the secondary category when an auction listing has no active bids or a multiple-quantity, fixed-price listing has no items sold. If you change the secondary category, any corresponding Item Specifics that were previously specified may be dropped from the listing if they aren't valid for the category.
     *  <br>
     *  <br>
     *  <b>For ReviseItem only:</b> Previously, removing the listing from a secondary category was only possible within 12 hours of the listing's scheduled end time when an auction listing had no active bids or a multiple-quantity, fixed-price listing had no items sold, but this restriction no longer exists. Now, the secondary category can be dropped for any active listing at any time, regardless of whether an auction listing has bids or a fixed-price listing has sales. To drop a secondary category, the seller passes in a value of <code>0</code> in the <b>SecondaryCategory.CategoryID</b> field.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CategoryType
     */
    public function getSecondaryCategory()
    {
        return $this->secondaryCategory;
    }

    /**
     * Sets a new secondaryCategory
     *
     * The unique identifer for a secondary category. This field is only applicable if the seller decides to list the item under two categories.
     *  <br>
     *  <br>
     *  You cannot list US eBay Motors vehicles in two categories. However, you can
     *  list Parts & Accessories in two categories. The Final Value Fee is based
     *  on the primary category in which the item is listed. Furthermore, you can
     *  list the same item in an eBay Motors Parts & Accessories category and in
     *  an eligible eBay category, as long as the primary category is associated
     *  with the site on which you are listing. That is, the two categories can be a
     *  mix of Motors Parts & Accessories and eBay site categories. (Real
     *  Estate, Mature Audience (adult), and Business & Industrial categories
     *  are not eligible for listing in two categories in this manner.) For example,
     *  if you list on Motors, the primary category could be 6750 (eBay Motors >
     *  Parts & Accessories > Apparel & Merchandise > Motorcycle >
     *  Jackets & Leathers), and the secondary category could be 57988 (eBay
     *  > Clothing, Shoes > Accessories > Men's Clothing > Outerwear).
     *  If you list on the main eBay site, the primary category could be 57988 and
     *  the secondary category could be 6750. <br>
     *  <br>
     *  If eBay has designated a category as a value category
     *  (see ValueCategory in <b>GetCategoryFeatures</b>), items in that category
     *  cannot be listed in two categories.
     *  For example, if your <b>AddItem</b> request
     *  includes a primary or secondary category that is a value category, then eBay drops <b>SecondaryCategory</b> and lists
     *  the item with only the <b>PrimaryCategory</b> you selected.
     *  Also, if the listing request includes Item Specifics
     *  (in <b>ItemSpecifics</b>) that are associated with <b>SecondaryCategory</b>, eBay drops those values when we drop <b>SecondaryCategory</b>. (The same logic is used if you revise an existing
     *  listing to add a secondary category or to change one of the categories: If either the primary or secondary category is a value category, eBay drops the secondary category from your request.)<br>
     *  <br>
     *  To remove this value when relisting an item, use <b>DeletedField</b>.
     *  <br><br>
     *  <b>For ReviseItem only:</b> When revising a listing within 12 hours of the listing's scheduled end time, you can only add or change the secondary category when an auction listing has no active bids or a multiple-quantity, fixed-price listing has no items sold. If you change the secondary category, any corresponding Item Specifics that were previously specified may be dropped from the listing if they aren't valid for the category.
     *  <br>
     *  <br>
     *  <b>For ReviseItem only:</b> Previously, removing the listing from a secondary category was only possible within 12 hours of the listing's scheduled end time when an auction listing had no active bids or a multiple-quantity, fixed-price listing had no items sold, but this restriction no longer exists. Now, the secondary category can be dropped for any active listing at any time, regardless of whether an auction listing has bids or a fixed-price listing has sales. To drop a secondary category, the seller passes in a value of <code>0</code> in the <b>SecondaryCategory.CategoryID</b> field.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CategoryType $secondaryCategory
     * @return self
     */
    public function setSecondaryCategory(\Nogrod\eBaySDK\MerchantData\CategoryType $secondaryCategory)
    {
        $this->secondaryCategory = $secondaryCategory;
        return $this;
    }

    /**
     * Gets as freeAddedCategory
     *
     * The unique identifier for a secondary category that eBay has added as a free promotion. You cannot add
     *  this yourself. This container is only returned if the item was listed in a single category and
     *  eBay added a free secondary category.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CategoryType
     */
    public function getFreeAddedCategory()
    {
        return $this->freeAddedCategory;
    }

    /**
     * Sets a new freeAddedCategory
     *
     * The unique identifier for a secondary category that eBay has added as a free promotion. You cannot add
     *  this yourself. This container is only returned if the item was listed in a single category and
     *  eBay added a free secondary category.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CategoryType $freeAddedCategory
     * @return self
     */
    public function setFreeAddedCategory(\Nogrod\eBaySDK\MerchantData\CategoryType $freeAddedCategory)
    {
        $this->freeAddedCategory = $freeAddedCategory;
        return $this;
    }

    /**
     * Gets as seller
     *
     * Container for information about this listing's seller.
     *  <br><br>
     *  Returned by <b>GetItemsAwaitingFeedback</b> if Buyer is making the request.
     *
     * @return \Nogrod\eBaySDK\MerchantData\UserType
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * Sets a new seller
     *
     * Container for information about this listing's seller.
     *  <br><br>
     *  Returned by <b>GetItemsAwaitingFeedback</b> if Buyer is making the request.
     *
     * @param \Nogrod\eBaySDK\MerchantData\UserType $seller
     * @return self
     */
    public function setSeller(\Nogrod\eBaySDK\MerchantData\UserType $seller)
    {
        $this->seller = $seller;
        return $this;
    }

    /**
     * Gets as sellingStatus
     *
     * Various details about the current status of the listing, such as the current
     *  number of bids, the current high bidder, quantity sold, current price, and listing status.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellingStatusType
     */
    public function getSellingStatus()
    {
        return $this->sellingStatus;
    }

    /**
     * Sets a new sellingStatus
     *
     * Various details about the current status of the listing, such as the current
     *  number of bids, the current high bidder, quantity sold, current price, and listing status.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellingStatusType $sellingStatus
     * @return self
     */
    public function setSellingStatus(\Nogrod\eBaySDK\MerchantData\SellingStatusType $sellingStatus)
    {
        $this->sellingStatus = $sellingStatus;
        return $this;
    }

    /**
     * Gets as shippingDetails
     *
     * The shipping-related details for an order, including flat and calculated shipping costs.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers who are using a shipping (aka Fulfillment) business policy to create/revise/relist an item, none of the fields under the <b>ShippingDetails</b> container are necessary. A fulfillment business policy can be set up and/or modified in My eBay, or via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/fulfillment_policy/methods/createFulfillmentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>. A fulfillment business policy is associated to a listing through the <b>Item.SellerProfiles.SellerShippingProfile</b> container.
     *  <br>
     *  <br>
     *  If you <i>do not</i> use a fulfillment business policy, many of the fields under this <b>ShippingDetails</b> container become required in your request.
     *  </span>
     *  <br>
     *  New users who list their first items in selected categories on the US site
     *  must specify at least one domestic shipping service. This applies to a
     *  category if <b>GetCategoryFeatures</b> returns <code>true</code> for
     *  <b>Category.ShippingTermsRequired</b>.
     *  <br>
     *  <br>
     *  For multi-quantity, fixed-price listings, a seller can revise all shipping details of the
     *  listing (except for sales tax and for shipping type of Freight) for all
     *  unsold items. This applies to both domestic and international shipping.
     *  Checkout is not affected for those who bought items prior to the seller's
     *  shipping changes&#8212;the shipping details that were in effect at the time of
     *  purchase are used for that buyer at the time of checkout.
     *  <br>
     *  <br>
     *  Shipping details are not applicable to any classified ad listings, as shipping/delivery/pickup is handled by the buyer and seller off of the eBay platform.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> To create a listing that is 'Local Pickup only' (buyer picks up, with no shipping/delivery available), the user does the following two things:
     *  <ul>
     *  <li>Either omit the entire <strong>ShippingDetails</strong> container, or pass in an empty <strong>ShippingDetails</strong> container - &lt;ShippingDetails/&gt; </li>
     *  <li>Pass in one <strong>ShipToLocations</strong> field, with its value set to <code>None</code> - &lt;ShipToLocations&gt;None&lt;/ShipToLocations&gt;</li>
     *  </ul>
     *  </span>
     *  <br>
     *  For <b>GetMyeBayBuying, GetMyeBaySelling</b>: <b>ShippingDetails</b> is not returned.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ShippingDetailsType
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    /**
     * Sets a new shippingDetails
     *
     * The shipping-related details for an order, including flat and calculated shipping costs.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers who are using a shipping (aka Fulfillment) business policy to create/revise/relist an item, none of the fields under the <b>ShippingDetails</b> container are necessary. A fulfillment business policy can be set up and/or modified in My eBay, or via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/fulfillment_policy/methods/createFulfillmentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>. A fulfillment business policy is associated to a listing through the <b>Item.SellerProfiles.SellerShippingProfile</b> container.
     *  <br>
     *  <br>
     *  If you <i>do not</i> use a fulfillment business policy, many of the fields under this <b>ShippingDetails</b> container become required in your request.
     *  </span>
     *  <br>
     *  New users who list their first items in selected categories on the US site
     *  must specify at least one domestic shipping service. This applies to a
     *  category if <b>GetCategoryFeatures</b> returns <code>true</code> for
     *  <b>Category.ShippingTermsRequired</b>.
     *  <br>
     *  <br>
     *  For multi-quantity, fixed-price listings, a seller can revise all shipping details of the
     *  listing (except for sales tax and for shipping type of Freight) for all
     *  unsold items. This applies to both domestic and international shipping.
     *  Checkout is not affected for those who bought items prior to the seller's
     *  shipping changes&#8212;the shipping details that were in effect at the time of
     *  purchase are used for that buyer at the time of checkout.
     *  <br>
     *  <br>
     *  Shipping details are not applicable to any classified ad listings, as shipping/delivery/pickup is handled by the buyer and seller off of the eBay platform.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> To create a listing that is 'Local Pickup only' (buyer picks up, with no shipping/delivery available), the user does the following two things:
     *  <ul>
     *  <li>Either omit the entire <strong>ShippingDetails</strong> container, or pass in an empty <strong>ShippingDetails</strong> container - &lt;ShippingDetails/&gt; </li>
     *  <li>Pass in one <strong>ShipToLocations</strong> field, with its value set to <code>None</code> - &lt;ShipToLocations&gt;None&lt;/ShipToLocations&gt;</li>
     *  </ul>
     *  </span>
     *  <br>
     *  For <b>GetMyeBayBuying, GetMyeBaySelling</b>: <b>ShippingDetails</b> is not returned.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ShippingDetailsType $shippingDetails
     * @return self
     */
    public function setShippingDetails(\Nogrod\eBaySDK\MerchantData\ShippingDetailsType $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
        return $this;
    }

    /**
     * Adds as shipToLocations
     *
     * An international location or region to which the seller is willing to ship,
     *  regardless of shipping service. The country of the listing site is added by eBay.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a fulfillment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/fulfillment_policy/methods/createFulfillmentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate the <b>ShipToLocations</b> field. Instead, indicate your fulfillment policy using the <b>SellerProfiles.SellerShippingProfile</b> container.
     *  </span>
     *  <br>
     *  Use <b>GeteBayDetails</b> with a <b>DetailName</b> of <b>ShippingLocationDetails</b> to
     *  determine which international locations are valid for the site. Omit
     *  <b>ShipToLocations</b> if you want to ship only within the country of the listing site.
     *  To state that you do not wish to ship at all, set <b>ShipToLocations</b> to <code>None</code>.
     *  <b>ReviseItem</b> can add a <b>ShipToLocations</b>. On output, <b>ShipToLocations</b> is the
     *  collection of all input item-level <b>ShipToLocations</b> plus international shipping
     *  service-level ShipToLocation values.
     *  <br><br>
     *  If you have specified a region to which you will ship (such as Asia), you can
     *  use <b>ExcludeShipToLocation</b> to exclude certain countries within that region to
     *  where you will not ship (such as Afghanistan).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> To create a listing that is 'Local Pickup only' (buyer picks up, with no shipping/delivery available), the user does the following two things:
     *  <ul>
     *  <li>Either omit the entire <strong>ShippingDetails</strong> container, or pass in an empty <strong>ShippingDetails</strong> container - &lt;ShippingDetails/&gt; </li>
     *  <li>Pass in one <strong>ShipToLocations</strong> field, with its value set to <code>None</code> - &lt;ShipToLocations&gt;None&lt;/ShipToLocations&gt;</li>
     *  </ul>
     *  </span>
     *
     * @return self
     * @param string $shipToLocations
     */
    public function addToShipToLocations($shipToLocations)
    {
        $this->shipToLocations[] = $shipToLocations;
        return $this;
    }

    /**
     * isset shipToLocations
     *
     * An international location or region to which the seller is willing to ship,
     *  regardless of shipping service. The country of the listing site is added by eBay.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a fulfillment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/fulfillment_policy/methods/createFulfillmentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate the <b>ShipToLocations</b> field. Instead, indicate your fulfillment policy using the <b>SellerProfiles.SellerShippingProfile</b> container.
     *  </span>
     *  <br>
     *  Use <b>GeteBayDetails</b> with a <b>DetailName</b> of <b>ShippingLocationDetails</b> to
     *  determine which international locations are valid for the site. Omit
     *  <b>ShipToLocations</b> if you want to ship only within the country of the listing site.
     *  To state that you do not wish to ship at all, set <b>ShipToLocations</b> to <code>None</code>.
     *  <b>ReviseItem</b> can add a <b>ShipToLocations</b>. On output, <b>ShipToLocations</b> is the
     *  collection of all input item-level <b>ShipToLocations</b> plus international shipping
     *  service-level ShipToLocation values.
     *  <br><br>
     *  If you have specified a region to which you will ship (such as Asia), you can
     *  use <b>ExcludeShipToLocation</b> to exclude certain countries within that region to
     *  where you will not ship (such as Afghanistan).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> To create a listing that is 'Local Pickup only' (buyer picks up, with no shipping/delivery available), the user does the following two things:
     *  <ul>
     *  <li>Either omit the entire <strong>ShippingDetails</strong> container, or pass in an empty <strong>ShippingDetails</strong> container - &lt;ShippingDetails/&gt; </li>
     *  <li>Pass in one <strong>ShipToLocations</strong> field, with its value set to <code>None</code> - &lt;ShipToLocations&gt;None&lt;/ShipToLocations&gt;</li>
     *  </ul>
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipToLocations($index)
    {
        return isset($this->shipToLocations[$index]);
    }

    /**
     * unset shipToLocations
     *
     * An international location or region to which the seller is willing to ship,
     *  regardless of shipping service. The country of the listing site is added by eBay.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a fulfillment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/fulfillment_policy/methods/createFulfillmentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate the <b>ShipToLocations</b> field. Instead, indicate your fulfillment policy using the <b>SellerProfiles.SellerShippingProfile</b> container.
     *  </span>
     *  <br>
     *  Use <b>GeteBayDetails</b> with a <b>DetailName</b> of <b>ShippingLocationDetails</b> to
     *  determine which international locations are valid for the site. Omit
     *  <b>ShipToLocations</b> if you want to ship only within the country of the listing site.
     *  To state that you do not wish to ship at all, set <b>ShipToLocations</b> to <code>None</code>.
     *  <b>ReviseItem</b> can add a <b>ShipToLocations</b>. On output, <b>ShipToLocations</b> is the
     *  collection of all input item-level <b>ShipToLocations</b> plus international shipping
     *  service-level ShipToLocation values.
     *  <br><br>
     *  If you have specified a region to which you will ship (such as Asia), you can
     *  use <b>ExcludeShipToLocation</b> to exclude certain countries within that region to
     *  where you will not ship (such as Afghanistan).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> To create a listing that is 'Local Pickup only' (buyer picks up, with no shipping/delivery available), the user does the following two things:
     *  <ul>
     *  <li>Either omit the entire <strong>ShippingDetails</strong> container, or pass in an empty <strong>ShippingDetails</strong> container - &lt;ShippingDetails/&gt; </li>
     *  <li>Pass in one <strong>ShipToLocations</strong> field, with its value set to <code>None</code> - &lt;ShipToLocations&gt;None&lt;/ShipToLocations&gt;</li>
     *  </ul>
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipToLocations($index)
    {
        unset($this->shipToLocations[$index]);
    }

    /**
     * Gets as shipToLocations
     *
     * An international location or region to which the seller is willing to ship,
     *  regardless of shipping service. The country of the listing site is added by eBay.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a fulfillment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/fulfillment_policy/methods/createFulfillmentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate the <b>ShipToLocations</b> field. Instead, indicate your fulfillment policy using the <b>SellerProfiles.SellerShippingProfile</b> container.
     *  </span>
     *  <br>
     *  Use <b>GeteBayDetails</b> with a <b>DetailName</b> of <b>ShippingLocationDetails</b> to
     *  determine which international locations are valid for the site. Omit
     *  <b>ShipToLocations</b> if you want to ship only within the country of the listing site.
     *  To state that you do not wish to ship at all, set <b>ShipToLocations</b> to <code>None</code>.
     *  <b>ReviseItem</b> can add a <b>ShipToLocations</b>. On output, <b>ShipToLocations</b> is the
     *  collection of all input item-level <b>ShipToLocations</b> plus international shipping
     *  service-level ShipToLocation values.
     *  <br><br>
     *  If you have specified a region to which you will ship (such as Asia), you can
     *  use <b>ExcludeShipToLocation</b> to exclude certain countries within that region to
     *  where you will not ship (such as Afghanistan).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> To create a listing that is 'Local Pickup only' (buyer picks up, with no shipping/delivery available), the user does the following two things:
     *  <ul>
     *  <li>Either omit the entire <strong>ShippingDetails</strong> container, or pass in an empty <strong>ShippingDetails</strong> container - &lt;ShippingDetails/&gt; </li>
     *  <li>Pass in one <strong>ShipToLocations</strong> field, with its value set to <code>None</code> - &lt;ShipToLocations&gt;None&lt;/ShipToLocations&gt;</li>
     *  </ul>
     *  </span>
     *
     * @return string[]
     */
    public function getShipToLocations()
    {
        return $this->shipToLocations;
    }

    /**
     * Sets a new shipToLocations
     *
     * An international location or region to which the seller is willing to ship,
     *  regardless of shipping service. The country of the listing site is added by eBay.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a fulfillment policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/fulfillment_policy/methods/createFulfillmentPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate the <b>ShipToLocations</b> field. Instead, indicate your fulfillment policy using the <b>SellerProfiles.SellerShippingProfile</b> container.
     *  </span>
     *  <br>
     *  Use <b>GeteBayDetails</b> with a <b>DetailName</b> of <b>ShippingLocationDetails</b> to
     *  determine which international locations are valid for the site. Omit
     *  <b>ShipToLocations</b> if you want to ship only within the country of the listing site.
     *  To state that you do not wish to ship at all, set <b>ShipToLocations</b> to <code>None</code>.
     *  <b>ReviseItem</b> can add a <b>ShipToLocations</b>. On output, <b>ShipToLocations</b> is the
     *  collection of all input item-level <b>ShipToLocations</b> plus international shipping
     *  service-level ShipToLocation values.
     *  <br><br>
     *  If you have specified a region to which you will ship (such as Asia), you can
     *  use <b>ExcludeShipToLocation</b> to exclude certain countries within that region to
     *  where you will not ship (such as Afghanistan).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> To create a listing that is 'Local Pickup only' (buyer picks up, with no shipping/delivery available), the user does the following two things:
     *  <ul>
     *  <li>Either omit the entire <strong>ShippingDetails</strong> container, or pass in an empty <strong>ShippingDetails</strong> container - &lt;ShippingDetails/&gt; </li>
     *  <li>Pass in one <strong>ShipToLocations</strong> field, with its value set to <code>None</code> - &lt;ShipToLocations&gt;None&lt;/ShipToLocations&gt;</li>
     *  </ul>
     *  </span>
     *
     * @param string[] $shipToLocations
     * @return self
     */
    public function setShipToLocations(array $shipToLocations)
    {
        $this->shipToLocations = $shipToLocations;
        return $this;
    }

    /**
     * Gets as site
     *
     * The name of the site on which the item is listed. The listing site affects
     *  the business logic and validation rules that are applied to the request,
     *  which in turn affect the values that are returned in the response, as well
     *  as values that appear on the eBay site. For example, the listing site
     *  can affect the validation of <b>Category</b> in listing requests, international
     *  business seller requirements, the values of converted (localized) prices in
     *  responses, the item-related time stamps that are displayed on the eBay site, the visibility of the item in some types of searches (e.g.,
     *  <b>GetCategoryListings</b>), and other information. In some cases, the rules are
     *  determined by a combination of the site, the user's registration address,
     *  and other information. You cannot change the site when you revise a
     *  listing.<br>
     *  <br>
     *  When you specify <b>Item.Site</b> in <b>AddItem</b> or <b>AddFixedPriceItem</b>, it must be consistent with the
     *  numeric site ID that you specify in the request URL (for the SOAP API) or
     *  the <b>X-EBAY- API-SITEID</b> header (for the XML API).
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * The name of the site on which the item is listed. The listing site affects
     *  the business logic and validation rules that are applied to the request,
     *  which in turn affect the values that are returned in the response, as well
     *  as values that appear on the eBay site. For example, the listing site
     *  can affect the validation of <b>Category</b> in listing requests, international
     *  business seller requirements, the values of converted (localized) prices in
     *  responses, the item-related time stamps that are displayed on the eBay site, the visibility of the item in some types of searches (e.g.,
     *  <b>GetCategoryListings</b>), and other information. In some cases, the rules are
     *  determined by a combination of the site, the user's registration address,
     *  and other information. You cannot change the site when you revise a
     *  listing.<br>
     *  <br>
     *  When you specify <b>Item.Site</b> in <b>AddItem</b> or <b>AddFixedPriceItem</b>, it must be consistent with the
     *  numeric site ID that you specify in the request URL (for the SOAP API) or
     *  the <b>X-EBAY- API-SITEID</b> header (for the XML API).
     *
     * @param string $site
     * @return self
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as startPrice
     *
     * The original price of the item at listing or re-listing time. If this
     *  value changes when the item is revised, the new value becomes the original
     *  price.
     *  <br><br>
     *  <b>For auction listings:</b> Competitive bidding starts at this
     *  value. Once at least one bid has been placed, <b>StartPrice</b> remains the same but
     *  <b>CurrentPrice</b> is incremented to the amount of each succeeding bid. If <b>ReservePrice</b> is
     *  also specified, the value of <b>StartPrice</b> must be lower than the value of
     *  <b>ReservePrice</b>.
     *  <br><br>
     *  <b>For input on fixed-price listings (<b>FixedPriceItem</b>): </b>
     *  This is the constant price at which a buyer may purchase the item.
     *  <br><br>
     *  <b>GetMyeBaySelling</b> does not return <b>Item.StartPrice</b>
     *  for fixed price items&#8212;it returns <b>Item.SellingStatus.CurrentPrice</b>.
     *  <br><br>
     *  <b>For AddFixedPriceItem and VerifyAddFixedPriceItem:</b>
     *  Required when no variations are specified. If variations are specified,
     *  use <b>Variation.StartPrice</b> for each variation instead.
     *  <br><br>
     *  <b>For Revise calls:</b>
     *  If the <b>StartPrice</b> value for a fixed-price item is changed with a Revise call, the <b>MinimumBestOfferPrice</b> and <b>BestOfferAutoAcceptPrice</b> fields in the <b>ListingDetails</b> container will be dropped (if set), basically turning off the Best Offer Auto Accept and/or Auto Decline features. If the seller wanted to reintroduce either of these Best Offer threshold values in the listing again, an additional Revise call would have to be made, passing in the desired threshold values.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> For the US site, new eBay sellers are subject to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-Policies.html#SellerLimits">Seller Limits</a>, which limit the quantity of items that may be listed and/or the total cumulative value of these listings. While subject to these selling limits, an eBay seller can use the <b>GetMyeBaySelling</b> call to retrieve both the remaining number of listings they can create and the remaining cumulative value of these listings. These values are shown in the <b>Summary.QuantityLimitRemaining</b> and <b>Summary.AmountLimitRemaining</b> fields in the <b>GetMyeBaySelling</b> response. If a call to add an item or revise an item would result in the exceeding of these limits, the add item or revise item call will fail. These fields will only be returned if the seller is subject to seller limits.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getStartPrice()
    {
        return $this->startPrice;
    }

    /**
     * Sets a new startPrice
     *
     * The original price of the item at listing or re-listing time. If this
     *  value changes when the item is revised, the new value becomes the original
     *  price.
     *  <br><br>
     *  <b>For auction listings:</b> Competitive bidding starts at this
     *  value. Once at least one bid has been placed, <b>StartPrice</b> remains the same but
     *  <b>CurrentPrice</b> is incremented to the amount of each succeeding bid. If <b>ReservePrice</b> is
     *  also specified, the value of <b>StartPrice</b> must be lower than the value of
     *  <b>ReservePrice</b>.
     *  <br><br>
     *  <b>For input on fixed-price listings (<b>FixedPriceItem</b>): </b>
     *  This is the constant price at which a buyer may purchase the item.
     *  <br><br>
     *  <b>GetMyeBaySelling</b> does not return <b>Item.StartPrice</b>
     *  for fixed price items&#8212;it returns <b>Item.SellingStatus.CurrentPrice</b>.
     *  <br><br>
     *  <b>For AddFixedPriceItem and VerifyAddFixedPriceItem:</b>
     *  Required when no variations are specified. If variations are specified,
     *  use <b>Variation.StartPrice</b> for each variation instead.
     *  <br><br>
     *  <b>For Revise calls:</b>
     *  If the <b>StartPrice</b> value for a fixed-price item is changed with a Revise call, the <b>MinimumBestOfferPrice</b> and <b>BestOfferAutoAcceptPrice</b> fields in the <b>ListingDetails</b> container will be dropped (if set), basically turning off the Best Offer Auto Accept and/or Auto Decline features. If the seller wanted to reintroduce either of these Best Offer threshold values in the listing again, an additional Revise call would have to be made, passing in the desired threshold values.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> For the US site, new eBay sellers are subject to <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-Policies.html#SellerLimits">Seller Limits</a>, which limit the quantity of items that may be listed and/or the total cumulative value of these listings. While subject to these selling limits, an eBay seller can use the <b>GetMyeBaySelling</b> call to retrieve both the remaining number of listings they can create and the remaining cumulative value of these listings. These values are shown in the <b>Summary.QuantityLimitRemaining</b> and <b>Summary.AmountLimitRemaining</b> fields in the <b>GetMyeBaySelling</b> response. If a call to add an item or revise an item would result in the exceeding of these limits, the add item or revise item call will fail. These fields will only be returned if the seller is subject to seller limits.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $startPrice
     * @return self
     */
    public function setStartPrice(\Nogrod\eBaySDK\MerchantData\AmountType $startPrice)
    {
        $this->startPrice = $startPrice;
        return $this;
    }

    /**
     * Gets as storefront
     *
     * This container provides details about the seller's eBay store.
     *  <br><br>
     *  In an Add/Revise/Relist call, the seller can include this container to set/change which customized eBay store category that the item will be placed in.
     *  <br><br>
     *  For 'Get' calls, this container is returned if the seller of the item has an eBay store.
     *
     * @return \Nogrod\eBaySDK\MerchantData\StorefrontType
     */
    public function getStorefront()
    {
        return $this->storefront;
    }

    /**
     * Sets a new storefront
     *
     * This container provides details about the seller's eBay store.
     *  <br><br>
     *  In an Add/Revise/Relist call, the seller can include this container to set/change which customized eBay store category that the item will be placed in.
     *  <br><br>
     *  For 'Get' calls, this container is returned if the seller of the item has an eBay store.
     *
     * @param \Nogrod\eBaySDK\MerchantData\StorefrontType $storefront
     * @return self
     */
    public function setStorefront(\Nogrod\eBaySDK\MerchantData\StorefrontType $storefront)
    {
        $this->storefront = $storefront;
        return $this;
    }

    /**
     * Gets as subTitle
     *
     * Subtitle to use in addition to the title. Provides more keywords when buyers
     *  search in titles and descriptions. You cannot use HTML in the Subtitle. (HTML
     *  characters will be interpreted literally as plain text.) If you pass any
     *  value, this feature is applied (with applicable fees).<br>
     *  <br>
     *  When you revise a item, you can add, change, or remove the
     *  subtitle.
     *  <br>
     *
     * @return string
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets a new subTitle
     *
     * Subtitle to use in addition to the title. Provides more keywords when buyers
     *  search in titles and descriptions. You cannot use HTML in the Subtitle. (HTML
     *  characters will be interpreted literally as plain text.) If you pass any
     *  value, this feature is applied (with applicable fees).<br>
     *  <br>
     *  When you revise a item, you can add, change, or remove the
     *  subtitle.
     *  <br>
     *
     * @param string $subTitle
     * @return self
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
        return $this;
    }

    /**
     * Gets as timeLeft
     *
     * Time left before the listing ends.
     *  The duration is represented in the ISO 8601 duration format (PnYnMnDTnHnMnS).
     *  See Data Types in the Trading API Guide for information about this format.
     *  For ended listings, the time left is PT0S (zero seconds).
     *
     * @return \DateInterval
     */
    public function getTimeLeft()
    {
        return $this->timeLeft;
    }

    /**
     * Sets a new timeLeft
     *
     * Time left before the listing ends.
     *  The duration is represented in the ISO 8601 duration format (PnYnMnDTnHnMnS).
     *  See Data Types in the Trading API Guide for information about this format.
     *  For ended listings, the time left is PT0S (zero seconds).
     *
     * @param \DateInterval $timeLeft
     * @return self
     */
    public function setTimeLeft(\DateInterval $timeLeft)
    {
        $this->timeLeft = $timeLeft;
        return $this;
    }

    /**
     * Gets as title
     *
     * This field is used to specify the title of the listing. This field is conditionally required in an Add call unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, Item Specifics, and stock photo defined in the catalog product are used to create the listing. <br>
     *  <br>
     *  You cannot use HTML or JavaScript in the Title. (HTML characters will be
     *  interpreted literally as plain text.)<br>
     *  <br>
     *  The listing title can only be changed if the active listing has yet to have any bids or sales, and the listing does not end within 12 hours.
     *  <br>
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * This field is used to specify the title of the listing. This field is conditionally required in an Add call unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, Item Specifics, and stock photo defined in the catalog product are used to create the listing. <br>
     *  <br>
     *  You cannot use HTML or JavaScript in the Title. (HTML characters will be
     *  interpreted literally as plain text.)<br>
     *  <br>
     *  The listing title can only be changed if the active listing has yet to have any bids or sales, and the listing does not end within 12 hours.
     *  <br>
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * Use an <b>UUID</b> value to ensure that you only list (or relist) a particular item once. This field can be particularly useful if you are listing many items on a daily basis and/or many items at once with an <b>AddItems</b> call. If your call request does not generate a response, or if you get one or more (blocking) errors, be sure to use the same <b>UUID</b> value when you attempt to list or relist the same item with another call request.
     *  <br><br>
     *  If you pass in a <b>UUID</b> value that has already been used to successfully create or relist an item, you will receive an error message that includes the Item ID for that listing and a boolean value indicating whether the duplicate <b>UUID</b> was sent by the same application.
     *  <br><br>
     *  We recommend that you use the <b>Item.UUID</b> field for add and relist calls (for example, <b>AddItem</b> and <b>RelistItem</b>), but use the <b>Item.InvocationID</b> field instead when using a revise call.
     *  <br><br>
     *  The <b>UUID</b> can only contain digits from 0-9 and letters from A-F and must be 32 characters long. The <b>UUID</b> value must be unique across all of the seller's eBay across all eBay marketplaces.
     *  <br>
     *
     * @return string
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * Use an <b>UUID</b> value to ensure that you only list (or relist) a particular item once. This field can be particularly useful if you are listing many items on a daily basis and/or many items at once with an <b>AddItems</b> call. If your call request does not generate a response, or if you get one or more (blocking) errors, be sure to use the same <b>UUID</b> value when you attempt to list or relist the same item with another call request.
     *  <br><br>
     *  If you pass in a <b>UUID</b> value that has already been used to successfully create or relist an item, you will receive an error message that includes the Item ID for that listing and a boolean value indicating whether the duplicate <b>UUID</b> was sent by the same application.
     *  <br><br>
     *  We recommend that you use the <b>Item.UUID</b> field for add and relist calls (for example, <b>AddItem</b> and <b>RelistItem</b>), but use the <b>Item.InvocationID</b> field instead when using a revise call.
     *  <br><br>
     *  The <b>UUID</b> can only contain digits from 0-9 and letters from A-F and must be 32 characters long. The <b>UUID</b> value must be unique across all of the seller's eBay across all eBay marketplaces.
     *  <br>
     *
     * @param string $uUID
     * @return self
     */
    public function setUUID($uUID)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as vATDetails
     *
     * This container is used in an Add/Revise/Relist call to set the VAT (Value-added Tax) percentage rate that will be charged to buyers when an item is purchased from the listing, and to enable Business Seller-related features.
     *  <br><br>
     *  This container is returned in 'Get' calls only if VAT is applicable to the listing, and unless the person making the 'Get' call owns the listing, only the <b>VATPercent</b> field is returned (if applicable). However, Business Seller-related information will be returned to all users in 'Get' calls under the <b>SellerInfo</b> and <b>BusinessSellerDetails</b> containers.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  VAT is not applicable to all countries, including the US. Allowed VAT percentage rates can vary by region/country, so sellers should be aware of the rates they are legally required/allowed to charge. Sellers must be registered as Business Sellers on the site they are selling on in order to use the Business Seller-related fields.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\VATDetailsType
     */
    public function getVATDetails()
    {
        return $this->vATDetails;
    }

    /**
     * Sets a new vATDetails
     *
     * This container is used in an Add/Revise/Relist call to set the VAT (Value-added Tax) percentage rate that will be charged to buyers when an item is purchased from the listing, and to enable Business Seller-related features.
     *  <br><br>
     *  This container is returned in 'Get' calls only if VAT is applicable to the listing, and unless the person making the 'Get' call owns the listing, only the <b>VATPercent</b> field is returned (if applicable). However, Business Seller-related information will be returned to all users in 'Get' calls under the <b>SellerInfo</b> and <b>BusinessSellerDetails</b> containers.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  VAT is not applicable to all countries, including the US. Allowed VAT percentage rates can vary by region/country, so sellers should be aware of the rates they are legally required/allowed to charge. Sellers must be registered as Business Sellers on the site they are selling on in order to use the Business Seller-related fields.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\VATDetailsType $vATDetails
     * @return self
     */
    public function setVATDetails(\Nogrod\eBaySDK\MerchantData\VATDetailsType $vATDetails)
    {
        $this->vATDetails = $vATDetails;
        return $this;
    }

    /**
     * Gets as sellerVacationNote
     *
     * This field is returned if the seller of the item is currently on vacation and that seller has turned on the Store vacation setting, and has included a message to display to shoppers who visit the eBay store. If the seller turns on the Store vacation setting, the listing will be hidden from search result pages.
     *  <br/><br/>
     *  Store vacation settings, including this note, are set through the <b>Messages</b> tab in My eBay, or this message can also be set through the <b>SetStorePreferences</b> call.
     *  <br/><br/>
     *  The Store vacation setting is only applicable for sellers with eBay stores.
     *
     * @return string
     */
    public function getSellerVacationNote()
    {
        return $this->sellerVacationNote;
    }

    /**
     * Sets a new sellerVacationNote
     *
     * This field is returned if the seller of the item is currently on vacation and that seller has turned on the Store vacation setting, and has included a message to display to shoppers who visit the eBay store. If the seller turns on the Store vacation setting, the listing will be hidden from search result pages.
     *  <br/><br/>
     *  Store vacation settings, including this note, are set through the <b>Messages</b> tab in My eBay, or this message can also be set through the <b>SetStorePreferences</b> call.
     *  <br/><br/>
     *  The Store vacation setting is only applicable for sellers with eBay stores.
     *
     * @param string $sellerVacationNote
     * @return self
     */
    public function setSellerVacationNote($sellerVacationNote)
    {
        $this->sellerVacationNote = $sellerVacationNote;
        return $this;
    }

    /**
     * Gets as watchCount
     *
     * The number of watches placed on this item from buyers' My eBay accounts.
     *  Specify <b>IncludeWatchCount</b> as <code>true</code> in the request.
     *  Returned by <b>GetMyeBaySelling</b> only if greater than 0.
     *
     * @return int
     */
    public function getWatchCount()
    {
        return $this->watchCount;
    }

    /**
     * Sets a new watchCount
     *
     * The number of watches placed on this item from buyers' My eBay accounts.
     *  Specify <b>IncludeWatchCount</b> as <code>true</code> in the request.
     *  Returned by <b>GetMyeBaySelling</b> only if greater than 0.
     *
     * @param int $watchCount
     * @return self
     */
    public function setWatchCount($watchCount)
    {
        $this->watchCount = $watchCount;
        return $this;
    }

    /**
     * Gets as hitCount
     *
     * This value indicates the number of page views for the listing. This number is calculated by eBay and is returned in 'Get' calls if the <b>HitCounter</b> value is set to <code>BasicStyle</code>,
     *  <code>RetroStyle</code>, or <code>HiddenStyle</code>.
     *
     * @return int
     */
    public function getHitCount()
    {
        return $this->hitCount;
    }

    /**
     * Sets a new hitCount
     *
     * This value indicates the number of page views for the listing. This number is calculated by eBay and is returned in 'Get' calls if the <b>HitCounter</b> value is set to <code>BasicStyle</code>,
     *  <code>RetroStyle</code>, or <code>HiddenStyle</code>.
     *
     * @param int $hitCount
     * @return self
     */
    public function setHitCount($hitCount)
    {
        $this->hitCount = $hitCount;
        return $this;
    }

    /**
     * Gets as disableBuyerRequirements
     *
     * If <code>true</code>, all buyer requirements (from <b>Item.BuyerRequirementDetails</b>
     *  or Buyer requirements preferences in My eBay) are ignored.
     *  <br>
     *  <br>
     *  If <code>false</code> (or omitted): <b>Item.BuyerRequirementDetails</b> or Buyer
     *  requirements preferences are used, with <b>Item.BuyerRequirementDetails</b>
     *  having the higher precedence.
     *  <br>
     *
     * @return bool
     */
    public function getDisableBuyerRequirements()
    {
        return $this->disableBuyerRequirements;
    }

    /**
     * Sets a new disableBuyerRequirements
     *
     * If <code>true</code>, all buyer requirements (from <b>Item.BuyerRequirementDetails</b>
     *  or Buyer requirements preferences in My eBay) are ignored.
     *  <br>
     *  <br>
     *  If <code>false</code> (or omitted): <b>Item.BuyerRequirementDetails</b> or Buyer
     *  requirements preferences are used, with <b>Item.BuyerRequirementDetails</b>
     *  having the higher precedence.
     *  <br>
     *
     * @param bool $disableBuyerRequirements
     * @return self
     */
    public function setDisableBuyerRequirements($disableBuyerRequirements)
    {
        $this->disableBuyerRequirements = $disableBuyerRequirements;
        return $this;
    }

    /**
     * Gets as bestOfferDetails
     *
     * <b>For Add/Revise/Relist/Verify calls</b>: This container is used to enable the Best Offer feature on a listing. Note that the Best Offer feature can be set for auction listings on the US, Canada, UK, Germany, Australia, France, Italy, and Spain marketplaces, but a seller can only use Best Offer or Buy It Now, but not both. Once an auction listing receives a qualifying bid, the Best Offer feature will be turned off and any pending Best Offers or Counteroffers will no longer be valid.
     *  <br><br>
     *  For <b>GetItem</b> and other calls that retrieve item data, this container will include the status (<b>GetMyeBayBuying</b> only) and dollar amount of the latest Best Offer on a fixed-price listing, and the number of Best Offers received for the fixed-price listing.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BestOfferDetailsType
     */
    public function getBestOfferDetails()
    {
        return $this->bestOfferDetails;
    }

    /**
     * Sets a new bestOfferDetails
     *
     * <b>For Add/Revise/Relist/Verify calls</b>: This container is used to enable the Best Offer feature on a listing. Note that the Best Offer feature can be set for auction listings on the US, Canada, UK, Germany, Australia, France, Italy, and Spain marketplaces, but a seller can only use Best Offer or Buy It Now, but not both. Once an auction listing receives a qualifying bid, the Best Offer feature will be turned off and any pending Best Offers or Counteroffers will no longer be valid.
     *  <br><br>
     *  For <b>GetItem</b> and other calls that retrieve item data, this container will include the status (<b>GetMyeBayBuying</b> only) and dollar amount of the latest Best Offer on a fixed-price listing, and the number of Best Offers received for the fixed-price listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BestOfferDetailsType $bestOfferDetails
     * @return self
     */
    public function setBestOfferDetails(\Nogrod\eBaySDK\MerchantData\BestOfferDetailsType $bestOfferDetails)
    {
        $this->bestOfferDetails = $bestOfferDetails;
        return $this;
    }

    /**
     * Gets as locationDefaulted
     *
     * If <code>true</code>, eBay provided a central location as a result of the user
     *  not specifying a location. This typically occurs when the seller
     *  specifies <b>PostalCode</b> without Location.
     *
     * @return bool
     */
    public function getLocationDefaulted()
    {
        return $this->locationDefaulted;
    }

    /**
     * Sets a new locationDefaulted
     *
     * If <code>true</code>, eBay provided a central location as a result of the user
     *  not specifying a location. This typically occurs when the seller
     *  specifies <b>PostalCode</b> without Location.
     *
     * @param bool $locationDefaulted
     * @return self
     */
    public function setLocationDefaulted($locationDefaulted)
    {
        $this->locationDefaulted = $locationDefaulted;
        return $this;
    }

    /**
     * Gets as useTaxTable
     *
     * Indicates whether the seller's tax table is to be used when applying and
     *  calculating sales tax for an order line item. A sales tax table can be
     *  created programmatically using the <b>SetTaxTable</b> call, or it can be created
     *  manually in My eBay's Payment Preferences. If <b>UseTaxTable</b> is set to <code>true</code>,
     *  the values contained in the seller's sales tax table will supersede the values contained in the <b>Item.ShippingDetails.SalesTax</b> container (if included in the request).
     *
     * @return bool
     */
    public function getUseTaxTable()
    {
        return $this->useTaxTable;
    }

    /**
     * Sets a new useTaxTable
     *
     * Indicates whether the seller's tax table is to be used when applying and
     *  calculating sales tax for an order line item. A sales tax table can be
     *  created programmatically using the <b>SetTaxTable</b> call, or it can be created
     *  manually in My eBay's Payment Preferences. If <b>UseTaxTable</b> is set to <code>true</code>,
     *  the values contained in the seller's sales tax table will supersede the values contained in the <b>Item.ShippingDetails.SalesTax</b> container (if included in the request).
     *
     * @param bool $useTaxTable
     * @return self
     */
    public function setUseTaxTable($useTaxTable)
    {
        $this->useTaxTable = $useTaxTable;
        return $this;
    }

    /**
     * Gets as getItFast
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getGetItFast()
    {
        return $this->getItFast;
    }

    /**
     * Sets a new getItFast
     *
     * This field is deprecated.
     *
     * @param bool $getItFast
     * @return self
     */
    public function setGetItFast($getItFast)
    {
        $this->getItFast = $getItFast;
        return $this;
    }

    /**
     * Gets as buyerResponsibleForShipping
     *
     * Applicable for listings in vehicle categories on the US eBay Motors site and
     *  eBay Canada site. (No business effect if specified for other categories or
     *  sites, as the Web site will not display the information to buyers.)
     *  <b></b>
     *  <ul>
     *  <li>If <code>true</code>,
     *  the buyer is responsible for vehicle pickup or shipping. </li>
     *  <li>If <code>false</code>, specify
     *  vehicle shipping arrangements in the item description. (The
     *  description can also include vehicle shipping arrangements when this value is
     *  <code>true</code>.) </li>
     *  </ul>
     *  <b></b>
     *  If the item has bids or ends within 12 hours, you cannot modify this
     *  flag. Do not specify <b>ShippingDetails.ShippingServiceOptions</b>
     *  for vehicle listings.
     *  <br><br>
     *  If <code>true</code> and the listing is on the US eBay Motors site, and you want the
     *  listing to be visible on the eBay Canada site, set <b>Item.ShipToLocations</b> to CA.
     *  <br><br>
     *  If <code>true</code> and the listing is on the eBay Canada site, and you want your listing
     *  to be visible on the US eBay Motors site, set <b>Item.ShipToLocations</b> to US.
     *  <br>
     *
     * @return bool
     */
    public function getBuyerResponsibleForShipping()
    {
        return $this->buyerResponsibleForShipping;
    }

    /**
     * Sets a new buyerResponsibleForShipping
     *
     * Applicable for listings in vehicle categories on the US eBay Motors site and
     *  eBay Canada site. (No business effect if specified for other categories or
     *  sites, as the Web site will not display the information to buyers.)
     *  <b></b>
     *  <ul>
     *  <li>If <code>true</code>,
     *  the buyer is responsible for vehicle pickup or shipping. </li>
     *  <li>If <code>false</code>, specify
     *  vehicle shipping arrangements in the item description. (The
     *  description can also include vehicle shipping arrangements when this value is
     *  <code>true</code>.) </li>
     *  </ul>
     *  <b></b>
     *  If the item has bids or ends within 12 hours, you cannot modify this
     *  flag. Do not specify <b>ShippingDetails.ShippingServiceOptions</b>
     *  for vehicle listings.
     *  <br><br>
     *  If <code>true</code> and the listing is on the US eBay Motors site, and you want the
     *  listing to be visible on the eBay Canada site, set <b>Item.ShipToLocations</b> to CA.
     *  <br><br>
     *  If <code>true</code> and the listing is on the eBay Canada site, and you want your listing
     *  to be visible on the US eBay Motors site, set <b>Item.ShipToLocations</b> to US.
     *  <br>
     *
     * @param bool $buyerResponsibleForShipping
     * @return self
     */
    public function setBuyerResponsibleForShipping($buyerResponsibleForShipping)
    {
        $this->buyerResponsibleForShipping = $buyerResponsibleForShipping;
        return $this;
    }

    /**
     * Gets as limitedWarrantyEligible
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getLimitedWarrantyEligible()
    {
        return $this->limitedWarrantyEligible;
    }

    /**
     * Sets a new limitedWarrantyEligible
     *
     * This field is deprecated.
     *
     * @param bool $limitedWarrantyEligible
     * @return self
     */
    public function setLimitedWarrantyEligible($limitedWarrantyEligible)
    {
        $this->limitedWarrantyEligible = $limitedWarrantyEligible;
        return $this;
    }

    /**
     * Gets as eBayNotes
     *
     * Returns a note from eBay displayed below items in the user's My
     *  eBay account.
     *
     * @return string
     */
    public function getEBayNotes()
    {
        return $this->eBayNotes;
    }

    /**
     * Sets a new eBayNotes
     *
     * Returns a note from eBay displayed below items in the user's My
     *  eBay account.
     *
     * @param string $eBayNotes
     * @return self
     */
    public function setEBayNotes($eBayNotes)
    {
        $this->eBayNotes = $eBayNotes;
        return $this;
    }

    /**
     * Gets as questionCount
     *
     * Specifies the number of questions buyers have posted about the
     *  item. Returned only if greater than 0.
     *
     * @return int
     */
    public function getQuestionCount()
    {
        return $this->questionCount;
    }

    /**
     * Sets a new questionCount
     *
     * Specifies the number of questions buyers have posted about the
     *  item. Returned only if greater than 0.
     *
     * @param int $questionCount
     * @return self
     */
    public function setQuestionCount($questionCount)
    {
        $this->questionCount = $questionCount;
        return $this;
    }

    /**
     * Gets as relisted
     *
     * This boolean field is returned as <code>true</code> if the item in this listing was relisted. When an item is relisted, a brand new Item ID value is automatically created by eBay. This field is only returned for an original listing whose item has been relisted, so a <code>false</code> value should never get returned.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  A new listing will not return this field.
     *  </span>
     *
     * @return bool
     */
    public function getRelisted()
    {
        return $this->relisted;
    }

    /**
     * Sets a new relisted
     *
     * This boolean field is returned as <code>true</code> if the item in this listing was relisted. When an item is relisted, a brand new Item ID value is automatically created by eBay. This field is only returned for an original listing whose item has been relisted, so a <code>false</code> value should never get returned.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  A new listing will not return this field.
     *  </span>
     *
     * @param bool $relisted
     * @return self
     */
    public function setRelisted($relisted)
    {
        $this->relisted = $relisted;
        return $this;
    }

    /**
     * Gets as quantityAvailable
     *
     * This integer value indicates the quantity of an item that is still available for purchase in a multiple-quantity, fixed-price listing. This field is not applicable to auction listings.
     *
     * @return int
     */
    public function getQuantityAvailable()
    {
        return $this->quantityAvailable;
    }

    /**
     * Sets a new quantityAvailable
     *
     * This integer value indicates the quantity of an item that is still available for purchase in a multiple-quantity, fixed-price listing. This field is not applicable to auction listings.
     *
     * @param int $quantityAvailable
     * @return self
     */
    public function setQuantityAvailable($quantityAvailable)
    {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * Gets as sKU
     *
     * A SKU (Stock Keeping Unit) value is a seller-defined identifier for a product. Each product within a seller's inventory should be unique. Most large-volume sellers use SKUs, but eBay only requires a SKU value if the <b>InventoryTrackingMethod</b> field is included in an <b>AddFixedPriceItem</b> call and its value is set to <code>SKU</code>. Setting the <b>InventoryTrackingMethod</b> field to <code>SKU</code> allows the seller to use a SKU value instead of an <b>ItemID</b> value as a unique identifier
     *  in calls such as <b>GetItem</b> and <b>ReviseInventoryStatus</b>
     *  <br><br>
     *  A seller can specify a SKU when listing an item with <b>AddItem</b>
     *  and related calls. eBay preserves the SKU on the item, enabling you
     *  to obtain it before and after an order line item is created.
     *  (<b>SKU</b> is recommended as an alternative to <b>ApplicationData</b>.)
     *  <br>
     *  <br>
     *  If both <b>ItemID</b> and <b>SKU</b> are specified in calls that support the use of
     *  SKU as a unique identifier, the <b>ItemID</b> value takes precedence.<br>
     *  <br>
     *  If a seller wants to use SKUs for multiple-variation listings, the SKU value for each product variation is actually specified at the variation level (Item.Variations.Variation.<b>SKU</b>) field, and the Item.<b>SKU</b>) field should not be included in the call request.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  The eBay site cannot identify listings by SKU. For example,
     *  My eBay pages and Search pages all identify listings by item ID.
     *  When a buyer contacts you via eBay's messaging functionality, eBay
     *  uses the item ID as the identifier. Buyer-focused APIs (like the
     *  Shopping API) also do not support SKU as an identifier.
     *  </span>
     *  <b>For revising and relisting only:</b>
     *  To remove a SKU when you revise or relist an item, use <b>DeletedField</b>.
     *  (You cannot remove a SKU when <b>Item.InventoryTrackingMethod</b> is set
     *  to SKU.)<br>
     *  <br>
     *  For <b>GetItem</b>, <b>GetMyeBaySelling</b>, and other 'Get' call, the <b>SKU</b> value will only be returned if defined for the listing.
     *  <br>
     *
     * @return string
     */
    public function getSKU()
    {
        return $this->sKU;
    }

    /**
     * Sets a new sKU
     *
     * A SKU (Stock Keeping Unit) value is a seller-defined identifier for a product. Each product within a seller's inventory should be unique. Most large-volume sellers use SKUs, but eBay only requires a SKU value if the <b>InventoryTrackingMethod</b> field is included in an <b>AddFixedPriceItem</b> call and its value is set to <code>SKU</code>. Setting the <b>InventoryTrackingMethod</b> field to <code>SKU</code> allows the seller to use a SKU value instead of an <b>ItemID</b> value as a unique identifier
     *  in calls such as <b>GetItem</b> and <b>ReviseInventoryStatus</b>
     *  <br><br>
     *  A seller can specify a SKU when listing an item with <b>AddItem</b>
     *  and related calls. eBay preserves the SKU on the item, enabling you
     *  to obtain it before and after an order line item is created.
     *  (<b>SKU</b> is recommended as an alternative to <b>ApplicationData</b>.)
     *  <br>
     *  <br>
     *  If both <b>ItemID</b> and <b>SKU</b> are specified in calls that support the use of
     *  SKU as a unique identifier, the <b>ItemID</b> value takes precedence.<br>
     *  <br>
     *  If a seller wants to use SKUs for multiple-variation listings, the SKU value for each product variation is actually specified at the variation level (Item.Variations.Variation.<b>SKU</b>) field, and the Item.<b>SKU</b>) field should not be included in the call request.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  The eBay site cannot identify listings by SKU. For example,
     *  My eBay pages and Search pages all identify listings by item ID.
     *  When a buyer contacts you via eBay's messaging functionality, eBay
     *  uses the item ID as the identifier. Buyer-focused APIs (like the
     *  Shopping API) also do not support SKU as an identifier.
     *  </span>
     *  <b>For revising and relisting only:</b>
     *  To remove a SKU when you revise or relist an item, use <b>DeletedField</b>.
     *  (You cannot remove a SKU when <b>Item.InventoryTrackingMethod</b> is set
     *  to SKU.)<br>
     *  <br>
     *  For <b>GetItem</b>, <b>GetMyeBaySelling</b>, and other 'Get' call, the <b>SKU</b> value will only be returned if defined for the listing.
     *  <br>
     *
     * @param string $sKU
     * @return self
     */
    public function setSKU($sKU)
    {
        $this->sKU = $sKU;
        return $this;
    }

    /**
     * Gets as searchDetails
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SearchDetailsType
     */
    public function getSearchDetails()
    {
        return $this->searchDetails;
    }

    /**
     * Sets a new searchDetails
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SearchDetailsType $searchDetails
     * @return self
     */
    public function setSearchDetails(\Nogrod\eBaySDK\MerchantData\SearchDetailsType $searchDetails)
    {
        $this->searchDetails = $searchDetails;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * Postal code of the place where the item is located. This value is used for
     *  proximity searches. To remove this value when revising or relisting an item,
     *  use <b>DeletedField</b>. If you do not specify <b>PostalCode</b>, you must specify
     *  <b>Item.Location</b>. If you specify <b>PostalCode</b>, but do not specify <b>Item.Location</b>,
     *  then <b>Item.Location</b> is given a default value derived from the postal code.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Beginning in late January 2020, the displayed postal code returned in <b>GetItem</b> will be masked to all users except for the seller of the item. Different countries will mask postal/zip codes in slightly different ways, but an example would be <code>951**</code>.
     *  </span>
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * Postal code of the place where the item is located. This value is used for
     *  proximity searches. To remove this value when revising or relisting an item,
     *  use <b>DeletedField</b>. If you do not specify <b>PostalCode</b>, you must specify
     *  <b>Item.Location</b>. If you specify <b>PostalCode</b>, but do not specify <b>Item.Location</b>,
     *  then <b>Item.Location</b> is given a default value derived from the postal code.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Beginning in late January 2020, the displayed postal code returned in <b>GetItem</b> will be masked to all users except for the seller of the item. Different countries will mask postal/zip codes in slightly different ways, but an example would be <code>951**</code>.
     *  </span>
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as pictureDetails
     *
     * This container consists of the data associated with photos within the listing. With most eBay sites and categories, a seller can add up to 12 photos to their listings free of charge. These photos can be hosted by eBay Picture Services (EPS), or the seller can host pictures on a non-eBay server. If pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol.
     *  <br/><br/>
     *  It is required that all listings have at least one picture. eBay Motors listings can have up to 24 pictures.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PictureDetailsType
     */
    public function getPictureDetails()
    {
        return $this->pictureDetails;
    }

    /**
     * Sets a new pictureDetails
     *
     * This container consists of the data associated with photos within the listing. With most eBay sites and categories, a seller can add up to 12 photos to their listings free of charge. These photos can be hosted by eBay Picture Services (EPS), or the seller can host pictures on a non-eBay server. If pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol.
     *  <br/><br/>
     *  It is required that all listings have at least one picture. eBay Motors listings can have up to 24 pictures.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PictureDetailsType $pictureDetails
     * @return self
     */
    public function setPictureDetails(\Nogrod\eBaySDK\MerchantData\PictureDetailsType $pictureDetails)
    {
        $this->pictureDetails = $pictureDetails;
        return $this;
    }

    /**
     * Gets as dispatchTimeMax
     *
     * Specifies the maximum number of business days the seller
     *  commits to for preparing an item to be shipped after receiving a
     *  cleared payment. This time does not include the shipping time (the carrier's transit time).
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller opts into the eBay Guaranteed Delivery feature and wants to make a listing eligible for eBay Guaranteed Delivery, the <b>DispatchTimeMax</b> value must be set to <code>0</code> or <code>1</code> (days) and the cumulative value of <b>DispatchTimeMax</b> plus the transit time of the shipping service (returned in <b>ShippingServiceDetails.ShippingTimeMax</b> field of <b>GeteBayDetails</b>) must be 4 business days or less to be eligible for this feature. See the <a href="https://pages.ebay.com/seller-center/shipping/ebay-guaranteed-delivery.html" target="_blank">eBay Guaranteed Delivery</a> page in Seller Center for more information on this program.
     *  </span>
     *  <br>
     *  <b>For Add/Revise/Relist calls:</b> Required for
     *  listings in certain categories when certain shipping services
     *  (with delivery) are offered. See <b>HandlingTimeEnabled</b> in
     *  <b>GetCategoryFeatures</b>.<br>
     *  <br>
     *  The seller sets this to a positive integer value corresponding to the number of days. For a list of allowed values
     *  on each eBay site, use <b>DispatchTimeMaxDetails</b> in <b>GeteBayDetails</b>.
     *  (Typical values are <code>1</code>, <code>2</code>, <code>3</code>, <code>4</code>, <code>5</code>, <code>10</code>, <code>15</code>, or <code>20</code>, but this can vary
     *  by site and these may change over time.)<br>
     *  <br>
     *  Valid for flat and calculated shipping. Does not apply when
     *  there is no shipping, when it is local pickup only or it is freight shipping. For example, when <b>ShippingService</b> = <code>Pickup</code> or
     *  <b>ShipToLocations</b> = <code>None</code>, then <b>DispatchTimeMax</b> is not required (or it can be <code>0</code>).<br>
     *  <br>
     *  <b>For ReviseItem only:</b>
     *  If the listing has bids or sales and it ends within 12 hours, you can't change this value.
     *  If the listing is a GTC listing that has sales or ends within 12 hours
     *  (one or the other, but not both), you can add or change this value.
     *  If the listing has no bids or sales and more than 12 hours remain before
     *  the listing ends, you can add or change the dispatch (handling) time.<br>
     *  <br>
     *  <b>For GetItem:</b> <b>GetItem</b> returns <b>DispatchTimeMax</b>
     *  only when shipping service options are specified for the item and
     *  the seller specified a dispatch time.
     *
     * @return int
     */
    public function getDispatchTimeMax()
    {
        return $this->dispatchTimeMax;
    }

    /**
     * Sets a new dispatchTimeMax
     *
     * Specifies the maximum number of business days the seller
     *  commits to for preparing an item to be shipped after receiving a
     *  cleared payment. This time does not include the shipping time (the carrier's transit time).
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller opts into the eBay Guaranteed Delivery feature and wants to make a listing eligible for eBay Guaranteed Delivery, the <b>DispatchTimeMax</b> value must be set to <code>0</code> or <code>1</code> (days) and the cumulative value of <b>DispatchTimeMax</b> plus the transit time of the shipping service (returned in <b>ShippingServiceDetails.ShippingTimeMax</b> field of <b>GeteBayDetails</b>) must be 4 business days or less to be eligible for this feature. See the <a href="https://pages.ebay.com/seller-center/shipping/ebay-guaranteed-delivery.html" target="_blank">eBay Guaranteed Delivery</a> page in Seller Center for more information on this program.
     *  </span>
     *  <br>
     *  <b>For Add/Revise/Relist calls:</b> Required for
     *  listings in certain categories when certain shipping services
     *  (with delivery) are offered. See <b>HandlingTimeEnabled</b> in
     *  <b>GetCategoryFeatures</b>.<br>
     *  <br>
     *  The seller sets this to a positive integer value corresponding to the number of days. For a list of allowed values
     *  on each eBay site, use <b>DispatchTimeMaxDetails</b> in <b>GeteBayDetails</b>.
     *  (Typical values are <code>1</code>, <code>2</code>, <code>3</code>, <code>4</code>, <code>5</code>, <code>10</code>, <code>15</code>, or <code>20</code>, but this can vary
     *  by site and these may change over time.)<br>
     *  <br>
     *  Valid for flat and calculated shipping. Does not apply when
     *  there is no shipping, when it is local pickup only or it is freight shipping. For example, when <b>ShippingService</b> = <code>Pickup</code> or
     *  <b>ShipToLocations</b> = <code>None</code>, then <b>DispatchTimeMax</b> is not required (or it can be <code>0</code>).<br>
     *  <br>
     *  <b>For ReviseItem only:</b>
     *  If the listing has bids or sales and it ends within 12 hours, you can't change this value.
     *  If the listing is a GTC listing that has sales or ends within 12 hours
     *  (one or the other, but not both), you can add or change this value.
     *  If the listing has no bids or sales and more than 12 hours remain before
     *  the listing ends, you can add or change the dispatch (handling) time.<br>
     *  <br>
     *  <b>For GetItem:</b> <b>GetItem</b> returns <b>DispatchTimeMax</b>
     *  only when shipping service options are specified for the item and
     *  the seller specified a dispatch time.
     *
     * @param int $dispatchTimeMax
     * @return self
     */
    public function setDispatchTimeMax($dispatchTimeMax)
    {
        $this->dispatchTimeMax = $dispatchTimeMax;
        return $this;
    }

    /**
     * Gets as bestOfferEnabled
     *
     * This field is deprecated. This information is returned in <b>BestOfferDetails</b>.
     *
     * @return bool
     */
    public function getBestOfferEnabled()
    {
        return $this->bestOfferEnabled;
    }

    /**
     * Sets a new bestOfferEnabled
     *
     * This field is deprecated. This information is returned in <b>BestOfferDetails</b>.
     *
     * @param bool $bestOfferEnabled
     * @return self
     */
    public function setBestOfferEnabled($bestOfferEnabled)
    {
        $this->bestOfferEnabled = $bestOfferEnabled;
        return $this;
    }

    /**
     * Gets as localListing
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getLocalListing()
    {
        return $this->localListing;
    }

    /**
     * Sets a new localListing
     *
     * This field is deprecated.
     *
     * @param bool $localListing
     * @return self
     */
    public function setLocalListing($localListing)
    {
        $this->localListing = $localListing;
        return $this;
    }

    /**
     * Gets as sellerContactDetails
     *
     * This container is used by sellers of Classified Ad listings to provide contact information.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AddressType
     */
    public function getSellerContactDetails()
    {
        return $this->sellerContactDetails;
    }

    /**
     * Sets a new sellerContactDetails
     *
     * This container is used by sellers of Classified Ad listings to provide contact information.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AddressType $sellerContactDetails
     * @return self
     */
    public function setSellerContactDetails(\Nogrod\eBaySDK\MerchantData\AddressType $sellerContactDetails)
    {
        $this->sellerContactDetails = $sellerContactDetails;
        return $this;
    }

    /**
     * Gets as totalQuestionCount
     *
     * The number of questions asked about this item. Applies to eBay Motors Pro
     *  applications only.
     *
     * @return int
     */
    public function getTotalQuestionCount()
    {
        return $this->totalQuestionCount;
    }

    /**
     * Sets a new totalQuestionCount
     *
     * The number of questions asked about this item. Applies to eBay Motors Pro
     *  applications only.
     *
     * @param int $totalQuestionCount
     * @return self
     */
    public function setTotalQuestionCount($totalQuestionCount)
    {
        $this->totalQuestionCount = $totalQuestionCount;
        return $this;
    }

    /**
     * Gets as proxyItem
     *
     * Some listings on the eBay platform originate from eBay affiliates.
     *  Depending on the relationship the affiliate has with eBay, there are times
     *  when the affiliate retains ownership of the listing. When this occurs
     *  the representation of the listing on eBay is considered a proxy item. Proxy
     *  items can only be edited using API requests from the applications that
     *  originally listed them.
     *
     * @return bool
     */
    public function getProxyItem()
    {
        return $this->proxyItem;
    }

    /**
     * Sets a new proxyItem
     *
     * Some listings on the eBay platform originate from eBay affiliates.
     *  Depending on the relationship the affiliate has with eBay, there are times
     *  when the affiliate retains ownership of the listing. When this occurs
     *  the representation of the listing on eBay is considered a proxy item. Proxy
     *  items can only be edited using API requests from the applications that
     *  originally listed them.
     *
     * @param bool $proxyItem
     * @return self
     */
    public function setProxyItem($proxyItem)
    {
        $this->proxyItem = $proxyItem;
        return $this;
    }

    /**
     * Gets as extendedSellerContactDetails
     *
     * Extended contact information for sellers using the Classified Ad format.
     *  Specifies the days and hours when the seller can be contacted.
     *  To remove seller contact information when revising or relisting an item, use
     *  <b>DeletedField</b>.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ExtendedContactDetailsType
     */
    public function getExtendedSellerContactDetails()
    {
        return $this->extendedSellerContactDetails;
    }

    /**
     * Sets a new extendedSellerContactDetails
     *
     * Extended contact information for sellers using the Classified Ad format.
     *  Specifies the days and hours when the seller can be contacted.
     *  To remove seller contact information when revising or relisting an item, use
     *  <b>DeletedField</b>.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ExtendedContactDetailsType $extendedSellerContactDetails
     * @return self
     */
    public function setExtendedSellerContactDetails(\Nogrod\eBaySDK\MerchantData\ExtendedContactDetailsType $extendedSellerContactDetails)
    {
        $this->extendedSellerContactDetails = $extendedSellerContactDetails;
        return $this;
    }

    /**
     * Gets as leadCount
     *
     * Specifies the number of leads (emails) buyers have posted about the item.
     *  You must be the seller of the item to retrieve the lead count.
     *
     * @return int
     */
    public function getLeadCount()
    {
        return $this->leadCount;
    }

    /**
     * Sets a new leadCount
     *
     * Specifies the number of leads (emails) buyers have posted about the item.
     *  You must be the seller of the item to retrieve the lead count.
     *
     * @param int $leadCount
     * @return self
     */
    public function setLeadCount($leadCount)
    {
        $this->leadCount = $leadCount;
        return $this;
    }

    /**
     * Gets as newLeadCount
     *
     * Specifies the number of new leads (unanswered emails) buyers have posted
     *  about the item.
     *
     * @return int
     */
    public function getNewLeadCount()
    {
        return $this->newLeadCount;
    }

    /**
     * Sets a new newLeadCount
     *
     * Specifies the number of new leads (unanswered emails) buyers have posted
     *  about the item.
     *
     * @param int $newLeadCount
     * @return self
     */
    public function setNewLeadCount($newLeadCount)
    {
        $this->newLeadCount = $newLeadCount;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * This container is a list of Item Specific <b>Name</b>/<b>Value</b> pairs used by the seller to provide desciptive details of an item in a structured manner.
     *  <br><br>
     *  If creating, revising, or relisting an item with an <b>Add</b>, <b>Revise</b>, or <b>Relist</b> call, it is recommended that you use the <b>GetCategorySpecifics</b> call to retrieve mandatory and recommended Item Specifics for a listing category.
     *  <br><br>
     *  <b>For ReviseItem only:</b> When you revise a listing, if an auction listing has one or more bids and ends within 12 hours, you cannot change or add Item Ppecifics. If the auction listing has bids but ends in more than 12 hours, you cannot change existing Item Specifics, but you can add Item Specifics that were not previously included.
     *  <br><br>
     *  If your listing is in a eBay product catalog-enabled category, certain <b>Name</b>/<b>Value</b> pairs will be accepted as product identifying information. The <b>Name</b> can be <code>Brand</code>, <code>MPN</code>, or a Global Trade Item Number (GTIN). GTINs are a set of globally recognized identifiers, including <code>EAN</code>, <code>ISBN</code>, and <code>UPC</code>. However, the <b>Values</b> provided for these <b>Name</b>s must comply with eBay's constraints or they will not be recognized as product identifiers. The <b>Value</b> for Brand must be an actual brand name (except that if the item is not branded, <b>Value</b> can be <code>Unbranded</code>.) The <b>Value</b> for Brand or MPN cannot contain only special characters (e.g. <code>%$*#@</code>). All GTINs must comply with international formatting standards. For more details, see <a href="https://developer.ebay.com/devzone/guides/features-guide/default.html#development/ItemSpecifics-Listing.html" target="_blank">Listing with Item Specifics</a>.
     *  <br><br>
     *  If the <b>ProductListingDetails</b> container in an Add/Revise/Relist call is successfully used to find and use an eBay catalog product to create/revise listing, the seller should not remove or change the value of any Item Specific name or value that is defined as part of the eBay catalog product definition.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If a listing is associated with an eBay catalog product, the seller does not need to pass in any Item Specifics that are already defined in the eBay catalog product. Sellers can make a <b>GetCategorySpecifics</b> call to see if the listing category supports any 'instance aspects', which can be thought of as Item Specifics that are unique to the specific item that is being listed. Instance aspects are identified in the <b>GetCategorySpecifics</b> response by looking for a value of <code>Instance</code> in one or more <b>NameRecommendation.ValidationRules.aspectUsage</b> fields. Many categories support the following instance aspects: <em>Custom Bundle</em>, <em>Bundle Description</em>, <em>Modified Item</em>, <em>Modification Description</em>, and <em>California Prop 65 Warning</em>. These instance aspects allow the seller to provide more information about product bundles or modified products in a structured way. Depending on the category, there are other instance aspects as well. For more information about creating bundle listings or modified product listings, see the <a href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse-special-listings.html" target="_blank">Associating catalog products to special listings</a> topic.
     *  </span>
     *  <span class="tablenote"><b>Note:</b> To specify an item's condition, use the <b>ConditionID</b> field instead of a condition Item Specific. Use <b>GetCategoryFeatures</b> to see which categories support <b>ConditionID</b> and to get a list of valid condition IDs. (If you specify <b>ConditionID</b> and you also specify <b>Condition</b> as a Item Specific, eBay drops the condition Item Specific.)
     *  </span>
     *  <b>For GetItem</b>: This list is returned only when you specify <b>IncludeItemSpecifics</b> in the request (and the seller included Item Specifics in their listing).
     *  <br><br>
     *  To delete all Item Specifics when you revise or relist, specify <b>Item.ItemSpecifics</b> in <b>DeletedField</b>, and don't pass <b>ItemSpecifics</b> in the request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\NameValueListType $nameValueList
     */
    public function addToItemSpecifics(\Nogrod\eBaySDK\MerchantData\NameValueListType $nameValueList)
    {
        $this->itemSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset itemSpecifics
     *
     * This container is a list of Item Specific <b>Name</b>/<b>Value</b> pairs used by the seller to provide desciptive details of an item in a structured manner.
     *  <br><br>
     *  If creating, revising, or relisting an item with an <b>Add</b>, <b>Revise</b>, or <b>Relist</b> call, it is recommended that you use the <b>GetCategorySpecifics</b> call to retrieve mandatory and recommended Item Specifics for a listing category.
     *  <br><br>
     *  <b>For ReviseItem only:</b> When you revise a listing, if an auction listing has one or more bids and ends within 12 hours, you cannot change or add Item Ppecifics. If the auction listing has bids but ends in more than 12 hours, you cannot change existing Item Specifics, but you can add Item Specifics that were not previously included.
     *  <br><br>
     *  If your listing is in a eBay product catalog-enabled category, certain <b>Name</b>/<b>Value</b> pairs will be accepted as product identifying information. The <b>Name</b> can be <code>Brand</code>, <code>MPN</code>, or a Global Trade Item Number (GTIN). GTINs are a set of globally recognized identifiers, including <code>EAN</code>, <code>ISBN</code>, and <code>UPC</code>. However, the <b>Values</b> provided for these <b>Name</b>s must comply with eBay's constraints or they will not be recognized as product identifiers. The <b>Value</b> for Brand must be an actual brand name (except that if the item is not branded, <b>Value</b> can be <code>Unbranded</code>.) The <b>Value</b> for Brand or MPN cannot contain only special characters (e.g. <code>%$*#@</code>). All GTINs must comply with international formatting standards. For more details, see <a href="https://developer.ebay.com/devzone/guides/features-guide/default.html#development/ItemSpecifics-Listing.html" target="_blank">Listing with Item Specifics</a>.
     *  <br><br>
     *  If the <b>ProductListingDetails</b> container in an Add/Revise/Relist call is successfully used to find and use an eBay catalog product to create/revise listing, the seller should not remove or change the value of any Item Specific name or value that is defined as part of the eBay catalog product definition.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If a listing is associated with an eBay catalog product, the seller does not need to pass in any Item Specifics that are already defined in the eBay catalog product. Sellers can make a <b>GetCategorySpecifics</b> call to see if the listing category supports any 'instance aspects', which can be thought of as Item Specifics that are unique to the specific item that is being listed. Instance aspects are identified in the <b>GetCategorySpecifics</b> response by looking for a value of <code>Instance</code> in one or more <b>NameRecommendation.ValidationRules.aspectUsage</b> fields. Many categories support the following instance aspects: <em>Custom Bundle</em>, <em>Bundle Description</em>, <em>Modified Item</em>, <em>Modification Description</em>, and <em>California Prop 65 Warning</em>. These instance aspects allow the seller to provide more information about product bundles or modified products in a structured way. Depending on the category, there are other instance aspects as well. For more information about creating bundle listings or modified product listings, see the <a href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse-special-listings.html" target="_blank">Associating catalog products to special listings</a> topic.
     *  </span>
     *  <span class="tablenote"><b>Note:</b> To specify an item's condition, use the <b>ConditionID</b> field instead of a condition Item Specific. Use <b>GetCategoryFeatures</b> to see which categories support <b>ConditionID</b> and to get a list of valid condition IDs. (If you specify <b>ConditionID</b> and you also specify <b>Condition</b> as a Item Specific, eBay drops the condition Item Specific.)
     *  </span>
     *  <b>For GetItem</b>: This list is returned only when you specify <b>IncludeItemSpecifics</b> in the request (and the seller included Item Specifics in their listing).
     *  <br><br>
     *  To delete all Item Specifics when you revise or relist, specify <b>Item.ItemSpecifics</b> in <b>DeletedField</b>, and don't pass <b>ItemSpecifics</b> in the request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemSpecifics($index)
    {
        return isset($this->itemSpecifics[$index]);
    }

    /**
     * unset itemSpecifics
     *
     * This container is a list of Item Specific <b>Name</b>/<b>Value</b> pairs used by the seller to provide desciptive details of an item in a structured manner.
     *  <br><br>
     *  If creating, revising, or relisting an item with an <b>Add</b>, <b>Revise</b>, or <b>Relist</b> call, it is recommended that you use the <b>GetCategorySpecifics</b> call to retrieve mandatory and recommended Item Specifics for a listing category.
     *  <br><br>
     *  <b>For ReviseItem only:</b> When you revise a listing, if an auction listing has one or more bids and ends within 12 hours, you cannot change or add Item Ppecifics. If the auction listing has bids but ends in more than 12 hours, you cannot change existing Item Specifics, but you can add Item Specifics that were not previously included.
     *  <br><br>
     *  If your listing is in a eBay product catalog-enabled category, certain <b>Name</b>/<b>Value</b> pairs will be accepted as product identifying information. The <b>Name</b> can be <code>Brand</code>, <code>MPN</code>, or a Global Trade Item Number (GTIN). GTINs are a set of globally recognized identifiers, including <code>EAN</code>, <code>ISBN</code>, and <code>UPC</code>. However, the <b>Values</b> provided for these <b>Name</b>s must comply with eBay's constraints or they will not be recognized as product identifiers. The <b>Value</b> for Brand must be an actual brand name (except that if the item is not branded, <b>Value</b> can be <code>Unbranded</code>.) The <b>Value</b> for Brand or MPN cannot contain only special characters (e.g. <code>%$*#@</code>). All GTINs must comply with international formatting standards. For more details, see <a href="https://developer.ebay.com/devzone/guides/features-guide/default.html#development/ItemSpecifics-Listing.html" target="_blank">Listing with Item Specifics</a>.
     *  <br><br>
     *  If the <b>ProductListingDetails</b> container in an Add/Revise/Relist call is successfully used to find and use an eBay catalog product to create/revise listing, the seller should not remove or change the value of any Item Specific name or value that is defined as part of the eBay catalog product definition.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If a listing is associated with an eBay catalog product, the seller does not need to pass in any Item Specifics that are already defined in the eBay catalog product. Sellers can make a <b>GetCategorySpecifics</b> call to see if the listing category supports any 'instance aspects', which can be thought of as Item Specifics that are unique to the specific item that is being listed. Instance aspects are identified in the <b>GetCategorySpecifics</b> response by looking for a value of <code>Instance</code> in one or more <b>NameRecommendation.ValidationRules.aspectUsage</b> fields. Many categories support the following instance aspects: <em>Custom Bundle</em>, <em>Bundle Description</em>, <em>Modified Item</em>, <em>Modification Description</em>, and <em>California Prop 65 Warning</em>. These instance aspects allow the seller to provide more information about product bundles or modified products in a structured way. Depending on the category, there are other instance aspects as well. For more information about creating bundle listings or modified product listings, see the <a href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse-special-listings.html" target="_blank">Associating catalog products to special listings</a> topic.
     *  </span>
     *  <span class="tablenote"><b>Note:</b> To specify an item's condition, use the <b>ConditionID</b> field instead of a condition Item Specific. Use <b>GetCategoryFeatures</b> to see which categories support <b>ConditionID</b> and to get a list of valid condition IDs. (If you specify <b>ConditionID</b> and you also specify <b>Condition</b> as a Item Specific, eBay drops the condition Item Specific.)
     *  </span>
     *  <b>For GetItem</b>: This list is returned only when you specify <b>IncludeItemSpecifics</b> in the request (and the seller included Item Specifics in their listing).
     *  <br><br>
     *  To delete all Item Specifics when you revise or relist, specify <b>Item.ItemSpecifics</b> in <b>DeletedField</b>, and don't pass <b>ItemSpecifics</b> in the request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemSpecifics($index)
    {
        unset($this->itemSpecifics[$index]);
    }

    /**
     * Gets as itemSpecifics
     *
     * This container is a list of Item Specific <b>Name</b>/<b>Value</b> pairs used by the seller to provide desciptive details of an item in a structured manner.
     *  <br><br>
     *  If creating, revising, or relisting an item with an <b>Add</b>, <b>Revise</b>, or <b>Relist</b> call, it is recommended that you use the <b>GetCategorySpecifics</b> call to retrieve mandatory and recommended Item Specifics for a listing category.
     *  <br><br>
     *  <b>For ReviseItem only:</b> When you revise a listing, if an auction listing has one or more bids and ends within 12 hours, you cannot change or add Item Ppecifics. If the auction listing has bids but ends in more than 12 hours, you cannot change existing Item Specifics, but you can add Item Specifics that were not previously included.
     *  <br><br>
     *  If your listing is in a eBay product catalog-enabled category, certain <b>Name</b>/<b>Value</b> pairs will be accepted as product identifying information. The <b>Name</b> can be <code>Brand</code>, <code>MPN</code>, or a Global Trade Item Number (GTIN). GTINs are a set of globally recognized identifiers, including <code>EAN</code>, <code>ISBN</code>, and <code>UPC</code>. However, the <b>Values</b> provided for these <b>Name</b>s must comply with eBay's constraints or they will not be recognized as product identifiers. The <b>Value</b> for Brand must be an actual brand name (except that if the item is not branded, <b>Value</b> can be <code>Unbranded</code>.) The <b>Value</b> for Brand or MPN cannot contain only special characters (e.g. <code>%$*#@</code>). All GTINs must comply with international formatting standards. For more details, see <a href="https://developer.ebay.com/devzone/guides/features-guide/default.html#development/ItemSpecifics-Listing.html" target="_blank">Listing with Item Specifics</a>.
     *  <br><br>
     *  If the <b>ProductListingDetails</b> container in an Add/Revise/Relist call is successfully used to find and use an eBay catalog product to create/revise listing, the seller should not remove or change the value of any Item Specific name or value that is defined as part of the eBay catalog product definition.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If a listing is associated with an eBay catalog product, the seller does not need to pass in any Item Specifics that are already defined in the eBay catalog product. Sellers can make a <b>GetCategorySpecifics</b> call to see if the listing category supports any 'instance aspects', which can be thought of as Item Specifics that are unique to the specific item that is being listed. Instance aspects are identified in the <b>GetCategorySpecifics</b> response by looking for a value of <code>Instance</code> in one or more <b>NameRecommendation.ValidationRules.aspectUsage</b> fields. Many categories support the following instance aspects: <em>Custom Bundle</em>, <em>Bundle Description</em>, <em>Modified Item</em>, <em>Modification Description</em>, and <em>California Prop 65 Warning</em>. These instance aspects allow the seller to provide more information about product bundles or modified products in a structured way. Depending on the category, there are other instance aspects as well. For more information about creating bundle listings or modified product listings, see the <a href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse-special-listings.html" target="_blank">Associating catalog products to special listings</a> topic.
     *  </span>
     *  <span class="tablenote"><b>Note:</b> To specify an item's condition, use the <b>ConditionID</b> field instead of a condition Item Specific. Use <b>GetCategoryFeatures</b> to see which categories support <b>ConditionID</b> and to get a list of valid condition IDs. (If you specify <b>ConditionID</b> and you also specify <b>Condition</b> as a Item Specific, eBay drops the condition Item Specific.)
     *  </span>
     *  <b>For GetItem</b>: This list is returned only when you specify <b>IncludeItemSpecifics</b> in the request (and the seller included Item Specifics in their listing).
     *  <br><br>
     *  To delete all Item Specifics when you revise or relist, specify <b>Item.ItemSpecifics</b> in <b>DeletedField</b>, and don't pass <b>ItemSpecifics</b> in the request.
     *
     * @return \Nogrod\eBaySDK\MerchantData\NameValueListType[]
     */
    public function getItemSpecifics()
    {
        return $this->itemSpecifics;
    }

    /**
     * Sets a new itemSpecifics
     *
     * This container is a list of Item Specific <b>Name</b>/<b>Value</b> pairs used by the seller to provide desciptive details of an item in a structured manner.
     *  <br><br>
     *  If creating, revising, or relisting an item with an <b>Add</b>, <b>Revise</b>, or <b>Relist</b> call, it is recommended that you use the <b>GetCategorySpecifics</b> call to retrieve mandatory and recommended Item Specifics for a listing category.
     *  <br><br>
     *  <b>For ReviseItem only:</b> When you revise a listing, if an auction listing has one or more bids and ends within 12 hours, you cannot change or add Item Ppecifics. If the auction listing has bids but ends in more than 12 hours, you cannot change existing Item Specifics, but you can add Item Specifics that were not previously included.
     *  <br><br>
     *  If your listing is in a eBay product catalog-enabled category, certain <b>Name</b>/<b>Value</b> pairs will be accepted as product identifying information. The <b>Name</b> can be <code>Brand</code>, <code>MPN</code>, or a Global Trade Item Number (GTIN). GTINs are a set of globally recognized identifiers, including <code>EAN</code>, <code>ISBN</code>, and <code>UPC</code>. However, the <b>Values</b> provided for these <b>Name</b>s must comply with eBay's constraints or they will not be recognized as product identifiers. The <b>Value</b> for Brand must be an actual brand name (except that if the item is not branded, <b>Value</b> can be <code>Unbranded</code>.) The <b>Value</b> for Brand or MPN cannot contain only special characters (e.g. <code>%$*#@</code>). All GTINs must comply with international formatting standards. For more details, see <a href="https://developer.ebay.com/devzone/guides/features-guide/default.html#development/ItemSpecifics-Listing.html" target="_blank">Listing with Item Specifics</a>.
     *  <br><br>
     *  If the <b>ProductListingDetails</b> container in an Add/Revise/Relist call is successfully used to find and use an eBay catalog product to create/revise listing, the seller should not remove or change the value of any Item Specific name or value that is defined as part of the eBay catalog product definition.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If a listing is associated with an eBay catalog product, the seller does not need to pass in any Item Specifics that are already defined in the eBay catalog product. Sellers can make a <b>GetCategorySpecifics</b> call to see if the listing category supports any 'instance aspects', which can be thought of as Item Specifics that are unique to the specific item that is being listed. Instance aspects are identified in the <b>GetCategorySpecifics</b> response by looking for a value of <code>Instance</code> in one or more <b>NameRecommendation.ValidationRules.aspectUsage</b> fields. Many categories support the following instance aspects: <em>Custom Bundle</em>, <em>Bundle Description</em>, <em>Modified Item</em>, <em>Modification Description</em>, and <em>California Prop 65 Warning</em>. These instance aspects allow the seller to provide more information about product bundles or modified products in a structured way. Depending on the category, there are other instance aspects as well. For more information about creating bundle listings or modified product listings, see the <a href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse-special-listings.html" target="_blank">Associating catalog products to special listings</a> topic.
     *  </span>
     *  <span class="tablenote"><b>Note:</b> To specify an item's condition, use the <b>ConditionID</b> field instead of a condition Item Specific. Use <b>GetCategoryFeatures</b> to see which categories support <b>ConditionID</b> and to get a list of valid condition IDs. (If you specify <b>ConditionID</b> and you also specify <b>Condition</b> as a Item Specific, eBay drops the condition Item Specific.)
     *  </span>
     *  <b>For GetItem</b>: This list is returned only when you specify <b>IncludeItemSpecifics</b> in the request (and the seller included Item Specifics in their listing).
     *  <br><br>
     *  To delete all Item Specifics when you revise or relist, specify <b>Item.ItemSpecifics</b> in <b>DeletedField</b>, and don't pass <b>ItemSpecifics</b> in the request.
     *
     * @param \Nogrod\eBaySDK\MerchantData\NameValueListType[] $itemSpecifics
     * @return self
     */
    public function setItemSpecifics(array $itemSpecifics)
    {
        $this->itemSpecifics = $itemSpecifics;
        return $this;
    }

    /**
     * Gets as groupCategoryID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getGroupCategoryID()
    {
        return $this->groupCategoryID;
    }

    /**
     * Sets a new groupCategoryID
     *
     * This field is deprecated.
     *
     * @param string $groupCategoryID
     * @return self
     */
    public function setGroupCategoryID($groupCategoryID)
    {
        $this->groupCategoryID = $groupCategoryID;
        return $this;
    }

    /**
     * Gets as classifiedAdPayPerLeadFee
     *
     * The email and phone lead fee for a pay-per-lead item.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getClassifiedAdPayPerLeadFee()
    {
        return $this->classifiedAdPayPerLeadFee;
    }

    /**
     * Sets a new classifiedAdPayPerLeadFee
     *
     * The email and phone lead fee for a pay-per-lead item.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $classifiedAdPayPerLeadFee
     * @return self
     */
    public function setClassifiedAdPayPerLeadFee(\Nogrod\eBaySDK\MerchantData\AmountType $classifiedAdPayPerLeadFee)
    {
        $this->classifiedAdPayPerLeadFee = $classifiedAdPayPerLeadFee;
        return $this;
    }

    /**
     * Gets as bidGroupItem
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getBidGroupItem()
    {
        return $this->bidGroupItem;
    }

    /**
     * Sets a new bidGroupItem
     *
     * This field is deprecated.
     *
     * @param bool $bidGroupItem
     * @return self
     */
    public function setBidGroupItem($bidGroupItem)
    {
        $this->bidGroupItem = $bidGroupItem;
        return $this;
    }

    /**
     * Gets as applyBuyerProtection
     *
     * Different Buyer protection schemes and the various status associated with each one of them.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BuyerProtectionDetailsType
     */
    public function getApplyBuyerProtection()
    {
        return $this->applyBuyerProtection;
    }

    /**
     * Sets a new applyBuyerProtection
     *
     * Different Buyer protection schemes and the various status associated with each one of them.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BuyerProtectionDetailsType $applyBuyerProtection
     * @return self
     */
    public function setApplyBuyerProtection(\Nogrod\eBaySDK\MerchantData\BuyerProtectionDetailsType $applyBuyerProtection)
    {
        $this->applyBuyerProtection = $applyBuyerProtection;
        return $this;
    }

    /**
     * Gets as listingSubtype2
     *
     * Indicates a specific type of lead generation format listing, such as
     *  classified ad or local market best offer listing. Only applicable when
     *  <b>ListingType</b> = <b>LeadGeneration</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>ListingSubtype2</b> replaces the deprecated <b>ListingSubtype</b> field.
     *  If both are specified in a request, <b>ListingSubtype2</b> takes precedence.
     *  </span>
     *
     * @return string
     */
    public function getListingSubtype2()
    {
        return $this->listingSubtype2;
    }

    /**
     * Sets a new listingSubtype2
     *
     * Indicates a specific type of lead generation format listing, such as
     *  classified ad or local market best offer listing. Only applicable when
     *  <b>ListingType</b> = <b>LeadGeneration</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>ListingSubtype2</b> replaces the deprecated <b>ListingSubtype</b> field.
     *  If both are specified in a request, <b>ListingSubtype2</b> takes precedence.
     *  </span>
     *
     * @param string $listingSubtype2
     * @return self
     */
    public function setListingSubtype2($listingSubtype2)
    {
        $this->listingSubtype2 = $listingSubtype2;
        return $this;
    }

    /**
     * Gets as mechanicalCheckAccepted
     *
     * Indicates whether the seller allows the bidder to request mechanical
     *  inspection services from RAC. For the Car category listings on the UK site.
     *
     * @return bool
     */
    public function getMechanicalCheckAccepted()
    {
        return $this->mechanicalCheckAccepted;
    }

    /**
     * Sets a new mechanicalCheckAccepted
     *
     * Indicates whether the seller allows the bidder to request mechanical
     *  inspection services from RAC. For the Car category listings on the UK site.
     *
     * @param bool $mechanicalCheckAccepted
     * @return self
     */
    public function setMechanicalCheckAccepted($mechanicalCheckAccepted)
    {
        $this->mechanicalCheckAccepted = $mechanicalCheckAccepted;
        return $this;
    }

    /**
     * Gets as updateSellerInfo
     *
     * Specifies whether the following Business Seller fields have been updated for
     *  the item specified in the request: First Name, Last Name, Fax, Email
     *  Address, Additional Contact Information, Trade Registration Number, VAT
     *  Identification Number.
     *
     * @return bool
     */
    public function getUpdateSellerInfo()
    {
        return $this->updateSellerInfo;
    }

    /**
     * Sets a new updateSellerInfo
     *
     * Specifies whether the following Business Seller fields have been updated for
     *  the item specified in the request: First Name, Last Name, Fax, Email
     *  Address, Additional Contact Information, Trade Registration Number, VAT
     *  Identification Number.
     *
     * @param bool $updateSellerInfo
     * @return self
     */
    public function setUpdateSellerInfo($updateSellerInfo)
    {
        $this->updateSellerInfo = $updateSellerInfo;
        return $this;
    }

    /**
     * Gets as updateReturnPolicy
     *
     * Specifies whether the Return Policy Details have been updated
     *  for the item specified in the request.
     *
     * @return bool
     */
    public function getUpdateReturnPolicy()
    {
        return $this->updateReturnPolicy;
    }

    /**
     * Sets a new updateReturnPolicy
     *
     * Specifies whether the Return Policy Details have been updated
     *  for the item specified in the request.
     *
     * @param bool $updateReturnPolicy
     * @return self
     */
    public function setUpdateReturnPolicy($updateReturnPolicy)
    {
        $this->updateReturnPolicy = $updateReturnPolicy;
        return $this;
    }

    /**
     * Gets as itemPolicyViolation
     *
     * Specifies the details of policy violations if the item was administratively
     *  canceled.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ItemPolicyViolationType
     */
    public function getItemPolicyViolation()
    {
        return $this->itemPolicyViolation;
    }

    /**
     * Sets a new itemPolicyViolation
     *
     * Specifies the details of policy violations if the item was administratively
     *  canceled.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ItemPolicyViolationType $itemPolicyViolation
     * @return self
     */
    public function setItemPolicyViolation(\Nogrod\eBaySDK\MerchantData\ItemPolicyViolationType $itemPolicyViolation)
    {
        $this->itemPolicyViolation = $itemPolicyViolation;
        return $this;
    }

    /**
     * Adds as crossBorderTrade
     *
     * This field is used by sellers who want their listing to be returned in the search
     *  results for other eBay sites. This feature is currently only supported by the US, UK,
     *  eBay Canada, and eBay Ireland sites. See <a href="
     *  https://pages.ebay.com/help/sell/globalexposure.html">Getting exposure on
     *  international sites</a> for full requirements on using this feature. There is a
     *  small listing fee for each country specified as a Cross Border Trade country.
     *  <br><br>
     *  US listings that offer shipping to Canada, North America, or worldwide are
     *  automatically returned on eBay.ca at no extra charge, so US listings that offer
     *  shipping to these locations do not need to specify Canada as a Cross Border Trade
     *  country.
     *
     * @return self
     * @param string $crossBorderTrade
     */
    public function addToCrossBorderTrade($crossBorderTrade)
    {
        $this->crossBorderTrade[] = $crossBorderTrade;
        return $this;
    }

    /**
     * isset crossBorderTrade
     *
     * This field is used by sellers who want their listing to be returned in the search
     *  results for other eBay sites. This feature is currently only supported by the US, UK,
     *  eBay Canada, and eBay Ireland sites. See <a href="
     *  https://pages.ebay.com/help/sell/globalexposure.html">Getting exposure on
     *  international sites</a> for full requirements on using this feature. There is a
     *  small listing fee for each country specified as a Cross Border Trade country.
     *  <br><br>
     *  US listings that offer shipping to Canada, North America, or worldwide are
     *  automatically returned on eBay.ca at no extra charge, so US listings that offer
     *  shipping to these locations do not need to specify Canada as a Cross Border Trade
     *  country.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCrossBorderTrade($index)
    {
        return isset($this->crossBorderTrade[$index]);
    }

    /**
     * unset crossBorderTrade
     *
     * This field is used by sellers who want their listing to be returned in the search
     *  results for other eBay sites. This feature is currently only supported by the US, UK,
     *  eBay Canada, and eBay Ireland sites. See <a href="
     *  https://pages.ebay.com/help/sell/globalexposure.html">Getting exposure on
     *  international sites</a> for full requirements on using this feature. There is a
     *  small listing fee for each country specified as a Cross Border Trade country.
     *  <br><br>
     *  US listings that offer shipping to Canada, North America, or worldwide are
     *  automatically returned on eBay.ca at no extra charge, so US listings that offer
     *  shipping to these locations do not need to specify Canada as a Cross Border Trade
     *  country.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCrossBorderTrade($index)
    {
        unset($this->crossBorderTrade[$index]);
    }

    /**
     * Gets as crossBorderTrade
     *
     * This field is used by sellers who want their listing to be returned in the search
     *  results for other eBay sites. This feature is currently only supported by the US, UK,
     *  eBay Canada, and eBay Ireland sites. See <a href="
     *  https://pages.ebay.com/help/sell/globalexposure.html">Getting exposure on
     *  international sites</a> for full requirements on using this feature. There is a
     *  small listing fee for each country specified as a Cross Border Trade country.
     *  <br><br>
     *  US listings that offer shipping to Canada, North America, or worldwide are
     *  automatically returned on eBay.ca at no extra charge, so US listings that offer
     *  shipping to these locations do not need to specify Canada as a Cross Border Trade
     *  country.
     *
     * @return string[]
     */
    public function getCrossBorderTrade()
    {
        return $this->crossBorderTrade;
    }

    /**
     * Sets a new crossBorderTrade
     *
     * This field is used by sellers who want their listing to be returned in the search
     *  results for other eBay sites. This feature is currently only supported by the US, UK,
     *  eBay Canada, and eBay Ireland sites. See <a href="
     *  https://pages.ebay.com/help/sell/globalexposure.html">Getting exposure on
     *  international sites</a> for full requirements on using this feature. There is a
     *  small listing fee for each country specified as a Cross Border Trade country.
     *  <br><br>
     *  US listings that offer shipping to Canada, North America, or worldwide are
     *  automatically returned on eBay.ca at no extra charge, so US listings that offer
     *  shipping to these locations do not need to specify Canada as a Cross Border Trade
     *  country.
     *
     * @param string[] $crossBorderTrade
     * @return self
     */
    public function setCrossBorderTrade(array $crossBorderTrade)
    {
        $this->crossBorderTrade = $crossBorderTrade;
        return $this;
    }

    /**
     * Gets as businessSellerDetails
     *
     * Returns the seller's information (in a business card format)
     *  if the seller's <b>SellerBusinessCodeType</b> is set to <code>Commercial</code>.
     *  This is only applicable for sites where Business Seller options
     *  are supported.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BusinessSellerDetailsType
     */
    public function getBusinessSellerDetails()
    {
        return $this->businessSellerDetails;
    }

    /**
     * Sets a new businessSellerDetails
     *
     * Returns the seller's information (in a business card format)
     *  if the seller's <b>SellerBusinessCodeType</b> is set to <code>Commercial</code>.
     *  This is only applicable for sites where Business Seller options
     *  are supported.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BusinessSellerDetailsType $businessSellerDetails
     * @return self
     */
    public function setBusinessSellerDetails(\Nogrod\eBaySDK\MerchantData\BusinessSellerDetailsType $businessSellerDetails)
    {
        $this->businessSellerDetails = $businessSellerDetails;
        return $this;
    }

    /**
     * Gets as buyerGuaranteePrice
     *
     * For the Australia site, <b>BuyerGuaranteePrice</b> is the PayPal Buyer Protection
     *  coverage, offered for the item at the time of purchase. Details of coverage
     *  are in the following sections of the View Item page: the Buy Safely section
     *  and the Payment Details section.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getBuyerGuaranteePrice()
    {
        return $this->buyerGuaranteePrice;
    }

    /**
     * Sets a new buyerGuaranteePrice
     *
     * For the Australia site, <b>BuyerGuaranteePrice</b> is the PayPal Buyer Protection
     *  coverage, offered for the item at the time of purchase. Details of coverage
     *  are in the following sections of the View Item page: the Buy Safely section
     *  and the Payment Details section.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $buyerGuaranteePrice
     * @return self
     */
    public function setBuyerGuaranteePrice(\Nogrod\eBaySDK\MerchantData\AmountType $buyerGuaranteePrice)
    {
        $this->buyerGuaranteePrice = $buyerGuaranteePrice;
        return $this;
    }

    /**
     * Gets as buyerRequirementDetails
     *
     * When this container is present in an <b>AddItem</b> or <b>AddFixedPriceItem</b> call, all
     *  buyer requirements for the resulting listing are set by this container.
     *  Furthermore, individual buyer requirements cannot be modified or added when
     *  including this container in a <b>ReviseItem</b> call.
     *  The <b>ReviseItem</b> call needs to
     *  provide the entire set of buyer requirements to modify or add any of the
     *  requirements.
     *  <br/><br/>
     *  Unless otherwise specified, most buyer requirements are only
     *  returned if the caller is the seller. All global My eBay Buyer Requirements
     *  are overridden by the contents of this container. This means that buyer
     *  requirements set in My eBay cannot be combined with buyer requirements
     *  included in this container.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BuyerRequirementDetailsType
     */
    public function getBuyerRequirementDetails()
    {
        return $this->buyerRequirementDetails;
    }

    /**
     * Sets a new buyerRequirementDetails
     *
     * When this container is present in an <b>AddItem</b> or <b>AddFixedPriceItem</b> call, all
     *  buyer requirements for the resulting listing are set by this container.
     *  Furthermore, individual buyer requirements cannot be modified or added when
     *  including this container in a <b>ReviseItem</b> call.
     *  The <b>ReviseItem</b> call needs to
     *  provide the entire set of buyer requirements to modify or add any of the
     *  requirements.
     *  <br/><br/>
     *  Unless otherwise specified, most buyer requirements are only
     *  returned if the caller is the seller. All global My eBay Buyer Requirements
     *  are overridden by the contents of this container. This means that buyer
     *  requirements set in My eBay cannot be combined with buyer requirements
     *  included in this container.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BuyerRequirementDetailsType $buyerRequirementDetails
     * @return self
     */
    public function setBuyerRequirementDetails(\Nogrod\eBaySDK\MerchantData\BuyerRequirementDetailsType $buyerRequirementDetails)
    {
        $this->buyerRequirementDetails = $buyerRequirementDetails;
        return $this;
    }

    /**
     * Gets as returnPolicy
     *
     * Describes the seller's return policy. Most categories on most
     *  eBay sites require the seller to clearly specify whether or not
     *  returns are accepted (see <b>ReturnsAcceptedOption</b>). <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a return policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate the fields in this <b>ReturnPolicy</b> container. Instead, indicate your return policy using the <b>SellerProfiles.SellerReturnProfile</b> container.
     *  <br>
     *  <br>
     *  However, if you <i>do not</i> configure a return policy, all the fields in this <b>ReturnPolicy</b> container that are marked <b>conditional</b> must be populated in your request.
     *  </span>
     *  <br>
     *  <b>For the <b>AddItem</b> family of calls:</b> Required for
     *  most categories on most sites. Use <b>ReturnPolicyEnabled</b>
     *  in <b>GetCategoryFeatures</b> to determine which categories require this
     *  field. Also use <b>ReturnPolicyDetails</b> in <b>GeteBayDetails</b> to determine
     *  which <b>ReturnPolicy</b> fields can be used on each site.<br>
     *  <br>
     *  Australia (AU) and US eBay Motors
     *  Parts and Accessories categories typically support but do not
     *  require a return policy. (However, we strongly recommend that
     *  you specify a clear return policy whenever possible.)<br>
     *  <br>
     *  <b>For ReviseItem only:</b> If the listing has bids or
     *  sales and it ends within 12 hours, you can't change the return policy
     *  details. If the listing is a GTC listing that has sales or ends within 12
     *  hours (one or the other, but not both), you can add a return policy to the
     *  GTC listing (but you can't change return policy details if already present).
     *  If the listing has no bids or sales and more than 12 hours remain before the
     *  listing ends, you can add or change the return policy. When you revise your
     *  return policy, you only need to specify the fields you want to add or
     *  change. You don't need to specify all the other <b>ReturnPolicy</b> fields again.
     *  The other fields will retain their existing settings.<br>
     *  <br>
     *  <b>For the GetItem family of calls:</b> Only returned if the
     *  site you sent the request to supports the seller's return policy. Typically,
     *  the return policy details are only returned when the request is sent to the
     *  listing site.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call can be used to retrieve site-wide return policy metadata, but it is recommended that sellers use the <b>GetCategoryFeatures</b> call instead, as this call was recently updated to retrieve category-level metadata for both domestic and international return policies.</span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\ReturnPolicyType
     */
    public function getReturnPolicy()
    {
        return $this->returnPolicy;
    }

    /**
     * Sets a new returnPolicy
     *
     * Describes the seller's return policy. Most categories on most
     *  eBay sites require the seller to clearly specify whether or not
     *  returns are accepted (see <b>ReturnsAcceptedOption</b>). <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If you set up a return policy via the <a href="https://developer.ebay.com/api-docs/sell/account/resources/return_policy/methods/createReturnPolicy">Account API</a> or the <a href="https://developer.ebay.com/Devzone/business-policies/CallRef/addSellerProfile.html">Business Polices Managment API</a>, then you should not populate the fields in this <b>ReturnPolicy</b> container. Instead, indicate your return policy using the <b>SellerProfiles.SellerReturnProfile</b> container.
     *  <br>
     *  <br>
     *  However, if you <i>do not</i> configure a return policy, all the fields in this <b>ReturnPolicy</b> container that are marked <b>conditional</b> must be populated in your request.
     *  </span>
     *  <br>
     *  <b>For the <b>AddItem</b> family of calls:</b> Required for
     *  most categories on most sites. Use <b>ReturnPolicyEnabled</b>
     *  in <b>GetCategoryFeatures</b> to determine which categories require this
     *  field. Also use <b>ReturnPolicyDetails</b> in <b>GeteBayDetails</b> to determine
     *  which <b>ReturnPolicy</b> fields can be used on each site.<br>
     *  <br>
     *  Australia (AU) and US eBay Motors
     *  Parts and Accessories categories typically support but do not
     *  require a return policy. (However, we strongly recommend that
     *  you specify a clear return policy whenever possible.)<br>
     *  <br>
     *  <b>For ReviseItem only:</b> If the listing has bids or
     *  sales and it ends within 12 hours, you can't change the return policy
     *  details. If the listing is a GTC listing that has sales or ends within 12
     *  hours (one or the other, but not both), you can add a return policy to the
     *  GTC listing (but you can't change return policy details if already present).
     *  If the listing has no bids or sales and more than 12 hours remain before the
     *  listing ends, you can add or change the return policy. When you revise your
     *  return policy, you only need to specify the fields you want to add or
     *  change. You don't need to specify all the other <b>ReturnPolicy</b> fields again.
     *  The other fields will retain their existing settings.<br>
     *  <br>
     *  <b>For the GetItem family of calls:</b> Only returned if the
     *  site you sent the request to supports the seller's return policy. Typically,
     *  the return policy details are only returned when the request is sent to the
     *  listing site.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call can be used to retrieve site-wide return policy metadata, but it is recommended that sellers use the <b>GetCategoryFeatures</b> call instead, as this call was recently updated to retrieve category-level metadata for both domestic and international return policies.</span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\ReturnPolicyType $returnPolicy
     * @return self
     */
    public function setReturnPolicy(\Nogrod\eBaySDK\MerchantData\ReturnPolicyType $returnPolicy)
    {
        $this->returnPolicy = $returnPolicy;
        return $this;
    }

    /**
     * Adds as paymentAllowedSite
     *
     * Enables you to view the sites on which an item can be purchased,
     *  based on the payment methods offered for the item.
     *
     * @return self
     * @param string $paymentAllowedSite
     */
    public function addToPaymentAllowedSite($paymentAllowedSite)
    {
        $this->paymentAllowedSite[] = $paymentAllowedSite;
        return $this;
    }

    /**
     * isset paymentAllowedSite
     *
     * Enables you to view the sites on which an item can be purchased,
     *  based on the payment methods offered for the item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentAllowedSite($index)
    {
        return isset($this->paymentAllowedSite[$index]);
    }

    /**
     * unset paymentAllowedSite
     *
     * Enables you to view the sites on which an item can be purchased,
     *  based on the payment methods offered for the item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentAllowedSite($index)
    {
        unset($this->paymentAllowedSite[$index]);
    }

    /**
     * Gets as paymentAllowedSite
     *
     * Enables you to view the sites on which an item can be purchased,
     *  based on the payment methods offered for the item.
     *
     * @return string[]
     */
    public function getPaymentAllowedSite()
    {
        return $this->paymentAllowedSite;
    }

    /**
     * Sets a new paymentAllowedSite
     *
     * Enables you to view the sites on which an item can be purchased,
     *  based on the payment methods offered for the item.
     *
     * @param string $paymentAllowedSite
     * @return self
     */
    public function setPaymentAllowedSite(array $paymentAllowedSite)
    {
        $this->paymentAllowedSite = $paymentAllowedSite;
        return $this;
    }

    /**
     * Gets as inventoryTrackingMethod
     *
     * Indicates whether you prefer to track your eBay listings by eBay Item ID or
     *  by your own SKU. <br>
     *  <br>
     *  If a seller will be converting an existing eBay listing into the new Inventory model using the <b>bulkMigrateListings</b> call of the <b>Inventory API</b>, the <b>InventoryTrackingMethod</b> value must be set to <code>ItemID</code> (default value), but the item must also have a SKU value (Item.<b>SKU</b> or Variation.<b>SKU</b>) associated with it.
     *  <b>For GetItem and related calls</b>:
     *  Only returned when the value is <code>SKU</code>; not returned when the value is <code>ItemID</code>.
     *
     * @return string
     */
    public function getInventoryTrackingMethod()
    {
        return $this->inventoryTrackingMethod;
    }

    /**
     * Sets a new inventoryTrackingMethod
     *
     * Indicates whether you prefer to track your eBay listings by eBay Item ID or
     *  by your own SKU. <br>
     *  <br>
     *  If a seller will be converting an existing eBay listing into the new Inventory model using the <b>bulkMigrateListings</b> call of the <b>Inventory API</b>, the <b>InventoryTrackingMethod</b> value must be set to <code>ItemID</code> (default value), but the item must also have a SKU value (Item.<b>SKU</b> or Variation.<b>SKU</b>) associated with it.
     *  <b>For GetItem and related calls</b>:
     *  Only returned when the value is <code>SKU</code>; not returned when the value is <code>ItemID</code>.
     *
     * @param string $inventoryTrackingMethod
     * @return self
     */
    public function setInventoryTrackingMethod($inventoryTrackingMethod)
    {
        $this->inventoryTrackingMethod = $inventoryTrackingMethod;
        return $this;
    }

    /**
     * Gets as integratedMerchantCreditCardEnabled
     *
     * Indicates whether the item can be paid for through a payment gateway
     *  (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, then
     *  integrated merchant credit card (IMCC) is enabled for credit cards because
     *  the seller has a payment gateway account. Therefore, if
     *  <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, an AmEx, Discover, or VisaMC
     *  is returned for an item, then on checkout, an online credit-card payment is
     *  processed through a payment gateway account. A payment gateway account is
     *  used by sellers to accept online credit cards (Visa, MasterCard, American
     *  Express, and Discover).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer supports electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *
     * @return bool
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->integratedMerchantCreditCardEnabled;
    }

    /**
     * Sets a new integratedMerchantCreditCardEnabled
     *
     * Indicates whether the item can be paid for through a payment gateway
     *  (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, then
     *  integrated merchant credit card (IMCC) is enabled for credit cards because
     *  the seller has a payment gateway account. Therefore, if
     *  <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, an AmEx, Discover, or VisaMC
     *  is returned for an item, then on checkout, an online credit-card payment is
     *  processed through a payment gateway account. A payment gateway account is
     *  used by sellers to accept online credit cards (Visa, MasterCard, American
     *  Express, and Discover).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer supports electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *
     * @param bool $integratedMerchantCreditCardEnabled
     * @return self
     */
    public function setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
    {
        $this->integratedMerchantCreditCardEnabled = $integratedMerchantCreditCardEnabled;
        return $this;
    }

    /**
     * Gets as variations
     *
     * Variations are multiple similar (but not identical) items in a
     *  single fixed-price listing. For example, a T-shirt listing
     *  could contain multiple items of the same brand
     *  that vary by color and size (like "Blue, Large" and
     *  "Black, Medium"). Each variation specifies a combination of one of
     *  these colors and sizes. Each variation can have a different
     *  quantity and price. You can buy multiple items from one
     *  variation at the same time. (That is, one order line item can contain
     *  multiple items from a single variation.) <br>
     *  <br>
     *  If you list in two categories, both categories must support
     *  listing with variations. See <b>VariationsEnabled</b> in
     *  <b>GetCategoryFeatures</b> to determine applicable categories.<br>
     *  <br>
     *  <b>For ReviseFixedPriceItem and
     *  RelistFixedPriceItem:</b> Once a listing has been submitted with variations,
     *  you can't delete all the variations when you revise or relist the listing (because
     *  it would be considered a different listing). You also can't add or change variation
     *  specifics (because they are unique identifiers). However, you can delete or replace
     *  individual variations as needed to match your current inventory. If a variation has
     *  no purchases, use the <b>Variation.Delete</b> field to delete the variation. If it has
     *  inventory, set the Quantity to 0.<br>
     *  <br>
     *  As a best practice, if you want to revise multiple variations in
     *  the same listing at the same time (i.e., within a very short period),
     *  use a single <b>ReviseFixedPriceItem</b> request and include all the
     *  variation revisions in the same request. If your application design
     *  requires you to revise each variation individually, then avoid using
     *  multiple parallel threads. Instead, use a serial, synchronous
     *  process. That is, wait until each revision has been
     *  processed by eBay before submitting the next revision request for
     *  another variation in the same listing.<br>
     *  <br>
     *  <b>For GetItem and related calls</b> Only returned
     *  when a listing has variations.
     *  <br><br>
     *  <b>For GetSellerList:</b> Only returned when a listing
     *  has variations, <b>IncludeVariations</b> was set to <code>true</code> in the request,
     *  the <b>DetailLevel</b> was set to <b>ReturnAll</b>, and an applicable pagination
     *  value and time range were specified.<br>
     *  <br>
     *  <b>For GetItemTransactions</b> Only returned in Item
     *  when a listing has variations and <b>IncludeVariations</b> was set to <code>true</code>
     *  in the request. (Also see <b>Variation</b> returned in <b>Transaction</b> for
     *  information about which variation was actually purchased.)
     *  <br>
     *  <br>
     *  <b>For GetSellerEvents, GetMyeBayBuying, and GetMyeBaySelling:</b> Only returned
     *  when a listing has variations and <b>HideVariations</b> was set to <code>false</code>
     *  or not specified in the request.
     *
     * @return \Nogrod\eBaySDK\MerchantData\VariationsType
     */
    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * Sets a new variations
     *
     * Variations are multiple similar (but not identical) items in a
     *  single fixed-price listing. For example, a T-shirt listing
     *  could contain multiple items of the same brand
     *  that vary by color and size (like "Blue, Large" and
     *  "Black, Medium"). Each variation specifies a combination of one of
     *  these colors and sizes. Each variation can have a different
     *  quantity and price. You can buy multiple items from one
     *  variation at the same time. (That is, one order line item can contain
     *  multiple items from a single variation.) <br>
     *  <br>
     *  If you list in two categories, both categories must support
     *  listing with variations. See <b>VariationsEnabled</b> in
     *  <b>GetCategoryFeatures</b> to determine applicable categories.<br>
     *  <br>
     *  <b>For ReviseFixedPriceItem and
     *  RelistFixedPriceItem:</b> Once a listing has been submitted with variations,
     *  you can't delete all the variations when you revise or relist the listing (because
     *  it would be considered a different listing). You also can't add or change variation
     *  specifics (because they are unique identifiers). However, you can delete or replace
     *  individual variations as needed to match your current inventory. If a variation has
     *  no purchases, use the <b>Variation.Delete</b> field to delete the variation. If it has
     *  inventory, set the Quantity to 0.<br>
     *  <br>
     *  As a best practice, if you want to revise multiple variations in
     *  the same listing at the same time (i.e., within a very short period),
     *  use a single <b>ReviseFixedPriceItem</b> request and include all the
     *  variation revisions in the same request. If your application design
     *  requires you to revise each variation individually, then avoid using
     *  multiple parallel threads. Instead, use a serial, synchronous
     *  process. That is, wait until each revision has been
     *  processed by eBay before submitting the next revision request for
     *  another variation in the same listing.<br>
     *  <br>
     *  <b>For GetItem and related calls</b> Only returned
     *  when a listing has variations.
     *  <br><br>
     *  <b>For GetSellerList:</b> Only returned when a listing
     *  has variations, <b>IncludeVariations</b> was set to <code>true</code> in the request,
     *  the <b>DetailLevel</b> was set to <b>ReturnAll</b>, and an applicable pagination
     *  value and time range were specified.<br>
     *  <br>
     *  <b>For GetItemTransactions</b> Only returned in Item
     *  when a listing has variations and <b>IncludeVariations</b> was set to <code>true</code>
     *  in the request. (Also see <b>Variation</b> returned in <b>Transaction</b> for
     *  information about which variation was actually purchased.)
     *  <br>
     *  <br>
     *  <b>For GetSellerEvents, GetMyeBayBuying, and GetMyeBaySelling:</b> Only returned
     *  when a listing has variations and <b>HideVariations</b> was set to <code>false</code>
     *  or not specified in the request.
     *
     * @param \Nogrod\eBaySDK\MerchantData\VariationsType $variations
     * @return self
     */
    public function setVariations(\Nogrod\eBaySDK\MerchantData\VariationsType $variations)
    {
        $this->variations = $variations;
        return $this;
    }

    /**
     * Gets as itemCompatibilityList
     *
     * A list of parts compatibility information specified as name and value pairs.
     *  Describes an assembly with which a part is compatible (i.e., compatibility by
     *  application). For example, to specify a part's compatibility with a vehicle,
     *  the name (search name) would map to standard vehicle characteristics (e.g.,
     *  Year, Make, Model, Trim, and Engine). The values would describe the specific
     *  vehicle, such as a 2006 Honda Accord. Use the <b>Product Metadata API</b> to
     *  retrieve valid search names and corresponding values.
     *  <br><br>
     *  <b>For the <b>AddItem</b> family of calls:</b> Use this for specifying
     *  parts compatibility by application manually. This can only be used in
     *  categories that support parts compatibility by application. Use <b
     *  class="con">GetCategoryFeatures</b> with the <b>CompatibilityEnabled</b>
     *  feature ID to determine which categories support parts compatibility by
     *  application.
     *  <br><br>
     *  <b>For ReviseFixedPriceItem and ReviseItem:</b> When you revise a
     *  listing, if the listing has bids and/or ends within 12 hours, item
     *  compatibilities cannot be deleted. You may add item compatibilities at any
     *  time.
     *  <br><br>
     *  <b>For GetItem:</b> <b
     *  class="con">ItemCompatibilityList</b> is only returned if the
     *  seller included item compatibility in the listing and <b
     *  class="con">IncludeItemCompatibilityList</b> is set to <code>true</code> in the
     *  <b>GetItem</b> request.
     *  <br><br>
     *
     * @return \Nogrod\eBaySDK\MerchantData\ItemCompatibilityListType
     */
    public function getItemCompatibilityList()
    {
        return $this->itemCompatibilityList;
    }

    /**
     * Sets a new itemCompatibilityList
     *
     * A list of parts compatibility information specified as name and value pairs.
     *  Describes an assembly with which a part is compatible (i.e., compatibility by
     *  application). For example, to specify a part's compatibility with a vehicle,
     *  the name (search name) would map to standard vehicle characteristics (e.g.,
     *  Year, Make, Model, Trim, and Engine). The values would describe the specific
     *  vehicle, such as a 2006 Honda Accord. Use the <b>Product Metadata API</b> to
     *  retrieve valid search names and corresponding values.
     *  <br><br>
     *  <b>For the <b>AddItem</b> family of calls:</b> Use this for specifying
     *  parts compatibility by application manually. This can only be used in
     *  categories that support parts compatibility by application. Use <b
     *  class="con">GetCategoryFeatures</b> with the <b>CompatibilityEnabled</b>
     *  feature ID to determine which categories support parts compatibility by
     *  application.
     *  <br><br>
     *  <b>For ReviseFixedPriceItem and ReviseItem:</b> When you revise a
     *  listing, if the listing has bids and/or ends within 12 hours, item
     *  compatibilities cannot be deleted. You may add item compatibilities at any
     *  time.
     *  <br><br>
     *  <b>For GetItem:</b> <b
     *  class="con">ItemCompatibilityList</b> is only returned if the
     *  seller included item compatibility in the listing and <b
     *  class="con">IncludeItemCompatibilityList</b> is set to <code>true</code> in the
     *  <b>GetItem</b> request.
     *  <br><br>
     *
     * @param \Nogrod\eBaySDK\MerchantData\ItemCompatibilityListType $itemCompatibilityList
     * @return self
     */
    public function setItemCompatibilityList(\Nogrod\eBaySDK\MerchantData\ItemCompatibilityListType $itemCompatibilityList)
    {
        $this->itemCompatibilityList = $itemCompatibilityList;
        return $this;
    }

    /**
     * Gets as itemCompatibilityCount
     *
     * Indicates the number of compatible applications specified for the given item.
     *  Applies to items listed with fitment by application only (either manually or
     *  with a catalog product that supports compatibility).
     *  <br><br>
     *  Not returned if the item has no specified compatible applications. Not
     *  returned if <b>IncludeItemCompatibilityList</b> is
     *  specified in the request.
     *  <br><br>
     *  To retrieve the list of compatibility information, set <b>
     *  IncludeItemCompatibilityList</b> to <code>true</code> in the request.
     *  <br><br>
     *  Parts Compatibility is supported in limited Parts & Accessories
     *  categories for the eBay Motors (US) site (site ID 100) only.
     *
     * @return int
     */
    public function getItemCompatibilityCount()
    {
        return $this->itemCompatibilityCount;
    }

    /**
     * Sets a new itemCompatibilityCount
     *
     * Indicates the number of compatible applications specified for the given item.
     *  Applies to items listed with fitment by application only (either manually or
     *  with a catalog product that supports compatibility).
     *  <br><br>
     *  Not returned if the item has no specified compatible applications. Not
     *  returned if <b>IncludeItemCompatibilityList</b> is
     *  specified in the request.
     *  <br><br>
     *  To retrieve the list of compatibility information, set <b>
     *  IncludeItemCompatibilityList</b> to <code>true</code> in the request.
     *  <br><br>
     *  Parts Compatibility is supported in limited Parts & Accessories
     *  categories for the eBay Motors (US) site (site ID 100) only.
     *
     * @param int $itemCompatibilityCount
     * @return self
     */
    public function setItemCompatibilityCount($itemCompatibilityCount)
    {
        $this->itemCompatibilityCount = $itemCompatibilityCount;
        return $this;
    }

    /**
     * Gets as conditionID
     *
     * This is a numeric identifier for an item's condition. All numeric Condition ID values map to an item condition string value. For example, numeric identifer <code>1000</code> maps to <code>New</code> condition.
     *  <br><br>
     *  Most eBay categories require an item condition, but a few eBay categories do not. To verify if the listing category requires an item condition, and if so, what are the supported item condition and <b>ConditionID</b> values, you can call <b>GetCategoryFeatures</b>. In this <b>GetCategoryFeatures</b> call, you'd pass in the listing <b>CategoryID</b> value and two <b>FeatureID</b> fields - one of these fields set to <code>ConditionEnabled</code>, and the other field set to <code>ConditionValues</code>.
     *  <br><br>
     *  In the <b>GetCategoryFeatures</b> response, look at the Category.<b>ConditionEnabled</b> to see if item condition is required for the category. Then look at the Category.<b>ConditionValues</b> container in the response for the full list of Condition IDs that you can pass in through the <b>ConditionID</b> field of an Add/Revise/Relist/Verify call. Note that the Condition.<b>DisplayName</b> value in the response is the actual condition value that will appear in the actual eBay listing.
     *  <br>
     *  <br>
     *  If you pass in a <b>ConditionID</b> value
     *  that is not valid for the category, or if you don't pass in a <b>ConditionID</b> value at all for a category that requires it, the listing request fails.
     *  <br><br>
     *  If you are listing in two categories (using a secondary category), it is the primary listing category that determines which <b>ConditionID</b> values are supported.
     *  <br><br>
     *  <b>For Revise/Relist calls:</b> In most cases, you can change the <b>ConditionID</b> value (if applicable/warranted), with the exception being an auction listing that has one or more bids, or any listing that is scheduled to end in 12 hours or less. <br>
     *  <br>
     *  <b>For GetItem:</b> The
     *  <b>ConditionID</b> value is always returned if set for the listing. <b>GetItem</b> also returns
     *  the item condition string value in the <b>ConditionDisplayName</b> field.
     *
     * @return int
     */
    public function getConditionID()
    {
        return $this->conditionID;
    }

    /**
     * Sets a new conditionID
     *
     * This is a numeric identifier for an item's condition. All numeric Condition ID values map to an item condition string value. For example, numeric identifer <code>1000</code> maps to <code>New</code> condition.
     *  <br><br>
     *  Most eBay categories require an item condition, but a few eBay categories do not. To verify if the listing category requires an item condition, and if so, what are the supported item condition and <b>ConditionID</b> values, you can call <b>GetCategoryFeatures</b>. In this <b>GetCategoryFeatures</b> call, you'd pass in the listing <b>CategoryID</b> value and two <b>FeatureID</b> fields - one of these fields set to <code>ConditionEnabled</code>, and the other field set to <code>ConditionValues</code>.
     *  <br><br>
     *  In the <b>GetCategoryFeatures</b> response, look at the Category.<b>ConditionEnabled</b> to see if item condition is required for the category. Then look at the Category.<b>ConditionValues</b> container in the response for the full list of Condition IDs that you can pass in through the <b>ConditionID</b> field of an Add/Revise/Relist/Verify call. Note that the Condition.<b>DisplayName</b> value in the response is the actual condition value that will appear in the actual eBay listing.
     *  <br>
     *  <br>
     *  If you pass in a <b>ConditionID</b> value
     *  that is not valid for the category, or if you don't pass in a <b>ConditionID</b> value at all for a category that requires it, the listing request fails.
     *  <br><br>
     *  If you are listing in two categories (using a secondary category), it is the primary listing category that determines which <b>ConditionID</b> values are supported.
     *  <br><br>
     *  <b>For Revise/Relist calls:</b> In most cases, you can change the <b>ConditionID</b> value (if applicable/warranted), with the exception being an auction listing that has one or more bids, or any listing that is scheduled to end in 12 hours or less. <br>
     *  <br>
     *  <b>For GetItem:</b> The
     *  <b>ConditionID</b> value is always returned if set for the listing. <b>GetItem</b> also returns
     *  the item condition string value in the <b>ConditionDisplayName</b> field.
     *
     * @param int $conditionID
     * @return self
     */
    public function setConditionID($conditionID)
    {
        $this->conditionID = $conditionID;
        return $this;
    }

    /**
     * Gets as conditionDescription
     *
     * This string field is used by the seller to more clearly describe the condition of items that are not brand new.
     *  <br>
     *  <br>
     *  The <b>ConditionDescription</b> field is available for all categories, including categories where the condition type is not applicable (e.g., Antiques). This field is applicable for all item conditions except 'New', 'Brand New', 'New with tags', and 'New in box'. If <b>ConditionDescription</b> is used with these conditions (Condition IDs 1000-1499), eBay will simply ignore this field if included, and eBay will return a warning message to the user.
     *  <br>
     *  <br>
     *  This field should only be used to further clarify the condition of the used item. For example, "The right leg of the chair has a small scratch, and on the seat back there is a light blue stain about the shape and size of a coin." It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition type (<b>Item.ConditionID</b>), condition description, item description (<b>Item.Description</b>), and the listing's pictures do not contradict one another.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>ConditionDescription</b> field is optional For <b>Add</b>/<b>Revise</b>/<b>Relist</b> API calls.
     *  <b>ConditionDescription</b> is currently supported on the eBay US and US eBay Motors (0), UK (3), CA (2), CAFR (210), AU (15), AT (16), BEFR (23), BENL (123), FR (71), DE (77), IT (101), NL (146), ES (186), CH (193), IE (205) and PL (212) sites.
     *  </span>
     *  <br>
     *  The <b>ConditionDescription</b> field is returned by <b>GetItem</b> (and other related calls that return the Item object) if a condition description is specified in the listing.
     *  <br>
     *
     * @return string
     */
    public function getConditionDescription()
    {
        return $this->conditionDescription;
    }

    /**
     * Sets a new conditionDescription
     *
     * This string field is used by the seller to more clearly describe the condition of items that are not brand new.
     *  <br>
     *  <br>
     *  The <b>ConditionDescription</b> field is available for all categories, including categories where the condition type is not applicable (e.g., Antiques). This field is applicable for all item conditions except 'New', 'Brand New', 'New with tags', and 'New in box'. If <b>ConditionDescription</b> is used with these conditions (Condition IDs 1000-1499), eBay will simply ignore this field if included, and eBay will return a warning message to the user.
     *  <br>
     *  <br>
     *  This field should only be used to further clarify the condition of the used item. For example, "The right leg of the chair has a small scratch, and on the seat back there is a light blue stain about the shape and size of a coin." It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition type (<b>Item.ConditionID</b>), condition description, item description (<b>Item.Description</b>), and the listing's pictures do not contradict one another.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>ConditionDescription</b> field is optional For <b>Add</b>/<b>Revise</b>/<b>Relist</b> API calls.
     *  <b>ConditionDescription</b> is currently supported on the eBay US and US eBay Motors (0), UK (3), CA (2), CAFR (210), AU (15), AT (16), BEFR (23), BENL (123), FR (71), DE (77), IT (101), NL (146), ES (186), CH (193), IE (205) and PL (212) sites.
     *  </span>
     *  <br>
     *  The <b>ConditionDescription</b> field is returned by <b>GetItem</b> (and other related calls that return the Item object) if a condition description is specified in the listing.
     *  <br>
     *
     * @param string $conditionDescription
     * @return self
     */
    public function setConditionDescription($conditionDescription)
    {
        $this->conditionDescription = $conditionDescription;
        return $this;
    }

    /**
     * Gets as conditionDisplayName
     *
     * The human-readable label for the item condition.
     *  Display names are localized for the site on
     *  which they're listed (not necessarily the site on which
     *  they're viewed).<br>
     *  <br>
     *  Most categories use the same display name for the
     *  same condition ID. Some categories may override the display name
     *  based on buyer expectations for items in the category.
     *  For example, condition ID 1000 could be called
     *  "New" in one category and "New with tags" in another.<br>
     *  <br>
     *  Behind the scenes, eBay's search engine uses the ID
     *  (not the display name) to determine whether items are
     *  new, used, or refurbished.<br>
     *  <br>
     *  Only returned when the seller specified <b>ConditionID</b> in their
     *  listing.
     *
     * @return string
     */
    public function getConditionDisplayName()
    {
        return $this->conditionDisplayName;
    }

    /**
     * Sets a new conditionDisplayName
     *
     * The human-readable label for the item condition.
     *  Display names are localized for the site on
     *  which they're listed (not necessarily the site on which
     *  they're viewed).<br>
     *  <br>
     *  Most categories use the same display name for the
     *  same condition ID. Some categories may override the display name
     *  based on buyer expectations for items in the category.
     *  For example, condition ID 1000 could be called
     *  "New" in one category and "New with tags" in another.<br>
     *  <br>
     *  Behind the scenes, eBay's search engine uses the ID
     *  (not the display name) to determine whether items are
     *  new, used, or refurbished.<br>
     *  <br>
     *  Only returned when the seller specified <b>ConditionID</b> in their
     *  listing.
     *
     * @param string $conditionDisplayName
     * @return self
     */
    public function setConditionDisplayName($conditionDisplayName)
    {
        $this->conditionDisplayName = $conditionDisplayName;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * Tax exception category code. This is to be used only
     *  by sellers who have opted into sales tax being calculated
     *  by a sales tax calculation vendor. If you are interested
     *  in becoming a tax calculation vendor partner with eBay,
     *  contact developer-relations@ebay.com.
     *
     * @return string
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * Tax exception category code. This is to be used only
     *  by sellers who have opted into sales tax being calculated
     *  by a sales tax calculation vendor. If you are interested
     *  in becoming a tax calculation vendor partner with eBay,
     *  contact developer-relations@ebay.com.
     *
     * @param string $taxCategory
     * @return self
     */
    public function setTaxCategory($taxCategory)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }

    /**
     * Gets as quantityAvailableHint
     *
     * Indicates the type of message that will be returned describing the quantity
     *  available for the item.
     *
     * @return string
     */
    public function getQuantityAvailableHint()
    {
        return $this->quantityAvailableHint;
    }

    /**
     * Sets a new quantityAvailableHint
     *
     * Indicates the type of message that will be returned describing the quantity
     *  available for the item.
     *
     * @param string $quantityAvailableHint
     * @return self
     */
    public function setQuantityAvailableHint($quantityAvailableHint)
    {
        $this->quantityAvailableHint = $quantityAvailableHint;
        return $this;
    }

    /**
     * Gets as quantityThreshold
     *
     * The quantity threshold above which the seller prefers not to show the actual
     *  quantity available. Returned when the quantity available is greater than the
     *  value of quantity threshold. Currently, 10 is the only available value for
     *  this threshold.
     *
     * @return int
     */
    public function getQuantityThreshold()
    {
        return $this->quantityThreshold;
    }

    /**
     * Sets a new quantityThreshold
     *
     * The quantity threshold above which the seller prefers not to show the actual
     *  quantity available. Returned when the quantity available is greater than the
     *  value of quantity threshold. Currently, 10 is the only available value for
     *  this threshold.
     *
     * @param int $quantityThreshold
     * @return self
     */
    public function setQuantityThreshold($quantityThreshold)
    {
        $this->quantityThreshold = $quantityThreshold;
        return $this;
    }

    /**
     * Gets as discountPriceInfo
     *
     * This container provides information for an item that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites, while MAP is available only on the US site.
     *  <br><br>
     *  Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a 'special account flag' (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation items. STP is intended for eBay partners and their sellers only.
     *  <br><br>
     *  As a seller listing Discount Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing.
     *  <br><br>
     *  <b>For AddFixedPriceItem, RelistFixedPriceItem, ReviseFixedPriceItem, and VerifyAddFixedPriceItem</b>: If you are listing variations (MSKU items), use <b>Variation.DiscountPriceInfo</b> for each variation.
     *
     * @return \Nogrod\eBaySDK\MerchantData\DiscountPriceInfoType
     */
    public function getDiscountPriceInfo()
    {
        return $this->discountPriceInfo;
    }

    /**
     * Sets a new discountPriceInfo
     *
     * This container provides information for an item that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites, while MAP is available only on the US site.
     *  <br><br>
     *  Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a 'special account flag' (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation items. STP is intended for eBay partners and their sellers only.
     *  <br><br>
     *  As a seller listing Discount Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing.
     *  <br><br>
     *  <b>For AddFixedPriceItem, RelistFixedPriceItem, ReviseFixedPriceItem, and VerifyAddFixedPriceItem</b>: If you are listing variations (MSKU items), use <b>Variation.DiscountPriceInfo</b> for each variation.
     *
     * @param \Nogrod\eBaySDK\MerchantData\DiscountPriceInfoType $discountPriceInfo
     * @return self
     */
    public function setDiscountPriceInfo(\Nogrod\eBaySDK\MerchantData\DiscountPriceInfoType $discountPriceInfo)
    {
        $this->discountPriceInfo = $discountPriceInfo;
        return $this;
    }

    /**
     * Gets as sellerProvidedTitle
     *
     * A descriptive free-text title for a US or CA eBay Motors vehicle listing. This title appears below eBay's pre-filled listing title on the View Item page (not at the top of the View Item page). It's also appended to the listing title in search results (like a subtitle) on the US eBay Motors site. Keywords in this title help buyers find or distinguish your listing.
     *  <br><br>
     *  Applicable to listings in US eBay Motors Cars and Trucks, Motorcycle, and some of the Powersport, Boats and RV campers categories; or to Cars and Trucks listings on CA eBay Motors.
     *  <br><br>
     *  This replaces the older US and Canada eBay Motors Subtitle attribute (attribute ID 4148).
     *  <br>
     *
     * @return string
     */
    public function getSellerProvidedTitle()
    {
        return $this->sellerProvidedTitle;
    }

    /**
     * Sets a new sellerProvidedTitle
     *
     * A descriptive free-text title for a US or CA eBay Motors vehicle listing. This title appears below eBay's pre-filled listing title on the View Item page (not at the top of the View Item page). It's also appended to the listing title in search results (like a subtitle) on the US eBay Motors site. Keywords in this title help buyers find or distinguish your listing.
     *  <br><br>
     *  Applicable to listings in US eBay Motors Cars and Trucks, Motorcycle, and some of the Powersport, Boats and RV campers categories; or to Cars and Trucks listings on CA eBay Motors.
     *  <br><br>
     *  This replaces the older US and Canada eBay Motors Subtitle attribute (attribute ID 4148).
     *  <br>
     *
     * @param string $sellerProvidedTitle
     * @return self
     */
    public function setSellerProvidedTitle($sellerProvidedTitle)
    {
        $this->sellerProvidedTitle = $sellerProvidedTitle;
        return $this;
    }

    /**
     * Gets as vIN
     *
     * This field displays the Vehicle Identification Number, which is a unique serial number for a motor vehicle.
     *  <br><br>
     *  This field is applicable to listings in US eBay Motors Cars and Trucks (6001), Motorcycles (6024), Commercial Trucks (63732), RVs and Campers (50054), ATVs (6723), Snowmobiles (42595), and UTVs (173665); and to Cars and Trucks listings in CA, CAFR and AU eBay Motors. For vehicle categories that do not use VIN, call <b>GetCategorySpecifics</b> to determine applicable Item Specifics (such as 'Hull ID Number' for Boats).
     *  <br><br>
     *  For the US, CA, and CAFR eBay Motors sites, required for cars and trucks from model year 1981 and later. (The US developed national standards for VIN values in 1981.)
     *  <br><br>
     *  For the eBay Australia site, required for vehicles from model year 1989 or later. For the eBay Australia site, only appears on the View Item page if you also specify the date of first registration in the listing's Item Specifics.
     *  <br><br>
     *  Appears in the VIN field in the Item Specifics section of eBay's View Item page.
     *  <br>
     *
     * @return string
     */
    public function getVIN()
    {
        return $this->vIN;
    }

    /**
     * Sets a new vIN
     *
     * This field displays the Vehicle Identification Number, which is a unique serial number for a motor vehicle.
     *  <br><br>
     *  This field is applicable to listings in US eBay Motors Cars and Trucks (6001), Motorcycles (6024), Commercial Trucks (63732), RVs and Campers (50054), ATVs (6723), Snowmobiles (42595), and UTVs (173665); and to Cars and Trucks listings in CA, CAFR and AU eBay Motors. For vehicle categories that do not use VIN, call <b>GetCategorySpecifics</b> to determine applicable Item Specifics (such as 'Hull ID Number' for Boats).
     *  <br><br>
     *  For the US, CA, and CAFR eBay Motors sites, required for cars and trucks from model year 1981 and later. (The US developed national standards for VIN values in 1981.)
     *  <br><br>
     *  For the eBay Australia site, required for vehicles from model year 1989 or later. For the eBay Australia site, only appears on the View Item page if you also specify the date of first registration in the listing's Item Specifics.
     *  <br><br>
     *  Appears in the VIN field in the Item Specifics section of eBay's View Item page.
     *  <br>
     *
     * @param string $vIN
     * @return self
     */
    public function setVIN($vIN)
    {
        $this->vIN = $vIN;
        return $this;
    }

    /**
     * Gets as vINLink
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getVINLink()
    {
        return $this->vINLink;
    }

    /**
     * Sets a new vINLink
     *
     * This field is deprecated.
     *
     * @param string $vINLink
     * @return self
     */
    public function setVINLink($vINLink)
    {
        $this->vINLink = $vINLink;
        return $this;
    }

    /**
     * Gets as vRM
     *
     * Vehicle Registration Mark, which is a unique identifier for a motor vehicle in the UK.
     *  <br><br>
     *  Applicable to listings in UK eBay Motors Cars and Trucks, Motorcycle, and some Powersport categories.
     *  <br><br>
     *  Appears as a VRM field in the Item Specifics section of eBay's View Item page. On the View Item page, the VRM value is masked (i.e., only a portion of the value is shown to users). In the <b>GetItem</b> response, the VRM is only returned if the call is made by the seller (i.e., the AuthToken is associated with the vehicle's seller).
     *
     * @return string
     */
    public function getVRM()
    {
        return $this->vRM;
    }

    /**
     * Sets a new vRM
     *
     * Vehicle Registration Mark, which is a unique identifier for a motor vehicle in the UK.
     *  <br><br>
     *  Applicable to listings in UK eBay Motors Cars and Trucks, Motorcycle, and some Powersport categories.
     *  <br><br>
     *  Appears as a VRM field in the Item Specifics section of eBay's View Item page. On the View Item page, the VRM value is masked (i.e., only a portion of the value is shown to users). In the <b>GetItem</b> response, the VRM is only returned if the call is made by the seller (i.e., the AuthToken is associated with the vehicle's seller).
     *
     * @param string $vRM
     * @return self
     */
    public function setVRM($vRM)
    {
        $this->vRM = $vRM;
        return $this;
    }

    /**
     * Gets as vRMLink
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getVRMLink()
    {
        return $this->vRMLink;
    }

    /**
     * Sets a new vRMLink
     *
     * This field is deprecated.
     *
     * @param string $vRMLink
     * @return self
     */
    public function setVRMLink($vRMLink)
    {
        $this->vRMLink = $vRMLink;
        return $this;
    }

    /**
     * Gets as quantityInfo
     *
     * This container is used to set the minimum number of event tickets that should remain available after a buyer makes a purchase. This functionality allows the seller to avoid the possibility of being left with just one event ticket after a sale.
     *  <br><br>
     *  This container can be used when adding, revising, or relisting event tickets, and it will only be returned in <b>GetItem</b> if set for the listing.
     *
     * @return \Nogrod\eBaySDK\MerchantData\QuantityInfoType
     */
    public function getQuantityInfo()
    {
        return $this->quantityInfo;
    }

    /**
     * Sets a new quantityInfo
     *
     * This container is used to set the minimum number of event tickets that should remain available after a buyer makes a purchase. This functionality allows the seller to avoid the possibility of being left with just one event ticket after a sale.
     *  <br><br>
     *  This container can be used when adding, revising, or relisting event tickets, and it will only be returned in <b>GetItem</b> if set for the listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\QuantityInfoType $quantityInfo
     * @return self
     */
    public function setQuantityInfo(\Nogrod\eBaySDK\MerchantData\QuantityInfoType $quantityInfo)
    {
        $this->quantityInfo = $quantityInfo;
        return $this;
    }

    /**
     * Gets as sellerProfiles
     *
     * This container is used if the seller would like to use/reference Business Policies to create, revise, relist, or verify their listing. The seller's account must be opted in to Business Policies to use this container. If this container is used, exactly one Payment Business Policy, one Shipping Business Policy, and one Return Business Policy is applied to the listing. If the seller's account is not opted in to Business Policies, that seller may not use this container. Sellers must opt-in to Business Policies through My eBay or by using the <b>optInToProgram</b> call of the <b>eBay Account API</b>.
     *  <br><br>
     *  If Business Policies are applied to a listing, all payment, shipping, and return policy settings in these policies will override any other payment, shipping, or return policy legacy fields that are included in the call request.
     *  <br><br>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellerProfilesType
     */
    public function getSellerProfiles()
    {
        return $this->sellerProfiles;
    }

    /**
     * Sets a new sellerProfiles
     *
     * This container is used if the seller would like to use/reference Business Policies to create, revise, relist, or verify their listing. The seller's account must be opted in to Business Policies to use this container. If this container is used, exactly one Payment Business Policy, one Shipping Business Policy, and one Return Business Policy is applied to the listing. If the seller's account is not opted in to Business Policies, that seller may not use this container. Sellers must opt-in to Business Policies through My eBay or by using the <b>optInToProgram</b> call of the <b>eBay Account API</b>.
     *  <br><br>
     *  If Business Policies are applied to a listing, all payment, shipping, and return policy settings in these policies will override any other payment, shipping, or return policy legacy fields that are included in the call request.
     *  <br><br>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellerProfilesType $sellerProfiles
     * @return self
     */
    public function setSellerProfiles(\Nogrod\eBaySDK\MerchantData\SellerProfilesType $sellerProfiles)
    {
        $this->sellerProfiles = $sellerProfiles;
        return $this;
    }

    /**
     * Adds as shippingServiceCostOverride
     *
     * This container is used when the seller wants to override the flat shipping costs for all domestic and/or all international shipping services defined in the Business Policies shipping profile referenced in the <b>SellerProfiles.SellerShippingProfile.ShippingProfileID</b> field. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services.
     *  <br><br>
     *  A <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service that is defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of the Business Policies shipping profile.
     *  <br><br>
     *  Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping services in the Business Policies shipping profile.
     *  <br><br>
     *  <b>For Revise and Relist calls</b>: To delete all shipping service cost overrides when you revise or relist, specify <b>Item.ShippingServiceCostOverrideList</b> in <b>DeletedField</b>, and don't pass <b>ShippingServiceCostOverrideList</b> in the request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ShippingServiceCostOverrideType $shippingServiceCostOverride
     */
    public function addToShippingServiceCostOverrideList(\Nogrod\eBaySDK\MerchantData\ShippingServiceCostOverrideType $shippingServiceCostOverride)
    {
        $this->shippingServiceCostOverrideList[] = $shippingServiceCostOverride;
        return $this;
    }

    /**
     * isset shippingServiceCostOverrideList
     *
     * This container is used when the seller wants to override the flat shipping costs for all domestic and/or all international shipping services defined in the Business Policies shipping profile referenced in the <b>SellerProfiles.SellerShippingProfile.ShippingProfileID</b> field. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services.
     *  <br><br>
     *  A <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service that is defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of the Business Policies shipping profile.
     *  <br><br>
     *  Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping services in the Business Policies shipping profile.
     *  <br><br>
     *  <b>For Revise and Relist calls</b>: To delete all shipping service cost overrides when you revise or relist, specify <b>Item.ShippingServiceCostOverrideList</b> in <b>DeletedField</b>, and don't pass <b>ShippingServiceCostOverrideList</b> in the request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingServiceCostOverrideList($index)
    {
        return isset($this->shippingServiceCostOverrideList[$index]);
    }

    /**
     * unset shippingServiceCostOverrideList
     *
     * This container is used when the seller wants to override the flat shipping costs for all domestic and/or all international shipping services defined in the Business Policies shipping profile referenced in the <b>SellerProfiles.SellerShippingProfile.ShippingProfileID</b> field. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services.
     *  <br><br>
     *  A <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service that is defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of the Business Policies shipping profile.
     *  <br><br>
     *  Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping services in the Business Policies shipping profile.
     *  <br><br>
     *  <b>For Revise and Relist calls</b>: To delete all shipping service cost overrides when you revise or relist, specify <b>Item.ShippingServiceCostOverrideList</b> in <b>DeletedField</b>, and don't pass <b>ShippingServiceCostOverrideList</b> in the request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingServiceCostOverrideList($index)
    {
        unset($this->shippingServiceCostOverrideList[$index]);
    }

    /**
     * Gets as shippingServiceCostOverrideList
     *
     * This container is used when the seller wants to override the flat shipping costs for all domestic and/or all international shipping services defined in the Business Policies shipping profile referenced in the <b>SellerProfiles.SellerShippingProfile.ShippingProfileID</b> field. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services.
     *  <br><br>
     *  A <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service that is defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of the Business Policies shipping profile.
     *  <br><br>
     *  Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping services in the Business Policies shipping profile.
     *  <br><br>
     *  <b>For Revise and Relist calls</b>: To delete all shipping service cost overrides when you revise or relist, specify <b>Item.ShippingServiceCostOverrideList</b> in <b>DeletedField</b>, and don't pass <b>ShippingServiceCostOverrideList</b> in the request.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ShippingServiceCostOverrideType[]
     */
    public function getShippingServiceCostOverrideList()
    {
        return $this->shippingServiceCostOverrideList;
    }

    /**
     * Sets a new shippingServiceCostOverrideList
     *
     * This container is used when the seller wants to override the flat shipping costs for all domestic and/or all international shipping services defined in the Business Policies shipping profile referenced in the <b>SellerProfiles.SellerShippingProfile.ShippingProfileID</b> field. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services.
     *  <br><br>
     *  A <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service that is defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of the Business Policies shipping profile.
     *  <br><br>
     *  Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping services in the Business Policies shipping profile.
     *  <br><br>
     *  <b>For Revise and Relist calls</b>: To delete all shipping service cost overrides when you revise or relist, specify <b>Item.ShippingServiceCostOverrideList</b> in <b>DeletedField</b>, and don't pass <b>ShippingServiceCostOverrideList</b> in the request.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ShippingServiceCostOverrideType[] $shippingServiceCostOverrideList
     * @return self
     */
    public function setShippingServiceCostOverrideList(array $shippingServiceCostOverrideList)
    {
        $this->shippingServiceCostOverrideList = $shippingServiceCostOverrideList;
        return $this;
    }

    /**
     * Gets as shippingOverride
     *
     * This field is reserved for internal or future use.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ShippingOverrideType
     */
    public function getShippingOverride()
    {
        return $this->shippingOverride;
    }

    /**
     * Sets a new shippingOverride
     *
     * This field is reserved for internal or future use.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ShippingOverrideType $shippingOverride
     * @return self
     */
    public function setShippingOverride(\Nogrod\eBaySDK\MerchantData\ShippingOverrideType $shippingOverride)
    {
        $this->shippingOverride = $shippingOverride;
        return $this;
    }

    /**
     * Gets as shippingPackageDetails
     *
     * Container consisting of dimension and size details related to a shipping package in which an item will be sent. The information in this container is applicable if the seller is using calculated shipping or flat rate shipping using shipping rate tables with weight surcharges. This container is only returned in the <b>Get</b> calls if specified for the item.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ShipPackageDetailsType
     */
    public function getShippingPackageDetails()
    {
        return $this->shippingPackageDetails;
    }

    /**
     * Sets a new shippingPackageDetails
     *
     * Container consisting of dimension and size details related to a shipping package in which an item will be sent. The information in this container is applicable if the seller is using calculated shipping or flat rate shipping using shipping rate tables with weight surcharges. This container is only returned in the <b>Get</b> calls if specified for the item.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ShipPackageDetailsType $shippingPackageDetails
     * @return self
     */
    public function setShippingPackageDetails(\Nogrod\eBaySDK\MerchantData\ShipPackageDetailsType $shippingPackageDetails)
    {
        $this->shippingPackageDetails = $shippingPackageDetails;
        return $this;
    }

    /**
     * Gets as topRatedListing
     *
     * This boolean field is returned as <code>true</code> if the listing was created by a Top-Rated Seller and the listing has all of the requirements that qualifies it as a Top-Rated Plus listing. The Top-Rated Seller program is only available on the US, UK, and Germany sites. See the
     *  <a href="https://pages.ebay.com/help/sell/top-rated.html#what">Top-Rated Seller requirements</a> help topic for more information on qualifying as a Top-Rated Seller and the <a href="https://pages.ebay.com/help/sell/top-rated.html#plus">Top-Rated Plus listing requirements</a> help topic for more information on what a listing must offer to qualify as a Top-Rated Plus listing and get the Top-Rated Plus badge. Information on the overall program can be found on the <a href="https://pages.ebay.com/sellerinformation/build-your-business-online/status-standards/top-rated-seller.html">Top-Rated Seller home page</a> in the Seller Center.
     *
     * @return bool
     */
    public function getTopRatedListing()
    {
        return $this->topRatedListing;
    }

    /**
     * Sets a new topRatedListing
     *
     * This boolean field is returned as <code>true</code> if the listing was created by a Top-Rated Seller and the listing has all of the requirements that qualifies it as a Top-Rated Plus listing. The Top-Rated Seller program is only available on the US, UK, and Germany sites. See the
     *  <a href="https://pages.ebay.com/help/sell/top-rated.html#what">Top-Rated Seller requirements</a> help topic for more information on qualifying as a Top-Rated Seller and the <a href="https://pages.ebay.com/help/sell/top-rated.html#plus">Top-Rated Plus listing requirements</a> help topic for more information on what a listing must offer to qualify as a Top-Rated Plus listing and get the Top-Rated Plus badge. Information on the overall program can be found on the <a href="https://pages.ebay.com/sellerinformation/build-your-business-online/status-standards/top-rated-seller.html">Top-Rated Seller home page</a> in the Seller Center.
     *
     * @param bool $topRatedListing
     * @return self
     */
    public function setTopRatedListing($topRatedListing)
    {
        $this->topRatedListing = $topRatedListing;
        return $this;
    }

    /**
     * Gets as quantityRestrictionPerBuyer
     *
     * This container is used by the seller to restrict the quantity of items that may be purchased by one buyer during the duration of a fixed-price listing (single or multi-variation). This is an optional container that can be used with an <b>Add</b>, <b>Revise</b>, or <b>Relist</b> call.
     *  <br><br>
     *  This container is not applicable to auction listings.
     *
     * @return \Nogrod\eBaySDK\MerchantData\QuantityRestrictionPerBuyerInfoType
     */
    public function getQuantityRestrictionPerBuyer()
    {
        return $this->quantityRestrictionPerBuyer;
    }

    /**
     * Sets a new quantityRestrictionPerBuyer
     *
     * This container is used by the seller to restrict the quantity of items that may be purchased by one buyer during the duration of a fixed-price listing (single or multi-variation). This is an optional container that can be used with an <b>Add</b>, <b>Revise</b>, or <b>Relist</b> call.
     *  <br><br>
     *  This container is not applicable to auction listings.
     *
     * @param \Nogrod\eBaySDK\MerchantData\QuantityRestrictionPerBuyerInfoType $quantityRestrictionPerBuyer
     * @return self
     */
    public function setQuantityRestrictionPerBuyer(\Nogrod\eBaySDK\MerchantData\QuantityRestrictionPerBuyerInfoType $quantityRestrictionPerBuyer)
    {
        $this->quantityRestrictionPerBuyer = $quantityRestrictionPerBuyer;
        return $this;
    }

    /**
     * Gets as floorPrice
     *
     * This value sets the minimum price threshold for a seller's product price in a fixed-price listing. Regardless of the product price on eBay Value Box or Amazon listings, the seller's product price will not be reduced lower than this dollar value.
     *  <br><br>
     *  This value is only applicable to sellers enabled to use the <b>Dynamic Pricing</b> API, and if a dynamic pricing rule is assigned to the listing's product.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getFloorPrice()
    {
        return $this->floorPrice;
    }

    /**
     * Sets a new floorPrice
     *
     * This value sets the minimum price threshold for a seller's product price in a fixed-price listing. Regardless of the product price on eBay Value Box or Amazon listings, the seller's product price will not be reduced lower than this dollar value.
     *  <br><br>
     *  This value is only applicable to sellers enabled to use the <b>Dynamic Pricing</b> API, and if a dynamic pricing rule is assigned to the listing's product.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $floorPrice
     * @return self
     */
    public function setFloorPrice(\Nogrod\eBaySDK\MerchantData\AmountType $floorPrice)
    {
        $this->floorPrice = $floorPrice;
        return $this;
    }

    /**
     * Gets as ceilingPrice
     *
     * This value sets the maximum price threshold for a seller's product price in a fixed-price listing. Regardless of the product price on Amazon or eBay Value Box, the seller's product price will not be raised higher than this dollar value.
     *  <br><br>
     *  This value is only applicable to sellers enabled to use the <b>Dynamic Pricing</b> API, and if a dynamic pricing rule is assigned to the listing's product. If this field is not specified through the <b>Dynamic Pricing</b> API, an eBay system-level threshold is used to avoid any undesirable results.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getCeilingPrice()
    {
        return $this->ceilingPrice;
    }

    /**
     * Sets a new ceilingPrice
     *
     * This value sets the maximum price threshold for a seller's product price in a fixed-price listing. Regardless of the product price on Amazon or eBay Value Box, the seller's product price will not be raised higher than this dollar value.
     *  <br><br>
     *  This value is only applicable to sellers enabled to use the <b>Dynamic Pricing</b> API, and if a dynamic pricing rule is assigned to the listing's product. If this field is not specified through the <b>Dynamic Pricing</b> API, an eBay system-level threshold is used to avoid any undesirable results.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $ceilingPrice
     * @return self
     */
    public function setCeilingPrice(\Nogrod\eBaySDK\MerchantData\AmountType $ceilingPrice)
    {
        $this->ceilingPrice = $ceilingPrice;
        return $this;
    }

    /**
     * Gets as isIntermediatedShippingEligible
     *
     * This boolean field is returned as <code>true</code> if the item is eligible is to be shipped internationally via eBay's Global Shipping Program. With the Global Shipping Program, the buyer pays a single shipping fee for the order, which includes the domestic shipping leg, the international shipping leg, and handling charges, and import charges.
     *  <br/><br/>
     *  eBay uses a shipping partner that allows the seller to ship the package to a domestic location and then the shipping partner takes care of the rest, including the international shipping leg.
     *
     * @return bool
     */
    public function getIsIntermediatedShippingEligible()
    {
        return $this->isIntermediatedShippingEligible;
    }

    /**
     * Sets a new isIntermediatedShippingEligible
     *
     * This boolean field is returned as <code>true</code> if the item is eligible is to be shipped internationally via eBay's Global Shipping Program. With the Global Shipping Program, the buyer pays a single shipping fee for the order, which includes the domestic shipping leg, the international shipping leg, and handling charges, and import charges.
     *  <br/><br/>
     *  eBay uses a shipping partner that allows the seller to ship the package to a domestic location and then the shipping partner takes care of the rest, including the international shipping leg.
     *
     * @param bool $isIntermediatedShippingEligible
     * @return self
     */
    public function setIsIntermediatedShippingEligible($isIntermediatedShippingEligible)
    {
        $this->isIntermediatedShippingEligible = $isIntermediatedShippingEligible;
        return $this;
    }

    /**
     * Gets as unitInfo
     *
     * This container provides information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare prices. eBay uses the <b>UnitType</b> and <b>UnitQuantity</b> values and the item's listed price to calculate and display the per-unit price on eBay EU sites.
     *  <br/><br/>
     *  This container will only be returned if price per unit information exists for the listing, and the <b>IncludeItemSpecifics</b> field was included in the call request and set to <code>true</code>.
     *
     * @return \Nogrod\eBaySDK\MerchantData\UnitInfoType
     */
    public function getUnitInfo()
    {
        return $this->unitInfo;
    }

    /**
     * Sets a new unitInfo
     *
     * This container provides information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare prices. eBay uses the <b>UnitType</b> and <b>UnitQuantity</b> values and the item's listed price to calculate and display the per-unit price on eBay EU sites.
     *  <br/><br/>
     *  This container will only be returned if price per unit information exists for the listing, and the <b>IncludeItemSpecifics</b> field was included in the call request and set to <code>true</code>.
     *
     * @param \Nogrod\eBaySDK\MerchantData\UnitInfoType $unitInfo
     * @return self
     */
    public function setUnitInfo(\Nogrod\eBaySDK\MerchantData\UnitInfoType $unitInfo)
    {
        $this->unitInfo = $unitInfo;
        return $this;
    }

    /**
     * Gets as relistParentID
     *
     * The identifier of the original listing that contained the item before the item was relisted. This field is only returned for an item that was relisted.
     *
     * @return int
     */
    public function getRelistParentID()
    {
        return $this->relistParentID;
    }

    /**
     * Sets a new relistParentID
     *
     * The identifier of the original listing that contained the item before the item was relisted. This field is only returned for an item that was relisted.
     *
     * @param int $relistParentID
     * @return self
     */
    public function setRelistParentID($relistParentID)
    {
        $this->relistParentID = $relistParentID;
        return $this;
    }

    /**
     * Gets as conditionDefinition
     *
     * This string value provides more details about the item's condition.
     *
     * @return string
     */
    public function getConditionDefinition()
    {
        return $this->conditionDefinition;
    }

    /**
     * Sets a new conditionDefinition
     *
     * This string value provides more details about the item's condition.
     *
     * @param string $conditionDefinition
     * @return self
     */
    public function setConditionDefinition($conditionDefinition)
    {
        $this->conditionDefinition = $conditionDefinition;
        return $this;
    }

    /**
     * Gets as hideFromSearch
     *
     * This boolean field is returned as <code>true</code> if the listing has been hidden from all searches occurring on eBay. If a listing is hidden from eBay searches, the reason can be found in the <b>ReasonHideFromSearch</b> field.
     *
     * @return bool
     */
    public function getHideFromSearch()
    {
        return $this->hideFromSearch;
    }

    /**
     * Sets a new hideFromSearch
     *
     * This boolean field is returned as <code>true</code> if the listing has been hidden from all searches occurring on eBay. If a listing is hidden from eBay searches, the reason can be found in the <b>ReasonHideFromSearch</b> field.
     *
     * @param bool $hideFromSearch
     * @return self
     */
    public function setHideFromSearch($hideFromSearch)
    {
        $this->hideFromSearch = $hideFromSearch;
        return $this;
    }

    /**
     * Gets as reasonHideFromSearch
     *
     * This field is returned only when the listing is currently being hidden from any searches occurring on eBay. Listings may be hidden from search if an active listing is currently out of stock or if the listing has been determined by eBay to be a duplicate listing.
     *
     * @return string
     */
    public function getReasonHideFromSearch()
    {
        return $this->reasonHideFromSearch;
    }

    /**
     * Sets a new reasonHideFromSearch
     *
     * This field is returned only when the listing is currently being hidden from any searches occurring on eBay. Listings may be hidden from search if an active listing is currently out of stock or if the listing has been determined by eBay to be a duplicate listing.
     *
     * @param string $reasonHideFromSearch
     * @return self
     */
    public function setReasonHideFromSearch($reasonHideFromSearch)
    {
        $this->reasonHideFromSearch = $reasonHideFromSearch;
        return $this;
    }

    /**
     * Gets as includeRecommendations
     *
     * This boolean field should be included and set to <code>true</code> if the seller wishes to see listing recommendations in the call response via the <b>ListingRecommendations</b> container. Listing recommendations provide one or more messages to the seller on recommendations on:
     *  <b></b>
     *  <ul>
     *  <li>improving a listing </li>
     *  <li>bringing a listing up to standard in regards to Top-Rated seller/listing requirements </li>
     *  <li>mandated or recommended Item Specifics </li>
     *  <li>picture quality requirements </li>
     *  <li>pricing and/or listing format recommendations </li>
     *  <li>recommended keywords and/or Item Specifics in a Title </li>
     *  <li>offering fast handling (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge </li>
     *  </ul>
     *
     * @return bool
     */
    public function getIncludeRecommendations()
    {
        return $this->includeRecommendations;
    }

    /**
     * Sets a new includeRecommendations
     *
     * This boolean field should be included and set to <code>true</code> if the seller wishes to see listing recommendations in the call response via the <b>ListingRecommendations</b> container. Listing recommendations provide one or more messages to the seller on recommendations on:
     *  <b></b>
     *  <ul>
     *  <li>improving a listing </li>
     *  <li>bringing a listing up to standard in regards to Top-Rated seller/listing requirements </li>
     *  <li>mandated or recommended Item Specifics </li>
     *  <li>picture quality requirements </li>
     *  <li>pricing and/or listing format recommendations </li>
     *  <li>recommended keywords and/or Item Specifics in a Title </li>
     *  <li>offering fast handling (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge </li>
     *  </ul>
     *
     * @param bool $includeRecommendations
     * @return self
     */
    public function setIncludeRecommendations($includeRecommendations)
    {
        $this->includeRecommendations = $includeRecommendations;
        return $this;
    }

    /**
     * Gets as pickupInStoreDetails
     *
     * This container is used in <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> listing calls by the seller to enable a listing with the 'In-Store Pickup' feature. The 'In-Store Pickup' feature is only available to a limited number of large retail merchants in the US, Canada, UK, Germany, and Australia marketplaces.
     *  <br/><br/>
     *  This container is returned in the 'Get' calls if the listing is enabled with the In-Store Pickup feature.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PickupInStoreDetailsType
     */
    public function getPickupInStoreDetails()
    {
        return $this->pickupInStoreDetails;
    }

    /**
     * Sets a new pickupInStoreDetails
     *
     * This container is used in <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> listing calls by the seller to enable a listing with the 'In-Store Pickup' feature. The 'In-Store Pickup' feature is only available to a limited number of large retail merchants in the US, Canada, UK, Germany, and Australia marketplaces.
     *  <br/><br/>
     *  This container is returned in the 'Get' calls if the listing is enabled with the In-Store Pickup feature.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PickupInStoreDetailsType $pickupInStoreDetails
     * @return self
     */
    public function setPickupInStoreDetails(\Nogrod\eBaySDK\MerchantData\PickupInStoreDetailsType $pickupInStoreDetails)
    {
        $this->pickupInStoreDetails = $pickupInStoreDetails;
        return $this;
    }

    /**
     * Gets as siteId
     *
     * The unique identifier of the eBay site on which the item is listed. If the Site ID is already passed in as an HTTP header, this field is not needed. If Site ID is specified in the HTTP header and through this request field, the value in this field will override the value in the HTTP headerWhen this is given we would ignore the site Id, which is given in header. See <strong>SiteCodeType</strong> for a full list of Site IDs for the eBay sites that are compatible with the Trading API.
     *
     * @return int
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Sets a new siteId
     *
     * The unique identifier of the eBay site on which the item is listed. If the Site ID is already passed in as an HTTP header, this field is not needed. If Site ID is specified in the HTTP header and through this request field, the value in this field will override the value in the HTTP headerWhen this is given we would ignore the site Id, which is given in header. See <strong>SiteCodeType</strong> for a full list of Site IDs for the eBay sites that are compatible with the Trading API.
     *
     * @param int $siteId
     * @return self
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * Gets as ignoreQuantity
     *
     * This boolean field is returned as <code>true</code> if the actual quantity of a multiple-quantity, fixed-price listing (indicated in the <b>Item.Quantity</b> field) can not be accurately determined by eBay.
     *
     * @return bool
     */
    public function getIgnoreQuantity()
    {
        return $this->ignoreQuantity;
    }

    /**
     * Sets a new ignoreQuantity
     *
     * This boolean field is returned as <code>true</code> if the actual quantity of a multiple-quantity, fixed-price listing (indicated in the <b>Item.Quantity</b> field) can not be accurately determined by eBay.
     *
     * @param bool $ignoreQuantity
     * @return self
     */
    public function setIgnoreQuantity($ignoreQuantity)
    {
        $this->ignoreQuantity = $ignoreQuantity;
        return $this;
    }

    /**
     * Gets as availableForPickupDropOff
     *
     * This field is only returned if <code>true</code>, and indicates that the 'Click and Collect' feature is available for this item. With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK, Australia, and Germany sites, and then pick up their order from the nearest 'eBay Collection Point'. Note that an item may be eligible for Click and Collect, but this logistics option will only surface if the prospective buyer is within the vicinity of an 'eBay Collection Point'.
     *  <br/><br/>
     *  The Click and Collect feature is only available on the eBay UK, Australia, and Germany sites. For more information about Click and Collect, see the
     *  <a href="https://ebay.co.uk/clickandcollect/">Click and Collect</a> home page on the eBay UK site, the <a href="https://sellercentre.ebay.com.au/click-and-collect">Click and Collect</a> home page on the eBay Australia site, or the <a href="https://pages.ebay.de/einkaufen/click-and-collect.html">Click and Collect</a> home page on the eBay Germany site.
     *  <br>
     *  <br>
     *  Not all categories on the UK, Australia, and Germany sites support Click and Collect listings. To verify if a specific category on these eBay sites support Click and Collect listings, use the <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategoryFeatures.html">GetCategoryFeatures</a> call, passing in one or more <b>CategoryID</b> values and a <b>PickupDropOffEnabled</b> value in the <b>FeatureID</b> field.
     *  <br/><br/>
     *  Look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings will be automatically evaluated for Click and Collect eligibility.
     *  </span>
     *
     * @return bool
     */
    public function getAvailableForPickupDropOff()
    {
        return $this->availableForPickupDropOff;
    }

    /**
     * Sets a new availableForPickupDropOff
     *
     * This field is only returned if <code>true</code>, and indicates that the 'Click and Collect' feature is available for this item. With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK, Australia, and Germany sites, and then pick up their order from the nearest 'eBay Collection Point'. Note that an item may be eligible for Click and Collect, but this logistics option will only surface if the prospective buyer is within the vicinity of an 'eBay Collection Point'.
     *  <br/><br/>
     *  The Click and Collect feature is only available on the eBay UK, Australia, and Germany sites. For more information about Click and Collect, see the
     *  <a href="https://ebay.co.uk/clickandcollect/">Click and Collect</a> home page on the eBay UK site, the <a href="https://sellercentre.ebay.com.au/click-and-collect">Click and Collect</a> home page on the eBay Australia site, or the <a href="https://pages.ebay.de/einkaufen/click-and-collect.html">Click and Collect</a> home page on the eBay Germany site.
     *  <br>
     *  <br>
     *  Not all categories on the UK, Australia, and Germany sites support Click and Collect listings. To verify if a specific category on these eBay sites support Click and Collect listings, use the <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategoryFeatures.html">GetCategoryFeatures</a> call, passing in one or more <b>CategoryID</b> values and a <b>PickupDropOffEnabled</b> value in the <b>FeatureID</b> field.
     *  <br/><br/>
     *  Look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings will be automatically evaluated for Click and Collect eligibility.
     *  </span>
     *
     * @param bool $availableForPickupDropOff
     * @return self
     */
    public function setAvailableForPickupDropOff($availableForPickupDropOff)
    {
        $this->availableForPickupDropOff = $availableForPickupDropOff;
        return $this;
    }

    /**
     * Gets as eligibleForPickupDropOff
     *
     * For 'Click and Collect' eligible sellers, this field was once used to set 'Click and Collect' eligibility at the listing level. However, now the seller can only opt in to 'Click and Collect' at the account level, and then each of their listings will be automatically evaluated for 'Click and Collect' eligibility.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Until this field is fully deprecated in the Trading WSDL (and in Add/Revise/Relist/Verify calls), it can still be used, but it will have no functional affect. However, if set in an Add/Revise/Relist/Verify call, it will get returned in <b>GetItem</b>, but it won't be a true indicator if the item is available for the 'Click and Collect' logistics type. Instead, the <b>Item.AvailableForPickupDropOff</b> field should be referenced to see if the item is available for 'Click and Collect'.
     *  </span>
     *
     * @return bool
     */
    public function getEligibleForPickupDropOff()
    {
        return $this->eligibleForPickupDropOff;
    }

    /**
     * Sets a new eligibleForPickupDropOff
     *
     * For 'Click and Collect' eligible sellers, this field was once used to set 'Click and Collect' eligibility at the listing level. However, now the seller can only opt in to 'Click and Collect' at the account level, and then each of their listings will be automatically evaluated for 'Click and Collect' eligibility.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Until this field is fully deprecated in the Trading WSDL (and in Add/Revise/Relist/Verify calls), it can still be used, but it will have no functional affect. However, if set in an Add/Revise/Relist/Verify call, it will get returned in <b>GetItem</b>, but it won't be a true indicator if the item is available for the 'Click and Collect' logistics type. Instead, the <b>Item.AvailableForPickupDropOff</b> field should be referenced to see if the item is available for 'Click and Collect'.
     *  </span>
     *
     * @param bool $eligibleForPickupDropOff
     * @return self
     */
    public function setEligibleForPickupDropOff($eligibleForPickupDropOff)
    {
        $this->eligibleForPickupDropOff = $eligibleForPickupDropOff;
        return $this;
    }

    /**
     * Gets as liveAuction
     *
     * <span class="tablenote"><b>Note:</b> This field is no longer applicable as eBay Live Auctions are no longer being held as of September 1, 2018. If this field is used in an Add/Revise/Relist call, it will be ignored and dropped.
     *  </span>
     *
     * @return bool
     */
    public function getLiveAuction()
    {
        return $this->liveAuction;
    }

    /**
     * Sets a new liveAuction
     *
     * <span class="tablenote"><b>Note:</b> This field is no longer applicable as eBay Live Auctions are no longer being held as of September 1, 2018. If this field is used in an Add/Revise/Relist call, it will be ignored and dropped.
     *  </span>
     *
     * @param bool $liveAuction
     * @return self
     */
    public function setLiveAuction($liveAuction)
    {
        $this->liveAuction = $liveAuction;
        return $this;
    }

    /**
     * Gets as digitalGoodInfo
     *
     * This container is used in <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> listing calls to designate the listing as a digital gift card listing. It is also returned in <strong>GetItem</strong> to indicate that the listing contains a digital gift card.
     *
     * @return \Nogrod\eBaySDK\MerchantData\DigitalGoodInfoType
     */
    public function getDigitalGoodInfo()
    {
        return $this->digitalGoodInfo;
    }

    /**
     * Sets a new digitalGoodInfo
     *
     * This container is used in <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> listing calls to designate the listing as a digital gift card listing. It is also returned in <strong>GetItem</strong> to indicate that the listing contains a digital gift card.
     *
     * @param \Nogrod\eBaySDK\MerchantData\DigitalGoodInfoType $digitalGoodInfo
     * @return self
     */
    public function setDigitalGoodInfo(\Nogrod\eBaySDK\MerchantData\DigitalGoodInfoType $digitalGoodInfo)
    {
        $this->digitalGoodInfo = $digitalGoodInfo;
        return $this;
    }

    /**
     * Gets as eBayPlus
     *
     * If <code>true</code>, this item is being offered under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be able to offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia marketplaces.
     *  </span>
     *
     * @return bool
     */
    public function getEBayPlus()
    {
        return $this->eBayPlus;
    }

    /**
     * Sets a new eBayPlus
     *
     * If <code>true</code>, this item is being offered under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be able to offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia marketplaces.
     *  </span>
     *
     * @param bool $eBayPlus
     * @return self
     */
    public function setEBayPlus($eBayPlus)
    {
        $this->eBayPlus = $eBayPlus;
        return $this;
    }

    /**
     * Gets as eBayPlusEligible
     *
     * If <code>true</code>, this item is eligible to be listed under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia marketplaces.
     *  </span>
     *
     * @return bool
     */
    public function getEBayPlusEligible()
    {
        return $this->eBayPlusEligible;
    }

    /**
     * Sets a new eBayPlusEligible
     *
     * If <code>true</code>, this item is eligible to be listed under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia marketplaces.
     *  </span>
     *
     * @param bool $eBayPlusEligible
     * @return self
     */
    public function setEBayPlusEligible($eBayPlusEligible)
    {
        $this->eBayPlusEligible = $eBayPlusEligible;
        return $this;
    }

    /**
     * Gets as eMailDeliveryAvailable
     *
     * The boolean value that is returned in this field will indicate whether or not a digital gift card can be delivered by email to the buyer or recipient of the gift card. This field is only applicable to digital gift card listings.
     *
     * @return bool
     */
    public function getEMailDeliveryAvailable()
    {
        return $this->eMailDeliveryAvailable;
    }

    /**
     * Sets a new eMailDeliveryAvailable
     *
     * The boolean value that is returned in this field will indicate whether or not a digital gift card can be delivered by email to the buyer or recipient of the gift card. This field is only applicable to digital gift card listings.
     *
     * @param bool $eMailDeliveryAvailable
     * @return self
     */
    public function setEMailDeliveryAvailable($eMailDeliveryAvailable)
    {
        $this->eMailDeliveryAvailable = $eMailDeliveryAvailable;
        return $this;
    }

    /**
     * Gets as isSecureDescription
     *
     * This boolean field indicates whether or not the listing description is HTTPS secure/compliant. To be HTTPS secure/compliant, the <b>Item.Description</b> field may not contain any links to site pages that use the HTTP (and not HTTPS) protocol. This field will be returned with each listing that is found unless one or more <b>OutputSelector</b> fields are used and <code>Item.IsSecureDescription</code> is not one of the values passed in to one of these fields.
     *  <br/><br/>
     *  If this field is returned as <code>true</code>, the listing is HTTPs secure/compliant, and the whole listing description will appear on the View Item page for the listing. If this field is returned as <code>false</code>, the listing is not HTTPs secure/compliant, and only a partial/brief listing description will appear on the View Item page for the listing, with a link to the full listing description that will load in another tab.
     *  <br/><br/>
     *  If the listing description is not HTTPS compliant, the fix is to call <b>ReviseItem</b> or <b>ReviseFixedPriceItem</b> and update the <b>Item.Description</b> field, removing all links to HTTP pages.
     *  <br/><br/>
     *  For more information about why eBay made this change, please see the <a href="http://pages.ebay.com/seller-center/seller-updates/2017-fall/policy-updates.html" target="_blank">Policy Updates</a> page of the Fall 2017 Seller Updates page.
     *
     * @return bool
     */
    public function getIsSecureDescription()
    {
        return $this->isSecureDescription;
    }

    /**
     * Sets a new isSecureDescription
     *
     * This boolean field indicates whether or not the listing description is HTTPS secure/compliant. To be HTTPS secure/compliant, the <b>Item.Description</b> field may not contain any links to site pages that use the HTTP (and not HTTPS) protocol. This field will be returned with each listing that is found unless one or more <b>OutputSelector</b> fields are used and <code>Item.IsSecureDescription</code> is not one of the values passed in to one of these fields.
     *  <br/><br/>
     *  If this field is returned as <code>true</code>, the listing is HTTPs secure/compliant, and the whole listing description will appear on the View Item page for the listing. If this field is returned as <code>false</code>, the listing is not HTTPs secure/compliant, and only a partial/brief listing description will appear on the View Item page for the listing, with a link to the full listing description that will load in another tab.
     *  <br/><br/>
     *  If the listing description is not HTTPS compliant, the fix is to call <b>ReviseItem</b> or <b>ReviseFixedPriceItem</b> and update the <b>Item.Description</b> field, removing all links to HTTP pages.
     *  <br/><br/>
     *  For more information about why eBay made this change, please see the <a href="http://pages.ebay.com/seller-center/seller-updates/2017-fall/policy-updates.html" target="_blank">Policy Updates</a> page of the Fall 2017 Seller Updates page.
     *
     * @param bool $isSecureDescription
     * @return self
     */
    public function setIsSecureDescription($isSecureDescription)
    {
        $this->isSecureDescription = $isSecureDescription;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getApplicationData();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ApplicationData", $value);
        }
        $value = $this->getAttributeSetArray();
        if (null !== $value && !empty($this->getAttributeSetArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AttributeSetArray", array_map(function ($v) {
                return ["AttributeSet" => $v];
            }, $value));
        }
        $value = $this->getAttributeArray();
        if (null !== $value && !empty($this->getAttributeArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AttributeArray", array_map(function ($v) {
                return ["Attribute" => $v];
            }, $value));
        }
        $value = $this->getLookupAttributeArray();
        if (null !== $value && !empty($this->getLookupAttributeArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LookupAttributeArray", array_map(function ($v) {
                return ["LookupAttribute" => $v];
            }, $value));
        }
        $value = $this->getAutoPay();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AutoPay", $value);
        }
        $value = $this->getBiddingDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BiddingDetails", $value);
        }
        $value = $this->getBuyerProtection();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerProtection", $value);
        }
        $value = $this->getBuyItNowPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyItNowPrice", $value);
        }
        $value = $this->getCategoryMappingAllowed();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryMappingAllowed", $value);
        }
        $value = $this->getCharity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Charity", $value);
        }
        $value = $this->getCountry();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Country", $value);
        }
        $value = $this->getCrossPromotion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CrossPromotion", $value);
        }
        $value = $this->getCurrency();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Currency", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getDescriptionReviseMode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DescriptionReviseMode", $value);
        }
        $value = $this->getDistance();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Distance", $value);
        }
        $value = $this->getHitCounter();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HitCounter", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getListingDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingDetails", $value);
        }
        $value = $this->getListingDesigner();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingDesigner", $value);
        }
        $value = $this->getListingDuration();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingDuration", $value);
        }
        $value = $this->getListingEnhancement();
        if (null !== $value && !empty($this->getListingEnhancement())) {
            $writer->write(array_map(function ($v) {
                return ["ListingEnhancement" => $v];
            }, $value));
        }
        $value = $this->getListingType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingType", $value);
        }
        $value = $this->getLocation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Location", $value);
        }
        $value = $this->getLotSize();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LotSize", $value);
        }
        $value = $this->getPartnerCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PartnerCode", $value);
        }
        $value = $this->getPartnerName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PartnerName", $value);
        }
        $value = $this->getPaymentDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentDetails", $value);
        }
        $value = $this->getPaymentMethods();
        if (null !== $value && !empty($this->getPaymentMethods())) {
            $writer->write(array_map(function ($v) {
                return ["PaymentMethods" => $v];
            }, $value));
        }
        $value = $this->getPayPalEmailAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalEmailAddress", $value);
        }
        $value = $this->getPrimaryCategory();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PrimaryCategory", $value);
        }
        $value = $this->getPrivateListing();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PrivateListing", $value);
        }
        $value = $this->getProductListingDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductListingDetails", $value);
        }
        $value = $this->getQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Quantity", $value);
        }
        $value = $this->getPrivateNotes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PrivateNotes", $value);
        }
        $value = $this->getRegionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RegionID", $value);
        }
        $value = $this->getRelistLink();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RelistLink", $value);
        }
        $value = $this->getReservePrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReservePrice", $value);
        }
        $value = $this->getReviseStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviseStatus", $value);
        }
        $value = $this->getScheduleTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ScheduleTime", $value);
        }
        $value = $this->getSecondaryCategory();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SecondaryCategory", $value);
        }
        $value = $this->getFreeAddedCategory();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FreeAddedCategory", $value);
        }
        $value = $this->getSeller();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Seller", $value);
        }
        $value = $this->getSellingStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingStatus", $value);
        }
        $value = $this->getShippingDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingDetails", $value);
        }
        $value = $this->getShipToLocations();
        if (null !== $value && !empty($this->getShipToLocations())) {
            $writer->write(array_map(function ($v) {
                return ["ShipToLocations" => $v];
            }, $value));
        }
        $value = $this->getSite();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Site", $value);
        }
        $value = $this->getStartPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartPrice", $value);
        }
        $value = $this->getStorefront();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Storefront", $value);
        }
        $value = $this->getSubTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SubTitle", $value);
        }
        $value = $this->getTimeLeft();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TimeLeft", $value);
        }
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Title", $value);
        }
        $value = $this->getUUID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UUID", $value);
        }
        $value = $this->getVATDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VATDetails", $value);
        }
        $value = $this->getSellerVacationNote();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerVacationNote", $value);
        }
        $value = $this->getWatchCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WatchCount", $value);
        }
        $value = $this->getHitCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HitCount", $value);
        }
        $value = $this->getDisableBuyerRequirements();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisableBuyerRequirements", $value);
        }
        $value = $this->getBestOfferDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferDetails", $value);
        }
        $value = $this->getLocationDefaulted();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocationDefaulted", $value);
        }
        $value = $this->getUseTaxTable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UseTaxTable", $value);
        }
        $value = $this->getGetItFast();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GetItFast", $value);
        }
        $value = $this->getBuyerResponsibleForShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerResponsibleForShipping", $value);
        }
        $value = $this->getLimitedWarrantyEligible();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LimitedWarrantyEligible", $value);
        }
        $value = $this->getEBayNotes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayNotes", $value);
        }
        $value = $this->getQuestionCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuestionCount", $value);
        }
        $value = $this->getRelisted();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Relisted", $value);
        }
        $value = $this->getQuantityAvailable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityAvailable", $value);
        }
        $value = $this->getSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKU", $value);
        }
        $value = $this->getSearchDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SearchDetails", $value);
        }
        $value = $this->getPostalCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PostalCode", $value);
        }
        $value = $this->getPictureDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureDetails", $value);
        }
        $value = $this->getDispatchTimeMax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DispatchTimeMax", $value);
        }
        $value = $this->getBestOfferEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled", $value);
        }
        $value = $this->getLocalListing();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalListing", $value);
        }
        $value = $this->getSellerContactDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerContactDetails", $value);
        }
        $value = $this->getTotalQuestionCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalQuestionCount", $value);
        }
        $value = $this->getProxyItem();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProxyItem", $value);
        }
        $value = $this->getExtendedSellerContactDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExtendedSellerContactDetails", $value);
        }
        $value = $this->getLeadCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LeadCount", $value);
        }
        $value = $this->getNewLeadCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NewLeadCount", $value);
        }
        $value = $this->getItemSpecifics();
        if (null !== $value && !empty($this->getItemSpecifics())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemSpecifics", array_map(function ($v) {
                return ["NameValueList" => $v];
            }, $value));
        }
        $value = $this->getGroupCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GroupCategoryID", $value);
        }
        $value = $this->getClassifiedAdPayPerLeadFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPayPerLeadFee", $value);
        }
        $value = $this->getBidGroupItem();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidGroupItem", $value);
        }
        $value = $this->getApplyBuyerProtection();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ApplyBuyerProtection", $value);
        }
        $value = $this->getListingSubtype2();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingSubtype2", $value);
        }
        $value = $this->getMechanicalCheckAccepted();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MechanicalCheckAccepted", $value);
        }
        $value = $this->getUpdateSellerInfo();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateSellerInfo", $value);
        }
        $value = $this->getUpdateReturnPolicy();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateReturnPolicy", $value);
        }
        $value = $this->getItemPolicyViolation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemPolicyViolation", $value);
        }
        $value = $this->getCrossBorderTrade();
        if (null !== $value && !empty($this->getCrossBorderTrade())) {
            $writer->write(array_map(function ($v) {
                return ["CrossBorderTrade" => $v];
            }, $value));
        }
        $value = $this->getBusinessSellerDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BusinessSellerDetails", $value);
        }
        $value = $this->getBuyerGuaranteePrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerGuaranteePrice", $value);
        }
        $value = $this->getBuyerRequirementDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerRequirementDetails", $value);
        }
        $value = $this->getReturnPolicy();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnPolicy", $value);
        }
        $value = $this->getPaymentAllowedSite();
        if (null !== $value && !empty($this->getPaymentAllowedSite())) {
            $writer->write(array_map(function ($v) {
                return ["PaymentAllowedSite" => $v];
            }, $value));
        }
        $value = $this->getInventoryTrackingMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InventoryTrackingMethod", $value);
        }
        $value = $this->getIntegratedMerchantCreditCardEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IntegratedMerchantCreditCardEnabled", $value);
        }
        $value = $this->getVariations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Variations", $value);
        }
        $value = $this->getItemCompatibilityList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityList", $value);
        }
        $value = $this->getItemCompatibilityCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityCount", $value);
        }
        $value = $this->getConditionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionID", $value);
        }
        $value = $this->getConditionDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionDescription", $value);
        }
        $value = $this->getConditionDisplayName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionDisplayName", $value);
        }
        $value = $this->getTaxCategory();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxCategory", $value);
        }
        $value = $this->getQuantityAvailableHint();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityAvailableHint", $value);
        }
        $value = $this->getQuantityThreshold();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityThreshold", $value);
        }
        $value = $this->getDiscountPriceInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DiscountPriceInfo", $value);
        }
        $value = $this->getSellerProvidedTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerProvidedTitle", $value);
        }
        $value = $this->getVIN();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VIN", $value);
        }
        $value = $this->getVINLink();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VINLink", $value);
        }
        $value = $this->getVRM();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VRM", $value);
        }
        $value = $this->getVRMLink();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VRMLink", $value);
        }
        $value = $this->getQuantityInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityInfo", $value);
        }
        $value = $this->getSellerProfiles();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerProfiles", $value);
        }
        $value = $this->getShippingServiceCostOverrideList();
        if (null !== $value && !empty($this->getShippingServiceCostOverrideList())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceCostOverrideList", array_map(function ($v) {
                return ["ShippingServiceCostOverride" => $v];
            }, $value));
        }
        $value = $this->getShippingOverride();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingOverride", $value);
        }
        $value = $this->getShippingPackageDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingPackageDetails", $value);
        }
        $value = $this->getTopRatedListing();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TopRatedListing", $value);
        }
        $value = $this->getQuantityRestrictionPerBuyer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityRestrictionPerBuyer", $value);
        }
        $value = $this->getFloorPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FloorPrice", $value);
        }
        $value = $this->getCeilingPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CeilingPrice", $value);
        }
        $value = $this->getIsIntermediatedShippingEligible();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IsIntermediatedShippingEligible", $value);
        }
        $value = $this->getUnitInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UnitInfo", $value);
        }
        $value = $this->getRelistParentID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RelistParentID", $value);
        }
        $value = $this->getConditionDefinition();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionDefinition", $value);
        }
        $value = $this->getHideFromSearch();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HideFromSearch", $value);
        }
        $value = $this->getReasonHideFromSearch();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReasonHideFromSearch", $value);
        }
        $value = $this->getIncludeRecommendations();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeRecommendations", $value);
        }
        $value = $this->getPickupInStoreDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupInStoreDetails", $value);
        }
        $value = $this->getSiteId();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SiteId", $value);
        }
        $value = $this->getIgnoreQuantity();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IgnoreQuantity", $value);
        }
        $value = $this->getAvailableForPickupDropOff();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AvailableForPickupDropOff", $value);
        }
        $value = $this->getEligibleForPickupDropOff();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EligibleForPickupDropOff", $value);
        }
        $value = $this->getLiveAuction();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LiveAuction", $value);
        }
        $value = $this->getDigitalGoodInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DigitalGoodInfo", $value);
        }
        $value = $this->getEBayPlus();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayPlus", $value);
        }
        $value = $this->getEBayPlusEligible();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayPlusEligible", $value);
        }
        $value = $this->getEMailDeliveryAvailable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eMailDeliveryAvailable", $value);
        }
        $value = $this->getIsSecureDescription();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IsSecureDescription", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApplicationData');
        if (null !== $value) {
            $this->setApplicationData($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeSetArray', true);
        if (null !== $value && !empty($value)) {
            $this->setAttributeSetArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\AttributeSetType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeArray', true);
        if (null !== $value && !empty($value)) {
            $this->setAttributeArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\AttributeType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LookupAttributeArray', true);
        if (null !== $value && !empty($value)) {
            $this->setLookupAttributeArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\LookupAttributeType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AutoPay');
        if (null !== $value) {
            $this->setAutoPay($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BiddingDetails');
        if (null !== $value) {
            $this->setBiddingDetails(\Nogrod\eBaySDK\MerchantData\BiddingDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerProtection');
        if (null !== $value) {
            $this->setBuyerProtection($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyItNowPrice');
        if (null !== $value) {
            $this->setBuyItNowPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryMappingAllowed');
        if (null !== $value) {
            $this->setCategoryMappingAllowed($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Charity');
        if (null !== $value) {
            $this->setCharity(\Nogrod\eBaySDK\MerchantData\CharityType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Country');
        if (null !== $value) {
            $this->setCountry($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossPromotion');
        if (null !== $value) {
            $this->setCrossPromotion(\Nogrod\eBaySDK\MerchantData\CrossPromotionsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Currency');
        if (null !== $value) {
            $this->setCurrency($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DescriptionReviseMode');
        if (null !== $value) {
            $this->setDescriptionReviseMode($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Distance');
        if (null !== $value) {
            $this->setDistance(\Nogrod\eBaySDK\MerchantData\DistanceType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HitCounter');
        if (null !== $value) {
            $this->setHitCounter($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingDetails');
        if (null !== $value) {
            $this->setListingDetails(\Nogrod\eBaySDK\MerchantData\ListingDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingDesigner');
        if (null !== $value) {
            $this->setListingDesigner(\Nogrod\eBaySDK\MerchantData\ListingDesignerType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingDuration');
        if (null !== $value) {
            $this->setListingDuration($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingEnhancement', true);
        if (null !== $value && !empty($value)) {
            $this->setListingEnhancement($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingType');
        if (null !== $value) {
            $this->setListingType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Location');
        if (null !== $value) {
            $this->setLocation($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LotSize');
        if (null !== $value) {
            $this->setLotSize($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PartnerCode');
        if (null !== $value) {
            $this->setPartnerCode($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PartnerName');
        if (null !== $value) {
            $this->setPartnerName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentDetails');
        if (null !== $value) {
            $this->setPaymentDetails(\Nogrod\eBaySDK\MerchantData\PaymentDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethods', true);
        if (null !== $value && !empty($value)) {
            $this->setPaymentMethods($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalEmailAddress');
        if (null !== $value) {
            $this->setPayPalEmailAddress($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrimaryCategory');
        if (null !== $value) {
            $this->setPrimaryCategory(\Nogrod\eBaySDK\MerchantData\CategoryType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrivateListing');
        if (null !== $value) {
            $this->setPrivateListing($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductListingDetails');
        if (null !== $value) {
            $this->setProductListingDetails(\Nogrod\eBaySDK\MerchantData\ProductListingDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Quantity');
        if (null !== $value) {
            $this->setQuantity($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrivateNotes');
        if (null !== $value) {
            $this->setPrivateNotes($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegionID');
        if (null !== $value) {
            $this->setRegionID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistLink');
        if (null !== $value) {
            $this->setRelistLink($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReservePrice');
        if (null !== $value) {
            $this->setReservePrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseStatus');
        if (null !== $value) {
            $this->setReviseStatus(\Nogrod\eBaySDK\MerchantData\ReviseStatusType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ScheduleTime');
        if (null !== $value) {
            $this->setScheduleTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecondaryCategory');
        if (null !== $value) {
            $this->setSecondaryCategory(\Nogrod\eBaySDK\MerchantData\CategoryType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FreeAddedCategory');
        if (null !== $value) {
            $this->setFreeAddedCategory(\Nogrod\eBaySDK\MerchantData\CategoryType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Seller');
        if (null !== $value) {
            $this->setSeller(\Nogrod\eBaySDK\MerchantData\UserType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingStatus');
        if (null !== $value) {
            $this->setSellingStatus(\Nogrod\eBaySDK\MerchantData\SellingStatusType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingDetails');
        if (null !== $value) {
            $this->setShippingDetails(\Nogrod\eBaySDK\MerchantData\ShippingDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipToLocations', true);
        if (null !== $value && !empty($value)) {
            $this->setShipToLocations($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Site');
        if (null !== $value) {
            $this->setSite($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartPrice');
        if (null !== $value) {
            $this->setStartPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Storefront');
        if (null !== $value) {
            $this->setStorefront(\Nogrod\eBaySDK\MerchantData\StorefrontType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SubTitle');
        if (null !== $value) {
            $this->setSubTitle($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TimeLeft');
        if (null !== $value) {
            $this->setTimeLeft(new \DateInterval($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UUID');
        if (null !== $value) {
            $this->setUUID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATDetails');
        if (null !== $value) {
            $this->setVATDetails(\Nogrod\eBaySDK\MerchantData\VATDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerVacationNote');
        if (null !== $value) {
            $this->setSellerVacationNote($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WatchCount');
        if (null !== $value) {
            $this->setWatchCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HitCount');
        if (null !== $value) {
            $this->setHitCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisableBuyerRequirements');
        if (null !== $value) {
            $this->setDisableBuyerRequirements($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferDetails');
        if (null !== $value) {
            $this->setBestOfferDetails(\Nogrod\eBaySDK\MerchantData\BestOfferDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocationDefaulted');
        if (null !== $value) {
            $this->setLocationDefaulted($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UseTaxTable');
        if (null !== $value) {
            $this->setUseTaxTable($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GetItFast');
        if (null !== $value) {
            $this->setGetItFast($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerResponsibleForShipping');
        if (null !== $value) {
            $this->setBuyerResponsibleForShipping($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LimitedWarrantyEligible');
        if (null !== $value) {
            $this->setLimitedWarrantyEligible($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayNotes');
        if (null !== $value) {
            $this->setEBayNotes($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuestionCount');
        if (null !== $value) {
            $this->setQuestionCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Relisted');
        if (null !== $value) {
            $this->setRelisted($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityAvailable');
        if (null !== $value) {
            $this->setQuantityAvailable($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKU');
        if (null !== $value) {
            $this->setSKU($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchDetails');
        if (null !== $value) {
            $this->setSearchDetails(\Nogrod\eBaySDK\MerchantData\SearchDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PostalCode');
        if (null !== $value) {
            $this->setPostalCode($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureDetails');
        if (null !== $value) {
            $this->setPictureDetails(\Nogrod\eBaySDK\MerchantData\PictureDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DispatchTimeMax');
        if (null !== $value) {
            $this->setDispatchTimeMax($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled');
        if (null !== $value) {
            $this->setBestOfferEnabled($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalListing');
        if (null !== $value) {
            $this->setLocalListing($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerContactDetails');
        if (null !== $value) {
            $this->setSellerContactDetails(\Nogrod\eBaySDK\MerchantData\AddressType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalQuestionCount');
        if (null !== $value) {
            $this->setTotalQuestionCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProxyItem');
        if (null !== $value) {
            $this->setProxyItem($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExtendedSellerContactDetails');
        if (null !== $value) {
            $this->setExtendedSellerContactDetails(\Nogrod\eBaySDK\MerchantData\ExtendedContactDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LeadCount');
        if (null !== $value) {
            $this->setLeadCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NewLeadCount');
        if (null !== $value) {
            $this->setNewLeadCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemSpecifics', true);
        if (null !== $value && !empty($value)) {
            $this->setItemSpecifics(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\NameValueListType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GroupCategoryID');
        if (null !== $value) {
            $this->setGroupCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdPayPerLeadFee');
        if (null !== $value) {
            $this->setClassifiedAdPayPerLeadFee(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidGroupItem');
        if (null !== $value) {
            $this->setBidGroupItem($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApplyBuyerProtection');
        if (null !== $value) {
            $this->setApplyBuyerProtection(\Nogrod\eBaySDK\MerchantData\BuyerProtectionDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingSubtype2');
        if (null !== $value) {
            $this->setListingSubtype2($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MechanicalCheckAccepted');
        if (null !== $value) {
            $this->setMechanicalCheckAccepted($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateSellerInfo');
        if (null !== $value) {
            $this->setUpdateSellerInfo($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateReturnPolicy');
        if (null !== $value) {
            $this->setUpdateReturnPolicy($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemPolicyViolation');
        if (null !== $value) {
            $this->setItemPolicyViolation(\Nogrod\eBaySDK\MerchantData\ItemPolicyViolationType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CrossBorderTrade', true);
        if (null !== $value && !empty($value)) {
            $this->setCrossBorderTrade($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BusinessSellerDetails');
        if (null !== $value) {
            $this->setBusinessSellerDetails(\Nogrod\eBaySDK\MerchantData\BusinessSellerDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerGuaranteePrice');
        if (null !== $value) {
            $this->setBuyerGuaranteePrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerRequirementDetails');
        if (null !== $value) {
            $this->setBuyerRequirementDetails(\Nogrod\eBaySDK\MerchantData\BuyerRequirementDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnPolicy');
        if (null !== $value) {
            $this->setReturnPolicy(\Nogrod\eBaySDK\MerchantData\ReturnPolicyType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentAllowedSite', true);
        if (null !== $value && !empty($value)) {
            $this->setPaymentAllowedSite($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InventoryTrackingMethod');
        if (null !== $value) {
            $this->setInventoryTrackingMethod($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IntegratedMerchantCreditCardEnabled');
        if (null !== $value) {
            $this->setIntegratedMerchantCreditCardEnabled($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Variations');
        if (null !== $value) {
            $this->setVariations(\Nogrod\eBaySDK\MerchantData\VariationsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityList');
        if (null !== $value) {
            $this->setItemCompatibilityList(\Nogrod\eBaySDK\MerchantData\ItemCompatibilityListType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityCount');
        if (null !== $value) {
            $this->setItemCompatibilityCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionID');
        if (null !== $value) {
            $this->setConditionID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionDescription');
        if (null !== $value) {
            $this->setConditionDescription($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionDisplayName');
        if (null !== $value) {
            $this->setConditionDisplayName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxCategory');
        if (null !== $value) {
            $this->setTaxCategory($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityAvailableHint');
        if (null !== $value) {
            $this->setQuantityAvailableHint($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityThreshold');
        if (null !== $value) {
            $this->setQuantityThreshold($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountPriceInfo');
        if (null !== $value) {
            $this->setDiscountPriceInfo(\Nogrod\eBaySDK\MerchantData\DiscountPriceInfoType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerProvidedTitle');
        if (null !== $value) {
            $this->setSellerProvidedTitle($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VIN');
        if (null !== $value) {
            $this->setVIN($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VINLink');
        if (null !== $value) {
            $this->setVINLink($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VRM');
        if (null !== $value) {
            $this->setVRM($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VRMLink');
        if (null !== $value) {
            $this->setVRMLink($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityInfo');
        if (null !== $value) {
            $this->setQuantityInfo(\Nogrod\eBaySDK\MerchantData\QuantityInfoType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerProfiles');
        if (null !== $value) {
            $this->setSellerProfiles(\Nogrod\eBaySDK\MerchantData\SellerProfilesType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceCostOverrideList', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingServiceCostOverrideList(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ShippingServiceCostOverrideType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingOverride');
        if (null !== $value) {
            $this->setShippingOverride(\Nogrod\eBaySDK\MerchantData\ShippingOverrideType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingPackageDetails');
        if (null !== $value) {
            $this->setShippingPackageDetails(\Nogrod\eBaySDK\MerchantData\ShipPackageDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TopRatedListing');
        if (null !== $value) {
            $this->setTopRatedListing($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityRestrictionPerBuyer');
        if (null !== $value) {
            $this->setQuantityRestrictionPerBuyer(\Nogrod\eBaySDK\MerchantData\QuantityRestrictionPerBuyerInfoType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FloorPrice');
        if (null !== $value) {
            $this->setFloorPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CeilingPrice');
        if (null !== $value) {
            $this->setCeilingPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IsIntermediatedShippingEligible');
        if (null !== $value) {
            $this->setIsIntermediatedShippingEligible($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnitInfo');
        if (null !== $value) {
            $this->setUnitInfo(\Nogrod\eBaySDK\MerchantData\UnitInfoType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistParentID');
        if (null !== $value) {
            $this->setRelistParentID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionDefinition');
        if (null !== $value) {
            $this->setConditionDefinition($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HideFromSearch');
        if (null !== $value) {
            $this->setHideFromSearch($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReasonHideFromSearch');
        if (null !== $value) {
            $this->setReasonHideFromSearch($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeRecommendations');
        if (null !== $value) {
            $this->setIncludeRecommendations($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupInStoreDetails');
        if (null !== $value) {
            $this->setPickupInStoreDetails(\Nogrod\eBaySDK\MerchantData\PickupInStoreDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SiteId');
        if (null !== $value) {
            $this->setSiteId($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IgnoreQuantity');
        if (null !== $value) {
            $this->setIgnoreQuantity($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AvailableForPickupDropOff');
        if (null !== $value) {
            $this->setAvailableForPickupDropOff($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EligibleForPickupDropOff');
        if (null !== $value) {
            $this->setEligibleForPickupDropOff($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LiveAuction');
        if (null !== $value) {
            $this->setLiveAuction($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DigitalGoodInfo');
        if (null !== $value) {
            $this->setDigitalGoodInfo(\Nogrod\eBaySDK\MerchantData\DigitalGoodInfoType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayPlus');
        if (null !== $value) {
            $this->setEBayPlus($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayPlusEligible');
        if (null !== $value) {
            $this->setEBayPlusEligible($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eMailDeliveryAvailable');
        if (null !== $value) {
            $this->setEMailDeliveryAvailable($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IsSecureDescription');
        if (null !== $value) {
            $this->setIsSecureDescription($value);
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
