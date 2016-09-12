<?php
namespace MediaStorage\S3\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    private $useS3 = null;

    const STORAGE_MEDIA_S3 = 2;

    /**
     * Check if S3 is enabled as our file storage backend.
     *
     * @return bool
     */
    public function checkS3Usage()
    {
        if (is_null($this->useS3)) {
            $currentStorage = (int)$this->scopeConfig->getValue(Storage::XML_PATH_STORAGE_MEDIA);
            $this->useS3 = $currentStorage == self::STORAGE_MEDIA_S3;
        }
        return $this->useS3;
    }

    public function getAccessKey()
    {
        return $this->scopeConfig->getValue('media_storage/general_s3/access_key');
    }

    public function getSecretKey()
    {
        return $this->scopeConfig->getValue('media_storage/general_s3/secret_key');
    }

    public function getRegion()
    {
        return $this->scopeConfig->getValue('media_storage/general_s3/region');
    }

    public function getBucket()
    {
        return $this->scopeConfig->getValue('media_storage/general_s3/bucket');
    }
}
