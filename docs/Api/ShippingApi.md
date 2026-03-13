# Keap\Core\V2\ShippingApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listShippingMethods()**](ShippingApi.md#listShippingMethods) | **GET** /v2/shipping | List Shipping methods |


## `listShippingMethods()`

```php
listShippingMethods(): \Keap\Core\V2\Model\ListRestShippingMethodsResponse
```

List Shipping methods

Retrieves a list of Shipping methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listShippingMethods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->listShippingMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\ListRestShippingMethodsResponse**](../Model/ListRestShippingMethodsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
