# Keap\Core\V2\PaymentMethodsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deactivatePaymentMethod()**](PaymentMethodsApi.md#deactivatePaymentMethod) | **POST** /v2/contacts/{contact_id}/paymentMethods/{payment_method_id}:deactivate | Deactivate a Payment Method |
| [**deletePaymentMethod()**](PaymentMethodsApi.md#deletePaymentMethod) | **DELETE** /v2/contacts/{contact_id}/paymentMethods/{payment_method_id} | Delete a Payment Method |
| [**listPaymentMethods()**](PaymentMethodsApi.md#listPaymentMethods) | **GET** /v2/contacts/{contact_id}/paymentMethods | List of Payment Methods |


## `deactivatePaymentMethod()`

```php
deactivatePaymentMethod($contact_id, $payment_method_id)
```

Deactivate a Payment Method

Deactivate the specified payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | ID of the contact to which the payment method belongs.
$payment_method_id = 'payment_method_id_example'; // string | ID of the payment method to be deactivated.

try {
    $apiInstance->deactivatePaymentMethod($contact_id, $payment_method_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->deactivatePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| ID of the contact to which the payment method belongs. | |
| **payment_method_id** | **string**| ID of the payment method to be deactivated. | |

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

## `deletePaymentMethod()`

```php
deletePaymentMethod($contact_id, $payment_method_id)
```

Delete a Payment Method

Deletes the specified payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | ID of the contact to which the payment method belongs.
$payment_method_id = 'payment_method_id_example'; // string | ID of the payment method to be deleted.

try {
    $apiInstance->deletePaymentMethod($contact_id, $payment_method_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->deletePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| ID of the contact to which the payment method belongs. | |
| **payment_method_id** | **string**| ID of the payment method to be deleted. | |

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

## `listPaymentMethods()`

```php
listPaymentMethods($contact_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListPaymentMethodsResponse
```

List of Payment Methods

Retrieves a list of Payment Methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | ID of the contact to which the payment method belongs.
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `merchant_account_id`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. - `filter=merchant_account_id%3D%3D123`  You can filter across all contacts by using the `-` for the `contact_id` field.
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `date_created`  One of the following directions: - `desc` - `asc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listPaymentMethods($contact_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->listPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| ID of the contact to which the payment method belongs. | |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;merchant_account_id&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. - &#x60;filter&#x3D;merchant_account_id%3D%3D123&#x60;  You can filter across all contacts by using the &#x60;-&#x60; for the &#x60;contact_id&#x60; field. | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;date_created&#x60;  One of the following directions: - &#x60;desc&#x60; - &#x60;asc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListPaymentMethodsResponse**](../Model/ListPaymentMethodsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
