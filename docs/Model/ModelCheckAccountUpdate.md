# # ModelCheckAccountUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the check account | [optional]
**default_account** | **int** | Defines if this check account is the default account. | [optional] [default to self::DEFAULT_ACCOUNT_NUMBER_0]
**auto_map_transactions** | **int** | Defines if transactions on this account are automatically mapped to invoice and vouchers when imported if possible. | [optional] [default to 1]
**accounting_number** | **string** | The booking account used for this bank account, e.g. 1800 in SKR04 and 1200 in SKR03. Must be unique among all your CheckAccounts. Ignore to use a sensible default. | [optional]
**iban** | **string** | IBAN of a bank account | [optional]
**bic** | **string** | BIC of the related bank | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
