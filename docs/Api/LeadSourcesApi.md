# Keap\Core\V2\LeadSourcesApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLeadSource()**](LeadSourcesApi.md#createLeadSource) | **POST** /rest/v2/leadSources | Create a Lead Source |
| [**deleteLeadSource()**](LeadSourcesApi.md#deleteLeadSource) | **DELETE** /rest/v2/leadSources/{lead_source_id} | Delete a Lead Source |
| [**getLeadSource()**](LeadSourcesApi.md#getLeadSource) | **GET** /rest/v2/leadSources/{lead_source_id} | Retrieve a Lead Source |
| [**listLeadSources()**](LeadSourcesApi.md#listLeadSources) | **GET** /rest/v2/leadSources | List Lead Sources |
| [**updateLeadSource()**](LeadSourcesApi.md#updateLeadSource) | **PATCH** /rest/v2/leadSources/{lead_source_id} | Update a Lead Source |


## `createLeadSource()`

```php
createLeadSource($create_lead_source_request): \Keap\Core\V2\Model\LeadSource
```

Create a Lead Source

Creates a new Lead Source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_lead_source_request = new \Keap\Core\V2\Model\CreateLeadSourceRequest(); // \Keap\Core\V2\Model\CreateLeadSourceRequest

try {
    $result = $apiInstance->createLeadSource($create_lead_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->createLeadSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_lead_source_request** | [**\Keap\Core\V2\Model\CreateLeadSourceRequest**](../Model/CreateLeadSourceRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\LeadSource**](../Model/LeadSource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLeadSource()`

```php
deleteLeadSource($lead_source_id)
```

Delete a Lead Source

Deletes a Lead Source by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of a lead source

try {
    $apiInstance->deleteLeadSource($lead_source_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->deleteLeadSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of a lead source | |

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

## `getLeadSource()`

```php
getLeadSource($lead_source_id): \Keap\Core\V2\Model\LeadSource
```

Retrieve a Lead Source

Retrieves a Lead Source by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of a lead source

try {
    $result = $apiInstance->getLeadSource($lead_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->getLeadSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of a lead source | |

### Return type

[**\Keap\Core\V2\Model\LeadSource**](../Model/LeadSource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLeadSources()`

```php
listLeadSources($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListLeadSourcesResponse
```

List Lead Sources

Retrieves a list of Lead Sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are:  - (String) `id` - Must be a positive integer. Allowable operators: \"==\", \"<=\", \"<\", \">=\", \">\", \"!=\". Values that are zero, negative, or non-integer return a 400. - (String) `name` - Wildcard matching allowed - (String) `status` - (String) `lead_source_category_id` - (String) `vendor` - Wildcard matching allowed - (String) `medium` - Wildcard matching allowed - (String) `message` - Wildcard matching allowed - (String) `description` - Wildcard matching allowed - (String) `start_time` - (String) `end_time`  You will need to apply the `==` operator (or another supported operator) to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples:  - `filter=name%3D%3Dexample` - `filter=name%3D%3DGoogle%2A` (name starts with \"Google\") - `filter=id%3E1000` (id > 1000) - `filter=id%3E%3D1000` (id >= 1000) - `filter=start_time%3D%3D2024-12-22T01:00:00.000Z`  For fields which allow wildcard matching, you may use the `*` wildcard character (or its encoded form `%2A`) for case-insensitive prefix matching on text fields. Example of a valid wildcard pattern:  - `field==foo*` finds anything in `field` that begins with `foo`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields:  - `name` - `status` - `vendor` - `medium` - `start_time` - `end_time` - `create_time` - `update_time`  One of the following directions:  - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listLeadSources($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->listLeadSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are:  - (String) &#x60;id&#x60; - Must be a positive integer. Allowable operators: \&quot;&#x3D;&#x3D;\&quot;, \&quot;&lt;&#x3D;\&quot;, \&quot;&lt;\&quot;, \&quot;&gt;&#x3D;\&quot;, \&quot;&gt;\&quot;, \&quot;!&#x3D;\&quot;. Values that are zero, negative, or non-integer return a 400. - (String) &#x60;name&#x60; - Wildcard matching allowed - (String) &#x60;status&#x60; - (String) &#x60;lead_source_category_id&#x60; - (String) &#x60;vendor&#x60; - Wildcard matching allowed - (String) &#x60;medium&#x60; - Wildcard matching allowed - (String) &#x60;message&#x60; - Wildcard matching allowed - (String) &#x60;description&#x60; - Wildcard matching allowed - (String) &#x60;start_time&#x60; - (String) &#x60;end_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator (or another supported operator) to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples:  - &#x60;filter&#x3D;name%3D%3Dexample&#x60; - &#x60;filter&#x3D;name%3D%3DGoogle%2A&#x60; (name starts with \&quot;Google\&quot;) - &#x60;filter&#x3D;id%3E1000&#x60; (id &gt; 1000) - &#x60;filter&#x3D;id%3E%3D1000&#x60; (id &gt;&#x3D; 1000) - &#x60;filter&#x3D;start_time%3D%3D2024-12-22T01:00:00.000Z&#x60;  For fields which allow wildcard matching, you may use the &#x60;*&#x60; wildcard character (or its encoded form &#x60;%2A&#x60;) for case-insensitive prefix matching on text fields. Example of a valid wildcard pattern:  - &#x60;field&#x3D;&#x3D;foo*&#x60; finds anything in &#x60;field&#x60; that begins with &#x60;foo&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields:  - &#x60;name&#x60; - &#x60;status&#x60; - &#x60;vendor&#x60; - &#x60;medium&#x60; - &#x60;start_time&#x60; - &#x60;end_time&#x60; - &#x60;create_time&#x60; - &#x60;update_time&#x60;  One of the following directions:  - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListLeadSourcesResponse**](../Model/ListLeadSourcesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLeadSource()`

```php
updateLeadSource($lead_source_id, $create_lead_source_request, $update_mask): \Keap\Core\V2\Model\LeadSource
```

Update a Lead Source

Updates a Lead Source with only the values provided in the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_source_id = 'lead_source_id_example'; // string | The ID of a lead source
$create_lead_source_request = new \Keap\Core\V2\Model\CreateLeadSourceRequest(); // \Keap\Core\V2\Model\CreateLeadSourceRequest
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateLeadSource($lead_source_id, $create_lead_source_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->updateLeadSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_source_id** | **string**| The ID of a lead source | |
| **create_lead_source_request** | [**\Keap\Core\V2\Model\CreateLeadSourceRequest**](../Model/CreateLeadSourceRequest.md)|  | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\LeadSource**](../Model/LeadSource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
