# # UpdateProductOptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**required** | **bool** | Whether this option is required for product purchase. | [optional]
**option_label** | **string** | The displayable name of the option (e.g. Size). Cannot be whitespace only. | [optional]
**display_order** | **int** | The order in which this option will be displayed among other options. Minimum is 0. Lower values indicate higher priority in order. | [optional]
**minimum_characters** | **int** | Used only for option_type of &#x60;TEXT&#x60;. Minimum allowable characters. Minimum is 0. | [optional]
**maximum_characters** | **int** | Used only for option_type of &#x60;TEXT&#x60;. Maximum allowable characters. Minimum is 0. | [optional]
**allow_spaces** | **bool** | Used only for option_type of &#x60;TEXT&#x60;. Whether or not to allow whitespace in the text. | [optional]
**only_starts_with** | **string** | Used only for option_type of &#x60;TEXT&#x60;.  Restricts the text to start with certain character types. Valid values are NONE, LETTER, DIGIT, BOTH. | [optional]
**only_ends_with** | **string** | Used only for option_type of &#x60;TEXT&#x60;. Restricts the text to end with certain character types. Valid values are NONE, LETTER, DIGIT, BOTH. | [optional]
**only_contains** | **string** | Used only for option_type of &#x60;TEXT&#x60;. Restricts the text to contain certain character types. Valid values are NONE, LETTER, DIGIT, BOTH. | [optional]
**error_message** | **string** | Used only for option_type of &#x60;TEXT&#x60;. An error message to display if any rules are broken. Cannot be whitespace only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
