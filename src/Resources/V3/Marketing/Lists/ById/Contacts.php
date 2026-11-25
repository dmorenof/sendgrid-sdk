<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Marketing\Lists\ById;

final class Contacts extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/marketing/lists/{id}/contacts',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Mc\\ListsError',
            404 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Mc\\ListsError',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => 'mixed',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Marketing\\Lists\\ById\\Contacts\\Delete',
    ];

    /**
     * Remove Contacts from a List
     *
     * **This endpoint allows you to remove contacts from a given list.**
     *
     * The contacts will not be deleted. Only their list membership will be changed.
     */
    public function delete(string $id, \SendGridSDK\DeleteParams\V3\Marketing\Lists\ById\Contacts $params): \SendGridSDK\Responses\V3\Marketing\Lists\ById\Contacts\Delete
    {
        /** @var \SendGridSDK\Responses\V3\Marketing\Lists\ById\Contacts\Delete $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
