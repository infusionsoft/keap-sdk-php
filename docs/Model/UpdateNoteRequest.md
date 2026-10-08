# # UpdateNoteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | A value for either &#x60;title&#x60; or &#x60;type&#x60; is required. | [optional]
**text** | **string** | Note content | [optional]
**type** | **string** | A value for either &#x60;title&#x60; or &#x60;type&#x60; is required. The value may be one of &#x60;Appointment&#x60;, &#x60;Call&#x60;, &#x60;Email&#x60;, &#x60;Fax&#x60;, &#x60;Letter&#x60; or &#x60;Other&#x60; in Keap Max/Pro, or an admin-configured value in Classic. | [optional]
**user_id** | **string** | ID of user creating the note |
**is_pinned** | **bool** | Whether to pin this note | [optional]
**custom_fields** | [**\Keap\Core\V2\Model\CustomFieldValueObject[]**](CustomFieldValueObject.md) | Custom field values for the note. An empty array resets all custom fields to their defaults. | [optional]
**contact_id** | **string** | Associated contact ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
