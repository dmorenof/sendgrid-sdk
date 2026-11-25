<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Lists\ById;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'id' => [
            'minLength' => 36,
            'maxLength' => 36,
        ],
    ];

    public \SendGridSDK\DTOs\SelfMetadata $_metadata;
    /**
     * The number of contacts currently stored on the list.
     */
    public int $contact_count;
    public \SendGridSDK\DTOs\Contact\Details $contact_sample;
    /**
     * The generated ID for your list.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The name you gave your list.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            '_metadata' => $value instanceof \stdClass ? $this->_metadata = new \SendGridSDK\DTOs\SelfMetadata($value) : parent::assignMember($name, $value),
            'contact_count' => is_int($value) ? $this->contact_count = $value : parent::assignMember($name, $value),
            'contact_sample' => $value instanceof \stdClass ? $this->contact_sample = new \SendGridSDK\DTOs\Contact\Details($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
