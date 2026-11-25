<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Singlesends\Categories;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'categories' => [
            'maxItems' => 1000,
            'uniqueItems' => true,
        ],
    ];

    /**
     * list of latest one thousand unique categories associated with all Single Sends in ascending order
     */
    public \SendGridSDK\Collections\AllSegments200\ListIdsCollection $categories {
        set {
            $this->assigning('categories', $value);
            $this->categories = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'categories' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->categories = new \SendGridSDK\Collections\AllSegments200\ListIdsCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
