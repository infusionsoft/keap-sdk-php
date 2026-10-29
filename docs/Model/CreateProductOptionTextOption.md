# # CreateProductOptionTextOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**minimum_characters** | **int** | Minimum allowable characters. Minimum is 0. | [optional]
**maximum_characters** | **int** | Maximum allowable characters. Minimum is 0. | [optional]
**allow_spaces** | **bool** | Whether or not to allow whitespace in the text. | [optional]
**only_starts_with** | **string** | Restricts the text to start with certain character types. Valid values are NONE, LETTER, DIGIT, BOTH. | [optional]
**only_ends_with** | **string** | Restricts the text to end with certain character types. Valid values are NONE, LETTER, DIGIT, BOTH. | [optional]
**only_contains** | **string** | Restricts the text to contain certain character types. Valid values are NONE, LETTER, DIGIT, BOTH. | [optional]
**error_message** | **string** | An error message to display if any rules are broken. Cannot be whitespace only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
