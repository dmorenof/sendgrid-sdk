<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\Lists\ByListId;

final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the list
     */
    public int $id;
    /**
     * The new name for the list
     */
    public string $name;
    /**
     * The number of recipients on the list
     */
    public int $recipient_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'recipient_count' => is_int($value) ? $this->recipient_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
