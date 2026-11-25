<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Senders\BySenderId;

final class ResendVerification extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/senders/{sender_id}/resend_verification',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\Responses\\Errors\\Status400Variant8Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status400Variant8Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant7Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Resend Sender Identity Verification
     *
     * **This endpoint allows you to resend a sender identity verification email.**
     */
    public function post(int $sender_id, ?\SendGridSDK\PostParams\V3\Senders\BySenderId\ResendVerification $params = null): void
    {
        $this->executeArguments(self::operation(self::POST), path: ['sender_id' => $sender_id], parameters: $params);
        return;
    }
}
