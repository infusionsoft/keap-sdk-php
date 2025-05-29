# # Deal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the model. | [optional]
**name** | **string** | The name of the deal. This field is required and must have at least one character. |
**value** | [**\Keap\Core\V2\Model\Money**](Money.md) | The monetary value of the deal. This field is required and must be valid. |
**contacts** | [**\Keap\Core\V2\Model\DealContact[]**](DealContact.md) | The list of contacts associated with the deal. This field is required. |
**stage** | [**\Keap\Core\V2\Model\Stage**](Stage.md) | The stage of the deal. This field is required and must be valid. |
**stage_assignment_time** | **\DateTime** | The time when the deal was assigned to the current stage. This field is required. |
**owners** | [**\Keap\Core\V2\Model\Owner[]**](Owner.md) | The list of owners of the deal. This field is required. |
**owner_id** | **string** | The ID of the owner of the deal. This field is optional. | [optional]
**task_ids** | **string[]** | The list of task IDs associated with the deal. This field is required. |
**order_id** | **string** | The order of the deal. This field is optional. | [optional]
**status** | **string** | The status of the deal. This field is required. |
**estimated_close_time** | **\DateTime** | The estimated close time of the deal. This field is optional. | [optional]
**closed_time** | **\DateTime** | The actual close time of the deal. This field is optional. | [optional]
**custom_fields** | **array<string,mixed>** | The custom fields associated with the deal. This field is optional. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
