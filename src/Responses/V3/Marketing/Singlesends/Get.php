<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Marketing\Singlesends;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\DTOs\Mc\SinglesendsMetadata $_metadata;
    public \SendGridSDK\Collections\V3\Marketing\Singlesends\Get\SinglesendsResultCollection $result;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            '_metadata' => $value instanceof \stdClass ? $this->_metadata = new \SendGridSDK\DTOs\Mc\SinglesendsMetadata($value) : parent::assignMember($name, $value),
            'result' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->result = new \SendGridSDK\Collections\V3\Marketing\Singlesends\Get\SinglesendsResultCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Singlesend\ResponseShort::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
