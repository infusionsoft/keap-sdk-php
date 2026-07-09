# Keap\Core\V2\SubscriptionsApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelSubscription()**](SubscriptionsApi.md#cancelSubscription) | **POST** /rest/v2/subscriptions/{subscription_id}:deactivate | Cancel Subscription |
| [**createSubscription()**](SubscriptionsApi.md#createSubscription) | **POST** /rest/v2/subscriptions | Create Subscription |
| [**createSubscriptionCustomField()**](SubscriptionsApi.md#createSubscriptionCustomField) | **POST** /rest/v2/subscriptions/model/customFields | Create a Subscription Custom Field |
| [**createSubscriptionCustomFieldGroup()**](SubscriptionsApi.md#createSubscriptionCustomFieldGroup) | **POST** /rest/v2/subscriptions/model/customFields/groups | Create a Subscription Custom Field Group |
| [**deleteSubscriptionCustomField()**](SubscriptionsApi.md#deleteSubscriptionCustomField) | **DELETE** /rest/v2/subscriptions/model/customFields/{custom_field_id} | Delete a Subscription Custom Field |
| [**deleteSubscriptionCustomFieldGroup()**](SubscriptionsApi.md#deleteSubscriptionCustomFieldGroup) | **DELETE** /rest/v2/subscriptions/model/customFields/groups/{group_id} | Delete a Subscription Custom Field Group |
| [**getSubscription()**](SubscriptionsApi.md#getSubscription) | **GET** /rest/v2/subscriptions/{subscription_id} | Retrieve a Subscription |
| [**getSubscriptionCustomFieldGroup()**](SubscriptionsApi.md#getSubscriptionCustomFieldGroup) | **GET** /rest/v2/subscriptions/model/customFields/groups/{group_id} | Retrieve a Subscription Custom Field Group |
| [**invoiceSubscription()**](SubscriptionsApi.md#invoiceSubscription) | **POST** /rest/v2/subscriptions/{subscription_id}:invoice | Invoice a Subscription |
| [**listSubscriptionCustomFieldGroups()**](SubscriptionsApi.md#listSubscriptionCustomFieldGroups) | **GET** /rest/v2/subscriptions/model/customFields/groups | List Subscription Custom Field Groups |
| [**listSubscriptions()**](SubscriptionsApi.md#listSubscriptions) | **GET** /rest/v2/subscriptions | List Subscriptions |
| [**retrieveSubscriptionCustomFieldModel()**](SubscriptionsApi.md#retrieveSubscriptionCustomFieldModel) | **GET** /rest/v2/subscriptions/model | Retrieve Subscription Custom Field Model |
| [**updateSubscription()**](SubscriptionsApi.md#updateSubscription) | **PATCH** /rest/v2/subscriptions/{subscription_id} | Update a Subscription |
| [**updateSubscriptionCustomField()**](SubscriptionsApi.md#updateSubscriptionCustomField) | **PATCH** /rest/v2/subscriptions/model/customFields/{custom_field_id} | Update a Subscription Custom Field |
| [**updateSubscriptionCustomFieldGroup()**](SubscriptionsApi.md#updateSubscriptionCustomFieldGroup) | **PATCH** /rest/v2/subscriptions/model/customFields/groups/{group_id} | Update a Subscription Custom Field Group |


## `cancelSubscription()`

```php
cancelSubscription($subscription_id, $cancel_subscription_request)
```

Cancel Subscription

Cancels the specified subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string
$cancel_subscription_request = new \Keap\Core\V2\Model\CancelSubscriptionRequest(); // \Keap\Core\V2\Model\CancelSubscriptionRequest

try {
    $apiInstance->cancelSubscription($subscription_id, $cancel_subscription_request);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->cancelSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**|  | |
| **cancel_subscription_request** | [**\Keap\Core\V2\Model\CancelSubscriptionRequest**](../Model/CancelSubscriptionRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubscription()`

```php
createSubscription($create_subscription_request): \Keap\Core\V2\Model\Subscription
```

Create Subscription

Creates a subscription with the specified product and product subscription id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_subscription_request = new \Keap\Core\V2\Model\CreateSubscriptionRequest(); // \Keap\Core\V2\Model\CreateSubscriptionRequest

try {
    $result = $apiInstance->createSubscription($create_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_subscription_request** | [**\Keap\Core\V2\Model\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\Subscription**](../Model/Subscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubscriptionCustomField()`

```php
createSubscriptionCustomField($create_custom_field_request): \Keap\Core\V2\Model\CustomFieldMetaData
```

Create a Subscription Custom Field

Creates a custom field of the specified type and options to the Subscription object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_field_request = new \Keap\Core\V2\Model\CreateCustomFieldRequest(); // \Keap\Core\V2\Model\CreateCustomFieldRequest

try {
    $result = $apiInstance->createSubscriptionCustomField($create_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createSubscriptionCustomField: ', $e->getMessage(), PHP_EOL;
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

## `createSubscriptionCustomFieldGroup()`

```php
createSubscriptionCustomFieldGroup($create_custom_field_group_request): \Keap\Core\V2\Model\CustomFieldGroup
```

Create a Subscription Custom Field Group

Creates a new custom field group for the Subscription record type. If `tab_id` is omitted, the group is added to the default 'Custom Fields' tab.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_field_group_request = new \Keap\Core\V2\Model\CreateCustomFieldGroupRequest(); // \Keap\Core\V2\Model\CreateCustomFieldGroupRequest

try {
    $result = $apiInstance->createSubscriptionCustomFieldGroup($create_custom_field_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createSubscriptionCustomFieldGroup: ', $e->getMessage(), PHP_EOL;
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

## `deleteSubscriptionCustomField()`

```php
deleteSubscriptionCustomField($custom_field_id)
```

Delete a Subscription Custom Field

Deletes a custom field from the Subscription object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 'custom_field_id_example'; // string

try {
    $apiInstance->deleteSubscriptionCustomField($custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteSubscriptionCustomField: ', $e->getMessage(), PHP_EOL;
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

## `deleteSubscriptionCustomFieldGroup()`

```php
deleteSubscriptionCustomFieldGroup($group_id)
```

Delete a Subscription Custom Field Group

Deletes a custom field group. Returns 409 Conflict if the group still contains custom fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $apiInstance->deleteSubscriptionCustomFieldGroup($group_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteSubscriptionCustomFieldGroup: ', $e->getMessage(), PHP_EOL;
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

## `getSubscription()`

```php
getSubscription($subscription_id): \Keap\Core\V2\Model\Subscription
```

Retrieve a Subscription

Retrieves a single subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string

try {
    $result = $apiInstance->getSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\Subscription**](../Model/Subscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionCustomFieldGroup()`

```php
getSubscriptionCustomFieldGroup($group_id): \Keap\Core\V2\Model\CustomFieldGroup
```

Retrieve a Subscription Custom Field Group

Retrieves a single custom field group by id for the Subscription record type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->getSubscriptionCustomFieldGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionCustomFieldGroup: ', $e->getMessage(), PHP_EOL;
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

## `invoiceSubscription()`

```php
invoiceSubscription($subscription_id): \Keap\Core\V2\Model\OrderV2
```

Invoice a Subscription

Generates invoices from all cycles of a subscription that are due. Returns the most recently billed invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string

try {
    $result = $apiInstance->invoiceSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->invoiceSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\OrderV2**](../Model/OrderV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSubscriptionCustomFieldGroups()`

```php
listSubscriptionCustomFieldGroups($tab_id): \Keap\Core\V2\Model\ListCustomFieldGroupsResponse
```

List Subscription Custom Field Groups

Retrieves a list of custom field groups for the Subscription record type. Optionally filter by tab_id to scope to a specific tab.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tab_id = 'tab_id_example'; // string | Optional tab id to scope groups to a single tab

try {
    $result = $apiInstance->listSubscriptionCustomFieldGroups($tab_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->listSubscriptionCustomFieldGroups: ', $e->getMessage(), PHP_EOL;
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

## `listSubscriptions()`

```php
listSubscriptions($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListSubscriptionsResponse
```

List Subscriptions

Retrieves a list of subscriptions using the specified search criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `contact_id` - (String) `subscription_plan_id` - (String) `status` - (String) `id` - Allowable operators: \"==\", \"<=\", \"<\", \">=\", \">\", \"!=\" - (String) `billing_amount` - Allowable operators: \"==\", \"<=\", \"<\", \">=\", \">\", \"!=\" - (List[String]) `ids` - (List[String]) `subscription_plan_ids`  You will need to apply the `==` operator (or other supported operators), to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=contact_id%3D%3D123` - `filter=subscription_plan_id%3D%3D456` - `filter=status%3D%3DActive` - `filter=id%3E5` - `filter=billing_amount%3E%3D100` - `filter=ids%3D%3D1,10,4,24` - `filter=subscription_plan_ids%3D%3D10,20,30` - `filter=contact_id%3D%3D123%3Bstatus%3D%3DActive`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `id` - `contact_id` - `subscription_plan_id` - `modification_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listSubscriptions($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->listSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;contact_id&#x60; - (String) &#x60;subscription_plan_id&#x60; - (String) &#x60;status&#x60; - (String) &#x60;id&#x60; - Allowable operators: \&quot;&#x3D;&#x3D;\&quot;, \&quot;&lt;&#x3D;\&quot;, \&quot;&lt;\&quot;, \&quot;&gt;&#x3D;\&quot;, \&quot;&gt;\&quot;, \&quot;!&#x3D;\&quot; - (String) &#x60;billing_amount&#x60; - Allowable operators: \&quot;&#x3D;&#x3D;\&quot;, \&quot;&lt;&#x3D;\&quot;, \&quot;&lt;\&quot;, \&quot;&gt;&#x3D;\&quot;, \&quot;&gt;\&quot;, \&quot;!&#x3D;\&quot; - (List[String]) &#x60;ids&#x60; - (List[String]) &#x60;subscription_plan_ids&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator (or other supported operators), to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;contact_id%3D%3D123&#x60; - &#x60;filter&#x3D;subscription_plan_id%3D%3D456&#x60; - &#x60;filter&#x3D;status%3D%3DActive&#x60; - &#x60;filter&#x3D;id%3E5&#x60; - &#x60;filter&#x3D;billing_amount%3E%3D100&#x60; - &#x60;filter&#x3D;ids%3D%3D1,10,4,24&#x60; - &#x60;filter&#x3D;subscription_plan_ids%3D%3D10,20,30&#x60; - &#x60;filter&#x3D;contact_id%3D%3D123%3Bstatus%3D%3DActive&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;id&#x60; - &#x60;contact_id&#x60; - &#x60;subscription_plan_id&#x60; - &#x60;modification_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListSubscriptionsResponse**](../Model/ListSubscriptionsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveSubscriptionCustomFieldModel()`

```php
retrieveSubscriptionCustomFieldModel(): \Keap\Core\V2\Model\ObjectModel
```

Retrieve Subscription Custom Field Model

Get the custom fields for the Subscription object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveSubscriptionCustomFieldModel();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->retrieveSubscriptionCustomFieldModel: ', $e->getMessage(), PHP_EOL;
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

## `updateSubscription()`

```php
updateSubscription($subscription_id, $update_subscription_request, $update_mask): \Keap\Core\V2\Model\Subscription
```

Update a Subscription

Updates a Subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string
$update_subscription_request = new \Keap\Core\V2\Model\UpdateSubscriptionRequest(); // \Keap\Core\V2\Model\UpdateSubscriptionRequest
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateSubscription($subscription_id, $update_subscription_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**|  | |
| **update_subscription_request** | [**\Keap\Core\V2\Model\UpdateSubscriptionRequest**](../Model/UpdateSubscriptionRequest.md)|  | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\Subscription**](../Model/Subscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscriptionCustomField()`

```php
updateSubscriptionCustomField($custom_field_id, $update_custom_field_meta_data_request, $update_mask): \Keap\Core\V2\Model\CustomFieldMetaData
```

Update a Subscription Custom Field

Updates a custom field of the specified type and options to the Subscription object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 'custom_field_id_example'; // string
$update_custom_field_meta_data_request = new \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateSubscriptionCustomField($custom_field_id, $update_custom_field_meta_data_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscriptionCustomField: ', $e->getMessage(), PHP_EOL;
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

## `updateSubscriptionCustomFieldGroup()`

```php
updateSubscriptionCustomFieldGroup($group_id, $update_mask, $update_custom_field_group_request): \Keap\Core\V2\Model\CustomFieldGroup
```

Update a Subscription Custom Field Group

Updates an existing custom field group. Only fields listed in `update_mask` are applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$update_mask = array('update_mask_example'); // string[] | Comma-separated list of fields to update
$update_custom_field_group_request = new \Keap\Core\V2\Model\UpdateCustomFieldGroupRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldGroupRequest

try {
    $result = $apiInstance->updateSubscriptionCustomFieldGroup($group_id, $update_mask, $update_custom_field_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscriptionCustomFieldGroup: ', $e->getMessage(), PHP_EOL;
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
