# Keap\Core\V2\CampaignApi

All URIs are relative to https://api.keap.com/crm/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addContactsToCampaignSequenceUsingPOST1()**](CampaignApi.md#addContactsToCampaignSequenceUsingPOST1) | **POST** /v2/campaigns/{campaign_id}/sequences/{sequence_id}:addContacts | Add Contacts to Campaign Sequence |
| [**getCampaignUsingGET1()**](CampaignApi.md#getCampaignUsingGET1) | **GET** /v2/campaigns/{campaign_id} | Retrieve a Campaign |
| [**listCampaignsUsingGET1()**](CampaignApi.md#listCampaignsUsingGET1) | **GET** /v2/campaigns | List Campaigns |
| [**removeContactsFromCampaignSequenceUsingPOST()**](CampaignApi.md#removeContactsFromCampaignSequenceUsingPOST) | **POST** /v2/campaigns/{campaign_id}/sequences/{sequence_id}:removeContacts | Remove Contacts from Campaign Sequence |


## `addContactsToCampaignSequenceUsingPOST1()`

```php
addContactsToCampaignSequenceUsingPOST1($campaign_id, $sequence_id, $add_contacts_to_sequence_request): \Keap\Core\V2\Model\AddContactsToSequenceResponse
```

Add Contacts to Campaign Sequence

Adds a list of contacts to a campaign sequence Response contains a map of the provided list of Contact Ids related to their individual result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string | campaign_id
$sequence_id = 'sequence_id_example'; // string | sequence_id
$add_contacts_to_sequence_request = new \Keap\Core\V2\Model\AddContactsToSequenceRequest(); // \Keap\Core\V2\Model\AddContactsToSequenceRequest | addContactsToSequenceRequest

try {
    $result = $apiInstance->addContactsToCampaignSequenceUsingPOST1($campaign_id, $sequence_id, $add_contacts_to_sequence_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->addContactsToCampaignSequenceUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| campaign_id | |
| **sequence_id** | **string**| sequence_id | |
| **add_contacts_to_sequence_request** | [**\Keap\Core\V2\Model\AddContactsToSequenceRequest**](../Model/AddContactsToSequenceRequest.md)| addContactsToSequenceRequest | |

### Return type

[**\Keap\Core\V2\Model\AddContactsToSequenceResponse**](../Model/AddContactsToSequenceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignUsingGET1()`

```php
getCampaignUsingGET1($campaign_id): \Keap\Core\V2\Model\Campaign
```

Retrieve a Campaign

Retrieves a single campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string | campaign_id

try {
    $result = $apiInstance->getCampaignUsingGET1($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaignUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| campaign_id | |

### Return type

[**\Keap\Core\V2\Model\Campaign**](../Model/Campaign.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaignsUsingGET1()`

```php
listCampaignsUsingGET1($filter, $order_by, $page_size, $page_token, $stats): \Keap\Core\V2\Model\ListCampaignsResponse
```

List Campaigns

Retrieves a list of campaigns for the authenticated user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string | Filter to apply, allowed fields are: - (String) `name`  You will need to apply the `==` operator to check the equality of the filter with your searched text, in the encoded form `%3D%3D`. The search will look for the text anywhere in the campaign name. - `filter=name%3D%3DSpring Campaign` - `filter=name%3D%3DTag New Contacts`
$order_by = 'order_by_example'; // string | Attribute and direction to order items. One of the following fields: - `name` - `publisheddate` - `id` - `completedContactCount` - `activeContacts` - `datecreated` - `lastupdated`  One of the following directions: - `asc` - `desc`
$page_size = 0; // int | Total number of items to return per page
$page_token = 'page_token_example'; // string | Page token
$stats = True; // bool

try {
    $result = $apiInstance->listCampaignsUsingGET1($filter, $order_by, $page_size, $page_token, $stats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->listCampaignsUsingGET1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter to apply, allowed fields are: - (String) &#x60;name&#x60;  You will need to apply the &#x60;&#x3D;&#x3D;&#x60; operator to check the equality of the filter with your searched text, in the encoded form &#x60;%3D%3D&#x60;. The search will look for the text anywhere in the campaign name. - &#x60;filter&#x3D;name%3D%3DSpring Campaign&#x60; - &#x60;filter&#x3D;name%3D%3DTag New Contacts&#x60; | [optional] |
| **order_by** | **string**| Attribute and direction to order items. One of the following fields: - &#x60;name&#x60; - &#x60;publisheddate&#x60; - &#x60;id&#x60; - &#x60;completedContactCount&#x60; - &#x60;activeContacts&#x60; - &#x60;datecreated&#x60; - &#x60;lastupdated&#x60;  One of the following directions: - &#x60;asc&#x60; - &#x60;desc&#x60; | [optional] |
| **page_size** | **int**| Total number of items to return per page | [optional] |
| **page_token** | **string**| Page token | [optional] |
| **stats** | **bool**|  | [optional] |

### Return type

[**\Keap\Core\V2\Model\ListCampaignsResponse**](../Model/ListCampaignsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeContactsFromCampaignSequenceUsingPOST()`

```php
removeContactsFromCampaignSequenceUsingPOST($campaign_id, $sequence_id, $remove_contacts_from_sequence_request): \Keap\Core\V2\Model\RemoveContactsFromSequenceResponse
```

Remove Contacts from Campaign Sequence

Removes a list of contacts from a campaign sequence Response contains a map of the provided list of Contact Ids related to their individual result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Keap\Core\V2\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string | campaign_id
$sequence_id = 'sequence_id_example'; // string | sequence_id
$remove_contacts_from_sequence_request = new \Keap\Core\V2\Model\RemoveContactsFromSequenceRequest(); // \Keap\Core\V2\Model\RemoveContactsFromSequenceRequest | removeContactsFromSequenceRequest

try {
    $result = $apiInstance->removeContactsFromCampaignSequenceUsingPOST($campaign_id, $sequence_id, $remove_contacts_from_sequence_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->removeContactsFromCampaignSequenceUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| campaign_id | |
| **sequence_id** | **string**| sequence_id | |
| **remove_contacts_from_sequence_request** | [**\Keap\Core\V2\Model\RemoveContactsFromSequenceRequest**](../Model/RemoveContactsFromSequenceRequest.md)| removeContactsFromSequenceRequest | |

### Return type

[**\Keap\Core\V2\Model\RemoveContactsFromSequenceResponse**](../Model/RemoveContactsFromSequenceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
