<?php namespace Vinelab\Cdn\Providers\Contracts;

/**
 * @author Mahmoud Zalt <mahmoud@vinelab.com>
 */

interface ProviderInterface{

    public function init($configurations);

    public function upload($assets);

    public function urlGenerator($path);

    public function getUrl();

    public function getBucket();

    public function setS3Client($s3_client);

    public function setBatchBuilder($batch);

} 
