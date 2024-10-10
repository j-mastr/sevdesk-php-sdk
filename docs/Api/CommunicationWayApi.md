# Itsmind\Sevdesk\CommunicationWayApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCommunicationWay()**](CommunicationWayApi.md#createCommunicationWay) | **POST** /CommunicationWay | Create a new contact communication way |
| [**deleteCommunicationWay()**](CommunicationWayApi.md#deleteCommunicationWay) | **DELETE** /CommunicationWay/{communicationWayId} | Deletes a communication way |
| [**getCommunicationWayById()**](CommunicationWayApi.md#getCommunicationWayById) | **GET** /CommunicationWay/{communicationWayId} | Find communication way by ID |
| [**getCommunicationWayKeys()**](CommunicationWayApi.md#getCommunicationWayKeys) | **GET** /CommunicationWayKey | Retrieve communication way keys |
| [**getCommunicationWays()**](CommunicationWayApi.md#getCommunicationWays) | **GET** /CommunicationWay | Retrieve communication ways |
| [**updateCommunicationWay()**](CommunicationWayApi.md#updateCommunicationWay) | **PUT** /CommunicationWay/{communicationWayId} | Update a existing communication way |


## `createCommunicationWay()`

```php
createCommunicationWay($model_communication_way): \Itsmind\Sevdesk\Model\CreateCommunicationWay201Response
```

Create a new contact communication way

Creates a new contact communication way.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CommunicationWayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_communication_way = new \Itsmind\Sevdesk\Model\ModelCommunicationWay(); // \Itsmind\Sevdesk\Model\ModelCommunicationWay | Creation data

try {
    $result = $apiInstance->createCommunicationWay($model_communication_way);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayApi->createCommunicationWay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_communication_way** | [**\Itsmind\Sevdesk\Model\ModelCommunicationWay**](../Model/ModelCommunicationWay.md)| Creation data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateCommunicationWay201Response**](../Model/CreateCommunicationWay201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommunicationWay()`

```php
deleteCommunicationWay($communication_way_id): \Itsmind\Sevdesk\Model\DeleteCheckAccount200Response
```

Deletes a communication way

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CommunicationWayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_way_id = 56; // int | Id of communication way resource to delete

try {
    $result = $apiInstance->deleteCommunicationWay($communication_way_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayApi->deleteCommunicationWay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **communication_way_id** | **int**| Id of communication way resource to delete | |

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

## `getCommunicationWayById()`

```php
getCommunicationWayById($communication_way_id, $embed): \Itsmind\Sevdesk\Model\GetCommunicationWayById200Response
```

Find communication way by ID

Returns a single communication way

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CommunicationWayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_way_id = 56; // int | ID of communication way to return
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getCommunicationWayById($communication_way_id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayApi->getCommunicationWayById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **communication_way_id** | **int**| ID of communication way to return | |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetCommunicationWayById200Response**](../Model/GetCommunicationWayById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommunicationWayKeys()`

```php
getCommunicationWayKeys($count_all, $offset, $limit, $embed): \Itsmind\Sevdesk\Model\GetCommunicationWayKeys200Response
```

Retrieve communication way keys

Returns all communication way keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CommunicationWayApi(
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
    $result = $apiInstance->getCommunicationWayKeys($count_all, $offset, $limit, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayApi->getCommunicationWayKeys: ', $e->getMessage(), PHP_EOL;
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

[**\Itsmind\Sevdesk\Model\GetCommunicationWayKeys200Response**](../Model/GetCommunicationWayKeys200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommunicationWays()`

```php
getCommunicationWays($type, $main, $contact, $count_all, $offset, $limit, $embed): \Itsmind\Sevdesk\Model\GetCommunicationWays200Response
```

Retrieve communication ways

Returns all communication ways which have been added up until now. Filters can be added.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CommunicationWayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Type of the communication ways you want to get.
$main = 'main_example'; // string | Define if you only want the main communication way.
$contact = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\GetCommunicationWaysContactParameter(); // \Itsmind\Sevdesk\Model\GetCommunicationWaysContactParameter | Retrieve all communication ways with this contact. The value of contact[objectName] must be 'Contact'.
$count_all = True; // bool | If all objects should be counted
$offset = 56; // int | Which offset to start with
$limit = 56; // int | The max number of objects to return
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getCommunicationWays($type, $main, $contact, $count_all, $offset, $limit, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayApi->getCommunicationWays: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Type of the communication ways you want to get. | [optional] |
| **main** | **string**| Define if you only want the main communication way. | [optional] |
| **contact** | [**\Itsmind\Sevdesk\Model\GetCommunicationWaysContactParameter**](../Model/.md)| Retrieve all communication ways with this contact. The value of contact[objectName] must be &#39;Contact&#39;. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **limit** | **int**| The max number of objects to return | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetCommunicationWays200Response**](../Model/GetCommunicationWays200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommunicationWay()`

```php
updateCommunicationWay($communication_way_id, $model_communication_way_update): \Itsmind\Sevdesk\Model\CreateCommunicationWay201Response
```

Update a existing communication way

Update a communication way

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CommunicationWayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_way_id = 56; // int | ID of CommunicationWay to update
$model_communication_way_update = new \Itsmind\Sevdesk\Model\ModelCommunicationWayUpdate(); // \Itsmind\Sevdesk\Model\ModelCommunicationWayUpdate | Update data

try {
    $result = $apiInstance->updateCommunicationWay($communication_way_id, $model_communication_way_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayApi->updateCommunicationWay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **communication_way_id** | **int**| ID of CommunicationWay to update | |
| **model_communication_way_update** | [**\Itsmind\Sevdesk\Model\ModelCommunicationWayUpdate**](../Model/ModelCommunicationWayUpdate.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateCommunicationWay201Response**](../Model/CreateCommunicationWay201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
