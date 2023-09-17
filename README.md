# itsmind/sevdesk-php-client

> This unofficial package provides an SDK to access the [sevDesk API](https://api.sevdesk.de/) using PHP. It is auto-generated using the [OpenAPI-Generator](https://openapi-generator.tech), with slight adjustments to the original [OpenAPI specification](https://api.sevdesk.de/OpenAPI/Index/output.yaml).
>
> For support regarding the API, please contact the sevDesk support directly.

<b>Contact:</b> To contact our support click <a href='https://landing.sevdesk.de/service-support-center-technik'>here</a><br><br>

# General information

Welcome to our API!<br>
sevDesk offers you the possibility of retrieving data using an interface, namely the sevDesk API, and making changes without having to use the web UI. The sevDesk interface is a REST-Full API. All sevDesk data and functions that are used in the web UI can also be controlled through the API.

# Cross-Origin Resource Sharing

This API features Cross-Origin Resource Sharing (CORS).<br>
It enables cross-domain communication from the browser.<br>
All responses have a wildcard same-origin which makes them completely public and accessible to everyone, including any code on any site.

# Embedding resources

When retrieving resources by using this API, you might encounter nested resources in the resources you requested.<br>
For example, an invoice always contains a contact, of which you can see the ID and the object name.<br>
This API gives you the possibility to embed these resources completely into the resources you originally requested.<br>
Taking our invoice example, this would mean, that you would not only see the ID and object name of a contact, but rather the complete contact resource.

To embed resources, all you need to do is to add the query parameter 'embed' to your GET request.<br>
As values, you can provide the name of the nested resource.<br>
Multiple nested resources are also possible by providing multiple names, separated by a comma.

# Authentication and Authorization

The sevDesk API uses a token authentication to authorize calls. For this purpose every sevDesk administrator has one API token, which is a <b>hexadecimal string</b> containing <b>32 characters</b>. The following clip shows where you can find the API token if this is your first time with our API.<br><br> <video src='OpenAPI/img/findingTheApiToken.mp4' controls width='640' height='360'> Ihr Browser kann dieses Video nicht wiedergeben.<br/> Dieses Video zeigt wie sie Ihr sevDesk API Token finden. </video> <br> The token will be needed in every request that you want to send and needs to be attached to the request url as a <b>Query Parameter</b><br> or provided as a value of an <b>Authorization Header</b>.<br> For security reasons, we suggest putting the API Token in the Authorization Header and not in the query string.<br> However, in the request examples in this documentation, we will keep it in the query string, as it is easier for you to copy them and try them yourself.<br> The following url is an example that shows where your token needs to be placed as a query parameter.<br> In this case, we used some random API token. <ul> <li><span>ht</span>tps://my.sevdesk.de/api/v1/Contact?token=<span style='color:red'>b7794de0085f5cd00560f160f290af38</span></li> </ul> The next example shows the token in the Authorization Header. <ul> <li>\"Authorization\" :<span style='color:red'>\"b7794de0085f5cd00560f160f290af38\"</span></li> </ul> The api tokens have an infinite lifetime and, in other words, exist as long as the sevDesk user exists.<br> For this reason, the user should <b>NEVER</b> be deleted.<br> If really necessary, it is advisable to save the api token as we will <b>NOT</b> be able to retrieve it afterwards!<br> It is also possible to generate a new API token, for example, if you want to prevent the usage of your sevDesk account by other people who got your current API token.<br> To achieve this, you just need to click on the \"generate new\" symbol to the right of your token and confirm it with your password.

# API News

To never miss API news and updates again, subscribe to our <b>free API newsletter</b> and get all relevant information to keep your sevDesk software running smoothly. To subscribe, simply click <a href = 'https://landing.sevdesk.de/api-newsletter'><b>here</b></a> and confirm the email address to which we may send all updates relevant to you.

# API Requests

In our case, REST API requests need to be build by combining the following components. <table> <tr> <th><b>Component</b></th> <th><b>Description</b></th> </tr> <tr> <td>HTTP-Methods</td> <td> <ul> <li>GET (retrieve a resource)</li> <li>POST (create a resource)</li> <li>PUT (update a resource)</li> <li>DELETE (delete a resource)</li> </ul> </td> </tr> <tr> <td>URL of the API</td> <td><span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span></td> </tr> <tr> <td>URI of the resource</td> <td>The resource to query.<br>For example contacts in sevDesk:<br><br> <span style='color:red'>/Contact</span><br><br> Which will result in the following complete URL:<br><br> <span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span> </td> </tr> <tr> <td>Query parameters</td> <td>Are attached by using the connectives <b>?</b> and <b>&</b> in the URL.<br></td> </tr> <tr> <td>Request headers</td> <td>Typical request headers are for example:<br> <div> <br> <ul> <li>Content-type</li> <li>Authorization</li> <li>Accept-Encoding</li> <li>User-Agent</li> <li>...</li> </ul> </div> </td> </tr> <tr> <td>Request body</td> <td>Mostly required in POST and PUT requests.<br> Often the request body contains json, in our case, it also accepts url-encoded data. </td> </tr> </table><br> <span style='color:red'>Note</span>: please pass a meaningful entry at the header \"User-Agent\". If the \"User-Agent\" is set meaningfully, we can offer better support in case of queries from customers.<br> An example how such a \"User-Agent\" can look like: \"Integration-name by abc\". <br><br> This is a sample request for retrieving existing contacts in sevDesk using curl:<br><br> <img src='OpenAPI/img/GETRequest.PNG' alt='Get Request' height='150'><br><br> As you can see, the request contains all the components mentioned above.<br> It's HTTP method is GET, it has a correct endpoint (<span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span>), query parameters like <b>token</b> and additional <b>header</b> information!<br><br> <b>Query Parameters</b><br><br> As you might have seen in the sample request above, there are several other parameters besides \"token\", located in the url.<br> Those are mostly optional but prove to be very useful for a lot of requests as they can limit, extend, sort or filter the data you will get as a response.<br><br> These are the three most used query parameter for the sevDesk API. <table> <tr> <th><b>Parameter</b></th> <th><b>Description</b></th> </tr> <tr> <td>limit</td> <td>Limits the number of entries that are returned.<br> Most useful in GET requests which will most likely deliver big sets of data like country or currency lists.<br> In this case, you can bypass the default limitation on returned entries by providing a high number. </td> </tr> <tr> <td>offset</td> <td>Specifies a certain offset for the data that will be returned.<br> As an example, you can specify \"offset=2\" if you want all entries except for the first two.</td> </tr> <tr> <td>embed</td> <td>Will extend some of the returned data.<br> A brief example can be found below.</td> </tr> </table> This is an example for the usage of the embed parameter.<br> The following first request will return all company contact entries in sevDesk up to a limit of 100 without any additional information and no offset.<br><br> <img src='OpenAPI/img/ContactQueryWithoutEmbed.PNG' width='900' height='850'><br><br> Now have a look at the category attribute located in the response.<br> Naturally, it just contains the id and the object name of the object but no further information.<br> We will now use the parameter embed with the value \"category\".<br><br> <img src='OpenAPI/img/ContactQueryWithEmbed.PNG' width='900' height='850'><br><br> As you can see, the category object is now extended and shows all the attributes and their corresponding values.<br><br> There are lot of other query parameters that can be used to filter the returned data for objects that match a certain pattern, however, those will not be mentioned here and instead can be found at the detail documentation of the most used API endpoints like contact, invoice or voucher.<br><br> <b>Request Headers</b><br><br> The HTTP request (response) headers allow the client as well as the server to pass additional information with the request.<br> They transfer the parameters and arguments which are important for transmitting data over HTTP.<br> Three headers which are useful / necessary when using the sevDesk API are \"Authorization, \"Accept\" and \"Content-type\".<br> Underneath is a brief description of why and how they should be used.<br><br> <b>Authorization</b><br><br> Can be used if you want to provide your API token in the header instead of having it in the url. <ul> <li>Authorization:<span style='color:red'>yourApiToken</span></li> </ul> <b>Accept</b><br><br> Specifies the format of the response.<br> Required for operations with a response body. <ul> <li>Accept:application/<span style='color:red'>format</span> </li> </ul> In our case, <code><span style='color:red'>format</span></code> could be replaced with <code>json</code> or <code>xml</code><br><br> <b>Content-type</b><br><br> Specifies which format is used in the request.<br> Is required for operations with a request body. <ul> <li>Content-type:application/<span style='color:red'>format</span></li> </ul> In our case,<code><span style='color:red'>format</span></code>could be replaced with <code>json</code> or <code>x-www-form-urlencoded</code> <br><br><b>API Responses</b><br><br> HTTP status codes<br> When calling the sevDesk API it is very likely that you will get a HTTP status code in the response.<br> Some API calls will also return JSON response bodies which will contain information about the resource.<br> Each status code which is returned will either be a <b>success</b> code or an <b>error</b> code.<br><br> Success codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>200 OK</code></td> <td>The request was successful</td> </tr> <tr> <td><code>201 Created</code></td> <td>Most likely to be found in the response of a <b>POST</b> request.<br> This code indicates that the desired resource was successfully created.</td> </tr> </table> <br>Error codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>400 Bad request</code></td> <td>The request you sent is most likely syntactically incorrect.<br> You should check if the parameters in the request body or the url are correct.</td> </tr> <tr> <td><code>401 Unauthorized</code></td> <td>The authentication failed.<br> Most likely caused by a missing or wrong API token.</td> </tr> <tr> <td><code>403 Forbidden</code></td> <td>You do not have the permission the access the resource which is requested.</td> </tr> <tr> <td><code>404 Not found</code></td> <td>The resource you specified does not exist.</td> </tr> <tr> <td><code>500 Internal server error</code></td> <td>An internal server error has occurred.<br> Normally this means that something went wrong on our side.<br> However, sometimes this error will appear if we missed to catch an error which is normally a 400 status code! </td> </tr> </table>

# Your First Request

After reading the introduction to our API, you should now be able to make your first call.<br> For testing our API, we would always recommend to create a trial account for sevDesk to prevent unwanted changes to your main account.<br> A trial account will be in the highest tariff (materials management), so every sevDesk function can be tested! <br><br>To start testing we would recommend one of the following tools: <ul> <li><a href='https://www.getpostman.com/'>Postman</a></li> <li><a href='https://curl.haxx.se/download.html'>cURL</a></li> </ul> This example will illustrate your first request, which is creating a new Contact in sevDesk.<br> <ol> <li>Download <a href='https://www.getpostman.com/'><b>Postman</b></a> for your desired system and start the application</li> <li>Enter <span><b>ht</span>tps://my.sevdesk.de/api/v1/Contact</b> as the url</li> <li>Use the connective <b>?</b> to append <b>token=</b> to the end of the url, or create an authorization header. Insert your API token as the value</li> <li>For this test, select <b>POST</b> as the HTTP method</li> <li>Go to <b>Headers</b> and enter the key-value pair <b>Content-type</b> + <b>application/x-www-form-urlencoded</b><br> As an alternative, you can just go to <b>Body</b> and select <b>x-www-form-urlencoded</b></li> <li>Now go to <b>Body</b> (if you are not there yet) and enter the key-value pairs as shown in the following picture<br><br> <img src='OpenAPI/img/FirstRequestPostman.PNG' width='900'><br><br></li> <li>Click on <b>Send</b>. Your response should now look like this:<br><br> <img src='OpenAPI/img/FirstRequestResponse.PNG' width='900'></li> </ol> As you can see, a successful response in this case returns a JSON-formatted response body containing the contact you just created.<br> For keeping it simple, this was only a minimal example of creating a contact.<br> There are however numerous combinations of parameters that you can provide which add information to your contact.

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/itsmindcom/sevdesk-php-client.git"
    }
  ],
  "require": {
    "itsmindcom/sevdesk-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/itsmind/sevdesk-php-client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\AccountingContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_accounting_contact = new \Itsmind\Sevdesk\Model\ModelAccountingContact(); // \Itsmind\Sevdesk\Model\ModelAccountingContact | Creation data

try {
    $result = $apiInstance->createAccountingContact($model_accounting_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingContactApi->createAccountingContact: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://my.sevdesk.de/api/v1*

| Class                        | Method                                                                                                      | HTTP request                                                                       | Description                                     |
| ---------------------------- | ----------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ----------------------------------------------- |
| _AccountingContactApi_       | [**createAccountingContact**](docs/Api/AccountingContactApi.md#createaccountingcontact)                     | **POST** /AccountingContact                                                        | Create a new accounting contact                 |
| _AccountingContactApi_       | [**deleteAccountingContact**](docs/Api/AccountingContactApi.md#deleteaccountingcontact)                     | **DELETE** /AccountingContact/{accountingContactId}                                | Deletes an accounting contact                   |
| _AccountingContactApi_       | [**getAccountingContact**](docs/Api/AccountingContactApi.md#getaccountingcontact)                           | **GET** /AccountingContact                                                         | Retrieve accounting contact                     |
| _AccountingContactApi_       | [**getAccountingContactById**](docs/Api/AccountingContactApi.md#getaccountingcontactbyid)                   | **GET** /AccountingContact/{accountingContactId}                                   | Find accounting contact by ID                   |
| _AccountingContactApi_       | [**updateAccountingContact**](docs/Api/AccountingContactApi.md#updateaccountingcontact)                     | **PUT** /AccountingContact/{accountingContactId}                                   | Update an existing accounting contact           |
| _CheckAccountApi_            | [**createCheckAccount**](docs/Api/CheckAccountApi.md#createcheckaccount)                                    | **POST** /CheckAccount                                                             | Create a new check account                      |
| _CheckAccountApi_            | [**deleteCheckAccount**](docs/Api/CheckAccountApi.md#deletecheckaccount)                                    | **DELETE** /CheckAccount/{checkAccountId}                                          | Deletes a check account                         |
| _CheckAccountApi_            | [**getBalanceAtDate**](docs/Api/CheckAccountApi.md#getbalanceatdate)                                        | **GET** /CheckAccount/{checkAccountId}/getBalanceAtDate                            | Get the balance at a given date                 |
| _CheckAccountApi_            | [**getCheckAccountById**](docs/Api/CheckAccountApi.md#getcheckaccountbyid)                                  | **GET** /CheckAccount/{checkAccountId}                                             | Find check account by ID                        |
| _CheckAccountApi_            | [**getCheckAccounts**](docs/Api/CheckAccountApi.md#getcheckaccounts)                                        | **GET** /CheckAccount                                                              | Retrieve check accounts                         |
| _CheckAccountApi_            | [**updateCheckAccount**](docs/Api/CheckAccountApi.md#updatecheckaccount)                                    | **PUT** /CheckAccount/{checkAccountId}                                             | Update an existing check account                |
| _CheckAccountTransactionApi_ | [**createTransaction**](docs/Api/CheckAccountTransactionApi.md#createtransaction)                           | **POST** /CheckAccountTransaction                                                  | Create a new transaction                        |
| _CheckAccountTransactionApi_ | [**deleteCheckAccountTransaction**](docs/Api/CheckAccountTransactionApi.md#deletecheckaccounttransaction)   | **DELETE** /CheckAccountTransaction/{checkAccountTransactionId}                    | Deletes a check account transaction             |
| _CheckAccountTransactionApi_ | [**getCheckAccountTransactionById**](docs/Api/CheckAccountTransactionApi.md#getcheckaccounttransactionbyid) | **GET** /CheckAccountTransaction/{checkAccountTransactionId}                       | Find check account transaction by ID            |
| _CheckAccountTransactionApi_ | [**getTransactions**](docs/Api/CheckAccountTransactionApi.md#gettransactions)                               | **GET** /CheckAccountTransaction                                                   | Retrieve transactions                           |
| _CheckAccountTransactionApi_ | [**updateCheckAccountTransaction**](docs/Api/CheckAccountTransactionApi.md#updatecheckaccounttransaction)   | **PUT** /CheckAccountTransaction/{checkAccountTransactionId}                       | Update an existing check account transaction    |
| _CommunicationWayApi_        | [**createCommunicationWay**](docs/Api/CommunicationWayApi.md#createcommunicationway)                        | **POST** /CommunicationWay                                                         | Create a new contact communication way          |
| _CommunicationWayApi_        | [**deleteCommunicationWay**](docs/Api/CommunicationWayApi.md#deletecommunicationway)                        | **DELETE** /CommunicationWay/{communicationWayId}                                  | Deletes a communication way                     |
| _CommunicationWayApi_        | [**getCommunicationWayById**](docs/Api/CommunicationWayApi.md#getcommunicationwaybyid)                      | **GET** /CommunicationWay/{communicationWayId}                                     | Find communication way by ID                    |
| _CommunicationWayApi_        | [**getCommunicationWayKeys**](docs/Api/CommunicationWayApi.md#getcommunicationwaykeys)                      | **GET** /CommunicationWayKey                                                       | Retrieve communication way keys                 |
| _CommunicationWayApi_        | [**getCommunicationWays**](docs/Api/CommunicationWayApi.md#getcommunicationways)                            | **GET** /CommunicationWay                                                          | Retrieve communication ways                     |
| _CommunicationWayApi_        | [**updateCommunicationWay**](docs/Api/CommunicationWayApi.md#updatecommunicationway)                        | **PUT** /CommunicationWay/{communicationWayId}                                     | Update a existing communication way             |
| _ContactApi_                 | [**contactCustomerNumberAvailabilityCheck**](docs/Api/ContactApi.md#contactcustomernumberavailabilitycheck) | **GET** /Contact/Mapper/checkCustomerNumberAvailability                            | Check if a customer number is available         |
| _ContactApi_                 | [**createContact**](docs/Api/ContactApi.md#createcontact)                                                   | **POST** /Contact                                                                  | Create a new contact                            |
| _ContactApi_                 | [**deleteContact**](docs/Api/ContactApi.md#deletecontact)                                                   | **DELETE** /Contact/{contactId}                                                    | Deletes a contact                               |
| _ContactApi_                 | [**findContactsByCustomFieldValue**](docs/Api/ContactApi.md#findcontactsbycustomfieldvalue)                 | **GET** /Contact/Factory/findContactsByCustomFieldValue                            | Find contacts by custom field value             |
| _ContactApi_                 | [**getContactById**](docs/Api/ContactApi.md#getcontactbyid)                                                 | **GET** /Contact/{contactId}                                                       | Find contact by ID                              |
| _ContactApi_                 | [**getContactTabsItemCountById**](docs/Api/ContactApi.md#getcontacttabsitemcountbyid)                       | **GET** /Contact/{contactId}/getTabsItemCount                                      | Get number of all items                         |
| _ContactApi_                 | [**getContacts**](docs/Api/ContactApi.md#getcontacts)                                                       | **GET** /Contact                                                                   | Retrieve contacts                               |
| _ContactApi_                 | [**getNextCustomerNumber**](docs/Api/ContactApi.md#getnextcustomernumber)                                   | **GET** /Contact/Factory/getNextCustomerNumber                                     | Get next free customer number                   |
| _ContactApi_                 | [**updateContact**](docs/Api/ContactApi.md#updatecontact)                                                   | **PUT** /Contact/{contactId}                                                       | Update a existing contact                       |
| _ContactAddressApi_          | [**contactAddressId**](docs/Api/ContactAddressApi.md#contactaddressid)                                      | **GET** /ContactAddress/{contactAddressId}                                         | Find contact address by ID                      |
| _ContactAddressApi_          | [**createContactAddress**](docs/Api/ContactAddressApi.md#createcontactaddress)                              | **POST** /ContactAddress                                                           | Create a new contact address                    |
| _ContactAddressApi_          | [**deleteContactAddress**](docs/Api/ContactAddressApi.md#deletecontactaddress)                              | **DELETE** /ContactAddress/{contactAddressId}                                      | Deletes a contact address                       |
| _ContactAddressApi_          | [**getContactAddresses**](docs/Api/ContactAddressApi.md#getcontactaddresses)                                | **GET** /ContactAddress                                                            | Retrieve contact addresses                      |
| _ContactAddressApi_          | [**updateContactAddress**](docs/Api/ContactAddressApi.md#updatecontactaddress)                              | **PUT** /ContactAddress/{contactAddressId}                                         | update a existing contact address               |
| _ContactFieldApi_            | [**createContactField**](docs/Api/ContactFieldApi.md#createcontactfield)                                    | **POST** /ContactCustomField                                                       | Create contact field                            |
| _ContactFieldApi_            | [**createContactFieldSetting**](docs/Api/ContactFieldApi.md#createcontactfieldsetting)                      | **POST** /ContactCustomFieldSetting                                                | Create contact field setting                    |
| _ContactFieldApi_            | [**deleteContactCustomFieldId**](docs/Api/ContactFieldApi.md#deletecontactcustomfieldid)                    | **DELETE** /ContactCustomField/{contactCustomFieldId}                              | delete a contact field                          |
| _ContactFieldApi_            | [**deleteContactFieldSetting**](docs/Api/ContactFieldApi.md#deletecontactfieldsetting)                      | **DELETE** /ContactCustomFieldSetting/{contactCustomFieldSettingId}                | Deletes a contact field setting                 |
| _ContactFieldApi_            | [**getContactFieldSettingById**](docs/Api/ContactFieldApi.md#getcontactfieldsettingbyid)                    | **GET** /ContactCustomFieldSetting/{contactCustomFieldSettingId}                   | Find contact field setting by ID                |
| _ContactFieldApi_            | [**getContactFieldSettings**](docs/Api/ContactFieldApi.md#getcontactfieldsettings)                          | **GET** /ContactCustomFieldSetting                                                 | Retrieve contact field settings                 |
| _ContactFieldApi_            | [**getContactFields**](docs/Api/ContactFieldApi.md#getcontactfields)                                        | **GET** /ContactCustomField                                                        | Retrieve contact fields                         |
| _ContactFieldApi_            | [**getContactFieldsById**](docs/Api/ContactFieldApi.md#getcontactfieldsbyid)                                | **GET** /ContactCustomField/{contactCustomFieldId}                                 | Retrieve contact fields                         |
| _ContactFieldApi_            | [**getPlaceholder**](docs/Api/ContactFieldApi.md#getplaceholder)                                            | **GET** /Textparser/fetchDictionaryEntriesByType                                   | Retrieve Placeholders                           |
| _ContactFieldApi_            | [**getReferenceCount**](docs/Api/ContactFieldApi.md#getreferencecount)                                      | **GET** /ContactCustomFieldSetting/{contactCustomFieldSettingId}/getReferenceCount | Receive count reference                         |
| _ContactFieldApi_            | [**updateContactFieldSetting**](docs/Api/ContactFieldApi.md#updatecontactfieldsetting)                      | **PUT** /ContactCustomFieldSetting/{contactCustomFieldSettingId}                   | Update contact field setting                    |
| _ContactFieldApi_            | [**updateContactfield**](docs/Api/ContactFieldApi.md#updatecontactfield)                                    | **PUT** /ContactCustomField/{contactCustomFieldId}                                 | Update a contact field                          |
| _CreditNoteApi_              | [**bookCreditNote**](docs/Api/CreditNoteApi.md#bookcreditnote)                                              | **PUT** /CreditNote/{creditNoteId}/bookAmount                                      | Book a credit note                              |
| _CreditNoteApi_              | [**createcreditNote**](docs/Api/CreditNoteApi.md#createcreditnote)                                          | **POST** /CreditNote/Factory/saveCreditNote                                        | Create a new creditNote                         |
| _CreditNoteApi_              | [**creditNoteGetPdf**](docs/Api/CreditNoteApi.md#creditnotegetpdf)                                          | **GET** /CreditNote/{creditNoteId}/getPdf                                          | Retrieve pdf document of a credit note          |
| _CreditNoteApi_              | [**creditNoteSendBy**](docs/Api/CreditNoteApi.md#creditnotesendby)                                          | **PUT** /CreditNote/{creditNoteId}/sendBy                                          | Mark credit note as sent                        |
| _CreditNoteApi_              | [**deletecreditNote**](docs/Api/CreditNoteApi.md#deletecreditnote)                                          | **DELETE** /creditNote/{creditNoteId}                                              | Deletes an creditNote                           |
| _CreditNoteApi_              | [**getCreditNotes**](docs/Api/CreditNoteApi.md#getcreditnotes)                                              | **GET** /CreditNote                                                                | Retrieve CreditNote                             |
| _CreditNoteApi_              | [**getcreditNoteById**](docs/Api/CreditNoteApi.md#getcreditnotebyid)                                        | **GET** /creditNote/{creditNoteId}                                                 | Find creditNote by ID                           |
| _CreditNoteApi_              | [**sendCreditNoteByPrinting**](docs/Api/CreditNoteApi.md#sendcreditnotebyprinting)                          | **GET** /creditNote/{creditNoteId}/sendByWithRender                                | Send credit note by printing                    |
| _CreditNoteApi_              | [**sendCreditNoteViaEMail**](docs/Api/CreditNoteApi.md#sendcreditnoteviaemail)                              | **POST** /CreditNote/{creditNoteId}/sendViaEmail                                   | Send credit note via email                      |
| _CreditNoteApi_              | [**updatecreditNote**](docs/Api/CreditNoteApi.md#updatecreditnote)                                          | **PUT** /creditNote/{creditNoteId}                                                 | Update an existing creditNote                   |
| _CreditNotePosApi_           | [**getcreditNotePositions**](docs/Api/CreditNotePosApi.md#getcreditnotepositions)                           | **GET** /creditNotePos                                                             | Retrieve creditNote positions                   |
| _DocumentApi_                | [**getDocuments**](docs/Api/DocumentApi.md#getdocuments)                                                    | **GET** /Document                                                                  | Retrieve documents                              |
| _ExportApi_                  | [**exportContact**](docs/Api/ExportApi.md#exportcontact)                                                    | **GET** /Export/contactListCsv                                                     | Export contact                                  |
| _ExportApi_                  | [**exportCreditNote**](docs/Api/ExportApi.md#exportcreditnote)                                              | **GET** /Export/creditNoteCsv                                                      | Export creditNote                               |
| _ExportApi_                  | [**exportDatev**](docs/Api/ExportApi.md#exportdatev)                                                        | **GET** /Export/datevCSV                                                           | Export datev                                    |
| _ExportApi_                  | [**exportInvoice**](docs/Api/ExportApi.md#exportinvoice)                                                    | **GET** /Export/invoiceCsv                                                         | Export invoice                                  |
| _ExportApi_                  | [**exportInvoiceZip**](docs/Api/ExportApi.md#exportinvoicezip)                                              | **GET** /Export/invoiceZip                                                         | Export Invoice as zip                           |
| _ExportApi_                  | [**exportTransactions**](docs/Api/ExportApi.md#exporttransactions)                                          | **GET** /Export/transactionsCsv                                                    | Export transaction                              |
| _ExportApi_                  | [**exportVoucher**](docs/Api/ExportApi.md#exportvoucher)                                                    | **GET** /Export/voucherListCsv                                                     | Export voucher as zip                           |
| _ExportApi_                  | [**exportVoucherZip**](docs/Api/ExportApi.md#exportvoucherzip)                                              | **GET** /Export/voucherZip                                                         | Export voucher zip                              |
| _InvoiceApi_                 | [**bookInvoice**](docs/Api/InvoiceApi.md#bookinvoice)                                                       | **PUT** /Invoice/{invoiceId}/bookAmount                                            | Book an invoice                                 |
| _InvoiceApi_                 | [**cancelInvoice**](docs/Api/InvoiceApi.md#cancelinvoice)                                                   | **POST** /Invoice/{invoiceId}/cancelInvoice                                        | Cancel an invoice / Create cancellation invoice |
| _InvoiceApi_                 | [**createInvoiceByFactory**](docs/Api/InvoiceApi.md#createinvoicebyfactory)                                 | **POST** /Invoice/Factory/saveInvoice                                              | Create a new invoice                            |
| _InvoiceApi_                 | [**createInvoiceFromOrder**](docs/Api/InvoiceApi.md#createinvoicefromorder)                                 | **POST** /Invoice/Factory/createInvoiceFromOrder                                   | Create invoice from order                       |
| _InvoiceApi_                 | [**createInvoiceReminder**](docs/Api/InvoiceApi.md#createinvoicereminder)                                   | **POST** /Invoice/Factory/createInvoiceReminder                                    | Create invoice reminder                         |
| _InvoiceApi_                 | [**getInvoiceById**](docs/Api/InvoiceApi.md#getinvoicebyid)                                                 | **GET** /Invoice/{invoiceId}                                                       | Find invoice by ID                              |
| _InvoiceApi_                 | [**getInvoicePositionsById**](docs/Api/InvoiceApi.md#getinvoicepositionsbyid)                               | **GET** /Invoice/{invoiceId}/getPositions                                          | Find invoice positions                          |
| _InvoiceApi_                 | [**getInvoices**](docs/Api/InvoiceApi.md#getinvoices)                                                       | **GET** /Invoice                                                                   | Retrieve invoices                               |
| _InvoiceApi_                 | [**getIsInvoicePartiallyPaid**](docs/Api/InvoiceApi.md#getisinvoicepartiallypaid)                           | **GET** /Invoice/{invoiceId}/getIsPartiallyPaid                                    | Check if an invoice is already partially paid   |
| _InvoiceApi_                 | [**getLastDunning**](docs/Api/InvoiceApi.md#getlastdunning)                                                 | **GET** /Invoice/{invoiceId}/getLastDunning                                        | Get the last dunning of an invoice              |
| _InvoiceApi_                 | [**getOpenInvoiceReminderDebit**](docs/Api/InvoiceApi.md#getopeninvoicereminderdebit)                       | **GET** /Invoice/Factory/getOpenInvoiceReminderDebit                               | Get the oben reminder debit for an invoice      |
| _InvoiceApi_                 | [**invoiceGetPdf**](docs/Api/InvoiceApi.md#invoicegetpdf)                                                   | **GET** /Invoice/{invoiceId}/getPdf                                                | Retrieve pdf document of an invoice             |
| _InvoiceApi_                 | [**invoiceRender**](docs/Api/InvoiceApi.md#invoicerender)                                                   | **POST** /Invoice/{invoiceId}/render                                               | Render the pdf document of an invoice           |
| _InvoiceApi_                 | [**invoiceSendBy**](docs/Api/InvoiceApi.md#invoicesendby)                                                   | **PUT** /Invoice/{invoiceId}/sendBy                                                | Mark invoice as sent                            |
| _InvoiceApi_                 | [**sendInvoiceViaEMail**](docs/Api/InvoiceApi.md#sendinvoiceviaemail)                                       | **POST** /Invoice/{invoiceId}/sendViaEmail                                         | Send invoice via email                          |
| _InvoiceApi_                 | [**updateStatus**](docs/Api/InvoiceApi.md#updatestatus)                                                     | **PUT** /Invoice/{invoiceId}/changeStatus                                          | Update the status of an invoice                 |
| _InvoicePosApi_              | [**getInvoicePos**](docs/Api/InvoicePosApi.md#getinvoicepos)                                                | **GET** /InvoicePos                                                                | Retrieve InvoicePos                             |
| _LayoutApi_                  | [**getLetterpapersWithThumb**](docs/Api/LayoutApi.md#getletterpaperswiththumb)                              | **GET** /DocServer/getLetterpapersWithThumb                                        | Retrieve letterpapers                           |
| _LayoutApi_                  | [**getTemplates**](docs/Api/LayoutApi.md#gettemplates)                                                      | **GET** /DocServer/getTemplatesWithThumb                                           | Retrieve templates                              |
| _LayoutApi_                  | [**updateCreditNoteTemplate**](docs/Api/LayoutApi.md#updatecreditnotetemplate)                              | **PUT** /CreditNote/{creditNoteId}/changeParameter                                 | Update an of credit note template               |
| _LayoutApi_                  | [**updateInvoiceTemplate**](docs/Api/LayoutApi.md#updateinvoicetemplate)                                    | **PUT** /Invoice/{invoiceId}/changeParameter                                       | Update an invoice template                      |
| _LayoutApi_                  | [**updateOrderTemplate**](docs/Api/LayoutApi.md#updateordertemplate)                                        | **PUT** /Order/{orderId}/changeParameter                                           | Update an order template                        |
| _OrderApi_                   | [**createContractNoteFromOrder**](docs/Api/OrderApi.md#createcontractnotefromorder)                         | **POST** /Order/Factory/createContractNoteFromOrder                                | Create contract note from order                 |
| _OrderApi_                   | [**createOrder**](docs/Api/OrderApi.md#createorder)                                                         | **POST** /Order/Factory/saveOrder                                                  | Create a new order                              |
| _OrderApi_                   | [**createPackingListFromOrder**](docs/Api/OrderApi.md#createpackinglistfromorder)                           | **POST** /Order/Factory/createPackingListFromOrder                                 | Create packing list from order                  |
| _OrderApi_                   | [**deleteOrder**](docs/Api/OrderApi.md#deleteorder)                                                         | **DELETE** /Order/{orderId}                                                        | Deletes an order                                |
| _OrderApi_                   | [**getDiscounts**](docs/Api/OrderApi.md#getdiscounts)                                                       | **GET** /Order/{orderId}/getDiscounts                                              | Find order discounts                            |
| _OrderApi_                   | [**getOrderById**](docs/Api/OrderApi.md#getorderbyid)                                                       | **GET** /Order/{orderId}                                                           | Find order by ID                                |
| _OrderApi_                   | [**getOrderPositionsById**](docs/Api/OrderApi.md#getorderpositionsbyid)                                     | **GET** /Order/{orderId}/getPositions                                              | Find order positions                            |
| _OrderApi_                   | [**getOrders**](docs/Api/OrderApi.md#getorders)                                                             | **GET** /Order                                                                     | Retrieve orders                                 |
| _OrderApi_                   | [**getRelatedObjects**](docs/Api/OrderApi.md#getrelatedobjects)                                             | **GET** /Order/{orderId}/getRelatedObjects                                         | Find related objects                            |
| _OrderApi_                   | [**orderGetPdf**](docs/Api/OrderApi.md#ordergetpdf)                                                         | **GET** /Order/{orderId}/getPdf                                                    | Retrieve pdf document of an order               |
| _OrderApi_                   | [**orderSendBy**](docs/Api/OrderApi.md#ordersendby)                                                         | **PUT** /Order/{orderId}/sendBy                                                    | Mark order as sent                              |
| _OrderApi_                   | [**sendorderViaEMail**](docs/Api/OrderApi.md#sendorderviaemail)                                             | **POST** /Order/{orderId}/sendViaEmail                                             | Send order via email                            |
| _OrderApi_                   | [**updateOrder**](docs/Api/OrderApi.md#updateorder)                                                         | **PUT** /Order/{orderId}                                                           | Update an existing order                        |
| _OrderPosApi_                | [**deleteOrderPos**](docs/Api/OrderPosApi.md#deleteorderpos)                                                | **DELETE** /OrderPos/{orderPosId}                                                  | Deletes an order Position                       |
| _OrderPosApi_                | [**getOrderPositionById**](docs/Api/OrderPosApi.md#getorderpositionbyid)                                    | **GET** /OrderPos/{orderPosId}                                                     | Find order position by ID                       |
| _OrderPosApi_                | [**getOrderPositions**](docs/Api/OrderPosApi.md#getorderpositions)                                          | **GET** /OrderPos                                                                  | Retrieve order positions                        |
| _OrderPosApi_                | [**updateOrderPosition**](docs/Api/OrderPosApi.md#updateorderposition)                                      | **PUT** /OrderPos/{orderPosId}                                                     | Update an existing order position               |
| _PartApi_                    | [**createPart**](docs/Api/PartApi.md#createpart)                                                            | **POST** /Part                                                                     | Create a new part                               |
| _PartApi_                    | [**getPartById**](docs/Api/PartApi.md#getpartbyid)                                                          | **GET** /Part/{partId}                                                             | Find part by ID                                 |
| _PartApi_                    | [**getParts**](docs/Api/PartApi.md#getparts)                                                                | **GET** /Part                                                                      | Retrieve parts                                  |
| _PartApi_                    | [**partGetStock**](docs/Api/PartApi.md#partgetstock)                                                        | **GET** /Part/{partId}/getStock                                                    | Get stock of a part                             |
| _PartApi_                    | [**updatePart**](docs/Api/PartApi.md#updatepart)                                                            | **PUT** /Part/{partId}                                                             | Update an existing part                         |
| _ReportApi_                  | [**reportContact**](docs/Api/ReportApi.md#reportcontact)                                                    | **GET** /Report/contactlist                                                        | Export contact list                             |
| _ReportApi_                  | [**reportInvoice**](docs/Api/ReportApi.md#reportinvoice)                                                    | **GET** /Report/invoicelist                                                        | Export invoice list                             |
| _ReportApi_                  | [**reportOrder**](docs/Api/ReportApi.md#reportorder)                                                        | **GET** /Report/orderlist                                                          | Export order list                               |
| _ReportApi_                  | [**reportVoucher**](docs/Api/ReportApi.md#reportvoucher)                                                    | **GET** /Report/voucherlist                                                        | Export voucher list                             |
| _TagApi_                     | [**createTag**](docs/Api/TagApi.md#createtag)                                                               | **POST** /Tag/Factory/create                                                       | Create a new tag                                |
| _TagApi_                     | [**deleteTag**](docs/Api/TagApi.md#deletetag)                                                               | **DELETE** /Tag/{tagId}                                                            | Deletes a tag                                   |
| _TagApi_                     | [**getTagById**](docs/Api/TagApi.md#gettagbyid)                                                             | **GET** /Tag/{tagId}                                                               | Find tag by ID                                  |
| _TagApi_                     | [**getTagRelations**](docs/Api/TagApi.md#gettagrelations)                                                   | **GET** /TagRelation                                                               | Retrieve tag relations                          |
| _TagApi_                     | [**getTags**](docs/Api/TagApi.md#gettags)                                                                   | **GET** /Tag                                                                       | Retrieve tags                                   |
| _TagApi_                     | [**updateTag**](docs/Api/TagApi.md#updatetag)                                                               | **PUT** /Tag/{tagId}                                                               | Update tag                                      |
| _VoucherApi_                 | [**bookVoucher**](docs/Api/VoucherApi.md#bookvoucher)                                                       | **PUT** /Voucher/{voucherId}/bookAmount                                            | Book a voucher                                  |
| _VoucherApi_                 | [**createVoucherByFactory**](docs/Api/VoucherApi.md#createvoucherbyfactory)                                 | **POST** /Voucher/Factory/saveVoucher                                              | Create a new voucher                            |
| _VoucherApi_                 | [**getVoucherById**](docs/Api/VoucherApi.md#getvoucherbyid)                                                 | **GET** /Voucher/{voucherId}                                                       | Find voucher by ID                              |
| _VoucherApi_                 | [**getVouchers**](docs/Api/VoucherApi.md#getvouchers)                                                       | **GET** /Voucher                                                                   | Retrieve vouchers                               |
| _VoucherApi_                 | [**updateVoucher**](docs/Api/VoucherApi.md#updatevoucher)                                                   | **PUT** /Voucher/{voucherId}                                                       | Update an existing voucher                      |
| _VoucherApi_                 | [**voucherUploadFile**](docs/Api/VoucherApi.md#voucheruploadfile)                                           | **POST** /Voucher/Factory/uploadTempFile                                           | Upload voucher file                             |
| _VoucherPosApi_              | [**getVoucherPositions**](docs/Api/VoucherPosApi.md#getvoucherpositions)                                    | **GET** /VoucherPos                                                                | Retrieve voucher positions                      |

## Models

- [BookCreditNote200Response](docs/Model/BookCreditNote200Response.md)
- [BookCreditNoteRequest](docs/Model/BookCreditNoteRequest.md)
- [BookCreditNoteRequestCheckAccountTransaction](docs/Model/BookCreditNoteRequestCheckAccountTransaction.md)
- [BookInvoice200Response](docs/Model/BookInvoice200Response.md)
- [BookInvoiceRequest](docs/Model/BookInvoiceRequest.md)
- [BookInvoiceRequestCheckAccountTransaction](docs/Model/BookInvoiceRequestCheckAccountTransaction.md)
- [BookVoucher200Response](docs/Model/BookVoucher200Response.md)
- [BookVoucherRequest](docs/Model/BookVoucherRequest.md)
- [BookVoucherRequestCheckAccount](docs/Model/BookVoucherRequestCheckAccount.md)
- [BookVoucherRequestCheckAccountTransaction](docs/Model/BookVoucherRequestCheckAccountTransaction.md)
- [ContactAddressId200Response](docs/Model/ContactAddressId200Response.md)
- [CreateContact201Response](docs/Model/CreateContact201Response.md)
- [CreateInvoiceReminderRequest](docs/Model/CreateInvoiceReminderRequest.md)
- [CreateInvoiceReminderRequestInvoice](docs/Model/CreateInvoiceReminderRequestInvoice.md)
- [CreatePackingListFromOrder200Response](docs/Model/CreatePackingListFromOrder200Response.md)
- [CreateTagRequest](docs/Model/CreateTagRequest.md)
- [CreateTagRequestObject](docs/Model/CreateTagRequestObject.md)
- [CreditNoteSendBy200Response](docs/Model/CreditNoteSendBy200Response.md)
- [CreditNoteSendByRequest](docs/Model/CreditNoteSendByRequest.md)
- [DeleteAccountingContact200Response](docs/Model/DeleteAccountingContact200Response.md)
- [ExportContactSevQueryParameter](docs/Model/ExportContactSevQueryParameter.md)
- [ExportCreditNoteSevQueryParameter](docs/Model/ExportCreditNoteSevQueryParameter.md)
- [ExportCreditNoteSevQueryParameterFilter](docs/Model/ExportCreditNoteSevQueryParameterFilter.md)
- [ExportCreditNoteSevQueryParameterFilterContact](docs/Model/ExportCreditNoteSevQueryParameterFilterContact.md)
- [ExportInvoiceSevQueryParameter](docs/Model/ExportInvoiceSevQueryParameter.md)
- [ExportInvoiceSevQueryParameterFilter](docs/Model/ExportInvoiceSevQueryParameterFilter.md)
- [ExportInvoiceSevQueryParameterFilterContact](docs/Model/ExportInvoiceSevQueryParameterFilterContact.md)
- [ExportTransactionsSevQueryParameter](docs/Model/ExportTransactionsSevQueryParameter.md)
- [ExportTransactionsSevQueryParameterFilter](docs/Model/ExportTransactionsSevQueryParameterFilter.md)
- [ExportTransactionsSevQueryParameterFilterCheckAccount](docs/Model/ExportTransactionsSevQueryParameterFilterCheckAccount.md)
- [ExportVoucherSevQueryParameter](docs/Model/ExportVoucherSevQueryParameter.md)
- [ExportVoucherSevQueryParameterFilter](docs/Model/ExportVoucherSevQueryParameterFilter.md)
- [ExportVoucherSevQueryParameterFilterContact](docs/Model/ExportVoucherSevQueryParameterFilterContact.md)
- [GetAccountingContactById200Response](docs/Model/GetAccountingContactById200Response.md)
- [GetBalanceAtDate200Response](docs/Model/GetBalanceAtDate200Response.md)
- [GetCheckAccountById200Response](docs/Model/GetCheckAccountById200Response.md)
- [GetCheckAccountTransactionById200Response](docs/Model/GetCheckAccountTransactionById200Response.md)
- [GetCommunicationWayById200Response](docs/Model/GetCommunicationWayById200Response.md)
- [GetCommunicationWayKeys200Response](docs/Model/GetCommunicationWayKeys200Response.md)
- [GetContactFieldSettings200Response](docs/Model/GetContactFieldSettings200Response.md)
- [GetContactFieldsById200Response](docs/Model/GetContactFieldsById200Response.md)
- [GetContactTabsItemCountById200Response](docs/Model/GetContactTabsItemCountById200Response.md)
- [GetContacts200Response](docs/Model/GetContacts200Response.md)
- [GetDiscounts200Response](docs/Model/GetDiscounts200Response.md)
- [GetDocuments200Response](docs/Model/GetDocuments200Response.md)
- [GetInvoiceById200Response](docs/Model/GetInvoiceById200Response.md)
- [GetInvoicePos200Response](docs/Model/GetInvoicePos200Response.md)
- [GetInvoices200Response](docs/Model/GetInvoices200Response.md)
- [GetInvoicesContactParameter](docs/Model/GetInvoicesContactParameter.md)
- [GetInvoicesPaymentMethodParameter](docs/Model/GetInvoicesPaymentMethodParameter.md)
- [GetIsInvoicePartiallyPaid200Response](docs/Model/GetIsInvoicePartiallyPaid200Response.md)
- [GetLastDunning200Response](docs/Model/GetLastDunning200Response.md)
- [GetLetterpapersWithThumb200Response](docs/Model/GetLetterpapersWithThumb200Response.md)
- [GetLetterpapersWithThumb200ResponseLetterpapers](docs/Model/GetLetterpapersWithThumb200ResponseLetterpapers.md)
- [GetNextCustomerNumber200Response](docs/Model/GetNextCustomerNumber200Response.md)
- [GetOpenInvoiceReminderDebit200Response](docs/Model/GetOpenInvoiceReminderDebit200Response.md)
- [GetOpenInvoiceReminderDebitInvoiceParameter](docs/Model/GetOpenInvoiceReminderDebitInvoiceParameter.md)
- [GetOrderPositions200Response](docs/Model/GetOrderPositions200Response.md)
- [GetPartById200Response](docs/Model/GetPartById200Response.md)
- [GetPlaceholder200Response](docs/Model/GetPlaceholder200Response.md)
- [GetPlaceholder200ResponseValueInner](docs/Model/GetPlaceholder200ResponseValueInner.md)
- [GetReferenceCount200Response](docs/Model/GetReferenceCount200Response.md)
- [GetRelatedObjects200Response](docs/Model/GetRelatedObjects200Response.md)
- [GetTagById200Response](docs/Model/GetTagById200Response.md)
- [GetTagRelations200Response](docs/Model/GetTagRelations200Response.md)
- [GetTemplates200Response](docs/Model/GetTemplates200Response.md)
- [GetTemplates200ResponseTemplates](docs/Model/GetTemplates200ResponseTemplates.md)
- [GetTransactions200Response](docs/Model/GetTransactions200Response.md)
- [GetVoucherById200Response](docs/Model/GetVoucherById200Response.md)
- [GetVoucherPositions200Response](docs/Model/GetVoucherPositions200Response.md)
- [GetcreditNotePositions200Response](docs/Model/GetcreditNotePositions200Response.md)
- [InvoiceGetPdf200Response](docs/Model/InvoiceGetPdf200Response.md)
- [InvoiceRender201Response](docs/Model/InvoiceRender201Response.md)
- [InvoiceRender201ResponseObjectsInner](docs/Model/InvoiceRender201ResponseObjectsInner.md)
- [InvoiceRenderRequest](docs/Model/InvoiceRenderRequest.md)
- [InvoiceSendBy200Response](docs/Model/InvoiceSendBy200Response.md)
- [InvoiceSendByRequest](docs/Model/InvoiceSendByRequest.md)
- [ModelAccountingContact](docs/Model/ModelAccountingContact.md)
- [ModelAccountingContactContact](docs/Model/ModelAccountingContactContact.md)
- [ModelAccountingContactResponse](docs/Model/ModelAccountingContactResponse.md)
- [ModelAccountingContactResponseContact](docs/Model/ModelAccountingContactResponseContact.md)
- [ModelAccountingContactResponseSevClient](docs/Model/ModelAccountingContactResponseSevClient.md)
- [ModelAccountingContactUpdate](docs/Model/ModelAccountingContactUpdate.md)
- [ModelAccountingContactUpdateContact](docs/Model/ModelAccountingContactUpdateContact.md)
- [ModelChangeLayout](docs/Model/ModelChangeLayout.md)
- [ModelChangeLayoutResponse](docs/Model/ModelChangeLayoutResponse.md)
- [ModelChangeLayoutResponseMetadaten](docs/Model/ModelChangeLayoutResponseMetadaten.md)
- [ModelCheckAccount](docs/Model/ModelCheckAccount.md)
- [ModelCheckAccountResponse](docs/Model/ModelCheckAccountResponse.md)
- [ModelCheckAccountResponseSevClient](docs/Model/ModelCheckAccountResponseSevClient.md)
- [ModelCheckAccountSevClient](docs/Model/ModelCheckAccountSevClient.md)
- [ModelCheckAccountTransaction](docs/Model/ModelCheckAccountTransaction.md)
- [ModelCheckAccountTransactionCheckAccount](docs/Model/ModelCheckAccountTransactionCheckAccount.md)
- [ModelCheckAccountTransactionLogResponse](docs/Model/ModelCheckAccountTransactionLogResponse.md)
- [ModelCheckAccountTransactionLogResponseObject](docs/Model/ModelCheckAccountTransactionLogResponseObject.md)
- [ModelCheckAccountTransactionResponse](docs/Model/ModelCheckAccountTransactionResponse.md)
- [ModelCheckAccountTransactionResponseCheckAccount](docs/Model/ModelCheckAccountTransactionResponseCheckAccount.md)
- [ModelCheckAccountTransactionResponseSevClient](docs/Model/ModelCheckAccountTransactionResponseSevClient.md)
- [ModelCheckAccountTransactionResponseSourceTransaction](docs/Model/ModelCheckAccountTransactionResponseSourceTransaction.md)
- [ModelCheckAccountTransactionResponseTargetTransaction](docs/Model/ModelCheckAccountTransactionResponseTargetTransaction.md)
- [ModelCheckAccountTransactionSevClient](docs/Model/ModelCheckAccountTransactionSevClient.md)
- [ModelCheckAccountTransactionSourceTransaction](docs/Model/ModelCheckAccountTransactionSourceTransaction.md)
- [ModelCheckAccountTransactionTargetTransaction](docs/Model/ModelCheckAccountTransactionTargetTransaction.md)
- [ModelCheckAccountTransactionUpdate](docs/Model/ModelCheckAccountTransactionUpdate.md)
- [ModelCheckAccountTransactionUpdateCheckAccount](docs/Model/ModelCheckAccountTransactionUpdateCheckAccount.md)
- [ModelCheckAccountUpdate](docs/Model/ModelCheckAccountUpdate.md)
- [ModelCommunicationWay](docs/Model/ModelCommunicationWay.md)
- [ModelCommunicationWayContact](docs/Model/ModelCommunicationWayContact.md)
- [ModelCommunicationWayKey](docs/Model/ModelCommunicationWayKey.md)
- [ModelCommunicationWayResponse](docs/Model/ModelCommunicationWayResponse.md)
- [ModelCommunicationWayResponseContact](docs/Model/ModelCommunicationWayResponseContact.md)
- [ModelCommunicationWayResponseKey](docs/Model/ModelCommunicationWayResponseKey.md)
- [ModelCommunicationWayResponseSevClient](docs/Model/ModelCommunicationWayResponseSevClient.md)
- [ModelCommunicationWaySevClient](docs/Model/ModelCommunicationWaySevClient.md)
- [ModelCommunicationWayUpdate](docs/Model/ModelCommunicationWayUpdate.md)
- [ModelCommunicationWayUpdateContact](docs/Model/ModelCommunicationWayUpdateContact.md)
- [ModelCommunicationWayUpdateKey](docs/Model/ModelCommunicationWayUpdateKey.md)
- [ModelContact](docs/Model/ModelContact.md)
- [ModelContactAddress](docs/Model/ModelContactAddress.md)
- [ModelContactAddressCategory](docs/Model/ModelContactAddressCategory.md)
- [ModelContactAddressContact](docs/Model/ModelContactAddressContact.md)
- [ModelContactAddressCountry](docs/Model/ModelContactAddressCountry.md)
- [ModelContactAddressResponse](docs/Model/ModelContactAddressResponse.md)
- [ModelContactAddressSevClient](docs/Model/ModelContactAddressSevClient.md)
- [ModelContactAddressUpdate](docs/Model/ModelContactAddressUpdate.md)
- [ModelContactAddressUpdateContact](docs/Model/ModelContactAddressUpdateContact.md)
- [ModelContactAddressUpdateCountry](docs/Model/ModelContactAddressUpdateCountry.md)
- [ModelContactCategory](docs/Model/ModelContactCategory.md)
- [ModelContactCustomField](docs/Model/ModelContactCustomField.md)
- [ModelContactCustomFieldContact](docs/Model/ModelContactCustomFieldContact.md)
- [ModelContactCustomFieldContactCustomFieldSetting](docs/Model/ModelContactCustomFieldContactCustomFieldSetting.md)
- [ModelContactCustomFieldResponse](docs/Model/ModelContactCustomFieldResponse.md)
- [ModelContactCustomFieldResponseContact](docs/Model/ModelContactCustomFieldResponseContact.md)
- [ModelContactCustomFieldResponseContactCustomFieldSetting](docs/Model/ModelContactCustomFieldResponseContactCustomFieldSetting.md)
- [ModelContactCustomFieldResponseSevClient](docs/Model/ModelContactCustomFieldResponseSevClient.md)
- [ModelContactCustomFieldSetting](docs/Model/ModelContactCustomFieldSetting.md)
- [ModelContactCustomFieldSettingResponse](docs/Model/ModelContactCustomFieldSettingResponse.md)
- [ModelContactCustomFieldSettingResponseSevClient](docs/Model/ModelContactCustomFieldSettingResponseSevClient.md)
- [ModelContactCustomFieldSettingUpdate](docs/Model/ModelContactCustomFieldSettingUpdate.md)
- [ModelContactCustomFieldUpdate](docs/Model/ModelContactCustomFieldUpdate.md)
- [ModelContactParent](docs/Model/ModelContactParent.md)
- [ModelContactResponse](docs/Model/ModelContactResponse.md)
- [ModelContactResponseCategory](docs/Model/ModelContactResponseCategory.md)
- [ModelContactResponseParent](docs/Model/ModelContactResponseParent.md)
- [ModelContactResponseSevClient](docs/Model/ModelContactResponseSevClient.md)
- [ModelContactResponseTaxSet](docs/Model/ModelContactResponseTaxSet.md)
- [ModelContactTaxSet](docs/Model/ModelContactTaxSet.md)
- [ModelContactUpdate](docs/Model/ModelContactUpdate.md)
- [ModelContactUpdateCategory](docs/Model/ModelContactUpdateCategory.md)
- [ModelContactUpdateParent](docs/Model/ModelContactUpdateParent.md)
- [ModelCreateInvoiceFromOrder](docs/Model/ModelCreateInvoiceFromOrder.md)
- [ModelCreateInvoiceFromOrderOrder](docs/Model/ModelCreateInvoiceFromOrderOrder.md)
- [ModelCreatePackingListFromOrder](docs/Model/ModelCreatePackingListFromOrder.md)
- [ModelCreditNote](docs/Model/ModelCreditNote.md)
- [ModelCreditNoteAddressCountry](docs/Model/ModelCreditNoteAddressCountry.md)
- [ModelCreditNoteContact](docs/Model/ModelCreditNoteContact.md)
- [ModelCreditNoteContactPerson](docs/Model/ModelCreditNoteContactPerson.md)
- [ModelCreditNoteCreateUser](docs/Model/ModelCreditNoteCreateUser.md)
- [ModelCreditNotePos](docs/Model/ModelCreditNotePos.md)
- [ModelCreditNotePosCreditNote](docs/Model/ModelCreditNotePosCreditNote.md)
- [ModelCreditNotePosResponse](docs/Model/ModelCreditNotePosResponse.md)
- [ModelCreditNotePosResponseCreditNote](docs/Model/ModelCreditNotePosResponseCreditNote.md)
- [ModelCreditNotePosResponsePart](docs/Model/ModelCreditNotePosResponsePart.md)
- [ModelCreditNotePosResponseSevClient](docs/Model/ModelCreditNotePosResponseSevClient.md)
- [ModelCreditNotePosResponseUnity](docs/Model/ModelCreditNotePosResponseUnity.md)
- [ModelCreditNotePosSevClient](docs/Model/ModelCreditNotePosSevClient.md)
- [ModelCreditNotePosUnity](docs/Model/ModelCreditNotePosUnity.md)
- [ModelCreditNoteResponse](docs/Model/ModelCreditNoteResponse.md)
- [ModelCreditNoteResponseAddressCountry](docs/Model/ModelCreditNoteResponseAddressCountry.md)
- [ModelCreditNoteResponseContact](docs/Model/ModelCreditNoteResponseContact.md)
- [ModelCreditNoteResponseContactPerson](docs/Model/ModelCreditNoteResponseContactPerson.md)
- [ModelCreditNoteResponseSevClient](docs/Model/ModelCreditNoteResponseSevClient.md)
- [ModelCreditNoteResponseTaxSet](docs/Model/ModelCreditNoteResponseTaxSet.md)
- [ModelCreditNoteSevClient](docs/Model/ModelCreditNoteSevClient.md)
- [ModelCreditNoteTaxSet](docs/Model/ModelCreditNoteTaxSet.md)
- [ModelCreditNoteUpdate](docs/Model/ModelCreditNoteUpdate.md)
- [ModelCreditNoteUpdateContact](docs/Model/ModelCreditNoteUpdateContact.md)
- [ModelCreditNoteUpdateContactPerson](docs/Model/ModelCreditNoteUpdateContactPerson.md)
- [ModelDiscount](docs/Model/ModelDiscount.md)
- [ModelDiscountObject](docs/Model/ModelDiscountObject.md)
- [ModelDocumentResponse](docs/Model/ModelDocumentResponse.md)
- [ModelDocumentResponseBaseObject](docs/Model/ModelDocumentResponseBaseObject.md)
- [ModelDocumentResponseCreateUser](docs/Model/ModelDocumentResponseCreateUser.md)
- [ModelDocumentResponseFolder](docs/Model/ModelDocumentResponseFolder.md)
- [ModelDocumentResponseObject](docs/Model/ModelDocumentResponseObject.md)
- [ModelDocumentResponseSevClient](docs/Model/ModelDocumentResponseSevClient.md)
- [ModelDocumentResponseUpdateUser](docs/Model/ModelDocumentResponseUpdateUser.md)
- [ModelEmail](docs/Model/ModelEmail.md)
- [ModelEmailOrder](docs/Model/ModelEmailOrder.md)
- [ModelEmailOrderObject](docs/Model/ModelEmailOrderObject.md)
- [ModelEmailOrderSevClient](docs/Model/ModelEmailOrderSevClient.md)
- [ModelInvoice](docs/Model/ModelInvoice.md)
- [ModelInvoiceAddressCountry](docs/Model/ModelInvoiceAddressCountry.md)
- [ModelInvoiceContact](docs/Model/ModelInvoiceContact.md)
- [ModelInvoiceOrigin](docs/Model/ModelInvoiceOrigin.md)
- [ModelInvoicePaymentMethod](docs/Model/ModelInvoicePaymentMethod.md)
- [ModelInvoicePos](docs/Model/ModelInvoicePos.md)
- [ModelInvoicePosInvoice](docs/Model/ModelInvoicePosInvoice.md)
- [ModelInvoicePosPart](docs/Model/ModelInvoicePosPart.md)
- [ModelInvoicePosResponse](docs/Model/ModelInvoicePosResponse.md)
- [ModelInvoicePosResponseInvoice](docs/Model/ModelInvoicePosResponseInvoice.md)
- [ModelInvoicePosResponsePart](docs/Model/ModelInvoicePosResponsePart.md)
- [ModelInvoicePosResponseSevClient](docs/Model/ModelInvoicePosResponseSevClient.md)
- [ModelInvoicePosResponseUnity](docs/Model/ModelInvoicePosResponseUnity.md)
- [ModelInvoicePosSevClient](docs/Model/ModelInvoicePosSevClient.md)
- [ModelInvoicePosUnity](docs/Model/ModelInvoicePosUnity.md)
- [ModelInvoicePosUpdate](docs/Model/ModelInvoicePosUpdate.md)
- [ModelInvoicePosUpdateInvoice](docs/Model/ModelInvoicePosUpdateInvoice.md)
- [ModelInvoiceResponse](docs/Model/ModelInvoiceResponse.md)
- [ModelInvoiceResponseContactPerson](docs/Model/ModelInvoiceResponseContactPerson.md)
- [ModelInvoiceResponseCostCentre](docs/Model/ModelInvoiceResponseCostCentre.md)
- [ModelInvoiceResponseCreateUser](docs/Model/ModelInvoiceResponseCreateUser.md)
- [ModelInvoiceResponseTaxSet](docs/Model/ModelInvoiceResponseTaxSet.md)
- [ModelInvoiceTaxSet](docs/Model/ModelInvoiceTaxSet.md)
- [ModelInvoiceUpdate](docs/Model/ModelInvoiceUpdate.md)
- [ModelInvoiceUpdateContact](docs/Model/ModelInvoiceUpdateContact.md)
- [ModelInvoiceUpdateContactPerson](docs/Model/ModelInvoiceUpdateContactPerson.md)
- [ModelInvoiceUpdateCostCentre](docs/Model/ModelInvoiceUpdateCostCentre.md)
- [ModelInvoiceUpdateOrigin](docs/Model/ModelInvoiceUpdateOrigin.md)
- [ModelInvoiceUpdatePaymentMethod](docs/Model/ModelInvoiceUpdatePaymentMethod.md)
- [ModelInvoiceUpdateSevClient](docs/Model/ModelInvoiceUpdateSevClient.md)
- [ModelInvoiceUpdateTaxSet](docs/Model/ModelInvoiceUpdateTaxSet.md)
- [ModelOrder](docs/Model/ModelOrder.md)
- [ModelOrderAddressCountry](docs/Model/ModelOrderAddressCountry.md)
- [ModelOrderContact](docs/Model/ModelOrderContact.md)
- [ModelOrderContactPerson](docs/Model/ModelOrderContactPerson.md)
- [ModelOrderOrigin](docs/Model/ModelOrderOrigin.md)
- [ModelOrderPos](docs/Model/ModelOrderPos.md)
- [ModelOrderPosOrder](docs/Model/ModelOrderPosOrder.md)
- [ModelOrderPosResponse](docs/Model/ModelOrderPosResponse.md)
- [ModelOrderPosResponseOrder](docs/Model/ModelOrderPosResponseOrder.md)
- [ModelOrderPosResponseSevClient](docs/Model/ModelOrderPosResponseSevClient.md)
- [ModelOrderPosSevClient](docs/Model/ModelOrderPosSevClient.md)
- [ModelOrderPosUpdate](docs/Model/ModelOrderPosUpdate.md)
- [ModelOrderResponse](docs/Model/ModelOrderResponse.md)
- [ModelOrderResponseAddressCountry](docs/Model/ModelOrderResponseAddressCountry.md)
- [ModelOrderResponseContact](docs/Model/ModelOrderResponseContact.md)
- [ModelOrderResponseContactPerson](docs/Model/ModelOrderResponseContactPerson.md)
- [ModelOrderResponseOrigin](docs/Model/ModelOrderResponseOrigin.md)
- [ModelOrderResponseSevClient](docs/Model/ModelOrderResponseSevClient.md)
- [ModelOrderResponseTaxSet](docs/Model/ModelOrderResponseTaxSet.md)
- [ModelOrderTaxSet](docs/Model/ModelOrderTaxSet.md)
- [ModelOrderUpdate](docs/Model/ModelOrderUpdate.md)
- [ModelOrderUpdateAddressCountry](docs/Model/ModelOrderUpdateAddressCountry.md)
- [ModelOrderUpdateContact](docs/Model/ModelOrderUpdateContact.md)
- [ModelOrderUpdateContactPerson](docs/Model/ModelOrderUpdateContactPerson.md)
- [ModelOrderUpdateCreateUser](docs/Model/ModelOrderUpdateCreateUser.md)
- [ModelOrderUpdateSevClient](docs/Model/ModelOrderUpdateSevClient.md)
- [ModelOrderUpdateTaxSet](docs/Model/ModelOrderUpdateTaxSet.md)
- [ModelPart](docs/Model/ModelPart.md)
- [ModelPartCategory](docs/Model/ModelPartCategory.md)
- [ModelPartSevClient](docs/Model/ModelPartSevClient.md)
- [ModelPartUnity](docs/Model/ModelPartUnity.md)
- [ModelPartUpdate](docs/Model/ModelPartUpdate.md)
- [ModelPaymentMethodResponse](docs/Model/ModelPaymentMethodResponse.md)
- [ModelStaticCountryResponse](docs/Model/ModelStaticCountryResponse.md)
- [ModelTagCreateResponse](docs/Model/ModelTagCreateResponse.md)
- [ModelTagCreateResponseObject](docs/Model/ModelTagCreateResponseObject.md)
- [ModelTagCreateResponseSevClient](docs/Model/ModelTagCreateResponseSevClient.md)
- [ModelTagCreateResponseTag](docs/Model/ModelTagCreateResponseTag.md)
- [ModelTagResponse](docs/Model/ModelTagResponse.md)
- [ModelVoucher](docs/Model/ModelVoucher.md)
- [ModelVoucherCreateUser](docs/Model/ModelVoucherCreateUser.md)
- [ModelVoucherPos](docs/Model/ModelVoucherPos.md)
- [ModelVoucherPosAccountingType](docs/Model/ModelVoucherPosAccountingType.md)
- [ModelVoucherPosEstimatedAccountingType](docs/Model/ModelVoucherPosEstimatedAccountingType.md)
- [ModelVoucherPosResponse](docs/Model/ModelVoucherPosResponse.md)
- [ModelVoucherPosResponseAccountingType](docs/Model/ModelVoucherPosResponseAccountingType.md)
- [ModelVoucherPosResponseEstimatedAccountingType](docs/Model/ModelVoucherPosResponseEstimatedAccountingType.md)
- [ModelVoucherPosResponseSevClient](docs/Model/ModelVoucherPosResponseSevClient.md)
- [ModelVoucherPosResponseVoucher](docs/Model/ModelVoucherPosResponseVoucher.md)
- [ModelVoucherPosSevClient](docs/Model/ModelVoucherPosSevClient.md)
- [ModelVoucherPosVoucher](docs/Model/ModelVoucherPosVoucher.md)
- [ModelVoucherResponse](docs/Model/ModelVoucherResponse.md)
- [ModelVoucherResponseCostCentre](docs/Model/ModelVoucherResponseCostCentre.md)
- [ModelVoucherResponseCreateUser](docs/Model/ModelVoucherResponseCreateUser.md)
- [ModelVoucherResponseDocument](docs/Model/ModelVoucherResponseDocument.md)
- [ModelVoucherResponseSevClient](docs/Model/ModelVoucherResponseSevClient.md)
- [ModelVoucherResponseSupplier](docs/Model/ModelVoucherResponseSupplier.md)
- [ModelVoucherResponseTaxSet](docs/Model/ModelVoucherResponseTaxSet.md)
- [ModelVoucherSevClient](docs/Model/ModelVoucherSevClient.md)
- [ModelVoucherSupplier](docs/Model/ModelVoucherSupplier.md)
- [ModelVoucherUpdate](docs/Model/ModelVoucherUpdate.md)
- [ModelVoucherUpdateCostCentre](docs/Model/ModelVoucherUpdateCostCentre.md)
- [ModelVoucherUpdateDocument](docs/Model/ModelVoucherUpdateDocument.md)
- [ModelVoucherUpdateSupplier](docs/Model/ModelVoucherUpdateSupplier.md)
- [ModelVoucherUpdateTaxSet](docs/Model/ModelVoucherUpdateTaxSet.md)
- [OrderSendBy200Response](docs/Model/OrderSendBy200Response.md)
- [OrderSendByRequest](docs/Model/OrderSendByRequest.md)
- [PartGetStock200Response](docs/Model/PartGetStock200Response.md)
- [ReportContactSevQueryParameter](docs/Model/ReportContactSevQueryParameter.md)
- [ReportContactSevQueryParameterFilter](docs/Model/ReportContactSevQueryParameterFilter.md)
- [ReportContactSevQueryParameterFilterCountry](docs/Model/ReportContactSevQueryParameterFilterCountry.md)
- [ReportInvoiceSevQueryParameter](docs/Model/ReportInvoiceSevQueryParameter.md)
- [ReportOrderSevQueryParameter](docs/Model/ReportOrderSevQueryParameter.md)
- [ReportOrderSevQueryParameterFilter](docs/Model/ReportOrderSevQueryParameterFilter.md)
- [ReportOrderSevQueryParameterFilterContact](docs/Model/ReportOrderSevQueryParameterFilterContact.md)
- [ReportVoucherSevQueryParameter](docs/Model/ReportVoucherSevQueryParameter.md)
- [SaveCreditNote](docs/Model/SaveCreditNote.md)
- [SaveCreditNoteCreditNotePosDelete](docs/Model/SaveCreditNoteCreditNotePosDelete.md)
- [SaveCreditNoteDiscountDelete](docs/Model/SaveCreditNoteDiscountDelete.md)
- [SaveCreditNoteDiscountSave](docs/Model/SaveCreditNoteDiscountSave.md)
- [SaveCreditNoteResponse](docs/Model/SaveCreditNoteResponse.md)
- [SaveInvoice](docs/Model/SaveInvoice.md)
- [SaveInvoiceDiscountDelete](docs/Model/SaveInvoiceDiscountDelete.md)
- [SaveInvoiceDiscountSave](docs/Model/SaveInvoiceDiscountSave.md)
- [SaveInvoiceInvoicePosDelete](docs/Model/SaveInvoiceInvoicePosDelete.md)
- [SaveInvoiceResponse](docs/Model/SaveInvoiceResponse.md)
- [SaveOrder](docs/Model/SaveOrder.md)
- [SaveOrderOrderPosDelete](docs/Model/SaveOrderOrderPosDelete.md)
- [SaveOrderResponse](docs/Model/SaveOrderResponse.md)
- [SaveVoucher](docs/Model/SaveVoucher.md)
- [SaveVoucherResponse](docs/Model/SaveVoucherResponse.md)
- [SaveVoucherVoucherPosDelete](docs/Model/SaveVoucherVoucherPosDelete.md)
- [SendCreditNoteByPrinting200Response](docs/Model/SendCreditNoteByPrinting200Response.md)
- [SendInvoiceViaEMail201Response](docs/Model/SendInvoiceViaEMail201Response.md)
- [SendInvoiceViaEMailRequest](docs/Model/SendInvoiceViaEMailRequest.md)
- [SendorderViaEMail201Response](docs/Model/SendorderViaEMail201Response.md)
- [UpdateOrderTemplate200Response](docs/Model/UpdateOrderTemplate200Response.md)
- [UpdateStatusRequest](docs/Model/UpdateStatusRequest.md)
- [UpdateTagRequest](docs/Model/UpdateTagRequest.md)
- [VoucherUploadFile201Response](docs/Model/VoucherUploadFile201Response.md)
- [VoucherUploadFile201ResponseObjectsInner](docs/Model/VoucherUploadFile201ResponseObjectsInner.md)
- [VoucherUploadFileRequest](docs/Model/VoucherUploadFileRequest.md)

## Authorization

Authentication schemes defined for the API:

### api_key

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
