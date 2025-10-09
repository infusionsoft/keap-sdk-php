# Keap\Core\V2\EmailAddressApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEmailAddressStatus()**](EmailAddressApi.md#getEmailAddressStatus) | **GET** /v2/emailAddresses/{email}/status | Retrieve an Email Address status |
| [**updateEmailAddressOptStatus()**](EmailAddressApi.md#updateEmailAddressOptStatus) | **PATCH** /v2/emailAddresses/{email}/status | Update an Email Address opt-in status |


## `getEmailAddressStatus()`

```php
getEmailAddressStatus($email): \Keap\Core\V2\Model\EmailAddressStatus
```

Retrieve an Email Address status

Retrieves the opt-in status for a given Email Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\EmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | email

try {
    $result = $apiInstance->getEmailAddressStatus($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->getEmailAddressStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| email | |

### Return type

[**\Keap\Core\V2\Model\EmailAddressStatus**](../Model/EmailAddressStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailAddressOptStatus()`

```php
updateEmailAddressOptStatus($email, $update_email_address): \Keap\Core\V2\Model\EmailAddressStatus
```

Update an Email Address opt-in status

Updates an Email Address opt-in status  You may opt-in or mark an email address as _Marketable_ by including the following field in the request JSON with an opt-in reason. (This field is also shown in the complete request body sample.) The reason you provide here will help with compliance. Example reasons: \"Customer opted-in through webform\", \"Company gave explicit permission.\"  ```json \"opt_in_reason\": \"your reason for opt-in\" ``` Note that the email address status will only be updated to `Unconfirmed` (marketable) for email addresses that are currently in the following states: - `Unengaged Marketable` - `Unengaged Non-Marketable` - `Non-Marketable` - `Opt-Out: Manual`  All other existing statuses e.g. `List Unsubscribe`, `Opt-Out`, `System` etc will remain non-marketable and in their existing state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\EmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | email
$update_email_address = new \Keap\Core\V2\Model\UpdateEmailAddress(); // \Keap\Core\V2\Model\UpdateEmailAddress | updateEmailAddress

try {
    $result = $apiInstance->updateEmailAddressOptStatus($email, $update_email_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->updateEmailAddressOptStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| email | |
| **update_email_address** | [**\Keap\Core\V2\Model\UpdateEmailAddress**](../Model/UpdateEmailAddress.md)| updateEmailAddress | |

### Return type

[**\Keap\Core\V2\Model\EmailAddressStatus**](../Model/EmailAddressStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
