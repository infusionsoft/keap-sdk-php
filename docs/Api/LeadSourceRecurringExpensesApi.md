# Keap\Core\V2\LeadSourceRecurringExpensesApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLeadSourceRecurringExpenseUsingPOST()**](LeadSourceRecurringExpensesApi.md#createLeadSourceRecurringExpenseUsingPOST) | **POST** /v2/leadSources/{lead_source_id}/recurringExpenses | Create a Lead Source Recurring Expense |
| [**deleteLeadSourceRecurringExpenseUsingDELETE()**](LeadSourceRecurringExpensesApi.md#deleteLeadSourceRecurringExpenseUsingDELETE) | **DELETE** /v2/leadSources/{lead_source_id}/recurringExpenses/{lead_source_recurring_expense_id} | Delete a Lead Source Recurring Expense |
| [**getLeadSourceRecurringExpenseUsingGET()**](LeadSourceRecurringExpensesApi.md#getLeadSourceRecurringExpenseUsingGET) | **GET** /v2/leadSources/{lead_source_id}/recurringExpenses/{lead_source_recurring_expense_id} | Retrieve a Lead Source Recurring Expense |
| [**listExpensesIncurredFromLeadSourceRecurringExpenseUsingGET()**](LeadSourceRecurringExpensesApi.md#listExpensesIncurredFromLeadSourceRecurringExpenseUsingGET) | **GET** /v2/leadSources/{lead_source_id}/recurringExpenses/{lead_source_recurring_expense_id}/expenses | Retrieves a list of expenses incurred from a recurring expense |
| [**listLeadSourceRecurringExpensesUsingGET()**](LeadSourceRecurringExpensesApi.md#listLeadSourceRecurringExpensesUsingGET) | **GET** /v2/leadSources/{lead_source_id}/recurringExpenses | Retrieves a list of lead source recurring expenses |
| [**updateLeadSourceRecurringExpenseUsingPATCH()**](LeadSourceRecurringExpensesApi.md#updateLeadSourceRecurringExpenseUsingPATCH) | **PATCH** /v2/leadSources/{lead_source_id}/recurringExpenses/{lead_source_recurring_expense_id} | Update a Lead Source Recurring Expense |


## `createLeadSourceRecurringExpenseUsingPOST()`

```php
createLeadSourceRecurringExpenseUsingPOST($lead_source_id, $create_lead_source_recurring_expense_request): \Keap\Core\V2\Model\LeadSourceRecurringExpense
```

Create a Lead Source Recurring Expense

Creates a new Lead Source Recurring Expense

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceRecurringExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of the lead source this recurring expense belongs to
$create_lead_source_recurring_expense_request = new \Keap\Core\V2\Model\CreateLeadSourceRecurringExpenseRequest(); // \Keap\Core\V2\Model\CreateLeadSourceRecurringExpenseRequest | The request object to create a new lead source recurring expense

try {
    $result = $apiInstance->createLeadSourceRecurringExpenseUsingPOST($lead_source_id, $create_lead_source_recurring_expense_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceRecurringExpensesApi->createLeadSourceRecurringExpenseUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of the lead source this recurring expense belongs to | |
| **create_lead_source_recurring_expense_request** | [**\Keap\Core\V2\Model\CreateLeadSourceRecurringExpenseRequest**](../Model/CreateLeadSourceRecurringExpenseRequest.md)| The request object to create a new lead source recurring expense | |

### Return type

[**\Keap\Core\V2\Model\LeadSourceRecurringExpense**](../Model/LeadSourceRecurringExpense.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLeadSourceRecurringExpenseUsingDELETE()`

```php
deleteLeadSourceRecurringExpenseUsingDELETE($lead_source_id, $lead_source_recurring_expense_id)
```

Delete a Lead Source Recurring Expense

Deletes a new Lead Source Recurring Expense that belongs to a Lead Source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceRecurringExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of the lead source this recurring expense belongs to
$lead_source_recurring_expense_id = 'lead_source_recurring_expense_id_example'; // string | The ID of a lead source recurring expense

try {
    $apiInstance->deleteLeadSourceRecurringExpenseUsingDELETE($lead_source_id, $lead_source_recurring_expense_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceRecurringExpensesApi->deleteLeadSourceRecurringExpenseUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of the lead source this recurring expense belongs to | |
| **lead_source_recurring_expense_id** | **string**| The ID of a lead source recurring expense | |

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

## `getLeadSourceRecurringExpenseUsingGET()`

```php
getLeadSourceRecurringExpenseUsingGET($lead_source_id, $lead_source_recurring_expense_id): \Keap\Core\V2\Model\LeadSourceRecurringExpense
```

Retrieve a Lead Source Recurring Expense

Retrieves a Lead Source Recurring Expense using leadSourceId and leadSourceRecurringExpenseId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceRecurringExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of the lead source this recurring expense belongs to
$lead_source_recurring_expense_id = 'lead_source_recurring_expense_id_example'; // string | The ID of a lead source recurring expense

try {
    $result = $apiInstance->getLeadSourceRecurringExpenseUsingGET($lead_source_id, $lead_source_recurring_expense_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceRecurringExpensesApi->getLeadSourceRecurringExpenseUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of the lead source this recurring expense belongs to | |
| **lead_source_recurring_expense_id** | **string**| The ID of a lead source recurring expense | |

### Return type

[**\Keap\Core\V2\Model\LeadSourceRecurringExpense**](../Model/LeadSourceRecurringExpense.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listExpensesIncurredFromLeadSourceRecurringExpenseUsingGET()`

```php
listExpensesIncurredFromLeadSourceRecurringExpenseUsingGET($lead_source_id, $lead_source_recurring_expense_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListLeadSourceExpensesResponse
```

Retrieves a list of expenses incurred from a recurring expense

Retrieves a list of expenses incurred from a recurring expense

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceRecurringExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of the lead source this recurring expense belongs to
$lead_source_recurring_expense_id = 'lead_source_recurring_expense_id_example'; // string | The ID of a lead source recurring expense
$filter = 'filter_example'; // string | Filter to apply, allowed fields are:  - (String) `title` - (Long) `amount` - (String) `incurred_time` - (String) `create_time` - (String) `update_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples:  - `filter=amount%3D%3D2500` - `filter=incurred_time%3D%3D2024-12-22T01:00:00.000Z`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields:  - `title` - `amount` - `incurred_time` - `create_time` - `update_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listExpensesIncurredFromLeadSourceRecurringExpenseUsingGET($lead_source_id, $lead_source_recurring_expense_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceRecurringExpensesApi->listExpensesIncurredFromLeadSourceRecurringExpenseUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of the lead source this recurring expense belongs to | |
| **lead_source_recurring_expense_id** | **string**| The ID of a lead source recurring expense | |
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

## `listLeadSourceRecurringExpensesUsingGET()`

```php
listLeadSourceRecurringExpensesUsingGET($lead_source_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListLeadSourceRecurringExpensesResponse
```

Retrieves a list of lead source recurring expenses

Retrieves a list of recurring expenses with lead_source_id and optional 'filter' query param

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceRecurringExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of the lead source this recurring expense belongs to
$filter = 'filter_example'; // string | Filter to apply, allowed fields are:  - (String) `title` - (Long) `amount` - (String) `start_time` - (String) `end_time` - (String) `next_expense_time` - (String) `create_time` - (String) `update_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples:  - `filter=amount%3D%3D2500` - `filter=next_expense_time%3D%3D2024-12-22T01:00:00.000Z`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `title` - `amount` - `start_time` - `end_time` - `next_expense_time` - `create_time` - `update_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listLeadSourceRecurringExpensesUsingGET($lead_source_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceRecurringExpensesApi->listLeadSourceRecurringExpensesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of the lead source this recurring expense belongs to | |
| **filter** | **string**| Filter to apply, allowed fields are:  - (String) &#x60;title&#x60; - (Long) &#x60;amount&#x60; - (String) &#x60;start_time&#x60; - (String) &#x60;end_time&#x60; - (String) &#x60;next_expense_time&#x60; - (String) &#x60;create_time&#x60; - (String) &#x60;update_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples:  - &#x60;filter&#x3D;amount%3D%3D2500&#x60; - &#x60;filter&#x3D;next_expense_time%3D%3D2024-12-22T01:00:00.000Z&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;title&#x60; - &#x60;amount&#x60; - &#x60;start_time&#x60; - &#x60;end_time&#x60; - &#x60;next_expense_time&#x60; - &#x60;create_time&#x60; - &#x60;update_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListLeadSourceRecurringExpensesResponse**](../Model/ListLeadSourceRecurringExpensesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLeadSourceRecurringExpenseUsingPATCH()`

```php
updateLeadSourceRecurringExpenseUsingPATCH($lead_source_id, $lead_source_recurring_expense_id, $lead_source_recurring_expense_update_request, $update_mask): \Keap\Core\V2\Model\LeadSourceRecurringExpense
```

Update a Lead Source Recurring Expense

Updates a Lead Source Recurring Expense

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LeadSourceRecurringExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of the lead source this recurring expense belongs to
$lead_source_recurring_expense_id = 'lead_source_recurring_expense_id_example'; // string | The ID of a lead source recurring expense
$lead_source_recurring_expense_update_request = new \Keap\Core\V2\Model\LeadSourceRecurringExpenseUpdateRequest(); // \Keap\Core\V2\Model\LeadSourceRecurringExpenseUpdateRequest | The request object to update a lead source recurring expense
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateLeadSourceRecurringExpenseUsingPATCH($lead_source_id, $lead_source_recurring_expense_id, $lead_source_recurring_expense_update_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourceRecurringExpensesApi->updateLeadSourceRecurringExpenseUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of the lead source this recurring expense belongs to | |
| **lead_source_recurring_expense_id** | **string**| The ID of a lead source recurring expense | |
| **lead_source_recurring_expense_update_request** | [**\Keap\Core\V2\Model\LeadSourceRecurringExpenseUpdateRequest**](../Model/LeadSourceRecurringExpenseUpdateRequest.md)| The request object to update a lead source recurring expense | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\LeadSourceRecurringExpense**](../Model/LeadSourceRecurringExpense.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
