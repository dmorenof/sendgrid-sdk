<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Ips\Warmup\ByIpAddress\DeleteStatus404;

final class ErrorsItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $field;
    /**
     * A message explaining why the IP couldn't be removed from warmup.
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field' => $value === null || is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
