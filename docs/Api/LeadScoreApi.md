# Keap\Core\V2\LeadScoreApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLeadScoreDetails()**](LeadScoreApi.md#getLeadScoreDetails) | **GET** /rest/v2/contacts/{contact_id}/leadScore | Retrieve Lead Score of a Contact |


## `getLeadScoreDetails()`

```php
getLeadScoreDetails($contact_id): \Keap\Core\V2\Model\LeadScore
```

Retrieve Lead Score of a Contact

Retrieves information about the Lead Score of a Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\LeadScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string

try {
    $result = $apiInstance->getLeadScoreDetails($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadScoreApi->getLeadScoreDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\LeadScore**](../Model/LeadScore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
