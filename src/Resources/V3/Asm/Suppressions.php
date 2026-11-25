<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Asm;

final class Suppressions extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/asm/suppressions',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Asm\\Suppressions\\Get\\AsmSuppressionsCollection',
    ];

    /**
     * Retrieve all suppressions
     *
     * **This endpoint allows you to retrieve a list of all suppressions.**
     */
    public function get(?\SendGridSDK\GetParams\V3\Asm\Suppressions $params = null): \SendGridSDK\Collections\V3\Asm\Suppressions\Get\AsmSuppressionsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Asm\Suppressions\Get\AsmSuppressionsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_EMAIL = [
        'method' => 'GET',
        'path' => '/v3/asm/suppressions/{email}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Asm\\Suppressions\\ByEmail\\Get',
    ];

    /**
     * Retrieve all suppression groups for an email address
     *
     * **This endpoint returns a list of all groups from which the given email address has been unsubscribed.**
     */
    public function getByEmail(string $email, ?\SendGridSDK\GetParams\V3\Asm\Suppressions\ByEmail $params = null): \SendGridSDK\Responses\V3\Asm\Suppressions\ByEmail\Get
    {
        /** @var \SendGridSDK\Responses\V3\Asm\Suppressions\ByEmail\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_EMAIL), path: ['email' => $email], parameters: $params);
        return $result;
    }
}
