# Keap\Core\V2\AffiliateApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAffiliateToProgramUsingPOST()**](AffiliateApi.md#addAffiliateToProgramUsingPOST) | **POST** /v2/affiliates/{id}:assignToProgram | Assign Affiliate to Commission program |
| [**addAffiliateUsingPOST()**](AffiliateApi.md#addAffiliateUsingPOST) | **POST** /v2/affiliates | Create an Affiliate |
| [**addCommissionProgramUsingPOST()**](AffiliateApi.md#addCommissionProgramUsingPOST) | **POST** /v2/affiliates/commissionPrograms | Create an Affiliate Commission Program |
| [**assignProductCommissionProgramUsingPOST()**](AffiliateApi.md#assignProductCommissionProgramUsingPOST) | **POST** /v2/affiliates/commissionPrograms/productCommissionProgram/{commission_program_id} | Assign a Product Commission Program |
| [**assignSubscriptionCommissionProgramUsingPOST()**](AffiliateApi.md#assignSubscriptionCommissionProgramUsingPOST) | **POST** /v2/affiliates/commissionPrograms/subscriptionCommissionProgram/{commission_program_id} | Assign a Subscription Commission Program |
| [**createDefaultCommissionProgramUsingPOST()**](AffiliateApi.md#createDefaultCommissionProgramUsingPOST) | **POST** /v2/affiliates/commissionPrograms/defaultCommissionProgram/{commission_program_id} | Create a Default Commission Program |
| [**createRedirectLinkUsingPOST()**](AffiliateApi.md#createRedirectLinkUsingPOST) | **POST** /v2/affiliates/redirects | Create an Affiliate Link |
| [**deleteAffiliateCommissionProgramUsingDELETE()**](AffiliateApi.md#deleteAffiliateCommissionProgramUsingDELETE) | **DELETE** /v2/affiliates/commissionPrograms/{commission_program_id} | Delete a Commission Program |
| [**deleteAffiliateUsingDELETE()**](AffiliateApi.md#deleteAffiliateUsingDELETE) | **DELETE** /v2/affiliates/{id} | Delete Affiliate |
| [**deleteRedirectLinkUsingDELETE()**](AffiliateApi.md#deleteRedirectLinkUsingDELETE) | **DELETE** /v2/affiliates/redirects/{redirect_id} | Delete an Affiliate Link |
| [**getAffiliateCommissionTotalUsingGET()**](AffiliateApi.md#getAffiliateCommissionTotalUsingGET) | **GET** /v2/affiliates/{affiliate_id}/commissionTotal | Retrieve Affiliate Commission Earned and View LedgerURl for portal |
| [**getAffiliateCommissionsUsingGET()**](AffiliateApi.md#getAffiliateCommissionsUsingGET) | **GET** /v2/affiliates/{affiliate_id}:commissions | Retrieve Affiliate Commission and Clawbacks |
| [**getAffiliateUsingGET1()**](AffiliateApi.md#getAffiliateUsingGET1) | **GET** /v2/affiliates/{id} | Retrieve an Affiliate |
| [**getCommissionProgramUsingGET()**](AffiliateApi.md#getCommissionProgramUsingGET) | **GET** /v2/affiliates/commissionPrograms/{commission_program_id} | Retrieve a Commission Program |
| [**getRedirectLinkUsingGET()**](AffiliateApi.md#getRedirectLinkUsingGET) | **GET** /v2/affiliates/redirects/{redirect_id} | Retrieve an Affiliate Link |
| [**listAffiliateCommissionProgramsUsingGET()**](AffiliateApi.md#listAffiliateCommissionProgramsUsingGET) | **GET** /v2/affiliates/commissionPrograms | List Affiliate Commission Programs |
| [**listAffiliateLinksUsingGET()**](AffiliateApi.md#listAffiliateLinksUsingGET) | **GET** /v2/affiliates/redirects | List Affiliate Links |
| [**listSummariesUsingGET1()**](AffiliateApi.md#listSummariesUsingGET1) | **GET** /v2/affiliates/summaries | List Affiliate Summaries |
| [**removeAffiliateFromProgramUsingPOST()**](AffiliateApi.md#removeAffiliateFromProgramUsingPOST) | **POST** /v2/affiliates/{id}:removeFromProgram | Remove an Affiliate from a Commission Program |
| [**removeProductCommissionFromCommissionsUsingPOST()**](AffiliateApi.md#removeProductCommissionFromCommissionsUsingPOST) | **POST** /v2/affiliates/commissionPrograms/{commission_id}:removeProductCommission | Remove a Product from a Commission Program |
| [**removeSubscriptionPlanCommissionFromCommissionsUsingPOST()**](AffiliateApi.md#removeSubscriptionPlanCommissionFromCommissionsUsingPOST) | **POST** /v2/affiliates/commissionPrograms/{commission_id}:removeSubscriptionCommission | Remove a Subscription from a Commission Program |
| [**updateAffiliateUsingPATCH()**](AffiliateApi.md#updateAffiliateUsingPATCH) | **PATCH** /v2/affiliates/{id} | Update an Affiliate |
| [**updateCommissionProgramUsingPATCH()**](AffiliateApi.md#updateCommissionProgramUsingPATCH) | **PATCH** /v2/affiliates/commissionPrograms/{commission_program_id} | Update an Affiliate Commission Program |
| [**updateDefaultCommissionProgramUsingPATCH()**](AffiliateApi.md#updateDefaultCommissionProgramUsingPATCH) | **PATCH** /v2/affiliates/commissionPrograms/defaultCommissionPrograms/{commission_program_id} | Update a Default Commission Program |
| [**updateProductCommissionProgramUsingPATCH()**](AffiliateApi.md#updateProductCommissionProgramUsingPATCH) | **PATCH** /v2/affiliates/commissionPrograms/productCommissionPrograms/{commission_program_id} | Update a Product Commission Program |
| [**updateRedirectLinkUsingPATCH()**](AffiliateApi.md#updateRedirectLinkUsingPATCH) | **PATCH** /v2/affiliates/redirects/{redirect_id} | Update an Affiliate Link |
| [**updateSubscriptionCommissionProgramUsingPATCH()**](AffiliateApi.md#updateSubscriptionCommissionProgramUsingPATCH) | **PATCH** /v2/affiliates/commissionPrograms/subscriptionCommissionPrograms/{commission_program_id} | Update a Subscription Commission Program |


## `addAffiliateToProgramUsingPOST()`

```php
addAffiliateToProgramUsingPOST($id, $affiliate_add_to_program_request)
```

Assign Affiliate to Commission program

Assigns an Affiliate to Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id
$affiliate_add_to_program_request = new \Keap\Core\V2\Model\AffiliateAddToProgramRequest(); // \Keap\Core\V2\Model\AffiliateAddToProgramRequest | affiliateAddToProgramRequest

try {
    $apiInstance->addAffiliateToProgramUsingPOST($id, $affiliate_add_to_program_request);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->addAffiliateToProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |
| **affiliate_add_to_program_request** | [**\Keap\Core\V2\Model\AffiliateAddToProgramRequest**](../Model/AffiliateAddToProgramRequest.md)| affiliateAddToProgramRequest | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addAffiliateUsingPOST()`

```php
addAffiliateUsingPOST($create_affiliate_request): \Keap\Core\V2\Model\RestAffiliate
```

Create an Affiliate

Creates a single Affiliate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_affiliate_request = new \Keap\Core\V2\Model\CreateAffiliateRequest(); // \Keap\Core\V2\Model\CreateAffiliateRequest | Affiliate request to insert

try {
    $result = $apiInstance->addAffiliateUsingPOST($create_affiliate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->addAffiliateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_affiliate_request** | [**\Keap\Core\V2\Model\CreateAffiliateRequest**](../Model/CreateAffiliateRequest.md)| Affiliate request to insert | [optional] |

### Return type

[**\Keap\Core\V2\Model\RestAffiliate**](../Model/RestAffiliate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addCommissionProgramUsingPOST()`

```php
addCommissionProgramUsingPOST($create_commission_program_request): \Keap\Core\V2\Model\AffiliateCommissionProgramResponse
```

Create an Affiliate Commission Program

Creates an Affiliate Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_commission_program_request = new \Keap\Core\V2\Model\CreateCommissionProgramRequest(); // \Keap\Core\V2\Model\CreateCommissionProgramRequest | Commission Program to insert

try {
    $result = $apiInstance->addCommissionProgramUsingPOST($create_commission_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->addCommissionProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_commission_program_request** | [**\Keap\Core\V2\Model\CreateCommissionProgramRequest**](../Model/CreateCommissionProgramRequest.md)| Commission Program to insert | [optional] |

### Return type

[**\Keap\Core\V2\Model\AffiliateCommissionProgramResponse**](../Model/AffiliateCommissionProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignProductCommissionProgramUsingPOST()`

```php
assignProductCommissionProgramUsingPOST($commission_program_id, $create_product_commission_program_request): \Keap\Core\V2\Model\ProductCommissionProgram
```

Assign a Product Commission Program

Assigns a Product Commission Program to a Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$commission_program_id = 'commission_program_id_example'; // string | commission_program_id
$create_product_commission_program_request = new \Keap\Core\V2\Model\CreateProductCommissionProgramRequest(); // \Keap\Core\V2\Model\CreateProductCommissionProgramRequest | Product Commission Program

try {
    $result = $apiInstance->assignProductCommissionProgramUsingPOST($commission_program_id, $create_product_commission_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->assignProductCommissionProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**| commission_program_id | |
| **create_product_commission_program_request** | [**\Keap\Core\V2\Model\CreateProductCommissionProgramRequest**](../Model/CreateProductCommissionProgramRequest.md)| Product Commission Program | [optional] |

### Return type

[**\Keap\Core\V2\Model\ProductCommissionProgram**](../Model/ProductCommissionProgram.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignSubscriptionCommissionProgramUsingPOST()`

```php
assignSubscriptionCommissionProgramUsingPOST($commission_program_id, $create_subscription_commission_program_request): \Keap\Core\V2\Model\SubscriptionCommissionProgram
```

Assign a Subscription Commission Program

Assigns a Subscription Commission Program to a Subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$commission_program_id = 'commission_program_id_example'; // string | commission_program_id
$create_subscription_commission_program_request = new \Keap\Core\V2\Model\CreateSubscriptionCommissionProgramRequest(); // \Keap\Core\V2\Model\CreateSubscriptionCommissionProgramRequest | Subscription Commission Program

try {
    $result = $apiInstance->assignSubscriptionCommissionProgramUsingPOST($commission_program_id, $create_subscription_commission_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->assignSubscriptionCommissionProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**| commission_program_id | |
| **create_subscription_commission_program_request** | [**\Keap\Core\V2\Model\CreateSubscriptionCommissionProgramRequest**](../Model/CreateSubscriptionCommissionProgramRequest.md)| Subscription Commission Program | [optional] |

### Return type

[**\Keap\Core\V2\Model\SubscriptionCommissionProgram**](../Model/SubscriptionCommissionProgram.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDefaultCommissionProgramUsingPOST()`

```php
createDefaultCommissionProgramUsingPOST($commission_program_id, $create_default_commission_program_request): \Keap\Core\V2\Model\SetDefaultCommissionProgramResponse
```

Create a Default Commission Program

Creates a Default Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$commission_program_id = 'commission_program_id_example'; // string | commission_program_id
$create_default_commission_program_request = new \Keap\Core\V2\Model\CreateDefaultCommissionProgramRequest(); // \Keap\Core\V2\Model\CreateDefaultCommissionProgramRequest | Values of the Default Commission Program

try {
    $result = $apiInstance->createDefaultCommissionProgramUsingPOST($commission_program_id, $create_default_commission_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->createDefaultCommissionProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**| commission_program_id | |
| **create_default_commission_program_request** | [**\Keap\Core\V2\Model\CreateDefaultCommissionProgramRequest**](../Model/CreateDefaultCommissionProgramRequest.md)| Values of the Default Commission Program | [optional] |

### Return type

[**\Keap\Core\V2\Model\SetDefaultCommissionProgramResponse**](../Model/SetDefaultCommissionProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRedirectLinkUsingPOST()`

```php
createRedirectLinkUsingPOST($create_or_update_affiliate_link_request): \Keap\Core\V2\Model\AffiliateLink
```

Create an Affiliate Link

Creates a single Affiliate Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_or_update_affiliate_link_request = new \Keap\Core\V2\Model\CreateOrUpdateAffiliateLinkRequest(); // \Keap\Core\V2\Model\CreateOrUpdateAffiliateLinkRequest | request

try {
    $result = $apiInstance->createRedirectLinkUsingPOST($create_or_update_affiliate_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->createRedirectLinkUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_or_update_affiliate_link_request** | [**\Keap\Core\V2\Model\CreateOrUpdateAffiliateLinkRequest**](../Model/CreateOrUpdateAffiliateLinkRequest.md)| request | |

### Return type

[**\Keap\Core\V2\Model\AffiliateLink**](../Model/AffiliateLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAffiliateCommissionProgramUsingDELETE()`

```php
deleteAffiliateCommissionProgramUsingDELETE($commission_program_id)
```

Delete a Commission Program

Deletes a Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$commission_program_id = 'commission_program_id_example'; // string | commission_program_id

try {
    $apiInstance->deleteAffiliateCommissionProgramUsingDELETE($commission_program_id);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->deleteAffiliateCommissionProgramUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**| commission_program_id | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAffiliateUsingDELETE()`

```php
deleteAffiliateUsingDELETE($id)
```

Delete Affiliate

Deletes the specified Affiliate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id

try {
    $apiInstance->deleteAffiliateUsingDELETE($id);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->deleteAffiliateUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRedirectLinkUsingDELETE()`

```php
deleteRedirectLinkUsingDELETE($redirect_id)
```

Delete an Affiliate Link

Deletes an Affiliate Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redirect_id = 'redirect_id_example'; // string | redirect_id

try {
    $apiInstance->deleteRedirectLinkUsingDELETE($redirect_id);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->deleteRedirectLinkUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redirect_id** | **string**| redirect_id | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAffiliateCommissionTotalUsingGET()`

```php
getAffiliateCommissionTotalUsingGET($affiliate_id): \Keap\Core\V2\Model\AffiliateCommissionEarned
```

Retrieve Affiliate Commission Earned and View LedgerURl for portal

Get the Affiliate Commission Earned and View LedgerURl for portal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$affiliate_id = 'affiliate_id_example'; // string | affiliate_id

try {
    $result = $apiInstance->getAffiliateCommissionTotalUsingGET($affiliate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getAffiliateCommissionTotalUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliate_id** | **string**| affiliate_id | |

### Return type

[**\Keap\Core\V2\Model\AffiliateCommissionEarned**](../Model/AffiliateCommissionEarned.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAffiliateCommissionsUsingGET()`

```php
getAffiliateCommissionsUsingGET($affiliate_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListAffiliateCommissionsResponse
```

Retrieve Affiliate Commission and Clawbacks

Retrieve a list of Affiliate's Commissions and Clawbacks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$affiliate_id = 'affiliate_id_example'; // string | affiliate_id
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `affiliateId` - (String) `since_time` - (String) `until_time` You will need to apply the `==` operator to check the equality of one of the filters with your searched  word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples:  - `filter=since_time%3D%3D2024-09-17T-15:50+00`  - `filter=until_time%3D%3D2024-09-17T-15:50+00`  - `filter=affiliateId%3D%3D123`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `invoice_id` - `affowed_id` - `date_earned`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->getAffiliateCommissionsUsingGET($affiliate_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getAffiliateCommissionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliate_id** | **string**| affiliate_id | |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;affiliateId&#x60; - (String) &#x60;since_time&#x60; - (String) &#x60;until_time&#x60; You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched  word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples:  - &#x60;filter&#x3D;since_time%3D%3D2024-09-17T-15:50+00&#x60;  - &#x60;filter&#x3D;until_time%3D%3D2024-09-17T-15:50+00&#x60;  - &#x60;filter&#x3D;affiliateId%3D%3D123&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;invoice_id&#x60; - &#x60;affowed_id&#x60; - &#x60;date_earned&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListAffiliateCommissionsResponse**](../Model/ListAffiliateCommissionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAffiliateUsingGET1()`

```php
getAffiliateUsingGET1($id): \Keap\Core\V2\Model\RestAffiliate
```

Retrieve an Affiliate

Retrieves a single Affiliate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id

try {
    $result = $apiInstance->getAffiliateUsingGET1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getAffiliateUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |

### Return type

[**\Keap\Core\V2\Model\RestAffiliate**](../Model/RestAffiliate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommissionProgramUsingGET()`

```php
getCommissionProgramUsingGET($commission_program_id): \Keap\Core\V2\Model\AffiliateProgramV2
```

Retrieve a Commission Program

Retrieves a single Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$commission_program_id = 'commission_program_id_example'; // string | commission_program_id

try {
    $result = $apiInstance->getCommissionProgramUsingGET($commission_program_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getCommissionProgramUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**| commission_program_id | |

### Return type

[**\Keap\Core\V2\Model\AffiliateProgramV2**](../Model/AffiliateProgramV2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRedirectLinkUsingGET()`

```php
getRedirectLinkUsingGET($redirect_id): \Keap\Core\V2\Model\AffiliateLink
```

Retrieve an Affiliate Link

Retrieves information about a single Affiliate Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redirect_id = 'redirect_id_example'; // string | redirect_id

try {
    $result = $apiInstance->getRedirectLinkUsingGET($redirect_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getRedirectLinkUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redirect_id** | **string**| redirect_id | |

### Return type

[**\Keap\Core\V2\Model\AffiliateLink**](../Model/AffiliateLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAffiliateCommissionProgramsUsingGET()`

```php
listAffiliateCommissionProgramsUsingGET($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListAffiliateCommissionProgramsResponse
```

List Affiliate Commission Programs

Retrieves a list of Affiliate Commission Programs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name` - (String) `affiliate_id`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name` - `date_created`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listAffiliateCommissionProgramsUsingGET($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->listAffiliateCommissionProgramsUsingGET: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAffiliateLinksUsingGET()`

```php
listAffiliateLinksUsingGET($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListAffiliateLinksResponse
```

List Affiliate Links

Retrieves a list of Affiliate Links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name` - (String) `affiliate_id`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name` - `date_created`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listAffiliateLinksUsingGET($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->listAffiliateLinksUsingGET: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSummariesUsingGET1()`

```php
listSummariesUsingGET1($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListAffiliateSummariesResponse
```

List Affiliate Summaries

Retrieves a list of Affiliate Summaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (List[String]) `affiliate_ids` - (String) `since_time` - (String) `until_time` You will need to apply the `==` operator to check the equality of one of the filters with your searched  word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples:  - `filter=since_time%3D%3D2024-09-17T-15:50+00`  - `filter=until_time%3D%3D2024-09-17T-15:50+00`  - `filter=affiliate_ids%3D%3D123,456,789`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `affiliate_id` - `amount_earned` - `balance` - `clawbacks`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listSummariesUsingGET1($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->listSummariesUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (List[String]) &#x60;affiliate_ids&#x60; - (String) &#x60;since_time&#x60; - (String) &#x60;until_time&#x60; You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched  word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples:  - &#x60;filter&#x3D;since_time%3D%3D2024-09-17T-15:50+00&#x60;  - &#x60;filter&#x3D;until_time%3D%3D2024-09-17T-15:50+00&#x60;  - &#x60;filter&#x3D;affiliate_ids%3D%3D123,456,789&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;affiliate_id&#x60; - &#x60;amount_earned&#x60; - &#x60;balance&#x60; - &#x60;clawbacks&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListAffiliateSummariesResponse**](../Model/ListAffiliateSummariesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAffiliateFromProgramUsingPOST()`

```php
removeAffiliateFromProgramUsingPOST($id, $affiliate_remove_from_program_request)
```

Remove an Affiliate from a Commission Program

Removes an Affiliate from a Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id
$affiliate_remove_from_program_request = new \Keap\Core\V2\Model\AffiliateRemoveFromProgramRequest(); // \Keap\Core\V2\Model\AffiliateRemoveFromProgramRequest | removeFromProgramRequest

try {
    $apiInstance->removeAffiliateFromProgramUsingPOST($id, $affiliate_remove_from_program_request);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->removeAffiliateFromProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |
| **affiliate_remove_from_program_request** | [**\Keap\Core\V2\Model\AffiliateRemoveFromProgramRequest**](../Model/AffiliateRemoveFromProgramRequest.md)| removeFromProgramRequest | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeProductCommissionFromCommissionsUsingPOST()`

```php
removeProductCommissionFromCommissionsUsingPOST($commission_id, $delete_program_commission_request)
```

Remove a Product from a Commission Program

Removes a Product from a Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$commission_id = 'commission_id_example'; // string | commission_id
$delete_program_commission_request = new \Keap\Core\V2\Model\DeleteProgramCommissionRequest(); // \Keap\Core\V2\Model\DeleteProgramCommissionRequest | deleteProgramCommissionRequest

try {
    $apiInstance->removeProductCommissionFromCommissionsUsingPOST($commission_id, $delete_program_commission_request);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->removeProductCommissionFromCommissionsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_id** | **string**| commission_id | |
| **delete_program_commission_request** | [**\Keap\Core\V2\Model\DeleteProgramCommissionRequest**](../Model/DeleteProgramCommissionRequest.md)| deleteProgramCommissionRequest | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeSubscriptionPlanCommissionFromCommissionsUsingPOST()`

```php
removeSubscriptionPlanCommissionFromCommissionsUsingPOST($commission_id, $delete_subscription_plan_commission_request)
```

Remove a Subscription from a Commission Program

Removes a Subscription from a Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$commission_id = 'commission_id_example'; // string | commission_id
$delete_subscription_plan_commission_request = new \Keap\Core\V2\Model\DeleteSubscriptionPlanCommissionRequest(); // \Keap\Core\V2\Model\DeleteSubscriptionPlanCommissionRequest | deleteSubscriptionPlanCommissionRequest

try {
    $apiInstance->removeSubscriptionPlanCommissionFromCommissionsUsingPOST($commission_id, $delete_subscription_plan_commission_request);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->removeSubscriptionPlanCommissionFromCommissionsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_id** | **string**| commission_id | |
| **delete_subscription_plan_commission_request** | [**\Keap\Core\V2\Model\DeleteSubscriptionPlanCommissionRequest**](../Model/DeleteSubscriptionPlanCommissionRequest.md)| deleteSubscriptionPlanCommissionRequest | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAffiliateUsingPATCH()`

```php
updateAffiliateUsingPATCH($id, $update_affiliate_request): \Keap\Core\V2\Model\RestAffiliate
```

Update an Affiliate

Updates a single Affiliate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id
$update_affiliate_request = new \Keap\Core\V2\Model\UpdateAffiliateRequest(); // \Keap\Core\V2\Model\UpdateAffiliateRequest | Request to update an affiliate

try {
    $result = $apiInstance->updateAffiliateUsingPATCH($id, $update_affiliate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->updateAffiliateUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |
| **update_affiliate_request** | [**\Keap\Core\V2\Model\UpdateAffiliateRequest**](../Model/UpdateAffiliateRequest.md)| Request to update an affiliate | [optional] |

### Return type

[**\Keap\Core\V2\Model\RestAffiliate**](../Model/RestAffiliate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommissionProgramUsingPATCH()`

```php
updateCommissionProgramUsingPATCH($commission_program_id, $update_commission_program_request, $update_mask): \Keap\Core\V2\Model\AffiliateCommissionProgramResponse
```

Update an Affiliate Commission Program

Updates the properties of an Affiliate Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$commission_program_id = 'commission_program_id_example'; // string | commission_program_id
$update_commission_program_request = new \Keap\Core\V2\Model\UpdateCommissionProgramRequest(); // \Keap\Core\V2\Model\UpdateCommissionProgramRequest | updateCommissionProgramRequest
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateCommissionProgramUsingPATCH($commission_program_id, $update_commission_program_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->updateCommissionProgramUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**| commission_program_id | |
| **update_commission_program_request** | [**\Keap\Core\V2\Model\UpdateCommissionProgramRequest**](../Model/UpdateCommissionProgramRequest.md)| updateCommissionProgramRequest | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\AffiliateCommissionProgramResponse**](../Model/AffiliateCommissionProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDefaultCommissionProgramUsingPATCH()`

```php
updateDefaultCommissionProgramUsingPATCH($commission_program_id, $update_mask, $update_default_commission_program_request): \Keap\Core\V2\Model\SetDefaultCommissionProgramResponse
```

Update a Default Commission Program

Updates a Default Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$commission_program_id = 'commission_program_id_example'; // string | commission_program_id
$update_mask = array('update_mask_example'); // string[] | update_mask
$update_default_commission_program_request = new \Keap\Core\V2\Model\UpdateDefaultCommissionProgramRequest(); // \Keap\Core\V2\Model\UpdateDefaultCommissionProgramRequest | Values of the default Commission Program

try {
    $result = $apiInstance->updateDefaultCommissionProgramUsingPATCH($commission_program_id, $update_mask, $update_default_commission_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->updateDefaultCommissionProgramUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**| commission_program_id | |
| **update_mask** | [**string[]**](../Model/string.md)| update_mask | [optional] |
| **update_default_commission_program_request** | [**\Keap\Core\V2\Model\UpdateDefaultCommissionProgramRequest**](../Model/UpdateDefaultCommissionProgramRequest.md)| Values of the default Commission Program | [optional] |

### Return type

[**\Keap\Core\V2\Model\SetDefaultCommissionProgramResponse**](../Model/SetDefaultCommissionProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductCommissionProgramUsingPATCH()`

```php
updateProductCommissionProgramUsingPATCH($commission_program_id, $update_mask, $update_product_commission_program_request): \Keap\Core\V2\Model\ProductCommissionProgram
```

Update a Product Commission Program

Updates a Product Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$commission_program_id = 'commission_program_id_example'; // string | commission_program_id
$update_mask = array('update_mask_example'); // string[] | update_mask
$update_product_commission_program_request = new \Keap\Core\V2\Model\UpdateProductCommissionProgramRequest(); // \Keap\Core\V2\Model\UpdateProductCommissionProgramRequest | Values of the product Commission Program

try {
    $result = $apiInstance->updateProductCommissionProgramUsingPATCH($commission_program_id, $update_mask, $update_product_commission_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->updateProductCommissionProgramUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**| commission_program_id | |
| **update_mask** | [**string[]**](../Model/string.md)| update_mask | [optional] |
| **update_product_commission_program_request** | [**\Keap\Core\V2\Model\UpdateProductCommissionProgramRequest**](../Model/UpdateProductCommissionProgramRequest.md)| Values of the product Commission Program | [optional] |

### Return type

[**\Keap\Core\V2\Model\ProductCommissionProgram**](../Model/ProductCommissionProgram.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRedirectLinkUsingPATCH()`

```php
updateRedirectLinkUsingPATCH($redirect_id, $create_or_update_affiliate_link_request): \Keap\Core\V2\Model\AffiliateLink
```

Update an Affiliate Link

Updates an Affiliate Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redirect_id = 'redirect_id_example'; // string | redirect_id
$create_or_update_affiliate_link_request = new \Keap\Core\V2\Model\CreateOrUpdateAffiliateLinkRequest(); // \Keap\Core\V2\Model\CreateOrUpdateAffiliateLinkRequest | request

try {
    $result = $apiInstance->updateRedirectLinkUsingPATCH($redirect_id, $create_or_update_affiliate_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->updateRedirectLinkUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redirect_id** | **string**| redirect_id | |
| **create_or_update_affiliate_link_request** | [**\Keap\Core\V2\Model\CreateOrUpdateAffiliateLinkRequest**](../Model/CreateOrUpdateAffiliateLinkRequest.md)| request | |

### Return type

[**\Keap\Core\V2\Model\AffiliateLink**](../Model/AffiliateLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscriptionCommissionProgramUsingPATCH()`

```php
updateSubscriptionCommissionProgramUsingPATCH($commission_program_id, $update_mask, $update_subscription_commission_program_request): \Keap\Core\V2\Model\SubscriptionCommissionProgram
```

Update a Subscription Commission Program

Updates a Subscription Commission Program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$commission_program_id = 'commission_program_id_example'; // string | commission_program_id
$update_mask = array('update_mask_example'); // string[] | update_mask
$update_subscription_commission_program_request = new \Keap\Core\V2\Model\UpdateSubscriptionCommissionProgramRequest(); // \Keap\Core\V2\Model\UpdateSubscriptionCommissionProgramRequest | Values of the subscription Commission Program

try {
    $result = $apiInstance->updateSubscriptionCommissionProgramUsingPATCH($commission_program_id, $update_mask, $update_subscription_commission_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->updateSubscriptionCommissionProgramUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commission_program_id** | **string**| commission_program_id | |
| **update_mask** | [**string[]**](../Model/string.md)| update_mask | [optional] |
| **update_subscription_commission_program_request** | [**\Keap\Core\V2\Model\UpdateSubscriptionCommissionProgramRequest**](../Model/UpdateSubscriptionCommissionProgramRequest.md)| Values of the subscription Commission Program | [optional] |

### Return type

[**\Keap\Core\V2\Model\SubscriptionCommissionProgram**](../Model/SubscriptionCommissionProgram.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
