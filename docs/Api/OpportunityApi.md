# Keap\Core\V2\OpportunityApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOpportunity()**](OpportunityApi.md#createOpportunity) | **POST** /v2/opportunities | Create an Opportunity |
| [**createOpportunityCustomFields()**](OpportunityApi.md#createOpportunityCustomFields) | **POST** /v2/opportunities/model/customFields | Create an Opportunity Custom Field |
| [**createOpportunityStage()**](OpportunityApi.md#createOpportunityStage) | **POST** /v2/opportunities/stages | Create an Opportunity Stage |
| [**deleteOpportunity()**](OpportunityApi.md#deleteOpportunity) | **DELETE** /v2/opportunities/{opportunity_id} | Delete an Opportunity |
| [**deleteOpportunityStage()**](OpportunityApi.md#deleteOpportunityStage) | **DELETE** /v2/opportunities/stages/{stage_id} | Delete an Opportunity Stage |
| [**getOpportunity()**](OpportunityApi.md#getOpportunity) | **GET** /v2/opportunities/{opportunity_id} | Retrieve a Opportunity |
| [**getOpportunityStage()**](OpportunityApi.md#getOpportunityStage) | **GET** /v2/opportunities/stages/{stage_id} | Retrieve an Opportunity Stage |
| [**listOpportunities()**](OpportunityApi.md#listOpportunities) | **GET** /v2/opportunities | List Opportunities |
| [**listOpportunityStages()**](OpportunityApi.md#listOpportunityStages) | **GET** /v2/opportunities/stages | List of Opportunity Stages |
| [**updateOpportunity()**](OpportunityApi.md#updateOpportunity) | **PATCH** /v2/opportunities/{opportunity_id} | Update an opportunity |
| [**updateOpportunityCustomField()**](OpportunityApi.md#updateOpportunityCustomField) | **PATCH** /v2/opportunities/model/customFields/{custom_field_id} | Update a Opportunity&#39;s Custom Field |
| [**updateOpportunityStage()**](OpportunityApi.md#updateOpportunityStage) | **PATCH** /v2/opportunities/stages/{stage_id} | Update an Opportunity Stage |


## `createOpportunity()`

```php
createOpportunity($create_opportunity_request): \Keap\Core\V2\Model\RestV2Opportunity
```

Create an Opportunity

Creates a new opportunity as the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_opportunity_request = new \Keap\Core\V2\Model\CreateOpportunityRequest(); // \Keap\Core\V2\Model\CreateOpportunityRequest | opportunity

try {
    $result = $apiInstance->createOpportunity($create_opportunity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->createOpportunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_opportunity_request** | [**\Keap\Core\V2\Model\CreateOpportunityRequest**](../Model/CreateOpportunityRequest.md)| opportunity | [optional] |

### Return type

[**\Keap\Core\V2\Model\RestV2Opportunity**](../Model/RestV2Opportunity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOpportunityCustomFields()`

```php
createOpportunityCustomFields($create_custom_field_request): \Keap\Core\V2\Model\CustomFieldMetaData
```

Create an Opportunity Custom Field

Creates a custom field of the specified type and options to the Opportunity object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_custom_field_request = new \Keap\Core\V2\Model\CreateCustomFieldRequest(); // \Keap\Core\V2\Model\CreateCustomFieldRequest | customField

try {
    $result = $apiInstance->createOpportunityCustomFields($create_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->createOpportunityCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_custom_field_request** | [**\Keap\Core\V2\Model\CreateCustomFieldRequest**](../Model/CreateCustomFieldRequest.md)| customField | |

### Return type

[**\Keap\Core\V2\Model\CustomFieldMetaData**](../Model/CustomFieldMetaData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOpportunityStage()`

```php
createOpportunityStage($create_opportunity_stage_request): \Keap\Core\V2\Model\RestOpportunityStage
```

Create an Opportunity Stage

Creates a new Opportunity Stage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_opportunity_stage_request = new \Keap\Core\V2\Model\CreateOpportunityStageRequest(); // \Keap\Core\V2\Model\CreateOpportunityStageRequest | opportunity

try {
    $result = $apiInstance->createOpportunityStage($create_opportunity_stage_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->createOpportunityStage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_opportunity_stage_request** | [**\Keap\Core\V2\Model\CreateOpportunityStageRequest**](../Model/CreateOpportunityStageRequest.md)| opportunity | [optional] |

### Return type

[**\Keap\Core\V2\Model\RestOpportunityStage**](../Model/RestOpportunityStage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOpportunity()`

```php
deleteOpportunity($opportunity_id)
```

Delete an Opportunity

Deletes the specified Opportunity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$opportunity_id = 'opportunity_id_example'; // string | opportunity_id

try {
    $apiInstance->deleteOpportunity($opportunity_id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->deleteOpportunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **opportunity_id** | **string**| opportunity_id | |

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

## `deleteOpportunityStage()`

```php
deleteOpportunityStage($stage_id)
```

Delete an Opportunity Stage

Deletes the specified Opportunity Stage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stage_id = 'stage_id_example'; // string | stage_id

try {
    $apiInstance->deleteOpportunityStage($stage_id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->deleteOpportunityStage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stage_id** | **string**| stage_id | |

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

## `getOpportunity()`

```php
getOpportunity($opportunity_id): \Keap\Core\V2\Model\RestV2Opportunity
```

Retrieve a Opportunity

Retrieves the specified Opportunity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$opportunity_id = 'opportunity_id_example'; // string | opportunity_id

try {
    $result = $apiInstance->getOpportunity($opportunity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->getOpportunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **opportunity_id** | **string**| opportunity_id | |

### Return type

[**\Keap\Core\V2\Model\RestV2Opportunity**](../Model/RestV2Opportunity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpportunityStage()`

```php
getOpportunityStage($stage_id): \Keap\Core\V2\Model\RestOpportunityStage
```

Retrieve an Opportunity Stage

Retrieves the specified Opportunity Stage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stage_id = 'stage_id_example'; // string | stage_id

try {
    $result = $apiInstance->getOpportunityStage($stage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->getOpportunityStage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stage_id** | **string**| stage_id | |

### Return type

[**\Keap\Core\V2\Model\RestOpportunityStage**](../Model/RestOpportunityStage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOpportunities()`

```php
listOpportunities($fields, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListOpportunitiesResponse
```

List Opportunities

Retrieves a list of all Opportunities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = array('fields_example'); // string[] | fields
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `stage_id` - (String) `user_id`
$order_by = 'order_by_example'; // string | Attribute and direction to opportunities items. One of the following fields: - `next_action_time` - `contact_name` - `opportunity_name` - `created_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listOpportunities($fields, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->listOpportunities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | [**string[]**](../Model/string.md)| fields | [optional] |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;stage_id&#x60; - (String) &#x60;user_id&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to opportunities items. One of the following fields: - &#x60;next_action_time&#x60; - &#x60;contact_name&#x60; - &#x60;opportunity_name&#x60; - &#x60;created_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListOpportunitiesResponse**](../Model/ListOpportunitiesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOpportunityStages()`

```php
listOpportunityStages($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListOpportunityStagesResponse
```

List of Opportunity Stages

Retrieves a list of Opportunity Stages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Search filter to apply to results
$order_by = 'order_by_example'; // string | Attribute and direction to order stage items. One of the following fields: - `stage_order`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listOpportunityStages($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->listOpportunityStages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Search filter to apply to results | [optional] |
| **order_by** | **string**| Attribute and direction to order stage items. One of the following fields: - &#x60;stage_order&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListOpportunityStagesResponse**](../Model/ListOpportunityStagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOpportunity()`

```php
updateOpportunity($opportunity_id, $update_opportunity_request_v2, $update_mask): \Keap\Core\V2\Model\RestV2Opportunity
```

Update an opportunity

Updates specified values of a given opportunity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$opportunity_id = 'opportunity_id_example'; // string | opportunity_id
$update_opportunity_request_v2 = new \Keap\Core\V2\Model\UpdateOpportunityRequestV2(); // \Keap\Core\V2\Model\UpdateOpportunityRequestV2 | request
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateOpportunity($opportunity_id, $update_opportunity_request_v2, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->updateOpportunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **opportunity_id** | **string**| opportunity_id | |
| **update_opportunity_request_v2** | [**\Keap\Core\V2\Model\UpdateOpportunityRequestV2**](../Model/UpdateOpportunityRequestV2.md)| request | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\RestV2Opportunity**](../Model/RestV2Opportunity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOpportunityCustomField()`

```php
updateOpportunityCustomField($custom_field_id, $update_custom_field_meta_data_request, $update_mask): \Keap\Core\V2\Model\CustomFieldMetaData
```

Update a Opportunity's Custom Field

Updates a custom field of the specified type and options to the Opportunity object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_field_id = 'custom_field_id_example'; // string | custom_field_id
$update_custom_field_meta_data_request = new \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest | request
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateOpportunityCustomField($custom_field_id, $update_custom_field_meta_data_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->updateOpportunityCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**| custom_field_id | |
| **update_custom_field_meta_data_request** | [**\Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest**](../Model/UpdateCustomFieldMetaDataRequest.md)| request | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\CustomFieldMetaData**](../Model/CustomFieldMetaData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOpportunityStage()`

```php
updateOpportunityStage($stage_id, $update_opportunity_stage_request, $update_mask): \Keap\Core\V2\Model\RestOpportunityStage
```

Update an Opportunity Stage

Updates specified values of a given Opportunity Stage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stage_id = 'stage_id_example'; // string | stage_id
$update_opportunity_stage_request = new \Keap\Core\V2\Model\UpdateOpportunityStageRequest(); // \Keap\Core\V2\Model\UpdateOpportunityStageRequest | request
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateOpportunityStage($stage_id, $update_opportunity_stage_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->updateOpportunityStage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stage_id** | **string**| stage_id | |
| **update_opportunity_stage_request** | [**\Keap\Core\V2\Model\UpdateOpportunityStageRequest**](../Model/UpdateOpportunityStageRequest.md)| request | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\RestOpportunityStage**](../Model/RestOpportunityStage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
