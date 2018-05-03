<?php

namespace Atharva\Imageupload\Model\ResourceModel\Image;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

    protected $_idFieldName = 'image_id';

    protected function _construct()
    {
        $this->_init('Atharva\Imageupload\Model\Image', 'Atharva\Imageupload\Model\ResourceModel\Image');
    }
}