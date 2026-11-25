<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Ips\Pools\ByPoolName\Ips\PostStatus404;

final class ErrorsItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $field;
    /**
     * A message explaining why the IP address could not be added to the IP Pool.
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
