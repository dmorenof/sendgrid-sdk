<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Ip\AccessManagement2Xx;

final class ResultDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A Unix timestamp indicating when the IP was added to the allow list.
     */
    public int $created_at;
    /**
     * The ID of the allowed IP.
     */
    public int $id;
    /**
     * The allowed IP.
     */
    public string $ip;
    /**
     * A Unix timestamp indicating when the IPs allow status was most recently updated.
     */
    public int $updated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'updated_at' => is_int($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
