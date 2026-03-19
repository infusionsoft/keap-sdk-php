# Keap\Core\V2\OrderTotalDiscountsApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrderTotalDiscount()**](OrderTotalDiscountsApi.md#createOrderTotalDiscount) | **POST** /rest/v2/discounts/orderTotals | Create an Order Total Discount |
| [**deleteOrderTotalDiscount()**](OrderTotalDiscountsApi.md#deleteOrderTotalDiscount) | **DELETE** /rest/v2/discounts/orderTotals/{discount_id} | Delete an Order Total Discount |
| [**getOrderTotalDiscount()**](OrderTotalDiscountsApi.md#getOrderTotalDiscount) | **GET** /rest/v2/discounts/orderTotals/{discount_id} | Retrieve an Order Total Discount |
| [**listOrderTotalDiscounts()**](OrderTotalDiscountsApi.md#listOrderTotalDiscounts) | **GET** /rest/v2/discounts/orderTotals | List all Order Total Discounts |
| [**updateOrderTotalDiscount()**](OrderTotalDiscountsApi.md#updateOrderTotalDiscount) | **PATCH** /rest/v2/discounts/orderTotals/{discount_id} | Update an Order Total Discount |


## `createOrderTotalDiscount()`

```php
createOrderTotalDiscount($create_order_total_discount_request): \Keap\Core\V2\Model\OrderTotalDiscount
```

Create an Order Total Discount

Creates an Order Total Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrderTotalDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_order_total_discount_request = new \Keap\Core\V2\Model\CreateOrderTotalDiscountRequest(); // \Keap\Core\V2\Model\CreateOrderTotalDiscountRequest

try {
    $result = $apiInstance->createOrderTotalDiscount($create_order_total_discount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTotalDiscountsApi->createOrderTotalDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_order_total_discount_request** | [**\Keap\Core\V2\Model\CreateOrderTotalDiscountRequest**](../Model/CreateOrderTotalDiscountRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\OrderTotalDiscount**](../Model/OrderTotalDiscount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrderTotalDiscount()`

```php
deleteOrderTotalDiscount($discount_id)
```

Delete an Order Total Discount

Deletes a specified Order Total Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrderTotalDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discount_id = 'discount_id_example'; // string

try {
    $apiInstance->deleteOrderTotalDiscount($discount_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderTotalDiscountsApi->deleteOrderTotalDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**|  | |

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

## `getOrderTotalDiscount()`

```php
getOrderTotalDiscount($discount_id): \Keap\Core\V2\Model\OrderTotalDiscount
```

Retrieve an Order Total Discount

Retrieves an Order Total Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrderTotalDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discount_id = 'discount_id_example'; // string

try {
    $result = $apiInstance->getOrderTotalDiscount($discount_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTotalDiscountsApi->getOrderTotalDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\OrderTotalDiscount**](../Model/OrderTotalDiscount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrderTotalDiscounts()`

```php
listOrderTotalDiscounts($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListOrderTotalDiscountsResponse
```

List all Order Total Discounts

Retrieves a list of Order Total Discounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrderTotalDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (Boolean) `apply_to_commissions` - (DiscountStrategy) `discount_strategy`: GROSS or NET - (DiscountType) `discount_type`: AMOUNT or PERCENT - (Double) `discount_value`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=apply_to_commissions%3D%3Dtrue` - `filter=discount_strategy%3D%3DGROSS` - `filter=discount_type%3D%3DAMOUNT` - `filter=discount_value%3D%3D10.0` - `filter=discount_type%3D%3DAMOUNT%3Bdiscount_strategy%3D%3DNET`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `apply_to_commissions` - `discount_strategy` - `discount_type` - `discount_value` - `id` - `name`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listOrderTotalDiscounts($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTotalDiscountsApi->listOrderTotalDiscounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (Boolean) &#x60;apply_to_commissions&#x60; - (DiscountStrategy) &#x60;discount_strategy&#x60;: GROSS or NET - (DiscountType) &#x60;discount_type&#x60;: AMOUNT or PERCENT - (Double) &#x60;discount_value&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;apply_to_commissions%3D%3Dtrue&#x60; - &#x60;filter&#x3D;discount_strategy%3D%3DGROSS&#x60; - &#x60;filter&#x3D;discount_type%3D%3DAMOUNT&#x60; - &#x60;filter&#x3D;discount_value%3D%3D10.0&#x60; - &#x60;filter&#x3D;discount_type%3D%3DAMOUNT%3Bdiscount_strategy%3D%3DNET&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;apply_to_commissions&#x60; - &#x60;discount_strategy&#x60; - &#x60;discount_type&#x60; - &#x60;discount_value&#x60; - &#x60;id&#x60; - &#x60;name&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListOrderTotalDiscountsResponse**](../Model/ListOrderTotalDiscountsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderTotalDiscount()`

```php
updateOrderTotalDiscount($discount_id, $update_order_total_discount_request, $update_mask): \Keap\Core\V2\Model\OrderTotalDiscount
```

Update an Order Total Discount

Updates an Order Total Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrderTotalDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discount_id = 'discount_id_example'; // string
$update_order_total_discount_request = new \Keap\Core\V2\Model\UpdateOrderTotalDiscountRequest(); // \Keap\Core\V2\Model\UpdateOrderTotalDiscountRequest
$update_mask = 'update_mask_example'; // string | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateOrderTotalDiscount($discount_id, $update_order_total_discount_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTotalDiscountsApi->updateOrderTotalDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**|  | |
| **update_order_total_discount_request** | [**\Keap\Core\V2\Model\UpdateOrderTotalDiscountRequest**](../Model/UpdateOrderTotalDiscountRequest.md)|  | |
| **update_mask** | **string**| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\OrderTotalDiscount**](../Model/OrderTotalDiscount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
