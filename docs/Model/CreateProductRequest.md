# # CreateProductRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | True means active, False means inactive | [optional]
**city_taxable** | **bool** | If city-based taxes should be applied to this product | [optional]
**country_taxable** | **bool** | If country-based taxes should be applied to this product | [optional]
**description** | **string** | Product long description | [optional]
**inventory** | [**\Keap\Core\V2\Model\ProductInventory**](ProductInventory.md) |  | [optional]
**name** | **string** | Product name |
**price** | **int** | The product price. The value is in the currency’s smallest unit. e.g. $12.50 is 1250. Must be greater than or equal to 0. |
**shippable** | **bool** | If the product requires shipping | [optional]
**short_description** | **string** | Product short description |
**sku** | **string** | Product SKU | [optional]
**state_taxable** | **bool** | If state-based taxes should be applied to this product | [optional]
**storefront_hidden** | **bool** | If the product should not be shown in the storefront | [optional]
**subscription_only** | **bool** | If the product is a subscription-only product | [optional]
**taxable** | **bool** | Whether or not the product should be taxed | [optional]
**weight** | **float** | The product weight. Must be greater than or equal to 0. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
