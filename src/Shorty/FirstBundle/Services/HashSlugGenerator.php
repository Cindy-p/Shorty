<?php

namespace Shorty\FirstBundle\Services;

class HashSlugGenerator implements SlugGeneratorInterface {

    protected $sha1;


    public function __construct(Hash $sha1) {
        $this->sha1 = $sha1;
    }

    public function generateSlug($string) {
        return $this->sha1->hash($string);
    }
    
    public function getSha1() {
        return $this->sha1;
    }

    public function setSha1($sha1) {
        $this->sha1 = $sha1;
    }


    
}
