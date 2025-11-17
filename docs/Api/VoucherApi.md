# Itsmind\Sevdesk\VoucherApi

Vouchers (receipts) is a generic term for various documents that serve as proof of business transactions for the bookkeeping.&lt;br&gt; Incoming and outgoing invoices, coupons and receipts are among the most common types of documents.&lt;br&gt; Every time one of our sevdesk customers makes a monetary input or output, the transaction needs to be documented with a receipt.&lt;br&gt; In sevdesk our customers can create a digital version of this receipt, the voucher, to which the actual offline receipt can be attached.&lt;br&gt; These vouchers can then be paid by the end-customers or by the customer, depending if it is an input or output, so that the transaction process is completely documented.&lt;br&gt; The vouchers are directly connected to the transactions of the customer, so every time a voucher is created and marked as paid, there must be a transaction on some bank account.&lt;br&gt; The voucher must then be linked to this transaction, otherwise false reports for tax offices and other institutions can be the case.&lt;br&gt;  # Attributes of a voucher  Here is the table of useful attributes of voucher.&lt;br&gt; Necessary attributes, which must not be left out, are marked red.&lt;br&gt; Attributes which are strongly recommended for valid bookkeeping are marked orange. These can be skipped when creating a draft voucher.&lt;br&gt; There is also a distinction between voucher types, as not all attributes are useful for all types. &lt;table&gt; &lt;tr&gt; &lt;th&gt;Attribute&lt;/th&gt; &lt;th&gt;Voucher Type&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;th&gt;Attribute Type&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxType&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; &lt;b&gt;Use this in sevdesk-Update 1.0 (instead of taxRule).&lt;/b&gt;&lt;br&gt; Defines the vat-regulation for the voucher&lt;br&gt; Can be: &lt;ul&gt; &lt;li&gt;&lt;code&gt;default&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;eu&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;noteu&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;custom&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;ss&lt;/code&gt;&lt;/li&gt; &lt;/ul&gt; &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;taxSet&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; &lt;b&gt;Use this in sevdesk-Update 1.0 (instead of taxRule).&lt;/b&gt;&lt;br&gt; If you supplied &lt;code&gt;\&quot;taxType\&quot;: \&quot;custom\&quot;&lt;/code&gt; you can specify which tax set should be used. &lt;/td&gt; &lt;td&gt;Nested object (TaxSet)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;taxRule&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; &lt;b&gt;Use this in sevdesk-Update 2.0 (instead of taxType / taxSet).&lt;/b&gt;&lt;br&gt; Defines the vat-regulation for the voucher&lt;br&gt; &lt;br&gt; For \&quot;Regelbesteuerung\&quot; it can be one of: &lt;ul&gt; &lt;li&gt;&lt;code&gt;1&lt;/code&gt; - Umsatzsteuerpflichtige Ums&amp;auml;tze (tax rates: 0.0, 7.0, 19.0) - replaces &lt;code&gt;\&quot;taxType\&quot;: \&quot;default\&quot;&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;2&lt;/code&gt; - Ausfuhren (tax rates: 0.0)&lt;/li&gt; &lt;li&gt;&lt;code&gt;3&lt;/code&gt; - Innergemeinschaftliche Lieferungen (tax rates: 0.0, 7.0, 19.0) - replaces &lt;code&gt;\&quot;taxType\&quot;: \&quot;eu\&quot;&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;4&lt;/code&gt; - Steuerfreie Ums&amp;auml;tze §4 UStG (tax rates: 0.0)&lt;/li&gt; &lt;li&gt;&lt;code&gt;5&lt;/code&gt; - Reverse Charge gem. §13b UStG (tax rates: 0.0)&lt;/li&gt; &lt;li&gt;&lt;code&gt;17&lt;/code&gt; - Nicht im Inland steuerbare Leistung - tax rates: 0.0 - replaces &lt;code&gt;\&quot;taxType\&quot;: \&quot;noteu\&quot;&lt;/code&gt;&lt;/li&gt; &lt;/ul&gt; For small business owner (\&quot;Kleinunternehmer\&quot;) it can be: &lt;ul&gt; &lt;li&gt;&lt;code&gt;1&lt;/code&gt; - Steuer nicht erhoben nach §19UStG (tax rates: 0.0) - replaces &lt;code&gt;\&quot;taxType\&quot;: \&quot;ss\&quot;&lt;/code&gt;&lt;/li&gt; &lt;/ul&gt; Example for Umsatzsteuerpflichtige Ums&amp;auml;tze: &lt;code&gt;\&quot;taxRule\&quot;: {\&quot;id\&quot;: \&quot;1\&quot;, \&quot;objectName\&quot;: \&quot;TaxRule\&quot;}&lt;/code&gt; &lt;br&gt;&lt;br&gt; Depending on the use case (revenue or expense), you can find the right TaxRule via one of the Account Guidance endpoints:&lt;br&gt; &lt;ul&gt; &lt;li&gt;&lt;a href&#x3D;&#39;#tag/Voucher/operation/forRevenue&#39;&gt;for revenue&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a href&#x3D;&#39;#tag/Voucher/operation/forExpense&#39;&gt;for expense&lt;/a&gt;&lt;/li&gt; &lt;/ul&gt; &lt;/td&gt; &lt;td&gt;Nested object (TaxRule)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;voucherType&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The type of the voucher. Most likely &lt;b&gt;VOU&lt;/b&gt; but RV is also valid. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;voucherDate&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The voucher date. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td style&#x3D;&#39;color:darkorange&#39;&gt;deliveryDate&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The delivery date of the voucher.&lt;br&gt; This can also be a date range if you provide another value for &lt;b&gt;deliveryDateUntil&lt;/b&gt;. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;deliveryDateUntil&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; You can provide a value here if you want the delivery date to be a date range and you have already given a value to &lt;b&gt;deliveryDate&lt;/b&gt;. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;status&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The voucher status. Notable values are 50 (draft) and 100 (finished), see below for the full list. &lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;creditDebit&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; Defines if the voucher is a credit (expense) or debit (revenue) document.&lt;br&gt; If you supply &lt;b&gt;C&lt;/b&gt; as the value, the voucher is a credit. You bought something.&lt;br&gt; If you supply &lt;b&gt;D&lt;/b&gt; as the value, the voucher is a debit. You sold something. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;enshrined&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; Enshrined vouchers cannot be changed.&lt;br&gt; Can only be set via &lt;a href&#x3D;\&quot;#tag/Voucher/operation/voucherEnshrine\&quot;&gt;/Voucher/{voucherId}/enshrine&lt;/a&gt;. This operation cannot be undone. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;paymentDeadline&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The payment deadline of the voucher.&lt;br&gt; If this date is exceeded, the voucher will be shown as due. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;supplier&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The supplier or customer to which the voucher is directed.&lt;br&gt; &lt;span style&#x3D;&#39;color:darkorange&#39;&gt;Note that you must provide either the supplier object or a supplierName.&lt;/span&gt; &lt;/td&gt; &lt;td&gt;Nested object (Contact)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;supplierName&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The name of the supplier or customer used for the voucher.&lt;br&gt; &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;description&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The voucher number or voucher description. &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;document&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The document of the voucher.&lt;br&gt; &lt;/td&gt; &lt;td&gt;Nested object (Document)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;payDate&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The date the voucher was paid. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;costCentre&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; A cost centre for the voucher. &lt;/td&gt; &lt;td&gt;Nested object (CostCentre)&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;currency&lt;/td&gt; &lt;td&gt;Any&lt;/td&gt; &lt;td&gt; The currency, defaults to the system currency when not set.&lt;br&gt; Example value: EUR &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;recurringInterval&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Recurring Vouchers&lt;/td&gt; &lt;td&gt; The interval in which vouchers are to be created.&lt;br&gt; Possible values are:&lt;br&gt; &lt;ul&gt; &lt;li&gt;P0Y0M1W (weekly)&lt;/li&gt; &lt;li&gt;P0Y0M2W (every second week)&lt;/li&gt; &lt;li&gt;P0Y1M (monthly)&lt;/li&gt; &lt;li&gt;P0Y2M (every second month)&lt;/li&gt; &lt;li&gt;P0Y3M (quarterly)&lt;/li&gt; &lt;li&gt;P0Y6M (semiannual)&lt;/li&gt; &lt;li&gt;P1Y (yearly)&lt;/li&gt; &lt;li&gt;P2Y (every 2 years)&lt;/li&gt; &lt;li&gt;P3Y (every 3 years)&lt;/li&gt; &lt;li&gt;P4Y (every 4 years)&lt;/li&gt; &lt;li&gt;P5Y (every 5 years)&lt;/li&gt; &lt;/ul&gt; &lt;/td&gt; &lt;td&gt;String&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;recurringIntervall&lt;br&gt;&lt;span style&#x3D;&#39;color:red&#39;&gt;deprecated&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Recurring Vouchers&lt;/td&gt; &lt;td&gt;Values will be mapped to recurringInterval, deprecated because it would not allow values &lt; 1 month.&lt;/td&gt; &lt;td&gt;Integer&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;recurringStartDate&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Recurring Vouchers&lt;/td&gt; &lt;td&gt; The date when the recurring vouchers start. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;&lt;span style&#x3D;&#39;color:darkorange&#39;&gt;recurringNextVoucher&lt;/span&gt;&lt;/td&gt; &lt;td&gt;Recurring Vouchers&lt;/td&gt; &lt;td&gt; The date when the next voucher is due. When creating RV documents you will usually set this to the same date as recurringStartDate. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;recurringLastVoucher&lt;/td&gt; &lt;td&gt;Recurring Vouchers&lt;/td&gt; &lt;td&gt; The date the last previous voucher was generated. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;recurringEndDate&lt;/td&gt; &lt;td&gt;Recurring Vouchers&lt;/td&gt; &lt;td&gt; The date the generation of recurring vouchers ends. &lt;/td&gt; &lt;td&gt;Date / Timestamp&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;  # Types and status of vouchers  Vouchers are one of the more complex objects that can be handled over the API.&lt;br&gt; There are two types of vouchers and these vouchers can have multiple status again.&lt;br&gt; Let&#39;s have a look at the different types of vouchers first.&lt;br&gt; &lt;table&gt; &lt;tr&gt; &lt;th&gt;Voucher Type&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;th&gt;Abbreviation&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Normal voucher&lt;/td&gt; &lt;td&gt; A normal voucher which documents a simple selling process. &lt;/td&gt; &lt;td&gt; VOU &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Recurring voucher&lt;/td&gt; &lt;td&gt; A voucher which generates normal vouchers with the same values regularly in fixed time frames (every month, year, ...). &lt;/td&gt; &lt;td&gt; RV &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt; For now we will only cover the normal vouchers, as this is complex enough.&lt;br&gt;&lt;br&gt; &lt;b&gt;Voucher status&lt;/b&gt;&lt;br&gt; Now that we have covered all voucher types, let&#39;s move to the different status they can have.&lt;br&gt; &lt;table&gt; &lt;tr&gt; &lt;th&gt;Voucher status&lt;/th&gt; &lt;th&gt;Meaning&lt;/th&gt; &lt;th&gt;Status code&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Draft&lt;/td&gt; &lt;td&gt; The voucher is still a draft.&lt;br&gt; It has not been marked as completed and can still be changed. &lt;/td&gt; &lt;td&gt; 50 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Unpaid / Due&lt;/td&gt; &lt;td&gt; The voucher has been completed but not paid.&lt;br&gt; It is either shown as &lt;b&gt;unpaid&lt;/b&gt; if the pay date is not exceeded or &lt;b&gt;due&lt;/b&gt; if it is. &lt;/td&gt; &lt;td&gt; 100 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Transferred&lt;/td&gt; &lt;td&gt; The voucher has been used to create a payment in sevdesk and is waiting for the import of the bank transaction to set it to paid. &lt;/td&gt; &lt;td&gt; 150 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Partially paid&lt;/td&gt; &lt;td&gt; The voucher has been partially paid. There are linked transactions or payments. &lt;/td&gt; &lt;td&gt; 750 &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Paid&lt;/td&gt; &lt;td&gt; The voucher has been paid by the end-customer or the sevdesk customer.&lt;br&gt; This means, that it is linked to a transaction on some payment account in sevdesk. &lt;/td&gt; &lt;td&gt; 1000 &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;  # How e-invoice works    The general creation process does not change for e-invoice documents. Our existing endpoints will accept files in XML format as well as a PDF with embedded XML (i.e. in the ZUGFeRD format). As before, the internal filename is returned and the filename parameter can be used to create a voucher via the saveVoucher request.&lt;br&gt; Note that you are still responsible for providing the voucher data as before. The file provided will be treated in the same way as any other file uploaded via the API. In particular, this means that it will not be validated on our end for compliance with the EN16931 standard.&lt;br&gt;  # Account Datev   *Use this in sevdesk-Update 2.0 (instead of &lt;a href&#x3D;&#39;#tag/Voucher/Accounting-type&#39;&gt;Accounting type&lt;/a&gt;)*    An account Datev is the booking account used in voucher positions.&lt;br&gt; To choose the right account datev please use our &lt;a href&#x3D;&#39;#tag/Voucher/operation/forAllAccounts&#39;&gt;account guidance&lt;/a&gt;&lt;br&gt; &lt;br&gt; Here are two examples how accounting types can be chosen by our customers in the web interface:&lt;br&gt; &lt;br&gt; &lt;img src&#x3D;&#39;openAPI/img/accountDatevExpense.png&#39;&gt;&lt;br&gt;&lt;br&gt; &lt;img src&#x3D;&#39;openAPI/img/accountDatevYield.png&#39;&gt;&lt;br&gt;&lt;br&gt;    # Accounting type   *Use this in sevdesk-Update 1.0*    An accounting type is the booking account used in voucher positions.&lt;br&gt; It is essential that you always provide one, as it is relevant for multiple business reports.&lt;br&gt; In general, accounting types are differentiated into income and output accounting types.&lt;br&gt; Income types should only be used for debit vouchers and output types only for credit vouchers!&lt;br&gt; Here are two examples how accounting types can be chosen by our customers in the web interface:&lt;br&gt;&lt;br&gt; &lt;img src&#x3D;&#39;openAPI/img/creditAccountingTypes.PNG&#39; width&#x3D; &#39;700px&#39;&gt;&lt;br&gt;&lt;br&gt; &lt;img src&#x3D;&#39;openAPI/img/debitAccountingType.PNG&#39; width&#x3D; &#39;700px&#39;&gt;&lt;br&gt;&lt;br&gt; Regarding the accounting types, you will most certainly only need to request existing accounting types for using their ID in further requests.&lt;br&gt; Therefore, you only need to send normal GET requests to the AccountingType endpoint.&lt;br&gt;  # How to filter for certain vouchers  &lt;table&gt; &lt;tr&gt; &lt;th&gt;Filter&lt;/th&gt; &lt;th&gt;Description&lt;/th&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;accountingType[id]&#x3D;{id}&amp;accountingType[objectName]&#x3D;AccountingType&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers which contain at least one position using id as an accounting type.&lt;br&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;withoutCatering&#x3D;true&lt;/td&gt; &lt;td&gt;Retrieve all vouchers except catering vouchers.&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;year&#x3D;{year}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers with a voucher date in year.&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;month&#x3D;{month}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers with a voucher date in month.&lt;br&gt; Can be combined with a year. &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;descriptionLike&#x3D;{description}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers with a description containing description.&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;creditDebit&#x3D;{C/D}&lt;/td&gt; &lt;td&gt;Supply &lt;b&gt;C&lt;/b&gt; to only retrieve credit vouchers and &lt;b&gt;D&lt;/b&gt; to only retrieve debit vouchers.&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;supplierName&#x3D;{name}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers with a supplier having a name like name.&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;commentLike&#x3D;{comment}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers having a position with a comment like comment.&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;searchCommentOrDescription&#x3D;{text}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers having a position with comment like text or a description like text.&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;contact[id]&#x3D;{id}&amp;contact[objectName]&#x3D;Contact&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers with id as a contact&lt;br&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;createBefore&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers created before timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;createAfter&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers created after timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;updateBefore&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers updated last before timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;updateAfter&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers updated last after timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;startDate&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers where voucher date is bigger than timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;endDate&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt; Only retrieve all vouchers where voucher date is smaller than timestamp&lt;br&gt; If startDate and endDate are both supplied, you will get all vouchers in the defined range. &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;object[id]&#x3D;{id}&amp;object[objectName]&#x3D;{objectName}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers with a linked object with ID id and objectName as object name.&lt;br&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;startPayDate&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers where pay date is bigger than timestamp&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;endPayDate&#x3D;{timestamp}&lt;/td&gt; &lt;td&gt; Only retrieve all vouchers where pay date is smaller than timestamp&lt;br&gt; If startPayDate and endPayDate are both supplied, you will get all vouchers in the defined range. &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;status&#x3D;{status}&lt;/td&gt; &lt;td&gt;Only retrieve vouchers of a given status&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderByDebit&#x3D;true&lt;/td&gt; &lt;td&gt;Retrieve all vouchers ordered by their debit&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;costCentre[id]&#x3D;{id}&amp;costCentre[objectName]&#x3D;CostCentre&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers with id as a cost centre.&lt;br&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;voucherType&#x3D;{type}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers with type as a voucher type&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;origin[id]&#x3D;{id}&amp;origin[objectName]&#x3D;ModelName&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers with id as an origin&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;globalSearch&#x3D;{searchTerm}&lt;/td&gt; &lt;td&gt;Search for vouchers related to searchTerm&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;contactOrObject[id]&#x3D;{id}&amp;contactOrObject[objectName]&#x3D;{objectName}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers with a linked object or a contact with ID id and objectName as object name.&lt;br&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;orderByVoucherNumber&#x3D;{ASC/DESC}&lt;/td&gt; &lt;td&gt;Order all vouchers after voucher number in ASC/DESC order&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;delinquent&#x3D;true&lt;/td&gt; &lt;td&gt;Only retrieve delinquent (due) vouchers&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;hasDocument&#x3D;true&lt;/td&gt; &lt;td&gt;Only retrieve vouchers which have an attached document&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;noRv&#x3D;true&lt;/td&gt; &lt;td&gt;Only retrieve vouchers which are not of type RV&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;tags[x][id]&#x3D;{id}&amp;tags[x][objectName]&#x3D;Tag&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers with id as a tag.&lt;br&gt; You can specify multiple tags by adding more array entries. &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;startAmount&#x3D;{amount}&lt;/td&gt; &lt;td&gt;Only retrieve all vouchers with a sum bigger than amount.&lt;br&gt; If your provided amount is negative, it will retrieve all vouchers with a sum smaller than amount.&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;endAmount&#x3D;{amount}&lt;/td&gt; &lt;td&gt; Only retrieve all vouchers with a sum smaller than amount.&lt;br&gt; If your provided amount is negative, it will retrieve all vouchers with a sum bigger than amount.&lt;br&gt; If startAmount and endAmount are both supplied, you will get all vouchers in the defined range. &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;fulltextSearch&#x3D;{text}&lt;/td&gt; &lt;td&gt;Search for vouchers, positions or contact with text as a text&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;fulltextSearchObjects&#x3D;{object1, object2, ...}&lt;/td&gt; &lt;td&gt;Enables different objects to search in with the fulltextSearch.&lt;/td&gt; &lt;/tr&gt; &lt;/table&gt;&lt;br&gt;

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookVoucher()**](VoucherApi.md#bookVoucher) | **PUT** /Voucher/{voucherId}/bookAmount | Book a voucher |
| [**forAccountNumber()**](VoucherApi.md#forAccountNumber) | **GET** /ReceiptGuidance/forAccountNumber | Get guidance by account number |
| [**forAllAccounts()**](VoucherApi.md#forAllAccounts) | **GET** /ReceiptGuidance/forAllAccounts | Get all account guides |
| [**forExpense()**](VoucherApi.md#forExpense) | **GET** /ReceiptGuidance/forExpense | Get guidance for expense accounts |
| [**forRevenue()**](VoucherApi.md#forRevenue) | **GET** /ReceiptGuidance/forRevenue | Get guidance for revenue accounts |
| [**forTaxRule()**](VoucherApi.md#forTaxRule) | **GET** /ReceiptGuidance/forTaxRule | Get guidance by Tax Rule |
| [**getVoucherById()**](VoucherApi.md#getVoucherById) | **GET** /Voucher/{voucherId} | Find voucher by ID |
| [**getVouchers()**](VoucherApi.md#getVouchers) | **GET** /Voucher | Retrieve vouchers |
| [**updateVoucher()**](VoucherApi.md#updateVoucher) | **PUT** /Voucher/{voucherId} | Update an existing voucher |
| [**voucherEnshrine()**](VoucherApi.md#voucherEnshrine) | **PUT** /Voucher/{voucherId}/enshrine | Enshrine |
| [**voucherFactorySaveVoucher()**](VoucherApi.md#voucherFactorySaveVoucher) | **POST** /Voucher/Factory/saveVoucher | Create a new voucher |
| [**voucherResetToDraft()**](VoucherApi.md#voucherResetToDraft) | **PUT** /Voucher/{voucherId}/resetToDraft | Reset status to draft |
| [**voucherResetToOpen()**](VoucherApi.md#voucherResetToOpen) | **PUT** /Voucher/{voucherId}/resetToOpen | Reset status to open |
| [**voucherUploadFile()**](VoucherApi.md#voucherUploadFile) | **POST** /Voucher/Factory/uploadTempFile | Upload voucher file |


## `bookVoucher()`

```php
bookVoucher($voucher_id, $book_voucher_request): \Itsmind\Sevdesk\Model\BookVoucher200Response
```

Book a voucher

Booking the voucher with a transaction is probably the most important part in the bookkeeping process.<br> There are several ways on correctly booking a voucher, all by using the same endpoint.<br> Conveniently, the booking process is exactly the same as the process for invoices.<br> For this reason, you can have a look at it <a href='#tag/Invoice/How-to-book-an-invoice'>here</a> and all you need to do is to change \"Invoice\" into \"Voucher\" in the URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | ID of voucher to book
$book_voucher_request = new \Itsmind\Sevdesk\Model\BookVoucherRequest(); // \Itsmind\Sevdesk\Model\BookVoucherRequest | Booking data

try {
    $result = $apiInstance->bookVoucher($voucher_id, $book_voucher_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->bookVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **int**| ID of voucher to book | |
| **book_voucher_request** | [**\Itsmind\Sevdesk\Model\BookVoucherRequest**](../Model/BookVoucherRequest.md)| Booking data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\BookVoucher200Response**](../Model/BookVoucher200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forAccountNumber()`

```php
forAccountNumber($account_number): \Itsmind\Sevdesk\Model\ForAllAccounts200Response
```

Get guidance by account number

You can use this endpoint to get additional information about the account that you may want to use.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_number = 56; // int | The datev account number you want to get additional information of

try {
    $result = $apiInstance->forAccountNumber($account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->forAccountNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_number** | **int**| The datev account number you want to get additional information of | |

### Return type

[**\Itsmind\Sevdesk\Model\ForAllAccounts200Response**](../Model/ForAllAccounts200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forAllAccounts()`

```php
forAllAccounts(): \Itsmind\Sevdesk\Model\ForAllAccounts200Response
```

Get all account guides

You can use this endpoint to help you decide which accounts you can use when creating a voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->forAllAccounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->forAllAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Itsmind\Sevdesk\Model\ForAllAccounts200Response**](../Model/ForAllAccounts200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forExpense()`

```php
forExpense(): \Itsmind\Sevdesk\Model\ForAllAccounts200Response
```

Get guidance for expense accounts

Provides all possible combinations for expense accounts to be used with expense receipts/vouchers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->forExpense();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->forExpense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Itsmind\Sevdesk\Model\ForAllAccounts200Response**](../Model/ForAllAccounts200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forRevenue()`

```php
forRevenue(): \Itsmind\Sevdesk\Model\ForAllAccounts200Response
```

Get guidance for revenue accounts

Provides all possible combinations for revenue accounts to be used with revenue receipts/vouchers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->forRevenue();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->forRevenue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Itsmind\Sevdesk\Model\ForAllAccounts200Response**](../Model/ForAllAccounts200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forTaxRule()`

```php
forTaxRule($tax_rule): \Itsmind\Sevdesk\Model\ForAllAccounts200Response
```

Get guidance by Tax Rule

You can use this endpoint to get additional information about the tax rule (for example, USTPFL_UMS_EINN) that you may want to use.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_rule = USTPFL_UMS_EINN; // string | The code of the tax rule you want to get guidance for.

try {
    $result = $apiInstance->forTaxRule($tax_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->forTaxRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_rule** | **string**| The code of the tax rule you want to get guidance for. | |

### Return type

[**\Itsmind\Sevdesk\Model\ForAllAccounts200Response**](../Model/ForAllAccounts200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoucherById()`

```php
getVoucherById($voucher_id): \Itsmind\Sevdesk\Model\GetVoucherById200Response
```

Find voucher by ID

Returns a single voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | ID of voucher to return

try {
    $result = $apiInstance->getVoucherById($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getVoucherById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **int**| ID of voucher to return | |

### Return type

[**\Itsmind\Sevdesk\Model\GetVoucherById200Response**](../Model/GetVoucherById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVouchers()`

```php
getVouchers($status, $credit_debit, $description_like, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed): \Itsmind\Sevdesk\Model\GetVouchers200Response
```

Retrieve vouchers

There are a multitude of parameter which can be used to filter. A few of them are attached but      for a complete list please check out <a href='#tag/Voucher/How-to-filter-for-certain-vouchers'>this</a> list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 3.4; // float | Status of the vouchers to retrieve.
$credit_debit = 'credit_debit_example'; // string | Define if you only want credit or debit vouchers.
$description_like = 'description_like_example'; // string | Retrieve all vouchers with a description like this.
$start_date = 01.01.2020; // int | Retrieve all vouchers with a date equal or higher
$end_date = 01.01.2020; // int | Retrieve all vouchers with a date equal or lower
$contact_id = 56; // int | Retrieve all vouchers with this contact. Must be provided with contact[objectName]
$contact_object_name = 'contact_object_name_example'; // string | Only required if contact[id] was provided. 'Contact' should be used as value.
$count_all = True; // bool | If all objects should be counted
$offset = 56; // int | Which offset to start with
$limit = 56; // int | The max number of objects to return
$embed = array('embed_example'); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma.

try {
    $result = $apiInstance->getVouchers($status, $credit_debit, $description_like, $start_date, $end_date, $contact_id, $contact_object_name, $count_all, $offset, $limit, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **float**| Status of the vouchers to retrieve. | [optional] |
| **credit_debit** | **string**| Define if you only want credit or debit vouchers. | [optional] |
| **description_like** | **string**| Retrieve all vouchers with a description like this. | [optional] |
| **start_date** | **int**| Retrieve all vouchers with a date equal or higher | [optional] |
| **end_date** | **int**| Retrieve all vouchers with a date equal or lower | [optional] |
| **contact_id** | **int**| Retrieve all vouchers with this contact. Must be provided with contact[objectName] | [optional] |
| **contact_object_name** | **string**| Only required if contact[id] was provided. &#39;Contact&#39; should be used as value. | [optional] |
| **count_all** | **bool**| If all objects should be counted | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **limit** | **int**| The max number of objects to return | [optional] |
| **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetVouchers200Response**](../Model/GetVouchers200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVoucher()`

```php
updateVoucher($voucher_id, $model_voucher_update): \Itsmind\Sevdesk\Model\UpdateVoucher200Response
```

Update an existing voucher

Update a draft voucher using this method if you want to change simple values like the description. Complex changes like adding a position should use /Voucher/Factory/saveVoucher.<br> You can not change the status using this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | ID of voucher to update
$model_voucher_update = new \Itsmind\Sevdesk\Model\ModelVoucherUpdate(); // \Itsmind\Sevdesk\Model\ModelVoucherUpdate | Update data

try {
    $result = $apiInstance->updateVoucher($voucher_id, $model_voucher_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->updateVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **int**| ID of voucher to update | |
| **model_voucher_update** | [**\Itsmind\Sevdesk\Model\ModelVoucherUpdate**](../Model/ModelVoucherUpdate.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\UpdateVoucher200Response**](../Model/UpdateVoucher200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voucherEnshrine()`

```php
voucherEnshrine($voucher_id): \Itsmind\Sevdesk\Model\CheckAccountTransactionEnshrine200Response
```

Enshrine

Sets the current date and time as a value for the property `enshrined`.<br> This operation is only possible if the status is \"Open\" (`\"status\": \"100\"`) or higher.  Enshrined vouchers cannot be changed. This operation cannot be undone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | ID of the voucher to enshrine

try {
    $result = $apiInstance->voucherEnshrine($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherEnshrine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **int**| ID of the voucher to enshrine | |

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

## `voucherFactorySaveVoucher()`

```php
voucherFactorySaveVoucher($save_voucher): \Itsmind\Sevdesk\Model\VoucherFactorySaveVoucher201Response
```

Create a new voucher

Bundles the creation or updating of voucher and voucher position.<br> The list of parameters starts with the voucher model.<br> This contains all required attributes for a complete voucher.<br> Most of the attributes are covered in the voucher attribute list, there are only two parameters standing out, namely <b>mapAll</b> and <b>objectName</b>.<br> These are just needed for our system and you always need to provide them.<br><br> The list of parameters then continues with the voucher position array.<br> With this array you have the possibility to add multiple positions at once.<br> In the example it only contains one position, again together with the parameters <b>mapAll</b> and <b>objectName</b>, however, you can add more voucher positions by extending the array.<br> So if you wanted to add another position, you would add the same list of parameters with an incremented array index of \\\"1\\\" instead of \\\"0\\\".<br><br> The list ends with the two parameters voucherPosDelete and filename.<br> We will shortly explain what they can do.<br> With voucherPosDelete you can delete voucher positions as this request can also be used to update draft vouchers.<br> With filename you can attach a file to the voucher.<br> For most of our customers this is a really important step, as they need to digitize their receipts.<br> Finally, after covering all parameters, the only important information left, is that the order of the last two attributes always needs to be kept. <br><br> The only valid status values for this endpoint are 50 (draft) and 100 (open). You can only update draft vouchers. If you have to, you can downgrade the status by calling resetToOpen (from paid) and resetToDraft (from open).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$save_voucher = new \Itsmind\Sevdesk\Model\SaveVoucher(); // \Itsmind\Sevdesk\Model\SaveVoucher | Creation data. Please be aware, that you need to provide at least all required parameters of the voucher and voucher position model!

try {
    $result = $apiInstance->voucherFactorySaveVoucher($save_voucher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherFactorySaveVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **save_voucher** | [**\Itsmind\Sevdesk\Model\SaveVoucher**](../Model/SaveVoucher.md)| Creation data. Please be aware, that you need to provide at least all required parameters of the voucher and voucher position model! | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\VoucherFactorySaveVoucher201Response**](../Model/VoucherFactorySaveVoucher201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voucherResetToDraft()`

```php
voucherResetToDraft($voucher_id): \Itsmind\Sevdesk\Model\VoucherResetToOpen200Response
```

Reset status to draft

Resets the status \"Draft\" (`\"status\": \"50\"`). Linked payments will be unlinked. Created asset depreciation will be reset.<br> This is not possible if the voucher is already enshrined!  You can only change the status from higher to lower (\"Open\" to \"Draft\").<br> To change to higher status use [/Voucher/Factory/saveVoucher](#tag/Voucher/operation/voucherFactorySaveVoucher).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | ID of the voucher to reset

try {
    $result = $apiInstance->voucherResetToDraft($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherResetToDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **int**| ID of the voucher to reset | |

### Return type

[**\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response**](../Model/VoucherResetToOpen200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voucherResetToOpen()`

```php
voucherResetToOpen($voucher_id): \Itsmind\Sevdesk\Model\VoucherResetToOpen200Response
```

Reset status to open

Resets the status to \"Open\" (`\"status\": \"100\"`). Linked payments will be unlinked. Created asset depreciation will be reset.<br> This is not possible if the voucher is already enshrined!  This endpoint can not be used to increase the status from \"Draft\" to \"Open\".<br> You can only change the status from higher to lower (\"Open\" to \"Draft\").<br> To change to higher status use [Voucher/{voucherId}/bookAmount](#tag/Voucher/operation/bookVoucher). To change to lower status use [Voucher/{voucherId}/resetToDraft](#tag/Voucher/operation/voucherResetToDraft).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | ID of the voucher to reset

try {
    $result = $apiInstance->voucherResetToOpen($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherResetToOpen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_id** | **int**| ID of the voucher to reset | |

### Return type

[**\Itsmind\Sevdesk\Model\VoucherResetToOpen200Response**](../Model/VoucherResetToOpen200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voucherUploadFile()`

```php
voucherUploadFile($voucher_upload_file_request): \Itsmind\Sevdesk\Model\VoucherUploadFile201Response
```

Upload voucher file

To attach a document to a voucher, you will need to upload it first for later use.<br> To do this, you can use this request.<br> When you successfully uploaded the file, you will get a sevdesk internal filename in the response.<br> The filename will be a hash generated from your uploaded file. You will need it in the next request!<br> After you got the just mentioned filename, you can enter it as a value for the filename parameter of the saveVoucher request.<br> If you provided all necessary parameters and kept all of them in the right order, the file will be attached to your voucher.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_upload_file_request = new \Itsmind\Sevdesk\Model\VoucherUploadFileRequest(); // \Itsmind\Sevdesk\Model\VoucherUploadFileRequest | File to upload

try {
    $result = $apiInstance->voucherUploadFile($voucher_upload_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherUploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **voucher_upload_file_request** | [**\Itsmind\Sevdesk\Model\VoucherUploadFileRequest**](../Model/VoucherUploadFileRequest.md)| File to upload | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\VoucherUploadFile201Response**](../Model/VoucherUploadFile201Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
