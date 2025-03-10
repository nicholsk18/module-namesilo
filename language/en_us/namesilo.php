<?php
// Basics
$lang['Namesilo.name'] = 'NameSilo';
$lang['Namesilo.description'] = 'Resell domains through NameSilo.';
$lang['Namesilo.module_row'] = 'Account';
$lang['Namesilo.module_row_plural'] = 'Accounts';


// Cron tasks
$lang['Namesilo.getCronTasks.pull_contacts_name'] = 'Pull Namesilo Contacts';
$lang['Namesilo.getCronTasks.pull_contacts_desc'] = 'Pulls in contacts from namesilo and assiciates them with blesta clients.';


// Module management
$lang['Namesilo.add_module_row'] = 'Add Account';
$lang['Namesilo.manage.module_rows_title'] = 'Accounts';
$lang['Namesilo.manage.module_rows_heading.user'] = 'User';
$lang['Namesilo.manage.module_rows_heading.key'] = 'API Key';
$lang['Namesilo.manage.module_rows_heading.sandbox'] = 'Sandbox';
$lang['Namesilo.manage.module_rows_heading.options'] = 'Options';
$lang['Namesilo.manage.module_rows_heading.portfolio'] = 'Default Portfolio';
$lang['Namesilo.manage.module_rows.edit'] = 'Edit';
$lang['Namesilo.manage.module_rows.delete'] = 'Delete';
$lang['Namesilo.manage.module_rows.confirm_delete'] = 'Are you sure you want to delete this account?';
$lang['Namesilo.manage.module_rows_no_results'] = 'There are no accounts.';
$lang['Namesilo.manage.audit_domains'] = 'Audit Domains';

// Audit Domains
$lang['Namesilo.add_row.audit_domains.box_title'] = 'Audit Domains';
$lang['Namesilo.manage.audit_domains.description'] = 'This is a summary of domains from the NameSilo API compared against domains currently active/suspended in Blesta.  This is to help ensure that you aren\'t paying for domains that you aren\'t being paid for.';
$lang['Namesilo.manage.audit_domains.no_issues'] = 'No issues detected.';
$lang['Namesilo.manage.audit_domains.results'] = 'Audit Results';

// Row Meta
$lang['Namesilo.row_meta.user'] = 'User';
$lang['Namesilo.row_meta.key'] = 'API Key';
$lang['Namesilo.row_meta.portfolio'] = 'Portfolio';
$lang['Namesilo.row_meta.payment_id'] = 'Payment ID';
$lang['Namesilo.row_meta.payment_id.description'] = 'Leave blank to use account funds or enter the ID of a billing profile that is <strong>verified</strong> in your Namesilo account to use it for purchases.  You can get this ID from';
$lang['Namesilo.row_meta.sandbox'] = 'Sandbox';
$lang['Namesilo.row_meta.sandbox_true'] = 'Yes';
$lang['Namesilo.row_meta.sandbox_false'] = 'No';

// Add row
$lang['Namesilo.add_row.box_title'] = 'Add NameSilo Account';
$lang['Namesilo.add_row.basic_title'] = 'Basic Settings';
$lang['Namesilo.add_row.add_btn'] = 'Add Account';

// Edit row
$lang['Namesilo.edit_row.box_title'] = 'Edit NameSilo Account';
$lang['Namesilo.edit_row.basic_title'] = 'Basic Settings';
$lang['Namesilo.edit_row.add_btn'] = 'Update Account';

// Package fields
$lang['Namesilo.package_fields.type'] = 'Type';
$lang['Namesilo.package_fields.type_domain'] = 'Domain Registration';
$lang['Namesilo.package_fields.type_ssl'] = 'SSL Certificate';
$lang['Namesilo.package_fields.tld_options'] = 'TLDs';
$lang['Namesilo.package_fields.ns1'] = 'Name Server 1';
$lang['Namesilo.package_fields.ns2'] = 'Name Server 2';
$lang['Namesilo.package_fields.ns3'] = 'Name Server 3';
$lang['Namesilo.package_fields.ns4'] = 'Name Server 4';
$lang['Namesilo.package_fields.ns5'] = 'Name Server 5';
$lang['Namesilo.package_fields.epp_code'] = 'Epp Code';
$lang['Namesilo.package_fields.enable_epp_code'] = 'Allow Access';

