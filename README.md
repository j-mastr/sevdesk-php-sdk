# itsmind/sevdesk-php-sdk

> This unofficial package provides an SDK to access the [sevDesk API](https://api.sevdesk.de/) using PHP. It is auto-generated using the [OpenAPI-Generator](https://openapi-generator.tech), based on the tweaks provided by the [sevdesk-api project](https://github.com/j-mastr/sevdesk-api).
>
> ### Where to get Support
> If you have problems, are missing parameters or receive unexpected responses, please report an issue or a pull request in [the sevdesk-api project.](https://github.com/j-mastr/sevdesk-api)
>
> For support regarding the API, please contact [the sevDesk support directly.](https://landing.sevdesk.de/service-support-center-technik)
>
> This project is exclusively for the SDK and application-related issues.

<b>Contact:</b> To contact our support click  <a href='https://landing.sevdesk.de/service-support-center-technik'>here</a><br><br> 
# General information
Welcome to our API!<br>
sevdesk offers you  the possibility of retrieving data using an interface, namely the sevdesk API, and making  changes without having to use the web UI. The sevdesk interface is a REST-Full API. All sevdesk  data and functions that are used in the web UI can also be controlled through the API.

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
 The sevdesk API uses a token authentication to authorize calls. For this purpose every sevdesk administrator has one API token, which is a <b>hexadecimal string</b>  containing <b>32 characters</b>. The following clip shows where you can find the  API token if this is your first time with our API.<br><br> <video src='openAPI/img/findingTheApiToken.mp4' controls width='640' height='360'> Your browser cannot play this video.<br> This video explains how to find your sevDesk API token. </video> <br> The token will be needed in every request that you want to send and needs to be provided as a value of an <b>Authorization Header</b>.<br> In this case, we used some random API token. The example shows the token in the Authorization Header. <ul> <li>\"Authorization\" :<span style='color:red'>\"b7794de0085f5cd00560f160f290af38\"</span></li> </ul> The api tokens have an infinite lifetime and, in other words, exist as long as the sevdesk user exists.<br> For this reason, the user should <b>NEVER</b> be deleted.<br> If really necessary, it is advisable to save the api token as we will <b>NOT</b> be able to retrieve it afterwards!<br> It is also possible to generate a new API token, for example, if you want to prevent the usage of your sevdesk account by other people who got your current API token.<br> To achieve this, you just need to click on the \"generate new\" symbol to the right of your token and confirm it with your password. 
# API News
 To never miss API news and updates again, subscribe to our <b>free API newsletter</b> and get all relevant  information to keep your sevdesk software running smoothly. To subscribe, simply click <a href = 'https://landing.sevdesk.de/api-newsletter'><b>here</b></a> and confirm the email address to which we may send all updates relevant to you. 
# API Requests
 In our case, REST API requests need to be build by combining the following components. <table> <tr> <th><b>Component</b></th> <th><b>Description</b></th> </tr> <tr> <td>HTTP-Methods</td> <td> <ul> <li>GET (retrieve a resource)</li> <li>POST (create a resource)</li> <li>PUT (update a resource)</li> <li>DELETE (delete a resource)</li> </ul> </td> </tr> <tr> <td>URL of the API</td> <td><span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span></td> </tr> <tr> <td>URI of the resource</td> <td>The resource to query.<br>For example contacts in sevdesk:<br><br> <span style='color:red'>/Contact</span><br><br> Which will result in the following complete URL:<br><br> <span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span> </td> </tr> <tr> <td>Query parameters</td> <td>Are attached by using the connectives <b>?</b> and <b>&</b> in the URL.<br></td> </tr> <tr> <td>Request headers</td> <td>Typical request headers are for example:<br> <div> <br> <ul> <li>Content-type</li> <li>Authorization</li> <li>Accept-Encoding</li> <li>User-Agent</li> <li>X-Version: Used for resource versioning see information below</li> <li>...</li> </ul> </div> </td> </tr> <tr>  <td>Response headers</td> <td> Typical response headers are for example:<br><br> <div> <ul>  <li>Deprecation: If a resource is deprecated we return true or a timestamp since when</li> <li>...</li> </ul> </div> </td> </tr> <tr> <td>Request body</td> <td>Mostly required in POST and PUT requests.<br> Often the request body contains json, in our case, it also accepts url-encoded data. </td> </tr> </table><br> <span style='color:red'>Note</span>: please pass a meaningful entry at the header \"User-Agent\".  If the \"User-Agent\" is set meaningfully, we can offer better support in case of queries from customers.<br> An example how such a \"User-Agent\" can look like: \"Integration-name by abc\". <br><br> This is a sample request for retrieving existing contacts in sevdesk using curl:<br><br> <img src='https://api.sevdesk.de/openAPI/img/GETRequest.PNG' alt='Get Request' height='150'><br><br> As you can see, the request contains all the components mentioned above.<br> It's HTTP method is GET, it has a correct endpoint  (<span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span>), query parameters and additional <b>header</b> information!<br><br> <b>Query Parameters</b><br><br> As you might have seen in the sample request above, there are several query parameters located in the url.<br> Those are mostly optional but prove to be very useful for a lot of requests as they can limit, extend, sort or filter the data you will get as a response.<br><br> These are the most used query parameter for the sevdesk API. <table> <tr> <th><b>Parameter</b></th> <th><b>Description</b></th> </tr> <tr> <td>embed</td> <td>Will extend some of the returned data.<br> A brief example can be found below.</td> </tr> <tr> <td>countAll</td> <td>\"countAll=true\" returns the number of items</td> </tr> </table> This is an example for the usage of the embed parameter.<br> The following first request will return all company contact entries in sevdesk up to a limit of 100 without any additional information and no offset.<br><br> <img src='https://api.sevdesk.de/openAPI/img/ContactQueryWithoutEmbed.PNG' width='900' height='850'><br><br> Now have a look at the category attribute located in the response.<br> Naturally, it just contains the id and the object name of the object but no further information.<br> We will now use the parameter embed with the value \"category\".<br><br> <img src='https://api.sevdesk.de/openAPI/img/ContactQueryWithEmbed.PNG' width='900' height='850'><br><br> As you can see, the category object is now extended and shows all the attributes and their corresponding values.<br><br> There are lot of other query parameters that can be used to filter the returned data for objects that match a certain pattern, however, those will not be mentioned here and instead can be found at the detail documentation of the most used API endpoints like contact, invoice or voucher.<br><br>
<b>Pagination</b><br> <p>This API implements pagination to help you efficiently manage large result sets. Instead of retrieving all records at once, you can request specific subsets of data using the following parameters.</p> <table> <tr> <th><b>Parameter</b></th> <th><b>Type</b></th> <th><b>Description</b></th> </tr> <tr> <td>limit</td> <td>Integer</td> <td>Limits the number of entries that are returned.<br> Most useful in GET requests which will most likely deliver big sets of data like country or currency lists.<br> The limit must be between 1 and 1000. </td> </tr> <tr> <td>offset</td> <td>Integer</td> <td>Specifies a certain offset for the data that will be returned.<br> As an example, you can specify \"offset=2\" if you want all entries except for the first two.</td> </tr> <tr> <td>countAll</td> <td>Boolean</td> <td>When set to <code>true</code>, the response will include the total count of available records. Defaults to <code>false</code>.</td> </tr> </table> <br> <b>How Pagination Works</b><br>
<ol> <li>The limit parameter determines how many records will be included in each response</li> <li>The offset parameter indicates how many records to skip before beginning to return results</li> <li>When countAll=true is specified, the response will include a total field with the complete count of available records</li> </ol>
<b>Example Usage:</b><br> <b>Basic Request</b><br> <ul><li><code>ht<span>tps://my.sevdesk.de/api/v1/Invoice?limit=10&offset=0<span></code></li></ul> <p>This returns the first 10 resources.</p><br>
<b>Page Navigation</b><br> <ul><li><code>ht<span>tps://my.sevdesk.de/api/v1/Invoice?limit=10&offset=10<span></code></li></ul> <p>This returns resources 11-20 (the second page when using a page size of 10).</p><br>
<b>With Total Count</b><br> <ul><li><code>ht<span>tps://my.sevdesk.de/api/v1/Invoice?limit=10&offset=0&countAll=true<span></code></li></ul> <p>This returns the first 10 resources and includes the total count of available resources in the response.</p>
<b>Response Format</b><br> <pre> <code> {<br> &nbsp;&nbsp;&nbsp;&nbsp;\"total\": \"157\",<br> &nbsp;&nbsp;&nbsp;&nbsp;\"objects\": [<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Array of resource objects<br> &nbsp;&nbsp;&nbsp;&nbsp;]<br> &nbsp;} </code> </pre> <br> <b>Best Practises</b><br> <ul> <li>Keep <code>limit</code> values reasonable (between 10-100) to avoid performance issues</li> <li>Use <code>countAll=true</code> when you need to implement UI pagination controls</li> </ul> <b>Request Headers</b><br><br> The HTTP request (response) headers allow the client as well as the server to pass additional information with the request.<br> They transfer the parameters and arguments which are important for transmitting data over HTTP.<br> Three headers which are useful / necessary when using the sevdesk API are \"Authorization, \"Accept\" and  \"Content-type\".<br> Underneath is a brief description of why and how they should be used.<br><br> <b>Authorization</b><br><br> Should be used to provide your API token in the header. <ul> <li>Authorization:<span style='color:red'>yourApiToken</span></li> </ul> <b>Accept</b><br><br> Specifies the format of the response.<br> Required for operations with a response body. <ul> <li>Accept:application/<span style='color:red'>format</span> </li> </ul> In our case, <code><span style='color:red'>format</span></code> could be replaced with <code>json</code> or <code>xml</code><br><br> <b>Content-type</b><br><br> Specifies which format is used in the request.<br> Is required for operations with a request body. <ul> <li>Content-type:application/<span style='color:red'>format</span></li> </ul> In our case,<code><span style='color:red'>format</span></code>could be replaced with <code>json</code> or <code>x-www-form-urlencoded</code> <br><br><b>API Responses</b><br><br> HTTP status codes<br> When calling the sevdesk API it is very likely that you will get a HTTP status code in the response.<br> Some API calls will also return JSON response bodies which will contain information about the resource.<br> Each status code which is returned will either be a <b>success</b> code or an <b>error</b> code.<br><br> Success codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>200 OK</code></td> <td>The request was successful</td> </tr> <tr> <td><code>201 Created</code></td> <td>Most likely to be found in the response of a <b>POST</b> request.<br> This code indicates that the desired resource was successfully created.</td> </tr> </table> <br>Error codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>400 Bad request</code></td> <td>The request you sent is most likely syntactically incorrect.<br> You should check if the parameters in the request body or the url are correct.</td> </tr> <tr> <td><code>401 Unauthorized</code></td> <td>The authentication failed.<br> Most likely caused by a missing or wrong API token.</td> </tr> <tr> <td><code>403 Forbidden</code></td> <td>You do not have the permission the access the resource which is requested.</td> </tr> <tr> <td><code>404 Not found</code></td> <td>The resource you specified does not exist.</td> </tr> <tr> <td><code>500 Internal server error</code></td> <td>An internal server error has occurred.<br> Normally this means that something went wrong on our side.<br> However, sometimes this error will appear if we missed to catch an error which is normally a 400 status code! </td> </tr> </table> <br><br> <b>Resource Versioning</b> <br><br> We use resource versioning to handle breaking changes for our endpoints, these are rarely used and will be communicated before we remove older versions.<br> To call a different version we use a specific header <code>X-Version</code> that should be filled with the desired version.<br> <ul>  <li>If you do not specify any version we assume <code>default</code></li> <li>If you specify a version that does not exist or was removed, you will get an error with information which versions are available</li> </ul> <table> <tr> <th>X-Version</th> <th>Description</th> </tr> <tr> <td><code>default</code></td> <td>Should always reference the oldest version.<br> If a specific resource is updated with a new version, <br> then the default version stays the same until the old version is deleted</td> </tr> <tr> <td><code>1.0</code> ... <code>1.9</code></td> <td>Our incrementally version for each resource independent<br> <b>Important</b>: A resource can be available via <code>default</code> but not <code>1.0</code></td> </tr> </table> 
# Your First Request
 After reading the introduction to our API, you should now be able to make your first call.<br> For testing our API, we would always recommend to create a trial account for sevdesk to prevent unwanted changes to your main account.<br> A trial account will be in the highest tariff (materials management), so every sevdesk function can be tested! 

To start testing we would recommend one of the following tools: <ul> <li><a href='https://www.getpostman.com/'>Postman</a></li> <li><a href='https://curl.haxx.se/download.html'>cURL</a></li> </ul> This example will illustrate your first request, which is creating a new Contact in sevdesk.<br> <ol> <li>Download <a href='https://www.getpostman.com/'><b>Postman</b></a> for your desired system and start the application</li> <li>Enter <span><b>ht</span>tps://my.sevdesk.de/api/v1/Contact</b> as the url</li> <li>Create an authorization header and insert your API token as the value</li> <li>For this test, select <b>POST</b> as the HTTP method</li> <li>Go to <b>Headers</b> and enter the key-value pair <b>Content-type</b> + <b>application/x-www-form-urlencoded</b><br> As an alternative, you can just go to <b>Body</b> and select <b>x-www-form-urlencoded</b></li> <li>Now go to <b>Body</b> (if you are not there yet) and enter the key-value pairs as shown in the following picture<br><br> <img src='https://api.sevdesk.de/openAPI/img/FirstRequestPostman.PNG' width='900'><br><br></li> <li>Click on <b>Send</b>. Your response should now look like this:<br><br> <img src='https://api.sevdesk.de/openAPI/img/FirstRequestResponse.PNG' width='900'></li> </ol> As you can see, a successful response in this case returns a JSON-formatted response body containing the contact you just created.<br> For keeping it simple, this was only a minimal example of creating a contact.<br> There are however numerous combinations of parameters that you can provide which add information to your contact. 
# sevdesk-Update 2.0
 Started in 2024 we introduced a new era of bookkeeping in sevdesk. You can check if you already received the update by clicking on your profile in the top right in the sevdesk WebApp or by using the [Tools/bookkeepingSystemVersion endpoint](#tag/Basics/operation/bookkeepingSystemVersion).<br> The old version will be available for some customers until the end of 2024. In this short list we have outlined the changed endpoints with links to jump to the descriptions. If you received the [api newsletter](https://landing.sevdesk.de/api-newsletter) you already know what changed. Otherwise you can check the api changes [here](https://tech.sevdesk.com/api_news/posts/2024_04_04-system-update-breaking-changes/). 
## Check your bookkeeping system version
 With this endpoint you can check which version you / your client uses. On that basis you must use the old or new versions of the endpoints. [Tools/bookkeepingSystemVersion Endpoint](#tag/Basics/operation/bookkeepingSystemVersion) 
## Tax Rules
 <I><b>(affects the properties taxType and taxSet)</b></I><br> With sevdesk-Update 2.0 we changed the available tax rules. Due to a high likeliness of non-compliant accounting, we won't support the following tax type with the sevdesk-Update 2.0 anymore:
 `taxType = custom (this includes 'taxSet': ... )`
 If you only use <code>taxType = default</code>, <code>taxType = eu</code> and / or <code>taxType = ss</code>, these tax types will automatically be mapped to the new tax rules for a transition period, but you have to make sure the taxRate used in positions is within the allowed ones (you may use the [ReceiptGuidance endpoint](#tag/Voucher/operation/forAllAccounts) for that), otherwise the API will return a validation error (HTTP status code 422). For [orders](#tag/Order), [invoices](#tag/Invoice), [vouchers](#tag/Voucher) and [credit notes](#tag/CreditNote) that were created within sevdesk-Update 2.0 the response will change in all endpoints in which these objects are returned.<br> So orders, invoices, vouchers and credit notes created within sevdesk system version 1.0 still have a taxType in the response. When they are created in sevdesk-Update 2.0 they will have a taxRule instead.<br> You can continue to use taxType at first, but we recommend switching to taxRule as there are new options available that were not previously supported.<br> For orders, invoices, vouchers and credit notes that were created within sevdesk-Update 2.0 the response will change in all endpoints in which these objects are returned. This documentation holds the most current version of the endpoints.<br> Here are lists of the currently available tax rules, sorted by their use case, structured into revenue/expense and 'Regelbesteuerer'/'Kleinunternehmer'. 
#### VAT rules for 'Regelbesteuerung' in sevdesk-Update 2.0 (Revenue)
 <table> <tr> <th>VAT Rule</th> <th>New Property</th> <th>Allowed taxRate in positions</th> <th>Old property (deprecated)</th> <th>Unsupported use cases</th> </tr> <tr> <td>Umsatzsteuerpflichtige Umsätze</td> <td><code>'taxRule': 1</code></td> <td> <ul> <li>0.0</li> <li>7.0</li> <li>19.0</li> </ul> </td> <td><code>'taxType': 'default'</code></td> <td>-</td> </tr> <tr> <td>Ausfuhren</td> <td><code>'taxRule': 2</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> <td>-</td> </tr> <tr> <td>Innergemeinschaftliche Lieferungen</td> <td><code>'taxRule': 3</code></td> <td> <ul> <li>0.0</li> <li>7.0</li> <li>19.0</li> </ul> </td> <td><code>'taxType': 'eu'</code></td> <td>-</td> </tr> <tr> <td>Steuerfreie Umsätze §4 UStG</td> <td><code>'taxRule': 4</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> <td>-</td> </tr> <tr> <td>Reverse Charge gem. §13b UStG</td> <td><code>'taxRule': 5</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> <td>-</td> </tr> <tr> <td>Nicht im Inland steuerbare Leistung</td> <td><code>'taxRule': 17</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td><code>'taxType': 'noteu'</code></td> <td> <ul> <li>Creation of an advance invoice</li> <li>Creation of a partial invoice</li> <li>Creation of a final invoice</li> </ul> </td> </tr> <tr> <td>One Stop Shop (goods)</td> <td><code>'taxRule': 18</code></td> <td> <ul> <li>depending on country</li> </ul> </td> <td>-</td> <td> <ul> <li>Usage in vouchers</li> <li>Creation as e-invoice</li> <li>Creation of an invoice with a custom revenue account (<code>accountDatev</code>)</li> <li>Creation of an advance invoice</li> <li>Creation of a partial invoice</li> <li>Creation of a final invoice</li> </ul> </td> </tr> <tr> <td>One Stop Shop (electronic service)</td> <td><code>'taxRule': 19</code></td> <td> <ul> <li>depending on country</li> </ul> </td> <td>-</td> <td> <ul> <li>Usage in vouchers</li> <li>Creation as e-invoice</li> <li>Creation of an invoice with a custom revenue account (<code>accountDatev</code>)</li> <li>Creation of an advance invoice</li> <li>Creation of a partial invoice</li> <li>Creation of a final invoice</li> </ul> </td> </tr> <tr> <td>One Stop Shop (other service)</td> <td><code>'taxRule': 20</code></td> <td> <ul> <li>depending on country</li> </ul> </td> <td>-</td> <td> <ul> <li>Usage in vouchers</li> <li>Creation as e-invoice</li> <li>Creation of an invoice with a custom revenue account (<code>accountDatev</code>)</li> <li>Creation of an advance invoice</li> <li>Creation of a partial invoice</li> <li>Creation of a final invoice</li> </ul> </td> </tr> </table> 
 See the <a href=\"#tag/Invoice/operation/createInvoiceFromOrder\">example request</a> to create a normal invoice <code>\"invoiceType\": \"RE\"</code> from an order that uses a tax rule that does not support advance, partial or final invoices. 
 
#### VAT rules for 'Regelbesteuerung' in sevdesk-Update 2.0 (Expense)
 <table> <tr> <th>VAT Rule</th> <th>New Property</th> <th>Allowed taxRate in positions</th> <th>Old property (deprecated)</th> </tr> <tr> <td>Innergemeinschaftliche Erwerbe</td> <td><code>'taxRule': 8</code></td> <td> <ul> <li>0.0</li> <li>7.0</li> <li>19.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Vorsteuerabziehbare Aufwendungen</td> <td><code>'taxRule': 9</code></td> <td> <ul> <li>0.0</li> <li>7.0</li> <li>19.0</li> </ul> </td> <td><code>'taxType': 'default'</code></td> </tr> <tr> <td>Nicht vorsteuerabziehbare Aufwendungen</td> <td><code>'taxRule': 10</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Reverse Charge gem. §13b Abs. 2 UStG mit Vorsteuerabzug 0% (19%)</td> <td><code>'taxRule': 12</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Reverse Charge gem. §13b UStG ohne Vorsteuerabzug 0% (19%)</td> <td><code>'taxRule': 13</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> <tr> <td>Reverse Charge gem. §13b Abs. 1 EU Umsätze 0% (19%)</td> <td><code>'taxRule': 14</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> </table> 
 
#### VAT rules for small business owner ('Kleinunternehmer') in sevdesk-Update 2.0 (Revenue)
 <table> <tr> <th>VAT Rule</th> <th>New Property</th> <th>Allowed taxRate in positions</th> <th>Old property (deprecated)</th> </tr> <tr> <td>Steuer nicht erhoben nach §19UStG</td> <td><code>'taxRule': 11</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td><code>'taxType': 'ss'</code></td> </tr> </table> 
 
#### VAT rules for small business owner ('Kleinunternehmer') in sevdesk-Update 2.0 (Expense)
 <table> <tr> <th>VAT Rule</th> <th>New Property</th> <th>Allowed taxRate in positions</th> <th>Old property (deprecated)</th> </tr> <tr> <td>Nicht vorsteuerabziehbare Aufwendungen</td> <td><code>'taxRule': 10</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td><code>'taxType': 'ss'</code></td> </tr> <tr> <td>Reverse Charge gem. §13b UStG ohne Vorsteuerabzug 0% (19%)</td> <td><code>'taxRule': 13</code></td> <td> <ul> <li>0.0</li> </ul> </td> <td>-</td> </tr> </table> 
 
## Booking Accounts
 <I><b>(affects the property accountingType)</b></I><br> With sevdesk-Update 2.0 we changed the available booking accounts and their combinatorics. If you use accountingTypes with SKR numbers that are still available in our receipt guidance, you do not have to change anything in your requests. These booking accounts will automatically be mapped to the new representation (Account Datev). But you have to make sure the taxRate used in positions and taxRule used in the voucher is within the allowed ones (check the [ReceiptGuidance](#tag/Voucher/operation/forAllAccounts)) of the provided booking account, otherwise the API will return a validation error (HTTP status code 422). For orders, invoices, vouchers and credit notes in that were created within sevdesk-Update 2.0 the response will change in all endpoints were these objects are returned. 
## Receipt Guidance
 To help you decide which account can be used in conjunction with which tax rules, tax rates and documents, we created several guidance endpoints just there for you to get helpful information. You can find the descriptions in the changes section for Vouchers below or jump directly to the endpoint description by using this link: [Receipt Guidance](#tag/Voucher/operation/forAllAccounts).<br> Receipt Guidance is planned to give you guidance in which account you can pick (depending on your filter criteria and the client settings (e.g. 'Kleinunternehmer')) and which tax rate and [tax rules](#section/sevdesk-Update-2.0/Tax-Rules) are comptaible with them.  
## Vouchers
 
### Saving a new voucher ([Voucher/Factory/saveVoucher](#tag/Voucher/operation/voucherFactorySaveVoucher))
 Following use cases do not work anymore or have changed: <ol> <li>Custom vat regulations (taxType = custom and provided taxSet)</li> <li>Only specific tax rates and booking accounts are available. Check [ReceiptGuidance](#tag/Voucher/operation/forAllAccounts)</li> <li>Custom accounting types do not work anymore</li> <li>Using an asset booking account without creating an asset is no longer possible</li> <li>A voucher can not be directly set to paid anymore, therefore only status <code>DRAFT (50)</code> or <code>UNPAID / DUE (100)</code> are possible when creating a new voucher. Use the [/api/v1/Voucher/{voucherId}/bookAmount endpoint](#tag/Voucher/operation/bookVoucher) to set a voucher to paid</li> <li>Setting or changing the property enshrined. Use our new endpoint [/api/v1/Voucher/{voucherId}/enshrine](#tag/Voucher/operation/voucherEnshrine) to enshrine a voucher</li> </ol> 
### Get or update an existing voucher ([Voucher/{voucherId}](#tag/Voucher/operation/updateVoucher))
 Following use cases do not work anymore or have changed: <ol> <li>Custom vat regulations (taxType = custom and provided taxSet)</li> <li>See [ReceiptGuidance](#tag/Voucher/operation/forAllAccounts) to check which tax rates are available in conjunction with which tax rules</li> </ol> 
### Book a voucher ([Voucher/{voucherId}](#tag/Voucher/operation/bookVoucher))
 Following use cases do not work anymore or have changed: <ol> <li>Voucher with negative voucher positions can not use 'cash discount' as a payment difference anymore</li> <li>A Voucher can only be booked when it was registered beforehand (see above)</li> <li>Based on the combination of voucher positions some payment difference reasons are not possible anymore</li> <li>The currency fluctuation (CF) type is no longer supported as a payment difference reason</li> </ol> 
## Banking
 Following use cases do not work anymore or have changed: <ol> <li>Setting or changing the property enshrined will now only be available by using the [appropriate enshrine endpoint](#tag/CheckAccountTransaction/operation/checkAccountTransactionEnshrine)</li> </ol> 
## Invoicing
 The changes to the vat rules also apply here. Check the documentation of voucher above as the changes are the same. 
### General stricter validation in PUT and POST endpoints
 We added stricter validation to ensure only correct invoices are created which than can be further processed in sevdesk. Following use cases do not work anymore or have changed: <ol> <li>Creating an invoice with taxType <code>custom</code> does not work anymore</li> <li>Processing an invoice beyond status <code>DRAFT (100)</code> without a contact does not work anymore</li> <li>Advanced invoices (<code>invoiceType: 'AR'</code>) and partial invoices (<code>invoiceType: 'TR'</code>) can only be created with the tax rule 'Umsatzsteuerpflichtige Umsätze (taxRule: 1)'(for Regelbesteuerer) or 'Steuer nicht erhoben nach §19 UStG (taxRule: 11)'(for Kleinunternehmer)</li> <li>Creating a dunning (<code>invoiceType: 'MA'</code>) with the value of property <code>reminderCharge</code> greater than 0 does not work anymore</li> <li>Creating an advanced invoice (<code>invoiceType: 'AR'</code>), a partial invoice (<code>invoiceType: 'TR'</code>) or a final invoice (<code>invoiceType: 'ER'</code>) with a currency deviating from the clients <code>defaultCurrency</code> is not possible anymore</li> <li>Changing the status manually does not work anymore (see 'Removed endpoint /Invoice/{invoiceId}/changeStatus' below)</li> <li>Enshrining now has to be done by using the [enshrine endpoint](#tag/Invoice/operation/invoiceEnshrine) (see below)</li> </ol> 
### Saving an invoice ([Invoice/Factory/saveInvoice](#tag/Invoice/operation/createInvoiceByFactory))
 Following use cases do not work anymore or have changed: <ol> <li>Invoices can only be created with the status <code>DRAFT (100)</code> and can not be changed manually. Use the matching endpoints (e.g. [sendViaEmail](#tag/Invoice/operation/sendInvoiceViaEMail)) to automatically change the status accordingly</li> <li>Setting or changing the property <code>enshrined</code> is now only possible by using the [enshrine endpoint](#tag/CheckAccountTransaction/operation/checkAccountTransactionEnshrine)</li> </ol> 
### Using an order to create an invoice ([Invoice/Factory/createInvoiceFromOrder](#tag/Invoice/operation/createInvoiceFromOrder))
 Following use cases do not work anymore or have changed: <ol> <li>Creating a final invoice (partialType: 'ER') is not possible if an advanced invoice (partialType: 'AR') or partial invoice (partialType: 'TR') exists. This functionality will be added in a later update</li> </ol> 
### Removed endpoint /Invoice/{invoiceId}/changeStatus
 This endpoint will be completely removed (including sevdesk system version 1.0!). Using these endpoints will automatically change the status accordingly: <ul> <li>[Invoice/{invoiceId}/sendViaEmail](#tag/Invoice/operation/sendInvoiceViaEMail)</li> <li>[Invoice/{invoiceId}/sendBy](#tag/Invoice/operation/invoiceSendBy)</li> <li>[Invoice/{invoiceId}/bookAmount](#tag/Invoice/operation/bookInvoice)</li> <li>[Invoice/{invoiceId}/resetToDraft](#tag/Invoice/operation/invoiceResetToDraft)</li> <li>[Invoice/{invoiceId}/resetToOpen](#tag/Invoice/operation/invoiceResetToOpen)</li> </ul> 
### New endpoint [Invoice/{invoiceId}/resetToDraft](#tag/Invoice/operation/invoiceResetToDraft)
 This new endpoint can be used to reset the status of an invoice to <code>DRAFT (100)</code>. 
### New endpoint [Invoice/{invoiceId}/resetToOpen](#tag/Invoice/operation/invoiceResetToOpen)
 This new endpoint can be used to reset the status of an invoice to <code>OPEN (200)</code>. 
### New endpoint [Invoice/{invoiceId}/enshrine]((#tag/Invoice/operation/invoiceEnshrine))
 The enshrine endpoint is now used to set the property <code>enshrined</code>. <b>This operation CAN NOT be undone due to legal reasons!</b> 
## Credit Notes
 The changes to the vat rules also apply here. Check the documentation of voucher above as the changes are the same. 
### General stricter validation in PUT and POST endpoints
 We added stricter validation to ensure only correct credit notes are created which than can be further processed in sevdesk. Due to the move from taxTypes/taxSets to taxRules you need to check the compatibility of the taxRules in combination with the tax rates. Following use cases do not work anymore or have changed: <ol> <li>Creating a credit note without a date of delivery (<code>deliveryDateUntil</code>) for an invoice that has a date of delivery (<code>deliveryDateUntil</code>) is no longer possible</li> <li>Creating a credit note with a date of delivery (<code>deliveryDateUntil</code>) for an invoice that has no date of delivery (<code>deliveryDateUntil</code>) is no longer possible</li> <li>Creating a credit note with a date of delivery (<code>deliveryDateUntil</code>) that is before the date of delivery (<code>deliveryDateUntil</code>) of the invoice is no longer possible</li> <li>Creating a credit note for an advanced invoice (<code>invoiceType: 'AR'</code>) or partial invoice (<code>invoiceType: 'TR'</code>) is no longer possible</li> <li>Creating a credit note for a voucher is no longer possible</li> <li>Creating a credit note with <code>\"bookingCategory\": \"ACCOUNTING_TYPE\"</code> is currently not supported</li> <li>Currency fluctuation (CF) is no longer supported as a payment difference</li> </ol> 
### Saving a credit note ([CreditNote/Factory/saveCreditNote](#tag/CreditNote/operation/createcreditNote))
 Following use cases do not work anymore or have changed: <ol> <li>Credit notes can only be created with the status <code>DRAFT (100)</code> and can not be changed manually. Use the matching endpoints (e.g. [sendViaEmail](#tag/CreditNote/operation/sendCreditNoteViaEMail)) to automatically change the status accordingly</li> <li>Enshrining now has to be done by using the enshrine endpoint (see below)</li> </ol> 
### Removed endpoint /CreditNote/Factory/createFromVoucher
 The endpoint will be removed. It is not possible anymore to create credit notes for vouchers within sevdesk-Update 2.0. The endpoint continues to stay available for existing sevdesk system version 1.0 clients. 
### Removed endpoint /CreditNote/{creditNoteId}/changeStatus
 This endpoint will be completely removed (including sevdesk system version 1.0!). Using these endpoints will automatically change the status accordingly: <ul> <li>[CreditNote/{creditNoteId}/sendViaEmail](#tag/CreditNote/operation/sendCreditNoteViaEMail)</li> <li>[CreditNote/{creditNoteId}/sendBy](#tag/CreditNote/operation/creditNoteSendBy)</li> <li>[CreditNote/{creditNoteId}/bookAmount](#tag/CreditNote/operation/bookCreditNote)</li> <li>[CreditNote/{creditNoteId}/resetToDraft](#tag/CreditNote/operation/creditNoteResetToDraft)</li> <li>[CreditNote/{creditNoteId}/resetToOpen](#tag/CreditNote/operation/creditNoteResetToOpen)</li> </ul> 
### New endpoint CreditNote/{creditNoteId}/resetToDraft
 This new endpoint can be used to reset the status of a credit note to <code>DRAFT (100)</code>. You can find the documentation [here](#tag/CreditNote/operation/creditNoteResetToDraft). 
### New endpoint CreditNote/{creditNoteId}/resetToOpen
 This new endpoint can be used to reset the status of a credit note to <code>OPEN (200)</code>. You can find the documentation [here](#tag/CreditNote/operation/creditNoteResetToOpen). 
### New endpoint CreditNote/{creditNoteId}/enshrine
 [The enshrine endpoint](#tag/CreditNote/operation/creditNoteEnshrine) is now used to set the property <code>enshrined</code>. <b>This operation CAN NOT be undone due to legal reasons!</b>
## Parts
 
### General stricter validation in PUT and POST endpoints
 Following use cases do not work anymore or have changed: <ol> <li>Creating products with a tax rate other than 0.0, 7.0 and 19.0 is no longer possible</li> </ol> 


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
      "url": "https://github.com/j-mastr/sevdesk-php-sdk.git"
    }
  ],
  "require": {
    "itsmind/sevdesk-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/itsmind/sevdesk-php-sdk/vendor/autoload.php');
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

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountingContactApi* | [**createAccountingContact**](docs/Api/AccountingContactApi.md#createaccountingcontact) | **POST** /AccountingContact | Create a new accounting contact
*AccountingContactApi* | [**deleteAccountingContact**](docs/Api/AccountingContactApi.md#deleteaccountingcontact) | **DELETE** /AccountingContact/{accountingContactId} | Deletes an accounting contact
*AccountingContactApi* | [**getAccountingContact**](docs/Api/AccountingContactApi.md#getaccountingcontact) | **GET** /AccountingContact | Retrieve accounting contact
*AccountingContactApi* | [**getAccountingContactById**](docs/Api/AccountingContactApi.md#getaccountingcontactbyid) | **GET** /AccountingContact/{accountingContactId} | Find accounting contact by ID
*AccountingContactApi* | [**updateAccountingContact**](docs/Api/AccountingContactApi.md#updateaccountingcontact) | **PUT** /AccountingContact/{accountingContactId} | Update an existing accounting contact
*BasicsApi* | [**bookkeepingSystemVersion**](docs/Api/BasicsApi.md#bookkeepingsystemversion) | **GET** /Tools/bookkeepingSystemVersion | Retrieve bookkeeping system version
*CheckAccountApi* | [**createClearingAccount**](docs/Api/CheckAccountApi.md#createclearingaccount) | **POST** /CheckAccount/Factory/clearingAccount | Create a new clearing account
*CheckAccountApi* | [**createFileImportAccount**](docs/Api/CheckAccountApi.md#createfileimportaccount) | **POST** /CheckAccount/Factory/fileImportAccount | Create a new file import account
*CheckAccountApi* | [**deleteCheckAccount**](docs/Api/CheckAccountApi.md#deletecheckaccount) | **DELETE** /CheckAccount/{checkAccountId} | Deletes a check account
*CheckAccountApi* | [**getBalanceAtDate**](docs/Api/CheckAccountApi.md#getbalanceatdate) | **GET** /CheckAccount/{checkAccountId}/getBalanceAtDate | Get the balance at a given date
*CheckAccountApi* | [**getCheckAccountById**](docs/Api/CheckAccountApi.md#getcheckaccountbyid) | **GET** /CheckAccount/{checkAccountId} | Find check account by ID
*CheckAccountApi* | [**getCheckAccounts**](docs/Api/CheckAccountApi.md#getcheckaccounts) | **GET** /CheckAccount | Retrieve check accounts
*CheckAccountApi* | [**updateCheckAccount**](docs/Api/CheckAccountApi.md#updatecheckaccount) | **PUT** /CheckAccount/{checkAccountId} | Update an existing check account
*CheckAccountTransactionApi* | [**checkAccountTransactionEnshrine**](docs/Api/CheckAccountTransactionApi.md#checkaccounttransactionenshrine) | **PUT** /CheckAccountTransaction/{checkAccountTransactionId}/enshrine | Enshrine
*CheckAccountTransactionApi* | [**createTransaction**](docs/Api/CheckAccountTransactionApi.md#createtransaction) | **POST** /CheckAccountTransaction | Create a new transaction
*CheckAccountTransactionApi* | [**deleteCheckAccountTransaction**](docs/Api/CheckAccountTransactionApi.md#deletecheckaccounttransaction) | **DELETE** /CheckAccountTransaction/{checkAccountTransactionId} | Deletes a check account transaction
*CheckAccountTransactionApi* | [**getCheckAccountTransactionById**](docs/Api/CheckAccountTransactionApi.md#getcheckaccounttransactionbyid) | **GET** /CheckAccountTransaction/{checkAccountTransactionId} | Find check account transaction by ID
*CheckAccountTransactionApi* | [**getTransactions**](docs/Api/CheckAccountTransactionApi.md#gettransactions) | **GET** /CheckAccountTransaction | Retrieve transactions
*CheckAccountTransactionApi* | [**updateCheckAccountTransaction**](docs/Api/CheckAccountTransactionApi.md#updatecheckaccounttransaction) | **PUT** /CheckAccountTransaction/{checkAccountTransactionId} | Update an existing check account transaction
*CommunicationWayApi* | [**createCommunicationWay**](docs/Api/CommunicationWayApi.md#createcommunicationway) | **POST** /CommunicationWay | Create a new contact communication way
*CommunicationWayApi* | [**deleteCommunicationWay**](docs/Api/CommunicationWayApi.md#deletecommunicationway) | **DELETE** /CommunicationWay/{communicationWayId} | Deletes a communication way
*CommunicationWayApi* | [**getCommunicationWayById**](docs/Api/CommunicationWayApi.md#getcommunicationwaybyid) | **GET** /CommunicationWay/{communicationWayId} | Find communication way by ID
*CommunicationWayApi* | [**getCommunicationWayKeys**](docs/Api/CommunicationWayApi.md#getcommunicationwaykeys) | **GET** /CommunicationWayKey | Retrieve communication way keys
*CommunicationWayApi* | [**getCommunicationWays**](docs/Api/CommunicationWayApi.md#getcommunicationways) | **GET** /CommunicationWay | Retrieve communication ways
*CommunicationWayApi* | [**updateCommunicationWay**](docs/Api/CommunicationWayApi.md#updatecommunicationway) | **PUT** /CommunicationWay/{communicationWayId} | Update a existing communication way
*ContactApi* | [**contactCustomerNumberAvailabilityCheck**](docs/Api/ContactApi.md#contactcustomernumberavailabilitycheck) | **GET** /Contact/Mapper/checkCustomerNumberAvailability | Check if a customer number is available
*ContactApi* | [**createContact**](docs/Api/ContactApi.md#createcontact) | **POST** /Contact | Create a new contact
*ContactApi* | [**deleteContact**](docs/Api/ContactApi.md#deletecontact) | **DELETE** /Contact/{contactId} | Deletes a contact
*ContactApi* | [**findContactsByCustomFieldValue**](docs/Api/ContactApi.md#findcontactsbycustomfieldvalue) | **GET** /Contact/Factory/findContactsByCustomFieldValue | Find contacts by custom field value
*ContactApi* | [**getContactById**](docs/Api/ContactApi.md#getcontactbyid) | **GET** /Contact/{contactId} | Find contact by ID
*ContactApi* | [**getContactTabsItemCountById**](docs/Api/ContactApi.md#getcontacttabsitemcountbyid) | **GET** /Contact/{contactId}/getTabsItemCount | Get number of all items
*ContactApi* | [**getContacts**](docs/Api/ContactApi.md#getcontacts) | **GET** /Contact | Retrieve contacts
*ContactApi* | [**getNextCustomerNumber**](docs/Api/ContactApi.md#getnextcustomernumber) | **GET** /Contact/Factory/getNextCustomerNumber | Get next free customer number
*ContactApi* | [**updateContact**](docs/Api/ContactApi.md#updatecontact) | **PUT** /Contact/{contactId} | Update a existing contact
*ContactAddressApi* | [**createContactAddress**](docs/Api/ContactAddressApi.md#createcontactaddress) | **POST** /ContactAddress | Create a new contact address
*ContactAddressApi* | [**deleteContactAddress**](docs/Api/ContactAddressApi.md#deletecontactaddress) | **DELETE** /ContactAddress/{contactAddressId} | Deletes a contact address
*ContactAddressApi* | [**getContactAddressById**](docs/Api/ContactAddressApi.md#getcontactaddressbyid) | **GET** /ContactAddress/{contactAddressId} | Find contact address by ID
*ContactAddressApi* | [**getContactAddresses**](docs/Api/ContactAddressApi.md#getcontactaddresses) | **GET** /ContactAddress | Retrieve contact addresses
*ContactAddressApi* | [**updateContactAddress**](docs/Api/ContactAddressApi.md#updatecontactaddress) | **PUT** /ContactAddress/{contactAddressId} | update a existing contact address
*ContactFieldApi* | [**createContactField**](docs/Api/ContactFieldApi.md#createcontactfield) | **POST** /ContactCustomField | Create contact field
*ContactFieldApi* | [**createContactFieldSetting**](docs/Api/ContactFieldApi.md#createcontactfieldsetting) | **POST** /ContactCustomFieldSetting | Create contact field setting
*ContactFieldApi* | [**deleteContactCustomFieldId**](docs/Api/ContactFieldApi.md#deletecontactcustomfieldid) | **DELETE** /ContactCustomField/{contactCustomFieldId} | delete a contact field
*ContactFieldApi* | [**deleteContactFieldSetting**](docs/Api/ContactFieldApi.md#deletecontactfieldsetting) | **DELETE** /ContactCustomFieldSetting/{contactCustomFieldSettingId} | Deletes a contact field setting
*ContactFieldApi* | [**getContactFieldSettingById**](docs/Api/ContactFieldApi.md#getcontactfieldsettingbyid) | **GET** /ContactCustomFieldSetting/{contactCustomFieldSettingId} | Find contact field setting by ID
*ContactFieldApi* | [**getContactFieldSettings**](docs/Api/ContactFieldApi.md#getcontactfieldsettings) | **GET** /ContactCustomFieldSetting | Retrieve contact field settings
*ContactFieldApi* | [**getContactFields**](docs/Api/ContactFieldApi.md#getcontactfields) | **GET** /ContactCustomField | Retrieve contact fields
*ContactFieldApi* | [**getContactFieldsById**](docs/Api/ContactFieldApi.md#getcontactfieldsbyid) | **GET** /ContactCustomField/{contactCustomFieldId} | Retrieve contact fields
*ContactFieldApi* | [**getPlaceholder**](docs/Api/ContactFieldApi.md#getplaceholder) | **GET** /Textparser/fetchDictionaryEntriesByType | Retrieve Placeholders
*ContactFieldApi* | [**getReferenceCount**](docs/Api/ContactFieldApi.md#getreferencecount) | **GET** /ContactCustomFieldSetting/{contactCustomFieldSettingId}/getReferenceCount | Receive count reference
*ContactFieldApi* | [**updateContactFieldSetting**](docs/Api/ContactFieldApi.md#updatecontactfieldsetting) | **PUT** /ContactCustomFieldSetting/{contactCustomFieldSettingId} | Update contact field setting
*ContactFieldApi* | [**updateContactfield**](docs/Api/ContactFieldApi.md#updatecontactfield) | **PUT** /ContactCustomField/{contactCustomFieldId} | Update a contact field
*CreditNoteApi* | [**bookCreditNote**](docs/Api/CreditNoteApi.md#bookcreditnote) | **PUT** /CreditNote/{creditNoteId}/bookAmount | Book a credit note
*CreditNoteApi* | [**createCreditNoteFromInvoice**](docs/Api/CreditNoteApi.md#createcreditnotefrominvoice) | **POST** /CreditNote/Factory/createFromInvoice | Creates a new creditNote from an invoice
*CreditNoteApi* | [**createCreditNoteFromVoucher**](docs/Api/CreditNoteApi.md#createcreditnotefromvoucher) | **POST** /CreditNote/Factory/createFromVoucher | Creates a new creditNote from a voucher
*CreditNoteApi* | [**createcreditNote**](docs/Api/CreditNoteApi.md#createcreditnote) | **POST** /CreditNote/Factory/saveCreditNote | Create a new creditNote
*CreditNoteApi* | [**creditNoteEnshrine**](docs/Api/CreditNoteApi.md#creditnoteenshrine) | **PUT** /CreditNote/{creditNoteId}/enshrine | Enshrine
*CreditNoteApi* | [**creditNoteGetPdf**](docs/Api/CreditNoteApi.md#creditnotegetpdf) | **GET** /CreditNote/{creditNoteId}/getPdf | Retrieve pdf document of a credit note
*CreditNoteApi* | [**creditNoteResetToDraft**](docs/Api/CreditNoteApi.md#creditnoteresettodraft) | **PUT** /CreditNote/{creditNoteId}/resetToDraft | Reset status to draft
*CreditNoteApi* | [**creditNoteResetToOpen**](docs/Api/CreditNoteApi.md#creditnoteresettoopen) | **PUT** /CreditNote/{creditNoteId}/resetToOpen | Reset status to open
*CreditNoteApi* | [**creditNoteSendBy**](docs/Api/CreditNoteApi.md#creditnotesendby) | **PUT** /CreditNote/{creditNoteId}/sendBy | Mark credit note as sent
*CreditNoteApi* | [**deletecreditNote**](docs/Api/CreditNoteApi.md#deletecreditnote) | **DELETE** /CreditNote/{creditNoteId} | Deletes an creditNote
*CreditNoteApi* | [**getCreditNotes**](docs/Api/CreditNoteApi.md#getcreditnotes) | **GET** /CreditNote | Retrieve CreditNote
*CreditNoteApi* | [**getcreditNoteById**](docs/Api/CreditNoteApi.md#getcreditnotebyid) | **GET** /CreditNote/{creditNoteId} | Find creditNote by ID
*CreditNoteApi* | [**sendCreditNoteByPrinting**](docs/Api/CreditNoteApi.md#sendcreditnotebyprinting) | **GET** /CreditNote/{creditNoteId}/sendByWithRender | Send credit note by printing
*CreditNoteApi* | [**sendCreditNoteViaEMail**](docs/Api/CreditNoteApi.md#sendcreditnoteviaemail) | **POST** /CreditNote/{creditNoteId}/sendViaEmail | Send credit note via email
*CreditNoteApi* | [**updatecreditNote**](docs/Api/CreditNoteApi.md#updatecreditnote) | **PUT** /CreditNote/{creditNoteId} | Update an existing creditNote
*CreditNotePosApi* | [**getcreditNotePositions**](docs/Api/CreditNotePosApi.md#getcreditnotepositions) | **GET** /CreditNotePos | Retrieve creditNote positions
*DefaultApi* | [**updateStatus**](docs/Api/DefaultApi.md#updatestatus) | **PUT** /Invoice/{invoiceId}/changeStatus | Update the status of an invoice
*DocumentApi* | [**getDocuments**](docs/Api/DocumentApi.md#getdocuments) | **GET** /Document | Retrieve documents
*ExportApi* | [**exportContact**](docs/Api/ExportApi.md#exportcontact) | **GET** /Export/contactListCsv | Export contact
*ExportApi* | [**exportCreditNote**](docs/Api/ExportApi.md#exportcreditnote) | **GET** /Export/creditNoteCsv | Export creditNote
*ExportApi* | [**exportDatev**](docs/Api/ExportApi.md#exportdatev) | **GET** /Export/datevCSV | Export datev
*ExportApi* | [**exportInvoice**](docs/Api/ExportApi.md#exportinvoice) | **GET** /Export/invoiceCsv | Export invoice
*ExportApi* | [**exportInvoiceZip**](docs/Api/ExportApi.md#exportinvoicezip) | **GET** /Export/invoiceZip | Export Invoice as zip
*ExportApi* | [**exportTransactions**](docs/Api/ExportApi.md#exporttransactions) | **GET** /Export/transactionsCsv | Export transaction
*ExportApi* | [**exportVoucher**](docs/Api/ExportApi.md#exportvoucher) | **GET** /Export/voucherListCsv | Export voucher as zip
*ExportApi* | [**exportVoucherZip**](docs/Api/ExportApi.md#exportvoucherzip) | **GET** /Export/voucherZip | Export voucher zip
*ExportApi* | [**updateExportConfig**](docs/Api/ExportApi.md#updateexportconfig) | **PUT** /SevClient/{SevClientId}/updateExportConfig | Update export config
*InvoiceApi* | [**bookInvoice**](docs/Api/InvoiceApi.md#bookinvoice) | **PUT** /Invoice/{invoiceId}/bookAmount | Book an invoice
*InvoiceApi* | [**cancelInvoice**](docs/Api/InvoiceApi.md#cancelinvoice) | **POST** /Invoice/{invoiceId}/cancelInvoice | Cancel an invoice / Create cancellation invoice
*InvoiceApi* | [**createInvoiceByFactory**](docs/Api/InvoiceApi.md#createinvoicebyfactory) | **POST** /Invoice/Factory/saveInvoice | Create a new invoice
*InvoiceApi* | [**createInvoiceFromOrder**](docs/Api/InvoiceApi.md#createinvoicefromorder) | **POST** /Invoice/Factory/createInvoiceFromOrder | Create invoice from order
*InvoiceApi* | [**createInvoiceReminder**](docs/Api/InvoiceApi.md#createinvoicereminder) | **POST** /Invoice/Factory/createInvoiceReminder | Create invoice reminder
*InvoiceApi* | [**deleteInvoiceById**](docs/Api/InvoiceApi.md#deleteinvoicebyid) | **DELETE** /Invoice/{invoiceId} | Delete invoice by ID
*InvoiceApi* | [**getInvoiceById**](docs/Api/InvoiceApi.md#getinvoicebyid) | **GET** /Invoice/{invoiceId} | Find invoice by ID
*InvoiceApi* | [**getInvoicePositionsById**](docs/Api/InvoiceApi.md#getinvoicepositionsbyid) | **GET** /Invoice/{invoiceId}/getPositions | Find invoice positions
*InvoiceApi* | [**getInvoices**](docs/Api/InvoiceApi.md#getinvoices) | **GET** /Invoice | Retrieve invoices
*InvoiceApi* | [**getIsInvoicePartiallyPaid**](docs/Api/InvoiceApi.md#getisinvoicepartiallypaid) | **GET** /Invoice/{invoiceId}/getIsPartiallyPaid | Check if an invoice is already partially paid
*InvoiceApi* | [**getLastDunning**](docs/Api/InvoiceApi.md#getlastdunning) | **GET** /Invoice/{invoiceId}/getLastDunning | Get the last dunning of an invoice
*InvoiceApi* | [**getOpenInvoiceReminderDebit**](docs/Api/InvoiceApi.md#getopeninvoicereminderdebit) | **GET** /Invoice/Factory/getOpenInvoiceReminderDebit | Get the oben reminder debit for an invoice
*InvoiceApi* | [**invoiceEnshrine**](docs/Api/InvoiceApi.md#invoiceenshrine) | **PUT** /Invoice/{invoiceId}/enshrine | Enshrine
*InvoiceApi* | [**invoiceGetPdf**](docs/Api/InvoiceApi.md#invoicegetpdf) | **GET** /Invoice/{invoiceId}/getPdf | Retrieve pdf document of an invoice
*InvoiceApi* | [**invoiceGetXml**](docs/Api/InvoiceApi.md#invoicegetxml) | **GET** /Invoice/{invoiceId}/getXml | Retrieve XML of an e-invoice
*InvoiceApi* | [**invoiceRender**](docs/Api/InvoiceApi.md#invoicerender) | **POST** /Invoice/{invoiceId}/render | Render the pdf document of an invoice
*InvoiceApi* | [**invoiceResetToDraft**](docs/Api/InvoiceApi.md#invoiceresettodraft) | **PUT** /Invoice/{invoiceId}/resetToDraft | Reset status to draft
*InvoiceApi* | [**invoiceResetToOpen**](docs/Api/InvoiceApi.md#invoiceresettoopen) | **PUT** /Invoice/{invoiceId}/resetToOpen | Reset status to open
*InvoiceApi* | [**invoiceSendBy**](docs/Api/InvoiceApi.md#invoicesendby) | **PUT** /Invoice/{invoiceId}/sendBy | Mark invoice as sent
*InvoiceApi* | [**sendInvoiceViaEMail**](docs/Api/InvoiceApi.md#sendinvoiceviaemail) | **POST** /Invoice/{invoiceId}/sendViaEmail | Send invoice via email
*InvoiceApi* | [**updateInvoiceById**](docs/Api/InvoiceApi.md#updateinvoicebyid) | **PUT** /Invoice/{invoiceId} | Update invoice by ID
*InvoicePosApi* | [**getInvoicePos**](docs/Api/InvoicePosApi.md#getinvoicepos) | **GET** /InvoicePos | Retrieve InvoicePos
*LayoutApi* | [**getLetterpapersWithThumb**](docs/Api/LayoutApi.md#getletterpaperswiththumb) | **GET** /DocServer/getLetterpapersWithThumb | Retrieve letterpapers
*LayoutApi* | [**getTemplates**](docs/Api/LayoutApi.md#gettemplates) | **GET** /DocServer/getTemplatesWithThumb | Retrieve templates
*LayoutApi* | [**updateCreditNoteTemplate**](docs/Api/LayoutApi.md#updatecreditnotetemplate) | **PUT** /CreditNote/{creditNoteId}/changeParameter | Update an of credit note template
*LayoutApi* | [**updateInvoiceTemplate**](docs/Api/LayoutApi.md#updateinvoicetemplate) | **PUT** /Invoice/{invoiceId}/changeParameter | Update an invoice template
*LayoutApi* | [**updateOrderTemplate**](docs/Api/LayoutApi.md#updateordertemplate) | **PUT** /Order/{orderId}/changeParameter | Update an order template
*OrderApi* | [**createContractNoteFromOrder**](docs/Api/OrderApi.md#createcontractnotefromorder) | **POST** /Order/Factory/createContractNoteFromOrder | Create contract note from order
*OrderApi* | [**createOrder**](docs/Api/OrderApi.md#createorder) | **POST** /Order/Factory/saveOrder | Create a new order
*OrderApi* | [**createPackingListFromOrder**](docs/Api/OrderApi.md#createpackinglistfromorder) | **POST** /Order/Factory/createPackingListFromOrder | Create packing list from order
*OrderApi* | [**deleteOrder**](docs/Api/OrderApi.md#deleteorder) | **DELETE** /Order/{orderId} | Deletes an order
*OrderApi* | [**getDiscounts**](docs/Api/OrderApi.md#getdiscounts) | **GET** /Order/{orderId}/getDiscounts | Find order discounts
*OrderApi* | [**getOrderById**](docs/Api/OrderApi.md#getorderbyid) | **GET** /Order/{orderId} | Find order by ID
*OrderApi* | [**getOrderPositionsById**](docs/Api/OrderApi.md#getorderpositionsbyid) | **GET** /Order/{orderId}/getPositions | Find order positions
*OrderApi* | [**getOrders**](docs/Api/OrderApi.md#getorders) | **GET** /Order | Retrieve orders
*OrderApi* | [**getRelatedObjects**](docs/Api/OrderApi.md#getrelatedobjects) | **GET** /Order/{orderId}/getRelatedObjects | Find related objects
*OrderApi* | [**orderGetPdf**](docs/Api/OrderApi.md#ordergetpdf) | **GET** /Order/{orderId}/getPdf | Retrieve pdf document of an order
*OrderApi* | [**orderSendBy**](docs/Api/OrderApi.md#ordersendby) | **PUT** /Order/{orderId}/sendBy | Mark order as sent
*OrderApi* | [**sendorderViaEMail**](docs/Api/OrderApi.md#sendorderviaemail) | **POST** /Order/{orderId}/sendViaEmail | Send order via email
*OrderApi* | [**updateOrder**](docs/Api/OrderApi.md#updateorder) | **PUT** /Order/{orderId} | Update an existing order
*OrderPosApi* | [**deleteOrderPos**](docs/Api/OrderPosApi.md#deleteorderpos) | **DELETE** /OrderPos/{orderPosId} | Deletes an order Position
*OrderPosApi* | [**getOrderPositionById**](docs/Api/OrderPosApi.md#getorderpositionbyid) | **GET** /OrderPos/{orderPosId} | Find order position by ID
*OrderPosApi* | [**getOrderPositions**](docs/Api/OrderPosApi.md#getorderpositions) | **GET** /OrderPos | Retrieve order positions
*OrderPosApi* | [**updateOrderPosition**](docs/Api/OrderPosApi.md#updateorderposition) | **PUT** /OrderPos/{orderPosId} | Update an existing order position
*PartApi* | [**createPart**](docs/Api/PartApi.md#createpart) | **POST** /Part | Create a new part
*PartApi* | [**getPartById**](docs/Api/PartApi.md#getpartbyid) | **GET** /Part/{partId} | Find part by ID
*PartApi* | [**getParts**](docs/Api/PartApi.md#getparts) | **GET** /Part | Retrieve parts
*PartApi* | [**partGetStock**](docs/Api/PartApi.md#partgetstock) | **GET** /Part/{partId}/getStock | Get stock of a part
*PartApi* | [**updatePart**](docs/Api/PartApi.md#updatepart) | **PUT** /Part/{partId} | Update an existing part
*ReportApi* | [**reportContact**](docs/Api/ReportApi.md#reportcontact) | **GET** /Report/contactlist | Export contact list
*ReportApi* | [**reportInvoice**](docs/Api/ReportApi.md#reportinvoice) | **GET** /Report/invoicelist | Export invoice list
*ReportApi* | [**reportOrder**](docs/Api/ReportApi.md#reportorder) | **GET** /Report/orderlist | Export order list
*ReportApi* | [**reportVoucher**](docs/Api/ReportApi.md#reportvoucher) | **GET** /Report/voucherlist | Export voucher list
*SevUserApi* | [**getSevUserById**](docs/Api/SevUserApi.md#getsevuserbyid) | **GET** /SevUser/{sevUserId} | 
*SevUserApi* | [**getSevUsers**](docs/Api/SevUserApi.md#getsevusers) | **GET** /SevUser | 
*TagApi* | [**createTag**](docs/Api/TagApi.md#createtag) | **POST** /Tag/Factory/create | Create a new tag
*TagApi* | [**deleteTag**](docs/Api/TagApi.md#deletetag) | **DELETE** /Tag/{tagId} | Deletes a tag
*TagApi* | [**getTagById**](docs/Api/TagApi.md#gettagbyid) | **GET** /Tag/{tagId} | Find tag by ID
*TagApi* | [**getTagRelations**](docs/Api/TagApi.md#gettagrelations) | **GET** /TagRelation | Retrieve tag relations
*TagApi* | [**getTags**](docs/Api/TagApi.md#gettags) | **GET** /Tag | Retrieve tags
*TagApi* | [**updateTag**](docs/Api/TagApi.md#updatetag) | **PUT** /Tag/{tagId} | Update tag
*TextTemplateApi* | [**addTextTemplate**](docs/Api/TextTemplateApi.md#addtexttemplate) | **POST** /TextTemplate | Create a new text template
*TextTemplateApi* | [**deleteTextTemplate**](docs/Api/TextTemplateApi.md#deletetexttemplate) | **DELETE** /TextTemplate/{id} | Delete an existing text template
*TextTemplateApi* | [**getTextTemplate**](docs/Api/TextTemplateApi.md#gettexttemplate) | **GET** /TextTemplate | Get an overview of all text template
*TextTemplateApi* | [**updateTextTemplate**](docs/Api/TextTemplateApi.md#updatetexttemplate) | **PUT** /TextTemplate/{id} | Update an existing text template
*VoucherApi* | [**bookVoucher**](docs/Api/VoucherApi.md#bookvoucher) | **PUT** /Voucher/{voucherId}/bookAmount | Book a voucher
*VoucherApi* | [**forAccountNumber**](docs/Api/VoucherApi.md#foraccountnumber) | **GET** /ReceiptGuidance/forAccountNumber | Get guidance by account number
*VoucherApi* | [**forAllAccounts**](docs/Api/VoucherApi.md#forallaccounts) | **GET** /ReceiptGuidance/forAllAccounts | Get all account guides
*VoucherApi* | [**forExpense**](docs/Api/VoucherApi.md#forexpense) | **GET** /ReceiptGuidance/forExpense | Get guidance for expense accounts
*VoucherApi* | [**forRevenue**](docs/Api/VoucherApi.md#forrevenue) | **GET** /ReceiptGuidance/forRevenue | Get guidance for revenue accounts
*VoucherApi* | [**forTaxRule**](docs/Api/VoucherApi.md#fortaxrule) | **GET** /ReceiptGuidance/forTaxRule | Get guidance by Tax Rule
*VoucherApi* | [**getVoucherById**](docs/Api/VoucherApi.md#getvoucherbyid) | **GET** /Voucher/{voucherId} | Find voucher by ID
*VoucherApi* | [**getVouchers**](docs/Api/VoucherApi.md#getvouchers) | **GET** /Voucher | Retrieve vouchers
*VoucherApi* | [**updateVoucher**](docs/Api/VoucherApi.md#updatevoucher) | **PUT** /Voucher/{voucherId} | Update an existing voucher
*VoucherApi* | [**voucherEnshrine**](docs/Api/VoucherApi.md#voucherenshrine) | **PUT** /Voucher/{voucherId}/enshrine | Enshrine
*VoucherApi* | [**voucherFactorySaveVoucher**](docs/Api/VoucherApi.md#voucherfactorysavevoucher) | **POST** /Voucher/Factory/saveVoucher | Create a new voucher
*VoucherApi* | [**voucherResetToDraft**](docs/Api/VoucherApi.md#voucherresettodraft) | **PUT** /Voucher/{voucherId}/resetToDraft | Reset status to draft
*VoucherApi* | [**voucherResetToOpen**](docs/Api/VoucherApi.md#voucherresettoopen) | **PUT** /Voucher/{voucherId}/resetToOpen | Reset status to open
*VoucherApi* | [**voucherUploadFile**](docs/Api/VoucherApi.md#voucheruploadfile) | **POST** /Voucher/Factory/uploadTempFile | Upload voucher file
*VoucherPosApi* | [**getVoucherPositions**](docs/Api/VoucherPosApi.md#getvoucherpositions) | **GET** /VoucherPos | Retrieve voucher positions

## Models

- [AddTextTemplate201Response](docs/Model/AddTextTemplate201Response.md)
- [BookCreditNote200Response](docs/Model/BookCreditNote200Response.md)
- [BookCreditNote200ResponseCreditNote](docs/Model/BookCreditNote200ResponseCreditNote.md)
- [BookCreditNote200ResponseSevClient](docs/Model/BookCreditNote200ResponseSevClient.md)
- [BookCreditNoteRequest](docs/Model/BookCreditNoteRequest.md)
- [BookCreditNoteRequestCheckAccount](docs/Model/BookCreditNoteRequestCheckAccount.md)
- [BookCreditNoteRequestCheckAccountTransaction](docs/Model/BookCreditNoteRequestCheckAccountTransaction.md)
- [BookInvoice200Response](docs/Model/BookInvoice200Response.md)
- [BookInvoice200ResponseCreditNote](docs/Model/BookInvoice200ResponseCreditNote.md)
- [BookInvoice200ResponseSevClient](docs/Model/BookInvoice200ResponseSevClient.md)
- [BookInvoiceRequest](docs/Model/BookInvoiceRequest.md)
- [BookInvoiceRequestCheckAccountTransaction](docs/Model/BookInvoiceRequestCheckAccountTransaction.md)
- [BookVoucher200Response](docs/Model/BookVoucher200Response.md)
- [BookVoucher200ResponseCreditNote](docs/Model/BookVoucher200ResponseCreditNote.md)
- [BookVoucherRequest](docs/Model/BookVoucherRequest.md)
- [BookVoucherRequestCheckAccountTransaction](docs/Model/BookVoucherRequestCheckAccountTransaction.md)
- [BookkeepingSystemVersion200Response](docs/Model/BookkeepingSystemVersion200Response.md)
- [BookkeepingSystemVersion200ResponseObjects](docs/Model/BookkeepingSystemVersion200ResponseObjects.md)
- [CheckAccountTransactionEnshrine200Response](docs/Model/CheckAccountTransactionEnshrine200Response.md)
- [ContactCustomerNumberAvailabilityCheck200Response](docs/Model/ContactCustomerNumberAvailabilityCheck200Response.md)
- [CreateAccountingContact201Response](docs/Model/CreateAccountingContact201Response.md)
- [CreateClearingAccount](docs/Model/CreateClearingAccount.md)
- [CreateClearingAccount201Response](docs/Model/CreateClearingAccount201Response.md)
- [CreateClearingAccountResponse](docs/Model/CreateClearingAccountResponse.md)
- [CreateCommunicationWay201Response](docs/Model/CreateCommunicationWay201Response.md)
- [CreateContact201Response](docs/Model/CreateContact201Response.md)
- [CreateContactAddress201Response](docs/Model/CreateContactAddress201Response.md)
- [CreateContactField200Response](docs/Model/CreateContactField200Response.md)
- [CreateContactFieldSetting200Response](docs/Model/CreateContactFieldSetting200Response.md)
- [CreateCreditNoteFromInvoice201Response](docs/Model/CreateCreditNoteFromInvoice201Response.md)
- [CreateCreditNoteFromInvoice201ResponseObjects](docs/Model/CreateCreditNoteFromInvoice201ResponseObjects.md)
- [CreateCreditNoteFromInvoiceRequest](docs/Model/CreateCreditNoteFromInvoiceRequest.md)
- [CreateCreditNoteFromInvoiceRequestInvoice](docs/Model/CreateCreditNoteFromInvoiceRequestInvoice.md)
- [CreateCreditNoteFromVoucherRequest](docs/Model/CreateCreditNoteFromVoucherRequest.md)
- [CreateCreditNoteFromVoucherRequestVoucher](docs/Model/CreateCreditNoteFromVoucherRequestVoucher.md)
- [CreateFileImportAccount](docs/Model/CreateFileImportAccount.md)
- [CreateFileImportAccount201Response](docs/Model/CreateFileImportAccount201Response.md)
- [CreateFileImportAccountResponse](docs/Model/CreateFileImportAccountResponse.md)
- [CreateFileImportAccountResponseSevClient](docs/Model/CreateFileImportAccountResponseSevClient.md)
- [CreateInvoiceByFactory201Response](docs/Model/CreateInvoiceByFactory201Response.md)
- [CreateInvoiceReminderRequest](docs/Model/CreateInvoiceReminderRequest.md)
- [CreateInvoiceReminderRequestInvoice](docs/Model/CreateInvoiceReminderRequestInvoice.md)
- [CreateOrder201Response](docs/Model/CreateOrder201Response.md)
- [CreatePart201Response](docs/Model/CreatePart201Response.md)
- [CreateTag200Response](docs/Model/CreateTag200Response.md)
- [CreateTagRequest](docs/Model/CreateTagRequest.md)
- [CreateTagRequestObject](docs/Model/CreateTagRequestObject.md)
- [CreateTransaction201Response](docs/Model/CreateTransaction201Response.md)
- [CreatecreditNote201Response](docs/Model/CreatecreditNote201Response.md)
- [CreditNoteGetPdf200Response](docs/Model/CreditNoteGetPdf200Response.md)
- [CreditNoteGetPdf200ResponseObjects](docs/Model/CreditNoteGetPdf200ResponseObjects.md)
- [CreditNoteResetToDraft200Response](docs/Model/CreditNoteResetToDraft200Response.md)
- [CreditNoteResetToDraft200ResponseObjects](docs/Model/CreditNoteResetToDraft200ResponseObjects.md)
- [CreditNoteResetToOpen200Response](docs/Model/CreditNoteResetToOpen200Response.md)
- [CreditNoteResetToOpen200ResponseObjects](docs/Model/CreditNoteResetToOpen200ResponseObjects.md)
- [CreditNoteSendBy200Response](docs/Model/CreditNoteSendBy200Response.md)
- [CreditNoteSendByRequest](docs/Model/CreditNoteSendByRequest.md)
- [DeleteCheckAccount200Response](docs/Model/DeleteCheckAccount200Response.md)
- [ExportContact200Response](docs/Model/ExportContact200Response.md)
- [ExportContact200ResponseObjects](docs/Model/ExportContact200ResponseObjects.md)
- [ExportContactSevQueryParameter](docs/Model/ExportContactSevQueryParameter.md)
- [ExportContactSevQueryParameterFilter](docs/Model/ExportContactSevQueryParameterFilter.md)
- [ExportContactSevQueryParameterFilterCountry](docs/Model/ExportContactSevQueryParameterFilterCountry.md)
- [ExportCreditNote200Response](docs/Model/ExportCreditNote200Response.md)
- [ExportCreditNote200ResponseObjects](docs/Model/ExportCreditNote200ResponseObjects.md)
- [ExportCreditNoteSevQueryParameter](docs/Model/ExportCreditNoteSevQueryParameter.md)
- [ExportCreditNoteSevQueryParameterFilter](docs/Model/ExportCreditNoteSevQueryParameterFilter.md)
- [ExportCreditNoteSevQueryParameterFilterContact](docs/Model/ExportCreditNoteSevQueryParameterFilterContact.md)
- [ExportInvoice200Response](docs/Model/ExportInvoice200Response.md)
- [ExportInvoice200ResponseObjects](docs/Model/ExportInvoice200ResponseObjects.md)
- [ExportInvoiceSevQueryParameter](docs/Model/ExportInvoiceSevQueryParameter.md)
- [ExportInvoiceSevQueryParameterFilter](docs/Model/ExportInvoiceSevQueryParameterFilter.md)
- [ExportInvoiceSevQueryParameterFilterContact](docs/Model/ExportInvoiceSevQueryParameterFilterContact.md)
- [ExportInvoiceZip200Response](docs/Model/ExportInvoiceZip200Response.md)
- [ExportInvoiceZip200ResponseObjects](docs/Model/ExportInvoiceZip200ResponseObjects.md)
- [ExportTransactions200Response](docs/Model/ExportTransactions200Response.md)
- [ExportTransactions200ResponseObjects](docs/Model/ExportTransactions200ResponseObjects.md)
- [ExportTransactionsSevQueryParameter](docs/Model/ExportTransactionsSevQueryParameter.md)
- [ExportTransactionsSevQueryParameterFilter](docs/Model/ExportTransactionsSevQueryParameterFilter.md)
- [ExportTransactionsSevQueryParameterFilterCheckAccount](docs/Model/ExportTransactionsSevQueryParameterFilterCheckAccount.md)
- [ExportVoucher200Response](docs/Model/ExportVoucher200Response.md)
- [ExportVoucherSevQueryParameter](docs/Model/ExportVoucherSevQueryParameter.md)
- [ExportVoucherSevQueryParameterFilter](docs/Model/ExportVoucherSevQueryParameterFilter.md)
- [ExportVoucherSevQueryParameterFilterContact](docs/Model/ExportVoucherSevQueryParameterFilterContact.md)
- [ExportVoucherZip200Response](docs/Model/ExportVoucherZip200Response.md)
- [ExportVoucherZip200ResponseObjects](docs/Model/ExportVoucherZip200ResponseObjects.md)
- [ExportVoucherZipSevQueryParameter](docs/Model/ExportVoucherZipSevQueryParameter.md)
- [ExportVoucherZipSevQueryParameterFilter](docs/Model/ExportVoucherZipSevQueryParameterFilter.md)
- [ExportVoucherZipSevQueryParameterFilterContact](docs/Model/ExportVoucherZipSevQueryParameterFilterContact.md)
- [FindContactsByCustomFieldValue200Response](docs/Model/FindContactsByCustomFieldValue200Response.md)
- [ForAllAccounts200Response](docs/Model/ForAllAccounts200Response.md)
- [GetAccountingContact200Response](docs/Model/GetAccountingContact200Response.md)
- [GetAccountingContactById200Response](docs/Model/GetAccountingContactById200Response.md)
- [GetBalanceAtDate200Response](docs/Model/GetBalanceAtDate200Response.md)
- [GetCheckAccountById200Response](docs/Model/GetCheckAccountById200Response.md)
- [GetCheckAccountTransactionById200Response](docs/Model/GetCheckAccountTransactionById200Response.md)
- [GetCheckAccounts200Response](docs/Model/GetCheckAccounts200Response.md)
- [GetCommunicationWayById200Response](docs/Model/GetCommunicationWayById200Response.md)
- [GetCommunicationWayKeys200Response](docs/Model/GetCommunicationWayKeys200Response.md)
- [GetCommunicationWayKeys200ResponseObjectsInner](docs/Model/GetCommunicationWayKeys200ResponseObjectsInner.md)
- [GetCommunicationWays200Response](docs/Model/GetCommunicationWays200Response.md)
- [GetCommunicationWaysContactParameter](docs/Model/GetCommunicationWaysContactParameter.md)
- [GetContactAddressById200Response](docs/Model/GetContactAddressById200Response.md)
- [GetContactAddresses200Response](docs/Model/GetContactAddresses200Response.md)
- [GetContactFieldSettings200Response](docs/Model/GetContactFieldSettings200Response.md)
- [GetContactFields200Response](docs/Model/GetContactFields200Response.md)
- [GetContactFieldsById200Response](docs/Model/GetContactFieldsById200Response.md)
- [GetContactTabsItemCountById200Response](docs/Model/GetContactTabsItemCountById200Response.md)
- [GetContacts200Response](docs/Model/GetContacts200Response.md)
- [GetCreditNotes200Response](docs/Model/GetCreditNotes200Response.md)
- [GetDiscounts200Response](docs/Model/GetDiscounts200Response.md)
- [GetDocuments200Response](docs/Model/GetDocuments200Response.md)
- [GetDocumentsContactParameter](docs/Model/GetDocumentsContactParameter.md)
- [GetInvoiceById200Response](docs/Model/GetInvoiceById200Response.md)
- [GetInvoicePositionsById200Response](docs/Model/GetInvoicePositionsById200Response.md)
- [GetInvoices200Response](docs/Model/GetInvoices200Response.md)
- [GetInvoicesContactParameter](docs/Model/GetInvoicesContactParameter.md)
- [GetInvoicesPaymentMethodParameter](docs/Model/GetInvoicesPaymentMethodParameter.md)
- [GetLetterpapersWithThumb200Response](docs/Model/GetLetterpapersWithThumb200Response.md)
- [GetLetterpapersWithThumb200ResponseLetterpapersInner](docs/Model/GetLetterpapersWithThumb200ResponseLetterpapersInner.md)
- [GetNextCustomerNumber200Response](docs/Model/GetNextCustomerNumber200Response.md)
- [GetOpenInvoiceReminderDebit200Response](docs/Model/GetOpenInvoiceReminderDebit200Response.md)
- [GetOpenInvoiceReminderDebitInvoiceParameter](docs/Model/GetOpenInvoiceReminderDebitInvoiceParameter.md)
- [GetOrderById200Response](docs/Model/GetOrderById200Response.md)
- [GetOrderPositionById200Response](docs/Model/GetOrderPositionById200Response.md)
- [GetOrderPositionsById200Response](docs/Model/GetOrderPositionsById200Response.md)
- [GetOrders200Response](docs/Model/GetOrders200Response.md)
- [GetPartById200Response](docs/Model/GetPartById200Response.md)
- [GetParts200Response](docs/Model/GetParts200Response.md)
- [GetPlaceholder200Response](docs/Model/GetPlaceholder200Response.md)
- [GetReferenceCount200Response](docs/Model/GetReferenceCount200Response.md)
- [GetSevUserById200Response](docs/Model/GetSevUserById200Response.md)
- [GetSevUsers200Response](docs/Model/GetSevUsers200Response.md)
- [GetSevUsersIgnoreRolesParameter](docs/Model/GetSevUsersIgnoreRolesParameter.md)
- [GetTagById200Response](docs/Model/GetTagById200Response.md)
- [GetTagRelations200Response](docs/Model/GetTagRelations200Response.md)
- [GetTags200Response](docs/Model/GetTags200Response.md)
- [GetTemplates200Response](docs/Model/GetTemplates200Response.md)
- [GetTemplates200ResponseTemplatesInner](docs/Model/GetTemplates200ResponseTemplatesInner.md)
- [GetTextTemplate200Response](docs/Model/GetTextTemplate200Response.md)
- [GetTransactions200Response](docs/Model/GetTransactions200Response.md)
- [GetVoucherById200Response](docs/Model/GetVoucherById200Response.md)
- [GetVoucherPositions200Response](docs/Model/GetVoucherPositions200Response.md)
- [GetVouchers200Response](docs/Model/GetVouchers200Response.md)
- [GetcreditNoteById200Response](docs/Model/GetcreditNoteById200Response.md)
- [GetcreditNotePositions200Response](docs/Model/GetcreditNotePositions200Response.md)
- [InvoiceGetPdf200Response](docs/Model/InvoiceGetPdf200Response.md)
- [InvoiceGetPdf200ResponseObjects](docs/Model/InvoiceGetPdf200ResponseObjects.md)
- [InvoiceGetXml200Response](docs/Model/InvoiceGetXml200Response.md)
- [InvoiceRender201Response](docs/Model/InvoiceRender201Response.md)
- [InvoiceRender201ResponseParametersInner](docs/Model/InvoiceRender201ResponseParametersInner.md)
- [InvoiceRender201ResponseParametersInnerValuesInner](docs/Model/InvoiceRender201ResponseParametersInnerValuesInner.md)
- [InvoiceRenderRequest](docs/Model/InvoiceRenderRequest.md)
- [InvoiceResetToDraft200Response](docs/Model/InvoiceResetToDraft200Response.md)
- [InvoiceResetToDraft200ResponseObjects](docs/Model/InvoiceResetToDraft200ResponseObjects.md)
- [InvoiceResetToOpen200Response](docs/Model/InvoiceResetToOpen200Response.md)
- [InvoiceResetToOpen200ResponseObjects](docs/Model/InvoiceResetToOpen200ResponseObjects.md)
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
- [ModelChangeLayoutResponseMetadatenThumbsInner](docs/Model/ModelChangeLayoutResponseMetadatenThumbsInner.md)
- [ModelChangeLayoutResponseMetadatenThumbsInnerValuesInner](docs/Model/ModelChangeLayoutResponseMetadatenThumbsInnerValuesInner.md)
- [ModelCheckAccountResponse](docs/Model/ModelCheckAccountResponse.md)
- [ModelCheckAccountResponseSevClient](docs/Model/ModelCheckAccountResponseSevClient.md)
- [ModelCheckAccountTransaction](docs/Model/ModelCheckAccountTransaction.md)
- [ModelCheckAccountTransactionCheckAccount](docs/Model/ModelCheckAccountTransactionCheckAccount.md)
- [ModelCheckAccountTransactionLogResponse](docs/Model/ModelCheckAccountTransactionLogResponse.md)
- [ModelCheckAccountTransactionLogResponseObject](docs/Model/ModelCheckAccountTransactionLogResponseObject.md)
- [ModelCheckAccountTransactionLogResponseSevClient](docs/Model/ModelCheckAccountTransactionLogResponseSevClient.md)
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
- [ModelCommunicationWayResponseContactAnyOf](docs/Model/ModelCommunicationWayResponseContactAnyOf.md)
- [ModelCommunicationWayResponseKey](docs/Model/ModelCommunicationWayResponseKey.md)
- [ModelCommunicationWayResponseSevClient](docs/Model/ModelCommunicationWayResponseSevClient.md)
- [ModelCommunicationWaySevClient](docs/Model/ModelCommunicationWaySevClient.md)
- [ModelCommunicationWayUpdate](docs/Model/ModelCommunicationWayUpdate.md)
- [ModelCommunicationWayUpdateContact](docs/Model/ModelCommunicationWayUpdateContact.md)
- [ModelCommunicationWayUpdateKey](docs/Model/ModelCommunicationWayUpdateKey.md)
- [ModelContact](docs/Model/ModelContact.md)
- [ModelContactAddress](docs/Model/ModelContactAddress.md)
- [ModelContactAddressResponse](docs/Model/ModelContactAddressResponse.md)
- [ModelContactAddressResponseCategory](docs/Model/ModelContactAddressResponseCategory.md)
- [ModelContactAddressResponseContact](docs/Model/ModelContactAddressResponseContact.md)
- [ModelContactAddressResponseContactAnyOf](docs/Model/ModelContactAddressResponseContactAnyOf.md)
- [ModelContactAddressResponseCountry](docs/Model/ModelContactAddressResponseCountry.md)
- [ModelContactAddressResponseCountryAnyOf](docs/Model/ModelContactAddressResponseCountryAnyOf.md)
- [ModelContactAddressResponseSevClient](docs/Model/ModelContactAddressResponseSevClient.md)
- [ModelContactAddressUpdate](docs/Model/ModelContactAddressUpdate.md)
- [ModelContactAddressUpdateContact](docs/Model/ModelContactAddressUpdateContact.md)
- [ModelContactAddressUpdateCountry](docs/Model/ModelContactAddressUpdateCountry.md)
- [ModelContactCategory](docs/Model/ModelContactCategory.md)
- [ModelContactCustomField](docs/Model/ModelContactCustomField.md)
- [ModelContactCustomFieldContact](docs/Model/ModelContactCustomFieldContact.md)
- [ModelContactCustomFieldContactCustomFieldSetting](docs/Model/ModelContactCustomFieldContactCustomFieldSetting.md)
- [ModelContactCustomFieldResponse](docs/Model/ModelContactCustomFieldResponse.md)
- [ModelContactCustomFieldResponseContact](docs/Model/ModelContactCustomFieldResponseContact.md)
- [ModelContactCustomFieldResponseSevClient](docs/Model/ModelContactCustomFieldResponseSevClient.md)
- [ModelContactCustomFieldSetting](docs/Model/ModelContactCustomFieldSetting.md)
- [ModelContactCustomFieldSettingResponse](docs/Model/ModelContactCustomFieldSettingResponse.md)
- [ModelContactCustomFieldSettingResponseSevClient](docs/Model/ModelContactCustomFieldSettingResponseSevClient.md)
- [ModelContactCustomFieldSettingUpdate](docs/Model/ModelContactCustomFieldSettingUpdate.md)
- [ModelContactCustomFieldUpdate](docs/Model/ModelContactCustomFieldUpdate.md)
- [ModelContactCustomFieldUpdateContactCustomFieldSetting](docs/Model/ModelContactCustomFieldUpdateContactCustomFieldSetting.md)
- [ModelContactParent](docs/Model/ModelContactParent.md)
- [ModelContactParentAnyOf](docs/Model/ModelContactParentAnyOf.md)
- [ModelContactResponse](docs/Model/ModelContactResponse.md)
- [ModelContactResponseAddressesInner](docs/Model/ModelContactResponseAddressesInner.md)
- [ModelContactResponseAddressesInnerAnyOf](docs/Model/ModelContactResponseAddressesInnerAnyOf.md)
- [ModelContactResponseCategory](docs/Model/ModelContactResponseCategory.md)
- [ModelContactResponseCommunicationWaysInner](docs/Model/ModelContactResponseCommunicationWaysInner.md)
- [ModelContactResponseCommunicationWaysInnerAnyOf](docs/Model/ModelContactResponseCommunicationWaysInnerAnyOf.md)
- [ModelContactResponseParent](docs/Model/ModelContactResponseParent.md)
- [ModelContactResponseSevClient](docs/Model/ModelContactResponseSevClient.md)
- [ModelContactResponseTaxSet](docs/Model/ModelContactResponseTaxSet.md)
- [ModelContactTaxSet](docs/Model/ModelContactTaxSet.md)
- [ModelContactUpdate](docs/Model/ModelContactUpdate.md)
- [ModelContactUpdateCategory](docs/Model/ModelContactUpdateCategory.md)
- [ModelCreateInvoiceFromOrder](docs/Model/ModelCreateInvoiceFromOrder.md)
- [ModelCreateInvoiceFromOrderOrder](docs/Model/ModelCreateInvoiceFromOrderOrder.md)
- [ModelCreatePackingListFromOrder](docs/Model/ModelCreatePackingListFromOrder.md)
- [ModelCreditNote](docs/Model/ModelCreditNote.md)
- [ModelCreditNoteAddressCountry](docs/Model/ModelCreditNoteAddressCountry.md)
- [ModelCreditNoteContact](docs/Model/ModelCreditNoteContact.md)
- [ModelCreditNoteContactPerson](docs/Model/ModelCreditNoteContactPerson.md)
- [ModelCreditNoteCreateUser](docs/Model/ModelCreditNoteCreateUser.md)
- [ModelCreditNoteMailResponse](docs/Model/ModelCreditNoteMailResponse.md)
- [ModelCreditNoteMailResponseSevClient](docs/Model/ModelCreditNoteMailResponseSevClient.md)
- [ModelCreditNotePos](docs/Model/ModelCreditNotePos.md)
- [ModelCreditNotePosCreditNote](docs/Model/ModelCreditNotePosCreditNote.md)
- [ModelCreditNotePosPart](docs/Model/ModelCreditNotePosPart.md)
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
- [ModelCreditNoteResponseCreateUser](docs/Model/ModelCreditNoteResponseCreateUser.md)
- [ModelCreditNoteResponseSevClient](docs/Model/ModelCreditNoteResponseSevClient.md)
- [ModelCreditNoteResponseTaxRule](docs/Model/ModelCreditNoteResponseTaxRule.md)
- [ModelCreditNoteResponseTaxSet](docs/Model/ModelCreditNoteResponseTaxSet.md)
- [ModelCreditNoteSendByWithRender](docs/Model/ModelCreditNoteSendByWithRender.md)
- [ModelCreditNoteSevClient](docs/Model/ModelCreditNoteSevClient.md)
- [ModelCreditNoteTaxSet](docs/Model/ModelCreditNoteTaxSet.md)
- [ModelCreditNoteUpdate](docs/Model/ModelCreditNoteUpdate.md)
- [ModelCreditNoteUpdateContact](docs/Model/ModelCreditNoteUpdateContact.md)
- [ModelCreditNoteUpdateContactPerson](docs/Model/ModelCreditNoteUpdateContactPerson.md)
- [ModelDiscount](docs/Model/ModelDiscount.md)
- [ModelDiscountObject](docs/Model/ModelDiscountObject.md)
- [ModelDiscountsResponse](docs/Model/ModelDiscountsResponse.md)
- [ModelDocumentResponse](docs/Model/ModelDocumentResponse.md)
- [ModelDocumentResponseBaseObject](docs/Model/ModelDocumentResponseBaseObject.md)
- [ModelDocumentResponseCreateUser](docs/Model/ModelDocumentResponseCreateUser.md)
- [ModelDocumentResponseFolder](docs/Model/ModelDocumentResponseFolder.md)
- [ModelDocumentResponseObject](docs/Model/ModelDocumentResponseObject.md)
- [ModelDocumentResponseSevClient](docs/Model/ModelDocumentResponseSevClient.md)
- [ModelDocumentResponseUpdateUser](docs/Model/ModelDocumentResponseUpdateUser.md)
- [ModelEmail](docs/Model/ModelEmail.md)
- [ModelEmailOrder](docs/Model/ModelEmailOrder.md)
- [ModelEmailSevClient](docs/Model/ModelEmailSevClient.md)
- [ModelInvoice](docs/Model/ModelInvoice.md)
- [ModelInvoiceAddressCountry](docs/Model/ModelInvoiceAddressCountry.md)
- [ModelInvoiceContact](docs/Model/ModelInvoiceContact.md)
- [ModelInvoiceContactPerson](docs/Model/ModelInvoiceContactPerson.md)
- [ModelInvoiceOrigin](docs/Model/ModelInvoiceOrigin.md)
- [ModelInvoicePaymentMethod](docs/Model/ModelInvoicePaymentMethod.md)
- [ModelInvoicePos](docs/Model/ModelInvoicePos.md)
- [ModelInvoicePosInvoice](docs/Model/ModelInvoicePosInvoice.md)
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
- [ModelInvoiceResponseOrigin](docs/Model/ModelInvoiceResponseOrigin.md)
- [ModelInvoiceResponseSevClient](docs/Model/ModelInvoiceResponseSevClient.md)
- [ModelInvoiceResponseTaxRule](docs/Model/ModelInvoiceResponseTaxRule.md)
- [ModelInvoiceResponseTaxSet](docs/Model/ModelInvoiceResponseTaxSet.md)
- [ModelInvoiceSevClient](docs/Model/ModelInvoiceSevClient.md)
- [ModelInvoiceTaxSet](docs/Model/ModelInvoiceTaxSet.md)
- [ModelInvoiceUpdate](docs/Model/ModelInvoiceUpdate.md)
- [ModelInvoiceUpdateContact](docs/Model/ModelInvoiceUpdateContact.md)
- [ModelInvoiceUpdateCostCentre](docs/Model/ModelInvoiceUpdateCostCentre.md)
- [ModelInvoiceUpdateOrigin](docs/Model/ModelInvoiceUpdateOrigin.md)
- [ModelInvoiceUpdatePaymentMethod](docs/Model/ModelInvoiceUpdatePaymentMethod.md)
- [ModelInvoiceUpdateTaxRule](docs/Model/ModelInvoiceUpdateTaxRule.md)
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
- [ModelOrderPosResponsePart](docs/Model/ModelOrderPosResponsePart.md)
- [ModelOrderPosResponseSevClient](docs/Model/ModelOrderPosResponseSevClient.md)
- [ModelOrderPosResponseUnity](docs/Model/ModelOrderPosResponseUnity.md)
- [ModelOrderPosSevClient](docs/Model/ModelOrderPosSevClient.md)
- [ModelOrderPosUpdate](docs/Model/ModelOrderPosUpdate.md)
- [ModelOrderResponse](docs/Model/ModelOrderResponse.md)
- [ModelOrderResponseAddressCountry](docs/Model/ModelOrderResponseAddressCountry.md)
- [ModelOrderResponseContact](docs/Model/ModelOrderResponseContact.md)
- [ModelOrderResponseContactPerson](docs/Model/ModelOrderResponseContactPerson.md)
- [ModelOrderResponseCreateUser](docs/Model/ModelOrderResponseCreateUser.md)
- [ModelOrderResponseOrigin](docs/Model/ModelOrderResponseOrigin.md)
- [ModelOrderResponseSevClient](docs/Model/ModelOrderResponseSevClient.md)
- [ModelOrderResponseTaxSet](docs/Model/ModelOrderResponseTaxSet.md)
- [ModelOrderTaxSet](docs/Model/ModelOrderTaxSet.md)
- [ModelOrderUpdate](docs/Model/ModelOrderUpdate.md)
- [ModelOrderUpdateAddressCountry](docs/Model/ModelOrderUpdateAddressCountry.md)
- [ModelOrderUpdateContact](docs/Model/ModelOrderUpdateContact.md)
- [ModelOrderUpdateContactPerson](docs/Model/ModelOrderUpdateContactPerson.md)
- [ModelOrderUpdateOrigin](docs/Model/ModelOrderUpdateOrigin.md)
- [ModelOrderUpdateSevClient](docs/Model/ModelOrderUpdateSevClient.md)
- [ModelPart](docs/Model/ModelPart.md)
- [ModelPartCategory](docs/Model/ModelPartCategory.md)
- [ModelPartSevClient](docs/Model/ModelPartSevClient.md)
- [ModelPartUnity](docs/Model/ModelPartUnity.md)
- [ModelPartUpdate](docs/Model/ModelPartUpdate.md)
- [ModelPaymentMethodResponse](docs/Model/ModelPaymentMethodResponse.md)
- [ModelSevUserResponse](docs/Model/ModelSevUserResponse.md)
- [ModelStaticCountryResponse](docs/Model/ModelStaticCountryResponse.md)
- [ModelTagCreateResponse](docs/Model/ModelTagCreateResponse.md)
- [ModelTagCreateResponseTag](docs/Model/ModelTagCreateResponseTag.md)
- [ModelTagResponse](docs/Model/ModelTagResponse.md)
- [ModelTagResponseSevClient](docs/Model/ModelTagResponseSevClient.md)
- [ModelTextTemplate](docs/Model/ModelTextTemplate.md)
- [ModelTextTemplateResponse](docs/Model/ModelTextTemplateResponse.md)
- [ModelTextparserFetchDictionaryEntriesByTypeResponse](docs/Model/ModelTextparserFetchDictionaryEntriesByTypeResponse.md)
- [ModelTextparserFetchDictionaryEntriesByTypeResponseValueInner](docs/Model/ModelTextparserFetchDictionaryEntriesByTypeResponseValueInner.md)
- [ModelVoucher](docs/Model/ModelVoucher.md)
- [ModelVoucherCostCentre](docs/Model/ModelVoucherCostCentre.md)
- [ModelVoucherCreateUser](docs/Model/ModelVoucherCreateUser.md)
- [ModelVoucherDocument](docs/Model/ModelVoucherDocument.md)
- [ModelVoucherPos](docs/Model/ModelVoucherPos.md)
- [ModelVoucherPosAccountDatev](docs/Model/ModelVoucherPosAccountDatev.md)
- [ModelVoucherPosAccountingType](docs/Model/ModelVoucherPosAccountingType.md)
- [ModelVoucherPosEstimatedAccountingType](docs/Model/ModelVoucherPosEstimatedAccountingType.md)
- [ModelVoucherPosResponse](docs/Model/ModelVoucherPosResponse.md)
- [ModelVoucherPosResponseAccountDatev](docs/Model/ModelVoucherPosResponseAccountDatev.md)
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
- [ModelVoucherTaxRule](docs/Model/ModelVoucherTaxRule.md)
- [ModelVoucherTaxSet](docs/Model/ModelVoucherTaxSet.md)
- [ModelVoucherUpdate](docs/Model/ModelVoucherUpdate.md)
- [ModelVoucherUpdateTaxSet](docs/Model/ModelVoucherUpdateTaxSet.md)
- [OrderGetPdf200Response](docs/Model/OrderGetPdf200Response.md)
- [OrderGetPdf200ResponseObjects](docs/Model/OrderGetPdf200ResponseObjects.md)
- [OrderSendByRequest](docs/Model/OrderSendByRequest.md)
- [PartGetStock200Response](docs/Model/PartGetStock200Response.md)
- [ReceiptGuideDto](docs/Model/ReceiptGuideDto.md)
- [ReceiptGuideDtoAllowedTaxRulesInner](docs/Model/ReceiptGuideDtoAllowedTaxRulesInner.md)
- [ReportContact200Response](docs/Model/ReportContact200Response.md)
- [ReportContact200ResponseObjects](docs/Model/ReportContact200ResponseObjects.md)
- [ReportContactSevQueryParameter](docs/Model/ReportContactSevQueryParameter.md)
- [ReportInvoice200Response](docs/Model/ReportInvoice200Response.md)
- [ReportInvoice200ResponseObjects](docs/Model/ReportInvoice200ResponseObjects.md)
- [ReportInvoiceSevQueryParameter](docs/Model/ReportInvoiceSevQueryParameter.md)
- [ReportOrder200Response](docs/Model/ReportOrder200Response.md)
- [ReportOrder200ResponseObjects](docs/Model/ReportOrder200ResponseObjects.md)
- [ReportOrderSevQueryParameter](docs/Model/ReportOrderSevQueryParameter.md)
- [ReportOrderSevQueryParameterFilter](docs/Model/ReportOrderSevQueryParameterFilter.md)
- [ReportOrderSevQueryParameterFilterContact](docs/Model/ReportOrderSevQueryParameterFilterContact.md)
- [ReportVoucher200Response](docs/Model/ReportVoucher200Response.md)
- [ReportVoucher200ResponseObjects](docs/Model/ReportVoucher200ResponseObjects.md)
- [ReportVoucherSevQueryParameter](docs/Model/ReportVoucherSevQueryParameter.md)
- [SaveCreditNote](docs/Model/SaveCreditNote.md)
- [SaveCreditNoteCreditNotePosDelete](docs/Model/SaveCreditNoteCreditNotePosDelete.md)
- [SaveCreditNoteDiscountDelete](docs/Model/SaveCreditNoteDiscountDelete.md)
- [SaveCreditNoteDiscountSave](docs/Model/SaveCreditNoteDiscountSave.md)
- [SaveCreditNoteResponse](docs/Model/SaveCreditNoteResponse.md)
- [SaveInvoice](docs/Model/SaveInvoice.md)
- [SaveInvoiceDiscountDelete](docs/Model/SaveInvoiceDiscountDelete.md)
- [SaveInvoiceDiscountSaveInner](docs/Model/SaveInvoiceDiscountSaveInner.md)
- [SaveInvoiceInvoicePosDelete](docs/Model/SaveInvoiceInvoicePosDelete.md)
- [SaveInvoiceResponse](docs/Model/SaveInvoiceResponse.md)
- [SaveOrder](docs/Model/SaveOrder.md)
- [SaveOrderOrderPosDelete](docs/Model/SaveOrderOrderPosDelete.md)
- [SaveOrderResponse](docs/Model/SaveOrderResponse.md)
- [SaveVoucher](docs/Model/SaveVoucher.md)
- [SaveVoucherResponse](docs/Model/SaveVoucherResponse.md)
- [SaveVoucherVoucherPosDelete](docs/Model/SaveVoucherVoucherPosDelete.md)
- [SendCreditNoteByPrinting200Response](docs/Model/SendCreditNoteByPrinting200Response.md)
- [SendCreditNoteViaEMail201Response](docs/Model/SendCreditNoteViaEMail201Response.md)
- [SendCreditNoteViaEMailRequest](docs/Model/SendCreditNoteViaEMailRequest.md)
- [SendInvoiceViaEMail201Response](docs/Model/SendInvoiceViaEMail201Response.md)
- [SendInvoiceViaEMailRequest](docs/Model/SendInvoiceViaEMailRequest.md)
- [SendorderViaEMail201Response](docs/Model/SendorderViaEMail201Response.md)
- [SendorderViaEMailRequest](docs/Model/SendorderViaEMailRequest.md)
- [UpdateCheckAccount200Response](docs/Model/UpdateCheckAccount200Response.md)
- [UpdateContactFieldSetting200Response](docs/Model/UpdateContactFieldSetting200Response.md)
- [UpdateExportConfigRequest](docs/Model/UpdateExportConfigRequest.md)
- [UpdateInvoiceById200Response](docs/Model/UpdateInvoiceById200Response.md)
- [UpdateInvoiceTemplate200Response](docs/Model/UpdateInvoiceTemplate200Response.md)
- [UpdateOrder200Response](docs/Model/UpdateOrder200Response.md)
- [UpdateOrderPosition200Response](docs/Model/UpdateOrderPosition200Response.md)
- [UpdateStatusRequest](docs/Model/UpdateStatusRequest.md)
- [UpdateTag200Response](docs/Model/UpdateTag200Response.md)
- [UpdateTagRequest](docs/Model/UpdateTagRequest.md)
- [UpdateVoucher200Response](docs/Model/UpdateVoucher200Response.md)
- [ValidationError](docs/Model/ValidationError.md)
- [ValidationErrorError](docs/Model/ValidationErrorError.md)
- [VoucherFactorySaveVoucher201Response](docs/Model/VoucherFactorySaveVoucher201Response.md)
- [VoucherResetToOpen200Response](docs/Model/VoucherResetToOpen200Response.md)
- [VoucherResetToOpen200ResponseObjects](docs/Model/VoucherResetToOpen200ResponseObjects.md)
- [VoucherUploadFile201Response](docs/Model/VoucherUploadFile201Response.md)
- [VoucherUploadFile201ResponseObjects](docs/Model/VoucherUploadFile201ResponseObjects.md)
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
    - Generator version: `7.12.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
