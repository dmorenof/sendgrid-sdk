<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Marketing\Contacts\ByContactId;

final class Identifiers extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/marketing/contacts/{contact_id}/identifiers [operationId: DeleteContactIdentifier] */
    /**
     * Delete a Contact Identifier
     *
     * **This endpoint can be used to delete one identifier from a contact.**
     *
     * Deletion jobs are processed asynchronously.
     *
     * Note this is different from deleting a contact. If the contact has only one identifier, the asynchronous request will fail. All contacts are required to have at least one identifier.
     *
     * The request body field `identifier_type` must have a valid value of "EMAIL", "PHONENUMBERID", "EXTERNALID", or "ANONYMOUSID".
     *
     */
    public static function delete(string $contact_id, ?\SendGridSDK\Requests\V3\Marketing\Contacts\ByContactId\Identifiers\Delete $payload = null): \SendGridSDK\Responses\V3\Marketing\Contacts\ByContactId\Identifiers\Delete
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Contacts\ByContactId\Identifiers::class)->delete($contact_id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Marketing\Contacts\ByContactId\Identifiers::class)->delete($contact_id, $payload);
    }
}