// Service management
$lang['Namesilo.tab_whois.title'] = 'Whois';
$lang['Namesilo.tab_whois.section_registrant'] = 'Registrant';
$lang['Namesilo.tab_whois.section_administrative'] = 'Administrative';
$lang['Namesilo.tab_whois.section_technical'] = 'Technical';
$lang['Namesilo.tab_whois.section_billing'] = 'Billing';
$lang['Namesilo.tab_whois.field_submit'] = 'Update Whois';
$lang['Namesilo.tab_whois.copy_registrant_info'] = 'Copy Registrant Info';

$lang['Namesilo.tab_manage_contacts.title'] = 'Manage Contacts';
$lang['Namesilo.tab_manage_contacts.heading_contact_id'] = 'Contact ID';
$lang['Namesilo.tab_manage_contacts.heading_name'] = 'Contact Name';
$lang['Namesilo.tab_manage_contacts.heading_options'] = 'Options';
$lang['Namesilo.tab_manage_contacts.option_add'] = 'Add Contact';
$lang['Namesilo.tab_manage_contacts.option_edit'] = 'Edit';
$lang['Namesilo.tab_manage_contacts.option_delete'] = 'Delete';
$lang['Namesilo.tab_manage_contacts.field_sync'] = 'Pull Contacts From Registry';
$lang['Namesilo.tab_manage_contacts.field_submit'] = 'Set Default Registrant Contact';


$lang['Namesilo.tab_edit_contact.title'] = 'Edit Contact';
$lang['Namesilo.tab_add_contact.title'] = 'Add Contact';


$lang['Namesilo.tab_edit_contact.field_back'] = 'Back';
$lang['Namesilo.tab_edit_contact.field_submit'] = 'Save Contact';

$lang['Namesilo.tab_email_forwarding.title'] = 'Email Forwarding';
$lang['Namesilo.tab_email_forwarding.desc'] = 'Email forwarding is automatically directing email sent from one address to a different email address. For example, if you had an existing email address of email@email.com, and then registered the domain newdomain.com, you could use email forward to direct sales@newdomain.com to your existing email@email.com email address.';
$lang['Namesilo.tab_email_forwarding.field_email_address'] = 'Email Address';
$lang['Namesilo.tab_email_forwarding.field_forward_to'] = 'Forward To';
$lang['Namesilo.tab_email_forwarding.field_delete'] = 'Delete';
$lang['Namesilo.tab_email_forwarding.field_submit'] = 'Update Forwarders';

$lang['Namesilo.tab_nameservers.title'] = 'Name Servers';
$lang['Namesilo.tab_nameservers.desc'] = 'We allow up to 5 possible name servers, although only 2 are required. It is important that you do not enter the IP address of the name server, but instead enter the actual name server name. Name servers are typically formatted like "NS1.host.com".';
$lang['Namesilo.tab_nameservers.field_ns'] = 'Name Server %1$s'; // %1$s is the name server number
$lang['Namesilo.tab_nameservers.field_submit'] = 'Update Name Servers';

$lang['Namesilo.tab_hosts.title'] = 'Register Nameservers';
$lang['Namesilo.tab_hosts.desc'] = 'If you are already familiar with setting up custom name servers and understand how DNS works, you can create custom name servers and assign it to your domain.';
$lang['Namesilo.tab_hosts.field_host'] = 'Host %1$s'; // %1$s is the host number
$lang['Namesilo.tab_hosts.field_ip'] = 'IP Address(es)';
$lang['Namesilo.tab_hosts.field_hostname'] = 'Host';
$lang['Namesilo.tab_hosts.field_submit'] = 'Update All Hosts';
$lang['Namesilo.tab_client_hosts.help_text'] = 'On this page you can add your own custom name servers (sometimes referred to as "glue records") to associate with your domains.  To remove a host record blank all IP fields associated with it before clicking update.  You can not delete any host records which have domains actively using it as a nameserver.';

