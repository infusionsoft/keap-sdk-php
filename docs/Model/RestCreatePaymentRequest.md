# # RestCreatePaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notes** | **string** | The notes for this payment. | [optional]
**payment_method_id** | **string** | The payment method id to charge immediately against this order. Omit if you want to add a payment record instead. | [optional]
**payment_method_type** | **string** | The manual payment method type for manually recording a payment. Value must match against the list of types defined under your application&#39;s Order Settings. Ignored if payment_method_id is provided. | [optional]
**payment_time** | **\DateTime** | The date and time of payment. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**payment_amount** | **float** | The amount to pay. Must not exceed the current balance of the order. Must be greater than 0 if charging with a payment_method_id |
**apply_to_commissions** | **bool** | Whether to apply this payment to commissions. |
**external_source** | **string** | The external source type of this payment. | [optional]
**external_source_value** | **string** | The external source value of this payment. | [optional]
**external_status_value** | **string** | The external status value of this payment. | [optional]
**external_create_time** | **\DateTime** | The external creation timestamp of this payment. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**external_update_time** | **\DateTime** | The external update timestamp of this payment. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**external_create_user** | **string** | The user who created this payment externally. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
