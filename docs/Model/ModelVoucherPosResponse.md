# # ModelVoucherPosResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The voucher position id | [optional] [readonly]
**object_name** | **string** | The voucher position object name | [optional] [readonly] [default to 'VoucherPos']
**create** | **string** | Date of voucher position creation | [optional] [readonly]
**update** | **string** | Date of last voucher position update | [optional] [readonly]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelVoucherPosResponseSevClient**](ModelVoucherPosResponseSevClient.md) |  | [optional]
**voucher** | [**\Itsmind\Sevdesk\Model\ModelVoucherPosResponseVoucher**](ModelVoucherPosResponseVoucher.md) |  |
**account_datev** | [**\Itsmind\Sevdesk\Model\ModelVoucherPosResponseAccountDatev**](ModelVoucherPosResponseAccountDatev.md) |  |
**accounting_type** | [**\Itsmind\Sevdesk\Model\ModelVoucherPosResponseAccountingType**](ModelVoucherPosResponseAccountingType.md) |  |
**estimated_accounting_type** | [**\Itsmind\Sevdesk\Model\ModelVoucherPosResponseEstimatedAccountingType**](ModelVoucherPosResponseEstimatedAccountingType.md) |  | [optional]
**tax_rate** | **string** | Tax rate of the voucher position. |
**net** | **bool** | Determines whether &#39;sumNet&#39; or &#39;sumGross&#39; is regarded.&lt;br&gt;       If both are not given, &#39;sum&#39; is regarded and treated as net or gross depending on &#39;net&#39;.  All positions must be either net or gross, a mixture of the two is not possible. |
**is_asset** | **bool** | Determines whether position is regarded as an asset which can be depreciated. | [optional]
**sum_net** | **string** | Net sum of the voucher position.&lt;br&gt;      Only regarded if &#39;net&#39; is &#39;true&#39;, otherwise its readOnly. |
**sum_tax** | **string** | Tax sum of the voucher position. | [optional] [readonly]
**sum_gross** | **string** | Gross sum of the voucher position.&lt;br&gt;      Only regarded if &#39;net&#39; is &#39;false&#39;, otherwise its readOnly. |
**sum_net_accounting** | **string** | Net accounting sum. Is equal to sumNet. | [optional] [readonly]
**sum_tax_accounting** | **string** | Tax accounting sum. Is equal to sumTax. | [optional] [readonly]
**sum_gross_accounting** | **string** | Gross accounting sum. Is equal to sumGross. | [optional] [readonly]
**comment** | **string** | Comment for the voucher position. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
