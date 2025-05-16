# Keap\Core\V2\LeadSourcesApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLeadSourceUsingPOST()**](LeadSourcesApi.md#createLeadSourceUsingPOST) | **POST** /v2/leadSources | Create a Lead Source |
| [**deleteLeadSourceUsingDELETE()**](LeadSourcesApi.md#deleteLeadSourceUsingDELETE) | **DELETE** /v2/leadSources/{lead_source_id} | Delete a Lead Source |
| [**getLeadSourceUsingGET()**](LeadSourcesApi.md#getLeadSourceUsingGET) | **GET** /v2/leadSources/{lead_source_id} | Retrieve a Lead Source |
| [**listLeadSourcesUsingGET()**](LeadSourcesApi.md#listLeadSourcesUsingGET) | **GET** /v2/leadSources | List Lead Sources |
| [**updateLeadSourceUsingPATCH()**](LeadSourcesApi.md#updateLeadSourceUsingPATCH) | **PATCH** /v2/leadSources/{lead_source_id} | Update a Lead Source |


## `createLeadSourceUsingPOST()`

```php
createLeadSourceUsingPOST($create_lead_source_request): \Keap\Core\V2\Model\LeadSource
```

Create a Lead Source

Creates a new Lead Source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_lead_source_request = new \Keap\Core\V2\Model\CreateLeadSourceRequest(); // \Keap\Core\V2\Model\CreateLeadSourceRequest | The request object to create a new lead source

try {
    $result = $apiInstance->createLeadSourceUsingPOST($create_lead_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->createLeadSourceUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_lead_source_request** | [**\Keap\Core\V2\Model\CreateLeadSourceRequest**](../Model/CreateLeadSourceRequest.md)| The request object to create a new lead source | |

### Return type

[**\Keap\Core\V2\Model\LeadSource**](../Model/LeadSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLeadSourceUsingDELETE()`

```php
deleteLeadSourceUsingDELETE($lead_source_id)
```

Delete a Lead Source

Deletes a Lead Source by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of a lead source

try {
    $apiInstance->deleteLeadSourceUsingDELETE($lead_source_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->deleteLeadSourceUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of a lead source | |

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

## `getLeadSourceUsingGET()`

```php
getLeadSourceUsingGET($lead_source_id): \Keap\Core\V2\Model\LeadSource
```

Retrieve a Lead Source

Retrieves a Lead Source by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of a lead source

try {
    $result = $apiInstance->getLeadSourceUsingGET($lead_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->getLeadSourceUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of a lead source | |

### Return type

[**\Keap\Core\V2\Model\LeadSource**](../Model/LeadSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLeadSourcesUsingGET()`

```php
listLeadSourcesUsingGET($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListLeadSourcesResponse
```

List Lead Sources

Retrieves a list of Lead Sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are:  - (String) `name` - (String) `status` - (String) `lead_source_category_id` - (String) `vendor` - (String) `medium` - (String) `start_time` - (String) `end_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples:  - `filter=name%3D%3Dexample` - `filter=start_time%3D%3D2024-12-22T01:00:00.000Z`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields:  - `name` - `status` - `vendor` - `medium` - `start_time` - `end_time` - `create_time` - `update_time`  One of the following directions:  - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listLeadSourcesUsingGET($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->listLeadSourcesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are:  - (String) &#x60;name&#x60; - (String) &#x60;status&#x60; - (String) &#x60;lead_source_category_id&#x60; - (String) &#x60;vendor&#x60; - (String) &#x60;medium&#x60; - (String) &#x60;start_time&#x60; - (String) &#x60;end_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples:  - &#x60;filter&#x3D;name%3D%3Dexample&#x60; - &#x60;filter&#x3D;start_time%3D%3D2024-12-22T01:00:00.000Z&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields:  - &#x60;name&#x60; - &#x60;status&#x60; - &#x60;vendor&#x60; - &#x60;medium&#x60; - &#x60;start_time&#x60; - &#x60;end_time&#x60; - &#x60;create_time&#x60; - &#x60;update_time&#x60;  One of the following directions:  - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListLeadSourcesResponse**](../Model/ListLeadSourcesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLeadSourceUsingPATCH()`

```php
updateLeadSourceUsingPATCH($lead_source_id, $create_lead_source_request, $update_mask): \Keap\Core\V2\Model\LeadSource
```

Update a Lead Source

Updates a Lead Source with only the values provided in the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of a lead source
$create_lead_source_request = new \Keap\Core\V2\Model\CreateLeadSourceRequest(); // \Keap\Core\V2\Model\CreateLeadSourceRequest | The request object to update a lead source
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateLeadSourceUsingPATCH($lead_source_id, $create_lead_source_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->updateLeadSourceUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of a lead source | |
| **create_lead_source_request** | [**\Keap\Core\V2\Model\CreateLeadSourceRequest**](../Model/CreateLeadSourceRequest.md)| The request object to update a lead source | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\LeadSource**](../Model/LeadSource.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
