# Keap\Core\V2\FilesApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFile()**](FilesApi.md#createFile) | **POST** /rest/v2/files | Create a file |
| [**deleteFile()**](FilesApi.md#deleteFile) | **DELETE** /rest/v2/files/{file_id} | Delete a file |
| [**getFile()**](FilesApi.md#getFile) | **GET** /rest/v2/files/{file_id} | Retrieve a file |
| [**getFileData1()**](FilesApi.md#getFileData1) | **GET** /rest/v2/files/{file_id}:data | Retrieve a file&#39;s data |
| [**listFiles()**](FilesApi.md#listFiles) | **GET** /rest/v2/files | List all files |
| [**updateFile()**](FilesApi.md#updateFile) | **POST** /rest/v2/files/{file_id} | Update a file |


## `createFile()`

```php
createFile($file, $file_name, $file_association, $contact_id, $is_public): \Keap\Core\V2\Model\FileMetadata
```

Create a file

Uploads a file using multipart/form-data. The `file` part contains the binary file content; `file_name`, `is_public`, `file_association`, and optionally `contact_id` are additional text parts in the same multipart request. Sending these as URL query parameters is not supported.

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
$file = '/path/to/file.txt'; // \SplFileObject | File to upload
$file_name = 'file_name_example'; // string | File name
$file_association = 'file_association_example'; // string | File association
$contact_id = 'contact_id_example'; // string | Contact ID. Required if the `file_association` is CONTACT
$is_public = 'is_public_example'; // string | Is public

try {
    $result = $apiInstance->createFile($file, $file_name, $file_association, $contact_id, $is_public);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| File to upload | |
| **file_name** | **string**| File name | |
| **file_association** | **string**| File association | |
| **contact_id** | **string**| Contact ID. Required if the &#x60;file_association&#x60; is CONTACT | [optional] |
| **is_public** | **string**| Is public | [optional] |

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

## `getFileData1()`

```php
getFileData1($file_id): string
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
    $result = $apiInstance->getFileData1($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileData1: ', $e->getMessage(), PHP_EOL;
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
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (Boolean) `is_public` — `true` (public) or `false` (private) - (String) `contact_id` - (String) `user_id` - (FileBoxCategory) `category` — one of: `ATTACHMENTS`, `CART`, `DOCUMENTS`, `HIDDEN`, `INVOICE`, `LOGO`, `TICKETS`, `WEB_FORM`, `FUNNEL` - (FileBoxType) `file_box_type` — one of: `APPLICATION`, `IMAGE`, `FAX`, `ATTACHMENT`, `TICKET`, `CONTACT`, `DIGITAL_PRODUCT`, `IMPORT`, `HIDDEN`, `WEB_FORM`, `STYLED_CART`, `RESAMPLED_IMAGE`, `TEMPLATE_THUMBNAIL`, `FUNNEL`, `LOGO_THUMBNAIL`, `UNLAYER`, `BRANDING_CENTER_LOGO` - (String) `file_name` - (String) `created_time` - (String) `updated_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. Multiple filters are combined with a semicolon (`;`, encoded `%3B`) and are ANDed together. For the filters listed above, here are some examples: - `filter=contact_id%3D%3D123` - `filter=is_public%3D%3Dfalse` - `filter=category%3D%3DDOCUMENTS` - `filter=file_box_type%3D%3DTICKET%3Bcategory%3D%3DATTACHMENTS` - `filter=file_box_type%3D%3DCONTACT%3Bis_public%3D%3Dfalse`
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
| **filter** | **string**| Filter to apply, allowed fields are: - (Boolean) &#x60;is_public&#x60; — &#x60;true&#x60; (public) or &#x60;false&#x60; (private) - (String) &#x60;contact_id&#x60; - (String) &#x60;user_id&#x60; - (FileBoxCategory) &#x60;category&#x60; — one of: &#x60;ATTACHMENTS&#x60;, &#x60;CART&#x60;, &#x60;DOCUMENTS&#x60;, &#x60;HIDDEN&#x60;, &#x60;INVOICE&#x60;, &#x60;LOGO&#x60;, &#x60;TICKETS&#x60;, &#x60;WEB_FORM&#x60;, &#x60;FUNNEL&#x60; - (FileBoxType) &#x60;file_box_type&#x60; — one of: &#x60;APPLICATION&#x60;, &#x60;IMAGE&#x60;, &#x60;FAX&#x60;, &#x60;ATTACHMENT&#x60;, &#x60;TICKET&#x60;, &#x60;CONTACT&#x60;, &#x60;DIGITAL_PRODUCT&#x60;, &#x60;IMPORT&#x60;, &#x60;HIDDEN&#x60;, &#x60;WEB_FORM&#x60;, &#x60;STYLED_CART&#x60;, &#x60;RESAMPLED_IMAGE&#x60;, &#x60;TEMPLATE_THUMBNAIL&#x60;, &#x60;FUNNEL&#x60;, &#x60;LOGO_THUMBNAIL&#x60;, &#x60;UNLAYER&#x60;, &#x60;BRANDING_CENTER_LOGO&#x60; - (String) &#x60;file_name&#x60; - (String) &#x60;created_time&#x60; - (String) &#x60;updated_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. Multiple filters are combined with a semicolon (&#x60;;&#x60;, encoded &#x60;%3B&#x60;) and are ANDed together. For the filters listed above, here are some examples: - &#x60;filter&#x3D;contact_id%3D%3D123&#x60; - &#x60;filter&#x3D;is_public%3D%3Dfalse&#x60; - &#x60;filter&#x3D;category%3D%3DDOCUMENTS&#x60; - &#x60;filter&#x3D;file_box_type%3D%3DTICKET%3Bcategory%3D%3DATTACHMENTS&#x60; - &#x60;filter&#x3D;file_box_type%3D%3DCONTACT%3Bis_public%3D%3Dfalse&#x60; | [optional] |
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
updateFile($file_id, $update_mask, $file, $file_name, $is_public): \Keap\Core\V2\Model\FileMetadata
```

Update a file

Updates a file using multipart/form-data. Note that this endpoint uses POST instead of PATCH.

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
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.
$file = '/path/to/file.txt'; // \SplFileObject | File to upload
$file_name = 'file_name_example'; // string | File name
$is_public = True; // bool | Is public

try {
    $result = $apiInstance->updateFile($file_id, $update_mask, $file, $file_name, $is_public);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->updateFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_id** | **string**|  | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| File to upload | [optional] |
| **file_name** | **string**| File name | [optional] |
| **is_public** | **bool**| Is public | [optional] |

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
