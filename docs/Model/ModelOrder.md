# # ModelOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The order id | [optional] [readonly]
**object_name** | **string** | The order object name | [optional] [default to 'Order']
**map_all** | **bool** |  |
**create** | **\DateTime** | Date of order creation | [optional] [readonly]
**update** | **\DateTime** | Date of last order update | [optional] [readonly]
**order_number** | **string** | The order number |
**contact** | [**\Itsmind\Sevdesk\Model\ModelOrderContact**](ModelOrderContact.md) |  |
**order_date** | **\DateTime** | Needs to be provided as timestamp or dd.mm.yyyy |
**status** | **int** | Please have a look in       &lt;a href&#x3D;&#39;#tag/Order/Types-and-status-of-orders&#39;&gt;status of orders&lt;/a&gt;      to see what the different status codes mean |
**header** | **string** | Normally consist of prefix plus the order number |
**head_text** | **string** | Certain html tags can be used here to format your text | [optional]
**foot_text** | **string** | Certain html tags can be used here to format your text | [optional]
**address_country** | [**\Itsmind\Sevdesk\Model\ModelOrderAddressCountry**](ModelOrderAddressCountry.md) |  |
**delivery_terms** | **string** | Delivery terms of the order | [optional]
**payment_terms** | **string** | Payment terms of the order | [optional]
**version** | **int** | Version of the order.&lt;br&gt;      Can be used if you have multiple drafts for the same order.&lt;br&gt;      Should start with 0 |
**small_settlement** | **bool** | Defines if the client uses the small settlement scheme.      If yes, the order must not contain any vat | [optional]
**contact_person** | [**\Itsmind\Sevdesk\Model\ModelOrderContactPerson**](ModelOrderContactPerson.md) |  |
**tax_rate** | **float** | Is overwritten by order position tax rates |
**tax_rule** | [**\Itsmind\Sevdesk\Model\ModelCreditNoteResponseTaxRule**](ModelCreditNoteResponseTaxRule.md) |  |
**tax_set** | [**\Itsmind\Sevdesk\Model\ModelOrderTaxSet**](ModelOrderTaxSet.md) |  | [optional]
**tax_text** | **string** | A common tax text would be &#39;Umsatzsteuer 19%&#39; |
**tax_type** | **string** | **Use this in sevDesk-Update 1.0 (instead of taxRule).**  Tax type of the order. There are four tax types: 1. default - Umsatzsteuer ausweisen 2. eu - Steuerfreie innergemeinschaftliche Lieferung (Europäische Union) 3. noteu - Steuerschuldnerschaft des Leistungsempfängers (außerhalb EU, z. B. Schweiz) 4. custom - Using custom tax set 5. ss - Not subject to VAT according to §19 1 UStG Tax rates are heavily connected to the tax type used. |
**order_type** | **string** | Type of the order. For more information on the different types, check      &lt;a href&#x3D;&#39;#tag/Order/Types-and-status-of-orders&#39;&gt;this&lt;/a&gt; | [optional]
**send_date** | **\DateTime** | The date the order was sent to the customer | [optional]
**address** | **string** | Complete address of the recipient including name, street, city, zip and country.&lt;br&gt;       Line breaks can be used and will be displayed on the invoice pdf. | [optional]
**currency** | **string** | Currency used in the order. Needs to be currency code according to ISO-4217 |
**customer_internal_note** | **string** | Internal note of the customer. Contains data entered into field &#39;Referenz/Bestellnummer&#39; | [optional]
**show_net** | **bool** | If true, the net amount of each position will be shown on the order. Otherwise gross amount | [optional]
**send_type** | **string** | Type which was used to send the order. IMPORTANT: Please refer to the order section of the       *     API-Overview to understand how this attribute can be used before using it! | [optional]
**origin** | [**\Itsmind\Sevdesk\Model\ModelOrderOrigin**](ModelOrderOrigin.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
