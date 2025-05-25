# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_id** | **string** | Reference to the contact the transaction was for. | [optional]
**id** | **string** | The unique identifier of the transaction. | [optional]
**is_live** | **bool** | true if this is a live transaction, false if the transaction is a test or sandbox transaction. | [optional]
**is_successful** | **bool** | true if the transaction resulted in a success, false if the transaction resulted in a failure or error. | [optional]
**order_id** | **string** | Reference to the order this transaction was for | [optional]
**payment_gateway_id** | **string** | Reference to the payment processor to where the transaction attempt was made. | [optional]
**payment_id** | **string** | Reference to the payment record that on successful transactions. No reference if the transaction failed. | [optional]
**payment_processor_type** | **string** |  | [optional]
**transaction_amount** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) |  | [optional]
**transaction_time** | **string** | ISO date-time of the transaction. e.g 2024-04-28 11:25:44 | [optional]
**transaction_type** | **string** | The type of transaction. Possible values: CAPTURE, VOID, REFUND, CREDIT, APPROVAL | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
