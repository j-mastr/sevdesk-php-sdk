# Itsmind\Sevdesk\ReportApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**reportContact()**](ReportApi.md#reportContact) | **GET** /Report/contactlist | Export contact list |
| [**reportInvoice()**](ReportApi.md#reportInvoice) | **GET** /Report/invoicelist | Export invoice list |
| [**reportOrder()**](ReportApi.md#reportOrder) | **GET** /Report/orderlist | Export order list |
| [**reportVoucher()**](ReportApi.md#reportVoucher) | **GET** /Report/voucherlist | Export voucher list |


## `reportContact()`

```php
reportContact($sev_query, $download): object
```

Export contact list

Export contact list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sev_query = new \Itsmind\Sevdesk\Model\ReportContactSevQueryParameter(); // ReportContactSevQueryParameter
$download = True; // bool

try {
    $result = $apiInstance->reportContact($sev_query, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sev_query** | [**ReportContactSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

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

## `reportInvoice()`

```php
reportInvoice($sev_query, $download): object
```

Export invoice list

Export invoice list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sev_query = new \Itsmind\Sevdesk\Model\ReportInvoiceSevQueryParameter(); // ReportInvoiceSevQueryParameter
$download = True; // bool

try {
    $result = $apiInstance->reportInvoice($sev_query, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sev_query** | [**ReportInvoiceSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

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

## `reportOrder()`

```php
reportOrder($sev_query, $download): object
```

Export order list

Export order list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sev_query = new \Itsmind\Sevdesk\Model\ReportOrderSevQueryParameter(); // ReportOrderSevQueryParameter
$download = True; // bool

try {
    $result = $apiInstance->reportOrder($sev_query, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sev_query** | [**ReportOrderSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

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

## `reportVoucher()`

```php
reportVoucher($sev_query, $download): object
```

Export voucher list

Export voucher list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sev_query = new \Itsmind\Sevdesk\Model\ReportVoucherSevQueryParameter(); // ReportVoucherSevQueryParameter
$download = True; // bool

try {
    $result = $apiInstance->reportVoucher($sev_query, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sev_query** | [**ReportVoucherSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

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
