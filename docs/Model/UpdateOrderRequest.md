# # UpdateOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notes** | **string** | Internal notes | [optional]
**terms** | **string** | Order terms | [optional]
**title** | **string** | A title for the invoice | [optional]
**contact_id** | **string** | ID of the contact for this order | [optional]
**order_title** | **string** | Title for the order | [optional]
**order_time** | **\DateTime** | The date and time of the order. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**order_type** | **string** | The order type. | [optional]
**promo_codes** | **string[]** | Uses multiple strings as promo codes. The corresponding discount will be applied to the order. | [optional]
**lead_affiliate_id** | **string** | Lead affiliate ID | [optional]
**sales_affiliate_id** | **string** | Sales affiliate ID | [optional]
**shipping_address** | [**\Keap\Core\V2\Model\AddressInformation**](AddressInformation.md) | Shipping address for the order | [optional]
**payment_plan** | [**\Keap\Core\V2\Model\UpdatedPaymentPlan**](UpdatedPaymentPlan.md) | Payment plan details | [optional]
**custom_fields** | [**\Keap\Core\V2\Model\CustomFieldValue[]**](CustomFieldValue.md) | List of custom field values to apply to this order | [optional]
**sent_time** | **\DateTime** | The date and time the invoice was sent. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**due_time** | **\DateTime** | The date and time the invoice is due. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**invoice_number** | **string** | Invoice number | [optional]
**external_create_user** | **string** | The external system user that created this order. | [optional]
**external_create_time** | **\DateTime** | The date and time the order was created in the external system. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**external_update_time** | **\DateTime** | The date and time the order was last updated in the external system. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
