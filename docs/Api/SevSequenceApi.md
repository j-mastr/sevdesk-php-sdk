# Itsmind\Sevdesk\SevSequenceApi

Number sequences used to generate e.g. part, invoice and order numbers.

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSevSequenceByType()**](SevSequenceApi.md#getSevSequenceByType) | **GET** /SevSequence/Factory/getByType | Retrieve the number sequence of an object type |


## `getSevSequenceByType()`

```php
getSevSequenceByType($object_type, $type): \Itsmind\Sevdesk\Model\GetSevSequenceByType200Response
```

Retrieve the number sequence of an object type

Returns the number sequence (format and next number) that is used for the given object type, e.g. to determine the next part number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\SevSequenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_type = Part; // string | Object type for which the sequence is requested
$type = 'type_example'; // string | Sub type of the sequence, e.g. `RE` for invoices. Not needed for object types that only have one sequence, like `Part`.

try {
    $result = $apiInstance->getSevSequenceByType($object_type, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SevSequenceApi->getSevSequenceByType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_type** | **string**| Object type for which the sequence is requested | |
| **type** | **string**| Sub type of the sequence, e.g. &#x60;RE&#x60; for invoices. Not needed for object types that only have one sequence, like &#x60;Part&#x60;. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetSevSequenceByType200Response**](../Model/GetSevSequenceByType200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
