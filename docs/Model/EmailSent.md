# # EmailSent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the email | [optional]
**subject** | **string** | The subject of the email | [optional]
**headers** | **string** | Email headers | [optional]
**contact_id** | **string** | The contact ID who received the email | [optional]
**sent_to_address** | **string** | The email address the email was sent to | [optional]
**sent_to_cc_address_list** | **string[]** | List of CC email addresses | [optional]
**sent_to_bcc_address_list** | **string[]** | List of BCC email addresses | [optional]
**sent_from_address** | **string** | The sender&#39;s email address | [optional]
**sent_from_reply_address** | **string** | The reply-to email address | [optional]
**sent_time** | **\DateTime** | When the email was sent, in ISO-8601 format | [optional]
**received_time** | **\DateTime** | When the email was received, in ISO-8601 format | [optional]
**opened_time** | **\DateTime** | When the email was opened, in ISO-8601 format | [optional]
**clicked_time** | **\DateTime** | When a link in the email was clicked, in ISO-8601 format | [optional]
**original_provider_id** | **string** | The original provider&#39;s message ID | [optional]
**original_provider** | **string** | The email provider that sent the email | [optional]
**provider_source_id** | **string** | The synced email account that generated this message | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
