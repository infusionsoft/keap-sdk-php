# # UpdateCategoryDiscountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the discount | [optional]
**description** | **string** | Description of the discount | [optional]
**criteria** | [**\Keap\Core\V2\Model\CategoryDiscountCriteriaRequest[]**](CategoryDiscountCriteriaRequest.md) | List of criteria that must be met for this discount to apply | [optional]
**apply_to_commissions** | **bool** | Whether to apply this discount to commission calculations | [optional]
**discount_percent** | **float** | Percentage discount to apply. Must be greater than or equal to 0. | [optional]
**product_category_ids** | **string[]** | List of product category IDs this discount applies to | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
