# Keap\Core\V2\OpportunityApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOpportunity()**](OpportunityApi.md#createOpportunity) | **POST** /rest/v2/opportunities | Create an Opportunity |
| [**createOpportunityCustomFieldGroup()**](OpportunityApi.md#createOpportunityCustomFieldGroup) | **POST** /rest/v2/opportunities/model/customFields/groups | Create an Opportunity Custom Field Group |
| [**createOpportunityCustomFields()**](OpportunityApi.md#createOpportunityCustomFields) | **POST** /rest/v2/opportunities/model/customFields | Create an Opportunity Custom Field |
| [**createOpportunityStage()**](OpportunityApi.md#createOpportunityStage) | **POST** /rest/v2/opportunities/stages | Create an Opportunity Stage |
| [**deleteOpportunitiesCustomField()**](OpportunityApi.md#deleteOpportunitiesCustomField) | **DELETE** /rest/v2/opportunities/model/customFields/{custom_field_id} | Delete an Opportunity Custom Field |
| [**deleteOpportunity()**](OpportunityApi.md#deleteOpportunity) | **DELETE** /rest/v2/opportunities/{opportunity_id} | Delete an Opportunity |
| [**deleteOpportunityCustomFieldGroup()**](OpportunityApi.md#deleteOpportunityCustomFieldGroup) | **DELETE** /rest/v2/opportunities/model/customFields/groups/{group_id} | Delete an Opportunity Custom Field Group |
| [**deleteOpportunityStage()**](OpportunityApi.md#deleteOpportunityStage) | **DELETE** /rest/v2/opportunities/stages/{stage_id} | Delete an Opportunity Stage |
| [**getOpportunity()**](OpportunityApi.md#getOpportunity) | **GET** /rest/v2/opportunities/{opportunity_id} | Retrieve a Opportunity |
| [**getOpportunityCustomFieldGroup()**](OpportunityApi.md#getOpportunityCustomFieldGroup) | **GET** /rest/v2/opportunities/model/customFields/groups/{group_id} | Retrieve an Opportunity Custom Field Group |
| [**getOpportunityStage()**](OpportunityApi.md#getOpportunityStage) | **GET** /rest/v2/opportunities/stages/{stage_id} | Retrieve an Opportunity Stage |
| [**listOpportunities()**](OpportunityApi.md#listOpportunities) | **GET** /rest/v2/opportunities | List Opportunities |
| [**listOpportunityCustomFieldGroups()**](OpportunityApi.md#listOpportunityCustomFieldGroups) | **GET** /rest/v2/opportunities/model/customFields/groups | List Opportunity Custom Field Groups |
| [**listOpportunityStages()**](OpportunityApi.md#listOpportunityStages) | **GET** /rest/v2/opportunities/stages | List of Opportunity Stages |
| [**retrieveOpportunityCustomFieldModel()**](OpportunityApi.md#retrieveOpportunityCustomFieldModel) | **GET** /rest/v2/opportunities/model | Retrieve Opportunity Custom Field Model |
| [**updateOpportunity()**](OpportunityApi.md#updateOpportunity) | **PATCH** /rest/v2/opportunities/{opportunity_id} | Update an opportunity |
| [**updateOpportunityCustomField()**](OpportunityApi.md#updateOpportunityCustomField) | **PATCH** /rest/v2/opportunities/model/customFields/{custom_field_id} | Update a Opportunity&#39;s Custom Field |
| [**updateOpportunityCustomFieldGroup()**](OpportunityApi.md#updateOpportunityCustomFieldGroup) | **PATCH** /rest/v2/opportunities/model/customFields/groups/{group_id} | Update an Opportunity Custom Field Group |
| [**updateOpportunityStage()**](OpportunityApi.md#updateOpportunityStage) | **PATCH** /rest/v2/opportunities/stages/{stage_id} | Update an Opportunity Stage |


## `createOpportunity()`

```php
createOpportunity($create_opportunity_request, $fields): \Keap\Core\V2\Model\RestV2Opportunity
```

Create an Opportunity

Creates a new opportunity as the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_opportunity_request = new \Keap\Core\V2\Model\CreateOpportunityRequest(); // \Keap\Core\V2\Model\CreateOpportunityRequest
$fields = array('fields_example'); // string[] | Comma-delimited list of optional Opportunities properties to include in the response. Legacy field names are supported for optional fields only if legacy opportunities feature is enabled. Allowed optional values: custom_fields. Allowed legacy optional values: monthly_revenue,order_revenue,objection,status,stage_entrance_time

try {
    $result = $apiInstance->createOpportunity($create_opportunity_request, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->createOpportunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_opportunity_request** | [**\Keap\Core\V2\Model\CreateOpportunityRequest**](../Model/CreateOpportunityRequest.md)|  | |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of optional Opportunities properties to include in the response. Legacy field names are supported for optional fields only if legacy opportunities feature is enabled. Allowed optional values: custom_fields. Allowed legacy optional values: monthly_revenue,order_revenue,objection,status,stage_entrance_time | [optional] |

### Return type

[**\Keap\Core\V2\Model\RestV2Opportunity**](../Model/RestV2Opportunity.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOpportunityCustomFieldGroup()`

```php
createOpportunityCustomFieldGroup($create_custom_field_group_request): \Keap\Core\V2\Model\CustomFieldGroup
```

Create an Opportunity Custom Field Group

Creates a new custom field group for the Opportunity record type. If `tab_id` is omitted, the group is added to the default 'Custom Fields' tab.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_field_group_request = new \Keap\Core\V2\Model\CreateCustomFieldGroupRequest(); // \Keap\Core\V2\Model\CreateCustomFieldGroupRequest

try {
    $result = $apiInstance->createOpportunityCustomFieldGroup($create_custom_field_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->createOpportunityCustomFieldGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_custom_field_group_request** | [**\Keap\Core\V2\Model\CreateCustomFieldGroupRequest**](../Model/CreateCustomFieldGroupRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\CustomFieldGroup**](../Model/CustomFieldGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_field_request = new \Keap\Core\V2\Model\CreateCustomFieldRequest(); // \Keap\Core\V2\Model\CreateCustomFieldRequest

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_opportunity_stage_request = new \Keap\Core\V2\Model\CreateOpportunityStageRequest(); // \Keap\Core\V2\Model\CreateOpportunityStageRequest

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
| **create_opportunity_stage_request** | [**\Keap\Core\V2\Model\CreateOpportunityStageRequest**](../Model/CreateOpportunityStageRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\RestOpportunityStage**](../Model/RestOpportunityStage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOpportunitiesCustomField()`

```php
deleteOpportunitiesCustomField($custom_field_id)
```

Delete an Opportunity Custom Field

Deletes a Custom Field from Opportunity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 'custom_field_id_example'; // string

try {
    $apiInstance->deleteOpportunitiesCustomField($custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->deleteOpportunitiesCustomField: ', $e->getMessage(), PHP_EOL;
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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$opportunity_id = 'opportunity_id_example'; // string

try {
    $apiInstance->deleteOpportunity($opportunity_id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->deleteOpportunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **opportunity_id** | **string**|  | |

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

## `deleteOpportunityCustomFieldGroup()`

```php
deleteOpportunityCustomFieldGroup($group_id)
```

Delete an Opportunity Custom Field Group

Deletes a custom field group. Returns 409 Conflict if the group still contains custom fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $apiInstance->deleteOpportunityCustomFieldGroup($group_id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->deleteOpportunityCustomFieldGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stage_id = 'stage_id_example'; // string

try {
    $apiInstance->deleteOpportunityStage($stage_id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->deleteOpportunityStage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stage_id** | **string**|  | |

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

## `getOpportunity()`

```php
getOpportunity($opportunity_id, $fields): \Keap\Core\V2\Model\RestV2Opportunity
```

Retrieve a Opportunity

Retrieves the specified Opportunity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$opportunity_id = 'opportunity_id_example'; // string
$fields = array('fields_example'); // string[] | Comma-delimited list of optional Opportunities properties to include in the response. Legacy field names are supported for optional fields only if legacy opportunities feature is enabled. Allowed optional values: custom_fields. Allowed legacy optional values: monthly_revenue,order_revenue,objection,status,stage_entrance_time

try {
    $result = $apiInstance->getOpportunity($opportunity_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->getOpportunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **opportunity_id** | **string**|  | |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of optional Opportunities properties to include in the response. Legacy field names are supported for optional fields only if legacy opportunities feature is enabled. Allowed optional values: custom_fields. Allowed legacy optional values: monthly_revenue,order_revenue,objection,status,stage_entrance_time | [optional] |

### Return type

[**\Keap\Core\V2\Model\RestV2Opportunity**](../Model/RestV2Opportunity.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpportunityCustomFieldGroup()`

```php
getOpportunityCustomFieldGroup($group_id): \Keap\Core\V2\Model\CustomFieldGroup
```

Retrieve an Opportunity Custom Field Group

Retrieves a single custom field group by id for the Opportunity record type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->getOpportunityCustomFieldGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->getOpportunityCustomFieldGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\CustomFieldGroup**](../Model/CustomFieldGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stage_id = 'stage_id_example'; // string

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
| **stage_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\RestOpportunityStage**](../Model/RestOpportunityStage.md)

### Authorization

[oauth2](../../README.md#oauth2)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array('fields_example'); // string[] | Comma-delimited list of optional Opportunities properties to include in the response. Legacy field names are supported for optional fields only if legacy opportunities feature is enabled. Allowed optional values: custom_fields. Allowed legacy optional values: monthly_revenue,order_revenue,objection,status,stage_entrance_time
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `stage_id` - (String) `user_id` - (String) `contact_id` - (String) `opportunity_title` — supports wildcard prefix search (e.g. `opportunity_title==Deal*`) - (String) `lead_source_name` — supports wildcard prefix search (e.g. `lead_source_name==Web*`) - (String) `affiliate_id` — exact match only (e.g. `affiliate_id==123`) - (String) `opportunity_id` — supports comparison operators: `==`, `>`, `<`, `>=`, `<=` - (String) `ids` — comma-separated list of opportunity IDs (e.g. `ids==1,2,3`), maximum 100 IDs Note: `opportunity_id` and `ids` cannot be used together in the same request.
$order_by = 'order_by_example'; // string | Attribute and direction to opportunities items. One of the following fields: - `next_action_time` - `contact_name` - `opportunity_title` - `created_time` - `update_time`  One of the following directions: - `asc` - `desc`
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
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of optional Opportunities properties to include in the response. Legacy field names are supported for optional fields only if legacy opportunities feature is enabled. Allowed optional values: custom_fields. Allowed legacy optional values: monthly_revenue,order_revenue,objection,status,stage_entrance_time | [optional] |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;stage_id&#x60; - (String) &#x60;user_id&#x60; - (String) &#x60;contact_id&#x60; - (String) &#x60;opportunity_title&#x60; — supports wildcard prefix search (e.g. &#x60;opportunity_title&#x3D;&#x3D;Deal*&#x60;) - (String) &#x60;lead_source_name&#x60; — supports wildcard prefix search (e.g. &#x60;lead_source_name&#x3D;&#x3D;Web*&#x60;) - (String) &#x60;affiliate_id&#x60; — exact match only (e.g. &#x60;affiliate_id&#x3D;&#x3D;123&#x60;) - (String) &#x60;opportunity_id&#x60; — supports comparison operators: &#x60;&#x3D;&#x3D;&#x60;, &#x60;&gt;&#x60;, &#x60;&lt;&#x60;, &#x60;&gt;&#x3D;&#x60;, &#x60;&lt;&#x3D;&#x60; - (String) &#x60;ids&#x60; — comma-separated list of opportunity IDs (e.g. &#x60;ids&#x3D;&#x3D;1,2,3&#x60;), maximum 100 IDs Note: &#x60;opportunity_id&#x60; and &#x60;ids&#x60; cannot be used together in the same request. | [optional] |
| **order_by** | **string**| Attribute and direction to opportunities items. One of the following fields: - &#x60;next_action_time&#x60; - &#x60;contact_name&#x60; - &#x60;opportunity_title&#x60; - &#x60;created_time&#x60; - &#x60;update_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListOpportunitiesResponse**](../Model/ListOpportunitiesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOpportunityCustomFieldGroups()`

```php
listOpportunityCustomFieldGroups($tab_id): \Keap\Core\V2\Model\ListCustomFieldGroupsResponse
```

List Opportunity Custom Field Groups

Retrieves a list of custom field groups for the Opportunity record type. Optionally filter by tab_id to scope to a specific tab.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tab_id = 'tab_id_example'; // string | Optional tab id to scope groups to a single tab

try {
    $result = $apiInstance->listOpportunityCustomFieldGroups($tab_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->listOpportunityCustomFieldGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tab_id** | **string**| Optional tab id to scope groups to a single tab | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListCustomFieldGroupsResponse**](../Model/ListCustomFieldGroupsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `opportunity_stage_name` — supports wildcard prefix search (e.g. `opportunity_stage_name==Qualified*`) - (String) `opportunity_stage_id` — supports comparison operators: `==`, `>`, `<`, `>=`, `<=` (e.g. `opportunity_stage_id>5`)
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
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;opportunity_stage_name&#x60; — supports wildcard prefix search (e.g. &#x60;opportunity_stage_name&#x3D;&#x3D;Qualified*&#x60;) - (String) &#x60;opportunity_stage_id&#x60; — supports comparison operators: &#x60;&#x3D;&#x3D;&#x60;, &#x60;&gt;&#x60;, &#x60;&lt;&#x60;, &#x60;&gt;&#x3D;&#x60;, &#x60;&lt;&#x3D;&#x60; (e.g. &#x60;opportunity_stage_id&gt;5&#x60;) | [optional] |
| **order_by** | **string**| Attribute and direction to order stage items. One of the following fields: - &#x60;stage_order&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListOpportunityStagesResponse**](../Model/ListOpportunityStagesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveOpportunityCustomFieldModel()`

```php
retrieveOpportunityCustomFieldModel(): \Keap\Core\V2\Model\ObjectModel
```

Retrieve Opportunity Custom Field Model

Get the custom fields for the Opportunity object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveOpportunityCustomFieldModel();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->retrieveOpportunityCustomFieldModel: ', $e->getMessage(), PHP_EOL;
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

## `updateOpportunity()`

```php
updateOpportunity($opportunity_id, $update_opportunity_request_v2, $update_mask, $fields): \Keap\Core\V2\Model\RestV2Opportunity
```

Update an opportunity

Updates specified values of a given opportunity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$opportunity_id = 'opportunity_id_example'; // string
$update_opportunity_request_v2 = new \Keap\Core\V2\Model\UpdateOpportunityRequestV2(); // \Keap\Core\V2\Model\UpdateOpportunityRequestV2
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.
$fields = array('fields_example'); // string[] | Comma-delimited list of optional Opportunities properties to include in the response. Legacy field names are supported for optional fields only if legacy opportunities feature is enabled. Allowed optional values: custom_fields. Allowed legacy optional values: monthly_revenue,order_revenue,objection,status,stage_entrance_time

try {
    $result = $apiInstance->updateOpportunity($opportunity_id, $update_opportunity_request_v2, $update_mask, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->updateOpportunity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **opportunity_id** | **string**|  | |
| **update_opportunity_request_v2** | [**\Keap\Core\V2\Model\UpdateOpportunityRequestV2**](../Model/UpdateOpportunityRequestV2.md)|  | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of optional Opportunities properties to include in the response. Legacy field names are supported for optional fields only if legacy opportunities feature is enabled. Allowed optional values: custom_fields. Allowed legacy optional values: monthly_revenue,order_revenue,objection,status,stage_entrance_time | [optional] |

### Return type

[**\Keap\Core\V2\Model\RestV2Opportunity**](../Model/RestV2Opportunity.md)

### Authorization

[oauth2](../../README.md#oauth2)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 'custom_field_id_example'; // string
$update_custom_field_meta_data_request = new \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest
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
| **custom_field_id** | **string**|  | |
| **update_custom_field_meta_data_request** | [**\Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest**](../Model/UpdateCustomFieldMetaDataRequest.md)|  | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

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

## `updateOpportunityCustomFieldGroup()`

```php
updateOpportunityCustomFieldGroup($group_id, $update_mask, $update_custom_field_group_request): \Keap\Core\V2\Model\CustomFieldGroup
```

Update an Opportunity Custom Field Group

Updates an existing custom field group. Only fields listed in `update_mask` are applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$update_mask = array('update_mask_example'); // string[] | Comma-separated list of fields to update
$update_custom_field_group_request = new \Keap\Core\V2\Model\UpdateCustomFieldGroupRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldGroupRequest

try {
    $result = $apiInstance->updateOpportunityCustomFieldGroup($group_id, $update_mask, $update_custom_field_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->updateOpportunityCustomFieldGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **update_mask** | [**string[]**](../Model/string.md)| Comma-separated list of fields to update | |
| **update_custom_field_group_request** | [**\Keap\Core\V2\Model\UpdateCustomFieldGroupRequest**](../Model/UpdateCustomFieldGroupRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\CustomFieldGroup**](../Model/CustomFieldGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

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


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stage_id = 'stage_id_example'; // string
$update_opportunity_stage_request = new \Keap\Core\V2\Model\UpdateOpportunityStageRequest(); // \Keap\Core\V2\Model\UpdateOpportunityStageRequest
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
| **stage_id** | **string**|  | |
| **update_opportunity_stage_request** | [**\Keap\Core\V2\Model\UpdateOpportunityStageRequest**](../Model/UpdateOpportunityStageRequest.md)|  | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\RestOpportunityStage**](../Model/RestOpportunityStage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
