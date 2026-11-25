<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Whitelabel\Domains\ByDomainId;

final class SubuserAdd extends \SendGridSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/whitelabel/domains/{domain_id}/subuser:add',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'responseType' => '\\SendGridSDK\\DTOs\\AuthenticatedDomainSpf',
        'requestBody' => [
            'type' => '\\SendGridSDK\\Requests\\V3\\Whitelabel\\Domains\\ByDomainId\\SubuserAdd\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Associate an authenticated domain with a given user, for up to five domains.
     *
     * **This endpoint allows you to associate a specific authenticated domain with a subuser. It can be used to associate up to five authenticated domains.**
     *
     *
     * This functionality allows subusers to send mail using their parent's domain. Authenticated domains can be associated with (i.e. assigned to) subusers from a parent account. To associate an authenticated domain with a subuser, the parent account must first authenticate and validate the domain. The parent may then associate the authenticated domain via the subuser management tools.
     *
     *
     * A subuser can have up to five associated authenticated domains. To see the domains that have already been associated with this user, you can [use the API to list the domains currently associated with the subuser](https://www.twilio.com/docs/sendgrid/api-reference/domain-authentication/list-the-authenticated-domain-associated-with-a-subuser-multiple).
     *
     *
     * When selecting a domain to send email from, SendGrid checks for domains in the following order and chooses the first one that appears in the hierarchy:
     * 1. Domain assigned by the subuser that matches the email's `From` address domain.
     * 2. The subuser's default domain.
     * 3. Domain assigned by the parent user that matches the `From` address domain.
     * 4. Parent user's default domain.
     * 5. sendgrid.net
     */
    public function post(int $domain_id, ?\SendGridSDK\Requests\V3\Whitelabel\Domains\ByDomainId\SubuserAdd\Post $payload = null): \SendGridSDK\DTOs\AuthenticatedDomainSpf
    {
        /** @var \SendGridSDK\DTOs\AuthenticatedDomainSpf $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['domain_id' => $domain_id]) : $this->executeArguments(self::operation(self::POST), path: ['domain_id' => $domain_id]);
        return $result;
    }
}
