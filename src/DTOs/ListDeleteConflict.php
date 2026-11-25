<?php

declare(strict_types=1);

namespace SendGridSDK\DTOs;

/**
 * list_delete_conflict
 *
 * Returned when a list cannot be deleted. A single error is returned however many kinds of resource are using the list.
 * Example: {"errors":[{"field":"list_id","message":"List cannot be deleted because it is used by other resources.","resources":[{"type":"automation","ids":["05d032b4-350c-4b79-9e66-03ae1f844d90"]},{"type":"form","ids":["817407ee-929f-11f1-88ab-5aa0a2f938db"]}]}]}
 */
final class ListDeleteConflict extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
    ];

    public \SendGridSDK\Collections\ListDeleteConflict\ErrorsCollection $errors;
}
