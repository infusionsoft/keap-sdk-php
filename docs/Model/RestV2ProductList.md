# # RestV2ProductList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The product ID | [optional]
**name** | **string** | Product name | [optional]
**price** | [**\Keap\Core\V2\Model\CurrencyValueList**](CurrencyValueList.md) | The product price | [optional]
**active** | **bool** | True means active, False means inactive | [optional]
**description** | **string** | Product long description | [optional]
**sku** | **string** | Product SKU | [optional]
**shippable** | **bool** | If the product requires shipping | [optional]
**weight** | **float** | Product weight | [optional]
**taxable** | **bool** | Whether or not the product should be taxed | [optional]
**categories** | **string[]** | List of category ids to indicate which categories this product will belong to. Can be empty. | [optional]
**options** | [**\Keap\Core\V2\Model\ProductOptionsList[]**](ProductOptionsList.md) | List of product options. Can be empty. | [optional]
**inventory** | [**\Keap\Core\V2\Model\ProductInventoryList**](ProductInventoryList.md) | The inventory details for this product | [optional]
**short_description** | **string** | Product short description | [optional]
**subscription_only** | **bool** | If the product is a subscription-only product | [optional]
**storefront_hidden** | **bool** | If the product should not be shown in the storefront | [optional]
**country_taxable** | **bool** | If country-based taxes should be applied to this product | [optional]
**state_taxable** | **bool** | If state-based taxes should be applied to this product | [optional]
**city_taxable** | **bool** | If city-based taxes should be applied to this product | [optional]
**subscription_plans** | [**\Keap\Core\V2\Model\SubscriptionPlanList[]**](SubscriptionPlanList.md) | List of subscription plans associated with the product. Can be empty. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
