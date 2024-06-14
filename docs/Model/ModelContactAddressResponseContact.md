# # ModelContactAddressResponseContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The organization name.&lt;br&gt; Be aware that the type of contact will depend on this attribute.&lt;br&gt; If it holds a value, the contact will be regarded as an organization. | [optional]
**status** | **int** | Defines the status of the contact. 100 &lt;-&gt; Lead - 500 &lt;-&gt; Pending - 1000 &lt;-&gt; Active. | [optional] [default to 100]
**customer_number** | **string** | The customer number | [optional]
**parent** | [**\Itsmind\Sevdesk\Model\ModelContactParent**](ModelContactParent.md) |  | [optional]
**surename** | **string** | The &lt;b&gt;first&lt;/b&gt; name of the contact.&lt;br&gt; Yeah... not quite right in literally every way. We know.&lt;br&gt; Not to be used for organizations. | [optional]
**familyname** | **string** | The last name of the contact.&lt;br&gt; Not to be used for organizations. | [optional]
**titel** | **string** | A non-academic title for the contact. Not to be used for organizations. | [optional]
**category** | [**\Itsmind\Sevdesk\Model\ModelContactCategory**](ModelContactCategory.md) |  |
**description** | **string** | A description for the contact. | [optional]
**academic_title** | **string** | A academic title for the contact. Not to be used for organizations. | [optional]
**gender** | **string** | Gender of the contact.&lt;br&gt; Not to be used for organizations. | [optional]
**name2** | **string** | Second name of the contact.&lt;br&gt; Not to be used for organizations. | [optional]
**birthday** | **\DateTime** | Birthday of the contact.&lt;br&gt; Not to be used for organizations. | [optional]
**vat_number** | **string** | Vat number of the contact. | [optional]
**bank_account** | **string** | Bank account number (IBAN) of the contact. | [optional]
**bank_number** | **string** | Bank number of the bank used by the contact. | [optional]
**default_cashback_time** | **int** | Absolute time in days which the contact has to pay his invoices and subsequently get a cashback. | [optional]
**default_cashback_percent** | **float** | Percentage of the invoice sum the contact gets back if he paid invoices in time. | [optional]
**default_time_to_pay** | **int** | The payment goal in days which is set for every invoice of the contact. | [optional]
**tax_number** | **string** | The tax number of the contact. | [optional]
**tax_office** | **string** | The tax office of the contact (only for greek customers). | [optional]
**exempt_vat** | **bool** | Defines if the contact is freed from paying vat. | [optional]
**default_discount_amount** | **float** | The default discount the contact gets for every invoice.&lt;br&gt; Depending on defaultDiscountPercentage attribute, in percent or absolute value. | [optional]
**default_discount_percentage** | **bool** | Defines if the discount is a percentage (true) or an absolute value (false). | [optional]
**buyer_reference** | **string** | Buyer reference of the contact. | [optional]
**government_agency** | **bool** | Defines whether the contact is a government agency (true) or not (false). | [optional]
**addresses** | [**\Itsmind\Sevdesk\Model\ModelContactResponseAddressesInner[]**](ModelContactResponseAddressesInner.md) |  | [optional]
**communication_ways** | [**\Itsmind\Sevdesk\Model\ModelContactResponseCommunicationWaysInner[]**](ModelContactResponseCommunicationWaysInner.md) |  | [optional]
**main_address** | [**\Itsmind\Sevdesk\Model\ModelContactAddress**](ModelContactAddress.md) |  | [optional]
**tax_set** | [**\Itsmind\Sevdesk\Model\ModelContactTaxSet**](ModelContactTaxSet.md) |  | [optional]
**tax_type** | **string** | Defines which tax regulation the contact is using. | [optional]
**id** | **int** | Unique identifier of the contact |
**object_name** | **string** | Model name, which is &#39;Contact&#39; | [default to 'Contact']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
