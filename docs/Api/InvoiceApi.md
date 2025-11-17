# Itsmind\Sevdesk\InvoiceApi

# Purpose of invoices in sevdesk  Every time one of our sevdesk customers sells an item or provides a service an invoice needs to be created.&lt;br&gt; These invoice can then be paid by the end-customers so that the selling process is completed.&lt;br&gt; The invoices are directly connected to the transactions of the customer, so every time an invoice is created and marked as paid, there must be a transaction on some bank account.&lt;br&gt; The invoice must then be linked to this transaction, otherwise false reports for tax offices and other institutions can be the case.  # Attributes of an invoice  Here is the table of all attributes of invoices.&lt;br&gt; Necessary attributes, which must not be left out, are marked red.&lt;br&gt; Attributes which are strongly recommended for valid bookkeeping are marked orange.&lt;br&gt; There is also a distinction between invoice types, as not all attributes are useful for all types.&lt;br&gt; &lt;table&gt; &lt;tr&gt; &lt;th&gt;Attribute&lt;/th&gt; &lt;th&gt;Invoice Type&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;th&gt;Attribute Type&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxType&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; &lt;b&gt;Use this in sevdesk-Update 1.0 (instead of taxRule).&lt;/b&gt;&lt;br&gt; Defines the vat-regulation.&lt;br&gt; Can be: &lt;ul&gt; &lt;li&gt;&lt;code&gt;default&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;eu&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;noteu&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;custom&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;ss&lt;/code&gt;&lt;/li&gt; &lt;/ul&gt; &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;taxSet&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; &lt;b&gt;Use this in sevdesk-Update 1.0 (instead of taxRule).&lt;/b&gt;&lt;br&gt; Use for custom defined vat-regulations.&lt;br&gt; Requires &lt;code&gt;\&quot;taxType\&quot;: \&quot;custom\&quot;&lt;/code&gt; &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxRule&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; &lt;b&gt;Use this in sevdesk-Update 2.0 (replaces taxType / taxSet).&lt;/b&gt;&lt;br&gt; See &lt;a href&#x3D;\&quot;#section/sevdesk-Update-2.0/Tax-Rules\&quot;&gt;list of available VAT rules&lt;/a&gt;.&lt;br&gt; &lt;br&gt; Example for Umsatzsteuerpflichtige Umsätze: &lt;code&gt;\&quot;taxRule\&quot;: {\&quot;id\&quot;: \&quot;1\&quot;, \&quot;objectName\&quot;: \&quot;TaxRule\&quot;}&lt;/code&gt; &lt;/td&gt; &lt;td&gt;Nested object (TaxRule)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;currency&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; Currency of the invoice.&lt;br&gt; Needs to be currency code according to ISO-4217. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxText&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; Text describing the vat regulation you chose.&lt;br&gt; A common text of our German customers would be:&lt;br&gt; Umsatzsteuer ausweisen or zzgl. Umsatzsteuer 19% &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;taxRate&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; This is not used anymore. Use the taxRate of the individual positions instead. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;contactPerson&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The sevdesk user which acts as a contact person for this invoice.&lt;br&gt; &lt;/td&gt; &lt;td&gt;Nested object (SevUser)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;smallSettlement&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; If the sevdesk account is falling under the small entrepreneur scheme the invoices must&#39;t contain any vat.&lt;br&gt; If this is the case, this attribute should be true, otherwise false. &lt;/td&gt; &lt;td&gt;Boolean&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;invoiceDate&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The invoice date.  **Requirements:**  * For final invoices (&lt;code&gt;\&quot;invoiceType\&quot; &#x3D; \&quot;ER\&quot;&lt;/code&gt;), the invoiceDate must be later than or equal to the invoiceDate of related advance (&lt;code&gt;\&quot;invoiceType\&quot; &#x3D; \&quot;AR\&quot;&lt;/code&gt;) / partial (&lt;code&gt;\&quot;invoiceType\&quot; &#x3D; \&quot;TR\&quot;&lt;/code&gt;) invoices. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;status&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The invoice status. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;showNet&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; This attribute determines, if the price you give the invoice positions will be regarded as gross or net.&lt;br&gt; If true, the price attribute will hold the net value, otherwise the gross value, as described in the section above. &lt;/td&gt; &lt;td&gt;Boolean&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;discount&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; If the end-customer gets a discount if he pays the invoice in a given time, you can specify the percentage of the discount here.&lt;br&gt; Should this be the case, you will need to provide a value for the attribute &lt;b&gt;discountTime&lt;/b&gt; too, otherwise there is no time given and the end-customer won&#39;t get a discount.&lt;br&gt; If you don&#39;t want this, just leave this attribute at zero. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;discountTime&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; If a value other than zero is used for the discount attribute you need to specify the amount of days for which the discount is granted. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;enshrined&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; Enshrined invoices cannot be changed.&lt;br&gt; Can only be set via &lt;a href&#x3D;\&quot;#tag/Invoice/operation/invoiceEnshrine\&quot;&gt;/Invoice/{invoiceId}/enshrine&lt;/a&gt;. This operation cannot be undone. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;customerInternalNote&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; You can use this attribute to provide a note for the invoice.&lt;br&gt; It can be used for reference numbers, order numbers or other important information. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;address&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; Holds the &lt;b&gt;complete&lt;/b&gt; address to which the invoice is directed.&lt;br&gt; You can use line brakes to separate the different address parts. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;deliveryDate&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The delivery date of the invoice.&lt;br&gt; This can also be a date range if you provide another timestamp for &lt;b&gt;deliveryDateUntil&lt;/b&gt;. &lt;/td&gt; &lt;td&gt;Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;deliveryDateUntil&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; You can provide a value here if you want the delivery date to be a date range and you have already given a timestamp to &lt;b&gt;deliveryDate&lt;/b&gt;. &lt;/td&gt; &lt;td&gt;Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;sendType&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; Is set when using [Invoice/{invoiceId}/sendBy](#tag/Invoice/operation/invoiceSendBy) / [Invoice/{invoiceId}/sendViaEmail](#tag/Invoice/operation/sendInvoiceViaEMail).&lt;br&gt; Valid types are: VPR (printed), VPDF (downloaded), VM (mailed), VP (postal). &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;origin&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; You can specify the object from which an invoice originated, like an order.&lt;br&gt; Just provide the ID of this object. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;invoiceNumber&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The invoice number. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;contact&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The end-customer to which the invoice is directed.&lt;br&gt; Please note, you &lt;b&gt;need&lt;/b&gt; to provide a contact if the invoice has any other status than 100. &lt;/td&gt; &lt;td&gt;Nested object (Contact)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;header&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The invoice header.&lt;br&gt; Usually consists of the invoice number and a prefix. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;headText&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; A head text for the invoice.&lt;br&gt; Can contain certain html tags. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;footText&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; A foot text for the invoice.&lt;br&gt; Can contain certain html tags. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;timeToPay&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The time the end-customer has to pay the invoice in days. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;payDate&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The date the end-customer has paid the invoice. &lt;/td&gt; &lt;td&gt;Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;paymentMethod&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The payment method for the invoice.&lt;br&gt; Needs the ID of a specified payment method. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;costCentre&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; A cost centre for the invoice. &lt;/td&gt; &lt;td&gt;Nested object (CostCentre)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;sendDate&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The date the invoice was sent to the end-customer. &lt;/td&gt; &lt;td&gt;Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;invoiceType&lt;/span&gt;&lt;/td&gt; &lt;td&gt;&lt;ul&gt; &lt;li&gt;RE - invoice&lt;/li&gt; &lt;li&gt;WKR - recurring invoice&lt;/li&gt; &lt;li&gt;SR - cancellation invoice&lt;/li&gt; &lt;li&gt;MA - invoice remider&lt;/li&gt; &lt;li&gt;TR - partial invoice&lt;/li&gt; &lt;li&gt;AR - advance invoice&lt;/li&gt; &lt;li&gt;ER - final invoice&lt;/li&gt; &lt;/td&gt; &lt;td&gt; The invoice type. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;dunningLevel&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Reminders&lt;/td&gt; &lt;td&gt; The dunning level.&lt;br&gt; Starts with 1 (Payment reminder) and should be incremented by one every time another reminder is sent. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;reminderDeadline&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Reminders&lt;/td&gt; &lt;td&gt; The deadline for the next reminder. &lt;/td&gt; &lt;td&gt;Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;reminderDebit&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Reminders&lt;/td&gt; &lt;td&gt; The reminder debit. &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;reminderTotal&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Reminders&lt;/td&gt; &lt;td&gt; The total reminder amount. &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;reminderCharge&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Reminders&lt;/td&gt; &lt;td&gt; The additional reminder charge. &lt;/td&gt; &lt;td&gt;Double&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;accountIntervall&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Recurring Invoices&lt;/td&gt; &lt;td&gt; The interval in which recurring invoices are due. &lt;/td&gt; &lt;td&gt;ISO-8601 Duration&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;accountNextInvoice&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Recurring Invoices&lt;/td&gt; &lt;td&gt; The date when the next invoice is due. &lt;/td&gt; &lt;td&gt;Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;propertyIsEInvoice&lt;/td&gt; &lt;td&gt; e-invoice &lt;/td&gt; &lt;td&gt; &lt;p&gt;If true, the invoice will be created as e-invoice.&lt;/p&gt; &lt;p&gt;To create a valid e-invoice some extra data are required&lt;/p&gt; &lt;p&gt; &lt;div&gt;sevClient&lt;/div&gt; &lt;ul&gt; &lt;li&gt;addressStreet&lt;/li&gt; &lt;li&gt;addressZip&lt;/li&gt; &lt;li&gt;addressCity&lt;/li&gt; &lt;li&gt;bankIban&lt;/li&gt; &lt;li&gt;bankBic&lt;/li&gt; &lt;li&gt;contactEmail&lt;/li&gt; &lt;li&gt;contactPhone&lt;/li&gt; &lt;li&gt;taxNumber&lt;/li&gt; &lt;li&gt; vatNumber &lt;i&gt;This is optional so that, for example, small businesses owners can send e-invoices.&lt;/i&gt; &lt;/li&gt; &lt;/ul&gt; &lt;/p&gt; &lt;p&gt; &lt;div&gt;contact&lt;/div&gt; &lt;ul&gt; &lt;li&gt;buyerReference&lt;/li&gt; &lt;li&gt;email&lt;/li&gt; &lt;/ul&gt; &lt;/p&gt; &lt;p&gt; &lt;div&gt;invoice&lt;/div&gt; &lt;ul&gt; &lt;li&gt;paymentMethod&lt;/li&gt; &lt;li&gt;addressStreet&lt;/li&gt; &lt;li&gt;addressZip&lt;/li&gt; &lt;li&gt;addressCity&lt;/li&gt; &lt;li&gt;addressCountry&lt;/li&gt; &lt;li&gt;contact&lt;/li&gt; &lt;/ul&gt; &lt;/p&gt; &lt;/td&gt; &lt;td&gt;boolean&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;deliveryAddressCountry&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; &lt;p&gt;Can be used to specify a different country to the billing address (&lt;code&gt;addressCountry&lt;/code&gt;).&lt;br&gt; This country is used for &lt;a href&#x3D;\&quot;#section/sevdesk-Update-2.0/Tax-Rules\&quot;&gt;One Stop Shop VAT rules&lt;/a&gt;.&lt;br&gt; For example, to validate the tax rate of the positions.&lt;br&gt; &lt;br&gt; If not specified, it defaults to the country of the billing address.&lt;/p&gt; &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;  # The invoice number  At this point we wan&#39;t to pay special attention to the invoice number again.&lt;br&gt; The invoice number is not an attribute that must be supplied when creating an invoice, however for most, if not all of our customers, a correct enumeration is the key to structured bookkeeping, which is why duplicate entries must be avoided.&lt;br&gt; For this reason, most of the time a manual assignment of numbers is not the best idea and we are happy to provide you a endpoints which will help out finding the next invoice number.&lt;br&gt;&lt;br&gt; This GET request will check what the next invoice number should be, so that a correct enumeration is kept.&lt;br&gt; The concrete endpoint can be used for a multitude of enumerations, but we will just concentrate on checking the next invoice number.&lt;br&gt; You can change the &lt;b&gt;type&lt;/b&gt; query string parameter to your needs, depending on the invoice type for which you want the next number. &lt;ul&gt; &lt;li&gt;&lt;code&gt;ht&lt;span&gt;tps://my.sevdesk.de/api/v1/SevSequence/Factory/getByType?objectType&#x3D;Invoice&amp;type&#x3D;RE&lt;/span&gt;&lt;/code&gt;&lt;/li&gt; &lt;/ul&gt;  # Types and status of invoices  Invoice types &lt;br&gt; Invoices are most certainly the most complex objects that can be handled over the API. There are multiple types of invoices and these invoices can have multiple status again. Let&#39;s have a look at the different types of invoices first.&lt;br&gt; &lt;table&gt; &lt;tr&gt; &lt;th&gt;Invoice Type&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;th&gt;Abbreviation&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Normal invoice&lt;/td&gt; &lt;td&gt; A normal invoice which documents a simple selling process. &lt;/td&gt; &lt;td&gt; RE &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Recurring invoice&lt;/td&gt; &lt;td&gt; An invoice which generates normal invoices with the same values regularly in fixed time frames (every month, year, ...). &lt;/td&gt; &lt;td&gt; WKR &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Cancellation invoice&lt;/td&gt; &lt;td&gt; An invoice which cancels another already created normal invoice. &lt;/td&gt; &lt;td&gt; SR &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Reminder invoice&lt;/td&gt; &lt;td&gt; An invoice which gets created if the end-customer failed to pay a normal invoice in a given time frame.&lt;br&gt; Often includes some kind of reminder fee. &lt;/td&gt; &lt;td&gt; MA &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Partial invoice&lt;/td&gt; &lt;td&gt; Used when partial services have already been provided. One or more partial invoices result in a final invoice. &lt;/td&gt; &lt;td&gt; TR &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Advance invoice&lt;/td&gt; &lt;td&gt; Used when no service has been provided yet. One or more advance invoices result in a final invoice. &lt;/td&gt; &lt;td&gt; AR &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Final invoice&lt;/td&gt; &lt;td&gt; The final invoice includes all partial / advance invoices.&lt;br&gt; After the final invoice is paid by the end-customer, the selling process is complete. &lt;/td&gt; &lt;td&gt; ER &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;&lt;br&gt; For now we will only cover the normal invoices, as this is complex enough.&lt;br&gt; However, it is important to keep in mind the abbreviations for all types of invoices or at least the one you will need.&lt;br&gt; This is, because you will need to provide the invoice type when creating an invoice.&lt;br&gt; &lt;br&gt; &lt;b&gt;Invoice status&lt;/b&gt;&lt;br&gt; Now that we have covered all invoice types, let&#39;s move to the different status they can have.&lt;br&gt; &lt;table&gt; &lt;tr&gt; &lt;th&gt;Invoice status&lt;/th&gt; &lt;th&gt;Meaning&lt;/th&gt; &lt;th&gt;Status code&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Deactivated recurring invoice&lt;/td&gt; &lt;td&gt; The invoice is a deactivated recurring invoice.&lt;br&gt; This status code is only relevant for recurring invoices. &lt;/td&gt; &lt;td&gt; 50 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Draft&lt;/td&gt; &lt;td&gt; The invoice is still a draft.&lt;br&gt; It has not been sent to the end-customer and can still be changed. &lt;/td&gt; &lt;td&gt; 100 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Open / Due&lt;/td&gt; &lt;td&gt; The invoice has been sent to the end-customer.&lt;br&gt; It is either shown as &lt;b&gt;open&lt;/b&gt; if the pay date is not exceeded or &lt;b&gt;due&lt;/b&gt; if it is. &lt;/td&gt; &lt;td&gt; 200 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Partially paid&lt;/td&gt; &lt;td&gt; The invoice has been partially paid.&lt;br&gt; This means, that it is linked to a transaction on some payment account in sevdesk. This status was introduced with Release 4.181 (June 13, 2024). Invoices that were partially paid before that release will have the status \&quot;Open\&quot; (&lt;code&gt;\&quot;status\&quot;: \&quot;200\&quot;&lt;/code&gt;). In that case use [Invoice/{invoiceId}/getIsPartiallyPaid](#tag/Invoice/operation/getIsInvoicePartiallyPaid) instead of checking the status directly. &lt;/td&gt; &lt;td&gt; 750 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Paid&lt;/td&gt; &lt;td&gt; The invoice has been paid.&lt;br&gt; This means, that it is linked to a transaction on some payment account in sevdesk. &lt;/td&gt; &lt;td&gt; 1000 &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;&lt;br&gt; It is again important to keep in mind the status codes for all status of invoices or at least the one you will need.&lt;br&gt; This is, because you will need to provide the status code when creating an invoice.&lt;br&gt;   # How e-invoice works  The e-invoice is a new feature in sevdesk, which allows you to send invoices to your customers in a digital way. To turn an invoice into an e-invoice, you have to set &lt;code&gt;propertyIsEInvoice&lt;/code&gt; to &lt;code&gt;true&lt;/code&gt; When &lt;code&gt;propertyIsEInvoice&lt;/code&gt; is set an XML is embedded inside the PDF. Embedding the XML into the PDF is called ZUGFeRD. If you just need the XML (XRechnung) you can get it by calling [Invoice/{invoiceId}/getXml](#tag/Invoice/operation/invoiceGetXml). Both XML files are identical.    # How to book an invoice  Booking the invoice with a transaction is probably the most important part in the bookkeeping process.&lt;br&gt; There are several ways on correctly booking an invoice, all by using the same endpoint.&lt;br&gt; This endpoint is called &lt;b&gt;/Invoice/{id}/bookAmount&lt;/b&gt;.&lt;br&gt;&lt;br&gt; The first way of correctly booking an invoice is to book it on the standard check account which is provided by sevdesk.&lt;br&gt; This is perhaps the easiest way, as no transaction needs to be manually created or searched.&lt;br&gt; The fitting transaction will automatically be created on the standard account and the invoice will be booked with it.&lt;br&gt; This works the same way with the register check account.&lt;br&gt;&lt;br&gt; &lt;img src&#x3D;&#39;openAPI/img/bookAmountStandard.PNG&#39; width&#x3D; &#39;800px&#39;&gt;&lt;br&gt;&lt;br&gt; In the second variant, it is necessary that a transaction already exists, because it is not automatically generated in a manual account or online/finapi account.&lt;br&gt; For this, you must either create the transactions or, in the case of an online/finapi account, import the transactions. When booking the invoices it is important that an id and an objectName are passed along, otherwise a logic error will occur.&lt;br&gt; &lt;img src&#x3D;&#39;openAPI/img/bookAmountWithTransaction.PNG&#39; width&#x3D; &#39;800px&#39;&gt;&lt;br&gt;&lt;br&gt;  # How to filter for certain invoices  Often you don&#39;t want to retrieve all invoices in a sevdesk account or one specific invoice of which you know the ID, but rather a list of invoices or a single invoice with certain properties.&lt;br&gt; For this purpose we provide a bunch of filters that you can attach to your GET query string for nearly all endpoints.&lt;br&gt; Here are all filters applicable to an invoice query.&lt;br&gt; &lt;table&gt; &lt;tr&gt; &lt;th&gt;Filter&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;partiallyPaid&#x3D;true&lt;/td&gt; &lt;td&gt; Retrieve all invoices which are partially paid &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderByDebit&#x3D;true&lt;/td&gt; &lt;td&gt;Retrieve all invoices ordered by their debit&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderByDueTime&#x3D;true&lt;/td&gt; &lt;td&gt;Retrieve all invoices ordered by their due time&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;showAll&#x3D;true&lt;/td&gt; &lt;td&gt;Retrieve all invoices of all types&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;invoiceNumber&#x3D;{number}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices with number as a invoice number&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;delinquent&#x3D;true&lt;/td&gt; &lt;td&gt;Only retrieve delinquent (due) invoices&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;notdelinquent&#x3D;true&lt;/td&gt; &lt;td&gt;Only retrieve invoices which are not delinquent (due)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;tags[x][id]&#x3D;{id}&amp;tags[x][objectName]&#x3D;Tag&lt;/td&gt; &lt;td&gt;Only retrieve all invoices with id as a tag.&lt;br&gt; You can specify multiple tags by adding more array entries. &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;costCentre[id]&#x3D;{id}&amp;costCentre[objectName]&#x3D;CostCentre&lt;/td&gt; &lt;td&gt;Only retrieve all invoices with id as a cost centre.&lt;br&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;status&#x3D;{status}&lt;/td&gt; &lt;td&gt;Only retrieve invoices of a given status&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;createBefore&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices created before timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;createAfter&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices created after timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;updateBefore&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices updated last before timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;updateAfter&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices updated last after timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;contact[id]&#x3D;{id}&amp;contact[objectName]&#x3D;Contact&lt;/td&gt; &lt;td&gt;Only retrieve all invoices with id as a contact&lt;br&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderByDueDate&#x3D;true&lt;/td&gt; &lt;td&gt;Retrieve all invoices ordered by their due date&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;customerIntenalNote&#x3D;{note}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices with note as a customer internal note&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;day&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices where invoice date falls on the day of timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;startDate&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices where invoice date is bigger than timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;endDate&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt; Only retrieve all invoices where invoice date is smaller than timestamp&lt;br&gt; If startDate and endDate are both supplied, you will get all invoices in the defined range &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;header&#x3D;{header}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices with header as a header&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;onlyDunned&#x3D;true&lt;/td&gt; &lt;td&gt;Retrieve all invoices which are dunned&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;showWkr&#x3D;all&lt;/td&gt; &lt;td&gt;Retrieve all recurring invoices&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;showMa&#x3D;all&lt;/td&gt; &lt;td&gt;Retrieve all invoices which are payment reminders&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;origin[id]&#x3D;{id}&amp;origin[objectName]&#x3D;ModelName&lt;/td&gt; &lt;td&gt;Only retrieve all invoices with id as an origin&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;invoiceType&#x3D;{type}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices with type as an invoice type&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;paymentMethod[id]&#x3D;{id}&amp;paymentMethod[objectName]&#x3D;PaymentMethod&lt;/td&gt; &lt;td&gt;Only retrieve all invoices with id as a payment method&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;headerSearch&#x3D;{header}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices of which the header is like header&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;headerStartsWith&#x3D;{headerStart}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices of which the header starts with headerStart&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;headerOrNumber&#x3D;{headerOrNumber}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices of which the header or invoice number is like headerOrNumber&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;globalSearch&#x3D;{searchTerm}&lt;/td&gt; &lt;td&gt;Search for invoices related to searchTerm&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderByInvoiceNumber&#x3D;{ASC/DESC}&lt;/td&gt; &lt;td&gt;Order all invoices after invoice number in ASC/DESC order&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;invoiceNumberGreater&#x3D;{number}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices of which the invoice number is bigger than number&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;invoiceNumberSmaller&#x3D;{number}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices of which the invoice number is smaller than number&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;sendType&#x3D;{type}&lt;/td&gt; &lt;td&gt;Only retrieve all invoices with type as a send type&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;fulltextSearch&#x3D;{text}&lt;/td&gt; &lt;td&gt;Search for invoices, positions or contact with text as a text&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookInvoice()**](InvoiceApi.md#bookInvoice) | **PUT** /Invoice/{invoiceId}/bookAmount | Book an invoice |
| [**cancelInvoice()**](InvoiceApi.md#cancelInvoice) | **POST** /Invoice/{invoiceId}/cancelInvoice | Cancel an invoice / Create cancellation invoice |
| [**createInvoiceByFactory()**](InvoiceApi.md#createInvoiceByFactory) | **POST** /Invoice/Factory/saveInvoice | Create a new invoice |
| [**createInvoiceFromOrder()**](InvoiceApi.md#createInvoiceFromOrder) | **POST** /Invoice/Factory/createInvoiceFromOrder | Create invoice from order |
| [**createInvoiceReminder()**](InvoiceApi.md#createInvoiceReminder) | **POST** /Invoice/Factory/createInvoiceReminder | Create invoice reminder |
| [**deleteInvoiceById()**](InvoiceApi.md#deleteInvoiceById) | **DELETE** /Invoice/{invoiceId} | Delete invoice by ID |
| [**getInvoiceById()**](InvoiceApi.md#getInvoiceById) | **GET** /Invoice/{invoiceId} | Find invoice by ID |
| [**getInvoicePositionsById()**](InvoiceApi.md#getInvoicePositionsById) | **GET** /Invoice/{invoiceId}/getPositions | Find invoice positions |
| [**getInvoices()**](InvoiceApi.md#getInvoices) | **GET** /Invoice | Retrieve invoices |
| [**getIsInvoicePartiallyPaid()**](InvoiceApi.md#getIsInvoicePartiallyPaid) | **GET** /Invoice/{invoiceId}/getIsPartiallyPaid | Check if an invoice is already partially paid |
| [**getLastDunning()**](InvoiceApi.md#getLastDunning) | **GET** /Invoice/{invoiceId}/getLastDunning | Get the last dunning of an invoice |
| [**getOpenInvoiceReminderDebit()**](InvoiceApi.md#getOpenInvoiceReminderDebit) | **GET** /Invoice/Factory/getOpenInvoiceReminderDebit | Get the oben reminder debit for an invoice |
| [**invoiceEnshrine()**](InvoiceApi.md#invoiceEnshrine) | **PUT** /Invoice/{invoiceId}/enshrine | Enshrine |
| [**invoiceGetPdf()**](InvoiceApi.md#invoiceGetPdf) | **GET** /Invoice/{invoiceId}/getPdf | Retrieve pdf document of an invoice |
| [**invoiceGetXml()**](InvoiceApi.md#invoiceGetXml) | **GET** /Invoice/{invoiceId}/getXml | Retrieve XML of an e-invoice |
| [**invoiceRender()**](InvoiceApi.md#invoiceRender) | **POST** /Invoice/{invoiceId}/render | Render the pdf document of an invoice |
| [**invoiceResetToDraft()**](InvoiceApi.md#invoiceResetToDraft) | **PUT** /Invoice/{invoiceId}/resetToDraft | Reset status to draft |
| [**invoiceResetToOpen()**](InvoiceApi.md#invoiceResetToOpen) | **PUT** /Invoice/{invoiceId}/resetToOpen | Reset status to open |
| [**invoiceSendBy()**](InvoiceApi.md#invoiceSendBy) | **PUT** /Invoice/{invoiceId}/sendBy | Mark invoice as sent |
| [**sendInvoiceViaEMail()**](InvoiceApi.md#sendInvoiceViaEMail) | **POST** /Invoice/{invoiceId}/sendViaEmail | Send invoice via email |
| [**updateInvoiceById()**](InvoiceApi.md#updateInvoiceById) | **PUT** /Invoice/{invoiceId} | Update invoice by ID |


## `bookInvoice()`

```php
bookInvoice($invoice_id, $book_invoice_request): \Itsmind\Sevdesk\Model\BookInvoice200Response
```

Book an invoice

Booking the invoice with a transaction is probably the most important part in the bookkeeping process.<br> There are several ways on correctly booking an invoice, all by using the same endpoint.<br> for more information look <a href='#tag/Invoice/How-to-book-an-invoice'>here</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to book
$book_invoice_request = new \Itsmind\Sevdesk\Model\BookInvoiceRequest(); // \Itsmind\Sevdesk\Model\BookInvoiceRequest | Booking data

try {
    $result = $apiInstance->bookInvoice($invoice_id, $book_invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->bookInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice to book | |
| **book_invoice_request** | [**\Itsmind\Sevdesk\Model\BookInvoiceRequest**](../Model/BookInvoiceRequest.md)| Booking data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\BookInvoice200Response**](../Model/BookInvoice200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelInvoice()`

```php
cancelInvoice($invoice_id): \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
```

Cancel an invoice / Create cancellation invoice

This endpoint will cancel the specified invoice therefor creating a cancellation invoice.<br>       The cancellation invoice will be automatically paid and the source invoices status will change to 'cancelled'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to be cancelled

try {
    $result = $apiInstance->cancelInvoice($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->cancelInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice to be cancelled | |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response**](../Model/UpdateInvoiceById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoiceByFactory()`

```php
createInvoiceByFactory($save_invoice): \Itsmind\Sevdesk\Model\CreateInvoiceByFactory201Response
```

Create a new invoice

This endpoint offers you the following functionality.       <ul>          <li>Create invoices together with positions and discounts</li>          <li>Delete positions while adding new ones</li>          <li>Delete or add discounts, or both at the same time</li>          <li>Automatically fill the address of the supplied contact into the invoice address</li>       </ul>       To make your own request sample slimmer, you can omit all parameters which are not required and nullable.       However, for a valid and logical bookkeeping document, you will also need some of them to ensure that all the necessary data is in the invoice.<br><br> The list of parameters starts with the invoice array.<br> This array contains all required attributes for a complete invoice.<br> Most of the attributes are covered in the invoice attribute list, there are only two parameters standing out, namely <b>mapAll</b> and <b>objectName</b>.<br> These are just needed for our system and you always need to provide them.<br><br> The list of parameters then continues with the invoice position array.<br> With this array you have the possibility to add multiple positions at once.<br> In the example it only contains one position, again together with the parameters <b>mapAll</b> and <b>objectName</b>, however, you can add more invoice positions by extending the array.<br> So if you wanted to add another position, you would add the same list of parameters with an incremented array index of \"1\" instead of \"0\".<br><br> The list ends with the four parameters invoicePosDelete, discountSave, discountDelete and takeDefaultAddress.<br> They only play a minor role if you only want to create an invoice but we will shortly explain what they can do.<br> With invoicePosDelete you have to option to delete invoice positions as this request can also be used to update invoices.<br> With discountSave you can add discounts to your invoice.<br> With discountDelete you can delete discounts from your invoice.<br> With takeDefaultAddress you can specify that the first address of the contact you are using for the invoice is taken for the invoice address attribute automatically, so you don't need to provide the address yourself.<br> If you want to know more about these parameters, for example if you want to use this request to update invoices, feel free to contact our support.<br><br> Finally, after covering all parameters, they only important information left, is that the order of the last four attributes always needs to be kept.<br> You will also always need to provide all of them, as otherwise the request won't work properly.<br><br> <b>Warning:</b> You can not create a regular invoice with the <b>deliveryDate</b> being later than the <b>invoiceDate</b>.<br> To do that you will need to create a so called <b>Abschlagsrechnung</b> by setting the <b>invoiceType</b> parameter to <b>AR</b>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$save_invoice = new \Itsmind\Sevdesk\Model\SaveInvoice(); // \Itsmind\Sevdesk\Model\SaveInvoice | Creation data. Please be aware, that you need to provide at least all required parameter      of the invoice model!

try {
    $result = $apiInstance->createInvoiceByFactory($save_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->createInvoiceByFactory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **save_invoice** | [**\Itsmind\Sevdesk\Model\SaveInvoice**](../Model/SaveInvoice.md)| Creation data. Please be aware, that you need to provide at least all required parameter      of the invoice model! | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\CreateInvoiceByFactory201Response**](../Model/CreateInvoiceByFactory201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoiceFromOrder()`

```php
createInvoiceFromOrder($model_create_invoice_from_order): \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
```

Create invoice from order

Create an invoice from an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_create_invoice_from_order = new \Itsmind\Sevdesk\Model\ModelCreateInvoiceFromOrder(); // \Itsmind\Sevdesk\Model\ModelCreateInvoiceFromOrder | Create invoice

try {
    $result = $apiInstance->createInvoiceFromOrder($model_create_invoice_from_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->createInvoiceFromOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_create_invoice_from_order** | [**\Itsmind\Sevdesk\Model\ModelCreateInvoiceFromOrder**](../Model/ModelCreateInvoiceFromOrder.md)| Create invoice | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response**](../Model/UpdateInvoiceById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInvoiceReminder()`

```php
createInvoiceReminder($invoice_id, $invoice_object_name, $create_invoice_reminder_request): \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
```

Create invoice reminder

Create an reminder from an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | the id of the invoice
$invoice_object_name = Invoice; // string | Model name, which is 'Invoice'
$create_invoice_reminder_request = new \Itsmind\Sevdesk\Model\CreateInvoiceReminderRequest(); // \Itsmind\Sevdesk\Model\CreateInvoiceReminderRequest | Create invoice

try {
    $result = $apiInstance->createInvoiceReminder($invoice_id, $invoice_object_name, $create_invoice_reminder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->createInvoiceReminder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| the id of the invoice | |
| **invoice_object_name** | **string**| Model name, which is &#39;Invoice&#39; | [default to &#39;Invoice&#39;] |
| **create_invoice_reminder_request** | [**\Itsmind\Sevdesk\Model\CreateInvoiceReminderRequest**](../Model/CreateInvoiceReminderRequest.md)| Create invoice | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response**](../Model/UpdateInvoiceById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInvoiceById()`

```php
deleteInvoiceById($invoice_id)
```

Delete invoice by ID

Deletes a single invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to return

try {
    $apiInstance->deleteInvoiceById($invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->deleteInvoiceById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice to return | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceById()`

```php
getInvoiceById($invoice_id, $embed): \Itsmind\Sevdesk\Model\GetInvoiceById200Response
```

Find invoice by ID

Returns a single invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to return
$embed = array('embed_example'); // string[]

try {
    $result = $apiInstance->getInvoiceById($invoice_id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoiceById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice to return | |
| **embed** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetInvoiceById200Response**](../Model/GetInvoiceById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoicePositionsById()`

```php
getInvoicePositionsById($invoice_id, $limit, $offset, $embed, $count_all): \Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response
```

Find invoice positions

Returns all positions of an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to return the positions
$limit = 56; // int | limits the number of entries returned
$offset = 56; // int | set the index where the returned entries start
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.
$count_all = True; // bool | If all objects should be counted

try {
    $result = $apiInstance->getInvoicePositionsById($invoice_id, $limit, $offset, $embed, $count_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoicePositionsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice to return the positions | |
| **limit** | **int**| limits the number of entries returned | [optional] |
| **offset** | **int**| set the index where the returned entries start | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetInvoicePositionsById200Response**](../Model/GetInvoicePositionsById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoices()`

```php
getInvoices($status, $invoice_number, $start_date, $end_date, $count_all, $invoice_type, $offset, $limit, $partially_paid, $canceled, $contact, $payment_method, $embed): \Itsmind\Sevdesk\Model\GetInvoices200Response
```

Retrieve invoices

There are a multitude of parameter which can be used to filter. A few of them are attached but       for a complete list please check out <a href='#tag/Invoice/How-to-filter-for-certain-invoices'>this</a> list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 3.4; // float | Status of the invoices
$invoice_number = 'invoice_number_example'; // string | Retrieve all invoices with this invoice number
$start_date = 56; // int | Retrieve all invoices with a date equal or higher
$end_date = 56; // int | Retrieve all invoices with a date equal or lower
$count_all = True; // bool | If all invoices should be counted
$invoice_type = array('key' => 'invoice_type_example'); // array<string,string> | The type of invoice
$offset = 56; // int | Which offset to start with
$limit = 56; // int | The max number of invoices
$partially_paid = True; // bool | Limit to partially paid invoices
$canceled = True; // bool | Limit to canceled invoices
$contact = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\GetInvoicesContactParameter(); // \Itsmind\Sevdesk\Model\GetInvoicesContactParameter | Retrieve all invoices with this contact. The value of contact[objectName] must be 'Contact'.
$payment_method = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\GetInvoicesPaymentMethodParameter(); // \Itsmind\Sevdesk\Model\GetInvoicesPaymentMethodParameter | Retrieve all invoices with this paymentMethod. The value of paymentMethod[objectName] must be 'PaymentMethod'.
$embed = array('embed_example'); // string[]

try {
    $result = $apiInstance->getInvoices($status, $invoice_number, $start_date, $end_date, $count_all, $invoice_type, $offset, $limit, $partially_paid, $canceled, $contact, $payment_method, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **float**| Status of the invoices | [optional] |
| **invoice_number** | **string**| Retrieve all invoices with this invoice number | [optional] |
| **start_date** | **int**| Retrieve all invoices with a date equal or higher | [optional] |
| **end_date** | **int**| Retrieve all invoices with a date equal or lower | [optional] |
| **count_all** | **bool**| If all invoices should be counted | [optional] |
| **invoice_type** | [**array<string,string>**](../Model/string.md)| The type of invoice | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **limit** | **int**| The max number of invoices | [optional] |
| **partially_paid** | **bool**| Limit to partially paid invoices | [optional] |
| **canceled** | **bool**| Limit to canceled invoices | [optional] |
| **contact** | [**\Itsmind\Sevdesk\Model\GetInvoicesContactParameter**](../Model/.md)| Retrieve all invoices with this contact. The value of contact[objectName] must be &#39;Contact&#39;. | [optional] |
| **payment_method** | [**\Itsmind\Sevdesk\Model\GetInvoicesPaymentMethodParameter**](../Model/.md)| Retrieve all invoices with this paymentMethod. The value of paymentMethod[objectName] must be &#39;PaymentMethod&#39;. | [optional] |
| **embed** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetInvoices200Response**](../Model/GetInvoices200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIsInvoicePartiallyPaid()`

```php
getIsInvoicePartiallyPaid($invoice_id): \Itsmind\Sevdesk\Model\ContactCustomerNumberAvailabilityCheck200Response
```

Check if an invoice is already partially paid

Returns 'true' if the given invoice is partially paid - 'false' if it is not.      Invoices which are completely paid are regarded as not partially paid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to return

try {
    $result = $apiInstance->getIsInvoicePartiallyPaid($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getIsInvoicePartiallyPaid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice to return | |

### Return type

[**\Itsmind\Sevdesk\Model\ContactCustomerNumberAvailabilityCheck200Response**](../Model/ContactCustomerNumberAvailabilityCheck200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLastDunning()`

```php
getLastDunning($invoice_id): \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
```

Get the last dunning of an invoice

Using this endpoint you can render the pdf document of an invoice.<br>       Use cases for this are the retrieval of the pdf location or the forceful re-render of a already sent invoice.<br>       Please be aware that changing an invoice after it has been sent to a customer is not an allowed bookkeeping process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to get last dunning for

try {
    $result = $apiInstance->getLastDunning($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getLastDunning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice to get last dunning for | |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response**](../Model/UpdateInvoiceById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpenInvoiceReminderDebit()`

```php
getOpenInvoiceReminderDebit($invoice): \Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebit200Response
```

Get the oben reminder debit for an invoice

Using this endpoint you can render the pdf document of an invoice.<br>       Use cases for this are the retrieval of the pdf location or the forceful re-render of a already sent invoice.<br>       Please be aware that changing an invoice after it has been sent to a customer is not an allowed bookkeeping process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice = new \Itsmind\Sevdesk\Model\\Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebitInvoiceParameter(); // \Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebitInvoiceParameter | Retrieve the open reminder debit for this invoice. The value of invoice[objectName] must be 'Invoice'.

try {
    $result = $apiInstance->getOpenInvoiceReminderDebit($invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getOpenInvoiceReminderDebit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice** | [**\Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebitInvoiceParameter**](../Model/.md)| Retrieve the open reminder debit for this invoice. The value of invoice[objectName] must be &#39;Invoice&#39;. | |

### Return type

[**\Itsmind\Sevdesk\Model\GetOpenInvoiceReminderDebit200Response**](../Model/GetOpenInvoiceReminderDebit200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceEnshrine()`

```php
invoiceEnshrine($invoice_id): \Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response
```

Enshrine

Sets the current date and time as a value for the property `enshrined`.<br> This operation is only possible if the status is \"Open\" (`\"status\": \"200\"`) or higher.  Enshrined invoices cannot be changed. This operation cannot be undone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of the invoice to enshrine

try {
    $result = $apiInstance->invoiceEnshrine($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceEnshrine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of the invoice to enshrine | |

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

## `invoiceGetPdf()`

```php
invoiceGetPdf($invoice_id, $download, $prevent_send_by): \Itsmind\Sevdesk\Model\InvoiceGetPdf200Response
```

Retrieve pdf document of an invoice

Retrieves the pdf document of an invoice with additional metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice from which you want the pdf
$download = true; // bool | If u want to download the pdf of the invoice.
$prevent_send_by = true; // bool | Defines if u want to send the invoice.

try {
    $result = $apiInstance->invoiceGetPdf($invoice_id, $download, $prevent_send_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice from which you want the pdf | |
| **download** | **bool**| If u want to download the pdf of the invoice. | [optional] |
| **prevent_send_by** | **bool**| Defines if u want to send the invoice. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\InvoiceGetPdf200Response**](../Model/InvoiceGetPdf200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceGetXml()`

```php
invoiceGetXml($invoice_id): \Itsmind\Sevdesk\Model\InvoiceGetXml200Response
```

Retrieve XML of an e-invoice

Retrieves the XML of an e-invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice from which you want the XML

try {
    $result = $apiInstance->invoiceGetXml($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetXml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice from which you want the XML | |

### Return type

[**\Itsmind\Sevdesk\Model\InvoiceGetXml200Response**](../Model/InvoiceGetXml200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceRender()`

```php
invoiceRender($invoice_id, $invoice_render_request): \Itsmind\Sevdesk\Model\InvoiceRender201Response
```

Render the pdf document of an invoice

Using this endpoint you can render the pdf document of an invoice.<br>       Use cases for this are the retrieval of the pdf location or the forceful re-render of a already sent invoice.<br>       Please be aware that changing an invoice after it has been sent to a customer is not an allowed bookkeeping process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to render
$invoice_render_request = new \Itsmind\Sevdesk\Model\InvoiceRenderRequest(); // \Itsmind\Sevdesk\Model\InvoiceRenderRequest | Define if the document should be forcefully re-rendered.

try {
    $result = $apiInstance->invoiceRender($invoice_id, $invoice_render_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceRender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice to render | |
| **invoice_render_request** | [**\Itsmind\Sevdesk\Model\InvoiceRenderRequest**](../Model/InvoiceRenderRequest.md)| Define if the document should be forcefully re-rendered. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\InvoiceRender201Response**](../Model/InvoiceRender201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceResetToDraft()`

```php
invoiceResetToDraft($invoice_id): \Itsmind\Sevdesk\Model\InvoiceResetToDraft200Response
```

Reset status to draft

Resets the status to \"Draft\" (`\"status\": \"100\"`).<br> This is only possible if the invoice has the status \"Open\" (`\"status\": \"200\"`).<br> If it has a higher status use [Invoice/{invoiceId}/resetToOpen](#tag/Invoice/operation/invoiceResetToOpen) first.  This endpoint cannot be used for recurring invoices (`\"invoiceType\": \"WKR\"`).<br> Use [Invoice/Factory/saveInvoice](#tag/Invoice/operation/createInvoiceByFactory) instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of the invoice to reset

try {
    $result = $apiInstance->invoiceResetToDraft($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceResetToDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of the invoice to reset | |

### Return type

[**\Itsmind\Sevdesk\Model\InvoiceResetToDraft200Response**](../Model/InvoiceResetToDraft200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceResetToOpen()`

```php
invoiceResetToOpen($invoice_id): \Itsmind\Sevdesk\Model\InvoiceResetToOpen200Response
```

Reset status to open

Resets the status \"Open\" (`\"status\": \"200\"`). Linked transactions will be unlinked.<br> This is not possible if the invoice itself or one of its transactions (CheckAccountTransaction) is already enshrined.  This endpoint cannot be used to increase the status to \"Open\" (`\"status\": \"200\"`).<br> Use [Invoice/{invoiceId}/sendBy](#tag/Invoice/operation/invoiceSendBy) / [Invoice/{invoiceId}/sendViaEmail](#tag/Invoice/operation/sendInvoiceViaEMail) instead.  This endpoint cannot be used for recurring invoices (`\"invoiceType\": \"WKR\"`). Use [Invoice/Factory/saveInvoice](#tag/Invoice/operation/createInvoiceByFactory) instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of the invoice to reset

try {
    $result = $apiInstance->invoiceResetToOpen($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceResetToOpen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of the invoice to reset | |

### Return type

[**\Itsmind\Sevdesk\Model\InvoiceResetToOpen200Response**](../Model/InvoiceResetToOpen200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceSendBy()`

```php
invoiceSendBy($invoice_id, $invoice_send_by_request): \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
```

Mark invoice as sent

Marks an invoice as sent by a chosen send type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to mark as sent
$invoice_send_by_request = new \Itsmind\Sevdesk\Model\InvoiceSendByRequest(); // \Itsmind\Sevdesk\Model\InvoiceSendByRequest | Specify the send type

try {
    $result = $apiInstance->invoiceSendBy($invoice_id, $invoice_send_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceSendBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice to mark as sent | |
| **invoice_send_by_request** | [**\Itsmind\Sevdesk\Model\InvoiceSendByRequest**](../Model/InvoiceSendByRequest.md)| Specify the send type | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response**](../Model/UpdateInvoiceById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendInvoiceViaEMail()`

```php
sendInvoiceViaEMail($invoice_id, $send_invoice_via_e_mail_request): \Itsmind\Sevdesk\Model\SendInvoiceViaEMail201Response
```

Send invoice via email

This endpoint sends the specified invoice to a customer via email.<br>      This will automatically mark the invoice as sent.<br>      Please note, that in production an invoice is not allowed to be changed after this happened!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to be sent via email
$send_invoice_via_e_mail_request = new \Itsmind\Sevdesk\Model\SendInvoiceViaEMailRequest(); // \Itsmind\Sevdesk\Model\SendInvoiceViaEMailRequest | Mail data

try {
    $result = $apiInstance->sendInvoiceViaEMail($invoice_id, $send_invoice_via_e_mail_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->sendInvoiceViaEMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice to be sent via email | |
| **send_invoice_via_e_mail_request** | [**\Itsmind\Sevdesk\Model\SendInvoiceViaEMailRequest**](../Model/SendInvoiceViaEMailRequest.md)| Mail data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\SendInvoiceViaEMail201Response**](../Model/SendInvoiceViaEMail201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoiceById()`

```php
updateInvoiceById($invoice_id, $embed, $model_invoice_update): \Itsmind\Sevdesk\Model\UpdateInvoiceById200Response
```

Update invoice by ID

Updates a single invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int | ID of invoice to return
$embed = array('embed_example'); // string[]
$model_invoice_update = new \Itsmind\Sevdesk\Model\ModelInvoiceUpdate(); // \Itsmind\Sevdesk\Model\ModelInvoiceUpdate | Update data

try {
    $result = $apiInstance->updateInvoiceById($invoice_id, $embed, $model_invoice_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->updateInvoiceById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**| ID of invoice to return | |
| **embed** | [**string[]**](../Model/string.md)|  | [optional] |
| **model_invoice_update** | [**\Itsmind\Sevdesk\Model\ModelInvoiceUpdate**](../Model/ModelInvoiceUpdate.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateInvoiceById200Response**](../Model/UpdateInvoiceById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
