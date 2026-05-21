# # FreeTrialDiscount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for this free trial discount | [optional]
**name** | **string** | Name of the discount | [optional]
**description** | **string** | Description of the discount | [optional]
**criteria** | [**\Keap\Core\V2\Model\DiscountCriteria[]**](DiscountCriteria.md) | List of criteria that must be met for this discount to apply | [optional]
**hide_price** | **bool** | Whether to hide the price during the trial period | [optional]
**subscription_plan_id** | **string** | ID of the subscription plan this trial applies to | [optional]
**free_trial_days** | **int** | Number of days for the free trial period | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
