# # ProductOptionsDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The option name | [optional]
**type** | **string** | The option type. If FIXED, then fixed_options will be returned. If VARIABLE, then variable_setting will be returned. | [optional]
**required** | **bool** | If the user is required to select/fill in an option for the product | [optional]
**fixed_options** | [**\Keap\Core\V2\Model\ProductFixedOptionDetail[]**](ProductFixedOptionDetail.md) | List of option values for the fixed option | [optional]
**variable_setting** | [**\Keap\Core\V2\Model\ProductVariableSettingDetail**](ProductVariableSettingDetail.md) | The option is a user-defined free-form field. The settings define the restrictions on what can be entered. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
