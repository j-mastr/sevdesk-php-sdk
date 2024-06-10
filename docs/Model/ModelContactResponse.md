# # ModelContactResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The contact id | [optional] [readonly]
**object_name** | **string** | The contact object name | [optional] [readonly]
**create** | **\DateTime** | Date of contact creation | [optional] [readonly]
**update** | **\DateTime** | Date of last contact update | [optional] [readonly]
**name** | **string** | The organization name.&lt;br&gt; Be aware that the type of contact will depend on this attribute.&lt;br&gt; If it holds a value, the contact will be regarded as an organization. | [optional] [readonly]
**status** | **string** | Defines the status of the contact. 100 &lt;-&gt; Lead - 500 &lt;-&gt; Pending - 1000 &lt;-&gt; Active. | [optional] [readonly]
**customer_number** | **string** | The customer number | [optional] [readonly]
**parent** | [**\Itsmind\Sevdesk\Model\ModelContactResponseParent**](ModelContactResponseParent.md) |  | [optional]
**surename** | **string** | The &lt;b&gt;first&lt;/b&gt; name of the contact.&lt;br&gt; Yeah... not quite right in literally every way. We know.&lt;br&gt; Not to be used for organizations. | [optional] [readonly]
**familyname** | **string** | The last name of the contact.&lt;br&gt; Not to be used for organizations. | [optional] [readonly]
**titel** | **string** | A non-academic title for the contact. Not to be used for organizations. | [optional] [readonly]
**category** | [**\Itsmind\Sevdesk\Model\ModelContactResponseCategory**](ModelContactResponseCategory.md) |  | [optional]
**description** | **string** | A description for the contact. | [optional] [readonly]
**academic_title** | **string** | A academic title for the contact. Not to be used for organizations. | [optional] [readonly]
**gender** | **string** | Gender of the contact.&lt;br&gt; Not to be used for organizations. | [optional] [readonly]
**sev_client** | [**\Itsmind\Sevdesk\Model\ModelContactResponseSevClient**](ModelContactResponseSevClient.md) |  | [optional]
**name2** | **string** | Second name of the contact.&lt;br&gt; Not to be used for organizations. | [optional] [readonly]
**birthday** | **\DateTime** | Birthday of the contact.&lt;br&gt; Not to be used for organizations. | [optional] [readonly]
**vat_number** | **string** | Vat number of the contact. | [optional] [readonly]
**bank_account** | **string** | Bank account number (IBAN) of the contact. | [optional] [readonly]
**bank_number** | **string** | Bank number of the bank used by the contact. | [optional] [readonly]
**default_cashback_time** | **string** | Absolute time in days which the contact has to pay his invoices and subsequently get a cashback. | [optional] [readonly]
**default_cashback_percent** | **float** | Percentage of the invoice sum the contact gets back if he paid invoices in time. | [optional] [readonly]
**default_time_to_pay** | **string** | The payment goal in days which is set for every invoice of the contact. | [optional] [readonly]
**tax_number** | **string** | The tax number of the contact. | [optional] [readonly]
**tax_office** | **string** | The tax office of the contact (only for greek customers). | [optional] [readonly]
**exempt_vat** | **string** | Defines if the contact is freed from paying vat. | [optional] [readonly]
**default_discount_amount** | **float** | The default discount the contact gets for every invoice.&lt;br&gt; Depending on defaultDiscountPercentage attribute, in percent or absolute value. | [optional] [readonly]
**default_discount_percentage** | **string** | Defines if the discount is a percentage (true) or an absolute value (false). | [optional] [readonly]
**buyer_reference** | **string** | Buyer reference of the contact. | [optional] [readonly]
**government_agency** | **string** | Defines whether the contact is a government agency (true) or not (false). | [optional] [readonly]
**additional_information** | **string** | Additional information stored for the contact. | [optional] [readonly]
**tax_set** | [**\Itsmind\Sevdesk\Model\ModelContactResponseTaxSet**](ModelContactResponseTaxSet.md) |  | [optional]
**tax_type** | **string** | Defines which tax regulation the contact is using. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
