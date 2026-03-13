# # SubscriptionPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | If the subscription plan is active or not. | [optional]
**allow_prorating** | **bool** | Whether or not the plan will allow prorating. | [optional]
**cycle_type** | **string** | The cycle type of the subscription plan. Possible values: YEARLY, MONTHLY, WEEKLY, DAILY | [optional]
**display_order_index** | **int** | The order index where this plan will be displayed on a page against other plans. Smaller number indicates plan will be displayed higher in the list. | [optional]
**frequency** | **int** | Total number of times of a cycle type which constitutes a plan cycle. Minimum value is 1. | [optional]
**id** | **string** | Id of the subscription plan. | [optional]
**plan_price** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) |  | [optional]
**product_id** | **string** |  | [optional]
**total_cycles** | **int** | Total number of cycles the plan will run before ending. Value of 0 indicates plan will never end. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
