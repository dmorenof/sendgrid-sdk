<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Categories\Get;

final class CategoriesResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'category',
    ];

    /**
     * A category used to group emails by broad topic.
     */
    public string $category;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'category' => is_string($value) ? $this->category = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
