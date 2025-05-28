# Keap\Core\V2\TagsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyTagsUsingPOST()**](TagsApi.md#applyTagsUsingPOST) | **POST** /v2/tags/{tag_id}/contacts:applyTags | Apply Tag |
| [**createTagCategoryUsingPOST1()**](TagsApi.md#createTagCategoryUsingPOST1) | **POST** /v2/tags/categories | Create Tag Category |
| [**createTagUsingPOST1()**](TagsApi.md#createTagUsingPOST1) | **POST** /v2/tags | Create Tag |
| [**deleteTagCategoryUsingDELETE()**](TagsApi.md#deleteTagCategoryUsingDELETE) | **DELETE** /v2/tags/categories/{tag_category_id} | Delete Tag Category |
| [**deleteTagUsingDELETE()**](TagsApi.md#deleteTagUsingDELETE) | **DELETE** /v2/tags/{tag_id} | Delete Tag |
| [**getCategoryUsingGET()**](TagsApi.md#getCategoryUsingGET) | **GET** /v2/tags/categories/{tag_category_id} | Retrieve a Tag Category |
| [**getTagUsingGET1()**](TagsApi.md#getTagUsingGET1) | **GET** /v2/tags/{tag_id} | Retrieve a Tag |
| [**listCompaniesForTagIdUsingGET1()**](TagsApi.md#listCompaniesForTagIdUsingGET1) | **GET** /v2/tags/{tag_id}/companies | List Tagged Companies |
| [**listContactsWithTagIdUsingGET()**](TagsApi.md#listContactsWithTagIdUsingGET) | **GET** /v2/tags/{tag_id}/contacts | List Tagged Contacts |
| [**listTagCategoriesUsingGET()**](TagsApi.md#listTagCategoriesUsingGET) | **GET** /v2/tags/categories | List Tag Categories |
| [**listTagsUsingGET1()**](TagsApi.md#listTagsUsingGET1) | **GET** /v2/tags | List Tags |
| [**removeTagsUsingPOST()**](TagsApi.md#removeTagsUsingPOST) | **POST** /v2/tags/{tag_id}/contacts:removeTags | Remove Tags |
| [**updateTagCategoryUsingPATCH()**](TagsApi.md#updateTagCategoryUsingPATCH) | **PATCH** /v2/tags/categories/{tag_category_id} | Update a Tag Category |
| [**updateTagUsingPATCH()**](TagsApi.md#updateTagUsingPATCH) | **PATCH** /v2/tags/{tag_id} | Update a Tag |


## `applyTagsUsingPOST()`

```php
applyTagsUsingPOST($tag_id, $apply_remove_tag_request): \Keap\Core\V2\Model\ApplyTagsResponse
```

Apply Tag

Applies a Tag to a list of Contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_id = 'tag_id_example'; // string | tag_id
$apply_remove_tag_request = new \Keap\Core\V2\Model\ApplyRemoveTagRequest(); // \Keap\Core\V2\Model\ApplyRemoveTagRequest | applyRemoveTagRequest

try {
    $result = $apiInstance->applyTagsUsingPOST($tag_id, $apply_remove_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->applyTagsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| tag_id | |
| **apply_remove_tag_request** | [**\Keap\Core\V2\Model\ApplyRemoveTagRequest**](../Model/ApplyRemoveTagRequest.md)| applyRemoveTagRequest | |

### Return type

[**\Keap\Core\V2\Model\ApplyTagsResponse**](../Model/ApplyTagsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTagCategoryUsingPOST1()`

```php
createTagCategoryUsingPOST1($create_update_tag_category_request): \Keap\Core\V2\Model\Tag
```

Create Tag Category

Creates a new Tag Category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_update_tag_category_request = new \Keap\Core\V2\Model\CreateUpdateTagCategoryRequest(); // \Keap\Core\V2\Model\CreateUpdateTagCategoryRequest | request

try {
    $result = $apiInstance->createTagCategoryUsingPOST1($create_update_tag_category_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->createTagCategoryUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_update_tag_category_request** | [**\Keap\Core\V2\Model\CreateUpdateTagCategoryRequest**](../Model/CreateUpdateTagCategoryRequest.md)| request | |

### Return type

[**\Keap\Core\V2\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTagUsingPOST1()`

```php
createTagUsingPOST1($create_update_tag_request): \Keap\Core\V2\Model\Tag
```

Create Tag

Creates a new Tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_update_tag_request = new \Keap\Core\V2\Model\CreateUpdateTagRequest(); // \Keap\Core\V2\Model\CreateUpdateTagRequest | tag

try {
    $result = $apiInstance->createTagUsingPOST1($create_update_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->createTagUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_update_tag_request** | [**\Keap\Core\V2\Model\CreateUpdateTagRequest**](../Model/CreateUpdateTagRequest.md)| tag | |

### Return type

[**\Keap\Core\V2\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTagCategoryUsingDELETE()`

```php
deleteTagCategoryUsingDELETE($tag_category_id)
```

Delete Tag Category

Deletes the specified Tag Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_category_id = 'tag_category_id_example'; // string | tag_category_id

try {
    $apiInstance->deleteTagCategoryUsingDELETE($tag_category_id);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->deleteTagCategoryUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_category_id** | **string**| tag_category_id | |

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

## `deleteTagUsingDELETE()`

```php
deleteTagUsingDELETE($tag_id)
```

Delete Tag

Deletes a Tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_id = 'tag_id_example'; // string | tag_id

try {
    $apiInstance->deleteTagUsingDELETE($tag_id);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->deleteTagUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| tag_id | |

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

## `getCategoryUsingGET()`

```php
getCategoryUsingGET($tag_category_id): \Keap\Core\V2\Model\GetTagCategoryResponse
```

Retrieve a Tag Category

Returns information about the specified Tag Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_category_id = 'tag_category_id_example'; // string | tag_category_id

try {
    $result = $apiInstance->getCategoryUsingGET($tag_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getCategoryUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_category_id** | **string**| tag_category_id | |

### Return type

[**\Keap\Core\V2\Model\GetTagCategoryResponse**](../Model/GetTagCategoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTagUsingGET1()`

```php
getTagUsingGET1($tag_id): \Keap\Core\V2\Model\Tag
```

Retrieve a Tag

Retrieves information about the specified Tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_id = 'tag_id_example'; // string | tag_id

try {
    $result = $apiInstance->getTagUsingGET1($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTagUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| tag_id | |

### Return type

[**\Keap\Core\V2\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompaniesForTagIdUsingGET1()`

```php
listCompaniesForTagIdUsingGET1($tag_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListTaggedCompaniesResponse
```

List Tagged Companies

Retrieves a list of Companies that have the given Tag applied. To search for `null` or empty fields use `filter==NONE`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_id = 'tag_id_example'; // string | tag_id
$filter = 'filter_example'; // string | Search filter to apply to results
$order_by = 'order_by_example'; // string | Attribute and direction to order items by. E.g. `given_name desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listCompaniesForTagIdUsingGET1($tag_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listCompaniesForTagIdUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| tag_id | |
| **filter** | **string**| Search filter to apply to results | [optional] |
| **order_by** | **string**| Attribute and direction to order items by. E.g. &#x60;given_name desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListTaggedCompaniesResponse**](../Model/ListTaggedCompaniesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactsWithTagIdUsingGET()`

```php
listContactsWithTagIdUsingGET($tag_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListTaggedContactsResponse
```

List Tagged Contacts

Retrieves a list of Contacts with the specified Tag To search for `null` or empty fields use `filter==NONE`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_id = 'tag_id_example'; // string | tag_id
$filter = 'filter_example'; // string | Search filter to apply to results
$order_by = 'order_by_example'; // string | Attribute and direction to order items by. E.g. `given_name desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listContactsWithTagIdUsingGET($tag_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listContactsWithTagIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| tag_id | |
| **filter** | **string**| Search filter to apply to results | [optional] |
| **order_by** | **string**| Attribute and direction to order items by. E.g. &#x60;given_name desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListTaggedContactsResponse**](../Model/ListTaggedContactsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTagCategoriesUsingGET()`

```php
listTagCategoriesUsingGET($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListTagCategoriesResponse
```

List Tag Categories

Retrieves a list of defined Tag Categories To search for `null` or empty fields use `filter==NONE`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Search filter to apply to results
$order_by = 'order_by_example'; // string | Attribute and direction to order items by. E.g. `given_name desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listTagCategoriesUsingGET($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listTagCategoriesUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Keap\Core\V2\Model\ListTagCategoriesResponse**](../Model/ListTagCategoriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTagsUsingGET1()`

```php
listTagsUsingGET1($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListTagsResponse
```

List Tags

Retrieves a list of Tags defined in the application To search for `null` or empty fields use `filter==NONE`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Search filter to apply to results
$order_by = 'order_by_example'; // string | Attribute and direction to order items by. E.g. `given_name desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listTagsUsingGET1($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listTagsUsingGET1: ', $e->getMessage(), PHP_EOL;
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

[**\Keap\Core\V2\Model\ListTagsResponse**](../Model/ListTagsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeTagsUsingPOST()`

```php
removeTagsUsingPOST($tag_id, $apply_remove_tag_request)
```

Remove Tags

Removes a Tag from a list of Contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_id = 'tag_id_example'; // string | tag_id
$apply_remove_tag_request = new \Keap\Core\V2\Model\ApplyRemoveTagRequest(); // \Keap\Core\V2\Model\ApplyRemoveTagRequest | applyRemoveTagRequest

try {
    $apiInstance->removeTagsUsingPOST($tag_id, $apply_remove_tag_request);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->removeTagsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| tag_id | |
| **apply_remove_tag_request** | [**\Keap\Core\V2\Model\ApplyRemoveTagRequest**](../Model/ApplyRemoveTagRequest.md)| applyRemoveTagRequest | |

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

## `updateTagCategoryUsingPATCH()`

```php
updateTagCategoryUsingPATCH($tag_category_id, $update_mask, $create_update_tag_category_request): \Keap\Core\V2\Model\UpdateTagCategoryResponse
```

Update a Tag Category

Updates a Tag Category with only the values provided in the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_category_id = 'tag_category_id_example'; // string | tag_category_id
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.
$create_update_tag_category_request = new \Keap\Core\V2\Model\CreateUpdateTagCategoryRequest(); // \Keap\Core\V2\Model\CreateUpdateTagCategoryRequest | tagCategory

try {
    $result = $apiInstance->updateTagCategoryUsingPATCH($tag_category_id, $update_mask, $create_update_tag_category_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->updateTagCategoryUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_category_id** | **string**| tag_category_id | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |
| **create_update_tag_category_request** | [**\Keap\Core\V2\Model\CreateUpdateTagCategoryRequest**](../Model/CreateUpdateTagCategoryRequest.md)| tagCategory | [optional] |

### Return type

[**\Keap\Core\V2\Model\UpdateTagCategoryResponse**](../Model/UpdateTagCategoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTagUsingPATCH()`

```php
updateTagUsingPATCH($tag_id, $update_mask, $create_update_tag_request): \Keap\Core\V2\Model\UpdateTagResponse
```

Update a Tag

Updates a Tag with only the values provided in the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_id = 'tag_id_example'; // string | tag_id
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.
$create_update_tag_request = new \Keap\Core\V2\Model\CreateUpdateTagRequest(); // \Keap\Core\V2\Model\CreateUpdateTagRequest | tag

try {
    $result = $apiInstance->updateTagUsingPATCH($tag_id, $update_mask, $create_update_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->updateTagUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| tag_id | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |
| **create_update_tag_request** | [**\Keap\Core\V2\Model\CreateUpdateTagRequest**](../Model/CreateUpdateTagRequest.md)| tag | [optional] |

### Return type

[**\Keap\Core\V2\Model\UpdateTagResponse**](../Model/UpdateTagResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
