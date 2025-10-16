# # UpdateOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_id** | **string** |  | [optional]
**lead_affiliate_id** | **string** |  | [optional]
**notes** | **string** |  | [optional]
**order_time** | **string** | The date and time of the order. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**order_title** | **string** |  | [optional]
**order_type** | **string** | The order type. Valid values are: ONLINE, OFFLINE. | [optional]
**payment_plan** | [**\Keap\Core\V2\Model\UpdatedPaymentPlan**](UpdatedPaymentPlan.md) |  | [optional]
**promo_codes** | **string[]** | Uses multiple strings as promo codes. The corresponding discount will be applied to the order. | [optional]
**sales_affiliate_id** | **string** |  | [optional]
**shipping_address** | [**\Keap\Core\V2\Model\AddressInformation**](AddressInformation.md) |  | [optional]
**terms** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
