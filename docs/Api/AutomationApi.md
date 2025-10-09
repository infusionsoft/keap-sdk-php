# Keap\Core\V2\AutomationApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addContactsToAutomationSequence()**](AutomationApi.md#addContactsToAutomationSequence) | **POST** /v2/automations/{automation_id}/sequences/{sequence_id}:addContacts | Add Contacts to an Automation Sequence |
| [**bulkAssignmentAutomationsCategories()**](AutomationApi.md#bulkAssignmentAutomationsCategories) | **POST** /v2/automations/categories/batchAssign | Bulk update for Automations Categories |
| [**deleteAutomation()**](AutomationApi.md#deleteAutomation) | **DELETE** /v2/automations | Delete an Automation |
| [**getAutomation()**](AutomationApi.md#getAutomation) | **GET** /v2/automations/{automation_id} | Retrieve an Automation |
| [**listAllAutomationIds()**](AutomationApi.md#listAllAutomationIds) | **GET** /v2/automations/ids | List Automations Ids |
| [**listAutomations()**](AutomationApi.md#listAutomations) | **GET** /v2/automations | List Automations |


## `addContactsToAutomationSequence()`

```php
addContactsToAutomationSequence($automation_id, $sequence_id, $add_to_automation_sequence_request): \Keap\Core\V2\Model\AddToAutomationSequenceResponse
```

Add Contacts to an Automation Sequence

Adds a list of contacts to an automation sequence Response contains a map of the provided list of Contact Ids and their individual result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$automation_id = 'automation_id_example'; // string | automation_id
$sequence_id = 'sequence_id_example'; // string | sequence_id
$add_to_automation_sequence_request = new \Keap\Core\V2\Model\AddToAutomationSequenceRequest(); // \Keap\Core\V2\Model\AddToAutomationSequenceRequest | addToAutomationSequenceRequest

try {
    $result = $apiInstance->addContactsToAutomationSequence($automation_id, $sequence_id, $add_to_automation_sequence_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->addContactsToAutomationSequence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**| automation_id | |
| **sequence_id** | **string**| sequence_id | |
| **add_to_automation_sequence_request** | [**\Keap\Core\V2\Model\AddToAutomationSequenceRequest**](../Model/AddToAutomationSequenceRequest.md)| addToAutomationSequenceRequest | |

### Return type

[**\Keap\Core\V2\Model\AddToAutomationSequenceResponse**](../Model/AddToAutomationSequenceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkAssignmentAutomationsCategories()`

```php
bulkAssignmentAutomationsCategories($assign_automation_category_request)
```

Bulk update for Automations Categories

Bulk updates the categories of one or more automations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assign_automation_category_request = new \Keap\Core\V2\Model\AssignAutomationCategoryRequest(); // \Keap\Core\V2\Model\AssignAutomationCategoryRequest | assignAutomationCategoryRequest

try {
    $apiInstance->bulkAssignmentAutomationsCategories($assign_automation_category_request);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->bulkAssignmentAutomationsCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **assign_automation_category_request** | [**\Keap\Core\V2\Model\AssignAutomationCategoryRequest**](../Model/AssignAutomationCategoryRequest.md)| assignAutomationCategoryRequest | |

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

## `deleteAutomation()`

```php
deleteAutomation($automation_ids)
```

Delete an Automation

Deletes a single automation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$automation_ids = array(56); // int[] | automation_ids

try {
    $apiInstance->deleteAutomation($automation_ids);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->deleteAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_ids** | [**int[]**](../Model/int.md)| automation_ids | |

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

## `getAutomation()`

```php
getAutomation($automation_id): \Keap\Core\V2\Model\Automation
```

Retrieve an Automation

Retrieves a single automation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$automation_id = 'automation_id_example'; // string | automation_id

try {
    $result = $apiInstance->getAutomation($automation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->getAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**| automation_id | |

### Return type

[**\Keap\Core\V2\Model\Automation**](../Model/Automation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllAutomationIds()`

```php
listAllAutomationIds($filter, $order_by, $page_size, $page_token, $stats): \Keap\Core\V2\Model\ListAutomationIdsResponse
```

List Automations Ids

Retrieves a list of automations IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name`  You will need to apply the `==` operator to check the equality of the filter with your searched text, in the encoded form `%3D%3D`. The search will look for the text anywhere in the automation name.  - `filter=name%3D%3DSpring Automation` - `filter=name%3D%3DTag New Contacts`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name` - `category` - `activeContacts` - `publishedDate`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token
$stats = True; // bool

try {
    $result = $apiInstance->listAllAutomationIds($filter, $order_by, $page_size, $page_token, $stats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->listAllAutomationIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;name&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of the filter with your searched text, in the encoded form &#x60;%3D%3D&#x60;. The search will look for the text anywhere in the automation name.  - &#x60;filter&#x3D;name%3D%3DSpring Automation&#x60; - &#x60;filter&#x3D;name%3D%3DTag New Contacts&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;name&#x60; - &#x60;category&#x60; - &#x60;activeContacts&#x60; - &#x60;publishedDate&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |
| **stats** | **bool**|  | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListAutomationIdsResponse**](../Model/ListAutomationIdsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutomations()`

```php
listAutomations($filter, $order_by, $page_size, $page_token, $stats): \Keap\Core\V2\Model\ListAutomationResponse
```

List Automations

Retrieves a list of automations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name`  You will need to apply the `==` operator to check the equality of the filter with your searched text, in the encoded form `%3D%3D`. The search will look for the text anywhere in the automation name.  - `filter=name%3D%3DSpring Automation` - `filter=name%3D%3DTag New Contacts`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name` - `category` - `activeContacts` - `publishedDate`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token
$stats = True; // bool

try {
    $result = $apiInstance->listAutomations($filter, $order_by, $page_size, $page_token, $stats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->listAutomations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;name&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of the filter with your searched text, in the encoded form &#x60;%3D%3D&#x60;. The search will look for the text anywhere in the automation name.  - &#x60;filter&#x3D;name%3D%3DSpring Automation&#x60; - &#x60;filter&#x3D;name%3D%3DTag New Contacts&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;name&#x60; - &#x60;category&#x60; - &#x60;activeContacts&#x60; - &#x60;publishedDate&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |
| **stats** | **bool**|  | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListAutomationResponse**](../Model/ListAutomationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
