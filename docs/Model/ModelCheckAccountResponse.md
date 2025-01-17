# # ModelCheckAccountResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The check account id | [optional] [readonly]
**object_name** | **string** | The check account object name | [optional] [readonly] [default to 'CheckAccount']
**create** | **\DateTime** | Date of check account creation | [optional] [readonly]
**update** | **\DateTime** | Date of last check account update | [optional] [readonly]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountResponseSevClient**](ModelCheckAccountResponseSevClient.md) |  | [optional]
**name** | **string** | Name of the check account | [optional]
**iban** | **string** | The IBAN of the account | [optional]
**type** | **string** | The type of the check account. Account with a CSV or MT940 import are regarded as online. | [optional]
**import_type** | **string** | Import type, for accounts that are type \&quot;online\&quot; but not connected to a data provider. | [optional]
**currency** | **string** | The currency of the check account. | [optional]
**default_account** | **string** | Defines if this check account is the default account. | [optional] [default to '0']
**base_account** | **string** | This will be 1 if the account is your base account that comes with every sevdesk setup. | [optional]
**priority** | **string** | Defines the sorting of accounts, highest is first. | [optional]
**status** | **string** | Status of the check account. 0 &lt;-&gt; Archived - 100 &lt;-&gt; Active | [optional] [default to '100']
**balance** | **string** | The account balance as reported by PayPal or finAPI. Not set for other types of accounts. | [optional]
**bank_server** | **string** | Bank server of check account, only set if the account is connected to a data provider | [optional]
**auto_map_transactions** | **string** | Defines if transactions on this account are automatically mapped to invoice and vouchers when imported if possible. | [optional] [default to '1']
**auto_sync_transactions** | **string** | If this is 1 the account will be automatically updated through PayPal or finAPI. Only applicable for connected online accounts. | [optional]
**last_sync** | **\DateTime** | Timepoint of the last payment import through PayPal or finAPI. | [optional]
**accounting_number** | **string** | The booking account used for this account, e.g. 1800 in SKR04 and 1200 in SKR03. Must be unique among all your CheckAccounts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
