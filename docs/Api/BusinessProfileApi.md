# Keap\Core\V2\BusinessProfileApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBusinessProfile()**](BusinessProfileApi.md#getBusinessProfile) | **GET** /rest/v2/businessProfile | Retrieve Business Profile |
| [**updateBusinessProfile()**](BusinessProfileApi.md#updateBusinessProfile) | **PATCH** /rest/v2/businessProfile | Update Business Profile |


## `getBusinessProfile()`

```php
getBusinessProfile(): \Keap\Core\V2\Model\GetBusinessProfileResponse
```

Retrieve Business Profile

Retrieves Business Profile information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\BusinessProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBusinessProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessProfileApi->getBusinessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\GetBusinessProfileResponse**](../Model/GetBusinessProfileResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBusinessProfile()`

```php
updateBusinessProfile($update_business_profile_request, $update_mask): \Keap\Core\V2\Model\GetBusinessProfileResponse
```

Update Business Profile

Updates Business Profile information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\BusinessProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_business_profile_request = new \Keap\Core\V2\Model\UpdateBusinessProfileRequest(); // \Keap\Core\V2\Model\UpdateBusinessProfileRequest
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateBusinessProfile($update_business_profile_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessProfileApi->updateBusinessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_business_profile_request** | [**\Keap\Core\V2\Model\UpdateBusinessProfileRequest**](../Model/UpdateBusinessProfileRequest.md)|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\GetBusinessProfileResponse**](../Model/GetBusinessProfileResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
