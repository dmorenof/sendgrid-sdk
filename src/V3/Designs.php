<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class Designs extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/designs [operationId: ListDesign] */
    /**
     * List Designs
     *
     * **This endpoint allows you to retrieve a list of designs already stored in your Design Library**.
     *
     * A GET request to `/designs` will return a list of your existing designs. This endpoint will not return the pre-built Twilio SendGrid designs. Pre-built designs can be retrieved using the `/designs/pre-builts` endpoint, which is detailed below.
     *
     * By default, you will receive 100 results per request; however, you can modify the number of results returned by passing an integer to the `page_size` query parameter.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Designs $params = null): \SendGridSDK\Responses\V3\Designs\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Designs::class)->get($params);
    }

    /** POST /v3/designs [operationId: CreateDesign] */
    /**
     * Create Design
     *
     * **This endpoint allows you to create a new design**.
     *
     * You can add a new design by passing data, including a string of HTML email content, to `/designs`. When creating designs from scratch, be aware of the styling constraints inherent to many email clients. For a list of best practices, see our guide to [Cross-Platform Email Design](https://sendgrid.com/docs/ui/sending-email/cross-platform-html-design/).
     *
     * The Design Library can also convert your design’s HTML elements into drag and drop modules that are editable in the Designs Library user interface. For more, visit the [Design and Code Editor documentation](https://sendgrid.com/docs/ui/sending-email/editor/#drag--drop-markup).
     *
     * Because the `/designs` endpoint makes it easy to add designs, you can create a design with your preferred tooling or migrate designs you already own without relying on the Design Library UI.
     */
    public static function post(?\SendGridSDK\DTOs\Design\Input $payload = null): \SendGridSDK\DTOs\Design\Output
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Designs::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Designs::class)->post($payload);
    }

    /** DELETE /v3/designs/{id} [operationId: DeleteDesign] */
    /**
     * Delete Design
     *
     * **This endpoint allows you to delete a single design**.
     *
     * Be sure to check the ID of the design you intend to delete before making this request; deleting a design is a permanent action.
     */
    public static function deleteById(string $id): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Designs::class)->deleteById($id);
    }

    /** GET /v3/designs/{id} [operationId: GetDesign] */
    /**
     * Get Design
     *
     * **This endpoint allows you to retrieve a single design**.
     *
     * A GET request to `/designs/{id}` will retrieve details about a specific design in your Design Library.
     *
     * This endpoint is valuable when retrieving information stored in a field that you wish to update using a PATCH request.
     */
    public static function getById(string $id): \SendGridSDK\DTOs\Design\Output
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Designs::class)->getById($id);
    }

    /** PATCH /v3/designs/{id} [operationId: UpdateDesign] */
    /**
     * Update Design
     *
     * **This endpoint allows you to edit a design**.
     *
     * The Design API supports PATCH requests, which allow you to make partial updates to a single design. Passing data to a specific field will update only the data stored in that field; all other fields will be unaltered.
     *
     * For example, updating a design's name requires that you make a PATCH request to this endpoint with data specified for the `name` field only.
     *
     * ```
     * {
     *     "name": "<Updated Name>"
     * }
     * ```
     */
    public static function patchById(string $id, ?\SendGridSDK\Requests\V3\Designs\ById\Patch $payload = null): \SendGridSDK\DTOs\Design\Output
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Designs::class)->patchById($id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Designs::class)->patchById($id, $payload);
    }

    /** POST /v3/designs/{id} [operationId: DuplicateDesign] */
    /**
     * Duplicate Design
     *
     * **This endpoint allows you to duplicate one of your existing designs**.
     *
     * Modifying an existing design is often the easiest way to create something new.
     *
     * You are not required to pass any data in the body of a request to this endpoint. If you choose to leave the `name` field blank, your duplicate will be assigned the name of the design it was copied from with the text "Duplicate: " prepended to it. This name change is only a convenience, as the duplicate will be assigned a unique ID that differentiates it from your other designs.
     *
     * You can modify your duplicate’s name at the time of creation by passing an updated value to the `name` field when making the initial request.
     * More on retrieving design IDs can be found below.
     */
    public static function postById(string $id, ?\SendGridSDK\DTOs\Design\DuplicateInput $payload = null): \SendGridSDK\DTOs\Design\Output
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Designs::class)->postById($id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Designs::class)->postById($id, $payload);
    }
}
