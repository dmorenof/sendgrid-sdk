<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Validations;

final class Email extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/validations/email',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Validations\\Email\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Validations\\Email\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Validate an email
     *
     * **This endpoint allows you to validate an email address.**
     */
    public function post(?\SendGridSDK\Requests\V3\Validations\Email\Post $payload = null): \SendGridSDK\Responses\V3\Validations\Email\Post
    {
        /** @var \SendGridSDK\Responses\V3\Validations\Email\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }
}
