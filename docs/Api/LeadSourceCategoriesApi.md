# Keap\Core\V2\LeadSourceCategoriesApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLeadSourceCategoryUsingPOST()**](LeadSourceCategoriesApi.md#createLeadSourceCategoryUsingPOST) | **POST** /v2/leadSourceCategories | Create a Lead Source Category |
| [**deleteLeadSourceCategoryUsingDELETE()**](LeadSourceCategoriesApi.md#deleteLeadSourceCategoryUsingDELETE) | **DELETE** /v2/leadSourceCategories/{lead_source_category_id} | Delete a Lead Source Category |
| [**getLeadSourceCategoryUsingGET()**](LeadSourceCategoriesApi.md#getLeadSourceCategoryUsingGET) | **GET** /v2/leadSourceCategories/{lead_source_category_id} | Retrieve a Lead Source Category |
| [**listCategoriesUsingGET1()**](LeadSourceCategoriesApi.md#listCategoriesUsingGET1) | **GET** /v2/leadSourceCategories | List Lead Source Categories |
| [**updateLeadSourceCategoryUsingPATCH()**](LeadSourceCategoriesApi.md#updateLeadSourceCategoryUsingPATCH) | **PATCH** /v2/leadSourceCategories/{lead_source_category_id} | Update a Lead Source Category |


## `createLeadSourceCategoryUsingPOST()`

```php
createLeadSourceCategoryUsingPOST($create_update_lead_source_category_request): \Keap\Core\V2\Model\LeadSourceCategory
```

Create a Lead Source Category

Creates a new Lead Source Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_update_lead_source_category_request = new \Keap\Core\V2\Model\CreateUpdateLeadSourceCategoryRequest(); // \Keap\Core\V2\Model\CreateUpdateLeadSourceCategoryRequest | The request object to create a new lead source category

try {
    $result = $apiInstance->createLeadSourceCategoryUsingPOST($create_update_lead_source_category_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceCategoriesApi->createLeadSourceCategoryUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_update_lead_source_category_request** | [**\Keap\Core\V2\Model\CreateUpdateLeadSourceCategoryRequest**](../Model/CreateUpdateLeadSourceCategoryRequest.md)| The request object to create a new lead source category | |

### Return type

[**\Keap\Core\V2\Model\LeadSourceCategory**](../Model/LeadSourceCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLeadSourceCategoryUsingDELETE()`

```php
deleteLeadSourceCategoryUsingDELETE($lead_source_category_id)
```

Delete a Lead Source Category

Deletes the specified Lead Source Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_category_id = 'lead_source_category_id_example'; // string | The ID of a lead source category

try {
    $apiInstance->deleteLeadSourceCategoryUsingDELETE($lead_source_category_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceCategoriesApi->deleteLeadSourceCategoryUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_category_id** | **string**| The ID of a lead source category | |

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

## `getLeadSourceCategoryUsingGET()`

```php
getLeadSourceCategoryUsingGET($lead_source_category_id): \Keap\Core\V2\Model\LeadSourceCategory
```

Retrieve a Lead Source Category

Retrieves a single Lead Source Category for a given ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_category_id = 'lead_source_category_id_example'; // string | The ID of a lead source category

try {
    $result = $apiInstance->getLeadSourceCategoryUsingGET($lead_source_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceCategoriesApi->getLeadSourceCategoryUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_category_id** | **string**| The ID of a lead source category | |

### Return type

[**\Keap\Core\V2\Model\LeadSourceCategory**](../Model/LeadSourceCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCategoriesUsingGET1()`

```php
listCategoriesUsingGET1($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListLeadSourceCategoriesResponse
```

List Lead Source Categories

Retrieves a list of Lead Source Categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are:  - (String) `name`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here is an example:  - `filter=name%3D%3Dexample`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listCategoriesUsingGET1($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceCategoriesApi->listCategoriesUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are:  - (String) &#x60;name&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here is an example:  - &#x60;filter&#x3D;name%3D%3Dexample&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;name&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListLeadSourceCategoriesResponse**](../Model/ListLeadSourceCategoriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLeadSourceCategoryUsingPATCH()`

```php
updateLeadSourceCategoryUsingPATCH($lead_source_category_id, $create_update_lead_source_category_request, $update_mask): \Keap\Core\V2\Model\LeadSourceCategory
```

Update a Lead Source Category

Updates a Lead Source Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_category_id = 'lead_source_category_id_example'; // string | The ID of a lead source category
$create_update_lead_source_category_request = new \Keap\Core\V2\Model\CreateUpdateLeadSourceCategoryRequest(); // \Keap\Core\V2\Model\CreateUpdateLeadSourceCategoryRequest | The request object to update a lead source category
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateLeadSourceCategoryUsingPATCH($lead_source_category_id, $create_update_lead_source_category_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceCategoriesApi->updateLeadSourceCategoryUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_category_id** | **string**| The ID of a lead source category | |
| **create_update_lead_source_category_request** | [**\Keap\Core\V2\Model\CreateUpdateLeadSourceCategoryRequest**](../Model/CreateUpdateLeadSourceCategoryRequest.md)| The request object to update a lead source category | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\LeadSourceCategory**](../Model/LeadSourceCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
