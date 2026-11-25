<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\Recipients\Search\Post;

final class SearchRecipientsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public int $created_at;
    public \SendGridSDK\Collections\V3\Contactdb\Recipients\Search\Post\RecipientsItem\CustomFieldsCollection $custom_fields;
    public string $email;
    public string $first_name;
    public string $id;
    public int $last_clicked;
    public int $last_emailed;
    public int $last_opened;
    public int $updated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last_clicked' => is_int($value) ? $this->last_clicked = $value : parent::assignMember($name, $value),
            'last_emailed' => is_int($value) ? $this->last_emailed = $value : parent::assignMember($name, $value),
            'last_opened' => is_int($value) ? $this->last_opened = $value : parent::assignMember($name, $value),
            'updated_at' => is_int($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
