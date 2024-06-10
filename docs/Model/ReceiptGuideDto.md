# # ReceiptGuideDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_datev_id** | **int** | The ID of the matching account datev | [optional]
**account_number** | **string** | The account number of the account datev (dependent on the active accounting system of the client) | [optional]
**account_name** | **string** | The name of the account | [optional]
**description** | **string** | The description of the account and/or what the account is used for | [optional]
**allowed_tax_rules** | [**\Itsmind\Sevdesk\Model\ReceiptGuideDtoAllowedTaxRulesInner[]**](ReceiptGuideDtoAllowedTaxRulesInner.md) | An array that holds all possible tax rules for this account | [optional]
**allowed_receipt_types** | **string[]** | An array that holds the viable receipt types for this account | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
