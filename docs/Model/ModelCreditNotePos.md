# # ModelCreditNotePos

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The creditNote position id. | [optional] [readonly]
**object_name** | **string** | The creditNote position object name | [default to 'CreditNotePos']
**map_all** | **bool** |  |
**create** | **string** | Date of creditNote position creation | [optional] [readonly]
**update** | **string** | Date of last creditNote position update | [optional] [readonly]
**credit_note** | [**\Itsmind\Sevdesk\Model\ModelCreditNotePosCreditNote**](ModelCreditNotePosCreditNote.md) |  | [optional]
**part** | [**\Itsmind\Sevdesk\Model\ModelCreditNotePosPart**](ModelCreditNotePosPart.md) |  | [optional]
**quantity** | **float** | Quantity of the article/part |
**price** | **float** | Price of the article/part. Is either gross or net, depending on the sevdesk account setting. | [optional]
**price_net** | **float** | Net price of the part | [optional] [readonly]
**price_tax** | **float** | Tax on the price of the part | [optional]
**price_gross** | **float** | Gross price of the part | [optional]
**name** | **string** | Name of the article/part. | [optional]
**unity** | [**\Itsmind\Sevdesk\Model\ModelCreditNotePosUnity**](ModelCreditNotePosUnity.md) |  |
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelCreditNotePosSevClient**](ModelCreditNotePosSevClient.md) |  | [optional]
**position_number** | **int** | Position number of your position. Can be used to creditNote multiple positions. | [optional]
**text** | **string** | A text describing your position. | [optional]
**discount** | **float** | An optional discount of the position. | [optional]
**optional** | **bool** | Defines if the position is optional. | [optional]
**tax_rate** | **float** | Tax rate of the position. |
**sum_discount** | **float** | Discount sum of the position | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
