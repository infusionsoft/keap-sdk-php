# # CreateFreeTrialDiscountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the discount |
**description** | **string** | Description of the discount | [optional]
**criteria** | [**\Keap\Core\V2\Model\DiscountCriteria[]**](DiscountCriteria.md) | List of criteria that must be met for this discount to apply | [optional]
**hide_price** | **bool** | Whether to hide the price during the trial period | [optional]
**subscription_plan_id** | **string** | ID of the subscription plan this trial applies to |
**free_trial_days** | **int** | Number of free trial days. Must be a positive number. Defaults to 0. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
