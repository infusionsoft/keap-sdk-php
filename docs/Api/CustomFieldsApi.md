# Keap\Core\V2\CustomFieldsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomFields()**](CustomFieldsApi.md#getCustomFields) | **GET** /v2/customFields | Retrieves a list of custom fields in a tenant. |
| [**updateCustomField()**](CustomFieldsApi.md#updateCustomField) | **PATCH** /v2/customFields/{id} | Updates a custom field |


## `getCustomFields()`

```php
getCustomFields($filter, $page_token, $order_by, $page_size): \Keap\Core\V2\Model\PipelineCustomFields
```

Retrieves a list of custom fields in a tenant.

Retrieves a list of custom fields in a tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string
$page_token = 'page_token_example'; // string
$order_by = 'order_by_example'; // string
$page_size = 100; // int

try {
    $result = $apiInstance->getCustomFields($filter, $page_token, $order_by, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **page_token** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 1000] |

### Return type

[**\Keap\Core\V2\Model\PipelineCustomFields**](../Model/PipelineCustomFields.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomField()`

```php
updateCustomField($id, $update_custom_field_request): \Keap\Core\V2\Model\PipelineCustomField
```

Updates a custom field

Updates a custom field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | the identifier of the custom field to update
$update_custom_field_request = new \Keap\Core\V2\Model\UpdateCustomFieldRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldRequest | the request body containing updated custom field details

try {
    $result = $apiInstance->updateCustomField($id, $update_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| the identifier of the custom field to update | |
| **update_custom_field_request** | [**\Keap\Core\V2\Model\UpdateCustomFieldRequest**](../Model/UpdateCustomFieldRequest.md)| the request body containing updated custom field details | |

### Return type

[**\Keap\Core\V2\Model\PipelineCustomField**](../Model/PipelineCustomField.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
