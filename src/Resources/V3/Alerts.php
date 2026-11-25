<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3;

final class Alerts extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/alerts',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Alerts\\Get\\AlertsCollection',
    ];

    /**
     * Retrieve all alerts
     *
     * **This endpoint allows you to retrieve all of your alerts.**
     */
    public function get(?\SendGridSDK\GetParams\V3\Alerts $params = null): \SendGridSDK\Collections\V3\Alerts\Get\AlertsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Alerts\Get\AlertsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/alerts',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\SendGridSDK\\DTOs\\Alerts\\Error\\Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\SendGridSDK\\DTOs\\Alerts\\Error\\Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Alerts\\Post',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Alerts\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a new Alert
     *
     * **This endpoint allows you to create a new alert.**
     */
    public function post(?\SendGridSDK\PostParams\V3\Alerts $params = null): \SendGridSDK\Responses\V3\Alerts\Post
    {
        /** @var \SendGridSDK\Responses\V3\Alerts\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_ALERT_ID = [
        'method' => 'DELETE',
        'path' => '/v3/alerts/{alert_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
    ];

    /**
     * Delete an alert
     *
     * **This endpoint allows you to delete an alert.**
     */
    public function deleteByAlertId(int $alert_id, ?\SendGridSDK\DeleteParams\V3\Alerts\ByAlertId $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_ALERT_ID), path: ['alert_id' => $alert_id], parameters: $params);
        return;
    }

    private const array GET_BY_ALERT_ID = [
        'method' => 'GET',
        'path' => '/v3/alerts/{alert_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Alerts\\ByAlertId\\Get',
    ];

    /**
     * Retrieve a specific alert
     *
     * **This endpoint allows you to retrieve a specific alert.**
     */
    public function getByAlertId(int $alert_id, ?\SendGridSDK\GetParams\V3\Alerts\ByAlertId $params = null): \SendGridSDK\Responses\V3\Alerts\ByAlertId\Get
    {
        /** @var \SendGridSDK\Responses\V3\Alerts\ByAlertId\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ALERT_ID), path: ['alert_id' => $alert_id], parameters: $params);
        return $result;
    }

    private const array PATCH_BY_ALERT_ID = [
        'method' => 'PATCH',
        'path' => '/v3/alerts/{alert_id}',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Responses\\V3\\Alerts\\ByAlertId\\Patch',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Alerts\\ByAlertId\\Patch',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update an alert
     *
     * **This endpoint allows you to update an alert.**
     */
    public function patchByAlertId(int $alert_id, ?\SendGridSDK\PatchParams\V3\Alerts\ByAlertId $params = null): \SendGridSDK\Responses\V3\Alerts\ByAlertId\Patch
    {
        /** @var \SendGridSDK\Responses\V3\Alerts\ByAlertId\Patch $result */
        $result = $this->executeArguments(self::operation(self::PATCH_BY_ALERT_ID), path: ['alert_id' => $alert_id], parameters: $params);
        return $result;
    }
}
