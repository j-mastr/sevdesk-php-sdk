# # ModelDiscountsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The id of the discount | [optional]
**object_name** | **string** | Model name, which is &#39;Discounts&#39; | [optional] [default to 'Discounts']
**create** | **string** | Date of discount creation | [optional]
**update** | **string** | Date of last discount update | [optional]
**sev_client** | **string** | Client to which the discount belongs | [optional]
**discount** | **string** | Indicates that this is a discount or a surcharge (0 &#x3D; surcharge, 1 &#x3D; discount) | [optional]
**text** | **string** | A text describing your position. | [optional]
**percentage** | **string** | Defines if this is a percentage or an absolute discount | [optional]
**value** | **string** | Value of the discount | [optional]
**is_net** | **string** | Defines is the Discount net or gross (0 &#x3D; net, 1 &#x3D; gross) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
