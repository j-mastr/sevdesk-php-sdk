# Itsmind\Sevdesk\ContactFieldApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContactField()**](ContactFieldApi.md#createContactField) | **POST** /ContactCustomField | Create contact field |
| [**createContactFieldSetting()**](ContactFieldApi.md#createContactFieldSetting) | **POST** /ContactCustomFieldSetting | Create contact field setting |
| [**deleteContactCustomFieldId()**](ContactFieldApi.md#deleteContactCustomFieldId) | **DELETE** /ContactCustomField/{contactCustomFieldId} | delete a contact field |
| [**deleteContactFieldSetting()**](ContactFieldApi.md#deleteContactFieldSetting) | **DELETE** /ContactCustomFieldSetting/{contactCustomFieldSettingId} | Deletes a contact field setting |
| [**getContactFieldSettingById()**](ContactFieldApi.md#getContactFieldSettingById) | **GET** /ContactCustomFieldSetting/{contactCustomFieldSettingId} | Find contact field setting by ID |
| [**getContactFieldSettings()**](ContactFieldApi.md#getContactFieldSettings) | **GET** /ContactCustomFieldSetting | Retrieve contact field settings |
| [**getContactFields()**](ContactFieldApi.md#getContactFields) | **GET** /ContactCustomField | Retrieve contact fields |
| [**getContactFieldsById()**](ContactFieldApi.md#getContactFieldsById) | **GET** /ContactCustomField/{contactCustomFieldId} | Retrieve contact fields |
| [**getPlaceholder()**](ContactFieldApi.md#getPlaceholder) | **GET** /Textparser/fetchDictionaryEntriesByType | Retrieve Placeholders |
| [**getReferenceCount()**](ContactFieldApi.md#getReferenceCount) | **GET** /ContactCustomFieldSetting/{contactCustomFieldSettingId}/getReferenceCount | Receive count reference |
| [**updateContactFieldSetting()**](ContactFieldApi.md#updateContactFieldSetting) | **PUT** /ContactCustomFieldSetting/{contactCustomFieldSettingId} | Update contact field setting |
| [**updateContactfield()**](ContactFieldApi.md#updateContactfield) | **PUT** /ContactCustomField/{contactCustomFieldId} | Update a contact field |


## `createContactField()`

```php
createContactField($model_contact_custom_field): \Itsmind\Sevdesk\Model\CreateContactField200Response
```

Create contact field

Create contact field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_contact_custom_field = new \Itsmind\Sevdesk\Model\ModelContactCustomField(); // \Itsmind\Sevdesk\Model\ModelContactCustomField

try {
    $result = $apiInstance->createContactField($model_contact_custom_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->createContactField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_contact_custom_field** | [**\Itsmind\Sevdesk\Model\ModelContactCustomField**](../Model/ModelContactCustomField.md)|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateContactField200Response**](../Model/CreateContactField200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createContactFieldSetting()`

```php
createContactFieldSetting($model_contact_custom_field_setting): \Itsmind\Sevdesk\Model\CreateContactFieldSetting200Response
```

Create contact field setting

Create contact field setting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_contact_custom_field_setting = new \Itsmind\Sevdesk\Model\ModelContactCustomFieldSetting(); // \Itsmind\Sevdesk\Model\ModelContactCustomFieldSetting

try {
    $result = $apiInstance->createContactFieldSetting($model_contact_custom_field_setting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->createContactFieldSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_contact_custom_field_setting** | [**\Itsmind\Sevdesk\Model\ModelContactCustomFieldSetting**](../Model/ModelContactCustomFieldSetting.md)|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateContactFieldSetting200Response**](../Model/CreateContactFieldSetting200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContactCustomFieldId()`

```php
deleteContactCustomFieldId($contact_custom_field_id): \Itsmind\Sevdesk\Model\DeleteCheckAccount200Response
```

delete a contact field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_id = 56; // int | Id of contact field

try {
    $result = $apiInstance->deleteContactCustomFieldId($contact_custom_field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->deleteContactCustomFieldId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_custom_field_id** | **int**| Id of contact field | |

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

## `deleteContactFieldSetting()`

```php
deleteContactFieldSetting($contact_custom_field_setting_id): \Itsmind\Sevdesk\Model\DeleteCheckAccount200Response
```

Deletes a contact field setting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_setting_id = 56; // int | Id of contact field to delete

try {
    $result = $apiInstance->deleteContactFieldSetting($contact_custom_field_setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->deleteContactFieldSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_custom_field_setting_id** | **int**| Id of contact field to delete | |

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

## `getContactFieldSettingById()`

```php
getContactFieldSettingById($contact_custom_field_setting_id): \Itsmind\Sevdesk\Model\CreateContactFieldSetting200Response
```

Find contact field setting by ID

Returns a single contact field setting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_setting_id = 56; // int | ID of contact field to return

try {
    $result = $apiInstance->getContactFieldSettingById($contact_custom_field_setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->getContactFieldSettingById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_custom_field_setting_id** | **int**| ID of contact field to return | |

### Return type

[**\Itsmind\Sevdesk\Model\CreateContactFieldSetting200Response**](../Model/CreateContactFieldSetting200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactFieldSettings()`

```php
getContactFieldSettings($count_all, $offset, $limit, $embed): \Itsmind\Sevdesk\Model\GetContactFieldSettings200Response
```

Retrieve contact field settings

Retrieve all contact field settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactFieldApi(
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
    $result = $apiInstance->getContactFieldSettings($count_all, $offset, $limit, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->getContactFieldSettings: ', $e->getMessage(), PHP_EOL;
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

[**\Itsmind\Sevdesk\Model\GetContactFieldSettings200Response**](../Model/GetContactFieldSettings200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactFields()`

```php
getContactFields($count_all, $offset, $limit, $embed): \Itsmind\Sevdesk\Model\GetContactFields200Response
```

Retrieve contact fields

Retrieve all contact fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactFieldApi(
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
    $result = $apiInstance->getContactFields($count_all, $offset, $limit, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->getContactFields: ', $e->getMessage(), PHP_EOL;
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

[**\Itsmind\Sevdesk\Model\GetContactFields200Response**](../Model/GetContactFields200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactFieldsById()`

```php
getContactFieldsById($contact_custom_field_id): \Itsmind\Sevdesk\Model\GetContactFieldsById200Response
```

Retrieve contact fields

Retrieve all contact fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_id = 3.4; // float | id of the contact field

try {
    $result = $apiInstance->getContactFieldsById($contact_custom_field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->getContactFieldsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_custom_field_id** | **float**| id of the contact field | |

### Return type

[**\Itsmind\Sevdesk\Model\GetContactFieldsById200Response**](../Model/GetContactFieldsById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlaceholder()`

```php
getPlaceholder($object_name, $sub_object_name): \Itsmind\Sevdesk\Model\GetPlaceholder200Response
```

Retrieve Placeholders

Retrieve all Placeholders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_name = 'object_name_example'; // string | Model name
$sub_object_name = 'sub_object_name_example'; // string | Sub model name, required if you have \"Email\" at objectName

try {
    $result = $apiInstance->getPlaceholder($object_name, $sub_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->getPlaceholder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_name** | **string**| Model name | |
| **sub_object_name** | **string**| Sub model name, required if you have \&quot;Email\&quot; at objectName | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetPlaceholder200Response**](../Model/GetPlaceholder200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReferenceCount()`

```php
getReferenceCount($contact_custom_field_setting_id): \Itsmind\Sevdesk\Model\GetReferenceCount200Response
```

Receive count reference

Receive count reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_setting_id = 56; // int | ID of contact field you want to get the reference count

try {
    $result = $apiInstance->getReferenceCount($contact_custom_field_setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->getReferenceCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_custom_field_setting_id** | **int**| ID of contact field you want to get the reference count | |

### Return type

[**\Itsmind\Sevdesk\Model\GetReferenceCount200Response**](../Model/GetReferenceCount200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContactFieldSetting()`

```php
updateContactFieldSetting($contact_custom_field_setting_id, $model_contact_custom_field_setting_update): \Itsmind\Sevdesk\Model\UpdateContactFieldSetting200Response
```

Update contact field setting

Update an existing contact field  setting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_setting_id = 56; // int | ID of contact field setting you want to update
$model_contact_custom_field_setting_update = new \Itsmind\Sevdesk\Model\ModelContactCustomFieldSettingUpdate(); // \Itsmind\Sevdesk\Model\ModelContactCustomFieldSettingUpdate

try {
    $result = $apiInstance->updateContactFieldSetting($contact_custom_field_setting_id, $model_contact_custom_field_setting_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->updateContactFieldSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_custom_field_setting_id** | **int**| ID of contact field setting you want to update | |
| **model_contact_custom_field_setting_update** | [**\Itsmind\Sevdesk\Model\ModelContactCustomFieldSettingUpdate**](../Model/ModelContactCustomFieldSettingUpdate.md)|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateContactFieldSetting200Response**](../Model/UpdateContactFieldSetting200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContactfield()`

```php
updateContactfield($contact_custom_field_id, $model_contact_custom_field_update): \Itsmind\Sevdesk\Model\CreateContactField200Response
```

Update a contact field

Update a contact field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\ContactFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_custom_field_id = 3.4; // float | id of the contact field
$model_contact_custom_field_update = new \Itsmind\Sevdesk\Model\ModelContactCustomFieldUpdate(); // \Itsmind\Sevdesk\Model\ModelContactCustomFieldUpdate | Update data

try {
    $result = $apiInstance->updateContactfield($contact_custom_field_id, $model_contact_custom_field_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFieldApi->updateContactfield: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_custom_field_id** | **float**| id of the contact field | |
| **model_contact_custom_field_update** | [**\Itsmind\Sevdesk\Model\ModelContactCustomFieldUpdate**](../Model/ModelContactCustomFieldUpdate.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateContactField200Response**](../Model/CreateContactField200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
