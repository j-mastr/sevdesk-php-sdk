# Itsmind\Sevdesk\VoucherPosApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getVoucherPositions()**](VoucherPosApi.md#getVoucherPositions) | **GET** /VoucherPos | Retrieve voucher positions |


## `getVoucherPositions()`

```php
getVoucherPositions($voucher_id, $voucher_object_name): \Itsmind\Sevdesk\Model\GetVoucherPositions200Response
```

Retrieve voucher positions

Retrieve all voucher positions depending on the filters defined in the query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherPosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | Retrieve all vouchers positions belonging to this voucher. Must be provided with voucher[objectName]
$voucher_object_name = 'voucher_object_name_example'; // string | Only required if voucher[id] was provided. 'Voucher' should be used as value.

try {
    $result = $apiInstance->getVoucherPositions($voucher_id, $voucher_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherPosApi->getVoucherPositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **int**| Retrieve all vouchers positions belonging to this voucher. Must be provided with voucher[objectName] | [optional] |
| **voucher_object_name** | **string**| Only required if voucher[id] was provided. &#39;Voucher&#39; should be used as value. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetVoucherPositions200Response**](../Model/GetVoucherPositions200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
