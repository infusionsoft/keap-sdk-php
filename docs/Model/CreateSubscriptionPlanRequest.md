# # CreateSubscriptionPlanRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Whether the subscription plan is active. | [optional]
**allow_prorating** | **bool** | Allow prorating of the subscription plan. | [optional]
**cycle_type** | **string** | The cycle type of the subscription plan. |
**display_order_index** | **int** | The order that this plan will be displayed to the user. | [optional]
**frequency** | **int** | The frequency of the subscription plan. Must be greater than 0. Default is 1. | [optional]
**plan_price** | **float** | The price of the subscription plan in the smallest currency unit. Must be greater than or equal to 0. |
**total_cycles** | **int** | How many cycles the subscription plan will have.  0 means infinite. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
