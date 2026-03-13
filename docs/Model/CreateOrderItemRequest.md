# # CreateOrderItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the order item. Must not be whitespace. If not specified, the product name will be used. | [optional]
**description** | **string** | The description of the order item. Must not be whitespace. | [optional]
**quantity** | **int** | The quantity. Must be greater than or equal to 1. |
**notes** | **string** | The notes for the order item. Must not be whitespace. | [optional]
**product_id** | **string** | The id of the product to be added to the order. Must be a valid product id. Required for item_type PRODUCT or SUBSCRIPTION. | [optional]
**subscription_plan_id** | **string** | The id of the subscription plan to be added to the order. Must be a valid subscription plan id. Required only when the item_type is SUBSCRIPTION. | [optional]
**subscription_plan_description** | **string** | A short description of the subscription&#39;s schedule. Used only for item_type SUBSCRIPTION. Must not be whitespace. | [optional]
**item_type** | **string** | The type of this order item. Will default to [PRODUCT] if omitted. | [optional]
**price_per_unit** | **float** | The price per unit. For item_type PRODUCT or SUBSCRIPTION, if not specified, the product price will be used. | [optional]
**cost_per_unit** | **float** | The cost per unit. Used only for item_type PRODUCT or SUBSCRIPTION. If not specified, the product cost will be used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
