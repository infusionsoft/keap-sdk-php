# # PaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_info** | [**\Keap\Core\V2\Model\CardInfo**](CardInfo.md) |  | [optional]
**contact_id** | **string** |  | [optional]
**created_time** | **string** |  | [optional]
**merchant_account_id** | **string** |  | [optional]
**merchant_account_type** | **string** | The merchant type this payment method was authorized with. Valid values are: PAYPAL, AUTHORIZE, EWAY, WEPAY, STRIPE, KEAP_PAY, UNSUPPORTED | [optional]
**payment_method_id** | **string** |  | [optional]
**payment_method_type** | **string** | The type of payment method. For now, only CARD is supported. | [optional]
**status** | **string** | Status of the payment method. Fow now, only EXPIRED is supported. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
