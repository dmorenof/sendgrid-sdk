<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Designs;

final class PreBuilts extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/designs/pre-builts [operationId: ListPreBuiltDesign] */
    /**
     * List SendGrid Pre-built Designs
     *
     * **This endpoint allows you to retrieve a list of pre-built designs provided by Twilio SendGrid**.
     *
     * Unlike the `/designs` endpoint where *your* designs are stored, a GET request made to `designs/pre-builts` will retrieve a list of the pre-built Twilio SendGrid designs. This endpoint will not return the designs stored in your Design Library.
     *
     * By default, you will receive 100 results per request; however, you can modify the number of results returned by passing an integer to the `page_size` query parameter.
     *
     * This endpoint is useful for retrieving the IDs of Twilio SendGrid designs that you want to duplicate and modify.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Designs\PreBuilts $params = null): \SendGridSDK\Responses\V3\Designs\PreBuilts\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Designs\PreBuilts::class)->get($params);
    }

    /** GET /v3/designs/pre-builts/{id} [operationId: GetPreBuiltDesign] */
    /**
     * Get SendGrid Pre-built Design
     *
     * **This endpoint allows you to retrieve a single pre-built design**.
     *
     * A GET request to `/designs/pre-builts/{id}` will retrieve details about a specific pre-built design.
     *
     * This endpoint is valuable when retrieving details about a pre-built design that you wish to duplicate and modify.
     */
    public static function getById(string $id): \SendGridSDK\DTOs\Design\Output
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Designs\PreBuilts::class)->getById($id);
    }

    /** POST /v3/designs/pre-builts/{id} [operationId: DuplicatePreBuiltDesign] */
    /**
     * Duplicate SendGrid Pre-built Design
     *
     * **This endpoint allows you to duplicate one of the pre-built Twilio SendGrid designs**.
     *
     * Like duplicating one of your existing designs, you are not required to pass any data in the body of a request to this endpoint. If you choose to leave the `name` field blank, your duplicate will be assigned the name of the design it was copied from with the text "Duplicate: " prepended to it. This name change is only a convenience, as the duplicate design will be assigned a unique ID that differentiates it from your other designs. You can retrieve the IDs for Twilio SendGrid pre-built designs using the "List SendGrid Pre-built Designs" endpoint.
     *
     * You can modify your duplicate’s name at the time of creation by passing an updated value to the `name` field when making the initial request.
     * More on retrieving design IDs can be found above.
     */
    public static function postById(string $id, ?\SendGridSDK\DTOs\Design\DuplicateInput $payload = null): \SendGridSDK\DTOs\Design\Output
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Designs\PreBuilts::class)->postById($id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Designs\PreBuilts::class)->postById($id, $payload);
    }
}
