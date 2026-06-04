# Keap\Core\V2\PaymentMethodsApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deactivatePaymentMethod()**](PaymentMethodsApi.md#deactivatePaymentMethod) | **POST** /rest/v2/contacts/{contact_id}/paymentMethods/{payment_method_id}:deactivate | Deactivate a Contact Payment Method |
| [**deletePaymentMethod()**](PaymentMethodsApi.md#deletePaymentMethod) | **DELETE** /rest/v2/contacts/{contact_id}/paymentMethods/{payment_method_id} | Delete a Contact Payment Method |
| [**listPaymentMethods()**](PaymentMethodsApi.md#listPaymentMethods) | **GET** /rest/v2/paymentMethods | List of Payment Methods |
| [**listPaymentMethods_0()**](PaymentMethodsApi.md#listPaymentMethods_0) | **GET** /rest/v2/contacts/{contact_id}/paymentMethods | List of Contact Payment Methods |


## `deactivatePaymentMethod()`

```php
deactivatePaymentMethod($contact_id, $payment_method_id)
```

Deactivate a Contact Payment Method

Deactivate the specified payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[oauth2](../../README.md#oauth2)

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

Delete a Contact Payment Method

Deletes the specified payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentMethods()`

```php
listPaymentMethods($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListPaymentMethodsResponse
```

List of Payment Methods

Retrieves a list of Payment Methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `payment_method_id` - (String) `credit_card_id` - (String) `contact_id` - (String) `merchant_account_id` - (String) `since_time` - (String) `until_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. - `filter=payment_method_id%3D%3D123` - `filter=contact_id%3D%3D123%3Bmerchant_account_id%3D%3D567`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `payment_method_id` - `created_time` - `contact_id` - `merchant_account_id`  One of the following directions: - `desc` - `asc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listPaymentMethods($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->listPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;payment_method_id&#x60; - (String) &#x60;credit_card_id&#x60; - (String) &#x60;contact_id&#x60; - (String) &#x60;merchant_account_id&#x60; - (String) &#x60;since_time&#x60; - (String) &#x60;until_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. - &#x60;filter&#x3D;payment_method_id%3D%3D123&#x60; - &#x60;filter&#x3D;contact_id%3D%3D123%3Bmerchant_account_id%3D%3D567&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;payment_method_id&#x60; - &#x60;created_time&#x60; - &#x60;contact_id&#x60; - &#x60;merchant_account_id&#x60;  One of the following directions: - &#x60;desc&#x60; - &#x60;asc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListPaymentMethodsResponse**](../Model/ListPaymentMethodsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentMethods_0()`

```php
listPaymentMethods_0($contact_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListContactPaymentMethodsResponse
```

List of Contact Payment Methods

Retrieves a list of Contact Payment Methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | ID of the contact to which the payment method belongs.
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `merchant_account_id`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. - `filter=merchant_account_id%3D%3D123`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `created_time`  One of the following directions: - `desc` - `asc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listPaymentMethods_0($contact_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->listPaymentMethods_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| ID of the contact to which the payment method belongs. | |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;merchant_account_id&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. - &#x60;filter&#x3D;merchant_account_id%3D%3D123&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;created_time&#x60;  One of the following directions: - &#x60;desc&#x60; - &#x60;asc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListContactPaymentMethodsResponse**](../Model/ListContactPaymentMethodsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
