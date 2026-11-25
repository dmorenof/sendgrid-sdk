<?php

declare(strict_types=1);

namespace SendGridSDK\PathParams\V3\Templates\ByTemplateId\Versions\ByVersionId;

final class Activate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'template_id',
        'version_id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'template_id' => 'template_id',
            'version_id' => 'version_id',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $template_id;
    public string $version_id;
}
