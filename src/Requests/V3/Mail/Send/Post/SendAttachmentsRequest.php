<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post;

final class SendAttachmentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content',
        'filename',
    ];

    protected const array VALIDATION = [
        'content' => [
            'minLength' => 1,
        ],
        'type' => [
            'minLength' => 1,
        ],
    ];

    /**
     * The Base64 encoded content of the attachment.
     */
    public string $content {
        set {
            $this->assigning('content', $value);
            $this->content = $value;
        }
    }
    /**
     * The attachment's content ID. The `content_id` is used when the `disposition` is set to `inline` and the attachment is an image, allowing the file to be displayed within the body of the email.
     */
    public string $content_id;
    /**
     * The attachment's content-disposition specifies how you would like the attachment to be displayed. For example, `inline` results in the attached file being displayed automatically within the message while `attachment` results in the attached file requiring some action to be taken before it is displayed such as opening or downloading the file.
     */
    public \SendGridSDK\Enums\Disposition $disposition;
    /**
     * The attachment's filename, including the file extension.
     */
    public string $filename;
    /**
     * The MIME type of the content you are attaching (e.g., `image/jpeg` or `application/pdf`).
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'content_id' => is_string($value) ? $this->content_id = $value : parent::assignMember($name, $value),
            'disposition' => is_string($value) ? $this->disposition = \SendGridSDK\Enums\Disposition::from($value) : parent::assignMember($name, $value),
            'filename' => is_string($value) ? $this->filename = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
