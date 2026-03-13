# Keap\Core\V2\UserGroupsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserGroup()**](UserGroupsApi.md#getUserGroup) | **GET** /v2/userGroups/{user_group_id} | Retrieve an User Group |
| [**listUserGroups()**](UserGroupsApi.md#listUserGroups) | **GET** /v2/userGroups | List User Groups |


## `getUserGroup()`

```php
getUserGroup($user_group_id): \Keap\Core\V2\Model\UserGroup
```

Retrieve an User Group

Retrieves a single user group by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\UserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_group_id = 'user_group_id_example'; // string | user_group_id

try {
    $result = $apiInstance->getUserGroup($user_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->getUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_group_id** | **string**| user_group_id | |

### Return type

[**\Keap\Core\V2\Model\UserGroup**](../Model/UserGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserGroups()`

```php
listUserGroups(): \Keap\Core\V2\Model\ListUserGroupsResponse
```

List User Groups

Retrieves a list of all user groups in the application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\UserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listUserGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->listUserGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\ListUserGroupsResponse**](../Model/ListUserGroupsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
