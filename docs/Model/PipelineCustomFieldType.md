# # PipelineCustomFieldType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**primitive_type** | [**\Keap\Core\V2\Model\PipelineCustomFieldPrimitiveType**](PipelineCustomFieldPrimitiveType.md) | The base primitive type of the custom field. This field is required. |
**discriminator** | [**\Keap\Core\V2\Model\PipelineCustomFieldModelPropertyTypeDiscriminator**](PipelineCustomFieldModelPropertyTypeDiscriminator.md) | The discriminator for the model property type. This field is required. |
**array** | [**\Keap\Core\V2\Model\PipelineCustomFieldArrayPropertyType**](PipelineCustomFieldArrayPropertyType.md) | The array property type of the custom field. This field is optional. | [optional]
**ref** | [**\Keap\Core\V2\Model\PipelineCustomFieldRefPropertyType**](PipelineCustomFieldRefPropertyType.md) | The reference property type of the custom field. This field is optional. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
