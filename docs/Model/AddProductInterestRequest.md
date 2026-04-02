# # AddProductInterestRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The product interest type. |
**entity_id** | **string** | The &#x60;product_id&#x60; (when the &#x60;type&#x60; is set to &#x60;PRODUCT&#x60;)  or the &#x60;subscription_plan_id&#x60; (when the &#x60;type&#x60; is set to &#x60;SUBSCRIPTION_PLAN&#x60;). |
**price** | **float** | The price per unit of the product. |
**quantity** | **int** | Defaults to &#x60;1&#x60;. | [optional]
**discount_percent** | **int** | Defaults to &#x60;0&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
