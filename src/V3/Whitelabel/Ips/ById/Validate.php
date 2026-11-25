<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Whitelabel\Ips\ById;

final class Validate extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** POST /v3/whitelabel/ips/{id}/validate [operationId: ValidateReverseDns] */
    /**
     * Validate a reverse DNS record
     *
     * **This endpoint allows you to validate a reverse DNS record.**
     *
     * Always check the `valid` property of the response’s `validation_results.a_record` object. This field will indicate whether it was possible to validate the reverse DNS record. If the `validation_results.a_record.valid` is `false`, this indicates only that Twilio SendGrid could not determine the validity your reverse DNS record — it may still be valid.
     *
     * If validity couldn’t be determined, you can check the value of `validation_results.a_record.reason` to find out why.
     *
     * You can retrieve the IDs associated with all your reverse DNS records using the "Retrieve all reverse DNS records" endpoint.
     */
    public static function post(string $id, ?\SendGridSDK\PostParams\V3\Whitelabel\Ips\ById\Validate $params = null): \SendGridSDK\Responses\V3\Whitelabel\Ips\ById\Validate\Post
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Whitelabel\Ips\ById\Validate::class)->post($id, $params);
    }
}
