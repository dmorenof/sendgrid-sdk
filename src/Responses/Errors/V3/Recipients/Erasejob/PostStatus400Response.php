<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\Errors\V3\Recipients\Erasejob;

/**
 * Bad Request
 */
final class PostStatus400Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    public \SendGridSDK\Collections\Errors\V3\Recipients\Erasejob\PostStatus400\PostStatus400ErrorsCollection $errors;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \SendGridSDK\Collections\Errors\V3\Recipients\Erasejob\PostStatus400\PostStatus400ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\RecipientsDataErasure\ErrorV1::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
