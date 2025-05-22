# # FunnelIntegrationAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_url** | **string** | The base URL of the trigger, that will be used to call the integration related REST endpoints. | [optional]
**context** | **string** | The context of the trigger, that will be used internally to identify the integration. | [optional]
**enabled** | **bool** | The flag to enable or disable the integration trigger. | [optional]
**icon_url** | **string** | The icon URL of the trigger, that will be used to display the icon of this specific integration trigger. | [optional]
**name** | **string** | The name of the trigger, that will be used internally to identify and initiate the trigger. | [optional]
**schema_fields** | [**\Keap\Core\V2\Model\FunnelIntegrationSchemaField[]**](FunnelIntegrationSchemaField.md) | The schema for this trigger that can be used in the builder context, and populated when a trigger is initiated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
