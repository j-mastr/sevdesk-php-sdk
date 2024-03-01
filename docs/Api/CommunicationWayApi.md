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
createCommunicationWay($model_communication_way): \Itsmind\Sevdesk\Model\ModelCommunicationWayResponse
```

Create a new contact communication way

Creates a new contact communication way.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Itsmind\Sevdesk\Api\CommunicationWayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\Itsmind\Sevdesk\Model\ModelCommunicationWayResponse**](../Model/ModelCommunicationWayResponse.md)

### Authorization

No authorization required

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



$apiInstance = new Itsmind\Sevdesk\Api\CommunicationWayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommunicationWayById()`

```php
getCommunicationWayById($communication_way_id): \Itsmind\Sevdesk\Model\GetCommunicationWays200Response
```

Find communication way by ID

Returns a single communication way

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Itsmind\Sevdesk\Api\CommunicationWayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$communication_way_id = 56; // int | ID of communication way to return

try {
    $result = $apiInstance->getCommunicationWayById($communication_way_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayApi->getCommunicationWayById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **communication_way_id** | **int**| ID of communication way to return | |

### Return type

[**\Itsmind\Sevdesk\Model\GetCommunicationWays200Response**](../Model/GetCommunicationWays200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommunicationWayKeys()`

```php
getCommunicationWayKeys(): \Itsmind\Sevdesk\Model\GetCommunicationWayKeys200Response
```

Retrieve communication way keys

Returns all communication way keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Itsmind\Sevdesk\Api\CommunicationWayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCommunicationWayKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayApi->getCommunicationWayKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Itsmind\Sevdesk\Model\GetCommunicationWayKeys200Response**](../Model/GetCommunicationWayKeys200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommunicationWays()`

```php
getCommunicationWays($contact_id, $contact_object_name, $type, $main): \Itsmind\Sevdesk\Model\GetCommunicationWays200Response
```

Retrieve communication ways

Returns all communication ways which have been added up until now. Filters can be added.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Itsmind\Sevdesk\Api\CommunicationWayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_id = 'contact_id_example'; // string | ID of contact for which you want the communication ways.
$contact_object_name = Contact; // string | Object name. Only needed if you also defined the ID of a contact.
$type = 'type_example'; // string | Type of the communication ways you want to get.
$main = 'main_example'; // string | Define if you only want the main communication way.

try {
    $result = $apiInstance->getCommunicationWays($contact_id, $contact_object_name, $type, $main);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayApi->getCommunicationWays: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| ID of contact for which you want the communication ways. | [optional] |
| **contact_object_name** | **string**| Object name. Only needed if you also defined the ID of a contact. | [optional] [default to &#39;Contact&#39;] |
| **type** | **string**| Type of the communication ways you want to get. | [optional] |
| **main** | **string**| Define if you only want the main communication way. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetCommunicationWays200Response**](../Model/GetCommunicationWays200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommunicationWay()`

```php
updateCommunicationWay($communication_way_id, $model_communication_way_update): \Itsmind\Sevdesk\Model\ModelCommunicationWayResponse
```

Update a existing communication way

Update a communication way

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Itsmind\Sevdesk\Api\CommunicationWayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\Itsmind\Sevdesk\Model\ModelCommunicationWayResponse**](../Model/ModelCommunicationWayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
