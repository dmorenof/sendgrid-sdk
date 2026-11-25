<?php

declare(strict_types=1);

namespace SendGridSDK\PostParams\V3\Mail;

final class Send extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [],
        'header' => [
            'Content-Encoding' => 'ContentEncoding',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'Content-Encoding' => 'ContentEncoding',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'ContentEncoding' => 'Content-Encoding',
    ];

    public const bool OPERATION_BODY = true;

    public ?\SendGridSDK\Enums\ContentEncoding $ContentEncoding;
    public ?\SendGridSDK\Requests\V3\Mail\Send\Post $body;
}
