<?php

declare(strict_types=1);

namespace SendGridSDK\Resources\V3\Subusers;

final class Reputations extends \SendGridSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/subusers/reputations',
        'security' => [
            [
                'BearerAuth' => [],
            ],
        ],
        'responseType' => '\\SendGridSDK\\Collections\\V3\\Subusers\\Reputations\\Get\\SubusersReputationsCollection',
    ];

    /**
     * Retrieve Subuser Reputations
     *
     * **This endpoint allows you to request the reputations for your subusers.**
     *
     * Subuser sender reputations give a good idea how well a sender is doing with regards to how recipients and recipient servers react to the mail that is being received. When a bounce, spam report, or other negative action happens on a sent email, it will affect your sender rating.  For Regional (EU) subusers, subuser reputation scores will not calculate accurately due to restrictions in place to maintain data residency.
     */
    public function get(?\SendGridSDK\GetParams\V3\Subusers\Reputations $params = null): \SendGridSDK\Collections\V3\Subusers\Reputations\Get\SubusersReputationsCollection
    {
        /** @var \SendGridSDK\Collections\V3\Subusers\Reputations\Get\SubusersReputationsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
