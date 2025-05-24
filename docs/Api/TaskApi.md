# Keap\Core\V2\TaskApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTaskCustomFieldUsingPOST1()**](TaskApi.md#createTaskCustomFieldUsingPOST1) | **POST** /v2/tasks/model/customFields | Create a Custom Field |
| [**createTaskUsingPOST1()**](TaskApi.md#createTaskUsingPOST1) | **POST** /v2/tasks | Create a Task |
| [**deleteTaskCustomFieldUsingDELETE()**](TaskApi.md#deleteTaskCustomFieldUsingDELETE) | **DELETE** /v2/tasks/model/customFields/{custom_field_id} | Delete a Custom Field |
| [**deleteTaskUsingDELETE1()**](TaskApi.md#deleteTaskUsingDELETE1) | **DELETE** /v2/tasks/{task_id} | Delete a Task |
| [**getTaskUsingGET1()**](TaskApi.md#getTaskUsingGET1) | **GET** /v2/tasks/{task_id} | Retrieve a Task |
| [**listTasksUsingGET1()**](TaskApi.md#listTasksUsingGET1) | **GET** /v2/tasks | List Tasks |
| [**retrieveTaskModelUsingGET1()**](TaskApi.md#retrieveTaskModelUsingGET1) | **GET** /v2/tasks/model | Retrieve Task Model |
| [**updateTaskCustomFieldUsingPATCH()**](TaskApi.md#updateTaskCustomFieldUsingPATCH) | **PATCH** /v2/tasks/model/customFields/{custom_field_id} | Update a Task&#39;s Custom Field |
| [**updateTaskUsingPATCH()**](TaskApi.md#updateTaskUsingPATCH) | **PATCH** /v2/tasks/{task_id} | Update a Task |


## `createTaskCustomFieldUsingPOST1()`

```php
createTaskCustomFieldUsingPOST1($create_custom_field_request): \Keap\Core\V2\Model\CreateCustomFieldResponse
```

Create a Custom Field

Creates a custom field of the specified type and options to the Task object<br/>Note: Custom Fields for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_custom_field_request = new \Keap\Core\V2\Model\CreateCustomFieldRequest(); // \Keap\Core\V2\Model\CreateCustomFieldRequest | customField

try {
    $result = $apiInstance->createTaskCustomFieldUsingPOST1($create_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->createTaskCustomFieldUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_custom_field_request** | [**\Keap\Core\V2\Model\CreateCustomFieldRequest**](../Model/CreateCustomFieldRequest.md)| customField | |

### Return type

[**\Keap\Core\V2\Model\CreateCustomFieldResponse**](../Model/CreateCustomFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTaskUsingPOST1()`

```php
createTaskUsingPOST1($create_task_request): \Keap\Core\V2\Model\Task
```

Create a Task

Creates a new task as the authenticated user.   This endpoint does not currently support setting Custom Field values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_task_request = new \Keap\Core\V2\Model\CreateTaskRequest(); // \Keap\Core\V2\Model\CreateTaskRequest | task

try {
    $result = $apiInstance->createTaskUsingPOST1($create_task_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->createTaskUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_task_request** | [**\Keap\Core\V2\Model\CreateTaskRequest**](../Model/CreateTaskRequest.md)| task | [optional] |

### Return type

[**\Keap\Core\V2\Model\Task**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTaskCustomFieldUsingDELETE()`

```php
deleteTaskCustomFieldUsingDELETE($custom_field_id)
```

Delete a Custom Field

Deletes a Custom Field from the Task object<br/>Note: Custom Fields for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_field_id = 'custom_field_id_example'; // string | custom_field_id

try {
    $apiInstance->deleteTaskCustomFieldUsingDELETE($custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->deleteTaskCustomFieldUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**| custom_field_id | |

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

## `deleteTaskUsingDELETE1()`

```php
deleteTaskUsingDELETE1($task_id)
```

Delete a Task

Deletes a single task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = 'task_id_example'; // string | task_id

try {
    $apiInstance->deleteTaskUsingDELETE1($task_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->deleteTaskUsingDELETE1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| task_id | |

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

## `getTaskUsingGET1()`

```php
getTaskUsingGET1($task_id): \Keap\Core\V2\Model\Task
```

Retrieve a Task

Retrieves a single task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = 'task_id_example'; // string | task_id

try {
    $result = $apiInstance->getTaskUsingGET1($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| task_id | |

### Return type

[**\Keap\Core\V2\Model\Task**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTasksUsingGET1()`

```php
listTasksUsingGET1($end_due_time, $filter, $order_by, $page_size, $page_token, $start_due_time): \Keap\Core\V2\Model\ListTasksResponse
```

List Tasks

Retrieves a list of tasks based on the provided filter. Tasks which are not assigned to a User may be queried with user_id==UNASSIGNED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$end_due_time = 'end_due_time_example'; // string
$filter = 'filter_example'; // string | Search filter to apply to results
$order_by = 'order_by_example'; // string | Attribute and direction to order items by. E.g. `given_name desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token
$start_due_time = 'start_due_time_example'; // string

try {
    $result = $apiInstance->listTasksUsingGET1($end_due_time, $filter, $order_by, $page_size, $page_token, $start_due_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->listTasksUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **end_due_time** | **string**|  | [optional] |
| **filter** | **string**| Search filter to apply to results | [optional] |
| **order_by** | **string**| Attribute and direction to order items by. E.g. &#x60;given_name desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |
| **start_due_time** | **string**|  | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListTasksResponse**](../Model/ListTasksResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveTaskModelUsingGET1()`

```php
retrieveTaskModelUsingGET1(): \Keap\Core\V2\Model\ObjectModel
```

Retrieve Task Model

Get the custom fields for the Task object<br/>Note: Custom Fields for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->retrieveTaskModelUsingGET1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->retrieveTaskModelUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\ObjectModel**](../Model/ObjectModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaskCustomFieldUsingPATCH()`

```php
updateTaskCustomFieldUsingPATCH($custom_field_id, $update_custom_field_meta_data_request, $update_mask): \Keap\Core\V2\Model\CustomFieldMetaData
```

Update a Task's Custom Field

Updates a custom field of the specified type and options to the Task object.<br/>Note: Custom Fields for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_field_id = 'custom_field_id_example'; // string | custom_field_id
$update_custom_field_meta_data_request = new \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest | request
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateTaskCustomFieldUsingPATCH($custom_field_id, $update_custom_field_meta_data_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->updateTaskCustomFieldUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**| custom_field_id | |
| **update_custom_field_meta_data_request** | [**\Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest**](../Model/UpdateCustomFieldMetaDataRequest.md)| request | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\CustomFieldMetaData**](../Model/CustomFieldMetaData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaskUsingPATCH()`

```php
updateTaskUsingPATCH($task_id, $update_mask, $create_update_task_request): \Keap\Core\V2\Model\UpdateTaskResponse
```

Update a Task

Updates a task with only the values provided in the request.  This endpoint does not currently support updating Custom Field values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = 'task_id_example'; // string | task_id
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.
$create_update_task_request = new \Keap\Core\V2\Model\CreateUpdateTaskRequest(); // \Keap\Core\V2\Model\CreateUpdateTaskRequest | task

try {
    $result = $apiInstance->updateTaskUsingPATCH($task_id, $update_mask, $create_update_task_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->updateTaskUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| task_id | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |
| **create_update_task_request** | [**\Keap\Core\V2\Model\CreateUpdateTaskRequest**](../Model/CreateUpdateTaskRequest.md)| task | [optional] |

### Return type

[**\Keap\Core\V2\Model\UpdateTaskResponse**](../Model/UpdateTaskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
