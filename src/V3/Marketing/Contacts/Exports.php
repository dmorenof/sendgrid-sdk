<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Contacts;

final class Exports extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/marketing/contacts/exports [operationId: ListExportContact] */
    /**
     * Get All Existing Exports
     *
     * **Use this endpoint to retrieve details of all current exported jobs**.
     *
     * It will return an array of objects, each of which records an export job in flight or recently completed.
     *
     * Each object's `export_type` field will tell you which kind of export it is and its `status` field will indicate what stage of processing it has reached. Exports which are `ready` will be accompanied by a `urls` field which lists the URLs of the export's downloadable files — there will be more than one if you specified a maximum file size in your initial export request.
     *
     * Use this endpoint if you have exports in flight but do not know their IDs, which are required for the "Export Contacts Status" endpoint.
     */
    public static function get(): \SendGridSDK\Responses\V3\Marketing\Contacts\Exports\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Contacts\Exports::class)->get();
    }

    /** POST /v3/marketing/contacts/exports [operationId: ExportContact] */
    /**
     * Export Contacts
     *
     * **Use this endpoint to export lists or segments of contacts**.
     *
     * If you would just like to have a link to the exported list sent to your email set the `notifications.email` option to `true` in the `POST` payload.
     *
     * If you would like to download the list, take the `id` that is returned and use the "Export Contacts Status" endpoint to get the `urls`. Once you have the list of URLs, make a `GET` request to each URL provided to download your CSV file(s).
     *
     * You specify the segments and or/contact lists you wish to export by providing the relevant IDs in, respectively, the `segment_ids` and `list_ids` fields in the request body.
     *
     * The lists will be provided in either JSON or CSV files. To specify which of these you would required, set the request body `file_type` field to `json` or `csv`.
     *
     * You can also specify a maximum file size (in MB). If the export file is larger than this, it will be split into multiple files.
     */
    public static function post(?\SendGridSDK\Requests\V3\Marketing\Contacts\Exports\Post $payload = null): \SendGridSDK\Responses\V3\Marketing\Contacts\Exports\Post
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Contacts\Exports::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Contacts\Exports::class)->post($payload);
    }

    /** GET /v3/marketing/contacts/exports/{id} [operationId: GetExportContact] */
    /**
     * Export Contacts Status
     *
     * **This endpoint can be used to check the status of a contact export job**.
     *
     * To use this call, you will need the `id` from the "Export Contacts" call.
     *
     * If you would like to download a list, take the `id` that is returned from the "Export Contacts" endpoint and make an API request here to get the `urls`. Once you have the list of URLs, make a `GET` request on each URL to download your CSV file(s).
     *
     * Twilio SendGrid recommends exporting your contacts regularly as a backup to avoid issues or lost data.
     */
    public static function getById(string $id): \SendGridSDK\DTOs\Contact\Export
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Contacts\Exports::class)->getById($id);
    }
}
