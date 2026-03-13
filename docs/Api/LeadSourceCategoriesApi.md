# Keap\Core\V2\LeadSourceCategoriesApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLeadSourceCategory()**](LeadSourceCategoriesApi.md#createLeadSourceCategory) | **POST** /v2/leadSourceCategories | Create a Lead Source Category |
| [**deleteLeadSourceCategory()**](LeadSourceCategoriesApi.md#deleteLeadSourceCategory) | **DELETE** /v2/leadSourceCategories/{lead_source_category_id} | Delete a Lead Source Category |
| [**getLeadSourceCategory()**](LeadSourceCategoriesApi.md#getLeadSourceCategory) | **GET** /v2/leadSourceCategories/{lead_source_category_id} | Retrieve a Lead Source Category |
| [**listLeadSourceCategories()**](LeadSourceCategoriesApi.md#listLeadSourceCategories) | **GET** /v2/leadSourceCategories | List Lead Source Categories |
| [**updateLeadSourceCategory()**](LeadSourceCategoriesApi.md#updateLeadSourceCategory) | **PATCH** /v2/leadSourceCategories/{lead_source_category_id} | Update a Lead Source Category |


## `createLeadSourceCategory()`

```php
createLeadSourceCategory($create_update_lead_source_category_request): \Keap\Core\V2\Model\LeadSourceCategory
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
    $result = $apiInstance->createLeadSourceCategory($create_update_lead_source_category_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceCategoriesApi->createLeadSourceCategory: ', $e->getMessage(), PHP_EOL;
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

## `deleteLeadSourceCategory()`

```php
deleteLeadSourceCategory($lead_source_category_id)
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
    $apiInstance->deleteLeadSourceCategory($lead_source_category_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceCategoriesApi->deleteLeadSourceCategory: ', $e->getMessage(), PHP_EOL;
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

## `getLeadSourceCategory()`

```php
getLeadSourceCategory($lead_source_category_id): \Keap\Core\V2\Model\LeadSourceCategory
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
    $result = $apiInstance->getLeadSourceCategory($lead_source_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceCategoriesApi->getLeadSourceCategory: ', $e->getMessage(), PHP_EOL;
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

## `listLeadSourceCategories()`

```php
listLeadSourceCategories($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListLeadSourceCategoriesResponse
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
    $result = $apiInstance->listLeadSourceCategories($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceCategoriesApi->listLeadSourceCategories: ', $e->getMessage(), PHP_EOL;
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

## `updateLeadSourceCategory()`

```php
updateLeadSourceCategory($lead_source_category_id, $create_update_lead_source_category_request, $update_mask): \Keap\Core\V2\Model\LeadSourceCategory
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
    $result = $apiInstance->updateLeadSourceCategory($lead_source_category_id, $create_update_lead_source_category_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceCategoriesApi->updateLeadSourceCategory: ', $e->getMessage(), PHP_EOL;
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
