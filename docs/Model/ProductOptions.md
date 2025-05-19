# # ProductOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fixed_options** | [**\Keap\Core\V2\Model\ProductFixedOption[]**](ProductFixedOption.md) | List of option values for the fixed option | [optional]
**name** | **string** | The option name | [optional]
**required** | **bool** | If the user is required to select/fill in an option for the product | [optional]
**type** | **string** | Can be FIXED or VARIABLE. If FIXED, then fixed_options will be returned. If VARIABLE, then variable_setting will be returned. | [optional]
**variable_setting** | [**\Keap\Core\V2\Model\ProductVariableSetting**](ProductVariableSetting.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
