# # Automation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the automation | [optional]
**title** | **string** | The title of the automation | [optional]
**categories** | **string[]** | List of category IDs associated with this automation | [optional]
**status** | **string** | The publication status of the automation | [optional]
**locked** | **bool** | Whether the automation is locked for editing | [optional]
**active_contacts** | **int** | Number of contacts currently active in this automation | [optional]
**error_message** | **string** | Error message if the automation has issues | [optional]
**published_date** | **\DateTime** | The date and time when the automation was published. In ISO-8601 format | [optional]
**published_by** | **string** | The user ID who published the automation | [optional]
**published_timezone** | **string** | The timezone used when publishing | [optional]
**current_edit_lock_status** | [**\Keap\Core\V2\Model\AutomationLockStatus**](AutomationLockStatus.md) | Current edit lock status information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
