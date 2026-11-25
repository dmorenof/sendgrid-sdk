<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Singlesend;

/**
 * singlesend_search
 */
final class Search extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'categories' => [
            'uniqueItems' => true,
        ],
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'status' => [
            'uniqueItems' => true,
        ],
    ];

    /**
     * categories to associate with this Single Send, match any single send that has at least one of the categories
     */
    public \SendGridSDK\Collections\AllSegments200\ListIdsCollection $categories {
        set {
            $this->assigning('categories', $value);
            $this->categories = $value;
        }
    }
    /**
     * leading and trailing wildcard search on name of the Single Send
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * current status of the Single Send
     */
    public \SendGridSDK\Collections\Singlesend\Search\StatusCollection $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'categories' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->categories = new \SendGridSDK\Collections\AllSegments200\ListIdsCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
