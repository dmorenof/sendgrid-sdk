<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Contactdb\Exports;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * File type for export file. Choose from `json` or `csv`.
     */
    public \SendGridSDK\Enums\LmcContactdb\FileType $file_type;
    /**
     * IDs of the recipient lists you want to export.
     */
    public \SendGridSDK\Collections\IntegerCollection $list_ids;
    /**
     * The maximum size of an export file in MB. Note that when this option is specified, multiple output files may be returned from the export.
     */
    public int $max_file_size;
    public \SendGridSDK\Requests\V3\Contactdb\Exports\Post\ExportsNotificationsRequest $notifications;
    /**
     * IDs of the recipient segments you want to export.
     */
    public \SendGridSDK\Collections\IntegerCollection $segment_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'file_type' => is_string($value) ? $this->file_type = \SendGridSDK\Enums\LmcContactdb\FileType::from($value) : parent::assignMember($name, $value),
            'list_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->list_ids = new \SendGridSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'max_file_size' => is_int($value) ? $this->max_file_size = $value : parent::assignMember($name, $value),
            'segment_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->segment_ids = new \SendGridSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
