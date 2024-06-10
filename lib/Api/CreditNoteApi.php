<?php
/**
 * CreditNoteApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Itsmind\Sevdesk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * sevDesk API
 *
 * <b>Contact:</b> To contact our support click  <a href='https://landing.sevdesk.de/service-support-center-technik'>here</a><br><br>   # General information  Welcome to our API!<br>  sevDesk offers you  the possibility of retrieving data using an interface, namely the sevDesk API, and making  changes without having to use the web UI. The sevDesk interface is a REST-Full API. All sevDesk  data and functions that are used in the web UI can also be controlled through the API.   # Cross-Origin Resource Sharing  This API features Cross-Origin Resource Sharing (CORS).<br>  It enables cross-domain communication from the browser.<br>  All responses have a wildcard same-origin which makes them completely public and accessible to everyone, including any code on any site.    # Embedding resources  When retrieving resources by using this API, you might encounter nested resources in the resources you requested.<br>  For example, an invoice always contains a contact, of which you can see the ID and the object name.<br>  This API gives you the possibility to embed these resources completely into the resources you originally requested.<br>  Taking our invoice example, this would mean, that you would not only see the ID and object name of a contact, but rather the complete contact resource.    To embed resources, all you need to do is to add the query parameter 'embed' to your GET request.<br>  As values, you can provide the name of the nested resource.<br>  Multiple nested resources are also possible by providing multiple names, separated by a comma.    # Authentication and Authorization  The sevDesk API uses a token authentication to authorize calls. For this purpose every sevDesk administrator has one API token, which is a <b>hexadecimal string</b>  containing <b>32 characters</b>. The following clip shows where you can find the  API token if this is your first time with our API.<br><br> <video src='openAPI/img/findingTheApiToken.mp4' controls width='640' height='360'> Ihr Browser kann dieses Video nicht wiedergeben.<br/> Dieses Video zeigt wie sie Ihr sevDesk API Token finden. </video> <br> The token will be needed in every request that you want to send and needs to be attached to the request url as a <b>Query Parameter</b><br> or provided as a value of an <b>Authorization Header</b>.<br> For security reasons, we suggest putting the API Token in the Authorization Header and not in the query string.<br> However, in the request examples in this documentation, we will keep it in the query string, as it is easier for you to copy them and try them yourself.<br> The following url is an example that shows where your token needs to be placed as a query parameter.<br> In this case, we used some random API token. <ul> <li><span>ht</span>tps://my.sevdesk.de/api/v1/Contact?token=<span style='color:red'>b7794de0085f5cd00560f160f290af38</span></li> </ul> The next example shows the token in the Authorization Header. <ul> <li>\"Authorization\" :<span style='color:red'>\"b7794de0085f5cd00560f160f290af38\"</span></li> </ul> The api tokens have an infinite lifetime and, in other words, exist as long as the sevDesk user exists.<br> For this reason, the user should <b>NEVER</b> be deleted.<br> If really necessary, it is advisable to save the api token as we will <b>NOT</b> be able to retrieve it afterwards!<br> It is also possible to generate a new API token, for example, if you want to prevent the usage of your sevDesk account by other people who got your current API token.<br> To achieve this, you just need to click on the \"generate new\" symbol to the right of your token and confirm it with your password.  # API News  To never miss API news and updates again, subscribe to our <b>free API newsletter</b> and get all relevant  information to keep your sevDesk software running smoothly. To subscribe, simply click <a href = 'https://landing.sevdesk.de/api-newsletter'><b>here</b></a> and confirm the email address to which we may send all updates relevant to you.  # API Requests  In our case, REST API requests need to be build by combining the following components. <table> <tr> <th><b>Component</b></th> <th><b>Description</b></th> </tr> <tr> <td>HTTP-Methods</td> <td> <ul> <li>GET (retrieve a resource)</li> <li>POST (create a resource)</li> <li>PUT (update a resource)</li> <li>DELETE (delete a resource)</li> </ul> </td> </tr> <tr> <td>URL of the API</td> <td><span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span></td> </tr> <tr> <td>URI of the resource</td> <td>The resource to query.<br>For example contacts in sevDesk:<br><br> <span style='color:red'>/Contact</span><br><br> Which will result in the following complete URL:<br><br> <span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span> </td> </tr> <tr> <td>Query parameters</td> <td>Are attached by using the connectives <b>?</b> and <b>&</b> in the URL.<br></td> </tr> <tr> <td>Request headers</td> <td>Typical request headers are for example:<br> <div> <br> <ul> <li>Content-type</li> <li>Authorization</li> <li>Accept-Encoding</li> <li>User-Agent</li> <li>X-Version: Used for resource versioning see information below</li> <li>...</li> </ul> </div> </td> </tr> <tr>  <td>Response headers</td> <td> Typical response headers are for example:<br><br> <div> <ul>  <li>Deprecation: If a resource is deprecated we return true or a timestamp since when</li> <li>...</li> </ul> </div> </td> </tr> <tr> <td>Request body</td> <td>Mostly required in POST and PUT requests.<br> Often the request body contains json, in our case, it also accepts url-encoded data. </td> </tr> </table><br> <span style='color:red'>Note</span>: please pass a meaningful entry at the header \"User-Agent\".  If the \"User-Agent\" is set meaningfully, we can offer better support in case of queries from customers.<br> An example how such a \"User-Agent\" can look like: \"Integration-name by abc\". <br><br> This is a sample request for retrieving existing contacts in sevDesk using curl:<br><br> <img src='openAPI/img/GETRequest.PNG' alt='Get Request' height='150'><br><br> As you can see, the request contains all the components mentioned above.<br> It's HTTP method is GET, it has a correct endpoint  (<span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span>), query parameters like <b>token</b> and additional <b>header</b> information!<br><br> <b>Query Parameters</b><br><br> As you might have seen in the sample request above, there are several other parameters besides \"token\", located in the url.<br> Those are mostly optional but prove to be very useful for a lot of requests as they can limit, extend, sort or filter the data you will get as a response.<br><br> These are the most used query parameter for the sevDesk API. <table> <tr> <th><b>Parameter</b></th> <th><b>Description</b></th> </tr> <tr> <td>embed</td> <td>Will extend some of the returned data.<br> A brief example can be found below.</td> </tr> <tr> <td>countAll</td> <td>\"countAll=true\" returns the number of items</td> </tr> </table> This is an example for the usage of the embed parameter.<br> The following first request will return all company contact entries in sevDesk up to a limit of 100 without any additional information and no offset.<br><br> <img src='openAPI/img/ContactQueryWithoutEmbed.PNG' width='900' height='850'><br><br> Now have a look at the category attribute located in the response.<br> Naturally, it just contains the id and the object name of the object but no further information.<br> We will now use the parameter embed with the value \"category\".<br><br> <img src='openAPI/img/ContactQueryWithEmbed.PNG' width='900' height='850'><br><br> As you can see, the category object is now extended and shows all the attributes and their corresponding values.<br><br> There are lot of other query parameters that can be used to filter the returned data for objects that match a certain pattern, however, those will not be mentioned here and instead can be found at the detail documentation of the most used API endpoints like contact, invoice or voucher.<br><br> <b>Pagination</b><br> <table> <tr> <th><b>Parameter</b></th> <th><b>Description</b></th> </tr> <tr> <td>limit</td> <td>Limits the number of entries that are returned.<br> Most useful in GET requests which will most likely deliver big sets of data like country or currency lists.<br> In this case, you can bypass the default limitation on returned entries by providing a high number. </td> </tr> <tr> <td>offset</td> <td>Specifies a certain offset for the data that will be returned.<br> As an example, you can specify \"offset=2\" if you want all entries except for the first two.</td> </tr> </table> Example: <ul><li><code>ht<span>tps://my.sevdesk.de/api/v1/Invoice?offset=20&limit=10<span></code></li></ul> <b>Request Headers</b><br><br> The HTTP request (response) headers allow the client as well as the server to pass additional information with the request.<br> They transfer the parameters and arguments which are important for transmitting data over HTTP.<br> Three headers which are useful / necessary when using the sevDesk API are \"Authorization, \"Accept\" and  \"Content-type\".<br> Underneath is a brief description of why and how they should be used.<br><br> <b>Authorization</b><br><br> Can be used if you want to provide your API token in the header instead of having it in the url. <ul> <li>Authorization:<span style='color:red'>yourApiToken</span></li> </ul> <b>Accept</b><br><br> Specifies the format of the response.<br> Required for operations with a response body. <ul> <li>Accept:application/<span style='color:red'>format</span> </li> </ul> In our case, <code><span style='color:red'>format</span></code> could be replaced with <code>json</code> or <code>xml</code><br><br> <b>Content-type</b><br><br> Specifies which format is used in the request.<br> Is required for operations with a request body. <ul> <li>Content-type:application/<span style='color:red'>format</span></li> </ul> In our case,<code><span style='color:red'>format</span></code>could be replaced with <code>json</code> or <code>x-www-form-urlencoded</code> <br><br><b>API Responses</b><br><br> HTTP status codes<br> When calling the sevDesk API it is very likely that you will get a HTTP status code in the response.<br> Some API calls will also return JSON response bodies which will contain information about the resource.<br> Each status code which is returned will either be a <b>success</b> code or an <b>error</b> code.<br><br> Success codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>200 OK</code></td> <td>The request was successful</td> </tr> <tr> <td><code>201 Created</code></td> <td>Most likely to be found in the response of a <b>POST</b> request.<br> This code indicates that the desired resource was successfully created.</td> </tr> </table> <br>Error codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>400 Bad request</code></td> <td>The request you sent is most likely syntactically incorrect.<br> You should check if the parameters in the request body or the url are correct.</td> </tr> <tr> <td><code>401 Unauthorized</code></td> <td>The authentication failed.<br> Most likely caused by a missing or wrong API token.</td> </tr> <tr> <td><code>403 Forbidden</code></td> <td>You do not have the permission the access the resource which is requested.</td> </tr> <tr> <td><code>404 Not found</code></td> <td>The resource you specified does not exist.</td> </tr> <tr> <td><code>500 Internal server error</code></td> <td>An internal server error has occurred.<br> Normally this means that something went wrong on our side.<br> However, sometimes this error will appear if we missed to catch an error which is normally a 400 status code! </td> </tr> </table> <br><br> <b>Resource Versioning</b> <br><br> We use resource versioning to handle breaking changes for our endpoints, these are rarely used and will be communicated before we remove older versions.<br> To call a different version we use a specific header <code>X-Version</code> that should be filled with the desired version.<br> <ul>  <li>If you do not specify any version we assume <code>default</code></li> <li>If you specify a version that does not exist or was removed, you will get an error with information which versions are available</li> </ul> <table> <tr> <th>X-Version</th> <th>Description</th> </tr> <tr> <td><code>default</code></td> <td>Should always reference the oldest version.<br> If a specific resource is updated with a new version, <br> then the default version stays the same until the old version is deleted</td> </tr> <tr> <td><code>1.0</code> ... <code>1.9</code></td> <td>Our incrementally version for each resource independent<br> <b>Important</b>: A resource can be available via <code>default</code> but not <code>1.0</code></td> </tr> </table>  # Your First Request  After reading the introduction to our API, you should now be able to make your first call.<br> For testing our API, we would always recommend to create a trial account for sevDesk to prevent unwanted changes to your main account.<br> A trial account will be in the highest tariff (materials management), so every sevDesk function can be tested!   To start testing we would recommend one of the following tools: <ul> <li><a href='https://www.getpostman.com/'>Postman</a></li> <li><a href='https://curl.haxx.se/download.html'>cURL</a></li> </ul> This example will illustrate your first request, which is creating a new Contact in sevDesk.<br> <ol> <li>Download <a href='https://www.getpostman.com/'><b>Postman</b></a> for your desired system and start the application</li> <li>Enter <span><b>ht</span>tps://my.sevdesk.de/api/v1/Contact</b> as the url</li> <li>Use the connective <b>?</b> to append <b>token=</b> to the end of the url, or create an authorization header. Insert your API token as the value</li> <li>For this test, select <b>POST</b> as the HTTP method</li> <li>Go to <b>Headers</b> and enter the key-value pair <b>Content-type</b> + <b>application/x-www-form-urlencoded</b><br> As an alternative, you can just go to <b>Body</b> and select <b>x-www-form-urlencoded</b></li> <li>Now go to <b>Body</b> (if you are not there yet) and enter the key-value pairs as shown in the following picture<br><br> <img src='openAPI/img/FirstRequestPostman.PNG' width='900'><br><br></li> <li>Click on <b>Send</b>. Your response should now look like this:<br><br> <img src='openAPI/img/FirstRequestResponse.PNG' width='900'></li> </ol> As you can see, a successful response in this case returns a JSON-formatted response body containing the contact you just created.<br> For keeping it simple, this was only a minimal example of creating a contact.<br> There are however numerous combinations of parameters that you can provide which add information to your contact.  # sevDesk-Update 2.0  Started in 2024 we introduced a new era of bookkeeping in sevDesk. You can check if you already received the update by clicking on your profile in the top right in the sevDesk WebApp or by using the [Tools/bookkeepingSystemVersion endpoint](#tag/Basics/operation/bookkeepingSystemVersion).<br> The old version will be available for some customers until the end of 2024. In this short list we have outlined the changed endpoints with links to jump to the descriptions. If you received the [api newsletter](https://landing.sevdesk.de/api-newsletter) you already know what changed. Otherwise you can check the api changes [here](https://tech.sevdesk.com/api_news/posts/2024_04_04-system-update-breaking-changes/).  ## Check your bookkeeping system version  With this endpoint you can check which version you / your client uses. On that basis you must use the old or new versions of the endpoints. [Tools/bookkeepingSystemVersion Endpoint](#tag/Basics/operation/bookkeepingSystemVersion)  ## Tax Rules  <I><b>(affects the properties taxType and taxSet)</b></I><br> With sevDesk-Update 2.0 we changed the available tax rules. Due to a low level of usage, we won't support the following tax type with the sevDesk-Update 2.0 anymore:  `taxType = noteu`  Due to a high likeliness of non-compliant accounting, we won't support the following tax type with the sevDesk-Update 2.0 anymore:  `taxType = custom (this includes 'taxSet': ... )`  If you only use <code>taxType = default</code>, <code>taxType = eu</code> and / or <code>taxType = ss</code>, these tax types will automatically be mapped to the new tax rules for a transition period, but you have to make sure the taxRate used in positions is within the allowed ones (you may use the [ReceiptGuidance endpoint](#tag/Voucher/operation/forAllAccounts) for that), otherwise the API will return a validation error (HTTP status code 422). For [orders](#tag/Order), [invoices](#tag/Invoice), [vouchers](#tag/Voucher) and [credit notes](#tag/CreditNote) that were created within sevDesk-Update 2.0 the response will change in all endpoints in which these objects are returned.<br> So orders, invoices, vouchers and credit notes created within sevDesk system version 1.0 still have a taxType in the response. When they are created in sevDesk-Update 2.0 they will have a taxRule instead.<br> You can continue to use taxType at first, but we recommend switching to taxRule as there are new options available that were not previously supported.<br> For orders, invoices, vouchers and credit notes that were created within sevDesk-Update 2.0 the response will change in all endpoints in which these objects are returned. This documentation holds the most current version of the endpoints.<br> Here are lists of the currently available tax rules, sorted by their use case, structured into revenue/expense and 'Regelbesteuerer'/'Kleinunternehmer'.  #### VAT rules for 'Regelbesteuerung' in sevDesk-Update 2.0 (Revenue)  <table> <tr> <th>VAT Rule</th> <th>New Property</th> <th>Allowed taxRate in positions</th> <th>Old property (deprecated)</th> </tr> <tr> <td>Umsatzsteuerpflichtige Umsätze</td> <td><code>'taxRule': 1</code></td> <td> <ul> <li>0.0</li> <li>7.0</li> <li>19.0</li> </ul> </td> <td><code>'taxType': 'default'</code></td> </tr> <tr> <td>Ausfuhren</td> <td><code>'taxRule': 2</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Innergemeinschaftliche Lieferungen</td> <td><code>'taxRule': 3</code></td> <td> <ul> <li>0.0</li> <li>7.0</li> <li>19.0</li> </ul> </td> <td><code>'taxType': 'eu'</code></td> </tr> <tr> <td>Steuerfreie Umsätze §4 UStG</td> <td><code>'taxRule': 4</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Reverse Charge gem. §13b UStG</td> <td><code>'taxRule': 5</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> </table>    #### VAT rules for 'Regelbesteuerung' in sevDesk-Update 2.0 (Expense)  <table> <tr> <th>VAT Rule</th> <th>New Property</th> <th>Allowed taxRate in positions</th> <th>Old property (deprecated)</th> </tr> <tr> <td>Innergemeinschaftliche Erwerbe</td> <td><code>'taxRule': 8</code></td> <td> <ul> <li>0.0</li> <li>7.0</li> <li>19.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Vorsteuerabziehbare Aufwendungen</td> <td><code>'taxRule': 9</code></td> <td> <ul> <li>0.0</li> <li>7.0</li> <li>19.0</li> </ul> </td> <td><code>'taxType': 'default'</code></td> </tr> <tr> <td>Nicht vorsteuerabziehbare Aufwendungen</td> <td><code>'taxRule': 10</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Reverse Charge gem. §13b Abs. 2 UStG mit Vorsteuerabzug 0% (19%)</td> <td><code>'taxRule': 12</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Reverse Charge gem. §13b UStG ohne Vorsteuerabzug 0% (19%)</td> <td><code>'taxRule': 13</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Reverse Charge gem. §13b Abs. 1 EU Umsätze 0% (19%)</td> <td><code>'taxRule': 14</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> </table>    #### VAT rules for small business owner ('Kleinunternehmer') in sevDesk-Update 2.0 (Revenue)  <table> <tr> <th>VAT Rule</th> <th>New Property</th> <th>Allowed taxRate in positions</th> <th>Old property (deprecated)</th> </tr> <tr> <td>Steuer nicht erhoben nach §19UStG</td> <td><code>'taxRule': 11</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td><code>'taxType': 'ss'</code></td> </tr> </table>    #### VAT rules for small business owner ('Kleinunternehmer') in sevDesk-Update 2.0 (Expense)  <table> <tr> <th>VAT Rule</th> <th>New Property</th> <th>Allowed taxRate in positions</th> <th>Old property (deprecated)</th> </tr> <tr> <td>Nicht vorsteuerabziehbare Aufwendungen</td> <td><code>'taxRule': 10</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td><code>'taxType': 'ss'</code></td> </tr> <tr> <td>Reverse Charge gem. §13b UStG ohne Vorsteuerabzug 0% (19%)</td> <td><code>'taxRule': 13</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> </table>    ## Booking Accounts  <I><b>(affects the property accountingType)</b></I><br> With sevDesk-Update 2.0 we changed the available booking accounts and their combinatorics. If you use accountingTypes with SKR numbers that are still available in our receipt guidance, you do not have to change anything in your requests. These booking accounts will automatically be mapped to the new representation (Account Datev). But you have to make sure the taxRate used in positions and taxRule used in the voucher is within the allowed ones (check the [ReceiptGuidance](#tag/Voucher/operation/forAllAccounts)) of the provided booking account, otherwise the API will return a validation error (HTTP status code 422). For orders, invoices, vouchers and credit notes in that were created within sevDesk-Update 2.0 the response will change in all endpoints were these objects are returned.  ## Receipt Guidance  To help you decide which account can be used in conjunction with which tax rules, tax rates and documents, we created several guidance endpoints just there for you to get helpful information. You can find the descriptions in the changes section for Vouchers below or jump directly to the endpoint description by using this link: [Receipt Guidance](#tag/Voucher/operation/forAllAccounts).<br> Receipt Guidance is planned to give you guidance in which account you can pick (depending on your filter criteria and the client settings (e.g. 'Kleinunternehmer')) and which tax rate and [tax rules](#section/sevDesk-Update-2.0/Tax-Rules) are comptaible with them.   ## Vouchers   ### Saving a new voucher ([Voucher/Factory/saveVoucher](#tag/Voucher/operation/voucherFactorySaveVoucher))  Following use cases do not work anymore or have changed: <ol> <li>Custom vat regulations (taxType = custom and provided taxSet)</li> <li>Only specific tax rates and booking accounts are available. Check [ReceiptGuidance](#tag/Voucher/operation/forAllAccounts)</li> <li>Custom accounting types do not work anymore</li> <li>Using an asset booking account without creating an asset is no longer possible</li> <li>A voucher can not be directly set to paid anymore, therefore only status <code>DRAFT (50)</code> or <code>UNPAID / DUE (100)</code> are possible when creating a new voucher. Use the [/api/v1/Voucher/{voucherId}/bookAmount endpoint](#tag/Voucher/operation/bookVoucher) to set a voucher to paid</li> <li>Setting or changing the property enshrined. Use our new endpoint [/api/v1/Voucher/{voucherId}/enshrine](#tag/Voucher/operation/voucherEnshrine) to enshrine a voucher</li> </ol>  ### Get or update an existing voucher ([Voucher/{voucherId}](#tag/Voucher/operation/updateVoucher))  Following use cases do not work anymore or have changed: <ol> <li>Custom vat regulations (taxType = custom and provided taxSet)</li> <li>See [ReceiptGuidance](#tag/Voucher/operation/forAllAccounts) to check which tax rates are available in conjunction with which tax rules</li> </ol>  ### Book a voucher ([Voucher/{voucherId}](#tag/Voucher/operation/bookVoucher))  Following use cases do not work anymore or have changed: <ol> <li>Voucher with negative voucher positions can not use 'cash discount' as a payment difference anymore</li> <li>A Voucher can only be booked when it was registered beforehand (see above)</li> <li>Based on the combination of voucher positions some payment difference reasons are not possible anymore</li> <li>The currency fluctuation (CF) type is no longer supported as a payment difference reason</li> </ol>  ## Banking  Following use cases do not work anymore or have changed: <ol> <li>Setting or changing the property enshrined will now only be available by using the [appropriate enshrine endpoint](#tag/CheckAccountTransaction/operation/checkAccountTransactionEnshrine)</li> </ol>  ## Invoicing  The changes to the vat rules also apply here. Check the documentation of voucher above as the changes are the same.  ### General stricter validation in PUT and POST endpoints  We added stricter validation to ensure only correct invoices are created which than can be further processed in sevDesk. Following use cases do not work anymore or have changed: <ol> <li>Creating an invoice with taxType <code>noteu</code> does not work anymore</li> <li>Creating an invoice with taxType <code>custom</code> does not work anymore</li> <li>Processing an invoice beyond status <code>DRAFT (100)</code> without a contact does not work anymore</li> <li>Advanced invoices (<code>invoiceType: 'AR'</code>) and partial invoices (<code>invoiceType: 'TR'</code>) can only be created with the tax rule 'Umsatzsteuerpflichtige Umsätze (taxRule: 1)'(for Regelbesteuerer) or 'Steuer nicht erhoben nach §19 UStG (taxRule: 11)'(for Kleinunternehmer)</li> <li>Creating a dunning (<code>invoiceType: 'MA'</code>) with the value of property <code>reminderCharge</code> greater than 0 does not work anymore</li> <li>Creating an advanced invoice (<code>invoiceType: 'AR'</code>), a partial invoice (<code>invoiceType: 'TR'</code>) or a final invoice (<code>invoiceType: 'ER'</code>) with a currency deviating from the clients <code>defaultCurrency</code> is not possible anymore</li> <li>Changing the status manually does not work anymore (see 'Removed endpoint /Invoice/{invoiceId}/changeStatus' below)</li> <li>Enshrining now has to be done by using the [enshrine endpoint](#tag/Invoice/operation/invoiceEnshrine) (see below)</li> </ol>  ### Saving an invoice ([Invoice/Factory/saveInvoice](#tag/Invoice/operation/createInvoiceByFactory))  Following use cases do not work anymore or have changed: <ol> <li>Invoices can only be created with the status <code>DRAFT (100)</code> and can not be changed manually. Use the matching endpoints (e.g. [sendViaEmail](#tag/Invoice/operation/sendInvoiceViaEMail)) to automatically change the status accordingly</li> <li>Setting or changing the property <code>enshrined</code> is now only possible by using the [enshrine endpoint](#tag/CheckAccountTransaction/operation/checkAccountTransactionEnshrine)</li> </ol>  ### Using an order to create an invoice ([Invoice/Factory/createInvoiceFromOrder](#tag/Invoice/operation/createInvoiceFromOrder))  Following use cases do not work anymore or have changed: <ol> <li>Creating a final invoice (partialType: 'ER') is not possible if an advanced invoice (partialType: 'AR') or partial invoice (partialType: 'TR') exists. This functionality will be added in a later update</li> </ol>  ### Removed endpoint /Invoice/{invoiceId}/changeStatus  This endpoint will be completely removed (including sevDesk system version 1.0!). Using these endpoints will automatically change the status accordingly: <ul> <li>[Invoice/{invoiceId}/sendViaEmail](#tag/Invoice/operation/sendInvoiceViaEMail)</li> <li>[Invoice/{invoiceId}/sendBy](#tag/Invoice/operation/invoiceSendBy)</li> <li>[Invoice/{invoiceId}/bookAmount](#tag/Invoice/operation/bookInvoice)</li> <li>[Invoice/{invoiceId}/resetToDraft](#tag/Invoice/operation/invoiceResetToDraft)</li> <li>[Invoice/{invoiceId}/resetToOpen](#tag/Invoice/operation/invoiceResetToOpen)</li> </ul>  ### New endpoint [Invoice/{invoiceId}/resetToDraft](#tag/Invoice/operation/invoiceResetToDraft)  This new endpoint can be used to reset the status of an invoice to <code>DRAFT (100)</code>.  ### New endpoint [Invoice/{invoiceId}/resetToOpen](#tag/Invoice/operation/invoiceResetToOpen)  This new endpoint can be used to reset the status of an invoice to <code>OPEN (200)</code>.  ### New endpoint [Invoice/{invoiceId}/enshrine]((#tag/Invoice/operation/invoiceEnshrine))  The enshrine endpoint is now used to set the property <code>enshrined</code>. <b>This operation CAN NOT be undone due to legal reasons!</b>  ## Credit Notes  The changes to the vat rules also apply here. Check the documentation of voucher above as the changes are the same.  ### General stricter validation in PUT and POST endpoints  We added stricter validation to ensure only correct credit notes are created which than can be further processed in sevDesk. Due to the move from taxTypes/taxSets to taxRules you need to check the compatibility of the taxRules in combination with the tax rates. Following use cases do not work anymore or have changed: <ol> <li>Creating a credit note without a date of delivery (<code>deliveryDateUntil</code>) for an invoice that has a date of delivery (<code>deliveryDateUntil</code>) is no longer possible</li> <li>Creating a credit note with a date of delivery (<code>deliveryDateUntil</code>) for an invoice that has no date of delivery (<code>deliveryDateUntil</code>) is no longer possible</li> <li>Creating a credit note with a date of delivery (<code>deliveryDateUntil</code>) that is before the date of delivery (<code>deliveryDateUntil</code>) of the invoice is no longer possible</li> <li>Creating a credit note for an advanced invoice (<code>invoiceType: 'AR'</code>) or partial invoice (<code>invoiceType: 'TR'</code>) is no longer possible</li> <li>Creating a credit note for a voucher is no longer possible</li> <li>Creating a credit note with a <code>bookingCategory</code> other than <code>UNDERACHIEVEMENT</code> is no longer possible</li> <li>Currency fluctuation (CF) is no longer supported as a payment difference</li> </ol>  ### Saving a credit note ([CreditNote/Factory/saveCreditNote](#tag/CreditNote/operation/createcreditNote))  Following use cases do not work anymore or have changed: <ol> <li>Credit notes can only be created with the status <code>DRAFT (100)</code> and can not be changed manually. Use the matching endpoints (e.g. [sendViaEmail](#tag/CreditNote/operation/sendCreditNoteViaEMail)) to automatically change the status accordingly</li> <li>Enshrining now has to be done by using the enshrine endpoint (see below)</li> </ol>  ### Removed endpoint /CreditNote/Factory/createFromVoucher  The endpoint will be removed. It is not possible anymore to create credit notes for vouchers within sevDesk-Update 2.0. The endpoint continues to stay available for existing sevDesk system version 1.0 clients.  ### Removed endpoint /CreditNote/{creditNoteId}/changeStatus  This endpoint will be completely removed (including sevDesk system version 1.0!). Using these endpoints will automatically change the status accordingly: <ul> <li>[CreditNote/{creditNoteId}/sendViaEmail](#tag/CreditNote/operation/sendCreditNoteViaEMail)</li> <li>[CreditNote/{creditNoteId}/sendBy](#tag/CreditNote/operation/creditNoteSendBy)</li> <li>[CreditNote/{creditNoteId}/bookAmount](#tag/CreditNote/operation/bookCreditNote)</li> <li>[CreditNote/{creditNoteId}/resetToDraft](#tag/CreditNote/operation/creditNoteResetToDraft)</li> <li>[CreditNote/{creditNoteId}/resetToOpen](#tag/CreditNote/operation/creditNoteResetToOpen)</li> </ul>  ### New endpoint CreditNote/{creditNoteId}/resetToDraft  This new endpoint can be used to reset the status of a credit note to <code>DRAFT (100)</code>. You can find the documentation [here](#tag/CreditNote/operation/creditNoteResetToDraft).  ### New endpoint CreditNote/{creditNoteId}/resetToOpen  This new endpoint can be used to reset the status of a credit note to <code>OPEN (200)</code>. You can find the documentation [here](#tag/CreditNote/operation/creditNoteResetToOpen).  ### New endpoint CreditNote/{creditNoteId}/enshrine  [The enshrine endpoint](#tag/CreditNote/operation/creditNoteEnshrine) is now used to set the property <code>enshrined</code>. <b>This operation CAN NOT be undone due to legal reasons!</b> ## Parts   ### General stricter validation in PUT and POST endpoints  Following use cases do not work anymore or have changed: <ol> <li>Creating products with a tax rate other than 0.0, 7.0 and 19.0 is no longer possible</li> </ol>
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Itsmind\Sevdesk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Itsmind\Sevdesk\ApiException;
use Itsmind\Sevdesk\Configuration;
use Itsmind\Sevdesk\HeaderSelector;
use Itsmind\Sevdesk\ObjectSerializer;

/**
 * CreditNoteApi Class Doc Comment
 *
 * @category Class
 * @package  Itsmind\Sevdesk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreditNoteApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'bookCreditNote' => [
            'application/json',
        ],
        'createCreditNoteFromInvoice' => [
            'application/json',
        ],
        'createCreditNoteFromVoucher' => [
            'application/json',
        ],
        'createcreditNote' => [
            'application/json',
        ],
        'creditNoteEnshrine' => [
            'application/json',
        ],
        'creditNoteGetPdf' => [
            'application/json',
        ],
        'creditNoteResetToDraft' => [
            'application/json',
        ],
        'creditNoteResetToOpen' => [
            'application/json',
        ],
        'creditNoteSendBy' => [
            'application/json',
        ],
        'deletecreditNote' => [
            'application/json',
        ],
        'getCreditNotes' => [
            'application/json',
        ],
        'getcreditNoteById' => [
            'application/json',
        ],
        'sendCreditNoteByPrinting' => [
            'application/json',
        ],
        'sendCreditNoteViaEMail' => [
            'application/json',
        ],
        'updatecreditNote' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation bookCreditNote
     *
     * Book a credit note
     *
     * @param  int $credit_note_id ID of credit note to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookCreditNoteRequest $book_credit_note_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookCreditNote'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\BookCreditNote200Response
     */
    public function bookCreditNote($credit_note_id, $book_credit_note_request = null, string $contentType = self::contentTypes['bookCreditNote'][0])
    {
        list($response) = $this->bookCreditNoteWithHttpInfo($credit_note_id, $book_credit_note_request, $contentType);
        return $response;
    }

    /**
     * Operation bookCreditNoteWithHttpInfo
     *
     * Book a credit note
     *
     * @param  int $credit_note_id ID of credit note to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookCreditNoteRequest $book_credit_note_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookCreditNote'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\BookCreditNote200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function bookCreditNoteWithHttpInfo($credit_note_id, $book_credit_note_request = null, string $contentType = self::contentTypes['bookCreditNote'][0])
    {
        $request = $this->bookCreditNoteRequest($credit_note_id, $book_credit_note_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\BookCreditNote200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\BookCreditNote200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\BookCreditNote200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\BookCreditNote200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\BookCreditNote200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation bookCreditNoteAsync
     *
     * Book a credit note
     *
     * @param  int $credit_note_id ID of credit note to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookCreditNoteRequest $book_credit_note_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookCreditNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bookCreditNoteAsync($credit_note_id, $book_credit_note_request = null, string $contentType = self::contentTypes['bookCreditNote'][0])
    {
        return $this->bookCreditNoteAsyncWithHttpInfo($credit_note_id, $book_credit_note_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bookCreditNoteAsyncWithHttpInfo
     *
     * Book a credit note
     *
     * @param  int $credit_note_id ID of credit note to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookCreditNoteRequest $book_credit_note_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookCreditNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bookCreditNoteAsyncWithHttpInfo($credit_note_id, $book_credit_note_request = null, string $contentType = self::contentTypes['bookCreditNote'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\BookCreditNote200Response';
        $request = $this->bookCreditNoteRequest($credit_note_id, $book_credit_note_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bookCreditNote'
     *
     * @param  int $credit_note_id ID of credit note to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookCreditNoteRequest $book_credit_note_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookCreditNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bookCreditNoteRequest($credit_note_id, $book_credit_note_request = null, string $contentType = self::contentTypes['bookCreditNote'][0])
    {

        // verify the required parameter 'credit_note_id' is set
        if ($credit_note_id === null || (is_array($credit_note_id) && count($credit_note_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_note_id when calling bookCreditNote'
            );
        }



        $resourcePath = '/CreditNote/{creditNoteId}/bookAmount';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($credit_note_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditNoteId' . '}',
                ObjectSerializer::toPathValue($credit_note_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($book_credit_note_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($book_credit_note_request));
            } else {
                $httpBody = $book_credit_note_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createCreditNoteFromInvoice
     *
     * Creates a new creditNote from an invoice
     *
     * @param  \Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoiceRequest $create_credit_note_from_invoice_request create_credit_note_from_invoice_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCreditNoteFromInvoice'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response
     */
    public function createCreditNoteFromInvoice($create_credit_note_from_invoice_request = null, string $contentType = self::contentTypes['createCreditNoteFromInvoice'][0])
    {
        list($response) = $this->createCreditNoteFromInvoiceWithHttpInfo($create_credit_note_from_invoice_request, $contentType);
        return $response;
    }

    /**
     * Operation createCreditNoteFromInvoiceWithHttpInfo
     *
     * Creates a new creditNote from an invoice
     *
     * @param  \Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoiceRequest $create_credit_note_from_invoice_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCreditNoteFromInvoice'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCreditNoteFromInvoiceWithHttpInfo($create_credit_note_from_invoice_request = null, string $contentType = self::contentTypes['createCreditNoteFromInvoice'][0])
    {
        $request = $this->createCreditNoteFromInvoiceRequest($create_credit_note_from_invoice_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createCreditNoteFromInvoiceAsync
     *
     * Creates a new creditNote from an invoice
     *
     * @param  \Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoiceRequest $create_credit_note_from_invoice_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCreditNoteFromInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCreditNoteFromInvoiceAsync($create_credit_note_from_invoice_request = null, string $contentType = self::contentTypes['createCreditNoteFromInvoice'][0])
    {
        return $this->createCreditNoteFromInvoiceAsyncWithHttpInfo($create_credit_note_from_invoice_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createCreditNoteFromInvoiceAsyncWithHttpInfo
     *
     * Creates a new creditNote from an invoice
     *
     * @param  \Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoiceRequest $create_credit_note_from_invoice_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCreditNoteFromInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCreditNoteFromInvoiceAsyncWithHttpInfo($create_credit_note_from_invoice_request = null, string $contentType = self::contentTypes['createCreditNoteFromInvoice'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response';
        $request = $this->createCreditNoteFromInvoiceRequest($create_credit_note_from_invoice_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createCreditNoteFromInvoice'
     *
     * @param  \Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoiceRequest $create_credit_note_from_invoice_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCreditNoteFromInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createCreditNoteFromInvoiceRequest($create_credit_note_from_invoice_request = null, string $contentType = self::contentTypes['createCreditNoteFromInvoice'][0])
    {



        $resourcePath = '/CreditNote/Factory/createFromInvoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($create_credit_note_from_invoice_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($create_credit_note_from_invoice_request));
            } else {
                $httpBody = $create_credit_note_from_invoice_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createCreditNoteFromVoucher
     *
     * Creates a new creditNote from a voucher
     *
     * @param  \Itsmind\Sevdesk\Model\CreateCreditNoteFromVoucherRequest $create_credit_note_from_voucher_request create_credit_note_from_voucher_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCreditNoteFromVoucher'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response
     */
    public function createCreditNoteFromVoucher($create_credit_note_from_voucher_request = null, string $contentType = self::contentTypes['createCreditNoteFromVoucher'][0])
    {
        list($response) = $this->createCreditNoteFromVoucherWithHttpInfo($create_credit_note_from_voucher_request, $contentType);
        return $response;
    }

    /**
     * Operation createCreditNoteFromVoucherWithHttpInfo
     *
     * Creates a new creditNote from a voucher
     *
     * @param  \Itsmind\Sevdesk\Model\CreateCreditNoteFromVoucherRequest $create_credit_note_from_voucher_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCreditNoteFromVoucher'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCreditNoteFromVoucherWithHttpInfo($create_credit_note_from_voucher_request = null, string $contentType = self::contentTypes['createCreditNoteFromVoucher'][0])
    {
        $request = $this->createCreditNoteFromVoucherRequest($create_credit_note_from_voucher_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createCreditNoteFromVoucherAsync
     *
     * Creates a new creditNote from a voucher
     *
     * @param  \Itsmind\Sevdesk\Model\CreateCreditNoteFromVoucherRequest $create_credit_note_from_voucher_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCreditNoteFromVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCreditNoteFromVoucherAsync($create_credit_note_from_voucher_request = null, string $contentType = self::contentTypes['createCreditNoteFromVoucher'][0])
    {
        return $this->createCreditNoteFromVoucherAsyncWithHttpInfo($create_credit_note_from_voucher_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createCreditNoteFromVoucherAsyncWithHttpInfo
     *
     * Creates a new creditNote from a voucher
     *
     * @param  \Itsmind\Sevdesk\Model\CreateCreditNoteFromVoucherRequest $create_credit_note_from_voucher_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCreditNoteFromVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCreditNoteFromVoucherAsyncWithHttpInfo($create_credit_note_from_voucher_request = null, string $contentType = self::contentTypes['createCreditNoteFromVoucher'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response';
        $request = $this->createCreditNoteFromVoucherRequest($create_credit_note_from_voucher_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createCreditNoteFromVoucher'
     *
     * @param  \Itsmind\Sevdesk\Model\CreateCreditNoteFromVoucherRequest $create_credit_note_from_voucher_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCreditNoteFromVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createCreditNoteFromVoucherRequest($create_credit_note_from_voucher_request = null, string $contentType = self::contentTypes['createCreditNoteFromVoucher'][0])
    {



        $resourcePath = '/CreditNote/Factory/createFromVoucher';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($create_credit_note_from_voucher_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($create_credit_note_from_voucher_request));
            } else {
                $httpBody = $create_credit_note_from_voucher_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createcreditNote
     *
     * Create a new creditNote
     *
     * @param  \Itsmind\Sevdesk\Model\SaveCreditNote $save_credit_note Creation data. Please be aware, that you need to provide at least all required parameter      of the credit note model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createcreditNote'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\SaveCreditNoteResponse
     */
    public function createcreditNote($save_credit_note = null, string $contentType = self::contentTypes['createcreditNote'][0])
    {
        list($response) = $this->createcreditNoteWithHttpInfo($save_credit_note, $contentType);
        return $response;
    }

    /**
     * Operation createcreditNoteWithHttpInfo
     *
     * Create a new creditNote
     *
     * @param  \Itsmind\Sevdesk\Model\SaveCreditNote $save_credit_note Creation data. Please be aware, that you need to provide at least all required parameter      of the credit note model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createcreditNote'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\SaveCreditNoteResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createcreditNoteWithHttpInfo($save_credit_note = null, string $contentType = self::contentTypes['createcreditNote'][0])
    {
        $request = $this->createcreditNoteRequest($save_credit_note, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\Itsmind\Sevdesk\Model\SaveCreditNoteResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\SaveCreditNoteResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\SaveCreditNoteResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\SaveCreditNoteResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\SaveCreditNoteResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createcreditNoteAsync
     *
     * Create a new creditNote
     *
     * @param  \Itsmind\Sevdesk\Model\SaveCreditNote $save_credit_note Creation data. Please be aware, that you need to provide at least all required parameter      of the credit note model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createcreditNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createcreditNoteAsync($save_credit_note = null, string $contentType = self::contentTypes['createcreditNote'][0])
    {
        return $this->createcreditNoteAsyncWithHttpInfo($save_credit_note, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createcreditNoteAsyncWithHttpInfo
     *
     * Create a new creditNote
     *
     * @param  \Itsmind\Sevdesk\Model\SaveCreditNote $save_credit_note Creation data. Please be aware, that you need to provide at least all required parameter      of the credit note model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createcreditNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createcreditNoteAsyncWithHttpInfo($save_credit_note = null, string $contentType = self::contentTypes['createcreditNote'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\SaveCreditNoteResponse';
        $request = $this->createcreditNoteRequest($save_credit_note, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createcreditNote'
     *
     * @param  \Itsmind\Sevdesk\Model\SaveCreditNote $save_credit_note Creation data. Please be aware, that you need to provide at least all required parameter      of the credit note model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createcreditNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createcreditNoteRequest($save_credit_note = null, string $contentType = self::contentTypes['createcreditNote'][0])
    {



        $resourcePath = '/CreditNote/Factory/saveCreditNote';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($save_credit_note)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($save_credit_note));
            } else {
                $httpBody = $save_credit_note;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation creditNoteEnshrine
     *
     * Enshrine
     *
     * @param  int $credit_note_id ID of the credit note to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteEnshrine'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response|\Itsmind\Sevdesk\Model\ValidationError
     */
    public function creditNoteEnshrine($credit_note_id, string $contentType = self::contentTypes['creditNoteEnshrine'][0])
    {
        list($response) = $this->creditNoteEnshrineWithHttpInfo($credit_note_id, $contentType);
        return $response;
    }

    /**
     * Operation creditNoteEnshrineWithHttpInfo
     *
     * Enshrine
     *
     * @param  int $credit_note_id ID of the credit note to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteEnshrine'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response|\Itsmind\Sevdesk\Model\ValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function creditNoteEnshrineWithHttpInfo($credit_note_id, string $contentType = self::contentTypes['creditNoteEnshrine'][0])
    {
        $request = $this->creditNoteEnshrineRequest($credit_note_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Itsmind\Sevdesk\Model\ValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ValidationError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\ValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation creditNoteEnshrineAsync
     *
     * Enshrine
     *
     * @param  int $credit_note_id ID of the credit note to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteEnshrine'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditNoteEnshrineAsync($credit_note_id, string $contentType = self::contentTypes['creditNoteEnshrine'][0])
    {
        return $this->creditNoteEnshrineAsyncWithHttpInfo($credit_note_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation creditNoteEnshrineAsyncWithHttpInfo
     *
     * Enshrine
     *
     * @param  int $credit_note_id ID of the credit note to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteEnshrine'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditNoteEnshrineAsyncWithHttpInfo($credit_note_id, string $contentType = self::contentTypes['creditNoteEnshrine'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response';
        $request = $this->creditNoteEnshrineRequest($credit_note_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'creditNoteEnshrine'
     *
     * @param  int $credit_note_id ID of the credit note to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteEnshrine'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function creditNoteEnshrineRequest($credit_note_id, string $contentType = self::contentTypes['creditNoteEnshrine'][0])
    {

        // verify the required parameter 'credit_note_id' is set
        if ($credit_note_id === null || (is_array($credit_note_id) && count($credit_note_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_note_id when calling creditNoteEnshrine'
            );
        }


        $resourcePath = '/CreditNote/{creditNoteId}/enshrine';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($credit_note_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditNoteId' . '}',
                ObjectSerializer::toPathValue($credit_note_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation creditNoteGetPdf
     *
     * Retrieve pdf document of a credit note
     *
     * @param  int $credit_note_id ID of credit note from which you want the pdf (required)
     * @param  bool $download If u want to download the pdf of the credit note. (optional)
     * @param  bool $prevent_send_by Defines if u want to send the credit note. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteGetPdf'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\CreditNoteGetPdf200Response
     */
    public function creditNoteGetPdf($credit_note_id, $download = null, $prevent_send_by = null, string $contentType = self::contentTypes['creditNoteGetPdf'][0])
    {
        list($response) = $this->creditNoteGetPdfWithHttpInfo($credit_note_id, $download, $prevent_send_by, $contentType);
        return $response;
    }

    /**
     * Operation creditNoteGetPdfWithHttpInfo
     *
     * Retrieve pdf document of a credit note
     *
     * @param  int $credit_note_id ID of credit note from which you want the pdf (required)
     * @param  bool $download If u want to download the pdf of the credit note. (optional)
     * @param  bool $prevent_send_by Defines if u want to send the credit note. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteGetPdf'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\CreditNoteGetPdf200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function creditNoteGetPdfWithHttpInfo($credit_note_id, $download = null, $prevent_send_by = null, string $contentType = self::contentTypes['creditNoteGetPdf'][0])
    {
        $request = $this->creditNoteGetPdfRequest($credit_note_id, $download, $prevent_send_by, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\CreditNoteGetPdf200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\CreditNoteGetPdf200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\CreditNoteGetPdf200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\CreditNoteGetPdf200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\CreditNoteGetPdf200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation creditNoteGetPdfAsync
     *
     * Retrieve pdf document of a credit note
     *
     * @param  int $credit_note_id ID of credit note from which you want the pdf (required)
     * @param  bool $download If u want to download the pdf of the credit note. (optional)
     * @param  bool $prevent_send_by Defines if u want to send the credit note. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteGetPdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditNoteGetPdfAsync($credit_note_id, $download = null, $prevent_send_by = null, string $contentType = self::contentTypes['creditNoteGetPdf'][0])
    {
        return $this->creditNoteGetPdfAsyncWithHttpInfo($credit_note_id, $download, $prevent_send_by, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation creditNoteGetPdfAsyncWithHttpInfo
     *
     * Retrieve pdf document of a credit note
     *
     * @param  int $credit_note_id ID of credit note from which you want the pdf (required)
     * @param  bool $download If u want to download the pdf of the credit note. (optional)
     * @param  bool $prevent_send_by Defines if u want to send the credit note. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteGetPdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditNoteGetPdfAsyncWithHttpInfo($credit_note_id, $download = null, $prevent_send_by = null, string $contentType = self::contentTypes['creditNoteGetPdf'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\CreditNoteGetPdf200Response';
        $request = $this->creditNoteGetPdfRequest($credit_note_id, $download, $prevent_send_by, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'creditNoteGetPdf'
     *
     * @param  int $credit_note_id ID of credit note from which you want the pdf (required)
     * @param  bool $download If u want to download the pdf of the credit note. (optional)
     * @param  bool $prevent_send_by Defines if u want to send the credit note. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteGetPdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function creditNoteGetPdfRequest($credit_note_id, $download = null, $prevent_send_by = null, string $contentType = self::contentTypes['creditNoteGetPdf'][0])
    {

        // verify the required parameter 'credit_note_id' is set
        if ($credit_note_id === null || (is_array($credit_note_id) && count($credit_note_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_note_id when calling creditNoteGetPdf'
            );
        }




        $resourcePath = '/CreditNote/{creditNoteId}/getPdf';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $download,
            'download', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $prevent_send_by,
            'preventSendBy', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($credit_note_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditNoteId' . '}',
                ObjectSerializer::toPathValue($credit_note_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation creditNoteResetToDraft
     *
     * Reset status to draft
     *
     * @param  int $credit_note_id ID of the credit note to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteResetToDraft'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\CreditNoteResetToDraft200Response|\Itsmind\Sevdesk\Model\ValidationError
     */
    public function creditNoteResetToDraft($credit_note_id, string $contentType = self::contentTypes['creditNoteResetToDraft'][0])
    {
        list($response) = $this->creditNoteResetToDraftWithHttpInfo($credit_note_id, $contentType);
        return $response;
    }

    /**
     * Operation creditNoteResetToDraftWithHttpInfo
     *
     * Reset status to draft
     *
     * @param  int $credit_note_id ID of the credit note to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteResetToDraft'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\CreditNoteResetToDraft200Response|\Itsmind\Sevdesk\Model\ValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function creditNoteResetToDraftWithHttpInfo($credit_note_id, string $contentType = self::contentTypes['creditNoteResetToDraft'][0])
    {
        $request = $this->creditNoteResetToDraftRequest($credit_note_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\CreditNoteResetToDraft200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\CreditNoteResetToDraft200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\CreditNoteResetToDraft200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Itsmind\Sevdesk\Model\ValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ValidationError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\CreditNoteResetToDraft200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\CreditNoteResetToDraft200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\ValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation creditNoteResetToDraftAsync
     *
     * Reset status to draft
     *
     * @param  int $credit_note_id ID of the credit note to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteResetToDraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditNoteResetToDraftAsync($credit_note_id, string $contentType = self::contentTypes['creditNoteResetToDraft'][0])
    {
        return $this->creditNoteResetToDraftAsyncWithHttpInfo($credit_note_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation creditNoteResetToDraftAsyncWithHttpInfo
     *
     * Reset status to draft
     *
     * @param  int $credit_note_id ID of the credit note to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteResetToDraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditNoteResetToDraftAsyncWithHttpInfo($credit_note_id, string $contentType = self::contentTypes['creditNoteResetToDraft'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\CreditNoteResetToDraft200Response';
        $request = $this->creditNoteResetToDraftRequest($credit_note_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'creditNoteResetToDraft'
     *
     * @param  int $credit_note_id ID of the credit note to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteResetToDraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function creditNoteResetToDraftRequest($credit_note_id, string $contentType = self::contentTypes['creditNoteResetToDraft'][0])
    {

        // verify the required parameter 'credit_note_id' is set
        if ($credit_note_id === null || (is_array($credit_note_id) && count($credit_note_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_note_id when calling creditNoteResetToDraft'
            );
        }


        $resourcePath = '/CreditNote/{creditNoteId}/resetToDraft';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($credit_note_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditNoteId' . '}',
                ObjectSerializer::toPathValue($credit_note_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation creditNoteResetToOpen
     *
     * Reset status to open
     *
     * @param  int $credit_note_id ID of the credit note to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteResetToOpen'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\CreditNoteResetToOpen200Response|\Itsmind\Sevdesk\Model\ValidationError
     */
    public function creditNoteResetToOpen($credit_note_id, string $contentType = self::contentTypes['creditNoteResetToOpen'][0])
    {
        list($response) = $this->creditNoteResetToOpenWithHttpInfo($credit_note_id, $contentType);
        return $response;
    }

    /**
     * Operation creditNoteResetToOpenWithHttpInfo
     *
     * Reset status to open
     *
     * @param  int $credit_note_id ID of the credit note to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteResetToOpen'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\CreditNoteResetToOpen200Response|\Itsmind\Sevdesk\Model\ValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function creditNoteResetToOpenWithHttpInfo($credit_note_id, string $contentType = self::contentTypes['creditNoteResetToOpen'][0])
    {
        $request = $this->creditNoteResetToOpenRequest($credit_note_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\CreditNoteResetToOpen200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\CreditNoteResetToOpen200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\CreditNoteResetToOpen200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Itsmind\Sevdesk\Model\ValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ValidationError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\CreditNoteResetToOpen200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\CreditNoteResetToOpen200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\ValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation creditNoteResetToOpenAsync
     *
     * Reset status to open
     *
     * @param  int $credit_note_id ID of the credit note to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteResetToOpen'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditNoteResetToOpenAsync($credit_note_id, string $contentType = self::contentTypes['creditNoteResetToOpen'][0])
    {
        return $this->creditNoteResetToOpenAsyncWithHttpInfo($credit_note_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation creditNoteResetToOpenAsyncWithHttpInfo
     *
     * Reset status to open
     *
     * @param  int $credit_note_id ID of the credit note to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteResetToOpen'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditNoteResetToOpenAsyncWithHttpInfo($credit_note_id, string $contentType = self::contentTypes['creditNoteResetToOpen'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\CreditNoteResetToOpen200Response';
        $request = $this->creditNoteResetToOpenRequest($credit_note_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'creditNoteResetToOpen'
     *
     * @param  int $credit_note_id ID of the credit note to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteResetToOpen'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function creditNoteResetToOpenRequest($credit_note_id, string $contentType = self::contentTypes['creditNoteResetToOpen'][0])
    {

        // verify the required parameter 'credit_note_id' is set
        if ($credit_note_id === null || (is_array($credit_note_id) && count($credit_note_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_note_id when calling creditNoteResetToOpen'
            );
        }


        $resourcePath = '/CreditNote/{creditNoteId}/resetToOpen';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($credit_note_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditNoteId' . '}',
                ObjectSerializer::toPathValue($credit_note_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation creditNoteSendBy
     *
     * Mark credit note as sent
     *
     * @param  int $credit_note_id ID of credit note to mark as sent (required)
     * @param  \Itsmind\Sevdesk\Model\CreditNoteSendByRequest $credit_note_send_by_request Specify the send type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteSendBy'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\ModelCreditNoteResponse
     */
    public function creditNoteSendBy($credit_note_id, $credit_note_send_by_request = null, string $contentType = self::contentTypes['creditNoteSendBy'][0])
    {
        list($response) = $this->creditNoteSendByWithHttpInfo($credit_note_id, $credit_note_send_by_request, $contentType);
        return $response;
    }

    /**
     * Operation creditNoteSendByWithHttpInfo
     *
     * Mark credit note as sent
     *
     * @param  int $credit_note_id ID of credit note to mark as sent (required)
     * @param  \Itsmind\Sevdesk\Model\CreditNoteSendByRequest $credit_note_send_by_request Specify the send type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteSendBy'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\ModelCreditNoteResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function creditNoteSendByWithHttpInfo($credit_note_id, $credit_note_send_by_request = null, string $contentType = self::contentTypes['creditNoteSendBy'][0])
    {
        $request = $this->creditNoteSendByRequest($credit_note_id, $credit_note_send_by_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\ModelCreditNoteResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ModelCreditNoteResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ModelCreditNoteResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\ModelCreditNoteResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\ModelCreditNoteResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation creditNoteSendByAsync
     *
     * Mark credit note as sent
     *
     * @param  int $credit_note_id ID of credit note to mark as sent (required)
     * @param  \Itsmind\Sevdesk\Model\CreditNoteSendByRequest $credit_note_send_by_request Specify the send type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteSendBy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditNoteSendByAsync($credit_note_id, $credit_note_send_by_request = null, string $contentType = self::contentTypes['creditNoteSendBy'][0])
    {
        return $this->creditNoteSendByAsyncWithHttpInfo($credit_note_id, $credit_note_send_by_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation creditNoteSendByAsyncWithHttpInfo
     *
     * Mark credit note as sent
     *
     * @param  int $credit_note_id ID of credit note to mark as sent (required)
     * @param  \Itsmind\Sevdesk\Model\CreditNoteSendByRequest $credit_note_send_by_request Specify the send type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteSendBy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function creditNoteSendByAsyncWithHttpInfo($credit_note_id, $credit_note_send_by_request = null, string $contentType = self::contentTypes['creditNoteSendBy'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\ModelCreditNoteResponse';
        $request = $this->creditNoteSendByRequest($credit_note_id, $credit_note_send_by_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'creditNoteSendBy'
     *
     * @param  int $credit_note_id ID of credit note to mark as sent (required)
     * @param  \Itsmind\Sevdesk\Model\CreditNoteSendByRequest $credit_note_send_by_request Specify the send type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['creditNoteSendBy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function creditNoteSendByRequest($credit_note_id, $credit_note_send_by_request = null, string $contentType = self::contentTypes['creditNoteSendBy'][0])
    {

        // verify the required parameter 'credit_note_id' is set
        if ($credit_note_id === null || (is_array($credit_note_id) && count($credit_note_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_note_id when calling creditNoteSendBy'
            );
        }



        $resourcePath = '/CreditNote/{creditNoteId}/sendBy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($credit_note_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditNoteId' . '}',
                ObjectSerializer::toPathValue($credit_note_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($credit_note_send_by_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($credit_note_send_by_request));
            } else {
                $httpBody = $credit_note_send_by_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deletecreditNote
     *
     * Deletes an creditNote
     *
     * @param  int $credit_note_id Id of creditNote resource to delete (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletecreditNote'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\GetcreditNoteById200Response
     */
    public function deletecreditNote($credit_note_id, string $contentType = self::contentTypes['deletecreditNote'][0])
    {
        list($response) = $this->deletecreditNoteWithHttpInfo($credit_note_id, $contentType);
        return $response;
    }

    /**
     * Operation deletecreditNoteWithHttpInfo
     *
     * Deletes an creditNote
     *
     * @param  int $credit_note_id Id of creditNote resource to delete (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletecreditNote'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\GetcreditNoteById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletecreditNoteWithHttpInfo($credit_note_id, string $contentType = self::contentTypes['deletecreditNote'][0])
    {
        $request = $this->deletecreditNoteRequest($credit_note_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\GetcreditNoteById200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\GetcreditNoteById200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\GetcreditNoteById200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\GetcreditNoteById200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\GetcreditNoteById200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deletecreditNoteAsync
     *
     * Deletes an creditNote
     *
     * @param  int $credit_note_id Id of creditNote resource to delete (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletecreditNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletecreditNoteAsync($credit_note_id, string $contentType = self::contentTypes['deletecreditNote'][0])
    {
        return $this->deletecreditNoteAsyncWithHttpInfo($credit_note_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deletecreditNoteAsyncWithHttpInfo
     *
     * Deletes an creditNote
     *
     * @param  int $credit_note_id Id of creditNote resource to delete (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletecreditNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletecreditNoteAsyncWithHttpInfo($credit_note_id, string $contentType = self::contentTypes['deletecreditNote'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\GetcreditNoteById200Response';
        $request = $this->deletecreditNoteRequest($credit_note_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deletecreditNote'
     *
     * @param  int $credit_note_id Id of creditNote resource to delete (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletecreditNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deletecreditNoteRequest($credit_note_id, string $contentType = self::contentTypes['deletecreditNote'][0])
    {

        // verify the required parameter 'credit_note_id' is set
        if ($credit_note_id === null || (is_array($credit_note_id) && count($credit_note_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_note_id when calling deletecreditNote'
            );
        }


        $resourcePath = '/CreditNote/{creditNoteId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($credit_note_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditNoteId' . '}',
                ObjectSerializer::toPathValue($credit_note_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCreditNotes
     *
     * Retrieve CreditNote
     *
     * @param  string $status Status of the CreditNote (optional)
     * @param  string $credit_note_number Retrieve all CreditNotes with this creditNote number (optional)
     * @param  int $start_date Retrieve all CreditNotes with a date equal or higher (optional)
     * @param  int $end_date Retrieve all CreditNotes with a date equal or lower (optional)
     * @param  int $contact_id Retrieve all CreditNotes with this contact. Must be provided with contact[objectName] (optional)
     * @param  string $contact_object_name Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. (optional)
     * @param  bool $count_all If all objects should be counted (optional)
     * @param  int $offset Which offset to start with (optional)
     * @param  int $limit The max number of objects to return (optional)
     * @param  string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCreditNotes'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\GetCreditNotes200Response
     */
    public function getCreditNotes($status = null, $credit_note_number = null, $start_date = null, $end_date = null, $contact_id = null, $contact_object_name = null, $count_all = null, $offset = null, $limit = null, $embed = null, string $contentType = self::contentTypes['getCreditNotes'][0])
    {
        list($response) = $this->getCreditNotesWithHttpInfo($status, $credit_note_number, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed, $contentType);
        return $response;
    }

    /**
     * Operation getCreditNotesWithHttpInfo
     *
     * Retrieve CreditNote
     *
     * @param  string $status Status of the CreditNote (optional)
     * @param  string $credit_note_number Retrieve all CreditNotes with this creditNote number (optional)
     * @param  int $start_date Retrieve all CreditNotes with a date equal or higher (optional)
     * @param  int $end_date Retrieve all CreditNotes with a date equal or lower (optional)
     * @param  int $contact_id Retrieve all CreditNotes with this contact. Must be provided with contact[objectName] (optional)
     * @param  string $contact_object_name Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. (optional)
     * @param  bool $count_all If all objects should be counted (optional)
     * @param  int $offset Which offset to start with (optional)
     * @param  int $limit The max number of objects to return (optional)
     * @param  string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCreditNotes'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\GetCreditNotes200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCreditNotesWithHttpInfo($status = null, $credit_note_number = null, $start_date = null, $end_date = null, $contact_id = null, $contact_object_name = null, $count_all = null, $offset = null, $limit = null, $embed = null, string $contentType = self::contentTypes['getCreditNotes'][0])
    {
        $request = $this->getCreditNotesRequest($status, $credit_note_number, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\GetCreditNotes200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\GetCreditNotes200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\GetCreditNotes200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\GetCreditNotes200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\GetCreditNotes200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCreditNotesAsync
     *
     * Retrieve CreditNote
     *
     * @param  string $status Status of the CreditNote (optional)
     * @param  string $credit_note_number Retrieve all CreditNotes with this creditNote number (optional)
     * @param  int $start_date Retrieve all CreditNotes with a date equal or higher (optional)
     * @param  int $end_date Retrieve all CreditNotes with a date equal or lower (optional)
     * @param  int $contact_id Retrieve all CreditNotes with this contact. Must be provided with contact[objectName] (optional)
     * @param  string $contact_object_name Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. (optional)
     * @param  bool $count_all If all objects should be counted (optional)
     * @param  int $offset Which offset to start with (optional)
     * @param  int $limit The max number of objects to return (optional)
     * @param  string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCreditNotes'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCreditNotesAsync($status = null, $credit_note_number = null, $start_date = null, $end_date = null, $contact_id = null, $contact_object_name = null, $count_all = null, $offset = null, $limit = null, $embed = null, string $contentType = self::contentTypes['getCreditNotes'][0])
    {
        return $this->getCreditNotesAsyncWithHttpInfo($status, $credit_note_number, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCreditNotesAsyncWithHttpInfo
     *
     * Retrieve CreditNote
     *
     * @param  string $status Status of the CreditNote (optional)
     * @param  string $credit_note_number Retrieve all CreditNotes with this creditNote number (optional)
     * @param  int $start_date Retrieve all CreditNotes with a date equal or higher (optional)
     * @param  int $end_date Retrieve all CreditNotes with a date equal or lower (optional)
     * @param  int $contact_id Retrieve all CreditNotes with this contact. Must be provided with contact[objectName] (optional)
     * @param  string $contact_object_name Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. (optional)
     * @param  bool $count_all If all objects should be counted (optional)
     * @param  int $offset Which offset to start with (optional)
     * @param  int $limit The max number of objects to return (optional)
     * @param  string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCreditNotes'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCreditNotesAsyncWithHttpInfo($status = null, $credit_note_number = null, $start_date = null, $end_date = null, $contact_id = null, $contact_object_name = null, $count_all = null, $offset = null, $limit = null, $embed = null, string $contentType = self::contentTypes['getCreditNotes'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\GetCreditNotes200Response';
        $request = $this->getCreditNotesRequest($status, $credit_note_number, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCreditNotes'
     *
     * @param  string $status Status of the CreditNote (optional)
     * @param  string $credit_note_number Retrieve all CreditNotes with this creditNote number (optional)
     * @param  int $start_date Retrieve all CreditNotes with a date equal or higher (optional)
     * @param  int $end_date Retrieve all CreditNotes with a date equal or lower (optional)
     * @param  int $contact_id Retrieve all CreditNotes with this contact. Must be provided with contact[objectName] (optional)
     * @param  string $contact_object_name Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. (optional)
     * @param  bool $count_all If all objects should be counted (optional)
     * @param  int $offset Which offset to start with (optional)
     * @param  int $limit The max number of objects to return (optional)
     * @param  string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCreditNotes'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCreditNotesRequest($status = null, $credit_note_number = null, $start_date = null, $end_date = null, $contact_id = null, $contact_object_name = null, $count_all = null, $offset = null, $limit = null, $embed = null, string $contentType = self::contentTypes['getCreditNotes'][0])
    {












        $resourcePath = '/CreditNote';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $credit_note_number,
            'creditNoteNumber', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $start_date,
            'startDate', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $end_date,
            'endDate', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $contact_id,
            'contact[id]', // param base name
            'integer', // openApiType
            'form', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $contact_object_name,
            'contact[objectName]', // param base name
            'string', // openApiType
            'form', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $count_all,
            'countAll', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $embed,
            'embed', // param base name
            'array', // openApiType
            'form', // style
            false, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getcreditNoteById
     *
     * Find creditNote by ID
     *
     * @param  int $credit_note_id ID of creditNote to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getcreditNoteById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\GetcreditNoteById200Response
     */
    public function getcreditNoteById($credit_note_id, string $contentType = self::contentTypes['getcreditNoteById'][0])
    {
        list($response) = $this->getcreditNoteByIdWithHttpInfo($credit_note_id, $contentType);
        return $response;
    }

    /**
     * Operation getcreditNoteByIdWithHttpInfo
     *
     * Find creditNote by ID
     *
     * @param  int $credit_note_id ID of creditNote to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getcreditNoteById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\GetcreditNoteById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getcreditNoteByIdWithHttpInfo($credit_note_id, string $contentType = self::contentTypes['getcreditNoteById'][0])
    {
        $request = $this->getcreditNoteByIdRequest($credit_note_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\GetcreditNoteById200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\GetcreditNoteById200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\GetcreditNoteById200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\GetcreditNoteById200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\GetcreditNoteById200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getcreditNoteByIdAsync
     *
     * Find creditNote by ID
     *
     * @param  int $credit_note_id ID of creditNote to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getcreditNoteById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getcreditNoteByIdAsync($credit_note_id, string $contentType = self::contentTypes['getcreditNoteById'][0])
    {
        return $this->getcreditNoteByIdAsyncWithHttpInfo($credit_note_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getcreditNoteByIdAsyncWithHttpInfo
     *
     * Find creditNote by ID
     *
     * @param  int $credit_note_id ID of creditNote to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getcreditNoteById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getcreditNoteByIdAsyncWithHttpInfo($credit_note_id, string $contentType = self::contentTypes['getcreditNoteById'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\GetcreditNoteById200Response';
        $request = $this->getcreditNoteByIdRequest($credit_note_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getcreditNoteById'
     *
     * @param  int $credit_note_id ID of creditNote to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getcreditNoteById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getcreditNoteByIdRequest($credit_note_id, string $contentType = self::contentTypes['getcreditNoteById'][0])
    {

        // verify the required parameter 'credit_note_id' is set
        if ($credit_note_id === null || (is_array($credit_note_id) && count($credit_note_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_note_id when calling getcreditNoteById'
            );
        }


        $resourcePath = '/CreditNote/{creditNoteId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($credit_note_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditNoteId' . '}',
                ObjectSerializer::toPathValue($credit_note_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sendCreditNoteByPrinting
     *
     * Send credit note by printing
     *
     * @param  int $credit_note_id ID of creditNote to return (required)
     * @param  string $send_type the type you want to print. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendCreditNoteByPrinting'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\ModelCreditNoteSendByWithRender
     */
    public function sendCreditNoteByPrinting($credit_note_id, $send_type, string $contentType = self::contentTypes['sendCreditNoteByPrinting'][0])
    {
        list($response) = $this->sendCreditNoteByPrintingWithHttpInfo($credit_note_id, $send_type, $contentType);
        return $response;
    }

    /**
     * Operation sendCreditNoteByPrintingWithHttpInfo
     *
     * Send credit note by printing
     *
     * @param  int $credit_note_id ID of creditNote to return (required)
     * @param  string $send_type the type you want to print. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendCreditNoteByPrinting'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\ModelCreditNoteSendByWithRender, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendCreditNoteByPrintingWithHttpInfo($credit_note_id, $send_type, string $contentType = self::contentTypes['sendCreditNoteByPrinting'][0])
    {
        $request = $this->sendCreditNoteByPrintingRequest($credit_note_id, $send_type, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\ModelCreditNoteSendByWithRender' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ModelCreditNoteSendByWithRender' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ModelCreditNoteSendByWithRender', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\ModelCreditNoteSendByWithRender';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\ModelCreditNoteSendByWithRender',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendCreditNoteByPrintingAsync
     *
     * Send credit note by printing
     *
     * @param  int $credit_note_id ID of creditNote to return (required)
     * @param  string $send_type the type you want to print. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendCreditNoteByPrinting'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendCreditNoteByPrintingAsync($credit_note_id, $send_type, string $contentType = self::contentTypes['sendCreditNoteByPrinting'][0])
    {
        return $this->sendCreditNoteByPrintingAsyncWithHttpInfo($credit_note_id, $send_type, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendCreditNoteByPrintingAsyncWithHttpInfo
     *
     * Send credit note by printing
     *
     * @param  int $credit_note_id ID of creditNote to return (required)
     * @param  string $send_type the type you want to print. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendCreditNoteByPrinting'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendCreditNoteByPrintingAsyncWithHttpInfo($credit_note_id, $send_type, string $contentType = self::contentTypes['sendCreditNoteByPrinting'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\ModelCreditNoteSendByWithRender';
        $request = $this->sendCreditNoteByPrintingRequest($credit_note_id, $send_type, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sendCreditNoteByPrinting'
     *
     * @param  int $credit_note_id ID of creditNote to return (required)
     * @param  string $send_type the type you want to print. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendCreditNoteByPrinting'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function sendCreditNoteByPrintingRequest($credit_note_id, $send_type, string $contentType = self::contentTypes['sendCreditNoteByPrinting'][0])
    {

        // verify the required parameter 'credit_note_id' is set
        if ($credit_note_id === null || (is_array($credit_note_id) && count($credit_note_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_note_id when calling sendCreditNoteByPrinting'
            );
        }

        // verify the required parameter 'send_type' is set
        if ($send_type === null || (is_array($send_type) && count($send_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $send_type when calling sendCreditNoteByPrinting'
            );
        }


        $resourcePath = '/CreditNote/{creditNoteId}/sendByWithRender';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $send_type,
            'sendType', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);


        // path params
        if ($credit_note_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditNoteId' . '}',
                ObjectSerializer::toPathValue($credit_note_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sendCreditNoteViaEMail
     *
     * Send credit note via email
     *
     * @param  int $credit_note_id ID of credit note to be sent via email (required)
     * @param  \Itsmind\Sevdesk\Model\SendCreditNoteViaEMailRequest $send_credit_note_via_e_mail_request Mail data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendCreditNoteViaEMail'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\SendCreditNoteViaEMail201Response
     */
    public function sendCreditNoteViaEMail($credit_note_id, $send_credit_note_via_e_mail_request = null, string $contentType = self::contentTypes['sendCreditNoteViaEMail'][0])
    {
        list($response) = $this->sendCreditNoteViaEMailWithHttpInfo($credit_note_id, $send_credit_note_via_e_mail_request, $contentType);
        return $response;
    }

    /**
     * Operation sendCreditNoteViaEMailWithHttpInfo
     *
     * Send credit note via email
     *
     * @param  int $credit_note_id ID of credit note to be sent via email (required)
     * @param  \Itsmind\Sevdesk\Model\SendCreditNoteViaEMailRequest $send_credit_note_via_e_mail_request Mail data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendCreditNoteViaEMail'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\SendCreditNoteViaEMail201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendCreditNoteViaEMailWithHttpInfo($credit_note_id, $send_credit_note_via_e_mail_request = null, string $contentType = self::contentTypes['sendCreditNoteViaEMail'][0])
    {
        $request = $this->sendCreditNoteViaEMailRequest($credit_note_id, $send_credit_note_via_e_mail_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\Itsmind\Sevdesk\Model\SendCreditNoteViaEMail201Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\SendCreditNoteViaEMail201Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\SendCreditNoteViaEMail201Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\SendCreditNoteViaEMail201Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\SendCreditNoteViaEMail201Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendCreditNoteViaEMailAsync
     *
     * Send credit note via email
     *
     * @param  int $credit_note_id ID of credit note to be sent via email (required)
     * @param  \Itsmind\Sevdesk\Model\SendCreditNoteViaEMailRequest $send_credit_note_via_e_mail_request Mail data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendCreditNoteViaEMail'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendCreditNoteViaEMailAsync($credit_note_id, $send_credit_note_via_e_mail_request = null, string $contentType = self::contentTypes['sendCreditNoteViaEMail'][0])
    {
        return $this->sendCreditNoteViaEMailAsyncWithHttpInfo($credit_note_id, $send_credit_note_via_e_mail_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendCreditNoteViaEMailAsyncWithHttpInfo
     *
     * Send credit note via email
     *
     * @param  int $credit_note_id ID of credit note to be sent via email (required)
     * @param  \Itsmind\Sevdesk\Model\SendCreditNoteViaEMailRequest $send_credit_note_via_e_mail_request Mail data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendCreditNoteViaEMail'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendCreditNoteViaEMailAsyncWithHttpInfo($credit_note_id, $send_credit_note_via_e_mail_request = null, string $contentType = self::contentTypes['sendCreditNoteViaEMail'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\SendCreditNoteViaEMail201Response';
        $request = $this->sendCreditNoteViaEMailRequest($credit_note_id, $send_credit_note_via_e_mail_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sendCreditNoteViaEMail'
     *
     * @param  int $credit_note_id ID of credit note to be sent via email (required)
     * @param  \Itsmind\Sevdesk\Model\SendCreditNoteViaEMailRequest $send_credit_note_via_e_mail_request Mail data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendCreditNoteViaEMail'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function sendCreditNoteViaEMailRequest($credit_note_id, $send_credit_note_via_e_mail_request = null, string $contentType = self::contentTypes['sendCreditNoteViaEMail'][0])
    {

        // verify the required parameter 'credit_note_id' is set
        if ($credit_note_id === null || (is_array($credit_note_id) && count($credit_note_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_note_id when calling sendCreditNoteViaEMail'
            );
        }



        $resourcePath = '/CreditNote/{creditNoteId}/sendViaEmail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($credit_note_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditNoteId' . '}',
                ObjectSerializer::toPathValue($credit_note_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($send_credit_note_via_e_mail_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($send_credit_note_via_e_mail_request));
            } else {
                $httpBody = $send_credit_note_via_e_mail_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updatecreditNote
     *
     * Update an existing creditNote
     *
     * @param  int $credit_note_id ID of creditNote to update (required)
     * @param  \Itsmind\Sevdesk\Model\ModelCreditNoteUpdate $model_credit_note_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updatecreditNote'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\GetcreditNoteById200Response
     */
    public function updatecreditNote($credit_note_id, $model_credit_note_update = null, string $contentType = self::contentTypes['updatecreditNote'][0])
    {
        list($response) = $this->updatecreditNoteWithHttpInfo($credit_note_id, $model_credit_note_update, $contentType);
        return $response;
    }

    /**
     * Operation updatecreditNoteWithHttpInfo
     *
     * Update an existing creditNote
     *
     * @param  int $credit_note_id ID of creditNote to update (required)
     * @param  \Itsmind\Sevdesk\Model\ModelCreditNoteUpdate $model_credit_note_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updatecreditNote'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\GetcreditNoteById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatecreditNoteWithHttpInfo($credit_note_id, $model_credit_note_update = null, string $contentType = self::contentTypes['updatecreditNote'][0])
    {
        $request = $this->updatecreditNoteRequest($credit_note_id, $model_credit_note_update, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\GetcreditNoteById200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\GetcreditNoteById200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\GetcreditNoteById200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\GetcreditNoteById200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Itsmind\Sevdesk\Model\GetcreditNoteById200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updatecreditNoteAsync
     *
     * Update an existing creditNote
     *
     * @param  int $credit_note_id ID of creditNote to update (required)
     * @param  \Itsmind\Sevdesk\Model\ModelCreditNoteUpdate $model_credit_note_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updatecreditNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updatecreditNoteAsync($credit_note_id, $model_credit_note_update = null, string $contentType = self::contentTypes['updatecreditNote'][0])
    {
        return $this->updatecreditNoteAsyncWithHttpInfo($credit_note_id, $model_credit_note_update, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updatecreditNoteAsyncWithHttpInfo
     *
     * Update an existing creditNote
     *
     * @param  int $credit_note_id ID of creditNote to update (required)
     * @param  \Itsmind\Sevdesk\Model\ModelCreditNoteUpdate $model_credit_note_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updatecreditNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updatecreditNoteAsyncWithHttpInfo($credit_note_id, $model_credit_note_update = null, string $contentType = self::contentTypes['updatecreditNote'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\GetcreditNoteById200Response';
        $request = $this->updatecreditNoteRequest($credit_note_id, $model_credit_note_update, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'updatecreditNote'
     *
     * @param  int $credit_note_id ID of creditNote to update (required)
     * @param  \Itsmind\Sevdesk\Model\ModelCreditNoteUpdate $model_credit_note_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updatecreditNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updatecreditNoteRequest($credit_note_id, $model_credit_note_update = null, string $contentType = self::contentTypes['updatecreditNote'][0])
    {

        // verify the required parameter 'credit_note_id' is set
        if ($credit_note_id === null || (is_array($credit_note_id) && count($credit_note_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_note_id when calling updatecreditNote'
            );
        }



        $resourcePath = '/CreditNote/{creditNoteId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($credit_note_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditNoteId' . '}',
                ObjectSerializer::toPathValue($credit_note_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($model_credit_note_update)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($model_credit_note_update));
            } else {
                $httpBody = $model_credit_note_update;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
