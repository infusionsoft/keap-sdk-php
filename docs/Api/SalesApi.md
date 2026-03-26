# Keap\Core\V2\SalesApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**setMerchantGatewayAsDefault()**](SalesApi.md#setMerchantGatewayAsDefault) | **POST** /rest/v2/sales/merchants/{id}:setDefault | Set default Merchant Account |


## `setMerchantGatewayAsDefault()`

```php
setMerchantGatewayAsDefault($id)
```

Set default Merchant Account

Sets the specified Merchant Account as the default Merchant Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->setMerchantGatewayAsDefault($id);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->setMerchantGatewayAsDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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
