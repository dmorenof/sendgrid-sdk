<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\User\Webhooks\Parse;

final class Stats extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/user/webhooks/parse/stats',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\User\\Webhooks\\Parse\\Stats\\Get\\ParseStatsCollection',
    ];

    /**
     * Retrieves Inbound Parse Webhook statistics.
     *
     * **This endpoint allows you to retrieve the statistics for your Parse Webhook usage.**
     *
     * SendGrid's Inbound Parse Webhook allows you to parse the contents and attachments of incoming emails. The Parse API can then POST the parsed emails to a URL that you specify. The Inbound Parse Webhook cannot parse messages greater than 30MB in size, including all attachments.
     *
     * There are a number of pre-made integrations for the SendGrid Parse Webhook which make processing events easy. You can find these integrations in the [Library Index](https://docs.sendgrid.com/for-developers/sending-email/libraries#webhook-libraries).
     */
    public function get(\SendGridSDK\GetParams\V3\User\Webhooks\Parse\Stats $params): \SendGridSDK\Collections\V3\User\Webhooks\Parse\Stats\Get\ParseStatsCollection
    {
        /** @var \SendGridSDK\Collections\V3\User\Webhooks\Parse\Stats\Get\ParseStatsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
