# Keap\Core\V2\LocaleApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCountryByCode()**](LocaleApi.md#getCountryByCode) | **GET** /v2/locales/countries/{country_code} | Get Country |
| [**getProvinceByCode()**](LocaleApi.md#getProvinceByCode) | **GET** /v2/locales/countries/{country_code}/provinces/{province_code} | Get Province |
| [**listCountries()**](LocaleApi.md#listCountries) | **GET** /v2/locales/countries | List Countries |
| [**listProvincesForCountry()**](LocaleApi.md#listProvincesForCountry) | **GET** /v2/locales/countries/{country_code}/provinces | List a Country&#39;s Province |


## `getCountryByCode()`

```php
getCountryByCode($country_code): \Keap\Core\V2\Model\Country
```

Get Country

Gets a country by its code or name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LocaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = 'country_code_example'; // string | The ISO 3166-2 alpha-2 code, alpha-3 code, or name of the country to be retrieved

try {
    $result = $apiInstance->getCountryByCode($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocaleApi->getCountryByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| The ISO 3166-2 alpha-2 code, alpha-3 code, or name of the country to be retrieved | |

### Return type

[**\Keap\Core\V2\Model\Country**](../Model/Country.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProvinceByCode()`

```php
getProvinceByCode($country_code, $province_code): \Keap\Core\V2\Model\Province
```

Get Province

Get a province by its code or name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LocaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = 'country_code_example'; // string | The ISO 3166-1 alpha-2 code, alpha-3 code, or name of the country to be retrieved
$province_code = 'province_code_example'; // string | The ISO 3166-2 code or name of the province to be retrieved

try {
    $result = $apiInstance->getProvinceByCode($country_code, $province_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocaleApi->getProvinceByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| The ISO 3166-1 alpha-2 code, alpha-3 code, or name of the country to be retrieved | |
| **province_code** | **string**| The ISO 3166-2 code or name of the province to be retrieved | |

### Return type

[**\Keap\Core\V2\Model\Province**](../Model/Province.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCountries()`

```php
listCountries(): \Keap\Core\V2\Model\ListCountriesResponse
```

List Countries

Retrieves a list of countries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LocaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocaleApi->listCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Keap\Core\V2\Model\ListCountriesResponse**](../Model/ListCountriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProvincesForCountry()`

```php
listProvincesForCountry($country_code): \Keap\Core\V2\Model\ListProvincesResponse
```

List a Country's Province

Retrieves a list of provinces for a given country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\LocaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = 'country_code_example'; // string | country_code

try {
    $result = $apiInstance->listProvincesForCountry($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocaleApi->listProvincesForCountry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| country_code | |

### Return type

[**\Keap\Core\V2\Model\ListProvincesResponse**](../Model/ListProvincesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
