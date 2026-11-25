<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Contactdb;

/**
 * ContactDB lists
 * Example: {"id":1,"name":"listname","recipient_count":0}
 */
final class List2Xx extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'name',
        'recipient_count',
    ];

    /**
     * The reference ID of your list.
     */
    public int $id;
    /**
     * The name of your list. Must be unique against all other list and segment names.
     */
    public string $name;
    /**
     * The count of recipients currently in the list.
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
