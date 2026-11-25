<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel\Domains;

final class Subuser extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/whitelabel/domains/subuser [operationId: DisassociateAuthenticatedDomainFromUser] */
    /**
     * Disassociate an authenticated domain from a given user.
     *
     * **This endpoint allows you to disassociate a specific authenticated domain from a subuser.**
     *
     * Authenticated domains can be associated with (i.e. assigned to) subusers from a parent account. This functionality allows subusers to send mail using their parent's domain. To associate an authenticated domain with a subuser, the parent account must first authenticate and validate the domain. The parent may then associate the authenticated domain via the subuser management tools.
     *
     *
     * Note that if you used the [`/v3/whitelabel/domains/{domain_id}/subuser:add` endpoint](https://www.twilio.com/docs/sendgrid/api-reference/domain-authentication/associate-an-authenticated-domain-with-a-subuser-multiple) to add multiple domains to the subuser, you should use the [`/v3/whitelabel/domains/{domain_id}/subuser` endpoint](https://www.twilio.com/docs/sendgrid/api-reference/domain-authentication/disassociate-an-authenticated-domain-from-a-subuser-multiple) to disassociate those domains.
     */
    public static function delete(?\SendGridSDK\DeleteParams\V3\Whitelabel\Domains\Subuser $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains\Subuser::class)->delete($params);
    }

    /** GET /v3/whitelabel/domains/subuser [operationId: ListAuthenticatedDomainWithUser] */
    /**
     * List the authenticated domain associated with the given user.
     *
     * **This endpoint allows you to retrieve all of the authenticated domains that have been assigned to a specific subuser.**
     *
     * Authenticated domains can be associated with (i.e. assigned to) subusers from a parent account. This functionality allows subusers to send mail using their parent's domain. To associate an authenticated domain with a subuser, the parent account must first authenticate and validate the domain. The parent may then associate the authenticated domain via the subuser management tools.
     *
     *
     * Note that if you used the [`/v3/whitelabel/domains/{domain_id}/subuser:add` endpoint]( https://www.twilio.com/docs/sendgrid/api-reference/domain-authentication/associate-an-authenticated-domain-with-a-subuser-multiple) to add multiple domains to the subuser, you can use the [`/v3/whitelabel/domains/subuser/all` endpoint](https://www.twilio.com/docs/sendgrid/api-reference/domain-authentication/list-the-authenticated-domain-associated-with-a-subuser-multiple) to list those associated domains.
     */
    public static function get(\SendGridSDK\GetParams\V3\Whitelabel\Domains\Subuser $params): \SendGridSDK\DTOs\AuthenticatedDomainSpf
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains\Subuser::class)->get($params);
    }
}
