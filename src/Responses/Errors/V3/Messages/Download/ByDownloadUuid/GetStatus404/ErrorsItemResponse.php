<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Messages\Download\ByDownloadUuid\GetStatus404;

final class ErrorsItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
