<?php
namespace Shorty\FirstBundle\Entity;

class Url {
    
    protected $url;
    
    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }
}
