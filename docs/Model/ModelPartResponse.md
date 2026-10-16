# ModelPartResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_information** | **string** |  | [optional]
**category** | [**\Itsmind\Sevdesk\Model\ModelPartResponseCategory**](ModelPartResponseCategory.md) |  | [optional]
**create** | **\DateTime** | Date of part creation | [optional] [readonly]
**id** | **int** | The part id | [optional] [readonly]
**image** | **mixed** | Unverified, only &#x60;null&#x60; has been observed | [optional]
**internal_comment** | **string** | An internal comment for the part.&lt;br&gt;       Does not appear on invoices and orders. | [optional]
**name** | **string** | Name of the part |
**object_name** | **string** | The part object name | [optional] [readonly] [default to 'Part']
**part_number** | **string** | The part number |
**price** | **float** | Net price for which the part is sold. we will change this parameter so that the gross price is calculated automatically, until then the priceGross parameter must be used. | [optional]
**price_customer** | **mixed** | Unverified, only &#x60;null&#x60; has been observed | [optional]
**price_gross** | **float** | Gross price for which the part is sold | [optional]
**price_net** | **float** | Net price for which the part is sold | [optional]
**price_partner** | **mixed** | Unverified, only &#x60;null&#x60; has been observed | [optional]
**price_purchase** | **float** | Purchase price of the part | [optional]
**property_reorder_notification_interval** | **mixed** | Only returned when passed to the &#x60;embed&#x60; parameter. Unverified, only &#x60;null&#x60; has been observed. | [optional]
**property_reorder_notification_level** | **mixed** | Only returned when creating or updating a part, or when passed to the &#x60;embed&#x60; parameter. Unverified, only &#x60;null&#x60; has been observed. | [optional]
**second_unity_factor** | **mixed** | Unverified, only &#x60;null&#x60; has been observed | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelPartSevClient**](ModelPartSevClient.md) |  | [optional]
**status** | **int** | Status of the part. 50 &lt;-&gt; Inactive - 100 &lt;-&gt; Active | [optional]
**stock** | **float** | The stock of the part |
**stock_enabled** | **bool** | Defines if the stock should be enabled | [optional]
**tax_rate** | **float** | Tax rate of the part |
**text** | **string** | A text describing the part | [optional]
**unity** | [**\Itsmind\Sevdesk\Model\ModelPartResponseUnity**](ModelPartResponseUnity.md) |  |
**update** | **\DateTime** | Date of last part update | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
