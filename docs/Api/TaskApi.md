# Keap\Core\V2\TaskApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTask()**](TaskApi.md#createTask) | **POST** /v2/tasks | Create a Task |
| [**createTaskCustomField()**](TaskApi.md#createTaskCustomField) | **POST** /v2/tasks/model/customFields | Create a Custom Field |
| [**deleteTask()**](TaskApi.md#deleteTask) | **DELETE** /v2/tasks/{task_id} | Delete a Task |
| [**deleteTaskCustomField()**](TaskApi.md#deleteTaskCustomField) | **DELETE** /v2/tasks/model/customFields/{custom_field_id} | Delete a Custom Field |
| [**getTask()**](TaskApi.md#getTask) | **GET** /v2/tasks/{task_id} | Retrieve a Task |
| [**listTasks()**](TaskApi.md#listTasks) | **GET** /v2/tasks | List Tasks |
| [**retrieveTaskModel()**](TaskApi.md#retrieveTaskModel) | **GET** /v2/tasks/model | Retrieve Task Model |
| [**updateTask()**](TaskApi.md#updateTask) | **PATCH** /v2/tasks/{task_id} | Update a Task |
| [**updateTaskCustomField()**](TaskApi.md#updateTaskCustomField) | **PATCH** /v2/tasks/model/customFields/{custom_field_id} | Update a Task&#39;s Custom Field |


## `createTask()`

```php
createTask($create_task_request): \Keap\Core\V2\Model\Task
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
    $result = $apiInstance->createTask($create_task_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->createTask: ', $e->getMessage(), PHP_EOL;
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

## `createTaskCustomField()`

```php
createTaskCustomField($create_custom_field_request): \Keap\Core\V2\Model\CreateCustomFieldResponse
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
    $result = $apiInstance->createTaskCustomField($create_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->createTaskCustomField: ', $e->getMessage(), PHP_EOL;
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

## `deleteTask()`

```php
deleteTask($task_id)
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
    $apiInstance->deleteTask($task_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->deleteTask: ', $e->getMessage(), PHP_EOL;
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

## `deleteTaskCustomField()`

```php
deleteTaskCustomField($custom_field_id)
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
    $apiInstance->deleteTaskCustomField($custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->deleteTaskCustomField: ', $e->getMessage(), PHP_EOL;
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

## `getTask()`

```php
getTask($task_id): \Keap\Core\V2\Model\Task
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
    $result = $apiInstance->getTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTask: ', $e->getMessage(), PHP_EOL;
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

## `listTasks()`

```php
listTasks($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListTasksResponse
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
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `contact_id` - (String) `has_due_date` - (String) `is_completed` - (String) `user_id` - (String) `task_ids` - (String) `since_time` - (String) `until_time` You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=contact_id%3D%3D123` - `filter=has_due_date%3D%3Dtrue` - `filter=is_completed%3D%3Dtrue` - `filter=user_id%3D%3D321` - `filter=task_ids%3D%3D1,2,3` - `filter=since_time%3D%3D2025-04-16T20:33:02.321Z;` - `filter=until_time%3D%3D2025-08-16T20:33:02.321Z;`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `id` - `create_time` - `due_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listTasks($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->listTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;contact_id&#x60; - (String) &#x60;has_due_date&#x60; - (String) &#x60;is_completed&#x60; - (String) &#x60;user_id&#x60; - (String) &#x60;task_ids&#x60; - (String) &#x60;since_time&#x60; - (String) &#x60;until_time&#x60; You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;contact_id%3D%3D123&#x60; - &#x60;filter&#x3D;has_due_date%3D%3Dtrue&#x60; - &#x60;filter&#x3D;is_completed%3D%3Dtrue&#x60; - &#x60;filter&#x3D;user_id%3D%3D321&#x60; - &#x60;filter&#x3D;task_ids%3D%3D1,2,3&#x60; - &#x60;filter&#x3D;since_time%3D%3D2025-04-16T20:33:02.321Z;&#x60; - &#x60;filter&#x3D;until_time%3D%3D2025-08-16T20:33:02.321Z;&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;id&#x60; - &#x60;create_time&#x60; - &#x60;due_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

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

## `retrieveTaskModel()`

```php
retrieveTaskModel(): \Keap\Core\V2\Model\ObjectModel
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
    $result = $apiInstance->retrieveTaskModel();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->retrieveTaskModel: ', $e->getMessage(), PHP_EOL;
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

## `updateTask()`

```php
updateTask($task_id, $update_mask, $create_update_task_request): \Keap\Core\V2\Model\UpdateTaskResponse
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
    $result = $apiInstance->updateTask($task_id, $update_mask, $create_update_task_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->updateTask: ', $e->getMessage(), PHP_EOL;
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

## `updateTaskCustomField()`

```php
updateTaskCustomField($custom_field_id, $update_custom_field_meta_data_request, $update_mask): \Keap\Core\V2\Model\CustomFieldMetaData
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
    $result = $apiInstance->updateTaskCustomField($custom_field_id, $update_custom_field_meta_data_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->updateTaskCustomField: ', $e->getMessage(), PHP_EOL;
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
