# Itsmind\Sevdesk\PartUnityApi

Alternative units of a part, each with its own price and conversion factor.

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPartUnity()**](PartUnityApi.md#createPartUnity) | **POST** /PartUnity | Create a new part unit |
| [**deletePartUnity()**](PartUnityApi.md#deletePartUnity) | **DELETE** /PartUnity/{partUnityId} | Deletes a part unit |
| [**getPartUnities()**](PartUnityApi.md#getPartUnities) | **GET** /PartUnity | Retrieve part units |
| [**updatePartUnity()**](PartUnityApi.md#updatePartUnity) | **PUT** /PartUnity/{partUnityId} | Update an existing part unit |


## `createPartUnity()`

```php
createPartUnity($model_part_unity): \Itsmind\Sevdesk\Model\CreatePartUnity201Response
```

Create a new part unit

Creates an alternative unit for a part. `price` is the price of the part in this unit, `factor` is the amount of the part's base unit that one unit of this unit corresponds to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\PartUnityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_part_unity = new \Itsmind\Sevdesk\Model\ModelPartUnity(); // \Itsmind\Sevdesk\Model\ModelPartUnity | Creation data

try {
    $result = $apiInstance->createPartUnity($model_part_unity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartUnityApi->createPartUnity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_part_unity** | [**\Itsmind\Sevdesk\Model\ModelPartUnity**](../Model/ModelPartUnity.md)| Creation data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreatePartUnity201Response**](../Model/CreatePartUnity201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePartUnity()`

```php
deletePartUnity($part_unity_id): \Itsmind\Sevdesk\Model\DeleteCheckAccount200Response
```

Deletes a part unit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\PartUnityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part_unity_id = 56; // int | Id of part unit resource to delete

try {
    $result = $apiInstance->deletePartUnity($part_unity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartUnityApi->deletePartUnity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **part_unity_id** | **int**| Id of part unit resource to delete | |

### Return type

[**\Itsmind\Sevdesk\Model\DeleteCheckAccount200Response**](../Model/DeleteCheckAccount200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPartUnities()`

```php
getPartUnities($part, $count_all, $offset, $limit, $embed): \Itsmind\Sevdesk\Model\GetPartUnities200Response
```

Retrieve part units

Retrieve all alternative units (with their own price and conversion factor) of parts according to the applied filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\PartUnityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\GetPartUnitiesPartParameter(); // \Itsmind\Sevdesk\Model\GetPartUnitiesPartParameter | Retrieve all part units of this part
$count_all = True; // bool | If all objects should be counted
$offset = 56; // int | Which offset to start with
$limit = 56; // int | The max number of objects to return
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getPartUnities($part, $count_all, $offset, $limit, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartUnityApi->getPartUnities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **part** | [**\Itsmind\Sevdesk\Model\GetPartUnitiesPartParameter**](../Model/.md)| Retrieve all part units of this part | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **limit** | **int**| The max number of objects to return | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetPartUnities200Response**](../Model/GetPartUnities200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePartUnity()`

```php
updatePartUnity($part_unity_id, $model_part_unity): \Itsmind\Sevdesk\Model\CreatePartUnity201Response
```

Update an existing part unit

Update a part unit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\PartUnityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part_unity_id = 56; // int | ID of part unit to update
$model_part_unity = new \Itsmind\Sevdesk\Model\ModelPartUnity(); // \Itsmind\Sevdesk\Model\ModelPartUnity | Update data

try {
    $result = $apiInstance->updatePartUnity($part_unity_id, $model_part_unity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartUnityApi->updatePartUnity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **part_unity_id** | **int**| ID of part unit to update | |
| **model_part_unity** | [**\Itsmind\Sevdesk\Model\ModelPartUnity**](../Model/ModelPartUnity.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreatePartUnity201Response**](../Model/CreatePartUnity201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
