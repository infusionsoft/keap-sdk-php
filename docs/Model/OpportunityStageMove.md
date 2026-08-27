# # OpportunityStageMove

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID of this stage-move record | [optional]
**opportunity_id** | **string** | ID of the opportunity that was moved | [optional]
**move_time** | **string** | Date-time when the move occurred (ISO-8601 UTC) | [optional]
**move_from_stage_id** | **string** | ID of the stage moved FROM. 0 &#x3D; no previous stage (first move) | [optional]
**move_to_stage_id** | **string** | ID of the stage moved TO | [optional]
**prev_stage_move_time** | **string** | Date-time of the previous stage-move (ISO-8601 UTC). Null if first move. | [optional]
**user_id** | **string** | ID of the user associated with this move | [optional]
**created_by** | **string** | ID of the user who created this record | [optional]
**create_time** | **string** | Date-time this record was created (ISO-8601 UTC) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
