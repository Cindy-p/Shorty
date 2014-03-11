<?php

namespace Shorty\FirstBundle\Services;


class Md5 implements Hash{
    
    public function hash($str){
        return md5($str);
    }
    
}
