# # ModelOrderPosResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The order position id | [optional] [readonly]
**object_name** | **string** | The order position object name | [optional] [readonly] [default to 'OrderPos']
**create** | **\DateTime** | Date of order position creation | [optional] [readonly]
**update** | **\DateTime** | Date of last order position update | [optional] [readonly]
**order** | [**\Itsmind\Sevdesk\Model\ModelOrderPosResponseOrder**](ModelOrderPosResponseOrder.md) |  | [optional]
**part** | [**\Itsmind\Sevdesk\Model\ModelOrderPosResponsePart**](ModelOrderPosResponsePart.md) |  | [optional]
**quantity** | **string** | Quantity of the article/part | [optional]
**price** | **string** | Price of the article/part. Is either gross or net, depending on the sevdesk account setting. | [optional]
**price_net** | **string** | Net price of the part | [optional] [readonly]
**price_tax** | **string** | Tax on the price of the part | [optional]
**price_gross** | **string** | Gross price of the part | [optional]
**name** | **string** | Name of the article/part. | [optional]
**unity** | [**\Itsmind\Sevdesk\Model\ModelOrderPosResponseUnity**](ModelOrderPosResponseUnity.md) |  | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelOrderPosResponseSevClient**](ModelOrderPosResponseSevClient.md) |  | [optional]
**position_number** | **string** | Position number of your position. Can be used to order multiple positions. | [optional]
**text** | **string** | A text describing your position. | [optional]
**discount** | **string** | An optional discount of the position. | [optional]
**optional** | **bool** | Defines if the position is optional. | [optional]
**tax_rate** | **string** | Tax rate of the position. | [optional]
**sum_discount** | **string** | Discount sum of the position | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
