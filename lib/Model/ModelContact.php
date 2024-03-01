<?php
/**
 * ModelContact
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
 * OpenAPI Generator version: 7.3.0
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
 * ModelContact Class Doc Comment
 *
 * @category Class
 * @description Contact model
 * @package  Itsmind\Sevdesk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ModelContact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Model_Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'status' => 'int',
        'customer_number' => 'string',
        'parent' => '\Itsmind\Sevdesk\Model\ModelContactParent',
        'surename' => 'string',
        'familyname' => 'string',
        'titel' => 'string',
        'category' => '\Itsmind\Sevdesk\Model\ModelContactCategory',
        'description' => 'string',
        'academic_title' => 'string',
        'gender' => 'string',
        'name2' => 'string',
        'birthday' => '\DateTime',
        'vat_number' => 'string',
        'bank_account' => 'string',
        'bank_number' => 'string',
        'default_cashback_time' => 'int',
        'default_cashback_percent' => 'float',
        'default_time_to_pay' => 'int',
        'tax_number' => 'string',
        'tax_office' => 'string',
        'exempt_vat' => 'bool',
        'tax_type' => 'string',
        'tax_set' => '\Itsmind\Sevdesk\Model\ModelContactTaxSet',
        'default_discount_amount' => 'float',
        'default_discount_percentage' => 'bool',
        'buyer_reference' => 'string',
        'government_agency' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'status' => null,
        'customer_number' => null,
        'parent' => null,
        'surename' => null,
        'familyname' => null,
        'titel' => null,
        'category' => null,
        'description' => null,
        'academic_title' => null,
        'gender' => null,
        'name2' => null,
        'birthday' => 'date',
        'vat_number' => null,
        'bank_account' => null,
        'bank_number' => null,
        'default_cashback_time' => null,
        'default_cashback_percent' => 'float',
        'default_time_to_pay' => null,
        'tax_number' => null,
        'tax_office' => null,
        'exempt_vat' => null,
        'tax_type' => null,
        'tax_set' => null,
        'default_discount_amount' => 'float',
        'default_discount_percentage' => null,
        'buyer_reference' => null,
        'government_agency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
        'status' => true,
        'customer_number' => true,
        'parent' => true,
        'surename' => true,
        'familyname' => true,
        'titel' => true,
        'category' => false,
        'description' => true,
        'academic_title' => true,
        'gender' => true,
        'name2' => true,
        'birthday' => true,
        'vat_number' => true,
        'bank_account' => true,
        'bank_number' => true,
        'default_cashback_time' => true,
        'default_cashback_percent' => true,
        'default_time_to_pay' => true,
        'tax_number' => true,
        'tax_office' => true,
        'exempt_vat' => true,
        'tax_type' => true,
        'tax_set' => true,
        'default_discount_amount' => true,
        'default_discount_percentage' => true,
        'buyer_reference' => true,
        'government_agency' => true
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
        'name' => 'name',
        'status' => 'status',
        'customer_number' => 'customerNumber',
        'parent' => 'parent',
        'surename' => 'surename',
        'familyname' => 'familyname',
        'titel' => 'titel',
        'category' => 'category',
        'description' => 'description',
        'academic_title' => 'academicTitle',
        'gender' => 'gender',
        'name2' => 'name2',
        'birthday' => 'birthday',
        'vat_number' => 'vatNumber',
        'bank_account' => 'bankAccount',
        'bank_number' => 'bankNumber',
        'default_cashback_time' => 'defaultCashbackTime',
        'default_cashback_percent' => 'defaultCashbackPercent',
        'default_time_to_pay' => 'defaultTimeToPay',
        'tax_number' => 'taxNumber',
        'tax_office' => 'taxOffice',
        'exempt_vat' => 'exemptVat',
        'tax_type' => 'taxType',
        'tax_set' => 'taxSet',
        'default_discount_amount' => 'defaultDiscountAmount',
        'default_discount_percentage' => 'defaultDiscountPercentage',
        'buyer_reference' => 'buyerReference',
        'government_agency' => 'governmentAgency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'status' => 'setStatus',
        'customer_number' => 'setCustomerNumber',
        'parent' => 'setParent',
        'surename' => 'setSurename',
        'familyname' => 'setFamilyname',
        'titel' => 'setTitel',
        'category' => 'setCategory',
        'description' => 'setDescription',
        'academic_title' => 'setAcademicTitle',
        'gender' => 'setGender',
        'name2' => 'setName2',
        'birthday' => 'setBirthday',
        'vat_number' => 'setVatNumber',
        'bank_account' => 'setBankAccount',
        'bank_number' => 'setBankNumber',
        'default_cashback_time' => 'setDefaultCashbackTime',
        'default_cashback_percent' => 'setDefaultCashbackPercent',
        'default_time_to_pay' => 'setDefaultTimeToPay',
        'tax_number' => 'setTaxNumber',
        'tax_office' => 'setTaxOffice',
        'exempt_vat' => 'setExemptVat',
        'tax_type' => 'setTaxType',
        'tax_set' => 'setTaxSet',
        'default_discount_amount' => 'setDefaultDiscountAmount',
        'default_discount_percentage' => 'setDefaultDiscountPercentage',
        'buyer_reference' => 'setBuyerReference',
        'government_agency' => 'setGovernmentAgency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'status' => 'getStatus',
        'customer_number' => 'getCustomerNumber',
        'parent' => 'getParent',
        'surename' => 'getSurename',
        'familyname' => 'getFamilyname',
        'titel' => 'getTitel',
        'category' => 'getCategory',
        'description' => 'getDescription',
        'academic_title' => 'getAcademicTitle',
        'gender' => 'getGender',
        'name2' => 'getName2',
        'birthday' => 'getBirthday',
        'vat_number' => 'getVatNumber',
        'bank_account' => 'getBankAccount',
        'bank_number' => 'getBankNumber',
        'default_cashback_time' => 'getDefaultCashbackTime',
        'default_cashback_percent' => 'getDefaultCashbackPercent',
        'default_time_to_pay' => 'getDefaultTimeToPay',
        'tax_number' => 'getTaxNumber',
        'tax_office' => 'getTaxOffice',
        'exempt_vat' => 'getExemptVat',
        'tax_type' => 'getTaxType',
        'tax_set' => 'getTaxSet',
        'default_discount_amount' => 'getDefaultDiscountAmount',
        'default_discount_percentage' => 'getDefaultDiscountPercentage',
        'buyer_reference' => 'getBuyerReference',
        'government_agency' => 'getGovernmentAgency'
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

    public const TAX_TYPE__DEFAULT = 'default';
    public const TAX_TYPE_EU = 'eu';
    public const TAX_TYPE_NOTEU = 'noteu';
    public const TAX_TYPE_CUSTOM = 'custom';
    public const TAX_TYPE_SS = 'ss';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxTypeAllowableValues()
    {
        return [
            self::TAX_TYPE__DEFAULT,
            self::TAX_TYPE_EU,
            self::TAX_TYPE_NOTEU,
            self::TAX_TYPE_CUSTOM,
            self::TAX_TYPE_SS,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], 100);
        $this->setIfExists('customer_number', $data ?? [], null);
        $this->setIfExists('parent', $data ?? [], null);
        $this->setIfExists('surename', $data ?? [], null);
        $this->setIfExists('familyname', $data ?? [], null);
        $this->setIfExists('titel', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('academic_title', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('name2', $data ?? [], null);
        $this->setIfExists('birthday', $data ?? [], null);
        $this->setIfExists('vat_number', $data ?? [], null);
        $this->setIfExists('bank_account', $data ?? [], null);
        $this->setIfExists('bank_number', $data ?? [], null);
        $this->setIfExists('default_cashback_time', $data ?? [], null);
        $this->setIfExists('default_cashback_percent', $data ?? [], null);
        $this->setIfExists('default_time_to_pay', $data ?? [], null);
        $this->setIfExists('tax_number', $data ?? [], null);
        $this->setIfExists('tax_office', $data ?? [], null);
        $this->setIfExists('exempt_vat', $data ?? [], null);
        $this->setIfExists('tax_type', $data ?? [], null);
        $this->setIfExists('tax_set', $data ?? [], null);
        $this->setIfExists('default_discount_amount', $data ?? [], null);
        $this->setIfExists('default_discount_percentage', $data ?? [], null);
        $this->setIfExists('buyer_reference', $data ?? [], null);
        $this->setIfExists('government_agency', $data ?? [], null);
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

        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        $allowedValues = $this->getTaxTypeAllowableValues();
        if (!is_null($this->container['tax_type']) && !in_array($this->container['tax_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tax_type', must be one of '%s'",
                $this->container['tax_type'],
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The organization name.<br> Be aware that the type of contact will depend on this attribute.<br> If it holds a value, the contact will be regarded as an organization.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status Defines the status of the contact. 100 <-> Lead - 500 <-> Pending - 1000 <-> Active.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return string|null
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param string|null $customer_number The customer number
     *
     * @return self
     */
    public function setCustomerNumber($customer_number)
    {
        if (is_null($customer_number)) {
            array_push($this->openAPINullablesSetToNull, 'customer_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \Itsmind\Sevdesk\Model\ModelContactParent|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Itsmind\Sevdesk\Model\ModelContactParent|null $parent parent
     *
     * @return self
     */
    public function setParent($parent)
    {
        if (is_null($parent)) {
            array_push($this->openAPINullablesSetToNull, 'parent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets surename
     *
     * @return string|null
     */
    public function getSurename()
    {
        return $this->container['surename'];
    }

    /**
     * Sets surename
     *
     * @param string|null $surename The <b>first</b> name of the contact.<br> Yeah... not quite right in literally every way. We know.<br> Not to be used for organizations.
     *
     * @return self
     */
    public function setSurename($surename)
    {
        if (is_null($surename)) {
            array_push($this->openAPINullablesSetToNull, 'surename');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('surename', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['surename'] = $surename;

        return $this;
    }

    /**
     * Gets familyname
     *
     * @return string|null
     */
    public function getFamilyname()
    {
        return $this->container['familyname'];
    }

    /**
     * Sets familyname
     *
     * @param string|null $familyname The last name of the contact.<br> Not to be used for organizations.
     *
     * @return self
     */
    public function setFamilyname($familyname)
    {
        if (is_null($familyname)) {
            array_push($this->openAPINullablesSetToNull, 'familyname');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('familyname', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['familyname'] = $familyname;

        return $this;
    }

    /**
     * Gets titel
     *
     * @return string|null
     */
    public function getTitel()
    {
        return $this->container['titel'];
    }

    /**
     * Sets titel
     *
     * @param string|null $titel A non-academic title for the contact. Not to be used for organizations.
     *
     * @return self
     */
    public function setTitel($titel)
    {
        if (is_null($titel)) {
            array_push($this->openAPINullablesSetToNull, 'titel');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('titel', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['titel'] = $titel;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \Itsmind\Sevdesk\Model\ModelContactCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Itsmind\Sevdesk\Model\ModelContactCategory $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description A description for the contact.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets academic_title
     *
     * @return string|null
     */
    public function getAcademicTitle()
    {
        return $this->container['academic_title'];
    }

    /**
     * Sets academic_title
     *
     * @param string|null $academic_title A academic title for the contact. Not to be used for organizations.
     *
     * @return self
     */
    public function setAcademicTitle($academic_title)
    {
        if (is_null($academic_title)) {
            array_push($this->openAPINullablesSetToNull, 'academic_title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('academic_title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['academic_title'] = $academic_title;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender Gender of the contact.<br> Not to be used for organizations.
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            array_push($this->openAPINullablesSetToNull, 'gender');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gender', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets name2
     *
     * @return string|null
     */
    public function getName2()
    {
        return $this->container['name2'];
    }

    /**
     * Sets name2
     *
     * @param string|null $name2 Second name of the contact.<br> Not to be used for organizations.
     *
     * @return self
     */
    public function setName2($name2)
    {
        if (is_null($name2)) {
            array_push($this->openAPINullablesSetToNull, 'name2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name2'] = $name2;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return \DateTime|null
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param \DateTime|null $birthday Birthday of the contact.<br> Not to be used for organizations.
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        if (is_null($birthday)) {
            array_push($this->openAPINullablesSetToNull, 'birthday');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('birthday', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string|null
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string|null $vat_number Vat number of the contact.
     *
     * @return self
     */
    public function setVatNumber($vat_number)
    {
        if (is_null($vat_number)) {
            array_push($this->openAPINullablesSetToNull, 'vat_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vat_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets bank_account
     *
     * @return string|null
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param string|null $bank_account Bank account number (IBAN) of the contact.
     *
     * @return self
     */
    public function setBankAccount($bank_account)
    {
        if (is_null($bank_account)) {
            array_push($this->openAPINullablesSetToNull, 'bank_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bank_account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bank_account'] = $bank_account;

        return $this;
    }

    /**
     * Gets bank_number
     *
     * @return string|null
     */
    public function getBankNumber()
    {
        return $this->container['bank_number'];
    }

    /**
     * Sets bank_number
     *
     * @param string|null $bank_number Bank number of the bank used by the contact.
     *
     * @return self
     */
    public function setBankNumber($bank_number)
    {
        if (is_null($bank_number)) {
            array_push($this->openAPINullablesSetToNull, 'bank_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bank_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bank_number'] = $bank_number;

        return $this;
    }

    /**
     * Gets default_cashback_time
     *
     * @return int|null
     */
    public function getDefaultCashbackTime()
    {
        return $this->container['default_cashback_time'];
    }

    /**
     * Sets default_cashback_time
     *
     * @param int|null $default_cashback_time Absolute time in days which the contact has to pay his invoices and subsequently get a cashback.
     *
     * @return self
     */
    public function setDefaultCashbackTime($default_cashback_time)
    {
        if (is_null($default_cashback_time)) {
            array_push($this->openAPINullablesSetToNull, 'default_cashback_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_cashback_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_cashback_time'] = $default_cashback_time;

        return $this;
    }

    /**
     * Gets default_cashback_percent
     *
     * @return float|null
     */
    public function getDefaultCashbackPercent()
    {
        return $this->container['default_cashback_percent'];
    }

    /**
     * Sets default_cashback_percent
     *
     * @param float|null $default_cashback_percent Percentage of the invoice sum the contact gets back if he payed invoices in time.
     *
     * @return self
     */
    public function setDefaultCashbackPercent($default_cashback_percent)
    {
        if (is_null($default_cashback_percent)) {
            array_push($this->openAPINullablesSetToNull, 'default_cashback_percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_cashback_percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_cashback_percent'] = $default_cashback_percent;

        return $this;
    }

    /**
     * Gets default_time_to_pay
     *
     * @return int|null
     */
    public function getDefaultTimeToPay()
    {
        return $this->container['default_time_to_pay'];
    }

    /**
     * Sets default_time_to_pay
     *
     * @param int|null $default_time_to_pay The payment goal in days which is set for every invoice of the contact.
     *
     * @return self
     */
    public function setDefaultTimeToPay($default_time_to_pay)
    {
        if (is_null($default_time_to_pay)) {
            array_push($this->openAPINullablesSetToNull, 'default_time_to_pay');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_time_to_pay', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_time_to_pay'] = $default_time_to_pay;

        return $this;
    }

    /**
     * Gets tax_number
     *
     * @return string|null
     */
    public function getTaxNumber()
    {
        return $this->container['tax_number'];
    }

    /**
     * Sets tax_number
     *
     * @param string|null $tax_number The tax number of the contact.
     *
     * @return self
     */
    public function setTaxNumber($tax_number)
    {
        if (is_null($tax_number)) {
            array_push($this->openAPINullablesSetToNull, 'tax_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tax_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tax_number'] = $tax_number;

        return $this;
    }

    /**
     * Gets tax_office
     *
     * @return string|null
     */
    public function getTaxOffice()
    {
        return $this->container['tax_office'];
    }

    /**
     * Sets tax_office
     *
     * @param string|null $tax_office The tax office of the contact (only for greek customers).
     *
     * @return self
     */
    public function setTaxOffice($tax_office)
    {
        if (is_null($tax_office)) {
            array_push($this->openAPINullablesSetToNull, 'tax_office');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tax_office', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tax_office'] = $tax_office;

        return $this;
    }

    /**
     * Gets exempt_vat
     *
     * @return bool|null
     */
    public function getExemptVat()
    {
        return $this->container['exempt_vat'];
    }

    /**
     * Sets exempt_vat
     *
     * @param bool|null $exempt_vat Defines if the contact is freed from paying vat.
     *
     * @return self
     */
    public function setExemptVat($exempt_vat)
    {
        if (is_null($exempt_vat)) {
            array_push($this->openAPINullablesSetToNull, 'exempt_vat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('exempt_vat', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['exempt_vat'] = $exempt_vat;

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
     * @param string|null $tax_type Defines which tax regulation the contact is using.
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
        $allowedValues = $this->getTaxTypeAllowableValues();
        if (!is_null($tax_type) && !in_array($tax_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tax_type', must be one of '%s'",
                    $tax_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets tax_set
     *
     * @return \Itsmind\Sevdesk\Model\ModelContactTaxSet|null
     */
    public function getTaxSet()
    {
        return $this->container['tax_set'];
    }

    /**
     * Sets tax_set
     *
     * @param \Itsmind\Sevdesk\Model\ModelContactTaxSet|null $tax_set tax_set
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
     * Gets default_discount_amount
     *
     * @return float|null
     */
    public function getDefaultDiscountAmount()
    {
        return $this->container['default_discount_amount'];
    }

    /**
     * Sets default_discount_amount
     *
     * @param float|null $default_discount_amount The default discount the contact gets for every invoice.<br> Depending on defaultDiscountPercentage attribute, in percent or absolute value.
     *
     * @return self
     */
    public function setDefaultDiscountAmount($default_discount_amount)
    {
        if (is_null($default_discount_amount)) {
            array_push($this->openAPINullablesSetToNull, 'default_discount_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_discount_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_discount_amount'] = $default_discount_amount;

        return $this;
    }

    /**
     * Gets default_discount_percentage
     *
     * @return bool|null
     */
    public function getDefaultDiscountPercentage()
    {
        return $this->container['default_discount_percentage'];
    }

    /**
     * Sets default_discount_percentage
     *
     * @param bool|null $default_discount_percentage Defines if the discount is a percentage (true) or an absolute value (false).
     *
     * @return self
     */
    public function setDefaultDiscountPercentage($default_discount_percentage)
    {
        if (is_null($default_discount_percentage)) {
            array_push($this->openAPINullablesSetToNull, 'default_discount_percentage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_discount_percentage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_discount_percentage'] = $default_discount_percentage;

        return $this;
    }

    /**
     * Gets buyer_reference
     *
     * @return string|null
     */
    public function getBuyerReference()
    {
        return $this->container['buyer_reference'];
    }

    /**
     * Sets buyer_reference
     *
     * @param string|null $buyer_reference Buyer reference of the contact.
     *
     * @return self
     */
    public function setBuyerReference($buyer_reference)
    {
        if (is_null($buyer_reference)) {
            array_push($this->openAPINullablesSetToNull, 'buyer_reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('buyer_reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['buyer_reference'] = $buyer_reference;

        return $this;
    }

    /**
     * Gets government_agency
     *
     * @return bool|null
     */
    public function getGovernmentAgency()
    {
        return $this->container['government_agency'];
    }

    /**
     * Sets government_agency
     *
     * @param bool|null $government_agency Defines whether the contact is a government agency (true) or not (false).
     *
     * @return self
     */
    public function setGovernmentAgency($government_agency)
    {
        if (is_null($government_agency)) {
            array_push($this->openAPINullablesSetToNull, 'government_agency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('government_agency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['government_agency'] = $government_agency;

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


