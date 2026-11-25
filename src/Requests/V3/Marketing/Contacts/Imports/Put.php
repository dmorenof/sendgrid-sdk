<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Marketing\Contacts\Imports;

final class Put extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'field_mappings',
        'file_type',
    ];

    protected const array VALIDATION = [
        'field_mappings' => [
            'minItems' => 1,
            'uniqueItems' => false,
        ],
    ];

    /**
     * Import file header to reserved/custom field mapping.
     */
    public \SendGridSDK\Collections\V3\Marketing\Contacts\Imports\Put\FieldMappingsCollection $field_mappings {
        set {
            $this->assigning('field_mappings', $value);
            $this->field_mappings = $value;
        }
    }
    /**
     * Upload file type.
     */
    public \SendGridSDK\Enums\FileType1 $file_type;
    /**
     * All contacts will be added to each of the specified lists.
     */
    public \SendGridSDK\Collections\StringCollection $list_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'file_type' => is_string($value) ? $this->file_type = \SendGridSDK\Enums\FileType1::from($value) : parent::assignMember($name, $value),
            'list_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->list_ids = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
