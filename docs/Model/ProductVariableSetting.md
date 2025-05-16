# # ProductVariableSetting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contain_spaces** | **bool** | If spaces are allowed for the option | [optional]
**contains** | **string** | Requires the value (excluding start and end) to contain given type. Can be LETTER, NUMBER, or BOTH. | [optional]
**end_with** | **string** | Requires the value to end with the given type. Can be LETTER, NUMBER, or BOTH. | [optional]
**max_chars** | **int** | Max allowable chars. Its value must be greater than min_chars | [optional]
**min_chars** | **int** | Minimum allowable characters | [optional]
**start_with** | **string** | Requires the value to start with the given type. Can be LETTER, NUMBER, or BOTH. | [optional]
**validation_msg** | **string** | Customized validation message to display when option criteria aren’t met | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
