# Keap\Core\V2\NoteApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNote()**](NoteApi.md#createNote) | **POST** /v2/contacts/{contact_id}/notes | Create a Note |
| [**createNoteCustomField()**](NoteApi.md#createNoteCustomField) | **POST** /v2/notes/model/customFields | Create a Custom Field |
| [**deleteNote()**](NoteApi.md#deleteNote) | **DELETE** /v2/contacts/{contact_id}/notes/{note_id} | Delete a Note |
| [**getNote()**](NoteApi.md#getNote) | **GET** /v2/contacts/{contact_id}/notes/{note_id} | Retrieve a Note |
| [**listNoteTemplates()**](NoteApi.md#listNoteTemplates) | **GET** /v2/notes/templates | Retrieve Note Templates |
| [**listNotes()**](NoteApi.md#listNotes) | **GET** /v2/contacts/{contact_id}/notes | List Notes |
| [**retrieveNoteModel()**](NoteApi.md#retrieveNoteModel) | **GET** /v2/notes/model | Retrieve Note Model |
| [**updateNote()**](NoteApi.md#updateNote) | **PATCH** /v2/contacts/{contact_id}/notes/{note_id} | Update a Note |
| [**updateNotesCustomField()**](NoteApi.md#updateNotesCustomField) | **PATCH** /v2/notes/model/customFields/{custom_field_id} | Update a Custom Field |


## `createNote()`

```php
createNote($contact_id, $create_note_request): \Keap\Core\V2\Model\Note
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
    $result = $apiInstance->createNote($contact_id, $create_note_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->createNote: ', $e->getMessage(), PHP_EOL;
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

## `createNoteCustomField()`

```php
createNoteCustomField($create_custom_field_request): \Keap\Core\V2\Model\CustomFieldMetaData
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
    $result = $apiInstance->createNoteCustomField($create_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->createNoteCustomField: ', $e->getMessage(), PHP_EOL;
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

## `deleteNote()`

```php
deleteNote($contact_id, $note_id)
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
    $apiInstance->deleteNote($contact_id, $note_id);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->deleteNote: ', $e->getMessage(), PHP_EOL;
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

## `getNote()`

```php
getNote($contact_id, $note_id): \Keap\Core\V2\Model\GetNoteResponse
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
    $result = $apiInstance->getNote($contact_id, $note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->getNote: ', $e->getMessage(), PHP_EOL;
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

## `listNoteTemplates()`

```php
listNoteTemplates($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListNoteTemplateResponse
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
    $result = $apiInstance->listNoteTemplates($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->listNoteTemplates: ', $e->getMessage(), PHP_EOL;
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

## `listNotes()`

```php
listNotes($contact_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListNotesResponse
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
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `assigned_to_user_id` - (String) `title` - (String) `since_time` - (String) `until_time` You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=assigned_to_user_id%3D%3DUserId` - `filter=title%3D%3DexpectedTitle` - `filter=since_time%3D%3D2025-04-16T20:33:02.321Z;` - `filter=until_time%3D%3D2025-08-16T20:33:02.321Z;`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `id` - `create_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listNotes($contact_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->listNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| contact_id | |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;assigned_to_user_id&#x60; - (String) &#x60;title&#x60; - (String) &#x60;since_time&#x60; - (String) &#x60;until_time&#x60; You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;assigned_to_user_id%3D%3DUserId&#x60; - &#x60;filter&#x3D;title%3D%3DexpectedTitle&#x60; - &#x60;filter&#x3D;since_time%3D%3D2025-04-16T20:33:02.321Z;&#x60; - &#x60;filter&#x3D;until_time%3D%3D2025-08-16T20:33:02.321Z;&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;id&#x60; - &#x60;create_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
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

## `retrieveNoteModel()`

```php
retrieveNoteModel(): \Keap\Core\V2\Model\ObjectModel
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
    $result = $apiInstance->retrieveNoteModel();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->retrieveNoteModel: ', $e->getMessage(), PHP_EOL;
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

## `updateNote()`

```php
updateNote($contact_id, $note_id, $update_note_request, $update_mask): \Keap\Core\V2\Model\UpdateNoteResponse
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
    $result = $apiInstance->updateNote($contact_id, $note_id, $update_note_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->updateNote: ', $e->getMessage(), PHP_EOL;
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

## `updateNotesCustomField()`

```php
updateNotesCustomField($custom_field_id, $update_custom_field_meta_data_request, $update_mask): \Keap\Core\V2\Model\CustomFieldMetaData
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
    $result = $apiInstance->updateNotesCustomField($custom_field_id, $update_custom_field_meta_data_request, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->updateNotesCustomField: ', $e->getMessage(), PHP_EOL;
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
