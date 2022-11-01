<?php

namespace Hillel\Geo\Test;

/**
 * @package
 */
interface GeoServiceInterface
{
    /**
     * @return string|null
     */
    public function getIsoCode(): ?string;

    /**
     * @return string|null
     */
    public function getCountry(): ?string;

    /**
     * @param string $ip
     * @return void
     */
    public function parse(string $ip): void;
}