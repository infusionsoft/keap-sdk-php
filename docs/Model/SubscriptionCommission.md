# # SubscriptionCommission

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payout_type** | **string** | The payout type for this commission. | [optional] [default to 'UPFRONT']
**dollar_amount** | **float** | Level 1 fixed dollar amount to be paid for commission. This will be set for the Sale. This is deprecated for &#x60;level_1&#x60; | [optional]
**percentage** | **float** | Level 1 percentage to be paid for commission (0-100). This will be set for the Sale. This is deprecated for &#x60;level_1&#x60; | [optional]
**unused** | [**\Keap\Core\V2\Model\CommissionItem**](CommissionItem.md) | Payout rules for any unused commissions. | [optional]
**level_1** | [**\Keap\Core\V2\Model\CommissionItem**](CommissionItem.md) | Payout rules for Level 1 recipients of the commission. | [optional]
**level_2** | [**\Keap\Core\V2\Model\CommissionItem**](CommissionItem.md) | Payout rules for Level 2 recipients of the commission. | [optional]
**name** | **string** | Subscription name | [optional]
**subscription_id** | **string** | Subscription ID | [optional]
**plan_price** | **float** | Plan price | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
