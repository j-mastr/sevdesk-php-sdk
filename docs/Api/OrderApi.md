# Itsmind\Sevdesk\OrderApi

# Purpose of orders in sevdesk  Orders serve a multitude of purposes in sevdesk.&lt;br&gt; Although strictly speaking an order has just one single purpose, we regard three types of objects as orders.&lt;br&gt; The &lt;b&gt;estimate / proposal&lt;/b&gt; which gets sent to an end-customer by the customer.&lt;br&gt; The &lt;b&gt;order confirmation&lt;/b&gt; from an accepted estimate.&lt;br&gt; The &lt;b&gt;delivery note&lt;/b&gt; which is sent if goods have been sent by the customer.&lt;br&gt; If you need to handle any of these objects, this detail documentation is the right place!&lt;br&gt; Orders are really similar to invoices in regards to their attributes and representation.&lt;br&gt; This is due to their close relation to invoices, as invoices can be created from orders.  # Types and status of orders  Orders are one of the more complex objects that can be handled over the API.&lt;br&gt; As already mentioned, there are different types of orders and these orders can have multiple status again.&lt;br&gt; Let&#39;s have a look at the different types of orders first.&lt;br&gt; &lt;table&gt; &lt;tr&gt; &lt;th&gt;Order Type&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;th&gt;Abbreviation&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Estimate / Proposal&lt;/td&gt; &lt;td&gt; A normal order which documents a simple estimation / proposal for an end-customer. &lt;/td&gt; &lt;td&gt; AN &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Order confirmation&lt;/td&gt; &lt;td&gt; A confirmation for an estimate / proposal. &lt;/td&gt; &lt;td&gt; AB &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Delivery note&lt;/td&gt; &lt;td&gt; A confirmation that goods from an estimate / proposal have been sent. &lt;/td&gt; &lt;td&gt; LI &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt; Fortunately all types of order share the same set of attributes so it is only important to keep in mind the abbreviations for all types of orders or at least the one you will need.&lt;br&gt; This is, because you will need to provide the order type when creating an order.&lt;br&gt;&lt;br&gt; &lt;b&gt;Order status&lt;/b&gt;&lt;br&gt; Now that we have covered all order types, let&#39;s move to the different status they can have.&lt;br&gt;&lt;br&gt; &lt;table&gt; &lt;tr&gt; &lt;th&gt;Order status&lt;/th&gt; &lt;th&gt;Meaning&lt;/th&gt; &lt;th&gt;Status code&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Draft&lt;/td&gt; &lt;td&gt; The order is still a draft.&lt;br&gt; It has not been sent to the end-customer and can still be changed. &lt;/td&gt; &lt;td&gt; 100 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Delivered&lt;/td&gt; &lt;td&gt; The order has been sent to the end-customer.&lt;br&gt; &lt;/td&gt; &lt;td&gt; 200 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Rejected / Cancelled&lt;/td&gt; &lt;td&gt; The order has been rejected by the end-customer.&lt;br&gt; &lt;/td&gt; &lt;td&gt; 300 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Accepted&lt;/td&gt; &lt;td&gt; The order has been accepted by the end-customer.&lt;br&gt; &lt;/td&gt; &lt;td&gt; 500 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Partially Calculated&lt;/td&gt; &lt;td&gt; An invoice for parts of the order (but not the full order) has been created.&lt;br&gt; &lt;/td&gt; &lt;td&gt; 750 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Calculated&lt;/td&gt; &lt;td&gt; The order has been calculated.&lt;br&gt; One or more invoices have been created covering the whole order. &lt;/td&gt; &lt;td&gt; 1000 &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt; It is important to keep in mind the status codes for all status of orders or at least the one you will need.&lt;br&gt; This is, because you will need to provide the status code when creating an order.  # Attributes of an order  Here is the table of all attributes of orders.&lt;br&gt; Necessary attributes, which must not be left out, are marked red.&lt;br&gt; Attributes which are strongly recommended for valid bookkeeping are marked orange.&lt;br&gt; &lt;table&gt; &lt;tr&gt; &lt;th&gt;Attribute&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;th&gt;Attribute Type&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxType&lt;/span&gt;&lt;/td&gt; &lt;td&gt; &lt;b&gt;Use this in sevdesk-Update 1.0 (instead of taxRule).&lt;/b&gt;&lt;br&gt; Defines the vat-regulation.&lt;br&gt; Can be: &lt;ul&gt; &lt;li&gt;&lt;code&gt;default&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;eu&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;noteu&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;custom&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;ss&lt;/code&gt;&lt;/li&gt; &lt;/ul&gt; &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;taxSet&lt;/td&gt; &lt;td&gt; &lt;b&gt;Use this in sevdesk-Update 1.0 (instead of taxRule).&lt;/b&gt;&lt;br&gt; Use for custom defined vat-regulations.&lt;br&gt; Requires &lt;code&gt;\&quot;taxType\&quot;: \&quot;custom\&quot;&lt;/code&gt; &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxRule&lt;/span&gt;&lt;/td&gt; &lt;td&gt; &lt;b&gt;Use this in sevdesk-Update 2.0 (replaces taxType / taxSet).&lt;/b&gt;&lt;br&gt; See &lt;a href&#x3D;\&quot;#section/sevdesk-Update-2.0/Tax-Rules\&quot;&gt;list of available VAT rules&lt;/a&gt;&lt;br&gt; &lt;br&gt; Example for Umsatzsteuerpflichtige Umsätze: &lt;code&gt;\&quot;taxRule\&quot;: {\&quot;id\&quot;: \&quot;1\&quot;, \&quot;objectName\&quot;: \&quot;TaxRule\&quot;}&lt;/code&gt; &lt;/td&gt; &lt;td&gt;Nested object (TaxRule)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;currency&lt;/span&gt;&lt;/td&gt; &lt;td&gt; Currency of the order.&lt;br&gt; Needs to be currency code according to ISO-4217. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;version&lt;/span&gt;&lt;/td&gt; &lt;td&gt; Version of the order.&lt;br&gt; Can be used if you have multiple drafts for the same order.&lt;br&gt; Should start with 0. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxText&lt;/span&gt;&lt;/td&gt; &lt;td&gt; Text describing the vat regulation you chose.&lt;br&gt; A common text of our German customers would be:&lt;br&gt; Umsatzsteuer ausweisen or zzgl. Umsatzsteuer 19% &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;taxRate&lt;/td&gt; &lt;td&gt; This is not used anymore. Use the taxRate of the individual positions instead. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;contactPerson&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The sevdesk user which acts as a contact person for this order.&lt;br&gt; &lt;/td&gt; &lt;td&gt;Nested object (SevUser)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;smallSettlement&lt;/td&gt; &lt;td&gt; If the sevdesk account is falling under the small entrepreneur scheme the order must&#39;t contain any vat.&lt;br&gt; If this is the case, this attribute should be true, otherwise false. &lt;/td&gt; &lt;td&gt;Boolean&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;orderDate&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The order date. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;status&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The order status. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;showNet&lt;/td&gt; &lt;td&gt; This attribute determines, if the price you give the order positions will be regarded as gross or net.&lt;br&gt; If true, the price attribute will hold the net value, otherwise the gross value. &lt;/td&gt; &lt;td&gt;Boolean&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;customerInternalNote&lt;/td&gt; &lt;td&gt; You can use this attribute to provide a note for the order.&lt;br&gt; It can be used for reference numbers, order numbers or other important information. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;address&lt;/span&gt;&lt;/td&gt; &lt;td&gt; Holds the &lt;b&gt;complete&lt;/b&gt; address to which the order is directed.&lt;br&gt; You can use line brakes to separate the different address parts. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;sendType&lt;/span&gt;&lt;/td&gt; &lt;td&gt; If you don&#39;t plan to send the order over another endpoint like &lt;b&gt;/Order/sendViaEmail&lt;/b&gt; or &lt;b&gt;Order/sendBy&lt;/b&gt; but instead give it the status \&quot;200\&quot; directly, you need to specify a send type here.&lt;br&gt; Valid types are: VPR (printed), VPDF (downloaded), VM (mailed), VP (postal). &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;origin&lt;/td&gt; &lt;td&gt; You can specify the object from which an order originated.&lt;br&gt; Just provide the ID of this object. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;typeOrigin&lt;/td&gt; &lt;td&gt; Specifies the object name of the object from which an order originated.&lt;br&gt; Most likely &lt;b&gt;Order&lt;/b&gt; or &lt;b&gt;Invoice&lt;/b&gt;. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;orderNumber&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The order number. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;contact&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The end-customer to which the order is directed.&lt;br&gt; &lt;/td&gt; &lt;td&gt;Nested object (Contact)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;header&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The order header.&lt;br&gt; Usually consists of the order number and a prefix. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;headText&lt;/td&gt; &lt;td&gt; A head text for the order.&lt;br&gt; Can contain certain html tags. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;footText&lt;/td&gt; &lt;td&gt; A foot text for the order.&lt;br&gt; Can contain certain html tags. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;paymentTerms&lt;/td&gt; &lt;td&gt; The payment terms for the order.&lt;br&gt; &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;deliveryTerms&lt;/td&gt; &lt;td&gt; The delivery terms for the order.&lt;br&gt; &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;sendDate&lt;/td&gt; &lt;td&gt; The date the order was sent to the end-customer. &lt;/td&gt; &lt;td&gt;Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;orderType&lt;/span&gt;&lt;/td&gt; &lt;td&gt; The order type. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;deliveryAddressCountry&lt;/td&gt; &lt;td&gt; &lt;p&gt;Can be used to specify a different country to the order address (&lt;code&gt;addressCountry&lt;/code&gt;).&lt;br&gt; This country is used for &lt;a href&#x3D;\&quot;#section/sevdesk-Update-2.0/Tax-Rules\&quot;&gt;One Stop Shop VAT rules&lt;/a&gt;.&lt;br&gt; For example, to validate the tax rate of the positions.&lt;br&gt; &lt;br&gt; If not specified, it defaults to the country of the order address.&lt;/p&gt; &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;  # How to filter for certain orders  Often you don&#39;t want to retrieve all orders in a sevdesk account or one specific order of which you know the ID, but rather a list of orders or a single order with certain properties.&lt;br&gt; For this purpose we provide a bunch of filters that you can attach to your GET query string for nearly all endpoints.&lt;br&gt; Here are all filters applicable to an order query. &lt;table&gt; &lt;tr&gt; &lt;th&gt;Filter&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderNumber&#x3D;{number}&lt;/td&gt; &lt;td&gt;Only retrieve all orders with number as a order number&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;tags[x][id]&#x3D;{id}&amp;tags[x][objectName]&#x3D;Tag&lt;/td&gt; &lt;td&gt;Only retrieve all orders with id as a tag.&lt;br&gt; You can specify multiple tags by adding more array entries. &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;status&#x3D;{status}&lt;/td&gt; &lt;td&gt;Only retrieve orders of a given status&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;createBefore&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all orders created before timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;createAfter&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all orders created after timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;updateBefore&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all orders updated last before timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;updateAfter&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all orders updated last after timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;contact[id]&#x3D;{id}&amp;contact[objectName]&#x3D;Contact&lt;/td&gt; &lt;td&gt;Only retrieve all orders with id as a contact&lt;br&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;startDate&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all orders where order date is bigger than timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;endDate&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt; Only retrieve all orders where order date is smaller than timestamp&lt;br&gt; If startDate and endDate are both supplied, you will get all orders in the defined range &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderType&#x3D;{type}&lt;/td&gt; &lt;td&gt;Only retrieve all orders with type as an order type&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;headerSearch&#x3D;{header}&lt;/td&gt; &lt;td&gt;Only retrieve all orders of which the header is like header&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;globalSearch&#x3D;{searchTerm}&lt;/td&gt; &lt;td&gt;Search for orders related to searchTerm&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderByOrderNumber&#x3D;{ASC/DESC}&lt;/td&gt; &lt;td&gt;Order all orders after order number in ASC/DESC order&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderNumberGreater&#x3D;{number}&lt;/td&gt; &lt;td&gt;Only retrieve all orders of which the order number is bigger than number&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderNumberNumberSmaller&#x3D;{number}&lt;/td&gt; &lt;td&gt;Only retrieve all orders of which the order number is smaller than number&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;startAmount&#x3D;{amount}&lt;/td&gt; &lt;td&gt;Only retrieve all orders of which the (net/gross) sum is larger or equal amount&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;endAmount&#x3D;{amount}&lt;/td&gt; &lt;td&gt;Only retrieve all orders of which the (net/gross) sum is smaller or equal amount&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContractNoteFromOrder()**](OrderApi.md#createContractNoteFromOrder) | **POST** /Order/Factory/createContractNoteFromOrder | Create contract note from order |
| [**createOrder()**](OrderApi.md#createOrder) | **POST** /Order/Factory/saveOrder | Create a new order |
| [**createPackingListFromOrder()**](OrderApi.md#createPackingListFromOrder) | **POST** /Order/Factory/createPackingListFromOrder | Create packing list from order |
| [**deleteOrder()**](OrderApi.md#deleteOrder) | **DELETE** /Order/{orderId} | Deletes an order |
| [**getDiscounts()**](OrderApi.md#getDiscounts) | **GET** /Order/{orderId}/getDiscounts | Find order discounts |
| [**getOrderById()**](OrderApi.md#getOrderById) | **GET** /Order/{orderId} | Find order by ID |
| [**getOrderPositionsById()**](OrderApi.md#getOrderPositionsById) | **GET** /Order/{orderId}/getPositions | Find order positions |
| [**getOrders()**](OrderApi.md#getOrders) | **GET** /Order | Retrieve orders |
| [**getRelatedObjects()**](OrderApi.md#getRelatedObjects) | **GET** /Order/{orderId}/getRelatedObjects | Find related objects |
| [**orderGetPdf()**](OrderApi.md#orderGetPdf) | **GET** /Order/{orderId}/getPdf | Retrieve pdf document of an order |
| [**orderSendBy()**](OrderApi.md#orderSendBy) | **PUT** /Order/{orderId}/sendBy | Mark order as sent |
| [**sendorderViaEMail()**](OrderApi.md#sendorderViaEMail) | **POST** /Order/{orderId}/sendViaEmail | Send order via email |
| [**updateOrder()**](OrderApi.md#updateOrder) | **PUT** /Order/{orderId} | Update an existing order |


## `createContractNoteFromOrder()`

```php
createContractNoteFromOrder($order_id, $order_object_name, $model_create_packing_list_from_order): \Itsmind\Sevdesk\Model\UpdateOrder200Response
```

Create contract note from order

Create contract note from order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | the id of the order
$order_object_name = Order; // string | Model name, which is 'Order'
$model_create_packing_list_from_order = new \Itsmind\Sevdesk\Model\ModelCreatePackingListFromOrder(); // \Itsmind\Sevdesk\Model\ModelCreatePackingListFromOrder | Create contract note

try {
    $result = $apiInstance->createContractNoteFromOrder($order_id, $order_object_name, $model_create_packing_list_from_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createContractNoteFromOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| the id of the order | |
| **order_object_name** | **string**| Model name, which is &#39;Order&#39; | [default to &#39;Order&#39;] |
| **model_create_packing_list_from_order** | [**\Itsmind\Sevdesk\Model\ModelCreatePackingListFromOrder**](../Model/ModelCreatePackingListFromOrder.md)| Create contract note | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateOrder200Response**](../Model/UpdateOrder200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($save_order): \Itsmind\Sevdesk\Model\CreateOrder201Response
```

Create a new order

Creates an order to which positions can be added later.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$save_order = new \Itsmind\Sevdesk\Model\SaveOrder(); // \Itsmind\Sevdesk\Model\SaveOrder | Creation data. Please be aware, that you need to provide at least all required parameter      of the order model!

try {
    $result = $apiInstance->createOrder($save_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **save_order** | [**\Itsmind\Sevdesk\Model\SaveOrder**](../Model/SaveOrder.md)| Creation data. Please be aware, that you need to provide at least all required parameter      of the order model! | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateOrder201Response**](../Model/CreateOrder201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPackingListFromOrder()`

```php
createPackingListFromOrder($order_id, $order_object_name, $model_create_packing_list_from_order): \Itsmind\Sevdesk\Model\UpdateOrder200Response
```

Create packing list from order

Create packing list from order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | the id of the order
$order_object_name = Order; // string | Model name, which is 'Order'
$model_create_packing_list_from_order = new \Itsmind\Sevdesk\Model\ModelCreatePackingListFromOrder(); // \Itsmind\Sevdesk\Model\ModelCreatePackingListFromOrder | Create packing list

try {
    $result = $apiInstance->createPackingListFromOrder($order_id, $order_object_name, $model_create_packing_list_from_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createPackingListFromOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| the id of the order | |
| **order_object_name** | **string**| Model name, which is &#39;Order&#39; | [default to &#39;Order&#39;] |
| **model_create_packing_list_from_order** | [**\Itsmind\Sevdesk\Model\ModelCreatePackingListFromOrder**](../Model/ModelCreatePackingListFromOrder.md)| Create packing list | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateOrder200Response**](../Model/UpdateOrder200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrder()`

```php
deleteOrder($order_id): \Itsmind\Sevdesk\Model\DeleteCheckAccount200Response
```

Deletes an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Id of order resource to delete

try {
    $result = $apiInstance->deleteOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| Id of order resource to delete | |

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

## `getDiscounts()`

```php
getDiscounts($order_id, $limit, $offset, $embed, $count_all): \Itsmind\Sevdesk\Model\GetDiscounts200Response
```

Find order discounts

Returns all discounts of an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to return the positions
$limit = 56; // int | limits the number of entries returned
$offset = 56; // int | set the index where the returned entries start
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.
$count_all = True; // bool | If all objects should be counted

try {
    $result = $apiInstance->getDiscounts($order_id, $limit, $offset, $embed, $count_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getDiscounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to return the positions | |
| **limit** | **int**| limits the number of entries returned | [optional] |
| **offset** | **int**| set the index where the returned entries start | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetDiscounts200Response**](../Model/GetDiscounts200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderById()`

```php
getOrderById($order_id): \Itsmind\Sevdesk\Model\GetOrderById200Response
```

Find order by ID

Returns a single order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to return

try {
    $result = $apiInstance->getOrderById($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to return | |

### Return type

[**\Itsmind\Sevdesk\Model\GetOrderById200Response**](../Model/GetOrderById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderPositionsById()`

```php
getOrderPositionsById($order_id, $limit, $offset, $embed, $count_all): \Itsmind\Sevdesk\Model\GetOrderPositionsById200Response
```

Find order positions

Returns all positions of an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to return the positions
$limit = 56; // int | limits the number of entries returned
$offset = 56; // int | set the index where the returned entries start
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.
$count_all = True; // bool | If all objects should be counted

try {
    $result = $apiInstance->getOrderPositionsById($order_id, $limit, $offset, $embed, $count_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderPositionsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to return the positions | |
| **limit** | **int**| limits the number of entries returned | [optional] |
| **offset** | **int**| set the index where the returned entries start | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetOrderPositionsById200Response**](../Model/GetOrderPositionsById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($status, $order_number, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed): \Itsmind\Sevdesk\Model\GetOrders200Response
```

Retrieve orders

There are a multitude of parameter which can be used to filter. A few of them are attached but      for a complete list please check out <a href='#tag/Order/How-to-filter-for-certain-orders'>this</a> list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 56; // int | Status of the order
$order_number = 'order_number_example'; // string | Retrieve all orders with this order number
$start_date = 56; // int | Retrieve all orders with a date equal or higher
$end_date = 56; // int | Retrieve all orders with a date equal or lower
$contact_id = 56; // int | Retrieve all orders with this contact. Must be provided with contact[objectName]
$contact_object_name = 'contact_object_name_example'; // string | Only required if contact[id] was provided. 'Contact' should be used as value.
$count_all = True; // bool | If all objects should be counted
$offset = 56; // int | Which offset to start with
$limit = 56; // int | The max number of objects to return
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getOrders($status, $order_number, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **int**| Status of the order | [optional] |
| **order_number** | **string**| Retrieve all orders with this order number | [optional] |
| **start_date** | **int**| Retrieve all orders with a date equal or higher | [optional] |
| **end_date** | **int**| Retrieve all orders with a date equal or lower | [optional] |
| **contact_id** | **int**| Retrieve all orders with this contact. Must be provided with contact[objectName] | [optional] |
| **contact_object_name** | **string**| Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **limit** | **int**| The max number of objects to return | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetOrders200Response**](../Model/GetOrders200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRelatedObjects()`

```php
getRelatedObjects($order_id, $include_itself, $sort_by_type, $embed, $count_all, $offset, $limit): \Itsmind\Sevdesk\Model\GetOrderPositionsById200Response
```

Find related objects

Get related objects of a specified order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to return the positions
$include_itself = True; // bool | Define if the related objects include the order itself
$sort_by_type = True; // bool | Define if you want the related objects sorted by type
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.
$count_all = True; // bool | If all objects should be counted
$offset = 56; // int | Which offset to start with
$limit = 56; // int | The max number of objects to return

try {
    $result = $apiInstance->getRelatedObjects($order_id, $include_itself, $sort_by_type, $embed, $count_all, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRelatedObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to return the positions | |
| **include_itself** | **bool**| Define if the related objects include the order itself | [optional] |
| **sort_by_type** | **bool**| Define if you want the related objects sorted by type | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **limit** | **int**| The max number of objects to return | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetOrderPositionsById200Response**](../Model/GetOrderPositionsById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderGetPdf()`

```php
orderGetPdf($order_id, $download, $prevent_send_by): \Itsmind\Sevdesk\Model\OrderGetPdf200Response
```

Retrieve pdf document of an order

Retrieves the pdf document of an order with additional metadata and commit the order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order from which you want the pdf
$download = true; // bool | If u want to download the pdf of the order.
$prevent_send_by = true; // bool | Defines if u want to send the order.

try {
    $result = $apiInstance->orderGetPdf($order_id, $download, $prevent_send_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order from which you want the pdf | |
| **download** | **bool**| If u want to download the pdf of the order. | [optional] |
| **prevent_send_by** | **bool**| Defines if u want to send the order. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\OrderGetPdf200Response**](../Model/OrderGetPdf200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderSendBy()`

```php
orderSendBy($order_id, $order_send_by_request): \Itsmind\Sevdesk\Model\UpdateOrder200Response
```

Mark order as sent

Marks an order as sent by a chosen send type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to mark as sent
$order_send_by_request = new \Itsmind\Sevdesk\Model\OrderSendByRequest(); // \Itsmind\Sevdesk\Model\OrderSendByRequest | Specify the send type

try {
    $result = $apiInstance->orderSendBy($order_id, $order_send_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderSendBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to mark as sent | |
| **order_send_by_request** | [**\Itsmind\Sevdesk\Model\OrderSendByRequest**](../Model/OrderSendByRequest.md)| Specify the send type | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateOrder200Response**](../Model/UpdateOrder200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendorderViaEMail()`

```php
sendorderViaEMail($order_id, $sendorder_via_e_mail_request): \Itsmind\Sevdesk\Model\SendorderViaEMail201Response
```

Send order via email

This endpoint sends the specified order to a customer via email.<br>      This will automatically mark the order as sent.<br>      Please note, that in production an order is not allowed to be changed after this happened!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to be sent via email
$sendorder_via_e_mail_request = new \Itsmind\Sevdesk\Model\SendorderViaEMailRequest(); // \Itsmind\Sevdesk\Model\SendorderViaEMailRequest | Mail data

try {
    $result = $apiInstance->sendorderViaEMail($order_id, $sendorder_via_e_mail_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->sendorderViaEMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to be sent via email | |
| **sendorder_via_e_mail_request** | [**\Itsmind\Sevdesk\Model\SendorderViaEMailRequest**](../Model/SendorderViaEMailRequest.md)| Mail data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\SendorderViaEMail201Response**](../Model/SendorderViaEMail201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($order_id, $model_order_update): \Itsmind\Sevdesk\Model\UpdateOrder200Response
```

Update an existing order

Update an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of order to update
$model_order_update = new \Itsmind\Sevdesk\Model\ModelOrderUpdate(); // \Itsmind\Sevdesk\Model\ModelOrderUpdate | Update data

try {
    $result = $apiInstance->updateOrder($order_id, $model_order_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of order to update | |
| **model_order_update** | [**\Itsmind\Sevdesk\Model\ModelOrderUpdate**](../Model/ModelOrderUpdate.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateOrder200Response**](../Model/UpdateOrder200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
