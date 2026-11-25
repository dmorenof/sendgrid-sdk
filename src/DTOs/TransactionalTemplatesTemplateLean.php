<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * Transactional Templates: Template Lean
 * Example: {"id":"0c314114-a2b7-4523-8cbc-a293d7d19007","name":"example_name","generation":"legacy","updated_at":"2021-04-28 13:12:46","versions":[]}
 */
final class TransactionalTemplatesTemplateLean extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'generation',
        'id',
        'name',
        'updated_at',
    ];

    protected const array VALIDATION = [
        'id' => [
            'minLength' => 36,
            'maxLength' => 36,
        ],
        'name' => [
            'maxLength' => 100,
        ],
        'updated_at' => [
            'pattern' => '^(\\d{4}-\\d{2}-\\d{2}) ((\\d{2}):(\\d{2}):(\\d{2}))$',
        ],
    ];

    /**
     * Defines the generation of the template.
     */
    public \SendGridSDK\Enums\Generation1 $generation;
    /**
     * The ID of the transactional template.
     * Format: uuid
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The name for the transactional template.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The date and time that this transactional template version was updated.
     */
    public string $updated_at {
        set {
            $this->assigning('updated_at', $value);
            $this->updated_at = $value;
        }
    }
    /**
     * The different versions of this transactional template.
     */
    public \SendGridSDK\Collections\TransactionalTemplate\VersionsCollection $versions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'generation' => is_string($value) ? $this->generation = \SendGridSDK\Enums\Generation1::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            'versions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->versions = new \SendGridSDK\Collections\TransactionalTemplate\VersionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\TransactionalTemplatesVersionOutputLean::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
