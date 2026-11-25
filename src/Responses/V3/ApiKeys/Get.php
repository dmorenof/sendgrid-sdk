<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\ApiKeys;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\V3\ApiKeys\Get\ApiKeysResultCollection $result;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'result' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->result = new \SendGridSDK\Collections\V3\ApiKeys\Get\ApiKeysResultCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Api\Key\Response::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
