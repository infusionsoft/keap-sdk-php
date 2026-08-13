# # Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** | Deprecated. The long-name descriptive version of the Country Code. Please use &#39;country_code&#39; for POST/PATCH operations. Maximum length is 100 characters. | [optional]
**line1** | **string** | Street address line 1. Maximum length is 75 characters for the BILLING address and 100 characters for the SHIPPING and OTHER addresses. | [optional]
**line2** | **string** | Street address line 2. Maximum length is 75 characters for the BILLING address and 100 characters for the SHIPPING and OTHER addresses. | [optional]
**locality** | **string** | The municipality to which the address belongs. Maximum length is 50 characters for the BILLING address and 100 characters for the SHIPPING and OTHER addresses. | [optional]
**region** | **string** | The long-name descriptive version of the Region Code. Please use &#39;region_code&#39; for POST/PATCH operations. Maximum length is 50 characters. | [optional]
**field** | **string** | Address type field | [optional]
**country_code** | **string** | An ISO 3166-2 Country Code (https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) | [optional]
**postal_code** | **string** | Postal or ZIP code. Maximum length is 15 characters for the BILLING and OTHER addresses and 20 characters for the SHIPPING address. | [optional]
**region_code** | **string** | An ISO 3166-2 Province Code, such as one of the US States (https://en.wikipedia.org/wiki/ISO_3166-2:US) | [optional]
**zip_code** | **string** | ZIP code (US). Maximum length is 15 characters for the BILLING and OTHER addresses and 20 characters for the SHIPPING address. | [optional]
**zip_four** | **string** | ZIP+4 extension. Maximum length is 10 characters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
