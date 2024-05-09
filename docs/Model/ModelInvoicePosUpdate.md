# # ModelInvoicePosUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**create** | **\DateTime** | Date of invoice position creation | [optional] [readonly]
**discount** | **float** | An optional discount of the position. | [optional]
**id** | **int** | The invoice position id | [optional] [readonly]
**invoice** | [**\Itsmind\Sevdesk\Model\ModelInvoicePosUpdateInvoice**](ModelInvoicePosUpdateInvoice.md) |  | [optional]
**name** | **string** | Name of the article/part. | [optional]
**object_name** | **string** | The invoice position object name | [optional] [readonly] [default to 'InvoicePos']
**part** | [**\Itsmind\Sevdesk\Model\ModelCreditNotePosPart**](ModelCreditNotePosPart.md) |  | [optional]
**position_number** | **int** | Position number of your position. Can be used to order multiple positions. | [optional]
**price** | **float** | Price of the article/part. Is either gross or net, depending on the sevDesk account setting. | [optional]
**price_gross** | **float** | Gross price of the part | [optional]
**price_net** | **float** | Net price of the part | [optional] [readonly]
**price_tax** | **float** | Tax on the price of the part | [optional]
**quantity** | **float** | Quantity of the article/part | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelInvoicePosSevClient**](ModelInvoicePosSevClient.md) |  | [optional]
**sum_discount** | **float** | Discount sum of the position | [optional] [readonly]
**sum_gross_accounting** | **float** | Gross accounting sum of the position | [optional] [readonly]
**sum_net_accounting** | **float** | Net accounting sum of the position | [optional] [readonly]
**sum_tax_accounting** | **float** | Tax accounting sum of the position | [optional] [readonly]
**tax_rate** | **float** | Tax rate of the position. | [optional]
**text** | **string** | A text describing your position. | [optional]
**unity** | [**\Itsmind\Sevdesk\Model\ModelInvoicePosUnity**](ModelInvoicePosUnity.md) |  | [optional]
**update** | **\DateTime** | Date of last invoice position update | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
