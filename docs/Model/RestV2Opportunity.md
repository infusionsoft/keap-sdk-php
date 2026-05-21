# # RestV2Opportunity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Opportunity ID | [optional]
**contact** | [**\Keap\Core\V2\Model\OpportunityContact**](OpportunityContact.md) |  |
**stage** | [**\Keap\Core\V2\Model\OpportunityStage**](OpportunityStage.md) |  |
**user** | [**\Keap\Core\V2\Model\RestV2User**](RestV2User.md) |  | [optional]
**opportunity_title** | **string** | Opportunity title |
**next_action_time** | **string** | Next action timestamp (ISO-8601) | [optional]
**next_action_notes** | **string** | Notes for next action | [optional]
**opportunity_notes** | **string** | General notes | [optional]
**estimated_close_time** | **string** | Estimated close timestamp (ISO-8601) | [optional]
**include_in_forecast** | **bool** | Include in sales forecast | [optional]
**projected_revenue_low** | **float** | Low revenue estimate | [optional]
**projected_revenue_high** | **float** | High revenue estimate | [optional]
**custom_fields** | [**\Keap\Core\V2\Model\CustomField[]**](CustomField.md) |  | [optional]
**created_time** | **string** | Creation timestamp (ISO-8601) | [optional]
**last_updated_time** | **string** | Last update timestamp (ISO-8601) | [optional]
**affiliate_id** | **string** | Affiliate ID | [optional]
**lead_source** | **string** | Lead source | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
