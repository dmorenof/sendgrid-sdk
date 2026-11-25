<?php

declare(strict_types=1);

namespace SendGridSDK\PatchParams\V3\Sso\Integrations;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'si' => 'si',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    public ?bool $si;
    public ?\SendGridSDK\DTOs\Post\PatchIntegration\Request $body;
}
