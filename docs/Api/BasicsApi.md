# Itsmind\Sevdesk\BasicsApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookkeepingSystemVersion()**](BasicsApi.md#bookkeepingSystemVersion) | **GET** /Tools/bookkeepingSystemVersion | Retrieve bookkeeping system version |


## `bookkeepingSystemVersion()`

```php
bookkeepingSystemVersion(): \Itsmind\Sevdesk\Model\BookkeepingSystemVersion200Response
```

Retrieve bookkeeping system version

To check if you already received the update to version 2.0 you can use this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\BasicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bookkeepingSystemVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicsApi->bookkeepingSystemVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Itsmind\Sevdesk\Model\BookkeepingSystemVersion200Response**](../Model/BookkeepingSystemVersion200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
