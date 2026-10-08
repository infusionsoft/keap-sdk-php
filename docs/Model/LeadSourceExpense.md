# # LeadSourceExpense

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the expense. | [optional]
**title** | **string** | The title of the expense | [optional]
**notes** | **string** | The notes for the expense | [optional]
**amount** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) | The amount of the expense | [optional]
**lead_source_id** | **string** | The ID of the lead source this expense belongs to | [optional]
**lead_source_recurring_expense_id** | **string** | If this expense was incurred from a recurring expense, this is the ID of that recurring expense | [optional]
**create_time** | **\DateTime** | The date the expense was created | [optional]
**update_time** | **\DateTime** | The date the expense was last updated | [optional]
**incurred_time** | **\DateTime** | The date the expense was incurred | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
