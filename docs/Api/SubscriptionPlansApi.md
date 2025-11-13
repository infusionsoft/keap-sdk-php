# Keap\Core\V2\SubscriptionPlansApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSubscriptionPlans()**](SubscriptionPlansApi.md#createSubscriptionPlans) | **POST** /v2/products/{product_id}/subscriptions | Create Subscription Plan |
| [**deleteSubscriptionPlan()**](SubscriptionPlansApi.md#deleteSubscriptionPlan) | **DELETE** /v2/products/{product_id}/subscriptions/{subscription_plan_id} | Delete Subscription Plan |
| [**fetchSubscriptionPlan()**](SubscriptionPlansApi.md#fetchSubscriptionPlan) | **GET** /v2/products/{product_id}/subscriptions/{subscription_plan_id} | Get Subscription Plan |
| [**listSubscriptionPlans()**](SubscriptionPlansApi.md#listSubscriptionPlans) | **GET** /v2/products/{product_id}/subscriptions | List Subscription Plans |
| [**updateSubscriptionPlan()**](SubscriptionPlansApi.md#updateSubscriptionPlan) | **PATCH** /v2/products/{product_id}/subscriptions/{subscription_plan_id} | Update Subscription Plan |


## `createSubscriptionPlans()`

```php
createSubscriptionPlans($product_id, $create_subscription_plan_request): \Keap\Core\V2\Model\SubscriptionPlan
```

Create Subscription Plan

Creates a Subscription Plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\SubscriptionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string | product_id
$create_subscription_plan_request = new \Keap\Core\V2\Model\CreateSubscriptionPlanRequest(); // \Keap\Core\V2\Model\CreateSubscriptionPlanRequest | createSubscriptionPlanRequest

try {
    $result = $apiInstance->createSubscriptionPlans($product_id, $create_subscription_plan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlansApi->createSubscriptionPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **create_subscription_plan_request** | [**\Keap\Core\V2\Model\CreateSubscriptionPlanRequest**](../Model/CreateSubscriptionPlanRequest.md)| createSubscriptionPlanRequest | |

### Return type

[**\Keap\Core\V2\Model\SubscriptionPlan**](../Model/SubscriptionPlan.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubscriptionPlan()`

```php
deleteSubscriptionPlan($product_id, $subscription_plan_id)
```

Delete Subscription Plan

Deletes a Subscription Plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\SubscriptionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string | product_id
$subscription_plan_id = 'subscription_plan_id_example'; // string | subscription_plan_id

try {
    $apiInstance->deleteSubscriptionPlan($product_id, $subscription_plan_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlansApi->deleteSubscriptionPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **subscription_plan_id** | **string**| subscription_plan_id | |

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

## `fetchSubscriptionPlan()`

```php
fetchSubscriptionPlan($product_id, $subscription_plan_id): \Keap\Core\V2\Model\SubscriptionPlan
```

Get Subscription Plan

Retrieves a Subscription Plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\SubscriptionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string | product_id
$subscription_plan_id = 'subscription_plan_id_example'; // string | subscription_plan_id

try {
    $result = $apiInstance->fetchSubscriptionPlan($product_id, $subscription_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlansApi->fetchSubscriptionPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **subscription_plan_id** | **string**| subscription_plan_id | |

### Return type

[**\Keap\Core\V2\Model\SubscriptionPlan**](../Model/SubscriptionPlan.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSubscriptionPlans()`

```php
listSubscriptionPlans($product_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListSubscriptionPlansResponse
```

List Subscription Plans

Retrieves a list of Subscription Plans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\SubscriptionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = '-' can be used for a wildcard (/v2/products/-/subscriptions; // string | product_id
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (Boolean) `active`: true or false - (BillingCycle) `cycle_type`: DAILY, WEEKLY, MONTHLY, YEARLY You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=active%3D%3Dtrue` - `filter=cycle_type%3D%3DDAILY` - `filter=active%3D%3Dfalse%3Bcycle_type%3D%3DWEEKLY`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `id` - `product_id`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listSubscriptionPlans($product_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlansApi->listSubscriptionPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **filter** | **string**| Filter to apply, allowed fields are: - (Boolean) &#x60;active&#x60;: true or false - (BillingCycle) &#x60;cycle_type&#x60;: DAILY, WEEKLY, MONTHLY, YEARLY You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;active%3D%3Dtrue&#x60; - &#x60;filter&#x3D;cycle_type%3D%3DDAILY&#x60; - &#x60;filter&#x3D;active%3D%3Dfalse%3Bcycle_type%3D%3DWEEKLY&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;id&#x60; - &#x60;product_id&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListSubscriptionPlansResponse**](../Model/ListSubscriptionPlansResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscriptionPlan()`

```php
updateSubscriptionPlan($product_id, $subscription_plan_id, $update_subscription_plan_request, $update_mask): \Keap\Core\V2\Model\SubscriptionPlan
```

Update Subscription Plan

Updates a Subscription Plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\SubscriptionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string | product_id
$subscription_plan_id = 'subscription_plan_id_example'; // string | subscription_plan_id
$update_subscription_plan_request = new \Keap\Core\V2\Model\UpdateSubscriptionPlanRequest(); // \Keap\Core\V2\Model\UpdateSubscriptionPlanRequest | updateSubscriptionPlanRequest
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateSubscriptionPlan($product_id, $subscription_plan_id, $update_subscription_plan_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlansApi->updateSubscriptionPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **subscription_plan_id** | **string**| subscription_plan_id | |
| **update_subscription_plan_request** | [**\Keap\Core\V2\Model\UpdateSubscriptionPlanRequest**](../Model/UpdateSubscriptionPlanRequest.md)| updateSubscriptionPlanRequest | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\SubscriptionPlan**](../Model/SubscriptionPlan.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
