# Itsmind\Sevdesk\CheckAccountTransactionApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkAccountTransactionEnshrine()**](CheckAccountTransactionApi.md#checkAccountTransactionEnshrine) | **PUT** /CheckAccountTransaction/{checkAccountTransactionId}/enshrine | Enshrine |
| [**createTransaction()**](CheckAccountTransactionApi.md#createTransaction) | **POST** /CheckAccountTransaction | Create a new transaction |
| [**deleteCheckAccountTransaction()**](CheckAccountTransactionApi.md#deleteCheckAccountTransaction) | **DELETE** /CheckAccountTransaction/{checkAccountTransactionId} | Deletes a check account transaction |
| [**getCheckAccountTransactionById()**](CheckAccountTransactionApi.md#getCheckAccountTransactionById) | **GET** /CheckAccountTransaction/{checkAccountTransactionId} | Find check account transaction by ID |
| [**getTransactions()**](CheckAccountTransactionApi.md#getTransactions) | **GET** /CheckAccountTransaction | Retrieve transactions |
| [**updateCheckAccountTransaction()**](CheckAccountTransactionApi.md#updateCheckAccountTransaction) | **PUT** /CheckAccountTransaction/{checkAccountTransactionId} | Update an existing check account transaction |


## `checkAccountTransactionEnshrine()`

```php
checkAccountTransactionEnshrine($check_account_transaction_id): \Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response
```

Enshrine

Sets the current date and time as a value for the property `enshrined`.<br> This operation is only possible if the status is \"Linked\" (`\"status\": \"200\"`) or higher.  Linked invoices, credit notes or vouchers cannot be changed when the transaction is enshrined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CheckAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_account_transaction_id = 56; // int | ID of the transaction to enshrine

try {
    $result = $apiInstance->checkAccountTransactionEnshrine($check_account_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->checkAccountTransactionEnshrine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_account_transaction_id** | **int**| ID of the transaction to enshrine | |

### Return type

[**\Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response**](../Model/CheckAccountTransactionEnshrine200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTransaction()`

```php
createTransaction($model_check_account_transaction): \Itsmind\Sevdesk\Model\CreateTransaction201Response
```

Create a new transaction

Creates a new transaction on a check account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CheckAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_check_account_transaction = new \Itsmind\Sevdesk\Model\ModelCheckAccountTransaction(); // \Itsmind\Sevdesk\Model\ModelCheckAccountTransaction | Creation data. Please be aware, that you need to provide at least all required parameter      of the CheckAccountTransaction model!

try {
    $result = $apiInstance->createTransaction($model_check_account_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_check_account_transaction** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransaction**](../Model/ModelCheckAccountTransaction.md)| Creation data. Please be aware, that you need to provide at least all required parameter      of the CheckAccountTransaction model! | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateTransaction201Response**](../Model/CreateTransaction201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCheckAccountTransaction()`

```php
deleteCheckAccountTransaction($check_account_transaction_id): \Itsmind\Sevdesk\Model\DeleteCheckAccount200Response
```

Deletes a check account transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CheckAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_account_transaction_id = 56; // int | Id of check account transaction to delete

try {
    $result = $apiInstance->deleteCheckAccountTransaction($check_account_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->deleteCheckAccountTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_account_transaction_id** | **int**| Id of check account transaction to delete | |

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

## `getCheckAccountTransactionById()`

```php
getCheckAccountTransactionById($check_account_transaction_id): \Itsmind\Sevdesk\Model\GetCheckAccountTransactionById200Response
```

Find check account transaction by ID

Retrieve an existing check account transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CheckAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_account_transaction_id = 56; // int | ID of check account transaction

try {
    $result = $apiInstance->getCheckAccountTransactionById($check_account_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->getCheckAccountTransactionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_account_transaction_id** | **int**| ID of check account transaction | |

### Return type

[**\Itsmind\Sevdesk\Model\GetCheckAccountTransactionById200Response**](../Model/GetCheckAccountTransactionById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactions()`

```php
getTransactions($check_account_id, $check_account_object_name, $is_booked, $paymt_purpose, $start_date, $end_date, $payee_payer_name, $only_credit, $only_debit, $count_all, $limit, $offset, $status, $hide_fees, $search_for_invoice_and_voucher, $embed): \Itsmind\Sevdesk\Model\GetTransactions200Response
```

Retrieve transactions

Retrieve all transactions depending on the filters defined in the query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CheckAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_account_id = 56; // int | Retrieve all transactions on this check account. Must be provided with checkAccount[objectName]
$check_account_object_name = 'check_account_object_name_example'; // string | Only required if checkAccount[id] was provided. 'CheckAccount' should be used as value.
$is_booked = True; // bool | Only retrieve booked transactions
$paymt_purpose = 'paymt_purpose_example'; // string | Only retrieve transactions with this payment purpose
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only retrieve transactions from this date on
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only retrieve transactions up to this date
$payee_payer_name = 'payee_payer_name_example'; // string | Only retrieve transactions with this payee / payer
$only_credit = True; // bool | Only retrieve credit transactions
$only_debit = True; // bool | Only retrieve debit transactions
$count_all = True; // bool | If all transactions should be counted
$limit = 56; // int | The max number of transactions
$offset = 56; // int | Which offset to start with
$status = 3.4; // float | Status of the transaction
$hide_fees = True; // bool | Do not include fees for financial transactions
$search_for_invoice_and_voucher = 'search_for_invoice_and_voucher_example'; // string | Search for transactions linked with a given invoice or voucher
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getTransactions($check_account_id, $check_account_object_name, $is_booked, $paymt_purpose, $start_date, $end_date, $payee_payer_name, $only_credit, $only_debit, $count_all, $limit, $offset, $status, $hide_fees, $search_for_invoice_and_voucher, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_account_id** | **int**| Retrieve all transactions on this check account. Must be provided with checkAccount[objectName] | [optional] |
| **check_account_object_name** | **string**| Only required if checkAccount[id] was provided. &#39;CheckAccount&#39; should be used as value. | [optional] |
| **is_booked** | **bool**| Only retrieve booked transactions | [optional] |
| **paymt_purpose** | **string**| Only retrieve transactions with this payment purpose | [optional] |
| **start_date** | **\DateTime**| Only retrieve transactions from this date on | [optional] |
| **end_date** | **\DateTime**| Only retrieve transactions up to this date | [optional] |
| **payee_payer_name** | **string**| Only retrieve transactions with this payee / payer | [optional] |
| **only_credit** | **bool**| Only retrieve credit transactions | [optional] |
| **only_debit** | **bool**| Only retrieve debit transactions | [optional] |
| **count_all** | **bool**| If all transactions should be counted | [optional] |
| **limit** | **int**| The max number of transactions | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **status** | **float**| Status of the transaction | [optional] |
| **hide_fees** | **bool**| Do not include fees for financial transactions | [optional] |
| **search_for_invoice_and_voucher** | **string**| Search for transactions linked with a given invoice or voucher | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetTransactions200Response**](../Model/GetTransactions200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCheckAccountTransaction()`

```php
updateCheckAccountTransaction($check_account_transaction_id, $model_check_account_transaction_update): \Itsmind\Sevdesk\Model\CreateTransaction201Response
```

Update an existing check account transaction

Update a check account transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CheckAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_account_transaction_id = 56; // int | ID of check account to update transaction
$model_check_account_transaction_update = new \Itsmind\Sevdesk\Model\ModelCheckAccountTransactionUpdate(); // \Itsmind\Sevdesk\Model\ModelCheckAccountTransactionUpdate | Update data

try {
    $result = $apiInstance->updateCheckAccountTransaction($check_account_transaction_id, $model_check_account_transaction_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->updateCheckAccountTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_account_transaction_id** | **int**| ID of check account to update transaction | |
| **model_check_account_transaction_update** | [**\Itsmind\Sevdesk\Model\ModelCheckAccountTransactionUpdate**](../Model/ModelCheckAccountTransactionUpdate.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateTransaction201Response**](../Model/CreateTransaction201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
