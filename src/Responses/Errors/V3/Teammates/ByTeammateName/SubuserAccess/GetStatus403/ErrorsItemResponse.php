<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Teammates\ByTeammateName\SubuserAccess\GetStatus403;

final class ErrorsItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The field associated with the error.
     */
    public string $field;
    /**
     * The message representing the error from the API.
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
