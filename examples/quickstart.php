<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Dmorenof\SdkRuntime\Security\SecurityCredentials;
use SendGridSDK\Configuration;
use SendGridSDK\TwilioSendGridV3APISDK;
use SendGridSDK\V3\ApiKeys;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['BearerAuth' => getenv('SENDGRID_API_KEY') ?: '']);
TwilioSendGridV3APISDK::configure($configuration);

$keys = ApiKeys::get();

echo json_encode($keys), "\n";
