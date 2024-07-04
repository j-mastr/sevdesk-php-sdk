# # ModelCheckAccountTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The check account transaction id | [optional] [readonly]
**object_name** | **string** | The check account transaction object name | [optional] [readonly] [default to 'CheckAccountTransaction']
**create** | **\DateTime** | Date of check account transaction creation | [optional] [readonly]
**update** | **\DateTime** | Date of last check account transaction update | [optional] [readonly]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionSevClient**](ModelCheckAccountTransactionSevClient.md) |  | [optional]
**value_date** | **\DateTime** | Date the check account transaction was booked |
**entry_date** | **\DateTime** | Date the check account transaction was imported | [optional]
**paymt_purpose** | **string** | The purpose of the transaction | [optional]
**amount** | **float** | Amount of the transaction |
**payee_payer_name** | **string** | Name of the other party |
**payee_payer_acct_no** | **string** | IBAN or account number of the other party | [optional]
**payee_payer_bank_code** | **string** | BIC or bank code of the other party | [optional]
**check_account** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionCheckAccount**](ModelCheckAccountTransactionCheckAccount.md) |  |
**status** | **int** | Status of the check account transaction.&lt;br&gt;       100 &lt;-&gt; Created&lt;br&gt;       200 &lt;-&gt; Linked&lt;br&gt;       300 &lt;-&gt; Private&lt;br&gt;       400 &lt;-&gt; Booked |
**source_transaction** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionSourceTransaction**](ModelCheckAccountTransactionSourceTransaction.md) |  | [optional]
**target_transaction** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionTargetTransaction**](ModelCheckAccountTransactionTargetTransaction.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
