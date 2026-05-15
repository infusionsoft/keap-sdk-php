# Keap\Core\V2\AffiliateApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAffiliate()**](AffiliateApi.md#addAffiliate) | **POST** /rest/v2/affiliates | Create an Affiliate |
| [**addAffiliateToProgram()**](AffiliateApi.md#addAffiliateToProgram) | **POST** /rest/v2/affiliates/{id}:assignToProgram | Assign Affiliate to Commission program |
| [**addCommissionProgram()**](AffiliateApi.md#addCommissionProgram) | **POST** /rest/v2/affiliates/commissionPrograms | Create an Affiliate Commission Program |
| [**assignProductCommissionProgram()**](AffiliateApi.md#assignProductCommissionProgram) | **POST** /rest/v2/affiliates/commissionPrograms/productCommissionPrograms/{commission_program_id} | Assign a Product Commission Program |
| [**assignSubscriptionCommissionProgram()**](AffiliateApi.md#assignSubscriptionCommissionProgram) | **POST** /rest/v2/affiliates/commissionPrograms/subscriptionCommissionPrograms/{commission_program_id} | Assign a Subscription Commission Program |
| [**createAffiliateCustomField()**](AffiliateApi.md#createAffiliateCustomField) | **POST** /rest/v2/affiliates/model/customFields | Create an Affiliate Custom Field |
| [**createDefaultCommissionProgram()**](AffiliateApi.md#createDefaultCommissionProgram) | **POST** /rest/v2/affiliates/commissionPrograms/defaultCommissionPrograms/{commission_program_id} | Create a Default Commission Program |
| [**createRedirectLink()**](AffiliateApi.md#createRedirectLink) | **POST** /rest/v2/affiliates/redirects | Create an Affiliate Link |
| [**deleteAffiliate()**](AffiliateApi.md#deleteAffiliate) | **DELETE** /rest/v2/affiliates/{id} | Delete Affiliate |
| [**deleteAffiliateCommissionProgram()**](AffiliateApi.md#deleteAffiliateCommissionProgram) | **DELETE** /rest/v2/affiliates/commissionPrograms/{commission_program_id} | Delete a Commission Program |
| [**deleteAffiliateCustomField()**](AffiliateApi.md#deleteAffiliateCustomField) | **DELETE** /rest/v2/affiliates/model/customFields/{custom_field_id} | Delete a Custom Field |
| [**deleteRedirectLink()**](AffiliateApi.md#deleteRedirectLink) | **DELETE** /rest/v2/affiliates/redirects/{redirect_id} | Delete an Affiliate Link |
| [**getAffiliate()**](AffiliateApi.md#getAffiliate) | **GET** /rest/v2/affiliates/{id} | Retrieve an Affiliate |
| [**getAffiliateCommissionTotal()**](AffiliateApi.md#getAffiliateCommissionTotal) | **GET** /rest/v2/affiliates/{affiliate_id}/commissionTotal | Retrieve Affiliate Commission Earned and View LedgerURl for portal |
| [**getAffiliateCommissions()**](AffiliateApi.md#getAffiliateCommissions) | **GET** /rest/v2/affiliates/{affiliate_id}:commissions | Retrieve Affiliate Commissions |
| [**getAffiliateCustomFields()**](AffiliateApi.md#getAffiliateCustomFields) | **GET** /rest/v2/affiliates/model | Retrieve Affiliate Model |
| [**getCommissionProgram()**](AffiliateApi.md#getCommissionProgram) | **GET** /rest/v2/affiliates/commissionPrograms/{commission_program_id} | Retrieve a Commission Program |
| [**getRedirectLink()**](AffiliateApi.md#getRedirectLink) | **GET** /rest/v2/affiliates/redirects/{redirect_id} | Retrieve an Affiliate Link |
| [**getReferralsByAffiliateId()**](AffiliateApi.md#getReferralsByAffiliateId) | **GET** /rest/v2/affiliates/{affiliate_id}/referrals | Retrieve Affiliate Referrals |
| [**listAffiliate()**](AffiliateApi.md#listAffiliate) | **GET** /rest/v2/affiliates | List Affiliates |
| [**listAffiliateCommissionPrograms()**](AffiliateApi.md#listAffiliateCommissionPrograms) | **GET** /rest/v2/affiliates/commissionPrograms | List Affiliate Commission Programs |
| [**listAffiliateLinks()**](AffiliateApi.md#listAffiliateLinks) | **GET** /rest/v2/affiliates/redirects | List Affiliate Links |
| [**listAffiliatePayments()**](AffiliateApi.md#listAffiliatePayments) | **GET** /rest/v2/affiliates/{affiliate_id}/payments | List Affiliate Payments |
| [**listCommissionProgramResources()**](AffiliateApi.md#listCommissionProgramResources) | **GET** /rest/v2/affiliates/commissionPrograms/{commission_program_id}/resources | Retrieve Commission Program Resources |
| [**listSummaries()**](AffiliateApi.md#listSummaries) | **GET** /rest/v2/affiliates/summaries | List Affiliate Summaries |
| [**removeAffiliateFromProgram()**](AffiliateApi.md#removeAffiliateFromProgram) | **POST** /rest/v2/affiliates/{id}:removeFromProgram | Remove an Affiliate from a Commission Program |
| [**removeProductCommissionFromCommissions()**](AffiliateApi.md#removeProductCommissionFromCommissions) | **POST** /rest/v2/affiliates/commissionPrograms/{commission_id}:removeProductCommission | Remove a Product from a Commission Program |
| [**removeSubscriptionPlanCommissionFromCommissions()**](AffiliateApi.md#removeSubscriptionPlanCommissionFromCommissions) | **POST** /rest/v2/affiliates/commissionPrograms/{commission_id}:removeSubscriptionCommission | Remove a Subscription from a Commission Program |
| [**updateAffiliate()**](AffiliateApi.md#updateAffiliate) | **PATCH** /rest/v2/affiliates/{id} | Update an Affiliate |
| [**updateAffiliateCustomField()**](AffiliateApi.md#updateAffiliateCustomField) | **PATCH** /rest/v2/affiliates/model/customFields/{custom_field_id} | Update a Custom Field |
| [**updateCommissionProgram()**](AffiliateApi.md#updateCommissionProgram) | **PATCH** /rest/v2/affiliates/commissionPrograms/{commission_program_id} | Update an Affiliate Commission Program |
| [**updateDefaultCommissionProgram()**](AffiliateApi.md#updateDefaultCommissionProgram) | **PATCH** /rest/v2/affiliates/commissionPrograms/defaultCommissionPrograms/{commission_program_id} | Update a Default Commission Program |
| [**updateProductCommissionProgram()**](AffiliateApi.md#updateProductCommissionProgram) | **PATCH** /rest/v2/affiliates/commissionPrograms/productCommissionPrograms/{commission_program_id} | Update a Product Commission Program |
| [**updateRedirectLink()**](AffiliateApi.md#updateRedirectLink) | **PATCH** /rest/v2/affiliates/redirects/{redirect_id} | Update an Affiliate Link |
| [**updateSubscriptionCommissionProgram()**](AffiliateApi.md#updateSubscriptionCommissionProgram) | **PATCH** /rest/v2/affiliates/commissionPrograms/subscriptionCommissionPrograms/{commission_program_id} | Update a Subscription Commission Program |


## `addAffiliate()`

```php
addAffiliate($create_affiliate_request): \Keap\Core\V2\Model\RestAffiliate
```

Create an Affiliate

Creates a single Affiliate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_affiliate_request = new \Keap\Core\V2\Model\CreateAffiliateRequest(); // \Keap\Core\V2\Model\CreateAffiliateRequest

try {
    $result = $apiInstance->addAffiliate($create_affiliate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->addAffiliate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_affiliate_request** | [**\Keap\Core\V2\Model\CreateAffiliateRequest**](../Model/CreateAffiliateRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\RestAffiliate**](../Model/RestAffiliate.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addAffiliateToProgram()`

```php
addAffiliateToProgram($id, $affiliate_add_to_program_request)
```

Assign Affiliate to Commission program

Assigns an Affiliate to Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$affiliate_add_to_program_request = new \Keap\Core\V2\Model\AffiliateAddToProgramRequest(); // \Keap\Core\V2\Model\AffiliateAddToProgramRequest

try {
    $apiInstance->addAffiliateToProgram($id, $affiliate_add_to_program_request);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->addAffiliateToProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **affiliate_add_to_program_request** | [**\Keap\Core\V2\Model\AffiliateAddToProgramRequest**](../Model/AffiliateAddToProgramRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addCommissionProgram()`

```php
addCommissionProgram($create_commission_program_request): \Keap\Core\V2\Model\AffiliateCommissionProgramResponse
```

Create an Affiliate Commission Program

Creates an Affiliate Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_commission_program_request = new \Keap\Core\V2\Model\CreateCommissionProgramRequest(); // \Keap\Core\V2\Model\CreateCommissionProgramRequest

try {
    $result = $apiInstance->addCommissionProgram($create_commission_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->addCommissionProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_commission_program_request** | [**\Keap\Core\V2\Model\CreateCommissionProgramRequest**](../Model/CreateCommissionProgramRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\AffiliateCommissionProgramResponse**](../Model/AffiliateCommissionProgramResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignProductCommissionProgram()`

```php
assignProductCommissionProgram($commission_program_id, $create_product_commission_program_request): \Keap\Core\V2\Model\GetRestCommissionProgram
```

Assign a Product Commission Program

Assigns a Product Commission Program to a Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commission_program_id = 'commission_program_id_example'; // string
$create_product_commission_program_request = new \Keap\Core\V2\Model\CreateProductCommissionProgramRequest(); // \Keap\Core\V2\Model\CreateProductCommissionProgramRequest

try {
    $result = $apiInstance->assignProductCommissionProgram($commission_program_id, $create_product_commission_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->assignProductCommissionProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**|  | |
| **create_product_commission_program_request** | [**\Keap\Core\V2\Model\CreateProductCommissionProgramRequest**](../Model/CreateProductCommissionProgramRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\GetRestCommissionProgram**](../Model/GetRestCommissionProgram.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignSubscriptionCommissionProgram()`

```php
assignSubscriptionCommissionProgram($commission_program_id, $create_subscription_commission_program_request): \Keap\Core\V2\Model\GetRestCommissionProgram
```

Assign a Subscription Commission Program

Assigns a Subscription Commission Program to a Subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commission_program_id = 'commission_program_id_example'; // string
$create_subscription_commission_program_request = new \Keap\Core\V2\Model\CreateSubscriptionCommissionProgramRequest(); // \Keap\Core\V2\Model\CreateSubscriptionCommissionProgramRequest

try {
    $result = $apiInstance->assignSubscriptionCommissionProgram($commission_program_id, $create_subscription_commission_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->assignSubscriptionCommissionProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**|  | |
| **create_subscription_commission_program_request** | [**\Keap\Core\V2\Model\CreateSubscriptionCommissionProgramRequest**](../Model/CreateSubscriptionCommissionProgramRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\GetRestCommissionProgram**](../Model/GetRestCommissionProgram.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAffiliateCustomField()`

```php
createAffiliateCustomField($create_custom_field_request): \Keap\Core\V2\Model\CustomFieldMetaData
```

Create an Affiliate Custom Field

Creates a single Affiliate Custom Field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_field_request = new \Keap\Core\V2\Model\CreateCustomFieldRequest(); // \Keap\Core\V2\Model\CreateCustomFieldRequest

try {
    $result = $apiInstance->createAffiliateCustomField($create_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->createAffiliateCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_custom_field_request** | [**\Keap\Core\V2\Model\CreateCustomFieldRequest**](../Model/CreateCustomFieldRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\CustomFieldMetaData**](../Model/CustomFieldMetaData.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDefaultCommissionProgram()`

```php
createDefaultCommissionProgram($commission_program_id, $create_default_commission_program_request): \Keap\Core\V2\Model\GetRestCommissionProgram
```

Create a Default Commission Program

Creates a Default Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commission_program_id = 'commission_program_id_example'; // string
$create_default_commission_program_request = new \Keap\Core\V2\Model\CreateDefaultCommissionProgramRequest(); // \Keap\Core\V2\Model\CreateDefaultCommissionProgramRequest

try {
    $result = $apiInstance->createDefaultCommissionProgram($commission_program_id, $create_default_commission_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->createDefaultCommissionProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**|  | |
| **create_default_commission_program_request** | [**\Keap\Core\V2\Model\CreateDefaultCommissionProgramRequest**](../Model/CreateDefaultCommissionProgramRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\GetRestCommissionProgram**](../Model/GetRestCommissionProgram.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRedirectLink()`

```php
createRedirectLink($create_or_update_affiliate_link_request): \Keap\Core\V2\Model\AffiliateLink
```

Create an Affiliate Link

Creates a single Affiliate Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_or_update_affiliate_link_request = new \Keap\Core\V2\Model\CreateOrUpdateAffiliateLinkRequest(); // \Keap\Core\V2\Model\CreateOrUpdateAffiliateLinkRequest

try {
    $result = $apiInstance->createRedirectLink($create_or_update_affiliate_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->createRedirectLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_or_update_affiliate_link_request** | [**\Keap\Core\V2\Model\CreateOrUpdateAffiliateLinkRequest**](../Model/CreateOrUpdateAffiliateLinkRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\AffiliateLink**](../Model/AffiliateLink.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAffiliate()`

```php
deleteAffiliate($id)
```

Delete Affiliate

Deletes the specified Affiliate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteAffiliate($id);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->deleteAffiliate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAffiliateCommissionProgram()`

```php
deleteAffiliateCommissionProgram($commission_program_id)
```

Delete a Commission Program

Deletes a Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commission_program_id = 'commission_program_id_example'; // string

try {
    $apiInstance->deleteAffiliateCommissionProgram($commission_program_id);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->deleteAffiliateCommissionProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAffiliateCustomField()`

```php
deleteAffiliateCustomField($custom_field_id)
```

Delete a Custom Field

Deletes a Custom Field from Affiliate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 'custom_field_id_example'; // string

try {
    $apiInstance->deleteAffiliateCustomField($custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->deleteAffiliateCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRedirectLink()`

```php
deleteRedirectLink($redirect_id)
```

Delete an Affiliate Link

Deletes an Affiliate Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redirect_id = 'redirect_id_example'; // string

try {
    $apiInstance->deleteRedirectLink($redirect_id);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->deleteRedirectLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redirect_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAffiliate()`

```php
getAffiliate($id): \Keap\Core\V2\Model\RestAffiliate
```

Retrieve an Affiliate

Retrieves a single Affiliate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getAffiliate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getAffiliate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\RestAffiliate**](../Model/RestAffiliate.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAffiliateCommissionTotal()`

```php
getAffiliateCommissionTotal($affiliate_id): \Keap\Core\V2\Model\AffiliateCommissionEarned
```

Retrieve Affiliate Commission Earned and View LedgerURl for portal

Get the Affiliate Commission Earned and View LedgerURl for portal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliate_id = 'affiliate_id_example'; // string

try {
    $result = $apiInstance->getAffiliateCommissionTotal($affiliate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getAffiliateCommissionTotal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliate_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\AffiliateCommissionEarned**](../Model/AffiliateCommissionEarned.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAffiliateCommissions()`

```php
getAffiliateCommissions($affiliate_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListAffiliateCommissionsResponse
```

Retrieve Affiliate Commissions

Retrieve a list of Affiliate's Commissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliate_id = 'affiliate_id_example'; // string
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `since_time` - (String) `until_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=since_time%3D%3D2024-05-21T23:00:00Z%3Buntil_time%3D%3D2025-05-21T23:00:00Z` - `filter=until_time%3D%3D2025-05-21T23:00:00Z`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `invoice_id` - `time_earned`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->getAffiliateCommissions($affiliate_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getAffiliateCommissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliate_id** | **string**|  | |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;since_time&#x60; - (String) &#x60;until_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;since_time%3D%3D2024-05-21T23:00:00Z%3Buntil_time%3D%3D2025-05-21T23:00:00Z&#x60; - &#x60;filter&#x3D;until_time%3D%3D2025-05-21T23:00:00Z&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;invoice_id&#x60; - &#x60;time_earned&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListAffiliateCommissionsResponse**](../Model/ListAffiliateCommissionsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAffiliateCustomFields()`

```php
getAffiliateCustomFields(): \Keap\Core\V2\Model\ObjectModel
```

Retrieve Affiliate Model

Get the custom fields and optional properties for the Affiliate object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAffiliateCustomFields();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getAffiliateCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\ObjectModel**](../Model/ObjectModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommissionProgram()`

```php
getCommissionProgram($commission_program_id): \Keap\Core\V2\Model\GetRestCommissionProgram
```

Retrieve a Commission Program

Retrieves a single Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commission_program_id = 'commission_program_id_example'; // string

try {
    $result = $apiInstance->getCommissionProgram($commission_program_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getCommissionProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\GetRestCommissionProgram**](../Model/GetRestCommissionProgram.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRedirectLink()`

```php
getRedirectLink($redirect_id): \Keap\Core\V2\Model\AffiliateLink
```

Retrieve an Affiliate Link

Retrieves information about a single Affiliate Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redirect_id = 'redirect_id_example'; // string

try {
    $result = $apiInstance->getRedirectLink($redirect_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getRedirectLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redirect_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\AffiliateLink**](../Model/AffiliateLink.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReferralsByAffiliateId()`

```php
getReferralsByAffiliateId($affiliate_id): \Keap\Core\V2\Model\ListAffiliateReferralsResponse
```

Retrieve Affiliate Referrals

Retrieves all referrals belonging to the given affiliate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliate_id = 'affiliate_id_example'; // string

try {
    $result = $apiInstance->getReferralsByAffiliateId($affiliate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getReferralsByAffiliateId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliate_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\ListAffiliateReferralsResponse**](../Model/ListAffiliateReferralsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAffiliate()`

```php
listAffiliate($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListAffiliatesResponse
```

List Affiliates

Retrieves a list of Affiliates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `id` - Allowable operators: \"==\",\"<=\", \"<\", \">=\", \">\", \"!=\" - (String) `name` - Wildcard matching allowed - (String) `contact_id` - (String) `referral_contact_id` - (String) `status` - (String) `code`  You will need to apply the `==` operator to check the equality of one of the filters with the value you want to match, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=id%3C123` - `filter=id%3D%3D123` - `filter=name%3D%3DBob` - `filter=contact_id%3D%3D567` - `filter=contact_id%3D%3D123%3Bcode%3D%3D567`  For fields which allow wildcard matching, you may use the * wildcard character (or its encoded form %2A) for case-insensitive partial matching on text fields. Example of a valid pattern of wildcard usage: - `field==foo*` finds anything in `field` that begins with `foo`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `id` - `date_created` - `name` - `status` - `code`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listAffiliate($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->listAffiliate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;id&#x60; - Allowable operators: \&quot;&#x3D;&#x3D;\&quot;,\&quot;&lt;&#x3D;\&quot;, \&quot;&lt;\&quot;, \&quot;&gt;&#x3D;\&quot;, \&quot;&gt;\&quot;, \&quot;!&#x3D;\&quot; - (String) &#x60;name&#x60; - Wildcard matching allowed - (String) &#x60;contact_id&#x60; - (String) &#x60;referral_contact_id&#x60; - (String) &#x60;status&#x60; - (String) &#x60;code&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with the value you want to match, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;id%3C123&#x60; - &#x60;filter&#x3D;id%3D%3D123&#x60; - &#x60;filter&#x3D;name%3D%3DBob&#x60; - &#x60;filter&#x3D;contact_id%3D%3D567&#x60; - &#x60;filter&#x3D;contact_id%3D%3D123%3Bcode%3D%3D567&#x60;  For fields which allow wildcard matching, you may use the * wildcard character (or its encoded form %2A) for case-insensitive partial matching on text fields. Example of a valid pattern of wildcard usage: - &#x60;field&#x3D;&#x3D;foo*&#x60; finds anything in &#x60;field&#x60; that begins with &#x60;foo&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;id&#x60; - &#x60;date_created&#x60; - &#x60;name&#x60; - &#x60;status&#x60; - &#x60;code&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListAffiliatesResponse**](../Model/ListAffiliatesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAffiliateCommissionPrograms()`

```php
listAffiliateCommissionPrograms($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListAffiliateCommissionProgramsResponse
```

List Affiliate Commission Programs

Retrieves a list of Affiliate Commission Programs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name` - (String) `affiliate_id`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name` - `date_created`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listAffiliateCommissionPrograms($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->listAffiliateCommissionPrograms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;name&#x60; - (String) &#x60;affiliate_id&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;name&#x60; - &#x60;date_created&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListAffiliateCommissionProgramsResponse**](../Model/ListAffiliateCommissionProgramsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAffiliateLinks()`

```php
listAffiliateLinks($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListAffiliateLinksResponse
```

List Affiliate Links

Retrieves a list of Affiliate Links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name` - (String) `affiliate_id`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name` - `date_created`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listAffiliateLinks($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->listAffiliateLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;name&#x60; - (String) &#x60;affiliate_id&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;name&#x60; - &#x60;date_created&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListAffiliateLinksResponse**](../Model/ListAffiliateLinksResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAffiliatePayments()`

```php
listAffiliatePayments($affiliate_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListAffiliatePaymentsResponse
```

List Affiliate Payments

Retrieves a list of affiliate payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliate_id = 'affiliate_id_example'; // string
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `since_time` - (String) `until_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=since_time%3D%3D2024-09-17T-15:50+00` - `filter=until_time%3D%3D2024-09-17T-15:50+00`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `create_time` - `pay_date` - `pay_amount`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listAffiliatePayments($affiliate_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->listAffiliatePayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliate_id** | **string**|  | |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;since_time&#x60; - (String) &#x60;until_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;since_time%3D%3D2024-09-17T-15:50+00&#x60; - &#x60;filter&#x3D;until_time%3D%3D2024-09-17T-15:50+00&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;create_time&#x60; - &#x60;pay_date&#x60; - &#x60;pay_amount&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListAffiliatePaymentsResponse**](../Model/ListAffiliatePaymentsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommissionProgramResources()`

```php
listCommissionProgramResources($commission_program_id): \Keap\Core\V2\Model\ListProgramResourcesResponse
```

Retrieve Commission Program Resources

Retrieves resources for a commission program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commission_program_id = 'commission_program_id_example'; // string

try {
    $result = $apiInstance->listCommissionProgramResources($commission_program_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->listCommissionProgramResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\ListProgramResourcesResponse**](../Model/ListProgramResourcesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSummaries()`

```php
listSummaries($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListAffiliateSummariesResponse
```

List Affiliate Summaries

Retrieves a list of Affiliate Summaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (List[String]) `affiliate_ids` - (String) `since_time` - (String) `until_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched  word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples:  - `filter=since_time%3D%3D2024-09-17T-15:50+00`  - `filter=until_time%3D%3D2024-09-17T-15:50+00`  - `filter=affiliate_ids%3D%3D123,456,789`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `affiliate_id` - `amount_earned` - `balance` - `clawbacks`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listSummaries($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->listSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (List[String]) &#x60;affiliate_ids&#x60; - (String) &#x60;since_time&#x60; - (String) &#x60;until_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched  word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples:  - &#x60;filter&#x3D;since_time%3D%3D2024-09-17T-15:50+00&#x60;  - &#x60;filter&#x3D;until_time%3D%3D2024-09-17T-15:50+00&#x60;  - &#x60;filter&#x3D;affiliate_ids%3D%3D123,456,789&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;affiliate_id&#x60; - &#x60;amount_earned&#x60; - &#x60;balance&#x60; - &#x60;clawbacks&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListAffiliateSummariesResponse**](../Model/ListAffiliateSummariesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAffiliateFromProgram()`

```php
removeAffiliateFromProgram($id, $affiliate_remove_from_program_request)
```

Remove an Affiliate from a Commission Program

Removes an Affiliate from a Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$affiliate_remove_from_program_request = new \Keap\Core\V2\Model\AffiliateRemoveFromProgramRequest(); // \Keap\Core\V2\Model\AffiliateRemoveFromProgramRequest

try {
    $apiInstance->removeAffiliateFromProgram($id, $affiliate_remove_from_program_request);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->removeAffiliateFromProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **affiliate_remove_from_program_request** | [**\Keap\Core\V2\Model\AffiliateRemoveFromProgramRequest**](../Model/AffiliateRemoveFromProgramRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeProductCommissionFromCommissions()`

```php
removeProductCommissionFromCommissions($commission_id, $delete_program_commission_request)
```

Remove a Product from a Commission Program

Removes a Product from a Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commission_id = 'commission_id_example'; // string
$delete_program_commission_request = new \Keap\Core\V2\Model\DeleteProgramCommissionRequest(); // \Keap\Core\V2\Model\DeleteProgramCommissionRequest

try {
    $apiInstance->removeProductCommissionFromCommissions($commission_id, $delete_program_commission_request);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->removeProductCommissionFromCommissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_id** | **string**|  | |
| **delete_program_commission_request** | [**\Keap\Core\V2\Model\DeleteProgramCommissionRequest**](../Model/DeleteProgramCommissionRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeSubscriptionPlanCommissionFromCommissions()`

```php
removeSubscriptionPlanCommissionFromCommissions($commission_id, $delete_subscription_plan_commission_request)
```

Remove a Subscription from a Commission Program

Removes a Subscription from a Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commission_id = 'commission_id_example'; // string
$delete_subscription_plan_commission_request = new \Keap\Core\V2\Model\DeleteSubscriptionPlanCommissionRequest(); // \Keap\Core\V2\Model\DeleteSubscriptionPlanCommissionRequest

try {
    $apiInstance->removeSubscriptionPlanCommissionFromCommissions($commission_id, $delete_subscription_plan_commission_request);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->removeSubscriptionPlanCommissionFromCommissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_id** | **string**|  | |
| **delete_subscription_plan_commission_request** | [**\Keap\Core\V2\Model\DeleteSubscriptionPlanCommissionRequest**](../Model/DeleteSubscriptionPlanCommissionRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAffiliate()`

```php
updateAffiliate($id, $update_affiliate_request, $update_mask): \Keap\Core\V2\Model\RestAffiliate
```

Update an Affiliate

Updates a single Affiliate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_affiliate_request = new \Keap\Core\V2\Model\UpdateAffiliateRequest(); // \Keap\Core\V2\Model\UpdateAffiliateRequest
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateAffiliate($id, $update_affiliate_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->updateAffiliate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_affiliate_request** | [**\Keap\Core\V2\Model\UpdateAffiliateRequest**](../Model/UpdateAffiliateRequest.md)|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\RestAffiliate**](../Model/RestAffiliate.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAffiliateCustomField()`

```php
updateAffiliateCustomField($custom_field_id, $update_custom_field_meta_data_request, $update_mask): \Keap\Core\V2\Model\CustomFieldMetaData
```

Update a Custom Field

Updates a custom field of the specified type and options to the Affiliate object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 'custom_field_id_example'; // string
$update_custom_field_meta_data_request = new \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateAffiliateCustomField($custom_field_id, $update_custom_field_meta_data_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->updateAffiliateCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**|  | |
| **update_custom_field_meta_data_request** | [**\Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest**](../Model/UpdateCustomFieldMetaDataRequest.md)|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\CustomFieldMetaData**](../Model/CustomFieldMetaData.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommissionProgram()`

```php
updateCommissionProgram($commission_program_id, $update_commission_program_request, $update_mask): \Keap\Core\V2\Model\AffiliateCommissionProgramResponse
```

Update an Affiliate Commission Program

Updates the properties of an Affiliate Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commission_program_id = 'commission_program_id_example'; // string
$update_commission_program_request = new \Keap\Core\V2\Model\UpdateCommissionProgramRequest(); // \Keap\Core\V2\Model\UpdateCommissionProgramRequest
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateCommissionProgram($commission_program_id, $update_commission_program_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->updateCommissionProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**|  | |
| **update_commission_program_request** | [**\Keap\Core\V2\Model\UpdateCommissionProgramRequest**](../Model/UpdateCommissionProgramRequest.md)|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\AffiliateCommissionProgramResponse**](../Model/AffiliateCommissionProgramResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDefaultCommissionProgram()`

```php
updateDefaultCommissionProgram($commission_program_id, $update_default_commission_program_request, $update_mask): \Keap\Core\V2\Model\GetRestCommissionProgram
```

Update a Default Commission Program

Updates a Default Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commission_program_id = 'commission_program_id_example'; // string
$update_default_commission_program_request = new \Keap\Core\V2\Model\UpdateDefaultCommissionProgramRequest(); // \Keap\Core\V2\Model\UpdateDefaultCommissionProgramRequest
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateDefaultCommissionProgram($commission_program_id, $update_default_commission_program_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->updateDefaultCommissionProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**|  | |
| **update_default_commission_program_request** | [**\Keap\Core\V2\Model\UpdateDefaultCommissionProgramRequest**](../Model/UpdateDefaultCommissionProgramRequest.md)|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\GetRestCommissionProgram**](../Model/GetRestCommissionProgram.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductCommissionProgram()`

```php
updateProductCommissionProgram($commission_program_id, $update_product_commission_program_request, $update_mask): \Keap\Core\V2\Model\GetRestCommissionProgram
```

Update a Product Commission Program

Updates a Product Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commission_program_id = 'commission_program_id_example'; // string
$update_product_commission_program_request = new \Keap\Core\V2\Model\UpdateProductCommissionProgramRequest(); // \Keap\Core\V2\Model\UpdateProductCommissionProgramRequest
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateProductCommissionProgram($commission_program_id, $update_product_commission_program_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->updateProductCommissionProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**|  | |
| **update_product_commission_program_request** | [**\Keap\Core\V2\Model\UpdateProductCommissionProgramRequest**](../Model/UpdateProductCommissionProgramRequest.md)|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\GetRestCommissionProgram**](../Model/GetRestCommissionProgram.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRedirectLink()`

```php
updateRedirectLink($redirect_id, $create_or_update_affiliate_link_request): \Keap\Core\V2\Model\AffiliateLink
```

Update an Affiliate Link

Updates an Affiliate Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redirect_id = 'redirect_id_example'; // string
$create_or_update_affiliate_link_request = new \Keap\Core\V2\Model\CreateOrUpdateAffiliateLinkRequest(); // \Keap\Core\V2\Model\CreateOrUpdateAffiliateLinkRequest

try {
    $result = $apiInstance->updateRedirectLink($redirect_id, $create_or_update_affiliate_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->updateRedirectLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redirect_id** | **string**|  | |
| **create_or_update_affiliate_link_request** | [**\Keap\Core\V2\Model\CreateOrUpdateAffiliateLinkRequest**](../Model/CreateOrUpdateAffiliateLinkRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\AffiliateLink**](../Model/AffiliateLink.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscriptionCommissionProgram()`

```php
updateSubscriptionCommissionProgram($commission_program_id, $update_subscription_commission_program_request, $update_mask): \Keap\Core\V2\Model\GetRestCommissionProgram
```

Update a Subscription Commission Program

Updates a Subscription Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commission_program_id = 'commission_program_id_example'; // string
$update_subscription_commission_program_request = new \Keap\Core\V2\Model\UpdateSubscriptionCommissionProgramRequest(); // \Keap\Core\V2\Model\UpdateSubscriptionCommissionProgramRequest
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateSubscriptionCommissionProgram($commission_program_id, $update_subscription_commission_program_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->updateSubscriptionCommissionProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**|  | |
| **update_subscription_commission_program_request** | [**\Keap\Core\V2\Model\UpdateSubscriptionCommissionProgramRequest**](../Model/UpdateSubscriptionCommissionProgramRequest.md)|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\GetRestCommissionProgram**](../Model/GetRestCommissionProgram.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
