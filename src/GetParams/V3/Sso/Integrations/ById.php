<?php

declare(strict_types=1);

namespace SendGridSDK\GetParams\V3\Sso\Integrations;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'si' => 'si',
        ],
        'header' => [],
    ];

    public ?bool $si;
}
