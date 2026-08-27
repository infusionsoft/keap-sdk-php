# Keap\Core\V2\TaskApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTask()**](TaskApi.md#createTask) | **POST** /rest/v2/tasks | Create a Task |
| [**createTaskCustomField()**](TaskApi.md#createTaskCustomField) | **POST** /rest/v2/tasks/model/customFields | Create a Custom Field |
| [**createTaskCustomFieldGroup()**](TaskApi.md#createTaskCustomFieldGroup) | **POST** /rest/v2/tasks/model/customFields/groups | Create a Task Custom Field Group |
| [**createTaskCustomFieldTab()**](TaskApi.md#createTaskCustomFieldTab) | **POST** /rest/v2/tasks/model/customFields/tabs | Create a Task Custom Field Tab |
| [**deleteTask()**](TaskApi.md#deleteTask) | **DELETE** /rest/v2/tasks/{task_id} | Delete a Task |
| [**deleteTaskCustomField()**](TaskApi.md#deleteTaskCustomField) | **DELETE** /rest/v2/tasks/model/customFields/{custom_field_id} | Delete a Custom Field |
| [**deleteTaskCustomFieldGroup()**](TaskApi.md#deleteTaskCustomFieldGroup) | **DELETE** /rest/v2/tasks/model/customFields/groups/{group_id} | Delete a Task Custom Field Group |
| [**deleteTaskCustomFieldTab()**](TaskApi.md#deleteTaskCustomFieldTab) | **DELETE** /rest/v2/tasks/model/customFields/tabs/{tab_id} | Delete a Task Custom Field Tab |
| [**getTask()**](TaskApi.md#getTask) | **GET** /rest/v2/tasks/{task_id} | Retrieve a Task |
| [**getTaskCustomFieldGroup()**](TaskApi.md#getTaskCustomFieldGroup) | **GET** /rest/v2/tasks/model/customFields/groups/{group_id} | Retrieve a Task Custom Field Group |
| [**getTaskCustomFieldTab()**](TaskApi.md#getTaskCustomFieldTab) | **GET** /rest/v2/tasks/model/customFields/tabs/{tab_id} | Retrieve a Task Custom Field Tab |
| [**listTaskCustomFieldGroups()**](TaskApi.md#listTaskCustomFieldGroups) | **GET** /rest/v2/tasks/model/customFields/groups | List Task Custom Field Groups |
| [**listTaskCustomFieldTabs()**](TaskApi.md#listTaskCustomFieldTabs) | **GET** /rest/v2/tasks/model/customFields/tabs | List Task Custom Field Tabs |
| [**listTasks()**](TaskApi.md#listTasks) | **GET** /rest/v2/tasks | List Tasks |
| [**retrieveTaskModel()**](TaskApi.md#retrieveTaskModel) | **GET** /rest/v2/tasks/model | Retrieve Task Model |
| [**updateTask()**](TaskApi.md#updateTask) | **PATCH** /rest/v2/tasks/{task_id} | Update a Task |
| [**updateTaskCustomField()**](TaskApi.md#updateTaskCustomField) | **PATCH** /rest/v2/tasks/model/customFields/{custom_field_id} | Update a Task&#39;s Custom Field |
| [**updateTaskCustomFieldGroup()**](TaskApi.md#updateTaskCustomFieldGroup) | **PATCH** /rest/v2/tasks/model/customFields/groups/{group_id} | Update a Task Custom Field Group |
| [**updateTaskCustomFieldTab()**](TaskApi.md#updateTaskCustomFieldTab) | **PATCH** /rest/v2/tasks/model/customFields/tabs/{tab_id} | Update a Task Custom Field Tab |


## `createTask()`

```php
createTask($create_task_request, $fields): \Keap\Core\V2\Model\Task
```

Create a Task

Creates a new task as the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_task_request = new \Keap\Core\V2\Model\CreateTaskRequest(); // \Keap\Core\V2\Model\CreateTaskRequest
$fields = array('fields_example'); // string[] | Comma-delimited list of optional Task properties to include in the response. Allowed values: custom_fields

try {
    $result = $apiInstance->createTask($create_task_request, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->createTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_task_request** | [**\Keap\Core\V2\Model\CreateTaskRequest**](../Model/CreateTaskRequest.md)|  | |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of optional Task properties to include in the response. Allowed values: custom_fields | [optional] |

### Return type

[**\Keap\Core\V2\Model\Task**](../Model/Task.md)

### Authorization

[oauth2](../../README.md#oauth2)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_field_request = new \Keap\Core\V2\Model\CreateCustomFieldRequest(); // \Keap\Core\V2\Model\CreateCustomFieldRequest

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
| **create_custom_field_request** | [**\Keap\Core\V2\Model\CreateCustomFieldRequest**](../Model/CreateCustomFieldRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\CreateCustomFieldResponse**](../Model/CreateCustomFieldResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTaskCustomFieldGroup()`

```php
createTaskCustomFieldGroup($create_custom_field_group_request): \Keap\Core\V2\Model\CustomFieldGroup
```

Create a Task Custom Field Group

Creates a new custom field group for the Task record type. If `tab_id` is omitted, the group is added to the default 'Custom Fields' tab.<br/>Note: Custom Field Groups for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_field_group_request = new \Keap\Core\V2\Model\CreateCustomFieldGroupRequest(); // \Keap\Core\V2\Model\CreateCustomFieldGroupRequest

try {
    $result = $apiInstance->createTaskCustomFieldGroup($create_custom_field_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->createTaskCustomFieldGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_custom_field_group_request** | [**\Keap\Core\V2\Model\CreateCustomFieldGroupRequest**](../Model/CreateCustomFieldGroupRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\CustomFieldGroup**](../Model/CustomFieldGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTaskCustomFieldTab()`

```php
createTaskCustomFieldTab($create_custom_field_tab_request): \Keap\Core\V2\Model\CustomFieldTab
```

Create a Task Custom Field Tab

Creates a new custom field tab for the Task record type.<br/>Note: Custom Field Tabs for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_field_tab_request = new \Keap\Core\V2\Model\CreateCustomFieldTabRequest(); // \Keap\Core\V2\Model\CreateCustomFieldTabRequest

try {
    $result = $apiInstance->createTaskCustomFieldTab($create_custom_field_tab_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->createTaskCustomFieldTab: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_custom_field_tab_request** | [**\Keap\Core\V2\Model\CreateCustomFieldTabRequest**](../Model/CreateCustomFieldTabRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\CustomFieldTab**](../Model/CustomFieldTab.md)

### Authorization

[oauth2](../../README.md#oauth2)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string

try {
    $apiInstance->deleteTask($task_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->deleteTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**|  | |

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 'custom_field_id_example'; // string

try {
    $apiInstance->deleteTaskCustomField($custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->deleteTaskCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**|  | |

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

## `deleteTaskCustomFieldGroup()`

```php
deleteTaskCustomFieldGroup($group_id)
```

Delete a Task Custom Field Group

Deletes a custom field group. Returns 409 Conflict if the group still contains custom fields.<br/>Note: Custom Field Groups for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $apiInstance->deleteTaskCustomFieldGroup($group_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->deleteTaskCustomFieldGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |

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

## `deleteTaskCustomFieldTab()`

```php
deleteTaskCustomFieldTab($tab_id)
```

Delete a Task Custom Field Tab

Deletes a custom field tab. Returns 409 Conflict if the tab still contains groups.<br/>Note: Custom Field Tabs for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tab_id = 'tab_id_example'; // string

try {
    $apiInstance->deleteTaskCustomFieldTab($tab_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->deleteTaskCustomFieldTab: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tab_id** | **string**|  | |

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

## `getTask()`

```php
getTask($task_id, $fields): \Keap\Core\V2\Model\Task
```

Retrieve a Task

Retrieves a single task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$fields = array('fields_example'); // string[] | Comma-delimited list of optional Task properties to include in the response. Allowed values: custom_fields

try {
    $result = $apiInstance->getTask($task_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**|  | |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of optional Task properties to include in the response. Allowed values: custom_fields | [optional] |

### Return type

[**\Keap\Core\V2\Model\Task**](../Model/Task.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskCustomFieldGroup()`

```php
getTaskCustomFieldGroup($group_id): \Keap\Core\V2\Model\CustomFieldGroup
```

Retrieve a Task Custom Field Group

Retrieves a single custom field group by id for the Task record type.<br/>Note: Custom Field Groups for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->getTaskCustomFieldGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskCustomFieldGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\CustomFieldGroup**](../Model/CustomFieldGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskCustomFieldTab()`

```php
getTaskCustomFieldTab($tab_id): \Keap\Core\V2\Model\CustomFieldTab
```

Retrieve a Task Custom Field Tab

Retrieves a single custom field tab by id for the Task record type.<br/>Note: Custom Field Tabs for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tab_id = 'tab_id_example'; // string

try {
    $result = $apiInstance->getTaskCustomFieldTab($tab_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskCustomFieldTab: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tab_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\CustomFieldTab**](../Model/CustomFieldTab.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTaskCustomFieldGroups()`

```php
listTaskCustomFieldGroups($tab_id): \Keap\Core\V2\Model\ListCustomFieldGroupsResponse
```

List Task Custom Field Groups

Retrieves a list of custom field groups for the Task record type. Optionally filter by tab_id to scope to a specific tab.<br/>Note: Custom Field Groups for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tab_id = 'tab_id_example'; // string | Optional tab id to scope groups to a single tab

try {
    $result = $apiInstance->listTaskCustomFieldGroups($tab_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->listTaskCustomFieldGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tab_id** | **string**| Optional tab id to scope groups to a single tab | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListCustomFieldGroupsResponse**](../Model/ListCustomFieldGroupsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTaskCustomFieldTabs()`

```php
listTaskCustomFieldTabs(): \Keap\Core\V2\Model\ListCustomFieldTabsResponse
```

List Task Custom Field Tabs

Retrieves a list of custom field tabs for the Task record type.<br/>Note: Custom Field Tabs for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listTaskCustomFieldTabs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->listTaskCustomFieldTabs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\ListCustomFieldTabsResponse**](../Model/ListCustomFieldTabsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTasks()`

```php
listTasks($filter, $order_by, $page_size, $page_token, $fields): \Keap\Core\V2\Model\ListTasksResponse
```

List Tasks

Retrieves a list of tasks based on the provided filter. Tasks which are not assigned to a User may be queried with user_id==UNASSIGNED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `contact_id` - (String) `has_due_date` - (String) `is_completed` - (String) `user_id` - (String) `opportunity_id` - (String) `task_ids` - (String) `priority`  — one of `CRITICAL`, `ESSENTIAL`, `NONESSENTIAL` - (String) `since_time` - (String) `until_time` - (String)   `id`     — supports `==`, `>`, `<`, `>=`, `<=` - (String) `title`  — supports prefix wildcard (`title==Foo*`)  Operators must be URL-encoded (`==` → `%3D%3D`, `>` → `%3E`, `<` → `%3C`). For the filters listed above, here are some examples: - `filter=contact_id%3D%3D123` - `filter=has_due_date%3D%3Dtrue` - `filter=is_completed%3D%3Dtrue` - `filter=user_id%3D%3D321` - `filter=opportunity_id%3D%3D321` - `filter=task_ids%3D%3D1,2,3` - `filter=priority%3D%3DCRITICAL` - `filter=since_time%3D%3D2025-04-16T20:33:02.321Z;` - `filter=until_time%3D%3D2025-08-16T20:33:02.321Z;` - `filter=id%3E5`                  (id > 5) - `filter=id%3C%3D100`              (id <= 100) - `filter=title%3D%3DFollow%2A`     (title starts with \"Follow\")  **Custom fields:** tasks may also be filtered by any custom field defined on the Task record, referenced by its field name (e.g. `filter=cf_priority%3D%3D10`). Both indexed and non-indexed custom fields are filterable. Operators must be URL-encoded, same as the standard fields above. The supported operator and value depend on the field's data type: - Text-like fields (Text, Text Area, Name, Email, Website, Phone, Social Security Number) and choice fields with text options (Dropdown, Radio, State) — equals (`==`) and prefix wildcard (e.g. `cf_company%3D%3DAcme%2A`) - Numeric fields (Whole Number, Decimal, Currency, Percent, Year, Month, Day of Week, User) — equals and comparison (`==`, `>`, `<`, `>=`, `<=`) - Date and Date/Time fields — equals and comparison; the value must be a full ISO-8601 date-time with milliseconds and a timezone offset (e.g. `cf_renewDate%3C%3D2026-01-01T00:00:00.000Z`). Date-only values such as `2026-01-01` are rejected - Yes/No fields — equals only, value `0` (No) or `1` (Yes) - Drilldown fields — equals only, integer value - Multi-select fields (List Box, User List Box) — equals only, matched as a contains search over the stored selections (e.g. `cf_tags%3D%3Dred`) A custom field that does not exist, an operator unsupported for the field's type, or a value that does not match the field's type returns `400 Bad Request`.
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `id` - `create_time` - `due_time` - `update_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token
$fields = array('fields_example'); // string[] | Comma-delimited list of optional Task properties to include in the response. Allowed values: custom_fields

try {
    $result = $apiInstance->listTasks($filter, $order_by, $page_size, $page_token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->listTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;contact_id&#x60; - (String) &#x60;has_due_date&#x60; - (String) &#x60;is_completed&#x60; - (String) &#x60;user_id&#x60; - (String) &#x60;opportunity_id&#x60; - (String) &#x60;task_ids&#x60; - (String) &#x60;priority&#x60;  — one of &#x60;CRITICAL&#x60;, &#x60;ESSENTIAL&#x60;, &#x60;NONESSENTIAL&#x60; - (String) &#x60;since_time&#x60; - (String) &#x60;until_time&#x60; - (String)   &#x60;id&#x60;     — supports &#x60;&#x3D;&#x3D;&#x60;, &#x60;&gt;&#x60;, &#x60;&lt;&#x60;, &#x60;&gt;&#x3D;&#x60;, &#x60;&lt;&#x3D;&#x60; - (String) &#x60;title&#x60;  — supports prefix wildcard (&#x60;title&#x3D;&#x3D;Foo*&#x60;)  Operators must be URL-encoded (&#x60;&#x3D;&#x3D;&#x60; → &#x60;%3D%3D&#x60;, &#x60;&gt;&#x60; → &#x60;%3E&#x60;, &#x60;&lt;&#x60; → &#x60;%3C&#x60;). For the filters listed above, here are some examples: - &#x60;filter&#x3D;contact_id%3D%3D123&#x60; - &#x60;filter&#x3D;has_due_date%3D%3Dtrue&#x60; - &#x60;filter&#x3D;is_completed%3D%3Dtrue&#x60; - &#x60;filter&#x3D;user_id%3D%3D321&#x60; - &#x60;filter&#x3D;opportunity_id%3D%3D321&#x60; - &#x60;filter&#x3D;task_ids%3D%3D1,2,3&#x60; - &#x60;filter&#x3D;priority%3D%3DCRITICAL&#x60; - &#x60;filter&#x3D;since_time%3D%3D2025-04-16T20:33:02.321Z;&#x60; - &#x60;filter&#x3D;until_time%3D%3D2025-08-16T20:33:02.321Z;&#x60; - &#x60;filter&#x3D;id%3E5&#x60;                  (id &gt; 5) - &#x60;filter&#x3D;id%3C%3D100&#x60;              (id &lt;&#x3D; 100) - &#x60;filter&#x3D;title%3D%3DFollow%2A&#x60;     (title starts with \&quot;Follow\&quot;)  **Custom fields:** tasks may also be filtered by any custom field defined on the Task record, referenced by its field name (e.g. &#x60;filter&#x3D;cf_priority%3D%3D10&#x60;). Both indexed and non-indexed custom fields are filterable. Operators must be URL-encoded, same as the standard fields above. The supported operator and value depend on the field&#39;s data type: - Text-like fields (Text, Text Area, Name, Email, Website, Phone, Social Security Number) and choice fields with text options (Dropdown, Radio, State) — equals (&#x60;&#x3D;&#x3D;&#x60;) and prefix wildcard (e.g. &#x60;cf_company%3D%3DAcme%2A&#x60;) - Numeric fields (Whole Number, Decimal, Currency, Percent, Year, Month, Day of Week, User) — equals and comparison (&#x60;&#x3D;&#x3D;&#x60;, &#x60;&gt;&#x60;, &#x60;&lt;&#x60;, &#x60;&gt;&#x3D;&#x60;, &#x60;&lt;&#x3D;&#x60;) - Date and Date/Time fields — equals and comparison; the value must be a full ISO-8601 date-time with milliseconds and a timezone offset (e.g. &#x60;cf_renewDate%3C%3D2026-01-01T00:00:00.000Z&#x60;). Date-only values such as &#x60;2026-01-01&#x60; are rejected - Yes/No fields — equals only, value &#x60;0&#x60; (No) or &#x60;1&#x60; (Yes) - Drilldown fields — equals only, integer value - Multi-select fields (List Box, User List Box) — equals only, matched as a contains search over the stored selections (e.g. &#x60;cf_tags%3D%3Dred&#x60;) A custom field that does not exist, an operator unsupported for the field&#39;s type, or a value that does not match the field&#39;s type returns &#x60;400 Bad Request&#x60;. | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;id&#x60; - &#x60;create_time&#x60; - &#x60;due_time&#x60; - &#x60;update_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of optional Task properties to include in the response. Allowed values: custom_fields | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListTasksResponse**](../Model/ListTasksResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTask()`

```php
updateTask($task_id, $create_update_task_request, $update_mask, $fields): \Keap\Core\V2\Model\UpdateTaskResponse
```

Update a Task

Updates a task with only the values provided in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string
$create_update_task_request = new \Keap\Core\V2\Model\CreateUpdateTaskRequest(); // \Keap\Core\V2\Model\CreateUpdateTaskRequest
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.
$fields = array('fields_example'); // string[] | Comma-delimited list of optional Task properties to include in the response. Allowed values: custom_fields

try {
    $result = $apiInstance->updateTask($task_id, $create_update_task_request, $update_mask, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->updateTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**|  | |
| **create_update_task_request** | [**\Keap\Core\V2\Model\CreateUpdateTaskRequest**](../Model/CreateUpdateTaskRequest.md)|  | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of optional Task properties to include in the response. Allowed values: custom_fields | [optional] |

### Return type

[**\Keap\Core\V2\Model\UpdateTaskResponse**](../Model/UpdateTaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 'custom_field_id_example'; // string
$update_custom_field_meta_data_request = new \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest
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
| **custom_field_id** | **string**|  | |
| **update_custom_field_meta_data_request** | [**\Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest**](../Model/UpdateCustomFieldMetaDataRequest.md)|  | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\CustomFieldMetaData**](../Model/CustomFieldMetaData.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaskCustomFieldGroup()`

```php
updateTaskCustomFieldGroup($group_id, $update_mask, $update_custom_field_group_request): \Keap\Core\V2\Model\CustomFieldGroup
```

Update a Task Custom Field Group

Updates an existing custom field group. Only fields listed in `update_mask` are applied.<br/>Note: Custom Field Groups for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$update_mask = array('update_mask_example'); // string[] | Comma-separated list of fields to update
$update_custom_field_group_request = new \Keap\Core\V2\Model\UpdateCustomFieldGroupRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldGroupRequest

try {
    $result = $apiInstance->updateTaskCustomFieldGroup($group_id, $update_mask, $update_custom_field_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->updateTaskCustomFieldGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **update_mask** | [**string[]**](../Model/string.md)| Comma-separated list of fields to update | |
| **update_custom_field_group_request** | [**\Keap\Core\V2\Model\UpdateCustomFieldGroupRequest**](../Model/UpdateCustomFieldGroupRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\CustomFieldGroup**](../Model/CustomFieldGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaskCustomFieldTab()`

```php
updateTaskCustomFieldTab($tab_id, $update_mask, $update_custom_field_tab_request): \Keap\Core\V2\Model\CustomFieldTab
```

Update a Task Custom Field Tab

Updates an existing custom field tab. Only fields listed in `update_mask` are applied.<br/>Note: Custom Field Tabs for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tab_id = 'tab_id_example'; // string
$update_mask = array('update_mask_example'); // string[] | Comma-separated list of fields to update
$update_custom_field_tab_request = new \Keap\Core\V2\Model\UpdateCustomFieldTabRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldTabRequest

try {
    $result = $apiInstance->updateTaskCustomFieldTab($tab_id, $update_mask, $update_custom_field_tab_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->updateTaskCustomFieldTab: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tab_id** | **string**|  | |
| **update_mask** | [**string[]**](../Model/string.md)| Comma-separated list of fields to update | |
| **update_custom_field_tab_request** | [**\Keap\Core\V2\Model\UpdateCustomFieldTabRequest**](../Model/UpdateCustomFieldTabRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\CustomFieldTab**](../Model/CustomFieldTab.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
