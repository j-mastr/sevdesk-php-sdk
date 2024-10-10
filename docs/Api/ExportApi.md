# Itsmind\Sevdesk\ExportApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exportContact()**](ExportApi.md#exportContact) | **GET** /Export/contactListCsv | Export contact |
| [**exportCreditNote()**](ExportApi.md#exportCreditNote) | **GET** /Export/creditNoteCsv | Export creditNote |
| [**exportDatev()**](ExportApi.md#exportDatev) | **GET** /Export/datevCSV | Export datev |
| [**exportInvoice()**](ExportApi.md#exportInvoice) | **GET** /Export/invoiceCsv | Export invoice |
| [**exportInvoiceZip()**](ExportApi.md#exportInvoiceZip) | **GET** /Export/invoiceZip | Export Invoice as zip |
| [**exportTransactions()**](ExportApi.md#exportTransactions) | **GET** /Export/transactionsCsv | Export transaction |
| [**exportVoucher()**](ExportApi.md#exportVoucher) | **GET** /Export/voucherListCsv | Export voucher as zip |
| [**exportVoucherZip()**](ExportApi.md#exportVoucherZip) | **GET** /Export/voucherZip | Export voucher zip |
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

## `exportDatev()`

```php
exportDatev($start_date, $end_date, $scope, $download, $with_unpaid_documents, $with_enshrined_documents, $enshrine): object
```

Export datev

Datev export as zip with csv´s. Before you can perform the datev export, you must first set the \"accountingYearBegin\". To do this, you must use the <a href='#tag/Export/operation/updateExportConfig'>updateExportConfig</a> endpoint.

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
$start_date = 1641032867; // int | the start date of the export as timestamp
$end_date = 1648805267; // int | the end date of the export as timestamp
$scope = EXTCD; // string | Define what you want to include in the datev export. This parameter takes a string of 5 letters. Each stands for a model that should be included. Possible letters are: ‘E’ (Earnings), ‘X’ (Expenditure), ‘T’ (Transactions), ‘C’ (Cashregister), ‘D’ (Assets). By providing one of those letter you specify that it should be included in the datev export. Some combinations are: ‘EXTCD’, ‘EXTD’ …
$download = true; // bool | Specifies if the document is downloaded
$with_unpaid_documents = true; // bool | include unpaid documents
$with_enshrined_documents = true; // bool | include enshrined documents
$enshrine = false; // bool | Specify if you want to enshrine all models which were included in the export

try {
    $result = $apiInstance->exportDatev($start_date, $end_date, $scope, $download, $with_unpaid_documents, $with_enshrined_documents, $enshrine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportDatev: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **int**| the start date of the export as timestamp | |
| **end_date** | **int**| the end date of the export as timestamp | |
| **scope** | **string**| Define what you want to include in the datev export. This parameter takes a string of 5 letters. Each stands for a model that should be included. Possible letters are: ‘E’ (Earnings), ‘X’ (Expenditure), ‘T’ (Transactions), ‘C’ (Cashregister), ‘D’ (Assets). By providing one of those letter you specify that it should be included in the datev export. Some combinations are: ‘EXTCD’, ‘EXTD’ … | |
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

## `updateExportConfig()`

```php
updateExportConfig($sev_client_id, $update_export_config_request): \Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response
```

Update export config

Update export config to export datev CSV

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
