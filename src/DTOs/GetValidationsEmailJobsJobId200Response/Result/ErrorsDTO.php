<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\GetValidationsEmailJobsJobId200Response\Result;

final class ErrorsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Description of the error encountered during execution of the Bulk Email Address Validation Job.
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
