# # UpdateProgramResourceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The program resource title | [optional]
**notes** | **string** | The resource notes. | [optional]
**url** | **string** | The URL to the resource. | [optional]
**order** | **int** | The order in which the resource is displayed. Minimum value is 0. Lower values indicate higher priority. | [optional]
**content_html** | **string** | The contents of the PAGE or EMAIL. In HTML format. | [optional]
**page_width** | **int** | The width of the page for PAGE types, in pixels. Minimum value is 0. | [optional]
**page_height** | **int** | The height of the page for PAGE types, in pixels. Minimum value is 0. | [optional]
**commission_program_ids** | **string[]** | A list of commission program ids to use this resource. The values in this list will replace the existing list of commission program ids. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
