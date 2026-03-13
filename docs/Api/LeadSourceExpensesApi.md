# Keap\Core\V2\LeadSourceExpensesApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLeadSourceExpense()**](LeadSourceExpensesApi.md#createLeadSourceExpense) | **POST** /v2/leadSources/{lead_source_id}/expenses | Create a Lead Source Expense |
| [**deleteLeadSourceExpense()**](LeadSourceExpensesApi.md#deleteLeadSourceExpense) | **DELETE** /v2/leadSources/{lead_source_id}/expenses/{lead_source_expense_id} | Delete a lead source expense |
| [**getLeadSourceExpense()**](LeadSourceExpensesApi.md#getLeadSourceExpense) | **GET** /v2/leadSources/{lead_source_id}/expenses/{lead_source_expense_id} | Retrieve a Lead Source Expense |
| [**listLeadSourceExpenses()**](LeadSourceExpensesApi.md#listLeadSourceExpenses) | **GET** /v2/leadSources/{lead_source_id}/expenses | List Lead Source Expenses |
| [**updateLeadSourceExpense()**](LeadSourceExpensesApi.md#updateLeadSourceExpense) | **PATCH** /v2/leadSources/{lead_source_id}/expenses/{lead_source_expense_id} | Update a Lead Source Expense |


## `createLeadSourceExpense()`

```php
createLeadSourceExpense($lead_source_id, $create_lead_source_expense_request): \Keap\Core\V2\Model\LeadSourceExpense
```

Create a Lead Source Expense

Creates a new Lead Source Expense

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of the lead source this expense belongs to
$create_lead_source_expense_request = new \Keap\Core\V2\Model\CreateLeadSourceExpenseRequest(); // \Keap\Core\V2\Model\CreateLeadSourceExpenseRequest | The request object to create a new lead source expense

try {
    $result = $apiInstance->createLeadSourceExpense($lead_source_id, $create_lead_source_expense_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceExpensesApi->createLeadSourceExpense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of the lead source this expense belongs to | |
| **create_lead_source_expense_request** | [**\Keap\Core\V2\Model\CreateLeadSourceExpenseRequest**](../Model/CreateLeadSourceExpenseRequest.md)| The request object to create a new lead source expense | |

### Return type

[**\Keap\Core\V2\Model\LeadSourceExpense**](../Model/LeadSourceExpense.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLeadSourceExpense()`

```php
deleteLeadSourceExpense($lead_source_expense_id, $lead_source_id)
```

Delete a lead source expense

Deletes a lead source expense by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_expense_id = 'lead_source_expense_id_example'; // string | The ID of a lead source expense
$lead_source_id = 'lead_source_id_example'; // string | The ID of the lead source this expense belongs to

try {
    $apiInstance->deleteLeadSourceExpense($lead_source_expense_id, $lead_source_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceExpensesApi->deleteLeadSourceExpense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_expense_id** | **string**| The ID of a lead source expense | |
| **lead_source_id** | **string**| The ID of the lead source this expense belongs to | |

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

## `getLeadSourceExpense()`

```php
getLeadSourceExpense($lead_source_expense_id, $lead_source_id): \Keap\Core\V2\Model\LeadSourceExpense
```

Retrieve a Lead Source Expense

Retrieves a single Lead Source Expense for a given ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_expense_id = 'lead_source_expense_id_example'; // string | The ID of a lead source expense
$lead_source_id = 'lead_source_id_example'; // string | The ID of the lead source this expense belongs to

try {
    $result = $apiInstance->getLeadSourceExpense($lead_source_expense_id, $lead_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceExpensesApi->getLeadSourceExpense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_expense_id** | **string**| The ID of a lead source expense | |
| **lead_source_id** | **string**| The ID of the lead source this expense belongs to | |

### Return type

[**\Keap\Core\V2\Model\LeadSourceExpense**](../Model/LeadSourceExpense.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLeadSourceExpenses()`

```php
listLeadSourceExpenses($lead_source_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListLeadSourceExpensesResponse
```

List Lead Source Expenses

Retrieves a list of lead source expenses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of the lead source this expense belongs to
$filter = 'filter_example'; // string | Filter to apply, allowed fields are:  - (String) `title` - (Long) `amount` - (String) `incurred_time` - (String) `create_time` - (String) `update_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples:  - `filter=amount%3D%3D2500` - `filter=incurred_time%3D%3D2024-12-22T01:00:00.000Z`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields:  - `title` - `amount` - `incurred_time` - `create_time` - `update_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listLeadSourceExpenses($lead_source_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceExpensesApi->listLeadSourceExpenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of the lead source this expense belongs to | |
| **filter** | **string**| Filter to apply, allowed fields are:  - (String) &#x60;title&#x60; - (Long) &#x60;amount&#x60; - (String) &#x60;incurred_time&#x60; - (String) &#x60;create_time&#x60; - (String) &#x60;update_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples:  - &#x60;filter&#x3D;amount%3D%3D2500&#x60; - &#x60;filter&#x3D;incurred_time%3D%3D2024-12-22T01:00:00.000Z&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields:  - &#x60;title&#x60; - &#x60;amount&#x60; - &#x60;incurred_time&#x60; - &#x60;create_time&#x60; - &#x60;update_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListLeadSourceExpensesResponse**](../Model/ListLeadSourceExpensesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLeadSourceExpense()`

```php
updateLeadSourceExpense($lead_source_expense_id, $lead_source_id, $update_lead_source_expense_request, $update_mask): \Keap\Core\V2\Model\LeadSourceExpense
```

Update a Lead Source Expense

Updates a new Lead Source Expense

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_expense_id = 'lead_source_expense_id_example'; // string | The ID of a lead source expense
$lead_source_id = 'lead_source_id_example'; // string | The ID of the lead source this expense belongs to
$update_lead_source_expense_request = new \Keap\Core\V2\Model\UpdateLeadSourceExpenseRequest(); // \Keap\Core\V2\Model\UpdateLeadSourceExpenseRequest | The request object to update a lead source expense
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateLeadSourceExpense($lead_source_expense_id, $lead_source_id, $update_lead_source_expense_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceExpensesApi->updateLeadSourceExpense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_expense_id** | **string**| The ID of a lead source expense | |
| **lead_source_id** | **string**| The ID of the lead source this expense belongs to | |
| **update_lead_source_expense_request** | [**\Keap\Core\V2\Model\UpdateLeadSourceExpenseRequest**](../Model/UpdateLeadSourceExpenseRequest.md)| The request object to update a lead source expense | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\LeadSourceExpense**](../Model/LeadSourceExpense.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
