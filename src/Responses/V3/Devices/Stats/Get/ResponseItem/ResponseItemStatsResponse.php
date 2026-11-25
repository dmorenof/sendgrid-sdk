<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Devices\Stats\Get\ResponseItem;

final class ResponseItemStatsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\DTOs\AdvancedStats\Opens $metrics;
    /**
     * The name of the specific segmentation.
     */
    public string $name;
    /**
     * The type of segmentation.
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'metrics' => $value instanceof \stdClass ? $this->metrics = new \SendGridSDK\DTOs\AdvancedStats\Opens($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
