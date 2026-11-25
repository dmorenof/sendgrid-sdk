<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Whitelabel\Domains\ByDomainId;

final class Subuser extends \SendGridSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/whitelabel/domains/{domain_id}/subuser',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
    ];

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
    public function delete(int $domain_id, ?\SendGridSDK\DeleteParams\V3\Whitelabel\Domains\ByDomainId\Subuser $params = null): void
    {
        $this->executeArguments(self::operation(self::DELETE), path: ['domain_id' => $domain_id], parameters: $params);
        return;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/whitelabel/domains/{domain_id}/subuser',
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
            'type' => '\\SendGridSDK\\Requests\\V3\\Whitelabel\\Domains\\ByDomainId\\Subuser\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Associate an authenticated domain with a given user.
     *
     * **This endpoint allows you to associate a specific authenticated domain with a subuser.**
     * Authenticated domains can be associated with (i.e. assigned to) subusers from a parent account. This functionality allows subusers to send mail using their parent's domain. To associate an authenticated domain with a subuser, the parent account must first authenticate and validate the domain. The parent may then associate the authenticated domain via the subuser management tools.
     *
     *
     * [You can associate more than one domain with a subuser using the `v3/whitelabel/domains/{domain_id}/subuser:add` endpoint](https://www.twilio.com/docs/sendgrid/api-reference/domain-authentication/associate-an-authenticated-domain-with-a-subuser-multiple).
     */
    public function post(int $domain_id, ?\SendGridSDK\Requests\V3\Whitelabel\Domains\ByDomainId\Subuser\Post $payload = null): \SendGridSDK\DTOs\AuthenticatedDomainSpf
    {
        /** @var \SendGridSDK\DTOs\AuthenticatedDomainSpf $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['domain_id' => $domain_id]) : $this->executeArguments(self::operation(self::POST), path: ['domain_id' => $domain_id]);
        return $result;
    }
}
