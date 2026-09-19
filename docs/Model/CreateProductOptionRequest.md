# # CreateProductOptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**required** | **bool** | Whether this option is required for product purchase. | [optional] [default to false]
**option_type** | **string** | The type of option. Possible valid values are LIST and TEXT. |
**option_label** | **string** | The displayable name of the option (e.g. Size). Cannot be whitespace only. | [optional]
**display_order** | **int** | The order in which this option will be displayed among other options. Minimum is 0. Lower values indicate higher priority in order. | [optional]
**list_items** | [**\Keap\Core\V2\Model\CreateProductOptionListOption[]**](CreateProductOptionListOption.md) | Appears only for option_type of LIST. A fixed list of available selectable items for this product option. | [optional]
**text_rules** | [**\Keap\Core\V2\Model\CreateProductOptionTextOption**](CreateProductOptionTextOption.md) | The option is a user-defined free-form field. The settings define the restrictions on what can be entered. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
