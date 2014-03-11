<?php
namespace Shorty\FirstBundle\Entity;

class ShortenedUrl {
    
    protected $nouvelle_url;
    protected $ancienne_url;

    /**
     * @param mixed $ancienne_url
     */
    public function setAncienneUrl($ancienne_url)
    {
        $this->ancienne_url = $ancienne_url;
    }

    /**
     * @return mixed
     */
    public function getAncienneUrl()
    {
        return $this->ancienne_url;
    }

    /**
     * @param mixed $nouvelle_url
     */
    public function setNouvelleUrl($nouvelle_url)
    {
        $this->nouvelle_url = $nouvelle_url;
    }

    /**
     * @return mixed
     */
    public function getNouvelleUrl()
    {
        return $this->nouvelle_url;
    }
    

}
