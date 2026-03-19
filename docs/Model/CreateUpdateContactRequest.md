# # CreateUpdateContactRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addresses** | [**\Keap\Core\V2\Model\Address[]**](Address.md) | Any address not listed here will be removed if it already exists. If an empty array is specified, all existing values will be removed. | [optional]
**company** | [**\Keap\Core\V2\Model\BasicCompany**](BasicCompany.md) |  | [optional]
**origin** | [**\Keap\Core\V2\Model\OriginRequest**](OriginRequest.md) |  | [optional]
**prefix** | **string** | Name prefix | [optional]
**suffix** | **string** | Name suffix | [optional]
**website** | **string** | Personal website URL | [optional]
**anniversary_date** | **string** | The anniversary date | [optional]
**birth_date** | **string** | The birth date | [optional]
**contact_type** | **string** | Type of contact | [optional]
**custom_fields** | [**\Keap\Core\V2\Model\CustomFieldValue[]**](CustomFieldValue.md) | Any address not listed here will be removed if it already exists. If an empty array is specified, all existing values will be removed. | [optional]
**email_addresses** | [**\Keap\Core\V2\Model\EmailAddressRequest[]**](EmailAddressRequest.md) | Any address not listed here will be removed if it already exists. If an empty array is specified, all existing values will be removed. | [optional]
**family_name** | **string** | Last name / surname | [optional]
**fax_numbers** | [**\Keap\Core\V2\Model\FaxNumber[]**](FaxNumber.md) | Any address not listed here will be removed if it already exists. If an empty array is specified, all existing values will be removed. | [optional]
**given_name** | **string** | First name | [optional]
**job_title** | **string** | Job title | [optional]
**leadsource_id** | **string** | Lead source identifier | [optional]
**middle_name** | **string** | Middle name | [optional]
**owner_id** | **string** | ID of the user who owns this contact | [optional]
**phone_numbers** | [**\Keap\Core\V2\Model\PhoneNumber[]**](PhoneNumber.md) | Any address not listed here will be removed if it already exists. If an empty array is specified, all existing values will be removed. | [optional]
**preferred_locale** | **string** | Preferred locale | [optional]
**preferred_name** | **string** | Preferred name or nickname | [optional]
**referral_code** | **string** | Referral code | [optional]
**social_accounts** | [**\Keap\Core\V2\Model\SocialAccount[]**](SocialAccount.md) | Any address not listed here will be removed if it already exists. If an empty array is specified, all existing values will be removed. | [optional]
**source_type** | **string** |  | [optional]
**spouse_name** | **string** | Spouse&#39;s name | [optional]
**time_zone** | **string** | Contact&#39;s timezone | [optional]
**utm_parameters** | [**\Keap\Core\V2\Model\CreateContactUtmPropertiesRequest**](CreateContactUtmPropertiesRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
