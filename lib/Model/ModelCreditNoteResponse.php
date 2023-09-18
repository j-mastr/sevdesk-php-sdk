<?php
/**
 * ModelCreditNoteResponse
 *
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
 * <b>Contact:</b> To contact our support click <a href='https://landing.sevdesk.de/service-support-center-technik'>here</a><br><br>   # General information  Welcome to our API!<br>  sevDesk offers you the possibility of retrieving data using an interface, namely the sevDesk API, and making changes without having to use the web UI. The sevDesk interface is a REST-Full API. All sevDesk data and functions that are used in the web UI can also be controlled through the API.   # Cross-Origin Resource Sharing  This API features Cross-Origin Resource Sharing (CORS).<br>  It enables cross-domain communication from the browser.<br>  All responses have a wildcard same-origin which makes them completely public and accessible to everyone, including any code on any site.    # Embedding resources  When retrieving resources by using this API, you might encounter nested resources in the resources you requested.<br>  For example, an invoice always contains a contact, of which you can see the ID and the object name.<br>  This API gives you the possibility to embed these resources completely into the resources you originally requested.<br>  Taking our invoice example, this would mean, that you would not only see the ID and object name of a contact, but rather the complete contact resource.    To embed resources, all you need to do is to add the query parameter 'embed' to your GET request.<br>  As values, you can provide the name of the nested resource.<br>  Multiple nested resources are also possible by providing multiple names, separated by a comma.    # Authentication and Authorization  The sevDesk API uses a token authentication to authorize calls. For this purpose every sevDesk administrator has one API token, which is a <b>hexadecimal string</b> containing <b>32 characters</b>. The following clip shows where you can find the API token if this is your first time with our API.<br><br> <video src='OpenAPI/img/findingTheApiToken.mp4' controls width='640' height='360'> Ihr Browser kann dieses Video nicht wiedergeben.<br/> Dieses Video zeigt wie sie Ihr sevDesk API Token finden. </video> <br> The token will be needed in every request that you want to send and needs to be attached to the request url as a <b>Query Parameter</b><br> or provided as a value of an <b>Authorization Header</b>.<br> For security reasons, we suggest putting the API Token in the Authorization Header and not in the query string.<br> However, in the request examples in this documentation, we will keep it in the query string, as it is easier for you to copy them and try them yourself.<br> The following url is an example that shows where your token needs to be placed as a query parameter.<br> In this case, we used some random API token. <ul> <li><span>ht</span>tps://my.sevdesk.de/api/v1/Contact?token=<span style='color:red'>b7794de0085f5cd00560f160f290af38</span></li> </ul> The next example shows the token in the Authorization Header. <ul> <li>\"Authorization\" :<span style='color:red'>\"b7794de0085f5cd00560f160f290af38\"</span></li> </ul> The api tokens have an infinite lifetime and, in other words, exist as long as the sevDesk user exists.<br> For this reason, the user should <b>NEVER</b> be deleted.<br> If really necessary, it is advisable to save the api token as we will <b>NOT</b> be able to retrieve it afterwards!<br> It is also possible to generate a new API token, for example, if you want to prevent the usage of your sevDesk account by other people who got your current API token.<br> To achieve this, you just need to click on the \"generate new\" symbol to the right of your token and confirm it with your password.  # API News  To never miss API news and updates again, subscribe to our <b>free API newsletter</b> and get all relevant information to keep your sevDesk software running smoothly. To subscribe, simply click <a href = 'https://landing.sevdesk.de/api-newsletter'><b>here</b></a> and confirm the email address to which we may send all updates relevant to you.  # API Requests  In our case, REST API requests need to be build by combining the following components. <table> <tr> <th><b>Component</b></th> <th><b>Description</b></th> </tr> <tr> <td>HTTP-Methods</td> <td> <ul> <li>GET (retrieve a resource)</li> <li>POST (create a resource)</li> <li>PUT (update a resource)</li> <li>DELETE (delete a resource)</li> </ul> </td> </tr> <tr> <td>URL of the API</td> <td><span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span></td> </tr> <tr> <td>URI of the resource</td> <td>The resource to query.<br>For example contacts in sevDesk:<br><br> <span style='color:red'>/Contact</span><br><br> Which will result in the following complete URL:<br><br> <span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span> </td> </tr> <tr> <td>Query parameters</td> <td>Are attached by using the connectives <b>?</b> and <b>&</b> in the URL.<br></td> </tr> <tr> <td>Request headers</td> <td>Typical request headers are for example:<br> <div> <br> <ul> <li>Content-type</li> <li>Authorization</li> <li>Accept-Encoding</li> <li>User-Agent</li> <li>...</li> </ul> </div> </td> </tr> <tr> <td>Request body</td> <td>Mostly required in POST and PUT requests.<br> Often the request body contains json, in our case, it also accepts url-encoded data. </td> </tr> </table><br> <span style='color:red'>Note</span>: please pass a meaningful entry at the header \"User-Agent\". If the \"User-Agent\" is set meaningfully, we can offer better support in case of queries from customers.<br> An example how such a \"User-Agent\" can look like: \"Integration-name by abc\". <br><br> This is a sample request for retrieving existing contacts in sevDesk using curl:<br><br> <img src='OpenAPI/img/GETRequest.PNG' alt='Get Request' height='150'><br><br> As you can see, the request contains all the components mentioned above.<br> It's HTTP method is GET, it has a correct endpoint (<span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span>), query parameters like <b>token</b> and additional <b>header</b> information!<br><br> <b>Query Parameters</b><br><br> As you might have seen in the sample request above, there are several other parameters besides \"token\", located in the url.<br> Those are mostly optional but prove to be very useful for a lot of requests as they can limit, extend, sort or filter the data you will get as a response.<br><br> These are the three most used query parameter for the sevDesk API. <table> <tr> <th><b>Parameter</b></th> <th><b>Description</b></th> </tr> <tr> <td>limit</td> <td>Limits the number of entries that are returned.<br> Most useful in GET requests which will most likely deliver big sets of data like country or currency lists.<br> In this case, you can bypass the default limitation on returned entries by providing a high number. </td> </tr> <tr> <td>offset</td> <td>Specifies a certain offset for the data that will be returned.<br> As an example, you can specify \"offset=2\" if you want all entries except for the first two.</td> </tr> <tr> <td>embed</td> <td>Will extend some of the returned data.<br> A brief example can be found below.</td> </tr> </table> This is an example for the usage of the embed parameter.<br> The following first request will return all company contact entries in sevDesk up to a limit of 100 without any additional information and no offset.<br><br> <img src='OpenAPI/img/ContactQueryWithoutEmbed.PNG' width='900' height='850'><br><br> Now have a look at the category attribute located in the response.<br> Naturally, it just contains the id and the object name of the object but no further information.<br> We will now use the parameter embed with the value \"category\".<br><br> <img src='OpenAPI/img/ContactQueryWithEmbed.PNG' width='900' height='850'><br><br> As you can see, the category object is now extended and shows all the attributes and their corresponding values.<br><br> There are lot of other query parameters that can be used to filter the returned data for objects that match a certain pattern, however, those will not be mentioned here and instead can be found at the detail documentation of the most used API endpoints like contact, invoice or voucher.<br><br> <b>Request Headers</b><br><br> The HTTP request (response) headers allow the client as well as the server to pass additional information with the request.<br> They transfer the parameters and arguments which are important for transmitting data over HTTP.<br> Three headers which are useful / necessary when using the sevDesk API are \"Authorization, \"Accept\" and \"Content-type\".<br> Underneath is a brief description of why and how they should be used.<br><br> <b>Authorization</b><br><br> Can be used if you want to provide your API token in the header instead of having it in the url. <ul> <li>Authorization:<span style='color:red'>yourApiToken</span></li> </ul> <b>Accept</b><br><br> Specifies the format of the response.<br> Required for operations with a response body. <ul> <li>Accept:application/<span style='color:red'>format</span> </li> </ul> In our case, <code><span style='color:red'>format</span></code> could be replaced with <code>json</code> or <code>xml</code><br><br> <b>Content-type</b><br><br> Specifies which format is used in the request.<br> Is required for operations with a request body. <ul> <li>Content-type:application/<span style='color:red'>format</span></li> </ul> In our case,<code><span style='color:red'>format</span></code>could be replaced with <code>json</code> or <code>x-www-form-urlencoded</code> <br><br><b>API Responses</b><br><br> HTTP status codes<br> When calling the sevDesk API it is very likely that you will get a HTTP status code in the response.<br> Some API calls will also return JSON response bodies which will contain information about the resource.<br> Each status code which is returned will either be a <b>success</b> code or an <b>error</b> code.<br><br> Success codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>200 OK</code></td> <td>The request was successful</td> </tr> <tr> <td><code>201 Created</code></td> <td>Most likely to be found in the response of a <b>POST</b> request.<br> This code indicates that the desired resource was successfully created.</td> </tr> </table> <br>Error codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>400 Bad request</code></td> <td>The request you sent is most likely syntactically incorrect.<br> You should check if the parameters in the request body or the url are correct.</td> </tr> <tr> <td><code>401 Unauthorized</code></td> <td>The authentication failed.<br> Most likely caused by a missing or wrong API token.</td> </tr> <tr> <td><code>403 Forbidden</code></td> <td>You do not have the permission the access the resource which is requested.</td> </tr> <tr> <td><code>404 Not found</code></td> <td>The resource you specified does not exist.</td> </tr> <tr> <td><code>500 Internal server error</code></td> <td>An internal server error has occurred.<br> Normally this means that something went wrong on our side.<br> However, sometimes this error will appear if we missed to catch an error which is normally a 400 status code! </td> </tr> </table>  # Your First Request  After reading the introduction to our API, you should now be able to make your first call.<br> For testing our API, we would always recommend to create a trial account for sevDesk to prevent unwanted changes to your main account.<br> A trial account will be in the highest tariff (materials management), so every sevDesk function can be tested! <br><br>To start testing we would recommend one of the following tools: <ul> <li><a href='https://www.getpostman.com/'>Postman</a></li> <li><a href='https://curl.haxx.se/download.html'>cURL</a></li> </ul> This example will illustrate your first request, which is creating a new Contact in sevDesk.<br> <ol> <li>Download <a href='https://www.getpostman.com/'><b>Postman</b></a> for your desired system and start the application</li> <li>Enter <span><b>ht</span>tps://my.sevdesk.de/api/v1/Contact</b> as the url</li> <li>Use the connective <b>?</b> to append <b>token=</b> to the end of the url, or create an authorization header. Insert your API token as the value</li> <li>For this test, select <b>POST</b> as the HTTP method</li> <li>Go to <b>Headers</b> and enter the key-value pair <b>Content-type</b> + <b>application/x-www-form-urlencoded</b><br> As an alternative, you can just go to <b>Body</b> and select <b>x-www-form-urlencoded</b></li> <li>Now go to <b>Body</b> (if you are not there yet) and enter the key-value pairs as shown in the following picture<br><br> <img src='OpenAPI/img/FirstRequestPostman.PNG' width='900'><br><br></li> <li>Click on <b>Send</b>. Your response should now look like this:<br><br> <img src='OpenAPI/img/FirstRequestResponse.PNG' width='900'></li> </ol> As you can see, a successful response in this case returns a JSON-formatted response body containing the contact you just created.<br> For keeping it simple, this was only a minimal example of creating a contact.<br> There are however numerous combinations of parameters that you can provide which add information to your contact.
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Itsmind\Sevdesk\Model;

use \ArrayAccess;
use \Itsmind\Sevdesk\ObjectSerializer;

/**
 * ModelCreditNoteResponse Class Doc Comment
 *
 * @category Class
 * @description creditNote model
 * @package  Itsmind\Sevdesk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ModelCreditNoteResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Model_creditNoteResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'object_name' => 'string',
        'create' => '\DateTime',
        'update' => '\DateTime',
        'credit_note_number' => 'string',
        'contact' => '\Itsmind\Sevdesk\Model\ModelCreditNoteResponseContact',
        'credit_note_date' => '\DateTime',
        'status' => 'string',
        'header' => 'string',
        'head_text' => 'string',
        'foot_text' => 'string',
        'address_country' => '\Itsmind\Sevdesk\Model\ModelCreditNoteResponseAddressCountry',
        'create_user' => '\Itsmind\Sevdesk\Model\ModelInvoiceResponseCreateUser',
        'sev_client' => '\Itsmind\Sevdesk\Model\ModelCreditNoteResponseSevClient',
        'delivery_terms' => 'string',
        'delivery_date' => '\DateTime',
        'payment_terms' => 'string',
        'version' => 'string',
        'small_settlement' => 'bool',
        'contact_person' => '\Itsmind\Sevdesk\Model\ModelCreditNoteResponseContactPerson',
        'tax_rate' => 'string',
        'tax_set' => '\Itsmind\Sevdesk\Model\ModelCreditNoteResponseTaxSet',
        'tax_text' => 'string',
        'tax_type' => 'string',
        'credit_note_type' => 'string',
        'send_date' => '\DateTime',
        'address' => 'string',
        'currency' => 'string',
        'sum_net' => 'string',
        'sum_tax' => 'string',
        'sum_gross' => 'string',
        'sum_discounts' => 'string',
        'sum_net_foreign_currency' => 'string',
        'sum_tax_foreign_currency' => 'string',
        'sum_gross_foreign_currency' => 'string',
        'sum_discounts_foreign_currency' => 'string',
        'customer_internal_note' => 'string',
        'show_net' => 'bool',
        'send_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'object_name' => null,
        'create' => 'date-time',
        'update' => 'date-time',
        'credit_note_number' => null,
        'contact' => null,
        'credit_note_date' => 'date-time',
        'status' => null,
        'header' => null,
        'head_text' => null,
        'foot_text' => null,
        'address_country' => null,
        'create_user' => null,
        'sev_client' => null,
        'delivery_terms' => null,
        'delivery_date' => 'date-time',
        'payment_terms' => null,
        'version' => null,
        'small_settlement' => null,
        'contact_person' => null,
        'tax_rate' => null,
        'tax_set' => null,
        'tax_text' => null,
        'tax_type' => null,
        'credit_note_type' => null,
        'send_date' => 'date-time',
        'address' => null,
        'currency' => null,
        'sum_net' => null,
        'sum_tax' => null,
        'sum_gross' => null,
        'sum_discounts' => null,
        'sum_net_foreign_currency' => null,
        'sum_tax_foreign_currency' => null,
        'sum_gross_foreign_currency' => null,
        'sum_discounts_foreign_currency' => null,
        'customer_internal_note' => null,
        'show_net' => null,
        'send_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'object_name' => false,
		'create' => false,
		'update' => false,
		'credit_note_number' => true,
		'contact' => true,
		'credit_note_date' => true,
		'status' => false,
		'header' => true,
		'head_text' => true,
		'foot_text' => true,
		'address_country' => true,
		'create_user' => false,
		'sev_client' => false,
		'delivery_terms' => true,
		'delivery_date' => false,
		'payment_terms' => true,
		'version' => true,
		'small_settlement' => true,
		'contact_person' => true,
		'tax_rate' => true,
		'tax_set' => true,
		'tax_text' => true,
		'tax_type' => true,
		'credit_note_type' => true,
		'send_date' => true,
		'address' => true,
		'currency' => true,
		'sum_net' => false,
		'sum_tax' => false,
		'sum_gross' => false,
		'sum_discounts' => false,
		'sum_net_foreign_currency' => false,
		'sum_tax_foreign_currency' => false,
		'sum_gross_foreign_currency' => false,
		'sum_discounts_foreign_currency' => false,
		'customer_internal_note' => true,
		'show_net' => false,
		'send_type' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'object_name' => 'objectName',
        'create' => 'create',
        'update' => 'update',
        'credit_note_number' => 'creditNoteNumber',
        'contact' => 'contact',
        'credit_note_date' => 'creditNoteDate',
        'status' => 'status',
        'header' => 'header',
        'head_text' => 'headText',
        'foot_text' => 'footText',
        'address_country' => 'addressCountry',
        'create_user' => 'createUser',
        'sev_client' => 'sevClient',
        'delivery_terms' => 'deliveryTerms',
        'delivery_date' => 'deliveryDate',
        'payment_terms' => 'paymentTerms',
        'version' => 'version',
        'small_settlement' => 'smallSettlement',
        'contact_person' => 'contactPerson',
        'tax_rate' => 'taxRate',
        'tax_set' => 'taxSet',
        'tax_text' => 'taxText',
        'tax_type' => 'taxType',
        'credit_note_type' => 'creditNoteType',
        'send_date' => 'sendDate',
        'address' => 'address',
        'currency' => 'currency',
        'sum_net' => 'sumNet',
        'sum_tax' => 'sumTax',
        'sum_gross' => 'sumGross',
        'sum_discounts' => 'sumDiscounts',
        'sum_net_foreign_currency' => 'sumNetForeignCurrency',
        'sum_tax_foreign_currency' => 'sumTaxForeignCurrency',
        'sum_gross_foreign_currency' => 'sumGrossForeignCurrency',
        'sum_discounts_foreign_currency' => 'sumDiscountsForeignCurrency',
        'customer_internal_note' => 'customerInternalNote',
        'show_net' => 'showNet',
        'send_type' => 'sendType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'object_name' => 'setObjectName',
        'create' => 'setCreate',
        'update' => 'setUpdate',
        'credit_note_number' => 'setCreditNoteNumber',
        'contact' => 'setContact',
        'credit_note_date' => 'setCreditNoteDate',
        'status' => 'setStatus',
        'header' => 'setHeader',
        'head_text' => 'setHeadText',
        'foot_text' => 'setFootText',
        'address_country' => 'setAddressCountry',
        'create_user' => 'setCreateUser',
        'sev_client' => 'setSevClient',
        'delivery_terms' => 'setDeliveryTerms',
        'delivery_date' => 'setDeliveryDate',
        'payment_terms' => 'setPaymentTerms',
        'version' => 'setVersion',
        'small_settlement' => 'setSmallSettlement',
        'contact_person' => 'setContactPerson',
        'tax_rate' => 'setTaxRate',
        'tax_set' => 'setTaxSet',
        'tax_text' => 'setTaxText',
        'tax_type' => 'setTaxType',
        'credit_note_type' => 'setCreditNoteType',
        'send_date' => 'setSendDate',
        'address' => 'setAddress',
        'currency' => 'setCurrency',
        'sum_net' => 'setSumNet',
        'sum_tax' => 'setSumTax',
        'sum_gross' => 'setSumGross',
        'sum_discounts' => 'setSumDiscounts',
        'sum_net_foreign_currency' => 'setSumNetForeignCurrency',
        'sum_tax_foreign_currency' => 'setSumTaxForeignCurrency',
        'sum_gross_foreign_currency' => 'setSumGrossForeignCurrency',
        'sum_discounts_foreign_currency' => 'setSumDiscountsForeignCurrency',
        'customer_internal_note' => 'setCustomerInternalNote',
        'show_net' => 'setShowNet',
        'send_type' => 'setSendType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'object_name' => 'getObjectName',
        'create' => 'getCreate',
        'update' => 'getUpdate',
        'credit_note_number' => 'getCreditNoteNumber',
        'contact' => 'getContact',
        'credit_note_date' => 'getCreditNoteDate',
        'status' => 'getStatus',
        'header' => 'getHeader',
        'head_text' => 'getHeadText',
        'foot_text' => 'getFootText',
        'address_country' => 'getAddressCountry',
        'create_user' => 'getCreateUser',
        'sev_client' => 'getSevClient',
        'delivery_terms' => 'getDeliveryTerms',
        'delivery_date' => 'getDeliveryDate',
        'payment_terms' => 'getPaymentTerms',
        'version' => 'getVersion',
        'small_settlement' => 'getSmallSettlement',
        'contact_person' => 'getContactPerson',
        'tax_rate' => 'getTaxRate',
        'tax_set' => 'getTaxSet',
        'tax_text' => 'getTaxText',
        'tax_type' => 'getTaxType',
        'credit_note_type' => 'getCreditNoteType',
        'send_date' => 'getSendDate',
        'address' => 'getAddress',
        'currency' => 'getCurrency',
        'sum_net' => 'getSumNet',
        'sum_tax' => 'getSumTax',
        'sum_gross' => 'getSumGross',
        'sum_discounts' => 'getSumDiscounts',
        'sum_net_foreign_currency' => 'getSumNetForeignCurrency',
        'sum_tax_foreign_currency' => 'getSumTaxForeignCurrency',
        'sum_gross_foreign_currency' => 'getSumGrossForeignCurrency',
        'sum_discounts_foreign_currency' => 'getSumDiscountsForeignCurrency',
        'customer_internal_note' => 'getCustomerInternalNote',
        'show_net' => 'getShowNet',
        'send_type' => 'getSendType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const STATUS__100 = '100';
    public const STATUS__200 = '200';
    public const STATUS__1000 = '1000';
    public const SEND_TYPE_VPR = 'VPR';
    public const SEND_TYPE_VPDF = 'VPDF';
    public const SEND_TYPE_VM = 'VM';
    public const SEND_TYPE_VP = 'VP';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS__100,
            self::STATUS__200,
            self::STATUS__1000,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSendTypeAllowableValues()
    {
        return [
            self::SEND_TYPE_VPR,
            self::SEND_TYPE_VPDF,
            self::SEND_TYPE_VM,
            self::SEND_TYPE_VP,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('object_name', $data ?? [], null);
        $this->setIfExists('create', $data ?? [], null);
        $this->setIfExists('update', $data ?? [], null);
        $this->setIfExists('credit_note_number', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('credit_note_date', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('header', $data ?? [], null);
        $this->setIfExists('head_text', $data ?? [], null);
        $this->setIfExists('foot_text', $data ?? [], null);
        $this->setIfExists('address_country', $data ?? [], null);
        $this->setIfExists('create_user', $data ?? [], null);
        $this->setIfExists('sev_client', $data ?? [], null);
        $this->setIfExists('delivery_terms', $data ?? [], null);
        $this->setIfExists('delivery_date', $data ?? [], null);
        $this->setIfExists('payment_terms', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('small_settlement', $data ?? [], null);
        $this->setIfExists('contact_person', $data ?? [], null);
        $this->setIfExists('tax_rate', $data ?? [], null);
        $this->setIfExists('tax_set', $data ?? [], null);
        $this->setIfExists('tax_text', $data ?? [], null);
        $this->setIfExists('tax_type', $data ?? [], null);
        $this->setIfExists('credit_note_type', $data ?? [], null);
        $this->setIfExists('send_date', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('sum_net', $data ?? [], null);
        $this->setIfExists('sum_tax', $data ?? [], null);
        $this->setIfExists('sum_gross', $data ?? [], null);
        $this->setIfExists('sum_discounts', $data ?? [], null);
        $this->setIfExists('sum_net_foreign_currency', $data ?? [], null);
        $this->setIfExists('sum_tax_foreign_currency', $data ?? [], null);
        $this->setIfExists('sum_gross_foreign_currency', $data ?? [], null);
        $this->setIfExists('sum_discounts_foreign_currency', $data ?? [], null);
        $this->setIfExists('customer_internal_note', $data ?? [], null);
        $this->setIfExists('show_net', $data ?? [], null);
        $this->setIfExists('send_type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSendTypeAllowableValues();
        if (!is_null($this->container['send_type']) && !in_array($this->container['send_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'send_type', must be one of '%s'",
                $this->container['send_type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The creditNote id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object_name
     *
     * @return string|null
     */
    public function getObjectName()
    {
        return $this->container['object_name'];
    }

    /**
     * Sets object_name
     *
     * @param string|null $object_name The creditNote object name
     *
     * @return self
     */
    public function setObjectName($object_name)
    {
        if (is_null($object_name)) {
            throw new \InvalidArgumentException('non-nullable object_name cannot be null');
        }
        $this->container['object_name'] = $object_name;

        return $this;
    }

    /**
     * Gets create
     *
     * @return \DateTime|null
     */
    public function getCreate()
    {
        return $this->container['create'];
    }

    /**
     * Sets create
     *
     * @param \DateTime|null $create Date of creditNote creation
     *
     * @return self
     */
    public function setCreate($create)
    {
        if (is_null($create)) {
            throw new \InvalidArgumentException('non-nullable create cannot be null');
        }
        $this->container['create'] = $create;

        return $this;
    }

    /**
     * Gets update
     *
     * @return \DateTime|null
     */
    public function getUpdate()
    {
        return $this->container['update'];
    }

    /**
     * Sets update
     *
     * @param \DateTime|null $update Date of last creditNote update
     *
     * @return self
     */
    public function setUpdate($update)
    {
        if (is_null($update)) {
            throw new \InvalidArgumentException('non-nullable update cannot be null');
        }
        $this->container['update'] = $update;

        return $this;
    }

    /**
     * Gets credit_note_number
     *
     * @return string|null
     */
    public function getCreditNoteNumber()
    {
        return $this->container['credit_note_number'];
    }

    /**
     * Sets credit_note_number
     *
     * @param string|null $credit_note_number The creditNote number
     *
     * @return self
     */
    public function setCreditNoteNumber($credit_note_number)
    {
        if (is_null($credit_note_number)) {
            array_push($this->openAPINullablesSetToNull, 'credit_note_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('credit_note_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['credit_note_number'] = $credit_note_number;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Itsmind\Sevdesk\Model\ModelCreditNoteResponseContact|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Itsmind\Sevdesk\Model\ModelCreditNoteResponseContact|null $contact contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        if (is_null($contact)) {
            array_push($this->openAPINullablesSetToNull, 'contact');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contact', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets credit_note_date
     *
     * @return \DateTime|null
     */
    public function getCreditNoteDate()
    {
        return $this->container['credit_note_date'];
    }

    /**
     * Sets credit_note_date
     *
     * @param \DateTime|null $credit_note_date Needs to be provided as timestamp or dd.mm.yyyy
     *
     * @return self
     */
    public function setCreditNoteDate($credit_note_date)
    {
        if (is_null($credit_note_date)) {
            array_push($this->openAPINullablesSetToNull, 'credit_note_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('credit_note_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['credit_note_date'] = $credit_note_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Please have a look in       <a href='https://api.sevdesk.de/#section/Types-and-status-of-credit-notes'>status of credit note</a>      to see what the different status codes mean
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets header
     *
     * @return string|null
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param string|null $header Normally consist of prefix plus the creditNote number
     *
     * @return self
     */
    public function setHeader($header)
    {
        if (is_null($header)) {
            array_push($this->openAPINullablesSetToNull, 'header');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('header', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets head_text
     *
     * @return string|null
     */
    public function getHeadText()
    {
        return $this->container['head_text'];
    }

    /**
     * Sets head_text
     *
     * @param string|null $head_text Certain html tags can be used here to format your text
     *
     * @return self
     */
    public function setHeadText($head_text)
    {
        if (is_null($head_text)) {
            array_push($this->openAPINullablesSetToNull, 'head_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('head_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['head_text'] = $head_text;

        return $this;
    }

    /**
     * Gets foot_text
     *
     * @return string|null
     */
    public function getFootText()
    {
        return $this->container['foot_text'];
    }

    /**
     * Sets foot_text
     *
     * @param string|null $foot_text Certain html tags can be used here to format your text
     *
     * @return self
     */
    public function setFootText($foot_text)
    {
        if (is_null($foot_text)) {
            array_push($this->openAPINullablesSetToNull, 'foot_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('foot_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['foot_text'] = $foot_text;

        return $this;
    }

    /**
     * Gets address_country
     *
     * @return \Itsmind\Sevdesk\Model\ModelCreditNoteResponseAddressCountry|null
     */
    public function getAddressCountry()
    {
        return $this->container['address_country'];
    }

    /**
     * Sets address_country
     *
     * @param \Itsmind\Sevdesk\Model\ModelCreditNoteResponseAddressCountry|null $address_country address_country
     *
     * @return self
     */
    public function setAddressCountry($address_country)
    {
        if (is_null($address_country)) {
            array_push($this->openAPINullablesSetToNull, 'address_country');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_country', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_country'] = $address_country;

        return $this;
    }

    /**
     * Gets create_user
     *
     * @return \Itsmind\Sevdesk\Model\ModelInvoiceResponseCreateUser|null
     */
    public function getCreateUser()
    {
        return $this->container['create_user'];
    }

    /**
     * Sets create_user
     *
     * @param \Itsmind\Sevdesk\Model\ModelInvoiceResponseCreateUser|null $create_user create_user
     *
     * @return self
     */
    public function setCreateUser($create_user)
    {
        if (is_null($create_user)) {
            throw new \InvalidArgumentException('non-nullable create_user cannot be null');
        }
        $this->container['create_user'] = $create_user;

        return $this;
    }

    /**
     * Gets sev_client
     *
     * @return \Itsmind\Sevdesk\Model\ModelCreditNoteResponseSevClient|null
     */
    public function getSevClient()
    {
        return $this->container['sev_client'];
    }

    /**
     * Sets sev_client
     *
     * @param \Itsmind\Sevdesk\Model\ModelCreditNoteResponseSevClient|null $sev_client sev_client
     *
     * @return self
     */
    public function setSevClient($sev_client)
    {
        if (is_null($sev_client)) {
            throw new \InvalidArgumentException('non-nullable sev_client cannot be null');
        }
        $this->container['sev_client'] = $sev_client;

        return $this;
    }

    /**
     * Gets delivery_terms
     *
     * @return string|null
     */
    public function getDeliveryTerms()
    {
        return $this->container['delivery_terms'];
    }

    /**
     * Sets delivery_terms
     *
     * @param string|null $delivery_terms Delivery terms of the creditNote
     *
     * @return self
     */
    public function setDeliveryTerms($delivery_terms)
    {
        if (is_null($delivery_terms)) {
            array_push($this->openAPINullablesSetToNull, 'delivery_terms');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delivery_terms', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['delivery_terms'] = $delivery_terms;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return \DateTime|null
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param \DateTime|null $delivery_date Timestamp. This can also be a date range if you also use the attribute deliveryDateUntil
     *
     * @return self
     */
    public function setDeliveryDate($delivery_date)
    {
        if (is_null($delivery_date)) {
            throw new \InvalidArgumentException('non-nullable delivery_date cannot be null');
        }
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets payment_terms
     *
     * @return string|null
     */
    public function getPaymentTerms()
    {
        return $this->container['payment_terms'];
    }

    /**
     * Sets payment_terms
     *
     * @param string|null $payment_terms Payment terms of the creditNote
     *
     * @return self
     */
    public function setPaymentTerms($payment_terms)
    {
        if (is_null($payment_terms)) {
            array_push($this->openAPINullablesSetToNull, 'payment_terms');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_terms', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_terms'] = $payment_terms;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version Version of the creditNote.<br>      Can be used if you have multiple drafts for the same creditNote.<br>      Should start with 0
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            array_push($this->openAPINullablesSetToNull, 'version');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('version', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets small_settlement
     *
     * @return bool|null
     */
    public function getSmallSettlement()
    {
        return $this->container['small_settlement'];
    }

    /**
     * Sets small_settlement
     *
     * @param bool|null $small_settlement Defines if the client uses the small settlement scheme.      If yes, the creditNote must not contain any vat
     *
     * @return self
     */
    public function setSmallSettlement($small_settlement)
    {
        if (is_null($small_settlement)) {
            array_push($this->openAPINullablesSetToNull, 'small_settlement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('small_settlement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['small_settlement'] = $small_settlement;

        return $this;
    }

    /**
     * Gets contact_person
     *
     * @return \Itsmind\Sevdesk\Model\ModelCreditNoteResponseContactPerson|null
     */
    public function getContactPerson()
    {
        return $this->container['contact_person'];
    }

    /**
     * Sets contact_person
     *
     * @param \Itsmind\Sevdesk\Model\ModelCreditNoteResponseContactPerson|null $contact_person contact_person
     *
     * @return self
     */
    public function setContactPerson($contact_person)
    {
        if (is_null($contact_person)) {
            array_push($this->openAPINullablesSetToNull, 'contact_person');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contact_person', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contact_person'] = $contact_person;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return string|null
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param string|null $tax_rate Is overwritten by creditNote position tax rates
     *
     * @return self
     */
    public function setTaxRate($tax_rate)
    {
        if (is_null($tax_rate)) {
            array_push($this->openAPINullablesSetToNull, 'tax_rate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tax_rate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tax_set
     *
     * @return \Itsmind\Sevdesk\Model\ModelCreditNoteResponseTaxSet|null
     */
    public function getTaxSet()
    {
        return $this->container['tax_set'];
    }

    /**
     * Sets tax_set
     *
     * @param \Itsmind\Sevdesk\Model\ModelCreditNoteResponseTaxSet|null $tax_set tax_set
     *
     * @return self
     */
    public function setTaxSet($tax_set)
    {
        if (is_null($tax_set)) {
            array_push($this->openAPINullablesSetToNull, 'tax_set');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tax_set', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tax_set'] = $tax_set;

        return $this;
    }

    /**
     * Gets tax_text
     *
     * @return string|null
     */
    public function getTaxText()
    {
        return $this->container['tax_text'];
    }

    /**
     * Sets tax_text
     *
     * @param string|null $tax_text A common tax text would be 'Umsatzsteuer 19%'
     *
     * @return self
     */
    public function setTaxText($tax_text)
    {
        if (is_null($tax_text)) {
            array_push($this->openAPINullablesSetToNull, 'tax_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tax_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tax_text'] = $tax_text;

        return $this;
    }

    /**
     * Gets tax_type
     *
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string|null $tax_type Tax type of the creditNote. There are four tax types: 1. default - Umsatzsteuer ausweisen 2. eu - Steuerfreie innergemeinschaftliche Lieferung (Europäische Union) 3. noteu - Steuerschuldnerschaft des Leistungsempfängers (außerhalb EU, z. B. Schweiz) 4. custom - Using custom tax set 5. ss - Not subject to VAT according to §19 1 UStG Tax rates are heavily connected to the tax type used.
     *
     * @return self
     */
    public function setTaxType($tax_type)
    {
        if (is_null($tax_type)) {
            array_push($this->openAPINullablesSetToNull, 'tax_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tax_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets credit_note_type
     *
     * @return string|null
     */
    public function getCreditNoteType()
    {
        return $this->container['credit_note_type'];
    }

    /**
     * Sets credit_note_type
     *
     * @param string|null $credit_note_type Type of the creditNote. For more information on the different types, check      <a href='https://api.sevdesk.de/#section/Types-and-status-of-credit-notes'>this</a>  .
     *
     * @return self
     */
    public function setCreditNoteType($credit_note_type)
    {
        if (is_null($credit_note_type)) {
            array_push($this->openAPINullablesSetToNull, 'credit_note_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('credit_note_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['credit_note_type'] = $credit_note_type;

        return $this;
    }

    /**
     * Gets send_date
     *
     * @return \DateTime|null
     */
    public function getSendDate()
    {
        return $this->container['send_date'];
    }

    /**
     * Sets send_date
     *
     * @param \DateTime|null $send_date The date the creditNote was sent to the customer
     *
     * @return self
     */
    public function setSendDate($send_date)
    {
        if (is_null($send_date)) {
            array_push($this->openAPINullablesSetToNull, 'send_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('send_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['send_date'] = $send_date;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Complete address of the recipient including name, street, city, zip and country.<br>       Line breaks can be used and will be displayed on the invoice pdf.
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            array_push($this->openAPINullablesSetToNull, 'address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Currency used in the creditNote. Needs to be currency code according to ISO-4217
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            array_push($this->openAPINullablesSetToNull, 'currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets sum_net
     *
     * @return string|null
     */
    public function getSumNet()
    {
        return $this->container['sum_net'];
    }

    /**
     * Sets sum_net
     *
     * @param string|null $sum_net Net sum of the creditNote
     *
     * @return self
     */
    public function setSumNet($sum_net)
    {
        if (is_null($sum_net)) {
            throw new \InvalidArgumentException('non-nullable sum_net cannot be null');
        }
        $this->container['sum_net'] = $sum_net;

        return $this;
    }

    /**
     * Gets sum_tax
     *
     * @return string|null
     */
    public function getSumTax()
    {
        return $this->container['sum_tax'];
    }

    /**
     * Sets sum_tax
     *
     * @param string|null $sum_tax Tax sum of the creditNote
     *
     * @return self
     */
    public function setSumTax($sum_tax)
    {
        if (is_null($sum_tax)) {
            throw new \InvalidArgumentException('non-nullable sum_tax cannot be null');
        }
        $this->container['sum_tax'] = $sum_tax;

        return $this;
    }

    /**
     * Gets sum_gross
     *
     * @return string|null
     */
    public function getSumGross()
    {
        return $this->container['sum_gross'];
    }

    /**
     * Sets sum_gross
     *
     * @param string|null $sum_gross Gross sum of the creditNote
     *
     * @return self
     */
    public function setSumGross($sum_gross)
    {
        if (is_null($sum_gross)) {
            throw new \InvalidArgumentException('non-nullable sum_gross cannot be null');
        }
        $this->container['sum_gross'] = $sum_gross;

        return $this;
    }

    /**
     * Gets sum_discounts
     *
     * @return string|null
     */
    public function getSumDiscounts()
    {
        return $this->container['sum_discounts'];
    }

    /**
     * Sets sum_discounts
     *
     * @param string|null $sum_discounts Sum of all discounts in the creditNote
     *
     * @return self
     */
    public function setSumDiscounts($sum_discounts)
    {
        if (is_null($sum_discounts)) {
            throw new \InvalidArgumentException('non-nullable sum_discounts cannot be null');
        }
        $this->container['sum_discounts'] = $sum_discounts;

        return $this;
    }

    /**
     * Gets sum_net_foreign_currency
     *
     * @return string|null
     */
    public function getSumNetForeignCurrency()
    {
        return $this->container['sum_net_foreign_currency'];
    }

    /**
     * Sets sum_net_foreign_currency
     *
     * @param string|null $sum_net_foreign_currency Net sum of the creditNote in the foreign currency
     *
     * @return self
     */
    public function setSumNetForeignCurrency($sum_net_foreign_currency)
    {
        if (is_null($sum_net_foreign_currency)) {
            throw new \InvalidArgumentException('non-nullable sum_net_foreign_currency cannot be null');
        }
        $this->container['sum_net_foreign_currency'] = $sum_net_foreign_currency;

        return $this;
    }

    /**
     * Gets sum_tax_foreign_currency
     *
     * @return string|null
     */
    public function getSumTaxForeignCurrency()
    {
        return $this->container['sum_tax_foreign_currency'];
    }

    /**
     * Sets sum_tax_foreign_currency
     *
     * @param string|null $sum_tax_foreign_currency Tax sum of the creditNote in the foreign currency
     *
     * @return self
     */
    public function setSumTaxForeignCurrency($sum_tax_foreign_currency)
    {
        if (is_null($sum_tax_foreign_currency)) {
            throw new \InvalidArgumentException('non-nullable sum_tax_foreign_currency cannot be null');
        }
        $this->container['sum_tax_foreign_currency'] = $sum_tax_foreign_currency;

        return $this;
    }

    /**
     * Gets sum_gross_foreign_currency
     *
     * @return string|null
     */
    public function getSumGrossForeignCurrency()
    {
        return $this->container['sum_gross_foreign_currency'];
    }

    /**
     * Sets sum_gross_foreign_currency
     *
     * @param string|null $sum_gross_foreign_currency Gross sum of the creditNote in the foreign currency
     *
     * @return self
     */
    public function setSumGrossForeignCurrency($sum_gross_foreign_currency)
    {
        if (is_null($sum_gross_foreign_currency)) {
            throw new \InvalidArgumentException('non-nullable sum_gross_foreign_currency cannot be null');
        }
        $this->container['sum_gross_foreign_currency'] = $sum_gross_foreign_currency;

        return $this;
    }

    /**
     * Gets sum_discounts_foreign_currency
     *
     * @return string|null
     */
    public function getSumDiscountsForeignCurrency()
    {
        return $this->container['sum_discounts_foreign_currency'];
    }

    /**
     * Sets sum_discounts_foreign_currency
     *
     * @param string|null $sum_discounts_foreign_currency Discounts sum of the creditNote in the foreign currency
     *
     * @return self
     */
    public function setSumDiscountsForeignCurrency($sum_discounts_foreign_currency)
    {
        if (is_null($sum_discounts_foreign_currency)) {
            throw new \InvalidArgumentException('non-nullable sum_discounts_foreign_currency cannot be null');
        }
        $this->container['sum_discounts_foreign_currency'] = $sum_discounts_foreign_currency;

        return $this;
    }

    /**
     * Gets customer_internal_note
     *
     * @return string|null
     */
    public function getCustomerInternalNote()
    {
        return $this->container['customer_internal_note'];
    }

    /**
     * Sets customer_internal_note
     *
     * @param string|null $customer_internal_note Internal note of the customer. Contains data entered into field 'Referenz/Bestellnummer'
     *
     * @return self
     */
    public function setCustomerInternalNote($customer_internal_note)
    {
        if (is_null($customer_internal_note)) {
            array_push($this->openAPINullablesSetToNull, 'customer_internal_note');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer_internal_note', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer_internal_note'] = $customer_internal_note;

        return $this;
    }

    /**
     * Gets show_net
     *
     * @return bool|null
     */
    public function getShowNet()
    {
        return $this->container['show_net'];
    }

    /**
     * Sets show_net
     *
     * @param bool|null $show_net If true, the net amount of each position will be shown on the creditNote. Otherwise gross amount
     *
     * @return self
     */
    public function setShowNet($show_net)
    {
        if (is_null($show_net)) {
            throw new \InvalidArgumentException('non-nullable show_net cannot be null');
        }
        $this->container['show_net'] = $show_net;

        return $this;
    }

    /**
     * Gets send_type
     *
     * @return string|null
     */
    public function getSendType()
    {
        return $this->container['send_type'];
    }

    /**
     * Sets send_type
     *
     * @param string|null $send_type Type which was used to send the creditNote. IMPORTANT: Please refer to the creditNote section of the       *     API-Overview to understand how this attribute can be used before using it!
     *
     * @return self
     */
    public function setSendType($send_type)
    {
        if (is_null($send_type)) {
            array_push($this->openAPINullablesSetToNull, 'send_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('send_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getSendTypeAllowableValues();
        if (!is_null($send_type) && !in_array($send_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'send_type', must be one of '%s'",
                    $send_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['send_type'] = $send_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


