<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Ips\Pools\ByPoolName\GetStatus404;

final class ErrorsItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The name of the error.
     */
    public string $field;
    /**
     * A message explaining why the IP addresses could not be listed.
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
