# # GoalEventResultDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** | Whether the goal was successfully achieved | [optional]
**message** | **string** | A message with details about the result | [optional]
**automation_id** | **int** | The automation ID where the goal was achieved | [optional]
**goal_id** | **int** | The goal ID that was achieved | [optional]
**flow_start_results** | [**\Keap\Core\V2\Model\FlowEventResultDTO[]**](FlowEventResultDTO.md) | List of flows that were started as a result of achieving this goal | [optional]
**flow_stop_results** | [**\Keap\Core\V2\Model\FlowEventResultDTO[]**](FlowEventResultDTO.md) | List of flows that were stopped as a result of achieving this goal | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
