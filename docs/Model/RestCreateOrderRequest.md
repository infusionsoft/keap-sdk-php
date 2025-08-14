# # RestCreateOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_id** | **string** |  |
**lead_affiliate_id** | **string** |  | [optional]
**notes** | **string** |  | [optional]
**order_items** | [**\Keap\Core\V2\Model\CreateOrderItemRequest[]**](CreateOrderItemRequest.md) |  |
**order_time** | **string** |  |
**order_title** | **string** |  |
**order_type** | **string** |  |
**promo_codes** | **string[]** | Uses multiple strings as promo codes. The corresponding discount will be applied to the order. | [optional]
**sales_affiliate_id** | **string** |  | [optional]
**shipping_address** | [**\Keap\Core\V2\Model\AddressInformation**](AddressInformation.md) |  | [optional]
**terms** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
