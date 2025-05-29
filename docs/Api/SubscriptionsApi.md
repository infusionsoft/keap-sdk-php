# Keap\Core\V2\SubscriptionsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSubscriptionCustomFieldUsingPOST()**](SubscriptionsApi.md#createSubscriptionCustomFieldUsingPOST) | **POST** /v2/subscriptions/model/customFields | Create a Subscription Custom Field |
| [**createSubscriptionV2UsingPOST()**](SubscriptionsApi.md#createSubscriptionV2UsingPOST) | **POST** /v2/subscriptions | Create Subscription |
| [**deleteSubscriptionCustomFieldUsingDELETE()**](SubscriptionsApi.md#deleteSubscriptionCustomFieldUsingDELETE) | **DELETE** /v2/subscriptions/model/customFields/{custom_field_id} | Delete a Subscription Custom Field |
| [**retrieveSubscriptionCustomFieldModelUsingGET()**](SubscriptionsApi.md#retrieveSubscriptionCustomFieldModelUsingGET) | **GET** /v2/subscriptions/model | Retrieve Subscription Custom Field Model |
| [**updateSubscriptionCustomFieldUsingPATCH()**](SubscriptionsApi.md#updateSubscriptionCustomFieldUsingPATCH) | **PATCH** /v2/subscriptions/model/customFields/{custom_field_id} | Update a Subscription Custom Field |


## `createSubscriptionCustomFieldUsingPOST()`

```php
createSubscriptionCustomFieldUsingPOST($create_custom_field_request): \Keap\Core\V2\Model\CustomFieldMetaData
```

Create a Subscription Custom Field

Creates a custom field of the specified type and options to the Subscription object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_custom_field_request = new \Keap\Core\V2\Model\CreateCustomFieldRequest(); // \Keap\Core\V2\Model\CreateCustomFieldRequest | customField

try {
    $result = $apiInstance->createSubscriptionCustomFieldUsingPOST($create_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createSubscriptionCustomFieldUsingPOST: ', $e->getMessage(), PHP_EOL;
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

## `createSubscriptionV2UsingPOST()`

```php
createSubscriptionV2UsingPOST($create_subscription_v2): \Keap\Core\V2\Model\RestSubscriptionV2
```

Create Subscription

Creates a subscription with the specified product and product subscription id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_subscription_v2 = new \Keap\Core\V2\Model\CreateSubscriptionV2(); // \Keap\Core\V2\Model\CreateSubscriptionV2 | createSubscriptionV2

try {
    $result = $apiInstance->createSubscriptionV2UsingPOST($create_subscription_v2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createSubscriptionV2UsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_subscription_v2** | [**\Keap\Core\V2\Model\CreateSubscriptionV2**](../Model/CreateSubscriptionV2.md)| createSubscriptionV2 | |

### Return type

[**\Keap\Core\V2\Model\RestSubscriptionV2**](../Model/RestSubscriptionV2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubscriptionCustomFieldUsingDELETE()`

```php
deleteSubscriptionCustomFieldUsingDELETE($custom_field_id)
```

Delete a Subscription Custom Field

Deletes a custom field from the Subscription object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_field_id = 'custom_field_id_example'; // string | custom_field_id

try {
    $apiInstance->deleteSubscriptionCustomFieldUsingDELETE($custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteSubscriptionCustomFieldUsingDELETE: ', $e->getMessage(), PHP_EOL;
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

## `retrieveSubscriptionCustomFieldModelUsingGET()`

```php
retrieveSubscriptionCustomFieldModelUsingGET(): \Keap\Core\V2\Model\ObjectModel
```

Retrieve Subscription Custom Field Model

Get the custom fields for the Subscription object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->retrieveSubscriptionCustomFieldModelUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->retrieveSubscriptionCustomFieldModelUsingGET: ', $e->getMessage(), PHP_EOL;
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

## `updateSubscriptionCustomFieldUsingPATCH()`

```php
updateSubscriptionCustomFieldUsingPATCH($custom_field_id, $update_custom_field_meta_data_request, $update_mask): \Keap\Core\V2\Model\CustomFieldMetaData
```

Update a Subscription Custom Field

Updates a custom field of the specified type and options to the Subscription object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_field_id = 'custom_field_id_example'; // string | custom_field_id
$update_custom_field_meta_data_request = new \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest | request
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateSubscriptionCustomFieldUsingPATCH($custom_field_id, $update_custom_field_meta_data_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscriptionCustomFieldUsingPATCH: ', $e->getMessage(), PHP_EOL;
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
