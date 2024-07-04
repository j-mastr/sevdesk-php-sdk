# # CreateFileImportAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the check account | [optional]
**import_type** | **string** | Import type. Transactions can be imported by this method on the check account. | [optional]
**accounting_number** | **int** | The booking account used for this bank account, e.g. 1800 in SKR04 and 1200 in SKR03. Must be unique among all your CheckAccounts. Ignore to use a sensible default. | [optional]
**iban** | **string** | IBAN of the bank account, without spaces | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
