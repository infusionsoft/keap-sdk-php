# # SubscriptionPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id of the subscription plan. | [optional]
**active** | **bool** | If the subscription plan is active or not. | [optional]
**frequency** | **int** | Total number of times of a cycle type which constitutes a plan cycle. Minimum value is 1. | [optional]
**allow_prorating** | **bool** | Whether or not the plan will allow prorating. | [optional]
**product_id** | **string** | The product ID this plan belongs to. | [optional]
**cycle_type** | **string** | The cycle type of the subscription plan. | [optional]
**display_order_index** | **int** | The order index where this plan will be displayed on a page against other plans. Smaller number indicates plan will be displayed higher in the list. | [optional]
**total_cycles** | **int** | Total number of cycles the plan will run before ending. Value of 0 indicates plan will never end. | [optional]
**plan_price** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) | The price of the subscription plan. | [optional]
**preauthorize_amount** | **float** | The pre-authorize amount for the subscription plan. If null, this field is omitted from the response. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
