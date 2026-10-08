# Keap\Core\V2\ReferralApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReferral()**](ReferralApi.md#createReferral) | **POST** /rest/v2/referrals | Create a Referral |
| [**listReferrals()**](ReferralApi.md#listReferrals) | **GET** /rest/v2/referrals | List Referrals |


## `createReferral()`

```php
createReferral($create_referral_request): \Keap\Core\V2\Model\Referral
```

Create a Referral

Creates a new referral partner referral on the provided contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ReferralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_referral_request = new \Keap\Core\V2\Model\CreateReferralRequest(); // \Keap\Core\V2\Model\CreateReferralRequest

try {
    $result = $apiInstance->createReferral($create_referral_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralApi->createReferral: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_referral_request** | [**\Keap\Core\V2\Model\CreateReferralRequest**](../Model/CreateReferralRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\Referral**](../Model/Referral.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReferrals()`

```php
listReferrals($filter, $page_token, $order_by, $page_size): \Keap\Core\V2\Model\ListReferralsResponse
```

List Referrals

Retrieves a list of all referrals with optional filtering and sorting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ReferralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `referral_partner_id` - Allowable operators: \"==\", \"<=\", \"<\", \">=\", \">\", \"!=\" - (String) `contact_id` - Allowable operators: \"==\", \"<=\", \"<\", \">=\", \">\", \"!=\" - (String) `source` - Wildcard matching allowed - (String) `description` - Wildcard matching allowed - (String) `type` (Allowed values: `COOKIE`, `PERMANENT`, `MANUAL`)  You will need to apply the `==` operator (or other supported operators) to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=referral_partner_id%3D%3D123` - `filter=referral_partner_id%3E10` (referral_partner_id > 10) - `filter=contact_id%3D%3D456` - `filter=contact_id%3C%3D100` (contact_id <= 100) - `filter=source%3D%3DEmail Marketing` - `filter=source%3D%3DEmail*` (starts with \"Email\") - `filter=description%3D%3DReferred*` (starts with \"Referred\") - `filter=type%3D%3DCOOKIE` - `filter=referral_partner_id%3D%3D123%3Bcontact_id%3D%3D456`  For fields which allow wildcard matching, you may use the * wildcard character (or its encoded form %2A) for case-insensitive partial matching on text fields. Example of a valid pattern of wildcard usage: - `field==foo*` finds anything in `field` that begins with `foo`
$page_token = 'page_token_example'; // string | Page token
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `id` - `referral_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page

try {
    $result = $apiInstance->listReferrals($filter, $page_token, $order_by, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralApi->listReferrals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;referral_partner_id&#x60; - Allowable operators: \&quot;&#x3D;&#x3D;\&quot;, \&quot;&lt;&#x3D;\&quot;, \&quot;&lt;\&quot;, \&quot;&gt;&#x3D;\&quot;, \&quot;&gt;\&quot;, \&quot;!&#x3D;\&quot; - (String) &#x60;contact_id&#x60; - Allowable operators: \&quot;&#x3D;&#x3D;\&quot;, \&quot;&lt;&#x3D;\&quot;, \&quot;&lt;\&quot;, \&quot;&gt;&#x3D;\&quot;, \&quot;&gt;\&quot;, \&quot;!&#x3D;\&quot; - (String) &#x60;source&#x60; - Wildcard matching allowed - (String) &#x60;description&#x60; - Wildcard matching allowed - (String) &#x60;type&#x60; (Allowed values: &#x60;COOKIE&#x60;, &#x60;PERMANENT&#x60;, &#x60;MANUAL&#x60;)  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator (or other supported operators) to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;referral_partner_id%3D%3D123&#x60; - &#x60;filter&#x3D;referral_partner_id%3E10&#x60; (referral_partner_id &gt; 10) - &#x60;filter&#x3D;contact_id%3D%3D456&#x60; - &#x60;filter&#x3D;contact_id%3C%3D100&#x60; (contact_id &lt;&#x3D; 100) - &#x60;filter&#x3D;source%3D%3DEmail Marketing&#x60; - &#x60;filter&#x3D;source%3D%3DEmail*&#x60; (starts with \&quot;Email\&quot;) - &#x60;filter&#x3D;description%3D%3DReferred*&#x60; (starts with \&quot;Referred\&quot;) - &#x60;filter&#x3D;type%3D%3DCOOKIE&#x60; - &#x60;filter&#x3D;referral_partner_id%3D%3D123%3Bcontact_id%3D%3D456&#x60;  For fields which allow wildcard matching, you may use the * wildcard character (or its encoded form %2A) for case-insensitive partial matching on text fields. Example of a valid pattern of wildcard usage: - &#x60;field&#x3D;&#x3D;foo*&#x60; finds anything in &#x60;field&#x60; that begins with &#x60;foo&#x60; | [optional] |
| **page_token** | **string**| Page token | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;id&#x60; - &#x60;referral_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListReferralsResponse**](../Model/ListReferralsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
