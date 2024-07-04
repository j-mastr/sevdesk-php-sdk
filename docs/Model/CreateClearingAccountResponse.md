# # CreateClearingAccountResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The check account id | [optional]
**object_name** | **string** | The check account object name, always &#39;CheckAccount&#39; | [optional]
**create** | **\DateTime** | Date of check account creation | [optional]
**update** | **\DateTime** | Date of last check account update | [optional]
**sev_client** | [**\Itsmind\Sevdesk\Model\CreateFileImportAccountResponseSevClient**](CreateFileImportAccountResponseSevClient.md) |  | [optional]
**name** | **string** | Name of the check account | [optional]
**type** | **string** | The type of the check account. Clearing accounts are regarded as offline. | [optional]
**currency** | **string** | The currency of the check account. | [optional]
**default_account** | **string** | Defines if this check account is the default account. | [optional] [default to '0']
**status** | **string** | Status of the check account. 0 &lt;-&gt; Archived - 100 &lt;-&gt; Active | [optional] [default to '100']
**accounting_number** | **string** | The booking account used for this clearing account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
