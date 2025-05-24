# Keap\Core\V2\ContactApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContactLinkTypeUsingPOST()**](ContactApi.md#createContactLinkTypeUsingPOST) | **POST** /v2/contacts/links/types | Create a Contact Link type |
| [**createContactUsingPOST1()**](ContactApi.md#createContactUsingPOST1) | **POST** /v2/contacts | Create a Contact |
| [**deleteContactUsingDELETE1()**](ContactApi.md#deleteContactUsingDELETE1) | **DELETE** /v2/contacts/{contact_id} | Delete a Contact |
| [**getContactUsingGET1()**](ContactApi.md#getContactUsingGET1) | **GET** /v2/contacts/{contact_id} | Retrieve a Contact |
| [**linkContactsUsingPOST()**](ContactApi.md#linkContactsUsingPOST) | **POST** /v2/contacts:link | Link Contacts |
| [**listContactLinkTypesUsingGET()**](ContactApi.md#listContactLinkTypesUsingGET) | **GET** /v2/contacts/links/types | List Contact Link types |
| [**listContactLinksUsingGET()**](ContactApi.md#listContactLinksUsingGET) | **GET** /v2/contacts/{contact_id}/links | List Linked Contacts |
| [**listContactsUsingGET1()**](ContactApi.md#listContactsUsingGET1) | **GET** /v2/contacts | List Contacts |
| [**retrieveContactModelUsingGET1()**](ContactApi.md#retrieveContactModelUsingGET1) | **GET** /v2/contacts/model | Retrieve Contact Model |
| [**unlinkContactsUsingPOST()**](ContactApi.md#unlinkContactsUsingPOST) | **POST** /v2/contacts:unlink | Delete Link between two Contacts |
| [**updateContactUsingPATCH()**](ContactApi.md#updateContactUsingPATCH) | **PATCH** /v2/contacts/{contact_id} | Update a Contact |


## `createContactLinkTypeUsingPOST()`

```php
createContactLinkTypeUsingPOST($create_contact_link_type_request): \Keap\Core\V2\Model\ContactLinkType
```

Create a Contact Link type

Creates a new type of Contact Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_contact_link_type_request = new \Keap\Core\V2\Model\CreateContactLinkTypeRequest(); // \Keap\Core\V2\Model\CreateContactLinkTypeRequest | request

try {
    $result = $apiInstance->createContactLinkTypeUsingPOST($create_contact_link_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContactLinkTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_contact_link_type_request** | [**\Keap\Core\V2\Model\CreateContactLinkTypeRequest**](../Model/CreateContactLinkTypeRequest.md)| request | |

### Return type

[**\Keap\Core\V2\Model\ContactLinkType**](../Model/ContactLinkType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createContactUsingPOST1()`

```php
createContactUsingPOST1($create_update_contact_request): \Keap\Core\V2\Model\Contact
```

Create a Contact

Creates a new Contact. *Note:* Contact must contain at least one item in `email_addresses` or `phone_numbers` and `country_code` is required if `region` is specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_update_contact_request = new \Keap\Core\V2\Model\CreateUpdateContactRequest(); // \Keap\Core\V2\Model\CreateUpdateContactRequest | contact

try {
    $result = $apiInstance->createContactUsingPOST1($create_update_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContactUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_update_contact_request** | [**\Keap\Core\V2\Model\CreateUpdateContactRequest**](../Model/CreateUpdateContactRequest.md)| contact | [optional] |

### Return type

[**\Keap\Core\V2\Model\Contact**](../Model/Contact.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContactUsingDELETE1()`

```php
deleteContactUsingDELETE1($contact_id)
```

Delete a Contact

Deletes the specified Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | contact_id

try {
    $apiInstance->deleteContactUsingDELETE1($contact_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deleteContactUsingDELETE1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| contact_id | |

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

## `getContactUsingGET1()`

```php
getContactUsingGET1($contact_id, $fields): \Keap\Core\V2\Model\Contact
```

Retrieve a Contact

Retrieves a single Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | contact_id
$fields = array('fields_example'); // string[] | Comma-delimited list of Contact properties to include in the response. (Available fields are: addresses,anniversary_date,birth_date,company,contact_type,create_time, custom_fields,email_addresses,family_name,fax_numbers,given_name,id,job_title,leadsource_id, links,middle_name,notes,origin,owner_id,phone_numbers,preferred_locale,preferred_name,prefix, referral_code,score_value,social_accounts,source_type,spouse_name,suffix,tag_ids,time_zone, update_date,update_time,utm_parameters,website)

try {
    $result = $apiInstance->getContactUsingGET1($contact_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| contact_id | |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of Contact properties to include in the response. (Available fields are: addresses,anniversary_date,birth_date,company,contact_type,create_time, custom_fields,email_addresses,family_name,fax_numbers,given_name,id,job_title,leadsource_id, links,middle_name,notes,origin,owner_id,phone_numbers,preferred_locale,preferred_name,prefix, referral_code,score_value,social_accounts,source_type,spouse_name,suffix,tag_ids,time_zone, update_date,update_time,utm_parameters,website) | [optional] |

### Return type

[**\Keap\Core\V2\Model\Contact**](../Model/Contact.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkContactsUsingPOST()`

```php
linkContactsUsingPOST($link_contacts_request): \Keap\Core\V2\Model\ContactLink
```

Link Contacts

Links two Contacts together using the provided Link type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$link_contacts_request = new \Keap\Core\V2\Model\LinkContactsRequest(); // \Keap\Core\V2\Model\LinkContactsRequest | linkContactsRequest

try {
    $result = $apiInstance->linkContactsUsingPOST($link_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->linkContactsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_contacts_request** | [**\Keap\Core\V2\Model\LinkContactsRequest**](../Model/LinkContactsRequest.md)| linkContactsRequest | |

### Return type

[**\Keap\Core\V2\Model\ContactLink**](../Model/ContactLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactLinkTypesUsingGET()`

```php
listContactLinkTypesUsingGET($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListContactLinkTypesResponse
```

List Contact Link types

Retrieves a list of Contact Link types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Search filter to apply to results. Formatted as (unencoded) ?filter=name==expectedValue
$order_by = 'order_by_example'; // string
$page_size = 56; // int
$page_token = 'page_token_example'; // string

try {
    $result = $apiInstance->listContactLinkTypesUsingGET($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->listContactLinkTypesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Search filter to apply to results. Formatted as (unencoded) ?filter&#x3D;name&#x3D;&#x3D;expectedValue | [optional] |
| **order_by** | **string**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **page_token** | **string**|  | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListContactLinkTypesResponse**](../Model/ListContactLinkTypesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactLinksUsingGET()`

```php
listContactLinksUsingGET($contact_id): \Keap\Core\V2\Model\ListContactLinksResponse
```

List Linked Contacts

Retrieves a list of Linked Contacts for a given Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | contact_id

try {
    $result = $apiInstance->listContactLinksUsingGET($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->listContactLinksUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| contact_id | |

### Return type

[**\Keap\Core\V2\Model\ListContactLinksResponse**](../Model/ListContactLinksResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactsUsingGET1()`

```php
listContactsUsingGET1($fields, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListContactsResponse
```

List Contacts

Retrieves a list of Contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = array('fields_example'); // string[] | Comma-delimited list of Contact properties to include in the response. (Available fields are: addresses,anniversary_date,birth_date,company,contact_type,create_time, custom_fields,email_addresses,family_name,fax_numbers,given_name,id,job_title,leadsource_id, links,middle_name,notes,origin,owner_id,phone_numbers,preferred_locale,preferred_name,prefix, referral_code,score_value,social_accounts,source_type,spouse_name,suffix,tag_ids,time_zone, update_date,update_time,utm_parameters,website)
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `email` - (String) `given_name` - (String) `family_name` - (String) `company_id` - (Set[String]) `contact_ids` - (String) `start_update_time` - (String) `end_update_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=given_name%3D%3DMary` - `filter=company_id%3D%3D123` - `filter=company_id%3D%3D123%3Bfamily_name%3D%3DSmith`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `id` - `date_created` - `email`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listContactsUsingGET1($fields, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->listContactsUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of Contact properties to include in the response. (Available fields are: addresses,anniversary_date,birth_date,company,contact_type,create_time, custom_fields,email_addresses,family_name,fax_numbers,given_name,id,job_title,leadsource_id, links,middle_name,notes,origin,owner_id,phone_numbers,preferred_locale,preferred_name,prefix, referral_code,score_value,social_accounts,source_type,spouse_name,suffix,tag_ids,time_zone, update_date,update_time,utm_parameters,website) | [optional] |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;email&#x60; - (String) &#x60;given_name&#x60; - (String) &#x60;family_name&#x60; - (String) &#x60;company_id&#x60; - (Set[String]) &#x60;contact_ids&#x60; - (String) &#x60;start_update_time&#x60; - (String) &#x60;end_update_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;given_name%3D%3DMary&#x60; - &#x60;filter&#x3D;company_id%3D%3D123&#x60; - &#x60;filter&#x3D;company_id%3D%3D123%3Bfamily_name%3D%3DSmith&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;id&#x60; - &#x60;date_created&#x60; - &#x60;email&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListContactsResponse**](../Model/ListContactsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveContactModelUsingGET1()`

```php
retrieveContactModelUsingGET1(): \Keap\Core\V2\Model\ObjectModel
```

Retrieve Contact Model

Get the custom fields and optional properties for the Contact object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->retrieveContactModelUsingGET1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->retrieveContactModelUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\ObjectModel**](../Model/ObjectModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlinkContactsUsingPOST()`

```php
unlinkContactsUsingPOST($link_contacts_request)
```

Delete Link between two Contacts

Deletes Link between two Contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$link_contacts_request = new \Keap\Core\V2\Model\LinkContactsRequest(); // \Keap\Core\V2\Model\LinkContactsRequest | linkContactsRequest

try {
    $apiInstance->unlinkContactsUsingPOST($link_contacts_request);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->unlinkContactsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_contacts_request** | [**\Keap\Core\V2\Model\LinkContactsRequest**](../Model/LinkContactsRequest.md)| linkContactsRequest | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContactUsingPATCH()`

```php
updateContactUsingPATCH($contact_id, $update_mask, $create_update_contact_request): \Keap\Core\V2\Model\Contact
```

Update a Contact

Updates a Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | contact_id
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.
$create_update_contact_request = new \Keap\Core\V2\Model\CreateUpdateContactRequest(); // \Keap\Core\V2\Model\CreateUpdateContactRequest | contact

try {
    $result = $apiInstance->updateContactUsingPATCH($contact_id, $update_mask, $create_update_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContactUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| contact_id | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |
| **create_update_contact_request** | [**\Keap\Core\V2\Model\CreateUpdateContactRequest**](../Model/CreateUpdateContactRequest.md)| contact | [optional] |

### Return type

[**\Keap\Core\V2\Model\Contact**](../Model/Contact.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
