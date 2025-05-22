# Keap\Core\V2\PaymentMethodConfigsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentMethodConfigUsingPOST()**](PaymentMethodConfigsApi.md#createPaymentMethodConfigUsingPOST) | **POST** /v2/paymentMethodConfigs | Create Payment Method Configuration |


## `createPaymentMethodConfigUsingPOST()`

```php
createPaymentMethodConfigUsingPOST($create_payment_method_config_request): \Keap\Core\V2\Model\PaymentMethodConfig
```

Create Payment Method Configuration

Creates configuration details for rendering payment method components

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PaymentMethodConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_payment_method_config_request = new \Keap\Core\V2\Model\CreatePaymentMethodConfigRequest(); // \Keap\Core\V2\Model\CreatePaymentMethodConfigRequest | request

try {
    $result = $apiInstance->createPaymentMethodConfigUsingPOST($create_payment_method_config_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodConfigsApi->createPaymentMethodConfigUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_payment_method_config_request** | [**\Keap\Core\V2\Model\CreatePaymentMethodConfigRequest**](../Model/CreatePaymentMethodConfigRequest.md)| request | |

### Return type

[**\Keap\Core\V2\Model\PaymentMethodConfig**](../Model/PaymentMethodConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
