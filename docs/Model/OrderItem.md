# # OrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cost_per_unit** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) |  | [optional]
**description** | **string** |  | [optional]
**discount** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) |  | [optional]
**id** | **string** |  | [optional]
**item_type** | **string** | The order item type. Valid values are: PRODUCT, SHIPPING, TAX, SERVICE, PRODUCT, UPSELL, FINANCE_CHARGE, DISCOUNT, PROGRAM, SUBSCRIPTION, DISCOUNT_FREE_TRIAL, DISCOUNT_ORDER_TOTAL, DISCOUNT_PRODUCT, DISCOUNT_PRODUCT_CATEGORY, DISCOUNT_SHIPPING, TIP, OTHER. | [optional]
**name** | **string** |  | [optional]
**notes** | **string** |  | [optional]
**price_per_unit** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) |  | [optional]
**product** | [**\Keap\Core\V2\Model\OrderItemProduct**](OrderItemProduct.md) |  | [optional]
**quantity** | **int** |  | [optional]
**special** | [**\Keap\Core\V2\Model\Discount**](Discount.md) |  | [optional]
**subscription_id** | **string** | If the order item is a subscription type, this refers to the subscription id that generated the order. | [optional]
**subscription_plan** | [**\Keap\Core\V2\Model\SubscriptionPlan**](SubscriptionPlan.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
