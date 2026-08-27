# # RestCreatePaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notes** | **string** | The notes for this payment. | [optional]
**payment_method_id** | **string** | The payment method id to charge immediately against this order. At least one of payment_method_id or payment_method_type is required. If payment_method_id is provided, payment_method_type is ignored. Omit if you want to add a payment record instead. | [optional]
**payment_method_type** | **string** | The manual payment method type for manually recording a payment. At least one of payment_method_id or payment_method_type is required. Ignored if payment_method_id is provided. Value must exactly match one of the Manual Payment Types configured for your application under Ecommerce Settings &gt; Orders (e.g. &#39;Credit Card (Manual)&#39;, &#39;Check&#39;, &#39;Cash&#39;, &#39;Money Order&#39;, &#39;Adjustment&#39;); unrecognized values will be rejected. Add custom types there if the one you need isn&#39;t listed. | [optional]
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
