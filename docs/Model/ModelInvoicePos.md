# # ModelInvoicePos

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The invoice position id. &lt;span style&#x3D;&#39;color:red&#39;&gt;Required&lt;/span&gt; if you want to update an invoice position for an existing invoice | [optional]
**object_name** | **string** | The invoice position object name | [default to 'InvoicePos']
**map_all** | **bool** |  |
**create** | **\DateTime** | Date of invoice position creation | [optional] [readonly]
**update** | **\DateTime** | Date of last invoice position update | [optional] [readonly]
**invoice** | [**\Itsmind\Sevdesk\Model\ModelInvoicePosInvoice**](ModelInvoicePosInvoice.md) |  | [optional]
**part** | [**\Itsmind\Sevdesk\Model\ModelCreditNotePosPart**](ModelCreditNotePosPart.md) |  | [optional]
**quantity** | **float** | Quantity of the article/part |
**price** | **float** | Price of the article/part. Is either gross or net, depending on the sevdesk account setting. | [optional]
**name** | **string** | Name of the article/part. | [optional]
**unity** | [**\Itsmind\Sevdesk\Model\ModelInvoicePosUnity**](ModelInvoicePosUnity.md) |  |
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelInvoicePosSevClient**](ModelInvoicePosSevClient.md) |  | [optional]
**position_number** | **int** | Position number of your position. Can be used to order multiple positions. | [optional]
**text** | **string** | A text describing your position. | [optional]
**discount** | **float** | An optional discount of the position. | [optional]
**tax_rate** | **float** | Tax rate of the position. |
**sum_discount** | **float** | Discount sum of the position | [optional] [readonly]
**sum_net_accounting** | **float** | Net accounting sum of the position | [optional] [readonly]
**sum_tax_accounting** | **float** | Tax accounting sum of the position | [optional] [readonly]
**sum_gross_accounting** | **float** | Gross accounting sum of the position | [optional] [readonly]
**price_net** | **float** | Net price of the part | [optional] [readonly]
**price_gross** | **float** | Gross price of the part | [optional]
**price_tax** | **float** | Tax on the price of the part | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
