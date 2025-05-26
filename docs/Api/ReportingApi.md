# Keap\Core\V2\ReportingApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listReportsUsingGET()**](ReportingApi.md#listReportsUsingGET) | **GET** /v2/reporting/reports | List Reports |
| [**retrieveReportUsingGET()**](ReportingApi.md#retrieveReportUsingGET) | **GET** /v2/reporting/reports/{report_id} | Retrieve Report |
| [**runReportUsingPOST()**](ReportingApi.md#runReportUsingPOST) | **POST** /v2/reporting/reports/{report_id}:run | Run a Report |


## `listReportsUsingGET()`

```php
listReportsUsingGET($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListReportsResponse
```

List Reports

Retrieves a list of Reports as defined in the application (identified as Saved Search)<br/><span style='color:red'>Deprecated as of v2</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name` - (DateTime) `since_created_time` - (DateTime) `until_created_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched  word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=given_name%3D%3DMary` - `filter=company_id%3D%3D123` - `filter=company_id%3D%3D123%3Bfamily_name%3D%3DSmith`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name` - `created_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listReportsUsingGET($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->listReportsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;name&#x60; - (DateTime) &#x60;since_created_time&#x60; - (DateTime) &#x60;until_created_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched  word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;given_name%3D%3DMary&#x60; - &#x60;filter&#x3D;company_id%3D%3D123&#x60; - &#x60;filter&#x3D;company_id%3D%3D123%3Bfamily_name%3D%3DSmith&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;name&#x60; - &#x60;created_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListReportsResponse**](../Model/ListReportsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveReportUsingGET()`

```php
retrieveReportUsingGET($report_id): \Keap\Core\V2\Model\Report
```

Retrieve Report

Retrieves information about a Report as defined in the application (identified as Saved Search)<br/><span style='color:red'>Deprecated as of v2</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_id = 'report_id_example'; // string | report_id

try {
    $result = $apiInstance->retrieveReportUsingGET($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->retrieveReportUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| report_id | |

### Return type

[**\Keap\Core\V2\Model\Report**](../Model/Report.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runReportUsingPOST()`

```php
runReportUsingPOST($report_id, $fields, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ReportExecutionResult
```

Run a Report

Runs a report as defined in the application (identified as Saved Search)<br/><span style='color:red'>Deprecated as of v2</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_id = 'report_id_example'; // string | The unique identifier of the report (Saved Search) to execute
$fields = 'fields_example'; // string | Comma-separated list of fields to return (or do not supply a value to return all)
$order_by = 'order_by_example'; // string | Attribute and direction to order items by. E.g. `given_name desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Representation of the last row retrieved from the previous page. An empty value implies a request for the first page.

try {
    $result = $apiInstance->runReportUsingPOST($report_id, $fields, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->runReportUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| The unique identifier of the report (Saved Search) to execute | |
| **fields** | **string**| Comma-separated list of fields to return (or do not supply a value to return all) | [optional] |
| **order_by** | **string**| Attribute and direction to order items by. E.g. &#x60;given_name desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] [default to 1000] |
| **page_token** | **string**| Representation of the last row retrieved from the previous page. An empty value implies a request for the first page. | [optional] |

### Return type

[**\Keap\Core\V2\Model\ReportExecutionResult**](../Model/ReportExecutionResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
