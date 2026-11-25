<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Suppression\Blocks;

/**
 * Example: {"delete_all":false,"emails":["example1&#64;example.com","example2&#64;example.com"]}
 */
final class Delete extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if you want to delete all blocked email addresses.
     */
    public bool $delete_all;
    /**
     * The specific blocked email addresses that you want to delete.
     */
    public \SendGridSDK\Collections\StringCollection $emails;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'delete_all' => is_bool($value) ? $this->delete_all = $value : parent::assignMember($name, $value),
            'emails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->emails = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
