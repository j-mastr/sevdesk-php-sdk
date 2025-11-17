# Itsmind\Sevdesk\ContactApi

# Purpose of contacts in sevdesk  Every time one of our sevdesk customers sells / buys an item or provides a service there is a end customer involved to which it is sold / from which it is bought or to which the service is provided.&lt;br&gt; These end-customers need to be tracked in sevdesk as our customers will need to link them to the invoices, orders, receipts and all other documents relevant for their bookkeeping which involve the end customer.  # Types of contacts  As our customers can either deal with individual persons or with whole organisations, we need to differentiate between these two types.&lt;br&gt; Therefore, every contact in sevdesk is either a &lt;b&gt;person&lt;/b&gt; or a &lt;b&gt;organisation&lt;/b&gt;.&lt;br&gt; At the moment, both share the same set of attributes but designating values to some might not make sense for both types.&lt;br&gt; In the next section, we will distinguish between the two and this will become obvious.&lt;br&gt; Furthermore, naturally, individuals can be part of organisations but organisations can not be part of individuals. Also more in the next section.&lt;br&gt; &lt;br&gt; &lt;b&gt;How do I know to which type a contact belongs?&lt;/b&gt;&lt;br&gt; &lt;br&gt; It is very important to note, that we currently don&#39;t have any attribute which shows to which type a contact belongs.&lt;br&gt; Instead, we separate them by the attributes &lt;b&gt;name&lt;/b&gt;, &lt;b&gt;surename&lt;/b&gt; and &lt;b&gt;familyname&lt;/b&gt;.&lt;br&gt; If you designate values to the attribute &lt;b&gt;surename&lt;/b&gt; OR &lt;b&gt;familyname&lt;/b&gt; the contact will be regarded as a individual person.&lt;br&gt; If you designate a value to &lt;b&gt;name&lt;/b&gt; it will be regarded as an organisation.&lt;br&gt;&lt;br&gt; &lt;b&gt;Contact Categories&lt;/b&gt;&lt;br&gt;&lt;br&gt; Additionally to the two main types of contacts, every contact belongs to one of the following categories: &lt;ul&gt; &lt;li&gt;Supplier (ID: 2)&lt;/li&gt; &lt;li&gt;Customer (ID: 3)&lt;/li&gt; &lt;li&gt;Partner (ID: 4)&lt;/li&gt; &lt;li&gt;Prospect Customer (ID: 28)&lt;/li&gt; &lt;/ul&gt;  # Attributes of a contact  Here is a table of all attributes of a contact.&lt;br&gt; Necessary attributes, which must not be left out, are marked red.&lt;br&gt; Attributes which are strongly recommended for valid bookkeeping are marked orange. &lt;table&gt; &lt;tr&gt; &lt;th&gt;Attribute&lt;/th&gt; &lt;th&gt;Contact Type&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;th&gt;Attribute Type&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;name&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Organisations&lt;/td&gt; &lt;td&gt; The name of an organisation &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;surename&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Individuals&lt;/td&gt; &lt;td&gt; The first name of an individual (yes, we know...) &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;familyname&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Individuals&lt;/td&gt; &lt;td&gt; The last name of an individual &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;name2&lt;/td&gt; &lt;td&gt;Individuals&lt;/td&gt; &lt;td&gt; The middle name (or name-suffix) of an individual &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;category&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Organisations, Individuals&lt;/td&gt; &lt;td&gt; The category of the contact&lt;br&gt; &lt;/td&gt; &lt;td&gt;Nested object (Category)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;defaultCashbackTime&lt;/td&gt; &lt;td&gt;Organisations, Individuals&lt;/td&gt; &lt;td&gt; Time frame in which a cashback is granted to the customer if he pays an invoice &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;defaultCashbackPercent&lt;/td&gt; &lt;td&gt;Organisations, Individuals&lt;/td&gt; &lt;td&gt; Percentage of which the price of an invoice is reduced if paid in above time frame &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;taxNumber&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Organisations, Individuals&lt;/td&gt; &lt;td&gt; Tax number of the contact. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;excemptVat&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Organisations, Individuals&lt;/td&gt; &lt;td&gt; Defines if the contact is free of vat &lt;/td&gt; &lt;td&gt;Boolean&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;defaultTimeToPay&lt;/td&gt; &lt;td&gt;Organisations, Individuals&lt;/td&gt; &lt;td&gt; The default time this end customer has to pay invoices &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;bankNumber&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Organisations, Individuals&lt;/td&gt; &lt;td&gt; The bank number of the contact &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;birthday&lt;/td&gt; &lt;td&gt;Individuals&lt;/td&gt; &lt;td&gt; The birthday &lt;/td&gt; &lt;td&gt;Unix-Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;vatNumber&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Organisations, Individuals&lt;/td&gt; &lt;td&gt; The vat number &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;defaultDiscountAmount&lt;/td&gt; &lt;td&gt;Organisations, Individuals&lt;/td&gt; &lt;td&gt; A default discount amount this contact gets &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;defaultDiscountPercentage&lt;/td&gt; &lt;td&gt;Organisations, Individuals&lt;/td&gt; &lt;td&gt; Define if the value in defaultDiscountAmount is regarded as a percentage. &lt;/td&gt; &lt;td&gt;Boolean&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;gender&lt;/td&gt; &lt;td&gt;Individuals&lt;/td&gt; &lt;td&gt; Gender (m,w, or your own definition) &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;academicTitle&lt;/td&gt; &lt;td&gt;Individuals&lt;/td&gt; &lt;td&gt; Academic title of the contact &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;description&lt;/td&gt; &lt;td&gt;Organisations, Individuals&lt;/td&gt; &lt;td&gt; A description for the contact &lt;/td&gt; &lt;td&gt;String (can contain some html)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;titel&lt;/td&gt; &lt;td&gt;Individuals&lt;/td&gt; &lt;td&gt; Position an individual holds in an organisation &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;parent&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Individuals&lt;/td&gt; &lt;td&gt; The organisation to which this individual belongs &lt;/td&gt; &lt;td&gt;Nested object (Contact)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;customerNumber&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Organisations, Individuals&lt;/td&gt; &lt;td&gt; The customer number of the contact. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;bankAccount&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Organisations, Individuals&lt;/td&gt; &lt;td&gt; The bank account number &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;  # The customer number  The customer number is not an attribute that must be supplied when creating a contact, however for most, if not all of our customers, a correct enumeration is the key to structured bookkeeping, which is why duplicate entries must be avoided.&lt;br&gt; For this reason, most of the time a manual assignment of numbers is not the best idea and we are happy to provide you two contact endpoints which will help out.&lt;br&gt;&lt;br&gt; The first GET request you can send will check if a customer number is still available.&lt;br&gt; All you need to provide in the query string is the customer number which should be checked. &lt;ul&gt; &lt;li&gt;ht&lt;span&gt;tps://my.sevdesk.de/api/v1/Contact/Mapper/checkCustomerNumberAvailability?customerNumber&#x3D;KD-1000&lt;/span&gt;&lt;/li&gt; &lt;/ul&gt; The second GET request you can send will check what the next customer number should be, so that a correct enumeration is kept.&lt;br&gt; This time, you only need to send the request to the endpoint. &lt;ul&gt; &lt;li&gt;ht&lt;span&gt;tps://my.sevdesk.de/api/v1/Contact/Factory/getNextCustomerNumber&lt;/span&gt;&lt;/li&gt; &lt;/ul&gt;  # How to filter for certain contacts  Often you don&#39;t want to retrieve all contacts in a sevdesk account or one specific contact of which you know the ID, but rather a list of contacts or a single contact with certain properties.&lt;br&gt; For this purpose we provide a bunch of filters that you can attach to your GET query string for nearly all endpoints.&lt;br&gt; Here are all filters applicable to a contact query. &lt;table&gt; &lt;tr&gt; &lt;th&gt;Filter&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;depth&#x3D;1&lt;/td&gt; &lt;td&gt; Retrieve organisations AND persons.&lt;br&gt; This attribute is not active as default, so if you don&#39;t specify it as true, you will only get organisations. &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;category[id]&#x3D;{&lt;span style&#x3D;&#39;color:red&#39;&gt;id&lt;/span&gt;}&amp;category[objectName]&#x3D;Category&lt;/td&gt; &lt;td&gt;Only retrieve all contacts with &lt;span style&#x3D;&#39;color:red&#39;&gt;id&lt;/span&gt; as a category&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;city&#x3D;{&lt;span style&#x3D;&#39;color:red&#39;&gt;cityName&lt;/span&gt;}&lt;/td&gt; &lt;td&gt;Only retrieve all contacts with &lt;span style&#x3D;&#39;color:red&#39;&gt;cityName&lt;/span&gt; as a city&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;tags[x][id]&#x3D;{&lt;span style&#x3D;&#39;color:red&#39;&gt;id&lt;/span&gt;}&amp;tags[x][objectName]&#x3D;Tag&lt;/td&gt; &lt;td&gt;Only retrieve all contacts with &lt;span style&#x3D;&#39;color:red&#39;&gt;id&lt;/span&gt; as a tag.&lt;br&gt; You can specify multiple tags by adding more array entries. &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;customerNumber&#x3D;{&lt;span style&#x3D;&#39;color:red&#39;&gt;number&lt;/span&gt;}&lt;/td&gt; &lt;td&gt;Only retrieve all contacts with &lt;span style&#x3D;&#39;color:red&#39;&gt;number&lt;/span&gt; as a customer number&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;parent[id]&#x3D;{&lt;span style&#x3D;&#39;color:red&#39;&gt;id&lt;/span&gt;}&amp;parent[objectName]&#x3D;Contact&lt;/td&gt; &lt;td&gt;Only retrieve all contacts with &lt;span style&#x3D;&#39;color:red&#39;&gt;id&lt;/span&gt; as a parent organisation&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;name&#x3D;{&lt;span style&#x3D;&#39;color:red&#39;&gt;name&lt;/span&gt;}&lt;/td&gt; &lt;td&gt;Only retrieve all contacts with &lt;span style&#x3D;&#39;color:red&#39;&gt;name&lt;/span&gt; as a name, surename or familyname&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;zip&#x3D;{&lt;span style&#x3D;&#39;color:red&#39;&gt;zipCode&lt;/span&gt;}&lt;/td&gt; &lt;td&gt;Only retrieve all contacts with &lt;span style&#x3D;&#39;color:red&#39;&gt;zipCode&lt;/span&gt; as a zip&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;country[id]&#x3D;{&lt;span style&#x3D;&#39;color:red&#39;&gt;id&lt;/span&gt;}&amp;country[objectName]&#x3D;StaticCountry&lt;/td&gt; &lt;td&gt;Only retrieve all contacts with &lt;span style&#x3D;&#39;color:red&#39;&gt;id&lt;/span&gt; as a country&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;createBefore&#x3D;{&lt;span style&#x3D;&#39;color:red&#39;&gt;timestamp&lt;/span&gt;}&lt;/td&gt; &lt;td&gt;Only retrieve all contacts created before &lt;span style&#x3D;&#39;color:red&#39;&gt;timestamp&lt;/span&gt;&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;createAfter&#x3D;{&lt;span style&#x3D;&#39;color:red&#39;&gt;timestamp&lt;/span&gt;}&lt;/td&gt; &lt;td&gt;Only retrieve all contacts created after &lt;span style&#x3D;&#39;color:red&#39;&gt;timestamp&lt;/span&gt;&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;updateBefore&#x3D;{&lt;span style&#x3D;&#39;color:red&#39;&gt;timestamp&lt;/span&gt;}&lt;/td&gt; &lt;td&gt;Only retrieve all contacts updated last before &lt;span style&#x3D;&#39;color:red&#39;&gt;timestamp&lt;/span&gt;&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;updateAfter&#x3D;{&lt;span style&#x3D;&#39;color:red&#39;&gt;timestamp&lt;/span&gt;}&lt;/td&gt; &lt;td&gt;Only retrieve all contacts updated last after &lt;span style&#x3D;&#39;color:red&#39;&gt;timestamp&lt;/span&gt;&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderByCustomerNumber&#x3D;{&lt;span style&#x3D;&#39;color:red&#39;&gt;ASC/DESC&lt;/span&gt;}&lt;/td&gt; &lt;td&gt;Order all contacts after customer number in &lt;span style&#x3D;&#39;color:red&#39;&gt;ASC/DESC&lt;/span&gt; order&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;

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
