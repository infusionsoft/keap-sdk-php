# # SubscriptionPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Subscription plan ID | [optional]
**frequency** | **int** | Interval at which a customer receives a product or service as part of a subscription plan. | [optional]
**active** | **bool** | If the subscription plan is active or not. | [optional]
**subscription_plan_name** | **string** | Plan name | [optional]
**cycle_type** | **string** | The cycle type of the subscription plan. | [optional]
**total_cycles** | **int** | Total number of cycles the plan will run before ending. Value of 0 indicates plan will never end. | [optional]
**plan_price** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) | Price of the plan | [optional]
**display_order_index** | **int** | The order index where this plan will be displayed on a page against other plans. Smaller number indicates plan will be displayed higher in the list. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
