# SendGrid SDK for PHP: operations

391 operations. Each is a static method of a facade class (`SendGridSDK\...`); configure the SDK once with `TwilioSendGridV3APISDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Retrieve all recent access attempts | GET | `/v3/access_settings/activity` | `V3\AccessSettings\Activity::get()` |
| Remove one or more IPs from the allow list | DELETE | `/v3/access_settings/whitelist` | `V3\AccessSettings\Whitelist::delete()` |
| Retrieve a list of currently allowed IPs | GET | `/v3/access_settings/whitelist` | `V3\AccessSettings\Whitelist::get()` |
| Add one or more IPs to the allow list | POST | `/v3/access_settings/whitelist` | `V3\AccessSettings\Whitelist::post()` |
| Remove a specific IP from the allowed list | DELETE | `/v3/access_settings/whitelist/{rule_id}` | `V3\AccessSettings\Whitelist::deleteByRuleId()` |
| Retrieve a specific allowed IP | GET | `/v3/access_settings/whitelist/{rule_id}` | `V3\AccessSettings\Whitelist::getByRuleId()` |
| Retrieve all alerts | GET | `/v3/alerts` | `V3\Alerts::get()` |
| Create a new Alert | POST | `/v3/alerts` | `V3\Alerts::post()` |
| Delete an alert | DELETE | `/v3/alerts/{alert_id}` | `V3\Alerts::deleteByAlertId()` |
| Retrieve a specific alert | GET | `/v3/alerts/{alert_id}` | `V3\Alerts::getByAlertId()` |
| Update an alert | PATCH | `/v3/alerts/{alert_id}` | `V3\Alerts::patchByAlertId()` |
| Retrieve all API Keys belonging to the authenticated user | GET | `/v3/api_keys` | `V3\ApiKeys::get()` |
| Create API keys | POST | `/v3/api_keys` | `V3\ApiKeys::post()` |
| Delete API keys | DELETE | `/v3/api_keys/{api_key_id}` | `V3\ApiKeys::deleteByApiKeyId()` |
| Retrieve an existing API Key | GET | `/v3/api_keys/{api_key_id}` | `V3\ApiKeys::getByApiKeyId()` |
| Update API key name | PATCH | `/v3/api_keys/{api_key_id}` | `V3\ApiKeys::patchByApiKeyId()` |
| Update API key name and scopes | PUT | `/v3/api_keys/{api_key_id}` | `V3\ApiKeys::putByApiKeyId()` |
| Retrieve all suppression groups associated with the user. | GET | `/v3/asm/groups` | `V3\Asm\Groups::get()` |
| Create a new suppression group | POST | `/v3/asm/groups` | `V3\Asm\Groups::post()` |
| Delete a Suppression Group | DELETE | `/v3/asm/groups/{group_id}` | `V3\Asm\Groups::deleteByGroupId()` |
| Get information on a single suppression group. | GET | `/v3/asm/groups/{group_id}` | `V3\Asm\Groups::getByGroupId()` |
| Update a suppression group. | PATCH | `/v3/asm/groups/{group_id}` | `V3\Asm\Groups::patchByGroupId()` |
| Retrieve all suppressions for a suppression group | GET | `/v3/asm/groups/{group_id}/suppressions` | `V3\Asm\Groups\ByGroupId\Suppressions::get()` |
| Add suppressions to a suppression group | POST | `/v3/asm/groups/{group_id}/suppressions` | `V3\Asm\Groups\ByGroupId\Suppressions::post()` |
| Search for suppressions within a group | POST | `/v3/asm/groups/{group_id}/suppressions/search` | `V3\Asm\Groups\ByGroupId\Suppressions\Search::post()` |
| Delete a suppression from a suppression group | DELETE | `/v3/asm/groups/{group_id}/suppressions/{email}` | `V3\Asm\Groups\ByGroupId\Suppressions::deleteByEmail()` |
| Retrieve all suppressions | GET | `/v3/asm/suppressions` | `V3\Asm\Suppressions::get()` |
| Add recipient addresses to the global suppression group. | POST | `/v3/asm/suppressions/global` | `V3\Asm\Suppressions\GlobalResource::post()` |
| Delete a Global Suppression | DELETE | `/v3/asm/suppressions/global/{email}` | `V3\Asm\Suppressions\GlobalResource::deleteByEmail()` |
| Retrieve a Global Suppression | GET | `/v3/asm/suppressions/global/{email}` | `V3\Asm\Suppressions\GlobalResource::getByEmail()` |
| Retrieve all suppression groups for an email address | GET | `/v3/asm/suppressions/{email}` | `V3\Asm\Suppressions::getByEmail()` |
| Retrieve email statistics by browser. | GET | `/v3/browsers/stats` | `V3\Browsers\Stats::get()` |
| Retrieve all Campaigns | GET | `/v3/campaigns` | `V3\Campaigns::get()` |
| Create a Campaign | POST | `/v3/campaigns` | `V3\Campaigns::post()` |
| Delete a Campaign | DELETE | `/v3/campaigns/{campaign_id}` | `V3\Campaigns::deleteByCampaignId()` |
| Retrieve a single campaign | GET | `/v3/campaigns/{campaign_id}` | `V3\Campaigns::getByCampaignId()` |
| Update a Campaign | PATCH | `/v3/campaigns/{campaign_id}` | `V3\Campaigns::patchByCampaignId()` |
| Unschedule a Scheduled Campaign | DELETE | `/v3/campaigns/{campaign_id}/schedules` | `V3\Campaigns\ByCampaignId\Schedules::delete()` |
| View Scheduled Time of a Campaign | GET | `/v3/campaigns/{campaign_id}/schedules` | `V3\Campaigns\ByCampaignId\Schedules::get()` |
| Update a Scheduled Campaign | PATCH | `/v3/campaigns/{campaign_id}/schedules` | `V3\Campaigns\ByCampaignId\Schedules::patch()` |
| Schedule a Campaign | POST | `/v3/campaigns/{campaign_id}/schedules` | `V3\Campaigns\ByCampaignId\Schedules::post()` |
| Send a Campaign | POST | `/v3/campaigns/{campaign_id}/schedules/now` | `V3\Campaigns\ByCampaignId\Schedules\Now::post()` |
| Send a Test Campaign | POST | `/v3/campaigns/{campaign_id}/schedules/test` | `V3\Campaigns\ByCampaignId\Schedules\Test::post()` |
| Retrieve all categories | GET | `/v3/categories` | `V3\Categories::get()` |
| Retrieve Email Statistics for Categories | GET | `/v3/categories/stats` | `V3\Categories\Stats::get()` |
| Retrieve sums of email stats for each category. | GET | `/v3/categories/stats/sums` | `V3\Categories\Stats\Sums::get()` |
| Retrieve email statistics by client type. | GET | `/v3/clients/stats` | `V3\Clients\Stats::get()` |
| Retrieve stats by a specific client type. | GET | `/v3/clients/{client_type}/stats` | `V3\Clients\ByClientType\Stats::get()` |
| Retrieve all custom fields | GET | `/v3/contactdb/custom_fields` | `V3\Contactdb\CustomFields::get()` |
| Create a Custom Field | POST | `/v3/contactdb/custom_fields` | `V3\Contactdb\CustomFields::post()` |
| Delete a Custom Field | DELETE | `/v3/contactdb/custom_fields/{custom_field_id}` | `V3\Contactdb\CustomFields::deleteByCustomFieldId()` |
| Retrieve a Custom Field | GET | `/v3/contactdb/custom_fields/{custom_field_id}` | `V3\Contactdb\CustomFields::getByCustomFieldId()` |
| Get All Existing Exports | GET | `/v3/contactdb/exports` | `V3\Contactdb\Exports::get()` |
| Export Recipients | POST | `/v3/contactdb/exports` | `V3\Contactdb\Exports::post()` |
| Export Recipients Status | GET | `/v3/contactdb/exports/{id}` | `V3\Contactdb\Exports::getById()` |
| Delete Multiple lists | DELETE | `/v3/contactdb/lists` | `V3\Contactdb\Lists::delete()` |
| Retrieve all lists | GET | `/v3/contactdb/lists` | `V3\Contactdb\Lists::get()` |
| Create a List | POST | `/v3/contactdb/lists` | `V3\Contactdb\Lists::post()` |
| Delete a List | DELETE | `/v3/contactdb/lists/{list_id}` | `V3\Contactdb\Lists::deleteByListId()` |
| Retrieve a single list | GET | `/v3/contactdb/lists/{list_id}` | `V3\Contactdb\Lists::getByListId()` |
| Update a List | PATCH | `/v3/contactdb/lists/{list_id}` | `V3\Contactdb\Lists::patchByListId()` |
| Retrieve all recipients on a List | GET | `/v3/contactdb/lists/{list_id}/recipients` | `V3\Contactdb\Lists\ByListId\Recipients::get()` |
| Add Multiple Recipients to a List | POST | `/v3/contactdb/lists/{list_id}/recipients` | `V3\Contactdb\Lists\ByListId\Recipients::post()` |
| Delete a Single Recipient from a Single List | DELETE | `/v3/contactdb/lists/{list_id}/recipients/{recipient_id}` | `V3\Contactdb\Lists\ByListId\Recipients::deleteByRecipientId()` |
| Add a Single Recipient to a List | POST | `/v3/contactdb/lists/{list_id}/recipients/{recipient_id}` | `V3\Contactdb\Lists\ByListId\Recipients::postByRecipientId()` |
| Delete Recipients | DELETE | `/v3/contactdb/recipients` | `V3\Contactdb\Recipients::delete()` |
| Retrieve recipients | GET | `/v3/contactdb/recipients` | `V3\Contactdb\Recipients::get()` |
| Update Recipient | PATCH | `/v3/contactdb/recipients` | `V3\Contactdb\Recipients::patch()` |
| Add recipients | POST | `/v3/contactdb/recipients` | `V3\Contactdb\Recipients::post()` |
| Retrieve the count of billable recipients | GET | `/v3/contactdb/recipients/billable_count` | `V3\Contactdb\Recipients\BillableCount::get()` |
| Retrieve a Count of Recipients | GET | `/v3/contactdb/recipients/count` | `V3\Contactdb\Recipients\Count::get()` |
| Search recipients | GET | `/v3/contactdb/recipients/search` | `V3\Contactdb\Recipients\Search::get()` |
| Search recipients | POST | `/v3/contactdb/recipients/search` | `V3\Contactdb\Recipients\Search::post()` |
| Delete a Recipient | DELETE | `/v3/contactdb/recipients/{recipient_id}` | `V3\Contactdb\Recipients::deleteByRecipientId()` |
| Retrieve a single recipient | GET | `/v3/contactdb/recipients/{recipient_id}` | `V3\Contactdb\Recipients::getByRecipientId()` |
| Retrieve the lists that a recipient is on | GET | `/v3/contactdb/recipients/{recipient_id}/lists` | `V3\Contactdb\Recipients\ByRecipientId\Lists::get()` |
| Retrieve reserved fields | GET | `/v3/contactdb/reserved_fields` | `V3\Contactdb\ReservedFields::get()` |
| Retrieve all segments | GET | `/v3/contactdb/segments` | `V3\Contactdb\Segments::get()` |
| Create a Segment | POST | `/v3/contactdb/segments` | `V3\Contactdb\Segments::post()` |
| Delete a segment | DELETE | `/v3/contactdb/segments/{segment_id}` | `V3\Contactdb\Segments::deleteBySegmentId()` |
| Retrieve a segment | GET | `/v3/contactdb/segments/{segment_id}` | `V3\Contactdb\Segments::getBySegmentId()` |
| Update a segment | PATCH | `/v3/contactdb/segments/{segment_id}` | `V3\Contactdb\Segments::patchBySegmentId()` |
| Retrieve recipients on a segment | GET | `/v3/contactdb/segments/{segment_id}/recipients` | `V3\Contactdb\Segments\BySegmentId\Recipients::get()` |
| Get Recipient Upload Status | GET | `/v3/contactdb/status` | `V3\Contactdb\Status::get()` |
| List Designs | GET | `/v3/designs` | `V3\Designs::get()` |
| Create Design | POST | `/v3/designs` | `V3\Designs::post()` |
| List SendGrid Pre-built Designs | GET | `/v3/designs/pre-builts` | `V3\Designs\PreBuilts::get()` |
| Get SendGrid Pre-built Design | GET | `/v3/designs/pre-builts/{id}` | `V3\Designs\PreBuilts::getById()` |
| Duplicate SendGrid Pre-built Design | POST | `/v3/designs/pre-builts/{id}` | `V3\Designs\PreBuilts::postById()` |
| Delete Design | DELETE | `/v3/designs/{id}` | `V3\Designs::deleteById()` |
| Get Design | GET | `/v3/designs/{id}` | `V3\Designs::getById()` |
| Update Design | PATCH | `/v3/designs/{id}` | `V3\Designs::patchById()` |
| Duplicate Design | POST | `/v3/designs/{id}` | `V3\Designs::postById()` |
| Retrieve email statistics by device type. | GET | `/v3/devices/stats` | `V3\Devices\Stats::get()` |
| Get Engagement Quality Scores | GET | `/v3/engagementquality/scores` | `V3\Engagementquality\Scores::get()` |
| Get Subusers' Engagement Quality Scores | GET | `/v3/engagementquality/subusers/scores` | `V3\Engagementquality\Subusers\Scores::get()` |
| Retrieve email statistics by country and state/province. | GET | `/v3/geo/stats` | `V3\Geo\Stats::get()` |
| Retrieve all IP addresses | GET | `/v3/ips` | `V3\Ips::get()` |
| Add IPs | POST | `/v3/ips` | `V3\Ips::post()` |
| Retrieve all assigned IPs | GET | `/v3/ips/assigned` | `V3\Ips\Assigned::get()` |
| Retrieve all IP pools | GET | `/v3/ips/pools` | `V3\Ips\Pools::get()` |
| Create an IP pool | POST | `/v3/ips/pools` | `V3\Ips\Pools::post()` |
| Delete an IP pool | DELETE | `/v3/ips/pools/{pool_name}` | `V3\Ips\Pools::deleteByPoolName()` |
| Retrieve all the IPs in a specified pool | GET | `/v3/ips/pools/{pool_name}` | `V3\Ips\Pools::getByPoolName()` |
| Rename an IP pool | PUT | `/v3/ips/pools/{pool_name}` | `V3\Ips\Pools::putByPoolName()` |
| Add an IP address to a pool | POST | `/v3/ips/pools/{pool_name}/ips` | `V3\Ips\Pools\ByPoolName\Ips::post()` |
| Remove an IP address from a pool | DELETE | `/v3/ips/pools/{pool_name}/ips/{ip}` | `V3\Ips\Pools\ByPoolName\Ips::deleteByIp()` |
| Get remaining IPs count | GET | `/v3/ips/remaining` | `V3\Ips\Remaining::get()` |
| Retrieve all IPs currently in warmup | GET | `/v3/ips/warmup` | `V3\Ips\Warmup::get()` |
| Start warming up an IP address | POST | `/v3/ips/warmup` | `V3\Ips\Warmup::post()` |
| Stop warming up an IP address | DELETE | `/v3/ips/warmup/{ip_address}` | `V3\Ips\Warmup::deleteByIpAddress()` |
| Retrieve the warmup status for a specific IP address | GET | `/v3/ips/warmup/{ip_address}` | `V3\Ips\Warmup::getByIpAddress()` |
| Retrieve all IP pools an IP address belongs to | GET | `/v3/ips/{ip_address}` | `V3\Ips::getByIpAddress()` |
| Search all messages using the provided query filters. | POST | `/v3/logs` | `V3\Logs::post()` |
| Get all details for the specified message ID. | GET | `/v3/logs/{sg_message_id}` | `V3\Logs::getBySgMessageId()` |
| Create a batch ID. | POST | `/v3/mail/batch` | `V3\Mail\Batch::post()` |
| Validate a batch ID. | GET | `/v3/mail/batch/{batch_id}` | `V3\Mail\Batch::getByBatchId()` |
| Send Email with Twilio SendGrid. | POST | `/v3/mail/send` | `V3\Mail\Send::post()` |
| Retrieve all mail settings | GET | `/v3/mail_settings` | `V3\MailSettings::get()` |
| Retrieve address whitelist mail settings | GET | `/v3/mail_settings/address_whitelist` | `V3\MailSettings\AddressWhitelist::get()` |
| Update address whitelist mail settings | PATCH | `/v3/mail_settings/address_whitelist` | `V3\MailSettings\AddressWhitelist::patch()` |
| Retrieve Bounce Purge Mail Settings | GET | `/v3/mail_settings/bounce_purge` | `V3\MailSettings\BouncePurge::get()` |
| Update Bounce Purge Mail Settings | PATCH | `/v3/mail_settings/bounce_purge` | `V3\MailSettings\BouncePurge::patch()` |
| Retrieve footer mail settings | GET | `/v3/mail_settings/footer` | `V3\MailSettings\Footer::get()` |
| Update footer mail settings | PATCH | `/v3/mail_settings/footer` | `V3\MailSettings\Footer::patch()` |
| Retrieve forward bounce mail settings | GET | `/v3/mail_settings/forward_bounce` | `V3\MailSettings\ForwardBounce::get()` |
| Update forward bounce mail settings | PATCH | `/v3/mail_settings/forward_bounce` | `V3\MailSettings\ForwardBounce::patch()` |
| Retrieve forward spam mail settings | GET | `/v3/mail_settings/forward_spam` | `V3\MailSettings\ForwardSpam::get()` |
| Update forward spam mail settings | PATCH | `/v3/mail_settings/forward_spam` | `V3\MailSettings\ForwardSpam::patch()` |
| Retrieve legacy template mail settings | GET | `/v3/mail_settings/template` | `V3\MailSettings\Template::get()` |
| Update template mail settings | PATCH | `/v3/mail_settings/template` | `V3\MailSettings\Template::patch()` |
| Retrieve email statistics by mailbox provider. | GET | `/v3/mailbox_providers/stats` | `V3\MailboxProviders\Stats::get()` |
| Delete Contacts | DELETE | `/v3/marketing/contacts` | `V3\Marketing\Contacts::delete()` |
| Get Sample Contacts | GET | `/v3/marketing/contacts` | `V3\Marketing\Contacts::get()` |
| Add or Update a Contact | PUT | `/v3/marketing/contacts` | `V3\Marketing\Contacts::put()` |
| Get Batched Contacts by IDs | POST | `/v3/marketing/contacts/batch` | `V3\Marketing\Contacts\Batch::post()` |
| Get Total Contact Count | GET | `/v3/marketing/contacts/count` | `V3\Marketing\Contacts\Count::get()` |
| Get All Existing Exports | GET | `/v3/marketing/contacts/exports` | `V3\Marketing\Contacts\Exports::get()` |
| Export Contacts | POST | `/v3/marketing/contacts/exports` | `V3\Marketing\Contacts\Exports::post()` |
| Export Contacts Status | GET | `/v3/marketing/contacts/exports/{id}` | `V3\Marketing\Contacts\Exports::getById()` |
| Import Contacts | PUT | `/v3/marketing/contacts/imports` | `V3\Marketing\Contacts\Imports::put()` |
| Import Contacts Status | GET | `/v3/marketing/contacts/imports/{id}` | `V3\Marketing\Contacts\Imports::getById()` |
| Search Contacts | POST | `/v3/marketing/contacts/search` | `V3\Marketing\Contacts\Search::post()` |
| Get Contacts by Emails | POST | `/v3/marketing/contacts/search/emails` | `V3\Marketing\Contacts\Search\Emails::post()` |
| Get Contacts by Identifiers | POST | `/v3/marketing/contacts/search/identifiers/{identifier_type}` | `V3\Marketing\Contacts\Search\Identifiers::postByIdentifierType()` |
| Delete a Contact Identifier | DELETE | `/v3/marketing/contacts/{contact_id}/identifiers` | `V3\Marketing\Contacts\ByContactId\Identifiers::delete()` |
| Get a Contact by ID | GET | `/v3/marketing/contacts/{id}` | `V3\Marketing\Contacts::getById()` |
| Get All Field Definitions | GET | `/v3/marketing/field_definitions` | `V3\Marketing\FieldDefinitions::get()` |
| Create Custom Field Definition | POST | `/v3/marketing/field_definitions` | `V3\Marketing\FieldDefinitions::post()` |
| Delete Custom Field Definition | DELETE | `/v3/marketing/field_definitions/{custom_field_id}` | `V3\Marketing\FieldDefinitions::deleteByCustomFieldId()` |
| Update Custom Field Definition | PATCH | `/v3/marketing/field_definitions/{custom_field_id}` | `V3\Marketing\FieldDefinitions::patchByCustomFieldId()` |
| DeleteBulkIntegration | DELETE | `/v3/marketing/integrations` | `V3\Marketing\Integrations::delete()` |
| ListIntegration | GET | `/v3/marketing/integrations` | `V3\Marketing\Integrations::get()` |
| CreateIntegration | POST | `/v3/marketing/integrations` | `V3\Marketing\Integrations::post()` |
| GetIntegration | GET | `/v3/marketing/integrations/{id}` | `V3\Marketing\Integrations::getById()` |
| UpdateIntegration | PATCH | `/v3/marketing/integrations/{id}` | `V3\Marketing\Integrations::patchById()` |
| Get All Lists | GET | `/v3/marketing/lists` | `V3\Marketing\Lists::get()` |
| Create List | POST | `/v3/marketing/lists` | `V3\Marketing\Lists::post()` |
| Delete a list | DELETE | `/v3/marketing/lists/{id}` | `V3\Marketing\Lists::deleteById()` |
| Get a List by ID | GET | `/v3/marketing/lists/{id}` | `V3\Marketing\Lists::getById()` |
| Update List | PATCH | `/v3/marketing/lists/{id}` | `V3\Marketing\Lists::patchById()` |
| Remove Contacts from a List | DELETE | `/v3/marketing/lists/{id}/contacts` | `V3\Marketing\Lists\ById\Contacts::delete()` |
| Get List Contact Count | GET | `/v3/marketing/lists/{id}/contacts/count` | `V3\Marketing\Lists\ById\Contacts\Count::get()` |
| Get List of Segments | GET | `/v3/marketing/segments` | `V3\Marketing\Segments::get()` |
| Get List of Segments | GET | `/v3/marketing/segments/2.0` | `V3\Marketing\Segments\Resource20::get()` |
| Create Segment | POST | `/v3/marketing/segments/2.0` | `V3\Marketing\Segments\Resource20::post()` |
| Manually refresh a segment | POST | `/v3/marketing/segments/2.0/refresh/{segment_id}` | `V3\Marketing\Segments\Resource20\Refresh::postBySegmentId()` |
| Delete segment | DELETE | `/v3/marketing/segments/2.0/{segment_id}` | `V3\Marketing\Segments\Resource20::deleteBySegmentId()` |
| Get Segment by ID | GET | `/v3/marketing/segments/2.0/{segment_id}` | `V3\Marketing\Segments\Resource20::getBySegmentId()` |
| Update Segment | PATCH | `/v3/marketing/segments/2.0/{segment_id}` | `V3\Marketing\Segments\Resource20::patchBySegmentId()` |
| Delete Segment | DELETE | `/v3/marketing/segments/{segment_id}` | `V3\Marketing\Segments::deleteBySegmentId()` |
| Get Segment by ID | GET | `/v3/marketing/segments/{segment_id}` | `V3\Marketing\Segments::getBySegmentId()` |
| Get a list of all Senders | GET | `/v3/marketing/senders` | `V3\Marketing\Senders::get()` |
| Create a Sender | POST | `/v3/marketing/senders` | `V3\Marketing\Senders::post()` |
| Delete a Sender | DELETE | `/v3/marketing/senders/{id}` | `V3\Marketing\Senders::deleteById()` |
| Get a specific Sender | GET | `/v3/marketing/senders/{id}` | `V3\Marketing\Senders::getById()` |
| Update a Sender | PATCH | `/v3/marketing/senders/{id}` | `V3\Marketing\Senders::patchById()` |
| Resend a Sender verification | POST | `/v3/marketing/senders/{id}/resend_verification` | `V3\Marketing\Senders\ById\ResendVerification::post()` |
| Bulk Delete Single Sends | DELETE | `/v3/marketing/singlesends` | `V3\Marketing\Singlesends::delete()` |
| Get All Single Sends | GET | `/v3/marketing/singlesends` | `V3\Marketing\Singlesends::get()` |
| Create Single Send | POST | `/v3/marketing/singlesends` | `V3\Marketing\Singlesends::post()` |
| Get All Categories | GET | `/v3/marketing/singlesends/categories` | `V3\Marketing\Singlesends\Categories::get()` |
| Get Single Sends Search | POST | `/v3/marketing/singlesends/search` | `V3\Marketing\Singlesends\Search::post()` |
| Delete Single Send by ID | DELETE | `/v3/marketing/singlesends/{id}` | `V3\Marketing\Singlesends::deleteById()` |
| Get Single Send by ID | GET | `/v3/marketing/singlesends/{id}` | `V3\Marketing\Singlesends::getById()` |
| Update Single Send | PATCH | `/v3/marketing/singlesends/{id}` | `V3\Marketing\Singlesends::patchById()` |
| Duplicate Single Send | POST | `/v3/marketing/singlesends/{id}` | `V3\Marketing\Singlesends::postById()` |
| Delete Single Send Schedule | DELETE | `/v3/marketing/singlesends/{id}/schedule` | `V3\Marketing\Singlesends\ById\Schedule::delete()` |
| Schedule Single Send | PUT | `/v3/marketing/singlesends/{id}/schedule` | `V3\Marketing\Singlesends\ById\Schedule::put()` |
| Get All Automation Stats | GET | `/v3/marketing/stats/automations` | `V3\Marketing\Stats\Automations::get()` |
| Export Single Send Stats | GET | `/v3/marketing/stats/automations/export` | `V3\Marketing\Stats\Automations\Export::get()` |
| Get Automation Stats by ID | GET | `/v3/marketing/stats/automations/{id}` | `V3\Marketing\Stats\Automations::getById()` |
| Get Automation Click Tracking Stats by ID | GET | `/v3/marketing/stats/automations/{id}/links` | `V3\Marketing\Stats\Automations\ById\Links::get()` |
| Get All Single Sends Stats | GET | `/v3/marketing/stats/singlesends` | `V3\Marketing\Stats\Singlesends::get()` |
| Export Single Send Stats | GET | `/v3/marketing/stats/singlesends/export` | `V3\Marketing\Stats\Singlesends\Export::get()` |
| Get Single Send Stats by ID | GET | `/v3/marketing/stats/singlesends/{id}` | `V3\Marketing\Stats\Singlesends::getById()` |
| Get Single Send Click Tracking Stats by ID | GET | `/v3/marketing/stats/singlesends/{id}/links` | `V3\Marketing\Stats\Singlesends\ById\Links::get()` |
| Send a Test Marketing Email | POST | `/v3/marketing/test/send_email` | `V3\Marketing\Test\SendEmail::post()` |
| Filter all messages | GET | `/v3/messages` | `V3\Messages::get()` |
| Request CSV | POST | `/v3/messages/download` | `V3\Messages\Download::post()` |
| Download CSV | GET | `/v3/messages/download/{download_uuid}` | `V3\Messages\Download::getByDownloadUuid()` |
| Filter messages by message ID | GET | `/v3/messages/{msg_id}` | `V3\Messages::getByMsgId()` |
| Returns a list of all partner settings. | GET | `/v3/partner_settings` | `V3\PartnerSettings::get()` |
| Get all accounts | GET | `/v3/partners/accounts` | `V3\Partners\Accounts::get()` |
| Create an account | POST | `/v3/partners/accounts` | `V3\Partners\Accounts::post()` |
| Delete an account | DELETE | `/v3/partners/accounts/{accountID}` | `V3\Partners\Accounts::deleteByAccountID()` |
| Remove Account IPs | DELETE | `/v3/partners/accounts/{accountID}/ips` | `V3\Partners\Accounts\ByAccountID\Ips::delete()` |
| List Account IPs | GET | `/v3/partners/accounts/{accountID}/ips` | `V3\Partners\Accounts\ByAccountID\Ips::get()` |
| Add Account IPs | POST | `/v3/partners/accounts/{accountID}/ips` | `V3\Partners\Accounts\ByAccountID\Ips::post()` |
| Get account offerings | GET | `/v3/partners/accounts/{accountID}/offerings` | `V3\Partners\Accounts\ByAccountID\Offerings::get()` |
| Update account offerings | PUT | `/v3/partners/accounts/{accountID}/offerings` | `V3\Partners\Accounts\ByAccountID\Offerings::put()` |
| Authenticate an account with single sign on | POST | `/v3/partners/accounts/{accountID}/sso` | `V3\Partners\Accounts\ByAccountID\Sso::post()` |
| Get an account's state | GET | `/v3/partners/accounts/{accountID}/state` | `V3\Partners\Accounts\ByAccountID\State::get()` |
| Update an account's state | PUT | `/v3/partners/accounts/{accountID}/state` | `V3\Partners\Accounts\ByAccountID\State::put()` |
| Get all available offerings | GET | `/v3/partners/offerings` | `V3\Partners\Offerings::get()` |
| Erase recipients' email data | POST | `/v3/recipients/erasejob` | `V3\Recipients\Erasejob::post()` |
| Retrieve a list of scopes for which this user has access. | GET | `/v3/scopes` | `V3\Scopes::get()` |
| Get a List of all IP Addresses on your Account | GET | `/v3/send_ips/ips` | `V3\SendIps\Ips::get()` |
| Add a Twilio SendGrid IP Address | POST | `/v3/send_ips/ips` | `V3\SendIps\Ips::post()` |
| Get Details for an IP Address | GET | `/v3/send_ips/ips/{ip}` | `V3\SendIps\Ips::getByIp()` |
| Update Details for an IP Address | PATCH | `/v3/send_ips/ips/{ip}` | `V3\SendIps\Ips::patchByIp()` |
| Get a List of Subusers Assigned to an IP | GET | `/v3/send_ips/ips/{ip}/subusers` | `V3\SendIps\Ips\ByIp\Subusers::get()` |
| Assign a Batch of Subusers to an IP | POST | `/v3/send_ips/ips/{ip}/subusers:batchAdd` | `V3\SendIps\Ips\ByIp\SubusersBatchAdd::post()` |
| Delete a Batch of Subusers from an IP | POST | `/v3/send_ips/ips/{ip}/subusers:batchDelete` | `V3\SendIps\Ips\ByIp\SubusersBatchDelete::post()` |
| GET all IP Pools that have Associated IPs | GET | `/v3/send_ips/pools` | `V3\SendIps\Pools::get()` |
| Create an IP Pool with a Name and IP Assignments | POST | `/v3/send_ips/pools` | `V3\SendIps\Pools::post()` |
| Delete IP Pool | DELETE | `/v3/send_ips/pools/{poolid}` | `V3\SendIps\Pools::deleteByPoolid()` |
| Get Details for an IP Pool | GET | `/v3/send_ips/pools/{poolid}` | `V3\SendIps\Pools::getByPoolid()` |
| Update an IP Pool Name | PUT | `/v3/send_ips/pools/{poolid}` | `V3\SendIps\Pools::putByPoolid()` |
| Get IPs Assigned to an IP Pool | GET | `/v3/send_ips/pools/{poolid}/ips` | `V3\SendIps\Pools\ByPoolid\Ips::get()` |
| Add a Batch of IPs to an IP Pool | POST | `/v3/send_ips/pools/{poolid}/ips:batchAdd` | `V3\SendIps\Pools\ByPoolid\IpsBatchAdd::post()` |
| Delete a Batch of IPs from an IP Pool | POST | `/v3/send_ips/pools/{poolid}/ips:batchDelete` | `V3\SendIps\Pools\ByPoolid\IpsBatchDelete::post()` |
| Get all Sender Identities | GET | `/v3/senders` | `V3\Senders::get()` |
| Create a Sender Identity | POST | `/v3/senders` | `V3\Senders::post()` |
| Delete a Sender Identity | DELETE | `/v3/senders/{sender_id}` | `V3\Senders::deleteBySenderId()` |
| View a Sender Identity | GET | `/v3/senders/{sender_id}` | `V3\Senders::getBySenderId()` |
| Update a Sender Identity | PATCH | `/v3/senders/{sender_id}` | `V3\Senders::patchBySenderId()` |
| Resend Sender Identity Verification | POST | `/v3/senders/{sender_id}/resend_verification` | `V3\Senders\BySenderId\ResendVerification::post()` |
| Create an SSO Certificate | POST | `/v3/sso/certificates` | `V3\Sso\Certificates::post()` |
| Delete an SSO Certificate | DELETE | `/v3/sso/certificates/{cert_id}` | `V3\Sso\Certificates::deleteByCertId()` |
| Get an SSO Certificate | GET | `/v3/sso/certificates/{cert_id}` | `V3\Sso\Certificates::getByCertId()` |
| Update SSO Certificate | PATCH | `/v3/sso/certificates/{cert_id}` | `V3\Sso\Certificates::patchByCertId()` |
| Get All SSO Integrations | GET | `/v3/sso/integrations` | `V3\Sso\Integrations::get()` |
| Create an SSO Integration | POST | `/v3/sso/integrations` | `V3\Sso\Integrations::post()` |
| Delete an SSO Integration | DELETE | `/v3/sso/integrations/{id}` | `V3\Sso\Integrations::deleteById()` |
| Get an SSO Integration | GET | `/v3/sso/integrations/{id}` | `V3\Sso\Integrations::getById()` |
| Update an SSO Integration | PATCH | `/v3/sso/integrations/{id}` | `V3\Sso\Integrations::patchById()` |
| Get All SSO Certificates by Integration | GET | `/v3/sso/integrations/{integration_id}/certificates` | `V3\Sso\Integrations\ByIntegrationId\Certificates::get()` |
| Create an SSO Teammate. | POST | `/v3/sso/teammates` | `V3\Sso\Teammates::post()` |
| Edit an SSO Teammate | PATCH | `/v3/sso/teammates/{username}` | `V3\Sso\Teammates::patchByUsername()` |
| Retrieve global email statistics | GET | `/v3/stats` | `V3\Stats::get()` |
| List all Subusers | GET | `/v3/subusers` | `V3\Subusers::get()` |
| Create Subuser | POST | `/v3/subusers` | `V3\Subusers::post()` |
| Retrieve Subuser Reputations | GET | `/v3/subusers/reputations` | `V3\Subusers\Reputations::get()` |
| Retrieve email statistics for your subusers. | GET | `/v3/subusers/stats` | `V3\Subusers\Stats::get()` |
| Retrieve monthly stats for all subusers | GET | `/v3/subusers/stats/monthly` | `V3\Subusers\Stats\Monthly::get()` |
| Retrieve the totals for each email statistic metric for all subusers. | GET | `/v3/subusers/stats/sums` | `V3\Subusers\Stats\Sums::get()` |
| Delete a subuser | DELETE | `/v3/subusers/{subuser_name}` | `V3\Subusers::deleteBySubuserName()` |
| Enable/disable a subuser | PATCH | `/v3/subusers/{subuser_name}` | `V3\Subusers::patchBySubuserName()` |
| Get the Credits for a Subuser | GET | `/v3/subusers/{subuser_name}/credits` | `V3\Subusers\BySubuserName\Credits::get()` |
| Update the Credits for a Subuser | PUT | `/v3/subusers/{subuser_name}/credits` | `V3\Subusers\BySubuserName\Credits::put()` |
| Update the remaining credits for a Subuser | PATCH | `/v3/subusers/{subuser_name}/credits/remaining` | `V3\Subusers\BySubuserName\Credits\Remaining::patch()` |
| Update IPs assigned to a subuser | PUT | `/v3/subusers/{subuser_name}/ips` | `V3\Subusers\BySubuserName\Ips::put()` |
| Retrieve the monthly email statistics for a single subuser | GET | `/v3/subusers/{subuser_name}/stats/monthly` | `V3\Subusers\BySubuserName\Stats\Monthly::get()` |
| Enable/Disable website access for a Subuser | PATCH | `/v3/subusers/{subuser_name}/website_access` | `V3\Subusers\BySubuserName\WebsiteAccess::patch()` |
| Delete blocks | DELETE | `/v3/suppression/blocks` | `V3\Suppression\Blocks::delete()` |
| Retrieve all blocks | GET | `/v3/suppression/blocks` | `V3\Suppression\Blocks::get()` |
| Delete a specific block | DELETE | `/v3/suppression/blocks/{email}` | `V3\Suppression\Blocks::deleteByEmail()` |
| Retrieve a specific block | GET | `/v3/suppression/blocks/{email}` | `V3\Suppression\Blocks::getByEmail()` |
| Delete bounces | DELETE | `/v3/suppression/bounces` | `V3\Suppression\Bounces::delete()` |
| Retrieve all bounces | GET | `/v3/suppression/bounces` | `V3\Suppression\Bounces::get()` |
| Retrieve bounce classification totals | GET | `/v3/suppression/bounces/classifications` | `V3\Suppression\Bounces\Classifications::get()` |
| Retrieve bounce classification over time by domain stats | GET | `/v3/suppression/bounces/classifications/{classification}` | `V3\Suppression\Bounces\Classifications::getByClassification()` |
| Delete a bounce | DELETE | `/v3/suppression/bounces/{email}` | `V3\Suppression\Bounces::deleteByEmail()` |
| Retrieve a Bounce | GET | `/v3/suppression/bounces/{email}` | `V3\Suppression\Bounces::getByEmail()` |
| Delete invalid emails | DELETE | `/v3/suppression/invalid_emails` | `V3\Suppression\InvalidEmails::delete()` |
| Retrieve all invalid emails | GET | `/v3/suppression/invalid_emails` | `V3\Suppression\InvalidEmails::get()` |
| Delete a specific invalid email | DELETE | `/v3/suppression/invalid_emails/{email}` | `V3\Suppression\InvalidEmails::deleteByEmail()` |
| Retrieve a specific invalid email | GET | `/v3/suppression/invalid_emails/{email}` | `V3\Suppression\InvalidEmails::getByEmail()` |
| Delete spam reports | DELETE | `/v3/suppression/spam_reports` | `V3\Suppression\SpamReports::delete()` |
| Retrieve all spam reports | GET | `/v3/suppression/spam_reports` | `V3\Suppression\SpamReports::get()` |
| Delete a specific spam report | DELETE | `/v3/suppression/spam_reports/{email}` | `V3\Suppression\SpamReports::deleteByEmail()` |
| Retrieve a specific spam report | GET | `/v3/suppression/spam_reports/{email}` | `V3\Suppression\SpamReports::getByEmail()` |
| Retrieve all global suppressions | GET | `/v3/suppression/unsubscribes` | `V3\Suppression\Unsubscribes::get()` |
| Retrieve all teammates | GET | `/v3/teammates` | `V3\Teammates::get()` |
| Invite teammate | POST | `/v3/teammates` | `V3\Teammates::post()` |
| Retrieve all pending teammates | GET | `/v3/teammates/pending` | `V3\Teammates\Pending::get()` |
| Delete pending teammate | DELETE | `/v3/teammates/pending/{token}` | `V3\Teammates\Pending::deleteByToken()` |
| Resend teammate invite | POST | `/v3/teammates/pending/{token}/resend` | `V3\Teammates\Pending\ByToken\Resend::post()` |
| Get Teammate Subuser Access | GET | `/v3/teammates/{teammate_name}/subuser_access` | `V3\Teammates\ByTeammateName\SubuserAccess::get()` |
| Delete teammate | DELETE | `/v3/teammates/{username}` | `V3\Teammates::deleteByUsername()` |
| Retrieve specific teammate | GET | `/v3/teammates/{username}` | `V3\Teammates::getByUsername()` |
| Update teammate's permissions | PATCH | `/v3/teammates/{username}` | `V3\Teammates::patchByUsername()` |
| Retrieve paged transactional templates. | GET | `/v3/templates` | `V3\Templates::get()` |
| Create a transactional template. | POST | `/v3/templates` | `V3\Templates::post()` |
| Delete a template. | DELETE | `/v3/templates/{template_id}` | `V3\Templates::deleteByTemplateId()` |
| Retrieve a single transactional template. | GET | `/v3/templates/{template_id}` | `V3\Templates::getByTemplateId()` |
| Edit a transactional template. | PATCH | `/v3/templates/{template_id}` | `V3\Templates::patchByTemplateId()` |
| Duplicate a transactional template. | POST | `/v3/templates/{template_id}` | `V3\Templates::postByTemplateId()` |
| Create a new transactional template version. | POST | `/v3/templates/{template_id}/versions` | `V3\Templates\ByTemplateId\Versions::post()` |
| Delete a transactional template version. | DELETE | `/v3/templates/{template_id}/versions/{version_id}` | `V3\Templates\ByTemplateId\Versions::deleteByVersionId()` |
| Retrieve a specific transactional template version. | GET | `/v3/templates/{template_id}/versions/{version_id}` | `V3\Templates\ByTemplateId\Versions::getByVersionId()` |
| Edit a transactional template version. | PATCH | `/v3/templates/{template_id}/versions/{version_id}` | `V3\Templates\ByTemplateId\Versions::patchByVersionId()` |
| Activate a transactional template version. | POST | `/v3/templates/{template_id}/versions/{version_id}/activate` | `V3\Templates\ByTemplateId\Versions\ByVersionId\Activate::post()` |
| Retrieve Tracking Settings | GET | `/v3/tracking_settings` | `V3\TrackingSettings::get()` |
| Retrieve Click Track Settings | GET | `/v3/tracking_settings/click` | `V3\TrackingSettings\Click::get()` |
| Update Click Tracking Settings | PATCH | `/v3/tracking_settings/click` | `V3\TrackingSettings\Click::patch()` |
| Retrieve Google Analytics Settings | GET | `/v3/tracking_settings/google_analytics` | `V3\TrackingSettings\GoogleAnalytics::get()` |
| Update Google Analytics Settings | PATCH | `/v3/tracking_settings/google_analytics` | `V3\TrackingSettings\GoogleAnalytics::patch()` |
| Get Open Tracking Settings | GET | `/v3/tracking_settings/open` | `V3\TrackingSettings\Open::get()` |
| Update Open Tracking Settings | PATCH | `/v3/tracking_settings/open` | `V3\TrackingSettings\Open::patch()` |
| Retrieve Subscription Tracking Settings | GET | `/v3/tracking_settings/subscription` | `V3\TrackingSettings\Subscription::get()` |
| Update Subscription Tracking Settings | PATCH | `/v3/tracking_settings/subscription` | `V3\TrackingSettings\Subscription::patch()` |
| Get a user's account information. | GET | `/v3/user/account` | `V3\User\Account::get()` |
| Retrieve your credit balance | GET | `/v3/user/credits` | `V3\User\Credits::get()` |
| Retrieve your account email address | GET | `/v3/user/email` | `V3\User\Email::get()` |
| Update your account email address | PUT | `/v3/user/email` | `V3\User\Email::put()` |
| Update your password | PUT | `/v3/user/password` | `V3\User\Password::put()` |
| Get a user's profile | GET | `/v3/user/profile` | `V3\User\Profile::get()` |
| Update a user's profile | PATCH | `/v3/user/profile` | `V3\User\Profile::patch()` |
| Retrieve all scheduled sends | GET | `/v3/user/scheduled_sends` | `V3\User\ScheduledSends::get()` |
| Cancel or pause a scheduled send | POST | `/v3/user/scheduled_sends` | `V3\User\ScheduledSends::post()` |
| Delete a cancellation or pause from a scheduled send | DELETE | `/v3/user/scheduled_sends/{batch_id}` | `V3\User\ScheduledSends::deleteByBatchId()` |
| Retrieve scheduled send | GET | `/v3/user/scheduled_sends/{batch_id}` | `V3\User\ScheduledSends::getByBatchId()` |
| Update a scheduled send | PATCH | `/v3/user/scheduled_sends/{batch_id}` | `V3\User\ScheduledSends::patchByBatchId()` |
| Retrieve current Enforced TLS settings. | GET | `/v3/user/settings/enforced_tls` | `V3\User\Settings\EnforcedTls::get()` |
| Update Enforced TLS settings | PATCH | `/v3/user/settings/enforced_tls` | `V3\User\Settings\EnforcedTls::patch()` |
| Retrieve your username | GET | `/v3/user/username` | `V3\User\Username::get()` |
| Update your username | PUT | `/v3/user/username` | `V3\User\Username::put()` |
| Create a new Event Webhook | POST | `/v3/user/webhooks/event/settings` | `V3\User\Webhooks\Event\Settings::post()` |
| Retrieve all of your Event Webhooks. | GET | `/v3/user/webhooks/event/settings/all` | `V3\User\Webhooks\Event\Settings\All::get()` |
| Get Signed Event Webhook's Public Key | GET | `/v3/user/webhooks/event/settings/signed/{id}` | `V3\User\Webhooks\Event\Settings\Signed::getById()` |
| Toggle signature verification for a single Event Webhook by ID | PATCH | `/v3/user/webhooks/event/settings/signed/{id}` | `V3\User\Webhooks\Event\Settings\Signed::patchById()` |
| Delete a single Event Webhook by ID. | DELETE | `/v3/user/webhooks/event/settings/{id}` | `V3\User\Webhooks\Event\Settings::deleteById()` |
| Get the settings for a single Event Webhook. | GET | `/v3/user/webhooks/event/settings/{id}` | `V3\User\Webhooks\Event\Settings::getById()` |
| Update a single Event Webhook by ID. | PATCH | `/v3/user/webhooks/event/settings/{id}` | `V3\User\Webhooks\Event\Settings::patchById()` |
| Test an Event Webhook's settings | POST | `/v3/user/webhooks/event/test` | `V3\User\Webhooks\Event\Test::post()` |
| Retrieve all parse settings | GET | `/v3/user/webhooks/parse/settings` | `V3\User\Webhooks\Parse\Settings::get()` |
| Create a parse setting | POST | `/v3/user/webhooks/parse/settings` | `V3\User\Webhooks\Parse\Settings::post()` |
| Delete a parse setting | DELETE | `/v3/user/webhooks/parse/settings/{hostname}` | `V3\User\Webhooks\Parse\Settings::deleteByHostname()` |
| Retrieve a specific parse setting | GET | `/v3/user/webhooks/parse/settings/{hostname}` | `V3\User\Webhooks\Parse\Settings::getByHostname()` |
| Update a parse setting | PATCH | `/v3/user/webhooks/parse/settings/{hostname}` | `V3\User\Webhooks\Parse\Settings::patchByHostname()` |
| Retrieves Inbound Parse Webhook statistics. | GET | `/v3/user/webhooks/parse/stats` | `V3\User\Webhooks\Parse\Stats::get()` |
| Retrieve all webhook security policies for your account | GET | `/v3/user/webhooks/security/policies` | `V3\User\Webhooks\Security\Policies::get()` |
| Create a new webhook security policy | POST | `/v3/user/webhooks/security/policies` | `V3\User\Webhooks\Security\Policies::post()` |
| Delete a specific webhook security policy | DELETE | `/v3/user/webhooks/security/policies/{id}` | `V3\User\Webhooks\Security\Policies::deleteById()` |
| Retrieve a specific webhook security policy | GET | `/v3/user/webhooks/security/policies/{id}` | `V3\User\Webhooks\Security\Policies::getById()` |
| Update an existing webhook security policy | PATCH | `/v3/user/webhooks/security/policies/{id}` | `V3\User\Webhooks\Security\Policies::patchById()` |
| Validate an email | POST | `/v3/validations/email` | `V3\Validations\Email::post()` |
| This request lists all of a user's Bulk Email Validation Jobs. | GET | `/v3/validations/email/jobs` | `V3\Validations\Email\Jobs::get()` |
| Request a presigned URL and headers for Bulk Email Address Validation list upload. | PUT | `/v3/validations/email/jobs` | `V3\Validations\Email\Jobs::put()` |
| This request returns a single Bulk Email Validation Job. | GET | `/v3/validations/email/jobs/{job_id}` | `V3\Validations\Email\Jobs::getByJobId()` |
| Get All Verified Senders | GET | `/v3/verified_senders` | `V3\VerifiedSenders::get()` |
| Create Verified Sender Request | POST | `/v3/verified_senders` | `V3\VerifiedSenders::post()` |
| Domain Warn List | GET | `/v3/verified_senders/domains` | `V3\VerifiedSenders\Domains::get()` |
| Resend Verified Sender Request | POST | `/v3/verified_senders/resend/{id}` | `V3\VerifiedSenders\Resend::postById()` |
| Completed Steps | GET | `/v3/verified_senders/steps_completed` | `V3\VerifiedSenders\StepsCompleted::get()` |
| Verify Sender Request | GET | `/v3/verified_senders/verify/{token}` | `V3\VerifiedSenders\Verify::getByToken()` |
| Delete Verified Sender | DELETE | `/v3/verified_senders/{id}` | `V3\VerifiedSenders::deleteById()` |
| Edit Verified Sender | PATCH | `/v3/verified_senders/{id}` | `V3\VerifiedSenders::patchById()` |
| Email DNS records to a co-worker | POST | `/v3/whitelabel/dns/email` | `V3\Whitelabel\Dns\Email::post()` |
| List all authenticated domains | GET | `/v3/whitelabel/domains` | `V3\Whitelabel\Domains::get()` |
| Authenticate a domain | POST | `/v3/whitelabel/domains` | `V3\Whitelabel\Domains::post()` |
| Get the default authentication | GET | `/v3/whitelabel/domains/default` | `V3\Whitelabel\Domains\DefaultResource::get()` |
| Disassociate an authenticated domain from a given user. | DELETE | `/v3/whitelabel/domains/subuser` | `V3\Whitelabel\Domains\Subuser::delete()` |
| List the authenticated domain associated with the given user. | GET | `/v3/whitelabel/domains/subuser` | `V3\Whitelabel\Domains\Subuser::get()` |
| List all the authenticated domains associated with the given user. | GET | `/v3/whitelabel/domains/subuser/all` | `V3\Whitelabel\Domains\Subuser\All::get()` |
| Delete an authenticated domain. | DELETE | `/v3/whitelabel/domains/{domain_id}` | `V3\Whitelabel\Domains::deleteByDomainId()` |
| Retrieve an authenticated domain | GET | `/v3/whitelabel/domains/{domain_id}` | `V3\Whitelabel\Domains::getByDomainId()` |
| Update an authenticated domain | PATCH | `/v3/whitelabel/domains/{domain_id}` | `V3\Whitelabel\Domains::patchByDomainId()` |
| Disassociate an authenticated domain from a given user for users with up to five associate | DELETE | `/v3/whitelabel/domains/{domain_id}/subuser` | `V3\Whitelabel\Domains\ByDomainId\Subuser::delete()` |
| Associate an authenticated domain with a given user. | POST | `/v3/whitelabel/domains/{domain_id}/subuser` | `V3\Whitelabel\Domains\ByDomainId\Subuser::post()` |
| Associate an authenticated domain with a given user, for up to five domains. | POST | `/v3/whitelabel/domains/{domain_id}/subuser:add` | `V3\Whitelabel\Domains\ByDomainId\SubuserAdd::post()` |
| Add an IP to an authenticated domain | POST | `/v3/whitelabel/domains/{id}/ips` | `V3\Whitelabel\Domains\ById\Ips::post()` |
| Remove an IP from an authenticated domain. | DELETE | `/v3/whitelabel/domains/{id}/ips/{ip}` | `V3\Whitelabel\Domains\ById\Ips::deleteByIp()` |
| Validate a domain authentication. | POST | `/v3/whitelabel/domains/{id}/validate` | `V3\Whitelabel\Domains\ById\Validate::post()` |
| Retrieve all reverse DNS records | GET | `/v3/whitelabel/ips` | `V3\Whitelabel\Ips::get()` |
| Set up reverse DNS | POST | `/v3/whitelabel/ips` | `V3\Whitelabel\Ips::post()` |
| Delete a reverse DNS record | DELETE | `/v3/whitelabel/ips/{id}` | `V3\Whitelabel\Ips::deleteById()` |
| Retrieve a reverse DNS record | GET | `/v3/whitelabel/ips/{id}` | `V3\Whitelabel\Ips::getById()` |
| Validate a reverse DNS record | POST | `/v3/whitelabel/ips/{id}/validate` | `V3\Whitelabel\Ips\ById\Validate::post()` |
| Retrieve all branded links | GET | `/v3/whitelabel/links` | `V3\Whitelabel\Links::get()` |
| Create a branded link | POST | `/v3/whitelabel/links` | `V3\Whitelabel\Links::post()` |
| Retrieve the default branded link | GET | `/v3/whitelabel/links/default` | `V3\Whitelabel\Links\DefaultResource::get()` |
| Disassociate a branded link from a subuser | DELETE | `/v3/whitelabel/links/subuser` | `V3\Whitelabel\Links\Subuser::delete()` |
| Retrieve a subuser's branded link | GET | `/v3/whitelabel/links/subuser` | `V3\Whitelabel\Links\Subuser::get()` |
| Delete a branded link | DELETE | `/v3/whitelabel/links/{id}` | `V3\Whitelabel\Links::deleteById()` |
| Retrieve a branded link | GET | `/v3/whitelabel/links/{id}` | `V3\Whitelabel\Links::getById()` |
| Update a branded link | PATCH | `/v3/whitelabel/links/{id}` | `V3\Whitelabel\Links::patchById()` |
| Validate a branded link | POST | `/v3/whitelabel/links/{id}/validate` | `V3\Whitelabel\Links\ById\Validate::post()` |
| Associate a branded link with a subuser | POST | `/v3/whitelabel/links/{link_id}/subuser` | `V3\Whitelabel\Links\ByLinkId\Subuser::post()` |
