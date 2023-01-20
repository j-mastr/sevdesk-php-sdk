# # ExportInvoiceSevQueryParameterFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_type** | **string[]** | Type of invoices you want to export 1. RE - Rechnung 2. SR - Stornorechnung 3. TR - Teilrechnung 4. AR - Abschlagsrechnung 5. ER - Endrechnung 6. WKR - Wiederkehrende Rechnung 7. MA - Mahnung | [optional]
**start_date** | **\DateTime** | Start date of the invoice | [optional]
**end_date** | **\DateTime** | End date of the invoice | [optional]
**contact** | [**\Itsmind\Sevdesk\Model\ExportInvoiceSevQueryParameterFilterContact**](ExportInvoiceSevQueryParameterFilterContact.md) |  | [optional]
**start_amount** | **int** | filters the invoices by amount | [optional]
**end_amount** | **int** | filters the invoices by amount | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
