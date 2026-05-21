# # SubscriptionPlanList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The subscription plan id | [optional]
**active** | **bool** | If the subscription plan should be active/available for purchase | [optional]
**prorate** | **bool** | If the subscription plan should allow prorating | [optional]
**billing_cycle** | **string** | How frequent to bill. | [optional]
**billing_frequency** | **int** | How many times per billing cycle to bill | [optional]
**number_of_cycles** | **int** | How many billing cycles to bill. Optional field i.e. can be no value or 0. | [optional]
**plan_price** | [**\Keap\Core\V2\Model\CurrencyValueList**](CurrencyValueList.md) | The price of the subscription plan | [optional]
**order_index** | **int** | Determines the order in which the plan will be displayed | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
