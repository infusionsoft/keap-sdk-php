# Keap\Core\V2\TagsApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyTags()**](TagsApi.md#applyTags) | **POST** /v2/tags/{tag_id}/contacts:applyTags | Apply Tag |
| [**createTag()**](TagsApi.md#createTag) | **POST** /v2/tags | Create Tag |
| [**createTagCategory()**](TagsApi.md#createTagCategory) | **POST** /v2/tags/categories | Create Tag Category |
| [**deleteTag()**](TagsApi.md#deleteTag) | **DELETE** /v2/tags/{tag_id} | Delete Tag |
| [**deleteTagCategory()**](TagsApi.md#deleteTagCategory) | **DELETE** /v2/tags/categories/{tag_category_id} | Delete Tag Category |
| [**getCategory()**](TagsApi.md#getCategory) | **GET** /v2/tags/categories/{tag_category_id} | Retrieve a Tag Category |
| [**getTag()**](TagsApi.md#getTag) | **GET** /v2/tags/{tag_id} | Retrieve a Tag |
| [**listCompaniesForTagId()**](TagsApi.md#listCompaniesForTagId) | **GET** /v2/tags/{tag_id}/companies | List Tagged Companies |
| [**listContactsWithTagId()**](TagsApi.md#listContactsWithTagId) | **GET** /v2/tags/{tag_id}/contacts | List Tagged Contacts |
| [**listTagCategories()**](TagsApi.md#listTagCategories) | **GET** /v2/tags/categories | List Tag Categories |
| [**listTags()**](TagsApi.md#listTags) | **GET** /v2/tags | List Tags |
| [**removeTags()**](TagsApi.md#removeTags) | **POST** /v2/tags/{tag_id}/contacts:removeTags | Remove Tags |
| [**updateTag()**](TagsApi.md#updateTag) | **PATCH** /v2/tags/{tag_id} | Update a Tag |
| [**updateTagCategory()**](TagsApi.md#updateTagCategory) | **PATCH** /v2/tags/categories/{tag_category_id} | Update a Tag Category |


## `applyTags()`

```php
applyTags($tag_id, $apply_remove_tag_request): \Keap\Core\V2\Model\ApplyTagsResponse
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
    $result = $apiInstance->applyTags($tag_id, $apply_remove_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->applyTags: ', $e->getMessage(), PHP_EOL;
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

## `createTag()`

```php
createTag($create_update_tag_request): \Keap\Core\V2\Model\Tag
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
    $result = $apiInstance->createTag($create_update_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->createTag: ', $e->getMessage(), PHP_EOL;
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

## `createTagCategory()`

```php
createTagCategory($create_update_tag_category_request): \Keap\Core\V2\Model\TagCategory
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
    $result = $apiInstance->createTagCategory($create_update_tag_category_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->createTagCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_update_tag_category_request** | [**\Keap\Core\V2\Model\CreateUpdateTagCategoryRequest**](../Model/CreateUpdateTagCategoryRequest.md)| request | |

### Return type

[**\Keap\Core\V2\Model\TagCategory**](../Model/TagCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTag()`

```php
deleteTag($tag_id)
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
    $apiInstance->deleteTag($tag_id);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
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

## `deleteTagCategory()`

```php
deleteTagCategory($tag_category_id)
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
    $apiInstance->deleteTagCategory($tag_category_id);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->deleteTagCategory: ', $e->getMessage(), PHP_EOL;
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

## `getCategory()`

```php
getCategory($tag_category_id): \Keap\Core\V2\Model\GetTagCategoryResponse
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
    $result = $apiInstance->getCategory($tag_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getCategory: ', $e->getMessage(), PHP_EOL;
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

## `getTag()`

```php
getTag($tag_id): \Keap\Core\V2\Model\Tag
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
    $result = $apiInstance->getTag($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTag: ', $e->getMessage(), PHP_EOL;
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

## `listCompaniesForTagId()`

```php
listCompaniesForTagId($tag_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListTaggedCompaniesResponse
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
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `company_name` - (String) `email` - (String) `since_applied_time` - (String) `until_applied_time` You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. If NONE is passed in for `email`, it will check for the non-existence of that field. For the filters listed above, here are some examples: - `filter=company_name%3D%3DCompany` - `filter=email%3D%3Dtest@gmail.com` - `filter=since_applied_time%3D%3D2025-04-16T20:33:02.321Z;until_applied_time%3D%3D2025-08-16T20:33:02.321Z;`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `company_name` - `email` - `applied_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listCompaniesForTagId($tag_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listCompaniesForTagId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| tag_id | |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;company_name&#x60; - (String) &#x60;email&#x60; - (String) &#x60;since_applied_time&#x60; - (String) &#x60;until_applied_time&#x60; You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. If NONE is passed in for &#x60;email&#x60;, it will check for the non-existence of that field. For the filters listed above, here are some examples: - &#x60;filter&#x3D;company_name%3D%3DCompany&#x60; - &#x60;filter&#x3D;email%3D%3Dtest@gmail.com&#x60; - &#x60;filter&#x3D;since_applied_time%3D%3D2025-04-16T20:33:02.321Z;until_applied_time%3D%3D2025-08-16T20:33:02.321Z;&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;company_name&#x60; - &#x60;email&#x60; - &#x60;applied_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
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

## `listContactsWithTagId()`

```php
listContactsWithTagId($tag_id, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListTaggedContactsResponse
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
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `given_name` - (String) `family_name` - (String) `email` - (String) `since_applied_time` - (String) `until_applied_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. If NONE is passed in for `email`, `given_name`, or `family_name`, it will check for the non-existence of that field. For the filters listed above, here are some examples: - `filter=given_name%3D%3DJohn` - `filter=family_name%3D%3DSmith` - `filter=email%3D%3DNONE`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `given_name` - `family_name` - `email` - `applied_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listContactsWithTagId($tag_id, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listContactsWithTagId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| tag_id | |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;given_name&#x60; - (String) &#x60;family_name&#x60; - (String) &#x60;email&#x60; - (String) &#x60;since_applied_time&#x60; - (String) &#x60;until_applied_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. If NONE is passed in for &#x60;email&#x60;, &#x60;given_name&#x60;, or &#x60;family_name&#x60;, it will check for the non-existence of that field. For the filters listed above, here are some examples: - &#x60;filter&#x3D;given_name%3D%3DJohn&#x60; - &#x60;filter&#x3D;family_name%3D%3DSmith&#x60; - &#x60;filter&#x3D;email%3D%3DNONE&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;given_name&#x60; - &#x60;family_name&#x60; - &#x60;email&#x60; - &#x60;applied_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
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

## `listTagCategories()`

```php
listTagCategories($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListTagCategoriesResponse
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
$filter = 'filter_example'; // string | Filter to apply, allowed fields are:  - (String) `name` - (String) `description` - (String) `since_create_time` - (String) `until_create_time` - (String) `since_update_time` - (String) `until_update_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. If NONE is passed in for `category_id` or `description`, it will check for the non-existence of that field. For the filters listed above, here are some examples:  - `filter=name%3D%3Dmy-tag` - `filter=description%3D%3DNONE` - `filter=since_create_time%3D%3D2024-12-22T01:00:00.000Z;until_create_time%3D%3D2025-01-01T00:00:00.000Z;`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields:  - `name` - `create_time` - `update_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listTagCategories($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listTagCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are:  - (String) &#x60;name&#x60; - (String) &#x60;description&#x60; - (String) &#x60;since_create_time&#x60; - (String) &#x60;until_create_time&#x60; - (String) &#x60;since_update_time&#x60; - (String) &#x60;until_update_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. If NONE is passed in for &#x60;category_id&#x60; or &#x60;description&#x60;, it will check for the non-existence of that field. For the filters listed above, here are some examples:  - &#x60;filter&#x3D;name%3D%3Dmy-tag&#x60; - &#x60;filter&#x3D;description%3D%3DNONE&#x60; - &#x60;filter&#x3D;since_create_time%3D%3D2024-12-22T01:00:00.000Z;until_create_time%3D%3D2025-01-01T00:00:00.000Z;&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields:  - &#x60;name&#x60; - &#x60;create_time&#x60; - &#x60;update_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
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

## `listTags()`

```php
listTags($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListTagsResponse
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
$filter = 'filter_example'; // string | Filter to apply, allowed fields are:  - (String) `name` - (String) `description` - (String) `category_id` - (String) `since_create_time` - (String) `until_create_time` - (String) `since_update_time` - (String) `until_update_time`  You will need to apply the `==` operator to check the equality of one of the filters with your searched word, in the encoded form `%3D%3D`. If NONE is passed in for `category_id` or `description`, it will check for the non-existence of that field. For the filters listed above, here are some examples:  - `filter=name%3D%3Dmy-tag` - `filter=category_id%3D%3DNONE` - `filter=description%3D%3DNONE` - `filter=since_create_time%3D%3D2024-12-22T01:00:00.000Z;until_create_time%3D%3D2025-01-01T00:00:00.000Z;`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields:  - `name` - `create_time` - `update_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listTags($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are:  - (String) &#x60;name&#x60; - (String) &#x60;description&#x60; - (String) &#x60;category_id&#x60; - (String) &#x60;since_create_time&#x60; - (String) &#x60;until_create_time&#x60; - (String) &#x60;since_update_time&#x60; - (String) &#x60;until_update_time&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of one of the filters with your searched word, in the encoded form &#x60;%3D%3D&#x60;. If NONE is passed in for &#x60;category_id&#x60; or &#x60;description&#x60;, it will check for the non-existence of that field. For the filters listed above, here are some examples:  - &#x60;filter&#x3D;name%3D%3Dmy-tag&#x60; - &#x60;filter&#x3D;category_id%3D%3DNONE&#x60; - &#x60;filter&#x3D;description%3D%3DNONE&#x60; - &#x60;filter&#x3D;since_create_time%3D%3D2024-12-22T01:00:00.000Z;until_create_time%3D%3D2025-01-01T00:00:00.000Z;&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields:  - &#x60;name&#x60; - &#x60;create_time&#x60; - &#x60;update_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
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

## `removeTags()`

```php
removeTags($tag_id, $apply_remove_tag_request)
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
    $apiInstance->removeTags($tag_id, $apply_remove_tag_request);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->removeTags: ', $e->getMessage(), PHP_EOL;
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

## `updateTag()`

```php
updateTag($tag_id, $update_mask, $create_update_tag_request): \Keap\Core\V2\Model\UpdateTagResponse
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
    $result = $apiInstance->updateTag($tag_id, $update_mask, $create_update_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->updateTag: ', $e->getMessage(), PHP_EOL;
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

## `updateTagCategory()`

```php
updateTagCategory($tag_category_id, $update_mask, $create_update_tag_category_request): \Keap\Core\V2\Model\UpdateTagCategoryResponse
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
    $result = $apiInstance->updateTagCategory($tag_category_id, $update_mask, $create_update_tag_category_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->updateTagCategory: ', $e->getMessage(), PHP_EOL;
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
