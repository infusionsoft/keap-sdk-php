# Keap\Core\V2\OrderTotalDiscountsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrderTotalDiscountUsingPOST()**](OrderTotalDiscountsApi.md#createOrderTotalDiscountUsingPOST) | **POST** /v2/discounts/orderTotals | Create an Order Total Discount |
| [**deleteOrderTotalDiscountUsingDELETE()**](OrderTotalDiscountsApi.md#deleteOrderTotalDiscountUsingDELETE) | **DELETE** /v2/discounts/orderTotals/{discount_id} | Delete an Order Total Discount |
| [**getOrderTotalDiscountUsingGET()**](OrderTotalDiscountsApi.md#getOrderTotalDiscountUsingGET) | **GET** /v2/discounts/orderTotals/{discount_id} | Retrieve an Order Total Discount |
| [**listOrderTotalDiscountsUsingGET()**](OrderTotalDiscountsApi.md#listOrderTotalDiscountsUsingGET) | **GET** /v2/discounts/orderTotals | List all Order Total Discounts |
| [**updateOrderTotalDiscountUsingPATCH()**](OrderTotalDiscountsApi.md#updateOrderTotalDiscountUsingPATCH) | **PATCH** /v2/discounts/orderTotals/{discount_id} | Update an Order Total Discount |


## `createOrderTotalDiscountUsingPOST()`

```php
createOrderTotalDiscountUsingPOST($create_order_total_discount_request): \Keap\Core\V2\Model\OrderTotalDiscount
```

Create an Order Total Discount

Creates an Order Total Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OrderTotalDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_order_total_discount_request = new \Keap\Core\V2\Model\CreateOrderTotalDiscountRequest(); // \Keap\Core\V2\Model\CreateOrderTotalDiscountRequest | request

try {
    $result = $apiInstance->createOrderTotalDiscountUsingPOST($create_order_total_discount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTotalDiscountsApi->createOrderTotalDiscountUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_order_total_discount_request** | [**\Keap\Core\V2\Model\CreateOrderTotalDiscountRequest**](../Model/CreateOrderTotalDiscountRequest.md)| request | |

### Return type

[**\Keap\Core\V2\Model\OrderTotalDiscount**](../Model/OrderTotalDiscount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrderTotalDiscountUsingDELETE()`

```php
deleteOrderTotalDiscountUsingDELETE($discount_id)
```

Delete an Order Total Discount

Deletes a specified Order Total Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OrderTotalDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_id = 'discount_id_example'; // string | discount_id

try {
    $apiInstance->deleteOrderTotalDiscountUsingDELETE($discount_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderTotalDiscountsApi->deleteOrderTotalDiscountUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

## `getOrderTotalDiscountUsingGET()`

```php
getOrderTotalDiscountUsingGET($discount_id): \Keap\Core\V2\Model\OrderTotalDiscount
```

Retrieve an Order Total Discount

Retrieves an Order Total Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OrderTotalDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_id = 'discount_id_example'; // string | discount_id

try {
    $result = $apiInstance->getOrderTotalDiscountUsingGET($discount_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTotalDiscountsApi->getOrderTotalDiscountUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| discount_id | |

### Return type

[**\Keap\Core\V2\Model\OrderTotalDiscount**](../Model/OrderTotalDiscount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrderTotalDiscountsUsingGET()`

```php
listOrderTotalDiscountsUsingGET($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListOrderTotalDiscountsResponse
```

List all Order Total Discounts

Retrieves a list of Order Total Discounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OrderTotalDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (Boolean) `apply_to_commissions` - (DiscountStrategy) `discount_strategy`: GROSS or NET - (DiscountType) `discount_type`: AMOUNT or PERCENT - (Double) `discount_value`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=apply_to_commissions%3D%3Dtrue` - `filter=discount_strategy%3D%3DGROSS` - `filter=discount_type%3D%3DAMOUNT` - `filter=discount_value%3D%3D10.0` - `filter=discount_type%3D%3DAMOUNT%3Bdiscount_strategy%3D%3DNET`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `apply_to_commissions` - `discount_strategy` - `discount_type` - `discount_value` - `id`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listOrderTotalDiscountsUsingGET($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTotalDiscountsApi->listOrderTotalDiscountsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (Boolean) &#x60;apply_to_commissions&#x60; - (DiscountStrategy) &#x60;discount_strategy&#x60;: GROSS or NET - (DiscountType) &#x60;discount_type&#x60;: AMOUNT or PERCENT - (Double) &#x60;discount_value&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;apply_to_commissions%3D%3Dtrue&#x60; - &#x60;filter&#x3D;discount_strategy%3D%3DGROSS&#x60; - &#x60;filter&#x3D;discount_type%3D%3DAMOUNT&#x60; - &#x60;filter&#x3D;discount_value%3D%3D10.0&#x60; - &#x60;filter&#x3D;discount_type%3D%3DAMOUNT%3Bdiscount_strategy%3D%3DNET&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;apply_to_commissions&#x60; - &#x60;discount_strategy&#x60; - &#x60;discount_type&#x60; - &#x60;discount_value&#x60; - &#x60;id&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListOrderTotalDiscountsResponse**](../Model/ListOrderTotalDiscountsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderTotalDiscountUsingPATCH()`

```php
updateOrderTotalDiscountUsingPATCH($discount_id, $update_order_total_discount_request, $update_mask): \Keap\Core\V2\Model\OrderTotalDiscount
```

Update an Order Total Discount

Updates an Order Total Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OrderTotalDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_id = 'discount_id_example'; // string | discount_id
$update_order_total_discount_request = new \Keap\Core\V2\Model\UpdateOrderTotalDiscountRequest(); // \Keap\Core\V2\Model\UpdateOrderTotalDiscountRequest | request
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateOrderTotalDiscountUsingPATCH($discount_id, $update_order_total_discount_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTotalDiscountsApi->updateOrderTotalDiscountUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| discount_id | |
| **update_order_total_discount_request** | [**\Keap\Core\V2\Model\UpdateOrderTotalDiscountRequest**](../Model/UpdateOrderTotalDiscountRequest.md)| request | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\OrderTotalDiscount**](../Model/OrderTotalDiscount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
