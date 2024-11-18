# Itsmind\Sevdesk\OrderApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContractNoteFromOrder()**](OrderApi.md#createContractNoteFromOrder) | **POST** /Order/Factory/createContractNoteFromOrder | Create contract note from order |
| [**createOrder()**](OrderApi.md#createOrder) | **POST** /Order/Factory/saveOrder | Create a new order |
| [**createPackingListFromOrder()**](OrderApi.md#createPackingListFromOrder) | **POST** /Order/Factory/createPackingListFromOrder | Create packing list from order |
| [**deleteOrder()**](OrderApi.md#deleteOrder) | **DELETE** /Order/{orderId} | Deletes an order |
| [**getDiscounts()**](OrderApi.md#getDiscounts) | **GET** /Order/{orderId}/getDiscounts | Find order discounts |
| [**getOrderById()**](OrderApi.md#getOrderById) | **GET** /Order/{orderId} | Find order by ID |
| [**getOrderPositionsById()**](OrderApi.md#getOrderPositionsById) | **GET** /Order/{orderId}/getPositions | Find order positions |
| [**getOrders()**](OrderApi.md#getOrders) | **GET** /Order | Retrieve orders |
| [**getRelatedObjects()**](OrderApi.md#getRelatedObjects) | **GET** /Order/{orderId}/getRelatedObjects | Find related objects |
| [**orderGetPdf()**](OrderApi.md#orderGetPdf) | **GET** /Order/{orderId}/getPdf | Retrieve pdf document of an order |
| [**orderSendBy()**](OrderApi.md#orderSendBy) | **PUT** /Order/{orderId}/sendBy | Mark order as sent |
| [**sendorderViaEMail()**](OrderApi.md#sendorderViaEMail) | **POST** /Order/{orderId}/sendViaEmail | Send order via email |
| [**updateOrder()**](OrderApi.md#updateOrder) | **PUT** /Order/{orderId} | Update an existing order |


## `createContractNoteFromOrder()`

```php
createContractNoteFromOrder($order_id, $order_object_name, $model_create_packing_list_from_order): \Itsmind\Sevdesk\Model\UpdateOrder200Response
```

Create contract note from order

Create contract note from order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | the id of the order
$order_object_name = Order; // string | Model name, which is 'Order'
$model_create_packing_list_from_order = new \Itsmind\Sevdesk\Model\ModelCreatePackingListFromOrder(); // \Itsmind\Sevdesk\Model\ModelCreatePackingListFromOrder | Create contract note

try {
    $result = $apiInstance->createContractNoteFromOrder($order_id, $order_object_name, $model_create_packing_list_from_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createContractNoteFromOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| the id of the order | |
| **order_object_name** | **string**| Model name, which is &#39;Order&#39; | [default to &#39;Order&#39;] |
| **model_create_packing_list_from_order** | [**\Itsmind\Sevdesk\Model\ModelCreatePackingListFromOrder**](../Model/ModelCreatePackingListFromOrder.md)| Create contract note | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateOrder200Response**](../Model/UpdateOrder200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($save_order): \Itsmind\Sevdesk\Model\CreateOrder201Response
```

Create a new order

Creates an order to which positions can be added later.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$save_order = new \Itsmind\Sevdesk\Model\SaveOrder(); // \Itsmind\Sevdesk\Model\SaveOrder | Creation data. Please be aware, that you need to provide at least all required parameter      of the order model!

try {
    $result = $apiInstance->createOrder($save_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **save_order** | [**\Itsmind\Sevdesk\Model\SaveOrder**](../Model/SaveOrder.md)| Creation data. Please be aware, that you need to provide at least all required parameter      of the order model! | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateOrder201Response**](../Model/CreateOrder201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPackingListFromOrder()`

```php
createPackingListFromOrder($order_id, $order_object_name, $model_create_packing_list_from_order): \Itsmind\Sevdesk\Model\UpdateOrder200Response
```

Create packing list from order

Create packing list from order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | the id of the order
$order_object_name = Order; // string | Model name, which is 'Order'
$model_create_packing_list_from_order = new \Itsmind\Sevdesk\Model\ModelCreatePackingListFromOrder(); // \Itsmind\Sevdesk\Model\ModelCreatePackingListFromOrder | Create packing list

try {
    $result = $apiInstance->createPackingListFromOrder($order_id, $order_object_name, $model_create_packing_list_from_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createPackingListFromOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| the id of the order | |
| **order_object_name** | **string**| Model name, which is &#39;Order&#39; | [default to &#39;Order&#39;] |
| **model_create_packing_list_from_order** | [**\Itsmind\Sevdesk\Model\ModelCreatePackingListFromOrder**](../Model/ModelCreatePackingListFromOrder.md)| Create packing list | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateOrder200Response**](../Model/UpdateOrder200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrder()`

```php
deleteOrder($order_id): \Itsmind\Sevdesk\Model\DeleteCheckAccount200Response
```

Deletes an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Id of order resource to delete

try {
    $result = $apiInstance->deleteOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| Id of order resource to delete | |

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

## `getDiscounts()`

```php
getDiscounts($order_id, $limit, $offset, $embed, $count_all): \Itsmind\Sevdesk\Model\GetDiscounts200Response
```

Find order discounts

Returns all discounts of an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to return the positions
$limit = 56; // int | limits the number of entries returned
$offset = 56; // int | set the index where the returned entries start
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.
$count_all = True; // bool | If all objects should be counted

try {
    $result = $apiInstance->getDiscounts($order_id, $limit, $offset, $embed, $count_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getDiscounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to return the positions | |
| **limit** | **int**| limits the number of entries returned | [optional] |
| **offset** | **int**| set the index where the returned entries start | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetDiscounts200Response**](../Model/GetDiscounts200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderById()`

```php
getOrderById($order_id): \Itsmind\Sevdesk\Model\GetOrderById200Response
```

Find order by ID

Returns a single order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to return

try {
    $result = $apiInstance->getOrderById($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to return | |

### Return type

[**\Itsmind\Sevdesk\Model\GetOrderById200Response**](../Model/GetOrderById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderPositionsById()`

```php
getOrderPositionsById($order_id, $limit, $offset, $embed, $count_all): \Itsmind\Sevdesk\Model\GetOrderPositionsById200Response
```

Find order positions

Returns all positions of an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to return the positions
$limit = 56; // int | limits the number of entries returned
$offset = 56; // int | set the index where the returned entries start
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.
$count_all = True; // bool | If all objects should be counted

try {
    $result = $apiInstance->getOrderPositionsById($order_id, $limit, $offset, $embed, $count_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderPositionsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to return the positions | |
| **limit** | **int**| limits the number of entries returned | [optional] |
| **offset** | **int**| set the index where the returned entries start | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetOrderPositionsById200Response**](../Model/GetOrderPositionsById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($status, $order_number, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed): \Itsmind\Sevdesk\Model\GetOrders200Response
```

Retrieve orders

There are a multitude of parameter which can be used to filter. A few of them are attached but      for a complete list please check out <a href='#tag/Order/How-to-filter-for-certain-orders'>this</a> list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 56; // int | Status of the order
$order_number = 'order_number_example'; // string | Retrieve all orders with this order number
$start_date = 56; // int | Retrieve all orders with a date equal or higher
$end_date = 56; // int | Retrieve all orders with a date equal or lower
$contact_id = 56; // int | Retrieve all orders with this contact. Must be provided with contact[objectName]
$contact_object_name = 'contact_object_name_example'; // string | Only required if contact[id] was provided. 'Contact' should be used as value.
$count_all = True; // bool | If all objects should be counted
$offset = 56; // int | Which offset to start with
$limit = 56; // int | The max number of objects to return
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getOrders($status, $order_number, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **int**| Status of the order | [optional] |
| **order_number** | **string**| Retrieve all orders with this order number | [optional] |
| **start_date** | **int**| Retrieve all orders with a date equal or higher | [optional] |
| **end_date** | **int**| Retrieve all orders with a date equal or lower | [optional] |
| **contact_id** | **int**| Retrieve all orders with this contact. Must be provided with contact[objectName] | [optional] |
| **contact_object_name** | **string**| Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **limit** | **int**| The max number of objects to return | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetOrders200Response**](../Model/GetOrders200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRelatedObjects()`

```php
getRelatedObjects($order_id, $include_itself, $sort_by_type, $embed, $count_all, $offset, $limit): \Itsmind\Sevdesk\Model\GetOrderPositionsById200Response
```

Find related objects

Get related objects of a specified order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to return the positions
$include_itself = True; // bool | Define if the related objects include the order itself
$sort_by_type = True; // bool | Define if you want the related objects sorted by type
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.
$count_all = True; // bool | If all objects should be counted
$offset = 56; // int | Which offset to start with
$limit = 56; // int | The max number of objects to return

try {
    $result = $apiInstance->getRelatedObjects($order_id, $include_itself, $sort_by_type, $embed, $count_all, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRelatedObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to return the positions | |
| **include_itself** | **bool**| Define if the related objects include the order itself | [optional] |
| **sort_by_type** | **bool**| Define if you want the related objects sorted by type | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **limit** | **int**| The max number of objects to return | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetOrderPositionsById200Response**](../Model/GetOrderPositionsById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderGetPdf()`

```php
orderGetPdf($order_id, $download, $prevent_send_by): \Itsmind\Sevdesk\Model\OrderGetPdf200Response
```

Retrieve pdf document of an order

Retrieves the pdf document of an order with additional metadata and commit the order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order from which you want the pdf
$download = true; // bool | If u want to download the pdf of the order.
$prevent_send_by = true; // bool | Defines if u want to send the order.

try {
    $result = $apiInstance->orderGetPdf($order_id, $download, $prevent_send_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order from which you want the pdf | |
| **download** | **bool**| If u want to download the pdf of the order. | [optional] |
| **prevent_send_by** | **bool**| Defines if u want to send the order. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\OrderGetPdf200Response**](../Model/OrderGetPdf200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderSendBy()`

```php
orderSendBy($order_id, $order_send_by_request): \Itsmind\Sevdesk\Model\UpdateOrder200Response
```

Mark order as sent

Marks an order as sent by a chosen send type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to mark as sent
$order_send_by_request = new \Itsmind\Sevdesk\Model\OrderSendByRequest(); // \Itsmind\Sevdesk\Model\OrderSendByRequest | Specify the send type

try {
    $result = $apiInstance->orderSendBy($order_id, $order_send_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderSendBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to mark as sent | |
| **order_send_by_request** | [**\Itsmind\Sevdesk\Model\OrderSendByRequest**](../Model/OrderSendByRequest.md)| Specify the send type | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateOrder200Response**](../Model/UpdateOrder200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendorderViaEMail()`

```php
sendorderViaEMail($order_id, $sendorder_via_e_mail_request): \Itsmind\Sevdesk\Model\SendorderViaEMail201Response
```

Send order via email

This endpoint sends the specified order to a customer via email.<br>      This will automatically mark the order as sent.<br>      Please note, that in production an order is not allowed to be changed after this happened!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to be sent via email
$sendorder_via_e_mail_request = new \Itsmind\Sevdesk\Model\SendorderViaEMailRequest(); // \Itsmind\Sevdesk\Model\SendorderViaEMailRequest | Mail data

try {
    $result = $apiInstance->sendorderViaEMail($order_id, $sendorder_via_e_mail_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->sendorderViaEMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to be sent via email | |
| **sendorder_via_e_mail_request** | [**\Itsmind\Sevdesk\Model\SendorderViaEMailRequest**](../Model/SendorderViaEMailRequest.md)| Mail data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\SendorderViaEMail201Response**](../Model/SendorderViaEMail201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($order_id, $model_order_update): \Itsmind\Sevdesk\Model\UpdateOrder200Response
```

Update an existing order

Update an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to update
$model_order_update = new \Itsmind\Sevdesk\Model\ModelOrderUpdate(); // \Itsmind\Sevdesk\Model\ModelOrderUpdate | Update data

try {
    $result = $apiInstance->updateOrder($order_id, $model_order_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to update | |
| **model_order_update** | [**\Itsmind\Sevdesk\Model\ModelOrderUpdate**](../Model/ModelOrderUpdate.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateOrder200Response**](../Model/UpdateOrder200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
