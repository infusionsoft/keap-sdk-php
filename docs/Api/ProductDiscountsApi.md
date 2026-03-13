# Keap\Core\V2\ProductDiscountsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProductDiscount()**](ProductDiscountsApi.md#createProductDiscount) | **POST** /v2/discounts/products | Create a Product Discount |
| [**deleteProductDiscount()**](ProductDiscountsApi.md#deleteProductDiscount) | **DELETE** /v2/discounts/products/{discount_id} | Delete a Product Discount |
| [**getProductDiscount()**](ProductDiscountsApi.md#getProductDiscount) | **GET** /v2/discounts/products/{discount_id} | Retrieve a Product Discount |
| [**listProductDiscounts()**](ProductDiscountsApi.md#listProductDiscounts) | **GET** /v2/discounts/products | List all Product Discounts |
| [**updateProductDiscount()**](ProductDiscountsApi.md#updateProductDiscount) | **PATCH** /v2/discounts/products/{discount_id} | Update a Product Discount |


## `createProductDiscount()`

```php
createProductDiscount($create_product_discount_request): \Keap\Core\V2\Model\ProductDiscount
```

Create a Product Discount

Creates a Product Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_product_discount_request = new \Keap\Core\V2\Model\CreateProductDiscountRequest(); // \Keap\Core\V2\Model\CreateProductDiscountRequest | request

try {
    $result = $apiInstance->createProductDiscount($create_product_discount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDiscountsApi->createProductDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_product_discount_request** | [**\Keap\Core\V2\Model\CreateProductDiscountRequest**](../Model/CreateProductDiscountRequest.md)| request | |

### Return type

[**\Keap\Core\V2\Model\ProductDiscount**](../Model/ProductDiscount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductDiscount()`

```php
deleteProductDiscount($discount_id)
```

Delete a Product Discount

Deletes a specified Product Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_id = 'discount_id_example'; // string | discount_id

try {
    $apiInstance->deleteProductDiscount($discount_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductDiscountsApi->deleteProductDiscount: ', $e->getMessage(), PHP_EOL;
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

## `getProductDiscount()`

```php
getProductDiscount($discount_id): \Keap\Core\V2\Model\ProductDiscount
```

Retrieve a Product Discount

Retrieves a Product Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_id = 'discount_id_example'; // string | discount_id

try {
    $result = $apiInstance->getProductDiscount($discount_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDiscountsApi->getProductDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| discount_id | |

### Return type

[**\Keap\Core\V2\Model\ProductDiscount**](../Model/ProductDiscount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductDiscounts()`

```php
listProductDiscounts($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListProductDiscountsResponse
```

List all Product Discounts

Retrieves a list of Product Discounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (Boolean) `apply_to_commissions` - (DiscountType) `discount_type`: AMOUNT or PERCENT - (Double) `discount_value` - (String) `product_id`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=apply_to_commissions%3D%3Dtrue` - `filter=discount_type%3D%3DAMOUNT` - `filter=discount_value%3D%3D10.0` - `filter=product_id%3D%3D2` - `filter=discount_type%3D%3DAMOUNT%3Bdiscount_value%3D%3D10.0`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `apply_to_commissions` - `discount_type` - `discount_value` - `id` - `name` - `product_id`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listProductDiscounts($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDiscountsApi->listProductDiscounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (Boolean) &#x60;apply_to_commissions&#x60; - (DiscountType) &#x60;discount_type&#x60;: AMOUNT or PERCENT - (Double) &#x60;discount_value&#x60; - (String) &#x60;product_id&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;apply_to_commissions%3D%3Dtrue&#x60; - &#x60;filter&#x3D;discount_type%3D%3DAMOUNT&#x60; - &#x60;filter&#x3D;discount_value%3D%3D10.0&#x60; - &#x60;filter&#x3D;product_id%3D%3D2&#x60; - &#x60;filter&#x3D;discount_type%3D%3DAMOUNT%3Bdiscount_value%3D%3D10.0&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;apply_to_commissions&#x60; - &#x60;discount_type&#x60; - &#x60;discount_value&#x60; - &#x60;id&#x60; - &#x60;name&#x60; - &#x60;product_id&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListProductDiscountsResponse**](../Model/ListProductDiscountsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductDiscount()`

```php
updateProductDiscount($discount_id, $update_product_discount_request, $update_mask): \Keap\Core\V2\Model\ProductDiscount
```

Update a Product Discount

Updates a Product Discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discount_id = 'discount_id_example'; // string | discount_id
$update_product_discount_request = new \Keap\Core\V2\Model\UpdateProductDiscountRequest(); // \Keap\Core\V2\Model\UpdateProductDiscountRequest | request
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateProductDiscount($discount_id, $update_product_discount_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductDiscountsApi->updateProductDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discount_id** | **string**| discount_id | |
| **update_product_discount_request** | [**\Keap\Core\V2\Model\UpdateProductDiscountRequest**](../Model/UpdateProductDiscountRequest.md)| request | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\ProductDiscount**](../Model/ProductDiscount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
