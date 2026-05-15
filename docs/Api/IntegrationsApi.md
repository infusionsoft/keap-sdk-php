# Keap\Core\V2\IntegrationsApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addIntegrationsWordPressOptIn()**](IntegrationsApi.md#addIntegrationsWordPressOptIn) | **POST** /rest/v2/integrations/wordpress/options | Add a WordPress Opt-In Option |
| [**deleteIntegrationsWordPressOptIn()**](IntegrationsApi.md#deleteIntegrationsWordPressOptIn) | **DELETE** /rest/v2/integrations/wordpress/options/{option_key} | Delete a WordPress Opt-In Option |


## `addIntegrationsWordPressOptIn()`

```php
addIntegrationsWordPressOptIn($create_integrations_word_press_opt_in_option): \Keap\Core\V2\Model\WordPressOptInOption
```

Add a WordPress Opt-In Option

Adds a value to the list of WordPress Opt-In Options Available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_integrations_word_press_opt_in_option = new \Keap\Core\V2\Model\CreateIntegrationsWordPressOptInOption(); // \Keap\Core\V2\Model\CreateIntegrationsWordPressOptInOption

try {
    $result = $apiInstance->addIntegrationsWordPressOptIn($create_integrations_word_press_opt_in_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->addIntegrationsWordPressOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_integrations_word_press_opt_in_option** | [**\Keap\Core\V2\Model\CreateIntegrationsWordPressOptInOption**](../Model/CreateIntegrationsWordPressOptInOption.md)|  | |

### Return type

[**\Keap\Core\V2\Model\WordPressOptInOption**](../Model/WordPressOptInOption.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIntegrationsWordPressOptIn()`

```php
deleteIntegrationsWordPressOptIn($option_key)
```

Delete a WordPress Opt-In Option

Deletes a value from the list of WordPress Opt-In Options Available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_key = 'option_key_example'; // string

try {
    $apiInstance->deleteIntegrationsWordPressOptIn($option_key);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->deleteIntegrationsWordPressOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_key** | **string**|  | |

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
