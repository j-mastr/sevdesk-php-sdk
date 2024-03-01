# # ModelContactAddressResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The contact address id | [optional] [readonly]
**object_name** | **string** | The contact address object name | [optional] [readonly] [default to 'ContactAddress']
**create** | **\DateTime** | Date of contact address creation | [optional] [readonly]
**update** | **\DateTime** | Date of last contact address update | [optional] [readonly]
**contact** | [**\Itsmind\Sevdesk\Model\ModelContactAddressResponseContact**](ModelContactAddressResponseContact.md) |  |
**street** | **string** | Street name | [optional]
**zip** | **string** | Zib code | [optional]
**city** | **string** | City name | [optional]
**country** | [**\Itsmind\Sevdesk\Model\ModelContactAddressResponseCountry**](ModelContactAddressResponseCountry.md) |  |
**category** | [**\Itsmind\Sevdesk\Model\ModelContactAddressResponseCategory**](ModelContactAddressResponseCategory.md) |  | [optional]
**name** | **string** | Name in address | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelContactAddressResponseSevClient**](ModelContactAddressResponseSevClient.md) |  | [optional]
**name2** | **string** | Second name in address | [optional]
**name3** | **string** | Third name in address | [optional]
**name4** | **string** | Fourth name in address | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
