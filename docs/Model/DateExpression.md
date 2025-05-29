# # DateExpression

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** |  |
**parse_start** | **int** | Where in the expression this date exists (start) |
**parse_end** | **int** | Where in the expression this date exists |
**date_inferred** | **bool** | Whether the date portion of the results has been inferred (and can be ignored) |
**time_inferred** | **bool** | Whether the time portion of the results has been inferred (and can be ignored) |
**result** | [**\Keap\Core\V2\Model\LogicalDate**](LogicalDate.md) |  |
**recurring** | **bool** | Whether the results are recurring |
**recurse_until** | [**\Keap\Core\V2\Model\LogicalDate**](LogicalDate.md) | If recurring, when the recurrence ends |
**complete_match** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
