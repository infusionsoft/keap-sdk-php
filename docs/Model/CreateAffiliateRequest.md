# # CreateAffiliateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The Affiliate code which have some validations. 1. The code should not have white spaces 2. The code should starts with letters 3. The code minimum 4 characters length |
**status** | **string** | The Affiliate Status | [optional] [default to 'INACTIVE']
**name** | **string** | The Affiliate name will be derived from the Contact, when not explicitly provided | [optional]
**contact_id** | **string** | The contactId identifier , Must be a positive number |
**parent_affiliate_id** | **string** | The Parent Affiliate Id | [optional]
**notify_on_sale** | **bool** | Whether to notify on sale events | [optional]
**notify_on_lead** | **bool** | Whether to notify on lead events | [optional]
**track_leads_days** | **int** | Number of days to track leads | [optional]
**password** | **string** | Affiliate portal password | [optional]
**custom_fields** | [**\Keap\Core\V2\Model\CustomFieldValue[]**](CustomFieldValue.md) | List of custom field values to apply to this affiliate | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
