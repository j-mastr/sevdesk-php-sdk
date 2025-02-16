# # ModelInvoiceUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_intervall** | **string** | The interval in which recurring invoices are due as ISO-8601 duration.&lt;br&gt;       Necessary attribute for all recurring invoices. | [optional]
**account_next_invoice** | **int** | Timestamp when the next invoice will be generated by this recurring invoice. | [optional]
**address** | **string** | Complete address of the recipient including name, street, city, zip and country.       * Line breaks can be used and will be displayed on the invoice pdf. | [optional]
**address_country** | [**\Itsmind\Sevdesk\Model\ModelCreditNoteAddressCountry**](ModelCreditNoteAddressCountry.md) |  | [optional]
**contact** | [**\Itsmind\Sevdesk\Model\ModelInvoiceUpdateContact**](ModelInvoiceUpdateContact.md) |  | [optional]
**contact_person** | [**\Itsmind\Sevdesk\Model\ModelInvoiceContactPerson**](ModelInvoiceContactPerson.md) |  | [optional]
**cost_centre** | [**\Itsmind\Sevdesk\Model\ModelInvoiceUpdateCostCentre**](ModelInvoiceUpdateCostCentre.md) |  | [optional]
**create** | **\DateTime** | Date of invoice creation | [optional] [readonly]
**create_user** | [**\Itsmind\Sevdesk\Model\ModelCreditNoteCreateUser**](ModelCreditNoteCreateUser.md) |  | [optional]
**currency** | **string** | Currency used in the invoice. Needs to be currency code according to ISO-4217 | [optional]
**customer_internal_note** | **string** | Internal note of the customer. Contains data entered into field &#39;Referenz/Bestellnummer&#39; | [optional]
**datev_connect_online** | **object** | Internal attribute | [optional]
**delivery_date** | **\DateTime** | Timestamp. This can also be a date range if you also use the attribute deliveryDateUntil | [optional]
**delivery_date_until** | **int** | If the delivery date should be a time range, another timestamp can be provided in this attribute       * to define a range from timestamp used in deliveryDate attribute to the timestamp used here. | [optional]
**discount** | **int** | If you want to give a discount, define the percentage here. Otherwise provide zero as value | [optional]
**discount_time** | **int** | If a value other than zero is used for the discount attribute,      you need to specify the amount of days for which the discount is granted. | [optional]
**dunning_level** | **int** | Defines how many reminders have already been sent for the invoice.      Starts with 1 (Payment reminder) and should be incremented by one every time another reminder is sent. | [optional]
**enshrined** | **\DateTime** | Defines if and when invoice was enshrined. Enshrined invoices can not be manipulated. | [optional]
**foot_text** | **string** | Certain html tags can be used here to format your text | [optional]
**header** | **string** | Normally consist of prefix plus the invoice number | [optional]
**head_text** | **string** | Certain html tags can be used here to format your text | [optional]
**id** | **int** | The invoice id | [optional] [readonly]
**invoice_date** | **string** | Needs to be provided as timestamp or dd.mm.yyyy | [optional]
**invoice_number** | **string** | The invoice number | [optional]
**invoice_type** | **string** | Type of the invoice. For more information on the different types, check       &lt;a href&#x3D;&#39;https://api.sevdesk.de/#section/Types-and-status-of-invoices&#39;&gt;this&lt;/a&gt; section | [optional]
**object_name** | **string** | The invoice object name | [optional] [readonly] [default to 'Invoice']
**origin** | [**\Itsmind\Sevdesk\Model\ModelInvoiceUpdateOrigin**](ModelInvoiceUpdateOrigin.md) |  | [optional]
**paid_amount** | **float** | Amount which has already been paid for this invoice by the customer | [optional] [readonly]
**pay_date** | **\DateTime** | Needs to be timestamp or dd.mm.yyyy | [optional]
**payment_method** | [**\Itsmind\Sevdesk\Model\ModelInvoiceUpdatePaymentMethod**](ModelInvoiceUpdatePaymentMethod.md) |  | [optional]
**reminder_charge** | **float** | The additional reminder charge | [optional]
**reminder_deadline** | **int** | Deadline of the reminder as timestamp | [optional]
**reminder_debit** | **float** | Debit of the reminder | [optional]
**reminder_total** | **float** | Total reminder amount | [optional]
**send_date** | **\DateTime** | The date the invoice was sent to the customer | [optional]
**send_payment_received_notification_date** | **int** | Internal attribute | [optional]
**send_type** | **string** | Type which was used to send the invoice. IMPORTANT: Please refer to the invoice section of the       *     API-Overview to understand how this attribute can be used before using it! | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelInvoiceSevClient**](ModelInvoiceSevClient.md) |  | [optional]
**show_net** | **bool** | If true, the net amount of each position will be shown on the invoice. Otherwise gross amount | [optional]
**small_settlement** | **bool** | Defines if the client uses the small settlement scheme.      If yes, the invoice must not contain any vat | [optional]
**status** | **string** | Please have a look in our       &lt;a href&#x3D;&#39;https://api.sevdesk.de/#section/Types-and-status-of-invoices&#39;&gt;Types and status of invoice&lt;/a&gt;       to see what the different status codes mean | [optional]
**sum_discounts** | **float** | Sum of all discounts in the invoice | [optional] [readonly]
**sum_discounts_foreign_currency** | **float** | Discounts sum of the invoice in the foreign currency | [optional] [readonly]
**sum_gross** | **float** | Gross sum of the invoice | [optional] [readonly]
**sum_gross_accounting** | **float** | Gross accounting sum of the invoice. Is usually the same as sumGross | [optional] [readonly]
**sum_gross_foreign_currency** | **float** | Gross sum of the invoice in the foreign currency | [optional] [readonly]
**sum_net** | **float** | Net sum of the invoice | [optional] [readonly]
**sum_net_accounting** | **float** | Net accounting sum of the invoice. Is usually the same as sumNet | [optional] [readonly]
**sum_net_foreign_currency** | **float** | Net sum of the invoice in the foreign currency | [optional] [readonly]
**sum_tax** | **float** | Tax sum of the invoice | [optional] [readonly]
**sum_tax_accounting** | **float** | Tax accounting sum of the invoice. Is usually the same as sumTax | [optional] [readonly]
**sum_tax_foreign_currency** | **float** | Tax sum of the invoice in the foreign currency | [optional] [readonly]
**tax_rate** | **float** | This is not used anymore. Use the taxRate of the individual positions instead. | [optional] [readonly]
**tax_rule** | [**\Itsmind\Sevdesk\Model\ModelInvoiceTaxRule**](ModelInvoiceTaxRule.md) |  | [optional]
**tax_set** | [**\Itsmind\Sevdesk\Model\ModelInvoiceUpdateTaxSet**](ModelInvoiceUpdateTaxSet.md) |  | [optional]
**tax_text** | **string** | A common tax text would be &#39;Umsatzsteuer 19%&#39; | [optional]
**tax_type** | **string** | **Use this in sevdesk-Update 1.0 (instead of taxRule).**  Tax type of the invoice. There are four tax types: 1. default - Umsatzsteuer ausweisen 2. eu - Steuerfreie innergemeinschaftliche Lieferung (Europäische Union) 3. noteu - Steuerschuldnerschaft des Leistungsempfängers (außerhalb EU, z. B. Schweiz) 4. custom - Using custom tax set 5. ss - Kleinunternehmer Tax rates are heavily connected to the tax type used. | [optional]
**time_to_pay** | **int** | The time the customer has to pay the invoice in days | [optional]
**update** | **\DateTime** | Date of last invoice update | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
