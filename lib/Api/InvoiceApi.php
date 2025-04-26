<?php
/**
 * InvoiceApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Itsmind\Sevdesk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * sevdesk API
 *
 * <b>Contact:</b> To contact our support click  <a href='https://landing.sevdesk.de/service-support-center-technik'>here</a><br><br>   # General information  Welcome to our API!<br>  sevdesk offers you  the possibility of retrieving data using an interface, namely the sevdesk API, and making  changes without having to use the web UI. The sevdesk interface is a REST-Full API. All sevdesk  data and functions that are used in the web UI can also be controlled through the API.   # Embedding resources  When retrieving resources by using this API, you might encounter nested resources in the resources you requested.<br>  For example, an invoice always contains a contact, of which you can see the ID and the object name.<br>  This API gives you the possibility to embed these resources completely into the resources you originally requested.<br>  Taking our invoice example, this would mean, that you would not only see the ID and object name of a contact, but rather the complete contact resource.    To embed resources, all you need to do is to add the query parameter 'embed' to your GET request.<br>  As values, you can provide the name of the nested resource.<br>  Multiple nested resources are also possible by providing multiple names, separated by a comma.    # Authentication and Authorization  The sevdesk API uses a token authentication to authorize calls. For this purpose every sevdesk administrator has one API token, which is a <b>hexadecimal string</b>  containing <b>32 characters</b>. The following clip shows where you can find the  API token if this is your first time with our API.<br><br> <video src='openAPI/img/findingTheApiToken.mp4' controls width='640' height='360'> Your browser cannot play this video.<br> This video explains how to find your sevDesk API token. </video> <br> The token will be needed in every request that you want to send and needs to be provided as a value of an <b>Authorization Header</b>.<br> In this case, we used some random API token. The example shows the token in the Authorization Header. <ul> <li>\"Authorization\" :<span style='color:red'>\"b7794de0085f5cd00560f160f290af38\"</span></li> </ul> The api tokens have an infinite lifetime and, in other words, exist as long as the sevdesk user exists.<br> For this reason, the user should <b>NEVER</b> be deleted.<br> If really necessary, it is advisable to save the api token as we will <b>NOT</b> be able to retrieve it afterwards!<br> It is also possible to generate a new API token, for example, if you want to prevent the usage of your sevdesk account by other people who got your current API token.<br> To achieve this, you just need to click on the \"generate new\" symbol to the right of your token and confirm it with your password.  # API News  To never miss API news and updates again, subscribe to our <b>free API newsletter</b> and get all relevant  information to keep your sevdesk software running smoothly. To subscribe, simply click <a href = 'https://landing.sevdesk.de/api-newsletter'><b>here</b></a> and confirm the email address to which we may send all updates relevant to you.  # API Requests  In our case, REST API requests need to be build by combining the following components. <table> <tr> <th><b>Component</b></th> <th><b>Description</b></th> </tr> <tr> <td>HTTP-Methods</td> <td> <ul> <li>GET (retrieve a resource)</li> <li>POST (create a resource)</li> <li>PUT (update a resource)</li> <li>DELETE (delete a resource)</li> </ul> </td> </tr> <tr> <td>URL of the API</td> <td><span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span></td> </tr> <tr> <td>URI of the resource</td> <td>The resource to query.<br>For example contacts in sevdesk:<br><br> <span style='color:red'>/Contact</span><br><br> Which will result in the following complete URL:<br><br> <span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span> </td> </tr> <tr> <td>Query parameters</td> <td>Are attached by using the connectives <b>?</b> and <b>&</b> in the URL.<br></td> </tr> <tr> <td>Request headers</td> <td>Typical request headers are for example:<br> <div> <br> <ul> <li>Content-type</li> <li>Authorization</li> <li>Accept-Encoding</li> <li>User-Agent</li> <li>X-Version: Used for resource versioning see information below</li> <li>...</li> </ul> </div> </td> </tr> <tr>  <td>Response headers</td> <td> Typical response headers are for example:<br><br> <div> <ul>  <li>Deprecation: If a resource is deprecated we return true or a timestamp since when</li> <li>...</li> </ul> </div> </td> </tr> <tr> <td>Request body</td> <td>Mostly required in POST and PUT requests.<br> Often the request body contains json, in our case, it also accepts url-encoded data. </td> </tr> </table><br> <span style='color:red'>Note</span>: please pass a meaningful entry at the header \"User-Agent\".  If the \"User-Agent\" is set meaningfully, we can offer better support in case of queries from customers.<br> An example how such a \"User-Agent\" can look like: \"Integration-name by abc\". <br><br> This is a sample request for retrieving existing contacts in sevdesk using curl:<br><br> <img src='openAPI/img/GETRequest.PNG' alt='Get Request' height='150'><br><br> As you can see, the request contains all the components mentioned above.<br> It's HTTP method is GET, it has a correct endpoint  (<span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span>), query parameters and additional <b>header</b> information!<br><br> <b>Query Parameters</b><br><br> As you might have seen in the sample request above, there are several query parameters located in the url.<br> Those are mostly optional but prove to be very useful for a lot of requests as they can limit, extend, sort or filter the data you will get as a response.<br><br> These are the most used query parameter for the sevdesk API. <table> <tr> <th><b>Parameter</b></th> <th><b>Description</b></th> </tr> <tr> <td>embed</td> <td>Will extend some of the returned data.<br> A brief example can be found below.</td> </tr> <tr> <td>countAll</td> <td>\"countAll=true\" returns the number of items</td> </tr> </table> This is an example for the usage of the embed parameter.<br> The following first request will return all company contact entries in sevdesk up to a limit of 100 without any additional information and no offset.<br><br> <img src='openAPI/img/ContactQueryWithoutEmbed.PNG' width='900' height='850'><br><br> Now have a look at the category attribute located in the response.<br> Naturally, it just contains the id and the object name of the object but no further information.<br> We will now use the parameter embed with the value \"category\".<br><br> <img src='openAPI/img/ContactQueryWithEmbed.PNG' width='900' height='850'><br><br> As you can see, the category object is now extended and shows all the attributes and their corresponding values.<br><br> There are lot of other query parameters that can be used to filter the returned data for objects that match a certain pattern, however, those will not be mentioned here and instead can be found at the detail documentation of the most used API endpoints like contact, invoice or voucher.<br><br> <b>Pagination</b><br> <p>This API implements pagination to help you efficiently manage large result sets. Instead of retrieving all records at once, you can request specific subsets of data using the following parameters.</p> <table> <tr> <th><b>Parameter</b></th> <th><b>Type</b></th> <th><b>Description</b></th> </tr> <tr> <td>limit</td> <td>Integer</td> <td>Limits the number of entries that are returned.<br> Most useful in GET requests which will most likely deliver big sets of data like country or currency lists.<br> The limit must be between 1 and 1000. </td> </tr> <tr> <td>offset</td> <td>Integer</td> <td>Specifies a certain offset for the data that will be returned.<br> As an example, you can specify \"offset=2\" if you want all entries except for the first two.</td> </tr> <tr> <td>countAll</td> <td>Boolean</td> <td>When set to <code>true</code>, the response will include the total count of available records. Defaults to <code>false</code>.</td> </tr> </table> <br> <b>How Pagination Works</b><br> <ol> <li>The limit parameter determines how many records will be included in each response</li> <li>The offset parameter indicates how many records to skip before beginning to return results</li> <li>When countAll=true is specified, the response will include a total field with the complete count of available records</li> </ol> <b>Example Usage:</b><br> <b>Basic Request</b><br> <ul><li><code>ht<span>tps://my.sevdesk.de/api/v1/Invoice?limit=10&offset=0<span></code></li></ul> <p>This returns the first 10 resources.</p><br> <b>Page Navigation</b><br> <ul><li><code>ht<span>tps://my.sevdesk.de/api/v1/Invoice?limit=10&offset=10<span></code></li></ul> <p>This returns resources 11-20 (the second page when using a page size of 10).</p><br> <b>With Total Count</b><br> <ul><li><code>ht<span>tps://my.sevdesk.de/api/v1/Invoice?limit=10&offset=0&countAll=true<span></code></li></ul> <p>This returns the first 10 resources and includes the total count of available resources in the response.</p> <b>Response Format</b><br> <pre> <code> {<br> &nbsp;&nbsp;&nbsp;&nbsp;\"total\": \"157\",<br> &nbsp;&nbsp;&nbsp;&nbsp;\"objects\": [<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Array of resource objects<br> &nbsp;&nbsp;&nbsp;&nbsp;]<br> &nbsp;} </code> </pre> <br> <b>Best Practises</b><br> <ul> <li>Keep <code>limit</code> values reasonable (between 10-100) to avoid performance issues</li> <li>Use <code>countAll=true</code> when you need to implement UI pagination controls</li> </ul> <b>Request Headers</b><br><br> The HTTP request (response) headers allow the client as well as the server to pass additional information with the request.<br> They transfer the parameters and arguments which are important for transmitting data over HTTP.<br> Three headers which are useful / necessary when using the sevdesk API are \"Authorization, \"Accept\" and  \"Content-type\".<br> Underneath is a brief description of why and how they should be used.<br><br> <b>Authorization</b><br><br> Should be used to provide your API token in the header. <ul> <li>Authorization:<span style='color:red'>yourApiToken</span></li> </ul> <b>Accept</b><br><br> Specifies the format of the response.<br> Required for operations with a response body. <ul> <li>Accept:application/<span style='color:red'>format</span> </li> </ul> In our case, <code><span style='color:red'>format</span></code> could be replaced with <code>json</code> or <code>xml</code><br><br> <b>Content-type</b><br><br> Specifies which format is used in the request.<br> Is required for operations with a request body. <ul> <li>Content-type:application/<span style='color:red'>format</span></li> </ul> In our case,<code><span style='color:red'>format</span></code>could be replaced with <code>json</code> or <code>x-www-form-urlencoded</code> <br><br><b>API Responses</b><br><br> HTTP status codes<br> When calling the sevdesk API it is very likely that you will get a HTTP status code in the response.<br> Some API calls will also return JSON response bodies which will contain information about the resource.<br> Each status code which is returned will either be a <b>success</b> code or an <b>error</b> code.<br><br> Success codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>200 OK</code></td> <td>The request was successful</td> </tr> <tr> <td><code>201 Created</code></td> <td>Most likely to be found in the response of a <b>POST</b> request.<br> This code indicates that the desired resource was successfully created.</td> </tr> </table> <br>Error codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>400 Bad request</code></td> <td>The request you sent is most likely syntactically incorrect.<br> You should check if the parameters in the request body or the url are correct.</td> </tr> <tr> <td><code>401 Unauthorized</code></td> <td>The authentication failed.<br> Most likely caused by a missing or wrong API token.</td> </tr> <tr> <td><code>403 Forbidden</code></td> <td>You do not have the permission the access the resource which is requested.</td> </tr> <tr> <td><code>404 Not found</code></td> <td>The resource you specified does not exist.</td> </tr> <tr> <td><code>500 Internal server error</code></td> <td>An internal server error has occurred.<br> Normally this means that something went wrong on our side.<br> However, sometimes this error will appear if we missed to catch an error which is normally a 400 status code! </td> </tr> </table> <br><br> <b>Resource Versioning</b> <br><br> We use resource versioning to handle breaking changes for our endpoints, these are rarely used and will be communicated before we remove older versions.<br> To call a different version we use a specific header <code>X-Version</code> that should be filled with the desired version.<br> <ul>  <li>If you do not specify any version we assume <code>default</code></li> <li>If you specify a version that does not exist or was removed, you will get an error with information which versions are available</li> </ul> <table> <tr> <th>X-Version</th> <th>Description</th> </tr> <tr> <td><code>default</code></td> <td>Should always reference the oldest version.<br> If a specific resource is updated with a new version, <br> then the default version stays the same until the old version is deleted</td> </tr> <tr> <td><code>1.0</code> ... <code>1.9</code></td> <td>Our incrementally version for each resource independent<br> <b>Important</b>: A resource can be available via <code>default</code> but not <code>1.0</code></td> </tr> </table>  # Your First Request  After reading the introduction to our API, you should now be able to make your first call.<br> For testing our API, we would always recommend to create a trial account for sevdesk to prevent unwanted changes to your main account.<br> A trial account will be in the highest tariff (materials management), so every sevdesk function can be tested!   To start testing we would recommend one of the following tools: <ul> <li><a href='https://www.getpostman.com/'>Postman</a></li> <li><a href='https://curl.haxx.se/download.html'>cURL</a></li> </ul> This example will illustrate your first request, which is creating a new Contact in sevdesk.<br> <ol> <li>Download <a href='https://www.getpostman.com/'><b>Postman</b></a> for your desired system and start the application</li> <li>Enter <span><b>ht</span>tps://my.sevdesk.de/api/v1/Contact</b> as the url</li> <li>Create an authorization header and insert your API token as the value</li> <li>For this test, select <b>POST</b> as the HTTP method</li> <li>Go to <b>Headers</b> and enter the key-value pair <b>Content-type</b> + <b>application/x-www-form-urlencoded</b><br> As an alternative, you can just go to <b>Body</b> and select <b>x-www-form-urlencoded</b></li> <li>Now go to <b>Body</b> (if you are not there yet) and enter the key-value pairs as shown in the following picture<br><br> <img src='openAPI/img/FirstRequestPostman.PNG' width='900'><br><br></li> <li>Click on <b>Send</b>. Your response should now look like this:<br><br> <img src='openAPI/img/FirstRequestResponse.PNG' width='900'></li> </ol> As you can see, a successful response in this case returns a JSON-formatted response body containing the contact you just created.<br> For keeping it simple, this was only a minimal example of creating a contact.<br> There are however numerous combinations of parameters that you can provide which add information to your contact.  # sevdesk-Update 2.0  Started in 2024 we introduced a new era of bookkeeping in sevdesk. You can check if you already received the update by clicking on your profile in the top right in the sevdesk WebApp or by using the [Tools/bookkeepingSystemVersion endpoint](#tag/Basics/operation/bookkeepingSystemVersion).<br> The old version will be available for some customers until the end of 2024. In this short list we have outlined the changed endpoints with links to jump to the descriptions. If you received the [api newsletter](https://landing.sevdesk.de/api-newsletter) you already know what changed. Otherwise you can check the api changes [here](https://tech.sevdesk.com/api_news/posts/2024_04_04-system-update-breaking-changes/).  ## Check your bookkeeping system version  With this endpoint you can check which version you / your client uses. On that basis you must use the old or new versions of the endpoints. [Tools/bookkeepingSystemVersion Endpoint](#tag/Basics/operation/bookkeepingSystemVersion)  ## Tax Rules  <I><b>(affects the properties taxType and taxSet)</b></I><br> With sevdesk-Update 2.0 we changed the available tax rules. Due to a high likeliness of non-compliant accounting, we won't support the following tax type with the sevdesk-Update 2.0 anymore:  `taxType = custom (this includes 'taxSet': ... )`  If you only use <code>taxType = default</code>, <code>taxType = eu</code> and / or <code>taxType = ss</code>, these tax types will automatically be mapped to the new tax rules for a transition period, but you have to make sure the taxRate used in positions is within the allowed ones (you may use the [ReceiptGuidance endpoint](#tag/Voucher/operation/forAllAccounts) for that), otherwise the API will return a validation error (HTTP status code 422). For [orders](#tag/Order), [invoices](#tag/Invoice), [vouchers](#tag/Voucher) and [credit notes](#tag/CreditNote) that were created within sevdesk-Update 2.0 the response will change in all endpoints in which these objects are returned.<br> So orders, invoices, vouchers and credit notes created within sevdesk system version 1.0 still have a taxType in the response. When they are created in sevdesk-Update 2.0 they will have a taxRule instead.<br> You can continue to use taxType at first, but we recommend switching to taxRule as there are new options available that were not previously supported.<br> For orders, invoices, vouchers and credit notes that were created within sevdesk-Update 2.0 the response will change in all endpoints in which these objects are returned. This documentation holds the most current version of the endpoints.<br> Here are lists of the currently available tax rules, sorted by their use case, structured into revenue/expense and 'Regelbesteuerer'/'Kleinunternehmer'.  #### VAT rules for 'Regelbesteuerung' in sevdesk-Update 2.0 (Revenue)  <table> <tr> <th>VAT Rule</th> <th>New Property</th> <th>Allowed taxRate in positions</th> <th>Old property (deprecated)</th> <th>Unsupported use cases</th> </tr> <tr> <td>Umsatzsteuerpflichtige Umsätze</td> <td><code>'taxRule': 1</code></td> <td> <ul> <li>0.0</li> <li>7.0</li> <li>19.0</li> </ul> </td> <td><code>'taxType': 'default'</code></td> <td>-</td> </tr> <tr> <td>Ausfuhren</td> <td><code>'taxRule': 2</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> <td>-</td> </tr> <tr> <td>Innergemeinschaftliche Lieferungen</td> <td><code>'taxRule': 3</code></td> <td> <ul> <li>0.0</li> <li>7.0</li> <li>19.0</li> </ul> </td> <td><code>'taxType': 'eu'</code></td> <td>-</td> </tr> <tr> <td>Steuerfreie Umsätze §4 UStG</td> <td><code>'taxRule': 4</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> <td>-</td> </tr> <tr> <td>Reverse Charge gem. §13b UStG</td> <td><code>'taxRule': 5</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> <td>-</td> </tr> <tr> <td>Nicht im Inland steuerbare Leistung</td> <td><code>'taxRule': 17</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td><code>'taxType': 'noteu'</code></td> <td> <ul> <li>Creation of an advance invoice</li> <li>Creation of a partial invoice</li> <li>Creation of a final invoice</li> </ul> </td> </tr> <tr> <td>One Stop Shop (goods)</td> <td><code>'taxRule': 18</code></td> <td> <ul> <li>depending on country</li> </ul> </td> <td>-</td> <td> <ul> <li>Usage in vouchers</li> <li>Creation as e-invoice</li> <li>Creation of an invoice with a custom revenue account (<code>accountDatev</code>)</li> <li>Creation of an advance invoice</li> <li>Creation of a partial invoice</li> <li>Creation of a final invoice</li> </ul> </td> </tr> <tr> <td>One Stop Shop (electronic service)</td> <td><code>'taxRule': 19</code></td> <td> <ul> <li>depending on country</li> </ul> </td> <td>-</td> <td> <ul> <li>Usage in vouchers</li> <li>Creation as e-invoice</li> <li>Creation of an invoice with a custom revenue account (<code>accountDatev</code>)</li> <li>Creation of an advance invoice</li> <li>Creation of a partial invoice</li> <li>Creation of a final invoice</li> </ul> </td> </tr> <tr> <td>One Stop Shop (other service)</td> <td><code>'taxRule': 20</code></td> <td> <ul> <li>depending on country</li> </ul> </td> <td>-</td> <td> <ul> <li>Usage in vouchers</li> <li>Creation as e-invoice</li> <li>Creation of an invoice with a custom revenue account (<code>accountDatev</code>)</li> <li>Creation of an advance invoice</li> <li>Creation of a partial invoice</li> <li>Creation of a final invoice</li> </ul> </td> </tr> </table>   See the <a href=\"#tag/Invoice/operation/createInvoiceFromOrder\">example request</a> to create a normal invoice <code>\"invoiceType\": \"RE\"</code> from an order that uses a tax rule that does not support advance, partial or final invoices.    #### VAT rules for 'Regelbesteuerung' in sevdesk-Update 2.0 (Expense)  <table> <tr> <th>VAT Rule</th> <th>New Property</th> <th>Allowed taxRate in positions</th> <th>Old property (deprecated)</th> </tr> <tr> <td>Innergemeinschaftliche Erwerbe</td> <td><code>'taxRule': 8</code></td> <td> <ul> <li>0.0</li> <li>7.0</li> <li>19.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Vorsteuerabziehbare Aufwendungen</td> <td><code>'taxRule': 9</code></td> <td> <ul> <li>0.0</li> <li>7.0</li> <li>19.0</li> </ul> </td> <td><code>'taxType': 'default'</code></td> </tr> <tr> <td>Nicht vorsteuerabziehbare Aufwendungen</td> <td><code>'taxRule': 10</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Reverse Charge gem. §13b Abs. 2 UStG mit Vorsteuerabzug 0% (19%)</td> <td><code>'taxRule': 12</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Reverse Charge gem. §13b UStG ohne Vorsteuerabzug 0% (19%)</td> <td><code>'taxRule': 13</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Reverse Charge gem. §13b Abs. 1 EU Umsätze 0% (19%)</td> <td><code>'taxRule': 14</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> </table>    #### VAT rules for small business owner ('Kleinunternehmer') in sevdesk-Update 2.0 (Revenue)  <table> <tr> <th>VAT Rule</th> <th>New Property</th> <th>Allowed taxRate in positions</th> <th>Old property (deprecated)</th> </tr> <tr> <td>Steuer nicht erhoben nach §19UStG</td> <td><code>'taxRule': 11</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td><code>'taxType': 'ss'</code></td> </tr> </table>    #### VAT rules for small business owner ('Kleinunternehmer') in sevdesk-Update 2.0 (Expense)  <table> <tr> <th>VAT Rule</th> <th>New Property</th> <th>Allowed taxRate in positions</th> <th>Old property (deprecated)</th> </tr> <tr> <td>Nicht vorsteuerabziehbare Aufwendungen</td> <td><code>'taxRule': 10</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td><code>'taxType': 'ss'</code></td> </tr> <tr> <td>Reverse Charge gem. §13b UStG ohne Vorsteuerabzug 0% (19%)</td> <td><code>'taxRule': 13</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> </table>    ## Booking Accounts  <I><b>(affects the property accountingType)</b></I><br> With sevdesk-Update 2.0 we changed the available booking accounts and their combinatorics. If you use accountingTypes with SKR numbers that are still available in our receipt guidance, you do not have to change anything in your requests. These booking accounts will automatically be mapped to the new representation (Account Datev). But you have to make sure the taxRate used in positions and taxRule used in the voucher is within the allowed ones (check the [ReceiptGuidance](#tag/Voucher/operation/forAllAccounts)) of the provided booking account, otherwise the API will return a validation error (HTTP status code 422). For orders, invoices, vouchers and credit notes in that were created within sevdesk-Update 2.0 the response will change in all endpoints were these objects are returned.  ## Receipt Guidance  To help you decide which account can be used in conjunction with which tax rules, tax rates and documents, we created several guidance endpoints just there for you to get helpful information. You can find the descriptions in the changes section for Vouchers below or jump directly to the endpoint description by using this link: [Receipt Guidance](#tag/Voucher/operation/forAllAccounts).<br> Receipt Guidance is planned to give you guidance in which account you can pick (depending on your filter criteria and the client settings (e.g. 'Kleinunternehmer')) and which tax rate and [tax rules](#section/sevdesk-Update-2.0/Tax-Rules) are comptaible with them.   ## Vouchers   ### Saving a new voucher ([Voucher/Factory/saveVoucher](#tag/Voucher/operation/voucherFactorySaveVoucher))  Following use cases do not work anymore or have changed: <ol> <li>Custom vat regulations (taxType = custom and provided taxSet)</li> <li>Only specific tax rates and booking accounts are available. Check [ReceiptGuidance](#tag/Voucher/operation/forAllAccounts)</li> <li>Custom accounting types do not work anymore</li> <li>Using an asset booking account without creating an asset is no longer possible</li> <li>A voucher can not be directly set to paid anymore, therefore only status <code>DRAFT (50)</code> or <code>UNPAID / DUE (100)</code> are possible when creating a new voucher. Use the [/api/v1/Voucher/{voucherId}/bookAmount endpoint](#tag/Voucher/operation/bookVoucher) to set a voucher to paid</li> <li>Setting or changing the property enshrined. Use our new endpoint [/api/v1/Voucher/{voucherId}/enshrine](#tag/Voucher/operation/voucherEnshrine) to enshrine a voucher</li> </ol>  ### Get or update an existing voucher ([Voucher/{voucherId}](#tag/Voucher/operation/updateVoucher))  Following use cases do not work anymore or have changed: <ol> <li>Custom vat regulations (taxType = custom and provided taxSet)</li> <li>See [ReceiptGuidance](#tag/Voucher/operation/forAllAccounts) to check which tax rates are available in conjunction with which tax rules</li> </ol>  ### Book a voucher ([Voucher/{voucherId}](#tag/Voucher/operation/bookVoucher))  Following use cases do not work anymore or have changed: <ol> <li>Voucher with negative voucher positions can not use 'cash discount' as a payment difference anymore</li> <li>A Voucher can only be booked when it was registered beforehand (see above)</li> <li>Based on the combination of voucher positions some payment difference reasons are not possible anymore</li> <li>The currency fluctuation (CF) type is no longer supported as a payment difference reason</li> </ol>  ## Banking  Following use cases do not work anymore or have changed: <ol> <li>Setting or changing the property enshrined will now only be available by using the [appropriate enshrine endpoint](#tag/CheckAccountTransaction/operation/checkAccountTransactionEnshrine)</li> </ol>  ## Invoicing  The changes to the vat rules also apply here. Check the documentation of voucher above as the changes are the same.  ### General stricter validation in PUT and POST endpoints  We added stricter validation to ensure only correct invoices are created which than can be further processed in sevdesk. Following use cases do not work anymore or have changed: <ol> <li>Creating an invoice with taxType <code>custom</code> does not work anymore</li> <li>Processing an invoice beyond status <code>DRAFT (100)</code> without a contact does not work anymore</li> <li>Advanced invoices (<code>invoiceType: 'AR'</code>) and partial invoices (<code>invoiceType: 'TR'</code>) can only be created with the tax rule 'Umsatzsteuerpflichtige Umsätze (taxRule: 1)'(for Regelbesteuerer) or 'Steuer nicht erhoben nach §19 UStG (taxRule: 11)'(for Kleinunternehmer)</li> <li>Creating a dunning (<code>invoiceType: 'MA'</code>) with the value of property <code>reminderCharge</code> greater than 0 does not work anymore</li> <li>Creating an advanced invoice (<code>invoiceType: 'AR'</code>), a partial invoice (<code>invoiceType: 'TR'</code>) or a final invoice (<code>invoiceType: 'ER'</code>) with a currency deviating from the clients <code>defaultCurrency</code> is not possible anymore</li> <li>Changing the status manually does not work anymore (see 'Removed endpoint /Invoice/{invoiceId}/changeStatus' below)</li> <li>Enshrining now has to be done by using the [enshrine endpoint](#tag/Invoice/operation/invoiceEnshrine) (see below)</li> </ol>  ### Saving an invoice ([Invoice/Factory/saveInvoice](#tag/Invoice/operation/createInvoiceByFactory))  Following use cases do not work anymore or have changed: <ol> <li>Invoices can only be created with the status <code>DRAFT (100)</code> and can not be changed manually. Use the matching endpoints (e.g. [sendViaEmail](#tag/Invoice/operation/sendInvoiceViaEMail)) to automatically change the status accordingly</li> <li>Setting or changing the property <code>enshrined</code> is now only possible by using the [enshrine endpoint](#tag/CheckAccountTransaction/operation/checkAccountTransactionEnshrine)</li> </ol>  ### Using an order to create an invoice ([Invoice/Factory/createInvoiceFromOrder](#tag/Invoice/operation/createInvoiceFromOrder))  Following use cases do not work anymore or have changed: <ol> <li>Creating a final invoice (partialType: 'ER') is not possible if an advanced invoice (partialType: 'AR') or partial invoice (partialType: 'TR') exists. This functionality will be added in a later update</li> </ol>  ### Removed endpoint /Invoice/{invoiceId}/changeStatus  This endpoint will be completely removed (including sevdesk system version 1.0!). Using these endpoints will automatically change the status accordingly: <ul> <li>[Invoice/{invoiceId}/sendViaEmail](#tag/Invoice/operation/sendInvoiceViaEMail)</li> <li>[Invoice/{invoiceId}/sendBy](#tag/Invoice/operation/invoiceSendBy)</li> <li>[Invoice/{invoiceId}/bookAmount](#tag/Invoice/operation/bookInvoice)</li> <li>[Invoice/{invoiceId}/resetToDraft](#tag/Invoice/operation/invoiceResetToDraft)</li> <li>[Invoice/{invoiceId}/resetToOpen](#tag/Invoice/operation/invoiceResetToOpen)</li> </ul>  ### New endpoint [Invoice/{invoiceId}/resetToDraft](#tag/Invoice/operation/invoiceResetToDraft)  This new endpoint can be used to reset the status of an invoice to <code>DRAFT (100)</code>.  ### New endpoint [Invoice/{invoiceId}/resetToOpen](#tag/Invoice/operation/invoiceResetToOpen)  This new endpoint can be used to reset the status of an invoice to <code>OPEN (200)</code>.  ### New endpoint [Invoice/{invoiceId}/enshrine]((#tag/Invoice/operation/invoiceEnshrine))  The enshrine endpoint is now used to set the property <code>enshrined</code>. <b>This operation CAN NOT be undone due to legal reasons!</b>  ## Credit Notes  The changes to the vat rules also apply here. Check the documentation of voucher above as the changes are the same.  ### General stricter validation in PUT and POST endpoints  We added stricter validation to ensure only correct credit notes are created which than can be further processed in sevdesk. Due to the move from taxTypes/taxSets to taxRules you need to check the compatibility of the taxRules in combination with the tax rates. Following use cases do not work anymore or have changed: <ol> <li>Creating a credit note without a date of delivery (<code>deliveryDateUntil</code>) for an invoice that has a date of delivery (<code>deliveryDateUntil</code>) is no longer possible</li> <li>Creating a credit note with a date of delivery (<code>deliveryDateUntil</code>) for an invoice that has no date of delivery (<code>deliveryDateUntil</code>) is no longer possible</li> <li>Creating a credit note with a date of delivery (<code>deliveryDateUntil</code>) that is before the date of delivery (<code>deliveryDateUntil</code>) of the invoice is no longer possible</li> <li>Creating a credit note for an advanced invoice (<code>invoiceType: 'AR'</code>) or partial invoice (<code>invoiceType: 'TR'</code>) is no longer possible</li> <li>Creating a credit note for a voucher is no longer possible</li> <li>Creating a credit note with <code>\"bookingCategory\": \"ACCOUNTING_TYPE\"</code> is currently not supported</li> <li>Currency fluctuation (CF) is no longer supported as a payment difference</li> </ol>  ### Saving a credit note ([CreditNote/Factory/saveCreditNote](#tag/CreditNote/operation/createcreditNote))  Following use cases do not work anymore or have changed: <ol> <li>Credit notes can only be created with the status <code>DRAFT (100)</code> and can not be changed manually. Use the matching endpoints (e.g. [sendViaEmail](#tag/CreditNote/operation/sendCreditNoteViaEMail)) to automatically change the status accordingly</li> <li>Enshrining now has to be done by using the enshrine endpoint (see below)</li> </ol>  ### Removed endpoint /CreditNote/Factory/createFromVoucher  The endpoint will be removed. It is not possible anymore to create credit notes for vouchers within sevdesk-Update 2.0. The endpoint continues to stay available for existing sevdesk system version 1.0 clients.  ### Removed endpoint /CreditNote/{creditNoteId}/changeStatus  This endpoint will be completely removed (including sevdesk system version 1.0!). Using these endpoints will automatically change the status accordingly: <ul> <li>[CreditNote/{creditNoteId}/sendViaEmail](#tag/CreditNote/operation/sendCreditNoteViaEMail)</li> <li>[CreditNote/{creditNoteId}/sendBy](#tag/CreditNote/operation/creditNoteSendBy)</li> <li>[CreditNote/{creditNoteId}/bookAmount](#tag/CreditNote/operation/bookCreditNote)</li> <li>[CreditNote/{creditNoteId}/resetToDraft](#tag/CreditNote/operation/creditNoteResetToDraft)</li> <li>[CreditNote/{creditNoteId}/resetToOpen](#tag/CreditNote/operation/creditNoteResetToOpen)</li> </ul>  ### New endpoint CreditNote/{creditNoteId}/resetToDraft  This new endpoint can be used to reset the status of a credit note to <code>DRAFT (100)</code>. You can find the documentation [here](#tag/CreditNote/operation/creditNoteResetToDraft).  ### New endpoint CreditNote/{creditNoteId}/resetToOpen  This new endpoint can be used to reset the status of a credit note to <code>OPEN (200)</code>. You can find the documentation [here](#tag/CreditNote/operation/creditNoteResetToOpen).  ### New endpoint CreditNote/{creditNoteId}/enshrine  [The enshrine endpoint](#tag/CreditNote/operation/creditNoteEnshrine) is now used to set the property <code>enshrined</code>. <b>This operation CAN NOT be undone due to legal reasons!</b> ## Parts   ### General stricter validation in PUT and POST endpoints  Following use cases do not work anymore or have changed: <ol> <li>Creating products with a tax rate other than 0.0, 7.0 and 19.0 is no longer possible</li> </ol>
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
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
 * InvoiceApi Class Doc Comment
 *
 * @category Class
 * @package  Itsmind\Sevdesk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvoiceApi
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
        'bookInvoice' => [
            'application/json',
        ],
        'cancelInvoice' => [
            'application/json',
        ],
        'createInvoiceByFactory' => [
            'application/json',
        ],
        'createInvoiceFromOrder' => [
            'application/json',
        ],
        'createInvoiceReminder' => [
            'application/json',
        ],
        'deleteInvoiceById' => [
            'application/json',
        ],
        'getInvoiceById' => [
            'application/json',
        ],
        'getInvoicePositionsById' => [
            'application/json',
        ],
        'getInvoices' => [
            'application/json',
        ],
        'getIsInvoicePartiallyPaid' => [
            'application/json',
        ],
        'getLastDunning' => [
            'application/json',
        ],
        'getOpenInvoiceReminderDebit' => [
            'application/json',
        ],
        'invoiceEnshrine' => [
            'application/json',
        ],
        'invoiceGetPdf' => [
            'application/json',
        ],
        'invoiceGetXml' => [
            'application/json',
        ],
        'invoiceRender' => [
            'application/json',
        ],
        'invoiceResetToDraft' => [
            'application/json',
        ],
        'invoiceResetToOpen' => [
            'application/json',
        ],
        'invoiceSendBy' => [
            'application/json',
        ],
        'sendInvoiceViaEMail' => [
            'application/json',
        ],
        'updateInvoiceById' => [
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
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
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
     * Operation bookInvoice
     *
     * Book an invoice
     *
     * @param  int $invoice_id ID of invoice to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookInvoiceRequest|null $book_invoice_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookInvoice'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\BookInvoice200Response
     */
    public function bookInvoice($invoice_id, $book_invoice_request = null, string $contentType = self::contentTypes['bookInvoice'][0])
    {
        list($response) = $this->bookInvoiceWithHttpInfo($invoice_id, $book_invoice_request, $contentType);
        return $response;
    }

    /**
     * Operation bookInvoiceWithHttpInfo
     *
     * Book an invoice
     *
     * @param  int $invoice_id ID of invoice to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookInvoiceRequest|null $book_invoice_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookInvoice'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\BookInvoice200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function bookInvoiceWithHttpInfo($invoice_id, $book_invoice_request = null, string $contentType = self::contentTypes['bookInvoice'][0])
    {
        $request = $this->bookInvoiceRequest($invoice_id, $book_invoice_request, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\BookInvoice200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\BookInvoice200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\BookInvoice200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\BookInvoice200Response';
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
                        '\Itsmind\Sevdesk\Model\BookInvoice200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation bookInvoiceAsync
     *
     * Book an invoice
     *
     * @param  int $invoice_id ID of invoice to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookInvoiceRequest|null $book_invoice_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bookInvoiceAsync($invoice_id, $book_invoice_request = null, string $contentType = self::contentTypes['bookInvoice'][0])
    {
        return $this->bookInvoiceAsyncWithHttpInfo($invoice_id, $book_invoice_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bookInvoiceAsyncWithHttpInfo
     *
     * Book an invoice
     *
     * @param  int $invoice_id ID of invoice to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookInvoiceRequest|null $book_invoice_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bookInvoiceAsyncWithHttpInfo($invoice_id, $book_invoice_request = null, string $contentType = self::contentTypes['bookInvoice'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\BookInvoice200Response';
        $request = $this->bookInvoiceRequest($invoice_id, $book_invoice_request, $contentType);

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
     * Create request for operation 'bookInvoice'
     *
     * @param  int $invoice_id ID of invoice to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookInvoiceRequest|null $book_invoice_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bookInvoiceRequest($invoice_id, $book_invoice_request = null, string $contentType = self::contentTypes['bookInvoice'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling bookInvoice'
            );
        }



        $resourcePath = '/Invoice/{invoiceId}/bookAmount';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($book_invoice_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($book_invoice_request));
            } else {
                $httpBody = $book_invoice_request;
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
     * Operation cancelInvoice
     *
     * Cancel an invoice / Create cancellation invoice
     *
     * @param  int $invoice_id ID of invoice to be cancelled (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelInvoice'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
     */
    public function cancelInvoice($invoice_id, string $contentType = self::contentTypes['cancelInvoice'][0])
    {
        list($response) = $this->cancelInvoiceWithHttpInfo($invoice_id, $contentType);
        return $response;
    }

    /**
     * Operation cancelInvoiceWithHttpInfo
     *
     * Cancel an invoice / Create cancellation invoice
     *
     * @param  int $invoice_id ID of invoice to be cancelled (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelInvoice'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelInvoiceWithHttpInfo($invoice_id, string $contentType = self::contentTypes['cancelInvoice'][0])
    {
        $request = $this->cancelInvoiceRequest($invoice_id, $contentType);

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


            switch($statusCode) {
                case 201:
                    if ('\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response';
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
                        '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation cancelInvoiceAsync
     *
     * Cancel an invoice / Create cancellation invoice
     *
     * @param  int $invoice_id ID of invoice to be cancelled (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelInvoiceAsync($invoice_id, string $contentType = self::contentTypes['cancelInvoice'][0])
    {
        return $this->cancelInvoiceAsyncWithHttpInfo($invoice_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelInvoiceAsyncWithHttpInfo
     *
     * Cancel an invoice / Create cancellation invoice
     *
     * @param  int $invoice_id ID of invoice to be cancelled (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelInvoiceAsyncWithHttpInfo($invoice_id, string $contentType = self::contentTypes['cancelInvoice'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response';
        $request = $this->cancelInvoiceRequest($invoice_id, $contentType);

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
     * Create request for operation 'cancelInvoice'
     *
     * @param  int $invoice_id ID of invoice to be cancelled (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cancelInvoiceRequest($invoice_id, string $contentType = self::contentTypes['cancelInvoice'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling cancelInvoice'
            );
        }


        $resourcePath = '/Invoice/{invoiceId}/cancelInvoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createInvoiceByFactory
     *
     * Create a new invoice
     *
     * @param  \Itsmind\Sevdesk\Model\SaveInvoice|null $save_invoice Creation data. Please be aware, that you need to provide at least all required parameter      of the invoice model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceByFactory'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\CreateInvoiceByFactory201Response
     */
    public function createInvoiceByFactory($save_invoice = null, string $contentType = self::contentTypes['createInvoiceByFactory'][0])
    {
        list($response) = $this->createInvoiceByFactoryWithHttpInfo($save_invoice, $contentType);
        return $response;
    }

    /**
     * Operation createInvoiceByFactoryWithHttpInfo
     *
     * Create a new invoice
     *
     * @param  \Itsmind\Sevdesk\Model\SaveInvoice|null $save_invoice Creation data. Please be aware, that you need to provide at least all required parameter      of the invoice model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceByFactory'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\CreateInvoiceByFactory201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createInvoiceByFactoryWithHttpInfo($save_invoice = null, string $contentType = self::contentTypes['createInvoiceByFactory'][0])
    {
        $request = $this->createInvoiceByFactoryRequest($save_invoice, $contentType);

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


            switch($statusCode) {
                case 201:
                    if ('\Itsmind\Sevdesk\Model\CreateInvoiceByFactory201Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\CreateInvoiceByFactory201Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\CreateInvoiceByFactory201Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\CreateInvoiceByFactory201Response';
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
                        '\Itsmind\Sevdesk\Model\CreateInvoiceByFactory201Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createInvoiceByFactoryAsync
     *
     * Create a new invoice
     *
     * @param  \Itsmind\Sevdesk\Model\SaveInvoice|null $save_invoice Creation data. Please be aware, that you need to provide at least all required parameter      of the invoice model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceByFactory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInvoiceByFactoryAsync($save_invoice = null, string $contentType = self::contentTypes['createInvoiceByFactory'][0])
    {
        return $this->createInvoiceByFactoryAsyncWithHttpInfo($save_invoice, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createInvoiceByFactoryAsyncWithHttpInfo
     *
     * Create a new invoice
     *
     * @param  \Itsmind\Sevdesk\Model\SaveInvoice|null $save_invoice Creation data. Please be aware, that you need to provide at least all required parameter      of the invoice model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceByFactory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInvoiceByFactoryAsyncWithHttpInfo($save_invoice = null, string $contentType = self::contentTypes['createInvoiceByFactory'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\CreateInvoiceByFactory201Response';
        $request = $this->createInvoiceByFactoryRequest($save_invoice, $contentType);

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
     * Create request for operation 'createInvoiceByFactory'
     *
     * @param  \Itsmind\Sevdesk\Model\SaveInvoice|null $save_invoice Creation data. Please be aware, that you need to provide at least all required parameter      of the invoice model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceByFactory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createInvoiceByFactoryRequest($save_invoice = null, string $contentType = self::contentTypes['createInvoiceByFactory'][0])
    {



        $resourcePath = '/Invoice/Factory/saveInvoice';
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
        if (isset($save_invoice)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($save_invoice));
            } else {
                $httpBody = $save_invoice;
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
     * Operation createInvoiceFromOrder
     *
     * Create invoice from order
     *
     * @param  \Itsmind\Sevdesk\Model\ModelCreateInvoiceFromOrder|null $model_create_invoice_from_order Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceFromOrder'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
     */
    public function createInvoiceFromOrder($model_create_invoice_from_order = null, string $contentType = self::contentTypes['createInvoiceFromOrder'][0])
    {
        list($response) = $this->createInvoiceFromOrderWithHttpInfo($model_create_invoice_from_order, $contentType);
        return $response;
    }

    /**
     * Operation createInvoiceFromOrderWithHttpInfo
     *
     * Create invoice from order
     *
     * @param  \Itsmind\Sevdesk\Model\ModelCreateInvoiceFromOrder|null $model_create_invoice_from_order Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceFromOrder'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createInvoiceFromOrderWithHttpInfo($model_create_invoice_from_order = null, string $contentType = self::contentTypes['createInvoiceFromOrder'][0])
    {
        $request = $this->createInvoiceFromOrderRequest($model_create_invoice_from_order, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response';
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
                        '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createInvoiceFromOrderAsync
     *
     * Create invoice from order
     *
     * @param  \Itsmind\Sevdesk\Model\ModelCreateInvoiceFromOrder|null $model_create_invoice_from_order Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceFromOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInvoiceFromOrderAsync($model_create_invoice_from_order = null, string $contentType = self::contentTypes['createInvoiceFromOrder'][0])
    {
        return $this->createInvoiceFromOrderAsyncWithHttpInfo($model_create_invoice_from_order, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createInvoiceFromOrderAsyncWithHttpInfo
     *
     * Create invoice from order
     *
     * @param  \Itsmind\Sevdesk\Model\ModelCreateInvoiceFromOrder|null $model_create_invoice_from_order Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceFromOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInvoiceFromOrderAsyncWithHttpInfo($model_create_invoice_from_order = null, string $contentType = self::contentTypes['createInvoiceFromOrder'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response';
        $request = $this->createInvoiceFromOrderRequest($model_create_invoice_from_order, $contentType);

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
     * Create request for operation 'createInvoiceFromOrder'
     *
     * @param  \Itsmind\Sevdesk\Model\ModelCreateInvoiceFromOrder|null $model_create_invoice_from_order Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceFromOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createInvoiceFromOrderRequest($model_create_invoice_from_order = null, string $contentType = self::contentTypes['createInvoiceFromOrder'][0])
    {



        $resourcePath = '/Invoice/Factory/createInvoiceFromOrder';
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
        if (isset($model_create_invoice_from_order)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($model_create_invoice_from_order));
            } else {
                $httpBody = $model_create_invoice_from_order;
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
     * Operation createInvoiceReminder
     *
     * Create invoice reminder
     *
     * @param  int $invoice_id the id of the invoice (required)
     * @param  string $invoice_object_name Model name, which is &#39;Invoice&#39; (required)
     * @param  \Itsmind\Sevdesk\Model\CreateInvoiceReminderRequest|null $create_invoice_reminder_request Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceReminder'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
     */
    public function createInvoiceReminder($invoice_id, $invoice_object_name, $create_invoice_reminder_request = null, string $contentType = self::contentTypes['createInvoiceReminder'][0])
    {
        list($response) = $this->createInvoiceReminderWithHttpInfo($invoice_id, $invoice_object_name, $create_invoice_reminder_request, $contentType);
        return $response;
    }

    /**
     * Operation createInvoiceReminderWithHttpInfo
     *
     * Create invoice reminder
     *
     * @param  int $invoice_id the id of the invoice (required)
     * @param  string $invoice_object_name Model name, which is &#39;Invoice&#39; (required)
     * @param  \Itsmind\Sevdesk\Model\CreateInvoiceReminderRequest|null $create_invoice_reminder_request Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceReminder'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createInvoiceReminderWithHttpInfo($invoice_id, $invoice_object_name, $create_invoice_reminder_request = null, string $contentType = self::contentTypes['createInvoiceReminder'][0])
    {
        $request = $this->createInvoiceReminderRequest($invoice_id, $invoice_object_name, $create_invoice_reminder_request, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response';
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
                        '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createInvoiceReminderAsync
     *
     * Create invoice reminder
     *
     * @param  int $invoice_id the id of the invoice (required)
     * @param  string $invoice_object_name Model name, which is &#39;Invoice&#39; (required)
     * @param  \Itsmind\Sevdesk\Model\CreateInvoiceReminderRequest|null $create_invoice_reminder_request Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceReminder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInvoiceReminderAsync($invoice_id, $invoice_object_name, $create_invoice_reminder_request = null, string $contentType = self::contentTypes['createInvoiceReminder'][0])
    {
        return $this->createInvoiceReminderAsyncWithHttpInfo($invoice_id, $invoice_object_name, $create_invoice_reminder_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createInvoiceReminderAsyncWithHttpInfo
     *
     * Create invoice reminder
     *
     * @param  int $invoice_id the id of the invoice (required)
     * @param  string $invoice_object_name Model name, which is &#39;Invoice&#39; (required)
     * @param  \Itsmind\Sevdesk\Model\CreateInvoiceReminderRequest|null $create_invoice_reminder_request Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceReminder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInvoiceReminderAsyncWithHttpInfo($invoice_id, $invoice_object_name, $create_invoice_reminder_request = null, string $contentType = self::contentTypes['createInvoiceReminder'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response';
        $request = $this->createInvoiceReminderRequest($invoice_id, $invoice_object_name, $create_invoice_reminder_request, $contentType);

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
     * Create request for operation 'createInvoiceReminder'
     *
     * @param  int $invoice_id the id of the invoice (required)
     * @param  string $invoice_object_name Model name, which is &#39;Invoice&#39; (required)
     * @param  \Itsmind\Sevdesk\Model\CreateInvoiceReminderRequest|null $create_invoice_reminder_request Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceReminder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createInvoiceReminderRequest($invoice_id, $invoice_object_name, $create_invoice_reminder_request = null, string $contentType = self::contentTypes['createInvoiceReminder'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling createInvoiceReminder'
            );
        }

        // verify the required parameter 'invoice_object_name' is set
        if ($invoice_object_name === null || (is_array($invoice_object_name) && count($invoice_object_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_object_name when calling createInvoiceReminder'
            );
        }



        $resourcePath = '/Invoice/Factory/createInvoiceReminder';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $invoice_id,
            'invoice[id]', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $invoice_object_name,
            'invoice[objectName]', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($create_invoice_reminder_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($create_invoice_reminder_request));
            } else {
                $httpBody = $create_invoice_reminder_request;
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
     * Operation deleteInvoiceById
     *
     * Delete invoice by ID
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteInvoiceById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteInvoiceById($invoice_id, string $contentType = self::contentTypes['deleteInvoiceById'][0])
    {
        $this->deleteInvoiceByIdWithHttpInfo($invoice_id, $contentType);
    }

    /**
     * Operation deleteInvoiceByIdWithHttpInfo
     *
     * Delete invoice by ID
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteInvoiceById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteInvoiceByIdWithHttpInfo($invoice_id, string $contentType = self::contentTypes['deleteInvoiceById'][0])
    {
        $request = $this->deleteInvoiceByIdRequest($invoice_id, $contentType);

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


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteInvoiceByIdAsync
     *
     * Delete invoice by ID
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteInvoiceById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInvoiceByIdAsync($invoice_id, string $contentType = self::contentTypes['deleteInvoiceById'][0])
    {
        return $this->deleteInvoiceByIdAsyncWithHttpInfo($invoice_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteInvoiceByIdAsyncWithHttpInfo
     *
     * Delete invoice by ID
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteInvoiceById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInvoiceByIdAsyncWithHttpInfo($invoice_id, string $contentType = self::contentTypes['deleteInvoiceById'][0])
    {
        $returnType = '';
        $request = $this->deleteInvoiceByIdRequest($invoice_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteInvoiceById'
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteInvoiceById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteInvoiceByIdRequest($invoice_id, string $contentType = self::contentTypes['deleteInvoiceById'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling deleteInvoiceById'
            );
        }


        $resourcePath = '/Invoice/{invoiceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
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
     * Operation getInvoiceById
     *
     * Find invoice by ID
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string[]|null $embed embed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoiceById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\GetInvoiceById200Response
     */
    public function getInvoiceById($invoice_id, $embed = null, string $contentType = self::contentTypes['getInvoiceById'][0])
    {
        list($response) = $this->getInvoiceByIdWithHttpInfo($invoice_id, $embed, $contentType);
        return $response;
    }

    /**
     * Operation getInvoiceByIdWithHttpInfo
     *
     * Find invoice by ID
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string[]|null $embed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoiceById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\GetInvoiceById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInvoiceByIdWithHttpInfo($invoice_id, $embed = null, string $contentType = self::contentTypes['getInvoiceById'][0])
    {
        $request = $this->getInvoiceByIdRequest($invoice_id, $embed, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\GetInvoiceById200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\GetInvoiceById200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\GetInvoiceById200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\GetInvoiceById200Response';
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
                        '\Itsmind\Sevdesk\Model\GetInvoiceById200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getInvoiceByIdAsync
     *
     * Find invoice by ID
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string[]|null $embed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoiceById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoiceByIdAsync($invoice_id, $embed = null, string $contentType = self::contentTypes['getInvoiceById'][0])
    {
        return $this->getInvoiceByIdAsyncWithHttpInfo($invoice_id, $embed, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInvoiceByIdAsyncWithHttpInfo
     *
     * Find invoice by ID
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string[]|null $embed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoiceById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoiceByIdAsyncWithHttpInfo($invoice_id, $embed = null, string $contentType = self::contentTypes['getInvoiceById'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\GetInvoiceById200Response';
        $request = $this->getInvoiceByIdRequest($invoice_id, $embed, $contentType);

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
     * Create request for operation 'getInvoiceById'
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string[]|null $embed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoiceById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getInvoiceByIdRequest($invoice_id, $embed = null, string $contentType = self::contentTypes['getInvoiceById'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling getInvoiceById'
            );
        }



        $resourcePath = '/Invoice/{invoiceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $embed,
            'embed', // param base name
            'array', // openApiType
            'form', // style
            false, // explode
            false // required
        ) ?? []);


        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
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
     * Operation getInvoicePositionsById
     *
     * Find invoice positions
     *
     * @param  int $invoice_id ID of invoice to return the positions (required)
     * @param  int|null $limit limits the number of entries returned (optional)
     * @param  int|null $offset set the index where the returned entries start (optional)
     * @param  string[]|null $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  bool|null $count_all If all objects should be counted (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoicePositionsById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response
     */
    public function getInvoicePositionsById($invoice_id, $limit = null, $offset = null, $embed = null, $count_all = null, string $contentType = self::contentTypes['getInvoicePositionsById'][0])
    {
        list($response) = $this->getInvoicePositionsByIdWithHttpInfo($invoice_id, $limit, $offset, $embed, $count_all, $contentType);
        return $response;
    }

    /**
     * Operation getInvoicePositionsByIdWithHttpInfo
     *
     * Find invoice positions
     *
     * @param  int $invoice_id ID of invoice to return the positions (required)
     * @param  int|null $limit limits the number of entries returned (optional)
     * @param  int|null $offset set the index where the returned entries start (optional)
     * @param  string[]|null $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  bool|null $count_all If all objects should be counted (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoicePositionsById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInvoicePositionsByIdWithHttpInfo($invoice_id, $limit = null, $offset = null, $embed = null, $count_all = null, string $contentType = self::contentTypes['getInvoicePositionsById'][0])
    {
        $request = $this->getInvoicePositionsByIdRequest($invoice_id, $limit, $offset, $embed, $count_all, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response';
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
                        '\Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getInvoicePositionsByIdAsync
     *
     * Find invoice positions
     *
     * @param  int $invoice_id ID of invoice to return the positions (required)
     * @param  int|null $limit limits the number of entries returned (optional)
     * @param  int|null $offset set the index where the returned entries start (optional)
     * @param  string[]|null $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  bool|null $count_all If all objects should be counted (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoicePositionsById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoicePositionsByIdAsync($invoice_id, $limit = null, $offset = null, $embed = null, $count_all = null, string $contentType = self::contentTypes['getInvoicePositionsById'][0])
    {
        return $this->getInvoicePositionsByIdAsyncWithHttpInfo($invoice_id, $limit, $offset, $embed, $count_all, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInvoicePositionsByIdAsyncWithHttpInfo
     *
     * Find invoice positions
     *
     * @param  int $invoice_id ID of invoice to return the positions (required)
     * @param  int|null $limit limits the number of entries returned (optional)
     * @param  int|null $offset set the index where the returned entries start (optional)
     * @param  string[]|null $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  bool|null $count_all If all objects should be counted (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoicePositionsById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoicePositionsByIdAsyncWithHttpInfo($invoice_id, $limit = null, $offset = null, $embed = null, $count_all = null, string $contentType = self::contentTypes['getInvoicePositionsById'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response';
        $request = $this->getInvoicePositionsByIdRequest($invoice_id, $limit, $offset, $embed, $count_all, $contentType);

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
     * Create request for operation 'getInvoicePositionsById'
     *
     * @param  int $invoice_id ID of invoice to return the positions (required)
     * @param  int|null $limit limits the number of entries returned (optional)
     * @param  int|null $offset set the index where the returned entries start (optional)
     * @param  string[]|null $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  bool|null $count_all If all objects should be counted (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoicePositionsById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getInvoicePositionsByIdRequest($invoice_id, $limit = null, $offset = null, $embed = null, $count_all = null, string $contentType = self::contentTypes['getInvoicePositionsById'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling getInvoicePositionsById'
            );
        }






        $resourcePath = '/Invoice/{invoiceId}/getPositions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
            $offset,
            'offset', // param base name
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
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $count_all,
            'countAll', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
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
     * Operation getInvoices
     *
     * Retrieve invoices
     *
     * @param  float|null $status Status of the invoices (optional)
     * @param  string|null $invoice_number Retrieve all invoices with this invoice number (optional)
     * @param  int|null $start_date Retrieve all invoices with a date equal or higher (optional)
     * @param  int|null $end_date Retrieve all invoices with a date equal or lower (optional)
     * @param  bool|null $count_all If all invoices should be counted (optional)
     * @param  array<string,string>|null $invoice_type The type of invoice (optional)
     * @param  int|null $offset Which offset to start with (optional)
     * @param  int|null $limit The max number of invoices (optional)
     * @param  bool|null $partially_paid Limit to partially paid invoices (optional)
     * @param  bool|null $canceled Limit to canceled invoices (optional)
     * @param  \Itsmind\Sevdesk\Model\GetInvoicesContactParameter|null $contact Retrieve all invoices with this contact. The value of contact[objectName] must be &#39;Contact&#39;. (optional)
     * @param  \Itsmind\Sevdesk\Model\GetInvoicesPaymentMethodParameter|null $payment_method Retrieve all invoices with this paymentMethod. The value of paymentMethod[objectName] must be &#39;PaymentMethod&#39;. (optional)
     * @param  string[]|null $embed embed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoices'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\GetInvoices200Response
     */
    public function getInvoices($status = null, $invoice_number = null, $start_date = null, $end_date = null, $count_all = null, $invoice_type = null, $offset = null, $limit = null, $partially_paid = null, $canceled = null, $contact = null, $payment_method = null, $embed = null, string $contentType = self::contentTypes['getInvoices'][0])
    {
        list($response) = $this->getInvoicesWithHttpInfo($status, $invoice_number, $start_date, $end_date, $count_all, $invoice_type, $offset, $limit, $partially_paid, $canceled, $contact, $payment_method, $embed, $contentType);
        return $response;
    }

    /**
     * Operation getInvoicesWithHttpInfo
     *
     * Retrieve invoices
     *
     * @param  float|null $status Status of the invoices (optional)
     * @param  string|null $invoice_number Retrieve all invoices with this invoice number (optional)
     * @param  int|null $start_date Retrieve all invoices with a date equal or higher (optional)
     * @param  int|null $end_date Retrieve all invoices with a date equal or lower (optional)
     * @param  bool|null $count_all If all invoices should be counted (optional)
     * @param  array<string,string>|null $invoice_type The type of invoice (optional)
     * @param  int|null $offset Which offset to start with (optional)
     * @param  int|null $limit The max number of invoices (optional)
     * @param  bool|null $partially_paid Limit to partially paid invoices (optional)
     * @param  bool|null $canceled Limit to canceled invoices (optional)
     * @param  \Itsmind\Sevdesk\Model\GetInvoicesContactParameter|null $contact Retrieve all invoices with this contact. The value of contact[objectName] must be &#39;Contact&#39;. (optional)
     * @param  \Itsmind\Sevdesk\Model\GetInvoicesPaymentMethodParameter|null $payment_method Retrieve all invoices with this paymentMethod. The value of paymentMethod[objectName] must be &#39;PaymentMethod&#39;. (optional)
     * @param  string[]|null $embed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoices'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\GetInvoices200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInvoicesWithHttpInfo($status = null, $invoice_number = null, $start_date = null, $end_date = null, $count_all = null, $invoice_type = null, $offset = null, $limit = null, $partially_paid = null, $canceled = null, $contact = null, $payment_method = null, $embed = null, string $contentType = self::contentTypes['getInvoices'][0])
    {
        $request = $this->getInvoicesRequest($status, $invoice_number, $start_date, $end_date, $count_all, $invoice_type, $offset, $limit, $partially_paid, $canceled, $contact, $payment_method, $embed, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\GetInvoices200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\GetInvoices200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\GetInvoices200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\GetInvoices200Response';
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
                        '\Itsmind\Sevdesk\Model\GetInvoices200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getInvoicesAsync
     *
     * Retrieve invoices
     *
     * @param  float|null $status Status of the invoices (optional)
     * @param  string|null $invoice_number Retrieve all invoices with this invoice number (optional)
     * @param  int|null $start_date Retrieve all invoices with a date equal or higher (optional)
     * @param  int|null $end_date Retrieve all invoices with a date equal or lower (optional)
     * @param  bool|null $count_all If all invoices should be counted (optional)
     * @param  array<string,string>|null $invoice_type The type of invoice (optional)
     * @param  int|null $offset Which offset to start with (optional)
     * @param  int|null $limit The max number of invoices (optional)
     * @param  bool|null $partially_paid Limit to partially paid invoices (optional)
     * @param  bool|null $canceled Limit to canceled invoices (optional)
     * @param  \Itsmind\Sevdesk\Model\GetInvoicesContactParameter|null $contact Retrieve all invoices with this contact. The value of contact[objectName] must be &#39;Contact&#39;. (optional)
     * @param  \Itsmind\Sevdesk\Model\GetInvoicesPaymentMethodParameter|null $payment_method Retrieve all invoices with this paymentMethod. The value of paymentMethod[objectName] must be &#39;PaymentMethod&#39;. (optional)
     * @param  string[]|null $embed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoices'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoicesAsync($status = null, $invoice_number = null, $start_date = null, $end_date = null, $count_all = null, $invoice_type = null, $offset = null, $limit = null, $partially_paid = null, $canceled = null, $contact = null, $payment_method = null, $embed = null, string $contentType = self::contentTypes['getInvoices'][0])
    {
        return $this->getInvoicesAsyncWithHttpInfo($status, $invoice_number, $start_date, $end_date, $count_all, $invoice_type, $offset, $limit, $partially_paid, $canceled, $contact, $payment_method, $embed, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInvoicesAsyncWithHttpInfo
     *
     * Retrieve invoices
     *
     * @param  float|null $status Status of the invoices (optional)
     * @param  string|null $invoice_number Retrieve all invoices with this invoice number (optional)
     * @param  int|null $start_date Retrieve all invoices with a date equal or higher (optional)
     * @param  int|null $end_date Retrieve all invoices with a date equal or lower (optional)
     * @param  bool|null $count_all If all invoices should be counted (optional)
     * @param  array<string,string>|null $invoice_type The type of invoice (optional)
     * @param  int|null $offset Which offset to start with (optional)
     * @param  int|null $limit The max number of invoices (optional)
     * @param  bool|null $partially_paid Limit to partially paid invoices (optional)
     * @param  bool|null $canceled Limit to canceled invoices (optional)
     * @param  \Itsmind\Sevdesk\Model\GetInvoicesContactParameter|null $contact Retrieve all invoices with this contact. The value of contact[objectName] must be &#39;Contact&#39;. (optional)
     * @param  \Itsmind\Sevdesk\Model\GetInvoicesPaymentMethodParameter|null $payment_method Retrieve all invoices with this paymentMethod. The value of paymentMethod[objectName] must be &#39;PaymentMethod&#39;. (optional)
     * @param  string[]|null $embed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoices'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoicesAsyncWithHttpInfo($status = null, $invoice_number = null, $start_date = null, $end_date = null, $count_all = null, $invoice_type = null, $offset = null, $limit = null, $partially_paid = null, $canceled = null, $contact = null, $payment_method = null, $embed = null, string $contentType = self::contentTypes['getInvoices'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\GetInvoices200Response';
        $request = $this->getInvoicesRequest($status, $invoice_number, $start_date, $end_date, $count_all, $invoice_type, $offset, $limit, $partially_paid, $canceled, $contact, $payment_method, $embed, $contentType);

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
     * Create request for operation 'getInvoices'
     *
     * @param  float|null $status Status of the invoices (optional)
     * @param  string|null $invoice_number Retrieve all invoices with this invoice number (optional)
     * @param  int|null $start_date Retrieve all invoices with a date equal or higher (optional)
     * @param  int|null $end_date Retrieve all invoices with a date equal or lower (optional)
     * @param  bool|null $count_all If all invoices should be counted (optional)
     * @param  array<string,string>|null $invoice_type The type of invoice (optional)
     * @param  int|null $offset Which offset to start with (optional)
     * @param  int|null $limit The max number of invoices (optional)
     * @param  bool|null $partially_paid Limit to partially paid invoices (optional)
     * @param  bool|null $canceled Limit to canceled invoices (optional)
     * @param  \Itsmind\Sevdesk\Model\GetInvoicesContactParameter|null $contact Retrieve all invoices with this contact. The value of contact[objectName] must be &#39;Contact&#39;. (optional)
     * @param  \Itsmind\Sevdesk\Model\GetInvoicesPaymentMethodParameter|null $payment_method Retrieve all invoices with this paymentMethod. The value of paymentMethod[objectName] must be &#39;PaymentMethod&#39;. (optional)
     * @param  string[]|null $embed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoices'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getInvoicesRequest($status = null, $invoice_number = null, $start_date = null, $end_date = null, $count_all = null, $invoice_type = null, $offset = null, $limit = null, $partially_paid = null, $canceled = null, $contact = null, $payment_method = null, $embed = null, string $contentType = self::contentTypes['getInvoices'][0])
    {















        $resourcePath = '/Invoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $invoice_number,
            'invoiceNumber', // param base name
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
            $count_all,
            'countAll', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $invoice_type,
            'invoiceType', // param base name
            'object', // openApiType
            'deepObject', // style
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
            $partially_paid,
            'partiallyPaid', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $canceled,
            'canceled', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $contact,
            'contact', // param base name
            'object', // openApiType
            'deepObject', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $payment_method,
            'paymentMethod', // param base name
            'object', // openApiType
            'deepObject', // style
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
     * Operation getIsInvoicePartiallyPaid
     *
     * Check if an invoice is already partially paid
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getIsInvoicePartiallyPaid'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\ContactCustomerNumberAvailabilityCheck200Response
     */
    public function getIsInvoicePartiallyPaid($invoice_id, string $contentType = self::contentTypes['getIsInvoicePartiallyPaid'][0])
    {
        list($response) = $this->getIsInvoicePartiallyPaidWithHttpInfo($invoice_id, $contentType);
        return $response;
    }

    /**
     * Operation getIsInvoicePartiallyPaidWithHttpInfo
     *
     * Check if an invoice is already partially paid
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getIsInvoicePartiallyPaid'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\ContactCustomerNumberAvailabilityCheck200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getIsInvoicePartiallyPaidWithHttpInfo($invoice_id, string $contentType = self::contentTypes['getIsInvoicePartiallyPaid'][0])
    {
        $request = $this->getIsInvoicePartiallyPaidRequest($invoice_id, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\ContactCustomerNumberAvailabilityCheck200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ContactCustomerNumberAvailabilityCheck200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ContactCustomerNumberAvailabilityCheck200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\ContactCustomerNumberAvailabilityCheck200Response';
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
                        '\Itsmind\Sevdesk\Model\ContactCustomerNumberAvailabilityCheck200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getIsInvoicePartiallyPaidAsync
     *
     * Check if an invoice is already partially paid
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getIsInvoicePartiallyPaid'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIsInvoicePartiallyPaidAsync($invoice_id, string $contentType = self::contentTypes['getIsInvoicePartiallyPaid'][0])
    {
        return $this->getIsInvoicePartiallyPaidAsyncWithHttpInfo($invoice_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getIsInvoicePartiallyPaidAsyncWithHttpInfo
     *
     * Check if an invoice is already partially paid
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getIsInvoicePartiallyPaid'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIsInvoicePartiallyPaidAsyncWithHttpInfo($invoice_id, string $contentType = self::contentTypes['getIsInvoicePartiallyPaid'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\ContactCustomerNumberAvailabilityCheck200Response';
        $request = $this->getIsInvoicePartiallyPaidRequest($invoice_id, $contentType);

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
     * Create request for operation 'getIsInvoicePartiallyPaid'
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getIsInvoicePartiallyPaid'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getIsInvoicePartiallyPaidRequest($invoice_id, string $contentType = self::contentTypes['getIsInvoicePartiallyPaid'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling getIsInvoicePartiallyPaid'
            );
        }


        $resourcePath = '/Invoice/{invoiceId}/getIsPartiallyPaid';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
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
     * Operation getLastDunning
     *
     * Get the last dunning of an invoice
     *
     * @param  int $invoice_id ID of invoice to get last dunning for (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLastDunning'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
     */
    public function getLastDunning($invoice_id, string $contentType = self::contentTypes['getLastDunning'][0])
    {
        list($response) = $this->getLastDunningWithHttpInfo($invoice_id, $contentType);
        return $response;
    }

    /**
     * Operation getLastDunningWithHttpInfo
     *
     * Get the last dunning of an invoice
     *
     * @param  int $invoice_id ID of invoice to get last dunning for (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLastDunning'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLastDunningWithHttpInfo($invoice_id, string $contentType = self::contentTypes['getLastDunning'][0])
    {
        $request = $this->getLastDunningRequest($invoice_id, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response';
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
                        '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLastDunningAsync
     *
     * Get the last dunning of an invoice
     *
     * @param  int $invoice_id ID of invoice to get last dunning for (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLastDunning'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLastDunningAsync($invoice_id, string $contentType = self::contentTypes['getLastDunning'][0])
    {
        return $this->getLastDunningAsyncWithHttpInfo($invoice_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLastDunningAsyncWithHttpInfo
     *
     * Get the last dunning of an invoice
     *
     * @param  int $invoice_id ID of invoice to get last dunning for (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLastDunning'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLastDunningAsyncWithHttpInfo($invoice_id, string $contentType = self::contentTypes['getLastDunning'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response';
        $request = $this->getLastDunningRequest($invoice_id, $contentType);

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
     * Create request for operation 'getLastDunning'
     *
     * @param  int $invoice_id ID of invoice to get last dunning for (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLastDunning'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLastDunningRequest($invoice_id, string $contentType = self::contentTypes['getLastDunning'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling getLastDunning'
            );
        }


        $resourcePath = '/Invoice/{invoiceId}/getLastDunning';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
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
     * Operation getOpenInvoiceReminderDebit
     *
     * Get the oben reminder debit for an invoice
     *
     * @param  \Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebitInvoiceParameter $invoice Retrieve the open reminder debit for this invoice. The value of invoice[objectName] must be &#39;Invoice&#39;. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOpenInvoiceReminderDebit'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebit200Response
     */
    public function getOpenInvoiceReminderDebit($invoice, string $contentType = self::contentTypes['getOpenInvoiceReminderDebit'][0])
    {
        list($response) = $this->getOpenInvoiceReminderDebitWithHttpInfo($invoice, $contentType);
        return $response;
    }

    /**
     * Operation getOpenInvoiceReminderDebitWithHttpInfo
     *
     * Get the oben reminder debit for an invoice
     *
     * @param  \Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebitInvoiceParameter $invoice Retrieve the open reminder debit for this invoice. The value of invoice[objectName] must be &#39;Invoice&#39;. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOpenInvoiceReminderDebit'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebit200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOpenInvoiceReminderDebitWithHttpInfo($invoice, string $contentType = self::contentTypes['getOpenInvoiceReminderDebit'][0])
    {
        $request = $this->getOpenInvoiceReminderDebitRequest($invoice, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebit200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebit200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebit200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebit200Response';
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
                        '\Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebit200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOpenInvoiceReminderDebitAsync
     *
     * Get the oben reminder debit for an invoice
     *
     * @param  \Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebitInvoiceParameter $invoice Retrieve the open reminder debit for this invoice. The value of invoice[objectName] must be &#39;Invoice&#39;. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOpenInvoiceReminderDebit'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOpenInvoiceReminderDebitAsync($invoice, string $contentType = self::contentTypes['getOpenInvoiceReminderDebit'][0])
    {
        return $this->getOpenInvoiceReminderDebitAsyncWithHttpInfo($invoice, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOpenInvoiceReminderDebitAsyncWithHttpInfo
     *
     * Get the oben reminder debit for an invoice
     *
     * @param  \Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebitInvoiceParameter $invoice Retrieve the open reminder debit for this invoice. The value of invoice[objectName] must be &#39;Invoice&#39;. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOpenInvoiceReminderDebit'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOpenInvoiceReminderDebitAsyncWithHttpInfo($invoice, string $contentType = self::contentTypes['getOpenInvoiceReminderDebit'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebit200Response';
        $request = $this->getOpenInvoiceReminderDebitRequest($invoice, $contentType);

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
     * Create request for operation 'getOpenInvoiceReminderDebit'
     *
     * @param  \Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebitInvoiceParameter $invoice Retrieve the open reminder debit for this invoice. The value of invoice[objectName] must be &#39;Invoice&#39;. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOpenInvoiceReminderDebit'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getOpenInvoiceReminderDebitRequest($invoice, string $contentType = self::contentTypes['getOpenInvoiceReminderDebit'][0])
    {

        // verify the required parameter 'invoice' is set
        if ($invoice === null || (is_array($invoice) && count($invoice) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice when calling getOpenInvoiceReminderDebit'
            );
        }


        $resourcePath = '/Invoice/Factory/getOpenInvoiceReminderDebit';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $invoice,
            'invoice', // param base name
            'object', // openApiType
            'deepObject', // style
            true, // explode
            true // required
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
     * Operation invoiceEnshrine
     *
     * Enshrine
     *
     * @param  int $invoice_id ID of the invoice to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceEnshrine'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response|\Itsmind\Sevdesk\Model\ValidationError
     */
    public function invoiceEnshrine($invoice_id, string $contentType = self::contentTypes['invoiceEnshrine'][0])
    {
        list($response) = $this->invoiceEnshrineWithHttpInfo($invoice_id, $contentType);
        return $response;
    }

    /**
     * Operation invoiceEnshrineWithHttpInfo
     *
     * Enshrine
     *
     * @param  int $invoice_id ID of the invoice to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceEnshrine'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response|\Itsmind\Sevdesk\Model\ValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoiceEnshrineWithHttpInfo($invoice_id, string $contentType = self::contentTypes['invoiceEnshrine'][0])
    {
        $request = $this->invoiceEnshrineRequest($invoice_id, $contentType);

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
     * Operation invoiceEnshrineAsync
     *
     * Enshrine
     *
     * @param  int $invoice_id ID of the invoice to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceEnshrine'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceEnshrineAsync($invoice_id, string $contentType = self::contentTypes['invoiceEnshrine'][0])
    {
        return $this->invoiceEnshrineAsyncWithHttpInfo($invoice_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation invoiceEnshrineAsyncWithHttpInfo
     *
     * Enshrine
     *
     * @param  int $invoice_id ID of the invoice to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceEnshrine'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceEnshrineAsyncWithHttpInfo($invoice_id, string $contentType = self::contentTypes['invoiceEnshrine'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response';
        $request = $this->invoiceEnshrineRequest($invoice_id, $contentType);

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
     * Create request for operation 'invoiceEnshrine'
     *
     * @param  int $invoice_id ID of the invoice to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceEnshrine'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function invoiceEnshrineRequest($invoice_id, string $contentType = self::contentTypes['invoiceEnshrine'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling invoiceEnshrine'
            );
        }


        $resourcePath = '/Invoice/{invoiceId}/enshrine';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
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
     * Operation invoiceGetPdf
     *
     * Retrieve pdf document of an invoice
     *
     * @param  int $invoice_id ID of invoice from which you want the pdf (required)
     * @param  bool|null $download If u want to download the pdf of the invoice. (optional)
     * @param  bool|null $prevent_send_by Defines if u want to send the invoice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceGetPdf'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\InvoiceGetPdf200Response
     */
    public function invoiceGetPdf($invoice_id, $download = null, $prevent_send_by = null, string $contentType = self::contentTypes['invoiceGetPdf'][0])
    {
        list($response) = $this->invoiceGetPdfWithHttpInfo($invoice_id, $download, $prevent_send_by, $contentType);
        return $response;
    }

    /**
     * Operation invoiceGetPdfWithHttpInfo
     *
     * Retrieve pdf document of an invoice
     *
     * @param  int $invoice_id ID of invoice from which you want the pdf (required)
     * @param  bool|null $download If u want to download the pdf of the invoice. (optional)
     * @param  bool|null $prevent_send_by Defines if u want to send the invoice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceGetPdf'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\InvoiceGetPdf200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoiceGetPdfWithHttpInfo($invoice_id, $download = null, $prevent_send_by = null, string $contentType = self::contentTypes['invoiceGetPdf'][0])
    {
        $request = $this->invoiceGetPdfRequest($invoice_id, $download, $prevent_send_by, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\InvoiceGetPdf200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\InvoiceGetPdf200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\InvoiceGetPdf200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\InvoiceGetPdf200Response';
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
                        '\Itsmind\Sevdesk\Model\InvoiceGetPdf200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation invoiceGetPdfAsync
     *
     * Retrieve pdf document of an invoice
     *
     * @param  int $invoice_id ID of invoice from which you want the pdf (required)
     * @param  bool|null $download If u want to download the pdf of the invoice. (optional)
     * @param  bool|null $prevent_send_by Defines if u want to send the invoice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceGetPdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceGetPdfAsync($invoice_id, $download = null, $prevent_send_by = null, string $contentType = self::contentTypes['invoiceGetPdf'][0])
    {
        return $this->invoiceGetPdfAsyncWithHttpInfo($invoice_id, $download, $prevent_send_by, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation invoiceGetPdfAsyncWithHttpInfo
     *
     * Retrieve pdf document of an invoice
     *
     * @param  int $invoice_id ID of invoice from which you want the pdf (required)
     * @param  bool|null $download If u want to download the pdf of the invoice. (optional)
     * @param  bool|null $prevent_send_by Defines if u want to send the invoice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceGetPdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceGetPdfAsyncWithHttpInfo($invoice_id, $download = null, $prevent_send_by = null, string $contentType = self::contentTypes['invoiceGetPdf'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\InvoiceGetPdf200Response';
        $request = $this->invoiceGetPdfRequest($invoice_id, $download, $prevent_send_by, $contentType);

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
     * Create request for operation 'invoiceGetPdf'
     *
     * @param  int $invoice_id ID of invoice from which you want the pdf (required)
     * @param  bool|null $download If u want to download the pdf of the invoice. (optional)
     * @param  bool|null $prevent_send_by Defines if u want to send the invoice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceGetPdf'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function invoiceGetPdfRequest($invoice_id, $download = null, $prevent_send_by = null, string $contentType = self::contentTypes['invoiceGetPdf'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling invoiceGetPdf'
            );
        }




        $resourcePath = '/Invoice/{invoiceId}/getPdf';
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
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
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
     * Operation invoiceGetXml
     *
     * Retrieve XML of an e-invoice
     *
     * @param  int $invoice_id ID of invoice from which you want the XML (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceGetXml'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\InvoiceGetXml200Response
     */
    public function invoiceGetXml($invoice_id, string $contentType = self::contentTypes['invoiceGetXml'][0])
    {
        list($response) = $this->invoiceGetXmlWithHttpInfo($invoice_id, $contentType);
        return $response;
    }

    /**
     * Operation invoiceGetXmlWithHttpInfo
     *
     * Retrieve XML of an e-invoice
     *
     * @param  int $invoice_id ID of invoice from which you want the XML (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceGetXml'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\InvoiceGetXml200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoiceGetXmlWithHttpInfo($invoice_id, string $contentType = self::contentTypes['invoiceGetXml'][0])
    {
        $request = $this->invoiceGetXmlRequest($invoice_id, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\InvoiceGetXml200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\InvoiceGetXml200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\InvoiceGetXml200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\InvoiceGetXml200Response';
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
                        '\Itsmind\Sevdesk\Model\InvoiceGetXml200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation invoiceGetXmlAsync
     *
     * Retrieve XML of an e-invoice
     *
     * @param  int $invoice_id ID of invoice from which you want the XML (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceGetXml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceGetXmlAsync($invoice_id, string $contentType = self::contentTypes['invoiceGetXml'][0])
    {
        return $this->invoiceGetXmlAsyncWithHttpInfo($invoice_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation invoiceGetXmlAsyncWithHttpInfo
     *
     * Retrieve XML of an e-invoice
     *
     * @param  int $invoice_id ID of invoice from which you want the XML (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceGetXml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceGetXmlAsyncWithHttpInfo($invoice_id, string $contentType = self::contentTypes['invoiceGetXml'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\InvoiceGetXml200Response';
        $request = $this->invoiceGetXmlRequest($invoice_id, $contentType);

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
     * Create request for operation 'invoiceGetXml'
     *
     * @param  int $invoice_id ID of invoice from which you want the XML (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceGetXml'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function invoiceGetXmlRequest($invoice_id, string $contentType = self::contentTypes['invoiceGetXml'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling invoiceGetXml'
            );
        }


        $resourcePath = '/Invoice/{invoiceId}/getXml';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
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
     * Operation invoiceRender
     *
     * Render the pdf document of an invoice
     *
     * @param  int $invoice_id ID of invoice to render (required)
     * @param  \Itsmind\Sevdesk\Model\InvoiceRenderRequest|null $invoice_render_request Define if the document should be forcefully re-rendered. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceRender'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\InvoiceRender201Response
     */
    public function invoiceRender($invoice_id, $invoice_render_request = null, string $contentType = self::contentTypes['invoiceRender'][0])
    {
        list($response) = $this->invoiceRenderWithHttpInfo($invoice_id, $invoice_render_request, $contentType);
        return $response;
    }

    /**
     * Operation invoiceRenderWithHttpInfo
     *
     * Render the pdf document of an invoice
     *
     * @param  int $invoice_id ID of invoice to render (required)
     * @param  \Itsmind\Sevdesk\Model\InvoiceRenderRequest|null $invoice_render_request Define if the document should be forcefully re-rendered. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceRender'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\InvoiceRender201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoiceRenderWithHttpInfo($invoice_id, $invoice_render_request = null, string $contentType = self::contentTypes['invoiceRender'][0])
    {
        $request = $this->invoiceRenderRequest($invoice_id, $invoice_render_request, $contentType);

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


            switch($statusCode) {
                case 201:
                    if ('\Itsmind\Sevdesk\Model\InvoiceRender201Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\InvoiceRender201Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\InvoiceRender201Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\InvoiceRender201Response';
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
                        '\Itsmind\Sevdesk\Model\InvoiceRender201Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation invoiceRenderAsync
     *
     * Render the pdf document of an invoice
     *
     * @param  int $invoice_id ID of invoice to render (required)
     * @param  \Itsmind\Sevdesk\Model\InvoiceRenderRequest|null $invoice_render_request Define if the document should be forcefully re-rendered. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceRender'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceRenderAsync($invoice_id, $invoice_render_request = null, string $contentType = self::contentTypes['invoiceRender'][0])
    {
        return $this->invoiceRenderAsyncWithHttpInfo($invoice_id, $invoice_render_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation invoiceRenderAsyncWithHttpInfo
     *
     * Render the pdf document of an invoice
     *
     * @param  int $invoice_id ID of invoice to render (required)
     * @param  \Itsmind\Sevdesk\Model\InvoiceRenderRequest|null $invoice_render_request Define if the document should be forcefully re-rendered. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceRender'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceRenderAsyncWithHttpInfo($invoice_id, $invoice_render_request = null, string $contentType = self::contentTypes['invoiceRender'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\InvoiceRender201Response';
        $request = $this->invoiceRenderRequest($invoice_id, $invoice_render_request, $contentType);

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
     * Create request for operation 'invoiceRender'
     *
     * @param  int $invoice_id ID of invoice to render (required)
     * @param  \Itsmind\Sevdesk\Model\InvoiceRenderRequest|null $invoice_render_request Define if the document should be forcefully re-rendered. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceRender'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function invoiceRenderRequest($invoice_id, $invoice_render_request = null, string $contentType = self::contentTypes['invoiceRender'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling invoiceRender'
            );
        }



        $resourcePath = '/Invoice/{invoiceId}/render';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($invoice_render_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($invoice_render_request));
            } else {
                $httpBody = $invoice_render_request;
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
     * Operation invoiceResetToDraft
     *
     * Reset status to draft
     *
     * @param  int $invoice_id ID of the invoice to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceResetToDraft'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\InvoiceResetToDraft200Response|\Itsmind\Sevdesk\Model\ValidationError
     */
    public function invoiceResetToDraft($invoice_id, string $contentType = self::contentTypes['invoiceResetToDraft'][0])
    {
        list($response) = $this->invoiceResetToDraftWithHttpInfo($invoice_id, $contentType);
        return $response;
    }

    /**
     * Operation invoiceResetToDraftWithHttpInfo
     *
     * Reset status to draft
     *
     * @param  int $invoice_id ID of the invoice to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceResetToDraft'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\InvoiceResetToDraft200Response|\Itsmind\Sevdesk\Model\ValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoiceResetToDraftWithHttpInfo($invoice_id, string $contentType = self::contentTypes['invoiceResetToDraft'][0])
    {
        $request = $this->invoiceResetToDraftRequest($invoice_id, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\InvoiceResetToDraft200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\InvoiceResetToDraft200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\InvoiceResetToDraft200Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\InvoiceResetToDraft200Response';
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
                        '\Itsmind\Sevdesk\Model\InvoiceResetToDraft200Response',
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
     * Operation invoiceResetToDraftAsync
     *
     * Reset status to draft
     *
     * @param  int $invoice_id ID of the invoice to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceResetToDraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceResetToDraftAsync($invoice_id, string $contentType = self::contentTypes['invoiceResetToDraft'][0])
    {
        return $this->invoiceResetToDraftAsyncWithHttpInfo($invoice_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation invoiceResetToDraftAsyncWithHttpInfo
     *
     * Reset status to draft
     *
     * @param  int $invoice_id ID of the invoice to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceResetToDraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceResetToDraftAsyncWithHttpInfo($invoice_id, string $contentType = self::contentTypes['invoiceResetToDraft'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\InvoiceResetToDraft200Response';
        $request = $this->invoiceResetToDraftRequest($invoice_id, $contentType);

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
     * Create request for operation 'invoiceResetToDraft'
     *
     * @param  int $invoice_id ID of the invoice to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceResetToDraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function invoiceResetToDraftRequest($invoice_id, string $contentType = self::contentTypes['invoiceResetToDraft'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling invoiceResetToDraft'
            );
        }


        $resourcePath = '/Invoice/{invoiceId}/resetToDraft';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
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
     * Operation invoiceResetToOpen
     *
     * Reset status to open
     *
     * @param  int $invoice_id ID of the invoice to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceResetToOpen'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\InvoiceResetToOpen200Response|\Itsmind\Sevdesk\Model\ValidationError
     */
    public function invoiceResetToOpen($invoice_id, string $contentType = self::contentTypes['invoiceResetToOpen'][0])
    {
        list($response) = $this->invoiceResetToOpenWithHttpInfo($invoice_id, $contentType);
        return $response;
    }

    /**
     * Operation invoiceResetToOpenWithHttpInfo
     *
     * Reset status to open
     *
     * @param  int $invoice_id ID of the invoice to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceResetToOpen'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\InvoiceResetToOpen200Response|\Itsmind\Sevdesk\Model\ValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoiceResetToOpenWithHttpInfo($invoice_id, string $contentType = self::contentTypes['invoiceResetToOpen'][0])
    {
        $request = $this->invoiceResetToOpenRequest($invoice_id, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\InvoiceResetToOpen200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\InvoiceResetToOpen200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\InvoiceResetToOpen200Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\InvoiceResetToOpen200Response';
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
                        '\Itsmind\Sevdesk\Model\InvoiceResetToOpen200Response',
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
     * Operation invoiceResetToOpenAsync
     *
     * Reset status to open
     *
     * @param  int $invoice_id ID of the invoice to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceResetToOpen'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceResetToOpenAsync($invoice_id, string $contentType = self::contentTypes['invoiceResetToOpen'][0])
    {
        return $this->invoiceResetToOpenAsyncWithHttpInfo($invoice_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation invoiceResetToOpenAsyncWithHttpInfo
     *
     * Reset status to open
     *
     * @param  int $invoice_id ID of the invoice to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceResetToOpen'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceResetToOpenAsyncWithHttpInfo($invoice_id, string $contentType = self::contentTypes['invoiceResetToOpen'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\InvoiceResetToOpen200Response';
        $request = $this->invoiceResetToOpenRequest($invoice_id, $contentType);

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
     * Create request for operation 'invoiceResetToOpen'
     *
     * @param  int $invoice_id ID of the invoice to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceResetToOpen'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function invoiceResetToOpenRequest($invoice_id, string $contentType = self::contentTypes['invoiceResetToOpen'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling invoiceResetToOpen'
            );
        }


        $resourcePath = '/Invoice/{invoiceId}/resetToOpen';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
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
     * Operation invoiceSendBy
     *
     * Mark invoice as sent
     *
     * @param  int $invoice_id ID of invoice to mark as sent (required)
     * @param  \Itsmind\Sevdesk\Model\InvoiceSendByRequest|null $invoice_send_by_request Specify the send type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceSendBy'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
     */
    public function invoiceSendBy($invoice_id, $invoice_send_by_request = null, string $contentType = self::contentTypes['invoiceSendBy'][0])
    {
        list($response) = $this->invoiceSendByWithHttpInfo($invoice_id, $invoice_send_by_request, $contentType);
        return $response;
    }

    /**
     * Operation invoiceSendByWithHttpInfo
     *
     * Mark invoice as sent
     *
     * @param  int $invoice_id ID of invoice to mark as sent (required)
     * @param  \Itsmind\Sevdesk\Model\InvoiceSendByRequest|null $invoice_send_by_request Specify the send type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceSendBy'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function invoiceSendByWithHttpInfo($invoice_id, $invoice_send_by_request = null, string $contentType = self::contentTypes['invoiceSendBy'][0])
    {
        $request = $this->invoiceSendByRequest($invoice_id, $invoice_send_by_request, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response';
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
                        '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation invoiceSendByAsync
     *
     * Mark invoice as sent
     *
     * @param  int $invoice_id ID of invoice to mark as sent (required)
     * @param  \Itsmind\Sevdesk\Model\InvoiceSendByRequest|null $invoice_send_by_request Specify the send type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceSendBy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceSendByAsync($invoice_id, $invoice_send_by_request = null, string $contentType = self::contentTypes['invoiceSendBy'][0])
    {
        return $this->invoiceSendByAsyncWithHttpInfo($invoice_id, $invoice_send_by_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation invoiceSendByAsyncWithHttpInfo
     *
     * Mark invoice as sent
     *
     * @param  int $invoice_id ID of invoice to mark as sent (required)
     * @param  \Itsmind\Sevdesk\Model\InvoiceSendByRequest|null $invoice_send_by_request Specify the send type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceSendBy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceSendByAsyncWithHttpInfo($invoice_id, $invoice_send_by_request = null, string $contentType = self::contentTypes['invoiceSendBy'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response';
        $request = $this->invoiceSendByRequest($invoice_id, $invoice_send_by_request, $contentType);

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
     * Create request for operation 'invoiceSendBy'
     *
     * @param  int $invoice_id ID of invoice to mark as sent (required)
     * @param  \Itsmind\Sevdesk\Model\InvoiceSendByRequest|null $invoice_send_by_request Specify the send type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceSendBy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function invoiceSendByRequest($invoice_id, $invoice_send_by_request = null, string $contentType = self::contentTypes['invoiceSendBy'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling invoiceSendBy'
            );
        }



        $resourcePath = '/Invoice/{invoiceId}/sendBy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($invoice_send_by_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($invoice_send_by_request));
            } else {
                $httpBody = $invoice_send_by_request;
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
     * Operation sendInvoiceViaEMail
     *
     * Send invoice via email
     *
     * @param  int $invoice_id ID of invoice to be sent via email (required)
     * @param  \Itsmind\Sevdesk\Model\SendInvoiceViaEMailRequest|null $send_invoice_via_e_mail_request Mail data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendInvoiceViaEMail'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\SendInvoiceViaEMail201Response
     */
    public function sendInvoiceViaEMail($invoice_id, $send_invoice_via_e_mail_request = null, string $contentType = self::contentTypes['sendInvoiceViaEMail'][0])
    {
        list($response) = $this->sendInvoiceViaEMailWithHttpInfo($invoice_id, $send_invoice_via_e_mail_request, $contentType);
        return $response;
    }

    /**
     * Operation sendInvoiceViaEMailWithHttpInfo
     *
     * Send invoice via email
     *
     * @param  int $invoice_id ID of invoice to be sent via email (required)
     * @param  \Itsmind\Sevdesk\Model\SendInvoiceViaEMailRequest|null $send_invoice_via_e_mail_request Mail data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendInvoiceViaEMail'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\SendInvoiceViaEMail201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendInvoiceViaEMailWithHttpInfo($invoice_id, $send_invoice_via_e_mail_request = null, string $contentType = self::contentTypes['sendInvoiceViaEMail'][0])
    {
        $request = $this->sendInvoiceViaEMailRequest($invoice_id, $send_invoice_via_e_mail_request, $contentType);

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


            switch($statusCode) {
                case 201:
                    if ('\Itsmind\Sevdesk\Model\SendInvoiceViaEMail201Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\SendInvoiceViaEMail201Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\SendInvoiceViaEMail201Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\SendInvoiceViaEMail201Response';
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
                        '\Itsmind\Sevdesk\Model\SendInvoiceViaEMail201Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendInvoiceViaEMailAsync
     *
     * Send invoice via email
     *
     * @param  int $invoice_id ID of invoice to be sent via email (required)
     * @param  \Itsmind\Sevdesk\Model\SendInvoiceViaEMailRequest|null $send_invoice_via_e_mail_request Mail data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendInvoiceViaEMail'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendInvoiceViaEMailAsync($invoice_id, $send_invoice_via_e_mail_request = null, string $contentType = self::contentTypes['sendInvoiceViaEMail'][0])
    {
        return $this->sendInvoiceViaEMailAsyncWithHttpInfo($invoice_id, $send_invoice_via_e_mail_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendInvoiceViaEMailAsyncWithHttpInfo
     *
     * Send invoice via email
     *
     * @param  int $invoice_id ID of invoice to be sent via email (required)
     * @param  \Itsmind\Sevdesk\Model\SendInvoiceViaEMailRequest|null $send_invoice_via_e_mail_request Mail data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendInvoiceViaEMail'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendInvoiceViaEMailAsyncWithHttpInfo($invoice_id, $send_invoice_via_e_mail_request = null, string $contentType = self::contentTypes['sendInvoiceViaEMail'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\SendInvoiceViaEMail201Response';
        $request = $this->sendInvoiceViaEMailRequest($invoice_id, $send_invoice_via_e_mail_request, $contentType);

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
     * Create request for operation 'sendInvoiceViaEMail'
     *
     * @param  int $invoice_id ID of invoice to be sent via email (required)
     * @param  \Itsmind\Sevdesk\Model\SendInvoiceViaEMailRequest|null $send_invoice_via_e_mail_request Mail data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendInvoiceViaEMail'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function sendInvoiceViaEMailRequest($invoice_id, $send_invoice_via_e_mail_request = null, string $contentType = self::contentTypes['sendInvoiceViaEMail'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling sendInvoiceViaEMail'
            );
        }



        $resourcePath = '/Invoice/{invoiceId}/sendViaEmail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($send_invoice_via_e_mail_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($send_invoice_via_e_mail_request));
            } else {
                $httpBody = $send_invoice_via_e_mail_request;
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
     * Operation updateInvoiceById
     *
     * Update invoice by ID
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string[]|null $embed embed (optional)
     * @param  \Itsmind\Sevdesk\Model\ModelInvoiceUpdate|null $model_invoice_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateInvoiceById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
     */
    public function updateInvoiceById($invoice_id, $embed = null, $model_invoice_update = null, string $contentType = self::contentTypes['updateInvoiceById'][0])
    {
        list($response) = $this->updateInvoiceByIdWithHttpInfo($invoice_id, $embed, $model_invoice_update, $contentType);
        return $response;
    }

    /**
     * Operation updateInvoiceByIdWithHttpInfo
     *
     * Update invoice by ID
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string[]|null $embed (optional)
     * @param  \Itsmind\Sevdesk\Model\ModelInvoiceUpdate|null $model_invoice_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateInvoiceById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateInvoiceByIdWithHttpInfo($invoice_id, $embed = null, $model_invoice_update = null, string $contentType = self::contentTypes['updateInvoiceById'][0])
    {
        $request = $this->updateInvoiceByIdRequest($invoice_id, $embed, $model_invoice_update, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response';
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
                        '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateInvoiceByIdAsync
     *
     * Update invoice by ID
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string[]|null $embed (optional)
     * @param  \Itsmind\Sevdesk\Model\ModelInvoiceUpdate|null $model_invoice_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateInvoiceById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateInvoiceByIdAsync($invoice_id, $embed = null, $model_invoice_update = null, string $contentType = self::contentTypes['updateInvoiceById'][0])
    {
        return $this->updateInvoiceByIdAsyncWithHttpInfo($invoice_id, $embed, $model_invoice_update, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateInvoiceByIdAsyncWithHttpInfo
     *
     * Update invoice by ID
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string[]|null $embed (optional)
     * @param  \Itsmind\Sevdesk\Model\ModelInvoiceUpdate|null $model_invoice_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateInvoiceById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateInvoiceByIdAsyncWithHttpInfo($invoice_id, $embed = null, $model_invoice_update = null, string $contentType = self::contentTypes['updateInvoiceById'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response';
        $request = $this->updateInvoiceByIdRequest($invoice_id, $embed, $model_invoice_update, $contentType);

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
     * Create request for operation 'updateInvoiceById'
     *
     * @param  int $invoice_id ID of invoice to return (required)
     * @param  string[]|null $embed (optional)
     * @param  \Itsmind\Sevdesk\Model\ModelInvoiceUpdate|null $model_invoice_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateInvoiceById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateInvoiceByIdRequest($invoice_id, $embed = null, $model_invoice_update = null, string $contentType = self::contentTypes['updateInvoiceById'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling updateInvoiceById'
            );
        }




        $resourcePath = '/Invoice/{invoiceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $embed,
            'embed', // param base name
            'array', // openApiType
            'form', // style
            false, // explode
            false // required
        ) ?? []);


        // path params
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoiceId' . '}',
                ObjectSerializer::toPathValue($invoice_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($model_invoice_update)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($model_invoice_update));
            } else {
                $httpBody = $model_invoice_update;
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
