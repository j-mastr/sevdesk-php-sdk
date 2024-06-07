# # ModelCheckAccountTransactionUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value_date** | **\DateTime** | Date the check account transaction was booked | [optional]
**entry_date** | **\DateTime** | Date the check account transaction was imported | [optional]
**paymt_purpose** | **string** | the purpose of the transaction | [optional]
**amount** | **float** | Amount of the transaction | [optional]
**payee_payer_name** | **string** | Name of the payee/payer | [optional]
**check_account** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionUpdateCheckAccount**](ModelCheckAccountTransactionUpdateCheckAccount.md) |  | [optional]
**status** | **int** | Status of the check account transaction.&lt;br&gt;       100 &lt;-&gt; Created&lt;br&gt;       200 &lt;-&gt; Linked&lt;br&gt;       300 &lt;-&gt; Private&lt;br&gt;       400 &lt;-&gt; Booked | [optional]
**source_transaction** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionSourceTransaction**](ModelCheckAccountTransactionSourceTransaction.md) |  | [optional]
**target_transaction** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionTargetTransaction**](ModelCheckAccountTransactionTargetTransaction.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
