# Keap\Core\V2\CompanyApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCompanyUsingPOST1()**](CompanyApi.md#createCompanyUsingPOST1) | **POST** /v2/companies | Create a Company |
| [**deleteCompanyUsingDELETE()**](CompanyApi.md#deleteCompanyUsingDELETE) | **DELETE** /v2/companies/{company_id} | Delete a Company |
| [**getCompanyUsingGET1()**](CompanyApi.md#getCompanyUsingGET1) | **GET** /v2/companies/{company_id} | Retrieve a Company |
| [**listCompaniesUsingGET1()**](CompanyApi.md#listCompaniesUsingGET1) | **GET** /v2/companies | List Companies |
| [**updateCompanyUsingPATCH1()**](CompanyApi.md#updateCompanyUsingPATCH1) | **PATCH** /v2/companies/{company_id} | Update a Company |


## `createCompanyUsingPOST1()`

```php
createCompanyUsingPOST1($create_company_request): \Keap\Core\V2\Model\Company
```

Create a Company

Creates a new Company.`country_code` is required if `region` is specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_company_request = new \Keap\Core\V2\Model\CreateCompanyRequest(); // \Keap\Core\V2\Model\CreateCompanyRequest | company

try {
    $result = $apiInstance->createCompanyUsingPOST1($create_company_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->createCompanyUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_company_request** | [**\Keap\Core\V2\Model\CreateCompanyRequest**](../Model/CreateCompanyRequest.md)| company | [optional] |

### Return type

[**\Keap\Core\V2\Model\Company**](../Model/Company.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCompanyUsingDELETE()`

```php
deleteCompanyUsingDELETE($company_id)
```

Delete a Company

Deletes the specified Company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 'company_id_example'; // string | company_id

try {
    $apiInstance->deleteCompanyUsingDELETE($company_id);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteCompanyUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| company_id | |

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

## `getCompanyUsingGET1()`

```php
getCompanyUsingGET1($company_id, $fields): \Keap\Core\V2\Model\Company
```

Retrieve a Company

Retrieves a single Company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 'company_id_example'; // string | company_id
$fields = array('fields_example'); // string[] | Comma-delimited list of Company properties to include in the response. (Available fields are: `company_name`, `address`, `custom_fields`, `email_address`, `fax_number`, `phone_number`, `website`, `notes`)

try {
    $result = $apiInstance->getCompanyUsingGET1($company_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompanyUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| company_id | |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of Company properties to include in the response. (Available fields are: &#x60;company_name&#x60;, &#x60;address&#x60;, &#x60;custom_fields&#x60;, &#x60;email_address&#x60;, &#x60;fax_number&#x60;, &#x60;phone_number&#x60;, &#x60;website&#x60;, &#x60;notes&#x60;) | [optional] |

### Return type

[**\Keap\Core\V2\Model\Company**](../Model/Company.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompaniesUsingGET1()`

```php
listCompaniesUsingGET1($fields, $filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListCompaniesResponse
```

List Companies

Retrieves a list of all Companies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = array('fields_example'); // string[] | Comma-delimited list of Company properties to include in the response. (Fields such as `notes`, `fax_number` and `custom_fields` aren't included, by default.)
$filter = 'filter_example'; // string | Search filter to apply to results
$order_by = 'order_by_example'; // string | Attribute and direction to order items by. E.g. `given_name desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listCompaniesUsingGET1($fields, $filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->listCompaniesUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | [**string[]**](../Model/string.md)| Comma-delimited list of Company properties to include in the response. (Fields such as &#x60;notes&#x60;, &#x60;fax_number&#x60; and &#x60;custom_fields&#x60; aren&#39;t included, by default.) | [optional] |
| **filter** | **string**| Search filter to apply to results | [optional] |
| **order_by** | **string**| Attribute and direction to order items by. E.g. &#x60;given_name desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListCompaniesResponse**](../Model/ListCompaniesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompanyUsingPATCH1()`

```php
updateCompanyUsingPATCH1($company_id, $update_mask, $update_company_request): \Keap\Core\V2\Model\Company
```

Update a Company

Updates a Company with the values provided in the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 'company_id_example'; // string | company_id
$update_mask = array('update_mask_example'); // string[] | An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped.
$update_company_request = new \Keap\Core\V2\Model\UpdateCompanyRequest(); // \Keap\Core\V2\Model\UpdateCompanyRequest | company

try {
    $result = $apiInstance->updateCompanyUsingPATCH1($company_id, $update_mask, $update_company_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->updateCompanyUsingPATCH1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| company_id | |
| **update_mask** | [**string[]**](../Model/string.md)| An optional list of properties to be updated. If set, only the provided properties will be updated and others will be skipped. | [optional] |
| **update_company_request** | [**\Keap\Core\V2\Model\UpdateCompanyRequest**](../Model/UpdateCompanyRequest.md)| company | [optional] |

### Return type

[**\Keap\Core\V2\Model\Company**](../Model/Company.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
