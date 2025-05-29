# Keap\Core\V2\DealsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeal()**](DealsApi.md#createDeal) | **POST** /v2/deals | Creates a new deal. |
| [**createNote()**](DealsApi.md#createNote) | **POST** /v2/deals/{id}/notes | Creates a new note for a specific deal. |
| [**createNotesBulk()**](DealsApi.md#createNotesBulk) | **POST** /v2/deals/-/notes | Creates new notes in bulk. |
| [**deleteDeal()**](DealsApi.md#deleteDeal) | **DELETE** /v2/deals/{id} | Deletes a specific deal by its ID. |
| [**deleteNote()**](DealsApi.md#deleteNote) | **DELETE** /v2/deals/-/notes/{note_id} | Deletes a specific deal note by its ID. |
| [**getDeal()**](DealsApi.md#getDeal) | **GET** /v2/deals/{id} | Retrieves a specific deal by its ID. |
| [**getNote()**](DealsApi.md#getNote) | **GET** /v2/deals/-/notes/{note_id} | Retrieves a specific deal note by its ID. |
| [**listDeals()**](DealsApi.md#listDeals) | **GET** /v2/deals/-/contacts/{contact_id} | Lists all deals associated with a specific contact. |
| [**listNotes()**](DealsApi.md#listNotes) | **GET** /v2/deals/{id}/notes | Lists all notes associated with a specific deal. |
| [**moveDealsForContacts()**](DealsApi.md#moveDealsForContacts) | **POST** /v2/deals/moveByContactIds | Moves the active deals of specified contacts from one stage to another, in bulk. |
| [**updateNote()**](DealsApi.md#updateNote) | **PATCH** /v2/deals/-/notes/{note_id} | Updates a specific deal note by its ID. |


## `createDeal()`

```php
createDeal($create_deal_request): \Keap\Core\V2\Model\Deal
```

Creates a new deal.

Creates a new deal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_deal_request = new \Keap\Core\V2\Model\CreateDealRequest(); // \Keap\Core\V2\Model\CreateDealRequest | the request body containing deal details

try {
    $result = $apiInstance->createDeal($create_deal_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->createDeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_deal_request** | [**\Keap\Core\V2\Model\CreateDealRequest**](../Model/CreateDealRequest.md)| the request body containing deal details | |

### Return type

[**\Keap\Core\V2\Model\Deal**](../Model/Deal.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNote()`

```php
createNote($id, $create_deal_note_request): \Keap\Core\V2\Model\DealNote
```

Creates a new note for a specific deal.

Creates a new note for a specific deal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | the deal ID to associate the new note with
$create_deal_note_request = new \Keap\Core\V2\Model\CreateDealNoteRequest(); // \Keap\Core\V2\Model\CreateDealNoteRequest | the request body containing note details

try {
    $result = $apiInstance->createNote($id, $create_deal_note_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->createNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| the deal ID to associate the new note with | |
| **create_deal_note_request** | [**\Keap\Core\V2\Model\CreateDealNoteRequest**](../Model/CreateDealNoteRequest.md)| the request body containing note details | |

### Return type

[**\Keap\Core\V2\Model\DealNote**](../Model/DealNote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNotesBulk()`

```php
createNotesBulk($bulk_create_deal_notes_request): \Keap\Core\V2\Model\BulkCreateDealNotesResponse
```

Creates new notes in bulk.

Creates new notes in bulk.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bulk_create_deal_notes_request = new \Keap\Core\V2\Model\BulkCreateDealNotesRequest(); // \Keap\Core\V2\Model\BulkCreateDealNotesRequest | the request body containing note details

try {
    $result = $apiInstance->createNotesBulk($bulk_create_deal_notes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->createNotesBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_create_deal_notes_request** | [**\Keap\Core\V2\Model\BulkCreateDealNotesRequest**](../Model/BulkCreateDealNotesRequest.md)| the request body containing note details | |

### Return type

[**\Keap\Core\V2\Model\BulkCreateDealNotesResponse**](../Model/BulkCreateDealNotesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDeal()`

```php
deleteDeal($id)
```

Deletes a specific deal by its ID.

Deletes a specific deal by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | the ID of the deal to delete

try {
    $apiInstance->deleteDeal($id);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->deleteDeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| the ID of the deal to delete | |

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

## `deleteNote()`

```php
deleteNote($note_id)
```

Deletes a specific deal note by its ID.

Deletes a specific deal note by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$note_id = 'note_id_example'; // string | the ID of the note to delete

try {
    $apiInstance->deleteNote($note_id);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->deleteNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **note_id** | **string**| the ID of the note to delete | |

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

## `getDeal()`

```php
getDeal($id): \Keap\Core\V2\Model\Deal
```

Retrieves a specific deal by its ID.

Retrieves a specific deal by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | the ID of the deal to retrieve

try {
    $result = $apiInstance->getDeal($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->getDeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| the ID of the deal to retrieve | |

### Return type

[**\Keap\Core\V2\Model\Deal**](../Model/Deal.md)

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
getNote($note_id): \Keap\Core\V2\Model\DealNote
```

Retrieves a specific deal note by its ID.

Retrieves a specific deal note by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$note_id = 'note_id_example'; // string | the ID of the note to retrieve

try {
    $result = $apiInstance->getNote($note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->getNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **note_id** | **string**| the ID of the note to retrieve | |

### Return type

[**\Keap\Core\V2\Model\DealNote**](../Model/DealNote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDeals()`

```php
listDeals($contact_id, $filter, $page_token, $order_by, $page_size): \Keap\Core\V2\Model\DealListResponse
```

Lists all deals associated with a specific contact.

Lists all deals associated with a specific contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | the contact ID to list deals for
$filter = 'filter_example'; // string
$page_token = 'page_token_example'; // string
$order_by = 'order_by_example'; // string
$page_size = 100; // int

try {
    $result = $apiInstance->listDeals($contact_id, $filter, $page_token, $order_by, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->listDeals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| the contact ID to list deals for | |
| **filter** | **string**|  | [optional] |
| **page_token** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 1000] |

### Return type

[**\Keap\Core\V2\Model\DealListResponse**](../Model/DealListResponse.md)

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
listNotes($id, $filter, $page_token, $order_by, $page_size): \Keap\Core\V2\Model\DealNoteListResponse
```

Lists all notes associated with a specific deal.

Lists all notes associated with a specific deal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | the deal ID to list notes for
$filter = 'filter_example'; // string
$page_token = 'page_token_example'; // string
$order_by = 'order_by_example'; // string
$page_size = 100; // int

try {
    $result = $apiInstance->listNotes($id, $filter, $page_token, $order_by, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->listNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| the deal ID to list notes for | |
| **filter** | **string**|  | [optional] |
| **page_token** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **page_size** | **int**|  | [optional] [default to 1000] |

### Return type

[**\Keap\Core\V2\Model\DealNoteListResponse**](../Model/DealNoteListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveDealsForContacts()`

```php
moveDealsForContacts($move_deals_for_contacts_request): \Keap\Core\V2\Model\MoveDealsForContactsResponse
```

Moves the active deals of specified contacts from one stage to another, in bulk.

Moves the active deals of specified contacts from one stage to another, in bulk.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$move_deals_for_contacts_request = new \Keap\Core\V2\Model\MoveDealsForContactsRequest(); // \Keap\Core\V2\Model\MoveDealsForContactsRequest | the request body containing move details

try {
    $result = $apiInstance->moveDealsForContacts($move_deals_for_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->moveDealsForContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **move_deals_for_contacts_request** | [**\Keap\Core\V2\Model\MoveDealsForContactsRequest**](../Model/MoveDealsForContactsRequest.md)| the request body containing move details | |

### Return type

[**\Keap\Core\V2\Model\MoveDealsForContactsResponse**](../Model/MoveDealsForContactsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNote()`

```php
updateNote($note_id, $update_deal_note_request): \Keap\Core\V2\Model\DealNote
```

Updates a specific deal note by its ID.

Updates a specific deal note by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$note_id = 'note_id_example'; // string | the ID of the note to update
$update_deal_note_request = new \Keap\Core\V2\Model\UpdateDealNoteRequest(); // \Keap\Core\V2\Model\UpdateDealNoteRequest | the request body containing updated note details

try {
    $result = $apiInstance->updateNote($note_id, $update_deal_note_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->updateNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **note_id** | **string**| the ID of the note to update | |
| **update_deal_note_request** | [**\Keap\Core\V2\Model\UpdateDealNoteRequest**](../Model/UpdateDealNoteRequest.md)| the request body containing updated note details | |

### Return type

[**\Keap\Core\V2\Model\DealNote**](../Model/DealNote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
