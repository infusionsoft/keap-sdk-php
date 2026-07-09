# Keap\Core\V2\EmailApi

All URIs are relative to https://api.keap.com/crm, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmail()**](EmailApi.md#createEmail) | **POST** /rest/v2/emails | Create an Email Record |
| [**createEmails()**](EmailApi.md#createEmails) | **POST** /rest/v2/emails:batchAdd | Create a set of Email Records |
| [**deleteEmail()**](EmailApi.md#deleteEmail) | **DELETE** /rest/v2/emails/{id} | Delete an Email Record |
| [**deleteEmails()**](EmailApi.md#deleteEmails) | **POST** /rest/v2/emails:batchRemove | Remove a set of Email Records |
| [**getEmail()**](EmailApi.md#getEmail) | **GET** /rest/v2/emails/{id} | Retrieve an Email |
| [**getEmailTemplate()**](EmailApi.md#getEmailTemplate) | **GET** /rest/v2/emails/templates/{email_template_id} | Retrieve an email template |
| [**listEmails()**](EmailApi.md#listEmails) | **GET** /rest/v2/emails | List Emails |
| [**sendEmail()**](EmailApi.md#sendEmail) | **POST** /rest/v2/emails:send | Send an Email |
| [**sendEmailTemplate()**](EmailApi.md#sendEmailTemplate) | **POST** /rest/v2/emails/templates:send | Send an email based on a template |


## `createEmail()`

```php
createEmail($create_email_sent_request): \Keap\Core\V2\Model\EmailSentWithContent
```

Create an Email Record

Creates a Record of an Email sent to a Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_email_sent_request = new \Keap\Core\V2\Model\CreateEmailSentRequest(); // \Keap\Core\V2\Model\CreateEmailSentRequest

try {
    $result = $apiInstance->createEmail($create_email_sent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->createEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_email_sent_request** | [**\Keap\Core\V2\Model\CreateEmailSentRequest**](../Model/CreateEmailSentRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\EmailSentWithContent**](../Model/EmailSentWithContent.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmails()`

```php
createEmails($create_emails_sent_request): \Keap\Core\V2\Model\EmailsSentList
```

Create a set of Email Records

Creates a set of Records of Emails sent to Contacts, maximum 1000 per transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_emails_sent_request = new \Keap\Core\V2\Model\CreateEmailsSentRequest(); // \Keap\Core\V2\Model\CreateEmailsSentRequest

try {
    $result = $apiInstance->createEmails($create_emails_sent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->createEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_emails_sent_request** | [**\Keap\Core\V2\Model\CreateEmailsSentRequest**](../Model/CreateEmailsSentRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\EmailsSentList**](../Model/EmailsSentList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmail()`

```php
deleteEmail($id)
```

Delete an Email Record

Deletes a specific Email Record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteEmail($id);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->deleteEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `deleteEmails()`

```php
deleteEmails($delete_emails_request): \Keap\Core\V2\Model\DeleteEmailsResponse
```

Remove a set of Email Records

Removes a set of Email Records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_emails_request = new \Keap\Core\V2\Model\DeleteEmailsRequest(); // \Keap\Core\V2\Model\DeleteEmailsRequest

try {
    $result = $apiInstance->deleteEmails($delete_emails_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->deleteEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_emails_request** | [**\Keap\Core\V2\Model\DeleteEmailsRequest**](../Model/DeleteEmailsRequest.md)|  | |

### Return type

[**\Keap\Core\V2\Model\DeleteEmailsResponse**](../Model/DeleteEmailsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmail()`

```php
getEmail($id): \Keap\Core\V2\Model\EmailSentWithContent
```

Retrieve an Email

Retrieves a single Email that has been sent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getEmail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->getEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\EmailSentWithContent**](../Model/EmailSentWithContent.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailTemplate()`

```php
getEmailTemplate($email_template_id): \Keap\Core\V2\Model\EmailTemplate
```

Retrieve an email template

Retrieve an email template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_template_id = 'email_template_id_example'; // string

try {
    $result = $apiInstance->getEmailTemplate($email_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->getEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_template_id** | **string**|  | |

### Return type

[**\Keap\Core\V2\Model\EmailTemplate**](../Model/EmailTemplate.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmails()`

```php
listEmails($filter, $order_by, $page_size, $page_token): \Keap\Core\V2\Model\ListEmailsSentResponse
```

List Emails

Retrieves a list of emails that have been sent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) contact_id - (String) email - (String) start_created_time - (String) end_created_time
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `created_time`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token

try {
    $result = $apiInstance->listEmails($filter, $order_by, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->listEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) contact_id - (String) email - (String) start_created_time - (String) end_created_time | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;created_time&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListEmailsSentResponse**](../Model/ListEmailsSentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEmail()`

```php
sendEmail($email_send_request)
```

Send an Email

Sends an Email to a list of Contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_send_request = new \Keap\Core\V2\Model\EmailSendRequest(); // \Keap\Core\V2\Model\EmailSendRequest

try {
    $apiInstance->sendEmail($email_send_request);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_send_request** | [**\Keap\Core\V2\Model\EmailSendRequest**](../Model/EmailSendRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEmailTemplate()`

```php
sendEmailTemplate($email_send_template_request)
```

Send an email based on a template

Send an email based on a template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Keap\Core\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Keap\Core\V2\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_send_template_request = new \Keap\Core\V2\Model\EmailSendTemplateRequest(); // \Keap\Core\V2\Model\EmailSendTemplateRequest

try {
    $apiInstance->sendEmailTemplate($email_send_template_request);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_send_template_request** | [**\Keap\Core\V2\Model\EmailSendTemplateRequest**](../Model/EmailSendTemplateRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
