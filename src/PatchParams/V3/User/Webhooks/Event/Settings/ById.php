<?php

declare(strict_types=1);

namespace SendGridSDK\PatchParams\V3\User\Webhooks\Event\Settings;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'include' => 'include_',
        ],
        'header' => [
            'on-behalf-of' => 'onBehalfOf',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'on-behalf-of' => 'onBehalfOf',
        'include' => 'include_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'onBehalfOf' => 'on-behalf-of',
        'include_' => 'include',
    ];

    public const bool OPERATION_BODY = true;

    public ?string $onBehalfOf;
    public ?string $include_;
    public ?\SendGridSDK\DTOs\EventWebhook\Request $body;
}
