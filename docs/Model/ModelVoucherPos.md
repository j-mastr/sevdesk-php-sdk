# # ModelVoucherPos

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The voucher position id | [optional] [readonly]
**object_name** | **string** | The voucher position object name | [default to 'VoucherPos']
**map_all** | **bool** |  |
**create** | **string** | Date of voucher position creation | [optional] [readonly]
**update** | **string** | Date of last voucher position update | [optional] [readonly]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelVoucherPosSevClient**](ModelVoucherPosSevClient.md) |  | [optional]
**voucher** | [**\Itsmind\Sevdesk\Model\ModelVoucherPosVoucher**](ModelVoucherPosVoucher.md) |  |
**account_datev** | [**\Itsmind\Sevdesk\Model\ModelVoucherPosAccountDatev**](ModelVoucherPosAccountDatev.md) |  |
**accounting_type** | [**\Itsmind\Sevdesk\Model\ModelVoucherPosAccountingType**](ModelVoucherPosAccountingType.md) |  |
**estimated_accounting_type** | [**\Itsmind\Sevdesk\Model\ModelVoucherPosEstimatedAccountingType**](ModelVoucherPosEstimatedAccountingType.md) |  | [optional]
**tax_rate** | **float** | Tax rate of the voucher position. |
**net** | **bool** | Determines whether &#39;sumNet&#39; or &#39;sumGross&#39; is regarded.&lt;br&gt;       If both are not given, &#39;sum&#39; is regarded and treated as net or gross depending on &#39;net&#39;.   All positions must be either net or gross, a mixture of the two is not possible. |
**is_asset** | **bool** | Determines whether position is regarded as an asset which can be depreciated. | [optional]
**sum_net** | **float** | Net sum of the voucher position.&lt;br&gt;      Only regarded if &#39;net&#39; is &#39;true&#39;, otherwise its readOnly. |
**sum_tax** | **float** | Tax sum of the voucher position. | [optional] [readonly]
**sum_gross** | **float** | Gross sum of the voucher position.&lt;br&gt;      Only regarded if &#39;net&#39; is &#39;false&#39;, otherwise its readOnly. |
**sum_net_accounting** | **float** | Net accounting sum. Is equal to sumNet. | [optional] [readonly]
**sum_tax_accounting** | **float** | Tax accounting sum. Is equal to sumTax. | [optional] [readonly]
**sum_gross_accounting** | **float** | Gross accounting sum. Is equal to sumGross. | [optional] [readonly]
**comment** | **string** | Comment for the voucher position. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
