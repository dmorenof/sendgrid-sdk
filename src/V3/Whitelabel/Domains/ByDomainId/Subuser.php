<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel\Domains\ByDomainId;

final class Subuser extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/whitelabel/domains/{domain_id}/subuser [operationId: DisassociateSubuserFromDomain] */
    /**
     * Disassociate an authenticated domain from a given user for users with up to five associated domains.
     *
     * **This endpoint allows you to disassociate a specific authenticated domain from a subuser, for users with up to five associated domains.**
     *
     *
     * This functionality allows subusers to send mail using their parent's domain. Authenticated domains can be associated with (i.e. assigned to) subusers kknt, and a subuser can have up to five associated authenticated domains.
     *
     * You can dissociate an authenticated domain from any subuser that has one or more authenticated domains using this endpoint.
     */
    public static function delete(int $domain_id, ?\SendGridSDK\DeleteParams\V3\Whitelabel\Domains\ByDomainId\Subuser $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains\ByDomainId\Subuser::class)->delete($domain_id, $params);
    }

    /** POST /v3/whitelabel/domains/{domain_id}/subuser [operationId: AssociateSubuserWithDomain] */
    /**
     * Associate an authenticated domain with a given user.
     *
     * **This endpoint allows you to associate a specific authenticated domain with a subuser.**
     * Authenticated domains can be associated with (i.e. assigned to) subusers from a parent account. This functionality allows subusers to send mail using their parent's domain. To associate an authenticated domain with a subuser, the parent account must first authenticate and validate the domain. The parent may then associate the authenticated domain via the subuser management tools.
     *
     *
     * [You can associate more than one domain with a subuser using the `v3/whitelabel/domains/{domain_id}/subuser:add` endpoint](https://www.twilio.com/docs/sendgrid/api-reference/domain-authentication/associate-an-authenticated-domain-with-a-subuser-multiple).
     */
    public static function post(int $domain_id, ?\SendGridSDK\Requests\V3\Whitelabel\Domains\ByDomainId\Subuser\Post $payload = null): \SendGridSDK\DTOs\AuthenticatedDomainSpf
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains\ByDomainId\Subuser::class)->post($domain_id);
        }
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Domains\ByDomainId\Subuser::class)->post($domain_id, $payload);
    }
}
