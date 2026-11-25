<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\VerifiedSenders;

final class Domains extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/verified_senders/domains',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'errors' => [
            401 => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
            403 => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Verified\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\VerifiedSenders\\Domains\\Get',
    ];

    /**
     * Domain Warn List
     *
     * **This endpoint returns a list of domains known to implement DMARC and categorizes them by failure type — hard failure or soft failure**.
     *
     * Domains listed as hard failures will not deliver mail when used as a [Sender Identity](https://sendgrid.com/docs/for-developers/sending-email/sender-identity/) due to the domain's DMARC policy settings.
     *
     * For example, using a `yahoo.com` email address as a Sender Identity will likely result in the rejection of your mail. For more information about DMARC, see [Everything about DMARC](https://sendgrid.com/docs/ui/sending-email/dmarc/).
     */
    public function get(): \SendGridSDK\Responses\V3\VerifiedSenders\Domains\Get
    {
        /** @var \SendGridSDK\Responses\V3\VerifiedSenders\Domains\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
