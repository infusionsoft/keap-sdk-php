# # CreateOpportunityRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**opportunity_title** | **string** | Opportunity title |
**next_action_time** | **string** | Next action timestamp (ISO-8601) | [optional]
**next_action_notes** | **string** | Notes for next action | [optional]
**opportunity_notes** | **string** | General notes | [optional]
**estimated_close_time** | **string** | Estimated close timestamp (ISO-8601) | [optional]
**include_in_forecast** | **bool** | Include in sales forecast | [optional]
**projected_revenue_low** | **float** | Low revenue estimate | [optional]
**projected_revenue_high** | **float** | High revenue estimate | [optional]
**contact_id** | **string** | Associated contact ID | [optional]
**stage_id** | **string** | Pipeline stage ID | [optional]
**user_id** | **string** | Assigned user ID | [optional]
**custom_fields** | [**\Keap\Core\V2\Model\CustomField[]**](CustomField.md) |  | [optional]
**affiliate_id** | **string** | Affiliate ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
