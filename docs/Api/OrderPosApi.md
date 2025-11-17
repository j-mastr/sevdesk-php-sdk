# Itsmind\Sevdesk\OrderPosApi

# Order position attributes  Here is the tables of all attributes of order positions.&lt;br&gt; Necessary attributes, which must not be left out, are marked red.&lt;br&gt; Attributes which are strongly recommended for valid bookkeeping are marked orange.&lt;br&gt; &lt;table&gt; &lt;tr&gt; &lt;th&gt;Attribute&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;th&gt;Attribute Type&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxRate&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The tax rate of the position. &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;unity&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The unity in which one item is measured. &lt;/td&gt; &lt;td&gt;Nested object (Unity)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;quantity&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The quantity of items. &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;order&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The order to which the position belongs. &lt;/td&gt; &lt;td&gt;Nested object (Order)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;discount&lt;/td&gt; &lt;td&gt; A discount amount for the specific position. &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;text&lt;/td&gt; &lt;td&gt; A text describing the position. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;positionNumber&lt;/td&gt; &lt;td&gt; The number of the position if there are multiple positions in an order.&lt;br&gt; Needs to start with zero and is incremented for every new position.&lt;br&gt; If you want to order them differently, you can change their position numbers to your needs. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;name&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The name of the item in the position. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;price&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The price for one unit of the item in the position. &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;part&lt;/span&gt;&lt;/td&gt; &lt;td&gt; You can define a part from your sevdesk inventory here.&lt;br&gt; Please be aware, you will still need to provide the name, price and everything else as this will not automatically be generated. &lt;/td&gt; &lt;td&gt;Nested object (Part)&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOrderPos()**](OrderPosApi.md#deleteOrderPos) | **DELETE** /OrderPos/{orderPosId} | Deletes an order Position |
| [**getOrderPositionById()**](OrderPosApi.md#getOrderPositionById) | **GET** /OrderPos/{orderPosId} | Find order position by ID |
| [**getOrderPositions()**](OrderPosApi.md#getOrderPositions) | **GET** /OrderPos | Retrieve order positions |
| [**updateOrderPosition()**](OrderPosApi.md#updateOrderPosition) | **PUT** /OrderPos/{orderPosId} | Update an existing order position |


## `deleteOrderPos()`

```php
deleteOrderPos($order_pos_id): \Itsmind\Sevdesk\Model\DeleteCheckAccount200Response
```

Deletes an order Position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderPosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_pos_id = 56; // int | Id of order position resource to delete

try {
    $result = $apiInstance->deleteOrderPos($order_pos_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPosApi->deleteOrderPos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_pos_id** | **int**| Id of order position resource to delete | |

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

## `getOrderPositionById()`

```php
getOrderPositionById($order_pos_id): \Itsmind\Sevdesk\Model\GetOrderPositionById200Response
```

Find order position by ID

Returns a single order position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderPosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_pos_id = 56; // int | ID of order position to return

try {
    $result = $apiInstance->getOrderPositionById($order_pos_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPosApi->getOrderPositionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_pos_id** | **int**| ID of order position to return | |

### Return type

[**\Itsmind\Sevdesk\Model\GetOrderPositionById200Response**](../Model/GetOrderPositionById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderPositions()`

```php
getOrderPositions($order_id, $order_object_name, $count_all, $offset, $limit, $embed): \Itsmind\Sevdesk\Model\GetOrderPositionsById200Response
```

Retrieve order positions

Retrieve all order positions depending on the filters defined in the query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderPosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Retrieve all order positions belonging to this order. Must be provided with voucher[objectName]
$order_object_name = 'order_object_name_example'; // string | Only required if order[id] was provided. 'Order' should be used as value.
$count_all = True; // bool | If all objects should be counted
$offset = 56; // int | Which offset to start with
$limit = 56; // int | The max number of objects to return
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getOrderPositions($order_id, $order_object_name, $count_all, $offset, $limit, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPosApi->getOrderPositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| Retrieve all order positions belonging to this order. Must be provided with voucher[objectName] | [optional] |
| **order_object_name** | **string**| Only required if order[id] was provided. &#39;Order&#39; should be used as value. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **limit** | **int**| The max number of objects to return | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

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

## `updateOrderPosition()`

```php
updateOrderPosition($order_pos_id, $model_order_pos_update): \Itsmind\Sevdesk\Model\UpdateOrderPosition200Response
```

Update an existing order position

Update an order position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderPosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_pos_id = 56; // int | ID of order position to update
$model_order_pos_update = new \Itsmind\Sevdesk\Model\ModelOrderPosUpdate(); // \Itsmind\Sevdesk\Model\ModelOrderPosUpdate | Update data

try {
    $result = $apiInstance->updateOrderPosition($order_pos_id, $model_order_pos_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPosApi->updateOrderPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_pos_id** | **int**| ID of order position to update | |
| **model_order_pos_update** | [**\Itsmind\Sevdesk\Model\ModelOrderPosUpdate**](../Model/ModelOrderPosUpdate.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateOrderPosition200Response**](../Model/UpdateOrderPosition200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
