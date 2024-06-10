# # ModelContactCommunicationWaysInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the communication way |
**object_name** | **string** | Model name, which is &#39;CommunicationWay&#39; | [default to 'CommunicationWay']
**create** | **\DateTime** | Date of communication way creation | [optional] [readonly]
**update** | **\DateTime** | Date of last communication way update | [optional] [readonly]
**contact** | [**\Itsmind\Sevdesk\Model\ModelCommunicationWayContact**](ModelCommunicationWayContact.md) |  | [optional]
**type** | **string** | Type of the communication way |
**value** | **string** | The value of the communication way.&lt;br&gt;       For example the phone number, e-mail address or website. |
**key** | [**\Itsmind\Sevdesk\Model\ModelCommunicationWayKey**](ModelCommunicationWayKey.md) |  |
**main** | **bool** | Defines whether the communication way is the main communication way for the contact. | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelCommunicationWaySevClient**](ModelCommunicationWaySevClient.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
