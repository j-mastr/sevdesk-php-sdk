# ModelUnityResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_information** | **string** |  | [optional]
**create** | **\DateTime** | Date of unity creation. &#x60;null&#x60; for predefined units. | [optional] [readonly]
**id** | **int** | The unity id | [readonly]
**name** | **string** | Name of the unit |
**object_name** | **string** | The unity object name | [readonly] [default to 'Unity']
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelUnityResponseSevClient**](ModelUnityResponseSevClient.md) |  | [optional]
**translation_code** | **string** | Translation code of predefined units. &#x60;null&#x60; for custom units. | [optional]
**unece_trade_unit_code** | **string** | UN/ECE Recommendation 20 code of the unit | [optional]
**unity_system** | **string** | Unit system of predefined units, e.g. &#x60;general&#x60; or &#x60;metric&#x60;. &#x60;null&#x60; for custom units. | [optional]
**update** | **\DateTime** | Date of last unity update | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
