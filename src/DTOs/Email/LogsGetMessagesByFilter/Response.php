<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Email\LogsGetMessagesByFilter;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'messages',
    ];

    /**
     * List of messages matching the filter query.
     *
     */
    public \SendGridSDK\Collections\Email\LogsGetMessagesByFilter\Response\MessagesCollection $messages;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \SendGridSDK\Collections\Email\LogsGetMessagesByFilter\Response\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Email\LogsMessage::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
