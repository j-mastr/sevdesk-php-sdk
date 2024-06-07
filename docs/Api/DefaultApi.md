# Itsmind\Sevdesk\DefaultApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateStatus()**](DefaultApi.md#updateStatus) | **PUT** /Invoice/{invoiceId}/changeStatus | Update the status of an invoice |


## `updateStatus()`

```php
updateStatus($invoice_id, $update_status_request): \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
```

Update the status of an invoice

Update the status of an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to update
$update_status_request = new \Itsmind\Sevdesk\Model\UpdateStatusRequest(); // \Itsmind\Sevdesk\Model\UpdateStatusRequest | Update the status of an invoice.

try {
    $result = $apiInstance->updateStatus($invoice_id, $update_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice to update | |
| **update_status_request** | [**\Itsmind\Sevdesk\Model\UpdateStatusRequest**](../Model/UpdateStatusRequest.md)| Update the status of an invoice. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response**](../Model/UpdateInvoiceById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
