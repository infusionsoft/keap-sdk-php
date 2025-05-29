# # RestV2Product

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | True means active, False means inactive | [optional]
**categories** | **string[]** | List of category ids to indicate which categories this product will belong to. Can be empty. | [optional]
**city_taxable** | **bool** | If city-based taxes should be applied to this product | [optional]
**country_taxable** | **bool** | If country-based taxes should be applied to this product | [optional]
**description** | **string** | Product long description | [optional]
**id** | **string** | The product ID | [optional]
**inventory** | [**\Keap\Core\V2\Model\ProductInventory**](ProductInventory.md) |  | [optional]
**name** | **string** | Product name | [optional]
**options** | [**\Keap\Core\V2\Model\ProductOptions[]**](ProductOptions.md) | List of product options. Can be empty. | [optional]
**price** | [**\Keap\Core\V2\Model\CurrencyValue**](CurrencyValue.md) |  | [optional]
**short_description** | **string** | Product short description | [optional]
**sku** | **string** | Product SKU | [optional]
**state_taxable** | **bool** | If state-based taxes should be applied to this product | [optional]
**storefront_hidden** | **bool** | If the product should not be shown in the storefront | [optional]
**subscription_only** | **bool** | If the product is a subscription-only product | [optional]
**subscription_plans** | [**\Keap\Core\V2\Model\SubscriptionPlan[]**](SubscriptionPlan.md) | List of subscription plans associated with the product. Can be empty. | [optional]
**taxable** | **bool** | Whether or not the product should be taxed | [optional]
**weight** | **float** | Product weight | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
