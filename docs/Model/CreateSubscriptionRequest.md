# # CreateSubscriptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | If the subscription is active or not. Default is true | [optional]
**allow_duplicate** | **bool** | If true, it will disable the check to see if there is already an identical subscription for the contact. Default is false. | [optional]
**allow_tax** | **bool** | Only works if the product associated with the product subscription is taxable. Default is false. | [optional]
**auto_charge** | **bool** | If the subscription should auto charge on the next billing date. Default is true. | [optional]
**billing_amount** | **float** | The billing amount. Must be 0 or greater. Default is the price in the product subscription plan. | [optional]
**contact_id** | **string** | Id of the contact to create the subscription for. |
**days_between_retries** | **int** | Number of days between charge attempts. Must be 1 or greater. Default is the configured [Num Days Between Retries] value. | [optional]
**lead_affiliate_id** | **string** | The affiliate id for the lead of the subscription. Default is 0. | [optional]
**max_charge_attempts** | **int** | Maximum number of charge attempts. Must be 1 or greater. Default is the configured [Max Retries] value. | [optional]
**payment_method_id** | **string** | Id associated with the payment method. Default is the contact&#39;s most recently used card, if auto charge is true. Default is 0 otherwise. | [optional]
**quantity** | **int** | The subscription quantity. Must be 1 or greater. Default is 1. | [optional]
**sale_affiliate_id** | **string** | The affiliate id for the sale of the subscription. Default is 0. | [optional]
**shipping_address** | [**\Keap\Core\V2\Model\AddressRequest**](AddressRequest.md) |  | [optional]
**start_date** | **string** | The first day the subscription will bill. Must not be in the past. Default is today. | [optional]
**subscription_plan_id** | **string** | Id of the product subscription plan. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
