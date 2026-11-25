<?php

declare(strict_types=1);

namespace SendGridSDK\V3\AccessSettings;

final class Whitelist extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** DELETE /v3/access_settings/whitelist [operationId: DeleteAllowedIps] */
    /**
     * Remove one or more IPs from the allow list
     *
     * **This endpoint allows you to remove one or more IP addresses from your list of allowed addresses.**
     *
     * To remove one or more IP addresses, pass this endpoint an array containing the ID(s) associated with the IP(s) you intend to remove. You can retrieve the IDs associated with your allowed IP addresses using the "Retrieve a list of currently allowed IPs" endpoint.
     *
     * It is possible to remove your own IP address, which will block access to your account. You will need to submit a [support ticket](https://sendgrid.com/docs/ui/account-and-settings/support/) if this happens. For this reason, it is important to double check that you are removing only the IPs you intend to remove when using this endpoint.
     */
    public static function delete(?\SendGridSDK\DeleteParams\V3\AccessSettings\Whitelist $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\AccessSettings\Whitelist::class)->delete($params);
    }

    /** GET /v3/access_settings/whitelist [operationId: ListAllowedIp] */
    /**
     * Retrieve a list of currently allowed IPs
     *
     * **This endpoint allows you to retrieve a list of IP addresses that are currently allowed to access your account.**
     *
     * Each IP address returned to you will have `created_at` and `updated_at` dates. Each IP will also be associated with an `id` that can be used to remove the address from your allow list.
     */
    public static function get(?\SendGridSDK\GetParams\V3\AccessSettings\Whitelist $params = null): \SendGridSDK\DTOs\Ip\AccessManagement2Xx
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\AccessSettings\Whitelist::class)->get($params);
    }

    /** POST /v3/access_settings/whitelist [operationId: AddIpToAllowList] */
    /**
     * Add one or more IPs to the allow list
     *
     * **This endpoint allows you to add one or more allowed IP addresses.**
     *
     * To allow one or more IP addresses, pass them to this endpoint in an array. Once an IP address is added to your allow list, it will be assigned an `id` that can be used to remove the address. You can retrieve the ID associated with an IP using the "Retrieve a list of currently allowed IPs" endpoint.
     */
    public static function post(?\SendGridSDK\PostParams\V3\AccessSettings\Whitelist $params = null): \SendGridSDK\DTOs\Ip\AccessManagement2Xx
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\AccessSettings\Whitelist::class)->post($params);
    }

    /** DELETE /v3/access_settings/whitelist/{rule_id} [operationId: DeleteAllowedIp] */
    /**
     * Remove a specific IP from the allowed list
     *
     * **This endpoint allows you to remove a specific IP address from your list of allowed addresses.**
     *
     * When removing a specific IP address from your list, you must include the ID in your call.  You can retrieve the IDs associated with your allowed IP addresses using the "Retrieve a list of currently allowed IPs" endpoint.
     */
    public static function deleteByRuleId(string $rule_id, ?\SendGridSDK\DeleteParams\V3\AccessSettings\Whitelist\ByRuleId $params = null): void
    {
        self::client()->resource(\SendGridSDK\Resources\V3\AccessSettings\Whitelist::class)->deleteByRuleId($rule_id, $params);
    }

    /** GET /v3/access_settings/whitelist/{rule_id} [operationId: GetAllowedIp] */
    /**
     * Retrieve a specific allowed IP
     *
     * **This endpoint allows you to retreive a specific IP address that has been allowed to access your account.**
     *
     * You must include the ID for the specific IP address you want to retrieve in your call. You can retrieve the IDs associated with your allowed IP addresses using the "Retrieve a  list of currently allowed IPs" endpoint.
     */
    public static function getByRuleId(string $rule_id, ?\SendGridSDK\GetParams\V3\AccessSettings\Whitelist\ByRuleId $params = null): \SendGridSDK\DTOs\Ip\AccessManagement2Xx
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\AccessSettings\Whitelist::class)->getByRuleId($rule_id, $params);
    }
}
