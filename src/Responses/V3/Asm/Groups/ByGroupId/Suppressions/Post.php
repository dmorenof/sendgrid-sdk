<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Asm\Groups\ByGroupId\Suppressions;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The email addresses you added to the unsubscribe group
     */
    public \SendGridSDK\Collections\StringCollection $recipient_emails;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'recipient_emails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->recipient_emails = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
