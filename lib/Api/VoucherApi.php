<?php
/**
 * VoucherApi
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
 * VoucherApi Class Doc Comment
 *
 * @category Class
 * @package  Itsmind\Sevdesk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VoucherApi
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
        'bookVoucher' => [
            'application/json',
        ],
        'forAccountNumber' => [
            'application/json',
        ],
        'forAllAccounts' => [
            'application/json',
        ],
        'forExpense' => [
            'application/json',
        ],
        'forRevenue' => [
            'application/json',
        ],
        'forTaxRule' => [
            'application/json',
        ],
        'getVoucherById' => [
            'application/json',
        ],
        'getVouchers' => [
            'application/json',
        ],
        'updateVoucher' => [
            'application/json',
        ],
        'voucherEnshrine' => [
            'application/json',
        ],
        'voucherFactorySaveVoucher' => [
            'application/json',
        ],
        'voucherResetToDraft' => [
            'application/json',
        ],
        'voucherResetToOpen' => [
            'application/json',
        ],
        'voucherUploadFile' => [
            'form-data',
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
     * Operation bookVoucher
     *
     * Book a voucher
     *
     * @param  int $voucher_id ID of voucher to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookVoucherRequest|null $book_voucher_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookVoucher'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\BookVoucher200Response
     */
    public function bookVoucher($voucher_id, $book_voucher_request = null, string $contentType = self::contentTypes['bookVoucher'][0])
    {
        list($response) = $this->bookVoucherWithHttpInfo($voucher_id, $book_voucher_request, $contentType);
        return $response;
    }

    /**
     * Operation bookVoucherWithHttpInfo
     *
     * Book a voucher
     *
     * @param  int $voucher_id ID of voucher to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookVoucherRequest|null $book_voucher_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookVoucher'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\BookVoucher200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function bookVoucherWithHttpInfo($voucher_id, $book_voucher_request = null, string $contentType = self::contentTypes['bookVoucher'][0])
    {
        $request = $this->bookVoucherRequest($voucher_id, $book_voucher_request, $contentType);

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
                    if ('\Itsmind\Sevdesk\Model\BookVoucher200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\BookVoucher200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\BookVoucher200Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\BookVoucher200Response';
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
                        '\Itsmind\Sevdesk\Model\BookVoucher200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation bookVoucherAsync
     *
     * Book a voucher
     *
     * @param  int $voucher_id ID of voucher to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookVoucherRequest|null $book_voucher_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bookVoucherAsync($voucher_id, $book_voucher_request = null, string $contentType = self::contentTypes['bookVoucher'][0])
    {
        return $this->bookVoucherAsyncWithHttpInfo($voucher_id, $book_voucher_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bookVoucherAsyncWithHttpInfo
     *
     * Book a voucher
     *
     * @param  int $voucher_id ID of voucher to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookVoucherRequest|null $book_voucher_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bookVoucherAsyncWithHttpInfo($voucher_id, $book_voucher_request = null, string $contentType = self::contentTypes['bookVoucher'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\BookVoucher200Response';
        $request = $this->bookVoucherRequest($voucher_id, $book_voucher_request, $contentType);

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
     * Create request for operation 'bookVoucher'
     *
     * @param  int $voucher_id ID of voucher to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookVoucherRequest|null $book_voucher_request Booking data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bookVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bookVoucherRequest($voucher_id, $book_voucher_request = null, string $contentType = self::contentTypes['bookVoucher'][0])
    {

        // verify the required parameter 'voucher_id' is set
        if ($voucher_id === null || (is_array($voucher_id) && count($voucher_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $voucher_id when calling bookVoucher'
            );
        }



        $resourcePath = '/Voucher/{voucherId}/bookAmount';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($voucher_id !== null) {
            $resourcePath = str_replace(
                '{' . 'voucherId' . '}',
                ObjectSerializer::toPathValue($voucher_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($book_voucher_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($book_voucher_request));
            } else {
                $httpBody = $book_voucher_request;
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
     * Operation forAccountNumber
     *
     * Get guidance by account number
     *
     * @param  int $account_number The datev account number you want to get additional information of (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forAccountNumber'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\ForAllAccounts200Response
     */
    public function forAccountNumber($account_number, string $contentType = self::contentTypes['forAccountNumber'][0])
    {
        list($response) = $this->forAccountNumberWithHttpInfo($account_number, $contentType);
        return $response;
    }

    /**
     * Operation forAccountNumberWithHttpInfo
     *
     * Get guidance by account number
     *
     * @param  int $account_number The datev account number you want to get additional information of (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forAccountNumber'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\ForAllAccounts200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function forAccountNumberWithHttpInfo($account_number, string $contentType = self::contentTypes['forAccountNumber'][0])
    {
        $request = $this->forAccountNumberRequest($account_number, $contentType);

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
                    if ('\Itsmind\Sevdesk\Model\ForAllAccounts200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ForAllAccounts200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ForAllAccounts200Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\ForAllAccounts200Response';
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
                        '\Itsmind\Sevdesk\Model\ForAllAccounts200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation forAccountNumberAsync
     *
     * Get guidance by account number
     *
     * @param  int $account_number The datev account number you want to get additional information of (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forAccountNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forAccountNumberAsync($account_number, string $contentType = self::contentTypes['forAccountNumber'][0])
    {
        return $this->forAccountNumberAsyncWithHttpInfo($account_number, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation forAccountNumberAsyncWithHttpInfo
     *
     * Get guidance by account number
     *
     * @param  int $account_number The datev account number you want to get additional information of (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forAccountNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forAccountNumberAsyncWithHttpInfo($account_number, string $contentType = self::contentTypes['forAccountNumber'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\ForAllAccounts200Response';
        $request = $this->forAccountNumberRequest($account_number, $contentType);

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
     * Create request for operation 'forAccountNumber'
     *
     * @param  int $account_number The datev account number you want to get additional information of (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forAccountNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function forAccountNumberRequest($account_number, string $contentType = self::contentTypes['forAccountNumber'][0])
    {

        // verify the required parameter 'account_number' is set
        if ($account_number === null || (is_array($account_number) && count($account_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account_number when calling forAccountNumber'
            );
        }


        $resourcePath = '/ReceiptGuidance/forAccountNumber';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $account_number,
            'accountNumber', // param base name
            'integer', // openApiType
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
     * Operation forAllAccounts
     *
     * Get all account guides
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forAllAccounts'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\ForAllAccounts200Response
     */
    public function forAllAccounts(string $contentType = self::contentTypes['forAllAccounts'][0])
    {
        list($response) = $this->forAllAccountsWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation forAllAccountsWithHttpInfo
     *
     * Get all account guides
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forAllAccounts'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\ForAllAccounts200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function forAllAccountsWithHttpInfo(string $contentType = self::contentTypes['forAllAccounts'][0])
    {
        $request = $this->forAllAccountsRequest($contentType);

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
                    if ('\Itsmind\Sevdesk\Model\ForAllAccounts200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ForAllAccounts200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ForAllAccounts200Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\ForAllAccounts200Response';
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
                        '\Itsmind\Sevdesk\Model\ForAllAccounts200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation forAllAccountsAsync
     *
     * Get all account guides
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forAllAccounts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forAllAccountsAsync(string $contentType = self::contentTypes['forAllAccounts'][0])
    {
        return $this->forAllAccountsAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation forAllAccountsAsyncWithHttpInfo
     *
     * Get all account guides
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forAllAccounts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forAllAccountsAsyncWithHttpInfo(string $contentType = self::contentTypes['forAllAccounts'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\ForAllAccounts200Response';
        $request = $this->forAllAccountsRequest($contentType);

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
     * Create request for operation 'forAllAccounts'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forAllAccounts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function forAllAccountsRequest(string $contentType = self::contentTypes['forAllAccounts'][0])
    {


        $resourcePath = '/ReceiptGuidance/forAllAccounts';
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
     * Operation forExpense
     *
     * Get guidance for expense accounts
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forExpense'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\ForAllAccounts200Response
     */
    public function forExpense(string $contentType = self::contentTypes['forExpense'][0])
    {
        list($response) = $this->forExpenseWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation forExpenseWithHttpInfo
     *
     * Get guidance for expense accounts
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forExpense'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\ForAllAccounts200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function forExpenseWithHttpInfo(string $contentType = self::contentTypes['forExpense'][0])
    {
        $request = $this->forExpenseRequest($contentType);

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
                    if ('\Itsmind\Sevdesk\Model\ForAllAccounts200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ForAllAccounts200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ForAllAccounts200Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\ForAllAccounts200Response';
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
                        '\Itsmind\Sevdesk\Model\ForAllAccounts200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation forExpenseAsync
     *
     * Get guidance for expense accounts
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forExpense'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forExpenseAsync(string $contentType = self::contentTypes['forExpense'][0])
    {
        return $this->forExpenseAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation forExpenseAsyncWithHttpInfo
     *
     * Get guidance for expense accounts
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forExpense'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forExpenseAsyncWithHttpInfo(string $contentType = self::contentTypes['forExpense'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\ForAllAccounts200Response';
        $request = $this->forExpenseRequest($contentType);

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
     * Create request for operation 'forExpense'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forExpense'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function forExpenseRequest(string $contentType = self::contentTypes['forExpense'][0])
    {


        $resourcePath = '/ReceiptGuidance/forExpense';
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
     * Operation forRevenue
     *
     * Get guidance for revenue accounts
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forRevenue'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\ForAllAccounts200Response
     */
    public function forRevenue(string $contentType = self::contentTypes['forRevenue'][0])
    {
        list($response) = $this->forRevenueWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation forRevenueWithHttpInfo
     *
     * Get guidance for revenue accounts
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forRevenue'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\ForAllAccounts200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function forRevenueWithHttpInfo(string $contentType = self::contentTypes['forRevenue'][0])
    {
        $request = $this->forRevenueRequest($contentType);

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
                    if ('\Itsmind\Sevdesk\Model\ForAllAccounts200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ForAllAccounts200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ForAllAccounts200Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\ForAllAccounts200Response';
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
                        '\Itsmind\Sevdesk\Model\ForAllAccounts200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation forRevenueAsync
     *
     * Get guidance for revenue accounts
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forRevenue'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forRevenueAsync(string $contentType = self::contentTypes['forRevenue'][0])
    {
        return $this->forRevenueAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation forRevenueAsyncWithHttpInfo
     *
     * Get guidance for revenue accounts
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forRevenue'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forRevenueAsyncWithHttpInfo(string $contentType = self::contentTypes['forRevenue'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\ForAllAccounts200Response';
        $request = $this->forRevenueRequest($contentType);

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
     * Create request for operation 'forRevenue'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forRevenue'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function forRevenueRequest(string $contentType = self::contentTypes['forRevenue'][0])
    {


        $resourcePath = '/ReceiptGuidance/forRevenue';
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
     * Operation forTaxRule
     *
     * Get guidance by Tax Rule
     *
     * @param  string $tax_rule The code of the tax rule you want to get guidance for. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forTaxRule'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\ForAllAccounts200Response
     */
    public function forTaxRule($tax_rule, string $contentType = self::contentTypes['forTaxRule'][0])
    {
        list($response) = $this->forTaxRuleWithHttpInfo($tax_rule, $contentType);
        return $response;
    }

    /**
     * Operation forTaxRuleWithHttpInfo
     *
     * Get guidance by Tax Rule
     *
     * @param  string $tax_rule The code of the tax rule you want to get guidance for. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forTaxRule'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\ForAllAccounts200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function forTaxRuleWithHttpInfo($tax_rule, string $contentType = self::contentTypes['forTaxRule'][0])
    {
        $request = $this->forTaxRuleRequest($tax_rule, $contentType);

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
                    if ('\Itsmind\Sevdesk\Model\ForAllAccounts200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ForAllAccounts200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ForAllAccounts200Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\ForAllAccounts200Response';
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
                        '\Itsmind\Sevdesk\Model\ForAllAccounts200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation forTaxRuleAsync
     *
     * Get guidance by Tax Rule
     *
     * @param  string $tax_rule The code of the tax rule you want to get guidance for. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forTaxRule'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forTaxRuleAsync($tax_rule, string $contentType = self::contentTypes['forTaxRule'][0])
    {
        return $this->forTaxRuleAsyncWithHttpInfo($tax_rule, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation forTaxRuleAsyncWithHttpInfo
     *
     * Get guidance by Tax Rule
     *
     * @param  string $tax_rule The code of the tax rule you want to get guidance for. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forTaxRule'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function forTaxRuleAsyncWithHttpInfo($tax_rule, string $contentType = self::contentTypes['forTaxRule'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\ForAllAccounts200Response';
        $request = $this->forTaxRuleRequest($tax_rule, $contentType);

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
     * Create request for operation 'forTaxRule'
     *
     * @param  string $tax_rule The code of the tax rule you want to get guidance for. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['forTaxRule'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function forTaxRuleRequest($tax_rule, string $contentType = self::contentTypes['forTaxRule'][0])
    {

        // verify the required parameter 'tax_rule' is set
        if ($tax_rule === null || (is_array($tax_rule) && count($tax_rule) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tax_rule when calling forTaxRule'
            );
        }


        $resourcePath = '/ReceiptGuidance/forTaxRule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $tax_rule,
            'taxRule', // param base name
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
     * Operation getVoucherById
     *
     * Find voucher by ID
     *
     * @param  int $voucher_id ID of voucher to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVoucherById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\GetVoucherById200Response
     */
    public function getVoucherById($voucher_id, string $contentType = self::contentTypes['getVoucherById'][0])
    {
        list($response) = $this->getVoucherByIdWithHttpInfo($voucher_id, $contentType);
        return $response;
    }

    /**
     * Operation getVoucherByIdWithHttpInfo
     *
     * Find voucher by ID
     *
     * @param  int $voucher_id ID of voucher to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVoucherById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\GetVoucherById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVoucherByIdWithHttpInfo($voucher_id, string $contentType = self::contentTypes['getVoucherById'][0])
    {
        $request = $this->getVoucherByIdRequest($voucher_id, $contentType);

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
                    if ('\Itsmind\Sevdesk\Model\GetVoucherById200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\GetVoucherById200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\GetVoucherById200Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\GetVoucherById200Response';
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
                        '\Itsmind\Sevdesk\Model\GetVoucherById200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getVoucherByIdAsync
     *
     * Find voucher by ID
     *
     * @param  int $voucher_id ID of voucher to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVoucherById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVoucherByIdAsync($voucher_id, string $contentType = self::contentTypes['getVoucherById'][0])
    {
        return $this->getVoucherByIdAsyncWithHttpInfo($voucher_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVoucherByIdAsyncWithHttpInfo
     *
     * Find voucher by ID
     *
     * @param  int $voucher_id ID of voucher to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVoucherById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVoucherByIdAsyncWithHttpInfo($voucher_id, string $contentType = self::contentTypes['getVoucherById'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\GetVoucherById200Response';
        $request = $this->getVoucherByIdRequest($voucher_id, $contentType);

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
     * Create request for operation 'getVoucherById'
     *
     * @param  int $voucher_id ID of voucher to return (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVoucherById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getVoucherByIdRequest($voucher_id, string $contentType = self::contentTypes['getVoucherById'][0])
    {

        // verify the required parameter 'voucher_id' is set
        if ($voucher_id === null || (is_array($voucher_id) && count($voucher_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $voucher_id when calling getVoucherById'
            );
        }


        $resourcePath = '/Voucher/{voucherId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($voucher_id !== null) {
            $resourcePath = str_replace(
                '{' . 'voucherId' . '}',
                ObjectSerializer::toPathValue($voucher_id),
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
     * Operation getVouchers
     *
     * Retrieve vouchers
     *
     * @param  float|null $status Status of the vouchers to retrieve. (optional)
     * @param  string|null $credit_debit Define if you only want credit or debit vouchers. (optional)
     * @param  string|null $description_like Retrieve all vouchers with a description like this. (optional)
     * @param  int|null $start_date Retrieve all vouchers with a date equal or higher (optional)
     * @param  int|null $end_date Retrieve all vouchers with a date equal or lower (optional)
     * @param  int|null $contact_id Retrieve all vouchers with this contact. Must be provided with contact[objectName] (optional)
     * @param  string|null $contact_object_name Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. (optional)
     * @param  bool|null $count_all If all objects should be counted (optional)
     * @param  int|null $offset Which offset to start with (optional)
     * @param  int|null $limit The max number of objects to return (optional)
     * @param  string[]|null $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVouchers'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\GetVouchers200Response
     */
    public function getVouchers($status = null, $credit_debit = null, $description_like = null, $start_date = null, $end_date = null, $contact_id = null, $contact_object_name = null, $count_all = null, $offset = null, $limit = null, $embed = null, string $contentType = self::contentTypes['getVouchers'][0])
    {
        list($response) = $this->getVouchersWithHttpInfo($status, $credit_debit, $description_like, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed, $contentType);
        return $response;
    }

    /**
     * Operation getVouchersWithHttpInfo
     *
     * Retrieve vouchers
     *
     * @param  float|null $status Status of the vouchers to retrieve. (optional)
     * @param  string|null $credit_debit Define if you only want credit or debit vouchers. (optional)
     * @param  string|null $description_like Retrieve all vouchers with a description like this. (optional)
     * @param  int|null $start_date Retrieve all vouchers with a date equal or higher (optional)
     * @param  int|null $end_date Retrieve all vouchers with a date equal or lower (optional)
     * @param  int|null $contact_id Retrieve all vouchers with this contact. Must be provided with contact[objectName] (optional)
     * @param  string|null $contact_object_name Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. (optional)
     * @param  bool|null $count_all If all objects should be counted (optional)
     * @param  int|null $offset Which offset to start with (optional)
     * @param  int|null $limit The max number of objects to return (optional)
     * @param  string[]|null $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVouchers'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\GetVouchers200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVouchersWithHttpInfo($status = null, $credit_debit = null, $description_like = null, $start_date = null, $end_date = null, $contact_id = null, $contact_object_name = null, $count_all = null, $offset = null, $limit = null, $embed = null, string $contentType = self::contentTypes['getVouchers'][0])
    {
        $request = $this->getVouchersRequest($status, $credit_debit, $description_like, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed, $contentType);

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
                    if ('\Itsmind\Sevdesk\Model\GetVouchers200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\GetVouchers200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\GetVouchers200Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\GetVouchers200Response';
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
                        '\Itsmind\Sevdesk\Model\GetVouchers200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getVouchersAsync
     *
     * Retrieve vouchers
     *
     * @param  float|null $status Status of the vouchers to retrieve. (optional)
     * @param  string|null $credit_debit Define if you only want credit or debit vouchers. (optional)
     * @param  string|null $description_like Retrieve all vouchers with a description like this. (optional)
     * @param  int|null $start_date Retrieve all vouchers with a date equal or higher (optional)
     * @param  int|null $end_date Retrieve all vouchers with a date equal or lower (optional)
     * @param  int|null $contact_id Retrieve all vouchers with this contact. Must be provided with contact[objectName] (optional)
     * @param  string|null $contact_object_name Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. (optional)
     * @param  bool|null $count_all If all objects should be counted (optional)
     * @param  int|null $offset Which offset to start with (optional)
     * @param  int|null $limit The max number of objects to return (optional)
     * @param  string[]|null $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVouchers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVouchersAsync($status = null, $credit_debit = null, $description_like = null, $start_date = null, $end_date = null, $contact_id = null, $contact_object_name = null, $count_all = null, $offset = null, $limit = null, $embed = null, string $contentType = self::contentTypes['getVouchers'][0])
    {
        return $this->getVouchersAsyncWithHttpInfo($status, $credit_debit, $description_like, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVouchersAsyncWithHttpInfo
     *
     * Retrieve vouchers
     *
     * @param  float|null $status Status of the vouchers to retrieve. (optional)
     * @param  string|null $credit_debit Define if you only want credit or debit vouchers. (optional)
     * @param  string|null $description_like Retrieve all vouchers with a description like this. (optional)
     * @param  int|null $start_date Retrieve all vouchers with a date equal or higher (optional)
     * @param  int|null $end_date Retrieve all vouchers with a date equal or lower (optional)
     * @param  int|null $contact_id Retrieve all vouchers with this contact. Must be provided with contact[objectName] (optional)
     * @param  string|null $contact_object_name Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. (optional)
     * @param  bool|null $count_all If all objects should be counted (optional)
     * @param  int|null $offset Which offset to start with (optional)
     * @param  int|null $limit The max number of objects to return (optional)
     * @param  string[]|null $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVouchers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVouchersAsyncWithHttpInfo($status = null, $credit_debit = null, $description_like = null, $start_date = null, $end_date = null, $contact_id = null, $contact_object_name = null, $count_all = null, $offset = null, $limit = null, $embed = null, string $contentType = self::contentTypes['getVouchers'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\GetVouchers200Response';
        $request = $this->getVouchersRequest($status, $credit_debit, $description_like, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed, $contentType);

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
     * Create request for operation 'getVouchers'
     *
     * @param  float|null $status Status of the vouchers to retrieve. (optional)
     * @param  string|null $credit_debit Define if you only want credit or debit vouchers. (optional)
     * @param  string|null $description_like Retrieve all vouchers with a description like this. (optional)
     * @param  int|null $start_date Retrieve all vouchers with a date equal or higher (optional)
     * @param  int|null $end_date Retrieve all vouchers with a date equal or lower (optional)
     * @param  int|null $contact_id Retrieve all vouchers with this contact. Must be provided with contact[objectName] (optional)
     * @param  string|null $contact_object_name Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. (optional)
     * @param  bool|null $count_all If all objects should be counted (optional)
     * @param  int|null $offset Which offset to start with (optional)
     * @param  int|null $limit The max number of objects to return (optional)
     * @param  string[]|null $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVouchers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getVouchersRequest($status = null, $credit_debit = null, $description_like = null, $start_date = null, $end_date = null, $contact_id = null, $contact_object_name = null, $count_all = null, $offset = null, $limit = null, $embed = null, string $contentType = self::contentTypes['getVouchers'][0])
    {













        $resourcePath = '/Voucher';
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
            $credit_debit,
            'creditDebit', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $description_like,
            'descriptionLike', // param base name
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
     * Operation updateVoucher
     *
     * Update an existing voucher
     *
     * @param  int $voucher_id ID of voucher to update (required)
     * @param  \Itsmind\Sevdesk\Model\ModelVoucherUpdate|null $model_voucher_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateVoucher'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\UpdateVoucher200Response
     */
    public function updateVoucher($voucher_id, $model_voucher_update = null, string $contentType = self::contentTypes['updateVoucher'][0])
    {
        list($response) = $this->updateVoucherWithHttpInfo($voucher_id, $model_voucher_update, $contentType);
        return $response;
    }

    /**
     * Operation updateVoucherWithHttpInfo
     *
     * Update an existing voucher
     *
     * @param  int $voucher_id ID of voucher to update (required)
     * @param  \Itsmind\Sevdesk\Model\ModelVoucherUpdate|null $model_voucher_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateVoucher'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\UpdateVoucher200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateVoucherWithHttpInfo($voucher_id, $model_voucher_update = null, string $contentType = self::contentTypes['updateVoucher'][0])
    {
        $request = $this->updateVoucherRequest($voucher_id, $model_voucher_update, $contentType);

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
                    if ('\Itsmind\Sevdesk\Model\UpdateVoucher200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\UpdateVoucher200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\UpdateVoucher200Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\UpdateVoucher200Response';
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
                        '\Itsmind\Sevdesk\Model\UpdateVoucher200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateVoucherAsync
     *
     * Update an existing voucher
     *
     * @param  int $voucher_id ID of voucher to update (required)
     * @param  \Itsmind\Sevdesk\Model\ModelVoucherUpdate|null $model_voucher_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateVoucherAsync($voucher_id, $model_voucher_update = null, string $contentType = self::contentTypes['updateVoucher'][0])
    {
        return $this->updateVoucherAsyncWithHttpInfo($voucher_id, $model_voucher_update, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateVoucherAsyncWithHttpInfo
     *
     * Update an existing voucher
     *
     * @param  int $voucher_id ID of voucher to update (required)
     * @param  \Itsmind\Sevdesk\Model\ModelVoucherUpdate|null $model_voucher_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateVoucherAsyncWithHttpInfo($voucher_id, $model_voucher_update = null, string $contentType = self::contentTypes['updateVoucher'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\UpdateVoucher200Response';
        $request = $this->updateVoucherRequest($voucher_id, $model_voucher_update, $contentType);

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
     * Create request for operation 'updateVoucher'
     *
     * @param  int $voucher_id ID of voucher to update (required)
     * @param  \Itsmind\Sevdesk\Model\ModelVoucherUpdate|null $model_voucher_update Update data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateVoucherRequest($voucher_id, $model_voucher_update = null, string $contentType = self::contentTypes['updateVoucher'][0])
    {

        // verify the required parameter 'voucher_id' is set
        if ($voucher_id === null || (is_array($voucher_id) && count($voucher_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $voucher_id when calling updateVoucher'
            );
        }



        $resourcePath = '/Voucher/{voucherId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($voucher_id !== null) {
            $resourcePath = str_replace(
                '{' . 'voucherId' . '}',
                ObjectSerializer::toPathValue($voucher_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($model_voucher_update)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($model_voucher_update));
            } else {
                $httpBody = $model_voucher_update;
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
     * Operation voucherEnshrine
     *
     * Enshrine
     *
     * @param  int $voucher_id ID of the voucher to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherEnshrine'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response|\Itsmind\Sevdesk\Model\ValidationError
     */
    public function voucherEnshrine($voucher_id, string $contentType = self::contentTypes['voucherEnshrine'][0])
    {
        list($response) = $this->voucherEnshrineWithHttpInfo($voucher_id, $contentType);
        return $response;
    }

    /**
     * Operation voucherEnshrineWithHttpInfo
     *
     * Enshrine
     *
     * @param  int $voucher_id ID of the voucher to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherEnshrine'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response|\Itsmind\Sevdesk\Model\ValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function voucherEnshrineWithHttpInfo($voucher_id, string $contentType = self::contentTypes['voucherEnshrine'][0])
    {
        $request = $this->voucherEnshrineRequest($voucher_id, $contentType);

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
     * Operation voucherEnshrineAsync
     *
     * Enshrine
     *
     * @param  int $voucher_id ID of the voucher to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherEnshrine'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherEnshrineAsync($voucher_id, string $contentType = self::contentTypes['voucherEnshrine'][0])
    {
        return $this->voucherEnshrineAsyncWithHttpInfo($voucher_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation voucherEnshrineAsyncWithHttpInfo
     *
     * Enshrine
     *
     * @param  int $voucher_id ID of the voucher to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherEnshrine'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherEnshrineAsyncWithHttpInfo($voucher_id, string $contentType = self::contentTypes['voucherEnshrine'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response';
        $request = $this->voucherEnshrineRequest($voucher_id, $contentType);

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
     * Create request for operation 'voucherEnshrine'
     *
     * @param  int $voucher_id ID of the voucher to enshrine (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherEnshrine'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function voucherEnshrineRequest($voucher_id, string $contentType = self::contentTypes['voucherEnshrine'][0])
    {

        // verify the required parameter 'voucher_id' is set
        if ($voucher_id === null || (is_array($voucher_id) && count($voucher_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $voucher_id when calling voucherEnshrine'
            );
        }


        $resourcePath = '/Voucher/{voucherId}/enshrine';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($voucher_id !== null) {
            $resourcePath = str_replace(
                '{' . 'voucherId' . '}',
                ObjectSerializer::toPathValue($voucher_id),
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
     * Operation voucherFactorySaveVoucher
     *
     * Create a new voucher
     *
     * @param  \Itsmind\Sevdesk\Model\SaveVoucher|null $save_voucher Creation data. Please be aware, that you need to provide at least all required parameters of the voucher and voucher position model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherFactorySaveVoucher'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\VoucherFactorySaveVoucher201Response|\Itsmind\Sevdesk\Model\ValidationError
     */
    public function voucherFactorySaveVoucher($save_voucher = null, string $contentType = self::contentTypes['voucherFactorySaveVoucher'][0])
    {
        list($response) = $this->voucherFactorySaveVoucherWithHttpInfo($save_voucher, $contentType);
        return $response;
    }

    /**
     * Operation voucherFactorySaveVoucherWithHttpInfo
     *
     * Create a new voucher
     *
     * @param  \Itsmind\Sevdesk\Model\SaveVoucher|null $save_voucher Creation data. Please be aware, that you need to provide at least all required parameters of the voucher and voucher position model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherFactorySaveVoucher'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\VoucherFactorySaveVoucher201Response|\Itsmind\Sevdesk\Model\ValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function voucherFactorySaveVoucherWithHttpInfo($save_voucher = null, string $contentType = self::contentTypes['voucherFactorySaveVoucher'][0])
    {
        $request = $this->voucherFactorySaveVoucherRequest($save_voucher, $contentType);

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
                    if ('\Itsmind\Sevdesk\Model\VoucherFactorySaveVoucher201Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\VoucherFactorySaveVoucher201Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\VoucherFactorySaveVoucher201Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\VoucherFactorySaveVoucher201Response';
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
                        '\Itsmind\Sevdesk\Model\VoucherFactorySaveVoucher201Response',
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
     * Operation voucherFactorySaveVoucherAsync
     *
     * Create a new voucher
     *
     * @param  \Itsmind\Sevdesk\Model\SaveVoucher|null $save_voucher Creation data. Please be aware, that you need to provide at least all required parameters of the voucher and voucher position model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherFactorySaveVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherFactorySaveVoucherAsync($save_voucher = null, string $contentType = self::contentTypes['voucherFactorySaveVoucher'][0])
    {
        return $this->voucherFactorySaveVoucherAsyncWithHttpInfo($save_voucher, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation voucherFactorySaveVoucherAsyncWithHttpInfo
     *
     * Create a new voucher
     *
     * @param  \Itsmind\Sevdesk\Model\SaveVoucher|null $save_voucher Creation data. Please be aware, that you need to provide at least all required parameters of the voucher and voucher position model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherFactorySaveVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherFactorySaveVoucherAsyncWithHttpInfo($save_voucher = null, string $contentType = self::contentTypes['voucherFactorySaveVoucher'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\VoucherFactorySaveVoucher201Response';
        $request = $this->voucherFactorySaveVoucherRequest($save_voucher, $contentType);

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
     * Create request for operation 'voucherFactorySaveVoucher'
     *
     * @param  \Itsmind\Sevdesk\Model\SaveVoucher|null $save_voucher Creation data. Please be aware, that you need to provide at least all required parameters of the voucher and voucher position model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherFactorySaveVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function voucherFactorySaveVoucherRequest($save_voucher = null, string $contentType = self::contentTypes['voucherFactorySaveVoucher'][0])
    {



        $resourcePath = '/Voucher/Factory/saveVoucher';
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
        if (isset($save_voucher)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($save_voucher));
            } else {
                $httpBody = $save_voucher;
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
     * Operation voucherResetToDraft
     *
     * Reset status to draft
     *
     * @param  int $voucher_id ID of the voucher to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherResetToDraft'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\VoucherResetToOpen200Response|\Itsmind\Sevdesk\Model\ValidationError
     */
    public function voucherResetToDraft($voucher_id, string $contentType = self::contentTypes['voucherResetToDraft'][0])
    {
        list($response) = $this->voucherResetToDraftWithHttpInfo($voucher_id, $contentType);
        return $response;
    }

    /**
     * Operation voucherResetToDraftWithHttpInfo
     *
     * Reset status to draft
     *
     * @param  int $voucher_id ID of the voucher to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherResetToDraft'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\VoucherResetToOpen200Response|\Itsmind\Sevdesk\Model\ValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function voucherResetToDraftWithHttpInfo($voucher_id, string $contentType = self::contentTypes['voucherResetToDraft'][0])
    {
        $request = $this->voucherResetToDraftRequest($voucher_id, $contentType);

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
                    if ('\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response';
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
                        '\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response',
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
     * Operation voucherResetToDraftAsync
     *
     * Reset status to draft
     *
     * @param  int $voucher_id ID of the voucher to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherResetToDraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherResetToDraftAsync($voucher_id, string $contentType = self::contentTypes['voucherResetToDraft'][0])
    {
        return $this->voucherResetToDraftAsyncWithHttpInfo($voucher_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation voucherResetToDraftAsyncWithHttpInfo
     *
     * Reset status to draft
     *
     * @param  int $voucher_id ID of the voucher to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherResetToDraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherResetToDraftAsyncWithHttpInfo($voucher_id, string $contentType = self::contentTypes['voucherResetToDraft'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response';
        $request = $this->voucherResetToDraftRequest($voucher_id, $contentType);

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
     * Create request for operation 'voucherResetToDraft'
     *
     * @param  int $voucher_id ID of the voucher to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherResetToDraft'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function voucherResetToDraftRequest($voucher_id, string $contentType = self::contentTypes['voucherResetToDraft'][0])
    {

        // verify the required parameter 'voucher_id' is set
        if ($voucher_id === null || (is_array($voucher_id) && count($voucher_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $voucher_id when calling voucherResetToDraft'
            );
        }


        $resourcePath = '/Voucher/{voucherId}/resetToDraft';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($voucher_id !== null) {
            $resourcePath = str_replace(
                '{' . 'voucherId' . '}',
                ObjectSerializer::toPathValue($voucher_id),
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
     * Operation voucherResetToOpen
     *
     * Reset status to open
     *
     * @param  int $voucher_id ID of the voucher to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherResetToOpen'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\VoucherResetToOpen200Response|\Itsmind\Sevdesk\Model\ValidationError
     */
    public function voucherResetToOpen($voucher_id, string $contentType = self::contentTypes['voucherResetToOpen'][0])
    {
        list($response) = $this->voucherResetToOpenWithHttpInfo($voucher_id, $contentType);
        return $response;
    }

    /**
     * Operation voucherResetToOpenWithHttpInfo
     *
     * Reset status to open
     *
     * @param  int $voucher_id ID of the voucher to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherResetToOpen'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\VoucherResetToOpen200Response|\Itsmind\Sevdesk\Model\ValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function voucherResetToOpenWithHttpInfo($voucher_id, string $contentType = self::contentTypes['voucherResetToOpen'][0])
    {
        $request = $this->voucherResetToOpenRequest($voucher_id, $contentType);

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
                    if ('\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response';
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
                        '\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response',
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
     * Operation voucherResetToOpenAsync
     *
     * Reset status to open
     *
     * @param  int $voucher_id ID of the voucher to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherResetToOpen'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherResetToOpenAsync($voucher_id, string $contentType = self::contentTypes['voucherResetToOpen'][0])
    {
        return $this->voucherResetToOpenAsyncWithHttpInfo($voucher_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation voucherResetToOpenAsyncWithHttpInfo
     *
     * Reset status to open
     *
     * @param  int $voucher_id ID of the voucher to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherResetToOpen'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherResetToOpenAsyncWithHttpInfo($voucher_id, string $contentType = self::contentTypes['voucherResetToOpen'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response';
        $request = $this->voucherResetToOpenRequest($voucher_id, $contentType);

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
     * Create request for operation 'voucherResetToOpen'
     *
     * @param  int $voucher_id ID of the voucher to reset (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherResetToOpen'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function voucherResetToOpenRequest($voucher_id, string $contentType = self::contentTypes['voucherResetToOpen'][0])
    {

        // verify the required parameter 'voucher_id' is set
        if ($voucher_id === null || (is_array($voucher_id) && count($voucher_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $voucher_id when calling voucherResetToOpen'
            );
        }


        $resourcePath = '/Voucher/{voucherId}/resetToOpen';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($voucher_id !== null) {
            $resourcePath = str_replace(
                '{' . 'voucherId' . '}',
                ObjectSerializer::toPathValue($voucher_id),
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
     * Operation voucherUploadFile
     *
     * Upload voucher file
     *
     * @param  \Itsmind\Sevdesk\Model\VoucherUploadFileRequest|null $voucher_upload_file_request File to upload (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherUploadFile'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\VoucherUploadFile201Response
     */
    public function voucherUploadFile($voucher_upload_file_request = null, string $contentType = self::contentTypes['voucherUploadFile'][0])
    {
        list($response) = $this->voucherUploadFileWithHttpInfo($voucher_upload_file_request, $contentType);
        return $response;
    }

    /**
     * Operation voucherUploadFileWithHttpInfo
     *
     * Upload voucher file
     *
     * @param  \Itsmind\Sevdesk\Model\VoucherUploadFileRequest|null $voucher_upload_file_request File to upload (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherUploadFile'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\VoucherUploadFile201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function voucherUploadFileWithHttpInfo($voucher_upload_file_request = null, string $contentType = self::contentTypes['voucherUploadFile'][0])
    {
        $request = $this->voucherUploadFileRequest($voucher_upload_file_request, $contentType);

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
                    if ('\Itsmind\Sevdesk\Model\VoucherUploadFile201Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\VoucherUploadFile201Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\VoucherUploadFile201Response', []),
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

            $returnType = '\Itsmind\Sevdesk\Model\VoucherUploadFile201Response';
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
                        '\Itsmind\Sevdesk\Model\VoucherUploadFile201Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation voucherUploadFileAsync
     *
     * Upload voucher file
     *
     * @param  \Itsmind\Sevdesk\Model\VoucherUploadFileRequest|null $voucher_upload_file_request File to upload (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherUploadFile'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherUploadFileAsync($voucher_upload_file_request = null, string $contentType = self::contentTypes['voucherUploadFile'][0])
    {
        return $this->voucherUploadFileAsyncWithHttpInfo($voucher_upload_file_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation voucherUploadFileAsyncWithHttpInfo
     *
     * Upload voucher file
     *
     * @param  \Itsmind\Sevdesk\Model\VoucherUploadFileRequest|null $voucher_upload_file_request File to upload (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherUploadFile'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherUploadFileAsyncWithHttpInfo($voucher_upload_file_request = null, string $contentType = self::contentTypes['voucherUploadFile'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\VoucherUploadFile201Response';
        $request = $this->voucherUploadFileRequest($voucher_upload_file_request, $contentType);

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
     * Create request for operation 'voucherUploadFile'
     *
     * @param  \Itsmind\Sevdesk\Model\VoucherUploadFileRequest|null $voucher_upload_file_request File to upload (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['voucherUploadFile'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function voucherUploadFileRequest($voucher_upload_file_request = null, string $contentType = self::contentTypes['voucherUploadFile'][0])
    {



        $resourcePath = '/Voucher/Factory/uploadTempFile';
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
        if (isset($voucher_upload_file_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($voucher_upload_file_request));
            } else {
                $httpBody = $voucher_upload_file_request;
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
