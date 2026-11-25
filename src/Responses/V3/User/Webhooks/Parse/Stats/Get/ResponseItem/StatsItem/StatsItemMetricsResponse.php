<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\User\Webhooks\Parse\Stats\Get\ResponseItem\StatsItem;

final class StatsItemMetricsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'received',
    ];

    /**
     * The number of emails received and parsed by the Parse Webhook.
     */
    public float $received;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'received' => is_float($value) ? $this->received = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
