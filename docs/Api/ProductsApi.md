# Keap\Core\V2\ProductsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adjustInventory()**](ProductsApi.md#adjustInventory) | **POST** /v2/products/{product_id}:adjustInventory | Adjust Inventory of a Product |
| [**createProduct()**](ProductsApi.md#createProduct) | **POST** /v2/products | Create a Product |
| [**createProductImage()**](ProductsApi.md#createProductImage) | **POST** /v2/products/{product_id}/images | Create the Product Image |
| [**deleteProduct()**](ProductsApi.md#deleteProduct) | **DELETE** /v2/products/{product_id} | Delete a Product |
| [**deleteProductImage()**](ProductsApi.md#deleteProductImage) | **DELETE** /v2/products/{product_id}/images | Delete the Product Image |
| [**getProduct()**](ProductsApi.md#getProduct) | **GET** /v2/products/{product_id} | Get a Product |
| [**listProducts()**](ProductsApi.md#listProducts) | **GET** /v2/products | List Products |
| [**updateProduct()**](ProductsApi.md#updateProduct) | **PATCH** /v2/products/{product_id} | Update a Product |


## `adjustInventory()`

```php
adjustInventory($product_id, $update_product_inventory_request): \Keap\Core\V2\Model\RestV2Product
```

Adjust Inventory of a Product

Increase or decrease the quantity of the Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string | product_id
$update_product_inventory_request = new \Keap\Core\V2\Model\UpdateProductInventoryRequest(); // \Keap\Core\V2\Model\UpdateProductInventoryRequest | updateProductInventoryRequest

try {
    $result = $apiInstance->adjustInventory($product_id, $update_product_inventory_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->adjustInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **update_product_inventory_request** | [**\Keap\Core\V2\Model\UpdateProductInventoryRequest**](../Model/UpdateProductInventoryRequest.md)| updateProductInventoryRequest | |

### Return type

[**\Keap\Core\V2\Model\RestV2Product**](../Model/RestV2Product.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProduct()`

```php
createProduct($create_product_request): \Keap\Core\V2\Model\RestV2Product
```

Create a Product

Creates a new product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_product_request = new \Keap\Core\V2\Model\CreateProductRequest(); // \Keap\Core\V2\Model\CreateProductRequest | createProductRequest

try {
    $result = $apiInstance->createProduct($create_product_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_product_request** | [**\Keap\Core\V2\Model\CreateProductRequest**](../Model/CreateProductRequest.md)| createProductRequest | |

### Return type

[**\Keap\Core\V2\Model\RestV2Product**](../Model/RestV2Product.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductImage()`

```php
createProductImage($product_id, $file)
```

Create the Product Image

Creates the Product Image file and uploads it to the specified Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string | product_id
$file = '/path/to/file.txt'; // \SplFileObject | File to upload

try {
    $apiInstance->createProductImage($product_id, $file);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createProductImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **file** | **\SplFileObject****\SplFileObject**| File to upload | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProduct()`

```php
deleteProduct($product_id)
```

Delete a Product

Deletes a single product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string | product_id

try {
    $apiInstance->deleteProduct($product_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |

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

## `deleteProductImage()`

```php
deleteProductImage($product_id)
```

Delete the Product Image

Deletes the Product Image from the specified Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string | product_id

try {
    $apiInstance->deleteProductImage($product_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProductImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |

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

## `getProduct()`

```php
getProduct($product_id): \Keap\Core\V2\Model\RestV2Product
```

Get a Product

Gets a single Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string | product_id

try {
    $result = $apiInstance->getProduct($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |

### Return type

[**\Keap\Core\V2\Model\RestV2Product**](../Model/RestV2Product.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProducts()`

```php
listProducts($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListProductsResponse
```

List Products

Retrieves a list of Products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listProducts($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;name&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;name&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListProductsResponse**](../Model/ListProductsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProduct()`

```php
updateProduct($product_id, $update_product_request, $update_mask): \Keap\Core\V2\Model\RestV2Product
```

Update a Product

Updates a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string | product_id
$update_product_request = new \Keap\Core\V2\Model\UpdateProductRequest(); // \Keap\Core\V2\Model\UpdateProductRequest | updateProductRequest
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateProduct($product_id, $update_product_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **update_product_request** | [**\Keap\Core\V2\Model\UpdateProductRequest**](../Model/UpdateProductRequest.md)| updateProductRequest | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\RestV2Product**](../Model/RestV2Product.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
