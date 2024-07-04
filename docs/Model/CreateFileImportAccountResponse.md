# # CreateFileImportAccountResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The check account id | [optional]
**object_name** | **string** | The check account object name, always &#39;CheckAccount&#39; | [optional]
**create** | **\DateTime** | Date of check account creation | [optional]
**update** | **\DateTime** | Date of last check account update | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\CreateFileImportAccountResponseSevClient**](CreateFileImportAccountResponseSevClient.md) |  | [optional]
**name** | **string** | Name of the check account | [optional]
**iban** | **string** | The IBAN of the account | [optional]
**type** | **string** | The type of the check account. Account with a CSV or MT940 import are regarded as online. | [optional]
**import_type** | **string** | Import type, for accounts that are type \&quot;online\&quot; but not connected to a data provider. Transactions can be imported by this method on the check account. | [optional]
**currency** | **string** | The currency of the check account. | [optional]
**default_account** | **string** | Defines if this check account is the default account. | [optional] [default to '0']
**status** | **string** | Status of the check account. 0 &lt;-&gt; Archived - 100 &lt;-&gt; Active | [optional] [default to '100']
**auto_map_transactions** | **string** | Defines if transactions on this account are automatically mapped to invoice and vouchers when imported if possible. | [optional] [default to '1']
**accounting_number** | **string** | The booking account used for this bank account, e.g. 1800 in SKR04 and 1200 in SKR03. Must be unique among all your CheckAccounts. Ignore to use a sensible default. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
