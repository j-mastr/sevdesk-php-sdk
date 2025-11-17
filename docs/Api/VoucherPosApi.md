# Itsmind\Sevdesk\VoucherPosApi

Every voucher can contain one or more voucher positions.&lt;br&gt; These positions must contain an accounting type (booking account) so that the voucher can be booked accordingly.&lt;br&gt; In sevdesk the voucher object itself just provides the skeleton to which positions can be added.&lt;br&gt; Without the positions, the voucher would have a sum of zero and therefore no real meaning.&lt;br&gt; For this reason it is necessary that we have a closer look at voucher positions in this section.  # What makes up a voucher position?  &lt;b&gt;A voucher position item basically consists of in sevdesk-Update 2.0:&lt;/b&gt;&lt;br&gt;    &lt;ul&gt; &lt;li&gt;An account datev (booking account)&lt;/li&gt; &lt;li&gt;A sum (gross or net)&lt;/li&gt; &lt;li&gt;A tax rate&lt;/li&gt; &lt;li&gt;A voucher to which the position belongs&lt;/li&gt; &lt;/ul&gt; &lt;b&gt;A voucher position item basically consists of in sevdesk-Update 1.0:&lt;/b&gt;&lt;br&gt;&lt;br&gt;    &lt;ul&gt; &lt;li&gt;An accounting type (booking account)&lt;/li&gt; &lt;li&gt;A sum (gross or net)&lt;/li&gt; &lt;li&gt;A tax rate&lt;/li&gt; &lt;li&gt;A voucher to which the position belongs&lt;/li&gt; &lt;/ul&gt; The total gross sum of the voucher position is then calculated.&lt;br&gt; The &#39;net&#39; attribute determines how we calculate the total, if net is true we use the sumNet and calculate from there. If net is false we use the sumGross and calculate the other values from there. &lt;br&gt;&lt;br&gt;  # Voucher position attributes  Here is the table of all attributes of voucher positions.&lt;br&gt; Necessary attributes, which must not be left out, are marked red.&lt;br&gt; &lt;table&gt; &lt;tr&gt; &lt;th&gt;Attribute&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;th&gt;Attribute Type&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;sumGross&lt;/span&gt; or &lt;span style&#x3D;&#39;color:red&#39;&gt;sumNet&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The sum of the voucher position. You may provider both values. &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxRate&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The tax rate of the voucher position. &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;voucher&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The voucher to which the position belongs. &lt;/td&gt; &lt;td&gt;Nested object (Voucher)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;comment&lt;/td&gt; &lt;td&gt; A comment describing the position. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;net&lt;/span&gt;&lt;/td&gt; &lt;td&gt; Define if the sum you provided is inclusive (false) or exclusive vat (true).&lt;br&gt; All positions must be either net or gross, a mixture of the two is not possible. &lt;/td&gt; &lt;td&gt;Boolean&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;accountDatev&lt;/span&gt;&lt;/td&gt; &lt;td&gt; &lt;b&gt;Use this in sevdesk-Update 2.0 (replaces accountingType).&lt;/b&gt;&lt;br&gt; The account datev (booking account) for the voucher position. &lt;/td&gt; &lt;td&gt;Nested object (AccountDatev)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;accountingType&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The accounting type (booking account) for the voucher position. &lt;/td&gt; &lt;td&gt;Nested object (AccountingType)&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getVoucherPositions()**](VoucherPosApi.md#getVoucherPositions) | **GET** /VoucherPos | Retrieve voucher positions |


## `getVoucherPositions()`

```php
getVoucherPositions($voucher_id, $voucher_object_name): \Itsmind\Sevdesk\Model\GetVoucherPositions200Response
```

Retrieve voucher positions

Retrieve all voucher positions depending on the filters defined in the query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherPosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | Retrieve all vouchers positions belonging to this voucher. Must be provided with voucher[objectName]
$voucher_object_name = 'voucher_object_name_example'; // string | Only required if voucher[id] was provided. 'Voucher' should be used as value.

try {
    $result = $apiInstance->getVoucherPositions($voucher_id, $voucher_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherPosApi->getVoucherPositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **int**| Retrieve all vouchers positions belonging to this voucher. Must be provided with voucher[objectName] | [optional] |
| **voucher_object_name** | **string**| Only required if voucher[id] was provided. &#39;Voucher&#39; should be used as value. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetVoucherPositions200Response**](../Model/GetVoucherPositions200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
