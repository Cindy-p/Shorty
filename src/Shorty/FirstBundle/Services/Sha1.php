<?php

namespace Shorty\FirstBundle\Services;

class Sha1 implements Hash{
    
    public function hash($str){
     
        return sha1($str);
        
    }
    
}
