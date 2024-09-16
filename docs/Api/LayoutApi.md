# Itsmind\Sevdesk\LayoutApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLetterpapersWithThumb()**](LayoutApi.md#getLetterpapersWithThumb) | **GET** /DocServer/getLetterpapersWithThumb | Retrieve letterpapers |
| [**getTemplates()**](LayoutApi.md#getTemplates) | **GET** /DocServer/getTemplatesWithThumb | Retrieve templates |
| [**updateCreditNoteTemplate()**](LayoutApi.md#updateCreditNoteTemplate) | **PUT** /CreditNote/{creditNoteId}/changeParameter | Update an of credit note template |
| [**updateInvoiceTemplate()**](LayoutApi.md#updateInvoiceTemplate) | **PUT** /Invoice/{invoiceId}/changeParameter | Update an invoice template |
| [**updateOrderTemplate()**](LayoutApi.md#updateOrderTemplate) | **PUT** /Order/{orderId}/changeParameter | Update an order template |


## `getLetterpapersWithThumb()`

```php
getLetterpapersWithThumb(): \Itsmind\Sevdesk\Model\GetLetterpapersWithThumb200Response
```

Retrieve letterpapers

Retrieve all letterpapers with Thumb

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLetterpapersWithThumb();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->getLetterpapersWithThumb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Itsmind\Sevdesk\Model\GetLetterpapersWithThumb200Response**](../Model/GetLetterpapersWithThumb200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplates()`

```php
getTemplates($type): \Itsmind\Sevdesk\Model\GetTemplates200Response
```

Retrieve templates

Retrieve all templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Type of the templates you want to get.

try {
    $result = $apiInstance->getTemplates($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Type of the templates you want to get. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetTemplates200Response**](../Model/GetTemplates200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCreditNoteTemplate()`

```php
updateCreditNoteTemplate($credit_note_id, $model_change_layout): \Itsmind\Sevdesk\Model\UpdateInvoiceTemplate200Response
```

Update an of credit note template

Update an existing of credit note template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of credit note to update
$model_change_layout = new \Itsmind\Sevdesk\Model\ModelChangeLayout(); // \Itsmind\Sevdesk\Model\ModelChangeLayout | Change Layout

try {
    $result = $apiInstance->updateCreditNoteTemplate($credit_note_id, $model_change_layout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->updateCreditNoteTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of credit note to update | |
| **model_change_layout** | [**\Itsmind\Sevdesk\Model\ModelChangeLayout**](../Model/ModelChangeLayout.md)| Change Layout | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateInvoiceTemplate200Response**](../Model/UpdateInvoiceTemplate200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoiceTemplate()`

```php
updateInvoiceTemplate($invoice_id, $model_change_layout): \Itsmind\Sevdesk\Model\UpdateInvoiceTemplate200Response
```

Update an invoice template

Update an existing invoice template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to update
$model_change_layout = new \Itsmind\Sevdesk\Model\ModelChangeLayout(); // \Itsmind\Sevdesk\Model\ModelChangeLayout | Change Layout

try {
    $result = $apiInstance->updateInvoiceTemplate($invoice_id, $model_change_layout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->updateInvoiceTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice to update | |
| **model_change_layout** | [**\Itsmind\Sevdesk\Model\ModelChangeLayout**](../Model/ModelChangeLayout.md)| Change Layout | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateInvoiceTemplate200Response**](../Model/UpdateInvoiceTemplate200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderTemplate()`

```php
updateOrderTemplate($order_id, $model_change_layout): \Itsmind\Sevdesk\Model\UpdateInvoiceTemplate200Response
```

Update an order template

Update an existing order template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to update
$model_change_layout = new \Itsmind\Sevdesk\Model\ModelChangeLayout(); // \Itsmind\Sevdesk\Model\ModelChangeLayout | Change Layout

try {
    $result = $apiInstance->updateOrderTemplate($order_id, $model_change_layout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->updateOrderTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to update | |
| **model_change_layout** | [**\Itsmind\Sevdesk\Model\ModelChangeLayout**](../Model/ModelChangeLayout.md)| Change Layout | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateInvoiceTemplate200Response**](../Model/UpdateInvoiceTemplate200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
