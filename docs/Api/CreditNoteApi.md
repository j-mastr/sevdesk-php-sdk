# Itsmind\Sevdesk\CreditNoteApi

# Purpose of credit notes in sevdesk  A credit notes is essentially a special type of invoice which is not written by the service provider but rather by the beneficiary.&lt;br&gt; In common use, the term credit note is used when someone receives a payment for which he did not write an invoice.&lt;br&gt; In sevdesk you need to choose a booking category for the credit note you want to create.&lt;br&gt; This booking category describes why you need to create a credit note and can&#39;t be disregarded.&lt;br&gt;  # Credit note booking categories  As mentioned above, every credit note needs to have a booking category.&lt;br&gt; The following categories are available at the moment. &lt;/p&gt; &lt;table&gt; &lt;tr&gt; &lt;th&gt;Booking Category&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;th&gt;Abbreviation&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Provision&lt;/td&gt; &lt;td&gt; The credit note is a provision. &lt;/td&gt; &lt;td&gt;&lt;code&gt;PROVISION&lt;/code&gt;&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Assigned royalty&lt;/td&gt; &lt;td&gt; The credit note is a assigned royalty. &lt;/td&gt; &lt;td&gt;&lt;code&gt;ROYALTY_ASSIGNED&lt;/code&gt;&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Unassigned royalty&lt;/td&gt; &lt;td&gt; The credit note is a unassigned royalty. &lt;/td&gt; &lt;td&gt;&lt;code&gt;ROYALTY_UNASSIGNED&lt;/code&gt;&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Underachievement of invoice&lt;/td&gt; &lt;td&gt; The Credit Note is a underachievement of an invoice or voucher.&lt;br&gt; If this is the case, you need to provide the ID of this invoice or voucher in the attribute &lt;code&gt;refSrcInvoice&lt;/code&gt; or &lt;code&gt;refSrcVoucher&lt;/code&gt;! &lt;/td&gt; &lt;td&gt;&lt;code&gt;UNDERACHIEVEMENT&lt;/code&gt;&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;To be booked on special account&lt;/td&gt; &lt;td&gt; &lt;b&gt;Not supported in sevdesk-Update 2.0.&lt;/b&gt;&lt;br&gt; The Credit Note should be booked on a special account.&lt;br&gt; If this is the case, you need to provide the ID of this account in the attribute accountingType! &lt;/td&gt; &lt;td&gt;&lt;code&gt;ACCOUNTING_TYPE&lt;/code&gt;&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;  # Status of credit notes  &lt;table&gt; &lt;tr&gt; &lt;th&gt;Credit note status&lt;/th&gt; &lt;th&gt;Meaning&lt;/th&gt; &lt;th&gt;Status code&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Draft&lt;/td&gt; &lt;td&gt; The credit note is still a draft.&lt;br&gt; It has not been sent to the end-customer and can still be changed. &lt;/td&gt; &lt;td&gt; 100 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Open / Delivered&lt;/td&gt; &lt;td&gt; The credit note has been sent to the end-customer.&lt;br&gt; &lt;/td&gt; &lt;td&gt; 200 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Partially paid&lt;/td&gt; &lt;td&gt; The credit note has been partially paid.&lt;br&gt; &lt;/td&gt; &lt;td&gt; 1000 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Paid&lt;/td&gt; &lt;td&gt; The credit note has been paid.&lt;br&gt; &lt;/td&gt; &lt;td&gt; 1000 &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt; It is again important to keep in mind the status codes for all status of credit notes or at least the one you will need.  # Attributes of a credit note  Here is the table of all attributes of credit notes.&lt;br&gt; Necessary attributes, which must not be left out, are marked red.&lt;br&gt; Attributes which are strongly recommended for valid bookkeeping are marked orange.&lt;br&gt; There is also a distinction between credit note types. &lt;table&gt; &lt;tr&gt; &lt;th&gt;Attribute&lt;/th&gt; &lt;th&gt;Credit Note Type&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;th&gt;Attribute Type&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxType&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; &lt;b&gt;Use this in sevdesk-Update 1.0 (instead of taxRule).&lt;/b&gt;&lt;br&gt; Defines the vat-regulation.&lt;br&gt; Can be: &lt;ul&gt; &lt;li&gt;&lt;code&gt;default&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;eu&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;noteu&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;custom&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;ss&lt;/code&gt;&lt;/li&gt; &lt;/ul&gt; &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;taxSet&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; &lt;b&gt;Use this in sevdesk-Update 1.0 (instead of taxRule).&lt;/b&gt;&lt;br&gt; Use for custom defined vat-regulations.&lt;br&gt; Requires &lt;code&gt;\&quot;taxType\&quot;: \&quot;custom\&quot;&lt;/code&gt; &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxRule&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; &lt;b&gt;Use this in sevdesk-Update 2.0 (replaces taxType / taxSet).&lt;/b&gt;&lt;br&gt; See &lt;a href&#x3D;\&quot;#section/sevdesk-Update-2.0/Tax-Rules\&quot;&gt;list of available VAT rules.&lt;/a&gt;&lt;br&gt; &lt;br&gt; Example for Umsatzsteuerpflichtige Umsätze: &lt;code&gt;\&quot;taxRule\&quot;: {\&quot;id\&quot;: \&quot;1\&quot;, \&quot;objectName\&quot;: \&quot;TaxRule\&quot;}&lt;/code&gt; &lt;/td&gt; &lt;td&gt;Nested object (TaxRule)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;accountingType&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The account on which this credit note should be booked.&lt;br&gt; This attribute &lt;b&gt;has&lt;/b&gt; to be used in case the booking category &lt;b&gt;ACCOUNTING_TYPE&lt;/b&gt; is used. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;refSrcInvoice&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The invoice from which the underachievement originates.&lt;br&gt; This attribute &lt;b&gt;has&lt;/b&gt; to be used if &lt;code&gt;\&quot;bookingCategory\&quot;: \&quot;UNDERACHIEVEMENT\&quot;&lt;/code&gt; is used.&lt;br&gt; &lt;br&gt; We recommend to use &lt;a href&#x3D;\&quot;#tag/CreditNote/operation/createCreditNoteFromInvoice\&quot;&gt;/CreditNote/Factory/createFromInvoice&lt;/a&gt; to create a credit note for an invoices. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;refSrcVoucher&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; &lt;b&gt;Not supported in sevdesk-Update 2.0.&lt;/b&gt;&lt;br&gt; The voucher from which the underachievement originates.&lt;br&gt; This attribute &lt;b&gt;has&lt;/b&gt; to be used in case the booking category &lt;code&gt;UNDERACHIEVEMENT&lt;/code&gt; is used.&lt;br&gt; &lt;br&gt; We recommend to use &lt;a href&#x3D;\&quot;#tag/CreditNote/operation/createCreditNoteFromVoucher\&quot;&gt;/CreditNote/Factory/createFromVoucher&lt;/a&gt; to create a credit note for an invoices. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;currency&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; Currency of the credit note.&lt;br&gt; Needs to be currency code according to ISO-4217. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxText&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; Text describing the vat regulation you chose.&lt;br&gt; A common text of our German customers would be:&lt;br&gt; Umsatzsteuer ausweisen or zzgl. Umsatzsteuer 19% &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;taxRate&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; This is not used anymore. Use the taxRate of the individual positions instead. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;contactPerson&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The sevdesk user which acts as a contact person for this credit note.&lt;br&gt; &lt;/td&gt; &lt;td&gt;Nested object (SevUser)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;smallSettlement&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; If the sevdesk account is falling under the small entrepreneur scheme the credit notes must&#39;t contain any vat.&lt;br&gt; If this is the case, this attribute should be true, otherwise false. &lt;/td&gt; &lt;td&gt;Boolean&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;creditNoteDate&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The credit note date. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;status&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The credit note status. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;showNet&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; This attribute determines, if the price you give the credit note positions will be regarded as gross or net.&lt;br&gt; If true, the price attribute will hold the net value, otherwise the gross value, as described in the section above. &lt;/td&gt; &lt;td&gt;Boolean&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;enshrined&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; Enshrined credit notes cannot be changed.&lt;br&gt; Can only be set via &lt;a href&#x3D;\&quot;#tag/CreditNote/operation/creditNoteEnshrine\&quot;&gt;/CreditNote/{creditNoteId}/enshrine&lt;/a&gt;. This operation cannot be undone. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;customerInternalNote&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; You can use this attribute to provide a note for the credit note.&lt;br&gt; It can be used for reference numbers, order numbers or other important information. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;address&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; Holds the &lt;b&gt;complete&lt;/b&gt; address to which the credit note is directed.&lt;br&gt; You can use line brakes to separate the different address parts. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;deliveryDate&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The delivery date of the credit note.&lt;br&gt; This can also be a date range if you provide another timestamp for &lt;b&gt;deliveryDateUntil&lt;/b&gt;. &lt;/td&gt; &lt;td&gt;Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;deliveryDateUntil&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; You can provide a value here if you want the delivery date to be a date range and you have already given a timestamp to &lt;b&gt;deliveryDate&lt;/b&gt;. &lt;/td&gt; &lt;td&gt;Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;sendType&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; Is set when using [CreditNote/{creditNoteId}/sendBy](#tag/CreditNote/operation/creditNoteSendBy) / [CreditNote/{creditNoteId}/sendViaEmail](#tag/CreditNote/operation/sendCreditNoteViaEMail).&lt;br&gt; Valid types are: VPR (printed), VPDF (downloaded), VM (mailed), VP (postal). &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;creditNoteNumber&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The credit note number. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;contact&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The end-customer to which the credit note is directed.&lt;br&gt; &lt;/td&gt; &lt;td&gt;Nested object (Contact)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;header&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The credit note header.&lt;br&gt; Usually consists of the credit note number and a prefix. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;headText&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; A head text for the credit note.&lt;br&gt; Can contain certain html tags. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;footText&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; A foot text for the credit note.&lt;br&gt; Can contain certain html tags. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;payDate&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The date the credit note has been paid. &lt;/td&gt; &lt;td&gt;Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;costCentre&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; A cost centre for the credit note. &lt;/td&gt; &lt;td&gt;Nested object (CostCentre)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;sendDate&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The date the credit note has been sent to the end-customer. &lt;/td&gt; &lt;td&gt;Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;bookingCategory&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The booking category of the credit note.&lt;br&gt; &lt;b&gt;&lt;code&gt;ACCOUNTING_TYPE&lt;/code&gt; is currently not supported in sevdesk-Update 2.0.&lt;/b&gt; &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;deliveryAddressCountry&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; &lt;p&gt;Can be used to specify a different country to the billing address (&lt;code&gt;addressCountry&lt;/code&gt;).&lt;br&gt; This country is used for &lt;a href&#x3D;\&quot;#section/sevdesk-Update-2.0/Tax-Rules\&quot;&gt;One Stop Shop VAT rules&lt;/a&gt;.&lt;br&gt; For example, to validate the tax rate of the positions.&lt;br&gt; &lt;br&gt; If not specified, it defaults to the country of the billing address.&lt;/p&gt; &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;  # The credit note number  At this point we wan&#39;t to pay special attention to the credit note number again.&lt;br&gt; The credit note number is not an attribute that must be supplied when creating a credit note, however for most, if not all of our customers, a correct enumeration is the key to structured bookkeeping, which is why duplicate entries must be avoided.&lt;br&gt; For this reason, most of the time a manual assignment of numbers is not the best idea and we are happy to provide you a endpoints which will help out finding the next credit note number. &lt;br&gt;&lt;br&gt; This GET request will check what the next credit note number should be, so that a correct enumeration is kept.&lt;br&gt; The concrete endpoint can be used for a multitude of enumerations, but we will just concentrate on checking the next credit note number.&lt;br&gt; &lt;ul&gt; &lt;li&gt;&lt;b&gt;v1/SevSequence/Factory/getByType?objectType&#x3D;CreditNote&amp;type&#x3D;CN&lt;/b&gt;&lt;/li&gt; &lt;/ul&gt;  # How to filter for certain credit notes  Often you don&#39;t want to retrieve all credit notes in a sevdesk account or one specific credit note of which you know the ID, but rather a list of credit notes or a single credit note with certain properties.&lt;br&gt; For this purpose we provide a bunch of filters that you can attach to your GET query string for nearly all endpoints.&lt;br&gt; Here are all filters applicable to a credit note query. &lt;table&gt; &lt;tr&gt; &lt;th&gt;Filter&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;creditNoteNumber&#x3D;{number}&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes with number as a credit note number&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;onlyEnshrined&#x3D;true&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes which are enshrined&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;tags[x][id]&#x3D;{id}&amp;tags[x][objectName]&#x3D;Tag&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes with id as a tag.&lt;br&gt; You can specify multiple tags by adding more array entries. &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;status&#x3D;{status}&lt;/td&gt; &lt;td&gt;Only retrieve credit notes of a given status&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;delinquent&#x3D;true&lt;/td&gt; &lt;td&gt;Only retrieve delinquent (due) credit notes&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;notdelinquent&#x3D;true&lt;/td&gt; &lt;td&gt;Only retrieve credit notes which are not delinquent (due)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;customerIntenalNote&#x3D;{note}&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes with note as a customer internal note&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;origin[id]&#x3D;{id}&amp;origin[objectName]&#x3D;ModelName&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes with id as an origin&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;costCentre[id]&#x3D;{id}&amp;costCentre[objectName]&#x3D;CostCentre&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes with id as a cost centre.&lt;br&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;contact[id]&#x3D;{id}&amp;contact[objectName]&#x3D;Contact&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes with id as a contact&lt;br&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;startDate&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes where credit note date is bigger than timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;endDate&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt; Only retrieve all credit notes where credit note date is smaller than timestamp&lt;br&gt; If startDate and endDate are both supplied, you will get all credit notes in the defined range &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;day&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes where credit note date falls on the day of timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;header&#x3D;{header}&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes with header as a header&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;headerSearch&#x3D;{header}&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes of which the header is like header&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;paymentMethod[id]&#x3D;{id}&amp;paymentMethod[objectName]&#x3D;PaymentMethod&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes with id as a payment method&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;headerOrNumber&#x3D;{headerOrNumber}&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes of which the header or credit note number is like headerOrNumber&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;headerStartsWith&#x3D;{headerStart}&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes of which the header starts with headerStart&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;globalSearch&#x3D;{searchTerm}&lt;/td&gt; &lt;td&gt;Search for credit notes related to searchTerm&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderByCreditNoteNumber&#x3D;{ASC/DESC}&lt;/td&gt; &lt;td&gt;Order all credit notes after credit note number in ASC/DESC order&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;partiallyPaid&#x3D;true&lt;/td&gt; &lt;td&gt; Retrieve all credit notes which are partially paid &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderByDueDate&#x3D;true&lt;/td&gt; &lt;td&gt;Retrieve all credit notes ordered by their due date&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderByDueTime&#x3D;true&lt;/td&gt; &lt;td&gt;Retrieve all credit notes ordered by their due time&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderByDebit&#x3D;true&lt;/td&gt; &lt;td&gt;Retrieve all credit notes ordered by their debit&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;creditNoteNumberGreater&#x3D;{number}&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes of which the credit note number is bigger than number&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;creditNoteNumberNumberSmaller&#x3D;{number}&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes of which the credit note number is smaller than number&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;startAmount&#x3D;{amount}&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes of which the (net/gross) sum is larger or equal amount&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;endAmount&#x3D;{amount}&lt;/td&gt; &lt;td&gt;Only retrieve all credit notes of which the (net/gross) sum is smaller or equal amount&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookCreditNote()**](CreditNoteApi.md#bookCreditNote) | **PUT** /CreditNote/{creditNoteId}/bookAmount | Book a credit note |
| [**createCreditNoteFromInvoice()**](CreditNoteApi.md#createCreditNoteFromInvoice) | **POST** /CreditNote/Factory/createFromInvoice | Creates a new creditNote from an invoice |
| [**createCreditNoteFromVoucher()**](CreditNoteApi.md#createCreditNoteFromVoucher) | **POST** /CreditNote/Factory/createFromVoucher | Creates a new creditNote from a voucher |
| [**createcreditNote()**](CreditNoteApi.md#createcreditNote) | **POST** /CreditNote/Factory/saveCreditNote | Create a new creditNote |
| [**creditNoteEnshrine()**](CreditNoteApi.md#creditNoteEnshrine) | **PUT** /CreditNote/{creditNoteId}/enshrine | Enshrine |
| [**creditNoteGetPdf()**](CreditNoteApi.md#creditNoteGetPdf) | **GET** /CreditNote/{creditNoteId}/getPdf | Retrieve pdf document of a credit note |
| [**creditNoteResetToDraft()**](CreditNoteApi.md#creditNoteResetToDraft) | **PUT** /CreditNote/{creditNoteId}/resetToDraft | Reset status to draft |
| [**creditNoteResetToOpen()**](CreditNoteApi.md#creditNoteResetToOpen) | **PUT** /CreditNote/{creditNoteId}/resetToOpen | Reset status to open |
| [**creditNoteSendBy()**](CreditNoteApi.md#creditNoteSendBy) | **PUT** /CreditNote/{creditNoteId}/sendBy | Mark credit note as sent |
| [**deletecreditNote()**](CreditNoteApi.md#deletecreditNote) | **DELETE** /CreditNote/{creditNoteId} | Deletes an creditNote |
| [**getCreditNotes()**](CreditNoteApi.md#getCreditNotes) | **GET** /CreditNote | Retrieve CreditNote |
| [**getcreditNoteById()**](CreditNoteApi.md#getcreditNoteById) | **GET** /CreditNote/{creditNoteId} | Find creditNote by ID |
| [**sendCreditNoteByPrinting()**](CreditNoteApi.md#sendCreditNoteByPrinting) | **GET** /CreditNote/{creditNoteId}/sendByWithRender | Send credit note by printing |
| [**sendCreditNoteViaEMail()**](CreditNoteApi.md#sendCreditNoteViaEMail) | **POST** /CreditNote/{creditNoteId}/sendViaEmail | Send credit note via email |
| [**updatecreditNote()**](CreditNoteApi.md#updatecreditNote) | **PUT** /CreditNote/{creditNoteId} | Update an existing creditNote |


## `bookCreditNote()`

```php
bookCreditNote($credit_note_id, $book_credit_note_request): \Itsmind\Sevdesk\Model\BookCreditNote200Response
```

Book a credit note

Booking the credit note with a transaction is probably the most important part in the bookkeeping process.<br> There are several ways on correctly booking a credit note, all by using the same endpoint.<br> Conveniently, the booking process is exactly the same as the process for invoices and vouchers.<br> For this reason, you can have a look at it in the <a href='#tag/Invoice/How-to-book-an-invoice'>invoice chapter</a> and all you need to do is to change \"Invoice\" into \"CreditNote\" in the URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of credit note to book
$book_credit_note_request = new \Itsmind\Sevdesk\Model\BookCreditNoteRequest(); // \Itsmind\Sevdesk\Model\BookCreditNoteRequest | Booking data

try {
    $result = $apiInstance->bookCreditNote($credit_note_id, $book_credit_note_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->bookCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of credit note to book | |
| **book_credit_note_request** | [**\Itsmind\Sevdesk\Model\BookCreditNoteRequest**](../Model/BookCreditNoteRequest.md)| Booking data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\BookCreditNote200Response**](../Model/BookCreditNote200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCreditNoteFromInvoice()`

```php
createCreditNoteFromInvoice($create_credit_note_from_invoice_request): \Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response
```

Creates a new creditNote from an invoice

Use this endpoint to create a new creditNote from an invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_credit_note_from_invoice_request = new \Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoiceRequest(); // \Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoiceRequest

try {
    $result = $apiInstance->createCreditNoteFromInvoice($create_credit_note_from_invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->createCreditNoteFromInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_credit_note_from_invoice_request** | [**\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoiceRequest**](../Model/CreateCreditNoteFromInvoiceRequest.md)|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response**](../Model/CreateCreditNoteFromInvoice201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCreditNoteFromVoucher()`

```php
createCreditNoteFromVoucher($create_credit_note_from_voucher_request): \Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response
```

Creates a new creditNote from a voucher

**Not supported with sevdesk-Update 2.0**  Use this endpoint to create a new creditNote from a voucher.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_credit_note_from_voucher_request = new \Itsmind\Sevdesk\Model\CreateCreditNoteFromVoucherRequest(); // \Itsmind\Sevdesk\Model\CreateCreditNoteFromVoucherRequest

try {
    $result = $apiInstance->createCreditNoteFromVoucher($create_credit_note_from_voucher_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->createCreditNoteFromVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_credit_note_from_voucher_request** | [**\Itsmind\Sevdesk\Model\CreateCreditNoteFromVoucherRequest**](../Model/CreateCreditNoteFromVoucherRequest.md)|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateCreditNoteFromInvoice201Response**](../Model/CreateCreditNoteFromInvoice201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createcreditNote()`

```php
createcreditNote($save_credit_note): \Itsmind\Sevdesk\Model\CreatecreditNote201Response
```

Create a new creditNote

The list of parameters starts with the credit note array.<br> This array contains all required attributes for a complete credit note.<br> Most of the attributes are covered in the credit note attribute list, there are only two parameters standing out, namely <b>mapAll</b> and <b>objectName</b>.<br> These are just needed for our system and you always need to provide them.<br> The list of parameters then continues with the credit note position array.<br> With this array you have the possibility to add multiple positions at once.<br> In the example it only contains one position, again together with the parameters <b>mapAll</b> and <b>objectName</b>, however, you can add more credit note positions by extending the array.<br> So if you wanted to add another position, you would add the same list of parameters with an incremented array index of \"1\" instead of \"0\".<br><br> The list ends with the five parameters creditNotePosDelete, discountSave, discountDelete, takeDefaultAddress and forCashRegister.<br> They only play a minor role if you only want to create a credit note but we will shortly explain what they can do.<br> With creditNotePosDelete you have to option to delete credit note positions as this request can also be used to update credit notes.<br> Both discount parameters are deprecated and have no use for credit notes, however they need to be provided in case you want to use the following two parameters.<br> With takeDefaultAddress you can specify that the first address of the contact you are using for the credit note is taken for the credit note address attribute automatically, so you don't need to provide the address yourself.<br> Finally, the forCashRegister parameter needs to be set to <b>true</b> if your credit note is to be booked on the cash register.<br> If you want to know more about these parameters, for example if you want to use this request to update credit notes, feel free to contact our support.<br> Finally, after covering all parameters, they only important information left, is that the order of the last five attributes always needs to be kept.<br> You will also always need to provide all of them, as otherwise the request won't work properly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$save_credit_note = new \Itsmind\Sevdesk\Model\SaveCreditNote(); // \Itsmind\Sevdesk\Model\SaveCreditNote | Creation data. Please be aware, that you need to provide at least all required parameter      of the credit note model!

try {
    $result = $apiInstance->createcreditNote($save_credit_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->createcreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **save_credit_note** | [**\Itsmind\Sevdesk\Model\SaveCreditNote**](../Model/SaveCreditNote.md)| Creation data. Please be aware, that you need to provide at least all required parameter      of the credit note model! | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreatecreditNote201Response**](../Model/CreatecreditNote201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditNoteEnshrine()`

```php
creditNoteEnshrine($credit_note_id): \Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response
```

Enshrine

Sets the current date and time as a value for the property `enshrined`.<br> This operation is only possible if the status is \"Open\" (`\"status\": \"200\"`) or higher.  Enshrined credit notes cannot be changed. This operation cannot be undone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of the credit note to enshrine

try {
    $result = $apiInstance->creditNoteEnshrine($credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->creditNoteEnshrine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of the credit note to enshrine | |

### Return type

[**\Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response**](../Model/CheckAccountTransactionEnshrine200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditNoteGetPdf()`

```php
creditNoteGetPdf($credit_note_id, $download, $prevent_send_by): \Itsmind\Sevdesk\Model\CreditNoteGetPdf200Response
```

Retrieve pdf document of a credit note

Retrieves the pdf document of a credit note with additional metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of credit note from which you want the pdf
$download = true; // bool | If u want to download the pdf of the credit note.
$prevent_send_by = true; // bool | Defines if u want to send the credit note.

try {
    $result = $apiInstance->creditNoteGetPdf($credit_note_id, $download, $prevent_send_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->creditNoteGetPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of credit note from which you want the pdf | |
| **download** | **bool**| If u want to download the pdf of the credit note. | [optional] |
| **prevent_send_by** | **bool**| Defines if u want to send the credit note. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreditNoteGetPdf200Response**](../Model/CreditNoteGetPdf200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditNoteResetToDraft()`

```php
creditNoteResetToDraft($credit_note_id): \Itsmind\Sevdesk\Model\CreditNoteResetToDraft200Response
```

Reset status to draft

Resets the status to \"Draft\" (`\"status\": \"100\"`).<br> This is only possible if the credit note has the status \"Open\" (`\"status\": \"200\"`).<br> If it has a higher status use [CreditNote/{creditNoteId}/resetToOpen](#tag/CreditNote/operation/creditNoteResetToOpen) first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of the credit note to reset

try {
    $result = $apiInstance->creditNoteResetToDraft($credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->creditNoteResetToDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of the credit note to reset | |

### Return type

[**\Itsmind\Sevdesk\Model\CreditNoteResetToDraft200Response**](../Model/CreditNoteResetToDraft200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditNoteResetToOpen()`

```php
creditNoteResetToOpen($credit_note_id): \Itsmind\Sevdesk\Model\CreditNoteResetToOpen200Response
```

Reset status to open

Resets the status \"Open\" (`\"status\": \"200\"`). Linked transactions will be unlinked.<br> This is not possible if the credit note itself or one of its transactions (CheckAccountTransaction) is already enshrined.  This endpoint cannot be used to increase the status to \"Open\" (`\"status\": \"200\"`).<br> Use [CreditNote/{creditNoteId}/sendBy](#tag/CreditNote/operation/creditNoteSendBy) / [CreditNote/{creditNoteId}/sendViaEmail](#tag/CreditNote/operation/sendCreditNoteViaEMail) instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of the credit note to reset

try {
    $result = $apiInstance->creditNoteResetToOpen($credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->creditNoteResetToOpen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of the credit note to reset | |

### Return type

[**\Itsmind\Sevdesk\Model\CreditNoteResetToOpen200Response**](../Model/CreditNoteResetToOpen200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditNoteSendBy()`

```php
creditNoteSendBy($credit_note_id, $credit_note_send_by_request): \Itsmind\Sevdesk\Model\CreditNoteSendBy200Response
```

Mark credit note as sent

Marks an credit note as sent by a chosen send type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of credit note to mark as sent
$credit_note_send_by_request = new \Itsmind\Sevdesk\Model\CreditNoteSendByRequest(); // \Itsmind\Sevdesk\Model\CreditNoteSendByRequest | Specify the send type

try {
    $result = $apiInstance->creditNoteSendBy($credit_note_id, $credit_note_send_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->creditNoteSendBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of credit note to mark as sent | |
| **credit_note_send_by_request** | [**\Itsmind\Sevdesk\Model\CreditNoteSendByRequest**](../Model/CreditNoteSendByRequest.md)| Specify the send type | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreditNoteSendBy200Response**](../Model/CreditNoteSendBy200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletecreditNote()`

```php
deletecreditNote($credit_note_id): \Itsmind\Sevdesk\Model\GetcreditNoteById200Response
```

Deletes an creditNote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | Id of creditNote resource to delete

try {
    $result = $apiInstance->deletecreditNote($credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->deletecreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| Id of creditNote resource to delete | |

### Return type

[**\Itsmind\Sevdesk\Model\GetcreditNoteById200Response**](../Model/GetcreditNoteById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreditNotes()`

```php
getCreditNotes($status, $credit_note_number, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed): \Itsmind\Sevdesk\Model\GetCreditNotes200Response
```

Retrieve CreditNote

There are a multitude of parameter which can be used to filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Status of the CreditNote
$credit_note_number = 'credit_note_number_example'; // string | Retrieve all CreditNotes with this creditNote number
$start_date = 01.01.2020; // int | Retrieve all CreditNotes with a date equal or higher
$end_date = 01.01.2021; // int | Retrieve all CreditNotes with a date equal or lower
$contact_id = 56; // int | Retrieve all CreditNotes with this contact. Must be provided with contact[objectName]
$contact_object_name = 'contact_object_name_example'; // string | Only required if contact[id] was provided. 'Contact' should be used as value.
$count_all = True; // bool | If all objects should be counted
$offset = 56; // int | Which offset to start with
$limit = 56; // int | The max number of objects to return
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getCreditNotes($status, $credit_note_number, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->getCreditNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**| Status of the CreditNote | [optional] |
| **credit_note_number** | **string**| Retrieve all CreditNotes with this creditNote number | [optional] |
| **start_date** | **int**| Retrieve all CreditNotes with a date equal or higher | [optional] |
| **end_date** | **int**| Retrieve all CreditNotes with a date equal or lower | [optional] |
| **contact_id** | **int**| Retrieve all CreditNotes with this contact. Must be provided with contact[objectName] | [optional] |
| **contact_object_name** | **string**| Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **limit** | **int**| The max number of objects to return | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetCreditNotes200Response**](../Model/GetCreditNotes200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getcreditNoteById()`

```php
getcreditNoteById($credit_note_id): \Itsmind\Sevdesk\Model\GetcreditNoteById200Response
```

Find creditNote by ID

Returns a single creditNote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of creditNote to return

try {
    $result = $apiInstance->getcreditNoteById($credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->getcreditNoteById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of creditNote to return | |

### Return type

[**\Itsmind\Sevdesk\Model\GetcreditNoteById200Response**](../Model/GetcreditNoteById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendCreditNoteByPrinting()`

```php
sendCreditNoteByPrinting($credit_note_id, $send_type): \Itsmind\Sevdesk\Model\SendCreditNoteByPrinting200Response
```

Send credit note by printing

Sending a credit note to end-customers is an important part of the bookkeeping process.<br> Depending on the way you want to send the credit note, you need to use different endpoints.<br> Let's start with just printing out the credit note, meaning we only need to render the pdf.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of creditNote to return
$send_type = PRN; // string | the type you want to print.

try {
    $result = $apiInstance->sendCreditNoteByPrinting($credit_note_id, $send_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->sendCreditNoteByPrinting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of creditNote to return | |
| **send_type** | **string**| the type you want to print. | |

### Return type

[**\Itsmind\Sevdesk\Model\SendCreditNoteByPrinting200Response**](../Model/SendCreditNoteByPrinting200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendCreditNoteViaEMail()`

```php
sendCreditNoteViaEMail($credit_note_id, $send_credit_note_via_e_mail_request): \Itsmind\Sevdesk\Model\SendCreditNoteViaEMail201Response
```

Send credit note via email

This endpoint sends the specified credit note to a customer via email.<br>      This will automatically mark the credit note as sent.<br>      Please note, that in production an credit note is not allowed to be changed after this happened!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of credit note to be sent via email
$send_credit_note_via_e_mail_request = new \Itsmind\Sevdesk\Model\SendCreditNoteViaEMailRequest(); // \Itsmind\Sevdesk\Model\SendCreditNoteViaEMailRequest | Mail data

try {
    $result = $apiInstance->sendCreditNoteViaEMail($credit_note_id, $send_credit_note_via_e_mail_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->sendCreditNoteViaEMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of credit note to be sent via email | |
| **send_credit_note_via_e_mail_request** | [**\Itsmind\Sevdesk\Model\SendCreditNoteViaEMailRequest**](../Model/SendCreditNoteViaEMailRequest.md)| Mail data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\SendCreditNoteViaEMail201Response**](../Model/SendCreditNoteViaEMail201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatecreditNote()`

```php
updatecreditNote($credit_note_id, $model_credit_note_update): \Itsmind\Sevdesk\Model\GetcreditNoteById200Response
```

Update an existing creditNote

Update a creditNote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\CreditNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_id = 56; // int | ID of creditNote to update
$model_credit_note_update = new \Itsmind\Sevdesk\Model\ModelCreditNoteUpdate(); // \Itsmind\Sevdesk\Model\ModelCreditNoteUpdate | Update data

try {
    $result = $apiInstance->updatecreditNote($credit_note_id, $model_credit_note_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNoteApi->updatecreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of creditNote to update | |
| **model_credit_note_update** | [**\Itsmind\Sevdesk\Model\ModelCreditNoteUpdate**](../Model/ModelCreditNoteUpdate.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetcreditNoteById200Response**](../Model/GetcreditNoteById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
