<?php

declare(strict_types=1);

namespace Webgriffe\SyliusAkeneoPlugin;

use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;

interface ApiClientBridgeInterface extends ApiClientInterface, AkeneoPimClientInterface
{
}
