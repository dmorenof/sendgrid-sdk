<?php

declare(strict_types=1);

namespace SendGridSDK\PathParams\V3\Contactdb\Lists\ByListId\Recipients;

final class ByRecipientId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'list_id',
        'recipient_id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'list_id' => 'list_id',
            'recipient_id' => 'recipient_id',
        ],
        'query' => [],
        'header' => [],
    ];

    public int $list_id;
    public string $recipient_id;
}
