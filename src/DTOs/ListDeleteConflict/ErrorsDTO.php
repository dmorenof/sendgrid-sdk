<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\ListDeleteConflict;

final class ErrorsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'field',
        'message',
    ];

    /**
     * the field in the request that is incorrect
     */
    public string $field;
    /**
     * a description of what is specifically wrong
     */
    public string $message;
    /**
     * When applicable, the resources currently using this list. The list cannot be deleted while they reference it. Absent when the request failed for any other reason.
     */
    public \SendGridSDK\Collections\ListDeleteConflict\ErrorsItem\ResourcesCollection $resources;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'resources' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->resources = new \SendGridSDK\Collections\ListDeleteConflict\ErrorsItem\ResourcesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Mc\ListsInUseResource::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
