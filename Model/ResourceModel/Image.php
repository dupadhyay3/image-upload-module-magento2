<?php

namespace Atharva\Imageupload\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Image extends AbstractDb {

    protected function _construct() {
        $this->_init('atharva_imageupload', 'image_id');
    }

}