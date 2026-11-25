<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Mc\SegmentsSegmentDeleteConflict;

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
     * When applicable, the resources currently using this segment. The segment cannot be deleted while they reference it. Absent when the request failed for any other reason.
     */
    public \SendGridSDK\Collections\Mc\SegmentsSegmentDeleteConflict\ErrorsItem\ResourcesCollection $resources;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'resources' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->resources = new \SendGridSDK\Collections\Mc\SegmentsSegmentDeleteConflict\ErrorsItem\ResourcesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Mc\SegmentsInUseResource::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
