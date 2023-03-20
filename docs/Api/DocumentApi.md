# Itsmind\Sevdesk\DocumentApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDocuments()**](DocumentApi.md#getDocuments) | **GET** /Document | Retrieve documents |


## `getDocuments()`

```php
getDocuments($contact, $count_all): \Itsmind\Sevdesk\Model\GetDocuments200Response
```

Retrieve documents

There are a multitude of parameter which can be used to filter.<br>       A few of them are attached but       for a complete list please check out <a href='https://api.sevdesk.de/#section/How-to-filter-for-certain-contacts'>this</a> list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact = array('key' => new \Itsmind\Sevdesk\Model\GetInvoicesContactParameter()); // GetInvoicesContactParameter | Retrieve all documents for this contact. The value of contact[objectName] must be 'Contact'.
$count_all = True; // bool | If all contacts should be counted

try {
    $result = $apiInstance->getDocuments($contact, $count_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact** | [**GetInvoicesContactParameter**](../Model/.md)| Retrieve all documents for this contact. The value of contact[objectName] must be &#39;Contact&#39;. | [optional] |
| **count_all** | **bool**| If all contacts should be counted | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetDocuments200Response**](../Model/GetDocuments200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
