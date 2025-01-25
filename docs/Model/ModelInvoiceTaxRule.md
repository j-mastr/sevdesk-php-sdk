# # ModelInvoiceTaxRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | **Use this in sevdesk-Update 2.0 (replaces taxType / taxSet).**  Defines the vat-regulation. For \&quot;Regelbesteuerung\&quot; it can be one of:   - &#x60;1&#x60; - Umsatzsteuerpflichtige Umsätze - tax rates: 0.0, 7.0, 19.0 - replaces &#x60;\&quot;taxType\&quot;: \&quot;default\&quot;&#x60;   - &#x60;2&#x60; - Ausfuhren - allowedTaxRates: 0.0   - &#x60;3&#x60; - Innergemeinschaftliche Lieferungen - tax rates: 0.0, 7.0, 19.0 - replaces &#x60;\&quot;taxType\&quot;: \&quot;eu\&quot;&#x60;   - &#x60;4&#x60; - Steuerfreie Umsätze §4 UStG - tax rates: 0.0   - &#x60;5&#x60; - Reverse Charge gem. §13b UStG - tax rates: 0.0   - &#x60;17&#x60; - Nicht im Inland steuerbare Leistung - tax rates: 0.0 - replaces &#x60;\&quot;taxType\&quot;: \&quot;noteu\&quot;&#x60;     - \&quot;Nicht im Inland steuerbare Leistung\&quot; is not available for:       - advance invoice (&#x60;\&quot;invoiceType\&quot;: \&quot;AR\&quot;&#x60;)       - partial invoice (&#x60;\&quot;invoiceType\&quot;: \&quot;TR\&quot;&#x60;)       - final invoice (&#x60;\&quot;invoiceType\&quot;: \&quot;ER\&quot;&#x60;)  For small business owner (\&quot;Kleinunternehmer\&quot;) it can be:   - &#x60;11&#x60; - Steuer nicht erhoben nach §19UStG - tax rates: 0.0 - replaces &#x60;\&quot;taxType\&quot;: \&quot;ss\&quot;&#x60; |
**object_name** | **string** | Name of the object. Must always be TaxRule |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
