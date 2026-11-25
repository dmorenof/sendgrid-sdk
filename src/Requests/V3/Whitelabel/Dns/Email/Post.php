<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Whitelabel\Dns\Email;

/**
 * Example: {"link_id":29719392,"domain_id":46873408,"email":"my_colleague&#64;example.com","message":"DNS Record for verification"}
 */
final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'domain_id',
        'email',
        'link_id',
    ];

    protected const array VALIDATION = [
        'domain_id' => [
            'minimum' => 0,
        ],
        'link_id' => [
            'minimum' => 0,
        ],
    ];

    /**
     * The ID of your SendGrid domain record.
     */
    public int $domain_id {
        set {
            $this->assigning('domain_id', $value);
            $this->domain_id = $value;
        }
    }
    /**
     * The email address to send the DNS information to.
     * Format: email
     */
    public string $email;
    /**
     * The ID of the branded link.
     */
    public int $link_id {
        set {
            $this->assigning('link_id', $value);
            $this->link_id = $value;
        }
    }
    /**
     * A custom text block to include in the email body sent with the records.
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'domain_id' => is_int($value) ? $this->domain_id = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'link_id' => is_int($value) ? $this->link_id = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
