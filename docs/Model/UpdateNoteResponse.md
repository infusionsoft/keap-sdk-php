# # UpdateNoteResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Note ID | [optional]
**text** | **string** | Note content | [optional]
**title** | **string** | Note title | [optional]
**type** | **string** | Note type | [optional]
**contact_id** | **string** | Associated contact ID | [optional]
**assigned_to_user** | [**\Keap\Core\V2\Model\BasicUser**](BasicUser.md) | User assigned to this note | [optional]
**create_time** | **string** | Creation timestamp (ISO-8601) | [optional]
**update_time** | **string** | Last update timestamp (ISO-8601) | [optional]
**last_updated_by_user_id** | **string** | ID of user who last updated | [optional]
**pinned_at** | **string** | Pin timestamp (ISO-8601), null if not pinned | [optional]
**created_by_user_id** | **string** | ID of user who created | [optional]
**custom_fields** | [**\Keap\Core\V2\Model\CustomFieldValueObject[]**](CustomFieldValueObject.md) | Custom field values for the note | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
