<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Subuser\Stats;

final class StatsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The first name of the subuser.
     */
    public string $first_name;
    /**
     * The last name of the subuser.
     */
    public string $last_name;
    public \SendGridSDK\DTOs\Subuser\Stats\StatsItem\MetricsDTO $metrics;
    /**
     * The username of the subuser.
     */
    public string $name;
    /**
     * The type of account.
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
