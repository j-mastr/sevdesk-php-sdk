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
reportContact($sev_query, $download): \Itsmind\Sevdesk\Model\ReportContact200Response
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
$sev_query = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\ReportContactSevQueryParameter(); // \Itsmind\Sevdesk\Model\ReportContactSevQueryParameter
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
| **sev_query** | [**\Itsmind\Sevdesk\Model\ReportContactSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ReportContact200Response**](../Model/ReportContact200Response.md)

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
reportInvoice($view, $sev_query, $download): \Itsmind\Sevdesk\Model\ReportInvoice200Response
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
$view = all; // string
$sev_query = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\ReportInvoiceSevQueryParameter(); // \Itsmind\Sevdesk\Model\ReportInvoiceSevQueryParameter
$download = True; // bool

try {
    $result = $apiInstance->reportInvoice($view, $sev_query, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **view** | **string**|  | |
| **sev_query** | [**\Itsmind\Sevdesk\Model\ReportInvoiceSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ReportInvoice200Response**](../Model/ReportInvoice200Response.md)

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
reportOrder($view, $sev_query, $download): \Itsmind\Sevdesk\Model\ReportOrder200Response
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
$view = all; // string
$sev_query = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\ReportOrderSevQueryParameter(); // \Itsmind\Sevdesk\Model\ReportOrderSevQueryParameter
$download = True; // bool

try {
    $result = $apiInstance->reportOrder($view, $sev_query, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **view** | **string**|  | |
| **sev_query** | [**\Itsmind\Sevdesk\Model\ReportOrderSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ReportOrder200Response**](../Model/ReportOrder200Response.md)

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
reportVoucher($sev_query, $download): \Itsmind\Sevdesk\Model\ReportVoucher200Response
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
$sev_query = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\ReportVoucherSevQueryParameter(); // \Itsmind\Sevdesk\Model\ReportVoucherSevQueryParameter
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
| **sev_query** | [**\Itsmind\Sevdesk\Model\ReportVoucherSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ReportVoucher200Response**](../Model/ReportVoucher200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
