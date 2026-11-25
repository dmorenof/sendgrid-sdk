<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing;

final class Singlesends extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/marketing/singlesends [operationId: DeleteSingleSends] */
    /**
     * Bulk Delete Single Sends
     *
     * **This endpoint allows you to delete multiple Single Sends using an array of Single Sends IDs.**
     *
     * To first retrieve all your Single Sends' IDs, you can make a GET request to the `/marketing/singlensends` endpoint.
     *
     * Please note that a DELETE request is permanent, and your Single Sends will not be recoverable after deletion.
     */
    public static function delete(?\SendGridSDK\DeleteParams\V3\Marketing\Singlesends $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends::class)->delete($params);
    }

    /** GET /v3/marketing/singlesends [operationId: ListSingleSend] */
    /**
     * Get All Single Sends
     *
     * **This endpoint allows you to retrieve all your Single Sends.**
     *
     * Returns all of your Single Sends with condensed details about each, including the Single Sends' IDs. For more details about an individual Single Send, pass the Single Send's ID to the `/marketing/singlesends/{id}` endpoint.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Marketing\Singlesends $params = null): \SendGridSDK\Responses\V3\Marketing\Singlesends\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends::class)->get($params);
    }

    /** POST /v3/marketing/singlesends [operationId: CreateSingleSend] */
    /**
     * Create Single Send
     *
     * **This endpoint allows you to create a new Single Send.**
     *
     * Please note that if you are migrating from the previous version of Single Sends, you no longer need to pass a template ID with your request to this endpoint. Instead, you will pass all template data in the `email_config` object.
     *
     * This endpoint will create a draft of the Single Send but will not send it or schedule it to be sent. Any `send_at` property value set with this endpoint will prepopulate the Single Send's send date. However, the Single Send will remain an unscheduled draft until it's updated with the [**Schedule Single Send**](https://docs.sendgrid.com/api-reference/single-sends/schedule-single-send) endpoint or SendGrid application UI.
     */
    public static function post(?\SendGridSDK\DTOs\Singlesend\Request $payload = null): \SendGridSDK\DTOs\Singlesend\Response
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends::class)->post($payload);
    }

    /** DELETE /v3/marketing/singlesends/{id} [operationId: DeleteSingleSend] */
    /**
     * Delete Single Send by ID
     *
     * **This endpoint allows you to delete one Single Send using a Single Send ID.**
     *
     * To first retrieve all your Single Sends' IDs, you can make a GET request to the `/marketing/singlensends` endpoint.
     *
     * Please note that a `DELETE` request is permanent, and your Single Send will not be recoverable after deletion.
     */
    public static function deleteById(string $id): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends::class)->deleteById($id);
    }

    /** GET /v3/marketing/singlesends/{id} [operationId: GetSingleSend] */
    /**
     * Get Single Send by ID
     *
     * **This endpoint allows you to retrieve details about one Single Send using a Single Send ID.**
     *
     * You can retrieve all of your Single Sends by making a GET request to the `/marketing/singlesends` endpoint.
     */
    public static function getById(string $id): \SendGridSDK\DTOs\Singlesend\Response
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends::class)->getById($id);
    }

    /** PATCH /v3/marketing/singlesends/{id} [operationId: UpdateSingleSend] */
    /**
     * Update Single Send
     *
     * **This endpoint allows you to update a Single Send using a Single Send ID.**
     *
     * You only need to pass the properties you want to update. Any blank or missing properties will remain unaltered.
     *
     * This endpoint will update a draft of the Single Send but will not send it or schedule it to be sent. Any `send_at` property value set with this endpoint will prepopulate the Single Send's send date. However, the Single Send will remain an unscheduled draft until it's updated with the [**Schedule Single Send**](https://docs.sendgrid.com/api-reference/single-sends/schedule-single-send) endpoint or SendGrid application UI.
     */
    public static function patchById(string $id, ?\SendGridSDK\DTOs\Singlesend\Request $payload = null): \SendGridSDK\DTOs\Singlesend\Response
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends::class)->patchById($id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends::class)->patchById($id, $payload);
    }

    /** POST /v3/marketing/singlesends/{id} [operationId: DuplicateSingleSend] */
    /**
     * Duplicate Single Send
     *
     * **This endpoint allows you to duplicate an existing Single Send using its Single Send ID.**
     *
     * Duplicating a Single Send is useful when you want to create a Single Send but don't want to start from scratch. Once duplicated, you can update or edit the Single Send by making a PATCH request to the `/marketing/singlesends/{id}` endpoint.
     *
     * If you leave the `name` field blank, your duplicate will be assigned the name of the Single Send it was copied from with the text “Copy of ” prepended to it. The `name` field length is limited to 100 characters, so the end of the new Single Send name, including “Copy of ”, will be trimmed if the name exceeds this limit.
     */
    public static function postById(string $id, ?\SendGridSDK\Requests\V3\Marketing\Singlesends\ById\Post $payload = null): \SendGridSDK\DTOs\Singlesend\Response
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends::class)->postById($id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Singlesends::class)->postById($id, $payload);
    }
}
