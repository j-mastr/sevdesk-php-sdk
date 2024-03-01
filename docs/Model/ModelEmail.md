# # ModelEmail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The email id | [optional] [readonly]
**object_name** | **string** | The email object name | [optional] [readonly] [default to 'Email']
**create** | **\DateTime** | Date of mail creation | [optional] [readonly]
**update** | **\DateTime** | Date of last mail update | [optional] [readonly]
**object** | [**\Itsmind\Sevdesk\Model\ModelInvoiceResponse**](ModelInvoiceResponse.md) |  | [optional]
**from** | **string** | The sender of the email |
**to** | **string** | The recipient of the email |
**subject** | **string** | The subject of the email |
**text** | **string** | The text of the email | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelEmailSevClient**](ModelEmailSevClient.md) |  | [optional]
**cc** | **string** | A list of mail addresses which are in the cc | [optional]
**bcc** | **string** | A list of mail addresses which are in the bcc | [optional]
**arrived** | **\DateTime** | Date the mail arrived | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