$lang['Namesilo.tab_dnssec.title'] = 'DNSSEC';
$lang['Namesilo.tab_dnssec.title_list'] = 'Current DS (DNSSEC) Records';
$lang['Namesilo.tab_dnssec.title_add'] = 'Add DS (DNSSEC) Record';
$lang['Namesilo.tab_dnssec.field_delete'] = 'Delete Record(s)';
$lang['Namesilo.tab_dnssec.field_add'] = 'Add Record';
$lang['Namesilo.tab_dnssec.field_delete'] = 'Delete';
$lang['Namesilo.tab_dnssec.title_disclaimer'] = 'Disclaimer';
$lang['Namesilo.tab_dnssec.warning_message1'] = 'You can use this page to manage the DS records for your domain. You should only use this page if you are comfortable with DS records and DNSSEC.';
$lang['Namesilo.tab_dnssec.warning_message2'] = 'When you manage DS records, <strong>the domain will stop resolving correctly</strong> if your nameservers are not configured correctly with the associated DNSSEC resource records.';

$lang['Namesilo.dnssec.algorithm'] = 'Algorithm';
$lang['Namesilo.dnssec.digest_type'] = 'Digest Type';
$lang['Namesilo.dnssec.digest'] = 'Digest';
$lang['Namesilo.dnssec.key_tag'] = 'Key Tag';

// DNS records
$lang['Namesilo.tab_dnsrecord.title'] = 'DNS Records';
$lang['Namesilo.tab_dnsrecord.title_list'] = 'Current DNS Records';
$lang['Namesilo.tab_dnsrecord.title_add'] = 'Add a DNS Record';
$lang['Namesilo.tab_dnsrecord.field_delete'] = 'Delete Record(s)';
$lang['Namesilo.tab_dnsrecord.field_add'] = 'Add Record';
$lang['Namesilo.tab_dnsrecord.help_text_1'] = 'On this page you can add or delete A, AAAA, CNAME, MX and TXT DNS records. Please be ware that it might take some few minutes for DNS records to propagate.';

$lang['Namesilo.dnsrecord.record_type'] = 'Type';
$lang['Namesilo.dnsrecord.host'] = 'Host';
$lang['Namesilo.dnsrecord.value'] = 'Value';
$lang['Namesilo.dnsrecord.distance'] = 'Priority';
$lang['Namesilo.dnsrecord.ttl'] = 'TTL';
$lang['Namesilo.dnsrecord.field_delete'] = 'Delete Record(s)';

$lang['Namesilo.dns_records.record_type'] = 'Record Type';
$lang['Namesilo.dns_records.record_type.a_record'] = 'A Record';
$lang['Namesilo.dns_records.record_type.aaaa_record'] = 'AAAA Record';
$lang['Namesilo.dns_records.record_type.cname_record'] = 'CNAME Record';
$lang['Namesilo.dns_records.record_type.mx_record'] = 'MX Record';
$lang['Namesilo.dns_records.record_type.txt_record'] = 'TXT Record';

