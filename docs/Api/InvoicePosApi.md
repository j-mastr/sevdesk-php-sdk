# Itsmind\Sevdesk\InvoicePosApi

# Invoice positions  Every invoice naturally contains one or more invoice positions sometimes also called invoice items, invoice lines or line items.&lt;br&gt; These positions can but mustn&#39;t contain parts from the sevdesk inventory.&lt;br&gt; In sevdesk the invoice object itself just provides the skeleton to which positions can be added.&lt;br&gt; Without the positions, the invoice would have a sum of zero and therefore no real meaning.&lt;br&gt; For this reason it is necessary that we have a closer look at invoice positions in this section.&lt;br&gt;&lt;br&gt; What makes up a invoice position?&lt;br&gt;&lt;br&gt; A invoice position basically consist of: &lt;ul&gt; &lt;li&gt;A part (optional but strongly recommended)&lt;/li&gt; &lt;li&gt;The name of the part or item&lt;/li&gt; &lt;li&gt;A price for one unit of this part or item&lt;/li&gt; &lt;li&gt;A unit in which the part or item is measured&lt;/li&gt; &lt;li&gt;A quantity showing how many units of the part or item are in the position&lt;/li&gt; &lt;li&gt;A tax rate&lt;/li&gt; &lt;li&gt;An invoice to which the position belongs&lt;/li&gt; &lt;/ul&gt; The total gross sum of the invoice position is then calculated by the price being multiplied with the quantity and the tax rate, which is previously converted to a point number.&lt;br&gt; So for a price of 100, a quantity of two and a tax rate of 19 this would be:&lt;br&gt; 100 * 2 * 1,19 &#x3D; 238&lt;br&gt;&lt;br&gt; There is also the option of regarding the price as the gross price.&lt;br&gt; This is regulated by an attribute of invoice which is called showNet. More about it in the attribute list.&lt;br&gt; In this case, the total sum will be the price you provided and the net price will be calculated by our system.&lt;br&gt; Some of our customers prefer this method, however make sure that you don&#39;t get prices mixed up.  # Invoice position attributes  Here is the table of all attributes of invoice positions.&lt;br&gt; Necessary attributes, which must not be left out, are marked red.&lt;br&gt; Attributes which are strongly recommended for valid bookkeeping are marked orange.&lt;br&gt; There is also a distinction between invoice types, as not all attributes are useful for all types.&lt;br&gt; &lt;table&gt; &lt;tr&gt; &lt;th&gt;Attribute&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;th&gt;Attribute Type&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxRate&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The tax rate of the position. &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;unity&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The unity in which one item is measured. &lt;/td&gt; &lt;td&gt;Nested object (Unity)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;quantity&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The quantity of items. &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;invoice&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The invoice to which the position belongs. &lt;/td&gt; &lt;td&gt;Nested object (Invoice)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;discount&lt;/td&gt; &lt;td&gt; A discount amount for the specific position. &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;text&lt;/td&gt; &lt;td&gt; A text describing the position. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;positionNumber&lt;/td&gt; &lt;td&gt; The number of the position if there are multiple positions in an invoice.&lt;br&gt; Needs to start with zero and is incremented for every new position.&lt;br&gt; If you want to order them differently, you can change their position numbers to your needs. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;name&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The name of the item in the position. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;price&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The price for one unit of the item in the position. &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt; &lt;span style&#x3D;&#39;color:darkorange&#39;&gt; part&lt;/span&gt;&lt;/td&gt; &lt;td&gt; You can define a part from your sevdesk inventory here.&lt;br&gt; Please be aware, you will still need to provide the name, price and everything else as this will not automatically be generated. &lt;/td&gt; &lt;td&gt;Nested object (Part)&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;  # How to create/update an invoice position  You can create an invoice position when creating an invoice, for more information visit the Invoice endpoint.&lt;br&gt; If you want to update an invoice position for an existing invoice, then you must use the same endpoint as when creating an invoice, then passing in the &lt;span style&#x3D;&#39;color:red&#39;&gt;&lt;b&gt;ID&lt;/b&gt;&lt;/span&gt; along with the &lt;span style&#x3D;&#39;color:red&#39;&gt;&lt;b&gt;objectName&lt;/b&gt;&lt;/span&gt; of the invoice and &lt;span style&#x3D;&#39;color:red&#39;&gt;&lt;b&gt;mapAll&lt;/b&gt;&lt;/span&gt;.&lt;br&gt; &lt;ul&gt; &lt;li&gt;&lt;code&gt;{\&quot;invoice\&quot;: { \&quot;&lt;b&gt;id&lt;/b&gt;\&quot;: 0, \&quot;&lt;b&gt;objectName&lt;/b&gt;\&quot;: \&quot;Invoice\&quot;, \&quot;&lt;b&gt;mapAll&lt;/b&gt;\&quot;: true}, &lt;br&gt;\&quot;invoicePos\&quot;:[{...}]&lt;/code&gt;&lt;/li&gt; &lt;/ul&gt; In order to update an invoice position in an existing invoice, the &lt;span style&#x3D;&#39;color:red&#39;&gt;&lt;b&gt;ID&lt;/b&gt;&lt;/span&gt; and the &lt;span style&#x3D;&#39;color:red&#39;&gt;&lt;b&gt;objectName&lt;/b&gt;&lt;/span&gt; of the invoice must be transferred and in the invoice position the &lt;span style&#x3D;&#39;color:red&#39;&gt;&lt;b&gt;ID&lt;/b&gt;&lt;/span&gt; of the invoice position to be updated&lt;br&gt; &lt;ul&gt; &lt;li&gt;&lt;code&gt;\&quot;invoice\&quot;: { \&quot;&lt;b&gt;id&lt;/b&gt;\&quot;: 0, \&quot;&lt;b&gt;objectName&lt;/b&gt;\&quot;: \&quot;Invoice\&quot;, \&quot;&lt;b&gt;mapAll&lt;/b&gt;\&quot;: true},&lt;br&gt; \&quot;invoicePos\&quot;:[{\&quot;&lt;b&gt;id&lt;/b&gt;\&quot;: 0, ...}]&lt;/code&gt;&lt;/li&gt; &lt;/ul&gt;

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInvoicePos()**](InvoicePosApi.md#getInvoicePos) | **GET** /InvoicePos | Retrieve InvoicePos |


## `getInvoicePos()`

```php
getInvoicePos($id, $invoice_id, $invoice_object_name, $part_id, $part_object_name, $count_all, $offset, $limit, $embed): \Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response
```

Retrieve InvoicePos

There are a multitude of parameter which can be used to filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoicePosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 3.4; // float | Retrieve all InvoicePos with this InvoicePos id
$invoice_id = 3.4; // float | Retrieve all invoices positions with this invoice. Must be provided with invoice[objectName]
$invoice_object_name = 'invoice_object_name_example'; // string | Only required if invoice[id] was provided. 'Invoice' should be used as value.
$part_id = 3.4; // float | Retrieve all invoices positions with this part. Must be provided with part[objectName]
$part_object_name = 'part_object_name_example'; // string | Only required if part[id] was provided. 'Part' should be used as value.
$count_all = True; // bool | If all objects should be counted
$offset = 56; // int | Which offset to start with
$limit = 56; // int | The max number of objects to return
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getInvoicePos($id, $invoice_id, $invoice_object_name, $part_id, $part_object_name, $count_all, $offset, $limit, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePosApi->getInvoicePos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **float**| Retrieve all InvoicePos with this InvoicePos id | [optional] |
| **invoice_id** | **float**| Retrieve all invoices positions with this invoice. Must be provided with invoice[objectName] | [optional] |
| **invoice_object_name** | **string**| Only required if invoice[id] was provided. &#39;Invoice&#39; should be used as value. | [optional] |
| **part_id** | **float**| Retrieve all invoices positions with this part. Must be provided with part[objectName] | [optional] |
| **part_object_name** | **string**| Only required if part[id] was provided. &#39;Part&#39; should be used as value. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **limit** | **int**| The max number of objects to return | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response**](../Model/GetInvoicePositionsById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
