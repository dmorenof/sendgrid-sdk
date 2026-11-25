<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\Status\Get;

final class StatusStatusResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Valid values are "worker_delay" and "worker_delay_seconds" (the second value appears only if "worker_delay" has a value of "delayed").
     */
    public string $id;
    /**
     * Valid values for the ID "worker_delay" are "OK" or "Delayed". Valid values for the ID "worker_delay_seconds" is the time of delay to upload.
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
