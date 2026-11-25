<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Messages\Download;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public string $message;
    public \SendGridSDK\Enums\Email\ActivityStatus2 $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \SendGridSDK\Enums\Email\ActivityStatus2::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
