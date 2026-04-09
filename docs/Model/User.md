# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\Keap\Core\V2\Model\Address**](Address.md) | The user&#39;s address | [optional]
**title** | **string** | The user&#39;s job title | [optional]
**website** | **string** | The user&#39;s website URL | [optional]
**partner** | **bool** | Whether the user is a partner | [optional]
**admin** | **bool** | Whether the user is an admin | [optional]
**status** | **string** | The user&#39;s status | [optional]
**id** | **string** | The unique identifier of the user | [optional]
**global_user_id** | **string** | The global user identifier across tenants | [optional]
**keap_id** | **string** | The Keap ID of the user | [optional]
**given_name** | **string** | The user&#39;s first name | [optional]
**family_name** | **string** | The user&#39;s last name | [optional]
**phone_numbers** | [**\Keap\Core\V2\Model\PhoneNumber[]**](PhoneNumber.md) | List of user&#39;s phone numbers | [optional]
**fax_numbers** | [**\Keap\Core\V2\Model\FaxNumber[]**](FaxNumber.md) | List of user&#39;s fax numbers | [optional]
**email_addresses** | [**\Keap\Core\V2\Model\EmailAddress[]**](EmailAddress.md) | List of user&#39;s email addresses | [optional]
**social_accounts** | [**\Keap\Core\V2\Model\SocialAccount[]**](SocialAccount.md) | List of user&#39;s social media accounts | [optional]
**company_name** | **string** | The user&#39;s company name | [optional]
**created_by** | **int** | ID of the user who created this user | [optional]
**create_time** | **\DateTime** | When the user was created, in ISO-8601 format | [optional]
**updated_by** | **int** | ID of the user who last updated this user | [optional]
**update_time** | **\DateTime** | When the user was last updated, in ISO-8601 format | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
