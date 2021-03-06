<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Search\Model\Autocomplete;

class Item extends \Magento\Framework\Object implements ItemInterface
{
    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->_getData('title');
    }
}
