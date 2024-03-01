# # ModelAccountingContactResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The accounting contact id | [optional] [readonly]
**object_name** | **string** | The accounting contact object name | [optional] [readonly] [default to 'AccountingContact']
**create** | **\DateTime** | Date of accounting contact creation | [optional] [readonly]
**update** | **\DateTime** | Date of last accounting contact update | [optional] [readonly]
**contact** | [**\Itsmind\Sevdesk\Model\ModelAccountingContactResponseContact**](ModelAccountingContactResponseContact.md) |  | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelAccountingContactResponseSevClient**](ModelAccountingContactResponseSevClient.md) |  | [optional]
**debitor_number** | **string** | Debitor number of the accounting contact. | [optional] [readonly]
**creditor_number** | **string** | Creditor number of the accounting contact. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
