# # UpdateTaskResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Task ID | [optional]
**title** | **string** | Task title | [optional]
**description** | **string** | Task description | [optional]
**type** | **string** | Task type | [optional]
**priority** | **string** | Task priority | [optional]
**completed** | **bool** | Whether task is completed | [optional]
**create_time** | **string** | Creation timestamp (ISO-8601) | [optional]
**modification_time** | **string** | Last modification timestamp (ISO-8601) | [optional]
**completion_time** | **string** | Completion timestamp (ISO-8601) | [optional]
**due_time** | **string** | Due date/time (ISO-8601) | [optional]
**remind_time_mins** | **int** | Reminder minutes before due. | [optional]
**assigned_to_user_id** | **string** | Assigned user ID | [optional]
**created_by_user_id** | **string** | Creator user ID | [optional]
**contact_id** | **string** | Associated contact ID | [optional]
**custom_fields** | [**\Keap\Core\V2\Model\CustomFieldValueObject[]**](CustomFieldValueObject.md) | Custom field values for the task | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
