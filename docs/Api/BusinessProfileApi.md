# Keap\Core\V2\BusinessProfileApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBusinessProfile()**](BusinessProfileApi.md#getBusinessProfile) | **GET** /v2/businessProfile | Retrieve Business Profile |
| [**updateBusinessProfile()**](BusinessProfileApi.md#updateBusinessProfile) | **PATCH** /v2/businessProfile | Update Business Profile |


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


$apiInstance = new Keap\Core\V2\Api\BusinessProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBusinessProfile()`

```php
updateBusinessProfile($update_mask, $update_business_profile_request): \Keap\Core\V2\Model\GetBusinessProfileResponse
```

Update Business Profile

Updates Business Profile information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\BusinessProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.
$update_business_profile_request = new \Keap\Core\V2\Model\UpdateBusinessProfileRequest(); // \Keap\Core\V2\Model\UpdateBusinessProfileRequest | businessProfile

try {
    $result = $apiInstance->updateBusinessProfile($update_mask, $update_business_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessProfileApi->updateBusinessProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |
| **update_business_profile_request** | [**\Keap\Core\V2\Model\UpdateBusinessProfileRequest**](../Model/UpdateBusinessProfileRequest.md)| businessProfile | [optional] |

### Return type

[**\Keap\Core\V2\Model\GetBusinessProfileResponse**](../Model/GetBusinessProfileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
