<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class Alerts extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/alerts [operationId: ListAlert] */
    /**
     * Retrieve all alerts
     *
     * **This endpoint allows you to retrieve all of your alerts.**
     */
    public static function get(?\SendGridSDK\GetParams\V3\Alerts $params = null): \SendGridSDK\Collections\V3\Alerts\Get\AlertsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Alerts::class)->get($params);
    }

    /** POST /v3/alerts [operationId: CreateAlert] */
    /**
     * Create a new Alert
     *
     * **This endpoint allows you to create a new alert.**
     */
    public static function post(?\SendGridSDK\PostParams\V3\Alerts $params = null): \SendGridSDK\Responses\V3\Alerts\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Alerts::class)->post($params);
    }

    /** DELETE /v3/alerts/{alert_id} [operationId: DeleteAlert] */
    /**
     * Delete an alert
     *
     * **This endpoint allows you to delete an alert.**
     */
    public static function deleteByAlertId(int $alert_id, ?\SendGridSDK\DeleteParams\V3\Alerts\ByAlertId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Alerts::class)->deleteByAlertId($alert_id, $params);
    }

    /** GET /v3/alerts/{alert_id} [operationId: GetAlert] */
    /**
     * Retrieve a specific alert
     *
     * **This endpoint allows you to retrieve a specific alert.**
     */
    public static function getByAlertId(int $alert_id, ?\SendGridSDK\GetParams\V3\Alerts\ByAlertId $params = null): \SendGridSDK\Responses\V3\Alerts\ByAlertId\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Alerts::class)->getByAlertId($alert_id, $params);
    }

    /** PATCH /v3/alerts/{alert_id} [operationId: UpdateAlert] */
    /**
     * Update an alert
     *
     * **This endpoint allows you to update an alert.**
     */
    public static function patchByAlertId(int $alert_id, ?\SendGridSDK\PatchParams\V3\Alerts\ByAlertId $params = null): \SendGridSDK\Responses\V3\Alerts\ByAlertId\Patch
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Alerts::class)->patchByAlertId($alert_id, $params);
    }
}
