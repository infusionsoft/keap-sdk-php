# Keap\Core\V2\ReportingApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listReports()**](ReportingApi.md#listReports) | **GET** /rest/v2/reporting/reports | List Reports |
| [**retrieveReport()**](ReportingApi.md#retrieveReport) | **GET** /rest/v2/reporting/reports/{report_id} | Retrieve Report |
| [**runReport()**](ReportingApi.md#runReport) | **POST** /rest/v2/reporting/reports/{report_id}:run | Run a Report |


## `listReports()`

```php
listReports($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListReportsResponse
```

List Reports

Retrieves a list of Reports as defined in the application (identified as Saved Search)<br/><span style='color:red'>Deprecated as of v2</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = name%3D%3DMonthly%20Sales; // string | Filter to apply, allowed fields are: - (String) `name` - (DateTime) `since_created_time` - (DateTime) `until_created_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched  word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=name%3D%3DMonthly%20Sales` - `filter=since_created_time%3D%3D2024-01-01`
$order_by = name asc; // string | Attribute and direction to order items. One of the following fields: - `name` - `created_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listReports($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->listReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;name&#x60; - (DateTime) &#x60;since_created_time&#x60; - (DateTime) &#x60;until_created_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched  word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;name%3D%3DMonthly%20Sales&#x60; - &#x60;filter&#x3D;since_created_time%3D%3D2024-01-01&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;name&#x60; - &#x60;created_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListReportsResponse**](../Model/ListReportsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveReport()`

```php
retrieveReport($report_id): \Keap\Core\V2\Model\Report
```

Retrieve Report

Retrieves information about a Report as defined in the application (identified as Saved Search)<br/><span style='color:red'>Deprecated as of v2</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 123; // string | The unique identifier of the report (Saved Search)

try {
    $result = $apiInstance->retrieveReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->retrieveReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| The unique identifier of the report (Saved Search) | |

### Return type

[**\Keap\Core\V2\Model\Report**](../Model/Report.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runReport()`

```php
runReport($report_id, $run_report_request): \Keap\Core\V2\Model\ReportExecutionResult
```

Run a Report

Runs a report as defined in the application (identified as Saved Search)<br/><span style='color:red'>Deprecated as of v2</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 123; // string | The unique identifier of the report (Saved Search) to execute
$run_report_request = new \Keap\Core\V2\Model\\Keap\Core\V2\Model\RunReportRequest(); // \Keap\Core\V2\Model\RunReportRequest

try {
    $result = $apiInstance->runReport($report_id, $run_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->runReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| The unique identifier of the report (Saved Search) to execute | |
| **run_report_request** | [**\Keap\Core\V2\Model\RunReportRequest**](../Model/.md)|  | |

### Return type

[**\Keap\Core\V2\Model\ReportExecutionResult**](../Model/ReportExecutionResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
