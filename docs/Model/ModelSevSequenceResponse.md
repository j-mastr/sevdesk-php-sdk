# ModelSevSequenceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_information** | **string** |  | [optional]
**create** | **\DateTime** | Date of sequence creation | [optional] [readonly]
**format** | **string** | Format of the generated numbers. &#x60;%NUMBER&#x60; is replaced by &#x60;nextSequence&#x60;. | [optional]
**for_object** | **string** | Object type the sequence is used for | [optional]
**id** | **int** | The sequence id | [optional] [readonly]
**next_sequence** | **int** | The next number of the sequence | [optional]
**object_name** | **string** | The sequence object name | [optional] [readonly] [default to 'SevSequence']
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelSevSequenceResponseSevClient**](ModelSevSequenceResponseSevClient.md) |  | [optional]
**type** | **string** | Type of the sequence | [optional]
**update** | **\DateTime** | Date of last sequence update | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
