# # ModelCheckAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The check account id | [optional] [readonly]
**object_name** | **string** | The check account object name | [optional] [readonly] [default to 'CheckAccount']
**create** | **\DateTime** | Date of check account creation | [optional] [readonly]
**update** | **\DateTime** | Date of last check account update | [optional] [readonly]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountSevClient**](ModelCheckAccountSevClient.md) |  | [optional]
**name** | **string** | Name of the check account |
**type** | **string** | The type of the check account. Account with a CSV or MT940 import are regarded as online.&lt;br&gt;       Apart from that, created check accounts over the API need to be offline, as online accounts with an active connection       to a bank application can not be managed over the API. |
**import_type** | **string** | Import type. Transactions can be imported by this method on the check account. | [optional]
**currency** | **string** | The currency of the check account. |
**default_account** | **int** | Defines if this check account is the default account. | [optional] [default to self::DEFAULT_ACCOUNT_NUMBER_0]
**status** | **int** | Status of the check account. 0 &lt;-&gt; Archived - 100 &lt;-&gt; Active | [default to self::STATUS_NUMBER_100]
**bank_server** | **string** | Bank server of check account | [optional] [readonly]
**auto_map_transactions** | **int** | Defines if transactions on this account are automatically mapped to invoice and vouchers when imported if possible. | [optional] [default to 1]
**accounting_number** | **string** | The booking account used for this bank account, e.g. 1800 in SKR04 and 1200 in SKR03. Must be unique among all your CheckAccounts. Ignore to use a sensible default. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
