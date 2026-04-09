# Keap\Core\V2\OrdersApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyCommissionOnOrderItems()**](OrdersApi.md#applyCommissionOnOrderItems) | **POST** /rest/v2/orders/{order_id}/items/{order_item_id}:applyCommission | Apply Commission to an Order Item |
| [**applyTax()**](OrdersApi.md#applyTax) | **POST** /rest/v2/orders/{order_id}:applyTax | Apply Taxes on an Order |
| [**attachFileToOrder()**](OrdersApi.md#attachFileToOrder) | **POST** /rest/v2/orders/{order_id}:attachFile | Attach a File to an Order Invoice |
| [**createOrder()**](OrdersApi.md#createOrder) | **POST** /rest/v2/orders | Create an Order |
| [**createOrderCustomField()**](OrdersApi.md#createOrderCustomField) | **POST** /rest/v2/orders/model/customFields | Create an Order Custom Field |
| [**createOrderItem()**](OrdersApi.md#createOrderItem) | **POST** /rest/v2/orders/{order_id}/items | Create an Order Item |
| [**createPaymentForAnOrder()**](OrdersApi.md#createPaymentForAnOrder) | **POST** /rest/v2/orders/{order_id}/payments | Create a Payment |
| [**deleteOrder()**](OrdersApi.md#deleteOrder) | **DELETE** /rest/v2/orders/{order_id} | Delete an Order |
| [**deleteOrderCustomField()**](OrdersApi.md#deleteOrderCustomField) | **DELETE** /rest/v2/orders/model/customFields/{custom_field_id} | Delete an Order Custom Field |
| [**deleteOrderItem()**](OrdersApi.md#deleteOrderItem) | **DELETE** /rest/v2/orders/{order_id}/items/{order_item_id} | Delete an Order Item |
| [**detachFileFromOrder()**](OrdersApi.md#detachFileFromOrder) | **POST** /rest/v2/orders/{order_id}:detachFile | Detach a File from an Order Invoice |
| [**getOrder()**](OrdersApi.md#getOrder) | **GET** /rest/v2/orders/{order_id} | Retrieve an Order |
| [**listOrderPayments()**](OrdersApi.md#listOrderPayments) | **GET** /rest/v2/orders/{order_id}/payments | Retrieve Order Payments |
| [**listOrders()**](OrdersApi.md#listOrders) | **GET** /rest/v2/orders | List orders |
| [**retrieveOrderCustomFieldModel()**](OrdersApi.md#retrieveOrderCustomFieldModel) | **GET** /rest/v2/orders/model | Retrieve Order Custom Field Model |
| [**updateOrder()**](OrdersApi.md#updateOrder) | **PATCH** /rest/v2/orders/{order_id} | Update an Order |
| [**updateOrderCustomField()**](OrdersApi.md#updateOrderCustomField) | **PATCH** /rest/v2/orders/model/customFields/{custom_field_id} | Update an Order Custom Field |
| [**updateOrderItem()**](OrdersApi.md#updateOrderItem) | **PATCH** /rest/v2/orders/{order_id}/items/{order_item_id} | Update an Order Item |


## `applyCommissionOnOrderItems()`

```php
applyCommissionOnOrderItems($order_id, $order_item_id, $apply_commission_request): \Keap\Core\V2\Model\OrderItem
```

Apply Commission to an Order Item

Applies commission to an order item on an existing order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string
$order_item_id = 'order_item_id_example'; // string
$apply_commission_request = new \Keap\Core\V2\Model\ApplyCommissionRequest(); // \Keap\Core\V2\Model\ApplyCommissionRequest

try {
    $result = $apiInstance->applyCommissionOnOrderItems($order_id, $order_item_id, $apply_commission_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->applyCommissionOnOrderItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |
| **order_item_id** | **string**|  | |
| **apply_commission_request** | [**\Keap\Core\V2\Model\ApplyCommissionRequest**](../Model/ApplyCommissionRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\OrderItem**](../Model/OrderItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applyTax()`

```php
applyTax($order_id): \Keap\Core\V2\Model\OrderV2
```

Apply Taxes on an Order

Calculate taxes for a single Order for a given order id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->applyTax($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->applyTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\OrderV2**](../Model/OrderV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachFileToOrder()`

```php
attachFileToOrder($order_id, $file_operation_request): \Keap\Core\V2\Model\OrderV2
```

Attach a File to an Order Invoice

Attaches an uploaded File to an Order Invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string
$file_operation_request = new \Keap\Core\V2\Model\FileOperationRequest(); // \Keap\Core\V2\Model\FileOperationRequest

try {
    $result = $apiInstance->attachFileToOrder($order_id, $file_operation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->attachFileToOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |
| **file_operation_request** | [**\Keap\Core\V2\Model\FileOperationRequest**](../Model/FileOperationRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\OrderV2**](../Model/OrderV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($rest_create_order_request): \Keap\Core\V2\Model\OrderV2
```

Create an Order

Creates a one time Order with Order items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_create_order_request = new \Keap\Core\V2\Model\RestCreateOrderRequest(); // \Keap\Core\V2\Model\RestCreateOrderRequest

try {
    $result = $apiInstance->createOrder($rest_create_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_create_order_request** | [**\Keap\Core\V2\Model\RestCreateOrderRequest**](../Model/RestCreateOrderRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\OrderV2**](../Model/OrderV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrderCustomField()`

```php
createOrderCustomField($create_custom_field_request): \Keap\Core\V2\Model\CustomFieldMetaData
```

Create an Order Custom Field

Creates a custom field of the specified type and options to the Order object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_field_request = new \Keap\Core\V2\Model\CreateCustomFieldRequest(); // \Keap\Core\V2\Model\CreateCustomFieldRequest

try {
    $result = $apiInstance->createOrderCustomField($create_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrderCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_custom_field_request** | [**\Keap\Core\V2\Model\CreateCustomFieldRequest**](../Model/CreateCustomFieldRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\CustomFieldMetaData**](../Model/CustomFieldMetaData.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrderItem()`

```php
createOrderItem($order_id, $create_order_item_request): \Keap\Core\V2\Model\OrderItem
```

Create an Order Item

Creates an order item on an existing order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string
$create_order_item_request = new \Keap\Core\V2\Model\CreateOrderItemRequest(); // \Keap\Core\V2\Model\CreateOrderItemRequest

try {
    $result = $apiInstance->createOrderItem($order_id, $create_order_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |
| **create_order_item_request** | [**\Keap\Core\V2\Model\CreateOrderItemRequest**](../Model/CreateOrderItemRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\OrderItem**](../Model/OrderItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentForAnOrder()`

```php
createPaymentForAnOrder($order_id, $rest_create_payment_request): \Keap\Core\V2\Model\PaymentResult
```

Create a Payment

Creates a payment record. Alternatively, adds a record of historical or external payment of cash or credit card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string
$rest_create_payment_request = new \Keap\Core\V2\Model\RestCreatePaymentRequest(); // \Keap\Core\V2\Model\RestCreatePaymentRequest

try {
    $result = $apiInstance->createPaymentForAnOrder($order_id, $rest_create_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createPaymentForAnOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |
| **rest_create_payment_request** | [**\Keap\Core\V2\Model\RestCreatePaymentRequest**](../Model/RestCreatePaymentRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\PaymentResult**](../Model/PaymentResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrder()`

```php
deleteOrder($order_id)
```

Delete an Order

Deletes an Order<br/> Note: The Order must not have any transactions recorded to be available for deletion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string

try {
    $apiInstance->deleteOrder($order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |

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

## `deleteOrderCustomField()`

```php
deleteOrderCustomField($custom_field_id)
```

Delete an Order Custom Field

Deletes a Custom Field from the Order object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 'custom_field_id_example'; // string

try {
    $apiInstance->deleteOrderCustomField($custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->deleteOrderCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**|  | |

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

## `deleteOrderItem()`

```php
deleteOrderItem($order_id, $order_item_id)
```

Delete an Order Item

Deletes an order item on an existing order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string
$order_item_id = 'order_item_id_example'; // string

try {
    $apiInstance->deleteOrderItem($order_id, $order_item_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->deleteOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |
| **order_item_id** | **string**|  | |

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

## `detachFileFromOrder()`

```php
detachFileFromOrder($order_id, $file_operation_request): \Keap\Core\V2\Model\OrderV2
```

Detach a File from an Order Invoice

Detaches a File from an Order Invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string
$file_operation_request = new \Keap\Core\V2\Model\FileOperationRequest(); // \Keap\Core\V2\Model\FileOperationRequest

try {
    $result = $apiInstance->detachFileFromOrder($order_id, $file_operation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->detachFileFromOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |
| **file_operation_request** | [**\Keap\Core\V2\Model\FileOperationRequest**](../Model/FileOperationRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\OrderV2**](../Model/OrderV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($order_id): \Keap\Core\V2\Model\OrderV2
```

Retrieve an Order

Retrieves a single Order for a given order id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->getOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\OrderV2**](../Model/OrderV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrderPayments()`

```php
listOrderPayments($order_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListOrderPaymentsResponse
```

Retrieve Order Payments

Retrieves a list of payments made against a given order, including historical or external payments of cash or credit card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `invoice_id` - (String) `payment_id` - (String) `amount` - (String) `pay_status` - (Boolean) `skip_commission`  You will need to apply the `==` operator to check the equality of one of the filters with your searched  word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=payment_id%3D%3D123` - `filter=pay_status%3D%3DAPPROVED` - `filter=invoice_id%3D%3D456%3Bskip_commission=true`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `invoice_id` - `payment_id` - `amount` - `pay_time` - `pay_status` - `skip_commission` - `last_updated_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listOrderPayments($order_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->listOrderPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;invoice_id&#x60; - (String) &#x60;payment_id&#x60; - (String) &#x60;amount&#x60; - (String) &#x60;pay_status&#x60; - (Boolean) &#x60;skip_commission&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched  word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;payment_id%3D%3D123&#x60; - &#x60;filter&#x3D;pay_status%3D%3DAPPROVED&#x60; - &#x60;filter&#x3D;invoice_id%3D%3D456%3Bskip_commission&#x3D;true&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;invoice_id&#x60; - &#x60;payment_id&#x60; - &#x60;amount&#x60; - &#x60;pay_time&#x60; - &#x60;pay_status&#x60; - &#x60;skip_commission&#x60; - &#x60;last_updated_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListOrderPaymentsResponse**](../Model/ListOrderPaymentsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrders()`

```php
listOrders($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListOrders
```

List orders

Retrieves a list of orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `product_id` - (String) `contact_id` - (String) `invoice_xid` - (Boolean) `paid` - (String) `created_since_time` - (String) `created_until_time` - (String) `title` - (String) `order_type` (Allowed values: `ONLINE`, `OFFLINE`) - (String) `shipping_locality` - (String) `shipping_region_code` - (String) `shipping_postal_code` - (String) `shipping_country_code`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=product_id%3D%3D123` - `filter=contact_id%3D%3D567` - `filter=invoice_xid%3D%3Df411a79c-9a92-4960-91d9-656f910a25e8` - `filter=product_id%3D%3D123%3Bcontact_id%3D%3D567` - `filter=title%3D%3DOrder` - `filter=order_type%3D%3DONLINE` - `filter=shipping_locality%3D%3DPhoenix` - `filter=shipping_region_code%3D%3DIN-MH` - `filter=shipping_postal_code%3D%3D85001` - `filter=shipping_country_code%3D%3DIND`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `id` - `order_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listOrders($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;product_id&#x60; - (String) &#x60;contact_id&#x60; - (String) &#x60;invoice_xid&#x60; - (Boolean) &#x60;paid&#x60; - (String) &#x60;created_since_time&#x60; - (String) &#x60;created_until_time&#x60; - (String) &#x60;title&#x60; - (String) &#x60;order_type&#x60; (Allowed values: &#x60;ONLINE&#x60;, &#x60;OFFLINE&#x60;) - (String) &#x60;shipping_locality&#x60; - (String) &#x60;shipping_region_code&#x60; - (String) &#x60;shipping_postal_code&#x60; - (String) &#x60;shipping_country_code&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;product_id%3D%3D123&#x60; - &#x60;filter&#x3D;contact_id%3D%3D567&#x60; - &#x60;filter&#x3D;invoice_xid%3D%3Df411a79c-9a92-4960-91d9-656f910a25e8&#x60; - &#x60;filter&#x3D;product_id%3D%3D123%3Bcontact_id%3D%3D567&#x60; - &#x60;filter&#x3D;title%3D%3DOrder&#x60; - &#x60;filter&#x3D;order_type%3D%3DONLINE&#x60; - &#x60;filter&#x3D;shipping_locality%3D%3DPhoenix&#x60; - &#x60;filter&#x3D;shipping_region_code%3D%3DIN-MH&#x60; - &#x60;filter&#x3D;shipping_postal_code%3D%3D85001&#x60; - &#x60;filter&#x3D;shipping_country_code%3D%3DIND&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;id&#x60; - &#x60;order_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListOrders**](../Model/ListOrders.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveOrderCustomFieldModel()`

```php
retrieveOrderCustomFieldModel(): \Keap\Core\V2\Model\ObjectModel
```

Retrieve Order Custom Field Model

Gets the custom fields for the Order object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveOrderCustomFieldModel();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->retrieveOrderCustomFieldModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\ObjectModel**](../Model/ObjectModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($order_id, $update_order_request, $update_mask): \Keap\Core\V2\Model\OrderV2
```

Update an Order

Updates an Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string
$update_order_request = new \Keap\Core\V2\Model\UpdateOrderRequest(); // \Keap\Core\V2\Model\UpdateOrderRequest
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateOrder($order_id, $update_order_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |
| **update_order_request** | [**\Keap\Core\V2\Model\UpdateOrderRequest**](../Model/UpdateOrderRequest.md)|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\OrderV2**](../Model/OrderV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderCustomField()`

```php
updateOrderCustomField($custom_field_id, $update_custom_field_meta_data_request, $update_mask): \Keap\Core\V2\Model\CustomFieldMetaData
```

Update an Order Custom Field

Updates a custom field of the specified type and options to the Order object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 'custom_field_id_example'; // string
$update_custom_field_meta_data_request = new \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateOrderCustomField($custom_field_id, $update_custom_field_meta_data_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrderCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**|  | |
| **update_custom_field_meta_data_request** | [**\Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest**](../Model/UpdateCustomFieldMetaDataRequest.md)|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\CustomFieldMetaData**](../Model/CustomFieldMetaData.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderItem()`

```php
updateOrderItem($order_id, $order_item_id, $update_order_item_request, $update_mask): \Keap\Core\V2\Model\OrderItem
```

Update an Order Item

Updates an Order Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string
$order_item_id = 'order_item_id_example'; // string
$update_order_item_request = new \Keap\Core\V2\Model\UpdateOrderItemRequest(); // \Keap\Core\V2\Model\UpdateOrderItemRequest
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateOrderItem($order_id, $order_item_id, $update_order_item_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |
| **order_item_id** | **string**|  | |
| **update_order_item_request** | [**\Keap\Core\V2\Model\UpdateOrderItemRequest**](../Model/UpdateOrderItemRequest.md)|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\OrderItem**](../Model/OrderItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
