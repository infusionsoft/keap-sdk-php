# # CreateRestOrderItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** |  | [optional]
**item_type** | **string** | The type of this line item. For now only [PRODUCT] is supported. Will default to [PRODUCT] if omitted. | [optional]
**price** | **float** | Overridable price of the product. Must be greater than or equal to 0. If not specified, the product price will be used. | [optional]
**product_id** | **string** | The id of the product to be added to the order. |
**quantity** | **int** | Quantity must be greater than or equal to 1 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
