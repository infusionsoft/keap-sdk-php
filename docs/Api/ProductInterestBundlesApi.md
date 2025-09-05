# Keap\Core\V2\ProductInterestBundlesApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addProductInterest()**](ProductInterestBundlesApi.md#addProductInterest) | **POST** /v2/productInterestBundles/{id}/interests | Create a Product Interest in an existing Bundle |
| [**createProductInterestBundle()**](ProductInterestBundlesApi.md#createProductInterestBundle) | **POST** /v2/productInterestBundles | Create a Product Interest Bundle |
| [**deleteProductInterestBundle()**](ProductInterestBundlesApi.md#deleteProductInterestBundle) | **DELETE** /v2/productInterestBundles/{id} | Delete a Product Interest Bundle |
| [**getProductInterestBundle()**](ProductInterestBundlesApi.md#getProductInterestBundle) | **GET** /v2/productInterestBundles/{id} | Get a Product Interest Bundle |
| [**listProductInterestBundles()**](ProductInterestBundlesApi.md#listProductInterestBundles) | **GET** /v2/productInterestBundles | List Product Interest Bundles |
| [**removeProductInterest()**](ProductInterestBundlesApi.md#removeProductInterest) | **DELETE** /v2/productInterestBundles/{id}/interests/{interest_id} | Delete a Product Interest from an existing Bundle |
| [**updateProductInterest()**](ProductInterestBundlesApi.md#updateProductInterest) | **PATCH** /v2/productInterestBundles/{id}/interests/{interest_id} | Update a Product Interest in an existing Bundle |
| [**updateProductInterestBundle()**](ProductInterestBundlesApi.md#updateProductInterestBundle) | **PATCH** /v2/productInterestBundles/{id} | Update a Product Interest Bundle |


## `addProductInterest()`

```php
addProductInterest($id, $add_product_interest_request): \Keap\Core\V2\Model\ProductInterest
```

Create a Product Interest in an existing Bundle

Creates a new Product Interest in an existing Bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductInterestBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id
$add_product_interest_request = new \Keap\Core\V2\Model\AddProductInterestRequest(); // \Keap\Core\V2\Model\AddProductInterestRequest | request

try {
    $result = $apiInstance->addProductInterest($id, $add_product_interest_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductInterestBundlesApi->addProductInterest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |
| **add_product_interest_request** | [**\Keap\Core\V2\Model\AddProductInterestRequest**](../Model/AddProductInterestRequest.md)| request | |

### Return type

[**\Keap\Core\V2\Model\ProductInterest**](../Model/ProductInterest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductInterestBundle()`

```php
createProductInterestBundle($create_product_interest_bundle_request): \Keap\Core\V2\Model\ProductInterestBundle
```

Create a Product Interest Bundle

Creates a new Product Interest Bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductInterestBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_product_interest_bundle_request = new \Keap\Core\V2\Model\CreateProductInterestBundleRequest(); // \Keap\Core\V2\Model\CreateProductInterestBundleRequest | createProductInterestBundleRequest

try {
    $result = $apiInstance->createProductInterestBundle($create_product_interest_bundle_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductInterestBundlesApi->createProductInterestBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_product_interest_bundle_request** | [**\Keap\Core\V2\Model\CreateProductInterestBundleRequest**](../Model/CreateProductInterestBundleRequest.md)| createProductInterestBundleRequest | |

### Return type

[**\Keap\Core\V2\Model\ProductInterestBundle**](../Model/ProductInterestBundle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductInterestBundle()`

```php
deleteProductInterestBundle($id)
```

Delete a Product Interest Bundle

Deletes an existing Product Interest Bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductInterestBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id

try {
    $apiInstance->deleteProductInterestBundle($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductInterestBundlesApi->deleteProductInterestBundle: ', $e->getMessage(), PHP_EOL;
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

## `getProductInterestBundle()`

```php
getProductInterestBundle($id): \Keap\Core\V2\Model\ProductInterestBundle
```

Get a Product Interest Bundle

Gets a single Product Interest Bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductInterestBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id

try {
    $result = $apiInstance->getProductInterestBundle($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductInterestBundlesApi->getProductInterestBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |

### Return type

[**\Keap\Core\V2\Model\ProductInterestBundle**](../Model/ProductInterestBundle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductInterestBundles()`

```php
listProductInterestBundles($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListProductInterestBundleResponse
```

List Product Interest Bundles

Retrieves a list of Product Interest Bundles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductInterestBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listProductInterestBundles($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductInterestBundlesApi->listProductInterestBundles: ', $e->getMessage(), PHP_EOL;
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

[**\Keap\Core\V2\Model\ListProductInterestBundleResponse**](../Model/ListProductInterestBundleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeProductInterest()`

```php
removeProductInterest($id, $interest_id)
```

Delete a Product Interest from an existing Bundle

Deletes an existing Product Interest from an existing Bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductInterestBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id
$interest_id = 'interest_id_example'; // string | interest_id

try {
    $apiInstance->removeProductInterest($id, $interest_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductInterestBundlesApi->removeProductInterest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |
| **interest_id** | **string**| interest_id | |

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

## `updateProductInterest()`

```php
updateProductInterest($id, $interest_id, $update_product_interest_request, $update_mask): \Keap\Core\V2\Model\ProductInterest
```

Update a Product Interest in an existing Bundle

Updates an existing Product Interest in an existing Bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductInterestBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id
$interest_id = 'interest_id_example'; // string | interest_id
$update_product_interest_request = new \Keap\Core\V2\Model\UpdateProductInterestRequest(); // \Keap\Core\V2\Model\UpdateProductInterestRequest | updateProductInterestRequest
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateProductInterest($id, $interest_id, $update_product_interest_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductInterestBundlesApi->updateProductInterest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |
| **interest_id** | **string**| interest_id | |
| **update_product_interest_request** | [**\Keap\Core\V2\Model\UpdateProductInterestRequest**](../Model/UpdateProductInterestRequest.md)| updateProductInterestRequest | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\ProductInterest**](../Model/ProductInterest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductInterestBundle()`

```php
updateProductInterestBundle($id, $update_product_interest_bundle_request, $update_mask): \Keap\Core\V2\Model\ProductInterestBundle
```

Update a Product Interest Bundle

Updates an existing Product Interest Bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductInterestBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id
$update_product_interest_bundle_request = new \Keap\Core\V2\Model\UpdateProductInterestBundleRequest(); // \Keap\Core\V2\Model\UpdateProductInterestBundleRequest | updateProductInterestBundleRequest
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateProductInterestBundle($id, $update_product_interest_bundle_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductInterestBundlesApi->updateProductInterestBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |
| **update_product_interest_bundle_request** | [**\Keap\Core\V2\Model\UpdateProductInterestBundleRequest**](../Model/UpdateProductInterestBundleRequest.md)| updateProductInterestBundleRequest | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\ProductInterestBundle**](../Model/ProductInterestBundle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
