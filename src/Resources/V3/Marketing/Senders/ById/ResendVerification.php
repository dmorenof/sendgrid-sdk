<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Senders\ById;

final class ResendVerification extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/marketing/senders/{id}/resend_verification',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
            404 => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\SendersError\\Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Resend a Sender verification
     *
     * **This endpoint allows you to resend the verification request for a specific Sender.**
     */
    public function post(int $id, ?\SendGridSDK\PostParams\V3\Marketing\Senders\ById\ResendVerification $params = null): void
    {
        $this->executeArguments(self::operation(self::POST), path: ['id' => $id], parameters: $params);
        return;
    }
}
