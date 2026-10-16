# Itsmind\Sevdesk\UnityApi

Units in which parts and positions are measured.

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createUnity()**](UnityApi.md#createUnity) | **POST** /Unity | Create a new unit |
| [**deleteUnity()**](UnityApi.md#deleteUnity) | **DELETE** /Unity/{unityId} | Deletes a unit |
| [**getUnities()**](UnityApi.md#getUnities) | **GET** /Unity | Retrieve units |
| [**updateUnity()**](UnityApi.md#updateUnity) | **PUT** /Unity/{unityId} | Update an existing unit |


## `createUnity()`

```php
createUnity($model_unity): \Itsmind\Sevdesk\Model\CreateUnity201Response
```

Create a new unit

Creates a custom unit for the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\UnityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_unity = new \Itsmind\Sevdesk\Model\ModelUnity(); // \Itsmind\Sevdesk\Model\ModelUnity | Creation data

try {
    $result = $apiInstance->createUnity($model_unity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnityApi->createUnity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_unity** | [**\Itsmind\Sevdesk\Model\ModelUnity**](../Model/ModelUnity.md)| Creation data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateUnity201Response**](../Model/CreateUnity201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUnity()`

```php
deleteUnity($unity_id): \Itsmind\Sevdesk\Model\DeleteCheckAccount200Response
```

Deletes a unit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\UnityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unity_id = 56; // int | Id of unit resource to delete

try {
    $result = $apiInstance->deleteUnity($unity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnityApi->deleteUnity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unity_id** | **int**| Id of unit resource to delete | |

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

## `getUnities()`

```php
getUnities($count_all, $offset, $limit, $embed): \Itsmind\Sevdesk\Model\GetUnities200Response
```

Retrieve units

Retrieve all units. This includes the predefined units of sevdesk and the units created by the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\UnityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count_all = True; // bool | If all objects should be counted
$offset = 56; // int | Which offset to start with
$limit = 56; // int | The max number of objects to return
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getUnities($count_all, $offset, $limit, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnityApi->getUnities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count_all** | **bool**| If all objects should be counted | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **limit** | **int**| The max number of objects to return | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetUnities200Response**](../Model/GetUnities200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUnity()`

```php
updateUnity($unity_id, $model_unity): \Itsmind\Sevdesk\Model\CreateUnity201Response
```

Update an existing unit

Update a custom unit of the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\UnityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unity_id = 56; // int | ID of unit to update
$model_unity = new \Itsmind\Sevdesk\Model\ModelUnity(); // \Itsmind\Sevdesk\Model\ModelUnity | Update data

try {
    $result = $apiInstance->updateUnity($unity_id, $model_unity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnityApi->updateUnity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unity_id** | **int**| ID of unit to update | |
| **model_unity** | [**\Itsmind\Sevdesk\Model\ModelUnity**](../Model/ModelUnity.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateUnity201Response**](../Model/CreateUnity201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
