<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Email;

final class OneOfLogsEvent extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\SendGridSDK\DTOs\Bounce\Event::class, \SendGridSDK\DTOs\ClickEvent::class, \SendGridSDK\DTOs\DeferredEvent::class, \SendGridSDK\DTOs\DeliveredEvent::class, \SendGridSDK\DTOs\DroppedEvent::class, \SendGridSDK\DTOs\OpenEvent::class, \SendGridSDK\DTOs\ProcessedEvent::class, \SendGridSDK\DTOs\ReceivedEvent::class, \SendGridSDK\DTOs\SpamReportEvent::class, \SendGridSDK\DTOs\GroupUnsubscribeEvent::class, \SendGridSDK\DTOs\GroupResubscribeEvent::class, \SendGridSDK\DTOs\UnsubscribeEvent::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'BounceEvent',
        ],
        [
            'kind' => 'reference',
            'ref' => 'ClickEvent',
        ],
        [
            'kind' => 'reference',
            'ref' => 'DeferredEvent',
        ],
        [
            'kind' => 'reference',
            'ref' => 'DeliveredEvent',
        ],
        [
            'kind' => 'reference',
            'ref' => 'DroppedEvent',
        ],
        [
            'kind' => 'reference',
            'ref' => 'OpenEvent',
        ],
        [
            'kind' => 'reference',
            'ref' => 'ProcessedEvent',
        ],
        [
            'kind' => 'reference',
            'ref' => 'ReceivedEvent',
        ],
        [
            'kind' => 'reference',
            'ref' => 'SpamReportEvent',
        ],
        [
            'kind' => 'reference',
            'ref' => 'GroupUnsubscribeEvent',
        ],
        [
            'kind' => 'reference',
            'ref' => 'GroupResubscribeEvent',
        ],
        [
            'kind' => 'reference',
            'ref' => 'UnsubscribeEvent',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'AsmGroupId' => [
            'kind' => 'integer',
        ],
        'BounceClassification' => [
            'kind' => 'string',
            'enum' => [
                'Content',
                'Frequency or Volume Too High',
                'Invalid Address',
                'Mailbox Unavailable',
                'Reputation',
                'Technical',
                'Unclassified',
            ],
        ],
        'BounceEvent' => [
            'kind' => 'object',
            'properties' => [
                'asm_group_id' => [
                    'kind' => 'reference',
                    'ref' => 'AsmGroupId',
                ],
                'bounce_classification' => [
                    'kind' => 'reference',
                    'ref' => 'BounceClassification',
                ],
                'category' => [
                    'kind' => 'reference',
                    'ref' => 'EmailCategories',
                ],
                'cert_err' => [
                    'kind' => 'reference',
                    'ref' => 'CertificateError',
                ],
                'custom_args' => [
                    'kind' => 'reference',
                    'ref' => 'CustomArgs',
                ],
                'email' => [
                    'kind' => 'string',
                ],
                'event' => [
                    'kind' => 'reference',
                    'ref' => 'Event',
                ],
                'ip' => [
                    'kind' => 'reference',
                    'ref' => 'IpAddress',
                ],
                'reason' => [
                    'kind' => 'reference',
                    'ref' => 'SmtpResponse',
                ],
                'sg_event_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgEventId',
                ],
                'sg_message_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgMessageId',
                ],
                'smtp-id' => [
                    'kind' => 'reference',
                    'ref' => 'SmtpId',
                ],
                'status' => [
                    'kind' => 'reference',
                    'ref' => 'SmtpStatus',
                ],
                'timestamp' => [
                    'kind' => 'reference',
                    'ref' => 'UnixEpochSeconds',
                ],
                'tls' => [
                    'kind' => 'reference',
                    'ref' => 'TlsEnabled',
                ],
                'type' => [
                    'kind' => 'reference',
                    'ref' => 'LogsBounceType',
                ],
            ],
            'required' => [
                'email',
                'event',
                'sg_event_id',
                'sg_message_id',
                'timestamp',
                'type',
            ],
        ],
        'CertificateError' => [
            'kind' => 'string',
            'enum' => [
                '1',
            ],
        ],
        'ClickEvent' => [
            'kind' => 'object',
            'properties' => [
                'asm_group_id' => [
                    'kind' => 'reference',
                    'ref' => 'AsmGroupId',
                ],
                'category' => [
                    'kind' => 'reference',
                    'ref' => 'EmailCategories',
                ],
                'custom_args' => [
                    'kind' => 'reference',
                    'ref' => 'CustomArgs',
                ],
                'email' => [
                    'kind' => 'string',
                ],
                'event' => [
                    'kind' => 'reference',
                    'ref' => 'Event1',
                ],
                'ip' => [
                    'kind' => 'reference',
                    'ref' => 'IpAddress',
                ],
                'sg_event_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgEventId',
                ],
                'sg_message_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgMessageId',
                ],
                'timestamp' => [
                    'kind' => 'reference',
                    'ref' => 'UnixEpochSeconds',
                ],
                'url' => [
                    'kind' => 'reference',
                    'ref' => 'Url',
                ],
                'url_offset' => [
                    'kind' => 'reference',
                    'ref' => 'EngagementUrlOffset',
                ],
                'useragent' => [
                    'kind' => 'reference',
                    'ref' => 'HttpUserAgent',
                ],
            ],
            'required' => [
                'email',
                'event',
                'sg_event_id',
                'sg_message_id',
                'timestamp',
            ],
        ],
        'CustomArgs' => [
            'kind' => 'object',
            'additional' => [
                'kind' => 'string',
            ],
        ],
        'CustomerTimezoneDate' => [
            'kind' => 'string',
            'rules' => [
                'pattern' => '^\\d{4}-\\d{2}-\\d{2}$',
            ],
        ],
        'DeferredEvent' => [
            'kind' => 'object',
            'properties' => [
                'asm_group_id' => [
                    'kind' => 'reference',
                    'ref' => 'AsmGroupId',
                ],
                'attempt' => [
                    'kind' => 'string',
                    'rules' => [
                        'pattern' => '^[0-9]+$',
                    ],
                ],
                'category' => [
                    'kind' => 'reference',
                    'ref' => 'EmailCategories',
                ],
                'cert_err' => [
                    'kind' => 'reference',
                    'ref' => 'CertificateError',
                ],
                'custom_args' => [
                    'kind' => 'reference',
                    'ref' => 'CustomArgs',
                ],
                'domain' => [
                    'kind' => 'string',
                    'rules' => [
                        'pattern' => '^.+\\..+$',
                    ],
                ],
                'email' => [
                    'kind' => 'string',
                ],
                'event' => [
                    'kind' => 'reference',
                    'ref' => 'Event2',
                ],
                'from' => [
                    'kind' => 'string',
                ],
                'ip' => [
                    'kind' => 'reference',
                    'ref' => 'IpAddress',
                ],
                'response' => [
                    'kind' => 'reference',
                    'ref' => 'SmtpResponse',
                ],
                'sg_event_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgEventId',
                ],
                'sg_message_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgMessageId',
                ],
                'smtp-id' => [
                    'kind' => 'reference',
                    'ref' => 'SmtpId',
                ],
                'timestamp' => [
                    'kind' => 'reference',
                    'ref' => 'UnixEpochSeconds',
                ],
                'tls' => [
                    'kind' => 'reference',
                    'ref' => 'TlsEnabled',
                ],
            ],
            'required' => [
                'attempt',
                'email',
                'event',
                'response',
                'sg_event_id',
                'sg_message_id',
                'smtp-id',
                'timestamp',
            ],
        ],
        'DeliveredEvent' => [
            'kind' => 'object',
            'properties' => [
                'asm_group_id' => [
                    'kind' => 'reference',
                    'ref' => 'AsmGroupId',
                ],
                'category' => [
                    'kind' => 'reference',
                    'ref' => 'EmailCategories',
                ],
                'cert_err' => [
                    'kind' => 'reference',
                    'ref' => 'CertificateError',
                ],
                'custom_args' => [
                    'kind' => 'reference',
                    'ref' => 'CustomArgs',
                ],
                'email' => [
                    'kind' => 'string',
                ],
                'event' => [
                    'kind' => 'reference',
                    'ref' => 'Event3',
                ],
                'ip' => [
                    'kind' => 'reference',
                    'ref' => 'IpAddress',
                ],
                'response' => [
                    'kind' => 'reference',
                    'ref' => 'SmtpResponse',
                ],
                'sg_event_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgEventId',
                ],
                'sg_message_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgMessageId',
                ],
                'smtp-id' => [
                    'kind' => 'reference',
                    'ref' => 'SmtpId',
                ],
                'timestamp' => [
                    'kind' => 'reference',
                    'ref' => 'UnixEpochSeconds',
                ],
                'tls' => [
                    'kind' => 'reference',
                    'ref' => 'TlsEnabled',
                ],
            ],
            'required' => [
                'email',
                'event',
                'ip',
                'response',
                'sg_event_id',
                'sg_message_id',
                'smtp-id',
                'timestamp',
            ],
        ],
        'DropReason' => [
            'kind' => 'string',
        ],
        'DroppedEvent' => [
            'kind' => 'object',
            'properties' => [
                'asm_group_id' => [
                    'kind' => 'reference',
                    'ref' => 'AsmGroupId',
                ],
                'category' => [
                    'kind' => 'reference',
                    'ref' => 'EmailCategories',
                ],
                'custom_args' => [
                    'kind' => 'reference',
                    'ref' => 'CustomArgs',
                ],
                'email' => [
                    'kind' => 'string',
                ],
                'event' => [
                    'kind' => 'reference',
                    'ref' => 'Event4',
                ],
                'message' => [
                    'kind' => 'string',
                ],
                'pool' => [
                    'kind' => 'reference',
                    'ref' => 'OutboundIpPoolMetadata',
                ],
                'reason' => [
                    'kind' => 'reference',
                    'ref' => 'DropReason',
                ],
                'sg_event_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgEventId',
                ],
                'sg_message_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgMessageId',
                ],
                'smtp-id' => [
                    'kind' => 'reference',
                    'ref' => 'SmtpId',
                ],
                'timestamp' => [
                    'kind' => 'reference',
                    'ref' => 'UnixEpochSeconds',
                ],
            ],
            'required' => [
                'email',
                'event',
                'reason',
                'sg_event_id',
                'sg_message_id',
                'smtp-id',
                'timestamp',
            ],
        ],
        'EmailCategories' => [
            'kind' => 'array',
            'items' => [
                'kind' => 'string',
            ],
        ],
        'EngagementUrlContentType' => [
            'kind' => 'string',
            'enum' => [
                'amp',
                'header',
                'html',
                'text',
            ],
        ],
        'EngagementUrlOffset' => [
            'kind' => 'object',
            'properties' => [
                'index' => [
                    'kind' => 'integer',
                ],
                'type' => [
                    'kind' => 'reference',
                    'ref' => 'EngagementUrlContentType',
                ],
            ],
        ],
        'Event' => [
            'kind' => 'string',
            'enum' => [
                'bounce',
            ],
        ],
        'Event1' => [
            'kind' => 'string',
            'enum' => [
                'click',
            ],
        ],
        'Event10' => [
            'kind' => 'string',
            'enum' => [
                'group_resubscribe',
            ],
        ],
        'Event11' => [
            'kind' => 'string',
            'enum' => [
                'unsubscribe',
            ],
        ],
        'Event2' => [
            'kind' => 'string',
            'enum' => [
                'deferred',
            ],
        ],
        'Event3' => [
            'kind' => 'string',
            'enum' => [
                'delivered',
            ],
        ],
        'Event4' => [
            'kind' => 'string',
            'enum' => [
                'cancel_drop',
                'dropped',
            ],
        ],
        'Event5' => [
            'kind' => 'string',
            'enum' => [
                'open',
            ],
        ],
        'Event6' => [
            'kind' => 'string',
            'enum' => [
                'processed',
            ],
        ],
        'Event7' => [
            'kind' => 'string',
            'enum' => [
                'received',
            ],
        ],
        'Event8' => [
            'kind' => 'string',
            'enum' => [
                'spamreport',
            ],
        ],
        'Event9' => [
            'kind' => 'string',
            'enum' => [
                'group_unsubscribe',
            ],
        ],
        'GroupResubscribeEvent' => [
            'kind' => 'object',
            'properties' => [
                'asm_group_id' => [
                    'kind' => 'reference',
                    'ref' => 'AsmGroupId',
                ],
                'category' => [
                    'kind' => 'reference',
                    'ref' => 'EmailCategories',
                ],
                'custom_args' => [
                    'kind' => 'reference',
                    'ref' => 'CustomArgs',
                ],
                'email' => [
                    'kind' => 'string',
                ],
                'event' => [
                    'kind' => 'reference',
                    'ref' => 'Event10',
                ],
                'ip' => [
                    'kind' => 'reference',
                    'ref' => 'IpAddress',
                ],
                'sg_event_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgEventId',
                ],
                'sg_message_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgMessageId',
                ],
                'timestamp' => [
                    'kind' => 'reference',
                    'ref' => 'UnixEpochSeconds',
                ],
                'useragent' => [
                    'kind' => 'reference',
                    'ref' => 'HttpUserAgent',
                ],
            ],
            'required' => [
                'email',
                'event',
                'sg_event_id',
                'sg_message_id',
                'timestamp',
            ],
        ],
        'GroupUnsubscribeEvent' => [
            'kind' => 'object',
            'properties' => [
                'asm_group_id' => [
                    'kind' => 'reference',
                    'ref' => 'AsmGroupId',
                ],
                'category' => [
                    'kind' => 'reference',
                    'ref' => 'EmailCategories',
                ],
                'custom_args' => [
                    'kind' => 'reference',
                    'ref' => 'CustomArgs',
                ],
                'email' => [
                    'kind' => 'string',
                ],
                'event' => [
                    'kind' => 'reference',
                    'ref' => 'Event9',
                ],
                'ip' => [
                    'kind' => 'reference',
                    'ref' => 'IpAddress',
                ],
                'sg_event_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgEventId',
                ],
                'sg_message_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgMessageId',
                ],
                'timestamp' => [
                    'kind' => 'reference',
                    'ref' => 'UnixEpochSeconds',
                ],
                'useragent' => [
                    'kind' => 'reference',
                    'ref' => 'HttpUserAgent',
                ],
            ],
            'required' => [
                'email',
                'event',
                'sg_event_id',
                'sg_message_id',
                'timestamp',
            ],
        ],
        'HttpUserAgent' => [
            'kind' => 'string',
        ],
        'IpAddress' => [
            'kind' => 'string',
        ],
        'LogsBounceType' => [
            'kind' => 'string',
            'enum' => [
                'blocked',
                'bounce',
            ],
        ],
        'OpenEvent' => [
            'kind' => 'object',
            'properties' => [
                'asm_group_id' => [
                    'kind' => 'reference',
                    'ref' => 'AsmGroupId',
                ],
                'category' => [
                    'kind' => 'reference',
                    'ref' => 'EmailCategories',
                ],
                'custom_args' => [
                    'kind' => 'reference',
                    'ref' => 'CustomArgs',
                ],
                'email' => [
                    'kind' => 'string',
                ],
                'event' => [
                    'kind' => 'reference',
                    'ref' => 'Event5',
                ],
                'ip' => [
                    'kind' => 'reference',
                    'ref' => 'IpAddress',
                ],
                'sg_content_type' => [
                    'kind' => 'reference',
                    'ref' => 'EngagementUrlContentType',
                ],
                'sg_event_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgEventId',
                ],
                'sg_machine_open' => [
                    'kind' => 'reference',
                    'ref' => 'SgMachineOpen',
                ],
                'sg_message_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgMessageId',
                ],
                'timestamp' => [
                    'kind' => 'reference',
                    'ref' => 'UnixEpochSeconds',
                ],
                'url' => [
                    'kind' => 'reference',
                    'ref' => 'Url',
                ],
                'useragent' => [
                    'kind' => 'reference',
                    'ref' => 'HttpUserAgent',
                ],
            ],
            'required' => [
                'email',
                'event',
                'sg_event_id',
                'sg_message_id',
                'timestamp',
            ],
        ],
        'OutboundIpPoolMetadata' => [
            'kind' => 'object',
            'properties' => [
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'pattern' => '^[0-9]+$',
                    ],
                ],
                'name' => [
                    'kind' => 'string',
                ],
            ],
        ],
        'ProcessedEvent' => [
            'kind' => 'object',
            'properties' => [
                'asm_group_id' => [
                    'kind' => 'reference',
                    'ref' => 'AsmGroupId',
                ],
                'category' => [
                    'kind' => 'reference',
                    'ref' => 'EmailCategories',
                ],
                'custom_args' => [
                    'kind' => 'reference',
                    'ref' => 'CustomArgs',
                ],
                'email' => [
                    'kind' => 'string',
                ],
                'event' => [
                    'kind' => 'reference',
                    'ref' => 'Event6',
                ],
                'pool' => [
                    'kind' => 'reference',
                    'ref' => 'OutboundIpPoolMetadata',
                ],
                'send_at' => [
                    'kind' => 'integer',
                ],
                'sg_event_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgEventId',
                ],
                'sg_message_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgMessageId',
                ],
                'smtp-id' => [
                    'kind' => 'string',
                ],
                'timestamp' => [
                    'kind' => 'reference',
                    'ref' => 'UnixEpochSeconds',
                ],
            ],
            'required' => [
                'email',
                'event',
                'sg_event_id',
                'sg_message_id',
                'smtp-id',
                'timestamp',
            ],
        ],
        'ReceivedEvent' => [
            'kind' => 'object',
            'properties' => [
                'api_key_id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 50,
                        'pattern' => '^$|^[A-Za-z0-9_-]+$',
                    ],
                ],
                'api_version' => [
                    'kind' => 'string',
                ],
                'client_ip' => [
                    'kind' => 'string',
                ],
                'event' => [
                    'kind' => 'reference',
                    'ref' => 'Event7',
                ],
                'protocol' => [
                    'kind' => 'string',
                ],
                'recipient_count' => [
                    'kind' => 'integer',
                ],
                'recv_msgid' => [
                    'kind' => 'reference',
                    'ref' => 'ReceivedMessageId',
                ],
                'reseller_id' => [
                    'kind' => 'string',
                ],
                'sg_event_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgEventId',
                ],
                'size' => [
                    'kind' => 'integer',
                ],
                'timestamp' => [
                    'kind' => 'reference',
                    'ref' => 'UnixEpochSeconds',
                ],
                'useragent' => [
                    'kind' => 'reference',
                    'ref' => 'HttpUserAgent',
                ],
                'v3_payload_details' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'integer',
                    ],
                ],
            ],
            'required' => [
                'client_ip',
                'event',
                'protocol',
                'recipient_count',
                'recv_msgid',
                'sg_event_id',
                'size',
                'timestamp',
            ],
        ],
        'ReceivedMessageId' => [
            'kind' => 'string',
        ],
        'SgEventId' => [
            'kind' => 'string',
        ],
        'SgMachineOpen' => [
            'kind' => 'boolean',
            'rules' => [
                'jsonSchema' => '{"enum":[true]}',
            ],
        ],
        'SgMessageId' => [
            'kind' => 'string',
        ],
        'SmtpId' => [
            'kind' => 'string',
        ],
        'SmtpResponse' => [
            'kind' => 'string',
        ],
        'SmtpStatus' => [
            'kind' => 'string',
            'rules' => [
                'pattern' => '^([245]\\.[01234567]\\.[01234567]|[1-5][0-9][0-9])$',
            ],
        ],
        'SpamReportEvent' => [
            'kind' => 'object',
            'properties' => [
                'category' => [
                    'kind' => 'reference',
                    'ref' => 'EmailCategories',
                ],
                'custom_args' => [
                    'kind' => 'reference',
                    'ref' => 'CustomArgs',
                ],
                'email' => [
                    'kind' => 'string',
                ],
                'event' => [
                    'kind' => 'reference',
                    'ref' => 'Event8',
                ],
                'sg_event_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgEventId',
                ],
                'sg_message_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgMessageId',
                ],
                'timestamp' => [
                    'kind' => 'reference',
                    'ref' => 'UnixEpochSeconds',
                ],
            ],
            'required' => [
                'email',
                'event',
                'sg_event_id',
                'sg_message_id',
                'timestamp',
            ],
        ],
        'TlsEnabled' => [
            'kind' => 'integer',
            'enum' => [
                1,
            ],
        ],
        'UnixEpochSeconds' => [
            'kind' => 'integer',
        ],
        'UnsubscribeEvent' => [
            'kind' => 'object',
            'properties' => [
                'category' => [
                    'kind' => 'reference',
                    'ref' => 'EmailCategories',
                ],
                'custom_args' => [
                    'kind' => 'reference',
                    'ref' => 'CustomArgs',
                ],
                'date' => [
                    'kind' => 'reference',
                    'ref' => 'CustomerTimezoneDate',
                ],
                'email' => [
                    'kind' => 'string',
                ],
                'event' => [
                    'kind' => 'reference',
                    'ref' => 'Event11',
                ],
                'ip' => [
                    'kind' => 'reference',
                    'ref' => 'IpAddress',
                ],
                'reseller_id' => [
                    'kind' => 'string',
                ],
                'sg_event_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgEventId',
                ],
                'sg_message_id' => [
                    'kind' => 'reference',
                    'ref' => 'SgMessageId',
                ],
                'timestamp' => [
                    'kind' => 'reference',
                    'ref' => 'UnixEpochSeconds',
                ],
                'useragent' => [
                    'kind' => 'reference',
                    'ref' => 'HttpUserAgent',
                ],
            ],
            'required' => [
                'date',
                'email',
                'event',
                'sg_event_id',
                'sg_message_id',
                'timestamp',
            ],
        ],
        'Url' => [
            'kind' => 'string',
        ],
    ];
    protected const string DISCRIMINATOR_PROPERTY = 'event';
    protected const array DISCRIMINATOR_MAPPING = [
        'BounceEvent' => 'SendGridSDK\\DTOs\\Bounce\\Event',
        'ClickEvent' => 'SendGridSDK\\DTOs\\ClickEvent',
        'DeferredEvent' => 'SendGridSDK\\DTOs\\DeferredEvent',
        'DeliveredEvent' => 'SendGridSDK\\DTOs\\DeliveredEvent',
        'DroppedEvent' => 'SendGridSDK\\DTOs\\DroppedEvent',
        'GroupResubscribeEvent' => 'SendGridSDK\\DTOs\\GroupResubscribeEvent',
        'GroupUnsubscribeEvent' => 'SendGridSDK\\DTOs\\GroupUnsubscribeEvent',
        'OpenEvent' => 'SendGridSDK\\DTOs\\OpenEvent',
        'ProcessedEvent' => 'SendGridSDK\\DTOs\\ProcessedEvent',
        'ReceivedEvent' => 'SendGridSDK\\DTOs\\ReceivedEvent',
        'SpamReportEvent' => 'SendGridSDK\\DTOs\\SpamReportEvent',
        'UnsubscribeEvent' => 'SendGridSDK\\DTOs\\UnsubscribeEvent',
        'bounce' => 'SendGridSDK\\DTOs\\Bounce\\Event',
        'cancel_drop' => 'SendGridSDK\\DTOs\\DroppedEvent',
        'click' => 'SendGridSDK\\DTOs\\ClickEvent',
        'deferred' => 'SendGridSDK\\DTOs\\DeferredEvent',
        'delivered' => 'SendGridSDK\\DTOs\\DeliveredEvent',
        'dropped' => 'SendGridSDK\\DTOs\\DroppedEvent',
        'group_resubscribe' => 'SendGridSDK\\DTOs\\GroupResubscribeEvent',
        'group_unsubscribe' => 'SendGridSDK\\DTOs\\GroupUnsubscribeEvent',
        'open' => 'SendGridSDK\\DTOs\\OpenEvent',
        'processed' => 'SendGridSDK\\DTOs\\ProcessedEvent',
        'received' => 'SendGridSDK\\DTOs\\ReceivedEvent',
        'spamreport' => 'SendGridSDK\\DTOs\\SpamReportEvent',
        'unsubscribe' => 'SendGridSDK\\DTOs\\UnsubscribeEvent',
    ];
}
