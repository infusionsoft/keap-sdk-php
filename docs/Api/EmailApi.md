# Keap\Core\V2\EmailApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmailUsingPOST1()**](EmailApi.md#createEmailUsingPOST1) | **POST** /v2/emails | Create an Email Record |
| [**createEmailsUsingPOST1()**](EmailApi.md#createEmailsUsingPOST1) | **POST** /v2/emails:batchAdd | Create a set of Email Records |
| [**deleteEmailUsingDELETE1()**](EmailApi.md#deleteEmailUsingDELETE1) | **DELETE** /v2/emails/{id} | Delete an Email Record |
| [**deleteEmailsUsingPOST1()**](EmailApi.md#deleteEmailsUsingPOST1) | **POST** /v2/emails:batchRemove | Remove a set of Email Records |
| [**getEmailTemplateUsingGET()**](EmailApi.md#getEmailTemplateUsingGET) | **GET** /v2/emails/templates/{email_template_id} | Retrieve an email template |
| [**getEmailUsingGET1()**](EmailApi.md#getEmailUsingGET1) | **GET** /v2/emails/{id} | Retrieve an Email |
| [**sendEmailTemplateUsingPOST()**](EmailApi.md#sendEmailTemplateUsingPOST) | **POST** /v2/emails/templates:send | Send an email based on a template |
| [**sendEmailUsingPOST1()**](EmailApi.md#sendEmailUsingPOST1) | **POST** /v2/emails:send | Send an Email |


## `createEmailUsingPOST1()`

```php
createEmailUsingPOST1($create_email_sent_request): \Keap\Core\V2\Model\EmailSentWithContent
```

Create an Email Record

Creates a Record of an Email sent to a Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_email_sent_request = new \Keap\Core\V2\Model\CreateEmailSentRequest(); // \Keap\Core\V2\Model\CreateEmailSentRequest | emailWithContent

try {
    $result = $apiInstance->createEmailUsingPOST1($create_email_sent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->createEmailUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_email_sent_request** | [**\Keap\Core\V2\Model\CreateEmailSentRequest**](../Model/CreateEmailSentRequest.md)| emailWithContent | |

### Return type

[**\Keap\Core\V2\Model\EmailSentWithContent**](../Model/EmailSentWithContent.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailsUsingPOST1()`

```php
createEmailsUsingPOST1($create_emails_sent_request): \Keap\Core\V2\Model\EmailsSentList
```

Create a set of Email Records

Creates a set of Records of Emails sent to Contacts, maximum 1000 per transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_emails_sent_request = new \Keap\Core\V2\Model\CreateEmailsSentRequest(); // \Keap\Core\V2\Model\CreateEmailsSentRequest | Email records to persist, with content.

try {
    $result = $apiInstance->createEmailsUsingPOST1($create_emails_sent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->createEmailsUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_emails_sent_request** | [**\Keap\Core\V2\Model\CreateEmailsSentRequest**](../Model/CreateEmailsSentRequest.md)| Email records to persist, with content. | [optional] |

### Return type

[**\Keap\Core\V2\Model\EmailsSentList**](../Model/EmailsSentList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailUsingDELETE1()`

```php
deleteEmailUsingDELETE1($id)
```

Delete an Email Record

Deletes a specific Email Record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id

try {
    $apiInstance->deleteEmailUsingDELETE1($id);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->deleteEmailUsingDELETE1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |

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

## `deleteEmailsUsingPOST1()`

```php
deleteEmailsUsingPOST1($delete_emails_request): \Keap\Core\V2\Model\DeleteEmailsResponse
```

Remove a set of Email Records

Removes a set of Email Records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_emails_request = new \Keap\Core\V2\Model\DeleteEmailsRequest(); // \Keap\Core\V2\Model\DeleteEmailsRequest | deleteEmailsRequest

try {
    $result = $apiInstance->deleteEmailsUsingPOST1($delete_emails_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->deleteEmailsUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_emails_request** | [**\Keap\Core\V2\Model\DeleteEmailsRequest**](../Model/DeleteEmailsRequest.md)| deleteEmailsRequest | |

### Return type

[**\Keap\Core\V2\Model\DeleteEmailsResponse**](../Model/DeleteEmailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailTemplateUsingGET()`

```php
getEmailTemplateUsingGET($email_template_id): \Keap\Core\V2\Model\EmailTemplate
```

Retrieve an email template

Retrieve an email template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_template_id = 'email_template_id_example'; // string | email_template_id

try {
    $result = $apiInstance->getEmailTemplateUsingGET($email_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->getEmailTemplateUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_template_id** | **string**| email_template_id | |

### Return type

[**\Keap\Core\V2\Model\EmailTemplate**](../Model/EmailTemplate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailUsingGET1()`

```php
getEmailUsingGET1($id): \Keap\Core\V2\Model\EmailSentWithContent
```

Retrieve an Email

Retrieves a single Email that has been sent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | id

try {
    $result = $apiInstance->getEmailUsingGET1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->getEmailUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | |

### Return type

[**\Keap\Core\V2\Model\EmailSentWithContent**](../Model/EmailSentWithContent.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEmailTemplateUsingPOST()`

```php
sendEmailTemplateUsingPOST($email_send_template_request)
```

Send an email based on a template

Send an email based on a template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_send_template_request = new \Keap\Core\V2\Model\EmailSendTemplateRequest(); // \Keap\Core\V2\Model\EmailSendTemplateRequest | Use a template to send an email to a list of contacts

try {
    $apiInstance->sendEmailTemplateUsingPOST($email_send_template_request);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmailTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_send_template_request** | [**\Keap\Core\V2\Model\EmailSendTemplateRequest**](../Model/EmailSendTemplateRequest.md)| Use a template to send an email to a list of contacts | [optional] |

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

## `sendEmailUsingPOST1()`

```php
sendEmailUsingPOST1($email_send_request)
```

Send an Email

Sends an Email to a list of Contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_send_request = new \Keap\Core\V2\Model\EmailSendRequest(); // \Keap\Core\V2\Model\EmailSendRequest | emailSendRequest

try {
    $apiInstance->sendEmailUsingPOST1($email_send_request);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmailUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_send_request** | [**\Keap\Core\V2\Model\EmailSendRequest**](../Model/EmailSendRequest.md)| emailSendRequest | [optional] |

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
