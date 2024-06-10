# Itsmind\Sevdesk\InvoicePosApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInvoicePos()**](InvoicePosApi.md#getInvoicePos) | **GET** /InvoicePos | Retrieve InvoicePos |


## `getInvoicePos()`

```php
getInvoicePos($id, $invoice_id, $invoice_object_name, $part_id, $part_object_name, $count_all, $offset, $limit, $embed): \Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response
```

Retrieve InvoicePos

There are a multitude of parameter which can be used to filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoicePosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 3.4; // float | Retrieve all InvoicePos with this InvoicePos id
$invoice_id = 3.4; // float | Retrieve all invoices positions with this invoice. Must be provided with invoice[objectName]
$invoice_object_name = 'invoice_object_name_example'; // string | Only required if invoice[id] was provided. 'Invoice' should be used as value.
$part_id = 3.4; // float | Retrieve all invoices positions with this part. Must be provided with part[objectName]
$part_object_name = 'part_object_name_example'; // string | Only required if part[id] was provided. 'Part' should be used as value.
$count_all = True; // bool | If all objects should be counted
$offset = 56; // int | Which offset to start with
$limit = 56; // int | The max number of objects to return
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getInvoicePos($id, $invoice_id, $invoice_object_name, $part_id, $part_object_name, $count_all, $offset, $limit, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePosApi->getInvoicePos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **float**| Retrieve all InvoicePos with this InvoicePos id | [optional] |
| **invoice_id** | **float**| Retrieve all invoices positions with this invoice. Must be provided with invoice[objectName] | [optional] |
| **invoice_object_name** | **string**| Only required if invoice[id] was provided. &#39;Invoice&#39; should be used as value. | [optional] |
| **part_id** | **float**| Retrieve all invoices positions with this part. Must be provided with part[objectName] | [optional] |
| **part_object_name** | **string**| Only required if part[id] was provided. &#39;Part&#39; should be used as value. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **limit** | **int**| The max number of objects to return | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response**](../Model/GetInvoicePositionsById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
