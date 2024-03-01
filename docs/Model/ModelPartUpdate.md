# # ModelPartUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The part id | [optional] [readonly]
**object_name** | **string** | The part object name | [optional] [readonly] [default to 'Part']
**create** | **\DateTime** | Date of part creation | [optional] [readonly]
**update** | **\DateTime** | Date of last part update | [optional] [readonly]
**name** | **string** | Name of the part | [optional]
**part_number** | **string** | The part number | [optional]
**text** | **string** | A text describing the part | [optional]
**category** | [**\Itsmind\Sevdesk\Model\ModelPartCategory**](ModelPartCategory.md) |  | [optional]
**stock** | **float** | The stock of the part | [optional]
**stock_enabled** | **bool** | Defines if the stock should be enabled | [optional]
**unity** | [**\Itsmind\Sevdesk\Model\ModelPartUnity**](ModelPartUnity.md) |  | [optional]
**price** | **float** | Net price for which the part is sold. we will change this parameter so that the gross price is calculated automatically, until then the priceGross parameter must be used. | [optional]
**price_net** | **float** | Net price for which the part is sold | [optional]
**price_gross** | **float** | Gross price for which the part is sold | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelPartSevClient**](ModelPartSevClient.md) |  | [optional]
**price_purchase** | **float** | Purchase price of the part | [optional]
**tax_rate** | **float** | Tax rate of the part | [optional]
**status** | **int** | Status of the part. 50 &lt;-&gt; Inactive - 100 &lt;-&gt; Active | [optional]
**internal_comment** | **string** | An internal comment for the part.&lt;br&gt;       Does not appear on invoices and orders. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
