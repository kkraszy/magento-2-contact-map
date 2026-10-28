<?php

declare(strict_types=1);

namespace Kkkonrad\ContactMap\Block\Adminhtml;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * Map in the config form that writes the clicked point into the latitude and
 * longitude fields. Stores nothing itself - it renders no input.
 */
class Picker extends Field
{
    protected $_template = 'Kkkonrad_ContactMap::picker.phtml';

    public function render(AbstractElement $element)
    {
        // No "Use Default" checkbox: there is no value of its own to inherit
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }

    protected function _getElementHtml(AbstractElement $element)
    {
        return $this->_toHtml();
    }
}
