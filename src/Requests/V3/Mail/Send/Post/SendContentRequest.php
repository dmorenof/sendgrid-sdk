<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post;

final class SendContentRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
        'value',
    ];

    protected const array VALIDATION = [
        'type' => [
            'minLength' => 1,
        ],
        'value' => [
            'minLength' => 1,
        ],
    ];

    /**
     * The MIME type of the content assigned in the `value` property of this object (e.g., `text/plain` or `text/html`).
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    /**
     * The content of your message in the specified MIME type assigned in the `type` property of this object.
     */
    public string $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
