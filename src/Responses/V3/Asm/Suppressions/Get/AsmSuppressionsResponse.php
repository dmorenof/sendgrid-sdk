<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Asm\Suppressions\Get;

final class AsmSuppressionsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created_at',
        'email',
        'group_id',
        'group_name',
    ];

    /**
     * A UNIX timestamp indicating when the suppression was created.
     */
    public int $created_at;
    /**
     * The email address that was suppressed.
     */
    public string $email;
    /**
     * The id of the suppression group that this email address belongs to.
     */
    public int $group_id;
    /**
     * The name of the suppression group that this email address belongs to.
     */
    public string $group_name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'group_id' => is_int($value) ? $this->group_id = $value : parent::assignMember($name, $value),
            'group_name' => is_string($value) ? $this->group_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
