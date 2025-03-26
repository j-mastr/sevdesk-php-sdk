# Itsmind\Sevdesk\ExportApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exportContact()**](ExportApi.md#exportContact) | **GET** /Export/contactListCsv | Export contact |
| [**exportCreditNote()**](ExportApi.md#exportCreditNote) | **GET** /Export/creditNoteCsv | Export creditNote |
| [**exportDatevCSV()**](ExportApi.md#exportDatevCSV) | **GET** /Export/createDatevCsvZipExportJob | Start DATEV CSV ZIP export |
| [**exportDatevDepricated()**](ExportApi.md#exportDatevDepricated) | **GET** /Export/datevCSV | Export datev |
| [**exportDatevXML()**](ExportApi.md#exportDatevXML) | **GET** /Export/createDatevXmlZipExportJob | Start DATEV XML ZIP export |
| [**exportInvoice()**](ExportApi.md#exportInvoice) | **GET** /Export/invoiceCsv | Export invoice |
| [**exportInvoiceZip()**](ExportApi.md#exportInvoiceZip) | **GET** /Export/invoiceZip | Export Invoice as zip |
| [**exportTransactions()**](ExportApi.md#exportTransactions) | **GET** /Export/transactionsCsv | Export transaction |
| [**exportVoucher()**](ExportApi.md#exportVoucher) | **GET** /Export/voucherListCsv | Export voucher as zip |
| [**exportVoucherZip()**](ExportApi.md#exportVoucherZip) | **GET** /Export/voucherZip | Export voucher zip |
| [**generateDownloadHash()**](ExportApi.md#generateDownloadHash) | **GET** /Progress/generateDownloadHash | Generate download hash |
| [**getProgress()**](ExportApi.md#getProgress) | **GET** /Progress/getProgress | Get progress |
| [**jobDownloadInfo()**](ExportApi.md#jobDownloadInfo) | **GET** /ExportJob/jobDownloadInfo | Get job download info |
| [**updateExportConfig()**](ExportApi.md#updateExportConfig) | **PUT** /SevClient/{SevClientId}/updateExportConfig | Update export config |


## `exportContact()`

```php
exportContact($sev_query, $download): \Itsmind\Sevdesk\Model\ExportContact200Response
```

Export contact

Contact export as csv

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sev_query = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\ExportContactSevQueryParameter(); // \Itsmind\Sevdesk\Model\ExportContactSevQueryParameter
$download = True; // bool

try {
    $result = $apiInstance->exportContact($sev_query, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sev_query** | [**\Itsmind\Sevdesk\Model\ExportContactSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ExportContact200Response**](../Model/ExportContact200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportCreditNote()`

```php
exportCreditNote($sev_query, $download): \Itsmind\Sevdesk\Model\ExportCreditNote200Response
```

Export creditNote

Export all credit notes as csv

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sev_query = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\ExportCreditNoteSevQueryParameter(); // \Itsmind\Sevdesk\Model\ExportCreditNoteSevQueryParameter
$download = True; // bool

try {
    $result = $apiInstance->exportCreditNote($sev_query, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sev_query** | [**\Itsmind\Sevdesk\Model\ExportCreditNoteSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ExportCreditNote200Response**](../Model/ExportCreditNote200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportDatevCSV()`

```php
exportDatevCSV($start_date, $end_date, $scope, $export_by_paydate, $include_enshrined, $enshrine_documents, $include_document_images): \Itsmind\Sevdesk\Model\ExportDatevCSV200Response
```

Start DATEV CSV ZIP export

Start an export that generates booking data in the DATEV format (CSV)  Before you can perform the DATEV export, you first have to set the \"accountingYearBegin\". To do this, use the endpoint <a href='#tag/Export/operation/updateExportConfig'>updateExportConfig</a>.  After that you can use the createDatevCsvZipExportJob endpoint to start the DATEV export which returns the export ID.  You have to use the <a href='#tag/Export/operation/jobDownloadInfo'>jobDownloadInfo</a> endpoint to receive the download url when the export is ready.  <h3>Export workflow</h2> To get the DATEV CSV zip file, please implement the following workflow. <ol> <li>Set the accountingYearBegin (if not already set) via <a href='#tag/Export/operation/updateExportConfig'>updateExportConfig</a></li> <li>Start the export by using the createDatevCsvZipExportJob endpoint</li> <li>Request a progressHash with endpoint <a href='#tag/Export/operation/generateDownloadHash'>generateDownloadHash</a> (optional)</li> <li>Use the progressHash to receive export progress information with endpoint <a href='#tag/Export/operation/getProgress'>getProgress</a> (optional)</li> <li>Use the <a href='#tag/Export/operation/jobDownloadInfo'>jobDownloadInfo</a> endpoint to get the download url to the zip file.</li> </ol>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 1641032867; // int | The start date of the export as timestamp
$end_date = 1648805267; // int | The end date of the export as timestamp
$scope = EXTCD; // string | Define what you want to include in the DATEV export. This parameter takes a string of 5 letters. Each stands for a model that should be included. Possible letters are: ‘E’ (Earnings), ‘X’ (Expenditure), ‘T’ (Transactions), ‘C’ (Cashregister), ‘D’ (Assets). By providing one of those letter you specify that it should be included in the DATEV export. Some combinations are: ‘EXTCD’, ‘EXTD’ …
$export_by_paydate = true; // bool | When this parameter is true, the export contains only paid documents where pay date is in the time range of startDate and endDate
$include_enshrined = true; // bool | If set to false, the export excludes enshrined documents
$enshrine_documents = true; // bool | Specify if you want to enshrine all models which were included in the export
$include_document_images = true; // bool | Specify if you want to include the document images in the export

try {
    $result = $apiInstance->exportDatevCSV($start_date, $end_date, $scope, $export_by_paydate, $include_enshrined, $enshrine_documents, $include_document_images);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportDatevCSV: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **int**| The start date of the export as timestamp | |
| **end_date** | **int**| The end date of the export as timestamp | |
| **scope** | **string**| Define what you want to include in the DATEV export. This parameter takes a string of 5 letters. Each stands for a model that should be included. Possible letters are: ‘E’ (Earnings), ‘X’ (Expenditure), ‘T’ (Transactions), ‘C’ (Cashregister), ‘D’ (Assets). By providing one of those letter you specify that it should be included in the DATEV export. Some combinations are: ‘EXTCD’, ‘EXTD’ … | |
| **export_by_paydate** | **bool**| When this parameter is true, the export contains only paid documents where pay date is in the time range of startDate and endDate | [optional] [default to false] |
| **include_enshrined** | **bool**| If set to false, the export excludes enshrined documents | [optional] [default to true] |
| **enshrine_documents** | **bool**| Specify if you want to enshrine all models which were included in the export | [optional] [default to false] |
| **include_document_images** | **bool**| Specify if you want to include the document images in the export | [optional] [default to false] |

### Return type

[**\Itsmind\Sevdesk\Model\ExportDatevCSV200Response**](../Model/ExportDatevCSV200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportDatevDepricated()`

```php
exportDatevDepricated($start_date, $end_date, $scope, $download, $with_unpaid_documents, $with_enshrined_documents, $enshrine): object
```

Export datev

DATEV export as zip with CSVs. Before you can perform the DATEV export, you must first set the \"accountingYearBegin\". To do this, you must use the <a href='#tag/Export/operation/updateExportConfig'>updateExportConfig</a> endpoint. Please note, that this endpoint is deprecated. You should use the endpoint <a href='#tag/Export/operation/exportDatevCSV'>/Export/createDatevCsvZipExportJob</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 1641032867; // int | The start date of the export as timestamp
$end_date = 1648805267; // int | The end date of the export as timestamp
$scope = EXTCD; // string | Define what you want to include in the DATEV export. This parameter takes a string of 5 letters. Each stands for a model that should be included. Possible letters are: ‘E’ (Earnings), ‘X’ (Expenditure), ‘T’ (Transactions), ‘C’ (Cashregister), ‘D’ (Assets). By providing one of those letter you specify that it should be included in the DATEV export. Some combinations are: ‘EXTCD’, ‘EXTD’ …
$download = true; // bool | Specifies if the document is downloaded
$with_unpaid_documents = true; // bool | include unpaid documents
$with_enshrined_documents = true; // bool | include enshrined documents
$enshrine = false; // bool | Specify if you want to enshrine all models which were included in the export

try {
    $result = $apiInstance->exportDatevDepricated($start_date, $end_date, $scope, $download, $with_unpaid_documents, $with_enshrined_documents, $enshrine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportDatevDepricated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **int**| The start date of the export as timestamp | |
| **end_date** | **int**| The end date of the export as timestamp | |
| **scope** | **string**| Define what you want to include in the DATEV export. This parameter takes a string of 5 letters. Each stands for a model that should be included. Possible letters are: ‘E’ (Earnings), ‘X’ (Expenditure), ‘T’ (Transactions), ‘C’ (Cashregister), ‘D’ (Assets). By providing one of those letter you specify that it should be included in the DATEV export. Some combinations are: ‘EXTCD’, ‘EXTD’ … | |
| **download** | **bool**| Specifies if the document is downloaded | [optional] |
| **with_unpaid_documents** | **bool**| include unpaid documents | [optional] |
| **with_enshrined_documents** | **bool**| include enshrined documents | [optional] |
| **enshrine** | **bool**| Specify if you want to enshrine all models which were included in the export | [optional] |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportDatevXML()`

```php
exportDatevXML($start_date, $end_date, $scope, $export_by_paydate, $include_enshrined, $include_exported_documents, $include_document_xml): \Itsmind\Sevdesk\Model\ExportDatevCSV200Response
```

Start DATEV XML ZIP export

Start an export that generates invoice data in the DATEV format (XML)  Before you can perform the DATEV export, you first have to set the \"accountingYearBegin\". To do this, use the endpoint <a href='#tag/Export/operation/updateExportConfig'>updateExportConfig</a>.   After that you can use the createDatevXmlZipExportJob endpoint to start the DATEV export which returns the export ID.  You have to use the <a href='#tag/Export/operation/jobDownloadInfo'>jobDownloadInfo</a> endpoint to receive the download url when the export is ready.  <h3>Export workflow</h2> To get the DATEV XML zip file, please implement the following workflow. <ol> <li>Set the accountingYearBegin (if not already set) via <a href='#tag/Export/operation/updateExportConfig'>updateExportConfig</a></li> <li>Start the export by using the createDatevXmlZipExportJob endpoint</li> <li>Request a progressHash with endpoint <a href='#tag/Export/operation/generateDownloadHash'>generateDownloadHash</a> (optional)</li> <li>Use the progressHash to receive export progress information with endpoint <a href='#tag/Export/operation/getProgress'>getProgress</a> (optional)</li> <li>Use the <a href='#tag/Export/operation/jobDownloadInfo'>jobDownloadInfo</a> endpoint to get the download url to the zip file.</li> </ol>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 1641032867; // int | The start date of the export as ISO timestamp
$end_date = 1648805267; // int | The end date of the export as ISO timestamp
$scope = EX; // string | Define what you want to include in the DATEV export. This parameter takes a string of letters. Each letter stands for a document type that should be included. Possible letters are: ‘E’ (Receipts, outgoing invoices & credit notes) and ‘X’ (Expenditure documents).
$export_by_paydate = true; // bool | When this parameter is true, the export contains only paid documents where pay date is in the time range of startDate and endDate
$include_enshrined = true; // bool | If set to false, the export excludes enshrined documents
$include_exported_documents = true; // bool | If set to false, the export excludes already exported documents
$include_document_xml = true; // bool | If set to false, the export excludes XML files containing the data for each document

try {
    $result = $apiInstance->exportDatevXML($start_date, $end_date, $scope, $export_by_paydate, $include_enshrined, $include_exported_documents, $include_document_xml);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportDatevXML: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **int**| The start date of the export as ISO timestamp | |
| **end_date** | **int**| The end date of the export as ISO timestamp | |
| **scope** | **string**| Define what you want to include in the DATEV export. This parameter takes a string of letters. Each letter stands for a document type that should be included. Possible letters are: ‘E’ (Receipts, outgoing invoices &amp; credit notes) and ‘X’ (Expenditure documents). | |
| **export_by_paydate** | **bool**| When this parameter is true, the export contains only paid documents where pay date is in the time range of startDate and endDate | [optional] [default to false] |
| **include_enshrined** | **bool**| If set to false, the export excludes enshrined documents | [optional] [default to true] |
| **include_exported_documents** | **bool**| If set to false, the export excludes already exported documents | [optional] [default to true] |
| **include_document_xml** | **bool**| If set to false, the export excludes XML files containing the data for each document | [optional] [default to true] |

### Return type

[**\Itsmind\Sevdesk\Model\ExportDatevCSV200Response**](../Model/ExportDatevCSV200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportInvoice()`

```php
exportInvoice($sev_query, $download): \Itsmind\Sevdesk\Model\ExportInvoice200Response
```

Export invoice

Export all invoices as csv

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sev_query = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\ExportInvoiceSevQueryParameter(); // \Itsmind\Sevdesk\Model\ExportInvoiceSevQueryParameter
$download = True; // bool

try {
    $result = $apiInstance->exportInvoice($sev_query, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sev_query** | [**\Itsmind\Sevdesk\Model\ExportInvoiceSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ExportInvoice200Response**](../Model/ExportInvoice200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportInvoiceZip()`

```php
exportInvoiceZip($sev_query, $download): \Itsmind\Sevdesk\Model\ExportInvoiceZip200Response
```

Export Invoice as zip

Export all invoices as zip

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sev_query = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\ExportInvoiceSevQueryParameter(); // \Itsmind\Sevdesk\Model\ExportInvoiceSevQueryParameter
$download = True; // bool

try {
    $result = $apiInstance->exportInvoiceZip($sev_query, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportInvoiceZip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sev_query** | [**\Itsmind\Sevdesk\Model\ExportInvoiceSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ExportInvoiceZip200Response**](../Model/ExportInvoiceZip200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportTransactions()`

```php
exportTransactions($sev_query, $download): \Itsmind\Sevdesk\Model\ExportTransactions200Response
```

Export transaction

Export all transactions as csv

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sev_query = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\ExportTransactionsSevQueryParameter(); // \Itsmind\Sevdesk\Model\ExportTransactionsSevQueryParameter
$download = True; // bool

try {
    $result = $apiInstance->exportTransactions($sev_query, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sev_query** | [**\Itsmind\Sevdesk\Model\ExportTransactionsSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ExportTransactions200Response**](../Model/ExportTransactions200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportVoucher()`

```php
exportVoucher($sev_query, $download): \Itsmind\Sevdesk\Model\ExportVoucher200Response
```

Export voucher as zip

Export all vouchers as zip

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sev_query = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\ExportVoucherSevQueryParameter(); // \Itsmind\Sevdesk\Model\ExportVoucherSevQueryParameter
$download = True; // bool

try {
    $result = $apiInstance->exportVoucher($sev_query, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sev_query** | [**\Itsmind\Sevdesk\Model\ExportVoucherSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ExportVoucher200Response**](../Model/ExportVoucher200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportVoucherZip()`

```php
exportVoucherZip($sev_query, $download): \Itsmind\Sevdesk\Model\ExportVoucherZip200Response
```

Export voucher zip

export all vouchers as zip

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sev_query = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\ExportVoucherZipSevQueryParameter(); // \Itsmind\Sevdesk\Model\ExportVoucherZipSevQueryParameter
$download = True; // bool

try {
    $result = $apiInstance->exportVoucherZip($sev_query, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportVoucherZip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sev_query** | [**\Itsmind\Sevdesk\Model\ExportVoucherZipSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ExportVoucherZip200Response**](../Model/ExportVoucherZip200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateDownloadHash()`

```php
generateDownloadHash($job_id): \Itsmind\Sevdesk\Model\GenerateDownloadHash200Response
```

Generate download hash

Generates an identifier to request the current export progress.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 0a0e1eff-9590-1bea-1195-a3cfc04364cc; // string | The export job ID

try {
    $result = $apiInstance->generateDownloadHash($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->generateDownloadHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **string**| The export job ID | |

### Return type

[**\Itsmind\Sevdesk\Model\GenerateDownloadHash200Response**](../Model/GenerateDownloadHash200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgress()`

```php
getProgress($hash): \Itsmind\Sevdesk\Model\GenerateDownloadHash200Response
```

Get progress

Get the progress state of the export. You can use polling (request every few seconds) to get the current state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hash = 22ae177d286f17aac5daac591c70164159b64c7f_0a0e1eff; // string | The hash string of an export

try {
    $result = $apiInstance->getProgress($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getProgress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| The hash string of an export | |

### Return type

[**\Itsmind\Sevdesk\Model\GenerateDownloadHash200Response**](../Model/GenerateDownloadHash200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobDownloadInfo()`

```php
jobDownloadInfo($job_id): \Itsmind\Sevdesk\Model\JobDownloadInfo200Response
```

Get job download info

When the export job has finished you can call this endpoint to get the download url.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 0a0e1eff-9590-1bea-1195-a3cfc04364cc; // string | The export job ID

try {
    $result = $apiInstance->jobDownloadInfo($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->jobDownloadInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **string**| The export job ID | |

### Return type

[**\Itsmind\Sevdesk\Model\JobDownloadInfo200Response**](../Model/JobDownloadInfo200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExportConfig()`

```php
updateExportConfig($sev_client_id, $update_export_config_request): \Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response
```

Update export config

Update export config to export DATEV

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sev_client_id = 3.4; // float | id of sevClient
$update_export_config_request = new \Itsmind\Sevdesk\Model\UpdateExportConfigRequest(); // \Itsmind\Sevdesk\Model\UpdateExportConfigRequest | Specify the update

try {
    $result = $apiInstance->updateExportConfig($sev_client_id, $update_export_config_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->updateExportConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sev_client_id** | **float**| id of sevClient | |
| **update_export_config_request** | [**\Itsmind\Sevdesk\Model\UpdateExportConfigRequest**](../Model/UpdateExportConfigRequest.md)| Specify the update | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response**](../Model/CheckAccountTransactionEnshrine200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
