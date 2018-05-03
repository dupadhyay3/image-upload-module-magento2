<?php
namespace Atharva\Imageupload\Block;
use Magento\Framework\View\Element\Template;

class Slider extends \Magento\Framework\View\Element\Template
{
    private $_slider;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Atharva\Imageupload\Model\Image $slider,
        \Magento\Framework\App\ResourceConnection $resource,
        array $data = []
    ) {
        $this->_slider = $slider;
        $this->_resource = $resource;

        parent::__construct(
            $context,
            $data
        );
    }

    public function getSlider()
    {
        $collection = $this->_slider->getCollection();
        return $collection;
    }
}
