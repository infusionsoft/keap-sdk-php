# # UpdateOrderItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the order item. Must not be whitespace. | [optional]
**description** | **string** | The description of the order item. Must not be whitespace. | [optional]
**quantity** | **int** | The quantity. Must be greater than or equal to 1. | [optional]
**notes** | **string** | The notes for the order item. Must not be whitespace. | [optional]
**product_id** | **string** | The id of the product. Must be a valid product id. Used only for item_type PRODUCT or SUBSCRIPTION. | [optional]
**subscription_plan_id** | **string** | The id of the subscription plan. Must be a valid subscription plan id. Used only for item_type SUBSCRIPTION. | [optional]
**subscription_plan_description** | **string** | A short description of the subscription&#39;s schedule. Used only for item_type SUBSCRIPTION. Must not be whitespace. | [optional]
**price_per_unit** | **float** | The price per unit. | [optional]
**cost_per_unit** | **float** | The cost per unit. Used for item_type PRODUCT or SUBSCRIPTION. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
