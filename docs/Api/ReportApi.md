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



$apiInstance = new Itsmind\Sevdesk\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\Itsmind\Sevdesk\Model\ReportContact200Response**](../Model/ReportContact200Response.md)

### Authorization

No authorization required

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



$apiInstance = new Itsmind\Sevdesk\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$view = all; // string
$sev_query = new \Itsmind\Sevdesk\Model\ReportInvoiceSevQueryParameter(); // ReportInvoiceSevQueryParameter
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
| **sev_query** | [**ReportInvoiceSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ReportInvoice200Response**](../Model/ReportInvoice200Response.md)

### Authorization

No authorization required

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



$apiInstance = new Itsmind\Sevdesk\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$view = all; // string
$sev_query = new \Itsmind\Sevdesk\Model\ReportOrderSevQueryParameter(); // ReportOrderSevQueryParameter
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
| **sev_query** | [**ReportOrderSevQueryParameter**](../Model/.md)|  | |
| **download** | **bool**|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ReportOrder200Response**](../Model/ReportOrder200Response.md)

### Authorization

No authorization required

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



$apiInstance = new Itsmind\Sevdesk\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\Itsmind\Sevdesk\Model\ReportVoucher200Response**](../Model/ReportVoucher200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
