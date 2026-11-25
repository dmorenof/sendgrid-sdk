<?php

declare(strict_types=1);

namespace SendGridSDK\Collections\AddRecipientBodyArray;

final class RecipientBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Requests\AddRecipientBodyItem\RecipientBodyRequest::class;
}
