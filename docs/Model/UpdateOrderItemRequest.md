# # UpdateOrderItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cost_per_unit** | **float** | The cost per unit. Must be greater than or equal to 0. | [optional]
**description** | **string** | The description of the order item. Must not be whitespace. | [optional]
**item_type** | **string** | The type of this order item. For now only [PRODUCT] is supported. Will default to [PRODUCT] if omitted. | [optional]
**name** | **string** | The name of the order item. Must not be whitespace. | [optional]
**notes** | **string** | The notes for the order item. Must not be whitespace. | [optional]
**price_per_unit** | **float** | The price per unit. Must be greater than or equal to 0. | [optional]
**quantity** | **int** | The quantity. Must be greater than or equal to 1. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
