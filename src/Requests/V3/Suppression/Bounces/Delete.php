<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Suppression\Bounces;

/**
 * Example: {"delete_all":false}
 */
final class Delete extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * This parameter allows you to delete **every** email in your bounce list. This should not be used with the emails parameter.
     */
    public bool $delete_all;
    /**
     * Delete multiple emails from your bounce list at the same time. This should not be used with the delete_all parameter.
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
