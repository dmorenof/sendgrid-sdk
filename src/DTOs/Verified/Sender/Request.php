<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Verified\Sender;

/**
 * Verified Sender Request Schema
 * Example: {"nickname":"Orders","from_email":"orders&#64;example.com","from_name":"Example Orders","reply_to":"orders&#64;example.com","reply_to_name":"Example Orders","address":"1234 Fake St","address2":"PO Box 1234","state":"CA","city":"San Francisco","country":"USA","zip":"94105"}
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'from_email',
        'nickname',
        'reply_to',
    ];

    protected const array VALIDATION = [
        'address' => [
            'maxLength' => 100,
        ],
        'address2' => [
            'maxLength' => 100,
        ],
        'city' => [
            'maxLength' => 150,
        ],
        'country' => [
            'maxLength' => 100,
        ],
        'from_email' => [
            'maxLength' => 256,
        ],
        'from_name' => [
            'maxLength' => 256,
        ],
        'nickname' => [
            'maxLength' => 100,
        ],
        'reply_to' => [
            'maxLength' => 256,
        ],
        'reply_to_name' => [
            'maxLength' => 256,
        ],
        'state' => [
            'maxLength' => 2,
        ],
        'zip' => [
            'maxLength' => 10,
        ],
    ];

    public string $address {
        set {
            $this->assigning('address', $value);
            $this->address = $value;
        }
    }
    public string $address2 {
        set {
            $this->assigning('address2', $value);
            $this->address2 = $value;
        }
    }
    public string $city {
        set {
            $this->assigning('city', $value);
            $this->city = $value;
        }
    }
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Format: email
     */
    public string $from_email {
        set {
            $this->assigning('from_email', $value);
            $this->from_email = $value;
        }
    }
    public string $from_name {
        set {
            $this->assigning('from_name', $value);
            $this->from_name = $value;
        }
    }
    public string $nickname {
        set {
            $this->assigning('nickname', $value);
            $this->nickname = $value;
        }
    }
    /**
     * Format: email
     */
    public string $reply_to {
        set {
            $this->assigning('reply_to', $value);
            $this->reply_to = $value;
        }
    }
    public string $reply_to_name {
        set {
            $this->assigning('reply_to_name', $value);
            $this->reply_to_name = $value;
        }
    }
    public string $state {
        set {
            $this->assigning('state', $value);
            $this->state = $value;
        }
    }
    public string $zip {
        set {
            $this->assigning('zip', $value);
            $this->zip = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'address2' => is_string($value) ? $this->address2 = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'from_email' => is_string($value) ? $this->from_email = $value : parent::assignMember($name, $value),
            'from_name' => is_string($value) ? $this->from_name = $value : parent::assignMember($name, $value),
            'nickname' => is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'reply_to' => is_string($value) ? $this->reply_to = $value : parent::assignMember($name, $value),
            'reply_to_name' => is_string($value) ? $this->reply_to_name = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'zip' => is_string($value) ? $this->zip = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
