# Keap\Core\V2\PaymentMethodConfigsApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentMethodConfig()**](PaymentMethodConfigsApi.md#createPaymentMethodConfig) | **POST** /rest/v2/paymentMethodConfigs | Create Payment Method Configuration |


## `createPaymentMethodConfig()`

```php
createPaymentMethodConfig($create_payment_method_config_request): \Keap\Core\V2\Model\PaymentMethodConfig
```

Create Payment Method Configuration

Creates configuration details for rendering payment method components

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\PaymentMethodConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_payment_method_config_request = new \Keap\Core\V2\Model\CreatePaymentMethodConfigRequest(); // \Keap\Core\V2\Model\CreatePaymentMethodConfigRequest

try {
    $result = $apiInstance->createPaymentMethodConfig($create_payment_method_config_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodConfigsApi->createPaymentMethodConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_payment_method_config_request** | [**\Keap\Core\V2\Model\CreatePaymentMethodConfigRequest**](../Model/CreatePaymentMethodConfigRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\PaymentMethodConfig**](../Model/PaymentMethodConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
