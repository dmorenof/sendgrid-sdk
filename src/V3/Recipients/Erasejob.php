<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Recipients;

final class Erasejob extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/recipients/erasejob [operationId: EraseRecipientEmailData] */
    /**
     * Erase recipients' email data
     *
     * **This operation allows you to delete your recipients' personal email data**
     *
     * The Delete Recipients' Email Data operation accepts a list of 5,000 `email_addresses` or a total payload size of 256Kb per request, whichever comes first. Upon a successful request with this operation, SendGrid will run a search on the email addresses provided against the SendGrid system to identify matches. SendGrid will then delete all personal data associated with the matched users such as the recipients' names, email addresses, subject lines, categories, and IP addresses.
     *
     * This endpoint is rate limited to 100 requests per minute. If more requests need to be made, consider using the batch option to include multiple email addresses in each request (up to 5,000 addresses per request).
     *
     * All email addresses are filtered for uniqueness and tested for structural validity—any invalid addresses will be returned in an error response.
     *
     * Please note that recipient data is deleted for the account making the request only—deletions do not cascade from a parent account to its Subusers' recipients. To delete a Subuser's recipients' data, you can use the `on-behalf-of` header.
     */
    public static function post(\SendGridSDK\PostParams\V3\Recipients\Erasejob $params): \SendGridSDK\DTOs\RecipientsDataErasure\JobId
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Recipients\Erasejob::class)->post($params);
    }
}
