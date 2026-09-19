# # CategoryDiscount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for this category discount | [optional]
**name** | **string** | Name of the discount | [optional]
**description** | **string** | Description of the discount | [optional]
**criteria** | [**\Keap\Core\V2\Model\CategoryDiscountCriteriaResponse[]**](CategoryDiscountCriteriaResponse.md) | List of criteria that must be met for this discount to apply | [optional]
**discount_percent** | **float** | Percentage discount to apply (0-100) | [optional]
**apply_to_commissions** | **bool** | Whether to apply this discount to commission calculations | [optional]
**product_categories** | **string[]** | List of product category IDs this discount applies to | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
