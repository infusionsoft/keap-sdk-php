# # AffiliateProgramResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The program resource identifier | [optional]
**title** | **string** | The program resource title | [optional]
**type** | **string** | The type of resource | [optional]
**notes** | **string** | The resource notes. | [optional]
**url** | **string** | The URL to the resource. | [optional]
**order** | **int** | The order which the resource to be displayed. Minimum value is 0. Lower values indicate higher priority. | [optional]
**content_html** | **string** | The contents of the PAGE or EMAIL. In HTML format. | [optional]
**page_width** | **int** | The width of the page for PAGE types, in pixels. | [optional]
**page_height** | **int** | The height of the page for PAGE types, in pixels. | [optional]
**commission_programs** | [**\Keap\Core\V2\Model\ResourceCommissionProgram[]**](ResourceCommissionProgram.md) | A list of commission programs using this resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
