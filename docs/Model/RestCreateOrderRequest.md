# # RestCreateOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notes** | **string** | Internal notes | [optional]
**terms** | **string** | Order terms | [optional]
**contact_id** | **string** | ID of the contact for this order |
**order_items** | [**\Keap\Core\V2\Model\CreateOrderItemRequest[]**](CreateOrderItemRequest.md) | List of items to include in the order | [optional]
**order_title** | **string** | Title for the order |
**order_time** | **\DateTime** | The date and time of the order. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) |
**order_type** | **string** | The order type. |
**promo_codes** | **string[]** | Uses multiple strings as promo codes. The corresponding discount will be applied to the order. | [optional]
**lead_affiliate_id** | **string** | Lead affiliate ID | [optional]
**sales_affiliate_id** | **string** | Sales affiliate ID | [optional]
**shipping_address** | [**\Keap\Core\V2\Model\AddressInformation**](AddressInformation.md) | Shipping address for the order | [optional]
**custom_fields** | [**\Keap\Core\V2\Model\CustomFieldValue[]**](CustomFieldValue.md) | List of custom field values to apply to this order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
