# # Payment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the payment. | [optional]
**type** | **string** | A label describing the type of payment made. | [optional]
**amount** | **float** | The payment amount. | [optional]
**note** | **string** | A note about the payment. | [optional]
**status** | **string** | Provides the current status of the payment, if available. | [optional]
**commissioned** | **bool** | Whether this payment had a commission. | [optional]
**synced** | **bool** | Whether or not the data is synced externally. | [optional]
**payment_time** | **\DateTime** | When this payment was made. In ISO-8601 format. | [optional]
**refund_payment_id** | **string** | If this payment had a refund, this refers to the id of the refund payment. | [optional]
**contact_id** | **string** | The id of the contact the payment is associated with. | [optional]
**order_ids** | **string[]** | List of order ids the payment was made was against. | [optional]
**update_time** | **\DateTime** | When this payment was updated. In ISO-8601 format. | [optional]
**external_transaction_id** | **string** | An external id - typically from a payment processor - that references this transaction. | [optional]
**merchant_account_id** | **string** | The merchant account id through which the transaction was made. | [optional]
**merchant_account_type** | **string** | The merchant account id through which the transaction was made. | [optional]
**payment_method** | [**\Keap\Core\V2\Model\PaymentMethod**](PaymentMethod.md) | Details of the payment method used for this transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
