# # CustomFieldMetaData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the custom field | [optional]
**label** | **string** | The display label of the custom field | [optional]
**options** | [**\Keap\Core\V2\Model\CustomFieldOption[]**](CustomFieldOption.md) | The list of available options for select/radio/multiselect/drilldown field types | [optional]
**record_type** | **string** | The entity type this custom field belongs to (e.g. CONTACT, COMPANY) | [optional]
**field_type** | **string** | The data type of the custom field (e.g. Text, Number, Date, Select) | [optional]
**default_value** | **string** | The default value for this custom field, if any | [optional]
**group_id** | **string** | The ID of the group this custom field belongs to | [optional]
**group_name** | **string** | The name of the group this custom field belongs to | [optional]
**field_name** | **string** | The database column name for this custom field. Use this value when filtering contacts (e.g. for field_name &#39;firstName1&#39;, filter with &#39;firstName1&#x3D;&#x3D;John&#39;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
