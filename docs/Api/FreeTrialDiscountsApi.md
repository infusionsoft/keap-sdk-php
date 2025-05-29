# Keap\Core\V2\FreeTrialDiscountsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDiscountUsingPOST1()**](FreeTrialDiscountsApi.md#createDiscountUsingPOST1) | **POST** /v2/discounts/freeTrials | Create a Subscription Free Trial Discount |
| [**deleteDiscountUsingDELETE1()**](FreeTrialDiscountsApi.md#deleteDiscountUsingDELETE1) | **DELETE** /v2/discounts/freeTrials/{discount_id} | Delete a Subscription Free Trial Discount |
| [**getDiscountUsingGET1()**](FreeTrialDiscountsApi.md#getDiscountUsingGET1) | **GET** /v2/discounts/freeTrials/{discount_id} | Retrieve a Subscription Free Trial Discount |
| [**listFreeTrialsUsingGET()**](FreeTrialDiscountsApi.md#listFreeTrialsUsingGET) | **GET** /v2/discounts/freeTrials | List all Subscription Free Trial Discounts |
| [**updateDiscountUsingPATCH1()**](FreeTrialDiscountsApi.md#updateDiscountUsingPATCH1) | **PATCH** /v2/discounts/freeTrials/{discount_id} | Update a Subscription Free Trial Discount |


## `createDiscountUsingPOST1()`

```php
createDiscountUsingPOST1($create_free_trial_discount_request): \Keap\Core\V2\Model\FreeTrialDiscount
```

Create a Subscription Free Trial Discount

Creates a Subscription Free Trial Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\FreeTrialDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_free_trial_discount_request = new \Keap\Core\V2\Model\CreateFreeTrialDiscountRequest(); // \Keap\Core\V2\Model\CreateFreeTrialDiscountRequest | createFreeTrialDiscountRequest

try {
    $result = $apiInstance->createDiscountUsingPOST1($create_free_trial_discount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeTrialDiscountsApi->createDiscountUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_free_trial_discount_request** | [**\Keap\Core\V2\Model\CreateFreeTrialDiscountRequest**](../Model/CreateFreeTrialDiscountRequest.md)| createFreeTrialDiscountRequest | |

### Return type

[**\Keap\Core\V2\Model\FreeTrialDiscount**](../Model/FreeTrialDiscount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDiscountUsingDELETE1()`

```php
deleteDiscountUsingDELETE1($discount_id)
```

Delete a Subscription Free Trial Discount

Deletes a specified Subscription Free Trial Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\FreeTrialDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_id = 'discount_id_example'; // string | discount_id

try {
    $apiInstance->deleteDiscountUsingDELETE1($discount_id);
} catch (Exception $e) {
    echo 'Exception when calling FreeTrialDiscountsApi->deleteDiscountUsingDELETE1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| discount_id | |

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

## `getDiscountUsingGET1()`

```php
getDiscountUsingGET1($discount_id): \Keap\Core\V2\Model\FreeTrialDiscount
```

Retrieve a Subscription Free Trial Discount

Retrieves a Subscription Free Trial Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\FreeTrialDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_id = 'discount_id_example'; // string | discount_id

try {
    $result = $apiInstance->getDiscountUsingGET1($discount_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeTrialDiscountsApi->getDiscountUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| discount_id | |

### Return type

[**\Keap\Core\V2\Model\FreeTrialDiscount**](../Model/FreeTrialDiscount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFreeTrialsUsingGET()`

```php
listFreeTrialsUsingGET($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListFreeTrialDiscountsResponse
```

List all Subscription Free Trial Discounts

Retrieves a list of Subscription Free Trial Discounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\FreeTrialDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (Integer) `free_trial_days` - (Boolean) `hide_price` - (String) `subscription_plan_id`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=free_trial_days%3D%3D14` - `filter=hide_price%3D%3DTrue` - `filter=subscription_plan_id%3D%3DmySubscriptionPlanId` - `filter=free_trial_days%3D%3D14%3Bhide_price%3D%3DFalse`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `free_trial_days` - `hide_price` - `id` - `name` - `subscription_plan_id`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listFreeTrialsUsingGET($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeTrialDiscountsApi->listFreeTrialsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (Integer) &#x60;free_trial_days&#x60; - (Boolean) &#x60;hide_price&#x60; - (String) &#x60;subscription_plan_id&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;free_trial_days%3D%3D14&#x60; - &#x60;filter&#x3D;hide_price%3D%3DTrue&#x60; - &#x60;filter&#x3D;subscription_plan_id%3D%3DmySubscriptionPlanId&#x60; - &#x60;filter&#x3D;free_trial_days%3D%3D14%3Bhide_price%3D%3DFalse&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;free_trial_days&#x60; - &#x60;hide_price&#x60; - &#x60;id&#x60; - &#x60;name&#x60; - &#x60;subscription_plan_id&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListFreeTrialDiscountsResponse**](../Model/ListFreeTrialDiscountsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDiscountUsingPATCH1()`

```php
updateDiscountUsingPATCH1($discount_id, $update_free_trial_discount_request, $update_mask): \Keap\Core\V2\Model\FreeTrialDiscount
```

Update a Subscription Free Trial Discount

Updates a Subscription Free Trial Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\FreeTrialDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_id = 'discount_id_example'; // string | discount_id
$update_free_trial_discount_request = new \Keap\Core\V2\Model\UpdateFreeTrialDiscountRequest(); // \Keap\Core\V2\Model\UpdateFreeTrialDiscountRequest | request
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateDiscountUsingPATCH1($discount_id, $update_free_trial_discount_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeTrialDiscountsApi->updateDiscountUsingPATCH1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| discount_id | |
| **update_free_trial_discount_request** | [**\Keap\Core\V2\Model\UpdateFreeTrialDiscountRequest**](../Model/UpdateFreeTrialDiscountRequest.md)| request | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\FreeTrialDiscount**](../Model/FreeTrialDiscount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
