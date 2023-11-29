<?php

namespace Harness;

use Exception;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use OpenAPI\Client\Api\ClientApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\AuthenticationRequest;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Model\Target;
use GuzzleHttp\Client as HttpClient;
use Psr\Log\LogLevel;
use GuzzleHttp\HandlerStack;
use GuzzleLogMiddleware\LogMiddleware;

class Test 
{
    protected string $_accountID;
    protected string $_sdkInfo;
    protected int $_cluster = 1;
}