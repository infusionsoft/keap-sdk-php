# # UpdateProductRequestDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Product name | [optional]
**sku** | **string** | Product SKU | [optional]
**price** | **int** | The product price. The value is in the currency&#39;s smallest unit. e.g. $12.50 is 1250. Must be greater than or equal to 0. | [optional]
**active** | **bool** | True means active, False means inactive | [optional]
**description** | **string** | Product long description | [optional]
**shippable** | **bool** | If the product requires shipping | [optional]
**weight** | **float** | The product weight. Must be greater than or equal to 0. | [optional]
**taxable** | **bool** | Whether or not the product should be taxed | [optional]
**short_description** | **string** | Product short description | [optional]
**subscription_only** | **bool** | If the product is a subscription-only product | [optional]
**storefront_hidden** | **bool** | If the product should not be shown in the storefront | [optional]
**country_taxable** | **bool** | If country-based taxes should be applied to this product | [optional]
**state_taxable** | **bool** | If state-based taxes should be applied to this product | [optional]
**city_taxable** | **bool** | If city-based taxes should be applied to this product | [optional]
**inventory_limit** | **int** | The inventory limit for this product. Must be greater than or equal to 0. | [optional]
**out_of_stock_enabled** | **bool** | The flag to enable out of stock inventory | [optional]
**email_for_inventory_notifications** | **string** | The email address for notifications about inventory | [optional]
**top_html** | **string** |  | [optional]
**bottom_html** | **string** |  | [optional]
**is_package** | **bool** |  | [optional]
**needs_digital_delivery** | **bool** |  | [optional]
**delivery_description** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
