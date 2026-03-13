# Keap\Core\V2\AutomationCategoryApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCategory()**](AutomationCategoryApi.md#createCategory) | **POST** /v2/automationCategory | Create automation category |
| [**deleteCategories()**](AutomationCategoryApi.md#deleteCategories) | **DELETE** /v2/automationCategory | Delete automation category |
| [**listCategories()**](AutomationCategoryApi.md#listCategories) | **GET** /v2/automationCategory | List automation categories |
| [**patchCategory()**](AutomationCategoryApi.md#patchCategory) | **PATCH** /v2/automationCategory/{id} | Update automation category |


## `createCategory()`

```php
createCategory($create_automation_category_request): \Keap\Core\V2\Model\AutomationCategory
```

Create automation category

Creates a single automation category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AutomationCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_automation_category_request = new \Keap\Core\V2\Model\CreateAutomationCategoryRequest(); // \Keap\Core\V2\Model\CreateAutomationCategoryRequest | createAutomationCategoryRequest

try {
    $result = $apiInstance->createCategory($create_automation_category_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationCategoryApi->createCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_automation_category_request** | [**\Keap\Core\V2\Model\CreateAutomationCategoryRequest**](../Model/CreateAutomationCategoryRequest.md)| createAutomationCategoryRequest | |

### Return type

[**\Keap\Core\V2\Model\AutomationCategory**](../Model/AutomationCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCategories()`

```php
deleteCategories($ids)
```

Delete automation category

Deletes one or more automation categories based on the request parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AutomationCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array(56); // int[] | ids

try {
    $apiInstance->deleteCategories($ids);
} catch (Exception $e) {
    echo 'Exception when calling AutomationCategoryApi->deleteCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**int[]**](../Model/int.md)| ids | |

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

## `listCategories()`

```php
listCategories(): \Keap\Core\V2\Model\ListAutomationCategoryResponse
```

List automation categories

Retrieves a list of automation categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AutomationCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationCategoryApi->listCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\ListAutomationCategoryResponse**](../Model/ListAutomationCategoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCategory()`

```php
patchCategory($id, $patch_automation_category_request): \Keap\Core\V2\Model\AutomationCategory
```

Update automation category

Updates part of a single automation category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\AutomationCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id
$patch_automation_category_request = new \Keap\Core\V2\Model\PatchAutomationCategoryRequest(); // \Keap\Core\V2\Model\PatchAutomationCategoryRequest | patchAutomationCategoryRequest

try {
    $result = $apiInstance->patchCategory($id, $patch_automation_category_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationCategoryApi->patchCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |
| **patch_automation_category_request** | [**\Keap\Core\V2\Model\PatchAutomationCategoryRequest**](../Model/PatchAutomationCategoryRequest.md)| patchAutomationCategoryRequest | |

### Return type

[**\Keap\Core\V2\Model\AutomationCategory**](../Model/AutomationCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
