<?php

declare(strict_types=1);

namespace Webgriffe\SyliusAkeneoPlugin;

use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;
use Webgriffe\SyliusAkeneoPlugin\AttributeOptions\ApiClientInterface as AttributeOptionsApiClientInterface;

interface ApiClientBridgeInterface extends ApiClientInterface, AttributeOptionsApiClientInterface, AkeneoPimClientInterface
{
}
