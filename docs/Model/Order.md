# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_payment** | **bool** | Whether or not card-related payments should be allowed on this order. Applies only to Keap Pro/Max edition. | [optional]
**allow_paypal** | **bool** | Whether or not PayPal payments should be allowed on this order. Applies only to Keap Pro/Max edition. | [optional]
**contact** | [**\Keap\Core\V2\Model\BasicContact**](BasicContact.md) |  | [optional]
**creation_time** | **string** | When this order was originally created. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**files** | [**\Keap\Core\V2\Model\InvoiceFile[]**](InvoiceFile.md) | A list of attached files to this order. Applies only to Keap Pro/Max edition. | [optional]
**id** | **string** |  | [optional]
**invoice_number** | **string** | The associated invoice identifier. Applies only to Keap Pro/Max edition. Feature not yet supported. | [optional]
**lead_affiliate_id** | **string** |  | [optional]
**modification_time** | **string** | When this order was changed. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**notes** | **string** |  | [optional]
**order_items** | [**\Keap\Core\V2\Model\OrderItem[]**](OrderItem.md) |  | [optional]
**order_time** | **string** | A user-defined date and time of the order. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**order_type** | **string** | The order type. Valid values are: ONLINE, OFFLINE. | [optional]
**payment_plan** | [**\Keap\Core\V2\Model\PaymentPlan**](PaymentPlan.md) |  | [optional]
**refund_total** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) |  | [optional]
**sales_affiliate_id** | **string** |  | [optional]
**shipping_information** | [**\Keap\Core\V2\Model\ShippingInformation**](ShippingInformation.md) |  | [optional]
**source_type** | **string** | The source where the order was created. Valid values include: API, CHECKOUT_FORM, INVOICE, MANUAL_PAYMENT, QUICKBOOKS, UNKNOWN. | [optional]
**status** | **string** | The order status. Valid values are: DRAFT, SENT, VIEWED, PAID. | [optional]
**terms** | **string** |  | [optional]
**title** | **string** |  | [optional]
**total** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) |  | [optional]
**total_due** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) |  | [optional]
**total_paid** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
