# Keap\Core\V2\PipelinesApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**callList()**](PipelinesApi.md#callList) | **GET** /v2/pipelines | Lists entities based on the provided ListCommand. |
| [**create()**](PipelinesApi.md#create) | **POST** /v2/pipelines | Creates a new entity. |
| [**delete()**](PipelinesApi.md#delete) | **DELETE** /v2/pipelines/{id} | Deletes a pipeline. |
| [**get()**](PipelinesApi.md#get) | **GET** /v2/pipelines/{id} | Retrieves an entity by its identifier. |
| [**getDealCount()**](PipelinesApi.md#getDealCount) | **GET** /v2/pipelines/{id}:dealsCount | Retrieves the count of deals for a specific pipeline. |
| [**getOutcomeLabels()**](PipelinesApi.md#getOutcomeLabels) | **GET** /v2/pipelines/{id}/outcomes | Gets the outcome labels for a pipeline. |
| [**listStages()**](PipelinesApi.md#listStages) | **GET** /v2/pipelines/{id}/stages | Retrieves a list of stages for a specific pipeline. |
| [**listSummaries()**](PipelinesApi.md#listSummaries) | **GET** /v2/pipelines/summaries | Retrieves a list of pipeline summaries. |
| [**setOutcomeLabels()**](PipelinesApi.md#setOutcomeLabels) | **PATCH** /v2/pipelines/{id}/outcomes | Sets the outcome labels for a pipeline. |
| [**update()**](PipelinesApi.md#update) | **PATCH** /v2/pipelines/{id} | Updates an existing entity. |


## `callList()`

```php
callList($filter, $page_token, $order_by, $page_size): \Keap\Core\V2\Model\PipelineListResponse
```

Lists entities based on the provided ListCommand.

Lists entities based on the provided ListCommand.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string
$page_token = 'page_token_example'; // string
$order_by = 'order_by_example'; // string
$page_size = 100; // int

try {
    $result = $apiInstance->callList($filter, $page_token, $order_by, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->callList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **page_token** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 1000] |

### Return type

[**\Keap\Core\V2\Model\PipelineListResponse**](../Model/PipelineListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `create()`

```php
create($create_pipeline_request): \Keap\Core\V2\Model\Pipeline
```

Creates a new entity.

Creates a new entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_pipeline_request = new \Keap\Core\V2\Model\CreatePipelineRequest(); // \Keap\Core\V2\Model\CreatePipelineRequest | the create request

try {
    $result = $apiInstance->create($create_pipeline_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_pipeline_request** | [**\Keap\Core\V2\Model\CreatePipelineRequest**](../Model/CreatePipelineRequest.md)| the create request | |

### Return type

[**\Keap\Core\V2\Model\Pipeline**](../Model/Pipeline.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($id, $allow_cleanup, $new_stage_id)
```

Deletes a pipeline.

Deletes a pipeline.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | the pipeline identifier
$allow_cleanup = True; // bool | flag indicating whether cleanup is allowed, can be null
$new_stage_id = 'new_stage_id_example'; // string | the new stage identifier, can be null

try {
    $apiInstance->delete($id, $allow_cleanup, $new_stage_id);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| the pipeline identifier | |
| **allow_cleanup** | **bool**| flag indicating whether cleanup is allowed, can be null | [optional] |
| **new_stage_id** | **string**| the new stage identifier, can be null | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `get()`

```php
get($id): \Keap\Core\V2\Model\Pipeline
```

Retrieves an entity by its identifier.

Retrieves an entity by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | the entity identifier

try {
    $result = $apiInstance->get($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| the entity identifier | |

### Return type

[**\Keap\Core\V2\Model\Pipeline**](../Model/Pipeline.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDealCount()`

```php
getDealCount($id, $filter, $page_token, $order_by, $page_size): int
```

Retrieves the count of deals for a specific pipeline.

Retrieves the count of deals for a specific pipeline.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | the pipeline identifier
$filter = 'filter_example'; // string
$page_token = 'page_token_example'; // string
$order_by = 'order_by_example'; // string
$page_size = 100; // int

try {
    $result = $apiInstance->getDealCount($id, $filter, $page_token, $order_by, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->getDealCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| the pipeline identifier | |
| **filter** | **string**|  | [optional] |
| **page_token** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 1000] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutcomeLabels()`

```php
getOutcomeLabels($id, $filter, $page_token, $order_by, $page_size): \Keap\Core\V2\Model\PipelineOutcomeLabelListResponse
```

Gets the outcome labels for a pipeline.

Gets the outcome labels for a pipeline.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | the pipeline identifier
$filter = 'filter_example'; // string
$page_token = 'page_token_example'; // string
$order_by = 'order_by_example'; // string
$page_size = 100; // int

try {
    $result = $apiInstance->getOutcomeLabels($id, $filter, $page_token, $order_by, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->getOutcomeLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| the pipeline identifier | |
| **filter** | **string**|  | [optional] |
| **page_token** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 1000] |

### Return type

[**\Keap\Core\V2\Model\PipelineOutcomeLabelListResponse**](../Model/PipelineOutcomeLabelListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStages()`

```php
listStages($id, $filter, $page_token, $order_by, $page_size): \Keap\Core\V2\Model\PipelineStageListResponse
```

Retrieves a list of stages for a specific pipeline.

Retrieves a list of stages for a specific pipeline.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | the pipeline identifier
$filter = 'filter_example'; // string
$page_token = 'page_token_example'; // string
$order_by = 'order_by_example'; // string
$page_size = 100; // int

try {
    $result = $apiInstance->listStages($id, $filter, $page_token, $order_by, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->listStages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| the pipeline identifier | |
| **filter** | **string**|  | [optional] |
| **page_token** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 1000] |

### Return type

[**\Keap\Core\V2\Model\PipelineStageListResponse**](../Model/PipelineStageListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSummaries()`

```php
listSummaries($filter, $page_token, $order_by, $page_size): \Keap\Core\V2\Model\PipelineSummariesListResponse
```

Retrieves a list of pipeline summaries.

Retrieves a list of pipeline summaries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string
$page_token = 'page_token_example'; // string
$order_by = 'order_by_example'; // string
$page_size = 100; // int

try {
    $result = $apiInstance->listSummaries($filter, $page_token, $order_by, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->listSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **page_token** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 1000] |

### Return type

[**\Keap\Core\V2\Model\PipelineSummariesListResponse**](../Model/PipelineSummariesListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setOutcomeLabels()`

```php
setOutcomeLabels($id, $update_outcome_labels_request): \Keap\Core\V2\Model\PipelineOutcomeLabelListResponse
```

Sets the outcome labels for a pipeline.

Sets the outcome labels for a pipeline.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | the pipeline identifier
$update_outcome_labels_request = new \Keap\Core\V2\Model\UpdateOutcomeLabelsRequest(); // \Keap\Core\V2\Model\UpdateOutcomeLabelsRequest | the request containing the new outcome labels

try {
    $result = $apiInstance->setOutcomeLabels($id, $update_outcome_labels_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->setOutcomeLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| the pipeline identifier | |
| **update_outcome_labels_request** | [**\Keap\Core\V2\Model\UpdateOutcomeLabelsRequest**](../Model/UpdateOutcomeLabelsRequest.md)| the request containing the new outcome labels | |

### Return type

[**\Keap\Core\V2\Model\PipelineOutcomeLabelListResponse**](../Model/PipelineOutcomeLabelListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `update()`

```php
update($id, $update_mask, $update_pipeline_request): \Keap\Core\V2\Model\Pipeline
```

Updates an existing entity.

Updates an existing entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | the entity identifier
$update_mask = array('update_mask_example'); // string[] | the fields to update
$update_pipeline_request = new \Keap\Core\V2\Model\UpdatePipelineRequest(); // \Keap\Core\V2\Model\UpdatePipelineRequest | the update request

try {
    $result = $apiInstance->update($id, $update_mask, $update_pipeline_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->update: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| the entity identifier | |
| **update_mask** | [**string[]**](../Model/string.md)| the fields to update | |
| **update_pipeline_request** | [**\Keap\Core\V2\Model\UpdatePipelineRequest**](../Model/UpdatePipelineRequest.md)| the update request | |

### Return type

[**\Keap\Core\V2\Model\Pipeline**](../Model/Pipeline.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
