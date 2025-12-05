# Keap\Core\V2\ReferralApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReferral()**](ReferralApi.md#createReferral) | **POST** /v2/referrals | Create a Referral |


## `createReferral()`

```php
createReferral($create_referral_request): \Keap\Core\V2\Model\Referral
```

Create a Referral

Creates a new referral partner referral on the provided contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ReferralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_referral_request = new \Keap\Core\V2\Model\CreateReferralRequest(); // \Keap\Core\V2\Model\CreateReferralRequest | request

try {
    $result = $apiInstance->createReferral($create_referral_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralApi->createReferral: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_referral_request** | [**\Keap\Core\V2\Model\CreateReferralRequest**](../Model/CreateReferralRequest.md)| request | |

### Return type

[**\Keap\Core\V2\Model\Referral**](../Model/Referral.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
