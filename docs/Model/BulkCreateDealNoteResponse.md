# # BulkCreateDealNoteResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the note. | [optional]
**body** | **string** | The body content of the note. | [optional]
**deal_id** | **string** | The ID of the deal associated with the note. | [optional]
**created_by** | **string** | The ID of the user who created the note. | [optional]
**created_time** | **\DateTime** | The timestamp when the note was created. Formatted as a string according to the pattern \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSXXX\&quot;. | [optional]
**modified_time** | **\DateTime** | The timestamp when the note was last modified. Formatted as a string according to the pattern \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSXXX\&quot;. | [optional]
**create_success** | **bool** | Indicates whether the note was created successfully. | [optional]
**error_message** | **string** | If the note creation was not successful, this field contains the error message. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
