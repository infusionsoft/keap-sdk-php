# Keap\Core\V2\NoteApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNoteCustomFieldUsingPOST1()**](NoteApi.md#createNoteCustomFieldUsingPOST1) | **POST** /v2/notes/model/customFields | Create a Custom Field |
| [**createNoteUsingPOST1()**](NoteApi.md#createNoteUsingPOST1) | **POST** /v2/contacts/{contact_id}/notes | Create a Note |
| [**deleteNoteUsingDELETE1()**](NoteApi.md#deleteNoteUsingDELETE1) | **DELETE** /v2/contacts/{contact_id}/notes/{note_id} | Delete a Note |
| [**getNoteUsingGET1()**](NoteApi.md#getNoteUsingGET1) | **GET** /v2/contacts/{contact_id}/notes/{note_id} | Retrieve a Note |
| [**listNoteTemplatesUsingGET()**](NoteApi.md#listNoteTemplatesUsingGET) | **GET** /v2/notes/templates | Retrieve Note Templates |
| [**listNotesUsingGET1()**](NoteApi.md#listNotesUsingGET1) | **GET** /v2/contacts/{contact_id}/notes | List Notes |
| [**retrieveNoteModelUsingGET1()**](NoteApi.md#retrieveNoteModelUsingGET1) | **GET** /v2/notes/model | Retrieve Note Model |
| [**updateNoteUsingPATCH()**](NoteApi.md#updateNoteUsingPATCH) | **PATCH** /v2/contacts/{contact_id}/notes/{note_id} | Update a Note |
| [**updateNotesCustomFieldUsingPATCH()**](NoteApi.md#updateNotesCustomFieldUsingPATCH) | **PATCH** /v2/notes/model/customFields/{custom_field_id} | Update a Custom Field |


## `createNoteCustomFieldUsingPOST1()`

```php
createNoteCustomFieldUsingPOST1($create_custom_field_request): \Keap\Core\V2\Model\CustomFieldMetaData
```

Create a Custom Field

Creates a custom field of the specified type and options to the Note object<br/>Note: Custom Fields for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_custom_field_request = new \Keap\Core\V2\Model\CreateCustomFieldRequest(); // \Keap\Core\V2\Model\CreateCustomFieldRequest | customField

try {
    $result = $apiInstance->createNoteCustomFieldUsingPOST1($create_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->createNoteCustomFieldUsingPOST1: ', $e->getMessage(), PHP_EOL;
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

## `createNoteUsingPOST1()`

```php
createNoteUsingPOST1($contact_id, $create_note_request): \Keap\Core\V2\Model\Note
```

Create a Note

Creates a new Note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | contact_id
$create_note_request = new \Keap\Core\V2\Model\CreateNoteRequest(); // \Keap\Core\V2\Model\CreateNoteRequest | request

try {
    $result = $apiInstance->createNoteUsingPOST1($contact_id, $create_note_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->createNoteUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| contact_id | |
| **create_note_request** | [**\Keap\Core\V2\Model\CreateNoteRequest**](../Model/CreateNoteRequest.md)| request | |

### Return type

[**\Keap\Core\V2\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNoteUsingDELETE1()`

```php
deleteNoteUsingDELETE1($contact_id, $note_id)
```

Delete a Note

Deletes the specified Note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | contact_id
$note_id = 'note_id_example'; // string | note_id

try {
    $apiInstance->deleteNoteUsingDELETE1($contact_id, $note_id);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->deleteNoteUsingDELETE1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| contact_id | |
| **note_id** | **string**| note_id | |

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

## `getNoteUsingGET1()`

```php
getNoteUsingGET1($contact_id, $note_id): \Keap\Core\V2\Model\GetNoteResponse
```

Retrieve a Note

Retrieves the specified Note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | contact_id
$note_id = 'note_id_example'; // string | note_id

try {
    $result = $apiInstance->getNoteUsingGET1($contact_id, $note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->getNoteUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| contact_id | |
| **note_id** | **string**| note_id | |

### Return type

[**\Keap\Core\V2\Model\GetNoteResponse**](../Model/GetNoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNoteTemplatesUsingGET()`

```php
listNoteTemplatesUsingGET($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListNoteTemplateResponse
```

Retrieve Note Templates

Retrieves a list of Note Templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Search filter to apply to results
$order_by = 'order_by_example'; // string | Attribute and direction to order items by. E.g. `given_name desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listNoteTemplatesUsingGET($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->listNoteTemplatesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Search filter to apply to results | [optional] |
| **order_by** | **string**| Attribute and direction to order items by. E.g. &#x60;given_name desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListNoteTemplateResponse**](../Model/ListNoteTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNotesUsingGET1()`

```php
listNotesUsingGET1($contact_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListNotesResponse
```

List Notes

Retrieves a list of Notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | contact_id
$filter = 'filter_example'; // string | Search filter to apply to results
$order_by = 'order_by_example'; // string | Attribute and direction to order items by. E.g. `given_name desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listNotesUsingGET1($contact_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->listNotesUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| contact_id | |
| **filter** | **string**| Search filter to apply to results | [optional] |
| **order_by** | **string**| Attribute and direction to order items by. E.g. &#x60;given_name desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListNotesResponse**](../Model/ListNotesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveNoteModelUsingGET1()`

```php
retrieveNoteModelUsingGET1(): \Keap\Core\V2\Model\ObjectModel
```

Retrieve Note Model

Gets the custom fields for the Note object<br/>Note: Custom Fields for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->retrieveNoteModelUsingGET1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->retrieveNoteModelUsingGET1: ', $e->getMessage(), PHP_EOL;
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

## `updateNoteUsingPATCH()`

```php
updateNoteUsingPATCH($contact_id, $note_id, $update_note_request, $update_mask): \Keap\Core\V2\Model\UpdateNoteResponse
```

Update a Note

Updates a Note for a Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | contact_id
$note_id = 'note_id_example'; // string | note_id
$update_note_request = new \Keap\Core\V2\Model\UpdateNoteRequest(); // \Keap\Core\V2\Model\UpdateNoteRequest | updateNoteRequest
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateNoteUsingPATCH($contact_id, $note_id, $update_note_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->updateNoteUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| contact_id | |
| **note_id** | **string**| note_id | |
| **update_note_request** | [**\Keap\Core\V2\Model\UpdateNoteRequest**](../Model/UpdateNoteRequest.md)| updateNoteRequest | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |

### Return type

[**\Keap\Core\V2\Model\UpdateNoteResponse**](../Model/UpdateNoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNotesCustomFieldUsingPATCH()`

```php
updateNotesCustomFieldUsingPATCH($custom_field_id, $update_custom_field_meta_data_request, $update_mask): \Keap\Core\V2\Model\CustomFieldMetaData
```

Update a Custom Field

Updates a custom field of the specified type and options to the Note object<br/>Note: Custom Fields for Tasks, Classic Appointments and Notes are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_field_id = 'custom_field_id_example'; // string | custom_field_id
$update_custom_field_meta_data_request = new \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest(); // \Keap\Core\V2\Model\UpdateCustomFieldMetaDataRequest | request
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.

try {
    $result = $apiInstance->updateNotesCustomFieldUsingPATCH($custom_field_id, $update_custom_field_meta_data_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->updateNotesCustomFieldUsingPATCH: ', $e->getMessage(), PHP_EOL;
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
