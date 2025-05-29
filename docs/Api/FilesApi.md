# Keap\Core\V2\FilesApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFileUsingPOST1()**](FilesApi.md#createFileUsingPOST1) | **POST** /v2/files | Create a file |
| [**deleteFileUsingDELETE1()**](FilesApi.md#deleteFileUsingDELETE1) | **DELETE** /v2/files/{file_id} | Delete a file |
| [**getFileDataUsingGET()**](FilesApi.md#getFileDataUsingGET) | **GET** /v2/files/{file_id}:data | Retrieve a file&#39;s data |
| [**getFileUsingGET1()**](FilesApi.md#getFileUsingGET1) | **GET** /v2/files/{file_id} | Retrieve a file |
| [**listFilesUsingGET1()**](FilesApi.md#listFilesUsingGET1) | **GET** /v2/files | List all files |
| [**updateFileUsingPOST()**](FilesApi.md#updateFileUsingPOST) | **POST** /v2/files/{file_id} | Update a file |


## `createFileUsingPOST1()`

```php
createFileUsingPOST1($file, $file_association, $file_name, $is_public, $contact_id): \Keap\Core\V2\Model\FileMetadata
```

Create a file

Creates a file and uploads it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = 'file_example'; // string | File to upload. This is a file sent as multi-part (not a string)
$file_association = 'file_association_example'; // string | File association
$file_name = 'file_name_example'; // string | File name
$is_public = True; // bool | Is public
$contact_id = 'contact_id_example'; // string | Contact ID

try {
    $result = $apiInstance->createFileUsingPOST1($file, $file_association, $file_name, $is_public, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFileUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **string**| File to upload. This is a file sent as multi-part (not a string) | |
| **file_association** | **string**| File association | |
| **file_name** | **string**| File name | |
| **is_public** | **bool**| Is public | |
| **contact_id** | **string**| Contact ID | [optional] |

### Return type

[**\Keap\Core\V2\Model\FileMetadata**](../Model/FileMetadata.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFileUsingDELETE1()`

```php
deleteFileUsingDELETE1($file_id)
```

Delete a file

Deletes a specified file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string | file_id

try {
    $apiInstance->deleteFileUsingDELETE1($file_id);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFileUsingDELETE1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**| file_id | |

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

## `getFileDataUsingGET()`

```php
getFileDataUsingGET($file_id): string
```

Retrieve a file's data

Retrieves a file's data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string | file_id

try {
    $result = $apiInstance->getFileDataUsingGET($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileDataUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**| file_id | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileUsingGET1()`

```php
getFileUsingGET1($file_id): \Keap\Core\V2\Model\FileMetadata
```

Retrieve a file

Retrieves a file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string | file_id

try {
    $result = $apiInstance->getFileUsingGET1($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**| file_id | |

### Return type

[**\Keap\Core\V2\Model\FileMetadata**](../Model/FileMetadata.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFilesUsingGET1()`

```php
listFilesUsingGET1($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListFilesResponse
```

List all files

Retrieves a list of files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (Boolean) `is_public` - (String) `contact_id` - (String) `user_id` - (FileBoxCategory) `category` - (FileBoxType) `file_box_type`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=contact_id%3D%3D123` - `filter=category%3D%3DATTACHMENTS` - `filter=file_box_type%3D%3DTICKET%3Bcategory%3D%3DATTACHMENTS`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `file_name` - `updated_time` - ...  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listFilesUsingGET1($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->listFilesUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (Boolean) &#x60;is_public&#x60; - (String) &#x60;contact_id&#x60; - (String) &#x60;user_id&#x60; - (FileBoxCategory) &#x60;category&#x60; - (FileBoxType) &#x60;file_box_type&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. For the filters listed above, here are some examples: - &#x60;filter&#x3D;contact_id%3D%3D123&#x60; - &#x60;filter&#x3D;category%3D%3DATTACHMENTS&#x60; - &#x60;filter&#x3D;file_box_type%3D%3DTICKET%3Bcategory%3D%3DATTACHMENTS&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;file_name&#x60; - &#x60;updated_time&#x60; - ...  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListFilesResponse**](../Model/ListFilesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFileUsingPOST()`

```php
updateFileUsingPOST($file_id, $file, $file_name, $is_public, $update_mask): \Keap\Core\V2\Model\FileMetadata
```

Update a file

Updates a file. Note that this endpoint is using a POST method instead of PATCH.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 'file_id_example'; // string | file_id
$file = 'file_example'; // string | File to upload. This is a file sent as multi-part (not a string)
$file_name = 'file_name_example'; // string | File name
$is_public = True; // bool | Is public
$update_mask = 'update_mask_example'; // string | Update Mask

try {
    $result = $apiInstance->updateFileUsingPOST($file_id, $file, $file_name, $is_public, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->updateFileUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**| file_id | |
| **file** | **string**| File to upload. This is a file sent as multi-part (not a string) | [optional] |
| **file_name** | **string**| File name | [optional] |
| **is_public** | **bool**| Is public | [optional] |
| **update_mask** | **string**| Update Mask | [optional] |

### Return type

[**\Keap\Core\V2\Model\FileMetadata**](../Model/FileMetadata.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
