# # InvoiceOrderPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The invoice order payment ID. | [optional]
**amount** | **float** | The payment amount. | [optional]
**note** | **string** | A note about the payment. | [optional]
**invoice_id** | **string** | The invoice ID. | [optional]
**payment_id** | **string** | The payment ID. | [optional]
**pay_time** | **\DateTime** | The date and time of payment. | [optional]
**pay_status** | **string** | The payment status. | [optional]
**last_updated_time** | **\DateTime** | When this payment record was last updated. | [optional]
**skip_commission** | **bool** | Whether to skip commission for this payment. | [optional]
**refund_invoice_payment_id** | **string** | The refund invoice payment ID, if this is a refund. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
