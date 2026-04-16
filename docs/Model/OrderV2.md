# # OrderV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the order | [optional]
**title** | **string** | Title of the order | [optional]
**status** | **string** | The order status. | [optional]
**total** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) | The total amount of the order. | [optional]
**contact** | [**\Keap\Core\V2\Model\BasicContact**](BasicContact.md) | Contact associated with this order | [optional]
**notes** | **string** | Internal notes for the order | [optional]
**terms** | **string** | Order terms and conditions | [optional]
**order_type** | **string** | The order type. | [optional]
**source_type** | **string** | The source where the order was created. | [optional]
**creation_time** | **\DateTime** | When this order was originally created. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**modification_time** | **\DateTime** | When this order was changed. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**order_time** | **\DateTime** | A user-defined date and time of the order. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**lead_affiliate_id** | **string** | ID of the lead affiliate | [optional]
**sales_affiliate_id** | **string** | ID of the sales affiliate | [optional]
**total_paid** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) | The total amount paid to the order. | [optional]
**total_due** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) | The total amount of the order that is due. This is not current balance. | [optional]
**shipping_information** | [**\Keap\Core\V2\Model\ShippingInformation**](ShippingInformation.md) | Shipping details for the order | [optional]
**refund_total** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) | Total amount refunded | [optional]
**allow_payment** | **bool** | Whether or not card-related payments should be allowed on this order. Applies only to Keap Pro/Max edition. | [optional]
**allow_paypal** | **bool** | Whether or not PayPal payments should be allowed on this order. Applies only to Keap Pro/Max edition. | [optional]
**order_items** | [**\Keap\Core\V2\Model\OrderItem[]**](OrderItem.md) | List of items in the order | [optional]
**payment_plan** | [**\Keap\Core\V2\Model\PaymentPlan**](PaymentPlan.md) | Payment plan details if applicable | [optional]
**invoice_number** | **string** | The associated invoice identifier. Applies only to Keap Pro/Max edition. Feature not yet supported. | [optional]
**files** | [**\Keap\Core\V2\Model\InvoiceFile[]**](InvoiceFile.md) | A list of attached files to this order. Applies only to Keap Pro/Max edition. | [optional]
**credit_status** | **string** | Credit status of the order | [optional]
**promo_code** | **string** | Promotional code applied | [optional]
**refund_status** | **string** | Refund status | [optional]
**synced** | **bool** | Whether order is synced with external systems | [optional]
**invoice_id** | **string** | Associated invoice ID | [optional]
**custom_fields** | [**\Keap\Core\V2\Model\CustomFieldValue[]**](CustomFieldValue.md) | List of custom field values applied to this order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
