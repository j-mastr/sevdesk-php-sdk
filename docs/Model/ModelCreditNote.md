# # ModelCreditNote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The creditNote id. &lt;span style&#x3D;&#39;color:red&#39;&gt;Required&lt;/span&gt; if you want to create/update an credit note position for an existing credit note\&quot; | [optional]
**object_name** | **string** | The creditNote object name | [default to 'CreditNote']
**map_all** | **bool** |  |
**create** | **\DateTime** | Date of creditNote creation | [optional] [readonly]
**update** | **\DateTime** | Date of last creditNote update | [optional] [readonly]
**credit_note_number** | **string** | The creditNote number |
**contact** | [**\Itsmind\Sevdesk\Model\ModelCreditNoteContact**](ModelCreditNoteContact.md) |  |
**credit_note_date** | **\DateTime** | Needs to be provided as timestamp or dd.mm.yyyy |
**status** | **string** | Please have a look in       &lt;a href&#x3D;&#39;#tag/CreditNote/Status-of-credit-notes&#39;&gt;status of credit note&lt;/a&gt;      to see what the different status codes mean |
**header** | **string** | Normally consist of prefix plus the creditNote number |
**head_text** | **string** | Certain html tags can be used here to format your text | [optional]
**foot_text** | **string** | Certain html tags can be used here to format your text | [optional]
**address_country** | [**\Itsmind\Sevdesk\Model\ModelCreditNoteAddressCountry**](ModelCreditNoteAddressCountry.md) |  |
**create_user** | [**\Itsmind\Sevdesk\Model\ModelCreditNoteCreateUser**](ModelCreditNoteCreateUser.md) |  | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelCreditNoteSevClient**](ModelCreditNoteSevClient.md) |  | [optional]
**small_settlement** | **bool** | Defines if the client uses the small settlement scheme.      If yes, the creditNote must not contain any vat | [optional]
**contact_person** | [**\Itsmind\Sevdesk\Model\ModelCreditNoteContactPerson**](ModelCreditNoteContactPerson.md) |  |
**tax_rule** | [**\Itsmind\Sevdesk\Model\ModelCreditNoteResponseTaxRule**](ModelCreditNoteResponseTaxRule.md) |  |
**tax_rate** | **float** | This is not used anymore. Use the taxRate of the individual positions instead. |
**tax_set** | [**\Itsmind\Sevdesk\Model\ModelCreditNoteTaxSet**](ModelCreditNoteTaxSet.md) |  | [optional]
**tax_text** | **string** | A common tax text would be &#39;Umsatzsteuer 19%&#39; |
**tax_type** | **string** | **Use this in sevdesk-Update 1.0 (instead of taxRule).**  Tax type of the creditNote. There are four tax types: 1. default - Umsatzsteuer ausweisen 2. eu - Steuerfreie innergemeinschaftliche Lieferung (Europäische Union) 3. noteu - Steuerschuldnerschaft des Leistungsempfängers (außerhalb EU, z. B. Schweiz) 4. custom - Using custom tax set 5. ss - Not subject to VAT according to §19 1 UStG Tax rates are heavily connected to the tax type used. |
**send_date** | **\DateTime** | The date the creditNote was sent to the customer | [optional]
**address** | **string** | Complete address of the recipient including name, street, city, zip and country.&lt;br&gt;       Line breaks can be used and will be displayed on the invoice pdf. | [optional]
**booking_category** | **string** | Defines the booking category, for more information see the section [Credit note booking categories](#tag/CreditNote/Credit-note-booking-categories)  The booking category of the credit note.  **&lt;code&gt;ACCOUNTING_TYPE&lt;/code&gt; is currently not supported in sevdesk-Update 2.0.** | [optional]
**currency** | **string** | Currency used in the creditNote. Needs to be currency code according to ISO-4217 |
**sum_net** | **float** | Net sum of the creditNote | [optional] [readonly]
**sum_tax** | **float** | Tax sum of the creditNote | [optional] [readonly]
**sum_gross** | **float** | Gross sum of the creditNote | [optional] [readonly]
**sum_discounts** | **float** | Sum of all discounts in the creditNote | [optional] [readonly]
**sum_net_foreign_currency** | **float** | Net sum of the creditNote in the foreign currency | [optional] [readonly]
**sum_tax_foreign_currency** | **float** | Tax sum of the creditNote in the foreign currency | [optional] [readonly]
**sum_gross_foreign_currency** | **float** | Gross sum of the creditNote in the foreign currency | [optional] [readonly]
**sum_discounts_foreign_currency** | **float** | Discounts sum of the creditNote in the foreign currency | [optional] [readonly]
**customer_internal_note** | **string** | Internal note of the customer. Contains data entered into field &#39;Referenz/Bestellnummer&#39; | [optional]
**show_net** | **bool** | If true, the net amount of each position will be shown on the creditNote. Otherwise gross amount | [optional]
**send_type** | **string** | Type which was used to send the creditNote. IMPORTANT: Please refer to the creditNote section of the       *     API-Overview to understand how this attribute can be used before using it! | [optional]
**credit_note_type** | **string** | Type of the creditNote. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
