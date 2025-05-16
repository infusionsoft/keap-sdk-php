# # CreateSubscriptionV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_duplicate** | **bool** | If true, it will disable the check to see if there is already an identical subscription for the contact. Default is false. | [optional]
**allow_tax** | **bool** | Only works if the product the product subscription is for is taxable. Default is false. | [optional]
**auto_charge** | **bool** | Defaults to true. | [optional]
**billing_amount** | **float** | Must be 0 or greater. Default is the price in the product subscription. | [optional]
**contact_id** | **string** |  |
**first_bill_date** | **\DateTime** | The first day the subscription will bill, in EST. Must not be in the past. Default is today. | [optional]
**payment_method_id** | **string** | Default is the contact&#39;s most recently used card, if auto charge is true. Default is 0 otherwise. | [optional]
**quantity** | **int** | Must be greater than 0. Default is 1. | [optional]
**sale_affiliate_id** | **string** |  | [optional]
**subscription_plan_id** | **string** | Id of the product subscription. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
