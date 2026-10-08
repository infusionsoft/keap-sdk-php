# # OrderTotalDiscount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for this order total discount | [optional]
**name** | **string** | Name of the discount | [optional]
**description** | **string** | Description of the discount | [optional]
**criteria** | [**\Keap\Core\V2\Model\DiscountCriteria[]**](DiscountCriteria.md) | List of criteria that must be met for this discount to apply | [optional]
**apply_to_commissions** | **bool** | Whether to apply this discount to commission calculations | [optional]
**discount_type** | **string** | Type of discount: AMOUNT (fixed amount) or PERCENT (percentage) | [optional]
**discount_value** | **float** | Value of the discount (amount or percentage depending on discount_type) | [optional]
**discount_strategy** | **string** | Strategy for applying discount: GROSS (before tax) or NET (after tax) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
