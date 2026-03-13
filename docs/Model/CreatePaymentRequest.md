# # CreatePaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apply_to_commissions** | **bool** | Whether to apply this payment to commissions. | [optional]
**notes** | **string** | The notes for this payment. | [optional]
**payment_amount** | **float** | The amount to pay. Must not exceed the current balance of the order. Must be greater than 0 if charging with a payment_method_id | [optional]
**payment_method_id** | **string** | The payment method id to charge immediately against this order. Omit if you want to add a payment record instead. | [optional]
**payment_method_type** | **string** | The manual payment method type for manually recording a payment. Value must match against the list of types defined under your application&#39;s Order Settings. Ignored if payment_method_id is provided. | [optional]
**payment_time** | **string** | The date and time of payment. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
