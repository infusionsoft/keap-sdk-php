# Keap\Core\V2\OrdersApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrderCustomFieldUsingPOST()**](OrdersApi.md#createOrderCustomFieldUsingPOST) | **POST** /v2/orders/model/customFields | Create an Order Custom Field |
| [**deleteOrderCustomFieldUsingDELETE()**](OrdersApi.md#deleteOrderCustomFieldUsingDELETE) | **DELETE** /v2/orders/model/customFields/{custom_field_id} | Delete an Order Custom Field |
| [**retrieveOrderCustomFieldModelUsingGET()**](OrdersApi.md#retrieveOrderCustomFieldModelUsingGET) | **GET** /v2/orders/model | Retrieve Order Custom Field Model |
| [**updateOrderCustomFieldUsingPATCH()**](OrdersApi.md#updateOrderCustomFieldUsingPATCH) | **PATCH** /v2/orders/model/customFields/{custom_field_id} | Update an Order Custom Field |


## `createOrderCustomFieldUsingPOST()`

```php
createOrderCustomFieldUsingPOST($create_custom_field_request): \Keap\Core\V2\Model\CustomFieldMetaData
```

Create an Order Custom Field

Creates a custom field of the specified type and options to the Order object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_custom_field_request = new \Keap\Core\V2\Model\CreateCustomFieldRequest(); // \Keap\Core\V2\Model\CreateCustomFieldRequest | customField

try {
    $result = $apiInstance->createOrderCustomFieldUsingPOST($create_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrderCustomFieldUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_custom_field_request** | [**\Keap\Core\V2\Model\CreateCustomFieldRequest**](../Model/CreateCustomFieldRequest.md)| customField | |

### Return type

[**\Keap\Core\V2\Model\CustomFieldMetaData**](../Model/CustomFieldMetaData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrderCustomFieldUsingDELETE()`

```php
deleteOrderCustomFieldUsingDELETE($custom_field_id)
```

Delete an Order Custom Field

Deletes a Custom Field from the Order object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_field_id = 'custom_field_id_example'; // string | custom_field_id

try {
    $apiInstance->deleteOrderCustomFieldUsingDELETE($custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->deleteOrderCustomFieldUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**| custom_field_id | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveOrderCustomFieldModelUsingGET()`

```php
retrieveOrderCustomFieldModelUsingGET(): \Keap\Core\V2\Model\ObjectModel
```

Retrieve Order Custom Field Model

Gets the custom fields for the Order object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->retrieveOrderCustomFieldModelUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->retrieveOrderCustomFieldModelUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\ObjectModel**](../Model/ObjectModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderCustomFieldUsingPATCH()`

```php
updateOrderCustomFieldUsingPATCH($custom_field_id, $update_custom_field_meta_data_request, $update_mask): \Keap\Core\V2\Model\CustomFieldMetaData
```

Update an Order Custom Field

Updates a custom field of the specified type and options to the Order object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_field_id = 'custom_field_id_example'; // string | custom_field_id
$update_custom_field_meta_data_request = new \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest | request
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateOrderCustomFieldUsingPATCH($custom_field_id, $update_custom_field_meta_data_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrderCustomFieldUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**| custom_field_id | |
| **update_custom_field_meta_data_request** | [**\Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest**](../Model/UpdateCustomFieldMetaDataRequest.md)| request | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\CustomFieldMetaData**](../Model/CustomFieldMetaData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
