# # Subscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | If the subscription is active or not. | [optional]
**allow_tax** | **bool** | If the subscription allows tax. | [optional]
**auto_charge** | **bool** | If the subscription should auto charge on the next billing date. | [optional]
**billing_amount** | **float** | The billing amount. | [optional]
**billing_cycle** | **string** | The billing cycle of the subscription. | [optional]
**billing_frequency** | **int** | The billing frequency in days. | [optional]
**contact_id** | **string** | Id of the contact to create the subscription for. | [optional]
**days_between_retries** | **int** | Number of days between charge attempts. | [optional]
**end_date** | **string** | The last date the subscription will bill. | [optional]
**id** | **string** | Id of the subscription. | [optional]
**last_bill_date** | **string** | The last date the subscription was billed. | [optional]
**lead_affiliate_id** | **string** | The affiliate id for the lead of the subscription. | [optional]
**max_charge_attempts** | **int** | Maximum number of charge attempts. | [optional]
**merchant_account_id** | **string** | The merchant account id associated with the subscription. | [optional]
**next_bill_date** | **string** | The next date the subscription will bill. | [optional]
**payment_method_id** | **string** | Id associated with the payment method. | [optional]
**product_id** | **string** | Id of the product associated with the subscription. | [optional]
**quantity** | **int** | The subscription quantity. | [optional]
**sale_affiliate_id** | **string** | The affiliate id for the sale of the subscription. | [optional]
**shipping_address** | [**\Keap\Core\V2\Model\Address**](Address.md) |  | [optional]
**start_date** | **string** | The first day the subscription will bill. | [optional]
**subscription_plan_id** | **string** | Id of the product subscription plan. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
