# # ModelVoucherUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**voucher_date** | **\DateTime** | Needs to be provided as timestamp or dd.mm.yyyy | [optional]
**supplier** | [**\Itsmind\Sevdesk\Model\ModelVoucherSupplier**](ModelVoucherSupplier.md) |  | [optional]
**supplier_name** | **string** | The supplier name.&lt;br&gt;       The value you provide here will determine what supplier name is shown for the voucher in case you did not provide a supplier. | [optional]
**description** | **string** | The description of the voucher. Essentially the voucher number. | [optional]
**pay_date** | **\DateTime** | Needs to be timestamp or dd.mm.yyyy | [optional]
**status** | **float** | &lt;b&gt;Not supported in sevdesk-Update 2.0.&lt;/b&gt;&lt;br&gt;&lt;br&gt;    Please have a look in &lt;a href&#x3D;&#39;#tag/Voucher/Types-and-status-of-vouchers&#39;&gt;status of vouchers&lt;/a&gt;    to see what the different status codes mean | [optional]
**paid_amount** | **float** | Amount which has already been paid for this voucher by the customer | [optional] [readonly]
**tax_rule** | [**\Itsmind\Sevdesk\Model\ModelVoucherTaxRule**](ModelVoucherTaxRule.md) |  | [optional]
**tax_type** | **string** | **Use this in sevdesk-Update 1.0 (instead of taxRule).**  Tax type of the voucher. There are four tax types: 1. default - Umsatzsteuer ausweisen 2. eu - Steuerfreie innergemeinschaftliche Lieferung (Europäische Union) 3. noteu - Steuerschuldnerschaft des Leistungsempfängers (außerhalb EU, z. B. Schweiz) 4. custom - Using custom tax set 5. ss - Not subject to VAT according to §19 1 UStG Tax rates are heavily connected to the tax type used. | [optional]
**credit_debit** | **string** | Defines if your voucher is a credit (C) or debit (D) | [optional]
**voucher_type** | **string** | Type of the voucher. For more information on the different types, check   &lt;a href&#x3D;&#39;#tag/Voucher/Types-and-status-of-vouchers&#39;&gt;this&lt;/a&gt; | [optional]
**currency** | **string** | specifies which currency the voucher should have. Attention: If the currency differs from the default currency stored in the account, then either the \&quot;propertyForeignCurrencyDeadline\&quot; or \&quot;propertyExchangeRate\&quot; parameter must be specified. If both parameters are specified, then the \&quot;propertyForeignCurrencyDeadline\&quot; parameter is preferred | [optional]
**property_foreign_currency_deadline** | **\DateTime** | Defines the exchange rate day and and then the exchange rate is set from sevdesk. Needs to be provided as timestamp or dd.mm.yyyy | [optional]
**property_exchange_rate** | **float** | Defines the exchange rate | [optional]
**tax_set** | [**\Itsmind\Sevdesk\Model\ModelVoucherUpdateTaxSet**](ModelVoucherUpdateTaxSet.md) |  | [optional]
**payment_deadline** | **\DateTime** | Payment deadline of the voucher. | [optional]
**delivery_date** | **\DateTime** | Needs to be provided as timestamp or dd.mm.yyyy | [optional]
**delivery_date_until** | **\DateTime** | Needs to be provided as timestamp or dd.mm.yyyy | [optional]
**document** | [**\Itsmind\Sevdesk\Model\ModelVoucherDocument**](ModelVoucherDocument.md) |  | [optional]
**cost_centre** | [**\Itsmind\Sevdesk\Model\ModelVoucherCostCentre**](ModelVoucherCostCentre.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
