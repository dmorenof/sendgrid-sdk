<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Partners\Accounts\ByAccountID;

final class Sso extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/partners/accounts/{accountID}/sso',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            '2XX',
        ],
        'errors' => [
            303 => null,
            401 => '\\SendGridSDK\\Responses\\Errors\\Status401Variant3Response',
            403 => '\\SendGridSDK\\Responses\\Errors\\Status403Variant3Response',
            404 => '\\SendGridSDK\\Responses\\Errors\\Status404Variant8Response',
            500 => '\\SendGridSDK\\Responses\\Errors\\Status500Variant7Response',
            502 => '\\SendGridSDK\\Responses\\Errors\\Status502Response',
            503 => '\\SendGridSDK\\Responses\\Errors\\Status503Response',
            504 => '\\SendGridSDK\\Responses\\Errors\\Status504Response',
        ],
        'errorResponses' => [
            303 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status401Variant3Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status403Variant3Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status404Variant8Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status500Variant7Response',
                'schemaNullable' => false,
            ],
            502 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status502Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status503Response',
                'schemaNullable' => false,
            ],
            504 => [
                'type' => '\\SendGridSDK\\Responses\\Errors\\Status504Response',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Authenticate an account with single sign on
     *
     * Authenticates and logs in a user to Twilio Sendgrid as a specific admin identity configured for SSO by partner. Any additional teammates or subusers will need to log in directly via app.sendgrid.com
     */
    public function post(string $accountID): void
    {
        $this->executeArguments(self::operation(self::POST), path: ['accountID' => $accountID]);
        return;
    }
}
