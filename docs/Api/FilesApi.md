# Keap\Core\V2\FilesApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFile()**](FilesApi.md#createFile) | **POST** /rest/v2/files | Create a file |
| [**deleteFile()**](FilesApi.md#deleteFile) | **DELETE** /rest/v2/files/{file_id} | Delete a file |
| [**getFile()**](FilesApi.md#getFile) | **GET** /rest/v2/files/{file_id} | Retrieve a file |
| [**getFileData()**](FilesApi.md#getFileData) | **GET** /rest/v2/files/{file_id}:data | Retrieve a file&#39;s data |
| [**listFiles()**](FilesApi.md#listFiles) | **GET** /rest/v2/files | List all files |
| [**updateFile()**](FilesApi.md#updateFile) | **POST** /rest/v2/files/{file_id} | Update a file |


## `createFile()`

```php
createFile($file, $file_name, $is_public, $file_association, $file2, $file_name2, $is_public2, $file_association2, $contact_id, $contact_id2): \Keap\Core\V2\Model\FileMetadata
```

Create a file

Creates a file and uploads it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | File to upload. This is a file sent as multi-part (not a string)
$file_name = 'file_name_example'; // string | File name
$is_public = True; // bool | Is public
$file_association = 'file_association_example'; // string | File association
$file2 = '/path/to/file.txt'; // \SplFileObject | File to upload
$file_name2 = 'file_name_example'; // string | File name
$is_public2 = 'is_public_example'; // string | Is public
$file_association2 = 'file_association_example'; // string | File association
$contact_id = 'contact_id_example'; // string | Contact ID
$contact_id2 = 'contact_id_example'; // string | Contact ID. Required if the `file_association` is CONTACT

try {
    $result = $apiInstance->createFile($file, $file_name, $is_public, $file_association, $file2, $file_name2, $is_public2, $file_association2, $contact_id, $contact_id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| File to upload. This is a file sent as multi-part (not a string) | |
| **file_name** | **string**| File name | |
| **is_public** | **bool**| Is public | |
| **file_association** | **string**| File association | |
| **file2** | **\SplFileObject****\SplFileObject**| File to upload | |
| **file_name2** | **string**| File name | |
| **is_public2** | **string**| Is public | |
| **file_association2** | **string**| File association | |
| **contact_id** | **string**| Contact ID | [optional] |
| **contact_id2** | **string**| Contact ID. Required if the &#x60;file_association&#x60; is CONTACT | [optional] |

### Return type

[**\Keap\Core\V2\Model\FileMetadata**](../Model/FileMetadata.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFile()`

```php
deleteFile($file_id)
```

Delete a file

Deletes a specified file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string

try {
    $apiInstance->deleteFile($file_id);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |

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

## `getFile()`

```php
getFile($file_id): \Keap\Core\V2\Model\FileMetadata
```

Retrieve a file

Retrieves a file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string

try {
    $result = $apiInstance->getFile($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\FileMetadata**](../Model/FileMetadata.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileData()`

```php
getFileData($file_id): string
```

Retrieve a file's data

Retrieves a file's data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string

try {
    $result = $apiInstance->getFileData($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFiles()`

```php
listFiles($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListFilesResponse
```

List all files

Retrieves a list of files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (Boolean) `is_public` - (String) `contact_id` - (String) `user_id` - (FileBoxCategory) `category` - (FileBoxType) `file_box_type`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. For the filters listed above, here are some examples: - `filter=contact_id%3D%3D123` - `filter=category%3D%3DATTACHMENTS` - `filter=file_box_type%3D%3DTICKET%3Bcategory%3D%3DATTACHMENTS`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `file_name` - `updated_time` - ...  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listFiles($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->listFiles: ', $e->getMessage(), PHP_EOL;
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

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFile()`

```php
updateFile($file_id, $update_mask, $file, $file_name, $is_public, $file2, $file_name2, $is_public2): \Keap\Core\V2\Model\FileMetadata
```

Update a file

Updates a file. Note that this endpoint is using a POST method instead of PATCH.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string
$update_mask = NULL; // mixed | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.
$file = '/path/to/file.txt'; // \SplFileObject | File to upload. This is a file sent as multi-part (not a string)
$file_name = 'file_name_example'; // string | File name
$is_public = True; // bool | Is public
$file2 = '/path/to/file.txt'; // \SplFileObject | File to upload
$file_name2 = 'file_name_example'; // string | File name
$is_public2 = True; // bool | Is public

try {
    $result = $apiInstance->updateFile($file_id, $update_mask, $file, $file_name, $is_public, $file2, $file_name2, $is_public2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->updateFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **update_mask** | [**mixed**](../Model/.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| File to upload. This is a file sent as multi-part (not a string) | [optional] |
| **file_name** | **string**| File name | [optional] |
| **is_public** | **bool**| Is public | [optional] |
| **file2** | **\SplFileObject****\SplFileObject**| File to upload | [optional] |
| **file_name2** | **string**| File name | [optional] |
| **is_public2** | **bool**| Is public | [optional] |

### Return type

[**\Keap\Core\V2\Model\FileMetadata**](../Model/FileMetadata.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
