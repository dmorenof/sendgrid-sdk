<?php

declare(strict_types=1);

namespace SendGridSDK\V3\Subusers;

final class Reputations extends \SendGridSDK\TwilioSendGridV3APISDK
{
    /** GET /v3/subusers/reputations [operationId: ListReputation] */
    /**
     * Retrieve Subuser Reputations
     *
     * **This endpoint allows you to request the reputations for your subusers.**
     *
     * Subuser sender reputations give a good idea how well a sender is doing with regards to how recipients and recipient servers react to the mail that is being received. When a bounce, spam report, or other negative action happens on a sent email, it will affect your sender rating.  For Regional (EU) subusers, subuser reputation scores will not calculate accurately due to restrictions in place to maintain data residency.
     */
    public static function get(?\SendGridSDK\GetParams\V3\Subusers\Reputations $params = null): \SendGridSDK\Collections\V3\Subusers\Reputations\Get\SubusersReputationsCollection
    {
        return self::client()->resource(\SendGridSDK\Resources\V3\Subusers\Reputations::class)->get($params);
    }
}
