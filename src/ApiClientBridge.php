<?php

declare(strict_types=1);

namespace Webgriffe\SyliusAkeneoPlugin;

use Akeneo\Pim\ApiClient\AkeneoPimClientInterface;
use Akeneo\Pim\ApiClient\Api\AssociationTypeApiInterface;
use Akeneo\Pim\ApiClient\Api\AttributeApiInterface;
use Akeneo\Pim\ApiClient\Api\AttributeGroupApiInterface;
use Akeneo\Pim\ApiClient\Api\AttributeOptionApiInterface;
use Akeneo\Pim\ApiClient\Api\CategoryApiInterface;
use Akeneo\Pim\ApiClient\Api\ChannelApiInterface;
use Akeneo\Pim\ApiClient\Api\CurrencyApiInterface;
use Akeneo\Pim\ApiClient\Api\FamilyApiInterface;
use Akeneo\Pim\ApiClient\Api\FamilyVariantApiInterface;
use Akeneo\Pim\ApiClient\Api\LocaleApiInterface;
use Akeneo\Pim\ApiClient\Api\MeasureFamilyApiInterface;
use Akeneo\Pim\ApiClient\Api\MeasurementFamilyApiInterface;
use Akeneo\Pim\ApiClient\Api\MediaFileApiInterface;
use Akeneo\Pim\ApiClient\Api\ProductApiInterface;
use Akeneo\Pim\ApiClient\Api\ProductModelApiInterface;
use Webgriffe\SyliusAkeneoPlugin\AttributeOptions\ApiClientInterface as AttributeOptionsApiClientInterface;

final class ApiClientBridge implements ApiClientBridgeInterface
{
    /**
     * @var ApiClientInterface&AttributeOptionsApiClientInterface
     */
    private $apiClient;
    /**
     * @var AkeneoPimClientInterface
     */
    private $akeneoPimClient;

    /**
     * @param ApiClientInterface&AttributeOptionsApiClientInterface $apiClient
     */
    public function __construct($apiClient, AkeneoPimClientInterface $akeneoPimClient)
    {
        $this->apiClient = $apiClient;
        $this->akeneoPimClient = $akeneoPimClient;
    }

    public function getToken(): ?string
    {
        return $this->akeneoPimClient->getToken();
    }

    public function getRefreshToken(): ?string
    {
        return $this->akeneoPimClient->getRefreshToken();
    }

    public function getProductApi(): ProductApiInterface
    {
        return $this->akeneoPimClient->getProductApi();
    }

    public function getCategoryApi(): CategoryApiInterface
    {
        return $this->akeneoPimClient->getCategoryApi();
    }

    public function getAttributeApi(): AttributeApiInterface
    {
        return $this->akeneoPimClient->getAttributeApi();
    }

    public function getAttributeOptionApi(): AttributeOptionApiInterface
    {
        return $this->akeneoPimClient->getAttributeOptionApi();
    }

    public function getAttributeGroupApi(): AttributeGroupApiInterface
    {
        return $this->akeneoPimClient->getAttributeGroupApi();
    }

    public function getFamilyApi(): FamilyApiInterface
    {
        return $this->akeneoPimClient->getFamilyApi();
    }

    public function getProductMediaFileApi(): MediaFileApiInterface
    {
        return $this->akeneoPimClient->getProductMediaFileApi();
    }

    public function getLocaleApi(): LocaleApiInterface
    {
        return $this->akeneoPimClient->getLocaleApi();
    }

    public function getChannelApi(): ChannelApiInterface
    {
        return $this->akeneoPimClient->getChannelApi();
    }

    public function getCurrencyApi(): CurrencyApiInterface
    {
        return $this->akeneoPimClient->getCurrencyApi();
    }

    public function getMeasureFamilyApi(): MeasureFamilyApiInterface
    {
        return $this->akeneoPimClient->getMeasureFamilyApi();
    }

    public function getMeasurementFamilyApi(): MeasurementFamilyApiInterface
    {
        return $this->akeneoPimClient->getMeasurementFamilyApi();
    }

    public function getAssociationTypeApi(): AssociationTypeApiInterface
    {
        return $this->akeneoPimClient->getAssociationTypeApi();
    }

    public function getFamilyVariantApi(): FamilyVariantApiInterface
    {
        return $this->akeneoPimClient->getFamilyVariantApi();
    }

    public function getProductModelApi(): ProductModelApiInterface
    {
        return $this->akeneoPimClient->getProductModelApi();
    }

    public function findProductModel(string $code): ?array
    {
        return $this->apiClient->findProductModel($code);
    }

    public function findFamilyVariant(string $familyCode, string $familyVariantCode): ?array
    {
        return $this->apiClient->findFamilyVariant($familyCode, $familyVariantCode);
    }

    public function findAttribute(string $code): ?array
    {
        return $this->apiClient->findAttribute($code);
    }

    public function findProduct(string $code): ?array
    {
        return $this->apiClient->findProduct($code);
    }

    public function downloadFile(string $code): \SplFileInfo
    {
        return $this->apiClient->downloadFile($code);
    }

    public function findAttributeOption(string $attributeCode, string $optionCode): ?array
    {
        return $this->apiClient->findAttributeOption($attributeCode, $optionCode);
    }

    public function findProductsModifiedSince(\DateTime $date): array
    {
        return $this->apiClient->findProductsModifiedSince($date);
    }

    public function findAllAttributeOptions(string $attributeCode): array
    {
        return $this->apiClient->findAllAttributeOptions($attributeCode);
    }

    public function findAllAttributes(): array
    {
        return $this->apiClient->findAllAttributes();
    }
}
