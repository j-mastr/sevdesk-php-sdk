# # ModelCreditNoteMailResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**object_name** | **string** | Model name, which is &#39;Email&#39; | [optional] [default to 'Email']
**additional_information** | **string** |  | [optional]
**create** | **\DateTime** | Date of email creation | [optional] [readonly]
**update** | **\DateTime** | Date of last email update | [optional] [readonly]
**object** | [**\Itsmind\Sevdesk\Model\ModelCreditNoteResponse**](ModelCreditNoteResponse.md) |  | [optional]
**from** | **string** |  | [optional]
**to** | **string** |  | [optional]
**subject** | **string** |  | [optional]
**text** | **string** |  | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelCreditNoteMailResponseSevClient**](ModelCreditNoteMailResponseSevClient.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
