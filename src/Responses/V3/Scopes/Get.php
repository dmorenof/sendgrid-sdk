<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Scopes;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'scopes',
    ];

    protected const array VALIDATION = [
        'scopes' => [
            'uniqueItems' => true,
        ],
    ];

    /**
     * The list of scopes for which this user has access.
     */
    public \SendGridSDK\Collections\AllSegments200\ListIdsCollection $scopes {
        set {
            $this->assigning('scopes', $value);
            $this->scopes = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \SendGridSDK\Collections\AllSegments200\ListIdsCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
