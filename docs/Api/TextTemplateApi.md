# Itsmind\Sevdesk\TextTemplateApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTextTemplate()**](TextTemplateApi.md#addTextTemplate) | **POST** /TextTemplate | Create a new text template |
| [**deleteTextTemplate()**](TextTemplateApi.md#deleteTextTemplate) | **DELETE** /TextTemplate/{id} | Delete an existing text template |
| [**getTextTemplate()**](TextTemplateApi.md#getTextTemplate) | **GET** /TextTemplate | Get an overview of all text template |
| [**updateTextTemplate()**](TextTemplateApi.md#updateTextTemplate) | **PUT** /TextTemplate/{id} | Update an existing text template |


## `addTextTemplate()`

```php
addTextTemplate($model_text_template): \Itsmind\Sevdesk\Model\AddTextTemplate201Response
```

Create a new text template

Calls TextTemplate.php to create a new text template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\TextTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_text_template = new \Itsmind\Sevdesk\Model\ModelTextTemplate(); // \Itsmind\Sevdesk\Model\ModelTextTemplate | Text Template Data

try {
    $result = $apiInstance->addTextTemplate($model_text_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->addTextTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_text_template** | [**\Itsmind\Sevdesk\Model\ModelTextTemplate**](../Model/ModelTextTemplate.md)| Text Template Data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\AddTextTemplate201Response**](../Model/AddTextTemplate201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTextTemplate()`

```php
deleteTextTemplate($id)
```

Delete an existing text template

Calls TextTemplate.php to delete a text template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\TextTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of text template you want to delete

try {
    $apiInstance->deleteTextTemplate($id);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->deleteTextTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id of text template you want to delete | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTextTemplate()`

```php
getTextTemplate($limit, $offset, $embed, $category, $object_type, $text_type, $count_all): \Itsmind\Sevdesk\Model\GetTextTemplate200Response
```

Get an overview of all text template

Calls TextTemplate.php to get necessary variables.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\TextTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned text templates start. Default is 0
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.
$category = 'category_example'; // string | The category of the new Text Template.
$object_type = 'object_type_example'; // string | object type for which you want to use the text template
$text_type = 'text_type_example'; // string | type of your text
$count_all = True; // bool | If all objects should be counted

try {
    $result = $apiInstance->getTextTemplate($limit, $offset, $embed, $category, $object_type, $text_type, $count_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->getTextTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100] |
| **offset** | **int**| Set the index where the returned text templates start. Default is 0 | [optional] [default to 0] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional] |
| **category** | **string**| The category of the new Text Template. | [optional] |
| **object_type** | **string**| object type for which you want to use the text template | [optional] |
| **text_type** | **string**| type of your text | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetTextTemplate200Response**](../Model/GetTextTemplate200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTextTemplate()`

```php
updateTextTemplate($id, $model_text_template): \Itsmind\Sevdesk\Model\AddTextTemplate201Response
```

Update an existing text template

Calls TextTemplate.php to update an existing text template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\TextTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of text template you want to update
$model_text_template = new \Itsmind\Sevdesk\Model\ModelTextTemplate(); // \Itsmind\Sevdesk\Model\ModelTextTemplate | Text Template Data

try {
    $result = $apiInstance->updateTextTemplate($id, $model_text_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->updateTextTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id of text template you want to update | |
| **model_text_template** | [**\Itsmind\Sevdesk\Model\ModelTextTemplate**](../Model/ModelTextTemplate.md)| Text Template Data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\AddTextTemplate201Response**](../Model/AddTextTemplate201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
