# # PipelineCustomField

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the custom field. |
**name** | **string** | The name of the custom field. This field is optional. | [optional]
**type** | [**\Keap\Core\V2\Model\PipelineCustomFieldType**](PipelineCustomFieldType.md) | The type of the custom field. This field is optional and must be a valid PipelineCustomFieldType. | [optional]
**label** | **string** | The label of the custom field. This field is optional. | [optional]
**description** | **string** | The description of the custom field. This field is optional. | [optional]
**helper_text** | **string** | The helper text for the custom field. This field is optional and is serialized to JSON as \&quot;helper_text\&quot;. | [optional]
**default_value** | **object** | The default value of the custom field. This field is optional and must be a valid Object. |
**validators** | [**\Keap\Core\V2\Model\PipelineCustomFieldPropertyValidator[]**](PipelineCustomFieldPropertyValidator.md) | The list of validators for the custom field. This field is optional and must be a list of valid PipelineCustomFieldPropertyValidator. | [optional]
**display_options** | [**\Keap\Core\V2\Model\PipelineCustomFieldDisplayOptions**](PipelineCustomFieldDisplayOptions.md) | The display options for the custom field. This field is optional and must be a valid DisplayOptions. | [optional]
**options** | [**\Keap\Core\V2\Model\PipelineCustomFieldOptions**](PipelineCustomFieldOptions.md) | The options for the custom field. This field is optional and must be a valid PipelineCustomFieldOptions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
