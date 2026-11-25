<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\Recipients\Search\Post\RecipientsItem;

final class CustomFieldsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public int $id;
    public string $name;
    public string $type;
    public \SendGridSDK\Responses\V3\Contactdb\Recipients\Search\Post\RecipientsItem\CustomFieldsItem\FieldsItemValueResponse $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
