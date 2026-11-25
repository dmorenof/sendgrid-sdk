<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Asm\Groups\ByGroupId\Suppressions;

final class Search extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/asm/groups/{group_id}/suppressions/search',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\StringCollection',
        'requestBody' => [
            'type' => '\\SendGridSDK\\DTOs\\SuppressionsRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Search for suppressions within a group
     *
     * **This endpoint allows you to search a suppression group for multiple suppressions.**
     *
     * When given a list of email addresses and a group ID, this endpoint will only return the email addresses that have been unsubscribed from the given group.
     */
    public function post(string $group_id, ?\SendGridSDK\PostParams\V3\Asm\Groups\ByGroupId\Suppressions\Search $params = null): \SendGridSDK\Collections\StringCollection
    {
        /** @var \SendGridSDK\Collections\StringCollection $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['group_id' => $group_id], parameters: $params);
        return $result;
    }
}
