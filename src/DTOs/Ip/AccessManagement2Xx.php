<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs\Ip;

/**
 * IP Access Response
 * Example: {"result":[{"id":1,"ip":"192.168.1.1/32","created_at":1441824715,"updated_at":1441824715},{"id":2,"ip":"192.0.0.0/8","created_at":1441824715,"updated_at":1441824715},{"id":3,"ip":"192.168.1.3/32","created_at":1441824715,"updated_at":1441824715}]}
 */
final class AccessManagement2Xx extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * An array listing one or more of your allowed IPs.
     */
    public \SendGridSDK\Collections\Ip\AccessManagement2Xx\ResultCollection $result;
}
