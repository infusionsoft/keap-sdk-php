# # UpdateOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_id** | **string** |  | [optional]
**lead_affiliate_id** | **string** |  | [optional]
**notes** | **string** |  | [optional]
**order_time** | **string** | ISO date-time of the transaction. e.g 2024-04-28 11:25:44 | [optional]
**order_title** | **string** |  | [optional]
**order_type** | **string** |  | [optional]
**payment_plan** | [**\Keap\Core\V2\Model\UpdatedPaymentPlan**](UpdatedPaymentPlan.md) |  | [optional]
**promo_codes** | **string[]** | Uses multiple strings as promo codes. The corresponding discount will be applied to the order. | [optional]
**sales_affiliate_id** | **string** |  | [optional]
**shipping_address** | [**\Keap\Core\V2\Model\AddressInformation**](AddressInformation.md) |  | [optional]
**terms** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
