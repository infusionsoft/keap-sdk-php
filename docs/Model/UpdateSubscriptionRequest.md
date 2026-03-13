# # UpdateSubscriptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | If the subscription is active or not. | [optional]
**allow_tax** | **bool** | Only works if the product associated with the product subscription is taxable. | [optional]
**auto_charge** | **bool** | If the subscription should auto charge on the next billing date. | [optional]
**billing_amount** | **float** | The billing amount. Must be 0 or greater. | [optional]
**billing_cycle** | **string** | The billing cycle for the subscription. | [optional]
**billing_frequency** | **int** | The number of days between billing cycles. Must be 1 or greater. | [optional]
**contact_id** | **string** | Id of the contact to create the subscription for. |
**days_between_retries** | **int** | Number of days between charge attempts. Must be 1 or greater. | [optional]
**end_date** | **string** | The date the subscription will end. Must not be in the past. | [optional]
**lead_affiliate_id** | **string** | The affiliate id for the lead of the subscription. | [optional]
**max_charge_attempts** | **int** | Maximum number of charge attempts. Must be 1 or greater. | [optional]
**next_bill_date** | **string** | The next date the subscription will bill. Must not be in the past. | [optional]
**payment_method_id** | **string** | Id associated with the payment method. | [optional]
**quantity** | **int** | The subscription quantity. Must be 1 or greater. | [optional]
**sale_affiliate_id** | **string** | The affiliate id for the sale of the subscription. | [optional]
**shipping_address** | [**\Keap\Core\V2\Model\AddressRequest**](AddressRequest.md) |  | [optional]
**subscription_plan_id** | **string** | Id of the product subscription plan. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
