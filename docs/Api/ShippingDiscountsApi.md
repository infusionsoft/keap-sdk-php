# Keap\Core\V2\ShippingDiscountsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShippingDiscount()**](ShippingDiscountsApi.md#createShippingDiscount) | **POST** /v2/discounts/shipping | Create a Shipping Discount |
| [**deleteShippingDiscount()**](ShippingDiscountsApi.md#deleteShippingDiscount) | **DELETE** /v2/discounts/shipping/{discount_id} | Delete a Shipping Discount |
| [**getShippingDiscount()**](ShippingDiscountsApi.md#getShippingDiscount) | **GET** /v2/discounts/shipping/{discount_id} | Retrieve a Shipping Discount |
| [**listShippingDiscounts()**](ShippingDiscountsApi.md#listShippingDiscounts) | **GET** /v2/discounts/shipping | List all Shipping Discounts |
| [**updateShippingDiscount()**](ShippingDiscountsApi.md#updateShippingDiscount) | **PATCH** /v2/discounts/shipping/{discount_id} | Update a Shipping Discount |


## `createShippingDiscount()`

```php
createShippingDiscount($create_shipping_discount_request): \Keap\Core\V2\Model\ShippingDiscount
```

Create a Shipping Discount

Creates a Shipping Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ShippingDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_shipping_discount_request = new \Keap\Core\V2\Model\CreateShippingDiscountRequest(); // \Keap\Core\V2\Model\CreateShippingDiscountRequest | request

try {
    $result = $apiInstance->createShippingDiscount($create_shipping_discount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingDiscountsApi->createShippingDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_shipping_discount_request** | [**\Keap\Core\V2\Model\CreateShippingDiscountRequest**](../Model/CreateShippingDiscountRequest.md)| request | |

### Return type

[**\Keap\Core\V2\Model\ShippingDiscount**](../Model/ShippingDiscount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteShippingDiscount()`

```php
deleteShippingDiscount($discount_id)
```

Delete a Shipping Discount

Deletes a specified Shipping Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ShippingDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_id = 'discount_id_example'; // string | discount_id

try {
    $apiInstance->deleteShippingDiscount($discount_id);
} catch (Exception $e) {
    echo 'Exception when calling ShippingDiscountsApi->deleteShippingDiscount: ', $e->getMessage(), PHP_EOL;
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

## `getShippingDiscount()`

```php
getShippingDiscount($discount_id): \Keap\Core\V2\Model\ShippingDiscount
```

Retrieve a Shipping Discount

Retrieves a Shipping Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ShippingDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_id = 'discount_id_example'; // string | discount_id

try {
    $result = $apiInstance->getShippingDiscount($discount_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingDiscountsApi->getShippingDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| discount_id | |

### Return type

[**\Keap\Core\V2\Model\ShippingDiscount**](../Model/ShippingDiscount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listShippingDiscounts()`

```php
listShippingDiscounts($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListShippingDiscountsResponse
```

List all Shipping Discounts

Retrieves a list of Shipping Discounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ShippingDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (DiscountType) `discount_type`: AMOUNT or PERCENT - (Double) `discount_value`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=discount_type%3D%3DAMOUNT` - `filter=discount_value%3D%3D4.5` - `filter=discount_type%3D%3DAMOUNT%3Bdiscount_value%3D%3D4.5`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `discount_type` - `discount_value` - `id` - `name`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listShippingDiscounts($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingDiscountsApi->listShippingDiscounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (DiscountType) &#x60;discount_type&#x60;: AMOUNT or PERCENT - (Double) &#x60;discount_value&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;discount_type%3D%3DAMOUNT&#x60; - &#x60;filter&#x3D;discount_value%3D%3D4.5&#x60; - &#x60;filter&#x3D;discount_type%3D%3DAMOUNT%3Bdiscount_value%3D%3D4.5&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;discount_type&#x60; - &#x60;discount_value&#x60; - &#x60;id&#x60; - &#x60;name&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListShippingDiscountsResponse**](../Model/ListShippingDiscountsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateShippingDiscount()`

```php
updateShippingDiscount($discount_id, $update_shipping_discount_request, $update_mask): \Keap\Core\V2\Model\ShippingDiscount
```

Update a Shipping Discount

Updates a Shipping Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ShippingDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_id = 'discount_id_example'; // string | discount_id
$update_shipping_discount_request = new \Keap\Core\V2\Model\UpdateShippingDiscountRequest(); // \Keap\Core\V2\Model\UpdateShippingDiscountRequest | request
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateShippingDiscount($discount_id, $update_shipping_discount_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingDiscountsApi->updateShippingDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| discount_id | |
| **update_shipping_discount_request** | [**\Keap\Core\V2\Model\UpdateShippingDiscountRequest**](../Model/UpdateShippingDiscountRequest.md)| request | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\ShippingDiscount**](../Model/ShippingDiscount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
