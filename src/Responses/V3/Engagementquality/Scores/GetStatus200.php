<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Engagementquality\Scores;

final class GetStatus200 extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * An array of objects containing SendGrid Engagement Quality scores and their associated data.
     */
    public \SendGridSDK\Collections\V3\Engagementquality\Scores\GetStatus200\GetStatus200ResultCollection $result;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'result' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->result = new \SendGridSDK\Collections\V3\Engagementquality\Scores\GetStatus200\GetStatus200ResultCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Seq\Score::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
