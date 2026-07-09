# # RestV2ProductDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The product ID | [optional]
**name** | **string** | Product name | [optional]
**price** | [**\Keap\Core\V2\Model\CurrencyValueDetail**](CurrencyValueDetail.md) | The product price | [optional]
**active** | **bool** | True means active, False means inactive | [optional]
**description** | **string** | Product long description | [optional]
**sku** | **string** | Product SKU | [optional]
**shippable** | **bool** | If the product requires shipping | [optional]
**weight** | **float** | Product weight | [optional]
**taxable** | **bool** | Whether or not the product should be taxed | [optional]
**categories** | **string[]** | List of category ids to indicate which categories this product will belong to. Can be empty. | [optional]
**options** | [**\Keap\Core\V2\Model\ProductOptionsDetail[]**](ProductOptionsDetail.md) | List of product options. Can be empty. | [optional]
**inventory** | [**\Keap\Core\V2\Model\ProductInventoryDetail**](ProductInventoryDetail.md) | The inventory details for this product | [optional]
**short_description** | **string** | Product short description | [optional]
**subscription_only** | **bool** | If the product is a subscription-only product | [optional]
**storefront_hidden** | **bool** | If the product should not be shown in the storefront | [optional]
**country_taxable** | **bool** | If country-based taxes should be applied to this product | [optional]
**state_taxable** | **bool** | If state-based taxes should be applied to this product | [optional]
**city_taxable** | **bool** | If city-based taxes should be applied to this product | [optional]
**subscription_plans** | [**\Keap\Core\V2\Model\SubscriptionPlanDetail[]**](SubscriptionPlanDetail.md) | List of subscription plans associated with the product. Can be empty. | [optional]
**top_html** | **string** |  | [optional]
**bottom_html** | **string** |  | [optional]
**is_package** | **bool** |  | [optional]
**needs_digital_delivery** | **bool** |  | [optional]
**has_legacy_image** | **bool** |  | [optional]
**delivery_description** | **string** |  | [optional]
**create_time** | **string** |  | [optional]
**update_time** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
