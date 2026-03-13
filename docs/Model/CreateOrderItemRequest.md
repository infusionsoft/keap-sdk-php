# # CreateOrderItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cost_per_unit** | **float** | The cost per unit. Must be greater than or equal to 0. If not specified, the product cost will be used. | [optional]
**description** | **string** | The description of the order item. Must not be whitespace. | [optional]
**item_type** | **string** | The type of this order item. For now only [PRODUCT] is supported. Will default to [PRODUCT] if omitted. | [optional]
**name** | **string** | The name of the order item. Must not be whitespace. If not specified, the product name will be used. | [optional]
**notes** | **string** | The notes for the order item. Must not be whitespace. | [optional]
**price_per_unit** | **float** | The price per unit. Must be greater than or equal to 0. If not specified, the product price will be used. | [optional]
**product_id** | **string** | The id of the product to be added to the order. Must be a valid product id. |
**quantity** | **int** | The quantity. Must be greater than or equal to 1. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
