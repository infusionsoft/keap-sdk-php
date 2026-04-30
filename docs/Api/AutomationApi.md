# Keap\Core\V2\AutomationApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**achieveGoal()**](AutomationApi.md#achieveGoal) | **POST** /rest/v2/automations/goals/achieve | Achieve an Automation Goal |
| [**addContactsToAutomationSequence()**](AutomationApi.md#addContactsToAutomationSequence) | **POST** /rest/v2/automations/{automation_id}/sequences/{sequence_id}:addContacts | Add Contacts to an Automation Sequence |
| [**bulkAssignmentAutomationsCategories()**](AutomationApi.md#bulkAssignmentAutomationsCategories) | **POST** /rest/v2/automations/categories/batchAssign | Bulk update for Automations Categories |
| [**bulkUnpublishAutomations()**](AutomationApi.md#bulkUnpublishAutomations) | **POST** /rest/v2/automations/batch-unpublish | Bulk unpublish Automations |
| [**deleteAutomation()**](AutomationApi.md#deleteAutomation) | **DELETE** /rest/v2/automations | Delete an Automation |
| [**getAutomation()**](AutomationApi.md#getAutomation) | **GET** /rest/v2/automations/{automation_id} | Retrieve an Automation |
| [**listAllAutomationIds()**](AutomationApi.md#listAllAutomationIds) | **GET** /rest/v2/automations/ids | List Automations Ids |
| [**listAutomations()**](AutomationApi.md#listAutomations) | **GET** /rest/v2/automations | List Automations |
| [**unpublishAutomation()**](AutomationApi.md#unpublishAutomation) | **PUT** /rest/v2/automations/{automation_id}/unpublish | Unpublish an Automation |


## `achieveGoal()`

```php
achieveGoal($achieve_goal_request): \Keap\Core\V2\Model\AchieveGoalResponse
```

Achieve an Automation Goal

Achieves a goal in an automation for a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$achieve_goal_request = new \Keap\Core\V2\Model\AchieveGoalRequest(); // \Keap\Core\V2\Model\AchieveGoalRequest

try {
    $result = $apiInstance->achieveGoal($achieve_goal_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->achieveGoal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **achieve_goal_request** | [**\Keap\Core\V2\Model\AchieveGoalRequest**](../Model/AchieveGoalRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\AchieveGoalResponse**](../Model/AchieveGoalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string
$sequence_id = 'sequence_id_example'; // string
$add_to_automation_sequence_request = new \Keap\Core\V2\Model\AddToAutomationSequenceRequest(); // \Keap\Core\V2\Model\AddToAutomationSequenceRequest

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
| **automation_id** | **string**|  | |
| **sequence_id** | **string**|  | |
| **add_to_automation_sequence_request** | [**\Keap\Core\V2\Model\AddToAutomationSequenceRequest**](../Model/AddToAutomationSequenceRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\AddToAutomationSequenceResponse**](../Model/AddToAutomationSequenceResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assign_automation_category_request = new \Keap\Core\V2\Model\AssignAutomationCategoryRequest(); // \Keap\Core\V2\Model\AssignAutomationCategoryRequest

try {
    $apiInstance->bulkAssignmentAutomationsCategories($assign_automation_category_request);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->bulkAssignmentAutomationsCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **assign_automation_category_request** | [**\Keap\Core\V2\Model\AssignAutomationCategoryRequest**](../Model/AssignAutomationCategoryRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUnpublishAutomations()`

```php
bulkUnpublishAutomations($batch_unpublish_automation_request)
```

Bulk unpublish Automations

Bulk unpublish one or more automations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_unpublish_automation_request = new \Keap\Core\V2\Model\BatchUnpublishAutomationRequest(); // \Keap\Core\V2\Model\BatchUnpublishAutomationRequest

try {
    $apiInstance->bulkUnpublishAutomations($batch_unpublish_automation_request);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->bulkUnpublishAutomations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_unpublish_automation_request** | [**\Keap\Core\V2\Model\BatchUnpublishAutomationRequest**](../Model/BatchUnpublishAutomationRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_ids = array(56); // int[]

try {
    $apiInstance->deleteAutomation($automation_ids);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->deleteAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_ids** | [**int[]**](../Model/int.md)|  | |

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string

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
| **automation_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\Automation**](../Model/Automation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllAutomationIds()`

```php
listAllAutomationIds($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListAutomationIdsResponse
```

List Automations Ids

Retrieves a list of automations IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name`  You will need to apply the `==` operator to check the equality of the filter with your searched text, in the encoded form `%3D%3D`. The search will look for the text anywhere in the automation name.  - `filter=name%3D%3DSpring Automation` - `filter=name%3D%3DTag New Contacts`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name` - `category` - `activeContacts` - `publishedDate`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listAllAutomationIds($filter, $order_by, $page_size, $page_token);
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

### Return type

[**\Keap\Core\V2\Model\ListAutomationIdsResponse**](../Model/ListAutomationIdsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutomations()`

```php
listAutomations($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListAutomationResponse
```

List Automations

Retrieves a list of automations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name`  You will need to apply the `==` operator to check the equality of the filter with your searched text, in the encoded form `%3D%3D`. The search will look for the text anywhere in the automation name.  - `filter=name%3D%3DSpring Automation` - `filter=name%3D%3DTag New Contacts`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name` - `category` - `activeContacts` - `publishedDate`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listAutomations($filter, $order_by, $page_size, $page_token);
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

### Return type

[**\Keap\Core\V2\Model\ListAutomationResponse**](../Model/ListAutomationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unpublishAutomation()`

```php
unpublishAutomation($automation_id, $unpublish_automation_request)
```

Unpublish an Automation

Unpublishes a single automation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string
$unpublish_automation_request = new \Keap\Core\V2\Model\UnpublishAutomationRequest(); // \Keap\Core\V2\Model\UnpublishAutomationRequest

try {
    $apiInstance->unpublishAutomation($automation_id, $unpublish_automation_request);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->unpublishAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |
| **unpublish_automation_request** | [**\Keap\Core\V2\Model\UnpublishAutomationRequest**](../Model/UnpublishAutomationRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
