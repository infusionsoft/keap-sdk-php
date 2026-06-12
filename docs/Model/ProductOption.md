# # ProductOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique id of the product option | [optional]
**required** | **bool** | Whether this option is required for product purchase. | [optional]
**option_label** | **string** | The displayable name of the option. E.g. Size | [optional]
**product_id** | **string** | The product id that this option belongs to. | [optional]
**option_type** | **string** | The type of option. Possible valid values are LIST and TEXT. | [optional]
**display_order** | **int** | The order in which this option will be displayed among other options. Minimum is 0. Lower values indicate higher priority in order. | [optional]
**list_items** | [**\Keap\Core\V2\Model\ListOption[]**](ListOption.md) | Appears only for option_type of LIST. A fixed list of available selectable items for this product option. e.g (Medium) | [optional]
**text_rules** | [**\Keap\Core\V2\Model\TextOption**](TextOption.md) | The option is a user-defined free-form field. The settings define the restrictions on what can be entered. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
