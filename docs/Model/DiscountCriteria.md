# # DiscountCriteria

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of criteria: DATE_RANGE, PROMO_CODE, PRODUCT, SUBSCRIPTION_PLAN, or ORDER_TOTAL | [optional]
**code** | **string** | Promotional code for PROMO_CODE criteria | [optional]
**criteria_id** | **string** | Unique identifier for this criteria | [optional]
**range_start_time** | **\DateTime** | Start date/time for DATE_RANGE criteria (ISO-8601 format) | [optional]
**range_end_time** | **\DateTime** | End date/time for DATE_RANGE criteria (ISO-8601 format) | [optional]
**product_id** | **string** | Product ID for PRODUCT criteria | [optional]
**product_quantity_min** | **int** | Minimum product quantity for PRODUCT criteria | [optional]
**product_quantity_max** | **int** | Maximum product quantity for PRODUCT criteria | [optional]
**plan_id** | **string** | Subscription plan ID for SUBSCRIPTION_PLAN criteria | [optional]
**subscription_quantity** | **int** | Subscription quantity for SUBSCRIPTION_PLAN criteria | [optional]
**total_amount** | **float** | Total amount threshold for ORDER_TOTAL criteria | [optional]
**operator** | **string** | Comparison operator for ORDER_TOTAL criteria: LESS_THAN or GREATER_THAN | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
