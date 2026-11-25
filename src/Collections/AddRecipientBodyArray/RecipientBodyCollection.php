<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\AddRecipientBodyArray;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SendGridSDK\Requests\AddRecipientBodyItem\RecipientBodyRequest> */
final class RecipientBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Requests\AddRecipientBodyItem\RecipientBodyRequest::class;
}
