# # SubscriptionList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id of the subscription. | [optional]
**quantity** | **int** | The subscription quantity. | [optional]
**active** | **bool** | If the subscription is active or not. | [optional]
**contact_id** | **string** | Id of the contact associated with the subscription. | [optional]
**product_id** | **string** | Id of the product associated with the subscription. | [optional]
**subscription_plan_id** | **string** | Id of the product subscription plan. | [optional]
**billing_amount** | **float** | The billing amount. | [optional]
**auto_charge** | **bool** | If the subscription should auto charge on the next billing date. | [optional]
**billing_frequency** | **int** | The billing frequency in days. | [optional]
**billing_cycle** | **string** | The billing cycle of the subscription. | [optional]
**start_date** | **\DateTime** | The first day the subscription will bill. | [optional]
**last_bill_date** | **\DateTime** | The last date the subscription was billed. | [optional]
**next_bill_date** | **\DateTime** | The next date the subscription will bill. | [optional]
**end_date** | **\DateTime** | The last date the subscription will bill. | [optional]
**merchant_account_id** | **string** | The merchant account id associated with the subscription. | [optional]
**payment_method_id** | **string** | Id associated with the payment method. | [optional]
**allow_tax** | **bool** | If the subscription allows tax. | [optional]
**max_charge_attempts** | **int** | Maximum number of charge attempts. | [optional]
**days_between_retries** | **int** | Number of days between charge attempts. | [optional]
**lead_affiliate_id** | **string** | The affiliate id for the lead of the subscription. | [optional]
**sale_affiliate_id** | **string** | The affiliate id for the sale of the subscription. | [optional]
**promo_code** | **string** | The promo code for the subscription. | [optional]
**shipping_option_id** | **string** | The shipping option ID for the subscription. | [optional]
**reason_stopped** | **string** | The reason the subscription is no longer active. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
