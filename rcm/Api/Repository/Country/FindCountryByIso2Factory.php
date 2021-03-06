<?php

namespace ZrcmsRcmCompatibility\Rcm\Api\Repository\Country;

use Interop\Container\ContainerInterface;
use Zrcms\Core\Api\Component\FindComponent;

/**
 * @deprecated BC ONLY
 */
class FindCountryByIso2Factory
{
    /**
     * @param ContainerInterface $serviceContainer
     *
     * @return FindCountryByIso2
     */
    public function __invoke(ContainerInterface $serviceContainer)
    {
        return new FindCountryByIso2(
            $serviceContainer->get(FindComponent::class)
        );
    }
}
