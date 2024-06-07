# Itsmind\Sevdesk\ContactAddressApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contactAddressId()**](ContactAddressApi.md#contactAddressId) | **GET** /ContactAddress/{contactAddressId} | Find contact address by ID |
| [**createContactAddress()**](ContactAddressApi.md#createContactAddress) | **POST** /ContactAddress | Create a new contact address |
| [**deleteContactAddress()**](ContactAddressApi.md#deleteContactAddress) | **DELETE** /ContactAddress/{contactAddressId} | Deletes a contact address |
| [**getContactAddresses()**](ContactAddressApi.md#getContactAddresses) | **GET** /ContactAddress | Retrieve contact addresses |
| [**updateContactAddress()**](ContactAddressApi.md#updateContactAddress) | **PUT** /ContactAddress/{contactAddressId} | update a existing contact address |


## `contactAddressId()`

```php
contactAddressId($contact_address_id): \Itsmind\Sevdesk\Model\GetContactAddresses200Response
```

Find contact address by ID

Returns a single contact address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_address_id = 56; // int | ID of contact address to return

try {
    $result = $apiInstance->contactAddressId($contact_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAddressApi->contactAddressId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_address_id** | **int**| ID of contact address to return | |

### Return type

[**\Itsmind\Sevdesk\Model\GetContactAddresses200Response**](../Model/GetContactAddresses200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createContactAddress()`

```php
createContactAddress($model_contact_address): \Itsmind\Sevdesk\Model\ModelContactAddressResponse
```

Create a new contact address

Creates a new contact address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_contact_address = new \Itsmind\Sevdesk\Model\ModelContactAddress(); // \Itsmind\Sevdesk\Model\ModelContactAddress | Creation data

try {
    $result = $apiInstance->createContactAddress($model_contact_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAddressApi->createContactAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_contact_address** | [**\Itsmind\Sevdesk\Model\ModelContactAddress**](../Model/ModelContactAddress.md)| Creation data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ModelContactAddressResponse**](../Model/ModelContactAddressResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContactAddress()`

```php
deleteContactAddress($contact_address_id): \Itsmind\Sevdesk\Model\DeleteCheckAccount200Response
```

Deletes a contact address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_address_id = 56; // int | Id of contact address resource to delete

try {
    $result = $apiInstance->deleteContactAddress($contact_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAddressApi->deleteContactAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_address_id** | **int**| Id of contact address resource to delete | |

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

## `getContactAddresses()`

```php
getContactAddresses($count_all, $limit, $offset, $embed): \Itsmind\Sevdesk\Model\GetContactAddresses200Response
```

Retrieve contact addresses

Retrieve all contact addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count_all = True; // bool | If all contact addresses should be counted
$limit = 56; // int | The max number of contact addresses
$offset = 56; // int | Which offset to start with
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getContactAddresses($count_all, $limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAddressApi->getContactAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count_all** | **bool**| If all contact addresses should be counted | [optional] |
| **limit** | **int**| The max number of contact addresses | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetContactAddresses200Response**](../Model/GetContactAddresses200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContactAddress()`

```php
updateContactAddress($contact_address_id, $model_contact_address_update): \Itsmind\Sevdesk\Model\ModelContactAddressResponse
```

update a existing contact address

update a existing contact address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_address_id = 56; // int | ID of contact address to return
$model_contact_address_update = new \Itsmind\Sevdesk\Model\ModelContactAddressUpdate(); // \Itsmind\Sevdesk\Model\ModelContactAddressUpdate | Creation data

try {
    $result = $apiInstance->updateContactAddress($contact_address_id, $model_contact_address_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAddressApi->updateContactAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_address_id** | **int**| ID of contact address to return | |
| **model_contact_address_update** | [**\Itsmind\Sevdesk\Model\ModelContactAddressUpdate**](../Model/ModelContactAddressUpdate.md)| Creation data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ModelContactAddressResponse**](../Model/ModelContactAddressResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
