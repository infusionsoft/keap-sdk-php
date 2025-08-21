# Keap\Core\V2\ProductCategoriesApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignProductsToCategory()**](ProductCategoriesApi.md#assignProductsToCategory) | **POST** /v2/productCategories/{category_id}:assignProducts | Assign Products to a Product Category |
| [**createImageFile()**](ProductCategoriesApi.md#createImageFile) | **POST** /v2/productCategories/{category_id}/images | Create the product category image file |
| [**createProductCategory()**](ProductCategoriesApi.md#createProductCategory) | **POST** /v2/productCategories | Create a Product Category |
| [**deleteImageFile()**](ProductCategoriesApi.md#deleteImageFile) | **DELETE** /v2/productCategories/{category_id}/images | Delete the image from a product category |
| [**deleteProductCategory()**](ProductCategoriesApi.md#deleteProductCategory) | **DELETE** /v2/productCategories/{category_id} | Delete a Product Category |
| [**getProductCategory()**](ProductCategoriesApi.md#getProductCategory) | **GET** /v2/productCategories/{category_id} | Get a Product Category |
| [**listProductCategories()**](ProductCategoriesApi.md#listProductCategories) | **GET** /v2/productCategories | List all Product Categories |
| [**updateProductCategory()**](ProductCategoriesApi.md#updateProductCategory) | **PATCH** /v2/productCategories/{category_id} | Update a Product Category |


## `assignProductsToCategory()`

```php
assignProductsToCategory($category_id, $assign_products_request)
```

Assign Products to a Product Category

Assigns products to a Product Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_id = 'category_id_example'; // string | category_id
$assign_products_request = new \Keap\Core\V2\Model\AssignProductsRequest(); // \Keap\Core\V2\Model\AssignProductsRequest | request

try {
    $apiInstance->assignProductsToCategory($category_id, $assign_products_request);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->assignProductsToCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| category_id | |
| **assign_products_request** | [**\Keap\Core\V2\Model\AssignProductsRequest**](../Model/AssignProductsRequest.md)| request | |

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

## `createImageFile()`

```php
createImageFile($category_id, $file)
```

Create the product category image file

Creates the product category image file and uploads it to the specified product category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_id = 'category_id_example'; // string | category_id
$file = '/path/to/file.txt'; // \SplFileObject | File to upload

try {
    $apiInstance->createImageFile($category_id, $file);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->createImageFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| category_id | |
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

## `createProductCategory()`

```php
createProductCategory($create_product_category_request): \Keap\Core\V2\Model\ProductCategory
```

Create a Product Category

Creates a new Product Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_product_category_request = new \Keap\Core\V2\Model\CreateProductCategoryRequest(); // \Keap\Core\V2\Model\CreateProductCategoryRequest | productCategory

try {
    $result = $apiInstance->createProductCategory($create_product_category_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->createProductCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_product_category_request** | [**\Keap\Core\V2\Model\CreateProductCategoryRequest**](../Model/CreateProductCategoryRequest.md)| productCategory | [optional] |

### Return type

[**\Keap\Core\V2\Model\ProductCategory**](../Model/ProductCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteImageFile()`

```php
deleteImageFile($category_id)
```

Delete the image from a product category

Deletes the image from the specified product category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_id = 'category_id_example'; // string | category_id

try {
    $apiInstance->deleteImageFile($category_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->deleteImageFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| category_id | |

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

## `deleteProductCategory()`

```php
deleteProductCategory($category_id)
```

Delete a Product Category

Deletes the specified Product Category, its sub-categories, and removes products from it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_id = 'category_id_example'; // string | category_id

try {
    $apiInstance->deleteProductCategory($category_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->deleteProductCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| category_id | |

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

## `getProductCategory()`

```php
getProductCategory($category_id): \Keap\Core\V2\Model\ProductCategory
```

Get a Product Category

Gets a single Product Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_id = 'category_id_example'; // string | category_id

try {
    $result = $apiInstance->getProductCategory($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->getProductCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| category_id | |

### Return type

[**\Keap\Core\V2\Model\ProductCategory**](../Model/ProductCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductCategories()`

```php
listProductCategories($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListProductCategoriesResponse
```

List all Product Categories

Retrieves a list of Product Categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `product_id`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=product_id%3D%3D29`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `id`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listProductCategories($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->listProductCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;product_id&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;product_id%3D%3D29&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;id&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListProductCategoriesResponse**](../Model/ListProductCategoriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductCategory()`

```php
updateProductCategory($category_id, $update_product_category_request, $update_mask): \Keap\Core\V2\Model\ProductCategory
```

Update a Product Category

Updates a single Product Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category_id = 'category_id_example'; // string | category_id
$update_product_category_request = new \Keap\Core\V2\Model\UpdateProductCategoryRequest(); // \Keap\Core\V2\Model\UpdateProductCategoryRequest | request
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateProductCategory($category_id, $update_product_category_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->updateProductCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| category_id | |
| **update_product_category_request** | [**\Keap\Core\V2\Model\UpdateProductCategoryRequest**](../Model/UpdateProductCategoryRequest.md)| request | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\ProductCategory**](../Model/ProductCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
