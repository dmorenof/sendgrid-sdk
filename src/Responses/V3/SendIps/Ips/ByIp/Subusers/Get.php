<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\SendIps\Ips\ByIp\Subusers;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Responses\V3\SendIps\Ips\ByIp\Subusers\Get\SubusersMetadataResponse $_metadata;
    /**
     * An array of Subuser IDs that have been assigned the specified IP address.
     */
    public \SendGridSDK\Collections\StringCollection $result;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'result' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->result = new \SendGridSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
