# Keap\Core\V2\UsersApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserById()**](UsersApi.md#getUserById) | **GET** /v2/users/{user_id} | Get User |
| [**getUserInfo()**](UsersApi.md#getUserInfo) | **GET** /v2/oauth/connect/userinfo | Retrieve User Info |
| [**getUserSignature()**](UsersApi.md#getUserSignature) | **GET** /v2/users/{user_id}/signature | Get User email signature |
| [**listPaginatedUsers()**](UsersApi.md#listPaginatedUsers) | **GET** /v2/users | List Users |
| [**updateUser()**](UsersApi.md#updateUser) | **PATCH** /v2/users/{user_id} | Update User |


## `getUserById()`

```php
getUserById($user_id): \Keap\Core\V2\Model\User
```

Get User

Retrieves a specific User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string | user_id

try {
    $result = $apiInstance->getUserById($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| user_id | |

### Return type

[**\Keap\Core\V2\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserInfo()`

```php
getUserInfo(): \Keap\Core\V2\Model\GetUserInfoResponse
```

Retrieve User Info

Retrieves information for the current authenticated end-user, as outlined by the [OpenID Connect specification](http://openid.net/specs/openid-connect-core-1_0.html#UserInfo).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getUserInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\GetUserInfoResponse**](../Model/GetUserInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserSignature()`

```php
getUserSignature($user_id): string
```

Get User email signature

Retrieves a HTML snippet that contains the user's email signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string | user_id

try {
    $result = $apiInstance->getUserSignature($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserSignature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| user_id | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaginatedUsers()`

```php
listPaginatedUsers($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListUsersPaginatedResponse
```

List Users

Retrieves a list of users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `email` - (String) `given_name` - (Boolean) `include_inactive` - (Boolean) `include_partners` - (Set[String]) `user_ids`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=given_name%3D%3DMary` - `filter=user_ids%3D%3D123%3Bgiven_name%3D%3DSmith`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `date_created` - `email`  One of the following directions: - `asc` - `desc`
$page_size = 10; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listPaginatedUsers($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listPaginatedUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;email&#x60; - (String) &#x60;given_name&#x60; - (Boolean) &#x60;include_inactive&#x60; - (Boolean) &#x60;include_partners&#x60; - (Set[String]) &#x60;user_ids&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;given_name%3D%3DMary&#x60; - &#x60;filter&#x3D;user_ids%3D%3D123%3Bgiven_name%3D%3DSmith&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;date_created&#x60; - &#x60;email&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListUsersPaginatedResponse**](../Model/ListUsersPaginatedResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($user_id, $update_mask, $update_user_request): \Keap\Core\V2\Model\User
```

Update User

Updates information on a specific User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string | user_id
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.
$update_user_request = new \Keap\Core\V2\Model\UpdateUserRequest(); // \Keap\Core\V2\Model\UpdateUserRequest | user

try {
    $result = $apiInstance->updateUser($user_id, $update_mask, $update_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| user_id | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |
| **update_user_request** | [**\Keap\Core\V2\Model\UpdateUserRequest**](../Model/UpdateUserRequest.md)| user | [optional] |

### Return type

[**\Keap\Core\V2\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
