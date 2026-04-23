# # OrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the order item | [optional]
**name** | **string** | Name of the item | [optional]
**description** | **string** | Item description | [optional]
**notes** | **string** | Additional notes | [optional]
**quantity** | **int** | Quantity ordered | [optional]
**discount** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) | If the order item is a discount type, this is the amount of the discount. | [optional]
**special** | [**\Keap\Core\V2\Model\Discount**](Discount.md) | If the line item is a discount type, the details about the discount. | [optional]
**product** | [**\Keap\Core\V2\Model\OrderItemProduct**](OrderItemProduct.md) | Product details | [optional]
**subscription_id** | **string** | If the order item is a subscription type, this refers to the subscription id that generated the order. | [optional]
**item_type** | **string** | The type of order item. | [optional]
**cost_per_unit** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) | Cost per unit | [optional]
**price_per_unit** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) | Price per unit charged to customer | [optional]
**subscription_plan** | [**\Keap\Core\V2\Model\SubscriptionPlan**](SubscriptionPlan.md) | If the order item is a subscription type, the details of the subscription plan. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
