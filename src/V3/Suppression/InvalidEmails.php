<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Suppression;

final class InvalidEmails extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/suppression/invalid_emails [operationId: DeleteInvalidEmails] */
    /**
     * Delete invalid emails
     *
     * **This endpoint allows you to remove email addresses from your invalid email address list.**
     *
     * There are two options for deleting invalid email addresses:
     *
     * 1) You can delete all invalid email addresses by setting `delete_all` to true in the request body.
     * 2) You can delete some invalid email addresses by specifying certain addresses in an array in the request body.
     */
    public static function delete(?\SendGridSDK\DeleteParams\V3\Suppression\InvalidEmails $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Suppression\InvalidEmails::class)->delete($params);
    }

    /** GET /v3/suppression/invalid_emails [operationId: ListInvalidEmail] */
    /**
     * Retrieve all invalid emails
     *
     * **This endpoint allows you to retrieve a paginated list of all invalid email addresses.**
     *
     * You can use the `limit` query parameter to set the page size. If your list contains more items than the page size permits, you can make multiple requests. Use the `offset` query parameter to control the position in the list from which to start retrieving additional items.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Suppression\InvalidEmails $params = null): \SendGridSDK\Collections\V3\Suppression\InvalidEmails\Get\SuppressionInvalidEmailsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Suppression\InvalidEmails::class)->get($params);
    }

    /** DELETE /v3/suppression/invalid_emails/{email} [operationId: DeleteInvalidEmail] */
    /**
     * Delete a specific invalid email
     *
     * **This endpoint allows you to remove a specific email address from the invalid email address list.**
     */
    public static function deleteByEmail(string $email, ?\SendGridSDK\DeleteParams\V3\Suppression\InvalidEmails\ByEmail $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Suppression\InvalidEmails::class)->deleteByEmail($email, $params);
    }

    /** GET /v3/suppression/invalid_emails/{email} [operationId: GetInvalidEmail] */
    /**
     * Retrieve a specific invalid email
     *
     * **This endpoint allows you to retrieve a specific invalid email addresses.**
     */
    public static function getByEmail(string $email, ?\SendGridSDK\GetParams\V3\Suppression\InvalidEmails\ByEmail $params = null): \SendGridSDK\Collections\V3\Suppression\InvalidEmails\Get\SuppressionInvalidEmailsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Suppression\InvalidEmails::class)->getByEmail($email, $params);
    }
}
