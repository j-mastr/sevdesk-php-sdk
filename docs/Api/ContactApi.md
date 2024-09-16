# Itsmind\Sevdesk\ContactApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contactCustomerNumberAvailabilityCheck()**](ContactApi.md#contactCustomerNumberAvailabilityCheck) | **GET** /Contact/Mapper/checkCustomerNumberAvailability | Check if a customer number is available |
| [**createContact()**](ContactApi.md#createContact) | **POST** /Contact | Create a new contact |
| [**deleteContact()**](ContactApi.md#deleteContact) | **DELETE** /Contact/{contactId} | Deletes a contact |
| [**findContactsByCustomFieldValue()**](ContactApi.md#findContactsByCustomFieldValue) | **GET** /Contact/Factory/findContactsByCustomFieldValue | Find contacts by custom field value |
| [**getContactById()**](ContactApi.md#getContactById) | **GET** /Contact/{contactId} | Find contact by ID |
| [**getContactTabsItemCountById()**](ContactApi.md#getContactTabsItemCountById) | **GET** /Contact/{contactId}/getTabsItemCount | Get number of all items |
| [**getContacts()**](ContactApi.md#getContacts) | **GET** /Contact | Retrieve contacts |
| [**getNextCustomerNumber()**](ContactApi.md#getNextCustomerNumber) | **GET** /Contact/Factory/getNextCustomerNumber | Get next free customer number |
| [**updateContact()**](ContactApi.md#updateContact) | **PUT** /Contact/{contactId} | Update a existing contact |


## `contactCustomerNumberAvailabilityCheck()`

```php
contactCustomerNumberAvailabilityCheck($customer_number): \Itsmind\Sevdesk\Model\ContactCustomerNumberAvailabilityCheck200Response
```

Check if a customer number is available

Checks if a given customer number is available or already used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_number = 'customer_number_example'; // string | The customer number to be checked.

try {
    $result = $apiInstance->contactCustomerNumberAvailabilityCheck($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactCustomerNumberAvailabilityCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_number** | **string**| The customer number to be checked. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ContactCustomerNumberAvailabilityCheck200Response**](../Model/ContactCustomerNumberAvailabilityCheck200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createContact()`

```php
createContact($model_contact): \Itsmind\Sevdesk\Model\CreateContact201Response
```

Create a new contact

Creates a new contact.<br>       For adding addresses and communication ways, you will need to use the ContactAddress and CommunicationWay endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_contact = new \Itsmind\Sevdesk\Model\ModelContact(); // \Itsmind\Sevdesk\Model\ModelContact | Creation data

try {
    $result = $apiInstance->createContact($model_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_contact** | [**\Itsmind\Sevdesk\Model\ModelContact**](../Model/ModelContact.md)| Creation data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateContact201Response**](../Model/CreateContact201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContact()`

```php
deleteContact($contact_id): \Itsmind\Sevdesk\Model\DeleteCheckAccount200Response
```

Deletes a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | Id of contact resource to delete

try {
    $result = $apiInstance->deleteContact($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| Id of contact resource to delete | |

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

## `findContactsByCustomFieldValue()`

```php
findContactsByCustomFieldValue($value, $custom_field_name, $custom_field_setting_id, $custom_field_setting_object_name): \Itsmind\Sevdesk\Model\FindContactsByCustomFieldValue200Response
```

Find contacts by custom field value

Returns an array of contacts having a certain custom field value set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value = 'value_example'; // string | The value to be checked.
$custom_field_name = 'custom_field_name_example'; // string | The ContactCustomFieldSetting name, if no ContactCustomFieldSetting is provided.
$custom_field_setting_id = 'custom_field_setting_id_example'; // string | ID of ContactCustomFieldSetting for which the value has to be checked.
$custom_field_setting_object_name = ContactCustomFieldSetting; // string | Object name. Only needed if you also defined the ID of a ContactCustomFieldSetting.

try {
    $result = $apiInstance->findContactsByCustomFieldValue($value, $custom_field_name, $custom_field_setting_id, $custom_field_setting_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->findContactsByCustomFieldValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value** | **string**| The value to be checked. | |
| **custom_field_name** | **string**| The ContactCustomFieldSetting name, if no ContactCustomFieldSetting is provided. | |
| **custom_field_setting_id** | **string**| ID of ContactCustomFieldSetting for which the value has to be checked. | [optional] |
| **custom_field_setting_object_name** | **string**| Object name. Only needed if you also defined the ID of a ContactCustomFieldSetting. | [optional] [default to &#39;ContactCustomFieldSetting&#39;] |

### Return type

[**\Itsmind\Sevdesk\Model\FindContactsByCustomFieldValue200Response**](../Model/FindContactsByCustomFieldValue200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactById()`

```php
getContactById($contact_id, $embed): \Itsmind\Sevdesk\Model\FindContactsByCustomFieldValue200Response
```

Find contact by ID

Returns a single contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | ID of contact to return
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getContactById($contact_id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| ID of contact to return | |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\FindContactsByCustomFieldValue200Response**](../Model/FindContactsByCustomFieldValue200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactTabsItemCountById()`

```php
getContactTabsItemCountById($contact_id): \Itsmind\Sevdesk\Model\GetContactTabsItemCountById200Response
```

Get number of all items

Get number of all invoices, orders, etc. of a specified contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | ID of contact to return

try {
    $result = $apiInstance->getContactTabsItemCountById($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactTabsItemCountById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| ID of contact to return | |

### Return type

[**\Itsmind\Sevdesk\Model\GetContactTabsItemCountById200Response**](../Model/GetContactTabsItemCountById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContacts()`

```php
getContacts($depth, $customer_number, $count_all, $limit, $offset, $embed): \Itsmind\Sevdesk\Model\GetContacts200Response
```

Retrieve contacts

There are a multitude of parameter which can be used to filter.<br>       A few of them are attached but       for a complete list please check out <a href='#tag/Contact/How-to-filter-for-certain-contacts'>this</a> list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$depth = 'depth_example'; // string | Defines if both organizations <b>and</b> persons should be returned.<br>       '0' -> only organizations, '1' -> organizations and persons
$customer_number = 'customer_number_example'; // string | Retrieve all contacts with this customer number
$count_all = True; // bool | If all contacts should be counted
$limit = 56; // int | The max number of contacts
$offset = 56; // int | Which offset to start with
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getContacts($depth, $customer_number, $count_all, $limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **depth** | **string**| Defines if both organizations &lt;b&gt;and&lt;/b&gt; persons should be returned.&lt;br&gt;       &#39;0&#39; -&gt; only organizations, &#39;1&#39; -&gt; organizations and persons | [optional] |
| **customer_number** | **string**| Retrieve all contacts with this customer number | [optional] |
| **count_all** | **bool**| If all contacts should be counted | [optional] |
| **limit** | **int**| The max number of contacts | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetContacts200Response**](../Model/GetContacts200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNextCustomerNumber()`

```php
getNextCustomerNumber(): \Itsmind\Sevdesk\Model\GetNextCustomerNumber200Response
```

Get next free customer number

Retrieves the next available customer number. Avoids duplicates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNextCustomerNumber();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getNextCustomerNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Itsmind\Sevdesk\Model\GetNextCustomerNumber200Response**](../Model/GetNextCustomerNumber200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContact()`

```php
updateContact($contact_id, $model_contact_update): \Itsmind\Sevdesk\Model\CreateContact201Response
```

Update a existing contact

Update a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | ID of contact to update
$model_contact_update = new \Itsmind\Sevdesk\Model\ModelContactUpdate(); // \Itsmind\Sevdesk\Model\ModelContactUpdate | Update data

try {
    $result = $apiInstance->updateContact($contact_id, $model_contact_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| ID of contact to update | |
| **model_contact_update** | [**\Itsmind\Sevdesk\Model\ModelContactUpdate**](../Model/ModelContactUpdate.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateContact201Response**](../Model/CreateContact201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
