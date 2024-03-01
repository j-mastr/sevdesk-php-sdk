# # ModelDiscount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | the id of the discount | [optional] [readonly]
**object_name** | **string** | Model name, which is &#39;Discounts&#39; | [optional] [readonly] [default to 'Discounts']
**create** | **\DateTime** | Date of discount creation | [optional] [readonly]
**update** | **\DateTime** | Date of last discount update | [optional] [readonly]
**object** | [**\Itsmind\Sevdesk\Model\ModelDiscountObject**](ModelDiscountObject.md) |  | [optional]
**sev_client** | **string** | Client to which invoice belongs. Will be filled automatically | [optional] [readonly]
**text** | **string** | A text describing your position. | [optional] [readonly]
**percentage** | **string** | Defines if this is a percentage or an absolute discount | [optional]
**value** | **string** | Value of the discount | [optional]
**is_net** | **string** | Defines is the Discount net or gross 0 - gross 1 - net | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
