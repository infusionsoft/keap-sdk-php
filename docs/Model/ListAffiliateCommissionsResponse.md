# # ListAffiliateCommissionsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**affiliate_commissions** | [**\Keap\Core\V2\Model\AffiliateCommission[]**](AffiliateCommission.md) | List of commissions for this affiliate | [optional]
**next_page_token** | **string** |  | [optional]
**clawbacks** | **float** | Calculated total amount of clawbacks from the returned commissions. | [optional]
**commission_total** | **float** | Calculated total commission amount (amount earned - amount clawbacks) from the returned commissions | [optional]
**amount_earned** | **float** | Calculated total amount earned from the returned commissions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
