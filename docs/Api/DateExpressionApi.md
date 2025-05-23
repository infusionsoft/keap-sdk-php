# Keap\Core\V2\DateExpressionApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**queryDateExpressions()**](DateExpressionApi.md#queryDateExpressions) | **GET** /v2/dateExpressions |  |


## `queryDateExpressions()`

```php
queryDateExpressions($time_zone, $query): \Keap\Core\V2\Model\DateExpressionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DateExpressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$time_zone = 'time_zone_example'; // string
$query = 'query_example'; // string

try {
    $result = $apiInstance->queryDateExpressions($time_zone, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DateExpressionApi->queryDateExpressions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **time_zone** | **string**|  | [optional] |
| **query** | **string**|  | [optional] |

### Return type

[**\Keap\Core\V2\Model\DateExpressionResponse**](../Model/DateExpressionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
