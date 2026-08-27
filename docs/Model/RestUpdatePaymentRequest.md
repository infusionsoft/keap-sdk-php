# # RestUpdatePaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_source** | **string** | The external source type of this payment. | [optional]
**external_source_value** | **string** | The external source value of this payment. | [optional]
**external_status_value** | **string** | The external status value of this payment. | [optional]
**external_create_time** | **\DateTime** | The external creation timestamp of this payment. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**external_update_time** | **\DateTime** | The external update timestamp of this payment. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z) | [optional]
**external_create_user** | **string** | The user who created this payment externally. | [optional]
**notes** | **string** | Notes or description for the payment. | [optional]
**payment_time** | **\DateTime** | The date and time of payment. In ISO-8601 format (e.g. 2024-05-21T23:00:00Z). Can only be modified for manually recorded payments. | [optional]
**payment_amount** | **float** | The payment amount. Can only be modified for manually recorded payments. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
