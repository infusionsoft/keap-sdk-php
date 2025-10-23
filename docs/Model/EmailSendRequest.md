# # EmailSendRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_field** | **string** | Email field of each Contact record to address the email to, such as &#39;Email&#39;, &#39;EmailAddress2&#39;, &#39;EmailAddress3&#39; or &#39;_CustomFieldName&#39;, defaulting to the contact&#39;s primary email | [optional]
**attachments** | [**\Keap\Core\V2\Model\EmailSendRequestAttachment[]**](EmailSendRequestAttachment.md) | Attachments to be sent with each copy of the email, maximum of 10 with size of 1MB each | [optional]
**contacts** | **string[]** | An array of Contact Ids to receive the email |
**html_content** | **string** | The HTML-formatted content of the email, encoded in Base64 | [optional]
**plain_content** | **string** | The plain-text content of the email, encoded in Base64 | [optional]
**subject** | **string** | The subject line of the email |
**user_id** | **string** | The infusionsoft user to send the email on behalf of |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
