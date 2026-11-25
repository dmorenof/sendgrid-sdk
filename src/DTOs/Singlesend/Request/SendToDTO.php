<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Singlesend\Request;

final class SendToDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'list_ids' => [
            'maxItems' => 50,
        ],
        'segment_ids' => [
            'maxItems' => 10,
        ],
    ];

    /**
     * Set to `true` to send to All Contacts. If set to `false`, at least one `list_ids` or `segment_ids` value must be provided before the Single Send is scheduled to be sent to recipients.
     */
    public bool $all;
    /**
     * The recipient List IDs that will receive the Single Send.
     */
    public \SendGridSDK\Collections\StringCollection $list_ids {
        set {
            $this->assigning('list_ids', $value);
            $this->list_ids = $value;
        }
    }
    /**
     * The recipient Segment IDs that will receive the Single Send.
     */
    public \SendGridSDK\Collections\StringCollection $segment_ids {
        set {
            $this->assigning('segment_ids', $value);
            $this->segment_ids = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'all' => is_bool($value) ? $this->all = $value : parent::assignMember($name, $value),
            'list_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->list_ids = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'segment_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->segment_ids = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
