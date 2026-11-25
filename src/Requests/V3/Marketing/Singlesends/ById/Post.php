<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Marketing\Singlesends\ById;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    /**
     * The name of the duplicate Single Send. If you choose to leave the name field blank, your duplicate will be assigned the name of the Single Send it was copied from with the text 'Copy of ' prepended to it. The end of the new Single Send name, including 'Copy of ', will be trimmed if the name exceeds the character limit.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
