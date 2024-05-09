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
 * sevDesk API
 *
 * <b>Contact:</b> To contact our support click <a href='https://landing.sevdesk.de/service-support-center-technik'>here</a><br><br>   # General information  Welcome to our API!<br>  sevDesk offers you the possibility of retrieving data using an interface, namely the sevDesk API, and making changes without having to use the web UI. The sevDesk interface is a REST-Full API. All sevDesk data and functions that are used in the web UI can also be controlled through the API.   # Cross-Origin Resource Sharing  This API features Cross-Origin Resource Sharing (CORS).<br>  It enables cross-domain communication from the browser.<br>  All responses have a wildcard same-origin which makes them completely public and accessible to everyone, including any code on any site.    # Embedding resources  When retrieving resources by using this API, you might encounter nested resources in the resources you requested.<br>  For example, an invoice always contains a contact, of which you can see the ID and the object name.<br>  This API gives you the possibility to embed these resources completely into the resources you originally requested.<br>  Taking our invoice example, this would mean, that you would not only see the ID and object name of a contact, but rather the complete contact resource.    To embed resources, all you need to do is to add the query parameter 'embed' to your GET request.<br>  As values, you can provide the name of the nested resource.<br>  Multiple nested resources are also possible by providing multiple names, separated by a comma.    # Authentication and Authorization  The sevDesk API uses a token authentication to authorize calls. For this purpose every sevDesk administrator has one API token, which is a <b>hexadecimal string</b> containing <b>32 characters</b>. The following clip shows where you can find the API token if this is your first time with our API.<br><br> <video src='OpenAPI/img/findingTheApiToken.mp4' controls width='640' height='360'> Ihr Browser kann dieses Video nicht wiedergeben.<br/> Dieses Video zeigt wie sie Ihr sevDesk API Token finden. </video> <br> The token will be needed in every request that you want to send and needs to be attached to the request url as a <b>Query Parameter</b><br> or provided as a value of an <b>Authorization Header</b>.<br> For security reasons, we suggest putting the API Token in the Authorization Header and not in the query string.<br> However, in the request examples in this documentation, we will keep it in the query string, as it is easier for you to copy them and try them yourself.<br> The following url is an example that shows where your token needs to be placed as a query parameter.<br> In this case, we used some random API token. <ul> <li><span>ht</span>tps://my.sevdesk.de/api/v1/Contact?token=<span style='color:red'>b7794de0085f5cd00560f160f290af38</span></li> </ul> The next example shows the token in the Authorization Header. <ul> <li>\"Authorization\" :<span style='color:red'>\"b7794de0085f5cd00560f160f290af38\"</span></li> </ul> The api tokens have an infinite lifetime and, in other words, exist as long as the sevDesk user exists.<br> For this reason, the user should <b>NEVER</b> be deleted.<br> If really necessary, it is advisable to save the api token as we will <b>NOT</b> be able to retrieve it afterwards!<br> It is also possible to generate a new API token, for example, if you want to prevent the usage of your sevDesk account by other people who got your current API token.<br> To achieve this, you just need to click on the \"generate new\" symbol to the right of your token and confirm it with your password.  # API News  To never miss API news and updates again, subscribe to our <b>free API newsletter</b> and get all relevant information to keep your sevDesk software running smoothly. To subscribe, simply click <a href = 'https://landing.sevdesk.de/api-newsletter'><b>here</b></a> and confirm the email address to which we may send all updates relevant to you.  # API Requests  In our case, REST API requests need to be build by combining the following components. <table> <tr> <th><b>Component</b></th> <th><b>Description</b></th> </tr> <tr> <td>HTTP-Methods</td> <td> <ul> <li>GET (retrieve a resource)</li> <li>POST (create a resource)</li> <li>PUT (update a resource)</li> <li>DELETE (delete a resource)</li> </ul> </td> </tr> <tr> <td>URL of the API</td> <td><span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span></td> </tr> <tr> <td>URI of the resource</td> <td>The resource to query.<br>For example contacts in sevDesk:<br><br> <span style='color:red'>/Contact</span><br><br> Which will result in the following complete URL:<br><br> <span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span> </td> </tr> <tr> <td>Query parameters</td> <td>Are attached by using the connectives <b>?</b> and <b>&</b> in the URL.<br></td> </tr> <tr> <td>Request headers</td> <td>Typical request headers are for example:<br> <div> <br> <ul> <li>Content-type</li> <li>Authorization</li> <li>Accept-Encoding</li> <li>User-Agent</li> <li>...</li> </ul> </div> </td> </tr> <tr> <td>Request body</td> <td>Mostly required in POST and PUT requests.<br> Often the request body contains json, in our case, it also accepts url-encoded data. </td> </tr> </table><br> <span style='color:red'>Note</span>: please pass a meaningful entry at the header \"User-Agent\". If the \"User-Agent\" is set meaningfully, we can offer better support in case of queries from customers.<br> An example how such a \"User-Agent\" can look like: \"Integration-name by abc\". <br><br> This is a sample request for retrieving existing contacts in sevDesk using curl:<br><br> <img src='OpenAPI/img/GETRequest.PNG' alt='Get Request' height='150'><br><br> As you can see, the request contains all the components mentioned above.<br> It's HTTP method is GET, it has a correct endpoint (<span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span>), query parameters like <b>token</b> and additional <b>header</b> information!<br><br> <b>Query Parameters</b><br><br> As you might have seen in the sample request above, there are several other parameters besides \"token\", located in the url.<br> Those are mostly optional but prove to be very useful for a lot of requests as they can limit, extend, sort or filter the data you will get as a response.<br><br> These are the three most used query parameter for the sevDesk API. <table> <tr> <th><b>Parameter</b></th> <th><b>Description</b></th> </tr> <tr> <td>limit</td> <td>Limits the number of entries that are returned.<br> Most useful in GET requests which will most likely deliver big sets of data like country or currency lists.<br> In this case, you can bypass the default limitation on returned entries by providing a high number. </td> </tr> <tr> <td>offset</td> <td>Specifies a certain offset for the data that will be returned.<br> As an example, you can specify \"offset=2\" if you want all entries except for the first two.</td> </tr> <tr> <td>embed</td> <td>Will extend some of the returned data.<br> A brief example can be found below.</td> </tr> </table> This is an example for the usage of the embed parameter.<br> The following first request will return all company contact entries in sevDesk up to a limit of 100 without any additional information and no offset.<br><br> <img src='OpenAPI/img/ContactQueryWithoutEmbed.PNG' width='900' height='850'><br><br> Now have a look at the category attribute located in the response.<br> Naturally, it just contains the id and the object name of the object but no further information.<br> We will now use the parameter embed with the value \"category\".<br><br> <img src='OpenAPI/img/ContactQueryWithEmbed.PNG' width='900' height='850'><br><br> As you can see, the category object is now extended and shows all the attributes and their corresponding values.<br><br> There are lot of other query parameters that can be used to filter the returned data for objects that match a certain pattern, however, those will not be mentioned here and instead can be found at the detail documentation of the most used API endpoints like contact, invoice or voucher.<br><br> <b>Request Headers</b><br><br> The HTTP request (response) headers allow the client as well as the server to pass additional information with the request.<br> They transfer the parameters and arguments which are important for transmitting data over HTTP.<br> Three headers which are useful / necessary when using the sevDesk API are \"Authorization, \"Accept\" and \"Content-type\".<br> Underneath is a brief description of why and how they should be used.<br><br> <b>Authorization</b><br><br> Can be used if you want to provide your API token in the header instead of having it in the url. <ul> <li>Authorization:<span style='color:red'>yourApiToken</span></li> </ul> <b>Accept</b><br><br> Specifies the format of the response.<br> Required for operations with a response body. <ul> <li>Accept:application/<span style='color:red'>format</span> </li> </ul> In our case, <code><span style='color:red'>format</span></code> could be replaced with <code>json</code> or <code>xml</code><br><br> <b>Content-type</b><br><br> Specifies which format is used in the request.<br> Is required for operations with a request body. <ul> <li>Content-type:application/<span style='color:red'>format</span></li> </ul> In our case,<code><span style='color:red'>format</span></code>could be replaced with <code>json</code> or <code>x-www-form-urlencoded</code> <br><br><b>API Responses</b><br><br> HTTP status codes<br> When calling the sevDesk API it is very likely that you will get a HTTP status code in the response.<br> Some API calls will also return JSON response bodies which will contain information about the resource.<br> Each status code which is returned will either be a <b>success</b> code or an <b>error</b> code.<br><br> Success codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>200 OK</code></td> <td>The request was successful</td> </tr> <tr> <td><code>201 Created</code></td> <td>Most likely to be found in the response of a <b>POST</b> request.<br> This code indicates that the desired resource was successfully created.</td> </tr> </table> <br>Error codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>400 Bad request</code></td> <td>The request you sent is most likely syntactically incorrect.<br> You should check if the parameters in the request body or the url are correct.</td> </tr> <tr> <td><code>401 Unauthorized</code></td> <td>The authentication failed.<br> Most likely caused by a missing or wrong API token.</td> </tr> <tr> <td><code>403 Forbidden</code></td> <td>You do not have the permission the access the resource which is requested.</td> </tr> <tr> <td><code>404 Not found</code></td> <td>The resource you specified does not exist.</td> </tr> <tr> <td><code>500 Internal server error</code></td> <td>An internal server error has occurred.<br> Normally this means that something went wrong on our side.<br> However, sometimes this error will appear if we missed to catch an error which is normally a 400 status code! </td> </tr> </table>  # Your First Request  After reading the introduction to our API, you should now be able to make your first call.<br> For testing our API, we would always recommend to create a trial account for sevDesk to prevent unwanted changes to your main account.<br> A trial account will be in the highest tariff (materials management), so every sevDesk function can be tested! <br><br>To start testing we would recommend one of the following tools: <ul> <li><a href='https://www.getpostman.com/'>Postman</a></li> <li><a href='https://curl.haxx.se/download.html'>cURL</a></li> </ul> This example will illustrate your first request, which is creating a new Contact in sevDesk.<br> <ol> <li>Download <a href='https://www.getpostman.com/'><b>Postman</b></a> for your desired system and start the application</li> <li>Enter <span><b>ht</span>tps://my.sevdesk.de/api/v1/Contact</b> as the url</li> <li>Use the connective <b>?</b> to append <b>token=</b> to the end of the url, or create an authorization header. Insert your API token as the value</li> <li>For this test, select <b>POST</b> as the HTTP method</li> <li>Go to <b>Headers</b> and enter the key-value pair <b>Content-type</b> + <b>application/x-www-form-urlencoded</b><br> As an alternative, you can just go to <b>Body</b> and select <b>x-www-form-urlencoded</b></li> <li>Now go to <b>Body</b> (if you are not there yet) and enter the key-value pairs as shown in the following picture<br><br> <img src='OpenAPI/img/FirstRequestPostman.PNG' width='900'><br><br></li> <li>Click on <b>Send</b>. Your response should now look like this:<br><br> <img src='OpenAPI/img/FirstRequestResponse.PNG' width='900'></li> </ol> As you can see, a successful response in this case returns a JSON-formatted response body containing the contact you just created.<br> For keeping it simple, this was only a minimal example of creating a contact.<br> There are however numerous combinations of parameters that you can provide which add information to your contact.
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
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
        'invoiceGetPdf' => [
            'application/json',
        ],
        'invoiceRender' => [
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
        'updateStatus' => [
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
     * Operation bookInvoice
     *
     * Book an invoice
     *
     * @param  int $invoice_id ID of invoice to book (required)
     * @param  \Itsmind\Sevdesk\Model\BookInvoiceRequest $book_invoice_request Booking data (optional)
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
     * @param  \Itsmind\Sevdesk\Model\BookInvoiceRequest $book_invoice_request Booking data (optional)
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
     * @param  \Itsmind\Sevdesk\Model\BookInvoiceRequest $book_invoice_request Booking data (optional)
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
     * @param  \Itsmind\Sevdesk\Model\BookInvoiceRequest $book_invoice_request Booking data (optional)
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
     * @param  \Itsmind\Sevdesk\Model\BookInvoiceRequest $book_invoice_request Booking data (optional)
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
     * @return \Itsmind\Sevdesk\Model\ModelInvoiceResponse
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
     * @return array of \Itsmind\Sevdesk\Model\ModelInvoiceResponse, HTTP status code, HTTP response headers (array of strings)
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
                    if ('\Itsmind\Sevdesk\Model\ModelInvoiceResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ModelInvoiceResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ModelInvoiceResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\ModelInvoiceResponse';
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
                        '\Itsmind\Sevdesk\Model\ModelInvoiceResponse',
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
        $returnType = '\Itsmind\Sevdesk\Model\ModelInvoiceResponse';
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
     * @param  \Itsmind\Sevdesk\Model\SaveInvoice $save_invoice Creation data. Please be aware, that you need to provide at least all required parameter      of the invoice model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceByFactory'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\SaveInvoiceResponse
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
     * @param  \Itsmind\Sevdesk\Model\SaveInvoice $save_invoice Creation data. Please be aware, that you need to provide at least all required parameter      of the invoice model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceByFactory'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\SaveInvoiceResponse, HTTP status code, HTTP response headers (array of strings)
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
                    if ('\Itsmind\Sevdesk\Model\SaveInvoiceResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\SaveInvoiceResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\SaveInvoiceResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\SaveInvoiceResponse';
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
                        '\Itsmind\Sevdesk\Model\SaveInvoiceResponse',
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
     * @param  \Itsmind\Sevdesk\Model\SaveInvoice $save_invoice Creation data. Please be aware, that you need to provide at least all required parameter      of the invoice model! (optional)
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
     * @param  \Itsmind\Sevdesk\Model\SaveInvoice $save_invoice Creation data. Please be aware, that you need to provide at least all required parameter      of the invoice model! (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceByFactory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInvoiceByFactoryAsyncWithHttpInfo($save_invoice = null, string $contentType = self::contentTypes['createInvoiceByFactory'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\SaveInvoiceResponse';
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
     * @param  \Itsmind\Sevdesk\Model\SaveInvoice $save_invoice Creation data. Please be aware, that you need to provide at least all required parameter      of the invoice model! (optional)
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
     * @param  int $invoice_id the id of the invoice (required)
     * @param  string $invoice_object_name Model name, which is &#39;Invoice&#39; (required)
     * @param  \Itsmind\Sevdesk\Model\ModelCreateInvoiceFromOrder $model_create_invoice_from_order Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceFromOrder'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\ModelInvoiceResponse
     */
    public function createInvoiceFromOrder($invoice_id, $invoice_object_name, $model_create_invoice_from_order = null, string $contentType = self::contentTypes['createInvoiceFromOrder'][0])
    {
        list($response) = $this->createInvoiceFromOrderWithHttpInfo($invoice_id, $invoice_object_name, $model_create_invoice_from_order, $contentType);
        return $response;
    }

    /**
     * Operation createInvoiceFromOrderWithHttpInfo
     *
     * Create invoice from order
     *
     * @param  int $invoice_id the id of the invoice (required)
     * @param  string $invoice_object_name Model name, which is &#39;Invoice&#39; (required)
     * @param  \Itsmind\Sevdesk\Model\ModelCreateInvoiceFromOrder $model_create_invoice_from_order Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceFromOrder'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\ModelInvoiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createInvoiceFromOrderWithHttpInfo($invoice_id, $invoice_object_name, $model_create_invoice_from_order = null, string $contentType = self::contentTypes['createInvoiceFromOrder'][0])
    {
        $request = $this->createInvoiceFromOrderRequest($invoice_id, $invoice_object_name, $model_create_invoice_from_order, $contentType);

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
                    if ('\Itsmind\Sevdesk\Model\ModelInvoiceResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ModelInvoiceResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ModelInvoiceResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\ModelInvoiceResponse';
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
                        '\Itsmind\Sevdesk\Model\ModelInvoiceResponse',
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
     * @param  int $invoice_id the id of the invoice (required)
     * @param  string $invoice_object_name Model name, which is &#39;Invoice&#39; (required)
     * @param  \Itsmind\Sevdesk\Model\ModelCreateInvoiceFromOrder $model_create_invoice_from_order Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceFromOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInvoiceFromOrderAsync($invoice_id, $invoice_object_name, $model_create_invoice_from_order = null, string $contentType = self::contentTypes['createInvoiceFromOrder'][0])
    {
        return $this->createInvoiceFromOrderAsyncWithHttpInfo($invoice_id, $invoice_object_name, $model_create_invoice_from_order, $contentType)
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
     * @param  int $invoice_id the id of the invoice (required)
     * @param  string $invoice_object_name Model name, which is &#39;Invoice&#39; (required)
     * @param  \Itsmind\Sevdesk\Model\ModelCreateInvoiceFromOrder $model_create_invoice_from_order Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceFromOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInvoiceFromOrderAsyncWithHttpInfo($invoice_id, $invoice_object_name, $model_create_invoice_from_order = null, string $contentType = self::contentTypes['createInvoiceFromOrder'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\ModelInvoiceResponse';
        $request = $this->createInvoiceFromOrderRequest($invoice_id, $invoice_object_name, $model_create_invoice_from_order, $contentType);

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
     * @param  int $invoice_id the id of the invoice (required)
     * @param  string $invoice_object_name Model name, which is &#39;Invoice&#39; (required)
     * @param  \Itsmind\Sevdesk\Model\ModelCreateInvoiceFromOrder $model_create_invoice_from_order Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceFromOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createInvoiceFromOrderRequest($invoice_id, $invoice_object_name, $model_create_invoice_from_order = null, string $contentType = self::contentTypes['createInvoiceFromOrder'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling createInvoiceFromOrder'
            );
        }

        // verify the required parameter 'invoice_object_name' is set
        if ($invoice_object_name === null || (is_array($invoice_object_name) && count($invoice_object_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_object_name when calling createInvoiceFromOrder'
            );
        }



        $resourcePath = '/Invoice/Factory/createInvoiceFromOrder';
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
     * @param  \Itsmind\Sevdesk\Model\CreateInvoiceReminderRequest $create_invoice_reminder_request Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceReminder'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\ModelInvoiceResponse
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
     * @param  \Itsmind\Sevdesk\Model\CreateInvoiceReminderRequest $create_invoice_reminder_request Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceReminder'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\ModelInvoiceResponse, HTTP status code, HTTP response headers (array of strings)
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
                    if ('\Itsmind\Sevdesk\Model\ModelInvoiceResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ModelInvoiceResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ModelInvoiceResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\ModelInvoiceResponse';
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
                        '\Itsmind\Sevdesk\Model\ModelInvoiceResponse',
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
     * @param  \Itsmind\Sevdesk\Model\CreateInvoiceReminderRequest $create_invoice_reminder_request Create invoice (optional)
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
     * @param  \Itsmind\Sevdesk\Model\CreateInvoiceReminderRequest $create_invoice_reminder_request Create invoice (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoiceReminder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInvoiceReminderAsyncWithHttpInfo($invoice_id, $invoice_object_name, $create_invoice_reminder_request = null, string $contentType = self::contentTypes['createInvoiceReminder'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\ModelInvoiceResponse';
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
     * @param  \Itsmind\Sevdesk\Model\CreateInvoiceReminderRequest $create_invoice_reminder_request Create invoice (optional)
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
     * @param  string[] $embed embed (optional)
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
     * @param  string[] $embed (optional)
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
     * @param  string[] $embed (optional)
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
     * @param  string[] $embed (optional)
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
     * @param  string[] $embed (optional)
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
     * @param  int $limit limits the number of entries returned (optional)
     * @param  int $offset set the index where the returned entries start (optional)
     * @param  string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoicePositionsById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response
     */
    public function getInvoicePositionsById($invoice_id, $limit = null, $offset = null, $embed = null, string $contentType = self::contentTypes['getInvoicePositionsById'][0])
    {
        list($response) = $this->getInvoicePositionsByIdWithHttpInfo($invoice_id, $limit, $offset, $embed, $contentType);
        return $response;
    }

    /**
     * Operation getInvoicePositionsByIdWithHttpInfo
     *
     * Find invoice positions
     *
     * @param  int $invoice_id ID of invoice to return the positions (required)
     * @param  int $limit limits the number of entries returned (optional)
     * @param  int $offset set the index where the returned entries start (optional)
     * @param  string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoicePositionsById'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInvoicePositionsByIdWithHttpInfo($invoice_id, $limit = null, $offset = null, $embed = null, string $contentType = self::contentTypes['getInvoicePositionsById'][0])
    {
        $request = $this->getInvoicePositionsByIdRequest($invoice_id, $limit, $offset, $embed, $contentType);

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
     * @param  int $limit limits the number of entries returned (optional)
     * @param  int $offset set the index where the returned entries start (optional)
     * @param  string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoicePositionsById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoicePositionsByIdAsync($invoice_id, $limit = null, $offset = null, $embed = null, string $contentType = self::contentTypes['getInvoicePositionsById'][0])
    {
        return $this->getInvoicePositionsByIdAsyncWithHttpInfo($invoice_id, $limit, $offset, $embed, $contentType)
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
     * @param  int $limit limits the number of entries returned (optional)
     * @param  int $offset set the index where the returned entries start (optional)
     * @param  string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoicePositionsById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoicePositionsByIdAsyncWithHttpInfo($invoice_id, $limit = null, $offset = null, $embed = null, string $contentType = self::contentTypes['getInvoicePositionsById'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response';
        $request = $this->getInvoicePositionsByIdRequest($invoice_id, $limit, $offset, $embed, $contentType);

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
     * @param  int $limit limits the number of entries returned (optional)
     * @param  int $offset set the index where the returned entries start (optional)
     * @param  string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoicePositionsById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getInvoicePositionsByIdRequest($invoice_id, $limit = null, $offset = null, $embed = null, string $contentType = self::contentTypes['getInvoicePositionsById'][0])
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
     * @param  float $status Status of the invoices (optional)
     * @param  string $invoice_number Retrieve all invoices with this invoice number (optional)
     * @param  int $start_date Retrieve all invoices with a date equal or higher (optional)
     * @param  int $end_date Retrieve all invoices with a date equal or lower (optional)
     * @param  bool $count_all If all invoices should be counted (optional)
     * @param  array<string,string> $invoice_type The type of invoice (optional)
     * @param  int $offset Which offset to start with (optional)
     * @param  int $limit The max number of invoices (optional)
     * @param  bool $partially_paid Limit to partially paid invoices (optional)
     * @param  bool $canceled Limit to canceled invoices (optional)
     * @param  GetInvoicesContactParameter $contact Retrieve all invoices with this contact. The value of contact[objectName] must be &#39;Contact&#39;. (optional)
     * @param  GetInvoicesPaymentMethodParameter $payment_method Retrieve all invoices with this paymentMethod. The value of paymentMethod[objectName] must be &#39;PaymentMethod&#39;. (optional)
     * @param  string[] $embed embed (optional)
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
     * @param  float $status Status of the invoices (optional)
     * @param  string $invoice_number Retrieve all invoices with this invoice number (optional)
     * @param  int $start_date Retrieve all invoices with a date equal or higher (optional)
     * @param  int $end_date Retrieve all invoices with a date equal or lower (optional)
     * @param  bool $count_all If all invoices should be counted (optional)
     * @param  array<string,string> $invoice_type The type of invoice (optional)
     * @param  int $offset Which offset to start with (optional)
     * @param  int $limit The max number of invoices (optional)
     * @param  bool $partially_paid Limit to partially paid invoices (optional)
     * @param  bool $canceled Limit to canceled invoices (optional)
     * @param  GetInvoicesContactParameter $contact Retrieve all invoices with this contact. The value of contact[objectName] must be &#39;Contact&#39;. (optional)
     * @param  GetInvoicesPaymentMethodParameter $payment_method Retrieve all invoices with this paymentMethod. The value of paymentMethod[objectName] must be &#39;PaymentMethod&#39;. (optional)
     * @param  string[] $embed (optional)
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
     * @param  float $status Status of the invoices (optional)
     * @param  string $invoice_number Retrieve all invoices with this invoice number (optional)
     * @param  int $start_date Retrieve all invoices with a date equal or higher (optional)
     * @param  int $end_date Retrieve all invoices with a date equal or lower (optional)
     * @param  bool $count_all If all invoices should be counted (optional)
     * @param  array<string,string> $invoice_type The type of invoice (optional)
     * @param  int $offset Which offset to start with (optional)
     * @param  int $limit The max number of invoices (optional)
     * @param  bool $partially_paid Limit to partially paid invoices (optional)
     * @param  bool $canceled Limit to canceled invoices (optional)
     * @param  GetInvoicesContactParameter $contact Retrieve all invoices with this contact. The value of contact[objectName] must be &#39;Contact&#39;. (optional)
     * @param  GetInvoicesPaymentMethodParameter $payment_method Retrieve all invoices with this paymentMethod. The value of paymentMethod[objectName] must be &#39;PaymentMethod&#39;. (optional)
     * @param  string[] $embed (optional)
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
     * @param  float $status Status of the invoices (optional)
     * @param  string $invoice_number Retrieve all invoices with this invoice number (optional)
     * @param  int $start_date Retrieve all invoices with a date equal or higher (optional)
     * @param  int $end_date Retrieve all invoices with a date equal or lower (optional)
     * @param  bool $count_all If all invoices should be counted (optional)
     * @param  array<string,string> $invoice_type The type of invoice (optional)
     * @param  int $offset Which offset to start with (optional)
     * @param  int $limit The max number of invoices (optional)
     * @param  bool $partially_paid Limit to partially paid invoices (optional)
     * @param  bool $canceled Limit to canceled invoices (optional)
     * @param  GetInvoicesContactParameter $contact Retrieve all invoices with this contact. The value of contact[objectName] must be &#39;Contact&#39;. (optional)
     * @param  GetInvoicesPaymentMethodParameter $payment_method Retrieve all invoices with this paymentMethod. The value of paymentMethod[objectName] must be &#39;PaymentMethod&#39;. (optional)
     * @param  string[] $embed (optional)
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
     * @param  float $status Status of the invoices (optional)
     * @param  string $invoice_number Retrieve all invoices with this invoice number (optional)
     * @param  int $start_date Retrieve all invoices with a date equal or higher (optional)
     * @param  int $end_date Retrieve all invoices with a date equal or lower (optional)
     * @param  bool $count_all If all invoices should be counted (optional)
     * @param  array<string,string> $invoice_type The type of invoice (optional)
     * @param  int $offset Which offset to start with (optional)
     * @param  int $limit The max number of invoices (optional)
     * @param  bool $partially_paid Limit to partially paid invoices (optional)
     * @param  bool $canceled Limit to canceled invoices (optional)
     * @param  GetInvoicesContactParameter $contact Retrieve all invoices with this contact. The value of contact[objectName] must be &#39;Contact&#39;. (optional)
     * @param  GetInvoicesPaymentMethodParameter $payment_method Retrieve all invoices with this paymentMethod. The value of paymentMethod[objectName] must be &#39;PaymentMethod&#39;. (optional)
     * @param  string[] $embed (optional)
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
     * @param  GetOpenInvoiceReminderDebitInvoiceParameter $invoice Retrieve the open reminder debit for this invoice. The value of invoice[objectName] must be &#39;Invoice&#39;. (required)
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
     * @param  GetOpenInvoiceReminderDebitInvoiceParameter $invoice Retrieve the open reminder debit for this invoice. The value of invoice[objectName] must be &#39;Invoice&#39;. (required)
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
     * @param  GetOpenInvoiceReminderDebitInvoiceParameter $invoice Retrieve the open reminder debit for this invoice. The value of invoice[objectName] must be &#39;Invoice&#39;. (required)
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
     * @param  GetOpenInvoiceReminderDebitInvoiceParameter $invoice Retrieve the open reminder debit for this invoice. The value of invoice[objectName] must be &#39;Invoice&#39;. (required)
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
     * @param  GetOpenInvoiceReminderDebitInvoiceParameter $invoice Retrieve the open reminder debit for this invoice. The value of invoice[objectName] must be &#39;Invoice&#39;. (required)
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
     * Operation invoiceGetPdf
     *
     * Retrieve pdf document of an invoice
     *
     * @param  int $invoice_id ID of invoice from which you want the pdf (required)
     * @param  bool $download If u want to download the pdf of the invoice. (optional)
     * @param  bool $prevent_send_by Defines if u want to send the invoice. (optional)
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
     * @param  bool $download If u want to download the pdf of the invoice. (optional)
     * @param  bool $prevent_send_by Defines if u want to send the invoice. (optional)
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
     * @param  bool $download If u want to download the pdf of the invoice. (optional)
     * @param  bool $prevent_send_by Defines if u want to send the invoice. (optional)
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
     * @param  bool $download If u want to download the pdf of the invoice. (optional)
     * @param  bool $prevent_send_by Defines if u want to send the invoice. (optional)
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
     * @param  bool $download If u want to download the pdf of the invoice. (optional)
     * @param  bool $prevent_send_by Defines if u want to send the invoice. (optional)
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
     * Operation invoiceRender
     *
     * Render the pdf document of an invoice
     *
     * @param  int $invoice_id ID of invoice to render (required)
     * @param  \Itsmind\Sevdesk\Model\InvoiceRenderRequest $invoice_render_request Define if the document should be forcefully re-rendered. (optional)
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
     * @param  \Itsmind\Sevdesk\Model\InvoiceRenderRequest $invoice_render_request Define if the document should be forcefully re-rendered. (optional)
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
     * @param  \Itsmind\Sevdesk\Model\InvoiceRenderRequest $invoice_render_request Define if the document should be forcefully re-rendered. (optional)
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
     * @param  \Itsmind\Sevdesk\Model\InvoiceRenderRequest $invoice_render_request Define if the document should be forcefully re-rendered. (optional)
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
     * @param  \Itsmind\Sevdesk\Model\InvoiceRenderRequest $invoice_render_request Define if the document should be forcefully re-rendered. (optional)
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
     * Operation invoiceSendBy
     *
     * Mark invoice as sent
     *
     * @param  int $invoice_id ID of invoice to mark as sent (required)
     * @param  \Itsmind\Sevdesk\Model\InvoiceSendByRequest $invoice_send_by_request Specify the send type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceSendBy'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\ModelInvoiceResponse
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
     * @param  \Itsmind\Sevdesk\Model\InvoiceSendByRequest $invoice_send_by_request Specify the send type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceSendBy'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\ModelInvoiceResponse, HTTP status code, HTTP response headers (array of strings)
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
                    if ('\Itsmind\Sevdesk\Model\ModelInvoiceResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ModelInvoiceResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ModelInvoiceResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\ModelInvoiceResponse';
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
                        '\Itsmind\Sevdesk\Model\ModelInvoiceResponse',
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
     * @param  \Itsmind\Sevdesk\Model\InvoiceSendByRequest $invoice_send_by_request Specify the send type (optional)
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
     * @param  \Itsmind\Sevdesk\Model\InvoiceSendByRequest $invoice_send_by_request Specify the send type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['invoiceSendBy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function invoiceSendByAsyncWithHttpInfo($invoice_id, $invoice_send_by_request = null, string $contentType = self::contentTypes['invoiceSendBy'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\ModelInvoiceResponse';
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
     * @param  \Itsmind\Sevdesk\Model\InvoiceSendByRequest $invoice_send_by_request Specify the send type (optional)
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
     * @param  \Itsmind\Sevdesk\Model\SendInvoiceViaEMailRequest $send_invoice_via_e_mail_request Mail data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendInvoiceViaEMail'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\ModelEmail
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
     * @param  \Itsmind\Sevdesk\Model\SendInvoiceViaEMailRequest $send_invoice_via_e_mail_request Mail data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendInvoiceViaEMail'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\ModelEmail, HTTP status code, HTTP response headers (array of strings)
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
                    if ('\Itsmind\Sevdesk\Model\ModelEmail' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Itsmind\Sevdesk\Model\ModelEmail' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Itsmind\Sevdesk\Model\ModelEmail', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Itsmind\Sevdesk\Model\ModelEmail';
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
                        '\Itsmind\Sevdesk\Model\ModelEmail',
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
     * @param  \Itsmind\Sevdesk\Model\SendInvoiceViaEMailRequest $send_invoice_via_e_mail_request Mail data (optional)
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
     * @param  \Itsmind\Sevdesk\Model\SendInvoiceViaEMailRequest $send_invoice_via_e_mail_request Mail data (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['sendInvoiceViaEMail'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendInvoiceViaEMailAsyncWithHttpInfo($invoice_id, $send_invoice_via_e_mail_request = null, string $contentType = self::contentTypes['sendInvoiceViaEMail'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\ModelEmail';
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
     * @param  \Itsmind\Sevdesk\Model\SendInvoiceViaEMailRequest $send_invoice_via_e_mail_request Mail data (optional)
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
     * @param  string[] $embed embed (optional)
     * @param  \Itsmind\Sevdesk\Model\ModelInvoiceUpdate $model_invoice_update Update data (optional)
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
     * @param  string[] $embed (optional)
     * @param  \Itsmind\Sevdesk\Model\ModelInvoiceUpdate $model_invoice_update Update data (optional)
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
     * @param  string[] $embed (optional)
     * @param  \Itsmind\Sevdesk\Model\ModelInvoiceUpdate $model_invoice_update Update data (optional)
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
     * @param  string[] $embed (optional)
     * @param  \Itsmind\Sevdesk\Model\ModelInvoiceUpdate $model_invoice_update Update data (optional)
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
     * @param  string[] $embed (optional)
     * @param  \Itsmind\Sevdesk\Model\ModelInvoiceUpdate $model_invoice_update Update data (optional)
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
     * Operation updateStatus
     *
     * Update the status of an invoice
     *
     * @param  int $invoice_id ID of invoice to update (required)
     * @param  \Itsmind\Sevdesk\Model\UpdateStatusRequest $update_status_request Update the status of an invoice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateStatus'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
     */
    public function updateStatus($invoice_id, $update_status_request = null, string $contentType = self::contentTypes['updateStatus'][0])
    {
        list($response) = $this->updateStatusWithHttpInfo($invoice_id, $update_status_request, $contentType);
        return $response;
    }

    /**
     * Operation updateStatusWithHttpInfo
     *
     * Update the status of an invoice
     *
     * @param  int $invoice_id ID of invoice to update (required)
     * @param  \Itsmind\Sevdesk\Model\UpdateStatusRequest $update_status_request Update the status of an invoice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateStatus'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateStatusWithHttpInfo($invoice_id, $update_status_request = null, string $contentType = self::contentTypes['updateStatus'][0])
    {
        $request = $this->updateStatusRequest($invoice_id, $update_status_request, $contentType);

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
     * Operation updateStatusAsync
     *
     * Update the status of an invoice
     *
     * @param  int $invoice_id ID of invoice to update (required)
     * @param  \Itsmind\Sevdesk\Model\UpdateStatusRequest $update_status_request Update the status of an invoice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateStatusAsync($invoice_id, $update_status_request = null, string $contentType = self::contentTypes['updateStatus'][0])
    {
        return $this->updateStatusAsyncWithHttpInfo($invoice_id, $update_status_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateStatusAsyncWithHttpInfo
     *
     * Update the status of an invoice
     *
     * @param  int $invoice_id ID of invoice to update (required)
     * @param  \Itsmind\Sevdesk\Model\UpdateStatusRequest $update_status_request Update the status of an invoice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateStatusAsyncWithHttpInfo($invoice_id, $update_status_request = null, string $contentType = self::contentTypes['updateStatus'][0])
    {
        $returnType = '\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response';
        $request = $this->updateStatusRequest($invoice_id, $update_status_request, $contentType);

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
     * Create request for operation 'updateStatus'
     *
     * @param  int $invoice_id ID of invoice to update (required)
     * @param  \Itsmind\Sevdesk\Model\UpdateStatusRequest $update_status_request Update the status of an invoice. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateStatus'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateStatusRequest($invoice_id, $update_status_request = null, string $contentType = self::contentTypes['updateStatus'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling updateStatus'
            );
        }



        $resourcePath = '/Invoice/{invoiceId}/changeStatus';
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
        if (isset($update_status_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($update_status_request));
            } else {
                $httpBody = $update_status_request;
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
