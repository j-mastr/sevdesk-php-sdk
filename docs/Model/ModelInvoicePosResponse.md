# # ModelInvoicePosResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The invoice position id | [optional] [readonly]
**object_name** | **string** | The invoice position object name | [optional] [readonly] [default to 'InvoicePos']
**create** | **\DateTime** | Date of invoice position creation | [optional] [readonly]
**update** | **\DateTime** | Date of last invoice position update | [optional] [readonly]
**invoice** | [**\Itsmind\Sevdesk\Model\ModelInvoicePosResponseInvoice**](ModelInvoicePosResponseInvoice.md) |  | [optional]
**part** | [**\Itsmind\Sevdesk\Model\ModelInvoicePosResponsePart**](ModelInvoicePosResponsePart.md) |  | [optional]
**quantity** | **string** | Quantity of the article/part | [optional] [readonly]
**price** | **string** | Price of the article/part. Is either gross or net, depending on the sevdesk account setting. | [optional] [readonly]
**name** | **string** | Name of the article/part. | [optional] [readonly]
**unity** | [**\Itsmind\Sevdesk\Model\ModelInvoicePosResponseUnity**](ModelInvoicePosResponseUnity.md) |  | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelInvoicePosResponseSevClient**](ModelInvoicePosResponseSevClient.md) |  | [optional]
**position_number** | **string** | Position number of your position. Can be used to order multiple positions. | [optional] [readonly]
**text** | **string** | A text describing your position. | [optional] [readonly]
**discount** | **string** | An optional discount of the position. | [optional] [readonly]
**tax_rate** | **string** | Tax rate of the position. | [optional] [readonly]
**sum_discount** | **string** | Discount sum of the position | [optional] [readonly]
**sum_net_accounting** | **string** | Net accounting sum of the position | [optional] [readonly]
**sum_tax_accounting** | **string** | Tax accounting sum of the position | [optional] [readonly]
**sum_gross_accounting** | **string** | Gross accounting sum of the position | [optional] [readonly]
**price_net** | **string** | Net price of the part | [optional] [readonly]
**price_gross** | **string** | Gross price of the part | [optional] [readonly]
**price_tax** | **string** | Tax on the price of the part | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
