# # Webform

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for this webform | [optional]
**xid** | **string** | The public unique identifier for this webform, used in webform URLs | [optional]
**name** | **string** | The name of this webform | [optional]
**funnel_id** | **string** | The id of the funnel this webform belongs to, if any | [optional]
**custom_slug** | **string** | The custom slug of the webform. Used in pretty webform URLs | [optional]
**webform_url** | **string** | The URL for this webform that uses the xid to identify it | [optional]
**pretty_webform_url** | **string** | The URL for this webform that uses the custom slug to identify it | [optional]
**thank_you_page_url** | **string** | The URL of the thank you page for this webform | [optional]
**duplicate_check_option** | **string** | The option that determines if the lead submitted through the form is a duplicate or not. If it&#39;s a duplicate, then the lead will be merged with the existing contact record | [optional]
**exit_option** | **string** | The option that determines what happens after the form is submitted | [optional]
**webform_type** | **string** | The type of webform this is | [optional]
**create_time** | **\DateTime** | When the webform was created | [optional]
**update_time** | **\DateTime** | When the webform was last updated | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
