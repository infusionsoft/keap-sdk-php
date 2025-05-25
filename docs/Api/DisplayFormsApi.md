# Keap\Core\V2\DisplayFormsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDisplayForm()**](DisplayFormsApi.md#getDisplayForm) | **GET** /v2/pipelines/{pipeline_id}/form | Retrieves a specific display form by a pipeline ID. |
| [**updateDisplayForm()**](DisplayFormsApi.md#updateDisplayForm) | **PATCH** /v2/pipelines/{pipeline_id}/form | Updates a display form |


## `getDisplayForm()`

```php
getDisplayForm($pipeline_id): \Keap\Core\V2\Model\DisplayForm
```

Retrieves a specific display form by a pipeline ID.

Retrieves a specific display form by a pipeline ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DisplayFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pipeline_id = 'pipeline_id_example'; // string | the ID of the pipeline containing the form

try {
    $result = $apiInstance->getDisplayForm($pipeline_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisplayFormsApi->getDisplayForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pipeline_id** | **string**| the ID of the pipeline containing the form | |

### Return type

[**\Keap\Core\V2\Model\DisplayForm**](../Model/DisplayForm.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDisplayForm()`

```php
updateDisplayForm($pipeline_id, $update_display_form_request): \Keap\Core\V2\Model\DisplayForm
```

Updates a display form

Updates a display form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DisplayFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pipeline_id = 'pipeline_id_example'; // string | the ID of the pipeline containing the form
$update_display_form_request = new \Keap\Core\V2\Model\UpdateDisplayFormRequest(); // \Keap\Core\V2\Model\UpdateDisplayFormRequest | the request body containing updated display form details

try {
    $result = $apiInstance->updateDisplayForm($pipeline_id, $update_display_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisplayFormsApi->updateDisplayForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pipeline_id** | **string**| the ID of the pipeline containing the form | |
| **update_display_form_request** | [**\Keap\Core\V2\Model\UpdateDisplayFormRequest**](../Model/UpdateDisplayFormRequest.md)| the request body containing updated display form details | |

### Return type

[**\Keap\Core\V2\Model\DisplayForm**](../Model/DisplayForm.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
