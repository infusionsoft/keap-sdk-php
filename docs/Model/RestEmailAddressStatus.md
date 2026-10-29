# # RestEmailAddressStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The email address |
**opted_in** | **bool** | Whether the email address is opted in for marketing |
**status** | **string** | The opt-in status of the email address |
**create_time** | **\DateTime** | When the email status was first recorded, in ISO-8601 format |
**last_click_time** | **\DateTime** | The most recent click on an email sent to this address, in ISO-8601 format | [optional]
**last_open_time** | **\DateTime** | The most recent open of an email sent to this address, in ISO-8601 format | [optional]
**last_sent_time** | **\DateTime** | The most recent time an email was sent to this address, in ISO-8601 format | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
