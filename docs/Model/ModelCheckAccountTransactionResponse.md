# # ModelCheckAccountTransactionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The check account transaction id | [optional] [readonly]
**object_name** | **string** | The check account transaction object name | [optional] [readonly]
**create** | **\DateTime** | Date of check account transaction creation | [optional] [readonly]
**update** | **\DateTime** | Date of last check account transaction update | [optional] [readonly]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionResponseSevClient**](ModelCheckAccountTransactionResponseSevClient.md) |  | [optional]
**value_date** | **\DateTime** | Date the check account transaction was imported | [optional] [readonly]
**entry_date** | **\DateTime** | Date the check account transaction was booked | [optional] [readonly]
**paymt_purpose** | **string** | the purpose of the transaction | [optional] [readonly]
**amount** | **string** | Amount of the transaction | [optional] [readonly]
**payee_payer_name** | **string** | Name of the payee/payer | [optional] [readonly]
**check_account** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionResponseCheckAccount**](ModelCheckAccountTransactionResponseCheckAccount.md) |  | [optional]
**status** | **string** | Status of the check account transaction.&lt;br&gt;       100 &lt;-&gt; Created&lt;br&gt;       200 &lt;-&gt; Linked&lt;br&gt;       300 &lt;-&gt; Private&lt;br&gt;       350 &lt;-&gt; Automatically&lt;br&gt;       400 &lt;-&gt; Booked | [optional] [readonly]
**source_transaction** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionResponseSourceTransaction**](ModelCheckAccountTransactionResponseSourceTransaction.md) |  | [optional]
**target_transaction** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionResponseTargetTransaction**](ModelCheckAccountTransactionResponseTargetTransaction.md) |  | [optional]
**enshrined** | **\DateTime** | Can only be set via [CheckAccountTransaction/{checkAccountTransactionId}/enshrine](#tag/CheckAccountTransaction/operation/checkAccountTransactionEnshrine) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