// Settings
$lang['Namesilo.tab_settings.title'] = 'Settings';
$lang['Namesilo.tab_settings.field_registrar_lock'] = 'Registrar Lock';
$lang['Namesilo.tab_settings.field_registrar_lock_yes'] = 'Set the registrar lock. Recommended to prevent unauthorized transfer.';
$lang['Namesilo.tab_settings.field_registrar_lock_no'] = 'Release the registrar lock so the domain can be transferred.';
$lang['Namesilo.tab_settings.field_request_epp'] = 'Request EPP Code/Transfer Key';
$lang['Namesilo.tab_settings.field_submit'] = 'Update Settings';
$lang['Namesilo.tab_settings.section_verification'] = 'Registrant Email Verification';
$lang['Namesilo.tab_settings.verification_text'] = 'Registrant email verification status for ';
$lang['Namesilo.tab_settings.verified'] = 'Verified';
$lang['Namesilo.tab_settings.not_verified'] = 'NOT VERIFIED';
$lang['Namesilo.tab_settings.not_verified_warning'] = '<strong>WARNING:</strong> Your domain is at risk of being deactivated if you do not verify the registrant email address.';
$lang['Namesilo.tab_settings.field_resend_verification_email'] = 'Resend Verification Email';

$lang['Namesilo.tab_settings.field_update_registrar_lock'] = 'Update Registrar Lock';
$lang['Namesilo.tab_settings.field_epp_code'] = 'EPP Code';
$lang['Namesilo.tab_settings.field_resend_epp_code'] = 'Re-send EPP Code';

$lang['Namesilo.tab_adminactions.title'] = 'Admin Actions';
$lang['Namesilo.tab_adminactions.field_submit'] = 'Send Selected Notice';
$lang['Namesilo.tab_adminactions.sync_date'] = 'Synchronize Renew Date';
$lang['Namesilo.tab_adminactions.epp_code'] = 'EPP Code';
$lang['Namesilo.tab_adminactions.update.epp_code'] = 'Update EPP Code';

$lang['Namesilo.tab_adminactions.resendAdminEmail'] = 'Resend Admin Email';

$lang['Namesilo.manage.manual_renewal'] = 'Manually Renew (select years)';

// Errors
$lang['Namesilo.!error.user.valid'] = 'Please enter a user';
$lang['Namesilo.!error.key.valid'] = 'Please enter a key';
$lang['Namesilo.!error.key.valid_connection'] = 'The user and key combination appear to be invalid, or your NameSilo account may not be configured to allow API access.';
$lang['Namesilo.!error.portfolio.valid_portfolio'] = 'The portfolio entered does not appear valid.  Are you sure it has been created in your NameSilo account?';
$lang['Namesilo.!error.payment_id.valid_format'] = 'Payment ID must be either blank or numeric only.';
$lang['Namesilo.!error.epp.empty'] = 'Domain transfers require an EPP code to be entered.';
$lang['Namesilo.!error.premium_domain'] = '%1$s is a premium domain. Please contact us for more information.'; // %1$s is the premium domain;
$lang['Namesilo.!error.invalid_term'] = 'Invalid number of years, or no years provided.';

// Notices
$lang['Namesilo.notice.StatusPending'] = 'This order is pending. The feature you are trying to access will become available once the order has been activated successfully.';
$lang['Namesilo.notice.StatusSuspended'] = 'This domain name has been suspended; domain management features are therefore currently unavailable. Please contact your service provider for more details or to reinstate service.';
$lang['Namesilo.notice.TransferPending'] = 'This domain is currently awaiting transfer completion.  Until the transfer is complete domain management features are unavailable.';


// Domain Transfer Fields
$lang['Namesilo.transfer.domain'] = 'Domain Name';
$lang['Namesilo.transfer.EPPCode'] = 'EPP Code';

// Domain Fields
$lang['Namesilo.domain.domain'] = 'Domain Name';
$lang['Namesilo.domain.Years'] = 'Years';
$lang['Namesilo.domain.WhoisPrivacy'] = 'Whois Privacy';
$lang['Namesilo.domain.DomainAction'] = 'Domain Action';

// Nameserver Fields
$lang['Namesilo.nameserver.ns1'] = 'Name Server 1';
$lang['Namesilo.nameserver.ns2'] = 'Name Server 2';
$lang['Namesilo.nameserver.ns3'] = 'Name Server 3';
$lang['Namesilo.nameserver.ns4'] = 'Name Server 4';
$lang['Namesilo.nameserver.ns5'] = 'Name Server 5';


