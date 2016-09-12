<?php

/**
 * Generate options for media storage selection
 */
namespace MediaStorage\Web\Model\Config\Source\Storage\Media;

class MediaStorage extends \Magento\MediaStorage\Model\Config\Source\Storage\Media\Storage
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $data = parent::toOptionArray();
        $data[] = [
            'value' => \MediaStorage\S3\Helper\Data::STORAGE_MEDIA_S3,
            'label' => __('Amazon S3'),
        ];

        return $data;
    }
}
