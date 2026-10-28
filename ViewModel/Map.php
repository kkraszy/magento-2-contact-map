<?php

declare(strict_types=1);

namespace Kkkonrad\ContactMap\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\ScopeInterface;

class Map implements ArgumentInterface
{
    public function __construct(private readonly ScopeConfigInterface $scopeConfig)
    {
    }

    /**
     * @return float[]|null [lat, lng], or null when the point is not set
     */
    public function getPoint(): ?array
    {
        $lat = $this->scopeConfig->getValue('contact/map/latitude', ScopeInterface::SCOPE_STORE);
        $lng = $this->scopeConfig->getValue('contact/map/longitude', ScopeInterface::SCOPE_STORE);
        if (!is_numeric($lat) || !is_numeric($lng) || abs((float)$lat) > 90 || abs((float)$lng) > 180) {
            return null;
        }
        return [(float)$lat, (float)$lng];
    }
}
