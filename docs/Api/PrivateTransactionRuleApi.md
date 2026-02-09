# Itsmind\Sevdesk\PrivateTransactionRuleApi

A private transaction rule can be used to automatically set transactions to private after importing.&lt;br&gt; &lt;br&gt; Every rule can define a paymentPurpose and/or counterpartName to match. At least one of these must be set.&lt;br&gt; &lt;br&gt; Matching is case sensitive, a simple string match. The properties that are set must match the transaction properties to have an effect.&lt;br&gt; Example: A rule with counterpartName&#x3D;Schmid will match transactions from &#39;Anne Schmid&#39; and &#39;Hans Schmidt&#39; but not &#39;X SCHMID&#39;.

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPrivateTransactionRule()**](PrivateTransactionRuleApi.md#createPrivateTransactionRule) | **POST** /PrivateTransactionRule | Create a new rule |
| [**deletePrivateTransactionRule()**](PrivateTransactionRuleApi.md#deletePrivateTransactionRule) | **DELETE** /PrivateTransactionRule/{id} | Delete the rule by id |
| [**listPrivateTransactionRules()**](PrivateTransactionRuleApi.md#listPrivateTransactionRules) | **GET** /PrivateTransactionRule | List existing rules |


## `createPrivateTransactionRule()`

```php
createPrivateTransactionRule($create_private_transaction_rule): \Itsmind\Sevdesk\Model\ModelPrivateTransactionRuleResponse
```

Create a new rule

Creates a new rule for marking private transactions automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\PrivateTransactionRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_private_transaction_rule = new \Itsmind\Sevdesk\Model\CreatePrivateTransactionRule(); // \Itsmind\Sevdesk\Model\CreatePrivateTransactionRule

try {
    $result = $apiInstance->createPrivateTransactionRule($create_private_transaction_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateTransactionRuleApi->createPrivateTransactionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_private_transaction_rule** | [**\Itsmind\Sevdesk\Model\CreatePrivateTransactionRule**](../Model/CreatePrivateTransactionRule.md)|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\ModelPrivateTransactionRuleResponse**](../Model/ModelPrivateTransactionRuleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePrivateTransactionRule()`

```php
deletePrivateTransactionRule($id): \Itsmind\Sevdesk\Model\DeleteCheckAccount200Response
```

Delete the rule by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\PrivateTransactionRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the rule to delete

try {
    $result = $apiInstance->deletePrivateTransactionRule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateTransactionRuleApi->deletePrivateTransactionRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id of the rule to delete | |

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

## `listPrivateTransactionRules()`

```php
listPrivateTransactionRules(): \Itsmind\Sevdesk\Model\ListPrivateTransactionRules200Response
```

List existing rules

List all existing rules you defined for automated marking private transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\PrivateTransactionRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPrivateTransactionRules();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateTransactionRuleApi->listPrivateTransactionRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Itsmind\Sevdesk\Model\ListPrivateTransactionRules200Response**](../Model/ListPrivateTransactionRules200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
