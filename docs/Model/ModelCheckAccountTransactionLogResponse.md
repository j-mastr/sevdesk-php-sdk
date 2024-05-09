# # ModelCheckAccountTransactionLogResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_information** | **string** |  | [optional] [readonly]
**amount_paid** | **float** | Amount booked on the check account transaction | [optional] [readonly]
**booking_date** | **\DateTime** | Date the check account transaction was booked | [optional] [readonly]
**check_account_transaction** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionResponse**](ModelCheckAccountTransactionResponse.md) |  | [optional]
**create** | **\DateTime** | Date of check account transaction creation | [optional] [readonly]
**from_status** | **string** | Status of the check account transaction.&lt;br&gt;       100 &lt;-&gt; Created&lt;br&gt;       200 &lt;-&gt; Linked&lt;br&gt;       300 &lt;-&gt; Private&lt;br&gt;       350 &lt;-&gt; Automatically&lt;br&gt;       400 &lt;-&gt; Booked | [optional] [readonly]
**id** | **string** | The check account transaction id | [optional] [readonly]
**object** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionLogResponseObject**](ModelCheckAccountTransactionLogResponseObject.md) |  | [optional]
**object_name** | **string** | The check account transaction object name | [optional] [readonly] [default to 'CheckAccountTransactionLog']
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionLogResponseSevClient**](ModelCheckAccountTransactionLogResponseSevClient.md) |  | [optional]
**to_status** | **string** | Status of the check account transaction.&lt;br&gt;       100 &lt;-&gt; Created&lt;br&gt;       200 &lt;-&gt; Linked&lt;br&gt;       300 &lt;-&gt; Private&lt;br&gt;       350 &lt;-&gt; Automatically&lt;br&gt;       400 &lt;-&gt; Booked | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