// Whois Fields
$lang['Namesilo.whois.Organization'] = 'Organization';
$lang['Namesilo.whois.Nickname'] = 'Nickname';
$lang['Namesilo.whois.FirstName'] = 'First Name';
$lang['Namesilo.whois.LastName'] = 'Last Name';
$lang['Namesilo.whois.Address1'] = 'Address 1';
$lang['Namesilo.whois.Address2'] = 'Address 2';
$lang['Namesilo.whois.City'] = 'City';
$lang['Namesilo.whois.StateProvince'] = 'State/Province';
$lang['Namesilo.whois.PostalCode'] = 'Postal Code';
$lang['Namesilo.whois.Country'] = 'Country';
$lang['Namesilo.whois.Phone'] = 'Phone';
$lang['Namesilo.whois.EmailAddress'] = 'Email';

// .US domain fields
$lang['Namesilo.domain.RegistrantNexus'] = 'Registrant Type';
$lang['Namesilo.domain.RegistrantNexus.error'] = 'Please select a registrant type';
$lang['Namesilo.domain.RegistrantNexus.c11'] = 'US citizen';
$lang['Namesilo.domain.RegistrantNexus.c12'] = 'Permanent resident of the US';
$lang['Namesilo.domain.RegistrantNexus.c21'] = 'US entity or organization';
$lang['Namesilo.domain.RegistrantNexus.c31'] = 'Foreign organization';
$lang['Namesilo.domain.RegistrantNexus.c32'] = 'Foreign organization with an office in the US';
$lang['Namesilo.domain.RegistrantPurpose'] = 'Purpose';
$lang['Namesilo.domain.RegistrantPurpose.error'] = 'Please select a registrant purpose';
$lang['Namesilo.domain.RegistrantPurpose.p1'] = 'Business';
$lang['Namesilo.domain.RegistrantPurpose.p2'] = 'Non-profit';
$lang['Namesilo.domain.RegistrantPurpose.p3'] = 'Personal';
$lang['Namesilo.domain.RegistrantPurpose.p4'] = 'Educational';
$lang['Namesilo.domain.RegistrantPurpose.p5'] = 'Governmental';

// .CA domain fields
$lang['Namesilo.domain.CIRALegalType'] = 'Legal Type';
$lang['Namesilo.domain.RegistrantPurpose.cco'] = 'Corporation';
$lang['Namesilo.domain.RegistrantPurpose.cct'] = 'Canadian citizen';
$lang['Namesilo.domain.RegistrantPurpose.res'] = 'Canadian resident';
$lang['Namesilo.domain.RegistrantPurpose.gov'] = 'Government entity';
$lang['Namesilo.domain.RegistrantPurpose.edu'] = 'Educational';
$lang['Namesilo.domain.RegistrantPurpose.ass'] = 'Unincorporated Association';
$lang['Namesilo.domain.RegistrantPurpose.hop'] = 'Hospital';
$lang['Namesilo.domain.RegistrantPurpose.prt'] = 'Partnership';
$lang['Namesilo.domain.RegistrantPurpose.tdm'] = 'Trade-mark';
$lang['Namesilo.domain.RegistrantPurpose.trd'] = 'Trade Union';
$lang['Namesilo.domain.RegistrantPurpose.plt'] = 'Political Party';
$lang['Namesilo.domain.RegistrantPurpose.lam'] = 'Libraries, Archives and Museums';
$lang['Namesilo.domain.RegistrantPurpose.trs'] = 'Trust';
$lang['Namesilo.domain.RegistrantPurpose.abo'] = 'Aboriginal Peoples';
$lang['Namesilo.domain.RegistrantPurpose.inb'] = 'Indian Band';
$lang['Namesilo.domain.RegistrantPurpose.lgr'] = 'Legal Representative';
$lang['Namesilo.domain.RegistrantPurpose.omk'] = 'Official Mark';
$lang['Namesilo.domain.RegistrantPurpose.maj'] = 'Her Majesty the Queen';
$lang['Namesilo.domain.RegistrantPurpose.other'] = 'Other';
$lang['Namesilo.domain.CIRAWhoisDisplay'] = 'Whois Publishing';
$lang['Namesilo.domain.CIRAWhoisDisplay.full'] = 'Make Public';
$lang['Namesilo.domain.CIRAWhoisDisplay.private'] = 'Keep Private';
$lang['Namesilo.domain.CIRALanguage'] = 'Language';
$lang['Namesilo.domain.CIRALanguage.en'] = 'English';
$lang['Namesilo.domain.CIRALanguage.fr'] = 'French';

