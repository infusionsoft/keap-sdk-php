# # UpdateProductDiscountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the discount | [optional]
**description** | **string** | Description of the discount | [optional]
**criteria** | [**\Keap\Core\V2\Model\DiscountCriteria[]**](DiscountCriteria.md) | List of criteria that must be met for this discount to apply | [optional]
**apply_to_commissions** | **bool** | Whether to apply this discount to commission calculations | [optional]
**product_id** | **string** | ID of the product this discount applies to | [optional]
**discount_type** | **string** | Type of discount: AMOUNT (fixed amount) or PERCENT (percentage) | [optional]
**discount_value** | **float** | Value of the discount (amount or percentage depending on discount_type) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
