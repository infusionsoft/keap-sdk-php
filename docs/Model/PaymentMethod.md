# # PaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_id** | **string** | The id of the contact the payment method is associated with. | [optional]
**payment_method_id** | **string** | The unique identifier of the payment method. | [optional]
**credit_card_id** | **string** | For backward-compatibility with v1 endpoints. If present, it&#39;s the credit card id this payment method refers to. | [optional]
**merchant_account_type** | **string** | The merchant account type through which the payment method was tokenized. | [optional]
**merchant_account_id** | **string** | The merchant account id through which the payment method was tokenize. | [optional]
**payment_method_type** | **string** | The type of payment method. For now, only CARD is supported. | [optional]
**created_time** | **\DateTime** | When this payment method was made. In ISO-8601 format. | [optional]
**card_info** | [**\Keap\Core\V2\Model\CardInfo**](CardInfo.md) | If present, it provides additional details for payment methods of payment_method_type CARD. | [optional]
**status** | **string** | Status of the payment method. Fow now, only EXPIRED is supported. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
