# Keap\Core\V2\SettingsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApplicationConfigurations()**](SettingsApi.md#getApplicationConfigurations) | **GET** /v2/settings/applications:getConfiguration | Get Application Configuration |
| [**getContactOptionTypes()**](SettingsApi.md#getContactOptionTypes) | **GET** /v2/settings/contactOptionTypes | Get Contact Option types |
| [**isApplicationEnabled()**](SettingsApi.md#isApplicationEnabled) | **GET** /v2/settings/applications:isEnabled | Get Application Status |


## `getApplicationConfigurations()`

```php
getApplicationConfigurations($fields): \Keap\Core\V2\Model\GetSettingsResponse
```

Get Application Configuration

Get configuration values for the application instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = array('fields_example'); // string[] | By default, only application data is returned. In addition to that, data is returned for the fields that are mentioned in the query.

try {
    $result = $apiInstance->getApplicationConfigurations($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getApplicationConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | [**string[]**](../Model/string.md)| By default, only application data is returned. In addition to that, data is returned for the fields that are mentioned in the query. | [optional] |

### Return type

[**\Keap\Core\V2\Model\GetSettingsResponse**](../Model/GetSettingsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactOptionTypes()`

```php
getContactOptionTypes(): \Keap\Core\V2\Model\GetContactOptionTypesResponse
```

Get Contact Option types

Gets a list of Contact Option types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getContactOptionTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getContactOptionTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\GetContactOptionTypesResponse**](../Model/GetContactOptionTypesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `isApplicationEnabled()`

```php
isApplicationEnabled(): \Keap\Core\V2\Model\GetApplicationEnabledStatusResponse
```

Get Application Status

Check if the application is enabled or not

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->isApplicationEnabled();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->isApplicationEnabled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\GetApplicationEnabledStatusResponse**](../Model/GetApplicationEnabledStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
