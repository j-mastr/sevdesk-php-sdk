# ModelPartResponseCategory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_information** | **string** |  | [optional]
**code** | **string** | Short code of some predefined categories, e.g. &#x60;K&#x60; for customers or &#x60;SERVICE&#x60; for services | [optional]
**color** | **string** | Color of the category as hex code | [optional]
**create** | **\DateTime** | Date of category creation. &#x60;null&#x60; for some predefined categories. | [optional] [readonly]
**id** | **int** | Unique identifier of the category |
**name** | **string** | Name of the category |
**object_name** | **string** | Model name, which is &#39;Category&#39; | [default to 'Category']
**object_type** | **string** | Type of the objects this category can be assigned to. Observed values: &#x60;Part&#x60;, &#x60;Contact&#x60;, &#x60;Task&#x60;. |
**posting_account** | **mixed** | Unverified, only &#x60;null&#x60; has been observed | [optional]
**priority** | **int** | Priority of the category | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelCategoryResponseSevClient**](ModelCategoryResponseSevClient.md) |  | [optional]
**translation_code** | **string** | Translation code of predefined categories. &#x60;null&#x60; for custom categories. | [optional]
**type** | **string** | Type of contact categories. &#x60;C&#x60; for customer categories, &#x60;S&#x60; for supplier categories. &#x60;null&#x60; for categories of other object types. | [optional]
**update** | **\DateTime** | Date of last category update. &#x60;null&#x60; for some predefined categories. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
