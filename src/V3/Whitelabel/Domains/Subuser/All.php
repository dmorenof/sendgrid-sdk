<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel\Domains\Subuser;

final class All extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/whitelabel/domains/subuser/all [operationId: ListAllAuthenticatedDomainWithUser] */
    /**
     * List all the authenticated domains associated with the given user.
     *
     * **This endpoint allows you to retrieve all of the authenticated domains that have been assigned to a specific subuser.**
     *
     *
     * This functionality allows subusers to send mail using their parent's domain. Authenticated domains can be associated with (i.e. assigned to) subusers from a parent account, and a subuser can have up to five associated domains.
     *
     * To associate an authenticated domain with a subuser, the parent account must first authenticate and validate the domain. The parent may then associate the authenticated domain via the subuser management tools.
     *
     *
     * When selecting a domain to send email from, SendGrid checks for domains in the following order and chooses the first one that appears in the hierarchy:
     * 1. Domain assigned by the subuser that matches the email's `From` address domain.
     * 2. The subuser's default domain.
     * 3. Domain assigned by the parent user that matches the `From` address domain.
     * 4. Parent user's default domain.
     * 5. sendgrid.net
     */
    public static function get(\SendGridSDK\GetParams\V3\Whitelabel\Domains\Subuser\All $params): \SendGridSDK\Collections\V3\Whitelabel\Domains\Subuser\All\Get\DomainsSubuserCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains\Subuser\All::class)->get($params);
    }
}
