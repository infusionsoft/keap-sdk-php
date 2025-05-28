# # UpdateDisplayPropertyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sort_order** | **int** | Determines the order for where this display property shows up on the group. | [optional]
**id** | **string** | Identifies the custom field that is tied to this display property. | [optional]
**source** | [**\Keap\Core\V2\Model\DisplayPropertySource**](DisplayPropertySource.md) | Indicates whether this display property is a system or custom field. |
**system_field_record** | **string** | Represents the domain (e.g., pipeline, contact) that this display property belongs to. | [optional]
**system_field_id** | **string** | Represents the identifier of the system field that is in that displayProperty. The source of this field will depend on the domain (e. g., \&quot;dealName\&quot; in pipelines) | [optional]
**label** | **string** | The label to display on this property to help users identify it | [optional]
**description** | **string** | Documentation that explains the purpose of this property | [optional]
**helper_text** | **string** | More detailed explanation of the property to be shown if a user requests more information about it | [optional]
**default_value** | **mixed** | The value of this property if a value is not explicitly provided | [optional]
**display_options** | [**\Keap\Core\V2\Model\PipelineCustomFieldDisplayOptions**](PipelineCustomFieldDisplayOptions.md) | Allowed values for this property | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
