# # PaymentPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_charge** | **bool** | Whether to auto-charge payments | [optional]
**max_charge_attempts** | **int** | Maximum charge attempts | [optional]
**days_between_retries** | **int** | Days between retry attempts | [optional]
**payment_method_id** | **string** | Payment method ID to charge | [optional]
**initial_payment_amount** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) | Initial payment amount | [optional]
**initial_payment_percent** | **float** | Initial payment as percentage | [optional]
**initial_payment_date** | **\DateTime** | The initial payment date. In ISO-8601 date format (e.g. 2024-05-21) | [optional]
**plan_start_date** | **\DateTime** | The start date of the payment plan. In ISO-8601 date format (e.g. 2024-05-21) |
**number_of_payments** | **int** | Number of payments in the plan |
**days_between_payments** | **int** | Days between each payment |
**payment_plan_items** | [**\Keap\Core\V2\Model\PaymentPlanItem[]**](PaymentPlanItem.md) | List of scheduled payment items | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
