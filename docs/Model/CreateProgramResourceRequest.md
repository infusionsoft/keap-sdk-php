# # CreateProgramResourceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The program resource title |
**type** | **string** | The type of resource |
**notes** | **string** | The resource notes. | [optional]
**url** | **string** | The URL to the resource. | [optional]
**order** | **int** | The order in which the resource is displayed. Minimum value is 0. Defaults to 0. Lower values indicate higher priority. | [optional]
**content_html** | **string** | The contents of the PAGE or EMAIL. In HTML format. | [optional]
**page_width** | **int** | The width of the page for PAGE types, in pixels. Minimum value is 0. Defaults to 0 | [optional]
**page_height** | **int** | The height of the page for PAGE types, in pixels. Minimum value is 0. Defaults to 0 | [optional]
**commission_program_ids** | **string[]** | A list of commission program ids that will use this resource. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
