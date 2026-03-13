# # CreateUpdateContactRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addresses** | [**\Keap\Core\V2\Model\Address[]**](Address.md) | Any address not listed here will be removed if it already exists. If an empty array is specified, all existing values will be removed. | [optional]
**anniversary_date** | **string** |  | [optional]
**birth_date** | **string** |  | [optional]
**company** | [**\Keap\Core\V2\Model\BasicCompany**](BasicCompany.md) |  | [optional]
**contact_type** | **string** |  | [optional]
**custom_fields** | [**\Keap\Core\V2\Model\CustomFieldValue[]**](CustomFieldValue.md) | Any address not listed here will be removed if it already exists. If an empty array is specified, all existing values will be removed. | [optional]
**email_addresses** | [**\Keap\Core\V2\Model\EmailAddressRequest[]**](EmailAddressRequest.md) | Any address not listed here will be removed if it already exists. If an empty array is specified, all existing values will be removed. | [optional]
**family_name** | **string** |  | [optional]
**fax_numbers** | [**\Keap\Core\V2\Model\FaxNumber[]**](FaxNumber.md) | Any address not listed here will be removed if it already exists. If an empty array is specified, all existing values will be removed. | [optional]
**given_name** | **string** |  | [optional]
**job_title** | **string** |  | [optional]
**leadsource_id** | **string** |  | [optional]
**middle_name** | **string** |  | [optional]
**origin** | [**\Keap\Core\V2\Model\OriginRequest**](OriginRequest.md) |  | [optional]
**owner_id** | **string** |  | [optional]
**phone_numbers** | [**\Keap\Core\V2\Model\PhoneNumber[]**](PhoneNumber.md) | Any address not listed here will be removed if it already exists. If an empty array is specified, all existing values will be removed. | [optional]
**preferred_locale** | **string** |  | [optional]
**preferred_name** | **string** |  | [optional]
**prefix** | **string** |  | [optional]
**referral_code** | **string** |  | [optional]
**social_accounts** | [**\Keap\Core\V2\Model\SocialAccount[]**](SocialAccount.md) | Any address not listed here will be removed if it already exists. If an empty array is specified, all existing values will be removed. | [optional]
**source_type** | **string** |  | [optional]
**spouse_name** | **string** |  | [optional]
**suffix** | **string** |  | [optional]
**time_zone** | **string** |  | [optional]
**utm_parameters** | [**\Keap\Core\V2\Model\CreateContactUtmPropertiesRequest**](CreateContactUtmPropertiesRequest.md) |  | [optional]
**website** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
