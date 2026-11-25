<?php

declare(strict_types=1);

namespace SendGridSDK\Collections;

final class RecipientBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SendGridSDK\Requests\RecipientBodyRequest::class;
}
