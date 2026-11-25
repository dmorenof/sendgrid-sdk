<?php

declare(strict_types=1);

namespace SendGridSDK\Responses\V3\Contactdb\Lists\ByListId\Recipients;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \SendGridSDK\Collections\V3\Contactdb\Lists\ByListId\Recipients\Get\RecipientsRecipientsCollection $recipients;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'recipients' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->recipients = new \SendGridSDK\Collections\V3\Contactdb\Lists\ByListId\Recipients\Get\RecipientsRecipientsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SendGridSDK\DTOs\Contactdb\Recipient200::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
