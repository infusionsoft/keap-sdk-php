# # CreateUpdateTaskRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Task title | [optional]
**description** | **string** | Task description | [optional]
**type** | **string** | Task type | [optional]
**priority** | **string** | Task priority | [optional]
**completed** | **bool** | Whether task is completed | [optional]
**completion_time** | **string** | Completion timestamp (ISO-8601) | [optional]
**due_time** | **string** | Due date/time (ISO-8601) | [optional]
**remind_time_mins** | **int** | Value in minutes before start_date to show pop-up reminder. | [optional]
**assigned_to_user_id** | **string** | Assigned user ID | [optional]
**contact_id** | **string** | Associated contact ID | [optional]
**custom_fields** | [**\Keap\Core\V2\Model\CustomFieldValueObject[]**](CustomFieldValueObject.md) | Custom field values for the task. An empty array resets all custom fields to their defaults. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
