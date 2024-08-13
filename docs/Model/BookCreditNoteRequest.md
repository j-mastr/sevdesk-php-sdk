# # BookCreditNoteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount which should be booked. Can also be a partial amount. |
**date** | **int** | The booking date. Most likely the current date. |
**type** | **string** | Define a type for the booking.&lt;br&gt;      The following type abbreviations are available (abbreviation &lt;-&gt; meaning).&lt;br&gt;      &lt;ul&gt;  &lt;li&gt;FULL_PAYMENT &lt;-&gt; Normal booking&lt;/li&gt;&lt;li&gt;N &lt;-&gt; Partial booking (historically used for normal booking)&lt;/li&gt;      &lt;li&gt;CB &lt;-&gt; Reduced amount due to discount (skonto)&lt;/li&gt;      &lt;li&gt;CF &lt;-&gt; Reduced/Higher amount due to currency fluctuations (deprecated)&lt;/li&gt;      &lt;li&gt;O &lt;-&gt; Reduced/Higher amount due to other reasons&lt;/li&gt;      &lt;li&gt;OF &lt;-&gt; Higher amount due to reminder charges&lt;/li&gt;      &lt;li&gt;MTC &lt;-&gt; Reduced amount due to the monetary traffic costs&lt;/li&gt;      &lt;/ul&gt; |
**check_account** | [**\Itsmind\Sevdesk\Model\BookCreditNoteRequestCheckAccount**](BookCreditNoteRequestCheckAccount.md) |  |
**check_account_transaction** | [**\Itsmind\Sevdesk\Model\BookCreditNoteRequestCheckAccountTransaction**](BookCreditNoteRequestCheckAccountTransaction.md) |  | [optional]
**create_feed** | **bool** | Determines if a feed is created for the booking process. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
