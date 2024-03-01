# # ModelContactCustomFieldResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | id of the contact field | [optional]
**object_name** | **string** | Internal object name which is &#39;ContactCustomField&#39;. | [optional] [default to 'ContactCustomField']
**create** | **\DateTime** | Date of contact field creation | [optional]
**update** | **\DateTime** | Date of contact field update | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelContactCustomFieldResponseSevClient**](ModelContactCustomFieldResponseSevClient.md) |  | [optional]
**contact** | [**\Itsmind\Sevdesk\Model\ModelContactCustomFieldResponseContact**](ModelContactCustomFieldResponseContact.md) |  | [optional]
**contact_custom_field_setting** | [**\Itsmind\Sevdesk\Model\ModelContactCustomFieldSettingResponse**](ModelContactCustomFieldSettingResponse.md) | the contact custom field setting | [optional]
**value** | **string** | The value of the contact field | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
