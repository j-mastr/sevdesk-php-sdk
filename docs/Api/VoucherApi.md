# Itsmind\Sevdesk\VoucherApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookVoucher()**](VoucherApi.md#bookVoucher) | **PUT** /Voucher/{voucherId}/bookAmount | Book a voucher |
| [**createVoucherByFactory()**](VoucherApi.md#createVoucherByFactory) | **POST** /Voucher/Factory/saveVoucher | Create a new voucher |
| [**getVoucherById()**](VoucherApi.md#getVoucherById) | **GET** /Voucher/{voucherId} | Find voucher by ID |
| [**getVouchers()**](VoucherApi.md#getVouchers) | **GET** /Voucher | Retrieve vouchers |
| [**updateVoucher()**](VoucherApi.md#updateVoucher) | **PUT** /Voucher/{voucherId} | Update an existing voucher |
| [**voucherUploadFile()**](VoucherApi.md#voucherUploadFile) | **POST** /Voucher/Factory/uploadTempFile | Upload voucher file |


## `bookVoucher()`

```php
bookVoucher($voucher_id, $book_voucher_request): \Itsmind\Sevdesk\Model\BookVoucher200Response
```

Book a voucher

Booking the voucher with a transaction is probably the most important part in the bookkeeping process.<br> There are several ways on correctly booking a voucher, all by using the same endpoint.<br> Conveniently, the booking process is exactly the same as the process for invoices.<br> For this reason, you can have a look at it <a href='https://api.sevdesk.de/#section/How-to-book-an-invoice'>here</a> and all you need to to is to change \"Invoice\" into \"Voucher\" in the URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | ID of voucher to book
$book_voucher_request = new \Itsmind\Sevdesk\Model\BookVoucherRequest(); // \Itsmind\Sevdesk\Model\BookVoucherRequest | Booking data

try {
    $result = $apiInstance->bookVoucher($voucher_id, $book_voucher_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->bookVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **int**| ID of voucher to book | |
| **book_voucher_request** | [**\Itsmind\Sevdesk\Model\BookVoucherRequest**](../Model/BookVoucherRequest.md)| Booking data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\BookVoucher200Response**](../Model/BookVoucher200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVoucherByFactory()`

```php
createVoucherByFactory($save_voucher): \Itsmind\Sevdesk\Model\SaveVoucherResponse
```

Create a new voucher

Generally there are two ways to create vouchers.<br> You can create vouchers by either POSTing to the <b>Voucher</b> and <b>VoucherPos</b> endpoints with the necessary parameters (see attribute lists) or you can use a special endpoint which bundles the requests in one.<br> <br> The list of parameters starts with the voucher array.<br> This array contains all required attributes for a complete voucher.<br> Most of the attributes are covered in the voucher attribute list, there are only two parameters standing out, namely <b>mapAll</b> and <b>objectName</b>.<br> These are just needed for our system and you always need to provide them.<br><br> The list of parameters then continues with the voucher position array.<br> With this array you have the possibility to add multiple positions at once.<br> In the example it only contains one position, again together with the parameters <b>mapAll</b> and <b>objectName</b>, however, you can add more voucher positions by extending the array.<br> So if you wanted to add another position, you would add the same list of parameters with an incrementedcomponents/schemas/saveVoucher\" array index of \\\"1\\\" instead of \\\"0\\\".<br><br> The list ends with the two parameters voucherPosDelete and filename.<br> We will shortly explain what they can do.<br> With voucherPosDelete you have to option to delete voucher positions as this request can also be used to update vouchers.<br> With filename you can attach a file to the voucher.<br> For most of our customers this is a really important step, as they need to digitize their receipts.<br> Finally, after covering all parameters, they only important information left, is that the order of the last two attributes always needs to be kept.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$save_voucher = new \Itsmind\Sevdesk\Model\SaveVoucher(); // \Itsmind\Sevdesk\Model\SaveVoucher | Creation data. Please be aware, that you need to provide at least all required parameter      of the voucher and voucher position model!

try {
    $result = $apiInstance->createVoucherByFactory($save_voucher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->createVoucherByFactory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **save_voucher** | [**\Itsmind\Sevdesk\Model\SaveVoucher**](../Model/SaveVoucher.md)| Creation data. Please be aware, that you need to provide at least all required parameter      of the voucher and voucher position model! | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\SaveVoucherResponse**](../Model/SaveVoucherResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoucherById()`

```php
getVoucherById($voucher_id): \Itsmind\Sevdesk\Model\GetVoucherById200Response
```

Find voucher by ID

Returns a single voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | ID of voucher to return

try {
    $result = $apiInstance->getVoucherById($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getVoucherById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **int**| ID of voucher to return | |

### Return type

[**\Itsmind\Sevdesk\Model\GetVoucherById200Response**](../Model/GetVoucherById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVouchers()`

```php
getVouchers($status, $credit_debit, $description_like, $start_date, $end_date, $contact_id, $contact_object_name): \Itsmind\Sevdesk\Model\GetVoucherById200Response
```

Retrieve vouchers

There are a multitude of parameter which can be used to filter. A few of them are attached but      for a complete list please check out <a href='https://api.sevdesk.de/#section/How-to-filter-for-certain-vouchers'>this</a> list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 3.4; // float | Status of the vouchers to retrieve.
$credit_debit = 'credit_debit_example'; // string | Define if you only want credit or debit vouchers.
$description_like = 'description_like_example'; // string | Retrieve all vouchers with a description like this.
$start_date = 01.01.2020; // int | Retrieve all vouchers with a date equal or higher
$end_date = 01.01.2020; // int | Retrieve all vouchers with a date equal or lower
$contact_id = 56; // int | Retrieve all vouchers with this contact. Must be provided with contact[objectName]
$contact_object_name = 'contact_object_name_example'; // string | Only required if contact[id] was provided. 'Contact' should be used as value.

try {
    $result = $apiInstance->getVouchers($status, $credit_debit, $description_like, $start_date, $end_date, $contact_id, $contact_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **float**| Status of the vouchers to retrieve. | [optional] |
| **credit_debit** | **string**| Define if you only want credit or debit vouchers. | [optional] |
| **description_like** | **string**| Retrieve all vouchers with a description like this. | [optional] |
| **start_date** | **int**| Retrieve all vouchers with a date equal or higher | [optional] |
| **end_date** | **int**| Retrieve all vouchers with a date equal or lower | [optional] |
| **contact_id** | **int**| Retrieve all vouchers with this contact. Must be provided with contact[objectName] | [optional] |
| **contact_object_name** | **string**| Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetVoucherById200Response**](../Model/GetVoucherById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVoucher()`

```php
updateVoucher($voucher_id, $model_voucher_update): \Itsmind\Sevdesk\Model\GetVoucherById200Response
```

Update an existing voucher

Update a voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | ID of voucher to update
$model_voucher_update = new \Itsmind\Sevdesk\Model\ModelVoucherUpdate(); // \Itsmind\Sevdesk\Model\ModelVoucherUpdate | Update data

try {
    $result = $apiInstance->updateVoucher($voucher_id, $model_voucher_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->updateVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **int**| ID of voucher to update | |
| **model_voucher_update** | [**\Itsmind\Sevdesk\Model\ModelVoucherUpdate**](../Model/ModelVoucherUpdate.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetVoucherById200Response**](../Model/GetVoucherById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voucherUploadFile()`

```php
voucherUploadFile($voucher_upload_file_request): \Itsmind\Sevdesk\Model\VoucherUploadFile201Response
```

Upload voucher file

To attach a document to a voucher, you will need to upload it first for later use.<br> To do this, you can use this request.<br> When you successfully uploaded the file, you will get a sevDesk internal filename in the response.<br> The filename will be a hash generated from your uploaded file. You will need it in the next request!<br> After you got the just mentioned filename, you can enter it as a value for the filename parameter of the saveVoucher request.<br> If you provided all necessary parameters and kept all of them in the right order, the file will be attached to your voucher.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_upload_file_request = new \Itsmind\Sevdesk\Model\VoucherUploadFileRequest(); // \Itsmind\Sevdesk\Model\VoucherUploadFileRequest | File to upload

try {
    $result = $apiInstance->voucherUploadFile($voucher_upload_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherUploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_upload_file_request** | [**\Itsmind\Sevdesk\Model\VoucherUploadFileRequest**](../Model/VoucherUploadFileRequest.md)| File to upload | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\VoucherUploadFile201Response**](../Model/VoucherUploadFile201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
