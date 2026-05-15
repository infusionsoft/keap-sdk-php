# Keap\Core\V2\ProductsApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addProductOptionListOptionValue()**](ProductsApi.md#addProductOptionListOptionValue) | **POST** /rest/v2/products/{product_id}/options/{product_option_id}/listItems | Add a Product Option List Option Value |
| [**adjustInventory()**](ProductsApi.md#adjustInventory) | **POST** /rest/v2/products/{product_id}:adjustInventory | Adjust Inventory of a Product |
| [**createProduct()**](ProductsApi.md#createProduct) | **POST** /rest/v2/products | Create a Product |
| [**createProductImage()**](ProductsApi.md#createProductImage) | **POST** /rest/v2/products/{product_id}/images | Create the Product Image |
| [**createProductOption()**](ProductsApi.md#createProductOption) | **POST** /rest/v2/products/{product_id}/options | Create a Product Option |
| [**deleteProduct()**](ProductsApi.md#deleteProduct) | **DELETE** /rest/v2/products/{product_id} | Delete a Product |
| [**deleteProductImage()**](ProductsApi.md#deleteProductImage) | **DELETE** /rest/v2/products/{product_id}/images | Delete the Product Image |
| [**deleteProductOption()**](ProductsApi.md#deleteProductOption) | **DELETE** /rest/v2/products/{product_id}/options/{product_option_id} | Delete a Product Option |
| [**deleteProductOptionListOptionValue()**](ProductsApi.md#deleteProductOptionListOptionValue) | **DELETE** /rest/v2/products/{product_id}/options/{product_option_id}/listItems/{item_id} | Delete a Product Option List Item |
| [**getFileData()**](ProductsApi.md#getFileData) | **GET** /rest/v2/products/{product_id}/images/legacyImageData | Retrieve Product Legacy Image Data |
| [**getProduct()**](ProductsApi.md#getProduct) | **GET** /rest/v2/products/{product_id} | Get a Product |
| [**getProductOption()**](ProductsApi.md#getProductOption) | **GET** /rest/v2/products/{product_id}/options/{product_option_id} | Get Product Option |
| [**listProductOptions()**](ProductsApi.md#listProductOptions) | **GET** /rest/v2/products/{product_id}/options | List Product Options |
| [**listProducts()**](ProductsApi.md#listProducts) | **GET** /rest/v2/products | List Products |
| [**updateProduct()**](ProductsApi.md#updateProduct) | **PATCH** /rest/v2/products/{product_id} | Update a Product |
| [**updateProductOption()**](ProductsApi.md#updateProductOption) | **PATCH** /rest/v2/products/{product_id}/options/{product_option_id} | Updates a Product Option |
| [**updateProductOptionListOptionValue()**](ProductsApi.md#updateProductOptionListOptionValue) | **PATCH** /rest/v2/products/{product_id}/options/{product_option_id}/listItems/{item_id} | Updates a Product Option List Option Value |


## `addProductOptionListOptionValue()`

```php
addProductOptionListOptionValue($product_id, $product_option_id, $create_product_option_list_option): \Keap\Core\V2\Model\ProductOption
```

Add a Product Option List Option Value

Adds product option values to a product option of type LIST

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | product_id
$product_option_id = 'product_option_id_example'; // string | product_option_id
$create_product_option_list_option = array(new \Keap\Core\V2\Model\CreateProductOptionListOption()); // \Keap\Core\V2\Model\CreateProductOptionListOption[]

try {
    $result = $apiInstance->addProductOptionListOptionValue($product_id, $product_option_id, $create_product_option_list_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->addProductOptionListOptionValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **product_option_id** | **string**| product_option_id | |
| **create_product_option_list_option** | [**\Keap\Core\V2\Model\CreateProductOptionListOption[]**](../Model/CreateProductOptionListOption.md)|  | |

### Return type

[**\Keap\Core\V2\Model\ProductOption**](../Model/ProductOption.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adjustInventory()`

```php
adjustInventory($product_id, $update_product_inventory_request_detail): \Keap\Core\V2\Model\RestV2ProductDetail
```

Adjust Inventory of a Product

Increase or decrease the quantity of the Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | product_id
$update_product_inventory_request_detail = new \Keap\Core\V2\Model\UpdateProductInventoryRequestDetail(); // \Keap\Core\V2\Model\UpdateProductInventoryRequestDetail

try {
    $result = $apiInstance->adjustInventory($product_id, $update_product_inventory_request_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->adjustInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **update_product_inventory_request_detail** | [**\Keap\Core\V2\Model\UpdateProductInventoryRequestDetail**](../Model/UpdateProductInventoryRequestDetail.md)|  | |

### Return type

[**\Keap\Core\V2\Model\RestV2ProductDetail**](../Model/RestV2ProductDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProduct()`

```php
createProduct($create_product_request_detail): \Keap\Core\V2\Model\RestV2ProductDetail
```

Create a Product

Creates a new product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_product_request_detail = new \Keap\Core\V2\Model\CreateProductRequestDetail(); // \Keap\Core\V2\Model\CreateProductRequestDetail

try {
    $result = $apiInstance->createProduct($create_product_request_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_product_request_detail** | [**\Keap\Core\V2\Model\CreateProductRequestDetail**](../Model/CreateProductRequestDetail.md)|  | |

### Return type

[**\Keap\Core\V2\Model\RestV2ProductDetail**](../Model/RestV2ProductDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductImage()`

```php
createProductImage($product_id, $file, $legacy)
```

Create the Product Image

Creates the Product Image file and uploads it to the specified Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | The product ID
$file = '/path/to/file.txt'; // \SplFileObject | The image file to upload
$legacy = True; // bool | Set to 'true' if the product image should also be used in legacy cart features. Only one image is allowed. If an image already exists, it will be replaced by the current image.

try {
    $apiInstance->createProductImage($product_id, $file, $legacy);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createProductImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| The product ID | |
| **file** | **\SplFileObject****\SplFileObject**| The image file to upload | |
| **legacy** | **bool**| Set to &#39;true&#39; if the product image should also be used in legacy cart features. Only one image is allowed. If an image already exists, it will be replaced by the current image. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductOption()`

```php
createProductOption($product_id, $create_product_option_request): \Keap\Core\V2\Model\ProductOption
```

Create a Product Option

Creates a new product option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | product_id
$create_product_option_request = new \Keap\Core\V2\Model\CreateProductOptionRequest(); // \Keap\Core\V2\Model\CreateProductOptionRequest

try {
    $result = $apiInstance->createProductOption($product_id, $create_product_option_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createProductOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **create_product_option_request** | [**\Keap\Core\V2\Model\CreateProductOptionRequest**](../Model/CreateProductOptionRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\ProductOption**](../Model/ProductOption.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[oauth2](../../README.md#oauth2)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductOption()`

```php
deleteProductOption($product_id, $product_option_id)
```

Delete a Product Option

Deletes a single product option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | product_id
$product_option_id = 'product_option_id_example'; // string | product_option_id

try {
    $apiInstance->deleteProductOption($product_id, $product_option_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProductOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **product_option_id** | **string**| product_option_id | |

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

## `deleteProductOptionListOptionValue()`

```php
deleteProductOptionListOptionValue($product_id, $product_option_id, $item_id)
```

Delete a Product Option List Item

Deletes a single option value in a Product Option of type LIST

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | product_id
$product_option_id = 'product_option_id_example'; // string | product_option_id
$item_id = 'item_id_example'; // string | item_id

try {
    $apiInstance->deleteProductOptionListOptionValue($product_id, $product_option_id, $item_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProductOptionListOptionValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **product_option_id** | **string**| product_option_id | |
| **item_id** | **string**| item_id | |

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

## `getFileData()`

```php
getFileData($product_id): string
```

Retrieve Product Legacy Image Data

Retrieves the product's legacy image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | product_id

try {
    $result = $apiInstance->getFileData($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getFileData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProduct()`

```php
getProduct($product_id): \Keap\Core\V2\Model\RestV2ProductDetail
```

Get a Product

Gets a single Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[**\Keap\Core\V2\Model\RestV2ProductDetail**](../Model/RestV2ProductDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductOption()`

```php
getProductOption($product_id, $product_option_id): \Keap\Core\V2\Model\ProductOption
```

Get Product Option

Retrieves a Product Option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | product_id
$product_option_id = 'product_option_id_example'; // string | product_option_id

try {
    $result = $apiInstance->getProductOption($product_id, $product_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **product_option_id** | **string**| product_option_id | |

### Return type

[**\Keap\Core\V2\Model\ProductOption**](../Model/ProductOption.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductOptions()`

```php
listProductOptions($product_id): \Keap\Core\V2\Model\ListProductOptionsResponse
```

List Product Options

Retrieves all options of a Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | product_id

try {
    $result = $apiInstance->listProductOptions($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->listProductOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |

### Return type

[**\Keap\Core\V2\Model\ListProductOptionsResponse**](../Model/ListProductOptionsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProducts()`

```php
listProducts($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListProductsResponseList
```

List Products

Retrieves a list of Products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name` - Wildcard matching allowed - (String) `sku` - Wildcard matching allowed - (String) `description` - Wildcard matching allowed - (String) `short_description` - Wildcard matching allowed - (String) `product_id` - supports comparison operators: `==`, `>`, `<`, `>=`, `<=` - (List[String]) `product_ids` - accepts a comma-separated list of product IDs  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`.  For fields which allow wildcard matching, you may use the * wildcard character (or its encoded form %2A) for case-insensitive partial matching on text fields. Example of a valid pattern of wildcard usage: - `field==foo*` finds anything in `field` that begins with `foo`  For the filters listed above, here are some examples: - `filter=name%3D%3Dtestsearch` - `filter=name%3D%3Dtest*` (starts with \"test\") - `filter=sku%3D%3Dtestsearch` - `filter=sku%3D%3DSKU*` (starts with \"SKU\") - `filter=product_id>5` (product ID greater than 5) - `filter=product_id>=10` (product ID greater than or equal to 10) - `filter=product_id%3D%3D42` (product ID equals 42) - `filter=product_ids%3D%3D1,2,3,4,5` (products with IDs 1, 2, 3, 4, or 5) - `filter=name%3D%3Dtestsearch%3Bsku%3D%3Dtestsearch`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name` - `sku` - `last_updated_time`  One of the following directions: - `asc` - `desc`
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
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;name&#x60; - Wildcard matching allowed - (String) &#x60;sku&#x60; - Wildcard matching allowed - (String) &#x60;description&#x60; - Wildcard matching allowed - (String) &#x60;short_description&#x60; - Wildcard matching allowed - (String) &#x60;product_id&#x60; - supports comparison operators: &#x60;&#x3D;&#x3D;&#x60;, &#x60;&gt;&#x60;, &#x60;&lt;&#x60;, &#x60;&gt;&#x3D;&#x60;, &#x60;&lt;&#x3D;&#x60; - (List[String]) &#x60;product_ids&#x60; - accepts a comma-separated list of product IDs  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;.  For fields which allow wildcard matching, you may use the * wildcard character (or its encoded form %2A) for case-insensitive partial matching on text fields. Example of a valid pattern of wildcard usage: - &#x60;field&#x3D;&#x3D;foo*&#x60; finds anything in &#x60;field&#x60; that begins with &#x60;foo&#x60;  For the filters listed above, here are some examples: - &#x60;filter&#x3D;name%3D%3Dtestsearch&#x60; - &#x60;filter&#x3D;name%3D%3Dtest*&#x60; (starts with \&quot;test\&quot;) - &#x60;filter&#x3D;sku%3D%3Dtestsearch&#x60; - &#x60;filter&#x3D;sku%3D%3DSKU*&#x60; (starts with \&quot;SKU\&quot;) - &#x60;filter&#x3D;product_id&gt;5&#x60; (product ID greater than 5) - &#x60;filter&#x3D;product_id&gt;&#x3D;10&#x60; (product ID greater than or equal to 10) - &#x60;filter&#x3D;product_id%3D%3D42&#x60; (product ID equals 42) - &#x60;filter&#x3D;product_ids%3D%3D1,2,3,4,5&#x60; (products with IDs 1, 2, 3, 4, or 5) - &#x60;filter&#x3D;name%3D%3Dtestsearch%3Bsku%3D%3Dtestsearch&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;name&#x60; - &#x60;sku&#x60; - &#x60;last_updated_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListProductsResponseList**](../Model/ListProductsResponseList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProduct()`

```php
updateProduct($product_id, $update_product_request_detail, $update_mask): \Keap\Core\V2\Model\RestV2ProductDetail
```

Update a Product

Updates a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | product_id
$update_product_request_detail = new \Keap\Core\V2\Model\UpdateProductRequestDetail(); // \Keap\Core\V2\Model\UpdateProductRequestDetail
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateProduct($product_id, $update_product_request_detail, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **update_product_request_detail** | [**\Keap\Core\V2\Model\UpdateProductRequestDetail**](../Model/UpdateProductRequestDetail.md)|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\RestV2ProductDetail**](../Model/RestV2ProductDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductOption()`

```php
updateProductOption($product_id, $product_option_id, $update_product_option_request, $update_mask): \Keap\Core\V2\Model\ProductOption
```

Updates a Product Option

Updates a product option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | product_id
$product_option_id = 'product_option_id_example'; // string | product_option_id
$update_product_option_request = new \Keap\Core\V2\Model\UpdateProductOptionRequest(); // \Keap\Core\V2\Model\UpdateProductOptionRequest
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateProductOption($product_id, $product_option_id, $update_product_option_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProductOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **product_option_id** | **string**| product_option_id | |
| **update_product_option_request** | [**\Keap\Core\V2\Model\UpdateProductOptionRequest**](../Model/UpdateProductOptionRequest.md)|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\ProductOption**](../Model/ProductOption.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductOptionListOptionValue()`

```php
updateProductOptionListOptionValue($product_id, $product_option_id, $item_id, $update_product_option_list_option, $update_mask): \Keap\Core\V2\Model\ProductOption
```

Updates a Product Option List Option Value

Updates a single product option value

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | product_id
$product_option_id = 'product_option_id_example'; // string | product_option_id
$item_id = 'item_id_example'; // string | item_id
$update_product_option_list_option = new \Keap\Core\V2\Model\UpdateProductOptionListOption(); // \Keap\Core\V2\Model\UpdateProductOptionListOption
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateProductOptionListOptionValue($product_id, $product_option_id, $item_id, $update_product_option_list_option, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProductOptionListOptionValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| product_id | |
| **product_option_id** | **string**| product_option_id | |
| **item_id** | **string**| item_id | |
| **update_product_option_list_option** | [**\Keap\Core\V2\Model\UpdateProductOptionListOption**](../Model/UpdateProductOptionListOption.md)|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\ProductOption**](../Model/ProductOption.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
