# ModelPartUnityResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_information** | **string** |  | [optional]
**create** | **\DateTime** | Date of part unity creation | [optional] [readonly]
**factor** | **float** | Amount of the base unit of the part that one of this unit corresponds to |
**id** | **int** | The part unity id | [readonly]
**object_name** | **string** | The part unity object name | [readonly] [default to 'PartUnity']
**part** | [**\Itsmind\Sevdesk\Model\ModelPartUnityResponsePart**](ModelPartUnityResponsePart.md) |  |
**price** | **float** | Price of the part in this unit |
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelPartUnityResponseSevClient**](ModelPartUnityResponseSevClient.md) |  | [optional]
**unity** | [**\Itsmind\Sevdesk\Model\ModelPartUnityResponseUnity**](ModelPartUnityResponseUnity.md) |  |
**update** | **\DateTime** | Date of last part unity update | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
