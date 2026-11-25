<?php

declare(strict_types=1);

namespace SendGridSDK\V3;

final class VerifiedSenders extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/verified_senders [operationId: ListVerifiedSender] */
    /**
     * Get All Verified Senders
     *
     * **This endpoint allows you to retrieve all the Sender Identities associated with an account.**
     *
     * This endpoint will return both verified and unverified senders.
     *
     * You can limit the number of results returned using the `limit`, `lastSeenID`, and `id` query string parameters.
     *
     * * `limit` allows you to specify an exact number of Sender Identities to return.
     * * `lastSeenID` will return senders with an ID number occuring after the passed in ID. In other words, the `lastSeenID` provides a starting point from which SendGrid will iterate to find Sender Identities associated with your account.
     * * `id` will return information about only the Sender Identity passed in the request.
     */
    public static function get(?\SendGridSDK\GetParams\V3\VerifiedSenders $params = null): \SendGridSDK\Responses\V3\VerifiedSenders\Get
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\VerifiedSenders::class)->get($params);
    }

    /** POST /v3/verified_senders [operationId: CreateVerifiedSender] */
    /**
     * Create Verified Sender Request
     *
     * **This endpoint allows you to create a new Sender Identify**.
     *
     * Upon successful submission of a `POST` request to this endpoint, an identity will be created, and a verification email will be sent to the address assigned to the `from_email` field. You must complete the verification process using the sent email to fully verify the sender.
     *
     * If you need to resend the verification email, you can do so with the Resend Verified Sender Request, `/resend/{id}`, endpoint.
     *
     * If you need to authenticate a domain rather than a Single Sender, see the [Domain Authentication API](https://docs.sendgrid.com/api-reference/domain-authentication/authenticate-a-domain).
     */
    public static function post(?\SendGridSDK\DTOs\Verified\Sender\Request $payload = null): \SendGridSDK\DTOs\Verified\Sender\Response
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\SendGridSDK\Resources\V3\VerifiedSenders::class)->post();
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\VerifiedSenders::class)->post($payload);
    }

    /** DELETE /v3/verified_senders/{id} [operationId: DeleteVerifiedSender] */
    /**
     * Delete Verified Sender
     *
     * **This endpoint allows you to delete a Sender Identity**.
     *
     * Pass the `id` assigned to a Sender Identity to this endpoint to delete the Sender Identity from your account.
     *
     * You can retrieve the IDs associated with Sender Identities using the "Get All Verified Senders" endpoint.
     */
    public static function deleteById(string $id): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\VerifiedSenders::class)->deleteById($id);
    }

    /** PATCH /v3/verified_senders/{id} [operationId: UpdateVerifiedSender] */
    /**
     * Edit Verified Sender
     *
     * **This endpoint allows you to update an existing Sender Identity**.
     *
     * Pass the `id` assigned to a Sender Identity to this endpoint as a path parameter. Include any fields you wish to update in the request body in JSON format.
     *
     * You can retrieve the IDs associated with Sender Identities by passing a `GET` request to the Get All Verified Senders endpoint, `/verified_senders`.
     *
     * **Note:** Unlike a `PUT` request, `PATCH` allows you to update only the fields you wish to edit. Fields that are not passed as part of a request will remain unaltered.
     */
    public static function patchById(string $id, ?\SendGridSDK\DTOs\Verified\Sender\Request $payload = null): \SendGridSDK\DTOs\Verified\Sender\Response
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\VerifiedSenders::class)->patchById($id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\VerifiedSenders::class)->patchById($id, $payload);
    }
}
