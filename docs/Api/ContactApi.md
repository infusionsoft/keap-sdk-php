# Keap\Core\V2\ContactApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContact()**](ContactApi.md#createContact) | **POST** /rest/v2/contacts | Create a Contact |
| [**createContactCustomField()**](ContactApi.md#createContactCustomField) | **POST** /rest/v2/contacts/model/customFields | Create a Contact Custom Field |
| [**createContactLinkType()**](ContactApi.md#createContactLinkType) | **POST** /rest/v2/contacts/links/types | Create a Contact Link type |
| [**deleteContact()**](ContactApi.md#deleteContact) | **DELETE** /rest/v2/contacts/{contact_id} | Delete a Contact |
| [**getContact()**](ContactApi.md#getContact) | **GET** /rest/v2/contacts/{contact_id} | Retrieve a Contact |
| [**linkContacts()**](ContactApi.md#linkContacts) | **POST** /rest/v2/contacts:link | Link Contacts |
| [**listContactLinkTypes()**](ContactApi.md#listContactLinkTypes) | **GET** /rest/v2/contacts/links/types | List Contact Link types |
| [**listContactLinks()**](ContactApi.md#listContactLinks) | **GET** /rest/v2/contacts/{contact_id}/links | List Linked Contacts |
| [**listContacts()**](ContactApi.md#listContacts) | **GET** /rest/v2/contacts | List Contacts |
| [**listTagsForContact()**](ContactApi.md#listTagsForContact) | **GET** /rest/v2/contacts/{contact_id}/tags | List Applied Tags |
| [**retrieveContactModel()**](ContactApi.md#retrieveContactModel) | **GET** /rest/v2/contacts/model | Retrieve Contact Model |
| [**unlinkContacts()**](ContactApi.md#unlinkContacts) | **POST** /rest/v2/contacts:unlink | Delete Link between two Contacts |
| [**updateContact()**](ContactApi.md#updateContact) | **PATCH** /rest/v2/contacts/{contact_id} | Update a Contact |


## `createContact()`

```php
createContact($create_update_contact_request, $fields): \Keap\Core\V2\Model\Contact
```

Create a Contact

Creates a new Contact. *Note:* Contact must contain at least one item in `email_addresses` or `phone_numbers` and `country_code` is required if `region` is specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_update_contact_request = new \Keap\Core\V2\Model\CreateUpdateContactRequest(); // \Keap\Core\V2\Model\CreateUpdateContactRequest
$fields = array('fields_example'); // string[] | Comma-delimited list of Contact properties to include in the response. (Available fields are: addresses,anniversary_date,birth_date,company,contact_type,create_time, custom_fields,email_addresses,family_name,fax_numbers,given_name,id,job_title,leadsource_id, links,middle_name,notes,origin,owner_id,phone_numbers,preferred_locale,preferred_name,prefix, referral_code,score_value,social_accounts,source_type,spouse_name,suffix,tag_ids,time_zone, update_time,utm_parameters,website)

try {
    $result = $apiInstance->createContact($create_update_contact_request, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_update_contact_request** | [**\Keap\Core\V2\Model\CreateUpdateContactRequest**](../Model/CreateUpdateContactRequest.md)|  | |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of Contact properties to include in the response. (Available fields are: addresses,anniversary_date,birth_date,company,contact_type,create_time, custom_fields,email_addresses,family_name,fax_numbers,given_name,id,job_title,leadsource_id, links,middle_name,notes,origin,owner_id,phone_numbers,preferred_locale,preferred_name,prefix, referral_code,score_value,social_accounts,source_type,spouse_name,suffix,tag_ids,time_zone, update_time,utm_parameters,website) | [optional] |

### Return type

[**\Keap\Core\V2\Model\Contact**](../Model/Contact.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createContactCustomField()`

```php
createContactCustomField($create_custom_field_request): \Keap\Core\V2\Model\CustomFieldMetaData
```

Create a Contact Custom Field

Creates a custom field of the specified type and options to the Contact object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_field_request = new \Keap\Core\V2\Model\CreateCustomFieldRequest(); // \Keap\Core\V2\Model\CreateCustomFieldRequest

try {
    $result = $apiInstance->createContactCustomField($create_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContactCustomField: ', $e->getMessage(), PHP_EOL;
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

## `createContactLinkType()`

```php
createContactLinkType($create_contact_link_type_request): \Keap\Core\V2\Model\ContactLinkType
```

Create a Contact Link type

Creates a new type of Contact Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_contact_link_type_request = new \Keap\Core\V2\Model\CreateContactLinkTypeRequest(); // \Keap\Core\V2\Model\CreateContactLinkTypeRequest

try {
    $result = $apiInstance->createContactLinkType($create_contact_link_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContactLinkType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_contact_link_type_request** | [**\Keap\Core\V2\Model\CreateContactLinkTypeRequest**](../Model/CreateContactLinkTypeRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\ContactLinkType**](../Model/ContactLinkType.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContact()`

```php
deleteContact($contact_id)
```

Delete a Contact

Deletes the specified Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string

try {
    $apiInstance->deleteContact($contact_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |

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

## `getContact()`

```php
getContact($contact_id, $fields): \Keap\Core\V2\Model\Contact
```

Retrieve a Contact

Retrieves a single Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string
$fields = array('fields_example'); // string[] | Comma-delimited list of Contact properties to include in the response. (Available fields are: addresses,anniversary_date,birth_date,company,contact_type,create_time, custom_fields,email_addresses,family_name,fax_numbers,given_name,id,job_title,leadsource_id, links,middle_name,notes,origin,owner_id,phone_numbers,preferred_locale,preferred_name,prefix, referral_code,score_value,social_accounts,source_type,spouse_name,suffix,tag_ids,time_zone, update_time,utm_parameters,website)

try {
    $result = $apiInstance->getContact($contact_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of Contact properties to include in the response. (Available fields are: addresses,anniversary_date,birth_date,company,contact_type,create_time, custom_fields,email_addresses,family_name,fax_numbers,given_name,id,job_title,leadsource_id, links,middle_name,notes,origin,owner_id,phone_numbers,preferred_locale,preferred_name,prefix, referral_code,score_value,social_accounts,source_type,spouse_name,suffix,tag_ids,time_zone, update_time,utm_parameters,website) | [optional] |

### Return type

[**\Keap\Core\V2\Model\Contact**](../Model/Contact.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkContacts()`

```php
linkContacts($link_contacts_request): \Keap\Core\V2\Model\ContactLink
```

Link Contacts

Links two Contacts together using the provided Link type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_contacts_request = new \Keap\Core\V2\Model\LinkContactsRequest(); // \Keap\Core\V2\Model\LinkContactsRequest

try {
    $result = $apiInstance->linkContacts($link_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->linkContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_contacts_request** | [**\Keap\Core\V2\Model\LinkContactsRequest**](../Model/LinkContactsRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\ContactLink**](../Model/ContactLink.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactLinkTypes()`

```php
listContactLinkTypes($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListContactLinkTypesResponse
```

List Contact Link types

Retrieves a list of Contact Link types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=name%3D%3DexpectedValue`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name` - `max_links` - `create_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listContactLinkTypes($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->listContactLinkTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;name&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;name%3D%3DexpectedValue&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;name&#x60; - &#x60;max_links&#x60; - &#x60;create_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListContactLinkTypesResponse**](../Model/ListContactLinkTypesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactLinks()`

```php
listContactLinks($contact_id): \Keap\Core\V2\Model\ListContactLinksResponse
```

List Linked Contacts

Retrieves a list of Linked Contacts for a given Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string

try {
    $result = $apiInstance->listContactLinks($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->listContactLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\ListContactLinksResponse**](../Model/ListContactLinksResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContacts()`

```php
listContacts($fields, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListContactsResponse
```

List Contacts

Retrieves a list of Contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array('fields_example'); // string[] | Comma-delimited list of Contact properties to include in the response. (Available fields are: addresses,anniversary_date,birth_date,company,contact_type,create_time, custom_fields,email_addresses,family_name,fax_numbers,given_name,id,job_title,leadsource_id, links,middle_name,notes,origin,owner_id,phone_numbers,preferred_locale,preferred_name,prefix, referral_code,score_value,social_accounts,source_type,spouse_name,suffix,tag_ids,time_zone, update_time,utm_parameters,website)
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `email` - (String) `given_name` - (String) `family_name` - (String) `company_id` - (Set[String]) `contact_ids` - (String) `start_update_time` - (String) `end_update_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=given_name%3D%3DMary` - `filter=company_id%3D%3D123` - `filter=company_id%3D%3D123%3Bfamily_name%3D%3DSmith`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `id` - `create_time` - `email`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listContacts($fields, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->listContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of Contact properties to include in the response. (Available fields are: addresses,anniversary_date,birth_date,company,contact_type,create_time, custom_fields,email_addresses,family_name,fax_numbers,given_name,id,job_title,leadsource_id, links,middle_name,notes,origin,owner_id,phone_numbers,preferred_locale,preferred_name,prefix, referral_code,score_value,social_accounts,source_type,spouse_name,suffix,tag_ids,time_zone, update_time,utm_parameters,website) | [optional] |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;email&#x60; - (String) &#x60;given_name&#x60; - (String) &#x60;family_name&#x60; - (String) &#x60;company_id&#x60; - (Set[String]) &#x60;contact_ids&#x60; - (String) &#x60;start_update_time&#x60; - (String) &#x60;end_update_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;given_name%3D%3DMary&#x60; - &#x60;filter&#x3D;company_id%3D%3D123&#x60; - &#x60;filter&#x3D;company_id%3D%3D123%3Bfamily_name%3D%3DSmith&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;id&#x60; - &#x60;create_time&#x60; - &#x60;email&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListContactsResponse**](../Model/ListContactsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTagsForContact()`

```php
listTagsForContact($contact_id, $filter, $page_token, $order_by, $page_size): \Keap\Core\V2\Model\ListContactTagsResponse
```

List Applied Tags

Retrieves a list of tags applied to the specified Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Contact identifier
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name` - (String) `description` - (String) `category_id` (use `category_id==NONE` to filter tags not assigned to any category) - (String) `since_applied_time` - (String) `until_applied_time` - (String) `since_create_time` - (String) `until_create_time` - (String) `since_update_time` - (String) `until_update_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=name%3D%3DCustomer` - `filter=category_id%3D%3D123` - `filter=category_id%3D%3DNONE` - `filter=since_applied_time%3D%3D2025-04-16T20:33:02.321Z;until_applied_time%3D%3D2025-08-16T20:33:02.321Z;`
$page_token = 'page_token_example'; // string | Page token
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name` - `create_time` - `update_time` - `applied_time` - `category_id` One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page

try {
    $result = $apiInstance->listTagsForContact($contact_id, $filter, $page_token, $order_by, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->listTagsForContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| Contact identifier | |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;name&#x60; - (String) &#x60;description&#x60; - (String) &#x60;category_id&#x60; (use &#x60;category_id&#x3D;&#x3D;NONE&#x60; to filter tags not assigned to any category) - (String) &#x60;since_applied_time&#x60; - (String) &#x60;until_applied_time&#x60; - (String) &#x60;since_create_time&#x60; - (String) &#x60;until_create_time&#x60; - (String) &#x60;since_update_time&#x60; - (String) &#x60;until_update_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;name%3D%3DCustomer&#x60; - &#x60;filter&#x3D;category_id%3D%3D123&#x60; - &#x60;filter&#x3D;category_id%3D%3DNONE&#x60; - &#x60;filter&#x3D;since_applied_time%3D%3D2025-04-16T20:33:02.321Z;until_applied_time%3D%3D2025-08-16T20:33:02.321Z;&#x60; | [optional] |
| **page_token** | **string**| Page token | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;name&#x60; - &#x60;create_time&#x60; - &#x60;update_time&#x60; - &#x60;applied_time&#x60; - &#x60;category_id&#x60; One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListContactTagsResponse**](../Model/ListContactTagsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveContactModel()`

```php
retrieveContactModel(): \Keap\Core\V2\Model\ObjectModel
```

Retrieve Contact Model

Get the custom fields and optional properties for the Contact object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveContactModel();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->retrieveContactModel: ', $e->getMessage(), PHP_EOL;
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

## `unlinkContacts()`

```php
unlinkContacts($link_contacts_request)
```

Delete Link between two Contacts

Deletes Link between two Contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_contacts_request = new \Keap\Core\V2\Model\LinkContactsRequest(); // \Keap\Core\V2\Model\LinkContactsRequest

try {
    $apiInstance->unlinkContacts($link_contacts_request);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->unlinkContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_contacts_request** | [**\Keap\Core\V2\Model\LinkContactsRequest**](../Model/LinkContactsRequest.md)|  | |

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

## `updateContact()`

```php
updateContact($contact_id, $create_update_contact_request, $update_mask, $fields): \Keap\Core\V2\Model\Contact
```

Update a Contact

Updates a Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string
$create_update_contact_request = new \Keap\Core\V2\Model\CreateUpdateContactRequest(); // \Keap\Core\V2\Model\CreateUpdateContactRequest
$update_mask = 'update_mask_example'; // string | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.
$fields = array('fields_example'); // string[] | Comma-delimited list of Contact properties to include in the response. (Available fields are: addresses,anniversary_date,birth_date,company,contact_type,create_time, custom_fields,email_addresses,family_name,fax_numbers,given_name,id,job_title,leadsource_id, links,middle_name,notes,origin,owner_id,phone_numbers,preferred_locale,preferred_name,prefix, referral_code,score_value,social_accounts,source_type,spouse_name,suffix,tag_ids,time_zone, update_time,utm_parameters,website)

try {
    $result = $apiInstance->updateContact($contact_id, $create_update_contact_request, $update_mask, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**|  | |
| **create_update_contact_request** | [**\Keap\Core\V2\Model\CreateUpdateContactRequest**](../Model/CreateUpdateContactRequest.md)|  | |
| **update_mask** | **string**| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of Contact properties to include in the response. (Available fields are: addresses,anniversary_date,birth_date,company,contact_type,create_time, custom_fields,email_addresses,family_name,fax_numbers,given_name,id,job_title,leadsource_id, links,middle_name,notes,origin,owner_id,phone_numbers,preferred_locale,preferred_name,prefix, referral_code,score_value,social_accounts,source_type,spouse_name,suffix,tag_ids,time_zone, update_time,utm_parameters,website) | [optional] |

### Return type

[**\Keap\Core\V2\Model\Contact**](../Model/Contact.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
