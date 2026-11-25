<?php

declare(strict_types=1);

namespace SendGridSDK\Requests\V3\Mail\Send\Post\PersonalizationsItem;

/**
 * Values that are specific to this personalization that will be carried along with the email and its activity data. Substitutions will not be made on custom arguments, so any string that is assigned to this property will be assumed to be the custom argument that you would like to be used. This field may not exceed 10,000 bytes.
 */
final class CustomArgsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array MODEL_VALIDATION = [
        'maxProperties' => 10000,
    ];
}
