<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\Recipients\Search;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public int $recipient_count;
    public \SendGridSDK\Collections\V3\Contactdb\Recipients\Search\Post\SearchRecipientsCollection $recipients;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'recipient_count' => is_int($value) ? $this->recipient_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