// Success messages
$lang['Namesilo.!success.packages_saved'] = 'The packages have been successfully saved.';
$lang['Namesilo.!success.epp_code_sent'] = "The EPP Code/Transfer Key has been sent to the administrative contact for this domain name via email.";
$lang['Namesilo.!success.contact_deleted'] = "The contact was successfully deleted.";

// Errors
$lang['Namesilo.!error.FRLegalType.format'] = 'Please select a valid Legal Type';
$lang['Namesilo.!error.FRRegistrantBirthDate.format'] = 'Please set your birth date in the format: YYYY-MM-DD';
$lang['Namesilo.!error.FRRegistrantBirthplace.format'] = 'Please set your birth place.';
$lang['Namesilo.!error.FRRegistrantLegalId.format'] = 'Please set your SIREN/SIRET Number';
$lang['Namesilo.!error.FRRegistrantTradeNumber.format'] = 'Please set your Trademark Number.';
$lang['Namesilo.!error.FRRegistrantDunsNumber.format'] = 'Please set your DUNS Number.';
$lang['Namesilo.!error.FRRegistrantLocalId.format'] = 'Please set your EEA Local ID.';
$lang['Namesilo.!error.FRRegistrantJoDateDec.format'] = 'Please set the Journal Declaration Date in the format: YYYY-MM-DD';
$lang['Namesilo.!error.FRRegistrantJoDatePub.format'] = 'Please set the Journal Publication Date in the format: YYYY-MM-DD';
$lang['Namesilo.!error.FRRegistrantJoNumber.format'] = 'Please set the Journal Number.';
$lang['Namesilo.!error.FRRegistrantJoPage.format'] = 'Please set the Journal Announcement Page Number.';
$lang['Namesilo.!error.US.RegistrantNexus.empty'] = 'Please select a registrant type.';
$lang['Namesilo.!error.US.RegistrantPurpose.empty'] = 'Please select a registrant purpose.';
$lang['Namesilo.!error.US.RegistrantNexus.invalid'] = 'Invalid registrant type submitted.';
$lang['Namesilo.!error.US.RegistrantPurpose.invalid'] = 'Invalid registrat purpose submitted.';
$lang['Namesilo.!error.CA.CIRALegalType.empty'] = 'Please select a legal type.';
$lang['Namesilo.!error.CA.CIRAWhoisDisplay.empty'] = 'Please select a whois display option.';
$lang['Namesilo.!error.CA.CIRALanaguage.empty'] = 'Please select a language.';
$lang['Namesilo.!error.CA.CIRALegalType.invalid'] = 'Invalid legal type submitted.';
$lang['Namesilo.!error.CA.CIRAWhoisDisplay.invalid'] = 'Invalid whois display option submitted.';
$lang['Namesilo.!error.CA.CIRALanaguage.invalid'] = 'Invalid language submitted.';
$lang['Namesilo.!error.CA.CIRALegalType.other'] = 'Only individual legal types may be processed automatically.  Please contact us for more information.';

// Tooltips
$lang['Namesilo.!tooltip.upgrades_use_renewal'] = 'When enabled, upgrading to this package will use renewal prices if they are set. The regular price will be used if this setting is disabled.';

require_once __DIR__ . '/notices.php';
