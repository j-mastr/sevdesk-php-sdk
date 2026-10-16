# Itsmind\Sevdesk\SevClientApi

Operations on the client.

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAccountantUser()**](SevClientApi.md#getAccountantUser) | **GET** /SevClient/getAccountantUser | Retrieve the accountant user of the client |


## `getAccountantUser()`

```php
getAccountantUser(): \Itsmind\Sevdesk\Model\GetAccountantUser200Response
```

Retrieve the accountant user of the client

Returns the accountant user assigned to the client. `objects` is `null` if no accountant is assigned. The structure of an assigned accountant user is unverified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\SevClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccountantUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SevClientApi->getAccountantUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Itsmind\Sevdesk\Model\GetAccountantUser200Response**](../Model/GetAccountantUser200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
